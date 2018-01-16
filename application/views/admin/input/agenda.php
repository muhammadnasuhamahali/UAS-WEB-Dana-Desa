<h1>Tambahkan Agenda</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>admin/agenda"><i class="fa fa-calendar"> Agenda</i></a></li>
      <li class="active"><i class="fa fa-pencil"> Input Agenda</i></li>
    </ol>
    <hr>
    <a class="btn btn-default" href="<?php echo base_url(); ?>admin/agenda"><i class="fa fa-arrow-circle-left"> Back</i></a>
    <br>
    <div class="row">
    <?php echo form_open_multipart('input/agenda', 'class="form-horizontal"' ); ?>
      <div class="col-sm-5">
          <label for="input-file-french-1">"Tambahkan Foto"</label>
          <input type="file" id="input-file-french-1" name="userfile" class="dropify-fr" data-default-file="" />
          <br />
      </div>
      <div class="col-sm-6">
        
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tanggal" class="form-control">
            </div>
            <div class="form-group">
              <label>Agenda</label>
                <input type="text" name="agenda" class="form-control" placeholder="Acara" required="required">
            </div>
            <div class="form-group">
              <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi . ." required="required">
            </div>
            <div class="form-group">
              <label>Anggaran</label>
                <input type="text" name="anggaran" class="form-control" placeholder="Rp: 0;" required="required">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="5" placeholder="Tentang pembangunan.."></textarea>
            </div>
            <input type="hidden" name="saldo" value="<?php foreach ($uang as $sld ) {
              echo $sld->saldo;
            } ?>">
            <div class="form-group">
              <label class="col-md-4 control-label">&nbsp;</label>
              <div class="col-md-8">
                <input type="submit" name="save" class="btn btn-primary" value="Submit">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">&nbsp;</label>
              <div class="col-md-8">
              </div>
            </div>
        </div>
      </form>
    </div>
    <br>
    <br>
