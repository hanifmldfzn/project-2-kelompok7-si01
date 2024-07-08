<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Scholar - Online School HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('landing') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('landing') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('landing') }}/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <h1>UMKM</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Cari UMKM" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                      <li class="scroll-to-section"><a href="#services">Tentang</a></li>
                      <li class="scroll-to-section"><a href="#courses">SKill</a></li>
                      <li class="scroll-to-section"><a href="#team">Pembina</a></li>
                      <li class="scroll-to-section"><a href="#events">Acara</a></li>
                      @if (Route::has('register'))
                      <li class="scroll-to-section"><a href="{{ route('register') }}">Daftar</a></li>
                      @endif
                      @if (Route::has('login'))
                      <li class="scroll-to-section"><a href="{{ route('login') }}">Masuk</a></li>
                      @endif
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Slogan</span>
                <h2>Inovasi dan Kreativitas UMKM, Masa Depan Indonesia.</h2>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Visi</span>
                <h2>Menjadi pilar utama dalam pembangunan ekonomi</h2>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Misi</span>
                <h2>Membantu UMKM memperluas pasar.</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('landing') }}/assets/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Usaha Mikro</h4>
              <p>Usaha dengan aset maksimal Rp 50 juta (tidak termasuk tanah dan bangunan) dan omzet maksimal Rp 300 juta per tahun.</p>
              <div class="main-button">
                <a href="#">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('landing') }}/assets/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Usaha Kecil</h4>
              <p>Usaha dengan aset antara Rp 50 juta hingga Rp 500 juta dan omzet antara Rp 300 juta hingga Rp 2,5 miliar per tahun.</p>
              <div class="main-button">
                <a href="#">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('landing') }}/assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Usaha Menengah</h4>
              <p>Usaha dengan aset antara Rp 500 juta hingga Rp 10 miliar dan omzet antara Rp 2,5 miliar hingga Rp 50 miliar per tahun.</p>
              <div class="main-button">
                <a href="#">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Apa yang Dimaksud dengan UMKM?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>UMKM</strong> adalah singkatan dari Usaha Mikro, Kecil, dan Menengah UMKM adalah jenis usaha yang dikelompokkan berdasarkan jumlah karyawan, aset, dan omzet per tahun. Usaha Mikro biasanya memiliki aset dan omzet yang lebih kecil dibandingkan dengan Usaha Kecil dan Menengah.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Manfaat UMKM bagi Perekonomian?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>UMKM</strong> memberikan banyak manfaat bagi perekonomian, termasuk menciptakan lapangan kerja dan mengurangi pengangguran, meningkatkan pendapatan masyarakat dan mengurangi kemiskinan, mendorong inovasi dan kreativitas dalam berbagai sektor, serta membantu pemerataan pembangunan ekonomi di berbagai daerah.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Cara Mendapatkan Modal untuk UMKM?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Ada beberapa cara untuk mendapatkan modal bagi <strong>UMKM</strong>. Pertama, mengajukan pinjaman ke bank atau lembaga keuangan lainnya. Kedua, mengikuti program pemerintah yang memberikan bantuan modal atau kredit usaha rakyat (KUR). Selain itu, penggunaan dana pribadi atau tabungan juga menjadi salah satu alternatif.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Tantangan yang Sering Dihadapi oleh UMKM?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Beberapa tantangan yang sering dihadapi oleh <strong>UMKM</strong> antara lain kesulitan dalam mendapatkan akses ke modal atau pendanaan, kurangnya pengetahuan dan keterampilan manajerial, serta masalah dalam pemasaran dan distribusi produk. Selain itu, UMKM sering menghadapi persaingan yang ketat dengan usaha besar dan perusahaan multinasional, serta kendala regulasi dan birokrasi yang rumit.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Tentang UMKM</h6>
            <h2>Cara Memasarkan Produk UMKM secara Efektif?</h2>
            <p>Untuk memasarkan produk UMKM secara efektif, beberapa strategi yang bisa dilakukan adalah memanfaatkan media sosial dan platform e-commerce untuk menjangkau lebih banyak konsumen. Mengikuti pameran dan bazaar untuk memperkenalkan produk secara langsung juga merupakan langkah yang baik. </p>
            <div class="main-button">
              <a href="#">Temukan Lebih Banyak</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>SKILL</h6>
            <h2>Keterampilan UMKM</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Pemasaran</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Manajemen</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Kreativitas</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Analisis</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('landing') }}/assets/images/ps.jpg" alt=""></a>
              <span class="category">Pemasaran</span>
            </div>
            <div class="down-content">
              <span class="author">Gambar 1</span>
              <h4>Pemasaran</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('landing') }}/assets/images/ps2.jpg" alt=""></a>
              <span class="category">Kreativitas</span>
            </div>
            <div class="down-content">
              <span class="author">Gambar 2</span>
              <h4>Kreativitas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('landing') }}/assets/images/ps1.jpg" alt=""></a>
              <span class="category">Manajemen</span>
            </div>
            <div class="down-content">
              <span class="author">Gambar 3</span>
              <h4>Manajemen</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('landing') }}/assets/images/kr.jpg" alt=""></a>
              <span class="category">Kreativitas</span>
            </div>
            <div class="down-content">
              <span class="author">Gambar 4</span>
              <h4>Kreativitas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('landing') }}/assets/images/an.jpg" alt=""></a>
              <span class="category">Analisis</span>
            </div>
            <div class="down-content">
              <span class="author">Gambar 5</span>
              <h4>Analisis</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('landing') }}/assets/images/as.jpg" alt=""></a>
              <span class="category">Analisis</span>
            </div>
            <div class="down-content">
              <span class="author">Gambar 6</span>
              <h4>Analisis</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="6500" data-speed="1000"></h2>
                   <p class="count-text ">Usaha Mikro</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="783" data-speed="1000"></h2>
                  <p class="count-text ">Usaha Kecil</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="263" data-speed="1000"></h2>
                  <p class="count-text ">Usaha Menengah</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="55" data-speed="1000"></h2>
                  <p class="count-text ">Usaha Besar</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('landing') }}/assets/images/su.jpg" alt="">
              <span class="category">Menteri Pariwisata dan Ekonomi Kreatif</span>
              <h4>Sandiaga Uno</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('landing') }}/assets/images/tm.jpeg" alt="">
              <span class="category">Menteri Koperasi dan Usaha Kecil dan Menengah (UKM).</span>
              <h4>Teten Masduki</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('landing') }}/assets/images/rp1.jpg" alt="">
              <span class="category">Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri </span>
              <h4>Rendi Pratama</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('landing') }}/assets/images/alip.jpg" alt="">
              <span class="category">Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri</span>
              <h4>Alif Surya Pratama</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Sejak adanya website ini, usaha kecil saya di bidang makanan rumahan semakin dikenal luas. Website ini memudahkan saya untuk mempromosikan produk dan berinteraksi langsung dengan pelanggan. Terima kasih atas platform yang luar biasa ini!”</p>
              <div class="author">
                <img src="{{ asset('landing') }}/assets/images/member-03.jpg" alt="">
                <span class="category">Pemilik Rumah Makan Bandung</span>
                <h4>Dedi Kasmaran</h4>
              </div>
            </div>
            <div class="item">
              <p>“Website ini sangat membantu kami dalam menjangkau pasar yang lebih luas. Sebagai pengusaha kerajinan tangan, kami kini memiliki tempat untuk memamerkan produk-produk kami secara profesional. Penjualan meningkat drastis sejak bergabung di website ini.”</p>
              <div class="author">
                <img src="{{ asset('landing') }}/assets/images/member-02.jpg" alt="">
                <span class="category">Pengrajin Aksesoris Yogyakarta</span>
                <h4>Lina Aulia</h4>
              </div>
            </div>
            <div class="item">
              <p>“Dengan adanya website ini, usaha saya di bidang fashion lokal semakin berkembang. Fitur-fitur yang disediakan sangat user-friendly, sehingga mudah digunakan bahkan bagi kami yang tidak terlalu paham teknologi. Terima kasih atas kesempatan yang diberikan.”</p>
              <div class="author">
                <img src="{{ asset('landing') }}/assets/images/testimonial-author.jpg" alt="">
                <span class="category">Pemilik Butik Lokal Cirebon</span>
                <h4>Rani Maharani</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONI</h6>
            <h2>Apa yang mereka katakan tentang kami?</h2>
            <p>Tim di balik pembuatan website ini sangat profesional dan responsif. Mereka benar-benar memahami kebutuhan UMKM dan memberikan solusi yang tepat. Saya sangat puas dengan hasilnya!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Jadwal</h6>
            <h2>Acara Mendatang</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="{{ asset('landing') }}/assets/images/ina.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">INACRAFT</span>
                    <h4>International Handicraft Trade Fair</h4>
                  </li>
                  <li>
                    <span>Tanggal:</span>
                    <h6>01 Maret 2024</h6>
                  </li>
                  <li>
                    <span>Durasi:</span>
                    <h6>4 Jam</h6>
                  </li>
                  <li>
                    <span>Harga:</span>
                    <h6>Rp. 300.000</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="{{ asset('landing') }}/assets/images/tei.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category"> TEI</span>
                    <h4>Trade Expo Indonesia</h4>
                  </li>
                  <li>
                    <span>Tanggal:</span>
                    <h6>24 Feb 2024</h6>
                  </li>
                  <li>
                    <span>Durasi:</span>
                    <h6>4 Jam</h6>
                  </li>
                  <li>
                    <span>Harga</span>
                    <h6>Rp. 500.000</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="{{ asset('landing') }}/assets/images/smx.jpeg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Pertamina SMEXPO</span>
                    <h4>Small Medium Enterprise Expo</h4>
                  </li>
                  <li>
                    <span>Tanggal:</span>
                    <h6>12 Mar 2024</h6>
                  </li>
                  <li>
                    <span>Durasi:</span>
                    <h6>6 Jam</h6>
                  </li>
                  <li>
                    <span>Harga:</span>
                    <h6>Rp. 500.000</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 WEB UMKM. All rights reserved. &nbsp;&nbsp;&nbsp; Desain: <a href="https://templatemo.com" rel="nofollow" target="_blank">Kelompok 6</a> Sumber: <a href="https://themewagon.com" rel="nofollow" target="_blank">Themewagon</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('landing') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('landing') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('landing') }}/assets/js/isotope.min.js"></script>
  <script src="{{ asset('landing') }}/assets/js/owl-carousel.js"></script>
  <script src="{{ asset('landing') }}/assets/js/counter.js"></script>
  <script src="{{ asset('landing') }}/assets/js/custom.js"></script>

  </body>
</html>