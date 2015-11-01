<?php

$title = "WINES - ITALIA";

include 'header.php';

?>
		<div id="content">

			<!-- Desktop -->
			<div id="left" class="desktop">
				<div class="two-row">
					<a class="lightbox-trigger inner-left" href="bianco">
						<img src="images/wine1.svg" alt="" />
					</a>
				</div>
				
				<div class="two-row">
					<a class="lightbox-trigger inner-left" href="rosato">
						<img src="images/wine2.svg" alt="" />
					</a>
				</div>
			</div>

			<!-- Mobile -->
			<div id="left" class="mobile">

				<div class="three-row">
					<a class="lightbox-trigger" href="redWine">
						<img src="images/wine0.svg" alt="" />
					</a>
				</div>
			
				<div class="three-row">
					<a class="lightbox-trigger" href="bianco">
						<img src="images/wine1.svg" alt="" />
					</a>
				</div>
			
				<div class="three-row">
					<a class="lightbox-trigger" href="rosato">
						<img src="images/wine2.svg" alt="" />
					</a>
				</div>

			</div>
			
			<div id="right">
				<a class="lightbox-trigger" href="redWine">
					<img id="image-right" src="images/transparentbg.png" alt="" />
					<img src="images/wine.gif" alt="" />
				</a>
			</div>
			
		</div>
	</div>
	
</body>

</html>