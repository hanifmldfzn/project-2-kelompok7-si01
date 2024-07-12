<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>brainwaveio | Landing Page Template</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('lp') }}/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('lp') }}/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('lp') }}/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('lp') }}/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="{{ asset('lp') }}/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{ asset('lp') }}/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="stylesheet" href="{{ asset('lp') }}/vendors/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('lp') }}/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="{{ asset('lp') }}/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('lp') }}/assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
        <div class="content">
            <nav class="navbar navbar-expand-md fixed-top" id="navbar"
                data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
                <div class="container-fluid px-0">
                    <a href="#">
                        <img class="navbar-brand w-75 d-md-none" src="{{ asset('lp') }}/assets/img/logos/logo.svg" alt="logo" />
                    </a>
                    <a class="navbar-brand fw-bold d-none d-md-block" href="#">Pcp</a>
                    {{-- @if (Route::has('login'))
                        <a class="btn btn-primary btn-sm ms-md-x1 mt-lg-0 order-md-1 ms-auto"
                            href="{{ route('login') }}">
                            Login
                        </a>
                    @endif --}}
                    <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-end" id="navbar-content"
                        data-navbar-collapse="data-navbar-collapse">
                        <ul class="navbar-nav gap-md-2 gap-lg-3 pt-x1 pb-1 pt-md-0 pb-md-0"
                            data-navbar-nav="data-navbar-nav">
                            <li class="nav-item"> <a class="nav-link lh-xl" href="#home">Home</a></li>
                            <li class="nav-item"> <a class="nav-link lh-xl" href="#form">Form Pengajuan Cuti</a></li>
                            <li class="nav-item"> <a class="nav-link lh-xl" href="admin">Masuk</a></li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link lh-xl" href="{{ route('register') }}">
                                        Register
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div data-bs-target="#navbar" data-bs-spy="scroll" tabindex="0">
                <section class="hero-section overflow-hidden position-relative z-0 mb-4 mb-lg-0" id="home">
                    <div class="hero-background">
                        <div class="container">
                            <div class="row gy-4 gy-md-8 pt-9 pt-lg-0">
                                <div class="col-lg-6 text-center text-lg-start">
                                    <h1 class="fs-2 fs-lg-1 text-white fw-bold mb-2 mb-lg-x1 lh-base mt-3 mt-lg-0">
                                        Pengajuan <span class="text-nowrap">Cuti Pegawai</span></h1>
                                    <p class="fs-8 text-white mb-3 mb-lg-4 lh-lg">Pengajuan cuti pegawai adalah proses administrasi yang penting dalam sebuah perusahaan. Sistem pengajuan cuti yang efisien dapat meningkatkan kepuasan karyawan dan memastikan operasi perusahaan tetap berjalan lancar. Dalam proposal ini, kami akan membahas tujuan, manfaat, fitur utama, dan implementasi dari sistem pengajuan cuti pegawai yang terstruktur dan berbasis teknologi.</p>
                                    <div class="d-flex justify-content-center justify-content-lg-start"><a
                                            class="btn btn-primary btn-lg lh-xl mb-4 mb-md-5 mb-lg-7"
                                            href="#">Selengkapnya</a></div>
                                </div>
                                <div class="col-lg-6 position-lg-relative">
                                    <div class="position-lg-absolute z-1 text-center"><img
                                            class="img-fluid chat-image"
                                            src="{{ asset('lp') }}/assets/img/Hero/Frame.webp" alt="" />
                                        <div class="position-absolute dots d-none d-md-block"> <img
                                                class="img-fluid w-50 w-lg-75"
                                                src="{{ asset('lp') }}/assets/img/illustrations/Dots.webp"
                                                alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 start-0 end-0 z-1"><img class="wave mb-md-n2"
                            src="{{ asset('lp') }}/assets/img/illustrations/Wave.svg" alt="" />
                        <div class="bg-white py-2 py-md-5"></div>
                    </div>
                </section>



                <section class="experience position-relative overflow-hidden" id="form">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="position-relative z-1 text-center mb-8 mb-lg-9">
                                        <div class="card border">
                                            <div class="card-header my-5">
                                                <h1 class="card-title">Form Pengajuan Cuti</h1>
                                            </div>
                                            <div class="card-body">
                                                <form class="forms-sample"
                                                    action="{{ url('admin/pengajuancuti/store') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group row mb-3">
                                                        <label for="tgl_awal" class="col-sm-4 col-form-label">Tanggal
                                                            Awal</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" id="tgl_awal"
                                                                name="tgl_awal" placeholder="Masukkan tgl_awal">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label for="tgl_akhir" class="col-sm-4 col-form-label">Tanggal
                                                            Akhir</label>
                                                        <div class="col-sm-8">
                                                            <input type="date" class="form-control" id="tgl_akhir"
                                                                name="tgl_akhir" placeholder="Masukkan tgl_akhir">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label for="jumlah"
                                                            class="col-sm-4 col-form-label">Jumlah</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="jumlah"
                                                                name="jumlah" placeholder="Masukkan jumlah">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label for="ket"
                                                            class="col-sm-4 col-form-label">Ket</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="ket"
                                                                name="ket" placeholder="Masukkan ket">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label for="status"
                                                            class="col-sm-4 col-form-label">Status</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="status"
                                                                name="status" placeholder="Masukkan status">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label for="pegawai_id"
                                                            class="col-sm-4 col-form-label">Pegawai</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                id="pegawai_id" name="pegawai_id"
                                                                placeholder="Masukkan Pegawai ID">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-8">
                                                            <button type="submit"
                                                                class="btn btn-primary">Simpan</button>
                                                            <button type="reset"
                                                                class="btn btn-warning">Reset</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <!-- /.card-body -->

                                        </div>
                                        <!-- /.card -->

                                </div>
                            </div>
                            {{-- <div class="col-md-8 col-lg-7">
                                <h2 class="fs-4 fs-lg-3 fw-bold text-center text-white mb-5 mb-lg-9 lh-sm">We made this
                                    app to solve your problems.</h2>
                            </div>
                            <div class="col-12">
                                <div class="row gy-4 g-md-3 pb-8 pb-lg-11 px-1">
                                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img
                                            src="{{ asset('lp') }}/assets/img/icons/roadmap.svg" alt="" />
                                        <div>
                                            <h5 class="fs-8 text-white lh-lg fw-bold">Unlimited Projects</h5>
                                            <p class="text-white text-opacity-50 lh-xl mb-0">Manage multiple projects
                                                at once and for seamless business operation.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img
                                            src="{{ asset('lp') }}/assets/img/icons/users-wm.svg" alt="" />
                                        <div>
                                            <h5 class="fs-8 text-white lh-lg fw-bold">Team Management</h5>
                                            <p class="text-white text-opacity-50 lh-xl mb-0">Manage your
                                                cross-functional teams better than ever with our easily manageable app.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img
                                            src="{{ asset('lp') }}/assets/img/icons/share-91.svg" alt="" />
                                        <div>
                                            <h5 class="fs-8 text-white lh-lg fw-bold">File Sharing</h5>
                                            <p class="text-white text-opacity-50 lh-xl mb-0">Easily share files where
                                                necessary and keep them safe with enhanced security and protection.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img
                                            src="{{ asset('lp') }}/assets/img/icons/video_meeting.svg"
                                            alt="" />
                                        <div>
                                            <h5 class="fs-8 text-white lh-lg fw-bold">Video Meeting</h5>
                                            <p class="text-white text-opacity-50 lh-xl mb-0">Conduct video meetings and
                                                keep records for further use with its cloud storage.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img
                                            src="{{ asset('lp') }}/assets/img/icons/opening-times.svg"
                                            alt="" />
                                        <div>
                                            <h5 class="fs-8 text-white lh-lg fw-bold">Time Tracking</h5>
                                            <p class="text-white text-opacity-50 lh-xl mb-0">Track time to ensure
                                                meeting all the deadlines and never lag behind managing multiple
                                                projects.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img
                                            src="{{ asset('lp') }}/assets/img/icons/card-favorite.svg"
                                            alt="" />
                                        <div>
                                            <h5 class="fs-8 text-white lh-lg fw-bold">Payment System</h5>
                                            <p class="text-white text-opacity-50 lh-xl mb-0">With its easy payment
                                                system create invoices and get paid all at the same place.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="position-absolute top-0 start-0 end-0">
                        <div class="bg-white py-3 py-md-9 py-xl-10"> </div><img class="wave"
                            src="{{ asset('lp') }}/assets/img/illustrations/Wave_2.svg" alt="" />
                    </div>
                </section>
            </div><button
                class="btn scroll-to-top text-white rounded-circle d-flex justify-content-center align-items-center bg-primary"
                data-scroll-top="data-scroll-top"><span class="uil uil-angle-up"></span></button>
            <footer class="pt-7 pt-lg-8">
                <div class="container">
                    <div class="row gy-4 g-md-3 border-bottom pb-8 pb-lg-9 justify-content-center">
                        <div class="col-6 col-md-3">
                            <p class="mb-2 lh-lg ls-1">Company</p>
                            <ul class="list-unstyled text-1100">
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#about">About us</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#contact"> Contact us</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Careers</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Press</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <p class="mb-2 lh-lg">Product</p>
                            <ul class="list-unstyled text-1100">
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Features</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Pricing</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> News</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Help desk</a></li>
                                <li class="mb-1"><a class="ls-1 lh-xl" href="#!"> Support</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <p class="mb-2 lh-lg"> Legal</p>
                            <ul class="list-unstyled text-1100">
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Privacy</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Terms & Conditions</a></li>
                                <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row gy-2 py-3 justify-content-center justify-content-md-between">
                        <div class="col-auto ps-0">
                            <p class="text-center text-md-start lh-xl text-1100"> © 2024 Copyright, All Right Reserved, SI01 Kel-?
                                ❤️</p>
                        </div>
                        <div class="col-auto pe-0"><a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer"
                                href="#!"><span class="uil uil-twitter"> </span></a><a
                                class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span
                                    class="uil uil-instagram"></span></a><a
                                class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span
                                    class="uil uil-linkedin"> </span></a></div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->



    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="{{ asset('lp') }}/vendors/popper/popper.min.js"></script>
    <script src="{{ asset('lp') }}/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('lp') }}/vendors/is/is.min.js"></script>
    <script src="{{ asset('lp') }}/vendors/countup/countUp.umd.js"></script>
    <script src="{{ asset('lp') }}/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('lp') }}/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('lp') }}/assets/js/theme.js"></script>
</body>

</html>
