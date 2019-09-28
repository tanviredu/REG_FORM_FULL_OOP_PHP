<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Food service login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="vendor/jquery/login.js"></script>


</head>

<style>
body {
  background-image: url("vendor/image/bg.jpg");
        background-repeat:no-repeat;
       background-size:cover;
} 

</style>


<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Food Service</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<center>
<div class="login" style="margin-top: 50px;">
  <div class="card" style="width: 30rem;height:39rem;">
    <img src="vendor/image/card.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title"> Food Service Login</h3>
        <!-- form starts here-->
    <form class="form" method="post" action="#">
          <div class="form-group">
            <label ><b>Mobile</b></label>
            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile ">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Password</b></label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
        </div>
        <div class="form-group">
              
              <input type="button" id="login" name="login" value="login" class="btn btn-primary btn-lg btn-block" >
              
        </div>
</form>
 
      <!--  form ends here -->
    </div>
  </div>
</div>



</center>

 
  <!-- Bootstrap core JavaScript -->
  
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>


