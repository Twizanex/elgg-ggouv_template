/* ***************************************
	MISC
*************************************** */
#login-dropdown {
	position: fixed;
	top:12px;
	right:25px;
	z-index: 100;
}

#login-dropdown .elgg-button-dropdown {
	background: white;
	border: medium none;
	color: black;
	font-size: 1.2em;
	line-height: 1em;
	padding: 4px 6px 2px;
}
#login-dropdown .elgg-button-dropdown:hover {
	background: #4690D6;
	border: medium none;
	color: white;
	font-size: 1.2em;
}
#login-dropdown .elgg-button-dropdown:after {
	padding-left: 5px;
}
#login-dropdown .elgg-button-dropdown.elgg-state-active:hover, #login-dropdown .elgg-button-dropdown.elgg-state-active:focus {
	box-shadow: none;
	text-shadow: none;
}
#login-dropdown .elgg-button-dropdown.elgg-state-active {
	background: #4690D6;
	color: white;
}

/* ***************************************
	AVATAR UPLOADING & CROPPING
*************************************** */

#current-user-avatar {
	border-right:1px solid #ccc;
}
#avatar-croppingtool {
	border-top: 1px solid #ccc;
}
#user-avatar-cropper {
	float: left;
}
#user-avatar-preview {
	float: left;
	position: relative;
	overflow: hidden;
	width: 100px;
	height: 100px;
}

/* ***************************************
	FRIENDS COLLECTIONS
*************************************** */

#friends_collections_accordian li {
	color: #666;
}
#friends_collections_accordian li h2 {
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	
	background: #4690D6;
	color: white;
	cursor: pointer;
	font-size: 1.2em;
	margin: 10px 0;
	padding: 4px 2px 4px 6px;
}
#friends_collections_accordian li h2:hover {
	background-color: #333;
}
#friends_collections_accordian .friends_collections_controls {
	float: right;
	font-size: 70%;
}
#friends_collections_accordian .friends-picker-main-wrapper {
	background: none repeat scroll 0 0 white;
	display: none;
	padding: 0;
}
