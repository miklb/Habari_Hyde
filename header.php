<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
  <meta charset="<?php echo $charset; ?>">
  <link href="http://gmpg.org/xfn/11" rel="profile">

  <title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
  <meta name="title" content="<?php Options::out( 'title' ) ?>">
  <meta name="description" content="<?php Options::out( 'tagline' ) ?>">
  <meta name="author" content="<?php if($request->display_entry && isset($post)) { echo "{$post->author->displayname} - "; } ?><?php Options::out( 'title' ) ?>">
  
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php Site::out_url( 'theme' ); ?>/assets/touch-icon-144-precomposed.png">
  <link rel="shortcut icon" href="<?php Site::out_url( 'theme' ); ?>/assets/img/favicon.png">
  
  <?php echo $theme->header(); ?>
  
</head>
<body class="<?php echo $theme->body_class(); ?>">
  <header class="masthead">
      <div class="masthead-inner">
        <h1><?php Options::out( 'title' ); ?></h1>
        <p class="lead"><?php Options::out( 'tagline' ); ?></p>

        <div class="colophon">
          <?php echo $theme->area( 'colophon' ); ?>
        </div>
      </div>
    </header>