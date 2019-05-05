<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * WPFC Base Class
 *
 * All functionality pertaining to core functionality of the WP Instagram Post plugin.
 *
 * @package WordPress
 * @subpackage WPFC
 * @author qsheeraz
 * @since 1.0
 *
 */

class GS_WPFC {

	public $version;
	private $file;

	private $plugin_url;
	private $assets_url;
	private $plugin_path;
	
	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct ( $file ) {
		$this->version = '';
		$this->file = $file;

		/* Plugin URL/path settings. */
		$this->plugin_url = str_replace( '/classes', '', plugins_url( plugin_basename( dirname( __FILE__ ) ) ) );
		$this->plugin_path = str_replace( 'classes', '', plugin_dir_path( __FILE__ ));
		$this->assets_url = $this->plugin_url . '/assets';

		
	} // End __construct()

	/**
	 * init function.
	 *
	 * @access public
	 * @return void
	 */
	public function init () {
		add_action( 'init', array( $this, 'load_localisation' ) );
		add_action( 'wp_head', array( $this, 'wpfc_add_meta_property' ) );
		add_action( 'wp_footer', array( $this, 'wpfc_add_facebook_js_sdk' ) );
		add_action( 'admin_init', array( $this, 'wpfc_admin_init' ) );
		add_action( 'admin_menu', array( $this, 'wpfc_admin_menu' ) );
		add_filter( 'the_content', array( $this, 'wpfc_show_facebook_comments' ) );
		
		add_shortcode( 'gs-fb-comments', array( $this, 'wpfc_show_facebook_comments_shortcode' ) );
		
		// Run this on activation.
		register_activation_hook( $this->file, array( $this, 'activation' ) );
	} // End init()
	
	function pa($arr){

		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}

	/**
	 * Facebook_js_sdk function.
	 *
	 * @access public
	 * @return void
	 */
	public function wpfc_add_facebook_js_sdk() {
		
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_option_data_locale'] ) )
			$options['wpfc_option_data_locale'] = 'en_US';

		if ( !isset ( $options['wpfc_text_fb_appid'] ) or  $options['wpfc_text_fb_appid'] == '' )
			$fb_appid = '';
		else
			$fb_appid = '&appId=' . $options['wpfc_text_fb_appid'];

	  	?>
	  	<div id="fb-root"></div>
	  	<script><!--
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/<?php echo sanitize_text_field($options['wpfc_option_data_locale']) ?>/sdk.js#xfbml=1&version=v2.10<?php echo $fb_appid; ?>';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));//-->
	  	</script>
	  	<?php
	}

	/**
	 * show Facebook comments function.
	 *
	 * @access public
	 * @return $content
	 */
	public function wpfc_show_facebook_comments($content) {
		$post_id = get_the_ID();
		$options = get_option( 'wpfc_settings' );

		if( isset($options['wpfc_checkbox_post_types'][get_post_type( $post_id )]) != '' ){
			
			if ( !isset ( $options['wpfc_text_comments_count'] ) or !intval( $options['wpfc_text_comments_count'] ) )
				$options['wpfc_text_comments_count'] = 10;
			$data_numposts = (int)$options['wpfc_text_comments_count'];

			if ( !isset ( $options['wpfc_text_data_width'] ) or $options['wpfc_text_data_width'] == '' )
				$data_width = $options['wpfc_text_data_width'] = '100%';
			else
				$data_width = (int)$options['wpfc_text_data_width'] . 'px';

			if ( !isset ( $options['wpfc_option_data_colorscheme'] ) )
				$options['wpfc_option_data_colorscheme'] = 'light';
			$data_colorscheme = $options['wpfc_option_data_colorscheme'];

			if ( !isset ( $options['wpfc_option_data_orderby'] ) )
				$options['wpfc_option_data_orderby'] = 'social';
			$data_orderby = $options['wpfc_option_data_orderby'];

			if ( !isset ( $options['wpfc_text_fb_appid'] ) or  $options['wpfc_text_fb_appid'] == '' )
				$fb_appid = '';
			else
				$fb_appid = '&appId=' . $options['wpfc_text_fb_appid'];

			$socio_link = get_permalink( $post_id );

		    $comments_div = '
			  <div 
			  	class = "fb-comments" 
			  	data-href = "' . esc_url($socio_link) . '"
			  	data-numposts = "' . (int)$data_numposts . '"
				data-colorscheme = "' . sanitize_text_field($data_colorscheme) . '"
				data-order-by = "' . sanitize_text_field($data_orderby) . '"
				data-mobile=true>
			  </div>
		  <style>
			.fb_iframe_widget_fluid_desktop iframe {
			    width: '.$data_width.' !important;
			}
		  </style>
		  ';

			return $content.=$comments_div;
		}
		else 
			return $content;
	}

