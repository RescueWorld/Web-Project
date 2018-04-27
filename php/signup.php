<?php  
	if(isset($_POST['submit']))
	{
		include_once 'db.php';
		$name=mysqli_real_escape_string($conn,$_POST['org_name']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$contact=mysqli_real_escape_string($conn,$_POST['contact']);
		$password=mysqli_real_escape_string($conn,$_POST['pwd']);


		//error handlers
		if(empty($name) ||empty($email) ||empty($password)||empty($contact))
		{  
			header("location: login1.html?signup=empty");
			exit();
		}else
		{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{ 
				header("location: login1.html?signup=invalidEmail");
				exit();
			}else
			{
				$sql="SELECT * FROM organization WHERE uid='$uid'";
				$result=mysqli_query($conn,$sql);
				$resultcheck=mysqli_num_rows($result);
				if($resultcheck>0)
				{   echo "1";
					header("location:login1.html?signup=usertaken");
					exit();
				}else
				{

				$hashpwd=password_hash($password,PASSWORD_DEFAULT);
				$sql2="INSERT INTO organization(name,email,pwd,contact) VALUES ('$name','$email','$hashpwd','$contact');";
				mysqli_query($conn,$sql2);
				header("location:login1.html?signup=success");
				exit();
				}
			}
		}	

	}else
	{
		header("loaction:signup.html");
		exit();
	}

?>

