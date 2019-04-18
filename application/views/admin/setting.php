<!doctype html>
<html lang="en">
 

<?php $this->load->view('admin/_includes/head.php') ?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">

            <?php $this->load->view('admin/_includes/navbar.php') ?>
            
        </div>




        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php $this->load->view('admin/_includes/sidebar.php') ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->


        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <?php $this->load->view('admin/_includes/pageheader.php') ?>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->





<div class="row">
 
    <!-- validation form -->
        <div class="card">
            <h5 class="card-header">Edit Site</h5>
            <div class="card-body">
                <form class="needs-validation" novalidate enctype="multipart/form-data" action="<?= site_url('setting/update') ?>" method="post">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Title</label>
                            <input type="hidden" value="<?= $setting->id ?>" name="id" >
                            <input type="text" value="<?= $setting->title ?>" name="title" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom03">Favicon</label>
                            <input type="hidden" name="favicon_lama" value="<?= $setting->favicon ?>" >
                            <img src="<?= base_url() ?><?= $setting->favicon ?>">
                            <input type="file" name="favicon" accept="image/*" class="form-control" id="validationCustom03" >
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom03">Logo</label>
                            <input type="hidden" name="logo_lama2" value="<?= $setting->logo ?>" >
                            <img src="<?= base_url() ?><?= $setting->logo ?>">
                            <input type="file" name="logo" accept="image/*" class="form-control" id="validationCustom03" >
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom04">Visi</label>
                            <textarea name="visi" class="form-control" id="validationCustom04" required cols="5" rows="5"><?= $setting->visi ?></textarea>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom04">Misi</label>
                            <textarea name="misi" class="form-control" id="validationCustom04" required cols="5" rows="5"><?= $setting->misi ?></textarea>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom03">Video Perusahaan</label>
                            <input type="hidden" name="video_lama" value="<?= $setting->video_perusahaan ?>" >
                            
                            <input type="file" name="video" accept="video/*" class="form-control" id="validationCustom03" >
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="struktur">Struktur Organisasi</label>
                            <input type="hidden" name="struktur_lama" value="<?= $setting->struktur_organisasi ?>" >
                            <img src="<?= base_url() ?><?= $setting->struktur_organisasi ?>">
                            <input type="file" name="struktur_organisasi" accept="image/*" class="form-control" id="struktur" >
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="alamat">Alamat</label>
                            <input type="text" value="<?= $setting->alamat ?>" name="alamat" class="form-control" id="alamat" required>
                            
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="email">Email</label>
                            <input type="email" value="<?= $setting->email ?>" name="email" class="form-control" id="email" required>
                            
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="no_telpon">No Telepon</label>
                            <input type="text" value="<?= $setting->no_telpon ?>" name="no_telpon" class="form-control" id="no_telpon" required>
                            
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button class="btn btn-primary btn-sm" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                        <!-- end validation form -->
</div>


           

                </div>
            </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php $this->load->view('admin/_includes/footer.php') ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <?php $this->load->view('admin/_includes/js.php') ?>
    <?php $this->load->view('admin/_includes/modal.php') ?>
    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href',url);
            $('#deleteConfirm').modal();
        }
    </script>

</body>
 
</html>