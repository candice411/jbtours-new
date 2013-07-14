<?php

	$attributes = array(
		// Array ("Image", "Image Alt tag/text", "Text if you don't have images")
		array("", "", "<span class='blue bold28'><span class='dark-green bold28'>German food<br /><span class='bold22'>&</span><br /></span><span class='blue'>Cold beer</span>"),
		array("doors/images/oktoberfest/oktfest.jpg", "OktoberFest 2013", ""),
		array("", "", "<span class='blue bold22'>OktoberFest</span><br />in<br /><span class='red bold22'>Windhoek / Oompah band</span>"),
		array("doors/images/oktoberfest/oktfest2.gif", "OktoberFest 2013", "")		
	);

	$ad_image = $attributes[0][0];
	$image_title = $attributes[0][1];
	$ad_text = $attributes[0][2];


?>

<div class="ad">
	<a href="http://www.jbtours.co.za/2013/pdf/oktoberfest_windhoek_3_day_flight_tour_2013.pdf"><img class="adimg" src="doors/images/window.png" alt=""></a>

	<?php

		for ($i = 0; $i <= 3; $i++) {
			$ad_image = $attributes[$i][0];
			$image_title = $attributes[$i][1];
			$ad_text = $attributes[$i][2];

			if($ad_text == "") {
				echo "
				<div style='display:none;' class='img' id='top-right-".$i."'>
					<img src='".$ad_image."' alt='".$image_title."' width='145' height='132' />
				</div>";
			}else {
				echo "
				<div style='display:none;' class='copy' id='top-right-".$i."'>
					".$ad_text."
				</div>";
			}
			
			
		}

	?>
	
</div>


	