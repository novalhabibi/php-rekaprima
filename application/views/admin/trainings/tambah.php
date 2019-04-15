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
            <h5 class="card-header">Tambah Training</h5>
            <div class="card-body">
                <form class="needs-validation" novalidate enctype="multipart/form-data" action="<?= site_url('dashboard/training/tambah') ?>" method="post">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Nama Training</label>
                            <input type="text" name="nama_training" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom03">Gambar training</label>
                            <input type="file" name="gambar_training" accept="image/*" class="form-control" id="validationCustom03" required>
                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i> Jangan biarkan kososng !
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="ckeditor">Deskripsi training</label>
                            <textarea name="deskripsi_training" class="form-control" id="ckeditor" required cols="5" rows="5"></textarea>
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