import React, { useState } from 'react';
// import './Feed.css';
import TweetBox from './TweetBox.js';
import Post from './Post.js';
function Feed() {
    const [posts, setPosts] = useState([])
    return (
        <div className="feed">
            {/* Header */}
            <div className="feed__header">
                <h2>Home</h2>
            </div>

            {/* TweetBox */}
            <TweetBox />
            {/* Post */}
            <Post
                displayName="Bakhodir Rahmatullayev"
                username="sssasdasd"
                verified={true}
                text="YOooooo its working"
                avatar="https://i.ytimg.com/vi/AHbpLXJL6EQ/hqdefault.jpg"
                image="https://media.giphy.com/media/QWwEdgDbYjFbfOMJ3z/giphy.gif"
            />
            {/* Post */}
            <Post />

            {/* Post */}
            <Post />

            {/* Post */}
            <Post />

            {/* Post */}
            {/* Post */}

        </div>
    )
}

export default Feed
