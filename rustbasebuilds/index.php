<?php
include("db/db.initialize.php");
require('steamauth/steamauth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rust Base Builds</title>
	<?php include("includes/cdn.php"); ?>
</head>
<body>

	<div class="container-fluid">
  	<div class="row-fluid" >
		<div class='col-md-12 center'>
			<div class='col-md-9'>
				<div class="col-md-12 col-md-offset-2 block">
				<img src="image/logo.png">
				<div class="steam"><?php
				if(!isset($_SESSION['steamid'])) {
					echo '<a href="?login"><img id="steam-sign-main" src="image/sits.png"></a>';
				}
				else {
					echo logoutbutton();
				}
				?></div>
				<hr class="divider">
				<?php include("includes/header.php"); ?>
				<h2><U>Rust Base Builds</u></h2>
				<p>
				  Rust Base Builds allows users to create, share and publish their magnificant rust base creations, free of charge for everyone to share their opinions on the design.
				  It's simple to upload a design. Just follow these steps:
				  <ol>
				    <li>Create your design, you can optionally use a base design program such as <a href="http://store.steampowered.com/app/505040?beta=1">Fortify</a>
				      and upload the base design blueprint for people to download and build.</li>
				      <li>Take some screenshots or videos of your base and upload them while creating the base</li>
				        <li>Finish your design page, add some customization such as a name and a header image and you're good to go!</li>

				  </ol>
				</p>
				<h3><u>TOP TRENDING BASE</u></h3>
				<?php include("includes/trending.php");?>




				</div>


			        </div>
					</div>
					</div>
			</div>
	</div>
</body>
</html>
