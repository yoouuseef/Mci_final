
<?php
$hostname= "localhost";
$database= "mci_db";
$username= "root";
$password = "";
$conn = new mysqli($hostname,$username,$password,$database);
if ($conn->connect_error)
{
die("اتصال خاطىء: " . $conn->connect_error);
}
else
{
echo'';
}
?>