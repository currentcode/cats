<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Catch Themes
 * @subpackage Catch_Evolution_Pro
 * @since Catch Evolution 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700|Roboto' rel='stylesheet' type='text/css'>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<?php 
/** 
 * catchevolution_before hook
 */
do_action( 'catchevolution_before' ); ?>

<div id="page" class="hfeed site">

	<?php 
    /** 
     * catchevolution_before_header hook
     */
    do_action( 'catchevolution_before_header' ); ?>

    <div class="wrapper">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/wp-content/uploads/2016/02/hauptstadtkatzen.png" class="logo-cats" alt="<?php bloginfo('name'); ?>" /></a>
        <a id="menu-button" class="">
          <span class="bar-1"></span>
          <span class="bar-2"></span>
          <span class="bar-3"></span>
        </a>        
    </div>

    <?php 
    /** 
     * catchevolution_after_header hook
     *
     * @hooked catchevolution_featured_header - 10
     * @hooked catchevolution_header_menu - 15
     */
     do_action( 'catchevolution_after_header' ); ?>

	<header id="branding" role="banner">
    	<?php 
		/** 
		 * catchevolution_before_headercontent hook
		 *
		 * @hooked catchevolution_header_topsidebar - 10
		 */
		do_action( 'catchevolution_before_headercontent' ); ?>
        
    	<div id="header-content" class="clearfix">
        
        	<div class="wrapper">
				<?php 
                /** 
                 * catchevolution_headercontent hook
                 *
                 * @hooked catchevolution_headerdetails - 10
                 * @hooked catchevolution_header_rightpsidebar - 15
                 */
                do_action( 'catchevolution_headercontent' ); ?>
            </div><!-- .wrapper -->
            
      	</div><!-- #header-content -->
        
    	<?php 
		/** 
		 * catchevolution_after_headercontent hook
		 *
         * @hooked catchevolution_header_menu - 10
		 */
		do_action( 'catchevolution_after_headercontent' ); ?>           
        
	</header><!-- #branding -->
    

    
	<?php 
    /** 
     * catchevolution_before_main hook
     */
    do_action( 'catchevolution_before_main' ); 
    ?>
    
	<div id="main" class="clearfix">
    	<div class="wrapper">
        
 			<?php 
			/** 
			 * catchevolution_before_contentsidebarwrap hook
			 */
			do_action( 'catchevolution_before_contentsidebarwrap' ); 
			?> 
        	
            <div class="content-sidebar-wrap">       



            <?php 
            /** 
            *sidebar einfügt, ursprünglich aus sidebar.php
            *
             * catchevolution_before_secondary hook
             */
            do_action( 'catchevolution_before_secondary' );

                global $post;
                
                if ( $post ) {
                    if ( is_attachment() ) { 
                        $parent = $post->post_parent;
                        $layout = get_post_meta( $parent,'catchevolution-sidebarlayout', true );
                    } else {
                        $layout = get_post_meta( $post->ID,'catchevolution-sidebarlayout', true ); 
                    }
                }
                
                if ( empty( $layout ) || ( !is_page() && !is_single() ) ) {
                    $layout='default';
                }
                
                if ( !is_active_sidebar( 'catchevolution_woocommerce_sidebar' ) && ( class_exists( 'Woocommerce' ) && is_woocommerce() ) ) {
                    $layout = 'no-sidebar';
                }
                
                global $catchevolution_options_settings;
                $options = $catchevolution_options_settings;
                $themeoption_layout = $options['sidebar_layout'];
                
                if ( $layout == 'left-sidebar' || $layout == 'right-sidebar' || $layout == 'three-columns' || ( $layout=='default' && $themeoption_layout == 'left-sidebar') || ( $layout=='default' && $themeoption_layout == 'right-sidebar') || ( $layout=='default' && $themeoption_layout == 'three-columns' ) ) : 
                ?>
                    
                    <div id="secondary" class="widget-area" role="complementary">
                        <?php 
                        /** 
                         * catchevolution_before_widget hook
                         */
                        do_action( 'catchevolution_before_widget' );
                        
                        if ( is_active_sidebar( 'catchevolution_woocommerce_sidebar' ) && ( class_exists( 'Woocommerce' ) && is_woocommerce() ) ) :
                            dynamic_sidebar( 'catchevolution_woocommerce_sidebar' ); 
                        elseif ( is_active_sidebar( 'sidebar-1' ) ) : 
                            dynamic_sidebar( 'sidebar-1' );
                        else :
                            echo '<!-- No Widget in Sidebar -->';
                        endif; ?>
                
                        <?php 
                        /** 
                         * catchevolution_after_widget hook
                         */
                        do_action( 'catchevolution_after_widget' ); ?>  
                           
                    </div><!-- #secondary .widget-area -->
                <?php endif;
                
            /** 
             * catchevolution_after_secondary hook
             */
            do_action( 'catchevolution_after_secondary' ); ?>


    
				<?php 
                /** 
                 * catchevolution_before_primary hook
                 *
                 * @hooked catchevolution_slider_display - 10 if full width image slide is selected
                 */
                do_action( 'catchevolution_before_primary' ); ?>
                
                <div id="primary">
                
                    <?php do_action( 'catchevolution_before_content' ); ?>
                    
                    <div id="content" role="main">
                        <?php 
                        /** 
                         * catchevolution_content hook
                         *
                         * @hooked catchevolution_slider_display - 10 if full width image slide is not selected
                         */
                        do_action( 'catchevolution_content' ); ?>