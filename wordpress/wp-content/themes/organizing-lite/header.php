<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Organizing Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$organizing_lite_front_sliderpgeshowoption 	  	     = get_theme_mod('organizing_lite_front_sliderpgeshowoption', false);
$organizing_lite_show_socialsection 	  			 = get_theme_mod('organizing_lite_show_socialsection', false);
?>
<div id="sitelayout_type" <?php if( get_theme_mod( 'organizing_lite_boxlayout_option' ) ) { echo 'class="boxlayout"'; } ?>>
<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($organizing_lite_front_sliderpgeshowoption)) {
	 	$inner_cls = '';
	}
	else {
		$inner_cls = 'siteinner';
	}
}
else {
$inner_cls = 'siteinner';
}
?>

<div class="site-header <?php echo $inner_cls; ?>"> 
<div class="container">    
     <div class="logo">
        <?php organizing_lite_the_custom_logo(); ?>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div><!-- logo -->
     <div class="hdrright_area">
     
     <?php if( $organizing_lite_show_socialsection != ''){ ?> 
        <div class="social-icons">                                                
                   <?php $organizing_lite_fb_link = get_theme_mod('organizing_lite_fb_link');
                    if( !empty($organizing_lite_fb_link) ){ ?>
                    <a title="facebook" class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($organizing_lite_fb_link); ?>"></a>
                   <?php } ?>
                
                   <?php $organizing_lite_twitt_link = get_theme_mod('organizing_lite_twitt_link');
                    if( !empty($organizing_lite_twitt_link) ){ ?>
                    <a title="twitter" class="fab fa-twitter" target="_blank" href="<?php echo esc_url($organizing_lite_twitt_link); ?>"></a>
                   <?php } ?>
            
                  <?php $organizing_lite_gplus_link = get_theme_mod('organizing_lite_gplus_link');
                    if( !empty($organizing_lite_gplus_link) ){ ?>
                    <a title="google-plus" class="fab fa-google-plus" target="_blank" href="<?php echo esc_url($organizing_lite_gplus_link); ?>"></a>
                  <?php }?>
            
                  <?php $organizing_lite_linked_link = get_theme_mod('organizing_lite_linked_link');
                    if( !empty($organizing_lite_linked_link) ){ ?>
                    <a title="linkedin" class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($organizing_lite_linked_link); ?>"></a>
                  <?php } ?>                  
         </div><!--end .social-icons--> 
    <?php } ?> 
       
     
       <div class="toggle">
         <a class="toggleMenu" href="#"><?php esc_html_e('Menu','organizing-lite'); ?></a>
       </div><!-- toggle --> 
       <div class="header_navigation">                   
         <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
       </div><!--.header_navigation -->
       
       
       
     </div><!--.hdrright_area -->
<div class="clear"></div>  
</div><!-- container --> 
</div><!--.site-header --> 

<?php 
if ( is_front_page() && !is_home() ) {
if($organizing_lite_front_sliderpgeshowoption != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('organizing_lite_front_sliderpge'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('organizing_lite_front_sliderpge'.$i,true));
	  }
	}
?> 
<div class="headersliderwrap">                
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo $i; ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo $i; ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo $j; ?>" class="nivo-html-caption">        
    	<h2><?php the_title(); ?></h2>
    	<?php the_excerpt(); ?>
    <?php
    $organizing_lite_front_sliderpgemore = get_theme_mod('organizing_lite_front_sliderpgemore');
    if( !empty($organizing_lite_front_sliderpgemore) ){ ?>
    	<a class="slide_more" href="<?php the_permalink(); ?>"><?php echo esc_html($organizing_lite_front_sliderpgemore); ?></a>
    <?php } ?>       
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>  
<div class="clear"></div>  
</div><!--end .headersliderwrap -->     
<?php } ?>
<?php } } ?>