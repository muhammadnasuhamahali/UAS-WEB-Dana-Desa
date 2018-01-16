<!DOCTYPE html>
<html>
<head>
	<title>DanaDesa | login</title>
  <link rel="shortcut icon" href="https://unisnu.ac.id/wp-content/uploads/2017/01/cropped-logounisnu-300x300.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }
    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
      width: 500px;
    }
  </style>
</head>
<body>
  
	<div class="container container-body">
      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p align="center" class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p align="center" class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p align="center" class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>
    <h1>Login</h1>
    <hr>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php echo form_open('login', 'class="form-horizontal"'); ?>
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
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <a href="../">Back to site</a>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <center>copyright &copy; 2017 | Created by <a href="http://www.facebook.com/muhammad.afifi.794" target="_blank">afifi</a></center>
  </div>
</body>
</html>