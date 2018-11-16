<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>NEW WAY</title>
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar  navbar-inverse navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CM<span>S.</span></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="home.php">Home<span class="sr-only">(current)</span></a></li>
              

               <li><a href="signup.php">Sign Up</a></li>

              <li><a href="/D-TAG-TASK/admin/addproduct.php">Add Product</a></li>
              <li><a href="/D-TAG-TASK/admin/editproduct.php">Edit Product</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Web Desgin</a></li>
                  <li><a href="#">Programming</a></li>
                  <li><a href="#">Desktop</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Web Hosting</a></li>
                </ul>
              </li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- end of container -->
      </nav>

