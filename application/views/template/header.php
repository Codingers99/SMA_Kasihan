<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Heritage Barber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		
<style>
  .navbar-nav li.nav-item a.nav-link:hover {
    color: red; /* Ganti warna sesuai keinginan */
  }
</style>

    <nav class="navbar navbar-expand-lg bg-black flex-end">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="<?php echo base_url()?>index.php/barber">HERITAGE BARBERSHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url()?>index.php/barber">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url()?>index.php/barber/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url()?>index.php/barber/barber">Barber</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url()?>index.php/barber/service">Service</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  </head>
</head>
<body>
