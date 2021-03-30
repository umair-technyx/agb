<?php
/*
Template Name: Legal
*/
get_header();?>
<?php 
	$agb_legal_title = get_field('agb_legal_title');
	$legal_pages = get_field('legal_pages');;
	$button_arrow_icon = get_field('button_arrow_icon',CONST_SITE_INFORMATION_PAGE_ID);
	$learn_more_text = get_field('learn_more_text',CONST_SITE_INFORMATION_PAGE_ID);
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
		        <?php
		        	if (!empty($legal_pages))
		        	{
		        		foreach ($legal_pages as $key => $value)
						{
							$page_title = $value['page_title'];
							$page_url = $value['page_url'];
							?>
							
					            <div class="post-detail">
					                <div class="post-description">
					                	<?php
							        		if (!empty($page_title))
							        		{
							        			?>
					                    			<h3><?php echo $page_title ?></h3>
				                    			<?php
				                			}
				                    		if (!empty($page_url))
							        		{
							        			?>
					                    			<a href="<?php echo $page_url; ?>" class="btn btn-link">
					                    			<img src="<?php echo $button_arrow_icon; ?>" alt=">" class="js-tosvg tosvg"><?php echo $learn_more_text; ?></a>
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
    	</div>
    </div>
</section>

<?php get_footer(); ?>