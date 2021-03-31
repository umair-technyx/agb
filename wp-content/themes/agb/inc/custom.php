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
  define('TRADE_FOREIGN_EXCHANGE_PAGE_ID', 200);
  define('DAY_TO_DAY_PAGE_ID', 205);  
  define('FINANCE_PAGE_ID', 207);

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

  //PHP function to make slug (URL string)
  function slugify($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }


add_action("wp_ajax_request_information", "RequestInformation");
add_action("wp_ajax_nopriv_request_information", "RequestInformation");

function RequestInformation()
{
  if(isset($_POST['nonce'])) 
  {
    $checkNonce = checkNonce($_POST['nonce']);
    if ($checkNonce == false) 
    {
        json_response(array('status' =>0 ,'response'=>'Invalid Token' ));
    }

  }
  if (empty($_POST['user_email'])) 
  {
    json_response(array('status' =>0 ,'response'=>'Kindly Insert Your Email!' ));
  }

  $data = array();
  $data['email'] = $_POST['user_email'];
  $data['created']    = date('Y-m-d H:i:s');
  global $wpdb;
  $insert = $wpdb->insert( 'subscribers_log', $data);

  json_response(array('status' =>1 ,'response'=>'Form Submitted Successfully', 'data' => $data));
}

?>