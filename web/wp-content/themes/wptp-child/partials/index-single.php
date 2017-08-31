<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 13:13
 *
 * @var array $data
 */
?>
<div class="single-post">
    <a href="<?= $data['permalink']; ?>">
        <h2 class="single-post-title">
			<?= $data['title']; ?>
        </h2>
    </a>
	<?php if ( $data['published'] > $data['timestamp'] - 24 * 3600 ) : ?>
        <span class="single-post-newmarker">NEW!</span>
	<?php endif; ?>
    <p class="single-post-excerpt">
		<?= $data['excerpt']; ?>
    </p>
</div>
