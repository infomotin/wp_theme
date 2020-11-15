<!-- //defferent page defferi header options  -->
<!-- <?php
// if ( is_home() ) :
//     get_header( 'home' );
// elseif ( is_404() ) :
//     get_header( '404' );
// else :
//     get_header();
// endif;
?> -->

<?php get_header();?>
    
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <?php 
        if( !is_single() && is_home() && function_exists('wpp_get_mostpopular') && get_theme_mod('dz_brakking_news_show')){
          wpp_get_mostpopular(
            [
              'wpp_start'    => '<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                          <div>
                            <div class="container clearfix">
                              <span class="badge badge-danger bnews-title">'.get_theme_mod('dz_brakking_news_title').':</span>
                
                              <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                                data-pagi="false">
                                <div class="flexslider">
                                  <div class="slider-wrap">',

              'wpp_end'      =>'</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>',
              'post_html' =>'<div class="slide"><a href="{url}"><strong>{text_title}</strong></a></div>',




            ]
          );


          ?>
          
      
                  
        
        
        
        <?php 
        }
        ?>



        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">
            <?php 
              if(have_posts()){
                while (have_posts()) {
                  the_post(); 
                  // content-excerpt.php  only if found then its work 
                  get_template_part( 'partials/post/content-excerpt' );
                  // content-excerpt.php if found its work, but not found then call  content.php
                  //get_template_part( 'partials/post/content','excerpt' );
                }
              }
            ?>
                
           

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
                <!-- <a href="#" class="btn btn-outline-secondary float-left"> -->
                 <?php
                 next_posts_link('&larr; Older');
                 previous_posts_link('Newer &rarr;');
                  ?>
                </a>
                <!-- <a href="#" class="btn btn-outline-dark float-right"> -->
                  
                <!-- </a> -->
              </div>
            </div>
            <!-- .pager end -->

          </div><!-- .postcontent end -->
                    <!-- //if call sidebar with out peramitter than call onliy [sidebar.php], or exendtion of sidebar as paramitter  -->
          <?php 
            get_sidebar('');
          ?>

        </div>

      </div>

    </section><!-- #content end -->
<?php get_footer(); ?>
    