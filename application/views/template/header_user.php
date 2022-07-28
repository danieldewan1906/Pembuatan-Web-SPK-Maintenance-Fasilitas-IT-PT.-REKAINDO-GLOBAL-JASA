<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />

  <meta name="description" content="overview &amp; stats" />
  <meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0" />

  <title>PT. REKAINDO GLOBAL JASA</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>bs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>bs/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url()?>bs/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>bs/css/sb-admin.css" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo base_url()?>assets/uploads/logo.png" />

  <style>
    .error{color: red}
  </style>


  <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-light sticky-top" style="background-color:#3b5998">
    <div class="container">
      <div style="background-color: #FFFFFF; border-radius: 20px">
        <a class="navbar-brand" href="<?php echo base_url('User') ?>">
          <img src="<?php echo base_url()?>assets/uploads/reka.png" width="175" style="margin-top: -8px">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('User') ?>" style="margin-left: 10px">
              <i class="fa fa-home"></i>
              <span class="nav-link-text">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('User/form_user') ?>" style="margin-left: 10px">
              <i class="fa fa-pencil-square-o"></i>
              <span class="nav-link-text">Daftar Tiket</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Login/logout'); ?>" class="nav-link" style="margin-left: 10px">
              <i class="fa fa-fw fa-sign-in"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
