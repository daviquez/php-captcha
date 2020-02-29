<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="left">
			<label for="code">Security Code:</label>
		</div>
		<div class="right">
			<p>Enter the below security code here</p>
			<form action="contact.php" method="post">
				<input type="text" id="captcha" name="captcha" pattern="[a-z0-9]+{6}">
				<img src="captcha.php" alt="captcha" class="captcha-image">
				<p>Can't read? <a class="refreshCaptcha" href="">Refersh</a></p>
				<button class="submit" type="submit" />Submit</button>
			</form>
		</div>
	</div>
</body>
<script>
	var refreshButton = document.querySelector(".refreshCaptcha");
	refreshButton.onclick = function() {
		document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
	}
</script>
</html>