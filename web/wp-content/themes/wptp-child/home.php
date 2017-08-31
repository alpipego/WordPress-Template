<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 12:43
 */

use WPHibou\Template\Template;
use WPHibou\Template\TemplateFactory;

/** @var Template $tmpl */
$tmpl = ( new TemplateFactory() )->build( [ 'partials/index-single.php' ], 'single' );
$tmpl->render();

get_header();

if ( have_posts() ) :
	?>
    <div id="post-container" class="post-container">
        <form action="<?= admin_url( 'admin-ajax.php' ); ?>" id="get-one-post">
			<?php wp_nonce_field( 'wptp_one_more' ); ?>
            <input type="hidden" name="action" id="action" value="wptp_one_more"/>
            <input type="hidden" name="offset" value="1"/>
            <input type="submit" value="Get another post"/>
        </form>
		<?php
		while ( have_posts() ) {
			the_post();

			$tmpl->render( [
				'permalink' => get_the_permalink(),
				'title'     => get_the_title(),
				'published' => get_the_date( 'U' ),
				'excerpt'   => get_the_excerpt(),
				'timestamp' => time(),
			] );
		}
		?>
    </div>
	<?php
endif;

get_footer();
