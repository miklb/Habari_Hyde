<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
  <meta charset="<?php echo $charset; ?>">
  <link href="http://gmpg.org/xfn/11" rel="profile">

  <title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
  <meta name="title" content="<?php Options::out( 'title' ) ?>">
  <meta name="description" content="<?php Options::out( 'tagline' ) ?>">
  <meta name="author" content="<?php if($request->display_entry && isset($post)) { echo "{post->author->displayname} - "; } ?><?php Options::out( 'title' ) ?>">
  
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/touch-icon-144-precomposed.png">
  <link rel="shortcut icon" href="<?php echo $theme->get_url; ?>/assets/img/favicon.png">
  
  <?php echo $theme->header(); ?>
  
</head>
<body class="<?php echo $theme->body_class(); ?>">
  <header class="masthead">
      <div class="masthead-inner">
        <h1><?php Options::out( 'title' ); ?></h1>
        <p class="lead"><?php Options::out( 'tagline' ); ?></p>

        <div class="colophon">
          <ul class="colophon-links">
            <li>
              <a href="https://github.com/miklb/Habari_Hyde/archive/v1.0.zip">Download</a>
            </li>
            <li>
              <a href="https://github.com/miklb/Habari_Hyde">GitHub project</a>
            </li>
            <li>Currently v1.0</li>
          </ul>
          <p>&copy; <?php echo date ('Y'); ?>. All rights reserved.</p>
        </div>
      </div>
    </header>