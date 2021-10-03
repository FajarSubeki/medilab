<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=base_url()?>/assets/img/favicon.png">
    <title>
        MEDILAB
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?=base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?=base_url()?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?=base_url()?>assets/css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link id="pagestyle" href="<?=base_url()?>assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link id="pagestyle" href="<?=base_url()?>assets/css/style.css" rel="stylesheet" />
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                            MEDILAB
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 scrollto active"
                                        aria-current="page" href="#hero">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2 scrollto" href="#services">
                                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2 scrollto" href="#doctors">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        Dokter
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2 scrollto" href="#faq">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2 scrollto" href="#appointment">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        Form Registrasi
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="<?= base_url('index.php/login') ?>"
                                        class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Sign In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content mt-0">
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <h1>Welcome to Medilab</h1>
                <h2>Medilab adalah ahlinya layanan di bidang kesehatan dan perawatan</h2>
                <a href="#appointment" class="btn-get-started scrollto" >Mulai Register</a>
            </div>
        </section><!-- End Hero -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us mt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Kenapa Medilab?</h3>
                            <p>
                                " Medilab merupakan layanan kesehatan profesional yang telah berhasil menangani beberapa pasien sembuh.
                                Selain itu medilab menawarkan konsultasi terpadu mengenai anamase yang diderita pasien. 
                                Dan juga memeliki beberapa dokter ahli sesuai bidangnya "
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Services di medilab ada 3 layanan yang diberikan, dengan layanan ini diharapkan
                        pasien akan puas dengan layanan medilab tersebut
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-heartbeat"></i></div>
                            <h4>Easy Registration</h4>
                            <p>Registrasi dapat dengan mudah diakses melalui website</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-pills"></i></div>
                            <h4>Free consultation</h4>
                            <p>Menyediakan layanan konsultasi kepada pasien sebelum dilakukan tindakan lanjut</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-hospital-user"></i></div>
                            <h4>Fast Response</h4>
                            <p>Medilab menangani pasien baik itu konsultasi online atau offline dengan profesional</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Dokter</h2>
                    <p>Medilab memiliki beberapa dokter yang sangat ahli dibidangnya dan memiliki pengalaman serta jam terbang yang tinggi</p>
                </div>

                <div class="row mb-5">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?=base_url()?>assets/img/doctors/doctors-1.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Spesialis Kandungan</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?=base_url()?>assets/img/doctors/doctors-2.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Dokter Umum</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?=base_url()?>assets/img/doctors/doctors-3.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Spesialis Penyakit Dalam</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="<?=base_url()?>assets/img/doctors/doctors-4.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Spesialis Kulit</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Doctors Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Temukan berbagai pertanyaan tentang medilab disini</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Apa itu medilab? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                   Medilab merupakan layanan kesehatan yang sudah lama beroperasi dan terpercaya
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Bisakah saya online registrasi? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Tentu bisa, medilab menyedikan layanan registrasi melalui website registrasi agar anda tidak perlu mengantri ketika datang ke tempat kami 
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Bagaimana Biayanya?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Biaya akan diinformasikan setelah pasien selesai melakukan pemeriksaan
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Dimana lokasi Klinik Medilab?
                               <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Anda dapat menemukan medilab di beberapa wilayah jabodetabek yang ada saat ini dapat diperiksa melalui google maps
                                </p>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
        <!-- ======= Appointment Section ======= -->
        <section id="appointment" class="appointment">
            <div class="container">

                <div class="section-title">
                    <h2>Form Registrasi</h2>
                    <p>Daftarkan diri anda untuk melakukan registrasi di medilab secara online untuk mendapatkan antrian ang lebih cepat</p>
                </div>
                <!-- action="<?=base_url()?>pasien/add_edit_save/<?php if($pasien) { echo $pasien[0]->id_pasien; } ?>" enctype="multipart/form-data" -->
                <form method="post" role="form" action="<?=base_url()?>index.php/register_patient/<?php if($pasien) { echo $pasien[0]->id_pasien; } ?>">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" required="" class="form-control" id="name" placeholder="Your Name"
                                >
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-md-0">
                            <input type="number" class="form-control" required="" name="tlp" id="phone" placeholder="Your Phone"
                                >
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <select name="jk" id="department" required="" class="form-select">
                                <option value="">Gender</option>
                                <option value="l">Male</option>
                                <option value="p">Female</option>
                            </select>
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input readonly type="text" required="" name="no_rekam_medis" class="form-control"
                                placeholder="Checkup Number Medical"  value="<?php echo $no_rm; ?>"
                                >
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <input type="date" required="" name="tgl_lahir" class="form-control"
                                placeholder="Date of Birth">
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" required="" name="alamat" rows="5"
                            placeholder="Your Address"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="text-center mt-5 mb-5"><button type="submit" class="appointment-btn">Daftarkan data anda</button></div>
                </form>

            </div>
        </section><!-- End Appointment Section -->
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                        document.write(new Date().getFullYear())
                        </script> by Medilab IT.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?=base_url()?>assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>