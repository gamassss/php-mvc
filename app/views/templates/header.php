<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= BASEURL; ?>css/bootstrap.min.css" rel="stylesheet">
  <title><?= $data['judul']?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>">RS Dr.Ayano</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= ($data["judul"] === 'Home Page') ? 'active' : '' ?>" aria-current="page" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data["judul"] === 'Pegawai' || $data["judul"] === 'Detail Pegawai') ? 'active' : '' ?>" href="<?= BASEURL; ?>pegawai">Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data["judul"] === 'About me') ? 'active' : '' ?>" href="<?= BASEURL; ?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data["judul"] === 'Login') ? 'active' : '' ?>" href="<?= BASEURL; ?>login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">