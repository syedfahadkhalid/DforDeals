<?php
include('connection.php');

$nw_mobile=$_POST['mobile'];

$query1='update info set mobile="'.$nw_mobile.'" where id=1';
$result1=mysql_query($query1)or die(mysql_error());
if($result1)
{
	echo ('<script type="text/javascript">alert("Mobile Number Updated");
				window.location="web-info.php";
				</script>;');
}
 
?>