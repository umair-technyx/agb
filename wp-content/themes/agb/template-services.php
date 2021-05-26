<?php
/*
Template Name: Services Page
*/
get_header();?>

<!-- <section class="sec-padded--head2 pb-0">
    <div class="sec-corporate-agb">
        <div class="container container-expanded">
            <div class="post-agb-wrapper">
                <div class="post-agb-content">
                    <div class="style-content">
                        <h1 class="h2">Trade Product And Services</h1>
                        <p>Africa and Gulf Bank (AGB) is a financial institution that helps SMEs, large corporations, investors, sponsors, and individuals searching for sustainable models realize their projects by offering an array of customized and innovative financial solutions backed by cutting-edge tools and technologies.</p>
                    </div>
                </div>
                <div class="post-agb-img">
                    <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/bg/bg-sty3.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
 -->

<section class="sec-padded--head2 pb-0">
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



<section class="sec-services side-bar">
  	<div class="tabs-fix-wrap">
	    <div class="container container-expanded">
	      <ul class="nav nav-pills mb-3 desktop-view" id="pills-tab" role="tablist">
	      	<?php
	      		$services = get_field('services');
	      		if (!empty($services)) 
	      		{
	      			foreach ($services as $key => $row) 
		      		{
		      			$service_title = $row['service_title'];
		      			$service_title = $row['service_title'];
		      			$service_select = $row['service_select'];
		      			// $service_id = generate_id_by_title($service_title);
		      			// $service_id = generate_id_by_title(get_the_title($service_select));
						$service_id = $row['target_id'];
		      			
		      			$activeClass = '';
	                    if ($key == 0 ) 
	                    {
	                       $activeClass = 'active';
	                    }
		      			?>
		      				<li class="nav-item">
					          <a class="nav-link <?php echo $activeClass; ?> " id="<?php echo $service_id; ?>-tab" data-toggle="pill" href="#<?php echo $service_id; ?>" role="tab" aria-controls="<?php echo $service_id; ?>" aria-selected="true"><?php echo $service_title; ?></a>
					        </li>

		      			<?php
		      		}
	      		}
	      	?>
	      </ul>
	    </div>
  	</div>
    <div class="container container-expanded">
      	<div class="tab-content services" id="accordion">

      	<?php
      		$services = get_field('services');
      		if (!empty($services)) 
      		{
      			foreach ($services as $key => $row) 
	      		{
	      			$service_title = $row['service_title'];
	      			$service_description = $row['service_description'];
	      			
	      			$select_layout = $row['select_layout'];
	      			// $services_listing = $row['services_listing'];
	      			$service_select = $row['service_select'];
	      			$intro_title = $row['intro_title'];
	      			$intro_description = $row['intro_description'];
	      			$faq_title = $row['faq_title'];
	      			$faqs = $row['faqs'];
	      			$get_in_touch_title = $row['get_in_touch_title'];
	      			$get_in_touch_description = $row['get_in_touch_description'];
	      			$get_in_touch_button_text = $row['get_in_touch_button_text'];
	      			$get_in_touch_url = $row['get_in_touch_url'];
	      			// $service_id = generate_id_by_title(get_the_title($service_select));
	      			$service_id = $row['target_id'];
	      			
	      			
	      			if (empty($row['get_in_touch_url'])) 
	      			{
	      				$get_in_touch_url = get_permalink(85);
	      			}
	      			$activeClass = '';
                    if ($key == 0 ) 
                    {
                       $activeClass = 'active show';
                    }

                    ?>

	                    <div class="card-header mobile-view" id="<?php echo $service_id; ?>-tab">
							<h5 class="mb-0">
							<button class="service-title" data-toggle="collapse" data-target="#<?php echo $service_id; ?>" aria-expanded="true" aria-controls="<?php echo $service_id; ?>">
							  <?php echo $service_title; ?>
							</button>
							</h5>
			            </div>

                    <?php
	                    if ($select_layout == 'layout_1') 
	                    {
	                    	?>
	                    	
				            <div class="tab-pane fade  <?php echo $activeClass; ?>" id="<?php echo $service_id; ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="<?php echo $service_id; ?>-tab">
				                <div class="service-detail">
				                    <div class="sec-head">
				                        <h2><?php echo $service_title; ?></h2>
				                        <p><?php echo $service_description; ?></p>
				                    </div>
				                    <div class="post-services">

				                    	<?php
								      		if (!empty($service_select)) 
								      		{
		      										// $service_select = $row1['service_select'];
	      										$post_id = $service_select;
	      										$inner_services = get_field('services',$post_id);
	      										// $post_title = get_the_title($post_id);
	      										// $post_title = get_field('service_title',$post_id);
	      										// $short_description = get_field('short_description',$post_id);
	      										// $featured_image = get_field('featured_image',$post_id);
	      										// $post_url = get_permalink($post_id);
	      										foreach ($inner_services as $key2 => $row2) 
	      										{
	      											$post_title = $row2['front_post_title'];
	      											$short_description = $row2['front_short_description'];
	      											$featured_image = $row2['front_featured_image'];
	      											$intro_title = $row2['intro_title'];
	      											$target_id = $row2['target_id'];
	      											// $target_id = generate_id_by_title($intro_title);

	      											$post_url = get_permalink($post_id).'#'.$target_id;

	      											$see_more_button_text = get_field('learn_more_text',CONST_SITE_INFORMATION_PAGE_ID);
									      			?>
							                        <div class="post-detail">
							                            <div class="post-image">
							                                <img src="<?php echo $featured_image; ?>">
							                            </div>
							                            <div class="post-description">
							                                <h3><?php echo $post_title; ?></h3>
							                                <p><?php echo $short_description; ?></p>
							                                <a href="<?php echo $post_url;?>" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"><?php echo $see_more_button_text; ?></a>
							                            </div>
							                        </div>
							                        <?php
							                    }
							                }
							            ?>
				                    </div>
				                </div>
				            </div>

	                    	<?php
	                    }
	                    elseif($select_layout == 'layout_2') 
						{
			      			?>
								<div class="tab-pane fade <?php echo $activeClass; ?>" id="<?php echo $service_id; ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="<?php echo $service_id; ?>-tab">
									<div class="service-detail">
									    <div class="sec-content">
									        <div class="row">
									          <div class="col-lg-4 d-lg-block">
									            <div class="c-side-nav js-fixed-sidebar">
									                <div class="c-categoryBox">
									                    <ul class="js-scroll-anchor">
									                        <li>
									                            <a class="" href="#trade-document<?php echo $key; ?>"><?php echo $intro_title; ?></a>
									                        </li>
									                       <!--  <li>
									                            <a class="" href="#faqs-trade<?php echo $key; ?>"><?php echo $faq_title; ?></a>
									                        </li> -->
									                        <li>
									                            <a class="" href="#getintouch<?php echo $key; ?>"><?php echo $get_in_touch_title; ?></a>
									                        </li>
									                    </ul>
									                </div>
									            </div>
									        </div>
									        <div class="col-lg-7 col-md-12">
									                <div class="faq-content js-scroll-sec">
									                    <div class="bar-detail" data-link="trade-document<?php echo $key; ?>">
									                        <h3><?php echo $intro_title; ?></h3>
									                        <?php echo $intro_description; ?>
									                    </div>
									                    <!-- <div class="bar-detail" data-link="faqs-trade<?php echo $key; ?>">
									                        <h3>FAQs</h3>
									                        <div class="detail-box">
									                            <div id="accordion1">

									                            	<?php
															      		if (!empty($faqs)) 
															      		{
															      			foreach ($faqs as $key2 => $row2) 
																      		{
									      										$f_title = $row2['title'];
									      										$f_description = $row2['description'];
																      			?>
															                        <div class="card">
													                                  <div class="card-header" id="heading_<?php echo $key2 ?>">
													                                    <h5 class="mb-0">
													                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapse<?php echo $key.'_'.$key2 ?>" aria-expanded="true" aria-controls="collapse<?php echo $key.'_'.$key2 ?>">
													                                      	<?php echo $f_title; ?>
													                                      </button>
													                                    </h5>
													                                  </div>
													                              
													                                  <div id="collapse<?php echo $key.'_'.$key2 ?>" class="collapse" aria-labelledby="heading_<?php echo $key2 ?>">
													                                    <div class="card-body">
													                                      	<?php echo $f_description; ?>
													                                    </div>
													                                  </div>
													                                </div>
														                        <?php
														                    }
														                }
														            ?>
									                                
									                        	</div>
									                        </div>
									                    </div> -->
									                    <div class="bar-detail" data-link="getintouch<?php echo $key; ?>">
									                        <h3><?php echo $get_in_touch_title; ?></h3>
									                        <div class="get-in-touch-detail">
									                            <p><?php echo $get_in_touch_description; ?></p>
									                            <a href="<?php echo $get_in_touch_url; ?>" class="btn btn-primary"><?php echo $get_in_touch_button_text; ?> <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"></a>
									                        </div>
									                    </div>
									                </div>
									            </div>
									        </div>
									    </div>
									</div>
								</div>
			      			<?php
	      			}
	      		}
      		}
      	?>
      	</div>
    </div>
</section>


<?php get_footer(); ?>