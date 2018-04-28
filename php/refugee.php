<?php
	session_start();
	if(isset($_POST['submit']))
	{
		include_once 'db.php';
		$org_name=mysqli_real_escape_string($conn,$_POST['org_name']);
		$first_name=mysqli_real_escape_string($conn,$_POST['fname']);
		$last_name=mysqli_real_escape_string($conn,$_POST['lname']);
		$age=mysqli_real_escape_string($conn,$_POST['age']);
		$location=mysqli_real_escape_string($conn,$_POST['location']);
		$gender=mysqli_real_escape_string($conn,$_POST['gender']);


		if(empty($org_name)|| empty($first_name)||empty($last_name)||empty($age)||empty($location)||empty($gender))
		{
			//error
		}else
		{	
		$target_dir = "../upload/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$filen=uniqid('',true).'.'.$imageFileType;
	$t='../upload/'.$filen;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $t)){ 
        echo "hey";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




				$sql2="INSERT INTO refugee(OG_NAME,F_NAME,L_NAME,AGE,PLACE,GENDER,IMAGE) VALUES ('$org_name','$first_name','$last_name','$age','$location','$gender','$filen');";
				mysqli_query($conn,$sql2);
				header("location:front.php?signup=success");
				
				exit();


		}
		
	}
?>
