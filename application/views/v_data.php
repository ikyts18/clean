<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/materialize/css/materialize.min.css') ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
        section, footer{
            padding: 5px 0;
        }
    </style>
    <title>Halaman Booking</title>
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
        <h4><?php echo $judul?></h4>
        <a href="<?php echo base_url();?>web/create" class="btn btn-success">Tambah Data</a>
    </div>
<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Tanggal Booking</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($bio as $b) {?>
        <tr>
            <td><?php echo $b->nama?></td>
            <td><?php echo $b->no_telepon?></td>
            <td><?php echo $b->alamat?></td>
            <td><?php echo $b->tgl_booking?></td>
            <td>
                <a href="<?php echo base_url(); ?>web/edit/<?php echo $b->id; ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo base_url();?>web/hapus/<?php echo $b->id;?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

    <?php }?>
</main>

</table>
<br>
<a href="<?php echo base_url();?>web/create" class="btn btn-success">Kembali</a>

</body>
</html>