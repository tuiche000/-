<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/7/1
 * Time: 17:56
 */

include '../module/com.php';
include '../module/mysql.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO  user1 
(username, password, time)
VALUE 
('{$username}','{$password}',NOW())";

$result = mysqli_query($conn,$sql);

if(! $result )
{
    mysqli_close($conn);
    echo "<script>alert('用户创建失败');window.location.href='../register.html'</script>";
}

echo "<script>alert('用户创建成功');window.location.href='../login.html'</script>";
mysqli_close($conn);