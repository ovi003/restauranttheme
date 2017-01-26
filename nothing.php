<?php get_header();

?>
<div class="container-fluid" id="myslide">
	<?php get_template_part('carousel'); ?> <!-- end myCarousel --> 

</div>  <!-- end of container-fluid -->

<div class="container" >

	<div class="row" id="welcome">
		<img src="<?php echo get_template_directory_uri()?>/img/icon.png" class="img-responsive">
		<div class="col-md-12">

			<div class="col-md-6">
				<div class="row">
					<h3>Welcome To Garden Retaurant</h3>
					<div id="con">
						<img src="<?php echo get_template_directory_uri()?>/img/welcome_img.png" class="img-responsive">
					</div><!-- end of con -->
					<div class="para">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						</p> 
						<a href="#" class="btn btn-danger pull-right">More</a>
					</div><!-- end of para -->
				</div><!-- end of row -->

			</div><!-- end of col-md-12 -->
			<div class="col-md-6" id="service">

				<h3>Services</h3>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>lorem ipsum doller lorem ipsum doller lorem ipsum doller</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>sit amet consectetur lorem ipsum doller lorem ipsum doller</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>adipisicing eiti lorem ipsum doller lorem ipsum doller</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>sad do eiusmod tempor lorem ipsum doller lorem ipsum </li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Duis aute irure dolor lorem ipsum doller lorem ipsum doller</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Duis aute irure dolor lorem ipsum doller lorem ipsum doller</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Duis aute irure dolor lorem ipsum doller lorem ipsum doller</li>

			</div><!-- end of service -->

		</div><!-- end of col-md-12 -->

	</div><!-- end of welcome -->

	<div class="row" id="menus">
		<img src="<?php echo get_template_directory_uri()?>/img/icon.png" class="img-responsive i_icon">
		<h3>Menus</h3>
		<?php $menupost = new WP_Query(array(
			'post_type'=>'menus',
			'post_per_page'=>4

		)) ?>
		<?php while($menupost->have_posts()):$menupost->the_post() ?>

			<div class="col-md-3">
				<div class="row" id="m_list">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a> 
				</div><!-- m_list -->
			</div><!-- end of col-md-3 -->

		<?php endwhile; ?>



	</div>
	<!-- Offers -->
	<div class="row" id="offers">
		<img src="<?php echo get_template_directory_uri()?>/img/icon.png" class="img-responsive i_icon">
		<h3>Offers</h3>
		<div class="col-md-3">
			<div class="row" id="offer_list">
				<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/img1.jpg" class="img-responsive thumbnail"></a>
				<a href="3"><h4>Breakfast</h4></a>
				<div class="price"><sup>$</sup>60</div> 
			</div><!-- m_list -->
		</div><!-- end of col-md-3 -->
		<div class="col-md-3">
			<div class="row" id="offer_list">
				<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/img2.jpg" class="img-responsive thumbnail"></a>
				<a href="#"><h4>Dinner</h4> </a>
				<div class="price"><sup>$</sup>60</div> 
			</div><!-- m_list -->
		</div><!-- end of col-md-3 -->
		<div class="col-md-3">
			<div class="row" id="offer_list">
				<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/img3.jpg" class="img-responsive thumbnail"></a>
				<a href="#"><h4>Lunch</h4> </a>
				<div class="price"><sup>$</sup>60</div> 
			</div><!-- m_list -->
		</div><!-- end of col-md-3 -->
		<div class="col-md-3">
			<div class="row" id="offer_list">
				<a href="#"><img src="<?php echo get_template_directory_uri()?>/img/img4.jpg" class="img-responsive thumbnail"></a>
				<a href="#"><h4>Dessert</h4> </a>
				<div class="price"><sup>$</sup>60</div> 
			</div><!-- m_list -->
		</div><!-- end of col-md-3 -->


	</div>

</div><!-- end of container -->

<!-- Footer -->

<?php get_footer(); ?>