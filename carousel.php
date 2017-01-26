<?php global $redux_demo; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li class="" data-target="#myCarousel" data-slide-to="1"></li>
		<li class="" data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">

		<?php
		$i=1;
		

		$slide = $redux_demo['front-slider'];
		foreach ($slide as $slideimage){
			if($i == 1){ 

				echo '<div class="active item" style="background-image:url('.$slideimage['image'].');">
					
					<div class="carousel-caption">
						<h4>'.$slideimage['title'].'</h4>
						<p>'.$slideimage['description'].'</p>
					</div>

				</div>';
			}

			else {

				echo '<div class="item" style="background-image:url('.$slideimage['image'].');">

					<div class="carousel-caption">
						<h4>'.$slideimage['title'].'</h4>
						<p>'.$slideimage['description'].'</p>
					</div>

				</div>';
			}
		$i++;
		}
		?>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="icon-prev">
		       
		    </span>                                                     
		</a>
		<a class="right carousel-control " href="#myCarousel" data-slide="next">
		    <span class="icon-next">
		        
		    </span>
		</a>
	</div>
</div>

