<!DOCTYPE html>
<html lang="en">
  <head>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.min.js"></script>
      <script src="../js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -50px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="index.php"><?php echo $_SESSION['a_name']; ?> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php?aid=<?php echo $_SESSION['a_id']; ?>">profile</a>
          <a class="dropdown-item" href="editprofile.php?aid=<?php echo $_SESSION['a_id']; ?>">edit profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="changepassword.php?aid=<?php echo $_SESSION['a_id']; ?>">change password</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
  

    <div class="container-fluid">
      <div class="row" style="margin-top: 10px;">
        <div class="col-md-1">
          <!-- Example single danger button -->

          
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Categories</a></li>
            <li><a href="addcategory.php">Add</a></li>
            <li><a href="viewcategory.php">View</a></li>
            
          </ul>
          
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Products</a></li>
            <li><a href="addprod.php">Add</a></li>
            <li><a href="viewprod.php">View</a></li>
           
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Models</a></li>
            <li><a href="addmodel.php">Add</a></li>
            <li><a href="viewmodel.php">View</a></li>
            
          </ul>
         <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Item</a></li>
            <li><a href="additem.php">Add</a></li>
            <li><a href="viewitem.php">View</a></li>
           
          </ul>
          
          
        </div>
          
        
        <!--Start of the body of website-->
        <div class="col-md-10 col-md-offset-1 main">