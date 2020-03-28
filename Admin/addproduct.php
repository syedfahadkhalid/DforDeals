<?php
include('connection.php');

$deal_name=$_POST['name'];
$price=$_POST['price'];
$desc=$_POST['description'];
$status=$_POST['status']; 
	
$target_dir = "/home/a2766319/public_html/images/products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 =$target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 =$target_dir . basename($_FILES["fileToUpload3"]["name"]);
$target_file4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
$target_file5 =$target_dir . basename($_FILES["fileToUpload5"]["name"]);

$path="images/products/".basename($_FILES["fileToUpload"]["name"]);
$path2="images/products/".basename($_FILES["fileToUpload2"]["name"]);
$path3="images/products/".basename($_FILES["fileToUpload3"]["name"]);
$path4="images/products/".basename($_FILES["fileToUpload4"]["name"]);
$path5="images/products/".basename($_FILES["fileToUpload5"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
$imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
$imageFileType4 = pathinfo($target_file4,PATHINFO_EXTENSION);
$imageFileType5 = pathinfo($target_file5,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
	$check4 = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
    $check5 = getimagesize($_FILES["fileToUpload5"]["tmp_name"]);
	
	if($check !== false && $check2 !== false && $check3 !== false && $check4 !== false && $check5 !== false ) 
    {
        echo "File is an image - " . $check["mime"] . "."."<br>";
		echo "File is an image 2 - " . $check2["mime"] . "."."<br>";
		echo "File is an image 3 - " . $check3["mime"] . "."."<br>";
		echo "File is an image 4 - " . $check4["mime"] . "."."<br>";
		echo "File is an image 5 - " . $check5["mime"] . ".";
	
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
if ($_FILES["fileToUpload"]["size"] > 500000 && $_FILES["fileToUpload2"]["size"] > 500000 && $_FILES["fileToUpload3"]["size"] > 500000 && $_FILES["fileToUpload4"]["size"] > 500000 && $_FILES["fileToUpload5"]["size"] > 500000) 
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3) && move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file4) && move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file5)  ) 
	{
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."."<br>";
		echo "The file 2 ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded."."<br>";
		echo "The file 3 ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded."."<br>";
		echo "The file 4 ". basename( $_FILES["fileToUpload4"]["name"]). " has been uploaded."."<br>";
		echo "The file 5 ". basename( $_FILES["fileToUpload5"]["name"]). " has been uploaded."."<br>";
		
		$query = 'INSERT INTO deals(Name, Price, Description, Status, Img_main, Img2, Img3, Img4, Img5)
		VALUES("'.$deal_name.'","'.$price.'","'.$desc.'","'.$status.'","'.$path.'","'.$path2.'","'.$path3.'","'.$path4.'","'.$path5.'")'; 
		
		 $result = mysql_query($query) or die("not work");
		 if ($result)
		 { 
			  
              echo ('<script type="text/javascript">alert("Deal Upload");
				window.location="add_product.php";
				</script>;');
		 
		 }
		 else 
		 {
			 echo ('<script type="text/javascript">alert("Error Adding Deal");
				window.location="Home.php";
				</script>;');
			 
		 }
		
    }
}


?>