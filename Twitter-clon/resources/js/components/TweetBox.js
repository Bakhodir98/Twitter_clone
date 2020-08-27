import React from 'react';
// import "./TweetBox.css";
import { Avatar, Button } from "@material-ui/core";

function TweetBox() {
    return (
        <div className="tweetBox">
            <form>
                <div className="tweetBox__input">
                    <Avatar src="https://i.ytimg.com/vi/AHbpLXJL6EQ/hqdefault.jpg" />
                    <input placeholder="Что нового?" type="text"></input>
                </div>
                <input className="tweetBox__imageInput"
                    placeholder="Введите url рисунка" type="text"></input>

                <Button className="tweerBox_tweetButton">Tweet</Button>
            </form>
        </div>
    )
}

export default TweetBox
