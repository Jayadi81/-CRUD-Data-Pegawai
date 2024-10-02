<?php 
session_start();
    if($_SESSION['status_loginn']!=true){
        header('location: loginn.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    
</head>
<body>
<div class="p-5 bg-image" style="
        background-image: url('https://img.freepik.com/premium-vector/modern-dark-blue-abstract-background-paper-shine-layer-element-vector-presentation-design-suit-business-corporate-institution-party-festive-seminar-talks_249611-2889.jpg');
        height: 0px;">
   <div>
     <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PT.Perusahaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_pegawai.php">Data Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tugas.php">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
    </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px"></div>    
  </body>
</html>

