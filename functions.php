<?php 
	function garden_css_js(){
		wp_register_style('link',get_template_directory_uri().'/css/bootstrap.min.css');

		wp_enqueue_style('link');

		
	}
	add_action('wp_enqueue_scripts','garden_css_js');


	function garden_restaurant(){
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme','garden_restaurant');

	register_nav_menus(array(
		'primary_menu'=>'Main Menu',
		'footer_menu'=>'Footer Menu',
		));

	
	function garden_sidebar_area(){
		register_sidebar(array(
			'name' => 'Right Sidebar',
			'id' => 'right_sidebar',
			'description' => 'This sidebar apear only on blog page',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => 'Footer Widget 1',
			'id' => 'footer_widget_1',
			'description' => 'This sidebar apear on footer page',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => 'Footer Widget 2',
			'id' => 'footer_widget_2',
			'description' => 'This sidebar apear on footer page',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => 'Footer Widget 3',
			'id' => 'footer_widget_3',
			'description' => 'This sidebar apear on footer page',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => 'Footer Widget 4',
			'id' => 'footer_widget_4',
			'description' => 'This sidebar apear on footer page',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));


	}
	add_action('widgets_init','garden_sidebar_area');

	function read_more($n){
		$cont=explode(" ", get_the_content());
		$less_con=array_slice($cont,0,$n);
		echo implode(" ", $less_con);
	}

	function custom_pagination() {
	    global $wp_query;
	    $big = 999999999;
	    $pages = paginate_links(array(
	        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
	        'format' => '?page=%#%',
	        'current' => max(1, get_query_var('paged')),
	        'total' => $wp_query->max_num_pages,
	        'type' => 'array',
	        'prev_next' => TRUE,
	        'prev_text' => 'PREV',
	        'next_text' => 'NEXT',
	            ));
	    if (is_array($pages)) {
	        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	        echo '<nav><ul class="pagination">';
	        foreach ($pages as $i => $page) {
	            if ($current_page == 1 && $i == 0) {
	                echo "<li class='active'>$page</li>";
	            } else {
	                if ($current_page != 1 && $current_page == $i) {
	                    echo "<li class='active'>$page</li>";
	                } else {
	                    echo "<li>$page</li>";
	                }
	            }
	        }
	        echo '</ul></nav>';
	    }
	}

	function default_main_menu(){
		echo '<ul class="nav navbar-nav navbar-right">';
		echo '<li class="current-menu-item"><a href="'.esc_url(home_url()).'">Home</a></li>';
		echo "</ul>";
	}	

	require_once 'navwalker.php';

	function garden_posts_type(){

		register_post_type('feature',array(
			'public'=>true,
			'label'=>'feature',
			'labels'=>array(
				'name'=>'Features',
				'singuler_name'=>'Feature',
				'add_new'=>'Add New Feature'
				),
			'supports'=>array('title','thumbnail','excerpt')
			
			));
		register_post_type('menus',array(
			'public'=>true,
			'label'=>'Front Menu',
			'labels'=>array(
				'name'=>'Menu List',
				'add_new'=>'Add new Menu List',
				'singuler_name'=>'Menu List',
				),
			'supports'=>array('title','thumbnail')
			));

	}
	add_action('init','garden_posts_type');

	if ( ! function_exists( 'bookreview_carousel_exists' )) :
	function bookreview_carousel_exists() { ?>
	<script type="text/javascrip">
	jQuery(function($) {
	jQuery('.carousel').carousel({
	interval: 7000
	})
	});
	</script>
	<?php }
	add_action( "wp_footer", 'bookreview_carousel_exists' );
	endif;

	
	include('lib/ReduxCore/framework.php');
	include('lib/sample/sample-config.php');
 ?>