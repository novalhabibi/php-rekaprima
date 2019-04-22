<!-- Modal Logout -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-question  fa-lg text-info"></i>
                    Konfirmasi</h2>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin mau logout ?.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</a>
                <a href="<?= site_url('auth/logout') ?>" class="btn btn-primary btn-sm">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-question  fa-lg text-info"></i>
                    Konfirmasi</h2>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin mau hapus data ini ?.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</a>
                <a href="#" id="btn-delete" class="btn btn-primary btn-sm">Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah admin-->
<div class="modal fade" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">
                    Tambah Data Admin </h2>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/simpan') ?>" method="post">
                    <div class="form-group">
                        <label for="nama_admin">Nama Admin</label>
                        <input type="text" name="nama_admin" id="nama_admin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username_admin">Username Admin</label>
                        <input type="text" name="username_admin" id="username_admin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password_admin">Password Admin</label>
                        <input type="text" name="password_admin" id="password_admin" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                
                <button type="reset" class="btn btn-secondary btn-sm">Batal</button>
                <button type="submint" class="btn btn-primary btn-sm">Simpan</button>
                
            </div>
                </form>
        </div>
    </div>
</div>
<!-- End Modal Tambah admin-->