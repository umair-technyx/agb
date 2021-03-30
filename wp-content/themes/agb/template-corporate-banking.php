<?php
/*
Template Name: Corporate Banking
*/
get_header();?>

<section class="sec-padded--head">
    <div class="sec-corporate-agb">
        <div class="container container-expanded">
            <div class="post-agb-wrapper">
                <div class="post-agb-content">
            
                    
                    <div class="style-content">
                    	<?php 
						    $heading = get_field('heading');
						    $description = get_field('description');
						    if(!empty($heading)){
							    ?>
							    	<h1 class="h2"><?php echo $heading; ?></h1>
							    <?php
						    }
						   	if(!empty($description))
						   	{
							    ?>
							    	<p><?php echo $description; ?></p>
							    <?php
						    }

						 ?>
                        
                       
                    </div>
                </div>
                <?php 
				    $banner_image = get_field('banner_image');
				    if(!empty($banner_image))
				    {
					    ?>
					    	<div class="post-agb-img">
			                    <img src="<?php echo $banner_image; ?>">
			                </div>
					    <?php
				    }
				 ?>
                
            </div>
        </div>
    </div>
</section>



<section class="sec-corporate">

	<?php

		        		$corporate_listing = get_field('corporate_listing');

						if (!empty($corporate_listing)) 

						{
							foreach ($corporate_listing as $key => $row) 

							{

								$title = $row['title']; 

								$description = $row['description']; 
								$thumbnail = $row['thumbnail']; 
								$button_text = $row['button_text']; 
								$button_url = $row['button_url']; 
								$style = $row['style']; 

								$box_class = '';
								$style_class = '';
								$title_class  = '';
								if ($style == 'style_2') 
								{
									$box_class = 'box--grey';
									$style_class = 'sty1';
									$title_class = '';
								}
								else{
									$title_class = 'txt-white';
								}
								?>
									 <div class="sec-content-box sec-content-box--corporate <?php echo $box_class ?>">
								        <div class="container container-expanded">
								            <div class="content-box">
								                <div class="content-box-wrapper <?php echo $style_class ?>">
								                    <div class="content-box-content">
								                        <h2 class="h2 <?php echo $title_class ?>"><?php echo $title ?></h2>
								                        <p><?php echo $description ?></p>
								                        <a href="<?php echo $button_url ?>" class="btn btn-primary"><?php echo $button_text ?> <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"></a>
								                    </div>
								                    <div class="content-box-img sty1">
								                        <img src="<?php echo $thumbnail ?>">
								                    </div>
								                </div>
								            </div>
								        </div>
								    </div>

								<?php

							}

						}

					?>

</section>

<?php get_footer(); ?>