write a program to find the grade of a student using switch case....

<?php

$marks = 80; // You can pass marks here 

switch($marks){

    case ($marks >=35 && $marks <=50):
        echo "You passed with D grade <br>";
        break;

    case ($marks >= 51 && $marks <= 60):
        echo "You passed with C grade <br>";
        break;

    case ($marks >= 61 && $marks <= 70):
        echo "You passed with B grade <br>";
        break;

    case ($marks >= 71 && $marks <=80):
        echo "You passed with A grade <br>";
        break;

    case ($marks >= 81 && $marks <= 100):
        echo "Hurrah! You have passed with outstanding grade.. O+ grade <br>";
        break;

    case ($marks > 100):
        echo "Enter the posible marks... <br>"." You can give marks less than 100 <br>";

    default:
        echo "You are not performed well! You are fail <br>";
}



?>