	/**
	 * show shortcode comments function.
	 *
	 * @access public
	 * @return $content
	 */
	public function wpfc_show_facebook_comments_shortcode($content) {
		$post_id = get_the_ID();
		$options = get_option( 'wpfc_settings' );

		if ( !isset ( $options['wpfc_text_comments_count'] ) or !intval( $options['wpfc_text_comments_count'] ) )
			$options['wpfc_text_comments_count'] = 10;
		$data_numposts = (int)$options['wpfc_text_comments_count'];

		if ( !isset ( $options['wpfc_text_data_width'] ) or $options['wpfc_text_data_width'] == '' )
			$data_width = $options['wpfc_text_data_width'] = '100%';
		else
			$data_width = (int)$options['wpfc_text_data_width'] . 'px';

		if ( !isset ( $options['wpfc_option_data_colorscheme'] ) )
			$options['wpfc_option_data_colorscheme'] = 'light';
		$data_colorscheme = $options['wpfc_option_data_colorscheme'];

		if ( !isset ( $options['wpfc_option_data_orderby'] ) )
			$options['wpfc_option_data_orderby'] = 'social';
		$data_orderby = $options['wpfc_option_data_orderby'];

		if ( !isset ( $options['wpfc_text_fb_appid'] ) or  $options['wpfc_text_fb_appid'] == '' )
			$fb_appid = '';
		else
			$fb_appid = '&appId=' . $options['wpfc_text_fb_appid'];

		$socio_link = get_permalink( $post_id );
		
	    $comments_div = '
		  <div 
		  	class = "fb-comments" 
		  	data-href = "' . esc_url($socio_link). '"
		  	data-numposts = "' . (int)$data_numposts . '"
			data-colorscheme = "' . sanitize_text_field($data_colorscheme) . '"
			data-order-by = "' . sanitize_text_field($data_orderby) . '"
			data-mobile=true>
		  </div>
		  <style>
			.fb_iframe_widget_fluid_desktop iframe {
			    width: '.$data_width.' !important;
			}
		  </style>
		  ';

		return $content.=$comments_div;
	}

	/**
	 * add meta property function.
	 *
	 * @access public
	 * @return void
	 */
	public function wpfc_add_meta_property() {
		$options = get_option( 'wpfc_settings' );
		if ( isset ( $options['wpfc_text_fb_appid'] ) and $options['wpfc_text_fb_appid'] != '' )
			echo '<meta property="fb:app_id" content="'.sanitize_text_field($options['wpfc_text_fb_appid']).'" />';
	}

