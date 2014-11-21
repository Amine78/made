<?php get_header(); ?>

	<div class="ligneune">
		<?php $my_query = new WP_Query(array('post_type' => 'ligne1', 'orderby' => 'title', 'order'=>'ASC', 'posts_per_page' => '4')); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post();?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<img src='<?php the_field('image') ?>' <?php the_field('ligne1') ?>>
					</div>
					<div class="col-md-3">
						<img src='<?php the_field('image') ?>' <?php the_field('ligne1') ?>>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
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