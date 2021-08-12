<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maui
 */

get_header();
?>


	<?php
		while ( have_posts() ) :
			the_post();?>

	<div class="pageWrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="default__heading" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo get_template_directory_uri().'/assets/img/hero.png'; ?>);">
	<h1>  <?php the_title(); ?></h1>
  </div>
<section class="default formatting">
  
  <div class="default__content">
	<?php the_content();?>
  </div>
</section>

</div>
<?php
endwhile; // End of the loop.
		?>
<?php
get_footer();
