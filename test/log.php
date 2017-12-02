

<?php
include('connect.php');

$value1=$_POST['user'];
$value2=$_POST['password'];
$pass=SHA1($value2);


$result=mysql_query("select * from admin where user='$value1' and password='$pass'") or die('Failed to query'.mysql_error());
$row=mysql_fetch_array($result);
if($row['user']==$value1 && $row['password']==$pass){
      session_start();
      $_SESSION['sid']=session_id();
	    header('Location: admin.php');
    }
  else{
    echo "Either username/password is incorrect";
  }
?>
