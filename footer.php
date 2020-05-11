<?php
/**
 * The template for displaying the footer
 *
 *
 */

?>

<footer class="page-footer">
      <div class="page-footer__wrapper">
        <div class="footer-holder">
          <div class="footer-left">
            <img src="<?php echo get_field('footer_logo', 'option')?>" />
           
          </div>
          <div class="social-holder">
            <?php $footer = get_field('social_media', 'option')?>

            <?php foreach($footer as $links) {?>
            <a href="<?php echo $links['logo_link']?>" class="link">
              <img
                src="<?php echo $links['logo']?>"
              />
            </a>
            <?php }?>      
           
          
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="getStartedModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true"><img src="<?php echo the_field('close_button')?>"/></span>
            </button>
            <div class="modal-body">
              <div class="modal-form">
                <div class="modal-form__center">
                  <h4>Create an account</h4>
                  <p>Sign up and keep an eye on your spending.</p>

                  <form action="#">
                    <label for="fname">Name</label><br />
                    <input type="text" id="fname" name="fname" /><br />
                    <label for="lname">Email</label><br />
                    <input type="text" id="email" name="email" /><br />
                    <label for="password">Password</label><br />
                    <input
                      type="password"
                      id="password"
                      name="password"
                    /><br />
                    <input
                      class="main-button"
                      type="submit"
                      value="Submit"
                    /><br />
                  </form>
                </div>
              </div>
              <div class="modal-text">
                <div class="modal-text__center">
                  <h1>Get in touch</h1>
                  <p>To keep connected with us, login with your info.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="registerModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true"><img src="<?php echo the_field('close_button')?>"/></span>
            </button>
            <div class="modal-body">
              <div class="modal-form">
                <div class="modal-form__center">
                  <div class="modal-form__center--text">
                    <h4>Sign in to Smart Trackable Spending</h4>
                    <p>or use your email account.</p>
                  </div>

                  <form action="#">
                    <label for="fname">Name</label><br />
                    <input type="text" id="fname" name="fname" /><br />
                    <label for="lname">Email Address</label><br />
                    <input type="text" id="email" name="email" /><br />

                    <input
                      class="main-button"
                      type="submit"
                      value="Submit"
                    /><br />
                  </form>
                </div>
              </div>
              <div class="modal-text">
                <div class="modal-text__center">
                  <h1>Hello, friend!</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <?php wp_footer(); ?>
</main>
  </body>
</html>
