<?php
/**
 * Template Name: Main Page Template
 */
 ?>

<?php get_header(); ?>

		<div class="container">	
			<div class="entry-content">
			<?php
			while ( have_posts() ) : the_post();
			the_title('<h1 class="page-title">', '</h1>');
			the_content();

			endwhile; // End of the loop.
			?>
			</div>
		</div>
<?php get_footer(); ?>