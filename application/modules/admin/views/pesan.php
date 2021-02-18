<h1 class="mt-4">Pesan</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Tabel Pesan
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('error'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengirim</th>
                        <th>Email Pengirim</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                        <th>Tanggal Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataPesan as $admin) : ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?= $admin['nama']; ?> </td>
                            <td> <?= $admin['email']; ?> </td>
                            <td> <?= $admin['subjek']; ?> </td>
                            <td> <?= $admin['pesan']; ?> </td>
                            <td> <?= $admin['tgl_pesan']; ?> </td>
                            <td>
                                <button type="button" type="button" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#delete<?= $admin['id_pesan']; ?>"> <i class="fas fa-trash-alt"> </i></button> <!-- Button trigger modal -->
                                <div class="modal fade" id="delete<?= $admin['id_pesan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Pesa</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?= base_url('admin/pesanDelete') ?>">
                                                    <label for="delete">Apakah yakin menghapus pesan dari <?= $admin['nama']; ?>?</label>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control invisible" id="id_pesan" name="id_pesan" placeholder="Masukkan ID" value="<?= $admin['id_pesan']; ?>">
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