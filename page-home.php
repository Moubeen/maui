<?php get_header(); ?>
<div class="pageWrapper" id="home">

<section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">  
  <div class="container--fluid">
    
    <div class="hero__content">
      <h1>Maui Real Estate</h1>
      <span>Find your dream home or condo</span>

      <div class="tags--medium">
        <div class="tags__main">

          <div class="tags__button tags__button1">
            <a class="tab--small active">quick search</a>
            <a class="tab--small">MLS # Search</a>
            <a href="<?php echo get_home_url(); ?>/advanced-search/" class="tab--small">advanced search</a>
          </div>

          
            <div class="tags__content tags__content1">
            
              <div>

                <div>

                  <div>
                    <label for="type">property type</label>
                    <div class="select--l" id="type">
                      <select>
                        <option>residential</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /></svg></span>
                    </div>
                  </div>

                  <div>
                    <label for="area">select area</label>
                    <div class="select--l" id="area">
                      <select>
                        <option>select an area</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" />
                        </svg></span>
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
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
                    </div>
                  </div>

                  <div>
                    <label for="maxprice">max</label>
                    <div class="select--s" id="maxprice">
                      <select>
                        <option>No Max</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" />
                        </svg></span>
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
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /></svg></span>
                    </div>
                  </div>

                  <div>
                    <label for="baths">baths</label>
                    <div class="select--xs" id="baths">
                      <select>
                        <option>no max</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">   <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
                    </div>
                  </div>

                </div>

              </div>

              <div>
                <a href="#" class="btn__secondary--submit-small">submit search</a>
                <span>or try the <a href="<?php echo get_home_url(); ?>/advanced-search/">Advanced Search</a> </span>
              </div>

            </div>


        </div>
      </div>

    </div>

  </div>
</section>

