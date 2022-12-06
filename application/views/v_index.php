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

    <title>Landing Page</title>
</head>
<body>
    <!-- NAVBAR -->
    <div class="navbar-fixed">
        <nav class="light-blue">
            <div class="container">
                <div class="nav-warapper">
                <a href="" class="brand-logo">Top Clean</a>

                <ul class="right hide-on-med-and-down">
                    <li><a class="list" href="#beranda">Beranda</a></li>
                    <li><a class="list" href="#tentang">Tentang</a></li>
                    <li><a class="list" href="#kegiatan">Kegiatan</a></li>
                    <li><a class="list" href="#booking">Booking</a></li>
                    <li><a class="list" href="#penghargaan">Penghargaan</a></li>
                    <li><a class="list" href="#hubungikami">Hubungi Kami</a></li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- SLIDER -->
    <div id="beranda" class="slider">
        <ul class="slides">
            <li>
                <img src="<?php echo base_url('assets/slider/foto5.png'); ?>">
                <div class="caption">
                    <h3>Welcome To Top Clean</h3>
                    <h5>Services - Manufacture - dan Lain-lain</h5>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url('assets/slider/foto1.png'); ?>">
                <div class="caption black-text">
                    <h3>Welcome To Top Clean</h3>
                    <h5>Services - Manufacture - dan Lain-lain</h5>
                </div>
            </li>

        </ul>
    </div>

    <!-- Conten about us -->
    <section id="tentang" class="tentang scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center">Tentang</h3>

                <div class="col m4">
                    <h5>Tentang Top Clean</h5>
                    <p>Didirikan pada tahun 2022, Top Clean merupakan perusahaan yang menyediakan jasa kebersihan lingkungan
                        umumnya pada perusahaan dan juga rumah. Mengingat banyak sekali keluarga yang cukup disibukkan oleh
                        aktivitas bekerjanya sehari - hari, kami siap untuk memberikan pelayanan prima dalam membersihkan rumah
                        dan juga kantor secara menyeluruh tanpa ada jenis kotoran yang tersisa.
                    </p>
                </div>
                <div class="col m4">
                    <h5>Visi</h5>
                    <p>Memberikan jasa service yang optimal dan menjadikan kepuasan pelanggan adalah prioritas kami.</p>
                </div>
                <div class="col m4">
                    <h5>Misi</h5>
                    <p>1. Melayani dengan sepenuh jiwa dan sepenuh hati, dengan dukungan management team yang profesional</p>
                    <p>2. Mendorong pertumbuhan usaha yang berkesinambungan dalam rangka mencapai kesejahteraan karyawan dan senantiasa meningkatkan tanggung jawab sosial</p>
                </div>
            </div>
        </div>
    </section>

    <!-- conten kegiatan perusahaan -->
    <section id="kegiatan" class="kegiatan brown lighten-5">
        <div class="container">
            <div class="row">
            <br>
                <h3 class="center">Kegiatan Perusahaan</h3>
                <div class="col m4">
                    <h5>Activities</h5>
                    <p>
                        <ol>
                            <li>Membersihkan Ruangan, Toilet, Halaman, dsb</li>
                            <li>Penataan Barang Di Dalam Ruangan</li>
                            <li>Mengutamakan Safety Dalam Proses Cleaning</li>
                        </ol>
                    </p>
                </div>
                <div class="col m8">
                    <div class="row">
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning1.jpeg'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning5.jpeg'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning3.jpg'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning4.jpg'); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning6.jpg'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning4.jpg'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning5.jpeg'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/cleaning7.jpg'); ?>">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>

    <!-- conten booking -->
    <section id="booking" class="booking">
        <div class="container">
            <div class="row">
            <br>
                <h3 class="center">Booking</h3>
                <div class="col m4">
                    <h5>Tata Cara Booking</h5>
                    <p>
                        <ol>
                            <li>Klik booking</li>
                            <li>Isi form yang telah disediakan</li>
                            <li>Klik simpan</li>
                            <li>Data tersimpan, mohon ditunggu sampai tim kami menghubungi anda</li>
                            <li>Selesai</li>
                        </ol>
                    </p>
                    
                </div>
                
            </div>
            <a href="<?php echo base_url();?>web/create" class="btn btn-success">Booking</a>
            <br>
            <br>
            <h7>Note :</h7>
            <br>
            <h7 class="brown lighten-5">Laman booking hanya diperuntukkan bagi Anda yang tidak ingin terikat kontrak kerja sama.</h7>
            <br>
            <h7 class="brown lighten-5">Silahkan hubungi kontak dibawah jika ingin mengajukan kerja sama.</h7>
        </div>
    <br>
    </section>

    <!-- Content Penghargaan -->
    <section id="penghargaan" class="penghargaan brown lighten-5">
        <div class="container">
            <div class="row">
            <br>
                <h3 class="center">Penghargaan</h3>
                <br>
                <div class="col m12">
                    <div class="row">
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/sertif1.png'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/sertif2.png'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/sertif4.png'); ?>">
                        </div>
                        <div class="col m3 s12">
                            <img style="border-radius: 10px;" class="responsive-img materialboxed" src="<?php echo base_url('assets/portofolio/sertif3.png'); ?>">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>

    <!-- Content hubungi kami -->

    <section id="hubungikami" class="hubungikami center">
        <div class="container ">
            <div class="row ">
                <h3>Hubungi Kami</h3>
                <br>
                <div class="col m4 s12 ">
                    <div class="card-panel  light-blue center white-text">
                        <i class="material-icons medium">email</i>
                        <h4>Contact</h4>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h5>Hubungi Kami</h5></li>
                        <li class="collection-item">Fax : 021 - 88 29 676</li>
                        <li class="collection-item">No. Telp : 0888-9934-281</li>
                        <li class="collection-item">Email : info@topclean.co.id</li>

                    </ul>   
                </div>
                <div class="col m4 s12">
                    <div class="card-panel  light-blue center white-text">
                        <i class="material-icons medium">location_on</i>
                        <h4>Kantor Pusat</h4>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h5>CV. Top Clean</h5></li>
                        <li class="collection-item">Jl. Kusuma Utara X Blok 34C No.3</li>
                        <li class="collection-item">Didirikan sejak 01 Januari 2022</li>
                        <li class="collection-item">Jawa Barat - Indonesia</li>

                    </ul>   
                </div>
                <div class="col m4 s12">
                    <div class="card-panel  light-blue center white-text">
                        <i class="material-icons medium">build</i>
                        <h4>Service</h4>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h5>Pelayanan</h5></li>
                        <li class="collection-item">Cleaning</li>
                        <li class="collection-item">Wash</li>
                        <li class="collection-item">Cuting Grass, etc.</li>

                    </ul>   
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer class="light-blue white-text center">
        <p>Copyright © 2022 . Web Programming II - Kelompok 1</p>
    </footer>






<script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js'); ?>
"></script>

<script type="text/javascript">
    //slider
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        duration : 400,
        interval : 5000
    });
</script>
</body>
</html>