	/**
	 * admin init function.
	 *
	 * @access public
	 * @return void
	 */		
	public function wpfc_admin_init() {
       /* Register stylesheet. */
        wp_register_style( 'wpfcStylesheet', $this->plugin_url.'/wpfc.css' );
		
		register_setting( 'wpfc_options', 'wpfc_settings' );
	
		add_settings_section(
			'wpfc_fb_appid_section', 
			__( 'WP Facebook Comments Settings!', 'wpfc' ), 
			array($this, 'wpfc_fb_appid_section_callback'), 
			'wpfc_options'
		);

		add_settings_section(
			'wpfc_options_section', 
			'',
			array($this, 'wpfc_settings_section_callback'), 
			'wpfc_options'
		);

		add_settings_section(
			'wpfc_posts_options_section', 
			'', 
			array($this, 'wpfc_posts_section_callback'), 
			'wpfc_options'
		);

		add_settings_field( 
			'wpfc_text_comments_count', 
			__( 'Facebook App ID', 'wpfc' ), 
			array($this, 'wpfc_text_fb_appid'), 
			'wpfc_options', 
			'wpfc_fb_appid_section' 
		);

		add_settings_field( 
			'wpfc_text_comments_count', 
			__( 'Number of comments to show!', 'wpfc' ), 
			array($this, 'wpfc_text_comments_count'), 
			'wpfc_options', 
			'wpfc_options_section' 
		);

		add_settings_field( 
			'wpfc_text_data_width', 
			__( 'Width of the comments box!', 'wpfc' ), 
			array($this, 'wpfc_text_data_width'), 
			'wpfc_options', 
			'wpfc_options_section' 
		);

		add_settings_field( 
			'wpfc_option_data_colorscheme', 
			__( 'Color scheme!', 'wpfc' ), 
			array($this, 'wpfc_option_data_colorscheme'), 
			'wpfc_options', 
			'wpfc_options_section' 
		);

		add_settings_field( 
			'wpfc_option_data_orderby', 
			__( 'Order by!', 'wpfc' ), 
			array($this, 'wpfc_option_data_orderby'), 
			'wpfc_options', 
			'wpfc_options_section' 
		);

		add_settings_field( 
			'wpfc_option_data_locale', 
			__( 'Language', 'wpfc' ), 
			array($this, 'wpfc_option_data_locale'), 
			'wpfc_options', 
			'wpfc_options_section' 
		);

		add_settings_field( 
			'wpfc_checkbox_post_types', 
			__( 'Select post types to show Facebook comments!', 'wpfc' ),
			array($this, 'wpfc_checkbox_post_types'), 
			'wpfc_options', 
			'wpfc_posts_options_section' 
		);
    }

	/**
	 * plugin options function.
	 *
	 * @access public
	 * @return void
	 */		
	public function wpfc_options () {
		
	?>
	<form action='options.php' method='post'>
	<div class="woosocio_wrap">
	<div id="woosocio-services-block">
		<a href="https://genialsouls.com/product/wp-facebook-comments-pro/" target="_top">
		<img src="<?php echo $this->assets_url.'/wpfcp_cs.jpg' ?>" alt="WP Facebook Comments Pro" width="700"></a>
		<?php
		settings_fields( 'wpfc_options' );
		do_settings_sections( 'wpfc_options' );
		submit_button();

		$filepath = $this->plugin_path.'wpfc.plugins.php';
		if (file_exists($filepath))
			include_once($filepath);
		else
			die('Could not load file '.$filepath);

		echo '</div>';

		$filepath = $this->plugin_path.'right_area.php';
		if (file_exists($filepath))
			include_once($filepath);
		else
			die('Could not load file '.$filepath);

		?>
	</div>		
	</form>

	<?php

	}

