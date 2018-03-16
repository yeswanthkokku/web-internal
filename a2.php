<?php
 session_start();
include "connect.php";
if(isset($_GET['id'])){

    $a=$_GET['id'];
    $sql = "SELECT * FROM  news ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if($a==$row['name']){
            $some=$row['name'];
            echo "</br>";
            echo "<img id ='a' src=".$row['file'].">";
            echo "</br>";
            echo $row['description'];
            echo "</br>";

        echo '<form action="store.php" method="post">
        <input type="text" name="feedback" placeholder="feedback" >
        <input type="submit" value="sub" name="sub">
        </form>';
        
        }
        }
    }
}?>