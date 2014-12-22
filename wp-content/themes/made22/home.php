<?php get_header(); ?>

	<?php $my_query = new WP_Query(array('post_type' => 'addarticleup', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page' => '15')); ?>
	
				<div class="slide">
					<div class="container-fluid">
						<div class="row">
					<?php while ($my_query->have_posts()) : $my_query->the_post();?>
						<div class="col-md-1 imgmarg">
			                <img src='<?php the_field('addimage') ?>'>
						</div>
					<?php endwhile; ?>

					<div id="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logomid.png" alt="logo" id="logomid">
					</div>

	<?php $my_query = new WP_Query(array('post_type' => 'addarticledown', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page' => '15')); ?>

					<?php while ($my_query->have_posts()) : $my_query->the_post();?>
						<div class="col-md-1 imgmarg">
			               	<img src='<?php the_field('addimage') ?>'>
						</div>
					<?php endwhile; ?>
                    
             
                		</div>
					</div>
				</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
<script>
$(document).ready(function() {
    $('html, body, *').mousewheel(function(e, delta) {
        this.scrollLeft -= (delta * 40);
        e.preventDefault();
    });
});
$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.caption').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
</script>

<?php get_footer(); ?>
