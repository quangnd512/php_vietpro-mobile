<?php
function __autoload($class_name){
    require_once("$class_name.php");
}
$arr = array('Vàng','Đỏ','Nâu');
$con_nguoi = new ham_oop($arr);
$con_nguoi->showValue();