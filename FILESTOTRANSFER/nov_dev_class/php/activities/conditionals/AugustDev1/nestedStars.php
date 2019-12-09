<?php
    //outerloop ~~ rows, <tr></tr>
    for($outerLoop = 1; $outerLoop <= 2; $outerLoop++){
        for($innerLoop = 1; $innerLoop <= 3; $innerLoop++){
            //innerloop ~ columns, <td></td>, printing of *
            echo " * ";
        }
        echo "<br>";
    }
?>