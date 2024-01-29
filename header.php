<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-light-bg text-primary antialiased scroll-smooth' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="flex flex-col scroll-smooth">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="fixed w-full z-10 bg-gradient-to-b from-white">
		<div class="">
			<div class="">
				<div class="inner-container h-16 md:h-32 max-w-screen-3xl mx-auto flex justify-between items-center max-w-">
					<div>
						<?php if ( has_custom_logo() ) { ?>
              			<?php custom_logo_with_aria_label(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" aria-label="Hauptseite" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="w-16 h-10 md:w-28 md:h-16 rounded-l-full bg-dark-bg flex items-center justify-left pl-3 md:pl-6 shadow-inner hover:shadow-md">
						<a href="#" aria-label="Navigation umschalten"  id="primary-menu-toggle">
							<svg xmlns="http://www.w3.org/2000/svg"
								class="inline-block w-7 h-7 md:w-12 md:h-12"
								width="64"
								height="64"
								viewBox="0 0 24 24"
								fill="none"
								stroke="currentColor"
								stroke-width="2"
								stroke-linecap="round"
								stroke-linejoin="round">
								<line x1="3" y1="6" x2="21" y2="6"></line>
								<line x1="3" y1="12" x2="21" y2="12"></line>
								<line x1="3" y1="18" x2="21" y2="18"></line>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="sidebar" class="fixed h-dvh top-0 right-0 translate-x-full transition-transform duration-300 ease-in-out w-[80vw] md:w-[500px] text-secondary bg-white px-4 py-10 z-10 special-shadow">
		<a href="#" aria-label="Toggle navigation" class="button mb-8" id="sidebar-menu-toggle" >
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/ENT_vielfaeltig_Arrow.svg" alt="Arrow Icon" >
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
	<div id="content" class="flex-grow relative z-0">
		<div role="navigation">
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

		<main role="main">
