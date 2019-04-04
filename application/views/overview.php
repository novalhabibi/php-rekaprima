<?php
$setting=$this->db->get('setting')->row();
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  	<!-- start: Meta -->
  <meta charset="utf-8">
  <meta name="description" content="Lenrekaprima.co.id" />
  <meta name="keywords" content="Lenrekaprima.co.id" />
  <meta name="author" content="PT Len Rekaprima Semesta" />
  <meta property="og:type" content="business.business">
  <meta property="og:title" content="PT Len Rekaprima Semesta">
  <meta property="og:description" content="Sebagai Anak Perusahaan PT.Len Industri (Persero)">
  <meta property="og:url" content="https://lenrekaprima.co.id/">
  <meta property="og:image" content="<?php echo base_url('assets/img/lrs-logo.png') ?>">
  <meta property="business:contact_data:street_address" content="Jl. Soekarno Hatta No. 293">
  <meta property="business:contact_data:locality" content="Bandung">
  <meta property="business:contact_data:region" content="Jawa Barat">
  <meta property="business:contact_data:postal_code" content="40235">
  <meta property="business:contact_data:country_name" content="Indonesia">
    <!-- end: Meta -->
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="google-site-verification" content="8Bx47pDr8O2O2xjd70u0QNe8eYR9qqEacilPvkYyKfE" />

    <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon" />

    <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate/animate.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') ?>">

    <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-elements.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-blog.css') ?>">

    <!-- Skin CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/default_edit.css') ?>">

    <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">

	<title>Home | <?= $setting->title ?></title>
	
	<!-- Head Libs -->
  <script src="<?php echo base_url('assets/vendor/modernizr/modernizr.min.js') ?>"></script>

  <!-- Slider Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/slider-bootstrap/slider-bootstrap_edit.css') ?>">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20166082-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-20166082-2');
  </script>
  <style>
    div.static {
      position: absolute;
      top: 180px;
      left: 280px;
      z-index: 1;
    }
  </style>
  <style>
	   .table-container
		{
		width: 100%;
		overflow-y: auto;
		_overflow: auto;
		margin: 0 0 1em;
		}
		
    </style>
</head>

<body>
  <div class="body">

  <!-- header -->
  <?php $this->load->view('_includes/header.php') ?>
  <!-- end header -->



<div class="main" role="main">
  <div style="margin-bottom:80px">
    <div id="carousel-example-generic" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_50.jpg') ?>" class="img-responsive" />
            <div class="carousel-caption animated fadeInLeft">
              <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                SUPPORT
              </h2>
              <h4 class="slide-text-desc" data-animation="animated bounceInUp">
               <h4 style="text-align: left;"><span style="color: #ffffff;">Len Rekaprima Semesta selalu memastikan untuk menjaga fungsionalitas peralatan sistem kereta api secara berkala.<br /></span></h4>
              </h4>
            </div>
        </div>
        <div class="item ">
          <img src="<?php echo base_Url('assets/media/image/slider/Rekaprima_44.jpg') ?>" class="img-responsive" />
            <div class="carousel-caption animated fadeInLeft">
              <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                MAINTAIN
              </h2>
              <h4 class="slide-text-desc" data-animation="animated bounceInUp">
               <h4><span style="color: #ffffff;">Menjaga sistem yang didukung oleh PT. Len Rekaprima Semesta sebagai anak perusahaan dari PT. Len Railway Systems</span></h4>
              </h4>
            </div>
        </div>
        <div class="item ">
          <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_43.jpg') ?>" class="img-responsive" />
            <div class="carousel-caption animated fadeInLeft">
              <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                AGILE
              </h2>
              <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                <h4><span style="color: #ffffff;">Menjadi mitra kelas dunia yang paling dapat diandalkan untuk Sistem Kereta Api</span></h4>
              </h4>
            </div>
        </div>
        <div class="item ">
          <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_47.jpg') ?>" class="img-responsive" />
            <div class="carousel-caption animated fadeInLeft">
              <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                RESPONSIBLE
              </h2>
              <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                <h4><span style="color: #ffffff;">Len Rekaprima Semesta selalu siap untuk memberikan kualitas yang sesuai dengan permintaan pelanggan, serta memberikan pelayanan yang terbaik</span></h4>
              </h4>
            </div>
        </div>
        <div class="item ">
          <img src="<?php echo base_url('assets/media/image/slider/Rekaprima_46.jpg') ?>" class="img-responsive" />
            <div class="carousel-caption animated fadeInLeft">
              <h2 class="slide-text-heading" data-animation="animated bounceInLeft">
                TOTAL
              </h2>
              <h4 class="slide-text-desc" data-animation="animated bounceInUp">
                <h4><span style="color: #ffffff;">Berkontribusi dalam meningkatkan produktivitas dan mobilitas orang melalui Sistem Kereta Api yang andal dan aman</span></h4>
              </h4>
            </div>
        </div>
      </div><!-- /.carousel-inner -->
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
  </div><!-- /.container -->




  
