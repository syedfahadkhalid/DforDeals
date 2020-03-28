<?php 
include('connection.php');

function clean($str)
{
	$str = strip_tags(trim($str));
	
	return mysql_real_escape_string($str);
}




$fnmae=clean($_POST['firstname']);
$lname=clean($_POST['lastname']);
$email=clean($_POST['email']);
$phone=clean($_POST['phone']);
$address=clean($_POST['address']);
$city=clean($_POST['city']);
$size=clean($_POST['size']);
$color=clean($_POST['color']);
$comment=clean($_POST['comment']);
$dealid=$_GET['dealid'];
$q='Select * from deals where Deal_Id="'.$dealid.'"';
$r=mysql_query($q);
$rr=mysql_fetch_assoc($r);

$pattern ="/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";

$dealname=$rr['Name'];

if(($_POST['comment']!='')&&($_POST['firstname']!='')&&($_POST['lastname']!='')&&($_POST['email']!='') &&($_POST['phone']!='')&&($_POST['address']!='')&&($_POST['city']!='')&&($_POST['size']!='')&&($_POST['color']!=''))
{
	
	$query='INSERT INTO orders(FirstName, LastName, Email, Phone, Address, City, Sizes, Colours,comment, Deal_Id, Deal_name)
			VALUES("'.$fnmae.'","'.$lname.'","'.$email.'","'.$phone.'","'.$address.'","'.$city.'","'.$size.'","'.$color.'","'.$comment.'","'.$dealid.'","'.$dealname.'")';
			
	$result=mysql_query($query) or die(mysql_error());
	if($result)
	{
		echo ('<script type="text/javascript">alert("Order Placed");
				window.location="index.php";
				</script>;');
	}
	
}
else
{
	echo ('<script type="text/javascript">alert("Please fill all the fields");
				window.location="index.php";
				</script>;');
}
?>