<?php 
include('connection.php');

$deal_id=$_GET['dealid'];

$target_dir = "/home/a2766319/public_html/images/products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$path="images/products/".basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false ) 
    {
        echo "File is an image - " . $check["mime"] . "."."<br>";
		 $uploadOk = 1;
    } 
	else 
	{
        echo "These files are not an image file.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000 ) 
{
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{
        /*echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."."<br>";*/
		$query = "Update deals Set Img_main='".$path."' where Deal_Id='".$deal_id."'";
		
		 $result = mysql_query($query) or die(mysql_error());
		 if ($result)
		 { 
			  
              echo ('<script type="text/javascript">alert("Name Updated");
				window.location="view_details_produect.php?dealid='.$deal_id.'";
				</script>;');
				
		 
		 }
		
		
    }
}


?>