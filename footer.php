

</main>

<div class="w-full absolute bottom-0 h-28">
	<div class="h-full max-w-screen-3xl mx-auto flex gap-4 items-end justify-end p-6">
		<div> Zurück nach oben </div>
		<a href="#content" aria-label="Zurück nach oben" class="button -rotate-90" id="sidebar-menu-toggle" >
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/ENT_vielfaeltig_Arrow.svg" alt=" Zurück nach oben">
		</a>
	</div>
</div>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer  text-white text-xs" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>
	<div class="footer-shadow max-w-screen-3xl mx-auto px-6 md:px-20 xl:px-32 bg-primary py-5 md:py-10 special-shadow">
		<div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 ">
			<div>
				<?php display_contact_info() ?>

				<?php
					$instagram_url = get_theme_mod('instagram_url', '');
					$whatsapp_number = get_theme_mod('whatsapp_number', '');
					$linkedin_url = get_theme_mod('linkedin_url', '');
					$facebook_url = get_theme_mod('facebook_url', '');
					?>

					<div class="social-media-section flex gap-2 pt-5">
						<?php if (!empty($instagram_url)) : ?>

							<a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri(); ?>/resources/images/vielfaeltig_Icon_Instagram.svg" alt="Instagram" class="button">
							</a>
						<?php endif; ?>

						<?php if (!empty($whatsapp_number)) : ?>
							<a href="https://wa.me/<?php echo esc_attr($whatsapp_number); ?>" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri(); ?>/resources/images/vielfaeltig_Icon_WhatsApp.svg" alt="WhatsApp" class="button">
						</a>
						<?php endif; ?>

						<?php if (!empty($linkedin_url)) : ?>
							<a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri(); ?>/resources/images/vielfaeltig_Icon_LinkedIn.svg" alt="Linkedin" class="button">
						</a>
						<?php endif; ?>

						<?php if (!empty($facebook_url)) : ?>
							<a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer">
								<img src="<?php echo get_template_directory_uri(); ?>/resources/images/vielfaeltig_Icon_Facebook.svg" alt="Facebook" class="button">
							</a>
						<?php endif; ?>
					</div>

			</div>
			<div>
				<?php
					wp_nav_menu(
						array(
							'container_id'    => 'footer-1-menu',
							'container_class' => 'menu-container',
							'menu_class'      => 'menu',
							'theme_location'  => 'footer_1',
							'li_class'        => '',
							'fallback_cb'     => false,
						)
					);
				?>
			</div>
			<div>
				<?php
					wp_nav_menu(
						array(
							'container_id'    => 'footer-2-menu',
							'container_class' => 'menu-container',
							'menu_class'      => 'menu',
							'theme_location'  => 'footer_2',
							'li_class'        => '',
							'fallback_cb'     => false,
						)
					);
				?>	
			</div>
		</div>

		<div class="pt-5">
			<?php display_footer_images() ?>
		</div>
		<div class="wp-full  pt-5 text-xs">©vielfältig. GmbH, <?php echo date("m.Y")?></div>
	</div>
			
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
