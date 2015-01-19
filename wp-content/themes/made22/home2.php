<?php get_header(); ?>

<?php $my_query = new WP_Query(array('post_type' => 'addarticlefirst', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '15')); ?>




<!-- Barre logo -->
<div class="block_logo">

  <img src="<?php echo get_template_directory_uri(); ?>/img/logomid.png" alt="logo" id="logomid">

</div>





<?php

[flagallery gid=X]


?>

<?php get_footer(); ?>
