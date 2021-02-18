<h1 class="mt-4">Artikel</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Tabel Artikel
    </div>
    <div class="card-header">
        <button type="button" id="createBtn" class="btn btn-primary btn-md btn" data-toggle="modal" data-target="#create"> <i class="fa fa-plus-square fa-1x"></i> Tambah Artikel</button> </>
    </div>
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/artikelCreate') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class=" form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul Artikel">
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="file">Gambar Artikel</label>
                            <input type="file" name="file" class="form-control-file" id="file">
                        </div>
                        <div class="form-group">
                            <label for="perihalmasuk">Isi Artikel</label>
                            <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
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
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('error'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Nama Foto</th>
                        <th>Foto</th>
                        <th>Isi</th>
                        <th>Tanggal Post</th>
                        <th>URL</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataArtikel as $admin) : ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?= $admin['judul']; ?> </td>
                            <td> <?= $admin['file']; ?> </td>
                            <td> <img class="img-fluid" alt="Responsive image" src="<?= base_url('file/artikel/') . $admin['file']; ?>"> </td>
                            <td> <?= $admin['isi']; ?> </td>
                            <td> <?= $admin['tgl_post']; ?> </td>
                            <td>
                                <p><a href="<?php echo site_url('admin/preview/' . $admin['slug']); ?>">Lihat artikel</a></p>
                            </td>
                            <td>
                                <button type="button" id="editbtn" name="editbtn" class="btn btn-info btn-sm btn-circle editbtn" data-toggle="modal" data-target="#editmodal<?= $admin['id_artikel']; ?>"> <i class="fas fa-edit"> </i> </button>
                                <div class="modal fade" id="editmodal<?= $admin['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/artikelUpdate') ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class=" form-group">
                                                        <label for="judul">Judul Artikel</label>
                                                        <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul Artikel" value=" <?= $admin['judul']; ?>">
                                                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control-file <?= form_error('file') ? 'is-invalid' : '' ?>" id="file" name="file">
                                                        <input type="hidden" class="form-control-file" id="old_file" name="old_file" value="<?= $admin['file']; ?>">
                                                        <div class="invalid-feedback">
                                                            <?= form_error('file') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="perihalmasuk">Isi Artikel</label>
                                                        <textarea class="form-control" id="isi" name="isi" rows="3"><?= $admin['isi']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control invisible" id="id_artikel" name="id_artikel" placeholder="Masukkan ID" value="<?= $admin['id_artikel']; ?>">
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
                                <button type="button" type="button" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#delete<?= $admin['id_artikel']; ?>"> <i class="fas fa-trash-alt"> </i></button> <!-- Button trigger modal -->
                                <div class="modal fade" id="delete<?= $admin['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?= base_url('admin/artikelDelete') ?>">
                                                    <label for="delete">Apakah yakin menghapus artikel berjudul <?= $admin['judul']; ?>?</label>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control invisible" id="id_artikel" name="id_artikel" placeholder="Masukkan ID" value="<?= $admin['id_artikel']; ?>">
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