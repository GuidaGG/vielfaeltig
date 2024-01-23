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

<div id="page" class=" flex flex-col">
	<?php do_action( 'tailpress_header' ); ?>
	<header class="fixed w-full z-10">
		<div class="mx-auto max-w-screen-xl px-16">
			<div class="lg:flex lg:justify-between lg:items-center py-6">
				<div class="flex justify-between items-center w-full">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="bg-dark-bg rounded-full w-16 h-16 shadow-inner flex items-center justify-center">
						<a href="#" aria-label="Toggle navigation"  id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-10 h-10" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="sidebar" class="fixed bg-white h-dvh top-0 right-0 text-secondary p-10 pt-14 z-10">
		<a href="#" aria-label="Toggle navigation" class="button" id="sidebar-menu-toggle" >
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/ENT_vielfaeltig_Arrow.svg" alt="Arrow Icon">
		</a>
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

	<div id="content" class="max-w-screen-xl mx-auto flex-grow scroll-smooth pt-40 pb-20 relative z-0 px-16">		
		<div class="flex gap-4 absolute bottom-5 right-0 items-center">
			<div>Züruck nach oben</div>
			<a href="#" aria-label="Toggle navigation" class="button  -rotate-90" id="sidebar-menu-toggle" >
				<img src="<?php echo get_template_directory_uri(); ?>/resources/images/ENT_vielfaeltig_Arrow.svg" alt="Arrow Icon">
			</a>
		</div>

		<?php if ( is_front_page() ) { ?>
		
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main >
