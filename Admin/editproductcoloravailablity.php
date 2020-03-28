<?php 
include('connection.php');

$deal_id=$_GET['dealid'];

$color=$_POST['color'];

$qeury1='Update deals set color_available="'.$color.'" where Deal_Id="'.$deal_id.'"';
$result1=mysql_query($qeury1) or die(mysql_error());

if($result1)
{
	echo ('<script type="text/javascript">alert("Status Updated");
				window.location="view_details_produect.php?dealid='.$deal_id.'";
				</script>;');
				
}

?>