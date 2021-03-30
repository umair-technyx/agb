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
  	$contact_number_title = get_field('contact_number_title');
  	$working_hours_title = get_field('working_hours_title');
  	$address_title = get_field('address_title');
  	$services_title = get_field('services_title');
  	$branches = get_field('branches');
	  	// branch_title
	  	// branch_address_description
	  	// branch_services_description
	  	// branch_contact_numbers
	  	// branch_working_hours
	  	// branch_working_days
	  	// branch_google_map
  	$call_center_contact_numbers = get_field('call_center_contact_numbers');
  		// call_center_contact_number
	$address_title = get_field('call_center_working_time');
		// call_center_working_hours
		// call_center_working_days
	$address_title = get_field('atm_location_contact_numbers');
		// atm_location_contact_number
	$address_title = get_field('atm_location_working_time');
		// atm_location_working_hours
		// atm_location_working_days
	$address_title = get_field('ask_questions_contact_numbers');
		// ask_questions_contact_number
	$address_title = get_field('ask_questions_working_time');
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
            <li class="nav-item">
                <a class="nav-link active" id="branches-tab" data-toggle="pill" href="#branches" role="tab"
                    aria-controls="branches" aria-selected="true">OUR BRANCHES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="call-tab" data-toggle="pill" href="#call" role="tab" aria-controls="call"
                    aria-selected="false">Call Center</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="atmlocation-tab" data-toggle="pill" href="#atmlocation" role="tab"
                    aria-controls="atmlocation" aria-selected="false">ATM LOCATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="askquestions-tab" data-toggle="pill" href="#askquestions" role="tab"
                    aria-controls="askquestions" aria-selected="false">ASK QUESTIONS</a>
            </li>
        </ul>
        <div class="tab-content services" id="accordion">
            <div class="card-header mobile-view" id="headingOne">
                <h5 class="mb-0">
                    <button class="service-title collapsed" data-toggle="collapse" data-target="#branches" aria-expanded="true" aria-controls="collapseOne">
                        OUR BRANCHES
                    </button>
                </h5>
            </div>
            <div class="tab-pane fade show active" id="branches" data-parent="#accordion" role="tabpanel"
                aria-labelledby="branches-tab">
                <section class="location-info">
                    <div class="sec-padded">
                        <div class="sec-find-us">
                            <div class="container container-expanded">
                                <div class="find-us-wrapper">
                                    <div class="branch-content">
                                        <div class="branch-heading">
                                            <h2 class="h3">AGB Head Office</h2>
                                        </div>
                                        <div class="adress">
                                            <span>Address</span>
                                            <p>Building No.2, Block 5 KH Khartoum 2, Khartoum East Republic of Sudan</p>
                                        </div>
                                        <div class="services-info">
                                            <div class="services">
                                                <span>Services</span>
                                                <p>Teller Transactions / Customer Service / SME Center / Excellency
                                                    Center /
                                                    Safe Deposit Lockers Service / ATM Services (Cash withdrawals, Cash
                                                    &
                                                    Cheque Deposits)</p>
                                            </div>
                                            <div class="contact-info">
                                                <div class="contact">
                                                    <span>Contact Number</span>
                                                    <p>T: +123 456 789</p>
                                                    <p>T: +123 456 789</p>
                                                </div>
                                                <div class="hours">
                                                    <span>Working Hours</span>
                                                    <p class="mt-15">08:00 AM - 03:00 PM </p>
                                                    <p>Monday to Friday</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-map">
                                        <div class="map-style">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sec-padded">
                        <div class="sec-find-us bg-grey">
                            <div class="container container-expanded">
                                <div class="find-us-wrapper">
                                    <div class="branch-content">
                                        <div class="branch-heading">
                                            <h2 class="h3">Amarat</h2>
                                        </div>
                                        <div class="adress">
                                            <span>Address</span>
                                            <p>Street 15, Block 9/10, Plot No.50/1,Amarat Hilal Sami Building, P.O. 15141, Khartoum, Republic of Sudan</p>
                                        </div>
                                        <div class="services-info">
                                            <div class="services">
                                                <span>Services</span>
                                                <p>Teller Transactions / Customer Service / SME Center / Excellency
                                                    Center / Safe Deposit Lockers Service / ATM Services (Cash
                                                    withdrawals, Cash & Cheque Deposits)</p>
                                            </div>
                                            <div class="contact-info">
                                                <div class="contact">
                                                    <span>Contact Number</span>
                                                    <p>T: +249 183 569656/604/640</p>
                                                    <p>F: +249 183 569625</p>
                                                </div>
                                                <div class="hours">
                                                    <span>Working Hours</span>
                                                    <p class="mt-15">08:00 AM - 03:00 PM </p>
                                                    <p>Monday to Friday</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-map">
                                        <div class="map-style">
                                            <div id="map2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sec-padded">
                        <div class="sec-find-us">
                            <div class="container container-expanded">
                                <div class="find-us-wrapper">
                                    <div class="branch-content">
                                        <div class="branch-heading">
                                            <h2 class="h3">Atbara</h2>
                                        </div>
                                        <div class="adress">
                                            <span>Address</span>
                                            <p>Taka Building, Atbara Street, P.O.Box 2465, Khartoum, Republic of Sudan</p>
                                        </div>
                                        <div class="services-info">
                                            <div class="services">
                                                <span>Services</span>
                                                <p>Teller Transactions / Customer Service / SME Center / Excellency
                                                    Center /
                                                    Safe Deposit Lockers Service / ATM Services (Cash withdrawals, Cash
                                                    &
                                                    Cheque Deposits)</p>
                                            </div>
                                            <div class="contact-info">
                                                <div class="contact">
                                                    <span>Contact Number</span>
                                                    <p>T: +249 183 778517</p>
                                                    <p>F: +249 183 774892</p>
                                                </div>
                                                <div class="hours">
                                                    <span>Working Hours</span>
                                                    <p class="mt-15">08:00 AM - 03:00 PM </p>
                                                    <p>Monday to Friday</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="location-map">
                                        <div class="map-style">
                                            <div id="map3"></div>
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
                    <button class="service-title collapsed" data-toggle="collapse" data-target="#call"
                        aria-expanded="true" aria-controls="collapseOne">
                        Call Center
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
                                                    <span>Contact Number</span>
                                                    <p>T: +990 222 4445</p>
                                                </div>
                                                <div class="hours">
                                                    <span>Working Hours</span>
                                                    <p class="mt-15">08:00 AM - 03:00 PM </p>
                                                    <p>Monday to Friday</p>
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
                    <button class="service-title collapsed" data-toggle="collapse" data-target="#atmlocation"
                        aria-expanded="true" aria-controls="collapseOne">
                        ATM LOCATION
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
                                                    <span>Contact Number</span>
                                                    <p>T: +990 222 4445</p>
                                                </div>
                                                <div class="hours">
                                                    <span>Working Hours</span>
                                                    <p class="mt-15">08:00 AM - 03:00 PM </p>
                                                    <p>Monday to Friday</p>
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
                    <button class="service-title collapsed" data-toggle="collapse" data-target="#askquestions"
                        aria-expanded="true" aria-controls="collapseOne">
                        ASK QUESTIONS
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
                                                    <span>Contact Number</span>
                                                    <p>T: +990 222 4445</p>
                                                </div>
                                                <div class="hours">
                                                    <span>Working Hours</span>
                                                    <p class="mt-15">08:00 AM - 03:00 PM </p>
                                                    <p>Monday to Friday</p>
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