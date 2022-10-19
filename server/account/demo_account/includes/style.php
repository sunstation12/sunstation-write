<?php
    require "color-root_setting.php";
?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    /* Color */
    /* --blue_one: #013582;
    --blue_two: #024F9C;
    --blue_three: #026DB5;
    --blue_four: #51BBE8;
    --blue_five: #DEF8FF;
    --blue_hover: #6ccbe5;
    --footer_content: #b7dae3; */
    --bgr_selection: #ffb500de;
    --text_selection: black;

    /* Size */
    --header_height: 70px;
    --header_border-bottom: 3px;
    --footer_height: 480px;
    --sunstation_height: 40px;
    --programming_height: 38px;

    /* Distance */
    --container_padding-top: 35px;
    --setting_container_padding-top: 20px;
    --footer_margin-top: 50px;
}

::selection {
    background: var(--bgr_selection);
    color: var(--text_selection);
}
::-webkit-selection {
    background: var(--bgr_selection);
    color: var(--text_selection);
}
::-moz-selection {
    background: var(--bgr_selection);
    color: var(--text_selection);
}

html {
    padding: var(--header_height) 0px 0px 0px;
    background-color: var(--blue_five);
}

header {
    background-color: var(--blue_four);
    border-bottom: var(--header_border-bottom) solid var(--blue_two);
    height: var(--header_height);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 2;
    text-align: left;
    user-select: none;
    padding: 0px 20px 0px 0px;
}

#header_navigation_icon {
    display: inline-block;
    color: var(--blue_one);
    transition: 0.2s;
}

#header_navigation_icon:hover {
    color: var(--blue_three);
}

#header_menu_icon {
    line-height: calc(var(--header_height) - var(--header_border-bottom));
    font-size: calc(var(--header_height) / 3);
    padding: 0px 20px;
}

#header_navigation_div {
    float: right;
    user-select: none;
}

#header_web_name {
    user-select: none;
    display: inline-block;
    font-size: calc(var(--header_height) / 2.5);
    font-family: 'Itim', cursive;
}

.header_items {
    display: inline-block;
    color: var(--blue_one);
    font-family: 'Dosis', sans-serif;
    font-size: calc(var(--header_height) / 3);
    line-height: calc(var(--header_height) - var(--header_border-bottom));
    padding: 0px 18px;
    text-decoration: none;
    transition: 0.2s;
    cursor: pointer;
    margin-left: -4px;
}

.header_items:hover {
    text-decoration: underline;
}

.header_items a {
    color: var(--blue_one);
    text-decoration: none;
}

#nav_layer {
    width: 20%;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 2;
    display: none;
    margin-top: var(--header_height);
    padding-top: 12px;
    background-color: transparent;
}

#nav_layer_2 {
    width: 20%;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
    display: none;
    margin-top: var(--header_height);
    margin-left: 20%;
    padding-top: 12px;
    background-color: red;
}

#navigation {
    width: 20%;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
    display: none;
    margin-top: calc(var(--header_height) - var(--header_border-bottom));
    padding-top: 12px;
    background-color: var(--blue_four);
    border-right: var(--header_border-bottom) solid var(--blue_two);
    border-top: var(--header_border-bottom) solid var(--blue_two);
}

.nav_items {
    width: 100%;
    cursor: pointer;
    font-size: 22px;
    padding: 5px 12px;
    z-index: 4;
    font-family: 'Fira Sans', sans-serif;
}

.nav_items:hover {
    background-color: var(--blue_three);
}

.nav_items a {
    text-decoration: none;
    color: var(--blue_one);
}

.nav_items:hover a {
    color: var(--blue_five);
}

@keyframes nav {
    from {
        opacity: 0;
        margin-left: -20%;
    }
    to {
        opacity: 1;
        margin-left: 0px;
    }
}

/* @keyframes nav_vi {
    from {
        opacity: 1;
        margin-left: 0px;
    }
    to {
        opacity: 0;
        margin-left: -20%;
    }
} */

#header_navigation_icon:hover #navigation {
    display: block;
    animation-name: nav;
    animation-duration: 0.5s;
}

#navigation:hover #nav_layer {
    display: none;
}

#container {
    padding: var(--container_padding-top) 50px 0px;
}

#container_setting {
    padding: var(--setting_container_padding-top) 30px 0px calc(20% + 30px);
}

footer {
    background-color: var(--blue_two);
    height: var(--footer_height);
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    padding: var(--sunstation_height) 50px var(--programming_height);
    margin-top: var(--footer_margin-top);
}

