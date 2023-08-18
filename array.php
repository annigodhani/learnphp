<?php

$color = ["Red","Green","Yewoll","Blue","Pink","Whight","Silver"];
echo "<pre>";
print_r ($color);
echo "</pre>.<br>";

$colors = ["Red","Green","Yewoll","Blue","Pink","Whight","Silver"];
echo "<ul>";
for($k=0;$k<6;$k++)
{
  echo "<li> $colors[$k]</li>.<br>";
}
echo "</ul>";

// Associative Array Step 1.....

$age = array(
"Bill"=>22,
"Steve"=>26,
"Elon"=>30
);

echo $age["Bill"]."<br>";
echo $age["Steve"]."<br>";
echo $age["Elon"]."<br>";

//Step 2....

$age = [
    "Bill"=>22,
    "Steve"=>26,
    "Elon"=>30
   ];
echo "<pre>";
print_r ($age);
echo "</pre>.<br>";

// Foreach loop prog 1.....

$color = [
    "Red",
    "Green",
    "Yewoll",
    "Blue",
    "Pink",
    "Whight",
    "Silver"
];

foreach($color as $value)
{
 echo $value."<br>";
}

// Prog 2....

$age = [
    "Bill"=>22,
    "Steve"=>26,
    "Elon"=>30
   ];

echo "<ul>";
foreach($age as $key=> $value)
{
 echo "<li>$key = $value</li>.<br>";
}
echo "</ul>"; 

// 2D Array.....

// $emp = [
//     [1,"Kartik","Manager",60000],
//     [2,"Anni","Assisten",50000],
//     [3,"Vijay","Salesman",25000],
//     [4,"Pankaj","Computer Operator",12000],
//     [5,"Mitesh","Driver",5000]
// ];

// for($a=0;$a<5;$a++)
// {
//  for($k=0;$k<5;$k++)
// {
//   echo $emp[$a][$k]." ";
//  }
//   echo "<br>";
// }

//Step 2...

$emp = [
  [1,"Kartik","Manager",60000],
  [2,"Anni","Assisten",50000],
  [3,"Vijay","Salesman",25000],
  [4,"Pankaj","Computer Operator",12000],
  [5,"Mitesh","Driver",5000]
];

echo "<table border='3px'>
<tr>
    <th>Emp Id</th>
    <th>Emp Name</th>
    <th>Designation</th>
    <th>Salary</th>
    </tr>";
foreach($emp as $v1)
{
  echo "<tr>";
foreach($v1 as $v2)
{
  echo "<td> $v2 </td>";
 }
 echo "</tr>";
}
 echo "</table>";
 echo "<br>";

// echo "<pre>";
// print_r ($emp);
// echo "</pre>.<br>";


// Multidimensional Associativ Array......

$marks = [
  "Kartik" => [
    "Sci" => 90,
    "English" => 78,
    "Guj" => 89
  ],

  "Anni" => [
    "Sci" => 89,
    "English" => 87,
    "Guj" => 90
  ]
  ];
  echo "<table border='3px'>
   <tr>
      <th>Name</th>
      <th>Sci</th>
      <th>English</th>
      <th>Guj</th>
      </tr>";
  foreach($marks as $key => $v1)
  {
    echo "<tr>
    <td>$key</td>";
  foreach($v1 as $v2)
  {
    echo "<td> $v2 </td>";
   }
   echo "</tr>";
  }
   echo "</table>";
   echo "<br>";

// Foreach Loop with List()......

$emp = [
  [1,"Kartik","Manager",60000],
  [2,"Anni","Assisten",50000],
  [3,"Vijay","Salesman",25000],
  [4,"Pankaj","Computer Operator",12000],
  [5,"Mitesh","Driver",5000]
];

foreach($emp as list($id,$name,$designation,$salary))
{
  echo "$id $name $designation $salary <br>";
}

//Tabale List....

echo "<table border='3px'>
<tr>
    <th>Emp Id</th>
    <th>Emp Name</th>
    <th>Designation</th>
    <th>Salary</th>
    </tr>";
foreach($emp as list($id,$name,$designation,$salary))
{
  echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
}
 echo "</table>";
?>