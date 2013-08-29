<?php
/**
 * Elgg Groups css
 *
 * @package groups
 */

?>
/*
 * localgroup icon
 */
.group-info-popup {
	/*cursor: default;
	color: #333;*/
}
.group-info-popup.small.dep2 {
	display: table-cell;
	vertical-align: middle;
}
.group-info-popup.small.dep3 {
	display: table-cell;
	vertical-align: middle;
}
.group-info-popup.tiny.dep2 , .group-info-popup.tiny.dep3 {
	line-height: 23px;
}
.group-info-popup.tiny.ville {
	line-height: 12px;
}
.group-info-popup.small.dep2 .gwf, .group-info-popup.small.ville .gwf {
	font-size: 30px;
	letter-spacing: -3px;
}
.group-info-popup.tiny.dep2 .gwf, .group-info-popup.tiny.ville .gwf {
	font-size: 20px;
	letter-spacing: -2px;
	text-indent: -1px;
}
.group-info-popup.small.dep3 .gwf {
	font-size: 24px;
	letter-spacing: -3px;
}
.group-info-popup.tiny.dep3 .gwf {
	font-size: 19px;
	letter-spacing: -3px;
	margin-left: -2px;
}
.group-info-popup.small.dep2 .cp, .group-info-popup.small.ville .cp, .group-info-popup.small.ville .cp2 {
	font-size: 18px;
	font-weight: bold;
}
.group-info-popup.tiny.dep2 .cp, .group-info-popup.tiny.ville .cp, .group-info-popup.tiny.ville .cp2 {
	font-size: 12px;
	font-weight: bold;
}
.group-info-popup.small.dep3 .cp {
	font-size: 14px;
	font-weight: bold;
}
.group-info-popup.tiny.dep3 .cp {
	font-size: 10px;
	font-weight: bold;
}
.group-info-popup.small.ville .cp2 {
	margin-left: 3px;
}
.group-info-popup.tiny.ville .cp2 {
	margin-left: 2px;
}
/* hack Chrome / Safari */
@media screen and (-webkit-min-device-pixel-ratio:0) {
	.group-info-popup.small.ville .gwf, .group-info-popup.small.ville .cp {
		line-height: 21px;
	}
}


/*
 * group profile
 */
.groups-profile-icon {
	height: 200px;
}
.groups-profile > .elgg-image {
	margin: 0 10px 10px 0;
}
.groups-stats {
	background: #F4F4F4;
	padding: 5px 0;
	clear: both;
	display: inline-block;
	width: 100%;
	/*height: 66px;*/

	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.groups-profile-fields {
	position: relative;
}
#toggle-group-description {
	background: #F4F4F4;
	bottom: 0;
	box-shadow: 0 0 4px #CCC;
	color: #555;
	font-size: 0.9em;
	padding: 2px 10px;
	position: absolute;
	width: 100%;
}
#toggle-group-description:hover {
	color: #4690D6;
	cursor: pointer;
}
#toggle-group-description:before {
	content: "▼";
	padding-right: 5px;
}
#toggle-group-description.less {
	box-shadow: none;
	position: relative;
}
#toggle-group-description.less:before {
	content: "▲";
}
#toggle-group-description:hover {
	color: #4690D6;
}
.groups-profile-fields .odd,
.groups-profile-fields .even {
	background: #f4f4f4;

	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;

	padding: 2px 4px;
	margin-bottom: 7px;
}
.groups-profile-fields .elgg-output {
	margin: 0;
}
.groups-profile-fields .interests {
	padding: 0 4px 2px;
}
.groups-profile .groups-stats li {
	vertical-align: top;
	margin: 0 10px;
	float: left;
	display: block;
	min-width: 110px;
}
.groups-profile .groups-stats li h3 > a {
	color: #333333;
}
.groups-profile .groups-stats li h3 > a:hover {
	color: #0054A7;
	text-decoration: none;
}
.groups-profile .groups-stats li.members {
	width: 195px;
	margin: 0px;
	padding-left: 5px;
}
.groups-profile .groups-stats h3 {
	color: #333;
}
.groups-profile .groups-stats .stats {
	font-size: 300%;
	font-weight: bold;
	line-height:0.9em;
	float: left;
	color: #333;
}
#groups-tools > li {
	width: 49.5%;
	min-height: 200px;
	margin-bottom: 20px;
}
#groups-tools > li:nth-child(odd) {
	margin-right: 1%;
}
.groups-widget-viewall {
	float: right;
	font-size: 85%;
}
.groups-latest-reply {
	float: right;
}
#group_activity_module .column-header {
	display: none;
}
.elgg-layout-one-sidebar #group_activity_module {
	position: relative;
	width: 100%;
}
#group_activity_module .elgg-head {
	background: none repeat scroll 0 0 #E4E4E4;
	border-radius: 3px 3px 3px 3px;
	display: block;
	height: 21px;
	margin-bottom: 10px;
	padding: 6px 5px 4px;
}
#group_activity_module .elgg-module-info > .elgg-head:hover * {
	color: #333 !important;
}
#group_activity_module .elgg-head h3:before {
	content: 'w';
	font-size: 50px;
	font-family: 'ggouv';
	margin-right: 5px;
	float: left;
	font-weight: normal;
}
.activity-head-list {
	position: absolute;
	right: 5px;
	top: 7px;
}
#group_activity_module .elgg-river {
	overflow: auto;
}
.manage-relatedgroups.aside-plus {
	color: red;
	font-size: 28px;
}

/* typogroup */
.groups-profile-iframe div, .groups-profile-iframe a {
	width: 400px;
	height: 200px;
}
.groups-profile-iframe a {
	position: absolute;
	z-index: 1;
	text-decoration: none;
	color: transparent;
	line-height: 200px;
	text-align: center;
	font-weight: bold;
	font-size: 1.2em;
}
.groups-profile-iframe a:hover {
	background-color: rgba(255, 255, 255, 0.8);
	color: #333;
}
.groups-profile-iframe iframe {
	-moz-transform: scale(0.4, 0.4);
	-webkit-transform: scale(0.4, 0.4);
	-o-transform: scale(0.4, 0.4);
	-ms-transform: scale(0.4, 0.4);
	transform: scale(0.4, 0.4);
	-moz-transform-origin: top left;
	-webkit-transform-origin: top left;
	-o-transform-origin: top left;
	-ms-transform-origin: top left;
	transform-origin: top left;
	overflow: hidden;
}

/* localgroup */
.groups-profile-map {
	z-index: 0;
	position: relative;
}
.groups-profile-map .leaflet-control-attribution {
	display: none;
}
#map {
	width: 100%;
	height: 300px;
	z-index: 0;
}
#searching.loading {
	background: url(<?php echo elgg_get_site_url(); ?>mod/elgg-brainstorm/graphics/ajax-loader.gif) no-repeat scroll 0 6px transparent;
	height: 28px;
	padding-left: 20px;
	position: absolute;
	right: 0;
	top: 0;
	width: 10px;
}
#searching.notfound {
	color: red;
	font: bold 120% Arial,Helvetica,sans-serif;
	height: 28px;
	position: absolute;
	right: 10px;
	top: 7px;
}
.leaflet-popup-content-wrapper {
	border-radius: 8px !important;
}