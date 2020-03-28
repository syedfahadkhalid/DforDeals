<?php
include('connection.php');

$order_id=$_GET['orderid'];

$query='DELETE FROM `orders` WHERE Order_id="'.$order_id.'"';
$result=mysql_query($query) or die(mysql_error());

if($result)
{
	echo ('<script type="text/javascript">alert("Order Deleted");
				window.location="Orders.php";
				</script>;');
}
?>