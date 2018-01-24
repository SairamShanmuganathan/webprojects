<?php
//turn on php error reporting
error_reporting(0);
session_start();
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name     = $_FILES['file']['name'];
	$tmpName  = $_FILES['file']['tmp_name'];
	$error    = $_FILES['file']['error'];
	$size     = $_FILES['file']['size'];
    $ext	  = strtolower(pathinfo($name, PATHINFO_EXTENSION));
  
	switch ($error) {
		case UPLOAD_ERR_OK:try{
			$valid = true;
			//validate file extensions
			if ( !in_array($ext, array('jpg','jpeg','png','gif','JPG')) ) {
				$valid = false;
				$response = 'image size too big!!.';
			}
			//validate file size
			//if ( $size/1024/1024 > 2 ) {
			//	$valid = false;
				//$response = 'File size is exceeding maximum allowed size.';
			//}
			//upload file
			if (!file_exists($_SESSION["name"])) {
    mkdir($_SESSION["name"], 0777, true);
}
			if ($valid) {
				$targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $_SESSION["name"] . DIRECTORY_SEPARATOR. $_SESSION["name"] . "id.jpg";
				move_uploaded_file($tmpName,$targetPath); 
				header("location:../home.html");
				exit;
			}
			}catch(Exception $e){
			echo "<script>alert(\"Could not load image\")</script>";
			header("location:error.html");
			}
			break;
		case UPLOAD_ERR_INI_SIZE:
			$response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
			break;
		case UPLOAD_ERR_PARTIAL:
			$response = 'The uploaded file was only partially uploaded.';
			break;
		case UPLOAD_ERR_NO_FILE:
			$response = 'No file was uploaded.';
			break;
		case UPLOAD_ERR_NO_TMP_DIR:
			$response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
			break;
		case UPLOAD_ERR_CANT_WRITE:
			$response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
			break;
		default:
			$response = 'Unknown error';
		break;
	}
echo $response;
header("location:error.html");
}
?>