<?php

/*
INSERT array into database with php without writing all the values line by line
implode - function of array is imp to transform array to string by spliting any character


*/


$candidate = array(
    'id' => "1234",
    'name' => "ABHISHEK",
    'lname' => "Patidar",
    'age' => "21",
    'email' => "abhi@ab.bc",
    'degree' => "CE"
);
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'experiment');

$columns = implode(", ", array_keys($candidate));
print_r($columns);
echo "\n";

$values = array_values($candidate);
print_r($values);
echo "\n";

foreach($values as $id=>$val)
{
    $values[$id] = "\"" . $val . "\"";
}
$values = implode(", ", $values);
print_r($values);
echo "\n";

$que = "INSERT INTO random ($columns) VALUES ($values)";
$result = mysqli_query($con, $que);
if($result){
    echo "inserted";
}
else{
    echo "not inserted";
}