<h1>Tentang Kami!</h1>
<ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-group"> Tentang Kami</i></li>
    </ol>
<hr>
<p>Hai para warga desa yang saya hormati, disini kami menyediakan layanan tentang info dana desa. Anda juga dapat menyampaikan kritik dan saran anda disini. Semoga website ini dapat bermanfaat bagi desa ini kedepannya nanti.</p>
<br>
<div class="row">
	<div class="col-md-8">

        <?php echo form_open('pages/create', 'class="form-horizontal"'); ?>
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
            <label class="col-md-4 control-label">Pesan</label>
            <div class="col-md-8">
              <textarea class="form-control" name="pesan" rows="4" placeholder="Tulis Masukan Anda . . . " required="required"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="kirim" class="btn btn-primary" value="Kirim">
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
      <?php foreach ($feedback as $row ) {
      # code...
        echo '<hr>
            <div class="item">
              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right">
                    <i class="fa fa-clock-o"> '.$row->waktu.'</i>
                  </small>
                  '.$row->nama.' | 
                  '.$row->email.'
                </a>
                <br>
                '.$row->pesan.'
              </p>
            </div>
            <br>
            <br>';
      }
     ?>
      <br>