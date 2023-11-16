<?php
$server = "localhost";
$username = "root";
$password = "Wrongway@123";
$c = new mysqli($server, $username, $password, "venky");
    $id = $_GET['Book_id'];
    $delete = "DELETE FROM book WHERE Book_id='$id'";
    $t=$c->query($delete);
    if($t){
        echo '<script> alert("delete"); </script>';
        header("location:deletebook.php");
    }
    else{
    echo "not deleted";
    }
?>