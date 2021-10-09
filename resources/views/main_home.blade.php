@extends('layouts.master')

@section('content')

    <!-- ======= Profil Section ======= -->
    <div class="jumbotron" data-aos="fade-up">
        <h5>Sertifikasi IT merupakan sebuah penetapan yang diberikan oleh organisasi atau asosiasi
            profesi terhadap seseorang bahwa orang tersebut telah memenuhi standar kompetensi dalam bidang IT.</h5>
        <div style="padding-top: 25px">
            <a href="/peserta/add" class="get-started-btn scrollto" data-aos="fade-up">Daftar Sertifikasi</a>
        </div>

    </div>
    <section id="profil" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Sertifikasi IT</h3>
                    <hr>
                    <p class="justify">
                        Lembaga Sertifikasi Profesi bidang Teknologi dan Informasi adalah lembaga yang melakukan proses
                        sertifikasi di bidang Teknologi dan Informasi. Tugas pokok dan fungsi dari Sertifikasi adalah untuk
                        pengembangan Sumber Daya Manusia. Untuk memastikan Tenaga kerja Indonesia Kompeten pada bidangnya
                        dan berdaya saing global pada industri Teknologi dan
                        Informasi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Profil Section -->


    <section id="profil" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class=" content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Skema Sertifikasi</h3>
                    <hr><br>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100 w-100 border-2">
                                <img src="assets/img/web-dev.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Junior Web Developer</b></h5>
                                    <p class="card-text justify">Pekerjaan web developer junior terdiri dari bekerja
                                        dengan tim senior developer. Bertanggung jawab atas pembuatan kode
                                        dasar, bekerja sama dengan para developer senior, dan melancarkan seluruh proses
                                        pengembangan website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-100 border-2">
                                <img src="assets/img/data-scnt.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Big Data Scientist</b></h5>
                                    <p class="card-text justify">Big Data Scientist merupakan orang yang berada dibalik
                                        kendali
                                        teknologi pengolahan data. Big Data scientist bertugas menganalisis
                                        berbagai macam data dalam jumlah besar (big data) yang terakumulasi di perusahaan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-100 border-2">
                                <img src="assets/img/network-adm.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Network Administrator Muda</b></h5>
                                    <p class="card-text justify">Network administrator adalah orang yang bertanggung jawab
                                        untuk
                                        selalu mengawasi sistem komunikasi di kantor agar tetap berjalan lancar. Tidak semua
                                        network administrator memiliki tugas yang sama dan disesuaikan dengan kebijakan
                                        masing-masing perusahaan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-100 border-2">
                                <img src="assets/img/mobile.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Junior Mobile Programmer</b></h5>
                                    <p class="card-text justify">Junior Mobile Programmer adalah seseorang yang punya
                                        spesialiasi dalam teknologi mobile. Hal itu meliputi membuat aplikasi untuk Android
                                        Google, iOs Apple, dan platform ponsel Windows. Serta mendesain, mengembangkan, dan
                                        mengimplementasikan seluruh mobile.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-100 border-2">
                                <img src="assets/img/content-creator.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Content Creator</b></h5>
                                    <p class="card-text justify">Content creator merupakan sebutan bagi seseorang yang
                                        melahirkan berbagai materi konten baik berupa tulisan, gambar, video, suara, maupun
                                        gabungan dari dua atau lebih materi. Konten yang dibuat oleh para content
                                        creator itu biasanya dimuat di platform digital.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 w-100 border-2">
                                <img src="assets/img/data-mgn.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Data Management Staff</b></h5>
                                    <p class="card-text justify"> Memastikan seluruh data secara aktual, akurat, aman dan
                                        juga
                                        tersedia untuk semua pihak yang memiliki kepentingan. Kegiatan ini dilakukan agar
                                        bisa
                                        mengumpulkan, menyimpan dan juga menggunakan data secara aman, hemat biaya dan juga
                                        lebih efisien./p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
