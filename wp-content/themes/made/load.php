<?php
/*
// Scan all the photos in the folder
$files = glob('assets/photos/large/*.jpg');

$data = array();
foreach($files as $f){
	$data[] = array(
		'thumb' => str_replace('large', 'thumbs', $f),
		'large' => $f
	);
}

// Duplicate the elements a few times, so that we have what to paginate in the demo.
// You most certainly wouldn't want to do this with real photos.
$data = array_merge($data, $data);
$data = array_merge($data, $data);
$data = array_merge($data, $data);

header('Content-type: application/json');

echo json_encode(array(
	'data' => $data,
));
*/ $my_query = new WP_Query(array('post_type' => 'ligne1', 'orderby' => 'title', 'order'=>'ASC', 'posts_per_page' => '4')); 			<?php while ($my_query->have_posts()) : $my_query->the_post();?>					
						<img src='<?php the_field('ligne1')?>'

		 endwhile; ?>
