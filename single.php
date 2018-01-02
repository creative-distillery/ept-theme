<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EPT
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

		<div class="blog hero-contain parallax-window" data-parallax="scroll" data-image-src="<?php echo the_post_thumbnail_url(); ?>">
			<div class="overlay">
				<h1 class="entry-title no-hero"><?php the_title(); ?></h1>
			</div>
		</div>
			<div class="container">




<div class="entry-content">
	<?php the_content(); ?>
</div>
<p style="font-size:1.5em;text-align:center;"><a style="color:dimgray;" href="/blog">← Back to Posts</a></p>
		</div>


<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
