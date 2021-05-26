<?php 
    $global_perspectives_heading = get_field('global_perspectives_heading',CONST_SITE_INFORMATION_PAGE_ID);
    $global_perspectives_description = get_field('global_perspectives_description',CONST_SITE_INFORMATION_PAGE_ID);
    $enter_email_placeholder = get_field('enter_email_placeholder',CONST_SITE_INFORMATION_PAGE_ID);
    $signup_button_text = get_field('signup_button_text',CONST_SITE_INFORMATION_PAGE_ID);
    $agb_bank_heading = get_field('agb_bank_heading',CONST_SITE_INFORMATION_PAGE_ID);
    $products_heading = get_field('products_heading',CONST_SITE_INFORMATION_PAGE_ID);
    $footer_logo = get_field('footer_logo',CONST_SITE_INFORMATION_PAGE_ID);
    $copyright_text = get_field('copyright_text',CONST_SITE_INFORMATION_PAGE_ID);
    $about_agb_title = get_field('about_agb_title',CONST_SITE_INFORMATION_PAGE_ID);
    $find_us_title = get_field('find_us_title',CONST_SITE_INFORMATION_PAGE_ID);
    $legal_title = get_field('legal_title',CONST_SITE_INFORMATION_PAGE_ID);
    $corporate_banking_title = get_field('corporate_banking_title',CONST_SITE_INFORMATION_PAGE_ID);
    $retail_banking_title = get_field('retail_banking_title',CONST_SITE_INFORMATION_PAGE_ID);
    $legal_subtitle = get_field('legal_subtitle',CONST_SITE_INFORMATION_PAGE_ID);
    $terms_and_conditions_text = get_field('terms_and_conditions_text',CONST_SITE_INFORMATION_PAGE_ID);
    $cookie_policy_text = get_field('cookie_policy_text',CONST_SITE_INFORMATION_PAGE_ID);
    $privacy_notice_text = get_field('privacy_notice_text',CONST_SITE_INFORMATION_PAGE_ID);


    $required_error_message = get_field('error_message',CONST_SITE_INFORMATION_PAGE_ID);
    $valid_email_error_message = get_field('valid_email_error_message',CONST_SITE_INFORMATION_PAGE_ID);
