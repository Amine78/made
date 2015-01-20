<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Made In IIM </title>

<!-- The Swipebox plugin -->
<link href="<?php bloginfo('template_directory'); ?>/assets/swipebox/swipebox.css" rel="stylesheet" />

<!-- The main CSS file -->
<link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet" />

<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>

<body>
<?php
 $my_query = new WP_Query(array('post_type' => 'ligne1', 'orderby' => 'title', 'order'=>'ASC', 'posts_per_page' => '4'));?> 			<?php while ($my_query->have_posts()) : $my_query->the_post();?>					
						<a class="swipebox show" src='<?php the_field('ligne1')?>'

	<?php	 endwhile; ?>
<div id="gallery"></div>

<!-- JavaScript Includes --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/swipebox/jquery.swipebox.min.js"></script> 
<script src="/assets/js/jquery.loadImage.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
</body>
</html>
