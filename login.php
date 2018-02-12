<?php
	session_start();
	include_once "db.php";
	if(isset($_POST['submit']))
	{
		
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$password=mysqli_real_escape_string($conn,$_POST['pwd']);
		
		if(empty($email)||empty($password))
		{
			header("location:front.html?login=empty");
			exit();
		}else
		{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("location:login1.html?login=invalidEmail");
				exit();
			}else
			{
				$sql1="SELECT * FROM organization WHERE email='$email'";
				$result=mysqli_query($conn,$sql1);
				$resultcheck=mysqli_num_rows($result);
				if($resultcheck<1)
				{
					header("location:login1.html?login=taken");
					exit();

				}else
				{
					if($row=mysqli_fetch_assoc($result))
					{
						//dehashing
						$hashedpwd=password_verify($password,$row['pwd']);
						if($hashedpwd==false)
						{
							header("location:login1.html?login=passwordwrong");
							exit();
						}elseif($hashedpwd==true)
						{
							$_SESSION['sname']=$row['name'];
							$_SESSION['semail']=$row['email'];
							
							$_SESSION['spassword']=$row['pwd'];
							$_SESSION['scontact']=$row['contact'];
							header("location:front.php?login=success");
							exit();

						}
					}

					header("location:index2.html?login=success");
					exit();
				}
			}
		}

	}	
?>

