<?php 
include('connection.php');

$deal_id=$_GET['dealid'];

$deal_price=$_POST['price'];

$qeury1='Update deals set Price="'.$deal_price.'" where Deal_Id="'.$deal_id.'"';
$result1=mysql_query($qeury1) or die(mysql_error());

if($result1)
{
	echo ('<script type="text/javascript">alert("Price Updated");
				window.location="view_details_produect.php?dealid='.$deal_id.'";
				</script>;');
				
}

?>