<?php
include "connect.php";
if(isset($_POST['sub'])) {

    $a=$_POST['feedback'];
    $sql = "INSERT INTO stor (feedback)
    VALUES ('$a')";
    $qry=mysqli_query($conn,$sql) or die("Connection failed: " . mysqli_error($db));
}
?>