<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 */

get_header(); ?>

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post(); ?>
			<?php echo the_content()?>
			 <section class="banner">
        <div class="banner__wrapper">
          <div class="banner__wrapper--center">
            <p
              class="title"
              data-sal="slide-right"
              data-sal-delay="100"
              data-sal-easing="ease-in-out"
              data-sal-duration="600"
            >
              <?php echo the_field('top_header')?>
            </p>
            <h1
              class="heading"
              data-sal="slide-up"
              data-sal-delay="100"
              data-sal-easing="ease-in-out"
              data-sal-duration="600"
            >
             <?php echo the_field('header')?>
            </h1>
            <button
              class="main-button"
              type="button"
              data-toggle="modal"
              data-target="<?php echo get_field('banner_button_link')['url']?>"
              data-sal="slide-up"
              data-sal-delay="300"
              data-sal-easing="ease-in-out"
              data-sal-duration="600"
            >
              <?php echo get_field('banner_button_link')['title']?>
            </button>

            <div
              class="lottie-animation"
              data-sal="slide-right"
              data-sal-delay="300"
              data-sal-easing="ease-in-out"
              data-sal-duration="600"
            >
              <div
                data-w-id="71b9a272-8cce-8e89-bd04-07c9edc7eeaa"
                data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6fe9866ec5c3d749f65530_svg%20animation%20%231.json"
                data-loop="1"
                data-direction="1"
                data-autoplay="1"
                data-is-ix2-target="0"
                data-renderer="svg"
                data-default-duration="12"
                data-duration="0"
              ></div>
            </div>
          </div>
        </div>
	  </section>
	  
	  <section class="steps" id="steps">
        <div class="steps__wrapper">
          <div class="steps__wrapper--center">
            <h3 class="heading">
            <?php echo the_field('steps_banner')?>
            </h3>
            <p>
             <?php echo the_field('steps_sub_title')?>
            </p>
          </div>
          <div class="steps__wrapper--flex">
			  <?php $boxes = get_field('steps_boxes')?>

			  <?php foreach($boxes as $box) {?>
            <div
              class="box"
              data-sal="slide-up"
              data-sal-delay="300"
              data-sal-easing="ease-in-out"
              data-sal-duration="600"
            >
              <div class="icon">
                <img src="<?php echo $box['image']?>" />
              </div>
              <h6><?php echo $box['title']?></h6>
              <p>
                <?php echo $box['details']?>
              </p>
			</div>
			  <?php }?>   
		  </div>
		  

          <div class="side-holder-top">
            <div class="side-holder-top__img">
              <div
                data-w-id="c4fb3faa-70b2-53b7-eb16-610e667fc400"
                data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177bbdc2d76420eecc7a_svg%20animation%20%232.json"
                data-loop="1"
                data-direction="1"
                data-autoplay="1"
                data-is-ix2-target="0"
                data-renderer="svg"
                data-default-duration="12"
                data-duration="0"
              ></div>
            </div>
