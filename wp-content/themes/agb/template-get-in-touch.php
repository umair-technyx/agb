<?php
/*
Template Name: Get In Touch
*/
get_header();?>
<?php 
  	$main_heading = get_field('main_heading');
  	$find_us_title = get_field('find_us_title');
  	$find_us_description = get_field('find_us_description');
  	$select_your_location_placeholder = get_field('select_your_location_placeholder');
  	$select_your_location = get_field('select_your_location');
  	$our_branches_heading = get_field('our_branches_heading');
  	$call_center_heading = get_field('call_center_heading');
  	$atm_location_heading = get_field('atm_location_heading');
  	$ask_question_heading = get_field('ask_question_heading');
  	$contact_number_title = get_field('contact_number_title');
  	$working_hours_title = get_field('working_hours_title');
  	$address_title = get_field('address_title');
  	$services_title = get_field('services_title');
  	$branches = get_field('branches');
	  	
  	$call_center_contact_numbers = get_field('call_center_contact_numbers');
  		// call_center_contact_number
	$call_center_working_time = get_field('call_center_working_time');
		// call_center_working_hours
		// call_center_working_days
	$atm_location_contact_numbers = get_field('atm_location_contact_numbers');
		// atm_location_contact_number
	$atm_location_working_time = get_field('atm_location_working_time');
		// atm_location_working_hours
		// atm_location_working_days
	$ask_questions_contact_numbers = get_field('ask_questions_contact_numbers');
		// ask_questions_contact_number
	$ask_questions_working_time = get_field('ask_questions_working_time');
		// ask_questions_working_hours
		// ask_questions_working_days

?>
<section class="sec-padded--head">
    <div class="sec-getin-touch">
        <div class="container container-expanded">
            <div class="style-content">
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
                <?php
		            if (!empty($find_us_title))
		            {
		              	?>
			                <h1 class="h2"><?php echo $find_us_title; ?></h1>
		                <?php
		            }
		            if (!empty($find_us_description))
		            {
	          			?>
			                <p><?php echo $find_us_description; ?></p>
		                <?php
		            }
	            ?>
            </div>
            <div class="select-box select2-box">
            	<?php
		            if (!empty($select_your_location))
		            {
	              		?>
	              			<select class="js-select" data-placeholder="<?php echo $select_your_location_placeholder; ?>" data-class="abc">
			                    <option></option>
			                    <?php
			                    	foreach ($select_your_location as $key1 => $value1)
					              	{
				              			$location = $value1['location'];
			                    		?>
			                    			<option><?php echo $location; ?></option>
		                    			<?php
	                    			}
	                			?>
			                </select>
	              		<?php
		            }
	            ?>
            </div>
        </div>
    </div>
</section>

