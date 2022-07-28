<?php if ($this->session->has_userdata('success')) { ?>
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
	<i class="icon fa fa-check"></i> <?=$this->session->flashdata('success');?>
</div>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
<div>
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
	<i class="icon fa fa-ban"></i> <?=strip_tags(str_replace('</p>', '', $this->session->flashdata('error');))?>
</div>
<?php } ?>

<a href="<?=site_url()?>/Staff/delete/'+data["no_tiket"]+'"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></button></a>

 <link href="<?php echo base_url()?>bs/vendor/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>bs/vendor/bootstrap/css/docs.css" rel="stylesheet">

  <!-- 
<body class="fixed-nav navbar-light" id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light navbar-light fixed-top" style="background-color:#3b5998" id="mainNav">

    <div style="background-color: #FFFFFF; border-radius: 100px">
      <a href="<?php echo base_url('Staff') ?>" class="navbar-brand">
          <center><img src="<?php echo base_url()?>assets/uploads/reka.png" width="100" style="margin-top: -7px"></center>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle-navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" style="background-color: #F5F6FB;" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a href="<?php echo base_url('Staff') ?>" class="nav-link">
            <i class="fa fa-home"></i>
            <span class="nav-link-text">BERANDA</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tiket">
          <a href="<?php echo base_url('Staff') ?>" class="nav-link" href="">
            <i class="fa fa-list-alt"></i>
            <span class="nav-link-text">DATA TIKET</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="<?php echo base_url('Login/logout'); ?>" class="nav-link" style="color: #FFFFFF">
            <i class="fa fa-fw fa-sign-out" style="color: #FFFFFF"></i>Logout</a>
        </li>
      </ul>

        <ul class="navbar-nav sidenav-toggler" style="background-color: #F5F6FB;">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav> -->
    <!-- End Navbar -->