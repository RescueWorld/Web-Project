<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta  http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
</head>
<body>
	<?php
	include_once 'db.php';
	if(isset($_POST['Resource']))
	{

		$text="";
		if(isset($_POST['Food']) && !isset($_POST['Clothes']))
		{
			$text="FOOD";
		}elseif(!isset($_POST['Food']) && isset($_POST['Clothes']))
		{
			$text="CLOTHES";
		}elseif(isset($_POST['Food']) && isset($_POST['Clothes']))
		{
			$text="FOOD&CLOTHES";
		}
			
		$headers = 'From: Priyam<priyamshah112@gmail.com>' . "\r\n";
		$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";


		$sql="SELECT email FROM organization ";
		$result=mysqli_query($conn,$sql);
		$main_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

			";
			
		while($row=mysqli_fetch_assoc($result))
		{		
			$email=$row['email'];	
			mail($email,$text,$main_text,$headers);
														
		}
		echo "Your mail was sent";
		header("location:front.php?mail=success");
		xit();

	

	}elseif(isset($_POST['Medical']))
	{

		$text="";
		if(isset($_POST['Emergency']) && !isset($_POST['Chronic']))
		{
			$text="EMERGENCY";
		}elseif(!isset($_POST['Emergency']) && isset($_POST['Chronic']))
		{
			$text="Chronic";
		}elseif(isset($_POST['Emergency']) && isset($_POST['Chronic']))
		{
			$text="EMERGENCY&CHRONIC";
		}
			
		$headers = 'From: Priyam<priyamshah112@gmail.com>' . "\r\n";
		$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";


		$sql="SELECT email FROM hospital ";
		$result=mysqli_query($conn,$sql);
		$main_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
		while($row=mysqli_fetch_assoc($result))
		{		
			$email=$row['email'];	
			mail($email,$text,$main_text,$headers);
			echo "Your mail was sent";
			header("location:front.php?mail=success");
			
		}
	}elseif(isset($_POST['Migration']))
	{
		$text="MIGRATION";
		$headers = 'From: Priyam<priyamshah112@gmail.com>' . "\r\n";
		$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";


		$sql="SELECT email FROM organization ";
		$result=mysqli_query($conn,$sql);
		$main_text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
		while($row=mysqli_fetch_assoc($result))
		{		
			$email=$row['email'];	
			mail($email,$text,$main_text,$headers);
			echo "Your mail was sent";
			header("location:front.php?mail=success");
			
		}
	}

	?>
</body>
</html>