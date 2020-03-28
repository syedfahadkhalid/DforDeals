<?php
include('connection.php');

$query='Delete from main_banner where ID=1';
$result=mysql_query($query) or die(mysql_error());
if($result)
{
	echo ('<script type="text/javascript">alert("Deleted");
				window.location="main-banner.php";
				</script>;');
}
?>