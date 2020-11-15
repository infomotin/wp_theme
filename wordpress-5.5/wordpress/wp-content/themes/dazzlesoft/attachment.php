<?php get_header();?>
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
                        <!-- Entry Content
                  ============================================= -->
                        <div class="entry-content notopmargin">
                            <a href="<?php echo $post->guid; ?>">Download</a>
                            <?php
                            echo '<pre>';
                            // print_r($post);
                            echo '</pre>'; 
                            the_content();

                            ?>

                            <div class="clear"></div>

                        </div>
                    </div>

                    <div class="line"></div>

                    
                                <?php 
                                
                                if(comments_open() || get_comment_number()){
                                    // calling comments.php
                                    
                                    comments_template();
                                } ?>
                <?php 
                }
            }
            
            ?>
           </div>
        </div>
    </div>

    </div>

</section>
<!-- #content end -->
<?php get_footer(); ?>