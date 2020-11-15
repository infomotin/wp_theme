<!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">



        <div class="container clearfix">

          <div class="col_half">
            <?php echo get_theme_mod('dz_footer_copywrite_text'); ?><br>
            <?php 
              if (get_theme_mod('dz_report_file')){
                ?>
                  <a href="<?php echo get_theme_mod('dz_report_file');?>">Downloade Report</a>
                <?php 
              }

            ?>


            <div class="copyright-links">
              <?php 
              if(get_theme_mod('dz_footer_privacy_page')){ 
              ?>

                <a href="<?php the_permalink(get_theme_mod('dz_footer_privacy_page') ); ?>">Privacy Policy</a> 
              
                <?php
                }
              ?>




              <?php 
                if(get_theme_mod('dz_footer_tos_page')){ 
              ?>

                <a href="<?php the_permalink(get_theme_mod('dz_footer_tos_page') ); ?>">Privacy Policy Page</a> 
              
                  <?php
                }
              ?>
            </div>
            <?php 
            
          ?>

          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
            <?php 
            if(get_theme_mod('dz_facebook_hendle')){
              ?>
                <a href="https://facebook.com/<?php echo get_theme_mod('dz_facebook_hendle'); ?>" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>
              <?php 
            }
            ?>

              
            


              <?php 
              if(get_theme_mod('dz_twitter_handle')){
              ?>
                <a href="https://twitter.com/<?php echo get_theme_mod('dz_twitter_handle'); ?>" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>


              <?php 
            }
            ?>

            </div>

            <div class="clear"></div>

            <i class="icon-envelope2"></i> info@email.com <span class="middot">&middot;</span>
            <i class="icon-headphones"></i> +55-5-5555-5555
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->
  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->
  
<?php wp_footer(  ); ?>
</body>

</html>