<h1>Tambah Admin</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>admin/admin"><i class="fa fa-group"></i> Admin</a></li>
      <li class="active"><i class="fa fa-pencil"> Input Admin</i></li>
    </ol>
    <hr>

    <a class="btn btn-default" href="<?php echo base_url(); ?>admin/input/admin"><i class="fa fa-arrow-circle-left"> Back</i></a>
    <br>
    <?php if($this->session->flashdata('password')): ?>
        <?php echo '<p align="center" class="alert alert-danger">'.$this->session->flashdata('password').'</p>'; ?>
      <?php endif; ?>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
        <?php echo form_open('input/admin', 'class="form-horizontal"'); ?>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Lengkap</label>
            <div class="col-md-8">
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-8">
              <input type="email" name="email" class="form-control" placeholder="email@domain.com" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Username</label>
            <div class="col-md-8">
              <input type="text" name="username" class="form-control" placeholder="username" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-8">
              <input type="password" name="password" class="form-control" placeholder="password" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Ulangi Password</label>
            <div class="col-md-8">
              <input type="password" name="password2" class="form-control" placeholder="ulangi password" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="register" class="btn btn-primary" value="Register">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
            </div>
          </div>
        </form>
      </div>
    </div>

    <br>