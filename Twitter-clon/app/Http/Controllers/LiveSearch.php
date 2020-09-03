<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class LiveSearch extends Controller
{
    function index()
    {
        return view('live_search');
    }
    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = User::where('firstname', 'like', '%' . $query . '%')
                    ->orWhere('lastname', 'like', '%' . $query . '%')
                    ->orWhere('username', 'like', '%' . $query . '%')
                    ->orWhere('date_of_birth', 'like', '%' . $query . '%')
                    ->orWhere('email', 'like', '%' . $query . '%')
                    ->orderBy('id', 'desc')->get();
            } else {
                $data = '';
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $image_url = Storage::url($row->image);
                    $user_profile_url = route('user.show', $row);
                    $output .= '
                    <div class="col-sm-12">
                    <div class="user__comment">
                    <img src="' . $image_url . '" class="image__rounded">
                    <a href="' . $user_profile_url . '"
                    <span class="post__firstname">' . $row->firstname . '</span>
                    <span class="glyphicon glyphicon-ok"></span>
                    <span class="post__badge">' . $row->username . '
                    </a>
                    </div>
                    </div>
                    ';
                }
            } else {
                $output = '
                <div class="col-sm-12">Пользователь не найден</div>';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row,
            );
            echo json_encode($data);
        }
    }
}