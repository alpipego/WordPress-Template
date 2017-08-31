<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 12:07
 */
?>
</main>
<footer class="footer">
	<?php if ( is_user_logged_in() ) : ?>
        <form action="<?= admin_url( 'admin-ajax.php' ); ?>">
			<?php wp_nonce_field( 'wptp_switch_theme' ); ?>
            <input type="hidden" name="action" id="action" value="wptp_switch_theme"/>
            <input type="submit" value="Switch Theme to <?= is_child_theme() ? 'Parent' : 'Child'; ?>-Theme">
        </form>
	<?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>
