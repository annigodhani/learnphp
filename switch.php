<?php
$day =1;

switch($day)
{
  case 1: case 3: case 5:
   echo "Today is Monday<br>";
   echo "Today is Test.";
  break;
  case 2:
    echo "Today is Tuesday";
  break;
  case 3:
    echo "Today is Wenesday";
  break;
  case 4:
    echo "Today is Thursday";
  break;
  case 5:
    echo "Today is Friday";
  break;
  case 6:
    echo "Today is Saturday";
  break;
  case 7:
    echo "Today is Sunday";
  break;
  default:
    echo "Enter The Right Day.";
}

$age = 22;
 
switch(true)
{
  case ($age >= 15 && $age <= 20):
   echo "<br>You are Eligible.";
  break;
  case ($age >= 21 && $age <= 30):
    echo "<br>You are Eligible.";
   break;
  default:
        echo "<br>Enter The Right Age.";
    }
?>