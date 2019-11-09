<?php
ob_start();
session_start();
include_once('__autoload.php');
if($_SESSION['user_mail']=='admin@gmail.com' && $_SESSION['user_level']==2){
    include_once('admin.php');
}else{
    include_once('login.php');
}