<html>
	<head>
		<title>Contact</title>
		<link rel="stylesheet" href="../Style/style-form-contact.css">
	</head>
	<body>
		<nav>
            <ul id="img-txt">
                <li><a href="../html/main.html"><img class="logo" width="150px" height="150px" src="../Images/logo.gif" alt=""></a></li>
                <li><a href="../html/dessins.html">Dessins</a></li>
                <li><a href="../html/contact.html">Contact</a></li>
            </ul>
			</nav>
			<br>
			<br>
	<?php

		if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['country'])) {
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$email = $_POST['email'];
			$country = $_POST['country'];
			if ($country == 'France' || $country == 'Belgique') {
				echo 'Bonjour';
			} elseif ($country == 'Angleterre') {
				echo 'Hello';
			} elseif ($country == 'Italie') {
				echo 'Buongiorno';
			} elseif ($country == 'Allemagne') {
				echo 'Hallo';
			} else {
				echo 'erreur';
			}
		}
	?>
		<footer><h6 class="credit">©Credit to WatzoK</h6></footer>
		</body>
	</html>