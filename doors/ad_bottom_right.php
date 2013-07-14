<?php

	$attributes = array(
		// Array ("Image", "Image Alt tag/text", "Text if you don't have images")
		array("doors/images/maputo/maputo1.jpg", "Maputo Bus Tour", ""),
		array("", "", "<span class='red bold22'>Luxury</span><br /><span class='green bold22'>Bus Tour</span><br /><span class='bold22'>to</span><br /><span class='blue bold28'>Maputo</span>"),
		array("doors/images/maputo/maputo2.jpg", "Maputo Bus Tour", ""),
		array("", "", "<span class='red bold22'>Luxury</span><br /><span class='green bold22'>Bus Tour</span><br /><span class='bold22'>to</span><br /><span class='blue bold28'>Maputo</span>"),
	);

	$ad_image = $attributes[0][0];
	$image_title = $attributes[0][1];
	$ad_text = $attributes[0][2];


?>

<div class="ad">
	<a href="http://www.jbtours.co.za/2013/pdf/mozambique_4_day_coach_tour_to_maputo_2013.pdf"><img class="adimg" src="doors/images/window.png" alt=""></a>

	<?php

		for ($i = 0; $i <= 3; $i++) {
			$ad_image = $attributes[$i][0];
			$image_title = $attributes[$i][1];
			$ad_text = $attributes[$i][2];

			if($ad_text == "") {
				echo "
				<div style='display:none;' class='img' id='bottom-right-".$i."'>
					<img src='".$ad_image."' alt='".$image_title."' width='145' height='132' />
				</div>";
			}else {
				echo "
				<div style='display:none;' class='copy' id='bottom-right-".$i."'>
					".$ad_text."
				</div>";
			}
			
			
		}

	?>
	
</div>


	