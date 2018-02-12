<? php
//Creating files
//user menu
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload & Download</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<style>
		label: margin 10px;

    </style>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="upload.php">
  <div class="form-group">
    <label>BROWSE FILES</label>
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
    
  </div>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
<?php 
   //displaying files
    $files = scandir("upload");
    print_r($files);
    $counter=0;
    for($a=2;$a<count($files);$a++)
    {
     echo '<img src="upload/'.$files[$a].'">';
    }

    
    	?>
    
    
</body>

</html>