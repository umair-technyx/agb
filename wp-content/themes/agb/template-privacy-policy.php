<?php
/*
Template Name: Privacy Policy
*/
get_header();?>
<?php 
	$main_title = get_the_title(PRIVACY_POLICY_PAGE_ID);
	$title_description = get_field('title_description');
?>
<section class="sec-padded--head">
    <div class="container container-expanded">
        <div class="sec-contnet">
          	<?php
        		if (!empty($main_title))
        		{
        			?>
        				<h2 class="h2"><?php echo $main_title ?></h2>
        			<?php
        		}
        	?>
          	<?php
        		if (!empty($title_description))
        		{
        			echo $title_description;
        		}
          	?>
    </div>
    </div>
</section>

<?php get_footer(); ?>