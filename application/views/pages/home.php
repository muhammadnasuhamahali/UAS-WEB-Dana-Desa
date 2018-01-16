    <h1>Selamat datang!</h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-dashboard"> Home</i></li>
    </ol>
    <hr>
    <div id="slider" class="nivoSlider">
      <a href="#"><img src="<?php echo base_url(); ?>assets/images/slider/img_1.jpg" alt="slide 1" /></a>
      <a href="#"><img src="<?php echo base_url(); ?>assets/images/slider/img_2.jpeg" alt="slide 2" /></a>
      <a href="#"><img src="<?php echo base_url(); ?>assets/images/slider/img_3.png" alt="slide 3" /></a>
    </div>
    <br>
    <p>Hai para warga desa yang saya hormati, disini kami menyediakan layanan tentang info dana desa. Anda juga dapat menyampaikan kritik dan saran anda disini. Semoga website ini dapat bermanfaat bagi desa ini kedepannya nanti.</p>
    <br>
    <strong>Pembangunan Terbaru</strong> | <a href="<?php echo base_url(); ?>pembangunan">Lihat semua pembangunan</a>
    <?php
        foreach($bangun as $row){
        echo '
        <h3>'.$row->bangun.'</h3>
        	<div class="row">
            <div class="col-md-3">
              <img class="post-thumb"  src="'.base_url().'assets/images/pembangunan/'.$row->image.'">
            </div>
            <div class="col-md-8">
              <small class="post-date" ><p class="pull-right">Posted on: '.$row->tanggal.'</p>
              <strong>Anggaran : '.number_format($row->anggaran, "0", ",", ".").'</strong></small><br>
            '.word_limiter($row->keterangan, 60).'
            <br><br>
            <p><a class="btn btn-default" href="'.site_url().'bangun/'.$row->id.'">Read More</a></p>
            </div>
          </div>
          '; } ?>
          <br>

    <strong>Agenda Terbaru</strong> | <a href="<?php echo base_url(); ?>agenda">Lihat semua agenda</a>
    <br>
    <br>
    <?php
        foreach($agenda1 as $row){
        echo '
        	<div class="row">
              <div class="col-md-11">
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
                  <div class="panel-footer">Lokasi : '.$row->lokasi.' <a class="btn btn-default" href="'.site_url().'viewagenda/'.$row->id.'" > Read More </a>
                  </div>
                </div>
              </div>
            </div>'; } ?>
        <br>
        <br>
        <center>
        <div class="footer-social-icons">
          <h4 class="_14">Follow us on</h4>
          <ul class="social-icons">
              <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
              <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
              <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
              <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
              <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
              <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
          </ul>
      </div></center>
