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
            <h5 class="card-header">Edit slider</h5>
            <div class="card-body">
                <form class="needs-validation" novalidate enctype="multipart/form-data" action="<?= site_url('slider/update') ?>" method="post">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Judul</label>
                            <input type="hidden" value="<?= $slider->id ?>" name="id" class="form-control">
                            <input type="text" value="<?= $slider->judul ?>" name="judul" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom03">Gambar</label>
                            <input type="hidden" name="gambar_lama" value="<?= $slider->gambar ?>" >
                            <input type="file" name="gambar" accept="image/*" class="form-control" id="validationCustom03" >
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom04">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="validationCustom04" required cols="5" rows="5"><?= $slider->deskripsi ?></textarea>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="switch12">Status</label>
                            <div class="switch-button switch-button-xs">
                                                        <input type="checkbox" <?= $slider->status == TRUE ?'checked':'' ?> name="status" id="switch12"><span>
                                                    <label for="switch12"></label></span>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
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