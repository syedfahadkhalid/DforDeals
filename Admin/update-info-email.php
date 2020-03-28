<?php
include('connection.php');

$nw_email=$_POST['email'];

$query1='update info set email="'.$nw_email.'" where id=1';
$result1=mysql_query($query1)or die(mysql_error());
if($result1)
{
	echo ('<script type="text/javascript">alert("Email Updated");
				window.location="web-info.php";
				</script>;');
}
 
?>