<div class="container">
    <div class="row">
      <div class="col-md-12 center">
        <div class="heading heading-border heading-middle-border heading-middle-border-center">
          <div class="scrollme animateme"
				    data-when="enter"
				    data-from="0.7"
				    data-to="0.05"
				    data-crop="false"
				    data-opacity="0"
				    data-scale="2.5">
          <h1><strong>HISTORY</strong></h1>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumb-info custom-thumb-info-4">
          <div class="animateme scrollme" 
            data-when="enter" 
            data-from="0.7" 
            data-to="0.05" 
            data-opacity="0" 
            data-translatex="-400">
            <img src="<?php echo base_url('assets/img/History1.png') ?>" class="img-responsive">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumb-info custom-thumb-info-4">
          <div class="animateme scrollme" 
            data-when="enter" data-from="0.5" 
            data-to="0.05" 
            data-opacity="0" 
            data-translatey="-400">
            <img src="<?php echo base_url('assets/img/History2.png') ?>" class="img-responsive">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumb-info custom-thumb-info-4">
          <div class="animateme scrollme" 
            data-when="enter" data-from="0.5" 
            data-to="0.05" 
            data-opacity="0" 
            data-translatey="400">
            <img src="<?php echo base_url('assets/img/History3.png') ?>" class="img-responsive">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumb-info custom-thumb-info-4">
          <div class="animateme scrollme" 
            data-when="enter" data-from="0.7" 
            data-to="0.05" 
            data-opacity="0" 
            data-translatex="400">
            <img src="<?php echo base_url('assets/img/History4.png') ?>" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-12 center">
        <div class="heading heading-border heading-middle-border heading-middle-border-center">
          <div class="scrollme animateme"
				    data-when="enter"
				    data-from="0.7"
				    data-to="0.05"
				    data-crop="true"
				    data-opacity="0"
				    data-scale="2">
          <h1><strong>SERVICES</strong></h1>
          </div>
        </div>
      </div>
      <div class="col-md-12 center">
      <div class="animateme scrollme" 
            data-when="enter" 
            data-from="0.7" 
            data-to="0.05" 
            data-opacity="0" 
            data-scale="0">
          <img src="<?php echo base_url('assets/img/lengif.gif') ?>" style="width: 60%">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrap_load">
<div class="container">
  <div class="row">
    <div class="col-md-12 center">
      <div class="heading heading-border heading-middle-border heading-middle-border-center">
        <h1 class="animateme"
        data-when="enter"
        data-from="0.5"
        data-to="0"
        data-opacity="0"
        data-translatex="-200"
        data-rotatez="90"><strong>COMPANY</strong> PROFILE</h1>
      </div>
    </div>
  </div>
  <div class="row mt-md mb-xl">
    <div class="col-md-6">
      <div class="thumb-info custom-thumb-info-4">
        <div class="animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-200">
      <video width="100%" height="315px" poster="<?php echo base_url('assets/img/poster_rekaprima.jpg') ?>" controls><source src="<?php echo base_url('assets/video/Video_Compro_Rekaprima.mp4') ?>" type="video/mp4"></video>
      </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumb-info custom-thumb-info-4">
        <p class="justify animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="400">PT. Len Rekaprima Semesta adalah perusahaan yang sedang berkembang dan merupakan anak perusahaan dari salah satu Badan Usaha Milik Negara (BUMN) PT. Len Industri (Persero), yang bergerak dibidang Operation & Maintenance Perkeretaapian.
