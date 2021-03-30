<?php
/*
Template Name: About
*/
get_header();?>
<?php 
  $main_heading = get_field('main_heading');
  $banner_title = get_field('banner_title');
  $banner_description = get_field('banner_description');
  $banner_image = get_field('banner_image');
  $banner_detail_description = get_field('banner_detail_description');
  $products_and_services_title = get_field('products_and_services_title');
  $products_and_services = get_field('products_and_services');
  $find_more_text = get_field('find_more_text',CONST_SITE_INFORMATION_PAGE_ID);
  $button_arrow_icon = get_field('button_arrow_icon',CONST_SITE_INFORMATION_PAGE_ID);
?>
<section class="sec-padded--head">
    <div class="container container-expanded">
        <div class="sec-about-agb">
            <div class="about-agb-wrapper">
                <div class="about-agb-content">
                    <div class="item-txt-blue">
                        <?php
				            if (!empty($main_heading))
				            {
				              	?>
                        			<span><?php echo $main_heading; ?></span>
                    			<?php
				            }
			          	?>
                    </div>
                    <div class="style-content">
                    	<?php
				            if (!empty($banner_title))
				            {
				              	?>
                        			<h1 class="h2"><?php echo $banner_title; ?></h1>
                    			<?php
				            }
				            if (!empty($banner_description))
				            {
			          			?>
                        			<p><?php echo $banner_description; ?></p>
                    			<?php
				            }
			            ?>
                    </div>
                </div>
                <div class="about-agb-img">
                	<?php
			            if (!empty($banner_image))
			            {
			              	?>
                    			<img src="<?php echo $banner_image; ?>">
                			<?php
			            }
		            ?>
                </div>
            </div>
        </div>
    </div>
</section>
        
<section class="sec-padded">
<div class="sec-agb-details">
    <div class="container container-expanded">
        <div class="agb-details-wrapper">
            <div class="agb-details-content">
                <?php
		            if (!empty($banner_detail_description))
		            {
		            	echo $banner_detail_description;
		            }
              	?>
            </div>
        </div>
    </div>
</div>
</section>
   
<section class="sec-padded">
    <div class="container container-expanded">
        <div class="sec-cards">
        	<?php
	            if (!empty($products_and_services_title))
	            {
	              	?>
            			<h2 class="h2"><?php echo $products_and_services_title; ?></h2>
        			<?php
	            }
            ?>
            <div class="sec-cards-wrapper">
            	<?php
            		if (!empty($products_and_services))
            		{
            			foreach ($products_and_services as $key => $value)
            			{
        				    $product_or_service_image = $value['product_or_service_image'];
						    $product_or_service_title = $value['product_or_service_title'];
						    $product_or_service_description = $value['product_or_service_description'];
						    $product_or_service_url = $value['product_or_service_url'];
	            			?>
	            				<div class="about-agb-card">
				                    <div class="card-img">
				                    	<?php
								            if (!empty($product_or_service_image))
								            {
								              	?>
				                        			<img src="<?php echo $product_or_service_image; ?>">
			                        			<?php
								            }
							            ?>
				                    </div>
				                    <div class="card-content">
				                    	<?php
								            if (!empty($product_or_service_title))
								            {
								              	?>
				                        			<h2 class="h3"><?php echo $product_or_service_title; ?></h2>
		                        				<?php
								            }
								            if (!empty($product_or_service_description))
								            {
								              	?>
				                        			<p data-trim="182"><?php echo $product_or_service_description;?></p>
			                        			<?php
								            }
							            ?>
				                        <a href="#" class="btn btn-primary"><?php echo $find_more_text;?><img src="<?php echo $button_arrow_icon; ?>" alt=">" class="js-tosvg tosvg"></a>
				                    </div>
				                </div>
	            			<?php
            			}
            		}
            	?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>