	/**
	 * wpfc_text_fb_appid function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_text_fb_appid(  ) { 
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_text_fb_appid'] ) )
			$options['wpfc_text_fb_appid'] = '';
		?>
		<input type='text' size='27' name='wpfc_settings[wpfc_text_fb_appid]' 
        	   value = <?php echo sanitize_text_field($options['wpfc_text_fb_appid']) ?> >
		<span class='description'>
			<?php _e( 'If you want to moderate the comments, we recommend you specify a ', 'wpfc' ) ?>
			<a href="<?php echo esc_url('https://developers.facebook.com/apps')?>" target="_new">Facebook App</a>
			<?php _e( ' ID. Please check our video tutorial about ', 'wpfc' ) ?>
			<a href="<?php echo esc_url('https://www.youtube.com/watch?v=tNZqddIUUtU')?>" target="_new"><?php _e('How to create Facebook App v2.11', 'wpfc') ?></a>
		</span></br>
		<span class='description'>
			<a href="<?php echo esc_url('https://developers.facebook.com/tools/comments/').$options['wpfc_text_fb_appid']; ?>" target="_new">
				<?php _e('Click here for App Moderation Tools!', 'wpfc') ?>
			</a>
		</span>
		<?php
	}

	/**
	 * wpfc_text_comments_count function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_text_comments_count(  ) { 
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_text_comments_count'] ) or !intval( $options['wpfc_text_comments_count'] ) )
			$options['wpfc_text_comments_count'] = 10;
		?>
		<input type='number' min='1' max='9999' name='wpfc_settings[wpfc_text_comments_count]' 
         value = <?php echo $options['wpfc_text_comments_count'] ?> >
		<span class='description'><?php _e( 'The number of comments to show. The minimum value is 1', 'wpfc' ) ?></span>
		<?php
	}
	
	/**
	 * wpfc_text_data_width function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_text_data_width(  ) { 
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_text_data_width'] ) )
			$options['wpfc_text_data_width'] = '';
		?>
		<input type='number' min='320' max='1500' name='wpfc_settings[wpfc_text_data_width]' 
         value = <?php echo $options['wpfc_text_data_width'] ?> >
		<span class='description'>px. <?php _e( 'Leave blank for full width.', 'wpfc' ) ?></span>
		<?php
	
	}

	/**
	 * wpfc_option_data_colorscheme function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_option_data_colorscheme(  ) { 
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_option_data_colorscheme'] ) )
			$options['wpfc_option_data_colorscheme'] = 'light';
		?>
		<input type="radio" class="ios8-switch" id="wpfc_light" name='wpfc_settings[wpfc_option_data_colorscheme]' value='light' 
				<?php echo ($options['wpfc_option_data_colorscheme'] == 'light') ? 'checked' : '' ?> > 
				<label for="wpfc_light"><b><?php echo __( 'Light', 'wpfc' ) ?></b><br/></label>
		<span class='description'><?php //_e( 'The color scheme used by the comments box. Can be "light" or "dark".', 'wpfc' ) ?></span>
		<input type="radio" class="ios8-switch" id="wpfc_dark" name='wpfc_settings[wpfc_option_data_colorscheme]' value='dark'
        		<?php echo ($options['wpfc_option_data_colorscheme'] == 'dark') ? 'checked' : '' ?> > 
		        <label for="wpfc_dark"><b><?php echo __( 'Dark', 'wpfc' ) ?></b></label>
		<?php
	}

	/**
	 * wpfc_option_data_orderby function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_option_data_orderby(  ) { 
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_option_data_orderby'] ) )
			$options['wpfc_option_data_orderby'] = 'social';
		?>
		<input type="radio" class="ios8-switch" id="wpfc_social" name='wpfc_settings[wpfc_option_data_orderby]' value='social' 
				<?php echo ($options['wpfc_option_data_orderby'] == 'social') ? 'checked' : '' ?> > 
				<label for="wpfc_social"><b><?php echo __( 'Top', 'wpfc' ) ?></b></label>
		<span class='description'><?php _e( 'Highest quality comments.', 'wpfc' ) ?></span><br/>
		<input type="radio" class="ios8-switch" id="wpfc_time" name='wpfc_settings[wpfc_option_data_orderby]' value='time'
        		<?php echo ($options['wpfc_option_data_orderby'] == 'time') ? 'checked' : '' ?> > 
		        <label for="wpfc_time"><b><?php echo __( 'Time', 'wpfc' ) ?></b></label>
		<span class='description'><?php _e( 'Oldest comments at the top.', 'wpfc' ) ?></span><br/>
		<input type="radio" class="ios8-switch" id="wpfc_reverse_time" name='wpfc_settings[wpfc_option_data_orderby]' value='reverse_time'
        		<?php echo ($options['wpfc_option_data_orderby'] == 'reverse_time') ? 'checked' : '' ?> > 
		        <label for="wpfc_reverse_time"><b><?php echo __( 'Reverse Time', 'wpfc' ) ?></b></label>
		<span class='description'><?php _e( 'Newest comments at the top.', 'wpfc' ) ?></span>
		<?php
	}

	/**
	 * wpfc_option_data_locale function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_option_data_locale(  ) { 
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_option_data_locale'] ) )
			$options['wpfc_option_data_locale'] = 'en_US';
		?>
		<select id="country" class="selectpicker" data-width="fit" name='wpfc_settings[wpfc_option_data_locale]'>
    		<option value="en_US" data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
  			<option value="es_ES" data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
  			<option value="fr_FR" data-content='<span class="flag-icon flag-icon-mx"></span> Français'>Français</option>
  			<option value="de_DE" data-content='<span class="flag-icon flag-icon-mx"></span> Deutsch'>Deutsch</option>
  			<option value="it_IT" data-content='<span class="flag-icon flag-icon-mx"></span> Italiano'>Italiano</option>
  			<option value="nl_NL" data-content='<span class="flag-icon flag-icon-mx"></span> Nederlands'>Nederlands</option>
		
		</select>
		<span class='description'><?php _e( 'Select language.', 'wpfc' ) ?></span>

		<script type="text/javascript"><!--
			document.getElementById("country").value = "<?php echo $options['wpfc_option_data_locale']; ?>";
		//-->
        </script>

		<?php
	}

	/**
	 * wpfc_checkbox_post_types function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_checkbox_post_types(  ) { 
		$options = get_option( 'wpfc_settings' );
		if ( !isset ( $options['wpfc_checkbox_post_types'] ) )
			$options['wpfc_checkbox_post_types'] = array();
		
		foreach ( get_post_types( '', 'names' ) as $post_type ) {
			if ( !in_array($post_type, array('page', 'attachment') )){
				?>
				<input type='checkbox'
					   class="ios8-switch"
					   name='wpfc_settings[wpfc_checkbox_post_types][<?php echo $post_type ?>]' 
					   id = '<?php echo $post_type ?>'
					   <?php checked( isset($options['wpfc_checkbox_post_types'][$post_type]) ); ?> 
					   value='<?php echo $post_type ?> '> 
				<label for="<?php echo $post_type ?>"><b><?php echo ucwords($post_type) ?></b></label><br />
				<?php
			}
		}
	}

	/**
	 * wpfc_settings_section_callback function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_settings_section_callback(  ) { 
	
		$filepath = $this->plugin_path.'wpfc.options.php';
		if (file_exists($filepath))
			include_once($filepath);
		else
			die('Could not load file '.$filepath);

	}

	/**
	 * wpfc_fb_appid_section_callback function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_fb_appid_section_callback(  ) { 
	
		echo '<h3 class="ws-table-title">' . __( 'Facebook Comments Moderation?', 'wpfc' ) . '</h3>';

	}

	/**
	 * wpfc_posts_section_callback function.
	 *
	 * @access public
	 * @return void
	 */		
	function wpfc_posts_section_callback(  ) { 
	
		echo '<h3 class="ws-table-title">' . __( 'Post Types for Comments!', 'wpfc' ) . '</h3>';

	    echo '<div class="woosocio-service-entry" style="font-size:18px; color:#0cca2b">';
			echo '<strong>' . __( 'Please use shortcode ', 'wpfc' ) . '</strong>';
			echo '<code>[gs-fb-comments]</code>';
			echo '<strong>' . __( ' for pages and manual comments!', 'wpfc' ) . '</strong>';
		echo '</div>';
	}