#sunstation {
    border-bottom: var(--header_border-bottom) solid var(--blue_three);
    height: var(--sunstation_height);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    user-select: none;
}

.sunstation_group {
    color: var(--blue_five);
    display: inline-block;
    line-height: calc(var(--sunstation_height) - var(--header_border-bottom));
    font-family: 'Monda', sans-serif;
    padding: 0px 15px;
    cursor: pointer;
    margin-left: -4px;
    text-decoration: none;
    font-size: calc(var(--sunstation_height) / 2.6);
}

.sunstation_group:hover {
    background-color: var(--blue_three);
}

#brand {
    color: var(--footer_content);
    font-size: 15px;
    font-family: 'Monda', sans-serif;
    margin-left: 30px;
    user-select: text;
}

#brand span {
    color: var(--blue_five);
}

.fa-trademark {
    margin-right: 5px;
}

#programming_language {
    position: absolute;
    text-align: center;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    height: var(--programming_height);
    user-select: none;
}

#programming_language_div_2 {
    position: absolute;
    text-align: center;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-around;
    height: var(--programming_height);
}

#programming_language_div_1 {
    text-align: center;
    width: 150px;
    display: flex;
    justify-content: space-between;
}

.img_programming {
    padding: calc((var(--programming_height) - (var(--programming_height) / 1.5)) / 2) 0px;
    height: calc(var(--programming_height));
    filter: brightness(0%);
    margin-bottom: -4px;
}

#programming_language_div_layer {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
    height: var(--programming_height);
}

#footer_content {
    /* background-color: #d5ffbc; */
    width: 100%;
    height: 100%;
    padding: 26px 50px 30px;
    user-select: none;
}

#website_name {
    width: 100%;
    font-size: 30px;
    margin-bottom: 6px;
    font-family: 'Itim', cursive;
}

.footer_div {
    user-select: text;
    /* background-color: burlywood; */
    color: var(--blue_five);
    display: inline-block;
    height: 100%;
    /* text-align: left; */
    overflow: hidden;
    /* padding-left: 20px; */
    width: calc(100% / 3.03);
    padding: 0px 30px;
}

#contact a {
    color: var(--footer_content);
    text-decoration: none;
    transition: 0.2s;
}

#contact a:hover {
    color: var(--blue_five);
}

.footer_title {
    font-size: 25px;
    margin-bottom: 12px;
    font-family: 'Exo 2', sans-serif;
}

.footer_add_content {
    color: var(--footer_content);
    font-family: 'Monda', sans-serif;
}

#contact_icon {
    user-select: none;
    margin-top: 6px;
    cursor: pointer;
}

.fa-tiktok {
    margin-left: 5px;
}

.fa-brands {
    transition: 0.2s;
}

.fa-brands:hover  {
    color: var(--blue_five);
}

.info_title_ans {
        color: blue;
}

#btn_edit_info,
#btn_create_post {
    position: absolute;
    right: 0;
    margin-right: 30px;
}

h1 {
    display: inline-block;
}

h3 {
    user-select: none;
    font-size: 23px;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    margin-bottom: 10px;
    margin-top: 22px;
}

textarea {
    width: 100%;
    max-width: 100%;
    font-size: 20px;
    padding: 2px 11px;
    font-family: 'Dosis', sans-serif;
}

.post_input_content {
    /* width: 50%; */
    height: 500px;
}

.post_input_describe {
    height: 100px;
}

#btn_post {
    margin-top: 20px;
}

.p_text_guide {
    color: rgb(55, 55, 55);
}

.post {
    padding: 8px 11px 12px;
    /* background-color: burlywood; */
    border-bottom: 2px solid var(--blue_three);
}

.user_name {
    font-size: 19px;
    display: inline-block;
    margin-right: 12px;
    color: var(--blue_three);
    font-family: 'Exo 2', sans-serif;
}

.post_time {
    font-size: 17px;
    display: inline-block;
    font-family: 'Roboto', sans-serif;
}

.post_name {
    color: var(--blue_one);
    margin-bottom: 5px;
    cursor: pointer;
}

.post_theme {
    display: inline-block;
    padding: 1px 4px;
    font-size: 15px;
    border-radius: 5px;
    cursor: pointer;
    user-select: none;
    font-family: 'Dosis', sans-serif;
    background-color: var(--blue_four);
}

.count_read_time {
    margin: 0px 10px 0px 14px;
    font-family: 'Monda', sans-serif;
}

.describe_shortcut {
    width: 500px;
}

