<?php
function __autoload($file_name){
    require_once("$file_name.php");
}