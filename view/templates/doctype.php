<!DOCTYPE html>
<html>
<head>
	<title><?php echo $vars['page']['title'];?></title>
	<meta charset="utf-8">	<link rel="shortcut icon" href="http://www.mesclics.fr/images/favicon.ico?v=1.0">
    <link rel="icon" sizes="16x16 32x32 64x64" href="http://www.mesclics.fr/images/favicon.ico?v=1.0">
    <link rel="icon" type="image/png" sizes="196x196" href="http://www.mesclics.fr/images/favicon-192.png?v=1.0">
    <link rel="icon" type="image/png" sizes="160x160" href="http://www.mesclics.fr/images/favicon-160.png?v=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.mesclics.fr/images/favicon-96.png?v=1.0">
    <link rel="icon" type="image/png" sizes="64x64" href="http://www.mesclics.fr/images/favicon-64.png?v=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="http://www.mesclics.fr/images/favicon-32.png?v=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="http://www.mesclics.fr/images/favicon-16.png?v=1.0">
    <link rel="apple-touch-icon" href="http://www.mesclics.fr/images/favicon-57.png?v=1.0">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.mesclics.fr/images/favicon-114.png?v=1.0">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.mesclics.fr/images/favicon-72.png?v=1.0">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.mesclics.fr/images/favicon-144.png?v=1.0">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.mesclics.fr/images/favicon-60.png?v=1.0">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.mesclics.fr/images/favicon-120.png?v=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.mesclics.fr/images/favicon-76.png?v=1.0">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.mesclics.fr/images/favicon-152.png?v=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.mesclics.fr/images/favicon-180.png?v=1.0">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="http://www.mesclics.fr/images/favicon-144.png?v=1.0">
    <meta name="msapplication-config" content="http://www.mesclics.fr/images/browserconfig.xml">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900|Open+Sans:300,400,600,700,800" rel="stylesheet">
	<?php
       foreach($vars['page']['styles'] AS $style){
        if($style['folder']){
            echo '<link rel="stylesheet" media="'.$style['media'].'" href="/./view/styles/'.$style['folder'].'/'.$style['file'].'"type="text/css">'."\r\n";
        } else{
        echo '<link rel="stylesheet" media="'.$style['media'].'" href="/./view/styles/'.$style['file'].'"type="text/css">'."\r\n";
        }
    }
    ?>
    
    <meta description="<?php echo $vars['page']['description'];?>">	
</head>
<body>