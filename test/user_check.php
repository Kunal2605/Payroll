<?php

$link=mysql_connect("localhost","root","");

if(!$link){
	die('could not connect'.mysql_error());
}
$db_selected=mysql_select_db("test",$link);

if(!$db_selected){
	die('cant use becoz of'.mysql_error);
}


$value1=$_POST['user'];
$value2=$_POST['password'];


$result=mysql_query("select * from users where id='$value1' and password='$value2'") or die('Failed to query'.mysql_error());
$row=mysql_fetch_array($result);
if($row['id']==$value1 && $row['password']==$value2){
      //login code
    }
  else{
    // else code
  }
?>
