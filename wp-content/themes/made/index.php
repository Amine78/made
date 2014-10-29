<?php get_header(); ?>

<html>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" content="width=device-width">

        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

        <!--[if lt IE 9]>
10
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
11
        <![endif]-->

        <?php wp_head(); ?>

    </head>

    <body>

        <header class="header">

        <p>This is header section. Put your logo and other details here.</p>

    </header>

<?php get_footer(); ?>