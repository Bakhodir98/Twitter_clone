<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();

        $params['like'] = $params['like'] === 'true' ? true : false;
        $validator = Validator::make($params, [
            'user_id' => 'required',
            'post_id' => 'required',
            'like' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'status' => 400,
                'error' => $validator->errors()
            ], 400);
        }
        $like = Like::where('post_id', $params['post_id'])->where('user_id', $params['user_id'])->first();
        if ($like) {
            if ($like->like == $params['like'])
                $this->destroy($like);
            else
                $this->update($like, $params['like']);
        } else {
            if (Like::create($params)) {
                return response()->json([
                    'success' => true,
                    'status' => 200,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'status' => 400,
                ], 400);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Like $like, $isLike)
    {
        $like->like = $isLike;
        if ($like->update())
            return response()->json([
                'success' => true,
                'status' => 200,
            ], 200);
        else
            return response()->json([
                'success' => false,
                'status' => 400,
            ], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        if ($like->delete())
            return response()->json([
                'success' => true,
                'status' => 200,
            ], 200);
        else
            return response()->json([
                'success' => false,
                'status' => 400,
            ], 400);
    }
}