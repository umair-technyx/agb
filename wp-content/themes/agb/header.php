<!doctype html>


<?php

    $currentPageID = get_the_ID();

    $siteID = get_current_blog_id();

    $englishURL = get_site_url(CONST_AGB_EN_SITE_ID);

    $arabicURL = get_site_url(CONST_AGB_AR_SITE_ID);
    

    if($siteID == CONST_AGB_EN_SITE_ID)

    {

        $lang = 'en';

        $dir = 'ltr';

    }

    if($siteID == CONST_AGB_AR_SITE_ID)

    {

        $lang = 'ar';

        $dir = 'rtl';

    }



?>

<html class="no-js" lang="<?php echo $lang ?>" dir="<?php echo $dir ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
    	<?php 
	       if(is_front_page())

            {

                echo bloginfo( 'name' );

            }
	        else
	        {
                if($siteID == CONST_AGB_EN_SITE_ID)

                {

                     $level1Title = str_replace("&amp;", "&", get_the_title());

                    $level1Title = html_entity_decode($level1Title);

                    $level1Title = str_replace("–", "-", $level1Title);

                    echo $level1Title; echo ' | ';  bloginfo( 'name' );

                }

                if($siteID == CONST_AGB_AR_SITE_ID)

                {

                     $level1Title = str_replace("&amp;", "&", get_the_title());
                    $level1Title = html_entity_decode($level1Title);
                    $level1Title = str_replace("–", "-", $level1Title);

                    // echo $level1Title; echo ' | ';  bloginfo( 'name' );
                    echo bloginfo( 'name' ) .' | '; echo $level1Title; 
                }
                
	        }
        ?>
    </title>
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/favicon-16x16.png">
    <!-- <link rel="manifest" href="/site.webmanifest"> -->

    <?php

    

    if($siteID == CONST_AGB_EN_SITE_ID)
    {
        ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css?v=<?php echo CONST_CSS_VERSION?>">
        <?php

    }
    if($siteID == CONST_AGB_AR_SITE_ID)
    {
        ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-rtl.min.css?v=<?php echo CONST_CSS_VERSION?>">
        <?php

    }


?>

    
</head>
    <?php
        $addClass_breadcrumb = '';
        if (get_the_ID() == TRADE_FOREIGN_EXCHANGE_PAGE_ID || get_the_ID() == DAY_TO_DAY_PAGE_ID || get_the_ID() == FINANCE_PAGE_ID || is_single()) 
        {
           $addClass_breadcrumb = 'has--breadcrumb';
        }
    ?>
    <body class="<?php echo $addClass_breadcrumb.' '.$siteID; ?>">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="js-loader">
    <div></div>
</div>
<?php 
    $en_label = get_field('en_label',CONST_SITE_INFORMATION_PAGE_ID);
    $ar_label = get_field('ar_label',CONST_SITE_INFORMATION_PAGE_ID);
    $header_logo = get_field('header_logo',CONST_SITE_INFORMATION_PAGE_ID);
    $location_icon = get_field('location_icon',CONST_SITE_INFORMATION_PAGE_ID);
    $location_icon_url = get_field('location_icon_url',CONST_SITE_INFORMATION_PAGE_ID);
    $about_agb_title = get_field('about_agb_title',CONST_SITE_INFORMATION_PAGE_ID);
    $about_agb_subtitle = get_field('about_agb_subtitle',CONST_SITE_INFORMATION_PAGE_ID);
    $corporate_banking_title = get_field('corporate_banking_title',CONST_SITE_INFORMATION_PAGE_ID);
    $corporate_banking_subtitle = get_field('corporate_banking_subtitle',CONST_SITE_INFORMATION_PAGE_ID);
    $retail_banking_title = get_field('retail_banking_title',CONST_SITE_INFORMATION_PAGE_ID);
    $retail_banking_subtitle = get_field('retail_banking_subtitle',CONST_SITE_INFORMATION_PAGE_ID);
    $find_us_title = get_field('find_us_title',CONST_SITE_INFORMATION_PAGE_ID);
    $find_us_subtitle = get_field('find_us_subtitle',CONST_SITE_INFORMATION_PAGE_ID);
    $legal_title = get_field('legal_title',CONST_SITE_INFORMATION_PAGE_ID);
    $legal_subtitle = get_field('legal_subtitle',CONST_SITE_INFORMATION_PAGE_ID);
    $visit_section_text = get_field('visit_section_text',CONST_SITE_INFORMATION_PAGE_ID);
    $back_to_menu_text = get_field('back_to_menu_text',CONST_SITE_INFORMATION_PAGE_ID);
    $arrow_right_icon = get_field('arrow_right_icon',CONST_SITE_INFORMATION_PAGE_ID);
