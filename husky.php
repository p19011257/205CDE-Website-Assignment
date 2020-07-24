<?php
	include('header.php');
?>
<link rel="stylesheet" type="text/css" href="style3.css">
	</div>
	<div class="information">
		
		<div class="overlay"></div>
		<div class="shiba1">
		<img src="images/husky2.jpg" class="husky">
		</div>
		<div id="circle">
		
			<div class="feature one">
				<img class="image-1" src="images/grey1.png" width="100" height="100">
				<h1>Breed</h1>
				<p> Husky</p>
			</div>
			<div class="feature two">
				<img src="images/grey2.png" width="80" height="80">
				<h1>Origin</h1>
				<p> Siberian </p>
			</div>
			<div class="feature three">
				<img src="images/grey3.png" width="80" height="80">
				<h1>Benefit</h1>
				<p> Lovely</p>
				<p> Playful</p>
				<p> Independant</p>
			</div>
			<div class="feature four">
				<img src="images/grey4.png" width="80" height="80">
				<h1>Cons</h1>
				<p> Stubborn</p>
				<p> Destroyer</p>
				<p> Bad Guard</p>
			</div>
		
		</div>
		</div>
		<div class="controls">
			<img src="images/uparrow.png" id="upBtn">
			<h3>Features</h3>
			<img src="images/uparrow.png" id="downBtn">
	</div>
	<header>
	<script>
		var circle=document.getElementById("circle");
		var upBtn=document.getElementById("upBtn");
		var downBtn=document.getElementById("downBtn");
		
		var rotateValue=circle.style.transform;
		var rotateSum;
		upBtn.onclick=function()
		{
			rotateSum=rotateValue+"rotate(-90deg)";
			circle.style.transform=rotateSum;
			rotateValue=rotateSum;
		}
		downBtn.onclick=function()
		{
			rotateSum=rotateValue+"rotate(90deg)";
			circle.style.transform=rotateSum;
			rotateValue=rotateSum;
		}
	</script>
	
	</body>
</html>