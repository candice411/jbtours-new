<?php

	$attributes = array(
		// Array ("Image", "Image Alt tag/text", "Text if you don't have images")
		array("doors/images/swakopmund/swakopmund.jpg", "Swakopmund", ""),
		array("", "", "<span class='blue bold22'>8-Day</span><br /><br /><span class='dark-red bold22'>Swakopmund</span><br /><br /><span class='dark-green bold22'>Train Tour</span>"),
		array("doors/images/swakopmund/swakopmund.jpg", "Swakopmund", ""),
		array("", "", "<span class='dark-red bold28'>In</span><br /><span class='blue bold22'>Festive</span><br /><span class='dark-green bold22'>Season</span><br /><span class='red bold22'>2013</span>"),
	);

	$ad_image = $attributes[0][0];
	$image_title = $attributes[0][1];
	$ad_text = $attributes[0][2];


?>

<div class="ad">
	<a href="http://www.jbtours.co.za/2013/pdf/upmarket_8_day_train_tour_to_swakopmund_2013.pdf"><img class="adimg" src="doors/images/window.png" alt=""></a>

	<?php

		for ($i = 0; $i <= 3; $i++) {
			$ad_image = $attributes[$i][0];
			$image_title = $attributes[$i][1];
			$ad_text = $attributes[$i][2];

			if($ad_text == "") {
				echo "
				<div style='display:none;' class='img' id='top-left-".$i."'>
					<img src='".$ad_image."' alt='".$image_title."' width='145' height='132' />
				</div>";
			}else {
				echo "
				<div style='display:none;' class='copy' id='top-left-".$i."'>
					".$ad_text."
				</div>";
			}
			
			
		}

	?>
	
</div>


	