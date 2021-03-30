<?php
/*
Template Name: Trade & Foreign Exchange
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

<section class="sec-padded--head">
    <div class="sec-corporate-agb">
        <div class="container container-expanded">
            <div class="post-agb-wrapper">
                <div class="post-agb-content">
                	<?php 
					    $page_title = get_field('page_title');
					    if(!empty($page_title)){
						    ?>
						    	<div class="item-txt-blue">
			                        <span><?php echo $page_title ?></span>
			                    </div>
						    <?php
					    }
					    else{
					    	?>
						    	<div class="item-txt-blue">
			                        <span><?php echo get_the_title(); ?></span>
			                    </div>
						    <?php
					    }

					 ?>
                    
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
          <li class="nav-item">
          <a class="nav-link active" id="import-tab" data-toggle="pill" href="#import" role="tab" aria-controls="import" aria-selected="true">Import Services</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" id="export-tab" data-toggle="pill" href="#export" role="tab" aria-controls="export" aria-selected="false">Export Services</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" id="bankers-guarantee-tab" data-toggle="pill" href="#bankers-guarantee" role="tab" aria-controls="bankers-guarantee" aria-selected="false">Banker’s Guarantee</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="trade-document-tab" data-toggle="pill" href="#trade-document" role="tab" aria-controls="trade-document" aria-selected="false">Trade Document Counters</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="foreign-exchange-tab" data-toggle="pill" href="#foreign-exchange" role="tab" aria-controls="foreign-exchange" aria-selected="false">Foreign Exchange</a>
          </li>
      </ul>
    </div>
  </div>
    <div class="container container-expanded">
      <div class="tab-content services" id="accordion">
          <!-- import -->
            <div class="card-header mobile-view" id="import-tab">
              <h5 class="mb-0">
              <button class="service-title" data-toggle="collapse" data-target="#import" aria-expanded="true" aria-controls="import">
                  Import Services
              </button>
              </h5>
            </div>
            <div class="tab-pane fade show active" id="import" role="tabpanel" data-parent="#accordion" aria-labelledby="import-tab">
                <div class="service-detail">
                    <div class="sec-head">
                        <h2>Import Services</h2>
                        <p>Access import serviceseasily. Manage transactions and payments swiftly to keep your business moving</p>
                    </div>
                    <div class="post-services">
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/img1.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Inward Bill Collection (DA/DP)</h3>
                                <p>Facilitates your import activities with our documentary collection services available.</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/import-services.html#inwardbill" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/img2.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Letter of Credit Issuance</h3>
                                <p>Put your suppliers at ease by guaranteeing payments to your suppliers</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/import-services.html#letterofcredit" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/img3.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Issuance of IM Forms</h3>
                                <p>Prompt issuance of IM forms to fulfill importation regulatory requirements.</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/import-services.html#issuanceofim" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/account-sec-img1.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Import Financing</h3>
                                <p>AGB offers you access to import services and simplifies import financing.</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/import-services.html#importfinancing" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/account-sec-img2.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Shipping Guarantee</h3>
                                <p>Receive your cargo worry free with Africa and Gulf Bank.</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/import-services.html#shippingguarantee" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- import -->
          <!-- export -->
            <div class="card-header mobile-view" id="export-tab">
              <h5 class="mb-0">
              <button class="service-title collapsed" data-toggle="collapse" data-target="#export" aria-expanded="true" aria-controls="export">
                Export Services
              </button>
              </h5>
            </div>
            <div class="tab-pane fade" id="export" role="tabpanel" data-parent="#accordion" aria-labelledby="export-tab">
                <div class="service-detail">
                    <div class="sec-head">
                        <h2>Export Services</h2>
                        <p>Let us handle the banking so that you can focus on the business</p>
                    </div>
                    <div class="post-services">
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/img1.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Outward Bill Collection(DA/DP)</h3>
                                <p>Now, you can speed up streamline business activities and simplify the process of collecting your payments</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/export-services1.html#outwardbilling" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/img2.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Letter of Credit Advising</h3>
                                <p>If you’re looking to verify the authenticity of your letter of credit, you’ve come to the right place.</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/export-services1.html#letterofcredit" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                        <div class="post-detail">
                            <div class="post-image">
                                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/img3.jpg">
                            </div>
                            <div class="post-description">
                                <h3>Export Pre-Shipment Financing</h3>
                                <p>With this service you can pre-finance your shipments</p>
                                <a href="https://theprojectdemoserver.com/agb-html/v1//trade-foreign-exchange-detail/export-services1.html#exportpreshipment" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- export -->
          <!-- bankers guarantee -->
            <div class="card-header mobile-view" id="bankers-guarantee-tab">
            <h5 class="mb-0">
            <button class="service-title collapsed" data-toggle="collapse" data-target="#bankers-guarantee" aria-expanded="true" aria-controls="bankers-guarantee">
              Banker’s Guarantee
            </button>
            </h5>
            </div>
            <div class="tab-pane fade" id="bankers-guarantee" role="tabpanel" data-parent="#accordion" aria-labelledby="bankers-guarantee-tab">
            <div class="service-detail">
                <div class="sec-content">
                  <div class="row">
                      <div class="col-lg-4 d-lg-block">
                          <div class="c-side-nav js-fixed-sidebar">
                              <div class="c-categoryBox">
                                  <ul class="js-scroll-anchor">
                                      <li>
                                          <a class="" href="#billcollection">Banker’s Guarantee / SBLC</a>
                                      </li>
                                      <li>
                                          <a class="" href="#faqs">FAQs</a>
                                      </li>
                                      <li>
                                          <a class="" href="#getintouch">Get In Touch</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-7 col-md-12">
                          <div class="faq-content js-scroll-sec">
                              <div class="bar-detail" data-link="billcollection">
                                  <h3>Banker’s Guarantee / SBLC</h3>
                                  <p>Beneficiaries may require payment assurance from time to time; AGB can include the necessary payment guarantee in support of your company and good standing.</p>
                                  <p>Assuring the customers or sellers that they will be paid no matter what. You should be able to mitigate any payment risks for the beneficiary with the Banker's Guarantee issued.</p>
                                  <p>Simply pick up your Banker's Guarantee from any of our Trade Document Counters nationwide.</p>
                              </div>
                              <div class="bar-detail" data-link="faqs">
                                  <h3>FAQs</h3>
                                  <div class="detail-box">
                                      <div id="accordion1">
                                          <div class="card">
                                            <div class="card-header" id="headingOne">
                                              <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"  data-parent="#accordion1" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Do I need a credit facility for this product?
                                                </button>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                              <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="headingTwo">
                                              <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  How do I know the documents have arrived?
                                                </button>
                                              </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                              <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <div class="card-header" id="headingThree">
                                              <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  How long does it take to process the documents?
                                                </button>
                                              </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                              <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card">
                                              <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                      How do I instruct DBS to accept or reject the document?
                                                  </button>
                                                </h5>
                                              </div>
                                              <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                                <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headingFive">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                      Where do I collect the documents?
                                                  </button>
                                                </h5>
                                              </div>
                                              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion1">
                                                <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                  </div>
                              </div>
                              <div class="bar-detail" data-link="getintouch">
                                  <h3>Get In Touch</h3>
                                  <div class="get-in-touch-detail">
                                      <p>Contact AGB Business Care</p>
                                      <a href="#" class="btn btn-primary">Learn More <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            </div>
        <!-- bankers guarantee -->
        <!-- trade documents -->
            <div class="card-header mobile-view" id="trade-document-tab">
              <h5 class="mb-0">
              <button class="service-title collapsed" data-toggle="collapse" data-target="#trade-document" aria-expanded="true" aria-controls="trade-document">
                Trade Document Counters
              </button>
              </h5>
          </div>
           <div class="tab-pane fade" id="trade-document" role="tabpanel" data-parent="#accordion" aria-labelledby="trade-document-tab">
            <div class="service-detail">
                <div class="sec-content">
                    <div class="row">
                      <div class="col-lg-4 d-lg-block">
                        <div class="c-side-nav js-fixed-sidebar">
                            <div class="c-categoryBox">
                                <ul class="js-scroll-anchor">
                                    <li>
                                        <a class="" href="#trade-document">Trade Document Counters</a>
                                    </li>
                                    <li>
                                        <a class="" href="#faqs-trade">FAQs</a>
                                    </li>
                                    <li>
                                        <a class="" href="#getintouch2">Get In Touch</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                            <div class="faq-content js-scroll-sec">
                                <div class="bar-detail" data-link="trade-document">
                                    <h3>Trade Document Counters</h3>
                                    <p>Africa and Gulf bank makes trading simpler. Now you can enjoy greater convenience with our Trade Document Counters. Simply, Submit and/or collect trade applications at any of our designated trade counters or branches near you.</p>
                                    <p>Visit our designated trade counter in branches and complete your trade banking needs with ease.</p>
                                </div>
                                <div class="bar-detail" data-link="faqs-trade">
                                    <h3>FAQs</h3>
                                    <div class="detail-box">
                                        <div id="accordion1">
                                            <div class="card">
                                              <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Do I need a credit facility for this product?
                                                  </button>
                                                </h5>
                                              </div>
                                          
                                              <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    How do I know the documents have arrived?
                                                  </button>
                                                </h5>
                                              </div>
                                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                                <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    How long does it take to process the documents?
                                                  </button>
                                                </h5>
                                              </div>
                                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                                <div class="card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        How do I instruct DBS to accept or reject the document?
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card">
                                                <div class="card-header" id="headingFive">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Where do I collect the documents?
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="bar-detail" data-link="getintouch2">
                                    <h3>Get In Touch</h3>
                                    <div class="get-in-touch-detail">
                                        <p>Contact AGB Business Care</p>
                                        <a href="#" class="btn btn-primary">Learn More <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        <!-- trade documents -->
        <!-- Foreign-exchange -->
            <div class="card-header mobile-view" id="foreign-exchange-tab">
              <h5 class="mb-0">
              <button class="service-title collapsed" data-toggle="collapse" data-target="#foreign-exchange" aria-expanded="true" aria-controls="foreign-exchange">
                Foreign Exchange
              </button>
              </h5>
            </div>
            <div class="tab-pane fade" id="foreign-exchange" role="tabpanel" data-parent="#accordion" aria-labelledby="foreign-exchange-tab">
                <div class="service-detail">
                    <div class="sec-content">
                      <div class="row">
                        <div class="col-lg-4 d-lg-block">
                          <div class="c-side-nav js-fixed-sidebar">
                              <div class="c-categoryBox">
                                  <ul class="js-scroll-anchor">
                                      <li>
                                          <a class="" href="#foreign">Foreign Exchange </a>
                                      </li>
                                      <li>
                                          <a class="" href="#faqs-foreign">FAQs</a>
                                      </li>
                                      <li>
                                          <a class="" href="#getintouch1">Get In Touch</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-7 col-md-12">
                                <div class="faq-content js-scroll-sec">
                                    <div class="bar-detail" data-link="foreign">
                                        <h3>Foreign Exchange </h3>
                                        <p>Make the most of your hard-earned foreign exchange. Change your foreign currency to Sudanese pounds at competitive rates and fees.</p>
                                        <p>With Africa and Gulf Bank, you will attain the convenience of being able to withdraw and deposit foreign currencies safely. You will now have access to primary currencies including USD, GBP, EUR, AUD & CAD through any of our branches for your convenience.</p>
                                    </div>
                                    <div class="bar-detail" data-link="faqs-foreign">
                                        <h3>FAQs</h3>
                                        <div class="detail-box">
                                            <div id="accordion1">
                                                <div class="card">
                                                  <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Do I need a credit facility for this product?
                                                      </button>
                                                    </h5>
                                                  </div>
                                              
                                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                                    <div class="card-body">
                                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="card">
                                                  <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        How do I know the documents have arrived?
                                                      </button>
                                                    </h5>
                                                  </div>
                                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                                    <div class="card-body">
                                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="card">
                                                  <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                      <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        How long does it take to process the documents?
                                                      </button>
                                                    </h5>
                                                  </div>
                                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                                    <div class="card-body">
                                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFour">
                                                      <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            How do I instruct DBS to accept or reject the document?
                                                        </button>
                                                      </h5>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                                      <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="card">
                                                    <div class="card-header" id="headingFive">
                                                      <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                            Where do I collect the documents?
                                                        </button>
                                                      </h5>
                                                    </div>
                                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                                      <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="bar-detail" data-link="getintouch1">
                                        <h3>Get In Touch</h3>
                                        <div class="get-in-touch-detail">
                                            <p>Contact AGB Business Care</p>
                                            <a href="#" class="btn btn-primary">Learn More <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Foreign-exchange -->
      </div>
    </div>
</section>

<?php get_footer(); ?>