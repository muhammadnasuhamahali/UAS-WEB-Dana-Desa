<h1>Tambahkan Pembangunan</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>admin/keuangan"><i class="fa fa-money"> Keuangan</i></a></li>
      <li class="active"><i class="fa fa-pencil"> Input Keuangan</i></li>
    </ol>
    <hr>
    <a class="btn btn-default" href="<?php echo base_url(); ?>admin/keuangan"><i class="fa fa-arrow-circle-left"> Back</i></a>
    <br>
    <div class="row">
    <?php echo form_open('input/keuangan', 'class="form-horizontal"' ); ?>
        <div class="form-group">
          <label class="col-md-3 control-label">Transaksi</label>
          <div class="col-md-8">
            <select class="form-control" name="transaksi">
              <option>-- pilih --</option>
              <option value="Pemasukan">Pemasukan</option>
              <option value="Pengeluaran">Pengeluaran</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Nominal</label>
          <div class="col-md-8">
            <input type="text" name="nominal" class="form-control" placeholder="Rp: 0;">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Keterangan</label>
          <div class="col-md-8">
            <textarea class="form-control" name="keterangan" rows="4" placeholder="Keterangan . . ."></textarea>
          </div>
        </div>
        <input type="hidden" name="saldo" value="<?php foreach ($uang as $sld ) {
          echo $sld->saldo;
        } ?>">
        <div class="form-group">
          <label class="col-md-3 control-label">&nbsp;</label>
          <div class="col-md-8">
            <input type="submit" name="save" class="btn btn-primary" value="Save">
          </div>
        </div>
      </form>
    </div>
    <br>
    <br>
