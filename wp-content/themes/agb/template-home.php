<?php
/*
Template Name: Home
*/
get_header();?>
<?php 
  $banner_image = get_field('banner_image');
  $banner_title = get_field('banner_title');
  $banner_description = get_field('banner_description');
  $types_of_account = get_field('types_of_account');
  $our_branches_image = get_field('our_branches_image');
  $our_branches_title = get_field('our_branches_title');
  $our_branches_url = get_field('our_branches_url');
  $africa_and_gulf_bank_title = get_field('africa_and_gulf_bank_title');
  $africa_and_gulf_bank_description = get_field('africa_and_gulf_bank_description');
  $find_more_url = get_field('find_more_url');
  $together_we_are_stronger_title = get_field('together_we_are_stronger_title');
  $types_of_services = get_field('types_of_services');
    //service_title
    //service_description
    //service_image
    //service_url
  $learn_more_text = get_field('learn_more_text',CONST_SITE_INFORMATION_PAGE_ID);
  $find_more_text = get_field('find_more_text',CONST_SITE_INFORMATION_PAGE_ID);
?>
<section class="home-banner">
    <div class="b-thumb-wrapper">
        <div class="b-thumb-img">
            <picture>
                <source media="(max-width: 600px) and (orientation: portrait)" srcset="https://theprojectdemoserver.com/agb-html/v1//assets/img/bg/bg-sty1.jpg">
                <!-- Required Dimension: desktop = 1440x810px -->
                <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/bg/bg-sty1.jpg" alt="banner-02" class="objectfit lozad">
            </picture>
        </div>
        <div class="b-thumb-content">
            <h1 class="h1 txt-white">Welcome to the <br> New Era of Banking</h1>
                <p class="txt-white">Through the provision of bespoke banking solutions to our corporate clientele, AGB removes roadblocks allowing your business to evolve and thrive.</p>
        </div>
    </div>
</section>
        <section class="quick-links">
   <div class="container container-expanded">
       <div class="quick-link-bar js-img-slide">
          <?php
            if (!empty($types_of_account))
            {
              foreach ($types_of_account as $key => $value)
              {
                $account_image = $value['account_image'];
                $account_title = $value['account_title'];
                $account_url = $value['account_url'];
                ?>
                  <div class="link-content">
                    <div class="sec-img">
                        <img src="<?php echo $account_image; ?>" alt="AGB" class="tosvg js-tosvg" />
                    </div>
                    <p><?php echo $account_title; ?></p>
                    <a href="<?php echo get_permalink(RETAIL_PAGE_ID).$account_url;?>"><?php echo $learn_more_text; ?></a>
                  </div>
                <?php
              }
            }
          ?>  
        <div class="link-content">
            <div class="sec-img">
                 <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-branches.svg" alt="AGB" class="tosvg js-tosvg" />
            </div>
            <p>Our Branches</p>
            <a href="../get-in-touch/#branches">Learn More</a>
        </div>
       </div>
   </div>
