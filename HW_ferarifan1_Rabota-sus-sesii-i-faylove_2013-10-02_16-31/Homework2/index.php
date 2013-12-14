 
<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Friends</title>
    </head>
    <body>
        <?php
     
$login=trim($_POST['login']);
     $pass=trim($_POST['pass']);
     
     if(strlen($login)>3 && strlen($pass)>3)
     {
     if($login=='user'&& $pass=='qwerty')
     {
        $_SESSION['is_logged']=true;
        header('Location:index.php');
     }
        else {
           header('Location:index.php?error=1');
        }
     }
     
     
if ($_SESSION['is_logged']==true)
{
   header('Location:files.php');
 
        
          
      
        
        
       
}
 else {
     
     if($_GET['error']==1)
     
     {
     echo 'Wrong username or password';    
     }
     
 
     
    ?>
 <form  method="post" >
 <b>Username</b> <input type="text" name="login"><br>   
   <b>Password</b><input type="password" name="pass"><br>    
    <input type="submit" value="Login">     
 </form>
 
 
<?php
 }
?>







    </body>
</html>
