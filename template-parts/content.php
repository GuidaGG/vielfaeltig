<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_search() || is_archive() ) : ?>

		<div class="entry-summary">
		<div class="h-40 w-full sticky top-0 left-0 bg-gradient-to-b fromlight-bg  from-40% to-transparent z-10" ></div>
			
			<?php the_excerpt(); ?>
		</div>

	<?php else : ?>

	

		<!-- fago CONTENT CONTAINER 03 (content.php) mb-12? -->
		<div class="entry-content max-w-screen-3xl mx-auto pb-28  px-6 md:px-32 xl:px-36">
			<div class="h-24 w-full sticky top-0 left-0 bg-gradient-to-b from-light-bg from-40% to-transparent z-10" ></div>

			<?php
			if (!is_front_page()) {
		
				echo '<h1 class="stick">' . get_the_title() . '</h1>';

			}
			?>
			<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'tailpress' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
		</div>

	<?php endif; ?>

</article>
