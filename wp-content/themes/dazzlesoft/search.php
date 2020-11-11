
<?php get_header();?>
  <!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1><?php _e('Search Results for ','dazzlesoft');?><?php the_search_query(  ); ?></h1>
			</div>
		</section>
		<!-- #page-title end -->
    
    <!-- Content
    ============================================= -->
    <section id="content">
      <div class="content-wrap">
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
          </div>
    </div>
  </div>
</section><!-- #content end -->
<?php get_footer(); ?>
    