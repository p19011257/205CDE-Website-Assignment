<?php include('header.php')?>;
<link rel="stylesheet" type="text/css" href="style.css">
	<div class="information">
		
		<div class="overlay"></div>
		<div class="shiba1">
		<img src="images/shibas.jpg" class="shibas">
		</div>
		<div id="circle">
		
			<div class="feature one">
				<img class="image-1" src="images/yellow1.png" width="100" height="100">
				<h1>Breed</h1>
				<p> Shiba Inu</p>
			</div>
			<div class="feature two">
				<img src="images/yellow2.png" width="80" height="80">
				<h1>Origin</h1>
				<p> Japanese</p>
			</div>
			<div class="feature three">
				<img src="images/yellow3.png" width="80" height="80">
				<h1>Benefit</h1>
				<p> Independent</p>
				<p> Clean</p>
				<p> Smart</p>
			</div>
			<div class="feature four">
				<img src="images/yellow4.png" width="80" height="80">
				<h1>Cons</h1>
				<p> Strong Willed</p>
				<p> Stubborn</p>
				<p> Drama Queen</p>
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