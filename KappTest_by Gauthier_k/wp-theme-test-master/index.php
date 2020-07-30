<?php

// --------------------------------------------------------------------------------------#
/**
 * ----------------------------------
 * DEFAULT TEMPLATE FILE
 *
 * @author  Kapp Studio
 * @version 1.0
 * @package Kapp WP Theme
 * --------------------------------
 * */
// --------------------------------------------------------------------------------------#

get_header();

?>

<main id="main" class="page-wrapper">
	<div id="content">
		<h1><?php esc_html_e( 'Recent Posts', 'kapp-theme-test' ); ?></h1>

		<?php while ( have_posts() ) : ?>
			<?php
				the_post();
				echo '<div class="single-post">';
				the_title( '<h3>', '</h3>' );
				the_content();
				echo '</div>';
			?>
		<?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>
