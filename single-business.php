<?php get_header(); ?>

<div id="main" class="group">

 <div id="directory" class="left-col">

 <?php if (have_posts()) : while (have_posts()) : 

 		the_post(); ?>

<?php 

 $custom = get_post_custom($post->ID);

 $website = $custom["website"][0]; 

 $town_address = $custom["town_address"][0]; 

 $logo = get_the_post_thumbnail($post->ID);

 $building_no = $custom["building_no"][0];

 $street_address = $custom["street_address"][0];

 $postcode= $custom["postcode"][0];

 $phone = $custom["phone"][0]; 

 $facebook_url = $custom["facebook_url"][0]; 

 $google_url = $custom["google_url"][0]; 

 $twitter_url = $custom["twitter_url"][0]; 

 $trip_advisor_url = $custom["trip_advisor_url"][0]; 

 $instagram_url = $custom["instagram_url"][0]; 

?>


<div class="business group">

 <div class="info">

	 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	 <p><?php the_excerpt(); ?></p>

     <p><?php echo $building_no ?></p>

     <p><?php echo $town_address ?></p>

     <p><?php echo $street_address ?></p>

	 <p><?php echo $website ?></p>
	 
	 <p><?php echo $facebook_url ?></p>

	 <p><?php echo $google_url ?></p>

	 <p><?php echo $twitter_url ?></p>

	 <p><?php echo $trip_advisor_url ?></p>

	 <p><?php echo $instagram_url ?></p>

	 <p class="contact"><a href="<?php print $website; ?>">Site</a> / <a href="mailto:<?php print $email; ?>">Contact</a></p>

 </div>

 <?php print $logo; ?>

</div>

<?php endwhile; else: ?>

		<p><?php _e('No posts were found. Sorry!'); ?></p>

<?php endif; ?>

<div class="navi">

 <div class="right">

 
 		<p>   <?php previous_posts_link('Previous'); ?>  <?php next_posts_link('Next'); ?>         </p>

 </div>

</div>

</div>

 <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>