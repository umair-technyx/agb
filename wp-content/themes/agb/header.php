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

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="js-loader">
    <div></div>
</div>
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
									$en_label = get_field('en_label',CONST_SITE_INFORMATION_PAGE_ID);
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
									$en_label = get_field('en_label',CONST_SITE_INFORMATION_PAGE_ID);
									if (!empty($en_label)) 
									{
										?>
			                                <li class="txt-en"><a href="#"><?php echo $en_label ?></a></li>
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
                </div>
            </div>
            <div class="header-shape"></div>
        </div>
        <div class="container container-expanded">
            <div class="sec-header">
                <div class="logobox">
                    <a href="<?php echo get_site_url()?>" class="logo">
                    	<?php 
							$header_logo = get_field('header_logo',CONST_SITE_INFORMATION_PAGE_ID);
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
											$en_label = get_field('en_label',CONST_SITE_INFORMATION_PAGE_ID);
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
                                        <li class="txt-en"><a href="#">EN</a></li>
                                        <li class="txt-ar"><a href="#">عربي</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-icons">
                                <div class="icon-location">
                                    <a href="../get-in-touch/index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-location.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                        </div>
                        <nav class="menu-wraper">
                            <ul class="js-custom-scroll-bar">
                                <li><a href="<?php echo get_permalink(ABOUT_PAGE_ID); ?>" class="js-sub-menu-anchor has-no-child" data-target="about">About AGB <span>Who we are</span> </a></li>
                                <li><a href="<?php echo get_permalink(CORPORATE_PAGE_ID); ?>" class="js-sub-menu-anchor" data-target="corporate-banking">Corporate Banking  <span>Products & Services</span> </a></li>
                                <li><a href="<?php echo get_permalink(RETAIL_PAGE_ID); ?>" class="js-sub-menu-anchor" data-target="retail-banking">Retail Banking  <span>Retail Banking </span> </a></li>
                                <li><a href="<?php echo get_permalink(GET_IN_TOUCH_PAGE_ID); ?>" class="js-sub-menu-anchor" data-target="find-us">Find Us <span>Get in Touch</span> </a></li>
                                <li><a href="<?php echo get_permalink(LEGAL_PAGE_ID); ?>" class="js-sub-menu-anchor" data-target="terms-conditions">Legal <span>Terms & Conditions</span> </a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="about">
                        <div class="c-megaMenu-dropdown">
                            <div class="c-megaMenu-left">
                                <div class="megamenu-content for-desktop">
                                    <h2 class="h2">About AGB</h2>
                                    <!-- <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P> -->
                                    <a href="../about" class="btn btn-link">Visit Section <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <!-- <div class="c-megaMenu-right">
                                <div class="megamenu-links">  
                                    <ul>
                                        <li class="mbl-only"><a href="#">About AGB <span>Visit Section</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="#">DAL ROOTS <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="#">AGB Management <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="c-megaMenu-wrap js-mega-menu" data-menu-id="corporate-banking">
                        <div class="c-megaMenu-dropdown">
                            <div class="c-megaMenu-left">
                                <div class="megamenu-content for-desktop">
                                    <h2 class="h2">Corporate Banking</h2>
                                    <!-- <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P> -->
                                    <a href="../agb-corporate" class="btn btn-link">Visit Section <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right js-custom-scroll-bar">
                                <div class="megamenu-links multi">
                                    <ul class="mbl-only">
                                        <li class="mbl-only"><a href="../agb-corporate">Corporate Banking <span>Visit Section</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="../trade-foreign-exchange">Trade & Foreign Exchange<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#import">Import services<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#export">Export services<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#bankers-guarantee">Bankers Guarantee<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../trade-foreign-exchange/index.html#trade-document">Trade Documents<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="../day-to-day">Day to Day <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../day-to-day/index.html#dtd">Accounts<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../day-to-day/index.html#dtd-payment">Payments<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../day-to-day/index.html#dtd-collection">Collections<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="../finance">Finance <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../finance/index.html#workingcapital">Working capital<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li class="subItems"><a href="../finance/index.html#fixedassets">Fixed assets<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
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
                                    <!-- <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P> -->
                                    <a href="../agb-retail/" class="btn btn-link">Visit Section <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right">
                                <div class="megamenu-links">
                                    <ul>
                                        <li class="mbl-only"><a href="../agb-retail/">Retail Banking  <span>Visit Section</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../agb-retail#currentaccount">Current Account  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../agb-retail#savingaccount">Investment Deposit Account <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../agb-retail">Foreign Currency Exchange <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
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
                                    <!-- <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P> -->
                                    <a href="../get-in-touch" class="btn btn-link">Visit Section <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right">
                                <div class="megamenu-links">
                                    <ul>
                                        <li class="mbl-only"><a href="../get-in-touch">Find Us <span>Visit Section</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../get-in-touch#branches">Branches <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../get-in-touch#call">Call Center <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../get-in-touch#atmlocation">Atm Location <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
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
                                    <!-- <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P> -->
                                    <a href="../legal" class="btn btn-link">Visit Section <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a>
                                </div>
                            </div>
                            <a href="#" class="go-back js-goBack"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"> Back to Menu</a>
                            <div class="c-megaMenu-right">
                                <div class="megamenu-links">
                                    <ul>
                                        <li class="mbl-only"><a href="../legal">Legal <span>Visit to the section</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../terms-conditions">Terms & Conditions <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../privacy-policy">Privacy Policy <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../coockie-declaration">Cookie Declaration <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                        <li><a href="../covid-regulation/">Covid Regulations <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ic-arrow-right-red.svg" alt=">" class="js-tosvg tosvg"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        
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
                                <a href="../agb-corporate">Corporate Banking</a>
                            </div>
                        </div>
                        <div class="breadcrumb-info">
                            <div class="breadcrumb-links">
                                <a href="../trade-foreign-exchange">Trade Product and Services</a>
                            </div>
                            <div class="breadcrumb-links">
                                <a href="../day-to-day/index.html">Day To Day</a>
                            </div>
                            <div class="breadcrumb-links">
                                <a href="../finance">Finance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
