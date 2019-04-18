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




                    <div class="ecommerce-widget">

                        <div class="row">
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Slider</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                            $sliders = $this->db->get('slider')->result();
                                            echo count($sliders);
                                             ?>
                                            </h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total News</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                             $newss = $this->db->get('news')->result();
                                            echo count($newss);
                                             ?>
                                            </h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Project</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                             $projects = $this->db->get('projects')->result();
                                            echo count($projects);
                                             ?>
                                            </h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Client</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                             $clients = $this->db->get('clients')->result();
                                            echo count($clients);
                                             ?>
                                            </h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->

                            <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Data Admins</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Nama Admin</th>
                                                        <th class="border-0">Username</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $dataadmins=$this->db->get('admins')->result();
                                                $no=1;
                                                foreach ($dataadmins as $admin) {
                                                    # code...
                                                
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $admin->nama_admin ?></td>
                                                        <td><?= $admin->username_admin ?></td>
                                                        <td><span class="badge-dot badge-success mr-1"></span>Admin
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
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->


                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                           
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>


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

</body>

</html>