<section class="sec-services sec-location--sty">
    <div class="container container-expanded">
        <ul class="nav nav-pills mb-3 desktop-view" id="pills-tab" role="tablist">
            <?php
	            if (!empty($our_branches_heading))
	            {
	              	?>
			            <li class="nav-item">
			                <a class="nav-link active" id="branches-tab" data-toggle="pill" href="#branches" role="tab"
			                    aria-controls="branches" aria-selected="true"><?php echo $our_branches_heading; ?></a>
			            </li>
		            <?php
	            }
	            if (!empty($call_center_heading))
	            {
          			?>
			            <li class="nav-item">
			                <a class="nav-link" id="call-tab" data-toggle="pill" href="#call" role="tab" aria-controls="call"
			                    aria-selected="false"><?php echo $call_center_heading; ?></a>
			            </li>
		            <?php
	            }
	            if (!empty($atm_location_heading))
	            {
          			?>
			            <li class="nav-item">
			                <a class="nav-link" id="atmlocation-tab" data-toggle="pill" href="#atmlocation" role="tab"
			                    aria-controls="atmlocation" aria-selected="false"><?php echo $atm_location_heading; ?></a>
			            </li>
		            <?php
	            }
	            if (!empty($ask_question_heading))
	            {
          			?>
			            <li class="nav-item">
			                <a class="nav-link" id="askquestions-tab" data-toggle="pill" href="#askquestions" role="tab"
			                    aria-controls="askquestions" aria-selected="false"><?php echo $ask_question_heading; ?></a>
			            </li>
		            <?php
	            }
            ?>
        </ul>
        <div class="tab-content services" id="accordion">
            <div class="card-header mobile-view" id="headingOne">
                <h5 class="mb-0">
                	<?php
			            if (!empty($our_branches_heading))
			            {
			              	?>
			                    <button class="service-title collapsed" data-toggle="collapse" data-target="#branches" aria-expanded="true" aria-controls="collapseOne"><?php echo $our_branches_heading; ?></button>
		                    <?php
			            }
		            ?>
                </h5>
            </div>
            <div class="tab-pane fade show active" id="branches" data-parent="#accordion" role="tabpanel"
                aria-labelledby="branches-tab">
                <section class="location-info">
                	<?php
			            if (!empty($branches))
			            {
			              	foreach ($branches as $key2 => $value2)
			              	{
			              		$branch_title = $value2['branch_title'];
							  	$branch_address_description = $value2['branch_address_description'];
							  	$branch_services_description = $value2['branch_services_description'];
							  	$branch_contact_numbers = $value2['branch_contact_numbers'];
							  	$branch_working_hours = $value2['branch_working_hours'];
							  	$branch_working_days = $value2['branch_working_days'];
							  	$branch_google_map = $value2['branch_google_map'];
				              	$add_class='';
				              	if($key2 %2 != 0)  
								{
									$add_class = "bg-grey";
								}
				              	?>
				                    <div class="sec-padded">
				                        <div class="sec-find-us <?php echo $add_class; ?>">
				                            <div class="container container-expanded">
				                                <div class="find-us-wrapper">
				                                    <div class="branch-content">
				                                        <div class="branch-heading">
				                                        	<?php
													            if (!empty($branch_title))
													            {
													              	?>
				                                            			<h2 class="h3"><?php echo $branch_title ?></h2>
			                                            			<?php
		                                            			}
	                                            			?>
				                                        </div>
				                                        <div class="adress">
				                                        	<?php
													            if (!empty($address_title))
													            {
													              	?>
							                                            <span><?php echo $address_title; ?></span>
						                                            <?php
								            					}
								            					if (!empty($branch_address_description))
													            {
							            							?>
							                                            <p><?php echo $branch_address_description; ?></p>
						                                            <?php
					                                            }
				                                            ?>
				                                        </div>
				                                        <div class="services-info">
				                                            <div class="services">
				                                            	<?php
														            if (!empty($services_title))
														            {
														              	?>
							                                                <span><?php echo $services_title; ?></span>
						                                                <?php
									            					}
									            					if (!empty($branch_services_description))
														            {
								            							?>
							                                                <p><?php echo $branch_services_description; ?></p>
						                                                <?php
						                                            }
					                                            ?>
				                                            </div>
				                                            <div class="contact-info">
				                                                <div class="contact">
				                                                	<?php
															            if (!empty($contact_number_title))
															            {
															              	?>
							                                                    <span><?php echo $contact_number_title; ?></span>
						                                                    <?php
										            					}
										            					if (!empty($branch_contact_numbers))
															            {
									            							foreach ($branch_contact_numbers as $key3 => $value3)
									            							{
									            								$contact_number = $value3['contact_number'];
										            							?>
								                                                    <p><?php echo $contact_number; ?></p>
							                                                    <?php
						                                                    }
										            					}
									            					?>
				                                                </div>
				                                                <div class="hours">
				                                                	<?php
															            if (!empty($working_hours_title))
															            {
															              	?>
							                                                    <span><?php echo $working_hours_title; ?></span>
						                                                    <?php
										            					}
										            					if (!empty($branch_working_hours))
															            {
									            							?>
							                                                    <p class="mt-15"><?php echo $branch_working_hours; ?></p>
						                                                    <?php
					                                                    }
					                                                    if (!empty($branch_working_days))
															            {
				                                                    		?>
							                                                    <p><?php echo $branch_working_days ?></p>
						                                                    <?php
					                                                    }
				                                                    ?>
				                                                </div>
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class="location-map">
				                                        <div class="map-style">
				                                        	<?php
													            if (!empty($branch_google_map))
													            {
													              	?>
				                                            			<div id="map"><?php echo $branch_google_map ?></div>
			                                            			<?php
		                                            			}
	                                            			?>
				                                        </div>
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
            </div>
            <div class="card-header mobile-view" id="headingOne">
                <h5 class="mb-0">
                	<?php
			            if (!empty($call_center_heading))
			            {
			              	?>
                    			<button class="service-title collapsed" data-toggle="collapse" data-target="#call" aria-expanded="true" aria-controls="collapseOne"><?php echo $call_center_heading; ?></button>
                			<?php
			            }
		            ?>
                </h5>
            </div>
            <div class="tab-pane fade" id="call" data-parent="#accordion" role="tabpanel" aria-labelledby="call-tab">
                <section class="location-info">
                    <div class="sec-padded">
                        <div class="sec-find-us">
                            <div class="container container-expanded">
                                <div class="find-us-wrapper">
                                    <div class="branch-content">
                                        <div class="services-info">
                                            <div class="contact-info">
                                                <div class="contact">
                                                	<?php
											            if (!empty($contact_number_title))
											            {
											              	?>
			                                                    <span><?php echo $contact_number_title; ?></span>
		                                                    <?php
														}
														if (!empty($call_center_contact_numbers))
											            {
															foreach ($call_center_contact_numbers as $key4 => $value4)
															{
																$call_center_contact_number = $value4['call_center_contact_number'];
																?>
																	<p><?php echo $call_center_contact_number; ?></p>
																<?php
															}
														}
													?>        
                                                </div>
                                                <div class="hours">
                                                	<?php
											            if (!empty($working_hours_title))
											            {
											              	?>
                                                    			<span><?php echo $working_hours_title; ?></span>
                                                			<?php
														}
														if (!empty($call_center_working_time))
											            {
															foreach ($call_center_working_time as $key5 => $value5)
															{
																$call_center_working_hours = $value5['call_center_working_hours'];
																$call_center_working_days = $value5['call_center_working_days'];
																?>
				                                                    <p class="mt-15"><?php echo $call_center_working_hours; ?></p>
				                                                    <p><?php echo $call_center_working_days; ?></p>
			                                                    <?php
															}
														}
													?>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="card-header mobile-view" id="headingOne">
                <h5 class="mb-0">
                	<?php
			            if (!empty($atm_location_heading))
			            {
			              	?>
                    			<button class="service-title collapsed" data-toggle="collapse" data-target="#atmlocation" aria-expanded="true" aria-controls="collapseOne"><?php echo $atm_location_heading; ?></button>
                			<?php
			            }
		            ?>
                </h5>
            </div>
            <div class="tab-pane fade" id="atmlocation" data-parent="#accordion" role="tabpanel"
                aria-labelledby="atmlocation-tab">
                <section class="location-info">
                    <div class="sec-padded">
                        <div class="sec-find-us">
                            <div class="container container-expanded">
                                <div class="find-us-wrapper">
                                    <div class="branch-content">
                                        <div class="services-info">
                                            <div class="contact-info">
                                                <div class="contact">
                                                	<?php
											            if (!empty($contact_number_title))
											            {
											              	?>
			                                                    <span><?php echo $contact_number_title; ?></span>
		                                                    <?php
														}
														if (!empty($atm_location_contact_numbers))
											            {
															foreach ($atm_location_contact_numbers as $key6 => $value6)
															{
																$atm_location_contact_number = $value6['atm_location_contact_number'];
																?>
				                                                    <p><?php echo $atm_location_contact_number; ?></p>
			                                                    <?php
															}
														}
													?>      
                                                </div>
                                                <div class="hours">
                                                	<?php
											            if (!empty($working_hours_title))
											            {
											              	?>
                                                    			<span><?php echo $working_hours_title; ?></span>
                                                			<?php
														}
														if (!empty($atm_location_working_time))
											            {
															foreach ($atm_location_working_time as $key7 => $value7)
															{
																$atm_location_working_hours = $value7['atm_location_working_hours'];
																$atm_location_working_days = $value7['atm_location_working_days'];
																?>
				                                                    <p class="mt-15"><?php echo $atm_location_working_hours; ?></p>
				                                                    <p><?php echo $atm_location_working_days; ?></p>
			                                                    <?php
															}
														}
													?>     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="card-header mobile-view" id="headingOne">
                <h5 class="mb-0">
                	<?php
			            if (!empty($ask_question_heading))
			            {
			              	?>
                    			<button class="service-title collapsed" data-toggle="collapse" data-target="#askquestions" aria-expanded="true" aria-controls="collapseOne"><?php echo $ask_question_heading; ?></button>
                			<?php
			            }
		            ?>
                </h5>
            </div>
            <div class="tab-pane fade" id="askquestions" data-parent="#accordion" role="tabpanel"
                aria-labelledby="askquestions-tab">
                <section class="location-info">
                    <div class="sec-padded">
                        <div class="sec-find-us">
                            <div class="container container-expanded">
                                <div class="find-us-wrapper">
                                    <div class="branch-content">
                                        <div class="services-info">
                                            <div class="contact-info">
                                                <div class="contact">
                                                	<?php
											            if (!empty($contact_number_title))
											            {
											              	?>
                                                    			<span><?php echo $contact_number_title; ?></span>
                                                			<?php
														}
														if (!empty($ask_questions_contact_numbers))
											            {
															foreach ($ask_questions_contact_numbers as $key8 => $value8)
															{
																$ask_questions_contact_number = $value8['ask_questions_contact_number'];
																?>
	                                                    			<p><?php echo $ask_questions_contact_number; ?></p>
	                                                			<?php
															}
														}
													?>      
                                                </div>
                                                <div class="hours">
                                                	<?php
											            if (!empty($working_hours_title))
											            {
											              	?>
                                                    			<span><?php echo $working_hours_title; ?></span>
                                                			<?php
														}
														if (!empty($ask_questions_working_time))
											            {
															foreach ($ask_questions_working_time as $key9 => $value9)
															{
																$ask_questions_working_hours = $value9['ask_questions_working_hours'];
																$ask_questions_working_days = $value9['ask_questions_working_days'];
																?>
				                                                    <p class="mt-15"><?php echo $ask_questions_working_hours; ?></p>
				                                                    <p><?php echo $ask_questions_working_days; ?></p>
			                                                    <?php
															}
														}
													?>      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSR0j9auYiNLYsHGoXotRU5ZKQPbVmWnI&callback=initMap"
        type="text/javascript"></script>
</section>

<?php get_footer(); ?>