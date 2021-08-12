<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maui
 */

?>

<footer class="footer">
  <div class="container">
    <div class="footer__main">

      <div class="footer__sidebar1">
        <?php the_custom_logo(); ?>

        <?php dynamic_sidebar( 'footer-1' ); ?>
      </div>

      <div class="footer__sidebar2">
        <span class="footer__heading">resources</span>

        <?php dynamic_sidebar( 'footer-2' ); ?>
      </div>

      <div class="footer__sidebar3">
        <span class="footer__heading">Follow Us</span>

        <?php dynamic_sidebar( 'footer-3' ); ?>
      </div>

    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
