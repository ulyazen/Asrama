<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="breadcrumb-item active">Galeri</li>
        </ul>
    </div>
</div>

<div class="galeri">
    <div class="container">
        <div class="row align-items-center">
            <div class="card-columns">
                <?php foreach ($dataGaleri as $admin) : ?>
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('file/galeri/') . $admin['file']; ?>" alt="Card image cap">
                        <div class="card-footer">
                            <small class="text-muted"><?= $admin['judul_foto']; ?></small>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>