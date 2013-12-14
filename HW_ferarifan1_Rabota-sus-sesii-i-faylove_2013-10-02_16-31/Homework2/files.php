<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <meta charset="UTF-8">       
    </head>
    <body>
         
        <a href="upload.php">Качи нов файл</a></br>
 <a href="logout.php">Излез</a>
  
 
     <?php
     if($_SESSION['is_logged']==true){
  
  echo '<table border="1">
      <tr>
  <td>Име</td>
  <td>Размер</td>
  </tr>';
  
  
 
    $dir = opendir('./test/');
    
   while ($doc = readdir($dir)) {

 

        if ($doc != '.' && $doc != '..' ) {
            $column= '<li><a href="' . "test" . DIRECTORY_SEPARATOR . $doc . '">' . $doc . '</a></li>';
            
            
  echo'<tr><td>'.$column.'</td>
          <td>'.$size.'</td>
          </tr>';
  
  
            
        }
        }
  echo '</table>';  

    closedir($dir);
     }
     else{
        header('Location:index.php');
         
     }
  
  ?>


 </body>
</html>