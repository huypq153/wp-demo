<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package PQHEyeDoctor
 */
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'before' ); ?>
	<!-- BEGIN HEADER -->
	<div class="page-header">
		<!-- BEGIN HEADER TOP -->
		<div class="page-header-top">
			<div class="container">
	            <div class="page-header-top-title">
	                <div class="row">
	                    <div class="col-md-6">
	                        <?php
								get_template_part('social', 'default');
							?>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="tools">
	                        	<ul class="list-inline-head">
				                    <li><a href="#"><i class="fa fa-clock-o"></i>Sáng : <b>7h30-12h00</b> - Chiều : <b>13h30 -17h00</b></a></li>
				                    <li><a href="#"><i class="fa fa-phone"></i> <b>0433 825 059 - 0433 518 215</b></a></li>
				                </ul>
	                       		<?php //echo accessibleAnchors('top',"list-inline-head", "");?>
					        </div>
	                    </div>
	                </div>
	                
	            </div>
	                <div class="page-logo">
                    	<?php if ( get_theme_mod('pqheyedoctor_logo') != "" ) : ?>
                    	<h1 class="site-title logo-container">
						<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_theme_mod('pqheyedoctor_logo'); ?>" class="img-responsive center-block">
						</a>
						</h1>
						<?php endif ;?>
					</div>
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="menu-toggler"></a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				
			</div>
		</div>
		<!-- END HEADER TOP -->
		<!-- BEGIN HEADER MENU -->
		<div class="page-header-menu">
			<div class="container">
				<!-- BEGIN HEADER SEARCH BOX -->
				<?php //get_template_part('template-parts/searchform', ''); ?>
				<!-- END HEADER SEARCH BOX -->
				<!-- BEGIN MEGA MENU -->
				<div class="navbar-header">
                 <?php if ( get_theme_mod('pqheyedoctor_logo') != "" ) : ?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_theme_mod('pqheyedoctor_logo'); ?>" class="img-responsive center-block">
				</a>
				<?php endif ;?>
				<div class="hor-menu hor-menu-light">
					<?php //echo accessibleAnchors('primary',"nav navbar-nav", "menu-dropdown mega-menu-dropdown");?>
					 <?php
				        wp_nav_menu( array(
				                'menu'              => 'primary',
				                'depth'             => 2,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
				</div>
				<!-- END MEGA MENU -->
			</div>
		</div>
		<!-- END HEADER MENU -->
	</div>
	<!-- END HEADER -->
	<?php
		get_template_part('slider', 'nivo');
	?>
	<!-- BEGIN PAGE CONTAINER -->
	<div class="page-container">
	<?php putRevSlider("Slide Banner","homepage") ?>
	
