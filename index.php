<?php
session_start();
if(empty($_SESSION['Id']))
{
    $mess = "Please Login First!!";
    header("Location: login.php?message=$mess");
}
    if($_SESSION['userType'] == 'customer')
    {
        header("Location: client.php");
    }

    include 'connection.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Admin Side</title>
    <style>
   *
   {
    font-family: "Poppins", san serifs;
   }
    
    .navbar
    {
        
         background: linear-gradient(322deg, #f7ae71, #3d0cfc)
    }
    body
    {
        overflow-x: hidden;
    }
    .bg-first
    {
       background: linear-gradient(18deg, rgba(183,23,14,0.3), rgba(19,176,225,0.6));
    }
    .bg-second
    {
        background: linear-gradient(8deg, rgba(196,124,215,0.8), rgba(184,224,84,0.8));
    }
    .bg-third
    {
        background: linear-gradient(155deg, rgba(75,45,218,0.9), rgba(104,138,110,0));
    }
    .bg-fourth
    {
        background: linear-gradient(144deg, rgba(194,223,131,0.7), rgba(176,83,25,0.7));
    }
    </style>
</head>
<body>




<nav class="navbar navbar-expand-lg purple-gradient border-bottom" style="width: 100vw">
  <div class="container-fluid">
    <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    <i class="bi bi-list text-dark fs-4 me-3"></i>
    </a>
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">    
      <form class="d-flex ms-auto" role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <i class="bi bi-search fs-4 text-light ms-2 pb-1 fw-bold "></i>
      </form>


      <div class="dropdown me-5">
  <i class="bi bi-person-circle fs-4 text-light pb-2 ms-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
</i>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Profile</a></li>
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>
</div>
    </div>
  </div>
</nav>




<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-2 shadow sticky-top" style="height: 100vh;">
      <div class="container m-3 d-flex">
        <img src="img/ice-cube.png" alt="logo" class="img-fluid" style="width: 3rem; height: 3rem;">
        <h4 class="fs-bold text-uppercase my-2 mx-1">Cubit</h4>
      </div>
      <hr class="border border-dark border-1 opacity-50">
    </div>
    <div class="col-md-10 mt-3" id="main">
           
        <div class="row">
            <div class="col-md-3">
            <div class="card">
                <div class="card-body bg-first">
                    
                </div>
                <div class="card-header">
                   
                </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                <div class="card-body bg-second">
                    
                </div>
                <div class="card-header">
                   
                </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                <div class="card-body bg-third">
                    
                </div>
                <div class="card-header">
                   
                </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                <div class="card-body bg-fourth">
                    
                </div>
                <div class="card-header">
                   
                </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
     

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html> 
