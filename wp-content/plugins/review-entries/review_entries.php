<?php
/**
 * @package Subscribers_Log
 */
/*
Plugin Name: Subscribers Log
Plugin URI: http://technyxsystems.com/demo/move_me
Description: This plugin use for manage all Subscribers Log.
*/


// add_action( 'admin_menu', 'review_entrys_menu' );

// /** Step 1. */
// function review_entrys_menu() {
// 	add_menu_page( 'Subscribers Log','Subscribers Log', 'manage_options',' user-reviews' );
// }

if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class mv_review_entry_List extends WP_List_Table {

	/** Class constructor */
	public function __construct() {

		parent::__construct( [
			'singular' => __( 'Form', 'sp' ), //singular name of the listed records
			'plural'   => __( 'Forms', 'sp' ), //plural name of the listed records
			'ajax'     => false //does this table support ajax?
		] );

	}


	/**
	 * Retrieve mv_review_entry data from the database
	 *
	 * @param int $per_page
	 * @param int $page_number
	 *
	 * @return mixed
	 */
	public static function get_mv_review_entry( $per_page = 5, $page_number = 1 ) {

		global $wpdb;
		$sql = "SELECT * FROM subscribers_log ORDER BY id DESC";
		$sql .= " LIMIT $per_page";
		$sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;
		// var_dump($sql);die;

		$result = $wpdb->get_results( $sql, 'ARRAY_A' );
		$tempData		= array();
		$resultArray 	= array();

		foreach ($result as  $row) 	
		{	/*print_r($row);die;*/
			/*$userId 	= $row['name'];
			$userName 	= "";
			$userData 	= $wpdb->get_results("SELECT * FROM wp_users WHERE ID = '$userId'");
			if($userData)
			{
				$userData = $userData[0];
				$userName = $userData->user_login;
			}*/

			$tempData['id'] 		= $row['id'];
			$tempData['email'] 		= $row['email'];
			$date 				 	= $row['created'];
			$tempData['created']	= date("F jS, Y", strtotime($date));
			/*$tempData['contact'] 	= $row['contact'];
			$tempData['message'] 	= $row['message'];*/
			/*$tempData['package_title'] 	= $row['package_title'];*/
			/*$programs 				= explode(',', $row['package_title']);	*/	
			// Get Program name here
			/*$programNames = array();
			foreach($programs as $value) 
			{
				$programNames[] = get_the_title($value);
			}*/
			/*$tempData['programs'] 	= implode(' -- ', $programs);*/
			/*$tempData['user_login'] = $userName;*/
			$resultArray[] = $tempData;
		}
		

		return $resultArray;
	}


	/**
	 * Delete a customer record.
	 *
	 * @param int $id customer ID
	 */
	public static function delete_customer( $id ) {
		global $wpdb;

		$wpdb->delete(
			"bookings",
			[ 'ID' => $id ],
			[ '%d' ]
		);
	}


	/**
	 * Returns the count of records in the database.
	 *
	 * @return null|string
	 */
	public static function record_count() {
		global $wpdb;

		$sql = "SELECT COUNT(*) FROM wp_users   ";
		return $wpdb->get_var( $sql );
	}


	/** Text displayed when no customer data is available */
	public function no_items() {
		_e( 'No Subscribers Log avaliable.', 'sp' );
	}


	/**
	 * Render a column when no column specific method exist.
	 *
	 * @param array $item
	 * @param string $column_name
	 *
	 * @return mixed
	 */
	public function column_default( $item, $column_name ) {
		switch ( $column_name ) {
			case 'id':
			case 'email':
			case 'created':
			/*case 'contact':
			case 'message':*/
			/*case 'package_title':*/
			/*case 'programs':*/
				return $item[ $column_name ];
			default:
				return print_r( $item, true ); //Show the whole array for troubleshooting purposes
		}
	}

	/**
	 * Render the bulk edit checkbox
	 *
	 * @param array $item
	 *
	 * @return string
	 */
	function column_cb( $item ) {
		return sprintf(
			'<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['ID']
		);
	}


	/**
	 * Method for name column
	 *
	 * @param array $item an array of DB data
	 
	 * @return string
	 */
	function column_name( $item ) {

		$delete_nonce = wp_create_nonce( 'sp_delete_customer' );

		$title = '<strong>' . $item['name'] . '</strong>';

		$actions = [
			'delete' => sprintf( '<a href="?page=%s&action=%s&customer=%s&_wpnonce=%s">Delete</a>', esc_attr( $_REQUEST['page'] ), 'delete', absint( $item['id'] ), $delete_nonce )
		];

		//return $title . $this->row_actions( $actions );
		return $title;
	}


	/**
	 *  Associative array of columns
	 *
	 * @return array
	 */
	function get_columns() {
		$columns = [
			'id'    => __( 'ID', 'sp' ),
			'email'    => __( 'Email', 'sp' ),
			'created'    => __( 'Created', 'sp' )
			/*'package_title'    => __( 'package_title', 'sp' ),*/
			/*'programs' => __( 'Programs', 'sp' ),*/
			/*'contact'    => __( 'Contact', 'sp' ),*/
			/*'message'    => __( 'Message', 'sp' ),*/
		];

		return $columns;
	}


	/**
	 * Columns to make sortable.
	 *
	 * @return array
	 */
	public function get_sortable_columns() {
		$sortable_columns = array(
			'id' => array( 'id', true )
			
		);

		return $sortable_columns;
	}

	/**
	 * Returns an associative array containing the bulk action
	 *
	 * @return array
	 */
	// public function get_bulk_actions() {
	// 	$actions = [
	// 		'bulk-delete' => 'Delete'
	// 	];

	// 	return $actions;
	// }


	/**
	 * Handles data query and filter, sorting, and pagination.
	 */
	public function prepare_items() {

		$this->_column_headers = $this->get_column_info();

		/** Process bulk action */
		//$this->process_bulk_action();
		global $wpdb;
		$per_page     = $this->get_items_per_page( 'subscribers_log', 5);
		$current_page = $this->get_pagenum();
		$query = "SELECT COUNT(*) FROM subscribers_log  ";
		$total_items  = $wpdb->get_var( $query );
		$total_pages  = ceil($total_items/$per_page);
		/*print_r($total_items);die;*/
		$this->set_pagination_args( [
			'total_items' => $total_items, //WE have to calculate the total number of items
			'per_page'    => $per_page, //WE have to determine how many items to show on a page
			'total_pages' => $total_pages
		] );

		$this->items = self::get_mv_review_entry( $per_page, $current_page );
	}

	public function process_bulk_action() {

		//Detect when a bulk action is being triggered...
		if ( 'delete' === $this->current_action() ) {

			// In our file that handles the request, verify the nonce.
			$nonce = esc_attr( $_REQUEST['_wpnonce'] );

			if ( ! wp_verify_nonce( $nonce, 'sp_delete_customer' ) ) {
				die( 'Go get a life script kiddies' );
			}
			else {
				self::delete_customer( absint( $_GET['customer'] ) );

		                // esc_url_raw() is used to prevent converting ampersand in url to "#038;"
		                // add_query_arg() return the current url
		                wp_redirect( esc_url_raw(add_query_arg()) );
				exit;
			}

		}

		// If the delete bulk action is triggered
		if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'bulk-delete' )
		     || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'bulk-delete' )
		) {

			$delete_ids = esc_sql( $_POST['bulk-delete'] );

			// loop over the array of record IDs and delete them
			foreach ( $delete_ids as $id ) {
				self::delete_customer( $id );

			}

			// esc_url_raw() is used to prevent converting ampersand in url to "#038;"
		        // add_query_arg() return the current url
		        wp_redirect( esc_url_raw(add_query_arg()) );
			exit;
		}
	}

}


