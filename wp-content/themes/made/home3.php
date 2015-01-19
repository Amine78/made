<?php get_header(); ?>

<<<<<<< HEAD
	<div class="ligneune">
		<?php $my_query = new WP_Query(array('post_type' => 'ligne1', 'orderby' => 'title', 'order'=>'ASC', 'posts_per_page' => '4')); ?>
			<div class="container-fluid">
				<div class="row">
			<?php while ($my_query->have_posts()) : $my_query->the_post();?>
							<div class="col-md-3">
					</div>
					<div class="col-md-3">
						<img src='<?php the_field('ligne1')?>'>
					</div>

			<?php endwhile; ?>
				</div>
			</div>
	</div>    
=======
	<?php $my_query = new WP_Query(array('post_type' => 'addarticle', 'orderby' => 'date', 'order'=>'DESC', 'posts_per_page' => '5')); ?>
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
>>>>>>> 6d559b31740648199ec46ad6d450c157905ddedb



<?php get_footer(); ?>