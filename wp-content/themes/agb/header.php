<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
    	<?php 
	        $siteID = get_the_ID();
	        if(is_front_page())
	        {
	            echo bloginfo( 'name' );echo ' - '; echo get_the_title(26);
	        }
	        else
	        {
	            bloginfo( 'name' ); echo ' - '; wp_title('');
	        }
        ?>
    </title>
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
</head>
    <?php
        $addClass_breadcrumb = '';
        if (get_the_ID() == TRADE_FOREIGN_EXCHANGE_PAGE_ID || get_the_ID() == DAY_TO_DAY_PAGE_ID || get_the_ID() == FINANCE_PAGE_ID) 
        {
           $addClass_breadcrumb = 'has--breadcrumb';
        }
    ?>
    <body class="<?php echo $addClass_breadcrumb; ?>">
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
									if (!empty($en_label)) 
									{
										?>
			                                <span class="text"><?php echo $en_label ?></span>
			                                <span class="arrow"></span>
		                                <?php
									}
								?>    
                            </div>
                            <ul class="dropdownMenu">
                            	<?php 
									
									if (!empty($en_label)) 
									{
										?>
			                                <li class="txt-en"><a href="#"><?php echo $en_label ?></a></li>
		                                <?php
		                            }
									if (!empty($ar_label)) 
									{
										?>
			                                <li class="txt-ar"><a href="#"><?php echo $ar_label ?></a></li>
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
                                            if (!empty($en_label)) 
                                            {
                                                ?>
                                                    <span class="text"><?php echo $en_label ?></span>
                                                    <span class="arrow"></span>
                                                <?php
                                            }
                                        ?>    
                                    </div>
                                    <ul class="dropdownMenu">
                                        <?php
                                            if (!empty($en_label)) 
                                            {
                                                ?>
                                                    <li class="txt-en"><a href="#"><?php echo $en_label ?></a></li>
                                                <?php
                                            }
                                        ?>        
                                        <?php
                                            if (!empty($ar_label)) 
                                            {
                                                ?>    
                                                    <li class="txt-ar"><a href="#"><?php echo $ar_label ?></a></li>
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
                                    //dd($mega_menu);
                                    $temp = array();
                                    if (!empty($mega_menu)) 
                                    {
                                        foreach ($mega_menu as $key1 => $row) {
                                            $page_title = $row['page_title'];
                                            $sub_title = $row['sub_title'];
                                            $visit_button_text = $row['visit_button_text'];
                                            $target_id = $row['target_id'];
                                            $page_url = $row['page_url'];
                                            $sub_menus = $row['sub_menus'];
                                            
                                            $addClass = '';
                                            if ($key1 == 0 ) 
                                            {
                                               $addClass = 'has-no-child';
                                            } 
                                            $addClass_active = '@@'.$target_id;
                                            if(get_page_link() == $page_url) 
                                            {
                                               $addClass_active  = 'active';

                                            }
                                            ?>
                                                <li class="<?php echo  $addClass_active; ?>"><a href="<?php echo  $page_url; ?>" class="js-sub-menu-anchor <?php echo  $addClass ?>" data-target="<?php echo  $target_id; ?>"><?php echo  $page_title ?> <span><?php echo  $sub_title ?></span> </a></li>

                                            <?php 
                                        $temp[] = $page_url;
                                        }
                                        // print_r($temp);
                                        // echo get_page_link();
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
                                                            ?>
                                                               
                                                              
                                                            <!-- <ul>
                                                                <li><a href="../trade-foreign-exchange">Trade & Foreign Exchange<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../trade-foreign-exchange/index.html#import">Import services<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../trade-foreign-exchange/index.html#export">Export services<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../trade-foreign-exchange/index.html#bankers-guarantee">Bankers Guarantee<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../trade-foreign-exchange/index.html#trade-document">Trade Documents<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li><a href="../day-to-day">Day to Day <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../day-to-day/index.html#dtd">Accounts<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../day-to-day/index.html#dtd-payment">Payments<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../day-to-day/index.html#dtd-collection">Collections<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                            </ul>
                                                            <ul>
                                                                <li><a href="../finance">Finance <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../finance/index.html#workingcapital">Working capital<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                                <li class="subItems"><a href="../finance/index.html#fixedassets">Fixed assets<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                                            </ul> -->
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
                <!--     <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="about">
                        <div class="c-megaMenu-dropdown">
                            <div class="c-megaMenu-left">
                                <div class="megamenu-content for-desktop">
                                    <h2 class="h2">About AGB</h2>
                                    <a href="../about" class="btn btn-link">Visit Section <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                        </div>
                    </div>
                    <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="corporate-banking">
                        <div class="c-megaMenu-dropdown">
                            <div class="c-megaMenu-left">
                                <div class="megamenu-content for-desktop">
                                    <h2 class="h2">Corporate Banking</h2>
                                    <a href="../agb-corporate" class="btn btn-link">Visit Section <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right js-custom-scroll-bar">
                                <div class="megamenu-links multi">
                                    <ul class="mbl-only">
                                        <li class="mbl-only"><a href="../agb-corporate">Corporate Banking <span>Visit Section</span> <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="../trade-foreign-exchange">Trade & Foreign Exchange<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#import">Import services<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#export">Export services<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#bankers-guarantee">Bankers Guarantee<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#trade-document">Trade Documents<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="../day-to-day">Day to Day <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../day-to-day/index.html#dtd">Accounts<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../day-to-day/index.html#dtd-payment">Payments<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../day-to-day/index.html#dtd-collection">Collections<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="../finance">Finance <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../finance/index.html#workingcapital">Working capital<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../finance/index.html#fixedassets">Fixed assets<img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="retail-banking">
                        <div class="c-megaMenu-dropdown">
                            <div class="c-megaMenu-left">
                                <div class="megamenu-content for-desktop">
                                    <h2 class="h2">Retail Banking </h2>
                                    <a href="../agb-retail/" class="btn btn-link">Visit Section <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right">
                                <div class="megamenu-links">
                                    <ul>
                                        <li class="mbl-only"><a href="../agb-retail/">Retail Banking  <span>Visit Section</span> <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../agb-retail#currentaccount">Current Account  <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../agb-retail#savingaccount">Investment Deposit Account <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../agb-retail">Foreign Currency Exchange <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="find-us">
                        <div class="c-megaMenu-dropdown">
                            <div class="c-megaMenu-left">
                                <div class="megamenu-content for-desktop">
                                    <h2 class="h2">Find Us</h2>
                                    <a href="../get-in-touch" class="btn btn-link">Visit Section <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right">
                                <div class="megamenu-links">
                                    <ul>
                                        <li class="mbl-only"><a href="../get-in-touch">Find Us <span>Visit Section</span> <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../get-in-touch#branches">Branches <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../get-in-touch#call">Call Center <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../get-in-touch#atmlocation">Atm Location <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="terms-conditions">
                        <div class="c-megaMenu-dropdown">
                            <div class="c-megaMenu-left">
                                <div class="megamenu-content for-desktop">
                                    <h2 class="h2">Legal</h2>
                                   
                                    <a href="../legal" class="btn btn-link">Visit Section <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right">
                                <div class="megamenu-links">
                                    <ul>
                                        <li class="mbl-only"><a href="../legal">Legal <span>Visit to the section</span> <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../terms-conditions">Terms & Conditions <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../privacy-policy">Privacy Policy <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../coockie-declaration">Cookie Declaration <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../covid-regulation/">Covid Regulations <img src="https://theprojectdemoserver.com/agb-html/v1//assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        
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
                                if (get_the_ID() == TRADE_FOREIGN_EXCHANGE_PAGE_ID)
                                {
                                    $active_class_breadcrumb = 'active';
                                }
                            ?>
                            <div class="breadcrumb-links <?php echo $active_class_breadcrumb; ?>">
                                <?php
                                    $trade_title = get_the_title(TRADE_FOREIGN_EXCHANGE_PAGE_ID);
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
                                if (get_the_ID() == DAY_TO_DAY_PAGE_ID)
                                {
                                    $active_class_breadcrumb = 'active';
                                }
                            ?>
                            <div class="breadcrumb-links <?php echo $active_class_breadcrumb; ?>">
                                <?php
                                    $day_to_day_title = get_the_title(DAY_TO_DAY_PAGE_ID);
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
                                if (get_the_ID() == FINANCE_PAGE_ID)
                                {
                                    $active_class_breadcrumb = 'active';
                                }
                            ?>
                            <div class="breadcrumb-links <?php echo $active_class_breadcrumb; ?>">
                                <?php
                                    $finance_title = get_the_title(FINANCE_PAGE_ID);
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
