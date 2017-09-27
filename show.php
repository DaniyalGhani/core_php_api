<?php
 error_reporting(0);
$conn = mysql_connect('localhost','root','');
if(!$conn){
  die('Could Not Connect !'.mysql_error());
}
mysql_select_db("dapi",$conn);


$query = "SELECT * FROM table1";

$result = mysql_query($query) or die(mysql_error());

$data_array = array();

while ($row = mysql_fetch_assoc($result)) {
	# code...
	$data_array[] = $row;
}

echo json_encode($data_array);