Guna menunjang kebutuhan sumber daya manusia dan dengan berkembang pesatnya dunia bisnis, PT. Len Rekaprima Semesta mengundang individu - individu yang berkualitas untuk dapat bergabung dan maju bersama perusahaan kami.
Kami tidak pemah memungut biaya apapun dalam proses rekrutmen. Kami  tidak pernah bekerja sama dengan travel agent I biro perjalanan tertentu dalam proses rekrutmen.  Apabila Anda diminta untuk membayar sejumlah uang dalam bentuk pembayaran tiket pesawat dan hotel atau akomodasi lainnya agar diabaikan.  Jangan memberikan data pribadi atau data keuangan Anda kepada  slapapun.  Jika membutuhkan klarifikasi lebih lanjut dapat langsung menghubungi kami</p>
      </div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-12 center">
      <div class="heading heading-border heading-middle-border heading-middle-border-center">
        <h1 class="animateme scrollme" 
          data-from="0.5"
				  data-to="0"
				  data-crop="false"
				  data-opacity="0"
				  data-scale="1.5"><strong>BISNIS</strong> KAMI</h1>
      </div>
    </div>
  </div>
  <div class="row mt-md mb-xl">
    <?php
    $this->db->order_by('id', 'DESC');
    $data = $this->db->get('maintenances',1)->result();
    foreach ($data as $maintenance) {
      
    ?>
    <div class="col-md-4">
      <div class="thumb-info custom-thumb-info-4 animateme scrollme" 
      data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-200">
        <div class="thumb-info-wrapper"><img src="<?= $maintenance->gambar_maintenance ?>" class="img-responsive" /></div>
          <div class="thumb-info-caption custom-box-shadow">
            <div class="thumb-info-caption-text">
              <h4 class="text-center"><a href="<?= $maintenance->link_maintenance ?>" class="text-color-dark"> <?= $maintenance->nama_maintenance ?></a></h4>
              <p class="justify"><?= $maintenance->deskripsi ?></p>
            </div>
          </div>
        </div>
    </div>
    <?php
    # code...
    }

    ?>


    <?php
    $this->db->order_by('id', 'DESC');
    $data = $this->db->get('services',1)->result();
    foreach ($data as $service) {
      
    ?>
    <div class="col-md-4">
      <div class="thumb-info custom-thumb-info-4 animateme scrollme" 
      data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-200">
        <div class="thumb-info-wrapper"><img src="<?= $service->gambar_service ?>" class="img-responsive" /></div>
          <div class="thumb-info-caption custom-box-shadow">
            <div class="thumb-info-caption-text">
              <h4 class="text-center"><a href="<?= $service->link_service ?>" class="text-color-dark"> <?= $service->nama_service ?></a></h4>
              <p class="justify"><?= $service->deskripsi ?></p>
            </div>
          </div>
        </div>
    </div>
    <?php
    # code...
    }

    ?>


    <?php
    $this->db->order_by('id', 'DESC');
    $data = $this->db->get(' trainings',1)->result();
    foreach ($data as $training) {
      
    ?>
    <div class="col-md-4">
      <div class="thumb-info custom-thumb-info-4 animateme scrollme" 
      data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatex="-200">
        <div class="thumb-info-wrapper"><img src="<?= $training->gambar_training ?>" class="img-responsive" /></div>
          <div class="thumb-info-caption custom-box-shadow">
            <div class="thumb-info-caption-text">
              <h4 class="text-center"><a href="<?= $training->link_training ?>" class="text-color-dark"> <?= $training->nama_training ?></a></h4>
              <p class="justify"><?= $training->deskripsi ?></p>
            </div>
          </div>
        </div>
    </div>
    <?php
    # code...
    }

    ?>


      

    </div>

  </div>



  <!-- Crousel -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading heading-border heading-middle-border heading-middle-border-center">
          <div class="scrollme animateme"
				    data-when="enter"
				    data-from="0.7"
				    data-to="0"
				    data-crop="false"
				    data-opacity="0"
				    data-scale="1.5">
          <h1><strong>MAINTENANCE</strong> & SERVICE</h1>
          </div>
        </div>
        <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
          
          <!-- Maintenances -->
          <?php
          $data = $this->db->get('maintenances')->result();
          foreach ($data as $maintenance) {
          ?>
          <div class="thumb-info custom-thumb-info-4"><a href="<?= $maintenance->link_maintenance ?>" target="_blank">
            <img src="<?= $maintenance->gambar_maintenance ?>"></a>
          </div>
          <?php } ?>
          <!-- End Maintenances -->
        
          <!-- Service -->
          <?php
          $data = $this->db->get('services')->result();
          foreach ($data as $service) {
          ?>
          <div class="thumb-info custom-thumb-info-4"><a href="<?= $service->link_service ?>" target="_blank">
            <img src="<?= $service->gambar_service ?>"></a>
          </div>
          <?php } ?>
          <!-- End Service -->
          
        </div>
      </div>
    </div>
  </div>
