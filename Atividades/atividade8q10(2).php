<?php

$data = $_POST['data'];
$arrayData = explode("-",$data);
$somaMes = ($arrayData[1] - 1) * 30;
$somaDias = ($arrayData[2] + $somaMes);
echo "$somaDias";

?>