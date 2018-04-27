<?php
// // the message

// //if(isset($_POST['submit']))
// //{
// 	include_once "db.php";
	ini_set('max_execution_time', 300);

/////////////////////////////////////

	$to      = 'devanshslnk98@gmail.com';
 	$headers="From: The Sender Name <priyamshah112@gmail.com>\r\n";
 	$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";
 	$msg = "First Second line of text";

	
 	$msg = wordwrap($msg,70);
 	

// 	$sql="SELECT * FROM organization"; 
// 	$result=mysqli_query($conn,$sql);
// 	$resultcount=mysqli_num_rows($result);
// 	while($row=mysqli_fetch_assoc($result))
// 	{
 		//ini_set( 'sendmail_from', "priyamshah112@gmail.com" ); 
		ini_set("SMTP","smtp.gmail.com");
		ini_set("smtp_port","465");
 		mail($to,"My subject",$msg,'From: priyamshah112@gmail.com');
 		echo 'success'
// 	}







	
// }else
// {
// 	header("location:front.php?help=error");
// 	eixt();
// }
?> 
