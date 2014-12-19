<?php get_header(); ?>

	<?php $my_query = new WP_Query(array('post_type' => 'addarticle', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page' => '15')); ?>
			<div class="container-fluid">
				<div class="slide">
					<?php while ($my_query->have_posts()) : $my_query->the_post();?>
						<div class="col-md-1 ">
							<div class="thumbnail">
			                <div class="caption">
			                	
			                    <h4></h4>
			                    
			                    <p class="imgDescription"><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>
			                    <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a></p>
			                    <a href="<?php the_field('addtext') ?>"rel="wp-video-lightbox" title="lapin crétin">Video</a>
								<a href="<?php the_field('addtext') ?>" class="html5lightbox" data-width="480" data-height="420" >Video youtube</a>	
			                </div>
							<img src='<?php the_field('addimage') ?>'>
						</div>
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
