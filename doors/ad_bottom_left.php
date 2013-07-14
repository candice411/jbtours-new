<?php

	$attributes = array(
		// Array ("Image", "Image Alt tag/text", "Text if you don't have images")
		array("", "", "<span class='blue bold28'>Train Tour<br />Beach</span><br /><span class='dark-red bold22'>fun & nightlife</span>"),
		array("doors/images/durban/durban.jpg", "Durban", ""),
		array("", "", "<span class='red bold28'>Durban</span><br /><span class='dark-green bold28'>4-day weekend</span>"),
		array("doors/images/durban/durban2.jpg", "Durban", ""),
	);

	$ad_image = $attributes[0][0];
	$image_title = $attributes[0][1];
	$ad_text = $attributes[0][2];


?>

<div class="ad">
	<a href="http://www.jbtours.co.za/2013/pdf/durban_budget_holiday_4_day_train_tour_2013.pdf"><img class="adimg" src="doors/images/window.png" alt=""></a>

	<?php

		for ($i = 0; $i <= 3; $i++) {
			$ad_image = $attributes[$i][0];
			$image_title = $attributes[$i][1];
			$ad_text = $attributes[$i][2];

			if($ad_text == "") {
				echo "
				<div style='display:none;' class='img' id='bottom-left-".$i."'>
					<img src='".$ad_image."' alt='".$image_title."' width='145' height='132' />
				</div>";
			}else {
				echo "
				<div style='display:none;' class='copy' id='bottom-left-".$i."'>
					".$ad_text."
				</div>";
			}
			
			
		}

	?>
	
</div>


	