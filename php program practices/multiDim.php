<?php

echo "4 dimentional arrays<br>";

$threeDim = array(
    array(
        array(5,8,7,9),
        array(2,9,3,8),
        array(1,8,5,9),
        array(6,4,3,7)
    ),
    
    array(
        array(5,8,7,9),
        array(2,9,3,8),
        array(1,8,5,9),
        array(6,4,3,7)
    ),

    array(
        array(5,8,7,9),
        array(2,9,3,8),
        array(1,8,5,9),
        array(6,4,3,7)
    ),

    array(
        array(5,8,7,9),
        array(2,9,3,8),
        array(1,8,5,9),
        array(6,4,3,7)
    ),
);

// printing the values from the arrays using nested for loops....

for ($i=0; $i < count($threeDim); $i++) { 
    for ($j=0; $j < count($threeDim[$i]); $j++) { 
        for ($k=0; $k < count($threeDim[$i][$j]); $k++) { 
            echo ($threeDim[$i][$j][$k]);
            echo" ";
        }
        echo " ";
    }
    echo "<br>";
}

?>




