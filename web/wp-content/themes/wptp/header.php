<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 12:06
 */
?>
<!doctype html>
<html lang="<?= get_locale(); ?>" class="no-js">
<head>
    <meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body class="<?= is_child_theme() ? 'wptp-child' : ''; ?>">
<header class="header">
    <div class="header-name"><?= get_bloginfo( 'name' ); ?></div>
    <div class="header-description"><?= get_bloginfo( 'description' ); ?></div>
</header>
<main class="main">
