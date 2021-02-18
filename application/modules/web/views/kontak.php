<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="breadcrumb-item active">Kontak</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="contact-form">
                    <form action="<?= base_url('admin/pesanCreate') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control form-control-userl" id="nama" name="nama" placeholder="Nama Anda" />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control form-control-userl" id="email" name="email" class="form-control" placeholder="Email Anda" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-userl" id="subjek" name="subjek" class="form-control" placeholder="Subjek Email" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" class="form-control form-control-userl" id="pesan" name="pesan" rows="5" placeholder="Pesan"></textarea>
                        </div>
                        <div><button class="btn" type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p>
                        Kritik dan Saran
                    </p>
                    <h4><i class="fa fa-map-marker"></i>Jl. Samironobaru No.46, Samirono, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</h4>
                    <h4><i class="fa fa-envelope"></i>dimasmaulana569@gmail.com</h4>
                    <h4><i class="fa fa-phone"></i>+62 82369319538</h4>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->