<?php
          $the_query = new WP_Query(array(
           'meta_key' => 'rest_type',
		   'meta_value' => '���-���������',
		   'post_type' =>'city',
           'posts_per_page' => 12,
		   'post_parent' => 1,
         ));
         while ( $the_query->have_posts() ) :
         $the_query->the_post();
         ?>
		  <?//����� ��� ����?>
		 <?php endwhile; wp_reset_postdata(); ?>
		 
		 
		 <?$the_query = new WP_Query( 'meta_key=rest_type&meta_value=���-���������&showposts=12&post_parent=1&post_type=city' );?>
				<?while ( $the_query->have_posts() ) {
	$the_query->the_post();?>
	 <?//����� ��� ����?>
	<?php } ?>
	
	<?php
	$category = get_post_meta($post->ID, 'rest_type', true);
          $the_query = new WP_Query(array(
           'category_name' => $category,
		   'post_type' =>'city',
           'posts_per_page' => 12,
		   'post_parent' => 1,
         ));
         while ( $the_query->have_posts() ) :
         $the_query->the_post();
         ?>
		  <?//����� ��� ����?>
		   <?php endwhile; wp_reset_postdata(); ?>
		   <?//dfsdfsdf?>
		   