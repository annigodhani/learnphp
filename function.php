 <?php

  function hello()
 {
   echo "Anni Godhani.<br>";
 }
 function hallo()
 {
   echo "This is our World...<br>";
 }
  hello();
  hallo();
   echo "Thnak You...<br>";
   
 // fun with parameters.....
 
 function akv($fname,$lname)
{
 echo "Hallo $fname $lname.<br>";
}

function sum($a,$k)
{
 echo $a + $k;
 //echo $a * $k;
}
akv("Anni","Godhani");
akv("Kartik","Gangani");
sum(17,24);

//fun with Return....

function ak($fname,$lname)
{
 $x = "$fname $lname";

 return $x;
}
 echo ak("<br>Kartik","Gangani<br>");

 function sub($maths,$sci,$eng)
 {
  $l = $maths + $sci + $eng;
  
  return $l;
 } 

 function per($jb)
{
 $per = $jb/3;
 echo $per;
}
$t = sub(73,48,99);
per($t);
echo "<br>".$t."<br>";

// fun Arg by Reference.....

function test(&$str)
{
 $str .= "And Is Very Easy.<br>";
}
$str = "Today Is Sci Exam ";
test($str);
echo $str;

function first(&$sum)
{
 $sum += 5;
}

function second(&$sum)
{
 $sum += 7;
}
$num = 10;
first($num);
echo "Original Value is $num.<br>";

second($num);
echo "Original Value is $num.<br>";

//recresiv Fun...

function Display($num)
{
  if($num <= 10)
  {
   echo "$num <br>";
   Display($num + 1);
  }
}
Display(0);

// Factorial....

function Fact($a)
{
  if($a == 0)
  {
   return 1;
  }
  else
  {
    return ($a * Fact($a - 1));
  }
}
 echo Fact(6)."<br>";

 // Global.....

 $k = 17;
 function Test1()
 {
  global $k;
  echo "Variable K in fun:$k.<br>";
 }
 Test1();
 echo "Variable K out fun:$k.<br>";

 $k = 17;
 $a = 03;
 function Test2()
 {
  global $k,$a;
  $k = $k + $a;
 }
 Test2();
 echo "Variable K fun:$k.<br>";
?>