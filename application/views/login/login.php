<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PT. REKAINDO GLOBAL JASA</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>bs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>bs/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>bs/css/sb-admin.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/uploads/logo.png">
  <style>
    .error{color: red}
  </style>
</head>

<body background="<?php echo base_url()?>assets/uploads/bg-login.png" style="background-size: 100% " >
  <div class="container" style="margin-left:60px;margin-top:300px;">
    <div class="card card-login " style="background-color:rgba(255,255,255,0.2);width: 350px; border-radius: 8px">
      <!--   <div class="container"> -->
        <!-- <div class="card card-login mx-auto mt-5"> -->
          <!--   <div class="card-header"><img src="https://ptrekaindo.co.id/logistik3/assets/uploads/reka.png" width="100"><b><i class="fa fa-fw fa-key"></i></b><br><h7> Monitoring <i>Permintaan </i>& <i> Pengembalian</i> Material</h7></div> -->
          <div class="card-body">
            <form action="<?php echo site_url('Login/proses'); ?>" method="post" class="form-signin">
              <?php
              if ($this->session->flashdata('result_login')){
                ?>
                <div class="alert alert-error">
                  <strong>Peringatan</strong>
                  <?php echo $this->session->flashdata('result_login'); ?>
                </div>    
              <?php } ?>
              <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text" id="username" placeholder="Username">
                <?=form_error('username')?>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" type="password" id="password" placeholder="Password">
                <?=form_error('password')?>
              </div>
              <button class="btn btn-primary" type="submit">Login</button>
              <a class="btn btn-dark" href="<?php echo base_url('User') ?>" style="opacity: 0.5">
                <i class="fa fa-home"></i>
              </a>
            </form>
            <div class="text-center">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url('bs/jquery/jquery.min.js')?>"></script>
      <script src="<?php echo base_url('bs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url('bs/jquery-easing/jquery.easing.min.js')?>"></script>
    </body>
    </html>