<h1 class="mt-4">Site</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Tabel Site
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('error'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Site</th>
                        <th>Isi Site</th>
                        <th>Foto Site</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataSite as $admin) : ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?= $admin['judul']; ?> </td>
                            <td> <?= $admin['isi']; ?> </td>
                            <td> <?php
                                    if ($admin['file'] == '') {
                                        echo '';
                                    } else {
                                        echo ' <img class="img-fluid" alt="Responsive image" src="' . base_url('file/site/') . $admin['file'] . '">';
                                    } ?> </td>
                            <td>
                                <button type="button" id="editbtn" name="editbtn" class="btn btn-info btn-sm btn-circle editbtn" data-toggle="modal" data-target="#editmodal<?= $admin['id_site']; ?>"> <i class="fas fa-edit"> </i> </button>
                                <div class="modal fade" id="editmodal<?= $admin['id_site']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Site</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/siteUpdate') ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class=" form-group">
                                                        <label for="judul">Judul Site</label>
                                                        <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul Site" value=" <?= $admin['judul']; ?>">
                                                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="perihalmasuk">Isi Site</label>
                                                        <textarea class="form-control" id="isi" name="isi" rows="3"><?= $admin['isi']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control-file <?= form_error('file') ? 'is-invalid' : '' ?>" id="file" name="file">
                                                        <input type="hidden" class="form-control-file" id="old_file" name="old_file" value="<?= $admin['file']; ?>">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('file') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control invisible" id="id_site" name="id_site" placeholder="Masukkan ID" value="<?= $admin['id_site']; ?>">
                                                    </div>
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
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>