<!-- End Crousel -->



</div>
 <!----------------------------------------------------------------------------------------------------> 
  <section class="section section-no-background m-none">
    <div class="container">
      <div class="row">
        <div class="col-md-4" data-wow-delay=".4s">
          <h2 class="mb-lg">PRESS <strong>RELEASE</strong></h2>
           <div class="table-container col-md-4" rules="rows">
            <?php
            $data = $this->db->get('news',5)->result();

            foreach ($data as $news) {
              # code...
            
            ?>
            <div class="recent-posts">
              <article class="post">
                <div class="post-meta">
                  <span><i class="fa fa-calendar"></i> <?= $news->tgl_posting ?> </span>
                </div>
                <h5><a href="<?= $news->slug ?>"><?= $news->judul ?></a></h5>
              </article>
            </div>
            <?php } ?>
          </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
            <h2 class="margin-bottom-25 margin-top-none">HIGHLIGHT <strong>PROGRAM</strong></h2>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active"><img src="<?php echo base_url('assets/media/image/event/event1.jpg') ?>" caption="false" width="1288" height="627" /></div>
                <div class="item "><img src="<?php echo base_url('assets/media/image/event/event2.jpg') ?>" caption="false" width="1288" height="627" /></div>
                <div class="item "><img src="<?php echo base_url('assets/media/image/event/event3.jpg') ?>" caption="false" width="1288" height="627" /></div>
                <div class="item "><img src="<?php echo base_url('assets/media/image/event/event4.jpg') ?>" caption="false" width="1288" height="627" /></div>
              </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="clearfix"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 center">
        <h2>OUR <strong>PARTNER</strong></h2>
      </div>
    </div>
    <div class="row mt-lg">
      <?php
      $data = $this->db->get('clients')->result();
      foreach ($data as $client) {        
      ?>
      <div class="col-md-2">
        <img src="<?= $client->icon_client ?>" class="img-responsive">
      </div>
      <?php
      }
      ?>

    </div>
  </div>
