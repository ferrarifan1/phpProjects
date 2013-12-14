 
<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="registration.php">Регистрирай се</a>
     
            <?php

if(isset($_SESSION['isLogged'])){
	header('location:messages.php');
	exit;
}

else{
	if ($_POST){	
$username = trim($_POST['username']);
$pass = trim($_POST['pass']);

$connection = mysqli_connect('localhost','root','qwerty','homework3');

		

		
$usercheck = mysqli_query($connection,"SELECT username,password FROM registered WHERE username='".$username."'AND password='".$pass."'");

	if($usercheck->num_rows>0){
	$_SESSION['isLogged']=true;
	$_SESSION['user'] = $username;
	header('location:index.php');
	exit;
}
	else{
	echo "<p>Неправилни име или парола.</p>";
        }
	}
}
?>

<p>Вход в системата</p>
<form method="POST" action="">
	
	Име:<input type="text" id="username" name="username"/><br/>
	Парола:<input type="password" id="pass" name="pass"/><br/>
	<input type="submit" value="Вход"/><br/>	
</form>




    </body>
</html>
