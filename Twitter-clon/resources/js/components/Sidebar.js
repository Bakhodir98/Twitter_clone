import React from "react"
// import "./Sidebar.css";
import TwitterIcon from "@material-ui/icons/Twitter";
import SidebarOption from "./SidebarOption";
import HomeIcon from '@material-ui/icons/Home';
import SearchIcon from '@material-ui/icons/Search';
import NotificationsNoneIcon from '@material-ui/icons/NotificationsNone';
import MailOutlineIcon from '@material-ui/icons/MailOutline';
import BookmarkBorderIcon from '@material-ui/icons/BookmarkBorder';
import ListAltIcon from '@material-ui/icons/ListAlt';
import PermIdentityIcon from '@material-ui/icons/PermIdentity';
import MoreHorizIcon from '@material-ui/icons/MoreHoriz';
import { Button } from '@material-ui/core';
function Sidebar() {
    return (
        <div className="sidebar">
            {/* Twitter icon */}
            <TwitterIcon className="sidebar__twitterIcon" />
            <SidebarOption active Icon={HomeIcon} text="Главная" />
            <SidebarOption Icon={SearchIcon} text="Поиск" />
            <SidebarOption Icon={NotificationsNoneIcon} text="Уведомления" />
            <SidebarOption Icon={MailOutlineIcon} text="Сообщения" />
            <SidebarOption Icon={BookmarkBorderIcon} text="Закладки" />
            <SidebarOption Icon={ListAltIcon} text="Списки" />
            <SidebarOption Icon={PermIdentityIcon} text="Профиль" />
            <SidebarOption Icon={MoreHorizIcon} text="Еще" />
            <Button variant="outlined" className="sidebar__tweet" fullWidth>Твитнуть</Button>
            {/* SidebarOption */}
            {/* SidebarOption */}
            {/* SidebarOption */}
            {/* SidebarOption */}
            {/* SidebarOption */}
            {/* SidebarOption */}
            {/* SidebarOption */}
            {/* SidebarOption */}
            {/* SidebarOption */}

            {/* Button -> Tweet */}

        </div>
    );
}
export default Sidebar;