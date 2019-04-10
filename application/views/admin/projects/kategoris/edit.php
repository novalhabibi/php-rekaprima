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


    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Kategori Projects</h5>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            foreach ($kategori_projects as $kategori) {
                            
                            ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= ucfirst($kategori->nama_kategori_project) ?></td>
                                <td>
                                    <a href="<?= site_url("dashboard/projek/kategori/edit/$kategori->id_kategori_project") ?>" class="btn btn-primary btn-xs">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" onclick="deleteConfirm('<?= site_url('projek/kategori/hapus/'.$kategori->id_kategori_project) ?>')" data-toggle="modal" data-target="#hapus" class="btn btn-danger btn-xs">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
    
    <!-- validation form -->
        <div class="card">
            <h5 class="card-header">Edit Kategori Projek</h5>
            <div class="card-body">
                <form class="needs-validation" novalidate action="<?= site_url('projek/kategori/update') ?>" method="post">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Nama Kategori Projek</label>
                            <input type="hidden" name="id_kategori_project" value="<?= $kategori_project->id_kategori_project ?>" class="form-control" id="validationCustom01" required>
                            <input type="text" name="nama_kategori_project" value="<?= $kategori_project->nama_kategori_project ?>" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback">
                                <i class="fas fa-info-circle"></i>
                                Bagus! 
                            </div>
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-triangle"></i>
                                                    Jangan biarkan kososng !
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