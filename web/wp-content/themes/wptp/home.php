<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 12:43
 */

get_header();

if ( have_posts() ) :
	?>
    <div id="post-container" class="post-container">
        <form action="<?= admin_url( 'admin-ajax.php' ); ?>">
			<?php wp_nonce_field( 'wptp_one_more' ); ?>
            <input type="hidden" name="action" id="action" value="wptp_one_more"/>
            <input type="submit" id="get-one-post" value="Get another post"/>
        </form>
		<?php
		while ( have_posts() ) {
			the_post();

			require locate_template( [ 'partials/index-single.php', 'partials/single.php' ] );
		}
		?>
    </div>
	<?php
endif;
?>
    <script type="text/html" id="tmpl-single">
		<?php require locate_template( 'partials/tmpl-single.php' ); ?>
    </script>
<?php

get_footer();
