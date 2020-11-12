<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <!-- Stylesheets
	============================================= -->
<?php 
wp_head();
?>


</head>

<!-- this body_class function are can be loded custom css  -->
<body <?php body_class("stretched no-transition"); ?>>

  <!-- Document Wrapper
  ============================================= -->
  <div id="wrapper" class="clearfix">
    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="dark">

      <div class="container clearfix">

        <div class="col_half nobottommargin">

          <!-- Top Links
          ============================================= -->
          <div class="top-links">
          <?php 
                if(has_nav_menu( 'secondary' )){
                    wp_nav_menu([
                        'theme_location' => 'secondary',
                        'container'      => '',
                        'fallback_cb'   => '',
                        'depth'         => 1,
                        'before'        => '',
                        'after'         => '',
                        'link_before'   => '',
                        'link_after'    => '',
                        // 'walker'        => new DZ_Custom_Nav_Walker(),
                    ]);
                }
            ?>
          </div>
          <!-- .top-links end -->

        </div>

        <div class="col_half fright col_last nobottommargin">

          <!-- Top Social
          ============================================= -->
          <div id="top-social">
            <ul>
              <li>
              <?php 
                if(get_theme_mod('dz_facebook_handle')){
                ?>   
               <a href="https://www.facebook.com/<?php echo get_theme_mod('dz_facebook_handle');?>" class="si-facebook">
                  <span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">facebook</span>
                </a>
               
               <?php 
               }
              ?>
              </li>

              <li>
              <?php 
                if(get_theme_mod('dz_twitter_handle')){
                ?>   
               <a href="https://www.facebook.com/<?php echo get_theme_mod('dz_twitter_handle');?>" class="si-twitter">
                  <span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span>
                </a>
               
               <?php 
               }
              ?>
              </li>


              <li>
              <?php 
                if(get_theme_mod('dz_instagram_handle')){
                ?>   
               <a href="https://www.facebook.com/<?php echo get_theme_mod('dz_instagram_handle');?>" class="si-instagram">
                  <span class="ts-icon"><i class="icon-instagram"></i></span><span class="ts-text">instagram</span>
                </a>
               
               <?php 
               }
              ?>
              </li>


              <li>
              <?php 
                if(get_theme_mod('dz_email')){
                ?>   
               <a href="https://www.facebook.com/<?php echo get_theme_mod('dz_email');?>" class="si-email">
                  <span class="ts-icon"><i class="icon-email"></i></span><span class="ts-text">Email</span>
                </a>
               
               <?php 
               }
              ?>
              </li>

              <li>
              <?php 
                if(get_theme_mod('dz_phone_number')){
                ?>   
               <a href="https://www.facebook.com/<?php echo get_theme_mod('dz_phone_number');?>" class="si-facebook">
                  <span class="ts-icon"><i class="icon-phone"></i></span><span class="ts-text">Phone</span>
                </a>
               
               <?php 
               }
              ?>
              </li>

            </ul>
          </div><!-- #top-social end -->

        </div>

      </div>

    </div>
    <!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

      <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
          <?php 
          if(has_custom_logo( )){
            the_custom_logo( );
          }else{
            ?>
              <a href="<?php echo home_url('/'); ?>" class="standard-logo"><?php bloginfo('name'); ?></a>
            <?php
          }
          ?>
          
        </div>
        <!-- #logo end -->

        <div class="top-advert">
          <?php 
            if(function_exists('quads_ad')){
              echo quads_ad(['location' => 'dazzle_header'],);
            }

          ?>
        </div>

      </div>

      <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2">

          <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- ul Main Menu
            ======================================== -->
            <!-- <ul>
              <li><a href="#">
                  <div>Menu Item 1</div>
                </a>
                <ul>
                  <li>
                    <a href="#">
                      <div>Submenu Item 1</div>
                    </a>
                    <ul>
                      <li><a href="#">
                          <div>Submenu Item 1</div>
                        </a></li>
                      <li><a href="#">
                          <div>Submenu Item 2</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a href="#">
                      <div>Submenu Item 2</div>
                    </a></li>
                </ul>
              </li>
              <li><a href="#">
                  <div>Menu Item 2</div>
                </a>
                <ul>
                  <li><a href="#">
                      <div>Submenu Item 1</div>
                    </a>
                    <ul>
                      <li><a href="#">
                          <div>Submenu Item 1</div>
                        </a></li>
                      <li><a href="#">
                          <div>Submenu Item 2</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a href="#">
                      <div>Submenu Item 2</div>
                    </a></li>
                </ul>
              </li>
              <li><a href="#">
                  <div>Menu Item 3</div>
                </a>
                <ul>
                  <li><a href="#">
                      <div>Submenu Item 1</div>
                    </a>
                    <ul>
                      <li><a href="#">
                          <div>Submenu Item 1</div>
                        </a>
                        <ul>
                          <li><a href="#">
                              <div>Submenu Item 1</div>
                            </a></li>
                          <li><a href="#">
                              <div>Submenu Item 2</div>
                            </a></li>
                          <li><a href="#">
                              <div>Submenu Item 3</div>
                            </a></li>
                        </ul>
                      </li>
                      <li><a href="#">
                          <div>Submenu Item 2</div>
                        </a></li>
                      <li><a href="#">
                          <div>Submenu Item 3</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a href="#">
                      <div>Submenu Item 2</div>
                    </a>
                    <ul>
                      <li><a href="#">
                          <div>Submenu Item 1</div>
                        </a></li>
                      <li><a href="#">
                          <div>Submenu Item 2</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a href="#">
                      <div>Submenu Item 3</div>
                    </a></li>
                </ul>
              </li>
              <li><a href="#">Menu Item 4</a></li>
            </ul> -->
            <!-- ul Main Menu end -->
            <!-- Calling WP functions for create menu  -->
            <?php 
                if(has_nav_menu( 'primary' )){
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => '',
                        'fallback_cb'   => '',
                        'depth'         => 4,
                        'before'        => '',
                        'after'         => '',
                        'link_before'   => '',
                        'link_after'    => '',
                        // 'walker'        => new DZ_Custom_Nav_Walker(),
                    ]);
                }
            ?>

            <!-- Top Cart
            ============================================= -->
            <div id="top-cart">
              <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
              <div class="top-cart-content">
                <div class="top-cart-title">
                  <h4>Shopping Cart</h4>
                </div>
                <div class="top-cart-items">
                  <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                      <a href="#"><img src="images/shop/small/1.jpg" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <a href="#">Blue Round-Neck Tshirt</a>
                      <span class="top-cart-item-price">$19.99</span>
                      <span class="top-cart-item-quantity">x 2</span>
                    </div>
                  </div>
                  <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                      <a href="#"><img src="images/shop/small/6.jpg" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <a href="#">Light Blue Denim Dress</a>
                      <span class="top-cart-item-price">$24.99</span>
                      <span class="top-cart-item-quantity">x 3</span>
                    </div>
                  </div>
                </div>
                <div class="top-cart-action clearfix">
                  <span class="fleft top-checkout-price">$114.95</span>
                  <button class="button button-3d button-small nomargin fright">
                    View Cart
                  </button>
                </div>
              </div>
            </div><!-- #top-cart end -->

            <!-- Top Search
            ============================================= -->
            <div id="top-search">
              <a href="#" id="top-search-trigger">
                <i class="icon-search3"></i><i class="icon-line-cross"></i>
              </a>
              <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <input type="text" name="q" class="form-control" 
                placeholder="<?php _e('Type &amp; Hit Enter..','dazzlesoft');?>" 
                value="<?php the_search_query(  ); ?>">
              </form>
            </div>
            <!-- #top-search end -->

          </div>

        </nav><!-- #primary-menu end -->

      </div>

    </header><!-- #header end -->