.describe_shortcut p {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.post_name {
    /* display: inline-block; */
    color: var(--blue_one);
    margin-bottom: 5px;
    cursor: pointer;
}

.post_link {
    text-decoration: none;
    color: var(--blue_one);
}

.post_theme {
    display: inline-block;
    padding: 1px 4px;
    font-size: 15px;
    border-radius: 5px;
    cursor: pointer;
    user-select: none;
    font-family: 'Dosis', sans-serif;
    background-color: var(--blue_four);
}

button a {
    color: black;
    text-decoration: none;
}

.post_mode {
    width: 17px;
}

.post_label_title {
    display: inline-block;
    margin-right: 40px;
}

#thongbao {
    font-size: 25px;
    color: red;
    font-family: 'Barlow Condensed', sans-serif;
}

.indent {
    text-indent: 26px;
}

#count_post {
    color: #ff0000;
    display: inline-block;
    margin-left: 14px;
    font-size: 27px;
    font-family: 'Dosis', sans-serif;
}

.fa-pen-to-square {
    cursor: pointer;
}

#display {
    user-select: text;
    color: var(--blue_five);
    overflow: hidden;
    margin-top: 32px;
}

#display a {
    color: var(--footer_content);
    text-decoration: none;
    transition: 0.2s;
}

#display a:hover {
    color: var(--blue_five);
}

#bonus_theme {
    width: 60%;
    height: 2px;
    margin: 20px 0px 20px 0px;
    background-color: black;
}

.footer-web_link {
    color: var(--footer_content);
    text-decoration: none;
    transition: 0.2s;
}

.footer-web_link:hover {
    color: var(--blue_five);
}

.link_about_web {
    color: var(--blue_five);
}

/* Command Post Tool */
.command_post_tool {
    position: relative;
    background-color: var(--blue_four);
    height: 35px;
    padding: 0px 5px;
    border: 2px solid var(--blue_two);
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    user-select: none;
}

.cmd_post_items {
    display: inline-block;
    height: 32px;
    font-weight: 600;
    padding: 0px 5px;
    margin-left: -4px;
    cursor: pointer;
    font-size: 19px;
    transition: 0.2s;
    font-family: 'Monda', sans-serif;
    border-right: 2px solid var(--blue_two);
}

.cmd_post_items:hover {
    background-color: var(--blue_two);
}

.word_count {
    position: absolute;
    right: 0;
    top: 0;
    font-family: 'Varela Round', sans-serif;
}

.word_count_items {
    line-height: 32px;
    font-size: 17px;
    padding: 0px 8px;
    margin-left: -4px;
    display: inline-block;
}

.word_count_items:hover {
    background-color: var(--blue_three);
}

.result_count_items {
    display: inline-block;
}

#command_post_tool_help {
    background-color: var(--blue_four);
    height: 100px;
    width: 100%;
    position: absolute;
    top: 33px;
    /* left: 0; */
    right: 0;
    display: none;
    padding: 12px;
    outline: 2px solid var(--blue_two);
}

#close--cmd_add_toggle_view,
#close--command_post_tool_help {
    position: absolute;
    top: 0;
    right: 0;
    padding: 6px;
}

#close--cmd_add_toggle_view:hover,
#close--command_post_tool_help:hover {
    background-color: var(--blue_three);
}

.cmd_add_items {
    z-index: 5;
    display: none;
}

#cmd_add--toggle_view {
    background-color: var(--blue_five);
    min-height: 500px;
    width: 50%;
    position: absolute;
    top: 33px;
    right: 0;
    user-select: text;
    display: none;
    padding: 12px;
    overflow: auto;
    font-family: 'Itim', cursive;
    outline: 2px solid var(--blue_two);
}

#cmd--toggle_view {
    font-size: 24px;
    font-weight: 100;
    font-family: 'Itim', cursive;
}

.fa-eye-slash {
    font-size: 20px;
}

/* CSS Setting */
.st_box {
    user-select: none;
}

.st_color {
    cursor: pointer;
    margin-top: 10px;
    padding: 0px 8px;
    display: inline-block;
}

.st_color:hover {
    background-color: var(--blue_hover);
}

.st_color_box {
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin: 12px 5px;
    border-radius: 5px;
    display: inline-block;
    outline: 2px solid black;
    background-color: var(--blue_color);
}

#st_div_intro {
    text-align: center;
    margin: 85px 0px 85px 0px;
}

#st_home_title {
    font-size: 40px;
    margin-bottom: 9px;
    font-family: 'Signika', sans-serif;
}
</style>