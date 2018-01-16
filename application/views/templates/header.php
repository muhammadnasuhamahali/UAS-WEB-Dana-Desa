<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DanaDesa.com</title>
  <link rel="shortcut icon" href="https://unisnu.ac.id/wp-content/uploads/2017/01/cropped-logounisnu-300x300.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
        <a class="navbar-brand" href="#" target="_blank">DanaDesa.com</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url(); ?>keuangan">Info Keungan</a></li>
          <li><a href="<?php echo base_url(); ?>pembangunan">Info Pembangunan</a></li>
          <li><a href="<?php echo base_url(); ?>about">Tentang Kami</a></li>
          <li><a href="<?php echo base_url(); ?>agenda">Agenda</a></li>
        </ul>
          
          <?php echo form_open('pages/cari', 'class="navbar-form navbar-right"'); ?>
            <div class="input-group">
              <input type="text" name="cari" class="form-control" placeholder="search">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default">
                  <span class="fa fa-search"></span>
                </button>
              </span>
            </div>
          </form>
      </div>
    </div>
  </nav>
  <div class="container container-body">