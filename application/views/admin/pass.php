<h1>Profile </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>admin/profile"><i class="fa fa-user"></i> Profile</a></li>
      <li class="active"><i class="fa fa-key"></i> Change Password</li>
    </ol>
    <hr>
    <a class="btn btn-default" href="<?php echo base_url(); ?>admin/profile"><i class="fa fa-arrow-circle-left"></i> Back</a>
      <?php if($this->session->flashdata('wrong_pass')): ?>
        <?php echo '<p align="center" class="alert alert-danger">'.$this->session->flashdata('wrong_pass').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('wrong_confirm')): ?>
        <?php echo '<p align="center" class="alert alert-danger">'.$this->session->flashdata('wrong_confirm').'</p>'; ?>
      <?php endif; ?>

    <div class="row">
    	<div class="col-md-6 col-md-offset-3">
    		
        <?php echo form_open('admin/changePassword', 'class="form-horizontal"'); ?>
          <div class="form-group">
            <label class="col-md-4 control-label">Old Password</label>
            <div class="col-md-8">
              <input type="password" name="old_password" class="form-control" placeholder="username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">New Password</label>
            <div class="col-md-8">
              <input type="password" name="password" class="form-control" placeholder="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Confirm Password</label>
            <div class="col-md-8">
              <input type="password" name="confirm" class="form-control" placeholder="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="change" class="btn btn-primary" value="Change">
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
    <br>