<?php
/**
 *Organizing Lite About Theme
 *
 * @package Organizing Lite
 */

//about theme info
add_action( 'admin_menu', 'organizing_lite_abouttheme' );
function organizing_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'organizing-lite'), __('About Theme Info', 'organizing-lite'), 'edit_theme_options', 'organizing_lite_guide', 'organizing_lite_mostrar_guide');   
} 

//Info of the theme
function organizing_lite_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'organizing-lite'); ?></h3>
		   </div>
          <p><?php esc_html_e('Organizing Lite is easy to use, simple, dynamic and creative free WordPress theme. This free multipurpose WordPress theme is specially designed to create a website for business, corporate, portfolio, personal, blog, hotel and any other business needs. Organizing Lite is a perfect platform for to create beautiful, modern and professional websites in just a few clicks. This themes is comes with attractive design and some great futures and tools that allow you to create your website without any coding knowledge.','organizing-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'organizing-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'organizing-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'organizing-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'organizing-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'organizing-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'organizing-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'organizing-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'organizing-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'organizing-lite'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">			
        <div>				
            <a href="<?php echo esc_url( ORGANIZING_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'organizing-lite'); ?></a> | 
            <a href="<?php echo esc_url( ORGANIZING_LITE_PROTHEME_URL ); ?>" target="_blank"><?php esc_html_e('Purchase Pro', 'organizing-lite'); ?></a> | 
            <a href="<?php echo esc_url( ORGANIZING_LITE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'organizing-lite'); ?></a>
        </div>		
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>