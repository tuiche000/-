<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/7/1
 * Time: 18:24
 */

include '../module/com.php';
include '../module/mysql.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT username,password FROM user1 WHERE username='{$username}' AND password='{$password}'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if(! $row )
{
    mysqli_close($conn);
    echo "<script>alert('用户信息错误');window.location.href='../login.html'</script>";
}

$_SESSION['username'] = $row['username'];

echo "<script>alert('登陆成功');window.location.href='../index.php'</script>";
mysqli_close($conn);