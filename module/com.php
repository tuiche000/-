<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/7/1
 * Time: 17:58
 */

//设置中文字符
header('Content-Type:text/html;charset=utf-8');

//屏蔽Notice错误提示
error_reporting(E_ALL ^ E_NOTICE);

session_start();