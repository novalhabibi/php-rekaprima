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
                            <h5 class="card-header">Tambah Projek</h5>
                            <div class="card-body">
                                <form class="needs-validation" novalidate enctype="multipart/form-data"
                                    action="<?= site_url('projek/update') ?>" method="post">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Nama Projek</label>
                                            <input type="hidden" value="<?= $project->id_project ?>" name="id_project"
                                                class="form-control" id="validationCustom01" required>
                                            <input type="text" value="<?= $project->nama_project ?>" name="nama_project"
                                                class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                                Bagus!
                                            </div>
                                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i>
                                                Jangan biarkan kososng !
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Kategori Projek</label>
                                            <select name="id_kategori_project" id="validationCustom02"
                                                class="form-control" required>
                                                <option value="">-- Pilih Kategori --</option>
                                                <?php
                                $data=$this->db->get('kategori_projects')->result();
                                foreach ($data as $kategori) {
                                ?>
                                                <option value="<?= $kategori->id_kategori_project ?>"
                                                    <?= $kategori->id_kategori_project == $project->id_kategori_project ?'selected':'' ?>>
                                                    <?= $kategori->nama_kategori_project ?></option>
                                                <?php
                                # code...
                                }
                                ?>

                                            </select>
                                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                                Bagus!
                                            </div>
                                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i>
                                                Jangan biarkan kososng !
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom03">Gambar Projek</label>
                                            <input type="hidden" name="gambar_lama"
                                                value="<?= $project->gambar_project ?>">
                                            <input type="file" name="gambar_project" accept="image/*"
                                                class="form-control" id="validationCustom03">
                                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                                Bagus!
                                            </div>
                                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i>
                                                Jangan biarkan kososng !
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="ckeditor">Deskripsi Projek</label>
                                            <textarea name="deskripsi_project" class="form-control" id="ckeditor"
                                                required cols="5" rows="5"><?= $project->deskripsi_project ?></textarea>
                                            <div class="valid-feedback"><i class="fas fa-info-circle"></i>
                                                Bagus!
                                            </div>
                                            <div class="invalid-feedback"><i class="fas fa-exclamation-triangle"></i>
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

                    <!-- Tabel Gambar -->
                    <div class="table-responsive">
                    <table class="table">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                            data-target="#exampleModal<?= $project->id_project ?>">
                            tambah gambar
                        </button>
                        <tr>
                            <th width="20%">Gambar</th>
                            <th width="50%">Deskrpis</th>
                            <th width="20%">Aksi</th>
                        </tr>
                        <?php
                        foreach ($gambars as $gambar) {
                            # code...
                        
                        ?>
                        <tr>
                            <td>
                                <img src="<?= site_url() ?><?= $gambar->gambar ?>" width="100%" alt="">
                            </td>
                            <td><?= $gambar->deskripsi_gambar ?></td>
                            <td>
                            <a href="#" onclick="deleteConfirm('<?= site_url('projek/hapusgambar/'.$gambar->id_gambar) ?>')" data-toggle="modal" data-target="#hapus" class="btn btn-danger btn-xs">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    </div>
                    <!-- ENdTabel Gambar -->
                    <!-- Modal Tambah Gambar-->
                    <div class="modal fade" id="exampleModal<?= $project->id_project ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= site_url('project/tambahgambar') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="id_project" value="<?= $project->id_project ?>">
                                        <div class="form-group">
                                            <label for="gambar">Upload gambar</label>
                                            <input type="file" name="gambar" accept="image/*" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi_gambar">Deskrpsi gambar</label>
                                            <textarea class="form-control" name="deskripsi_gambar" id="deskripsi_gambar"
                                                cols="30" rows="10"></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary btn-sm"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Tambah Gambar-->



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
        $('#btn-delete').attr('href', url);
        $('#deleteConfirm').modal();
    }
    </script>

</body>

</html>