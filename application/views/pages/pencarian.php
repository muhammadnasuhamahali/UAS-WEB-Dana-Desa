    <h1>Menampilkan Pencarian!</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-search"> Pencarian</i></li>
    </ol>
    <hr>
    <?php
        foreach($caripembangunan as $data){
        echo '
        <h3>'.$row->bangun.'</h3>
        	<div class="row">
            <div class="col-md-3">
              <img class="post-thumb"  src="'.base_url().'assets/images/pembangunan/'.$data->image.'">
            </div>
            <div class="col-md-8">
              <small class="post-date" ><p class="pull-right">Posted on: '.$data->tanggal.'</p>
              <strong>Anggaran : '.number_format($data->anggaran, "0", ",", ".").'</strong></small><br>
            '.$data->keterangan.'
            <br><br>
            <p><a class="btn btn-default" href="'.site_url().'bangun/'.$data->id.'">Read More</a></p>
            </div>
          </div>
          '; } ?>
<br>
<hr>
<br>
<br>
<?php
        foreach($cariagenda as $agenda){
        echo '
        	<div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="panel panel-success">
                  <div class="panel-heading">'.$agenda->agenda.' <small class="pull-right">'.$agenda->tanggal.'</small></div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4" style="padding-right: 5px; box-shadow: 2px;"><img class="post-thumb" src="'.base_url().'assets/images/agenda/'.$agenda->image.'"></div>
                      <div class="col-md-7" style="padding: 10px;">
                        <p>Anggaran Rp: '.number_format($agenda->anggaran, "0", ",", ".").'</p>
                        <p>'.$agenda->keterangan.'</p>
                        <br>
                        
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">Lokasi : '.$row->lokasi.' <a class="btn btn-default" href="'.site_url().'viewagenda/'.$row->id.'" > Read More </a>
                  </div>
                </div>
              </div>
            </div>'; } ?>