</div>
<!--Footer Start-->
<footer class="color color-quaternary" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-3">
            <h5>Our Website</h5>
            <ul class="list list-icons list-icons-sm">
              <li><i class="fa fa-caret-right"></i> <a href="#">Privacy Policy</a></li>
              <li><i class="fa fa-caret-right"></i> <a href="#">Scam Alert</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Announcement</h5>
            <ul class="list list-icons list-icons-sm">
              <li><i class="fa fa-caret-right"></i> <a href="#" id="" news-room="" general-procurement="">General Procurement</a></li>
              <li><i class="fa fa-caret-right"></i> <a href="#">Annoucement</a></li>
              <li><i class="fa fa-caret-right"></i> <a href="#">E-Procurement</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Network</h5>
            <ul class="list list-icons list-icons-sm">
              <li><i class="fa fa-caret-right"></i> <a href="#">Subsidiaries</a></li>
              <li><i class="fa fa-caret-right"></i> <a href="#">Office Address</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h5 class="mb-sm">Contact Us</h5>
        <!-- Ambil data dari database -->
        <?php 
        $setting=$this->db->get('setting')->row();

        ?>
        <span class="phone"><?= $setting->no_telpon ?></span>
          <ul class="list list-icons mt-xl">
            <li><i class="fa fa-map-marker"></i> <strong>Address :</strong><?= $setting->alamat ?></li>
            <li><i class="fa fa-envelope"></i> <strong>Email :</strong> <a href="#"><?= $setting->email ?></a></li>
          </ul>
          <ul class="social-icons mt-xl">
            <li>
              <a class="sc-1" href="https://www.facebook.com/lenrekaprima" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a class="sc-2" href="https://twitter.com/lenrekaprima" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a class="sc-11" href="https://www.instagram.com/lenrekaprima/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
            <li style="box-shadow:none;"><h5 style="font-size:16px;text-transform:none;">| @Lenrekaprima</h5></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-11">
              <span class='copyright'>Copyright &copy; 2019 <a href="#"><?= $setting->title ?></a>. All rights reserved.</span>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Vendor -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.3.1.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery/jquerysc.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.appear/jquery.appear.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-cookie/jquery-cookie.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/common/common.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.validation/jquery.validation.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.gmap/jquery.gmap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/isotope/jquery.isotope.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/vide/vide.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/slider-bootstrap/slider-bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/dataTables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollme.js') ?>"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url('assets/js/theme.js') ?>"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url('assets/js/theme.init.js') ?>"></script>

<script type="text/javascript">
    function langSwitch(content, langId) {
        if (content != '') {
            var url = "/" + langId + "/" + content;
            //console.log(url);
            window.location = url;
        }
        else
        {
            if (langId == "id") {
                alert("Maaf, halaman ini tidak tersedia untuk bahasa inggris");
                return false;
            }
            else
            {
            alert("Sorry, this content not available in English.");
                return false;
            }

       }
    }

    $('a#btnDownload').each(function () {
        $(this).click(function(e) {
            e.preventDefault();
            //alert('clicked');
            var getdocName = $(this).data('doc');
            var lang = $(this).data('lang');
            console.log(getdocName);
            $.post({
                type: "GET",
                url: window.location.origin + "/Ajax/getDownloadDoc?doc=" + getdocName + "&lang=" + lang,
                //data: { docName: "'" + getdocName + "'" },
                contentType: "application/json",
                success: function (response) {
                    console.log(window.location.origin + response);
                    window.location = window.location.origin + response;
                },
                failure: function (response) {
                    alert('Terjadi kesalahan!');
                }
            });
            
        });
    });
</script>
<script>
// --------------------------------------------------
// Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-523605-4', 'nckprsn.com');
ga('send', 'pageview');

(function( $ ){
  $.fn.fitText = function( kompressor, options ) {
    // Setup options
    var compressor = kompressor || 1,
    settings = $.extend({
      'minFontSize' : Number.NEGATIVE_INFINITY,
      'maxFontSize' : Number.POSITIVE_INFINITY
      }, options);
    return this.each(function(){
      // Store the object
      var $this = $(this);
      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };
      // Call once to set.
      setTimeout( function(){ resizer(); } , 250 );
      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);
    });
  };
})( jQuerysc );
// --------------------------------------------------
// FitText init + animate to hash
$( document ).ready( function()
{
  // Set FitText for main heading
  $( '.fittext' ).fitText( 0.45 );
  // Scroll to hash animation
  $( function()
  {
    $( 'a[href*=#]:not([href=#])' ).click( function()
    {
      if( location.pathname.replace( /^\// , '' ) == this.pathname.replace( /^\// , '' ) && location.hostname == this.hostname )
      {
        var target = $( this.hash );
        target = target.length ? target : $( '[name='+this.hash.slice( 1 )+']' );
        if( target.length )
        {
          $( 'html,body' ).stop().animate(
          {
            scrollTop:target.offset().top - 120
          } , 1000 );
          return false;
        }
      }
    });
  });
});
// --------------------------------------------------
</script>
</body>
</html>