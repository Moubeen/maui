<?php get_header(); ?>

<div class="pageWrapper" id="advanced">

<section class="advsearch">
  <div class="container">
    <div class="advsearch__main">

    <?php get_template_part( 'template-parts/content', 'searchlinks', array('key'   => 'address') );?>

    <div class="address">
            <div>
              <div>
                <div class="select--xxl">
                  <select id="property"><option selected disabled>Property Type</option><option>residential</option></select>
                  <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
                </div> 
              </div>
              <div>
                
                <input type="text" placeholder="City, Country">
              </div>
            </div>
            <input type="text" placeholder="Address">
            
            <input type="text" placeholder="Refinement">
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