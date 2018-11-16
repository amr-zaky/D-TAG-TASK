<?php
      session_start();
      if(isset($_SESSION['u_id']))
      {
        
      }

      else 
      {
         header('Location:../home.php?error=loginfirst');
      }

?>

<!DOCTYPE html>
<html lang="en">

<head >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" 
>
