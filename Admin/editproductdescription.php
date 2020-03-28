<?php 
include('connection.php');

$deal_id=$_GET['dealid'];

$deal_desc=$_POST['desc'];

$qeury1='Update deals set Description="'.$deal_desc.'" where Deal_Id="'.$deal_id.'"';
$result1=mysql_query($qeury1) or die(mysql_error());

if($result1)
{
	echo ('<script type="text/javascript">alert("Description Updated");
				window.location="view_details_produect.php?dealid='.$deal_id.'";
				</script>;');
				
}

?>