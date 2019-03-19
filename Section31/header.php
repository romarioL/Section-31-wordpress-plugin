<html>
<head>
  <title><?php wp_title();?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">

  <?php wp_head(); ?>
</head>

<div class="header animated bounceInLeft">
  <h1><a href="<?php echo site_url();?>" title="<?php bloginfo('name') ?>">Section 31</a><h1>
  <?php wp_nav_menu(array('menu' => 'Navbar',
   'container' => 'div',
    'container_class' => 'menu')); ?>
</div>
<body>
