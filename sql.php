<!-- Source : https://github.com/tweedledumtweedledee/Monsupersitewebsupersecure.git -->
<!DOCTYPE html>
<?php
if (isset($_POST['id'])){
	$config = parse_ini_file('config.ini');
	$dbusername = $config['username'];
	$dbpass = $config['password'];
	$dbname = $config['dbname'];
	$dbhost = $config['host'];
	$id = $_POST['id'];
	$password = $_POST['pass'];

	$query = "SELECT count(*) FROM login WHERE username='{$id}'";
	$db = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbusername, $dbpass);
	$result = $db->query($query);
	if(($result->fetch(PDO::FETCH_NUM))[0]==0) {

		echo '<div class ="alert alert-danger"role="alert">Mauvais nom d\'utilisateur !</div>';
	}
	else{
		$query = "SELECT count(*) FROM login WHERE username='{$id}'and password='{$password}'";
		$db = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbusername, $dbpass);
		$result = $db->query($query);
		if(($result->fetch(PDO::FETCH_NUM))[0]==0) {
			echo '<div class ="alert alert-danger"role="alert">Mauvais mot passe!</div>';
		}
		else{
			header("Location:XXXXXXXX"); 
			exit; // <- don't forget this!
		}
	}
	}
	?>
		<html>
		<meta charset="utf-8"/>
		<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>L'autre côté du miroir</title>

		



		</head>
		<style>
		form, body, p { text-align: center;}

		body, html {
			height: 75%;
			margin:0;
		}

		.bg {
		    background-image: url("alice.jpg");

		    height: 75%;

		    background-position: center;
	            background-repeat: no-repeat;
		    background-size: cover;
		}
		  
	</style> 
		<body >
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<div class="bg"></div>
		<h1>Bienvenue de l'autre côté du miroir!</h1>
		<p style="color:green;">L'autre côté du miroir vous donne accès a un monde fantastique qui dépasse les frontières de l'imagination!</p>

		<form method=POST>
		<p>
		<label for="user">Nom d'utilisateur</label>
		</p>
		<p>
		<input type="text" id="id" name="id">
		</p>
		<p>
		<label for="pass">Password</label>
		</p>
		<p>
		<input type="password" id="pass" name="pass">
		</p>
		<p>
		<button type="submit">Entrer</button>
		</p>
		</form>
		</body>
