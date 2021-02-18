<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="breadcrumb-item active">Artikel</li>
        </ul>
    </div>
</div>
<div class="single-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sn-container">
                    <div class="sn-content">
                        <?php
                        echo '<h2>' . $artikel['judul'] . '</h2>';
                        echo '<img class="img-fluid" alt="Responsive image" src="' . base_url('file/artikel/') . $artikel['file'] . '">';
                        echo '<br></br>';
                        echo $artikel['isi'];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>