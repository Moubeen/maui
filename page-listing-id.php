<?php get_header(); ?>

<div class="pageWrapper" id="advanced">

<section class="advsearch">
  <div class="container">
    <div class="advsearch__main">

    <?php get_template_part( 'template-parts/content', 'searchlinks', array('key'   => 'listing'));?>

    <div class="listing__search">
            <input type="text" placeholder="Listing ID">
            <p>Enter up to 25 MLS numbers separated by commas, e.g., 34555867, 53457954, 54552147.</p>
            <a href="#" class="btn__secondary--searchListing">Search</a>
            <a href="#">Reset</a>
          </div>
    
    </div>
  </div>
</section>


<?php get_template_part( 'template-parts/content', 'contactform' );?>

<?php get_template_part( 'template-parts/content', 'map' );?>
</div>
<?php
get_footer();