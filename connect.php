<?php
//set connection variables 
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'roportarm_database';
$db_port = 1234;

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM motor_values ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);


$sql2 = mysqli_query($connection, "SELECT * FROM play_botton_values ORDER BY id DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM  save_botton_values ORDER BY id DESC LIMIT 1");

$sql3 = mysqli_query($connection, "SELECT * FROM of_botton_values ORDER BY id DESC LIMIT 1");

$print_data4 = mysqli_fetch_row($sql4);

echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";

echo "save botton";
echo"<hr>";

echo "ID = ".$print_data[0];
echo "<br>";
echo "motor 1 =  ".$print_data[1];
echo "<br>";
echo "motor 2 =  ".$print_data[2];
echo "<br>";
echo "motor 3 =  ".$print_data[3];
echo "<br>";
echo "motor 4 =  ".$print_data[4];
echo "<br>";
echo "motor 5 =  ".$print_data[5];
echo "<br>";
echo "motor 6 =  ".$print_data[6];
echo"<br>";
echo"<br>";




echo"play botton";
echo "<hr>";
echo "ID =  ".$print_data2[0];
echo"<br>";
echo "play =  ".$print_data2[1];
echo "<br>";
echo "<br>";


echo"save botton";
echo"<hr>";
echo "ID =  ".$print_data3[0];
echo"<br>";
echo "save =  ".$print_data3[1];
echo "<br>";
echo "<br>";




?>