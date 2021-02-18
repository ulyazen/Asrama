<div class="col-md-6 tn-left">
	<div class="row tn-slider">
		<?php foreach ($dataArtikelLimit2 as $admin2) : ?>
			<div class="col-md-6">
				<div class="tn-img">
					<img class="img-fluid" alt="Responsive image" src="<?= base_url('file/artikel/') . $admin2['file']; ?>">
					<div class="tn-title">
						<a href="<?php echo site_url('web/artikel/' . $admin2['slug']); ?>"><?= $admin2['judul']; ?></a>
						<h5 class="text-white"><?= $admin2['tgl_post']; ?></h5>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div class="col-md-6 tn-right">
	<div class="row">
		<?php foreach ($dataArtikelLimit4 as $admin4) : ?>
			<div class="col-md-6">
				<div class="tn-img">
					<img class="img-fluid" alt="Responsive image" src="<?= base_url('file/artikel/') . $admin4['file']; ?>">
					<div class="tn-title">
						<a href="<?php echo site_url('web/artikel/' . $admin4['slug']); ?>"><?= $admin4['judul']; ?></a>
						<h7 class="text-white"><?= $admin4['tgl_post']; ?></h7>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>


<div class="main-news">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php foreach ($dataArtikel as $admin) : ?>
						<div class="col-md-4">
							<div class="mn-img">
								<img class="img-100" alt="Responsive image" src="<?= base_url('file/artikel/') . $admin['file']; ?>">
								<div class="mn-title">
									<a href="<?php echo site_url('web/artikel/' . $admin['slug']); ?>"><?= $admin['judul']; ?></a>
									<h5 class="text-white"><?= $admin['tgl_post']; ?></h5>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="row">
					<div class="col">
						<!--Tampilkan pagination-->
						<?php echo $pagination; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>