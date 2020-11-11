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
<section id="page-title">
      <div class="container clearfix">
        <h1><?php single_post_title(); ?></h1>
        <span><?php 
        
                if(function_exists('the_subtitle')){
                    the_subtitle(); 
                }                
            ?></span>
      </div>
    </section>
<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    global $post;
                    $author_ID = $post->post_author;
                    $author_URL = get_author_posts_url($author_ID);
                ?>
                <div class="single-post nobottommargin">

                    <!-- Single Post
              ============================================= -->
                    <div class="entry clearfix">
                        <!-- Entry Title
                  ============================================= -->
                        <div class="entry-title">
                            <h2><?php the_title();?></h2>
                        </div>
                        <!-- .entry-title end -->
                       <!-- Entry Image
                  ============================================= -->
                    <div class="entry-image">
                        <?php 
                         if(has_post_thumbnail()){
                        ?>
                        <div class="entry-image">
                        <a href="<?php the_permalink( ); ?>">
                    <?php 

                        the_post_thumbnail('full',
                        ['class' => 'image_fade' ]); 
                    
                    ?>
                  </a>
                </div>
                
            <?php 
            }
                ?>

                        </div>
                        <!-- .entry-image end -->

                        <!-- Entry Content
                  ============================================= -->
                        <div class="entry-content notopmargin">
                            <?php the_content();
                            
                                //big post wp_link_pages funtions paramitter 

                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __( 'Pages:','Dazzlesoft' ),
                                    'after'            => '</p>',
                                    // 'link_before'      => '',
                                    // 'link_after'       => '',
                                    // 'aria_current'     => 'page',
                                    // 'next_or_number'   => 'number',
                                    // 'separator'        => ' ',
                                    // 'nextpagelink'     => __( 'Next page' ),
                                    // 'previouspagelink' => __( 'Previous page' ),
                                    // 'pagelink'         => '%',
                                    // 'echo'             => 1,
                                );
                                wp_link_pages($defaults);                            
                            ?>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="line"></div>
                            </div>
                              
                <?php 
                }
            }           
            ?>
           </div>
        </div>
        <?php 
            get_sidebar('');
        ?>
    </div>
    </div>
</section>
<!-- #content end -->
<?php get_footer(); ?>