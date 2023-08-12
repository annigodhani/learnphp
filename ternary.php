<?php
 $a = 22;

 ($a > 20)? $k = "Greater" : $k = "Smaller";
 $k = ($a > 20)? "Greater" : "Smaller";
 $k = "Value is:".($a > 20 ? "Greater" : "Smaller");
echo $k;
?>