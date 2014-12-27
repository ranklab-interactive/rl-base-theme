<?php get_header(); ?>
<div class="row">
<section role="main" class="large-9 columns">
<header id="page-id">
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
		<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1>Archive for <?php the_time('F, Y'); ?></h1>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="pagetitle">Author Archive</h1>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle">Blog Archives</h1>
	<?php } ?>
	<?php get_template_part('library/includes/breadcrumbs'); ?>
</header>
<?php if (have_posts()) :  while  (have_posts()) : the_post(); ?>
	<article class="blog">
		<?php
		if ( has_post_thumbnail() ) {?>
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large' );?></a>
		<?php } ?>
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<div class="postmeta">
			<?php the_time('F jS Y') ?> | By: <?php the_author(); ?> | Posted In: <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</div><!-- end meta -->
		<?php the_excerpt();?>
		<a href="<?php the_permalink();?>" class="btn">Keep Reading</a>
	</article><!-- end blog -->	
<?php endwhile; endif; ?>
<?php ranklab_pagination();?>
</section>
<?php get_sidebar(); ?>
</div> <!-- #main -->
<?php get_footer(); ?>