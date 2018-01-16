<h1>Agenda Desa</h1>
<ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-calendar"> Agenda</i></li>
    </ol>
<hr>
<a class="btn btn-default" href="<?php echo base_url(); ?>admin/input/agenda"><i class="fa fa-pencil"> Input Agenda</i></a>
<br>
<br>
    <?php
        foreach($agenda as $row){
        echo '
        	<div class="row">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="panel panel-success">
                  <div class="panel-heading">'.$row->agenda.' <small class="pull-right">'.$row->tanggal.'</small></div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4" style="padding-right: 5px; box-shadow: 2px;"><img class="post-thumb" src="'.base_url().'assets/images/agenda/'.$row->image.'"></div>
                      <div class="col-md-7" style="padding: 10px;">
                        <p>Anggaran Rp: '.number_format($row->anggaran, "0", ",", ".").'</p>
                        <p>'.$row->keterangan.'</p>
                        <br>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">Lokasi : '.$row->lokasi.' . <a class="btn btn-default" href="#" > Read More </a>
                  </div>
                </div>
              </div>
            </div>'; } ?>