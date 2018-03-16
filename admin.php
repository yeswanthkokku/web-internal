<?php
include "connect.php";
if(isset($_POST['sub'])){
    echo "hey";
    $a=$_POST['name'];
    $b=$_POST['descr'];
if(isset($_FILES['fil'])){
    echo "hey";
    $errors= array();
    $file_name = $_FILES['fil']['name'];
    $file_size = $_FILES['fil']['size'];
    $file_tmp = $_FILES['fil']['tmp_name'];
    $file_type = $_FILES['fil']['type'];
    echo $file_tmp;
    move_uploaded_file($file_tmp,$file_name) or die("error moving file");
    $sql = "INSERT INTO news (file,name,description)
        VALUES ('$file_name','$a','$b')";
        $qry=mysqli_query($conn,$sql) or die("Connection failed: " . mysqli_error($db));
}
}
?>