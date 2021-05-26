<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package agb
 */
 get_header(); 

$not_found_title = get_field('not_found_title',CONST_SITE_INFORMATION_PAGE_ID);
$not_found_description = get_field('not_found_description',CONST_SITE_INFORMATION_PAGE_ID);
$not_found_button_text = get_field('not_found_button_text',CONST_SITE_INFORMATION_PAGE_ID);
?>
<section class="sec-padded--head">
    <div class="container container-expanded">
        <div class="sec-contnet error-page">
          <h2 class="h2"><?php esc_html_e( '404', 'agb' ); ?></h2>
          <h4 class="h4"><?php echo $not_found_title; ?></h4>
          <p><?php echo $not_found_description; ?></p>
          <a href="<?php echo get_site_url();; ?>" class="btn btn-primary"><?php echo $not_found_button_text; ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/btn-arrow.svg" alt=">" class="js-tosvg tosvg"></a>
        </div>
    </div>
</section>



<?php
get_footer();
