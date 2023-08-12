<?php
$per = 13;

if($per >=80 && $per <=100)
{
  echo "Gread is A";
}
elseif($per >=60 && $per < 80)
{
  echo "Gread is B";
}
elseif($per >=40 && $per < 60)
{
  echo "Gread isC";
}
elseif($per >=33 && $per < 40)
{
  echo "Gread is D";
}
elseif($per < 33)
{
  echo "Fail";
}
else
{
  echo "Enter Valid Per.";
}
?>
