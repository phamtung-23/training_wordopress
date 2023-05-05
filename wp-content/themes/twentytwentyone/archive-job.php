<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<div>Tessssssssssssssssssssssssssssssssssss</div>
<?php if (have_posts()) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
		<?php if ($description) : ?>
			<div class="archive-description"><?php echo wp_kses_post(wpautop($description)); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	<?php while (have_posts()) : ?>
		<?php the_post(); ?>
		<?php the_title(); ?>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>


<?php else : ?>
	<?php get_template_part('template-parts/content/content-none'); ?>
<?php endif; ?>

<?php
get_footer();
