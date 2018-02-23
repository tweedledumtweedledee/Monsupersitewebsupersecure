<!--site html pour SQl injection du club de sécurité-->
<!DOCTYPE html>
<?php
$id = $_POST['id'];
$password = $_POST['pass'];
$query = "SELECT count(*) FROM login WHERE username='{$id}'and password='{$password}'";
$db = new PDO('mysql:dbname=sqli1;host=127.0.0.1', 'Dinah', 'EmjlKgA13WBldHsTHP5L');
$result = $db->query($query);
if(($result->fetch(PDO::FETCH_NUM))[0]==0) {
    echo'Mauvais mot passe!';
}
else{
echo 'OK';
}
 
?>
<html>
<meta charset="utf-8"/>
<head>
<title>SQL Injection</title>
</head>
 
<body>
<h1>Bienvenue à l'épreuve de recrutement du club de sécurité de Rosemont</h1>
<p style="color:green;">Le but de l'épreuve est de trouver le nom de L'utilisateur et le mot de passe.</p>
<form method=POST>
   <label for="user">Nom d'utilisateur</label>
   <input type="text" id="id" name="id">
   <label for="pass">Password</label>
   <input type="password" id="pass" name="pass">
   <button type="submit">Entrer</button>
</form>

