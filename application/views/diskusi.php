<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/dropify.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/dropify.min.css">

    <title>Forum Diskusi</title>
  </head>
  <body>
  	<br/><br/>
   <section class="content">
      <div class="container-fluid">
          <?= $this->session->flashdata('pesan'); ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
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
               
                <br/><br/>
            <?php   
                        $no = 0;
                        foreach ($diskusi as $d) :
	                            ?>
	                            <br/>
            <div class="card">
              <div class="form-group">
                <br/>
		        	<div class="row">
                <br/>
	  						<div class="col-md-1">
	  							 &nbsp
          						<img src="<?= base_url('assets/');?>img/foto3x4.png" width="50" class="rounded-circle">
        
	  						</div>
	 						<div class="col-md-9">
                <small>Edwina </small>&nbsp<small style="color: orange">-(<?= date('d-m-Y', strtotime($d['tanggal']));?>)</small> 
                <p><?=$d['judul'];?></p>
              </div>

	 						<div class="col-md-2">
                <br/>
                <div class="row">
	 							 <a href="<?= base_url('Diskusi/detail/').$d['id_diskusi'];?>"><i class="fas fa-comment-alt fa-2x" style="color: orange"></i></a>&nbsp
	 							 <h3><?= $d['jumlah']; ?></h3>
                </div>
	 						</div>
		   </div>
			</div>
    </div>
			 <?php
                            endforeach; 
             ?>
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
     <script src="<?= base_url('assets/'); ?>js/jquery.1.11.3.js"></script>
     <script src="<?= base_url('assets/'); ?>js/dropify.js"></script>
    <script src="<?= base_url('assets/'); ?>js/dropify.min.js"></script>

    <script type="text/javascript">
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $(".dropify").dropify();
  });

    </script>
  </body>

</html>