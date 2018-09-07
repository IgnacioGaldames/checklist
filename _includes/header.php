<!DOCTYPE html>
<html lang="es" >
<head>
<?php 
  if ($google_tag_manager_id) {
    include_once(ROOT ."_includes/header/google_tag_manager.php"); 
  }
?>
  <title><?php echo $titulo; ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="title" content="<?php echo $titulo; ?>">

  <?php
  if ($facebook_share == true) {
    include_once(ROOT ."_includes/header/facebook.php"); 
  }
  if ($twitter_share == true) {
    include_once(ROOT ."_includes/header/twitter.php"); 
  }
    include_once(ROOT ."_includes/header/seo.php");
  if ($web_app == true) {
    include_once(ROOT ."_includes/header/web-app.php"); 
    if ($icon_ios == true) {
      include_once(ROOT ."_includes/header/icon-ios.php");
    }
    if ($icon_android == true) {
      include_once(ROOT ."_includes/header/icon-android.php");
    }
    if ($icon_opera == true) {
      include_once(ROOT ."_includes/header/icon-opera.php");
    }
    if ($icon_windows == true) {
      include_once(ROOT ."_includes/header/icon-windows.php");
    }
  }
    include_once(ROOT ."_includes/header/fonts.php"); 
    include_once(ROOT ."_includes/header/css.php"); 
  ?>
  <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php include_once(ROOT ."_includes/header/google_analytics.php"); ?>
</head>
<body class="minisitio">
<?php $enviado = $_GET['mensaje']; ?>
<?php 
  if ($enviado) {
    include_once(ROOT ."_includes/header/google_conversion.php"); 
  }
?>
<?php include_once(ROOT ."_includes/header/google_tag_manager_noscript.php"); ?>
<?php 
  if ($topband == true) { 
    include_once(ROOT ."_includes/header/topbar.php"); 
  }
?>
<?php 
 if ($navbar == true) {
    include_once(ROOT ."_includes/header/navbar.php"); 
  }
?>