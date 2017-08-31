<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 31.08.2017
 * Time: 15:39
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
    <h1><?= get_the_title(); ?></h1>
	<?php
	$children = get_pages( [ 'child_of' => get_the_ID() ] );
	if ( ! empty( $children ) ) :
		?>
        <ul class="children">
			<?php foreach ( $children as $child ) : ?>
                <li>
                    <a href="<?= get_the_permalink( $child->ID ); ?>">
						<?= get_the_title( $child->ID ); ?>
                    </a>
                </li>
				<?php
			endforeach;
			?>
        </ul>
	<?php else : ?>
        <div class="post-content">
			<?php
			$blocks = array_filter( explode( '<pre>', get_the_content() ) );

			foreach ( $blocks as $block ) :
				?>
                <pre><code>
                    <?= esc_html( preg_replace( '/<\/?pre>/', '', $block ) ); ?>
                </code></pre>
			<?php endforeach; ?>
        </div>
		<?php
	endif;
endwhile;

get_footer();
