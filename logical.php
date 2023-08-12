<?php
 $age = 21;

  if($age >= 18 && $age <= 25)
  {
    echo "You Are Driving....<br>";
  }

  if($age >= 18 || $age <= 25)
  {
    echo "You Are Driving....<br>";
  }

  if(!($age <= 18))
  {
    echo "You Are Driving....<br>";
  }

  if($age >= 18 xor $age <= 25)
  {
    echo "You Are Driving....";
  }
  ?>