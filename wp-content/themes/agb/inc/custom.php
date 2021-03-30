<?php
  global $wpdb;

  define('CONST_SITE_INFORMATION_PAGE_ID', 8);
  define('HOME_PAGE_ID', 26);
  define('ABOUT_PAGE_ID', 51);
  define('CORPORATE_PAGE_ID', 164);
  define('RETAIL_PAGE_ID', 65);
  define('GET_IN_TOUCH_PAGE_ID', 85);
  define('LEGAL_PAGE_ID', 131);
  define('TERMS_AND_CONDITIONS_PAGE_ID', 139);
  define('PRIVACY_POLICY_PAGE_ID', 145);
  define('COOKIE_DECLARATION_PAGE_ID', 151);
  define('COVID_REGULATION_PAGE_ID', 159);

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