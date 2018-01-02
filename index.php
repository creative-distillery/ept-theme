<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EPT
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="entry-title no-hero">Blog</h1>
		<?php
		if ( have_posts() ) :
?>
<div class="row" style="padding:2%;">
			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				?>

				<div class="four columns">
<div class="blog-card" style="background:url(<?php the_post_thumbnail_url(); ?>);background-size:cover;background-position:center;">
	<a href="<?php echo get_the_permalink(); ?>">
	<div class="wrapper">
		<div class="overlay">
				<h2 style="text-align:center;margin:0em auto;" class="post-title"><?php the_title(); ?></h2>
				<div style="text-align:center;"></div>
				<div class="read-more">Read Post</div>
			</div>
		</div>
		</a>
</div>
</div>
				<?php

			endwhile;



		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
