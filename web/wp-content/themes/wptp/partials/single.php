<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 30.08.2017
 * Time: 17:18
 */
?>

<div class="single-post">
    <a href="<?= get_the_permalink(); ?>">
        <h2 class="single-post-title">
			<?= get_the_title(); ?>
        </h2>
    </a>
	<?php if ( get_the_date( 'U' ) > time() - 24 * 3600 ) : ?>
        <span class="single-post-newmarker">NEW!</span>
	<?php endif; ?>
    <p class="single-post-excerpt">
		<?= get_the_excerpt(); ?>
    </p>
</div>
