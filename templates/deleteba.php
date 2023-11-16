<?php
$server = "localhost";
$username = "root";
$password = "Wrongway@123";
$c = new mysqli($server, $username, $password, "venky");
    $id = $_GET['Book_id'];
    $delete = "DELETE FROM Book_Authors WHERE Book_id='$id'";
    $t=$c->query($delete);
    if($t){
        echo '<script> alert("delete"); </script>';
        header("location:deletebookauthors.php");
    }
    else{
    echo "not deleted";
    }
?>