<?php get_header(); ?>
<div class="row">
<section role="main" class="large-9 columns">
<header id="page-id">
	<h1>Sorry, we couldn't find what you are looking for</h1>
	<?php get_template_part('library/includes/breadcrumbs'); ?>
</header>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<article>
	<p><?php echo stripslashes(get_option('ranklab_404')); ?></p>
</article>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
</div> <!-- #main -->
<?php get_footer(); ?>
