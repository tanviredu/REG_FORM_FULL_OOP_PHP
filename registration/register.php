<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Food service Registration</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="vendor/jquery/jquery.js"></script>
  <script type="text/javascript" src="vendor/jquery/registration.js"></script>


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


<div class="login" style="margin-top: 30px;">
  <div class="card" style="width: 40rem;height:65rem;">
    <img src="vendor/image/card.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title"> Food Service Registration</h3>
        <!-- form starts here-->
    <form class="form" method="POST" action="#">
          <div class="form-group">
            <label ><b>Name</b></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name ">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Email Address</b></label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Mobile</b></label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile no">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Address</b></label>
            <textarea class="form-control" id="address"  name="address" rows="3" placeholder="Example: Badamtali,Agrabad, Chittagong..."></textarea>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Password</b></label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Confirm Password</b></label>
            <input type="text" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
        </div>
        <div class="form-group">
              
              <input type="submit" id="register" name="register" value="register" class="btn btn-primary btn-lg btn-block" >
              
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