<?php $left = get_field('step_container_left')?>
<?php $right = get_field('step_container_right')?>

            <div
              class="side-holder-top__text"
              id="invest"
              data-sal="slide-right"
              data-sal-delay="300"
              data-sal-easing="ease-in-out"
              data-sal-duration="600"
            >
              <p
                class="title"
                data-sal="slide-right"
                data-sal-delay="100"
                data-sal-easing="ease-in-out"
                data-sal-duration="600"
              >
                <?php echo $left['intro_title']?>
              </p>
              <h3
                data-sal="slide-right"
                data-sal-delay="300"
                data-sal-easing="ease-in-out"
                data-sal-duration="600"
              >
                <?php echo $left['title']?>
              </h3>
              <p
                data-sal="slide-right"
                data-sal-delay="600"
                data-sal-easing="ease-in-out"
                data-sal-duration="600"
              >
                <?php echo $left['paragraph']?>
              </p>
             
            </div>
          </div>
          <div class="side-holder-bottom">
            <div class="side-holder-bottom__img">
              <div
                data-w-id="7ee7e74c-185a-8f3d-ebc2-4d4634dbcc10"
                data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177a071a4f0d2b091323_svg%20animation%20%233.json"
                data-loop="1"
                data-direction="1"
                data-autoplay="1"
                data-is-ix2-target="0"
                data-renderer="svg"
                data-default-duration="12.012011522752763"
                data-duration="0"
              ></div>
            </div>
            <div class="side-holder-bottom__text">
              <p
                class="title"
                data-sal="slide-right"
                data-sal-delay="300"
                data-sal-easing="ease-in-out"
                data-sal-duration="600"
              >
               <?php echo $right['intro_title']?>
              </p>
              <h3
                data-sal="slide-right"
                data-sal-delay="600"
                data-sal-easing="ease-in-out"
                data-sal-duration="600"
              >
                <?php echo $right['title']?>
              </h3>
              <p
                class="no-margin"
                data-sal="slide-right"
                data-sal-delay="900"
                data-sal-easing="ease-in-out"
                data-sal-duration="800"
              >
               <?php echo $right['paragraph']?>
              </p>
            </div>
          </div>
        </div>
	  </section>
	  
	  <section
        class="mission"
        id="mission"
        data-sal="slide-right"
        data-sal-delay="300"
        data-sal-easing="ease-in-out"
        data-sal-duration="900"
      >
        <div class="mission__wrapper">
          <div class="side-holder-top">
            <div class="side-image-holder">
              <div
                data-w-id="13120fbd-8f7b-0292-ce0d-4916024de242"
                data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177af67c9f13d8f4f762_svg%20animation%20%234.json"
                data-loop="1"
                data-direction="1"
                data-autoplay="1"
                data-is-ix2-target="0"
                data-renderer="svg"
                data-default-duration="12"
                data-duration="0"
              ></div>
            </div>
            <div class="side-text-holder">
              <p class="title"><?php echo the_field('mission_intro_title')?></p>
              <h3><?php echo the_field('mission_banner')?></h3>
              <p>
                <?php echo the_field('mission_details')?>
              </p>
              <div class="mission-list">
				  <?php $lists = get_field('mission_list')?>
                <ul>
					<?php foreach($lists as $list){ ?>
                  <li style="background-image: url(<?php echo $list['checkmark']?>);">
                    <?php echo $list['list_item']?>
				  </li>
					<?php }?>
                 
                </ul>
              </div>
              <div class="buttons">
                <button
                  class="main-button"
                  type="button"
                  data-toggle="modal"
                  data-target="<?php echo get_field('mission_button')['url']?>"
                >
                  <?php echo get_field('mission_button')['title']?>
                </button>
              </div>
            </div>
          </div>
        </div>
	  </section>
	  
	  <section class="solution">
        <div class="solution__wrapper">
          <div class="side-holder-bottom">
            <div class="side-image-holder--one">
              <div
                data-w-id="b0436c77-c5fc-3ab6-ba70-61be49d71a80"
                data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177ac9f56d5b406fc030_svg%20animation%20%235.json"
                data-loop="1"
                data-direction="1"
                data-autoplay="1"
                data-is-ix2-target="0"
                data-renderer="svg"
                data-default-duration="12"
                data-duration="0"
              ></div>
            </div>
            <div class="side-text-holder">
              <p class="title"><?php echo the_field('solution_intro_title')?></p>
              <h3>
                <?php echo the_field('solution_banner')?>
              </h3>

              <p class="no-margin">
               <?php echo the_field('solution_details')?>
              </p>
            </div>
          </div>
        </div>
	  </section>
	  
	  <section class="testimonial" id="testimonial">
        <div class="testimonial__wrapper">
          <div class="testimonial__wrapper--center">
            <h3><?php echo the_field('testimonial_banner')?></h3>
            <button class="main-button"><?php echo get_field('testimonial_button')['title']?></button>
          </div>
        </div>
        <div class="testimonial__outer">
          <div class="testimonial__outer--col-one">
			  <?php $colOne = get_field('testimonial_column_one')['review_box']?>
			  <?php foreach($colOne as $row) {?>
            <div class="review-box">
              <img src="<?php echo $row['image']?>" />
              <p>
               <?php echo $row['details']?>
              </p>
			</div>
			  <?php }?>        
         
		  </div>
		  <?php $colTwo = get_field('testimonial_column_two')?>
		  <?php foreach($colTwo as $col) {?>
			<?php $reviews = $col['row']?>

          <div class="testimonial__outer--col-two">
			  <?php foreach($reviews as $review) {?>
            <div class="review-box">
              <img src="<?php echo $review['image']?>" />
              <p>
               <?php echo $review['details']?>
              </p>
			</div>
			  <?php }?>         
        
		  </div>
		  <?php }?>
				<?php $colThree = get_field('testimonial_column_three')['review_box']?>
          <div class="testimonial__outer--col-three">
			  <?php foreach($colThree as $rows) {?>
            <div class="review-box">
              <img src="<?php echo $rows['image']?>" />
              <p>
               <?php echo $rows['details']?>
              </p>
			</div>
			  <?php }?>
          
          </div>
        </div>
        <div class="testimonial__outer--animation">
          <div class="testimonial-animation">
            <div
              data-w-id="10268733-572e-03c0-6e42-2b24980bd13a"
              data-animation-type="lottie"
              data-src="https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177ac9f56d75d36fc02f_svg%20animation%20%236.json"
              data-loop="1"
              data-direction="1"
              data-autoplay="1"
              data-is-ix2-target="0"
              data-renderer="svg"
              data-default-duration="12"
              data-duration="0"
            ></div>
          </div>
        </div>
	  </section>
	  
	  <section class="download">
        <div class="download__wrapper">
          <div class="download__wrapper--center">
            <?php echo the_field('download_banner')?>
            <button
              class="main-button"
              type="button"
              data-toggle="modal"
              data-target="<?php echo get_field('download_button')['url']?>"
            >
              <?php echo get_field('download_button')['title']?>
            </button>
          </div>
        </div>
      </section>

			<?php endwhile;


		endif; ?>

<?php
get_footer();
