<?php
  foreach($agenda as $row){
  echo '
  <h3>'.$row->agenda.'</h3>
      <ol class="breadcrumb">
    <li><a href="'.base_url().'"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="'.base_url().'agenda"><i class="fa fa-calendar"></i> Agenda</a></li>
    <li class="active"><i class="fa fa-calendar"> '.$row->agenda.'</i></li>
  </ol>
  <hr>
        <small class="post-date" >Posted on: '.$row->tanggal.'</small><br>
    <img src="'.base_url().'assets/images/agenda/'.$row->image.'"><br>
      <small class="post-date"><p><strong>Anggaran : '.number_format($row->anggaran, "0", ",", ".").'</strong></p></small><br>
      '.$row->keterangan.'
      <br><br>
    '; } ?>
<hr>
  <?php if($comments) : ?>
  <?php foreach($comments as $comment) : ?>
    <div class="well">
      <h5><?php echo $comment['komentar']; ?> [by <strong><?php echo $comment['nama']; ?></strong>]</h5>
    </div>
  <?php endforeach; ?>
<?php else : ?>
  <p>No Comments To Display</p>
<?php endif; ?>
<br>
<hr>
<div class="row">
  <div class="col-md-10">
  <?php echo form_open('comment/agenda', 'class="form-horizontal"'); ?>
          <input type="hidden" name="id_agenda" value="<?php foreach ($agenda as $row) { echo $row->id; } ?>">
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
            <label class="col-md-4 control-label">Komentar</label>
            <div class="col-md-8">
              <textarea class="form-control" name="komentar" rows="4" placeholder="Tulis Komentar Anda . . . " required="required"></textarea>
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