<h1>Umpan Balik</h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-reply"> Feedback</i></li>
    </ol>
    <hr>
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
              <a class="btn btn-default pull-right" href="#"><i class="fa fa-reply"> Reply</i></a>
              <a class="btn btn-default pull-right" href="'.base_url().'admin/delete/'.$row->id.'"><i class="fa fa-trash"> Delete</i></a>
            </div>
            <br>
            <br>';
      }
     ?>