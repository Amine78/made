<?php get_header(); ?>

	<div class="ligneune">
		<?php $my_query = new WP_Query(array('post_type' => 'addarticle', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page' => '20')); ?>
			<div class="container-fluid">
				<div class="row">
		<?php while ($my_query->have_posts()) : $my_query->the_post();?>
					<div class="col-md-3">
						<h1><?php the_field('addtext') ?></h1>
						<img src='<?php the_field('addimage') ?>'>
					</div>
		<?php endwhile; ?>
				</div>
			</div>
	</div>

<?php get_footer(); ?>