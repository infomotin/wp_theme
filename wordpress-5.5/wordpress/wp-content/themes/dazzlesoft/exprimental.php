<?php 
/*
*Template Name: Experimental
*/
get_header();


?>
<section id="page-title">
    <div class="container clearfix">
        <h1>
        Experimental Page Testing 
        </h1>

    </div>
</section>
<!-- Content
    ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <?php 
                // print_r(bloginfo()); 
                // // echo bloginfo('admin_email' );
                    single_post_title();
                ?>

            </div>

        </div>
        <div class="line"></div>
    </div>


    </div>
    </div>

    </div>
    </div>
</section>
<!-- #content end -->
<?php get_footer(); ?>