class SP_Plugin {

	// class instance
	static $instance;

	// customer WP_List_Table object
	public $mv_review_entry_obj;

	// class constructor
	public function __construct() {
		add_filter( 'set-screen-option', [ __CLASS__, 'set_screen' ], 10, 4 );
		add_action( 'admin_menu', [ $this, 'plugin_menu' ] );
	}


	public static function set_screen( $status, $option, $value ) {
		return $value;
	}

	public function plugin_menu() {

		$hook = add_menu_page(
			'Subscribers Log',
			'Subscribers Log',
			'manage_options',
			'wp_list_table_class_subscribers_log',
			[ $this, 'plugin_settings_page' ]
		);

		add_action( "load-$hook", [ $this, 'screen_option' ] );

	}


	/**
	 * Plugin settings page
	 */
	public function plugin_settings_page() {
		?>
		<div class="wrap">
			<h2>Subscribers Log</h2>
			<!-- <p style="text-align: right;"> -->
			<?php 
				//$c = plugin_dir_url( __FILE__ ).'custom-export.php';
				//var_dump($c);
			?>
				<!-- <a href="<?php echo $c; ?>">Export CSV </a> -->  
				<!-- <a href="<?php echo $c; ?>" class="button button-primary" >Export CSV</a>
			</p> -->	

			<div id="poststuff">
				<div id="post-body" class="metabox-holder columns-4">
					<div id="post-body-content">
						<div class="meta-box-sortables ui-sortable">
							<form method="post">
								<?php
								$this->mv_review_entry_obj->prepare_items();
								$this->mv_review_entry_obj->display(); ?>
							</form>
						</div>
					</div>
				</div>
				<br class="clear">
			</div>
		</div>
	<?php
	}

	/**
	 * Screen options
	 */
	public function screen_option() {

		$option = 'per_page';
		$args   = [
			'label'   => 'bookings',
			'default' => 10,
			'option'  => 'subscribers_log'
		];

		add_screen_option( $option, $args );

		$this->mv_review_entry_obj = new mv_review_entry_List();
	}


	/** Singleton instance */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

}


add_action( 'plugins_loaded', function () {
	SP_Plugin::get_instance();
} );
?>