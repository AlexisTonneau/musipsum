<?php //TODO bugs with white pages on click

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<link rel="stylesheet" type="text/css" href="<?=URL?>css/password/main.css">
</head>

<body class="body">
<?php
require_once ('english/views/views_accueil/viewHeader.php');
?>

	<div id="password_block">
  		<div id="pass_block">
  			
  			<img class="password_content" id="img_password" src="APP site/Site web/images/logo_musipsum_noir.png">
  			
  			<p style="font-size: 50px" class="password_content">Recover your password
</p>
  			<p class="password_content" style="font-size: 30px">Enter your email address, in order to reset your password</p>
  			

  			<form action="/action_page.php">
  				<input type="email" name="email_password" placeholder="Your email..." size="30" required class="password_content" id="password_input">
  				<button id="password_btn">Next</button>
  			</form>


  	</div>
  	</div>

<?php
require_once ('english/views/views_accueil/viewFooter.php');
?>
</body>