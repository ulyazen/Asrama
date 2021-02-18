       <!-- Breadcrumb Start -->
       <div class="breadcrumb-wrap">
           <div class="container">
               <ul class="breadcrumb">

                   <li class="breadcrumb-item"><a href="#">Profil</a></li>
                   <li class="breadcrumb-item active">Program Kerja</li>
               </ul>
           </div>
       </div>
       <!-- Breadcrumb End -->


       <!-- Single News Start-->
       <div class="single-news">
           <div class="container">
               <div class="row">
                   <div class="col-lg-8">
                       <div class="sn-container">
                           <div class="sn-content">
                               <?php foreach ($dataSite as $admin) : ?>
                                   <h1 class="sn-title"><?= $admin['judul']; ?></h1>
                                   <p>
                                       <?php
                                        if ($admin['file'] == '') {
                                            echo '';
                                        } else {
                                            echo ' <img class="img-fluid" alt="Responsive image" src="' . base_url('file/site/') . $admin['file'] . '">';
                                        } ?>
                                       <?= $admin['isi']; ?>
                                   </p>
                               <?php endforeach; ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>