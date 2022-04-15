<?php
      for($i = 1; $i < 20; $i++){
             for($j = $i; $j < 20; $j++){
                   echo "&nbsp&nbsp";
             }
             
             for($j = 1; $j <= ($i*2-1); $j++){
                   echo "*";
             }
        echo "<br>";
      }
?>