?>
<section class="sec-padded--top c-main-footer">
    <div class="sec-signup">
        <div class="container container-expanded">
            <div class="signup-box">
                <div class="post-content">
                    <?php 
                        if (!empty($global_perspectives_heading)) 
                        {
                            ?>
                                <h2 class="h2"><?php echo $global_perspectives_heading ?></h2>
                            <?php
                        }
                        if (!empty($global_perspectives_description)) 
                        {
                            ?>
                                <p><?php echo $global_perspectives_description ?></p>
                            <?php
                        }
                    ?>    
                </div>
                <div class="subscribebox">
                    <form onsubmit="return false;">
                        <?php 
                            if (!empty($enter_email_placeholder)) 
                            {

                                $currentPageID = get_the_ID();
                                $siteID = get_current_blog_id();

                                $lang = '';
                                if($siteID == CONST_AGB_AR_SITE_ID)
                                {
                                    $lang = 'Arabic';
                                }

                                if($siteID == CONST_AGB_EN_SITE_ID)

                                {
                                    $lang = 'English';
                                }

                                ?>
                                    <div class="form-group">
                                        <input type="email" class="subscrib" id="user-email" name="user-email" placeholder="<?php echo $enter_email_placeholder ?>">
                                        <input type="hidden"id="lang" value="<?php echo $lang?>">
                                        <div class="required-msg">
                                            <p class="error-email"></p>
                                        </div>
                                    </div>
                                <?php
                            }
                            if (!empty($signup_button_text)) 
                            {
                                ?>
                                    <button type="submit" class="submit-btn"><?php echo $signup_button_text ?></button>
                                    <div class="error error-response">
                                    </div>
                                    <div class="success">
                                    </div>
                                <?php
                            }
                        ?>    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="sec-footer">
            <div class="container container-expanded">
                <div class="row">
                   <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            <!-- <div class="col-lg-3 col-6">
                                <div class="quicklinks">
                                    <ul>
                                        <?php 
                                            if (!empty($agb_bank_heading)) 
                                            {
                                                ?>
                                                    <li class="head"><?php echo $agb_bank_heading ?></li>
                                                <?php
                                            }
                                            if (!empty($about_agb_title)) 
                                            {
                                                ?>        
                                                    <li><a href="<?php echo get_permalink(ABOUT_PAGE_ID); ?>"><?php echo $about_agb_title ?></a></li>
                                                <?php
                                            }
                                            if (!empty($find_us_title)) 
                                            {
                                                ?>
                                                    <li><a href="<?php echo get_permalink(GET_IN_TOUCH_PAGE_ID); ?>"><?php echo $find_us_title ?></a></li>
                                                <?php
                                            }
                                            if (!empty($legal_title)) 
                                            {
                                                ?>
                                                    <li><a href="<?php echo get_permalink(LEGAL_PAGE_ID); ?>"><?php echo $legal_title ?></a></li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="quicklinks">
                                    <ul>
                                        <?php 
                                            if (!empty($products_heading)) 
                                            {
                                                ?>
                                                    <li class="head"><?php echo $products_heading ?></li>
                                                <?php
                                            }
                                            if (!empty($retail_banking_title)) 
                                            {
                                                ?>
                                                    <li><a href="<?php echo get_permalink(RETAIL_PAGE_ID); ?>"><?php echo $retail_banking_title ?></a></li>
                                                <?php
                                            }
                                            if (!empty($corporate_banking_title)) 
                                            {
                                                ?>
                                                    <li><a href="<?php echo get_permalink(CORPORATE_PAGE_ID); ?>"><?php echo $corporate_banking_title ?></a></li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                           -->   <?php
                                $footer_menu = get_field('footer_menu',CONST_SITE_INFORMATION_PAGE_ID);
                                foreach ($footer_menu as $key => $row) 
                                {
                                    $menu_heading = $row['menu_heading'];
                                    $menu = $row['menu'];
                                    ?>

                                        <div class="col-lg-3 col-6">
                                            <div class="quicklinks">
                                                <ul>
                                                    <?php 
                                                        if (!empty($menu_heading)) 
                                                        {
                                                            ?>
                                                                <li class="head"><?php echo $menu_heading ?></li>
                                                            <?php
                                                        }
                                                        if (!empty($menu)) 
                                                        {
                                                            foreach ($menu as $key => $row1) {
                                                                $footer_menu_title = $row1['footer_menu_title'];
                                                                $footer_menu_url = $row1['footer_menu_url'];

                                                                # code...
                                                            ?>
                                                                <li><a href="<?php echo $footer_menu_url ?>"><?php echo $footer_menu_title ?></a></li>
                                                            <?php
                                                            }
                                                        }
                                                        
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>


                                    <?php
                                }

                            ?>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-4 offset-xl-1">
                        <div class="social-tabs">
                            <div class="footer-logo">
                                <?php 
                                    if (!empty($footer_logo)) 
                                    {
                                        ?>
                                            <img src="<?php echo $footer_logo ?>" alt="AGB" class="tosvg js-tosvg">
                                        <?php
                                    }
                                ?>
                            </div>
                            <!-- <div class="social-links">
                                <ul>
                                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook.svg" class="tosvg js-tosvg"></a> </li>
                                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg" class="tosvg js-tosvg"></a> </li>
                                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg" class="tosvg js-tosvg"></a> </li>
                                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/linkedin.svg" class="tosvg js-tosvg"></a> </li>
                                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/youtube.svg" class="tosvg js-tosvg"></a> </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="foot">
                <div class="container container-expanded">
                    <div class="sec-foot">
                        <div class="copyright">
                            <?php 
                                if (!empty($copyright_text)) 
                                {
                                    ?>
                                        <p><?php echo $copyright_text ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="foot-tabs">
                            <ul>
                                <li><a href="<?php echo get_permalink(TERMS_AND_CONDITIONS_PAGE_ID); ?>"><?php echo $terms_and_conditions_text ?></a></li>
                                <li><a href="<?php echo get_permalink(COOKIE_DECLARATION_PAGE_ID); ?>"><?php echo $cookie_policy_text ?></a></li>
                                <li><a href="<?php echo get_permalink(PRIVACY_POLICY_PAGE_ID); ?>"><?php echo $privacy_notice_text ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape"></div>
    </footer>
</section>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/vendors.min.js?v=<?php echo CONST_CSS_VERSION?>"></script>
<script type="text/javascript">
    var customVariables = {
        assetsURL : 'assets',
    };
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.min.js?v=<?php echo CONST_CSS_VERSION?>"></script>
<script type="text/javascript">
    var nonce = "<?php echo wp_create_nonce("user_nonce") ?>";
    $('.submit-btn').click(function(event)
        {
           event.preventDefault();

           // jQuery('.subscrib').val('');
           jQuery('.error-response').hide();
           jQuery('.success').hide();

            var user_email = jQuery("#user-email").val();
            var lang = jQuery("#lang").val();
            var  aErrors = {}
            if(!user_email)
            {
                aErrors['email'] = "<?php echo $required_error_message ; ?>";
            }
           
            if(user_email)
            {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                validEmail = regex.test(user_email);
                if(validEmail==false)
                {
                    aErrors['email'] = " <?php echo $valid_email_error_message ; ?>";
                }
            }
            var errsLength = Object.keys(aErrors).length;
            if(errsLength > 0)
            {
                $.each(aErrors, function( key, value ) 
                {
                    $('.error-'+key).html(value);
                    $('.error-'+key).show().delay(3000).fadeOut();
                });

            }
            else
            {
                var dataString = {
                    user_email:user_email,
                    lang:lang,
                    action:'request_information'
                };
                $.ajax(
                {
                    type:"POST",
                    url: "<?php echo admin_url('admin-ajax.php'); ?>",
                    data:dataString,
                    nonce: nonce,
                    success: function(result)
                    {   
                        result = jQuery.parseJSON(result);
                        // $('.subscrib').val('');
                        jQuery("#user-email").val('');
                        if(result.status==1)
                        {   
                            
                            $('.success').html('<p>'+result.response+'<p>');
                            $('.success').show().delay(10000).fadeOut();
                        }
                        else
                        {   
                            $('.error-response').html('<p>'+result.response+'<p>');
                            $('.error-response').show().delay(10000).fadeOut();
                        }
                    }
                });  
            }
        });
</script>
    </body>

</html>