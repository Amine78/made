<?php get_header(); ?>

	<div class="ligneune">
		<?php $my_query = new WP_Query(array('post_type' => 'ligne1', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page' => '4')); ?>
			<div class="container-fluid">
				<div class="row">
		<?php while ($my_query->have_posts()) : $my_query->the_post();?>
					<div class="col-md-3">
						<h1><?php the_field('ligne1') ?></h1>
						<img src='<?php the_field('image') ?>'>
					</div>
		<?php endwhile; ?>
				</div>
			</div>
	</div>    

	<div class="lignedeux">
	</div>    

	<div class="lignetrois">
	</div>    

	<div class="lignequatre">
	</div>    

	<div class="lignecinq">
	</div>

<?php get_footer(); ?>