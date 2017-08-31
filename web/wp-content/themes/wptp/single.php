<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 27.08.2017
 * Time: 13:16
 */

get_header();

$template    = locate_template( [
	'partials/i-dont-exist.php',
	'partials/index-single.php',
	'partials/single.php',
] );
$templateArr = explode( '/', $template );
$templateArr = array_splice( $templateArr, count( $templateArr ) - 3, 3 );
?>
	<h1>Check <code>locate_template()</code></h1>
<?php
echo '<pre><code class="php">';
print_r( "locate_template( [ 
    'partials/i-dont-exist.php', 
    'partials/index-single.php', 
    'partials/single.php',
] );\n\n" );
print_r( implode( '/', $templateArr ) );
echo '</code></pre>';

get_footer();
