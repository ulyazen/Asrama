<h1 class="mt-4">Galeri</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Tabel Galeri
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('error'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataGaleri as $admin) : ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <img class="w-25" alt="Responsive image" src="<?= base_url('file/galeri/') . $admin['file']; ?>"> </td>
                            <td> <?= $admin['judul_foto']; ?> </td>
                            <td>
                                <button type="button" id="editbtn" name="editbtn" class="btn btn-info btn-sm btn-circle editbtn" data-toggle="modal" data-target="#editmodal<?= $admin['id_galeri']; ?>"> <i class="fas fa-edit"> </i> </button>
                                <div class="modal fade" id="editmodal<?= $admin['id_galeri']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ganti Foto</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/galeriUpdate') ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class=" form-group">
                                                        <label for="judul_foto">Judul Foto</label>
                                                        <input type="text" class="form-control form-control-user" id="judul_foto" name="judul_foto" placeholder="Masukkan Judul Foto" value=" <?= $admin['judul_foto']; ?>">
                                                        <?= form_error('judul_foto', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control-file <?= form_error('file') ? 'is-invalid' : '' ?>" id="file" name="file">
                                                        <input type="hidden" class="form-control-file" id="old_file" name="old_file" value="<?= $admin['file']; ?>">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('file') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control invisible" id="id_galeri" name="id_galeri" placeholder="Masukkan ID" value="<?= $admin['id_galeri']; ?>">
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