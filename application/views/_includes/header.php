	<header id="header" class="header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 10, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
      <div class="header-body">
        <div class="header-container">
          <div class="header-row">
            <div class="header-column">
            </div>
          </div>
        </div>
        <div class="header-container header-nav header-nav-center header-nav-bar header-nav-bar-primary">
          <div class="header-logo-collapse-nav">
                <a href="#">
                  <img alt="Len Rekaprima Semesta" width="90" height="40" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url('assets/img/lrs-logo.png') ?>">
                </a>
              </div>
          <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
            <i class="fa fa-bars"></i>
          </button>
        <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse" style="padding-top:3px;">
          <nav>
            <ul class="nav nav-pills container" id="mainNav">
              <li style="float: left">
              <div class="logo col-md-3 logo-collapse-nav">
              <a href="<?= site_url() ?>">
                  <img alt="Len Rekaprima Semesta" width="110" height="50" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url('assets/img/lrs-logo2.png') ?>">
                </a>
            </div>
              </li>
              <li class="<?= site_url() ?>">
                <a href="<?php echo base_url('') ?>">
                  <i class="fa fa-home" style="font-size:25px;"></i>
                </a>
              </li>
              <li class="dropdown dropdown-mega">
              	<a href="#" class="dropdown-toggle">Profile</a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="dropdown-mega-content container">
                      <div class="row">
                        <div class="col-md-3">
                          <h3><b>Profile</b></h3>
                        </div>
                          <div class="col-md-3">
                            <span class="dropdown-mega-sub-title"><h4>Profil Perusahaan</h4></span>
                              <ul class="dropdown-mega-sub-nav">
                                <li><a href="<?php echo base_url('aboutus') ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Siapa Kami</a></li>
                                <li><a href="<?php echo base_url('sejarah') ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Sejarah Len Rekaprima Semesta</a></li>
                                <li><a href="<?php echo base_url('visimisi') ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Visi &amp; Misi</a></li>
                                <li><a href="<?php echo base_url('smart') ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Nilai-nilai Perusahaan (SMART)</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Struktur Organisasi</a></li>
                              </ul>
                          </div>
                          <div class="col-md-3">
                            <span class="dropdown-mega-sub-title"><h4>Pemimpin Kami</h4></span>
                              <ul class="dropdown-mega-sub-nav">
                                <li><a href="<?php echo base_url('management') ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Management</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Dewan Komisaris</a></li>
                              </ul>
                          </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-mega">
                <a href="#" class="dropdown-toggle">Bisnis Kami</a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="dropdown-mega-content container">
                      <div class="row">
                        <div class="col-md-3">
                          <h3><b>Bisnis Kami</b></h3>
                        </div>
                        <div class="col-md-3">
                          <span class="dropdown-mega-sub-title"><h4>Maintenance</h4></span>
                            <ul class="dropdown-mega-sub-nav">
                              <li><a href="<?php echo base_url('index.php/overview/signaling') ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Signalling System</a></li>
                              <?php
                              $data=$this->db->get('maintenances')->result();
                              foreach($data as $maintenance){
                              ?>
                              <li><a href="<?= site_url('maintenances/') ?><?= $maintenance->link_maintenance ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i><?= $maintenance->nama_maintenance ?></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                        <div class="col-md-3">
                          <span class="dropdown-mega-sub-title"><h4>Services</h4></span>
                            <ul class="dropdown-mega-sub-nav">
                              <?php
                              $data=$this->db->get('services')->result();
                              foreach($data as $service){
                              ?>
                              <li><a href="<?= site_url('services/') ?><?= $service->link_service ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i><?= $service->nama_service ?></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                        <div class="col-md-3">
                          <span class="dropdown-mega-sub-title"><h4>Trainings</h4></span>
                            <ul class="dropdown-mega-sub-nav">
                              <?php
                              $data=$this->db->get('trainings')->result();
                              foreach($data as $training){
                              ?>
                              <li><a href="<?= site_url('trainings/') ?><?= $training->link_training ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i><?= $training->nama_training ?></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-mega">
                <a href="#" class="dropdown-toggle">Project</a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="dropdown-mega-content container">
                      <div class="row">
                        <div class="col-md-3">
                          <h3><b>Project</b></h3>
                        </div>
                        <?php 
                        $data = $this->db->get('kategori_projects')->result();
                        foreach ($data as $kategori) {
                          # code...
                        
                        ?>
                        <div class="col-md-3">
                          <span class="dropdown-mega-sub-title"><h4><?= $kategori->nama_kategori_project ?></h4></span>
                            <ul class="dropdown-mega-sub-nav">
                            <?php
                            $id = $kategori->id_kategori_project;
                            $data =$this->db->get_where('projects',['id_kategori_project'=>$id])->result();
                            // $data =$this->db->get('projects')->result();
                            foreach ($data as $kategori_project) {
                              
                            ?>
                              <li><a href="<?= site_url('kat/') ?><?= url_title($kategori->nama_kategori_project, 'dash', TRUE) ?>/<?= $kategori_project->link_project ?> "><i class="fa fa-chevron-right" aria-hidden="true"></i> <?= $kategori_project->nama_project ?></a></li>
                            <?php
                            }
                            ?>

                            </ul>
                        </div>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-mega">
                <a href="#" class="dropdown-toggle">Jobs</a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="dropdown-mega-content container">
                      <div class="row">
                        <div class="col-md-3">
                          <h3><b>Jobs</b></h3>
                        </div>
                        <div class="col-md-3">
                          <span class="dropdown-mega-sub-title"><h4>Penerimaan Baru</h4></span>
                            <ul class="dropdown-mega-sub-nav">
                              <li><a href="#" target="_self"><i class="fa fa-chevron-right" aria-hidden="true"></i> Magang</a></li>
                              <li><a href="#" target="_self"><i class="fa fa-chevron-right" aria-hidden="true"></i> Lulusan Baru</a></li>
                              <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Tenaga Berpengalaman</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="<?php echo base_url('allnews') ?>">News</a>
              </li>
              <li class="">
                <a href="<?php echo base_url('contact') ?>">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</header>
