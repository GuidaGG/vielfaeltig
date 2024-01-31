

</main>

<div class="w-full absolute bottom-0 h-28">
	<div class="h-full max-w-screen-3xl mx-auto flex gap-4 items-end justify-end p-6">
		<div> Züruck nach oben </div>
		<a href="#" aria-label="Toggle navigation" class="button -rotate-90" id="sidebar-menu-toggle" >
			<img src="<?php echo get_template_directory_uri(); ?>/resources/images/ENT_vielfaeltig_Arrow.svg" alt="Arrow Icon">
		</a>
	</div>
</div>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer  text-white text-xs" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>
	<div class="footer-shadow max-w-screen-3xl mx-auto px-6 md:px-16 bg-primary py-5 md:py-10 special-shadow">
		<div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 ">
			<div>
				<?php display_contact_info() ?>
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
	</div>			
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