	/**
	 * wooigp_admin_menu function.
	 *
	 * @access public
	 * @return void
	 */		
	public function wpfc_admin_menu () {
		add_menu_page( 'Facebook Comments', 'Facebook Comments', 'manage_options', 'wpfc', '', 'dashicons-facebook', 54 );
		$page_options  = add_submenu_page( 'wpfc', 'Options', 'Options', 'manage_options', 'wpfc', array( $this, 'wpfc_options' ) );
		add_action( 'admin_print_styles-' . $page_options, array( $this, 'wpfc_admin_styles' ) );
	}

	/**
	 * wooigp_admin_styles function.
	 *
	 * @access public
	 * @return void
	 */			
	public function wpfc_admin_styles() {
       /*
        * It will be called only on plugin admin page, enqueue stylesheet here
        */
       wp_enqueue_style( 'wpfcStylesheet' );

   }

	/**
	 * load_localisation function.
	 *
	 * @access public
	 * @return void
	 */
	public function load_localisation () {
		$lang_dir = trailingslashit( str_replace( 'classes', 'lang', plugin_basename( dirname(__FILE__) ) ) );
		load_plugin_textdomain( 'wpfc', false, $lang_dir );
	} // End load_localisation()

	/**
	 * activation function.
	 *
	 * @access public
	 * @return void
	 */
	public function activation () {
		$this->register_plugin_version();
	} // End activation()

	/**
	 * register_plugin_version function.
	 *
	 * @access public
	 * @return void
	 */
	public function register_plugin_version () {
		if ( $this->version != '' ) {
			update_option( 'wpfc' . '-version', $this->version );
		}
	} // End register_plugin_version()
} // End Class
?>