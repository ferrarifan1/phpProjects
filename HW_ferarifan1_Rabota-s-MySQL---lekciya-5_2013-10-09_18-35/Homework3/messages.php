
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="new_message.php">Добави ново съобщение</a><br>
        <a href="destroy.php">Изход</a>
        <?php
        session_start();
        if($_SESSION['isLogged']=true){
echo '<table border=""><tr><td>Потребител</td><td>Дата</td><td>Заглавие</td><td>Съобщение</td></tr>';
$connection=  mysqli_connect('localhost', 'root', 'qwerty', 'homework3');
$sql='select user,date,title,text from message  ';
$select= mysqli_query($connection, $sql);
while($row = $select->fetch_assoc()){
		echo 
	" <tr>
	 <td>".$row['user']."</td>
	 <td>".$row['date']."</td>
	 <td>".$row['title']."</td>
	 <td>".$row['text']."</td>
	 </tr>";
	}
	echo "</table>";



        }
   

?>



</body>
</html>







