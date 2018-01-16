<h1>Info Pembangunan!</h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-building-o"> Pembangunan</i></li>
    </ol>
    <hr>
    <a class="btn btn-default" href="<?php echo base_url(); ?>admin/input/pembangunan"><i class="fa fa-pencil"> Input Pembangunan</i></a>
    <br>
    <?php
        foreach($pembangunan as $row){
        echo '
        <h3>'.$row->bangun.'</h3>
        	<div class="row">
            <div class="col-md-3">
              <img class="post-thumb"  src="'.base_url().'assets/images/pembangunan/'.$row->image.'">
            </div>
            <div class="col-md-8">
              <small class="post-date" ><p class="pull-right">Posted on: '.$row->tanggal.'</p>
              <strong>Anggaran : '.number_format($row->anggaran, "0", ",", ".").'</strong></small><br>
            '.$row->keterangan.'
            <br><br>
            <p><a class="btn btn-default" href="'.site_url().'bangun/'.$row->id.'">Read More</a></p>
            </div>
          </div>
          <br><br>
          '; } ?>