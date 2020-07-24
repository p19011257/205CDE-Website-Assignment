<?php include('server.php');?>
<html>
<body>
<link rel="stylesheet" type="text/css" href="system.css">
	<div class="header">
		<h2>Homepage<h2>
	</div>
	<div class="content">
		<?php if(isset($_SESSION['success'])):?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif?>
		
		<?php if(isset($_SESSION["username"])):?>
			<p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
			<p><a href="checkform.php"> Check Support Form</a></p>
			<p><a href="homepage.php"> Back To Homepage</a></p>
			<p><a href="index.php?logout='1'" style="color :red;">Logout</a></p>
		<?php endif?>
	</div>
		
</body>
</html>