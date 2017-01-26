<?php get_header(); ?>
      
    </div>  <!-- end of container-fluid -->

    <div class="container" id="single_page">
      <div class="col-md-12">
      
        <?php while(have_posts()):the_post() ?>

          <div class="row" id="single_post">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
              <div class="p_time"><?php the_author()?> | <?php the_time('g:ia,F y');?>
                with <?php comments_popup_link('No Comment','1 Comment','% Comments','c_link','Log In to comment');?>
              </div>
            <p><?php the_content(); ?></p>
          </div><!-- end of blog_content -->

        <?php endwhile; ?>
        
      </div>
      
    </div><!-- end of blog_page -->



    <!-- Footer -->

<?php get_footer(); ?>