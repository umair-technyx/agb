<?php
/*
Template Name: Legal
*/
get_header();?>
<?php 
	$agb_legal_title = get_field('agb_legal_title');
	$terms_and_conditions_url = get_permalink(TERMS_AND_CONDITIONS_PAGE_ID);
	$terms_and_conditions_title = get_the_title(TERMS_AND_CONDITIONS_PAGE_ID);
	$privacy_policy_url = get_permalink(PRIVACY_POLICY_PAGE_ID);
	$privacy_policy_title = get_the_title(PRIVACY_POLICY_PAGE_ID);
	$cookie_declaration_url = get_permalink(COOKIE_DECLARATION_PAGE_ID);
	$cookie_declaration_title = get_the_title(COOKIE_DECLARATION_PAGE_ID);
	$covid_regulation_url = get_permalink(COVID_REGULATION_PAGE_ID);
	$covid_regulation_title = get_the_title(COVID_REGULATION_PAGE_ID);

	$button_arrow_icon = get_field('button_arrow_icon',CONST_SITE_INFORMATION_PAGE_ID);
	$learn_more_text = get_field('learn_more_text',CONST_SITE_INFORMATION_PAGE_ID);

	$legal_pages = get_field('legal_pages');
	dd($legal_pages);
	foreach ($legal_pages as $key => $value)
	{
		$page_title = $value['page_title'];
		$page_url = $value['page_url'];
		echo $page_title;
		echo $page_url;
	}
?>
<section class="sec-services sec-padded--head">
    <div class="container container-expanded">
      	<div class="service-detail legal">
	        <div class="sec-header">
	        	<?php
	        		if (!empty($agb_legal_title))
	        		{
	        			?>
	        				<h2 class="h2"><?php echo $agb_legal_title ?></h2>
	        			<?php
	        		}
	        	?>
	        </div>
	        <div class="post-services">
	            <div class="post-detail">
	                <div class="post-description">
	                	<?php
			        		if (!empty($terms_and_conditions_title))
			        		{
			        			?>
	                    			<h3><?php echo $terms_and_conditions_title ?></h3>
                    			<?php
                			}
                    		if (!empty($terms_and_conditions_url))
			        		{
			        			?>
	                    			<a href="<?php echo $terms_and_conditions_url; ?>" class="btn btn-link">
	                    			<img src="<?php echo $button_arrow_icon; ?>" alt=">" class="js-tosvg tosvg"><?php echo $learn_more_text; ?></a>
                    			<?php
                			}
            			?>
	                </div>
	            </div>
	            <div class="post-detail">
	                <div class="post-description">
	                	<?php
			        		if (!empty($privacy_policy_title))
			        		{
			        			?>
	                    			<h3><?php echo $privacy_policy_title ?></h3>
                    			<?php
                			}
                    		if (!empty($privacy_policy_url))
			        		{
			        			?>
	                    			<a href="<?php echo $privacy_policy_url ?>" class="btn btn-link"><img src="<?php echo $button_arrow_icon ?>" alt=">" class="js-tosvg tosvg"><?php echo $learn_more_text ?></a>
                    			<?php
                			}
            			?>
	                </div>
	            </div>
	            <div class="post-detail">
	                <div class="post-description">
	                	<?php
			        		if (!empty($cookie_declaration_title))
			        		{
			        			?>
				                    <h3><?php echo $cookie_declaration_title ?></h3>
			                    <?php
                			}
                    		if (!empty($cookie_declaration_url))
			        		{
			        			?>
				                    <a href="<?php echo $cookie_declaration_url ?>" class="btn btn-link"><img src="<?php echo $button_arrow_icon ?>" alt=">" class="js-tosvg tosvg"><?php echo $learn_more_text ?></a>
			                    <?php
                			}
            			?>
	                </div>
	            </div>
	            <div class="post-detail">
	                <div class="post-description">
	                	<?php
			        		if (!empty($covid_regulation_title))
			        		{
			        			?>
				                    <h3><?php echo $covid_regulation_title ?></h3>
			                    <?php
                			}
                    		if (!empty($covid_regulation_url))
			        		{
			        			?>
				                    <a href="<?php echo $covid_regulation_url ?>" class="btn btn-link"><img src="<?php echo $button_arrow_icon ?>" alt=">" class="js-tosvg tosvg"><?php echo $learn_more_text ?></a>
			                    <?php
                			}
            			?>
	                </div>
	            </div>
	        </div>
    	</div>
    </div>
</section>

<?php get_footer(); ?>