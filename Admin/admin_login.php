<?php
include('connection.php');
?>
<?php
session_start();
$admin_username=md5($_POST['ad_username']);
$admin_password=md5($_POST['ad_password']);

$query1='Select * from admin where UserName="'.$admin_username.'" AND PassWord="'.$admin_password.'"';
$result1=mysql_query($query1);

if($result1)
{
	if(mysql_num_rows($result1) > 0) 
	{
		//Login Successful
		session_regenerate_id();
		$admin = mysql_fetch_assoc($result1);
		
		$_SESSION['SESS_ADMIN_ID'] = $admin['ID'];
		$_SESSION['SESS_ADMIN_USERNAME'] = $admin['UserName'];
			
			session_write_close();
			header("location: index.php");
			exit();
		}
		else 
		{
			//Login failed
			header("location:login.php");
			exit();
		}
}
?>