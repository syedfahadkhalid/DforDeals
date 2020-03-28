<?php
include('connection.php');

$deal_id=$_GET['dealid'];
$query='DELETE FROM `deals` WHERE `Deal_Id`="'.$deal_id.'"';
$result=mysql_query($query) or die(mysql_error());

if($result)
{
	echo ('<script type="text/javascript">alert("Deal Deleted");
				window.location="products.php";
				</script>;');
}
?>