?>
<header class="header">
    <div class="header-cover">
        <div class="header-top">
            <div class="container container-expanded">
                <div class="sitetools">
                    <!-- <div class="searchbox">
                        <form>
                            <input tpe="email" class="search" placeholder="Search" required>
                            <button type="submit" class="search-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-search.svg" alt="Search" class="tosvg js-tosvg" /></button>
                        </form>
                    </div> -->
                    <div class="languageselector js-languageselector">
                        <div class="dropdown">
                            <div class="head">
                            	<?php
                                    $siteID = get_current_blog_id();

                                    global $post;

                                    $post_slug = $post->post_name;

                                    if($siteID == CONST_AGB_AR_SITE_ID)
                                    {
                                        $lang_label_text ="عربي";
                                        ?>
                                            <span class="text"><?php echo $ar_label ?></span>
                                            <span class="arrow"></span>
                                        <?php
                                    }
                                    if($siteID == CONST_AGB_EN_SITE_ID)
                                    {
                                        $lang_label_text = 'EN';
                                        ?>
                                            <span class="text"><?php echo $en_label ?></span>
                                            <span class="arrow"></span>
                                        <?php
                                    }
                                ?>   
                            </div>
                            <ul class="dropdownMenu">
                            	<?php

                                        $siteID = get_current_blog_id();
                                        global $post;

                                        $post_slug = $post->post_name;


                                        $addClassEN = 'txt-en';
                                        $addClassAR = 'txt-ar';

                                        $urlEN = get_site_url(CONST_AGB_EN_SITE_ID);
                                        $urlAR = get_site_url(CONST_AGB_AR_SITE_ID);

                                        $urlEN .= '/'.$post_slug ;
                                        $urlAR .= '/'.$post_slug ;

                                        if (is_front_page()) 
                                        {
                                            $urlEN = get_site_url(CONST_AGB_EN_SITE_ID);
                                            $urlAR = get_site_url(CONST_AGB_AR_SITE_ID);

                                        }

                                        // if ('service' == get_post_type())
                                        // {
                                        //     $url = get_site_url(CONST_PERTROMIN_EN_SITE_ID);
                                        // }
                                    ?> 
                                <?php
                                    if (!empty($en_label)) 
                                    {
                                        ?>
                                            <li class="<?php echo $addClassEN?>"><a href="<?php echo $urlEN ?>"><?php echo $en_label ?></a></li>
                                        <?php
                                    }
                                ?>        
                                <?php
                                    if (!empty($ar_label)) 
                                    {
                                        ?>    
                                            <li class="<?php echo $addClassAR ?>"><a href="<?php echo $urlAR ?>"><?php echo $ar_label ?></a></li>
                                        <?php
                                    }
                                ?>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-shape"></div>
        </div>
        <div class="container container-expanded">
            <div class="sec-header">
                <div class="logobox">
                    <a href="<?php echo get_site_url(); ?>" class="logo">
                    	<?php
							if (!empty($header_logo)) 
							{
								?>
                        			<img src="<?php echo $header_logo ?>" alt="AGB" class="tosvg js-tosvg" />
                        		<?php
							}
						?>    
                    </a>
                </div>
                <div class="mega-menu">
                    <div class="navigation">
                        <div class="additional-icons">
                            <div class="languageselector js-languageselector">
                                <div class="dropdown">
                                    <div class="head">
                                        <?php
                                    $siteID = get_current_blog_id();

                                    global $post;

                                    $post_slug = $post->post_name;

                                    if($siteID == CONST_AGB_AR_SITE_ID)
                                    {
                                        $lang_label_text ="عربي";
                                        ?>
                                            <span class="text"><?php echo $ar_label ?></span>
                                            <span class="arrow"></span>
                                        <?php
                                    }
                                    if($siteID == CONST_AGB_EN_SITE_ID)
                                    {
                                        $lang_label_text = 'EN';
                                        ?>
                                            <span class="text"><?php echo $en_label ?></span>
                                            <span class="arrow"></span>
                                        <?php
                                    }
                                ?>    
                                    </div>
                                    <ul class="dropdownMenu">
                                         <?php

                                        $siteID = get_current_blog_id();
                                        global $post;

                                        $post_slug = $post->post_name;


                                        $addClassEN = 'txt-en';
                                        $addClassAR = 'txt-ar';

                                        $urlEN = get_site_url(CONST_AGB_EN_SITE_ID);
                                        $urlAR = get_site_url(CONST_AGB_AR_SITE_ID);

                                        $urlEN .= '/'.$post_slug ;
                                        $urlAR .= '/'.$post_slug ;

                                        if (is_front_page()) 
                                        {
                                            $urlEN = get_site_url(CONST_AGB_EN_SITE_ID);
                                            $urlAR = get_site_url(CONST_AGB_AR_SITE_ID);

                                        }

                                        // if ('service' == get_post_type())
                                        // {
                                        //     $url = get_site_url(CONST_PERTROMIN_EN_SITE_ID);
                                        // }
                                    ?> 
                                <?php
                                    if (!empty($en_label)) 
                                    {
                                        ?>
                                            <li class="<?php echo $addClassEN?>"><a href="<?php echo $urlEN ?>"><?php echo $en_label ?></a></li>
                                        <?php
                                    }
                                ?>        
                                <?php
                                    if (!empty($ar_label)) 
                                    {
                                        ?>    
                                            <li class="<?php echo $addClassAR ?>"><a href="<?php echo $urlAR ?>"><?php echo $ar_label ?></a></li>
                                        <?php
                                    }
                                ?>     
                                    </ul>
                                </div>
                            </div>
                            <div class="header-icons">
                                <div class="icon-location">
                                    <?php
                                        if (!empty($location_icon)) 
                                        {
                                            ?>
                                                <a href="<?php echo $location_icon_url ?>">
                                                    <img src="<?php echo $location_icon ?>" alt=">" class="js-tosvg tosvg">
                                                </a>
                                            <?php
                                        }
                                    ?>    
                                </div>
                            </div>
                        </div>
                        <nav class="menu-wraper">
                            <ul class="js-custom-scroll-bar">


                                <?php 
                                    $mega_menu = get_field('mega_menu',CONST_SITE_INFORMATION_PAGE_ID);
                                    // dd($mega_menu);
                                    if (!empty($mega_menu)) 
                                    {
                                        foreach ($mega_menu as $key1 => $row) {
                                            $page_title = $row['page_title'];
                                            $sub_title = $row['sub_title'];
                                            $visit_button_text = $row['visit_button_text'];
                                            $target_id = $row['target_id'];
                                            $select_page = $row['select_page'];
                                            // $page_url = $row['page_url'];
                                            
                                            $page_url = get_permalink($select_page);

                                            $sub_menus = $row['sub_menus'];
                                            $page_id = $select_page;
                                            
                                            $addClass = '';
                                            $addClass_active = '';
                                            if ($key1 == 0 ) 
                                            {
                                               $addClass = 'has-no-child';
                                            } 

                                            $current_page_id = get_the_ID();
                                            $parent_id = wp_get_post_parent_id(get_the_ID());
                                            // echo $post->post_parent;
                                            if(get_page_link() == $page_url || $parent_id == $page_id || $parent_id == $page_id) 
                                            {
                                               $addClass_active  = 'active';

                                            }
                                            else{
                                                $addClass_active = '@@'.$target_id;
                                            }
                                            ?>
                                                <li class="<?php echo  $addClass_active; ?>"><a href="<?php echo  $page_url; ?>" class="js-sub-menu-anchor <?php echo  $addClass ?>" data-target="<?php echo  $target_id; ?>"><?php echo  $page_title ?> <span><?php echo  $sub_title ?></span> </a></li>

                                            <?php 

                                        }
                                    }

                                ?>
                               <!--  <li class="@@about"><a href="../about" class="js-sub-menu-anchor has-no-child" data-target="about">About AGB <span>Who we are</span> </a></li>
                                <li class="@@agbcorporate"><a href="../agb-corporate" class="js-sub-menu-anchor" data-target="corporate-banking">Corporate Banking  <span>Products & Services</span> </a></li>
                                <li class="@@agbretail"><a href="../agb-retail/" class="js-sub-menu-anchor" data-target="retail-banking">Retail Banking  <span>Retail Banking </span> </a></li>
                                <li class="@@getintouch"><a href="../get-in-touch" class="js-sub-menu-anchor" data-target="find-us">Find Us <span>Get in Touch</span> </a></li>
                                <li class="@@legal"><a href="../legal" class="js-sub-menu-anchor" data-target="terms-conditions">Legal <span>Terms & Conditions</span> </a></li> -->
                            </ul>
                        </nav>
                    </div>

                     <?php 
                        $mega_menu = get_field('mega_menu',CONST_SITE_INFORMATION_PAGE_ID);
                        // dd($mega_menu);
                        if (!empty($mega_menu)) 
                        {
                            foreach ($mega_menu as $key => $row) {
                                $page_title = $row['page_title'];
                                $sub_title = $row['sub_title'];
                                $visit_button_text = $row['visit_button_text'];
                                $target_id = $row['target_id'];
                                $page_url = $row['page_url'];
                                $select_page = $row['select_page'];
                                // $page_url = $row['page_url'];
                                $page_url = get_permalink($select_page);
                                
                                $sub_menus = $row['sub_menus'];
                                ?>

                                    <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="<?php echo  $target_id; ?>">
                                        <div class="c-megaMenu-dropdown">
                                            <div class="c-megaMenu-left">
                                                <div class="megamenu-content for-desktop">
                                                    <h2 class="h2"><?php echo  $page_title ?></h2>
                                                    <a href="<?php echo  $page_url; ?>" class="btn btn-link"><?php echo  $visit_button_text ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                                </div>
                                            </div>
                                            <a href="#" class="go-back js-goBack"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                                            <?php 
                                            if (!empty($mega_menu)) 
                                            {
                                                ?>
                                                    <div class="c-megaMenu-right js-custom-scroll-bar">
                                                        <div class="megamenu-links multi">
                                                            <ul class="mbl-only">
                                                                <li class="mbl-only"><a href="<?php echo  $page_url; ?>"><?php echo  $page_title; ?><span><?php echo  $visit_button_text; ?></span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                            </ul>
                                                            <?php
                                                                if (!empty($sub_menus)) 
                                                                {
                                                                    foreach ($sub_menus as $key => $row2) 
                                                                    {
                                                                        $menu_column = $row2['menu_column'];

                                                                        ?>
                                                                            <ul>
                                                                                <?php 
                                                                                    foreach ($menu_column as $key => $row3) 
                                                                                    {
                                                                                        $hashtag = '';
                                                                                        $sub_page_title = $row3['page_title'];
                                                                                        $sub_page_url = $row3['page_url'];
                                                                                        $sub_page_id = $row3['page_id'];
                                                                                        $sub_page_url = get_permalink($sub_page_id);
                                                                                        
                                                                                        if (!empty($row3['hashtag'])) 
                                                                                        {
                                                                                           $hashtag = $row3['hashtag'];
                                                                                        }


                                                                                        ?>
                                                                                            <li><a href="<?php echo  $sub_page_url.$hashtag; ?>"><?php echo  $sub_page_title; ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>

                                                                                        <?php
                                                                                    }
                                                                                ?>
                                                                            </ul>

                                                                        <?php
                                                                    }
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
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
                <div class="hamburger-menu js-menu-toggle">
                    <div class="meu-sidebr">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <div class="header-breadcrumb">
            <div class="container container-expanded">
                <div class="banking-info">
                    <div class="info-wrapper">
                        <div class="breadcrumb-info">
                            <div class="info-box1">
                                <?php
                                    $corporate_title = get_the_title(CORPORATE_PAGE_ID);
                                    // $corporate_title = get_field('heading',CORPORATE_PAGE_ID);
                                    $corporate_url = get_permalink(CORPORATE_PAGE_ID);
                                    if (!empty($corporate_title))
                                    {
                                        ?>
                                            <a href="<?php echo $corporate_url ?>"><?php echo $corporate_title ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="breadcrumb-info">
                            <?php
                                $active_class_breadcrumb = '';
                                if (get_the_ID() == TRADE_FOREIGN_EXCHANGE_PAGE_ID || 'foriegn-exchange' == get_post_type())
                                {
                                    $active_class_breadcrumb = 'active';
                                }

                                $foreign_exchange = getPostTypeData('foreign-exchange');
                                //dd($foreign_exchange);
                                foreach ($foreign_exchange->posts as $key4 => $row4) 
                                {
                                    $post_id = $row4->ID;
                                    if(get_the_ID() == $post_id) 
                                    {
                                       $active_class_breadcrumb  = 'active';

                                    }
                                }
                            ?>
                            <div class="breadcrumb-links <?php echo $active_class_breadcrumb; ?>">
                                <?php
                                    // $trade_title = get_the_title(TRADE_FOREIGN_EXCHANGE_PAGE_ID);
                                    $trade_title = get_field('heading',TRADE_FOREIGN_EXCHANGE_PAGE_ID);
                                    $trade_url = get_permalink(TRADE_FOREIGN_EXCHANGE_PAGE_ID);
                                    if (!empty($trade_title))
                                    {
                                        ?>
                                            <a href="<?php echo $trade_url ?>"><?php echo $trade_title ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                                $active_class_breadcrumb = '';
                                if (get_the_ID() == DAY_TO_DAY_PAGE_ID || 'day-to-day' == get_post_type())
                                {
                                    $active_class_breadcrumb = 'active';
                                }
                            ?>
                            <div class="breadcrumb-links <?php echo $active_class_breadcrumb; ?>">
                                <?php
                                    // $day_to_day_title = get_the_title(DAY_TO_DAY_PAGE_ID);
                                    $day_to_day_title = get_field('heading',DAY_TO_DAY_PAGE_ID);
                                    $day_to_day_url = get_permalink(DAY_TO_DAY_PAGE_ID);
                                    if (!empty($day_to_day_title))
                                    {
                                        ?>
                                            <a href="<?php echo $day_to_day_url ?>"><?php echo $day_to_day_title ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                                $active_class_breadcrumb = '';
                                if (get_the_ID() == FINANCE_PAGE_ID || 'finance' == get_post_type())
                                {
                                    $active_class_breadcrumb = 'active';
                                }
                            ?>
                            <div class="breadcrumb-links <?php echo $active_class_breadcrumb; ?>">
                                <?php
                                    // $finance_title = get_the_title(FINANCE_PAGE_ID);
                                    $finance_title = get_field('heading',FINANCE_PAGE_ID);
                                    $finance_url = get_permalink(FINANCE_PAGE_ID);
                                    if (!empty($finance_title))
                                    {
                                        ?>
                                            <a href="<?php echo $finance_url ?>"><?php echo $finance_title ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
