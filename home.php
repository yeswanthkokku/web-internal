<?php
include "connect.php";
$sql = "SELECT * FROM  news ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           
            $some=$row['name'];
            echo "</br>";
            echo "<img id ='a' src=".$row['file'].">";
            echo "</br>";
            echo "<a href='r1.php?id=$some'>$some</a>";
            echo "</br>";

        
        }
        }?>
        <html>
            <head>
                <style>
                #a{
                    height:100px;
                    width:300px;
                }
                .a{
                    position:absolute;
                    top:0;
                    right:0;
                    font-size:40px;
                }

                </style>
    </head>
    <body>
        <a href="register.html" class="a">register</a>
    </body>
            </html>