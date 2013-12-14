<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>


<?php
session_start();
if($_SESSION['isLogged']=true){
$connection=  mysqli_connect('localhost', 'root', 'qwerty', 'homework3');
mb_internal_encoding('utf-8');
$checktitle=trim($_POST['title']);
$checktext=trim($_POST['message']);
$date=date('Y,m,d');
if($_POST) {
    if(mb_strlen($checktitle)<1 || mb_strlen($checktext)<1  )  {
        echo 'Грешно въвеждане.Моля опитайте пак.';
    }
    if(mb_strlen($checktitle)>50 || mb_strlen($checktext)>250){
        echo 'Грешно въвеждане.Моля опитайте пак.';
    }
    $sql='INSERT INTO message (user,date,title,text) VALUES ("'.$_SESSION['user'].'","'.$date.'","'.$checktitle.'", "'.$checktext.'" )';
    $submit=  mysqli_query($connection, $sql);
    header('Location:messages.php');
    
}
}


?>
<form method="POST" action="new_message.php">
    Заглавие:<input type="text" name="title" ><br>
    Съобщение:<textarea name="message"></textarea>
    <input type="submit"value="Изпрати">
    
    
    
    </form>
        
        
        
        </body>
        </html>