import React from 'react';
// import './Widgets.css';
import SearchIcon from '@material-ui/icons/Search';
import {
    TwitterTimelineEmbed,
    TwitterShareButton,
    TwitterTweetEmbed
} from 'react-twitter-embed';
function Widgets() {
    return (
        <div className="widgets">
            <div className="widgets__input">
                <SearchIcon className="widgets__searchIcon" />
                <input placeholder="Search Twitter" type="text" />
            </div>
            <div className="widgets__widgetContainer">
                <h2>Что происходит? </h2>
                <TwitterTweetEmbed tweetId={'1298542493563314176'} />
                <TwitterTimelineEmbed sourceType="profile" screenName="Bakhodi19846795" options={{ height: 400 }} />
                <TwitterShareButton url={"http://bostonbarista.uz"} options={{ text: "#reactjs is awesome", via: "Bakhodi19846795" }} />
            </div>
        </div>
    )
}

export default Widgets
