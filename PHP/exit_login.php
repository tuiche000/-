<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/7/2
 * Time: 10:52
 */

include '../module/com.php';
include '../module/mysql.php';

//清除所有session
session_destroy();

echo "<script>window.location.href='../login.html'</script>";

mysqli_close($conn);

