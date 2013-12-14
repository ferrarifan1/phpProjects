<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php" >Влез в системата</a>
        <?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
        mb_internal_encoding('utf-8');
$connection=  mysqli_connect('localhost', 'root', 'qwerty', 'homework3');
        mb_internal_encoding('UTF-8');
        mysql_query('SET NAMES utf8');
$username= trim($_POST['username']);
$username=  mysqli_real_escape_string($connection,$username);
$password= trim($_POST['password']);
$password=  mysqli_real_escape_string($connection,$password);
$var=false;


if($_POST){
   
  $samename = mysqli_query($connection,"SELECT username FROM registered WHERE username='".$username."'");
	if($samename->num_rows > 0){
	echo "<p>Името вече е използвано.</p>";
	echo '<a href="registration.php">Опитайте да се регистрирате отново</a>';
	exit;
	}
    
    
  
    
    if(mb_strlen($username)<5 || mb_strlen($password)<5 ){
    
        echo 'Името или паралата са прекалено къси';
    }
    }

$sql= ' INSERT INTO registered (username,password) 
                             VALUES("'.$username.'","'.$password.'") ';
if(mysqli_query($connection, $sql)){
   // header('Location:index.php');
}






?>
        <form name="aaa" method="POST" action="registration.php" >
  
<strong>Регистрация</strong><br> 
Име:<input type="text" name="username">
Парола:<input type="password" name="password">


<input type="submit" value="Регистрирай се" >
</form>










    </body>
</html>
