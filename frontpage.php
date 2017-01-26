<?php get_header();
/*
Template Name: Front page
*/
?>
<?php global $redux_demo; ?>

<div class="container-fluid" id="myslide">
	<?php get_template_part('carousel'); ?>  <!-- end myCarousel --> 
	
</div>  <!-- end of container-fluid -->

<div class="container">


<!-- 	foreach ($slide as $slideimage) {
		echo $slideimage['title']."<br/>";
		echo $slideimage['image']."<br/>";
	}
if (isset($redux_demo['front-slider']) && !empty($redux_demo['front-slider'])) {
	    echo $redux_demo['front-slider'][0]['title'];
	    echo $redux_demo['front-slider'][0]['image'];
	   	 -->
	<div class="row" id="welcome">
		<h3><?php echo $redux_demo['front-greeting']; ?></h3>
		<p>
			<?php echo $redux_demo['front-desc']; ?>
		</p>
	</div><!-- end of welcome -->

	<div class="row" id="feature" >
		<?php $feature= new WP_Query(array(
			'post_type'=>'feature',
			'post_per_page'=> 3
			)) ?>
			<?php while($feature->have_posts()):$feature->the_post() ?>
			<div class="col-md-4">
				<div class="row">
					<div class="panel panel-black">

						<div class="panel-heading">
							<?php the_title(); ?>
						</div>

						<div class="panel-body">
							<?php the_post_thumbnail(); ?>

							<p><?php the_excerpt(); ?></p>

						</div><!--  end of panel-body -->
					</div><!-- end of panel -->

				</div>
			</div><!-- end of col-md-4 -->	
		<?php endwhile; ?>	
	</div>

	<div  id="menus">
		<h3>Menus</h3>
		<?php $menupost= new WP_Query(array(
			'post_type' => 'menus',
			'post_per_page' => 4
		)) ?>

		<?php while($menupost->have_posts()):$menupost->the_post() ?>
			<div class="col-sm-3">
				<div  id="m_list">
					<a href="#"><?php the_post_thumbnail();?></a>
					<a href="3"><h4><?php the_title(); ?></h4></a> 
				</div><!-- m_list -->
			</div><!-- end of col-md-3 -->
		<?php endwhile ?>


	</div><!-- end of menus -->
</div><!-- end of container -->

</div>
<?php get_footer(); ?>