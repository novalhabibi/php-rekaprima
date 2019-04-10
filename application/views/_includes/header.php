	<header id="header" class="header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 140, 'stickySetTop': '-100px', 'stickyChangeLogo': false}">
      <div class="header-body">
        <div class="header-container container">
          <div class="header-row">
            <div class="header-column">
              <div class="header-logo">
                <a href="#">
                  <img alt="Len Rekaprima Semesta" width="120" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url('assets/img/lrs-logo.png') ?>">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="header-container header-nav header-nav-center header-nav-bar header-nav-bar-primary">
          <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
            <i class="fa fa-bars"></i>
          </button>
        <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse" style="padding-top:3px;">
          <nav>
            <ul class="nav nav-pills" id="mainNav">
              <li class="">
                <a href="#">
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
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Siapa Kami</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Sejarah Len Rekaprima Semesta</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Visi &amp; Misi</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Struktur Organisasi</a></li>
                              </ul>
                          </div>
                          <div class="col-md-3">
                            <span class="dropdown-mega-sub-title"><h4>Pemimpin Kami</h4></span>
                              <ul class="dropdown-mega-sub-nav">
                                <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Dewan Direksi</a></li>
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
                              <?php
                              $data=$this->db->get('maintenances')->result();
                              foreach($data as $maintenance){
                              ?>
                              <li><a href="<?= $maintenance->link_maintenance ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i><?= $maintenance->nama_maintenance ?></a></li>
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
                              <li><a href="<?= $service->link_service ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i><?= $service->nama_service ?></a></li>
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
                              <li><a href="<?= $training->link_training ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i><?= $training->nama_training ?></a></li>
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
                              <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?= $kategori_project->nama_project ?></a></li>
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
                <a href="#" class="dropdown-toggle">Responsibility</a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="dropdown-mega-content container">
                      <div class="row">
                        <div class="col-md-3">
                          <h3><b>Responsibility</b></h3>
                        </div>
                        <div class="col-md-3">
                          <span class="dropdown-mega-sub-title"><h4>Komitmen Kami</h4></span>
                            <ul class="dropdown-mega-sub-nav">
                              <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Tanggung Jawab Perusahaan</a></li>
                            </ul>
                        </div>
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
                <a href="#">News</a>
              </li>
              <li class="">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
