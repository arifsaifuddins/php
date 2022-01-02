<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['judul'];?></title>
    <link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.css">
    <style>
    a,
    a:hover {
      color: #aaa;
      text-decoration: none;
    }

    .navbar-toggler:focus,
    .navbar-toggler {
      outline: none;
      border: none;
      box-shadow: none;
    }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container ">
        <a class="navbar-brand" href="<?=BASEURL;?>/">MVC SITE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?=BASEURL;?>/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASEURL;?>/mahasiswa">Mahasiswa</a>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASEURL;?>/about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>