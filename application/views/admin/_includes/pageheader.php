                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <!-- <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                 -->
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li> -->
                                            <?php foreach ($this->uri->segments as $segment):?>
                                            <?php
                                                $url = substr($this->uri->uri_string,0, strpos($this->uri->uri_string, $segment)).$segment;
                                                $is_active = $url == $this->uri->uri_string;
                                            ?>
                                        <li class="breadcrumb-item <?= $is_active ?'active':'' ?>">
                                            <?php if ($is_active): ?>
                                                <?= ucfirst($segment) ?>

                                            <?php else: ?>
                                            <a href="<?= site_url($url) ?>"><?= ucfirst($segment) ?></a>
                                        </li>

                                        <?php endif;?>
                                        
                                        <?php endforeach; ?>
                                        </ol>
                                    </nav>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->


<?php
if (validation_errors() == true) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo validation_errors(); ?>


    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
</div>
<?php 
}
?>

<?php
if ($this->session->flashdata('error') == true) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <?php echo validation_errors(); ?>


    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
</div>
<?php 
}
?>

<?php
if ($this->session->flashdata('success') == true) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('success') ?>
    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
</div>
<?php 
}
?>