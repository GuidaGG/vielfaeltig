<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-light-bg text-primary antialiased ' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col scroll-smooth h-auto  mx-auto">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="fixed w-full md:w-[calc(100%)] z-20 bg-gradient-to-b ">
		<div class="">
			<div class="">
				<div class="inner-container h-16 md:h-32 max-w-screen-3xl mx-auto flex justify-between items-center">
					<div class="flex flex-row logo gap-0 md:gap-2 items-center -ml-3 md:ml-0">
						<?php if ( has_custom_logo() ) { ?>
							<div >
              				<?php custom_logo_with_aria_label(); ?>
						  </div>
						  <h1>vielfältig.</h1>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" aria-label="Hauptseite" class="font-extrabold text-lg uppercase flex" >
								<h1>vielfältig.</h1>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					
					</div>

					<div class="w-16 h-10 md:w-28 md:h-16 mt-20 md:mt-0 rounded-l-full  bg-lighter-bg flex items-center justify-left pl-3 md:pl-4 shadow-inner-special hover:shadow-md">
						<a href="#" aria-label="Navigation umschalten"  id="primary-menu-toggle">
							<img src="<?php echo get_template_directory_uri(); ?>/resources/images/vielfaeltig_Icon_Hamburger.svg" class="hamburger" alt="Navigation umschalten"/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="sidebar" class="fixed h-dvh top-0 right-0 translate-x-full transition-transform duration-300 ease-in-out w-[80vw] md:w-[500px] text-white px-4  py-10 z-30">
		<a href="#" aria-label="Navigation umschalten" class="button mb-8" id="sidebar-menu-toggle" >
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/vielfaeltig_Icon_Pfeil_rechts.svg" alt="Navigation umschalten" >
		</a>
		<div role="navigation" aria-label="Seitennavigation">
		<?php
			wp_nav_menu(
				array(
					'container_id'    => 'primary-menu',
					'container_class' => 'menu-container',
					'menu_class'      => 'menu',
					'theme_location'  => 'primary',
					'li_class'        => '',
					'fallback_cb'     => false,
					'walker'          => new Custom_Menu_Walker(),
				)
			);
		?>

		<?php
			wp_nav_menu(
				array(
					'container_id'    => 'secondary-menu',
					'container_class' => 'menu-container',
					'menu_class'      => 'menu',
					'theme_location'  => 'secondary',
					'li_class'        => '',
					'fallback_cb'     => false,
				)
			);
		?>
		</div>
	</div>

	<!-- fago CONTENT CONTAINER 01 (header.php) -->
	<div id="content" class="flex-grow relative">
		<div role="navigation" class="hidden lg:block">
			<?php
				wp_nav_menu(
					array(
						'container_id'    => 'sticky-menu',
						'container_class' => 'menu-container',
						'menu_class'      => 'menu',
						'theme_location'  => 'sticky_menu',
						'li_class'        => '',
						'fallback_cb'     => false,
					)
				);
			?>
		</div>
		<?php if ( is_front_page() ) { ?>
		
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<?php get_template_part( 'template-parts/content', 'popup' ); ?>

		<main role="main">
