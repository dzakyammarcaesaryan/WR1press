@extends('layouts.app')

@section('title', 'Beranda - Institut Teknologi Yogyakarta')

@section('content')

    <!-- Masthead-->
<header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang Di ITY Press</div>
            <div class="masthead-heading text-uppercase">Layanan Penerbitan Yang Modern Dan Profesional</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Selengkapnya</a>
        </div>
</header>

        <!-- Profil-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Profil</h2>
            <h3 class="section-subheading text-muted">ITY Press merupakan lembaga penerbitan untuk civitas akademika ITY dan masyarakat, menyediakan buku, jurnal, majalah, dan e-book dengan kualitas tinggi. ITY Press adalah unit pelaksanaan teknis Institut Teknologi Yogyakarta (ITY) yang menjalankan tugas sebagai lembaga penerbitan untuk memenuhi keperluan internal ITY dan masyarakat.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Visi</h4>
                <p class="text-muted">ITY Press menjadi pusat penerbitan buku berbasis digital dan cetak yang andal, profesional, aktif, dan kreatif di tingkat nasional dan internasional.
                </p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Misi</h4>
                <p class="text-muted">Memberikan layanan jasa cetak dan penerbitan buku kepada civitas akademika ITY dan masyarakat. Memberikan layanan produksi buku digital untuk kemajuan literasi di tengah masyarakat. Memberikan layanan kerja sama yang profesional, tangkas, dan kreatif.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Tujuan</h4>
                <p class="text-muted">Mendorong tumbuh dan berkembangnya budaya membaca, menulis, dan menerbitkan buku. Meningkatkan layanan pencetakan dan penerbitan buku, produksi buku digital, serta pelatihan di bidang penerbitan dan pencetakan. Menyebarluaskan buku dan karya ilmiah ke masyarakat luas. Menjalin kerja sama dengan lembaga di dalam dan luar negeri. Meningkatkan kualitas produk dan sumber daya manusia.</p>
            </div>
        </div>
    </div>
</section>

        <!-- Katalog-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Katalog</h2>
            <h3 class="section-subheading text-muted">Jelajahi Koleksi Buku Kami</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>ISBN 978-602-74457-4-1</h4>
                        <h4 class="subheading">Konservasi Lingkungan Keanekaragaman Hayati Berbasis Masyarakat Di Geosite Nglanggeran</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Oleh Agus Suyanto, Diananto Prihandoko</p></div>
                    <div class="timeline-body"><p class="text-muted">Harga Rp 80.000</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">Pesan Sekarang</button>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>ISBN 978-602-74457-3-4</h4>
                        <h4 class="subheading">Amdal Pembangunan Jalan</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Oleh Chafid Fandeli, Mahal Nungki, Andri Seto Baskoro</p></div>
                    <div class="timeline-body"><p class="text-muted">Harga Rp 100.000</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">Pesan Sekarang</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>ISBN 978-602-74457-1-0</h4>
                        <h4 class="subheading">Modul Penerapan Ipteks Pendidikan Masyarakat Untuk Daerah Rawan Longsor Dan Sistem Penanggulangannya</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Oleh Agus Suyanto, Chafid Fandeli</p></div>
                    <div class="timeline-body"><p class="text-muted">Harga Rp 30.000</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">Pesan Sekarang</button>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>ISBN 978-602-74457-2-7</h4>
                        <h4 class="subheading">Modul Penerapan Ipteks Konservasi Lingkungan Melalui Masyarakat Mitra Pariwisata Alam Di Selatan Taman Nasional Gunung Merapi</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Oleh Agus Suyanto, Chafid Fandeli</p></div>
                    <div class="timeline-body"><p class="text-muted">Harga Rp 30.000</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">Pesan Sekarang</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>ISBN 978-602-74457-0-3</h4>
                        <h4 class="subheading">Konservasi Lingkungan</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Oleh Agus Suyanto, Chafid Fandeli, Fujiwara</p></div>
                    <div class="timeline-body"><p class="text-muted">Harga Rp 50.000</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">Pesan Sekarang</button>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>ISBN 978-602-74457-2-7</h4>
                        <h4 class="subheading">
                            <a href="assets/buku/HHBK Gunung Kidul_buku1.pdf" target="_blank">
                                Model Pemanfaatan Hasil Hutan Bukan Kayu (HHBK) Oleh Masyarakat di Kabupaten Gunungkidul
                            </a>
                        </h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Oleh Agus Suyanto, Chafid Fandeli</p></div>
                    <div class="timeline-body"><p class="text-muted">Harga Rp 30.000</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">Pesan Sekarang</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

        <!-- Kontak Kami-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Kontak Kami</h2>
            <h3 class="section-subheading text-muted">Tunggu apa lagi? Segera ajukan naskah Anda!</h3>
            <h1><button type="button" class="btn btn-primary" style="margin-top: -100px;">Terbitkan Buku Anda Sekarang</button></h1>
        </div>
        <div class="card shadow">
            <div class="row text-center justify-content-center">
                <h4 class="mb-4">INSTITUT TEKNOLOGI YOGYAKARTA</h4>
                    <div class="col-lg-3">
                        <p>
                            <strong>Kampus 1</strong> <br>
                            <small>
                                Fakultas Teknik Lingkungan dan Sumber Daya Alam<br>
                                Jl. Janti Km 4 Gedongkuning, Banguntapan, DIY<br>
                                Telp. (0274) 566863, email: info@ity.ac.id
                            </small>
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p>
                            <strong>Kampus 2</strong> <br>
                            <small>
                                Fakultas Teknologi Industri dan Energi<br>
                                Tinalan, Winong, Kotagede, DIY<br>
                                Telp. (0274) 566863, email: info@ity.ac.id
                            </small>
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p>
                            <strong>Kampus 3</strong> <br>
                            <small>
                                Fakultas Teknik Lingkungan dan Sumber Daya Alam<br>
                                Jl. Kebun Raya No , Rejowinangun, DIY<br>
                                Telp. (0274) 566863, email: info@ity.ac.id
                            </small>
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p>
                            <strong>Gedung Pascasarjana</strong> <br>
                            <small>
                                Fakultas Pascasarjana<br>
                                Jl. Janti Km 4 Gedongkuning, Banguntapan, DIY<br>
                                Telp. (0274) 566863, email: info@ity.ac.id
                            </small>
                        </p>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
