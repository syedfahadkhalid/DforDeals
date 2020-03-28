<?php
include('connection.php');

$nw_address=$_POST['address'];

$query1='update info set address="'.$nw_address.'" where id=1';
$result1=mysql_query($query1)or die(mysql_error());
if($result1)
{
	echo ('<script type="text/javascript">alert("Address Updated");
				window.location="web-info.php";
				</script>;');
}
 
?>