<?php 
$conn = new mysqli('localhost', 'bikashsir','Vuosaari1','crudoperation');

if(!$conn){
    die(mysqli_error($conn));
}
?>