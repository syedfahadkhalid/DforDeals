<?php 
include('connection.php');
$order_id=$_GET['orderid'];

$query='UPDATE orders SET Status="Confirmed" Where Order_id="'.$order_id.'"';
$result=mysql_query($query) or die(mysql_error());

if($result)
{
	echo ('<script type="text/javascript">alert("Order Confirmed");
				window.location="Orders.php";
				</script>;');
}

?>