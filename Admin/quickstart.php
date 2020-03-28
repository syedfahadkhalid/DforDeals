<?php
 /*Author: Rajesh S(rajeshstutorials.blogspot.com)
  */
ini_set('max_execution_time', 3600);
ini_set("display_errors","1");

/************************************ Login Process at google Doc
*******************************************************/
// Construct an HTTP POST request
$client_url = "https://www.google.com/accounts/ClientLogin";
$client_post = array(
"Client_ID" => "70380002143-rf4hq9ks2dduiucpi8ok9fh4csm8updh.apps.googleusercontent.com",
"accountType" => "HOSTED_OR_GOOGLE",
"Email" => "70380002143-rf4hq9ks2dduiucpi8ok9fh4csm8updh@developer.gserviceaccount.com",
"Passwd" => "BDTmHp5hYaAJAKb9IaWyy1B6"
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
$auth = "https://www.googleapis.com/auth/drive.file";
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
 "Authorization: GoogleLogin auth=" ."https://www.googleapis.com/auth/drive.file",
 "GData-Version: 3.0",
 "Content-Length: ". $filesize,
 "Content-Type: text/plain",
 "Slug: ". $title
);
 curl_setopt($curl, CURLOPT_URL, "
https://docs.google.com/feeds/default/private/full");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($curl);
echo  $response."
";
curl_close($curl);

?>