<?php get_header(); ?>

<html>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" content="width=device-width">

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen" />

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" media="screen" />

        <?php wp_head(); ?>

    </head>

    <body>

    <?php
    while (have_posts()) : the_post(); 
    $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

    <div  class="etudiants" style="background:url(<?php echo $featuredImage[0]; ?>) no-repeat;
     height:<?php echo $featuredImage[2]; ?>; 
     width:<?php echo $featuredImage[1]; ?>
     no-repeat no-repeat center center fixed; 
     -webkit-background-size : cover ; 
    -moz-background-size : cover ; 
    -o-background-size : cover ; 
    background-size : cover ;">
      <?php the_content(); ?>
    </div>

<?php endwhile; wp_reset_query(); ?>



<?php get_footer(); ?>