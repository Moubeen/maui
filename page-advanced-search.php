<?php get_header(); ?>

<div class="pageWrapper" id="advanced">

<section class="advsearch">
  <div class="container">
    <div class="advsearch__main">

    <?php get_template_part( 'template-parts/content', 'searchlinks', array('key'   => 'advance') );?>

      <div class="advsearch__content">

        <div>

          <div>

            <div>
              
              <div class="select--xxl">
                <select><option>residential</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div> 
              
              <input type="text" placeholder="property sub type">
              
              <input type="text" placeholder="status">
              
              <input type="text" placeholder="city or county">
              
              <div class="select--xxl">
                <select><option>bedrooms</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div> 
              
              <div class="select--xxl">
                <select><option>SqFt</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div>
              
              <div class="select--xxl">
                <select><option>max days listed</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div> 
              
              <div class="select--xxl">
                <select><option>results per page</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div> 
            
            </div>

            <div>

              <div>
                
                <div class="select--xl">
                  <select><option>max price: %25,000,000</option></select>
                  <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
                </div>

                <div class="select--xl">
                  <select><option>max price: %25,000,000</option></select>
                  <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
                </div>  
              
              </div>
              
              <div class="select--xxl">
                <select><option>max price: %25,000,000</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div>
              
              <div class="select--xxl">
                <select><option>max price: %25,000,000</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div>
              
              <input type="text" placeholder="image, virtual tour, open house, featured">
              
              <div class="select--xxl">
                <select><option>max price: %25,000,000</option></select>
                <span><svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00893 0L4 3.01432L0.991063 0L0 0.992838L4 5L8 0.992838L7.00893 0Z" fill="black"/></svg></span>
              </div>

            </div>
          
          </div>

          <div>
            <a href="#" class="btn__secondary--searchListing">search listings</a>
            <a href="#">Reset</a>
          </div>

        </div>

        <div>

          <div>
            
            <label for="district">district</label>
            <select name="district" id="district" multiple class="overflow--division">
              <option value="haiku">haiku</option>
              <option value="hana">hana</option>
              <option value="kaanapali">kaanapali</option>
              <option value="kahakuloa">kahakuloa</option>
              <option value="kahului">kahului</option>
              <option value="kapalua">kapalua</option>
              <option value="kaupo">kaupo</option>
              <option value="kihei">kihei</option>
            </select>

            
            <label for="subdivison">subdivison</label>
            <select name="subdivison" id="subdivison" multiple class="overflow--division">
              <option value="haiku">haiku</option>
              <option value="hana">hana</option>
              <option value="kaanapali">kaanapali</option>
              <option value="kahakuloa">kahakuloa</option>
              <option value="kahului">kahului</option>
              <option value="kapalua">kapalua</option>
              <option value="kaupo">kaupo</option>
              <option value="kihei">kihei</option>
            </select>
            
            <label for="waterfront">waterfront</label>
            <select name="waterfront" id="waterfront" multiple class="overflow--division">
              <option value="haiku">haiku</option>
              <option value="hana">hana</option>
              <option value="kaanapali">kaanapali</option>
              <option value="kahakuloa">kahakuloa</option>
              <option value="kahului">kahului</option>
              <option value="kapalua">kapalua</option>
              <option value="kaupo">kaupo</option>
              <option value="kihei">kihei</option>
            </select>
            
            <label for="parking">parking</label>
            <div class="range--parking" id="parking">
              <input type="text">
              <span>to</span>
              <input type="text">
            </div>

            <label for="carport">carport</label>
            <div class="radio--carport">
              <div>
                <input type="radio" name="carport" id="car-yes">
                <label for="yes">yes</label>
              </div>
              <div>
                <input type="radio" name="carport" id="car-no">
                <label for="no">No</label>
              </div>
            </div>

          </div>

          <div>

            <label for="status">Status</label>
            <select name="status" id="status" multiple class="overflow--division">
              <option value="haiku">haiku</option>
              <option value="hana">hana</option>
              <option value="kaanapali">kaanapali</option>
              <option value="kahakuloa">kahakuloa</option>
              <option value="kahului">kahului</option>
              <option value="kapalua">kapalua</option>
              <option value="kaupo">kaupo</option>
              <option value="kihei">kihei</option>
            </select>

            <label for="sale">Potential Short Sale</label>
            <div class="radio--sale">
              <div>
                <input type="radio" name="sale" id="sale-yes">
                <label for="yes">yes</label>
              </div>
              <div>
                <input type="radio" name="sale" id="sale-no">
                <label for="no">No</label>
              </div>
            </div>

            <label for="reo">Reo</label>
            <div class="radio--reo">
              <div>
                <input type="radio" name="reo" id="reo-yes">
                <label for="yes">yes</label>
              </div>
              <div>
                <input type="radio" name="reo" id="reo-no">
                <label for="no">No</label>
              </div>
            </div>

            <label for="view">view</label>
            <select name="view" id="view" multiple class="overflow--division">
              <option value="haiku">haiku</option>
              <option value="hana">hana</option>
              <option value="kaanapali">kaanapali</option>
              <option value="kahakuloa">kahakuloa</option>
              <option value="kahului">kahului</option>
              <option value="kapalua">kapalua</option>
              <option value="kaupo">kaupo</option>
              <option value="kihei">kihei</option>
            </select>

            <label for="pool">pool</label>
            <div class="radio--pool">
              <div>
                <input type="radio" name="pool" id="pool-yes">
                <label for="yes">yes</label>
              </div>
              <div>
                <input type="radio" name="pool" id="pool-no">
                <label for="no">No</label>
              </div>
            </div>

            <label for="year">year built</label>
            <div class="range--year" id="year">
              <input type="text">
              <span>to</span>
              <input type="text">
            </div>

            <label for="remarks">remarks</label>
            <input type="text">

          </div>

        </div>

      </div>
    
    </div>
  </div>
</section>


<?php get_template_part( 'template-parts/content', 'contactform' );?>

<?php get_template_part( 'template-parts/content', 'map' );?>
</div>
<?php
get_footer();