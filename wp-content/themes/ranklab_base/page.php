<?php get_header(); ?>
<div class="row">
	<section role="main" class="large-9 columns">
	<header id="page-id">
		<h1><?php the_title(); ?></h1>
		<?php get_template_part('library/includes/breadcrumbs'); ?>
	</header>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	<article>
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'large' );
		}
		?>
		<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
	</section>
<?php get_sidebar(); ?>
</div> <!-- #main -->
<?php get_footer(); ?>