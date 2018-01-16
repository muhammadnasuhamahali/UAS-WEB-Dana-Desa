<!DOCTYPE html>
<html>
<head>
	<title>danadesa | <?php echo $this->session->userdata('username'); ?></title>
  <link rel="shortcut icon" href="https://unisnu.ac.id/wp-content/uploads/2017/01/cropped-logounisnu-300x300.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dropify.min.css"> 
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand active" href="<?php echo base_url(); ?>" target="_blank">DanaDesa.com</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>admin/">Home</a></li>
          <li><a href="<?php echo base_url(); ?>admin/keuangan">Keuangan</a></li>
          <li><a href="<?php echo base_url(); ?>admin/pembangunan">Pembangunan</a></li>
          <li><a href="<?php echo base_url(); ?>admin/feedback">Umpan Balik</a></li>
          <li><a href="<?php echo base_url(); ?>admin/agenda">Agenda</a></li>
          <li><a href="<?php echo base_url(); ?>admin/admin">Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>admin/profile">Profile</a></li>
          <li><a href="<?php echo base_url(); ?>logout">Log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container container-body">