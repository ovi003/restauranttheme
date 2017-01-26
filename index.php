<?php get_header(); ?>
      
    </div>  <!-- end of container-fluid -->

    <div class="container" id="blog_page">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-9">

          <?php while(have_posts()):the_post() ?>

            <div class="row" id="blog_content">
              <?php the_post_thumbnail(); ?>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="p_time"><?php the_author()?> | <?php the_time('g:ia,F y');?>
                  with <?php comments_popup_link('No Comment','1 Comment','% Comments','c_link','Log In to comment');?>
                </div>
              <p><?php read_more(40); ?>....
              <a href="<?php the_permalink(); ?>" class="btn btn-black pull-right">More</a></p>
            </div><!-- end of blog_content -->

          <?php endwhile;?>

            

          </div><!-- end of col-md-9 -->

          <div class="col-md-3" id="blog_sidebar">
            
            <?php dynamic_sidebar('right_sidebar'); ?>

            

          </div><!-- end of blog_sidebar -->
        </div>
        <div class="row">
          <?php custom_pagination(); ?>
        </div>
        
      </div>
    </div><!-- end of blog_page -->



    <!-- Footer -->

<?php get_footer(); ?>