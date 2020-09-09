<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <title>Forum Diskusi</title>
  </head>
  <body>
  	<br/><br/>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <a href="<?= base_url('Diskusi/index');?>" style="color: orange">&nbsp<i class="fas fa-long-arrow-alt-left" style="color: orange"></i>kembali</a>
              <div class="card-body">
                <div class="col">
                   <div class="row">
    <div class="col-md-7">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-tambah">
                  Tambah Diskusi
                </button>
    </div>
    <div class="col-md-3">
       <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    </div>
    <div class="col-md-2">
       <div class="form-group">
    <select class="form-control" name="kategori">
      <option>Filter By</option>
      <option>Jembatan</option>
      <option>Gedung</option>
      <option>Jalan</option>
    </select>
</div>
    </div>
  </div>
                <br/>
                <br/>
               <div class="container">
  <div class="row">
    <div class="col-sm-1">
    <img src="<?= base_url('assets/');?>img/foto3x4.png" width="50" class="rounded-circle"></div>
    <div class="col-sm-11">

      <small>Edwina</small>&nbsp<small style="color: orange">-(<?= date('d-m-Y', strtotime($diskusi['tanggal']));?>)</small> 
      <h5><?=$diskusi['judul'];?></h5>
      <p><?=$diskusi['deskripsi']?></p>
       <?php if ($diskusi['file']!=null):?>
             <img src="<?= base_url('uploads/') . $diskusi['file']; ?>" width="100">
             <a href="<?=base_url('uploads/') . $diskusi['file']; ?>" class="btn btn-sm btn-outline-danger" target="_blank">
                                                        <i class="fa fa-file-alt"></i>
                                                    </a>
               <?php else:?>
              <?php endif;?>
     
      <br/>
      <br/>
      <form enctype="multipart/form-data" action="<?= base_url('Diskusi/tambahJawaban/'.$diskusi['id_diskusi']); ?>" method="post">
       <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="jawaban"  placeholder="Tulis komentar anda disini.."></textarea>
  </div>
  <div class="row">
    <div class="col-sm-11"></div>
    <div class="col-sm-1"><input type="submit" class="btn btn-warning" value="Balas"></div>
  </div>
</form>
  <br/>
  <h6><?=$diskusi['jumlah'];?> Jawaban</h6>
       <?php
                         
                        
                        foreach ($jawaban as $j) :
                              ?>
       <div class="card">
        <br/>
      <div class="media">
   &nbsp&nbsp
        <img src="<?= base_url('assets/');?>img/jawaban.jpeg" width="50" class="rounded-circle">&nbsp &nbsp
  <div class="media-body">
       <small>Mirna</small>&nbsp<small style="color: orange">-(<?= date('d-m-Y', strtotime($j['tanggal']));?>)</small> 
      <p><?=$j['jawaban'];?></p>
  </div>
</div>
<br/>
</div>
<br/>
 <?php
                            endforeach; 
             ?>
    </div>
  </div>
             
	 </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

   <div class="modal" tabindex="-1" id="modal-tambah">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
       <form enctype="multipart/form-data" action="<?= base_url('Diskusi/tambahDiskusi'); ?>" method="post" >
        <div class="form-group">
             <h5 class="modal-title">Tambah Diskusi</h5>
        </div>
       
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" placeholder="Tulis Judul Diskusi disini...">
  </div>
  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="deskripsi"  placeholder="Deskripsi disini..."></textarea>
  </div>
  <div class="form-group">
  <input type="file" class="dropify" name="file" data-allowed-file-extensions="png jpg jpeg pdf docx xlsx xls doc" data-max-file-size="20M">
</div>
    <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
      <option>Kategori</option>
      <option>Jembatan</option>
      <option>Gedung</option>
      <option>Jalan</option>
    </select>
</div>
<div class="row">
  <div class="col">
    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
  </div>
    <div class="col">
      <input type="submit" class="btn btn-warning btn-block" value="Kirim"></input>
    </div>
 </div>
</form>
      </div>
     
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  </body>

</html>