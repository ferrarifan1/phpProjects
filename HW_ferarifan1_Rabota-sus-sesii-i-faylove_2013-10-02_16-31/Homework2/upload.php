
<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <meta charset="UTF-8">       
    </head>
    <body>
        <a href="files.php">Виж резултатите</a></br>
        <a href="logout.php">Излез</a>
<?php

if($_POST){
    if(count($_FILES)>0){
if(move_uploaded_file($_FILES['picture']['tmp_name'], 
                        'test'.DIRECTORY_SEPARATOR.$_FILES['picture']['name'])){
    echo 'Файлът е качен успешно';
    
}
else{
    echo 'Грешка';
}
    }
    }






?>
<form name="form" method="POST"  action="" enctype="multipart/form-data">
      
    <input type="file" name="picture" value="" >
    <input type="submit" name="submit" value="Качи" >
    </form>
    

    </body>
</html>