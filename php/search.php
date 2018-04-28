<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="../css/main1.css" rel="stylesheet" type="text/css"/>
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
      

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="front.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../refugee_signup.html">Add refugee<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../aid.html">Ask for aid<span class="sr-only">(current)</span></a>
          </li>          
    

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Search
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <form action="search.php" method="POST" class="dropdown-item">
                Frist name:
                <br>
                <input type="text" name="fname1" placeholder="first name">
                <br>
                Last name:
                <br>
                <input type="text" name="lname1" placeholder="last name">
                <br>
                Age:
                <br>
                <input type="text" name="search_age" placeholder="Age">
                <br>
              
              <div class="dropdown-divider"></div>
            

              <div class="dropdown-divider"></div>
              <button type="submit" name="search_submit">submit</button>
            </form>
            </div>
          </li>

        </ul>

        <?php
          if(isset($_SESSION['semail']))
          {
             echo 
            '<form action="logout.php" method="POST"  class="form-inline my-2 my-lg-0">
              <button type="submit" name="submit" class="btn btn-outline-success">logout</button>
            </form>';

          }
          
        ?>



      </div>
    </nav>  
    
<?php
	include_once 'db.php';
	if(isset($_POST['search_submit']))
	{
	
	$name1=mysqli_real_escape_string($conn,$_POST['fname1']);
  $name2=mysqli_real_escape_string($conn,$_POST['lname1']);
	$age=mysqli_real_escape_string($conn,$_POST['search_age']);
  if(empty($name1) && (empty($name2)) && empty($age))
  {
    echo '<h2>Please Fill Name or Age to be searched</h2>';
  }elseif(!empty($name1) && !empty($name2) && empty($age))
  {

  $sql="SELECT * FROM refugee WHERE F_NAME='$name1' AND L_NAME='$name2'";
  $result=mysqli_query($conn,$sql);
  $resultcount=mysqli_num_rows($result);
  if($resultcount<1)
  {
    // no people
  }else
  {
    while($row=mysqli_fetch_assoc($result))
    { 
      echo '<div class="section-darker">
                <div class="row">
                  <div class="col-sm-12 col-md-2">
                    <img src="upload/'.$row['IMAGE'].'" style="width:150px;height:150px">
                  </div>
  
                  <div class="col-sm-12 col-md-2">
                      <div class="row">
                        <div class="col-sm-12">
                            <p>Name of organisation:'.$row['OG_NAME'].'</p>
                            
                            <p>First name:'.$row['F_NAME'].'</p>
                          
                            <p>Last name:'.$row['L_NAME'].'</p>
                            <p>Age:'.$row['AGE'].'</p>
                           
                            <p>Gender:'.$row['GENDER'].'</p>
                            
                            <p>Location:'.$row['PLACE'].'</p>
                          
                            

                        </div>
                      </div>
                     
                  </div>
                <div class="col">
                </div>
              </div>
           </div>';
    }

  }
  }elseif(!empty($name1) && !empty($name2) && !empty($age))
  {

  $sql="SELECT * FROM refugee WHERE F_NAME='$name1' AND L_NAME='$name2' AND AGE='$age'";
  $result=mysqli_query($conn,$sql);
  $resultcount=mysqli_num_rows($result);
  if($resultcount<1)
  {
    // no people
  }else
  {
    while($row=mysqli_fetch_assoc($result))
    { 
      echo '<div class="search_back">
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <img src="../upload/'.$row['IMAGE'].'">;
                  </div>
  
                  <div class="col-sm-12 col-md-8">
                      <div class="row">
                        <div class="col-sm-12">
                            <p>Name of organisation:'.$row['OG_NAME'].'</p>
                            <br>
                            <p>First name:'.$row['F_NAME'].'</p>
                            <br>
                            <p>Last name:'.$row['L_NAME'].'</p>
                            <p>Age:'.$row['AGE'].'</p>
                            <br>
                            <p>Gender:'.$row['GENDER'].'</p>
                            <br>
                            <p>Location:'.$row['PLACE'].'</p>
                            <br>
                            

                        </div>
                      </div>
                     
                  </div>
                <div class="col">
                </div>
              </div>
           </div>';
    }

  }

  }else
  {
    //error
  }
	


	}
?>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>

