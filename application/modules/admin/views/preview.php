<h1 class="mt-4">Preview Artikel</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-newspaper mr-1"></i>
        Tampilan Artikel
    </div>
    <div class="card-body">
        <?php
        echo '<h2>' . $artikel['judul'] . '</h2>';
        echo '<img class="img-fluid" alt="Responsive image" src="' . base_url('file/artikel/') . $artikel['file'] . '">';
        echo '<br></br>';
        echo $artikel['isi'];
        ?>
    </div>
</div>