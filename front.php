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
    
    <title>Helpers!</title>
    <style>
      .container-fluid
{
  width:100%;
  padding-left: 0px;
  padding-right:0px;

}
nav ul li
{
  padding-right:20px;
  
}

.jumbotron 

{
  text-align:center;
  font-family:'Libre Baskerville', serif;
  background-color: rgba(0,0,0,0.4);
  margin:0px;
  color:white;
}
.section-jumbo
{
  background-image: url('front_back.jpg') !important;
  background-size: 100%;
}
.section-jumbo .col-sm-12
{
  padding-left:0px;
  padding-right:0px; 
}
.section-jumbo .row
{
  margin-left:0px;
  margin-right:0px;
}
.section-jumbo .back
{
   background-color: rgba(0,0,0,0.4); 
   padding:10px;
}
.carousel-item  img
{
  height:auto;


}
.section-darker
{
  background-image:url('background.jpg') !important;
  background-size:100%;
  padding:2rem;
}
.section-darker p
{
  color: #000;
  font-size: 20px;

}
.section-jumbo2
{
background-color:#CCCCCC;
padding:2rem;
}
.signin
{
  padding:3px;
  border:3px solid #00CC00;
  border-radius:3px;
  background-color:transparent;
  color:#00CC00;
  transition:all 0.08s linear;


}
.signin:hover
{
  background-color:green;
  text-decoration:none;
  color:white;
}
.search
{
  padding:3px;
  border:3px solid #00CC00;
  border-radius:3px;
  background-color:transparent;
  color:#00CC00;
  transition:all 0.08s linear;
  

}
.search:hover
{
  background-color:green;
  text-decoration:none;
  color:white;
}
.searchBar
{
  margin-right:9px;
}
.disp_card
{

  margin-bottom:10px;

}
.disp_card:hover
{
  box-shadow:2px 6px 2px 0px rgba(0,0,0,0.3),-2px 0 2px 0px rgba(0,0,0,0.3);
  

}

@media screen and (max-width:576px)
{
  .text_field
  {
    width:100%;
  }
}


    </style>
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
            <a class="nav-link" href="refugee_signup.html">Add refugee<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="aid.html">Ask for aid<span class="sr-only">(current)</span></a>
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
    <div class="section-jumbo">
      <div class="row">
        <div class="col-sm-12">
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">let's help</h1>
              <p class="lead">the innocent people who desperately need our help</p>
            </div>
          </div>    
        </div>
      </div>
      <div class="row back">
        <div class="col">
        </div>
        <div class="col-sm-12 col-md-8">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="bg1_01.jpg" alt="First slide">
                <div class="carousel-caption  d-md-block">
                  <h5>beautiful waters</h5>
                  <p>lets go</p>
                </div>                
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="bg2_01.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block ">
                  <h5>nature</h5>
                  <p>how about that</p>
                </div>             
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="bg3_01.jpg" alt="Third slide">
              </div>
            </div>
          </div>

        </div>
        <div class="col">
        </div>             
      </div>
    </div>
    <div class="section-jumbo2">
      <div class="row">
        <div class="col-sm-12"> 
      <h1>Some information about our registered oragnistaions</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</p>
</div>
</div>
    </div> 
    <div class="section-darker">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-sm-12 col-md-8">
          <p><b>these are some other organisations</b></p>
        </div>
        <div class="col">
        </div>
      </div>
      <div class="row">
        <div class="col">
        </div>
        <div class="col-sm-12 col-md-9">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="card disp_card" style="width:100%;">
                <img class="card-img-top" src="ngologo2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>              
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="card disp_card" style="width: 100%;">
                <img class="card-img-top" src="ngologo3.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>            
            <div class="col-sm-12 col-md-4">
              <div class="card disp_card" style="width:100%;">
                <img class="card-img-top" src="ngologo4.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
             <div class="col-sm-12 col-md-4">
              <div class="card disp_card" style="width:100%;">
                <img class="card-img-top" src="ngologo4.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
             <div class="col-sm-12 col-md-4">
              <div class="card disp_card" style="width:100%;">
                <img class="card-img-top" src="ngologo4.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>             
            <div class="col-sm-12 col-md-4">
              <div class="card disp_card" style="width:100%;">
                <img class="card-img-top" src="ngologo4.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

          </div>


        </div>
        <div class="col">
        </div>


      </div>
    </div>

    
    
  


  </div>  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>

