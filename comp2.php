<?php
$a = 100;

If($a > 55)
{
  echo "A is Greater.<br>";
}
else
{
  echo "A is Smaller.<br>";
}

If($a == 55)
{
  echo "A is Same.<br>";
}
else
{
  echo "A is Not Same.<br>";
}

If($a === "100")
{
  echo "A is Same.<br>";
}
else
{
  echo "A is Not Same.<br>";
}

$name = "Aniruddh Godhani";
$gender = "male";

If($gender == "male")
{
  echo "Hallo Mr.".$name;
}
else
{
  echo "Hallo Miss.".$name;
}
?>