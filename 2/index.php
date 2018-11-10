<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Soal 2</title>
</head>
<body>
	<form method="post">
		<label>Username</label> <br>
		<input type="text" name="username"> <br>

		<button type="submit" name="btn-submit">
			Submit
		</button>
	</form>

	<?php
		
		if (isset($_POST['btn-submit'])) {

			function validate($value)
			{
				$validSymbols = [
					'.', '-'
				];
				$fiveFirst = substr($value, 0, 5);
				$symbol    = substr($value, 5, 1);
				$twoLast   = substr($value, 6, 2);
				
				if (ctype_upper($fiveFirst)) {
					echo "Not Valid";
				} elseif (!in_array($symbol, $validSymbols)) {
					echo 'Not valid';
				} elseif (ctype_lower($twoLast)) {
					echo 'Not valid';
				} else {
					echo "Valid";
				}

			}

			validate($_POST['username']);
		}

	?>
</body>
</html>