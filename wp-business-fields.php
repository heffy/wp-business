<?php 

if (function_exists('add_theme_support')) {

 add_theme_support('post-thumbnails');

 set_post_thumbnail_size( 220, 150 );

 add_image_size('storefront', 620, 270, true);

}



add_action("admin_init", "business_manager_add_meta"); 

function business_manager_add_meta(){ 

 add_meta_box("business-meta", "Business Details", "business_manager_meta_options", "business",  "normal", "high"); 

}


function business_manager_meta_options(){ 

 global $post; 

 if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
 	 return $post_id;

	 $custom = get_post_custom($post->ID); 

	 $business_name = $custom["business_name"][0];

	 $building_no = $custom["building_no"][0];

	 $street_address = $custom["street_address"][0];

	 $town_address= $custom["town_address"][0];

	 $postcode= $custom["postcode"][0];

	 $phone = $custom["phone"][0]; 

	 $website = $custom["website"][0]; 

	 $facebook_url = $custom["facebook_url"][0]; 

	 $google_url = $custom["google_url"][0]; 

	 $twitter_url = $custom["twitter_url"][0]; 

	 $trip_advisor_url = $custom["trip_advisor_url"][0]; 

	 $instagram_url = $custom["instagram_url"][0]; 
?> 

<style type="text/css">


	.business_manager_extras div {

	 margin: 10px;

	}

	.business_manager_extras div label {

	 width: 100px;

	 float: left;

	}

</style>

<div class="business_manager_extras">

	<?php
		 $website= ($website == "") ? "http://" : $website;
		 $facebook_url = ($facebook_url == "") ? "http://" : $facebook_url;
		 $twitter_url = ($twitter_url == "") ? "http://" : $twitter_url;
		 $google_url = ($google_url == "") ? "http://" :  $google_url;
		 $instagram_url = ($instagram_url == "") ? "http://" :  $instagram_url;
		 $trip_advisor_url= ($trip_advisor_url== "") ? "http://" :  $trip_advisor_url;
		 $town_address = ($town_address == "") ? "Penzance" :  $town_address;
		 $phone = ($phone == "") ? "01736" :  $phone;
	?>
 <div>
 	<label>Building No:</label>
 	<input name="building_no" value="<?php echo $building_no; ?>" />
 </div>

 <div>
 	<label>Street Address:</label>
 	<input name="street_address" value="<?php echo $street_address; ?>" required/>
 </div>

 <div>
 	<label>Town Address:</label>
 	<input name="town_address" value="<?php echo $town_address; ?>"  />
 </div>

 <div>
 	<label>Postcode:</label>
 	<input name="postcode" value="<?php echo $postcode; ?>" placeholder='TR18 2DG'/>
 </div>


  <div>
 	<label>Phone Number:</label>
 	<input name="phone" value="<?php echo $phone; ?>" />
 </div>

 <div>
 	<label>WebAddress:</label>
 	<input name="website" value="<?php echo $website; ?>" />
 </div>

 <div>
 	<label>Facebook URL:</label>
 	<input name="facebook_url" value="<?php echo $facebook_url; ?>" />
 </div>

 <div>
 	<label>Twitter URL:</label>
 	<input name="twitter_url" value="<?php echo $twitter_url; ?>" />
 </div>

 <div>
 	<label>Google URL:</label>
 	<input name="google_url" value="<?php echo $google_url; ?>" />
 </div>

 <div>
 	<label>Instagram URL:</label>
 	<input name="instagram_url" value="<?php echo $instagram_url; ?>" />
 </div>

 <div>
 	<label>Trip Advisor URL:</label>
 	<input name="trip_advisor_url" value="<?php echo $trip_advisor_url; ?>" />
 </div>


</div> 

<?php 

 }
add_action('save_post', 'business_manager_save_extras');

function business_manager_save_extras(){ 

 global $post;

 if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ 

 		//if you remove this the sky will fall on your head.
  		return $post_id;
	 }else{


			 update_post_meta($post->ID, "building_no", $_POST["building_no"]);

			 update_post_meta($post->ID, "street_address", $_POST["street_address"]);

			 update_post_meta($post->ID, "town_address", $_POST["town_address"]);

			 update_post_meta($post->ID, "postcode", $_POST["postcode"]); 

			 update_post_meta($post->ID, "phone", $_POST["phone"]);

			 update_post_meta($post->ID, "website", $_POST["website"]);

			 update_post_meta($post->ID, "facebook_url", $_POST["facebook_url"]);

			 update_post_meta($post->ID, "twitter_url", $_POST["twitter_url"]);

			 update_post_meta($post->ID, "google_url", $_POST["google_url"]);

			 update_post_meta($post->ID, "instagram_url", $_POST["instagram_url"]);

			 update_post_meta($post->ID, "trip_advisor_url", $_POST["trip_advisor_url"]);

 } 

}

	




?>