</section>
        <section class="sec-padded">
    <div class="sec-content-box">
        <div class="container container-expanded">
            <div class="content-box">
                <div class="content-box-wrapper">
                    <div class="content-box-content">
                        <h3 class="h3">Africa and Gulf Bank (AGB)</h2>
                        <p>Africa and Gulf Bank (AGB) is a financial institution that helps SMEs, large corporations, investors, sponsors, and individuals searching for sustainable models realize their projects by offering an array of customized and innovative financial solutions backed by cutting-edge tools and technologies.</p>
                        <a href="../about" class="btn btn-primary">Find More <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"></a>
                    </div>
                    <div class="content-box-img">
                        <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/img4.jpg">
                        <div class="footer-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="sec-padded tab-section">
   <div class="container container-expanded">
       <h2 class="h2">Together we are Stronger</h2>
       <div class="content-tabs desktop-view">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills sec-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link para-lg active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Trade and Foreign <br> Exchange</a>
                        <a class="nav-link para-lg" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Personal Banking</a>
                        <a class="nav-link para-lg" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Business Banking</a>
                        <a class="nav-link para-lg" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Import & Export Services</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content tab-detail" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="post-box">
                                <div class="sec-content">
                                    <a class="corporate">/ Corporate Banking</a>
                                    <h3 class="h3">Trade and Foreign <br> Exchange</h2>
                                    <p> Products designed to enable businesses trade in multicurrencies through at secure, dependable rates.</p>
                                    <a href="../trade-foreign-exchange" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                                </div>
                                <div class="sec-img">
                                    <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="post-box">
                                <div class="sec-content">
                                    <a class="corporate">/ Corporate Banking</a>
                                    <h3 class="h3">Personal Banking</h2>
                                    <p>Bespoke personal banking products services tailored for individuals, including current accounts, savings accounts, credit and debit cards, loans, certificates of deposit, online...</p>
                                    <a href="../agb-retail/" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                                </div>
                                <div class="sec-img">
                                    <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="post-box">
                                <div class="sec-content">
                                    <a class="corporate">/ Corporate Banking</a>
                                    <h3 class="h3">Business Banking</h2>
                                    <p>Let us handle your banking needs so you can handle business Our comprehensive portfolio of products and services are designed with your business success at heart. We always aim to thorough professional experiences and build relationships.</p>
                                    <a href="../agb-corporate/" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                                </div>
                                <div class="sec-img">
                                    <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img3.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="post-box">
                                <div class="sec-content">
                                    <a class="corporate">/ Corporate Banking</a>
                                    <h3 class="h3">Import & Export Services</h2>
                                    <p>Access import services and export products easily. Receive payments quickly to keep your business moving</p>
                                    <a href="../trade-foreign-exchange#import" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                                </div>
                                <div class="sec-img">
                                    <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img4.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="tabs-mbl mobile-view">
        <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="tabs-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Trade & Foreign Exchange
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="post-box">
                        <div class="sec-content">
                            <a class="corporate">/ Corporate Banking</a>
                            <h3 class="h3">Trade and Foreign <br> Exchange</h2>
                                <p> Products designed to enable businesses trade in multicurrencies through at secure, dependable rates.</p>
                            <a href="#" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                        </div>
                        <div class="sec-img">
                            <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img1.jpg">
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="tabs-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Personal Banking
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <div class="post-box">
                        <div class="sec-content">
                            <a class="corporate">/ Corporate Banking</a>
                            <h3 class="h3">Personal Banking</h2>
                            <p>Bespoke personal banking products services tailored for individuals, including current accounts, savings accounts, credit and debit cards, loans, certificates of deposit, online...</p>
                            <a href="#" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                        </div>
                        <div class="sec-img">
                            <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img2.jpg">
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="tabs-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Business Banking
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="post-box">
                        <div class="sec-content">
                            <a class="corporate">/ Corporate Banking</a>
                            <h3 class="h3">Business Banking</h2>
                            <p>Let us handle your banking needs so you can handle business Our comprehensive portfolio of products and services are designed with your business success at heart. We always aim to thorough professional experiences and build relationships.</p>
                            <a href="#" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                        </div>
                        <div class="sec-img">
                            <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img3.jpg">
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="tabs-title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Import & Export Services
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headinFour" data-parent="#accordion">
                  <div class="card-body">
                      <div class="post-box">
                          <div class="sec-content">
                              <a class="corporate">/ Corporate Banking</a>
                              <h3 class="h3">Import & Export Services</h2>
                              <p>Access import services and export products easily. Receive payments quickly to keep your business moving</p>
                              <a href="#" class="btn btn-link"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg">Learn More</a>
                          </div>
                          <div class="sec-img">
                              <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/thumbnails/tab-img4.jpg">
                          </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
       </div>
   </div>
</section>

<?php get_footer(); ?>