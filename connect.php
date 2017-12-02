<?php

$link=mysql_connect("localhost","root","");

if(!$link){
	die('could not connect'.mysql_error());
}
$db_selected=mysql_select_db("test",$link);

if(!$db_selected){
	die('cant use becoz of'.mysql_error);
}

?>
