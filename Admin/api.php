<?php
 /*Author: Rajesh S(rajeshstutorials.blogspot.com)
  */
ini_set('max_execution_time', 3600);
ini_set("display_errors","1");

/************************************ Login Process at google Doc
*******************************************************/
// Construct an HTTP POST request
$client_url = "https://www.googleapis.com/robot/v1/metadata/x509/184519912852-cn5u23oriiglb9ltuhe8qssgu87vjbhe@developer.gserviceaccount.com";
$client_post = array(
"accountType" => "HOSTED_OR_GOOGLE",

"Email" => "184519912852-cn5u23oriiglb9ltuhe8qssgu87vjbhe@developer.gserviceaccount.com",
"Passwd" => "bFHix7lu42YPEqlrYJsucZgP",
"service" => "writely",
"source" => "Reports"

);
 // Initialize the curl object
$curl = curl_init($client_url);

// Set some options (some for SHTTP)
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $client_post);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// Execute
$response = curl_exec($curl);

// Get the Auth string and save it
preg_match("/Auth=([a-z0-9_\-]+)/i", $response, $matches);
$auth = $matches[1];
echo "The auth string is: " . $auth."
";
/********************Login Process at google Doc close*******************************************************/
   $address_url="excel.php";
 curl_setopt($curl, CURLOPT_URL, $address_url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
 $filesize=strlen($data);
$title = "test.tsv";

$headers = array(
 "Authorization: GoogleLogin auth=" . "184519912852-cn5u23oriiglb9ltuhe8qssgu87vjbhe.apps.googleusercontent.com",
 "GData-Version: 3.0",
 "Content-Length: ". $filesize,
 "Content-Type: text/plain",
 "Slug: ". $title
);
 curl_setopt($curl, CURLOPT_URL, "https://drive.google.com/drive/#folders/0BzYF3MHZHWZPflNpcWlXQUJ5bXFSTnBQWHdNT1NXWm9pQkw2cUs2X0dFWF80WGt6WVhITEk/orders.xlsx");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($curl);
echo  $response."";
curl_close($curl);

?>