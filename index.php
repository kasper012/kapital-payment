<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>Form</title>
</head>
<body class="d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
	<div class="container">
		<form action="request.php" method="POST">
			<input type="number" step="0.01" placeholder="Amount" name="amount" required>
			<textarea placeholder="Description" name="desc" required></textarea>
			<button type="submit" class="btn btn-success">Send</button>
		</form>

		<br>
		<div class="d-flex">
						<?php
					echo $_POST['amount'];
					echo '<br/>';
					$current_language = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
					if ($_POST) {
						echo $current_language;
						echo '<br/>';
					}
					echo $_POST['desc'];

					?>
		</div>
	</div>
	
</body>
</html>

