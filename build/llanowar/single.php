<?php get_header(); ?>
<main id="main" class="site-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php the_post_navigation(); ?>
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template(); ?>
		<?php endif; ?>
	<?php endwhile; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
