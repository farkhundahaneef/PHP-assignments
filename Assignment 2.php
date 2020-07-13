<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Php code</title>
    </head>
    <body>
        <?php
   echo "First Pyramid";
   echo "<br />";
     for($i = 1; $i <= 6; $i++){
            for($j = 1; $j <=$i; $j++){
                echo "*";
            }
            echo "<br />";
        }
        echo "<br />";
        echo "Second Pyramid";
   echo "<br />";
        for ($i = 1; $i <= 5; $i++) {
 
            for ($j = $i; $j <= 5; $j++) {
            
                echo "&nbsp;&nbsp;";
            }
            
            for ($k = 1; $k < ($i * 2); $k++) {
            echo "*";
            }
            echo "<br/>";
           }

       echo"<br />";
       echo "Third Pyramid";
       echo "<br />";
for ($i = 5; $i >= 1; $i--) {
   
    for ($j = 5; $j >= $i; $j--) {
    echo "&nbsp;&nbsp;";
    }
    
    for ($k = 1; $k < ($i * 2); $k++) {
    echo "*";
    }
    echo "</br>";
   }


        ?>
    </body>
    </html>