

</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-primary py-12 px-16 text-white" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class=" max-w-screen-xl mx-auto  flex justify-between">
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
	<div class="max-w-screen-xl mx-auto mt-10">
		<?php display_footer_images() ?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
