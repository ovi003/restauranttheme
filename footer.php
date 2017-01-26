            <footer>
              <div class="container" id="footer">
                <div class="col-md-3" id="f_area">
                  <?php dynamic_sidebar('footer_widget_1'); ?>
                </div>
                <div class="col-md-3" id="f_area">
                  <?php dynamic_sidebar('footer_widget_2') ?>
                </div>
                <div class="col-md-3" id="f_area">
                  <?php dynamic_sidebar('footer_widget_3') ?>
                </div>
                <div class="col-md-3" id="f_area">
                  <?php dynamic_sidebar('footer_widget_4') ?>
                </div>

              </div>
              <hr>
              <p>
              <?php 
                global $redux_demo;
                echo $redux_demo['cpy_text'];
              ?>
              </p>

            </footer>

            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--     // <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--> 
        <?php wp_footer(); ?>
         </body>
        </html>