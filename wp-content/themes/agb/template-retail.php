<?php
/*
Template Name: Retail Banking
*/
get_header();?>
<?php 
  $main_heading = get_field('main_heading');
  $accounts_and_services_title = get_field('accounts_&_services_title');
  $accounts_and_services_description = get_field('accounts_&_services_description');
  $accounts_and_services_image = get_field('accounts_&_services_image');

  $current_account_title = get_field('current_account_title');
  $current_account_description = get_field('current_account_description');
  $current_account_services = get_field('current_account_services');
  $open_current_account_text = get_field('open_current_account_text');
  $open_current_account_url = get_field('open_current_account_url');

  $saving_account_title = get_field('saving_account_title');
  $saving_account_description = get_field('saving_account_description');
  $saving_account_services = get_field('saving_account_services');
  $open_saving_account_text = get_field('open_saving_account_text');
  $open_saving_account_url = get_field('open_saving_account_url');

  $button_arrow_icon = get_field('button_arrow_icon',CONST_SITE_INFORMATION_PAGE_ID);
?>
<section class="sec-padded--head">
    <div class="sec-about-agb">
        <div class="container container-expanded">
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
				            if (!empty($accounts_and_services_title))
				            {
				              	?>
                        			<h1 class="h2"><?php echo $accounts_and_services_title; ?></h1>
                    			<?php
				            }
				            if (!empty($accounts_and_services_description))
				            {
			          			?>
                        			<p><?php echo $accounts_and_services_description; ?></p>
                    			<?php
				            }
			            ?>
                    </div>
                </div>
                <div class="about-agb-img">
                	<?php
			            if (!empty($accounts_and_services_image))
			            {
			              	?>
	                			<img src="<?php echo $accounts_and_services_image; ?>">
	            			<?php
				            }
			            ?>
                </div>
            </div>
        </div>
    </div>
</section>
        
<section class="sec-padded--bottom">
    <div class="sec-cards" id="currentaccount" href="#currentaccount" role="tab" aria-controls="currentaccount">
        <div class="container container-expanded">
            <div class="account-head">
            	<?php
		            if (!empty($current_account_title))
		            {
		              	?>
                			<h2 class="h2"><?php echo $current_account_title; ?></h2>
            			<?php
		            }
		            if (!empty($current_account_description))
		            {
	          			?>
                			<p><?php echo $current_account_description; ?></p>
            			<?php
		            }
	            ?>
            </div>
            <div class="sec-cards-wrapper">
            	<?php
		            if (!empty($current_account_services))
		            {
		              	foreach ($current_account_services as $key => $value)
		              	{
	              		  	$current_account_service_image = $value['current_account_service_image'];
						  	$current_account_service_title = $value['current_account_service_title'];
						  	$current_account_service_description = $value['current_account_service_description'];
						  	?>
				                <div class="about-agb-card">
				                    <div class="card-img">
				                    	<?php
								            if (!empty($current_account_service_image))
								            {
								            	?>
				                        			<img src="<?php echo $current_account_service_image; ?>">
			                        			<?php
		                        			}
	                        			?>
				                    </div>
				                    <div class="card-content">
				                    	<?php
								            if (!empty($current_account_service_title))
								            {
							          			?>
							                        <h2 class="h3"><?php echo $current_account_service_title; ?></h2>
						                        <?php
								            }
								            if (!empty($current_account_service_description))
								            {
							          			?>
							                        <p class="content-para"><?php echo $current_account_service_description; ?></p>
						                        <?php
								            }
							            ?>
				                    </div>
				                </div>
			                <?php
		              	}
		            }
	            ?>
            </div>
            <div class="current-account-btn">
            	<?php
		            if (!empty($open_current_account_text) && !empty($open_current_account_url))
		            {
                		?>
                			<a href="<?php echo $open_current_account_url; ?>" class="btn btn-primary"><?php echo $open_current_account_text; ?><img src="<?php echo $button_arrow_icon; ?>" alt=">" class="js-tosvg tosvg"></a>
            			<?php
            		}
            	?>
            </div>
        </div>
    </div>
</section>
        
<section class="sec-padded">
    <div class="container container-expanded">
        <div class="sec-saving-accounts" id="savingaccount" href="#savingaccount" role="tab" aria-controls="savingaccount">
            <div class="section-heading">
            	<?php
		            if (!empty($saving_account_title))
		            {
		              	?>
			                <h2 class="h2"><?php echo $saving_account_title; ?></h2>
		                <?php
		            }
		            if (!empty($saving_account_description))
		            {
	          			?>
			                <p><?php echo $saving_account_description; ?></p>
		                <?php
		            }
	            ?>
            </div>
            <div class="sec-wrapper">
            	<?php
		            if (!empty($saving_account_services))
		            {
		              	foreach ($saving_account_services as $key1 => $value1)
		              	{
	              		  	$saving_account_service_image = $value1['saving_account_service_image'];
						  	$saving_account_service_title = $value1['saving_account_service_title'];
						  	$saving_account_service_description = $value1['saving_account_service_description'];
						  	$add_class='';
						  	$color_class='';
						  	if($key1%2!=0)  
							{
								$add_class = "bg-blue";
								$color_class = "txt-white";
							}
						  	?>
			                <div class="card-grey <?php echo $add_class; ?>">
			                    <div class="card-grey-img">
			                    	<?php
							            if (!empty($saving_account_service_image))
							            {
							            	?>
			                        			<img src="<?php echo $saving_account_service_image; ?>">
		                        			<?php
							            }
						            ?>
			                    </div>
			                    <div class="card-grey-content">
			                    	<?php
							            if (!empty($saving_account_service_title))
							            {
							              	?>
						                        <h2 class="h3 <?php echo $color_class; ?>"><?php echo $saving_account_service_title; ?></h2>
					                        <?php
							            }
							            if (!empty($saving_account_service_description))
							            {
						          			?>
						                    	<p class="<?php echo $color_class; ?>"><?php echo $saving_account_service_description; ?></p>
					                    	<?php
							            }
						            ?>
			                    </div>
			                </div>
		                <?php
	              	}
	            }
            ?>
            </div>
            <div class="current-account-btn">
            	<?php
		            if (!empty($open_saving_account_text) && !empty($open_saving_account_url))
		            {
                		?>
                			<a href="<?php echo $open_saving_account_url; ?>" class="btn btn-primary"><?php echo $open_saving_account_text; ?><img src="<?php echo $button_arrow_icon; ?>" alt=">" class="js-tosvg tosvg"></a>
            			<?php
            		}
            	?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>