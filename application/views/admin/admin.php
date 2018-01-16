<h1>Daftar Admin</h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-group"> Admin</i></li>
    </ol>
    <hr>

    <a class="btn btn-default" href="<?php echo base_url(); ?>admin/input/admin"><i class="fa fa-plus"> Add Admin</i></a>
    <br>
    <br>
    <table class="table table-striped table-hover">
      <tr>
        <th>NO.</th>
        <th>Tanggal Daftar</th>
        <th>Nama</th>
        <th>Email</th>
      </tr>
      <?php $no = 0; foreach ($admin as $key) {
        $no++;
        echo '
          <tr>
            <td>'.$no.'</td>
            <td>'.$key->tgl_daftar.'</td>
            <td>'.$key->nama.'</td>
            <td>'.$key->email.'</td>
          </tr>
        ';
      } ?>
    </table>
    <br>