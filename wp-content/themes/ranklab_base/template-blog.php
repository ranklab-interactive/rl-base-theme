<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="row">
<section role="main" class="large-9 columns">
<header id="page-id">
	<h1><?php the_title(); ?></h1>
	<?php get_template_part('library/includes/breadcrumbs'); ?>
</header>

<?php $posts_query = new WP_Query( 'post_type=post&posts_per_page=20' );
while ( $posts_query->have_posts() ) : $posts_query->the_post();?>
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
<?php endwhile; wp_reset_postdata(); ?>
<?php ranklab_pagination();?>

</section>
<?php get_sidebar(); ?>
</div> <!-- #main -->
<?php get_footer(); ?>