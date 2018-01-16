<h1>Info Keuangan!</h1>
<ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-money"> Keuangan</i></li>
    </ol>
    <hr>
    <br>
    <p class="pull-right">Jumlah Saldo saat ini : Rp: <?php foreach ($keuang as $key) {
      echo number_format($key->saldo, "0", ",", ".");
    } ?> ;</p>
    <table class="table table-striped table-hover">
      <tr>
        <th>NO.</th>
        <th>Tanggal</th>
        <th>Transaksi</th>
        <th>Nominal</th>
        <th>Saldo</th>
        <th>Opsi</th>
      </tr>
      <?php $no = 0;
           foreach($keuangan as $row){
             $no++; 

            echo '
          <tr>
            <td>'.$no.'</td>
            <td>'.$row->tanggal.'</td>
            <td>'.$row->aksi.'</td>
            <td>'.$row->nominal.'</td>
            <td>'.$row->saldo.'</td>
            <td><button class="btn btn-default" data-toggle="modal" data-target="#myModal'.$row->id.'">More</button></td>
          </tr>
          <div class="modal fade" id="myModal'.$row->id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4>'.$row->aksi.'</h4>   Rp: '.$row->nominal.';
                </div>
                  <div class="modal-body">'.$row->keterangan.'
                  <br>
                  Jumalah Saldo adalah : Rp: '.number_format($row->saldo, "0", ",", ".").'-
                  </div>
                  

                <div class="modal-footer">
                  <p class="pull-left">'.$row->tanggal.' </p>
                  <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">close</button>
                </div>
              </div>
            </div>
          </div>
          '; } ?>
    </table>
    <br>
    <br>
