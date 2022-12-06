<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.0.min.js">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/materialize/css/materialize.min.css') ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<div class="navbar-fixed">
        <nav class="light-blue">
            <div class="container">
                <div class="nav-warapper">
                <a href="" class="brand-logo">Top Clean</a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="list" href="<?php echo base_url().'web/index/#beranda' ?>">Beranda</a></li>
                    <li><a class="list" href="<?php echo base_url().'web/index/#tentang' ?>">Tentang</a></li>
                    <li><a class="list" href="<?php echo base_url().'web/index/#kegiatan' ?>">Kegiatan</a></li>
                    <li><a class="list" href="<?php echo base_url().'web/index/#booking' ?>">Booking</a></li>
                    <li><a class="list" href="<?php echo base_url().'web/index/#penghargaan' ?>">Penghargaan</a></li>
                    <li><a class="list" href="<?php echo base_url().'web/index/#hubungikami' ?>">Hubungi Kami</a></li>
                </ul>
                </ul>
                </div>
            </div>
        </nav>
    </div>

<main role="main" class="container">
    <div class="card">
        <div class="card-header"><h4><?php echo $judul?></h4></div>
			<div class="card-body">
			<?php   
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>web/update">
				<input type="hidden" name="id" id="id" value="<?php echo $booking->id; ?>"/>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $booking->nama; ?>" class="form-control" id="nama" name="nama">
				</div>

				<div class="form-group">
					<label for="no_telepon">No Telepon</label>
					<input type="text" value="<?php echo $booking->no_telepon; ?>" class="form-control" id="no_telepon" name="no_telepon">
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"><?php echo $booking->alamat; ?></textarea>
				</div>

                <div class="form-group">
                <label for="tgl_booking">Tanggal Booking</label>
					<input type="text" value="<?php echo $booking->tgl_booking; ?>" class="form-control" id="tgl_booking" name="tgl_booking">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
				<a href="<?php echo base_url('web/bio');?>" class="btn btn-danger">Batal</a>
			</form>
			</div>
		</div>
	</div>
</main>
</body>
</html>