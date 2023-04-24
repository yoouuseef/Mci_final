<?php
session_start();
include("../connection.php");
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM t_admin name='$name' AND password='$password' LIMIT 1";

    $sql = "SELECT admin_id FROM admin_tb WHERE username = '$username' and password = '$password' LIMIT 1";   
    $sql_run = mysqli_query($conn, $sql);
    if(mysqli_num_rows($sql_run))
    {
        c
        exit();
    }
    else
    {
        header("Location: index.php");
        exit();
    }
}
?>


<form action="index.php" method="POST">
    <input type="text" name="username" placeholder="Enter Name">
    <input type="password" name="password" placeholder="Enter Password">
    <button name="login">Login</button>
</form>