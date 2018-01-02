<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EPT
 */

?>

<div class="hero-contain" style="background:url(<?php echo the_cfc_field('page_layout', 'hero-image'); ?>);background-size:cover;">
	<div class="overlay">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p class="teaser"><?php echo the_cfc_field('page_layout', 'teaser'); ?></p>
	</div>
</div>
<div style="background:url('/wp-content/themes/ept/css/img/brillant.png');">
<div class="entry-content">

	<?php the_content(); ?>
</div>
</div>
