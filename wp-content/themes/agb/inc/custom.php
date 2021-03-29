<?php
  global $wpdb;

  define('CONST_SITE_INFORMATION_PAGE_ID', 8);

  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

  function dd($array)
  {
      echo "<pre>";
      print_r($array);
      echo "</pre>";
      die;
  }

  function json_response($response = array()){
    echo json_encode($response);die;
  }

  function checkInputValue($str='')
  {
    if($str)
    {
      $str = strip_tags($str);
      $str = addslashes($str);
    }
    return $str;
  }

  function checkNonce($nonce)
  {
      $nonce = checkInputValue($nonce);
      if (wp_verify_nonce( $nonce, "user_nonce")) 
      {
        return true;
      } 
      return false;
  }

  add_action( 'admin_bar_menu', 'add_admin_header_menu_bar', 999 );

  function add_admin_header_menu_bar( $wp_admin_bar )
  {
      if( current_user_can( 'administrator' ) )
      {

        $menu_args = array(
            'id'    => 'site_info',
            'title' => 'Site Information',
            'href'  => home_url('/wp-admin/post.php?post='.CONST_SITE_INFORMATION_PAGE_ID.'&action=edit')
        );
        $wp_admin_bar->add_node( $menu_args );
    }
  }
?>