<section class="featured">
  <div class="container">
    <div class="featured__main">

      <h2 class="heading__black--border">Featured Real Estate Listings in Maui</h2>

      <div>

        <div class="adcard--big">

          <div class="cardheader">
            <a href="#"><img src="assets/img/featured2.png" alt="image"></a>
          </div>
          
          <div class="cardbody">
            <h3 class="head">$225,000</h3>
            <a href="#"><h3 class="head">0 Noho Lio Sales Map #73</h3></a>
            <h4>Maunaloa, Hawaii 96770</h4>
            <p class="para">This 5.2 acre, totally private, gently sloped oceanview lot is within walking distance of beautiful, deserted, white sand beaches, including stunning 3-mile long Papohaku Beach. </p>
          </div>

          <div class="cardfooter">

            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/area.svg'; ?>" alt="area">
              <span>229169 SqFt</span>
            </div>
            
            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/bedrooms.svg'; ?>" alt="bedrooms">
              <span>N/A</span>
            </div>
            
            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/toilet.svg'; ?>" alt="toilet">
              <span>N/A</span>
            </div>
            
            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/bath.svg'; ?>" alt="bath">
              <span>N/A</span>
            </div>
          
          </div>

        </div>
        <div class="adcard--big">
          <div class="cardheader">
            <a href="#"><img src="assets/img/featured2.png" alt="image"></a>
          </div>
          <div class="cardbody">
            <h3 class="head">$225,000</h3>
            <a href="#"><h3 class="head">0 Noho Lio Sales Map #73</h3></a>
            <h4>Maunaloa, Hawaii 96770</h4>
            <p class="para">This 5.2 acre, totally private, gently sloped oceanview lot is within walking distance of
              beautiful, deserted, white sand beaches, including stunning 3-mile long Papohaku Beach. </p>
          </div>
          <div class="cardfooter">

            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/area.svg'; ?>" alt="area">
              <span>229169 SqFt</span>
            </div>
            
            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/bedrooms.svg'; ?>" alt="bedrooms">
              <span>N/A</span>
            </div>
            
            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/toilet.svg'; ?>" alt="toilet">
              <span>N/A</span>
            </div>
            
            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/bath.svg'; ?>" alt="bath">
              <span>N/A</span>
            </div>
          
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="infoblogs">
  <div class="container--big">
    <div class="infoblogs__main">

      <div class="infoblogs__knowledge">

        <div class="infoblogs__content">
          <h3 class="heading__black">knowledge and passion for Maui real estate</h3>
          <p class="para">We at the Barry Brown Team have the knowledge and passion for Maui real estate, and our participation in the community provides the insight for our knowledge of the island. Let us bring trust, transparency, and the ever so important follow through to ensure that your real estate experience is gratifying. <br> <br>The Barry Brown Team wants to represent your interests, whether you are buying or selling on Maui, Molokai, or Lanai.</p>
          <a href="<?php echo get_home_url(); ?>/contact/" class="btn__secondary--contact-small">contact us</a>
        </div>

        <div class="infoblogs__img"><a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/knowledge.png'; ?>" alt="image"></a></div>

      </div>

      <div class="infoblogs__team">

        <div class="infoblogs__img"><a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/barryBrown.png'; ?>" alt="image"></a></div>

        <div class="infoblogs__content">
          <h3 class="heading__black">The Barry Brown Team. Trusted. Respected. Connected. </h3>
          <p class="para">We have been full time residents in <a href="<?php echo get_home_url(); ?>/west-maui/">West Maui</a> since 1987, exclusively representing clients in transactions for all of Maui County, from Lahaina to Kaanapali and Kapalua, from Kihei to Wailea and Makena, from Wailuku and Kahului to Upcountry and all the way to Hana, as well as Molokai and Lanai. We can assist you in making your Hawaii real estate dreams a reality. <br> <br>We understand that shopping for real estate in Maui and Hawaii can come with a number of challenges, especially if you do not live on the Island full time. That is where Barry and Carol Brown come in to make certain that the transaction goes through smoothly from start to finish. Our experience will help you through every step of the process to ensure that your needs are met.</p>
          <a href="<?php echo get_home_url(); ?>/contact/" class="btn__secondary--contact-small">contact us</a>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="homesale" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/hero.png'; ?>);">
  <div class="container--fluid">
    <div class="homesale__main">

      <div>
        <h2 class="heading__white">Maui Real Estate and Homes for Sale</h2>
        <span class="para">Let us show you the best Maui Homes for sale.</span>
      </div>

      <div class="tags--medium">
        <div class="tags__main">

          <div class="tags__button tags__button2">
            <a class="tab--small active">quick search</a>
            <a class="tab--small">MLS # Search</a>
            <a class="tab--small" href="<?php echo get_home_url(); ?>/advanced-search/">advanced search</a>
          </div>

            <div class="tags__content tags__content2">

              <div>

                <div>

                  <div>
                    <label for="type">property type</label>
                    <div class="select--l" id="type">
                      <select>
                        <option>residential</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
                    </div>
                  </div>

                  <div>
                    <label for="area">select area</label>
                    <div class="select--l" id="area">
                      <select>
                        <option>select an area</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
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
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
                    </div>
                  </div>

                  <div>
                    <label for="maxprice">max</label>
                    <div class="select--s" id="maxprice">
                      <select>
                        <option>No Max</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
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
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
                    </div>
                  </div>

                  <div>
                    <label for="baths">baths</label>
                    <div class="select--xs" id="baths">
                      <select>
                        <option>no max</option>
                      </select>
                      <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black" /> </svg></span>
                    </div>
                  </div>

                </div>

              </div>

              <div>
                <a href="#" class="btn__secondary--submit-small">submit search</a>
                <span>or try the <a href="<?php echo get_home_url(); ?>/advanced-search/">Advanced Search</a> </span>
              </div>

            </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="about__main">

      <h2 class="heading__black--border">Meet The Barry Brown Team</h2>
      <?php
          $args = array(
              'post_type' => 'our_team',
              'orderby'   => 'date',
              'order'     => 'ASC',
              'posts_per_page' => 2
          );
          $newQuery = new WP_Query($args);
          
          if($newQuery->have_posts()) : 
              
              while($newQuery->have_posts()) : 
                  $newQuery->the_post();
          ?>


          <div class="about__card">

        <div class="about__text">
          <h3 class="head"><?php the_title();?></h3>
          <p class="para"><?php echo substr($post->post_content,0,350);?>... <a href="<?php the_permalink();?>">Read more</a></p>
          
            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/phone-small.svg'; ?>" alt="image">
              <a href="tel:<?php the_field('phone_number');?>" class="para"><?php the_field('phone_number');?></a>
            </div>

            <div>
              <img src="<?php echo get_template_directory_uri().'/assets/svg/email.svg'; ?>" alt="image">
              <a href="mailto:<?php the_field('email');?>" class="para"><?php the_field('email');?></a>
            </div>
        
        </div>

        <div class="about__img"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="ima"></div>

      </div>
        <?php
          endwhile;
          else: 
          ?>
              Please Add atleast 1 member in team section to appear this section
        <?php
          endif;
          ?>


      
    
    </div>
  </div>
</section>

<section class="guide" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/MREbackground.png'; ?>);">
  <div class="container--fluid">
    <div class="guide__main">
      <h2 class="heading__white">Your Guide to Maui Homes and Condos</h2>
      <p class="para">Let us show you the best Maui Homes for sale.</p>
      <a href="<?php echo get_home_url(); ?>/contact/" class="btn__secondary--contact-small">contact us</a>
    </div>
  </div>
</section>

<section class="recentnews">
  <div class="container">

    <div class="recentnews__heading">
      <h2 class="heading__black--border">most recent news and articles</h2>
      <a href="<?php echo get_home_url(); ?>/blog">see more</a>
    </div>
    
    <div class="recentnews__main">
      <?php
        $args = array(
            'post_type' => 'post',
            'orderby'   => 'date',
            'order'     => 'ASC',
            'posts_per_page' => 3
        );
        $newQuery = new WP_Query($args);
        
        if($newQuery->have_posts()) : 
            
            while($newQuery->have_posts()) : 
                $newQuery->the_post();
        ?>
        <div class="blogpost">
          <a href="<?php echo the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="image"></a>
          <a href="<?php echo the_permalink();?>"><h3 class="head"><?php echo $post->post_title;?></h3></a>
          <?php the_excerpt();?>
        </div>
      <?php
        endwhile;
        else: 
        ?>
            Please Add atleast 1 post in posts section to appear this section
      <?php
        endif;
        ?>  
      

    </div>

    <a href="#" class="seemore">see more</a>

  </div>
</section>

<?php get_template_part( 'template-parts/content', 'contactform' );?>

<?php get_template_part( 'template-parts/content', 'map' );?>

</div>

<?php
get_footer();
