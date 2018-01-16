<h1>Profile </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-user"></i> Profile</li>
    </ol>
    <hr>
    <a class="btn btn-default" href="<?php echo base_url(); ?>admin/pass"><i class="fa fa-key"></i> Change Password</a>
    <?php if($this->session->flashdata('success')): ?>
      <?php echo '<p align="center" class="alert alert-success">'.$this->session->flashdata('success').'</p>'; ?>
    <?php endif; ?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php echo form_open('admin/profile', 'class="form-horizontal"'); ?>
        <?php foreach ($biodata as $data) {
          echo '<div class="form-group">
            <label class="col-md-4 control-label">Username</label>
            <div class="col-md-8">
              <input type="text" name="username" class="form-control" placeholder="username" value="'.$data->username.'">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Tgl Daftar</label>
            <div class="col-md-8">
              <input disabled="" type="text" name="password" class="form-control" placeholder="password" value="'.$data->tgl_daftar.'">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama</label>
            <div class="col-md-8">
              <input type="text" name="nama" class="form-control" placeholder="username" value="'.$data->nama.'">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-8">
              <input type="text" name="email" class="form-control" placeholder="username" value="'.$data->email.'">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="save" class="btn btn-primary" value="Simpan Perubahan">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
          </div>
        </form>';

        } ?>
      </div>
    </div>
    <br>
    <br>