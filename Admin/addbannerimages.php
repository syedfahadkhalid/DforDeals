<?php 
include('connection.php');

$target_dir = "/home/a2766319/public_html/images/slider/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 =$target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 =$target_dir . basename($_FILES["fileToUpload3"]["name"]);

$path="images/slider/".basename($_FILES["fileToUpload"]["name"]);
$path2="images/slider/".basename($_FILES["fileToUpload2"]["name"]);
$path3="images/slider/".basename($_FILES["fileToUpload3"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
$imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image

$query12='Select * from main_banner';
$result12=mysql_query($query12);
$num_row=mysql_num_rows($result12);

if($num_row==0)
{
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
	if($check !== false && $check2 !== false && $check3 !== false ) 
    {
        echo "File is an image - " . $check["mime"] . "."."<br>";
		echo "File is an image 2 - " . $check2["mime"] . "."."<br>";
		echo "File is an image 3 - " . $check3["mime"] . "."."<br>";
		
		 $uploadOk = 1;
	}
	else 
	{
        echo "These files are not an image file.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file) && file_exists($target_file2) && file_exists($target_file3) && file_exists($target_file4) && file_exists($target_file5)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000 && $_FILES["fileToUpload2"]["size"] > 500000 && $_FILES["fileToUpload3"]["size"] > 500000) 
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
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3))
	{
		 echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."."<br>";
		echo "The file 2 ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded."."<br>";
		echo "The file 3 ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded."."<br>";
		
		$query = 'INSERT INTO main_banner(Img1, Img2, Img3)
		VALUES("'.$path.'","'.$path2.'","'.$path3.'")'; 
		$result = mysql_query($query) or die("not work");
		 if ($result)
		 { 
			  
              echo ('<script type="text/javascript">alert("Images Uploaded");
				window.location="main-banner.php";
				</script>;');
		 
		 }
		 else 
		 {
			 echo ('<script type="text/javascript">alert("Error Adding Banner Images");
				window.location="index.php";
				</script>;');
			 
		 }
		
    }
}
}
else
{
	 echo ('<script type="text/javascript">alert("Error Delet all Banners");
				window.location="main-banner.php";
				</script>;');
}
?>