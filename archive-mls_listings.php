<?php get_header();?>



	<div class="pageWrapper" id="listing">

<section class="listing">
  <div class="container">
	<div class="listing__main">

	  <h2 class="page__heading">view all listings</h2>

	  <div class="tags--big">
		<div class="tags__main">
		  <div class="tags__content">

			<div>

			  <div>

				<div>
				  <label for="type">property type</label>
				  <div class="select--l" id="type">
					<select>
					  <option>residential</option>
					</select>
					<span><svg width="8" height="5" viewBox="0 0 8 5" fill="none"xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z"  fill="black" /></svg></span>
				  </div>

				</div>

				<div>
				  <label for="area">select area</label>
				  <div class="select--l" id="area">
					<select>
					  <option>select an area</option>
					</select>
					<span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z"   fill="black" /> </svg></span>
				  </div>
				</div>

			  </div>

			  <div>

				<div>
				  <label for="minprice">Min price</label>
				  <div class="select--s" id="minprice">
					<select>
					  <option>no min</option>
					</select>
					<span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z"   fill="black" /> </svg></span>
				  </div>
				</div>

				<div>
				  <label for="maxprice">max</label>
				  <div class="select--s" id="maxprice">
					<select>
					  <option>No Max</option>
					</select>
					<span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z"   fill="black" /> </svg></span>
				  </div>
				</div>

			  </div>

			  <div>

				<div>
				  <label for="beds">beds</label>
				  <div class="select--xs" id="beds">
					<select>
					  <option>No Min</option>
					</select>
					<span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z"   fill="black" /> </svg></span>
				  </div>
				</div>

				<div>
				  <label for="baths">baths</label>
				  <div class="select--xs" id="baths">
					<select>
					  <option>no max</option>
					</select>
					<span><svg width="8" height="5" viewBox="0 0 8 5" fill="none"  xmlns="http://www.w3.org/2000/svg">  <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z"    fill="black" />  </svg></span>
				  </div>
				</div>

			  </div>

			</div>

			<div>
			  <a href="#" class="btn__secondary--submit-big">submit search</a>
			  <span>or try the <a href="#">Advanced Search</a> </span>
			</div>

		  </div>
		</div>
	  </div>

	  <div class="listing__card">
		
	  <?php if ( have_posts() ) : ?>

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

?>
	<div class="adcard--small">

<div class="cardheader"> <a href="#"><img src="assets/img/featured1.png" alt="image"></a> </div>

<div class="cardbody">
  <h3 class="head">$1,300,000</h3>
  <a href="<?php the_permalink();?>"><h3 class="head">104 Kualapa #104</h3></a>
  <a href="#"><h4>Lahaina, Hawaii 96761</h4></a>
  <p class="para">Vintage 104 is a brilliant luxury home, offering casual yet elegant living in a planned gated community in Kaanapali. With 3 bedrooms (one used as a family room), 2 1/2 bath, 2 car...Vintage 104 is a brilliant luxury home, offering casual yet elegant living in a planned gated community in Kaanapali. With 3 bedrooms (one used as a family room), 2 1/2 bath, 2 car...</p>
</div>

<div class="cardfooter">

  <div>
	<img src="<?php echo get_template_directory_uri().'/assets/svg/area.svg';?>" alt="area">
	<span>737906 SqFt</span>
  </div>

  <div>
	<img src="<?php echo get_template_directory_uri().'/assets/svg/bedrooms.svg';?>" alt="bedrooms">
	<span>3</span>
  </div>

  <div>
	<img src="<?php echo get_template_directory_uri().'/assets/svg/toilet.svg';?>" alt="toilet">
	<span>3</span>
  </div>

  <div>
	<img src="<?php echo get_template_directory_uri().'/assets/svg/bath.svg';?>" alt="bath">
	<span>2</span>
  </div>

</div>

</div>
<?php

endwhile;

the_posts_navigation();

else :

get_template_part( 'template-parts/content', 'none' );

endif;
?>
		

	  </div>

	  <!-- <div class="listing__tabs">
		<span class="active">1</span>
		<span>2</span>
		<span>3</span>
		<span>4</span>
	  </div> -->

	</div>
  </div>
</section>

<?php get_template_part( 'template-parts/content', 'contactform' );?>

<?php get_template_part( 'template-parts/content', 'map' );?>
</div>

<?php
get_footer();
