<!--https://github.com/tweedledumtweedledee/Monsupersitewebsupersecure.git-->
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
$query = "SELECT count(*) FROM login WHERE username='{$id}'and password='{$password}'";
$db = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbusername, $dbpass);
$result = $db->query($query);
if(($result->fetch(PDO::FETCH_NUM))[0]==0) {
    echo '<div class ="alert alert-danger"role="alert">Mauvais mot passe!</div>';
}
else{
header("Location:flag.html"); 
exit; // <- don't forget this!
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<title>L'autre côté du miroir</title>
</head>
<style>
form, body, p { text-align: center;}
</style> 
<body >
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<h1>Bienvenue de l'autre côté du miroir!</h1>
<p style="color:green;">L'autre du miroir vous donne accès a un monde fantastique qui dépasse les frontières de l'imagination!</p>

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
