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
  $africa_and_gulf_bank_image = get_field('africa_and_gulf_bank_image');
  $together_we_are_stronger_title = get_field('together_we_are_stronger_title');
  $types_of_services = get_field('types_of_services');
  $learn_more_text = get_field('learn_more_text',CONST_SITE_INFORMATION_PAGE_ID);
  $find_more_text = get_field('find_more_text',CONST_SITE_INFORMATION_PAGE_ID);
  $button_arrow_icon = get_field('button_arrow_icon',CONST_SITE_INFORMATION_PAGE_ID);
?>
<section class="home-banner">
    <div class="b-thumb-wrapper">
        <div class="b-thumb-img">
          <?php
            if (!empty($banner_image))
            {
              ?>
                <picture>
                  <source media="(max-width: 600px) and (orientation: portrait)" srcset="<?php echo $banner_image; ?>">
                  <!-- Required Dimension: desktop = 1440x810px -->
                  <img src="<?php echo $banner_image; ?>" alt="banner-02" class="objectfit lozad">
                </picture>            
              <?php
            }
          ?>
        </div>
        <div class="b-thumb-content">
          <?php
            if (!empty($banner_title))
            {
              ?>
                <h1 class="h1 txt-white"><?php echo $banner_title; ?></h1>
              <?php
            }
            if (!empty($banner_description))
            {
              ?>
                <p class="txt-white"><?php echo $banner_description; ?></p>
              <?php
            }
          ?>
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
                      <?php
                        if (!empty($account_image))
                        {
                          ?>
                            <img src="<?php echo $account_image; ?>" alt="AGB" class="tosvg js-tosvg" />
                          <?php
                        }
                      ?>
                    </div>
                    <?php
                      if (!empty($account_title))
                      {
                        ?>
                          <p><?php echo $account_title; ?></p>
                        <?php
                      }
                      if (!empty($account_url))
                      {
                        ?>
                          <a href="<?php echo get_site_url().$account_url;?>"><?php echo $learn_more_text; ?></a>
                        <?php
                      }
                    ?>
                  </div>
                <?php
              }
            }
          ?>  
        <div class="link-content">
            <div class="sec-img">
              <?php
                if (!empty($our_branches_image))
                {
                  ?>
                    <img src="<?php echo $our_branches_image; ?>" alt="AGB" class="tosvg js-tosvg" />
                  <?php
                }
              ?>  
            </div>
            <?php
              if (!empty($our_branches_title))
              {
                ?>
                  <p><?php echo $our_branches_title; ?></p>
                <?php
              }
              if (!empty($our_branches_url))
              {
                ?>  
                  <a href="<?php echo get_site_url().$our_branches_url;?>"><?php echo $learn_more_text; ?></a>
                <?php
              }
            ?>
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
                      <?php
                        if (!empty($africa_and_gulf_bank_title))
                        {
                          ?>
                            <h3 class="h3"><?php echo $africa_and_gulf_bank_title; ?></h2>
                          <?php
                        }
                        if (!empty($africa_and_gulf_bank_description))
                        {
                          ?>
                            <p><?php echo $africa_and_gulf_bank_description; ?></p>
                          <?php
                        }
                        if (!empty($find_more_url))
                        {
                          ?>
                            <a href="<?php echo get_site_url().$find_more_url;?>" class="btn btn-primary"><?php echo $find_more_text; ?>
                              <img src="<?php echo $button_arrow_icon; ?>" alt=">" class="js-tosvg tosvg">
                            </a>
                          <?php
                        }
                      ?>
                    </div>
                    <div class="content-box-img">
                      <?php
                        if (!empty($africa_and_gulf_bank_image))
                        {
                          ?>
                            <img src="<?php echo $africa_and_gulf_bank_image; ?>">
                          <?php
                        }
                      ?>
                        <div class="footer-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-padded tab-section">
   <div class="container container-expanded">
      <?php
        if (!empty($together_we_are_stronger_title))
        {
          ?>
            <h2 class="h2"><?php echo $together_we_are_stronger_title; ?></h2>
          <?php
        }
      ?>
       <div class="content-tabs desktop-view">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills sec-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <?php
                        if (!empty($types_of_services))
                        {
                          foreach ($types_of_services as $key1 => $value1)
                          {
                            $service_title = $value1['service_title'];
                            //id slug
                            $service_title_small = slugify($service_title);
                            
                            $add_class = '';
                            if ($key1 == 0)
                            {
                              $add_class = 'active';
                            }
                            if (!empty($service_title))
                            {
                              ?>
                                <a class="nav-link para-lg <?php echo $add_class; ?>" id="v-pills-<?php echo strtolower($service_title_small);?>-tab" data-toggle="pill" href="#v-pills-<?php echo strtolower($service_title_small); ?>" role="tab" aria-controls="v-pills-<?php echo strtolower($service_title_small); ?>" aria-selected="true"><?php echo $service_title; ?></a>
                              <?php
                            }
                          }
                        }
                      ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content tab-detail" id="v-pills-tabContent">
                      <?php
                        if (!empty($types_of_services))
                        {
                          foreach ($types_of_services as $key2 => $value2)
                          {
                            $path_title = $value2['path_title'];
                            $service_title = $value2['service_title'];
                            $service_description = $value2['service_description'];
                            $service_image = $value2['service_image'];
                            $service_url = $value2['service_url'];
                            //id slug
                            $service_title_small = slugify($service_title);

                            $add_class_2 = '';
                            if ($key2 == 0)
                            {
                              $add_class_2 = 'show active';
                            }
                            ?>
                              <div class="tab-pane fade <?php echo $add_class_2; ?>" id="v-pills-<?php echo strtolower($service_title_small); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo strtolower($service_title_small); ?>-tab">
                                  <div class="post-box">
                                      <div class="sec-content">
                                          <?php
                                            if (!empty($path_title))
                                            {
                                              ?>
                                                <a class="corporate"><?php echo $path_title; ?></a>
                                              <?php
                                            }
                                            if (!empty($service_title))
                                            {
                                              ?>
                                                <h3 class="h3"><?php echo $service_title; ?></h2>
                                              <?php
                                            }
                                            if (!empty($service_description))
                                            {
                                              ?>
                                                <p><?php echo $service_description; ?></p>
                                              <?php
                                            }
                                            if (!empty($service_url))
                                            {
                                              if (!empty($value2['hashtag'])) 
                                              {
                                                 $hashtag = $value2['hashtag'];
                                              }
                                              ?>
                                                <a href="<?php echo  $service_url.$hashtag; ?>" class="btn btn-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"><?php echo $learn_more_text; ?></a>
                                              <?php
                                            }
                                          ?>
                                      </div>
                                      <div class="sec-img">
                                        <?php
                                            if (!empty($service_image))
                                            {
                                              ?>
                                                <img src="<?php echo $service_image; ?>">
                                              <?php
                                            }
                                          ?>
                                      </div>
                                  </div>
                              </div>
                            <?php
                          }
                        }
                      ?>
                    </div>
                </div>
            </div>
       </div>
       <div class="tabs-mbl mobile-view">
        <div id="accordion">
          <?php
            if (!empty($types_of_services))
            {
              foreach ($types_of_services as $key3 => $value3)
              {
                $path_title = $value3['path_title'];
                $service_title = $value3['service_title'];
                $service_description = $value3['service_description'];
                $service_image = $value3['service_image'];
                $service_url = $value3['service_url'];
                ?>
                  <div class="card">
                    <div class="card-header" id="heading<?php echo $key3;?>">
                      <h5 class="mb-0">
                        <?php
                          if (!empty($service_title))
                          {
                            ?>
                              <button class="tabs-title" data-toggle="collapse" data-target="#collapse<?php echo $key3;?>" aria-expanded="true" aria-controls="collapse<?php echo $key3;?>">
                                <?php echo $service_title; ?>
                              </button>
                            <?php
                          }
                        ?>
                      </h5>
                    </div>
                
                    <div id="collapse<?php echo $key3;?>" class="collapse show" aria-labelledby="heading<?php echo $key3;?>" data-parent="#accordion">
                      <div class="card-body">
                          <div class="post-box">
                              <div class="sec-content">
                                  <?php
                                    if (!empty($path_title))
                                    {
                                      ?>
                                        <a class="corporate"><?php echo $path_title; ?></a>
                                      <?php
                                    }
                                    if (!empty($service_title))
                                    {
                                      ?>
                                        <h3 class="h3"><?php echo $service_title; ?></h2>
                                      <?php
                                    }
                                    if (!empty($service_description))
                                    {
                                      ?>
                                        <p><?php echo $service_description; ?></p>
                                      <?php
                                    }
                                    if (!empty($service_url))
                                    {
                                      if (!empty($value3['hashtag'])) 
                                      {
                                         $hashtag = $value3['hashtag'];
                                      }
                                      ?>
                                        <a href="<?php echo  $service_url.$hashtag; ?>" class="btn btn-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"><?php echo $learn_more_text; ?></a>
                                      <?php
                                    }
                                  ?>
                              </div>
                              <div class="sec-img">
                                <?php
                                  if (!empty($service_image))
                                  {
                                    ?>
                                      <img src="<?php echo $service_image; ?>">
                                    <?php
                                  }
                                ?>
                              </div>
                          </div>
                      </div>
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