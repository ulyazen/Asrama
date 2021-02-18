<h1 class="mt-4">User</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Tabel User
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('error'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataUser as $admin) : ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?= $admin['username']; ?> </td>
                            <td> <?php if ($admin['status'] == 0) {
                                        echo 'Tidak Aktif Sebagai Admin';
                                    } else {
                                        echo 'Aktif Sebagai Admin';
                                    } ?> </td>
                            <td>
                                <button type="button" id="editbtn" name="editbtn" class="btn btn-info btn-sm btn-circle editbtn" data-toggle="modal" data-target="#editmodal<?= $admin['id_user']; ?>"> <i class="fas fa-edit"> </i> </button>
                                <div class="modal fade" id="editmodal<?= $admin['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/userUpdate') ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <select class="form-control" id="status" name="status" value="<?php if ($admin['status'] == 0) {
                                                                                                                        echo "Tidak Aktif Sebagai Admin";
                                                                                                                    } else if ($admin['status'] == 1) {
                                                                                                                        echo "Aktif Sebagai Admin";
                                                                                                                    } ?>">
                                                        <option value="0">Tidak Aktif Sebagai Admin</option>
                                                        <option value="1">Aktif Sebagai Admin</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control invisible" id="id_user" name="id_user" placeholder="Masukkan ID" value="<?= $admin['id_user']; ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary" value="upload">Simpan</button>
                                                </div>

                                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" type="button" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#delete<?= $admin['id_user']; ?>"> <i class="fas fa-trash-alt"> </i></button> <!-- Button trigger modal -->
                                <div class="modal fade" id="delete<?= $admin['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?= base_url('admin/userDelete') ?>">
                                                    <label for="delete">Apakah yakin menghapus user <?= $admin['username']; ?>?</label>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control invisible" id="id_user" name="id_user" placeholder="Masukkan ID" value="<?= $admin['id_user']; ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Kirim</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>