<!doctype html>
<html lang="en">
 
    <!-- this page -->
    
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
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data training
                                <div class="float-right">
                                    
                                    <a href="<?= site_url('dashboard/training/tambah') ?>" class="btn btn-primary btn-xs">
                                        <i class="fas fa-plus"></i>
                                        Tambah data</a>

                                </div>
                            </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Nama training</th>
                                                
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                                <th>Link</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($trainings as $training): ?>
                                            <tr>
                                                <td><?= $training->nama_training ?> </td>
                                                
                                                <td>
<a href="<?= base_url() ?><?= $training->gambar_training ?>" data-toggle="lightbox" data-title="<?= $training->nama_training ?>" data-footer="<?= $training->deskripsi_training ?>">Lihat gambar</a>
                                                </td>
                                                <td><?= substr($training->deskripsi_training,0,10) ?> </td>
                                                <td><?= $training->link_training ?> </td>
                                                <td>
                                                    <a href="<?= site_url("dashboard/training/edit/$training->id_training") ?>" class="btn btn-primary btn-xs">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="#" onclick="deleteConfirm('<?= site_url('training/hapus/'.$training->id_training) ?>')" data-toggle="modal" data-target="#hapus" class="btn btn-danger btn-xs">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama training</th>
                                                
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                                <th>Link</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
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
    <script src="<?= site_url() ?>/assets/admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/main-js.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/jquery.dataTables.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/dataTables.buttons.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/jszip.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/pdfmake.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/vfs_fonts.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/buttons.html5.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/buttons.print.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/buttons.colVis.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/dataTables.rowGroup.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/dataTables.select.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/libs/js/dataTables.fixedHeader.min.js"></script>

    <script src="<?= site_url() ?>/assets/admin/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="<?= site_url() ?>/assets/admin/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= site_url() ?>/assets/admin/assets/vendor/datatables/js/data-table.js"></script>




    
    <?php //$this->load->view('admin/_includes/js.php') ?>
    <?php $this->load->view('admin/_includes/modal.php') ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href',url);
            $('#deleteConfirm').modal();
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });
    </script>
</body>
 
</html>