{{-- tentang kami --}}

@extends('layouts.app')

@section('title', 'Tentang Kami | BLK Mandiri')

@section('content')
    <style>
        .carousel-item img {
            max-height: 80vh;
            /* Batasi tinggi gambar */
            object-fit: cover;
            /* Agar gambar tetap proporsional */
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            /* Background hitam semi-transparan */
            padding: 15px;
            /* Padding agar teks tidak terlalu menempel */
            border-radius: 10px;
            /* Sedikit sudut membulat untuk tampilan lebih rapi */
        }

        .carousel-caption h5,
        .carousel-caption p {
            color: white;
            /* Warna teks putih agar kontras dengan background */
        }
    </style>

    <main class="main">
        <!-- Hero  Section -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src={{ asset('assets/user/img/artikel1.jpg') }} class="d-block w-100"
                        alt={{ asset('assets/user/img/artikel1.jpg') }}>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BALAI LATIHAN KERJA MANDIRIsfsfsf</h5>
                        <p>DINAS TENAGA KERJA DAN TRANSMIGRASI PROV. JAWA BARAT</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src={{ asset('assets/user/img/blmkm_family.png') }} class="d-block w-100"
                        alt={{ asset('assets/user/img/blmkm_family.png') }}>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src={{ asset('assets/user/img/artikel2.jpg') }} class="d-block w-100"
                        alt={{ asset('assets/user/img/artikel2.jpg') }}>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- End Hero  Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Balai Latihan Kerja Mandiri</a>
                                </h4>
                                <p class="description">Fasilitas yang disediakan pemerintah dalam memberikan
                                    pelatihan keterampilan kepada masyarakat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Visi</a></h4>
                                <p class="description">Menjadi pusat unggulan pengembangan keterampilan tenaga kerja yang
                                    kompeten dan profesional.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Misi</a></h4>
                                <p class="description">
                                    Menyediakan pelatihan berkualitas, bekerja sama dengan industri, dan mendukung
                                    penempatan kerja, sembari meningkatkan profesionalisme staf dan instruktur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">Tentang Kami</p>
                        <h3>SILASTRI UPT BLK SINGOSARI</h3>
                        <p class="fst-italic">
                            Balai Latihan Kerja milik pemerintah di bawah naungan Direktorat Jenderal Pembinaan Pelatihan
                            dan Produktivitas Kementerian Ketenagakerjaan Republik Indonesia sebagai
                            prasarana dan sarana tempat pelatihan keterampilan dan pendalaman keahlian diberbagai bidang
                            untuk segala kalangan masyarakat.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Penyediaan Program Pelatihan Berbasis Kebutuhan
                                    Industri.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Fokus pada Pemberdayaan Masyarakat Melalui
                                    Pendidikan Keterampilan.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Kolaborasi dengan Industri dan Pemerintah.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/user/img/about-company-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('assets/user/img/about-company-2.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="{{ asset('assets/user/img/about-company-3.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('assets/user/img/silastri/logo_jatim.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('assets/user/img/silastri/logo_disnakertrans.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('assets/user/img/silastri/logo_berakhlak.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('assets/user/img/silastri/logo_bangga.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('assets/user/img/silastri/logo_zona_integritas.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <!-- End Client Item -->

                </div>
            </div>
        </section>
        <!-- /Clients Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p>Apa yang didapat selama mengikuti pelatihan?</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-5 d-flex align-items-center">

                        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                    <i class="bi bi-binoculars"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Peningkatan Keterampilan dan Kompetensi</h4>
                                        <p>
                                            Dengan Pelatihan yang berkualitas sesuai dengan kebutuhan industri,
                                            dapat langsung diterapkan di tempat kerja.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                    <i class="bi bi-box-seam"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Kesempatan Penempatan Kerja</h4>
                                        <p>
                                            Dengan jaringan industri yang dimiliki peserta dapat
                                            berkesempatan penempatan kerja setelah menyelesaikan pelatihan.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                    <i class="bi bi-brightness-high"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Meningkatkan Networking</h4>
                                        <p>
                                            Peserta dapat membangun jaringan profesional yang dapat mendukung perkembangan
                                            karir mereka di masa depan.
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->

                    </div>

                    <div class="col-lg-6">
                        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="tab-pane fade active show" id="features-tab-1">
                                <img src="{{ asset('assets/user/img/tabs-1.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <!-- End Tab Content Item -->

                            <div class="tab-pane fade" id="features-tab-2">
                                <img src="{{ asset('assets/user/img/tabs-2.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <!-- End Tab Content Item -->

                            <div class="tab-pane fade" id="features-tab-3">
                                <img src="{{ asset('assets/user/img/tabs-3.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <!-- End Tab Content Item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Features Section -->

        <!-- Features Details Section -->
        <section id="features-details" class="features-details section">
            <div class="container">
                <div class="row gy-4 justify-content-between features-item">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/user/img/features-1.jpg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Segera daftarkan diri anda</h3>
                            <p>
                                Keuntungan selama mengikuti pelatihan kerja di Balai Latihan Kerja Silastri
                                sebagai investasi yang berharga untuk pengembangan keterampilan dan meningkatkan peluang
                                dalam dunia kerja.
                            </p>
                            <a href="/pendaftaran" class="btn more-btn">Daftar</a>
                        </div>
                    </div>

                </div>
                <!-- Features Item -->

                <div class="row gy-4 justify-content-between features-item">
                    <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="content">
                            <h3>Informasi Pelatihan</h3>
                            <p>
                                Informasi pelatihan kerja berbasis kompetensi di UPT BLK Singosari Malang.
                            </p>
                            <p></p>
                            <a href="#" class="btn more-btn">Cek Disini!</a>
                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('assets/user/img/features-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <!-- Features Item -->

            </div>
        </section>
        <!-- /Features Details Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengumuman</h2>
                <p>Informasi penting</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <i class="bi bi-activity icon"></i>
                            <div>
                                <h3>Realisasi Anggaran Tahun 2024</h3>
                                <p>Realisasi Anggaran Tahun 2024.</p>
                                <a href="#" class="read-more stretched-link">Cek Disini<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-broadcast icon"></i>
                            <div>
                                <h3>Realisasi PAD Tahun 2024</h3>
                                <p>Realisasi PAD Tahun 2024.</p>
                                <a href="#" class="read-more stretched-link">Cek Disini<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <i class="bi bi-easel icon"></i>
                            <div>
                                <h3>Data Pelatihan Tahun 2024</h3>
                                <p>Data Pelatihan Tahun 2024.</p>
                                <a href="#" class="read-more stretched-link">Cek Disini<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <i class="bi bi-bounding-box-circles icon"></i>
                            <div>
                                <h3>Data Penempatan Tahun 2024</h3>
                                <p>Data Penempatan Tahun 2024.</p>
                                <a href="#" class="read-more stretched-link">Cek Disini<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <i class="bi bi-calendar4-week icon"></i>
                            <div>
                                <h3>Layanan Pengaduan</h3>
                                <p>Layanan Pengaduan Internal dan Eksternal (SP4N Lapor) Tahun 2024.</p>
                                <a href="#" class="read-more stretched-link">Cek Disini<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <i class="bi bi-chat-square-text icon"></i>
                            <div>
                                <h3>Survei Kepuasan</h3>
                                <p>Mencakup Survei Kepuasan Masyarakat, Survei Persepsi Kualitas Pelayanan (SPKP) dan Survei
                                    Persepsi Anti Korupsi (SPAK),
                                    Survei Kualitas Penyelenggaraan Pelatihan serta Survei Penempatan Alumni Tahun 2024.</p>
                                <a href="#" class="read-more stretched-link">Cek Disini<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <i class="bi bi-chat-square-text icon"></i>
                            <div>
                                <h3>Realisasi Kinerja Tahun 2024</h3>
                                <p>Realisasi Kinerja Tahun 2024.</p>
                                <a href="#" class="read-more stretched-link">Cek Disini<i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                </div>
            </div>
        </section>
        <!-- /Services Section -->

    </main>
@endsection
