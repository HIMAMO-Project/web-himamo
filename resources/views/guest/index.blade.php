@extends('guest.layouts.app')
@section('content')
<!--Container Main start-->
<div class="wrap bg-light">

    <section id="home">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner gs_reveal">
                <div class="carousel-item drk active">
                    <img src="{{ asset('assets-guest/img/img-carousel-1.jpg') }}" class="d-block gbr img-fluid">
                    <div class="carousel-caption">
                        <div class="row no-gutters slider-text2 align-items-center justify-content-center">
                            <h1 class="quote">WELCOME TO <span>HIMAMO</span></h1>
                            <p class="quote">HIMPUNAN MAHASISWA OTOMASI MANUFAKTUR & MEKATRONIKA. </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item drk">
                    <img src="{{ asset('assets-guest/img/img-carousel-2.jpg') }}" class="d-block gbr img-fluid" loading="lazy">
                    <div class="carousel-caption">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <h1 class="quote">Still <span>The Highest</span></h1>
                            <h1 class="quote">Still <span> The Best </span></h1>
                        </div>
                    </div>
                </div>
                <button class="cntrl carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <i class='bx bxs-chevron-left-circle carouselbtn'></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="cntrl carousel-control-next" type="button"
                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <i class='bx bxs-chevron-right-circle carouselbtn'></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- scrolldown -->
            <a class="text-center" href="#about">
                <div class="scroll-down"></div>
            </a>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container pb-3">
            <div class="container pb-5 px-5 pt-5">
                <div class="row">
                    <div class="col-md text-md-start">
                        <img class="logoae gs_reveal gs_reveal_fromLeft pt-3" src="{{ asset('assets-guest/img/img-logo-jurusan.png') }}" alt="Logo Jurusan" loading="lazy">
                    </div>
                    <div class="col-md-7 gs_reveal gs_reveal_fromRight">
                        <h2 class="text-dark quote text-md-end pt-3">Apa itu <span class="judul">Jurusan
                                Teknik Otomasi
                                Manufaktur dan Mekatronika?</span></h2>
                        <p class="text-dark pt-2 text-md-end">
                            AE Memiliki kompetensi inti pada perancangan dan pembuatan teknologi terpadu
                            dalam
                            mekatronik
                            dan
                            otomasi manufaktur. Mekatronika adalah perpaduan dari teknik listrik, informasi,
                            mekanik dan
                            sistem kendali yang merupakan kompetensi dalam pembuatan alat atau komponen
                            digunakan untuk
                            membangun sistem otomatis. Sementara Otomasi Manufaktur menangani keterbatasan
                            manusia
                            dengan
                            sifat kerja yang berulang-ulang yang dihasilkan dari integrasi aplikasi dan
                            beberapa
                            perangkat
                            elektronik. Menyediakan layanan dalam sistem kendali otomasi yang berkualitas
                            dan
                            handal
                            bagi
                            industri manufaktur, elektronika, agro, pertambangan, tekstil, pengolahan
                            makanan
                            dan
                            minuman,
                            dan peralatan elektronik rumah sakit.</p>
                    </div>
                </div>
            </div>

            <div class="container cont-2 px-5">
                    <div class="row">
                        <div class="col-md-12 text-center gs_reveal">
                            <h3 class="text-dark quote">Program Studi <span class="judul">Jurusan Teknik Otomasi Manufaktur dan Mekatronika</span></h3>
                        </div>
                    </div>
                    <div class="row pt-3 subject-list">
                        <a href="/prodi-d4-tro" class=" col-lg col-md-6 col-12 mt-4" style="text-decoration: none;">
                            <div class=" text-center">
                            <div class="subject-box">
                                <img src="{{ asset('assets-guest/img/tro_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">
                                <p class="subject-name fw-bold ">D4 - Teknologi Rekayasa<br>Otomasi</p>
                            </div>
                        </div>
                        </a>
                        <a href="/prodi-d4-trmo" class="col-12 col-lg col-md-6 mt-4" style="text-decoration: none;">
                            <div class=" text-center">
                            <div class="subject-box">
                                <img src="{{ asset('assets-guest/img/trmo_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">
                                <p class="subject-name fw-bold ">D4 - Teknologi Rekayasa <br>Mekatronika</p>
                            </div>
                        </div>
                        </a>
                        <a href="prodi-d4-trin" class="col-12 col-lg col-md-6 mt-4" style="text-decoration: none;">
                            <div class=" text-center">
                                <div class="subject-box" >
                                    <img src="{{ asset('assets-guest/img/trin_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">
                                    <p class="subject-name fw-bold ">D4 - Teknologi Rekayasa <br> Informatika Industri</p>
                                </div>
                            </div>
                        </a>
                        <a href="prodi-d2-trmo" class="col-lg col-12 col-md-6 mt-4 " style="text-decoration: none;">
                            <div class=" text-center ">
                            <div class="subject-box">
                                <img src="{{ asset('assets-guest/img/trmo-d2_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">
                                <p class="subject-name fw-bold">D2 Fast Track - Teknik <br> Mekatronika</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

            <div class="container cont-2 px-5">
                <div class="row">
                    <div class="col-md-7 gs_reveal gs_reveal_fromRight">
                        <h2 class="text-dark quote text-md-start pt-5">Apa itu <span class="judul">Himpunan
                                Otomasi Manufaktur
                                dan Mekatronika?</span></h2>
                        <p class="text-dark pt-2 text-md-start">

                            Himpunan mahasiswa jurusan (disingkat HMJ) adalah organisasi mahasiswa di tingkat
                            jurusan di suatu perguruan tinggi.
                            Keberadaan himpunan mahasiswa jurusan haruslah berdasarkan prinsip dari, oleh dan
                            untuk mahasiswa. Himpunan mahasiswa
                            jurusan merupakan media bagi anggotanya untuk mengembangkan pola pikir dan
                            kepribadian yang berkaitan dengan disiplin
                            ilmunya agar siap terjun ke masyarakat. HIMAMO (Himpunan Mahasiswa Teknik Otomasi
                            Manufaktur dan Mekatronika) merupakan
                            suatu wadah organisasi yang difasilitasi oleh Politeknik Manufaktur Negeri Bandung
                            umumnya dan Jurusan Teknik Otomasi
                            Manufaktur khususnya. Keberadaan HIMAMO sangatlah penting sebagai wadah bagi
                            mahasiswa Jurusan Teknik Otomasi Manufaktur
                            dan Mekatronika untuk melatih diri dalam hal berorganisasi.</p>

                    </div>
                    <div class="col-md pb-5 text-md-end">
                        <img class="logoae gs_reveal gs_reveal_fromLeft pt-5" src="{{ asset('assets-guest/img/img-himamo.png') }}" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- <div class="container gs_reveal pb-5">
                <div class="row">
                    <div class="col-6 pt-5 text-center">
                        <i class='icon2 bx bxs-contact'></i>
                        <h2 class="value" count="218"></h2>
                        <h5 class="karla">Anggota</h5>
                    </div>
                    <div class="col-6 pt-5 text-center">
                        <i class='icon2 bx bxs-bank'></i>
                        <h2 class="value" count="25"></h2>
                        <h5 class="karla">Angkatan</h5>
                    </div>
                    <div class="col-6 pt-5 text-center">
                        <i class='icon2 bx bxs-trophy'></i>
                        <h2 class="value" count="2"></h2>
                        <h5 class="karla">Kejuaran</h5>
                    </div>
                    <div class="col-6 pt-5 text-center">
                        <i class='icon2 bx bxs-flag'></i>
                        <h2 class="value" count="1"></h2>
                        <h5 class="karla">Bendera</h5>
                    </div>
                </div>
            </div> -->

        </div>
    </section>
    <section id="history" class="about">
        <div class="parallax">
            <div class="container pt-4 pb-5 px-5">
                <div class="row">
                    <div class="col gs_reveal gs_reveal_fromLeft pt-4">
                        <div class="row no-gutters slider-text text-md-start">
                            <h1 class="quote">14 <span>November</span> <span>19</span>95</h1>
                        </div>
                    </div>
                    <div class="col-md-6 gs_reveal gs_reveal_fromRight">
                        <h2 class="text-white quote text-md-end pt-5">Sejarah <span class="judul">HIMAMO</span>
                        </h2>
                        <p class="text-white pt-2 text-md-end">
                            HIMAMO didirikan di Bandung pada tanggal 14 November 1995.
                            HIMAMO merupakan himpunan pertama yang didirikan di kampus Politeknik Manufaktur
                            Negeri Bandung. Sejak Awal didirikannya himpunan ini, sudah berazaskan dan
                            berlandaskan Pancasila dan kebenaran ilmiah tentang himpunan. HIMAMO didirikan
                            sebagai wadah untuk mengembangkan bakat dan minat mahasiswa dalam bidang teknologi
                            otomasi manufaktur
                            dan mekatronika. Organisasi ini berfungsi sebagai platform untuk meningkatkan
                            kemampuan dan keterampilan mahasiswa dalam
                            teknologi manufaktur dan otomasi, serta meningkatkan kesadaran dan partisipasi
                            mahasiswa dalam pengembangan teknologi
                            manufaktur dan otomasi di Indonesia..</p>
                    </div>
                </div>
            </div>
    </section>
    <section id="division">
        <div class="container gs_reveal gs_reveal_fromRight pt-5 pb-5 px-5">
            <div class="row">
                <div class="col pt-5 text-center">
                    <h2 class="text-dark quote text-md-start">Divisi <span class="judul">HIMAMO</span>
                    </h2>
                    <p class="text-dark text-md-start">
                        Divisi Himamo dibagi menjadi 12 divisi.
                        yaitu sebagai berikut :</p>
                </div>
                <div class="pt-3 col-md-10">
                    <div class="owl-carousel owl-one owl-theme">
                        <div class="block block-8">
                            <h1 class="judul">MTH.</h1>
                        </div>
                        <div class="block block-9">
                            <h1 class="judul">Kaderisasi.</h1>
                        </div>
                        <div class="block block-10">
                            <h1 class="text-light">Ekonomi Kre<span class="judul d-none d-lg-inline">atif.</span><span class="d-inline d-lg-none">atif.</span></h1>
                        </div>
                        <div class="block block-11">
                            <h1 class="judul">Sekretaris.</h1>
                        </div>
                        <div class="block block-12">
                            <h1 class="judul">Bendahara.</h1>
                        </div>
                        <div class="block block-13">
                            <h1 class="text-light">Hubungan Dalam.</h1>
                        </div>
                        <div class="block block-14">
                            <h1 class="text-light">Kajian Strate<span class="judul d-none d-lg-inline">gis.</span><span class="d-inline d-lg-none">gis.</span></h1>
                        </div>
                        <div class="block block-15">
                            <h1 class="judul">Koordinator Bidang.</h1>
                        </div>
                        <div class="block block-16">
                            <h1 class="judul">KPSDM.</h1>
                        </div>
                        <div class="block block-17">
                            <h1 class="text-light">Me<span class="judul d-none d-lg-inline">dia.</span><span class="d-inline d-lg-none">dia.</span></h1>
                        </div>
                        <div class="block block-18">
                            <h1 class="text-light">Inform<span class="judul d-none d-lg-inline">asi.</span><span class="d-inline d-lg-none">asi.</span></h1>
                        </div>
                        <div class="block block-19">
                            <h1 class="text-light">Media Inform<span class="judul d-none d-lg-inline">asi.</span><span class="d-inline d-lg-none">asi.</span></h1>
                        </div>
                        <div class="block block-20">
                            <h1 class="judul">Pengabdian <span class="text-light">Masyarakat.</span></h1>
                        </div>
                        <div class="block block-21">
                            <h1 class="text-light">Pengelola Program Kerja.</h1>
                        </div>
                        <div class="block block-22">
                            <h1 class="text-light">Relasi Organis<span class="judul d-none d-lg-inline">asi.</span><span class="d-inline d-lg-none">asi.</span></h1>
                        </div>
                        <div class="block block-23">
                            <h1 class="text-light">Sarana Prasara<span class="judul d-none d-lg-inline">na.</span><span class="d-inline d-lg-none">na.</span></h1>
                        </div>
                        <div class="block block-24">
                            <h1 class="text-light">Tata Kelola Eksternal.</h1>
                        </div>
                        <div class="block block-25">
                            <h1 class="text-light">Tata Kelola Internal.</h1>
                        </div>
                        <div class="block block-26">
                            <h1 class="text-light">Ta<span class="judul d-none d-lg-inline">tib.</span><span class="d-inline d-lg-none">tib.</span></h1>
                        </div>
                        <div class="block block-27">
                            <h1 class="text-light">Timeli<span class="judul d-none d-lg-inline">ner.</span><span class="d-inline d-lg-none">ner.</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="leader">
        <div class="container gs_reveal gs_reveal_fromLeft pt-4 pb-5 px-5">
            <div class="row">
                <div class="col-md-8 text-md-start">
                    <div class="featured-carousel owl-carousel">
                        <div class="item">
                            <div class="work pb-4">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-pria.jpg') }}');">
                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Adnan Maulana</a></h3>
                                        <span>Masa jabatan : 2012 s/d 2013</span>
                                        <span>NIM : 210345003</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-2013-2014.jpg') }}');">
                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Dimas Nugraha</a></h3>
                                        <span>Masa jabatan : 2013 s/d 2014</span>
                                        <span>NIM : 211341007</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-2014-2015.jpg') }}');">
                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Mohamed Iqbal</a></h3>
                                        <span>Masa jabatan : 2014 s/d 2015</span>
                                        <span>NIM : 212341042</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-pria.jpg') }}');">
                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Jefri Maulana</a></h3>
                                        <span>Masa jabatan : 2015 s/d 2016</span>
                                        <span>NIM : 210345003</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
     style="background-image: url('{{ asset('assets-guest/img/img-leader-2016-2017.jpg') }}');">
                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Saptianhadi</a></h3>
                                        <span>Masa jabatan : 2016 s/d 2017</span>
                                        <span>NIM : 214341047</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="work pb-4">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-2017-2018.jpg') }}');">
                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Eko Rahayu Tali jiwa</a></h3>
                                        <span>Masa jabatan : 2017 s/d 2018</span>
                                        <span>NIM : 215341004</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
     style="background-image: url('{{ asset('assets-guest/img/img-leader-2018-2019.jpg') }}');">
                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Sulthan M . F</a></h3>
                                        <span>Masa jabatan : 2018 s/d 2019</span>
                                        <span>NIM : 216341069</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-2019-2020.jpg') }}');">

                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Riyadh Tsaniyadi D</a></h3>
                                        <span>Masa jabatan : 2019 s/d 2020</span>
                                        <span>NIM : 217341068</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
     style="background-image: url('{{ asset('assets-guest/img/img-leader-2020-2021.jpg') }}');">

                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Sendi Dika Prasenda</a></h3>
                                        <span>Masa jabatan : 2020 s/d 2021</span>
                                        <span>NIM : 218441046</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-2021-2022.jpg') }}');">

                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Hery Ardiyanto</a></h3>
                                        <span>Masa jabatan : 2021 s/d 2022</span>
                                        <span>NIM : 219441010</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-pria.jpg') }}');">

                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Yugi Prasetara</a></h3>
                                        <span>Masa jabatan : 2022 s/d 2023</span>
                                        <span>NIM : 220441023 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-pria.jpg') }}');">

                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Farhan Ali Madani</a></h3>
                                        <span>Masa jabatan : 2023 s/d 2024</span>
                                        <span>NIM : 221441030 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset('assets-guest/img/img-leader-2024-2025.jpg') }}');">

                                    <div class="text w-100">
                                        <span class="cat">KETUA HIMPUNAN</span>
                                        <h3><a href="#">Rifqiaqil Mufahir E</a></h3>
                                        <span>Masa jabatan : 2024 s/d 2025</span>
                                        <span>NIM : 222442020 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teks col pt-5 text-center">
                    <h2 class="text-dark quote text-md-end">Sejarah Kepemimpinan <span
                            class="judul">HIMAMO</span>
                    </h2>
                    <p class="text-dark text-md-end">
                        Sejarah Kepemimpinan Ketua Himpunan Mahasiswa Jurusan Teknik Otomasi Manufaktur dan
                        Mekatronika.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="division">
        <div class="container gs_reveal gs_reveal_fromRight pt-5 pb-5 px-5">
            <div class="row">
                <div class="col pt-5 text-center">
                    <h2 class="text-dark quote text-md-start">Atribut <span class="judul">HIMAMO</span>
                    </h2>
                    <p class="text-dark text-md-start">
                        Himamo memiliki 6 atribut.
                        yaitu sebagai berikut :</p>
                </div>
                <div class="row">
                    <div class="col pt-5 text-center">
                        <h2 class="text-dark quote text-md-start">Atribut <span class="judul">HIMAMO</span>
                        </h2>
                        <p class="text-dark text-md-start">
                            Himamo memiliki 6 atribut.
                            yaitu sebagai berikut :</p>
                    </div>
                    <div class="pt-3 col-md-10">
                        <div class="owl-carousel owl-one owl-theme">
                            <div class="block block-1">
                                <h1 class="judul">Baju PMPO</h1>
                            </div>
                            <div class="block block-2">
                                <h1 class="judul">Pin HIMAMO</h1>
                            </div>
                            <div class="block block-3">
                                <h1 class="judul">Syal HIMAMO</h1>
                            </div>
                            <div class="block block-4">
                                <h1 class="judul">Baju HIMAMO</h1>
                            </div>
                            <div class="block block-5">
                                <h1 class="judul">Jaket HIMAMO</h1>
                            </div>
                            <div class="block block-6">
                                <h1 class="judul">Jaket HIMAMO</h1>
                            </div>
                            <div class="block block-7">
                                <h1 class="judul">Kemeja HIMAMO</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ae-pustaka" class="about">
        <div class="parallax2">
            <div class="container pb-3">
                <div class="container pb-5 px-5 pt-5">
                    <div class="row">
                        <div class="col-md-12 text-center gs_reveal">
                            <h2 class="text-white quote">AE <span class="judul">Pustaka</span></h2>
                            <p class="text-white pt-2">
                                AE Pustaka adalah sumber informasi dan referensi terlengkap seputar Teknik
                                Otomasi
                                Manufaktur
                                dan Mekatronika. Temukan berbagai macam buku, jurnal, artikel, dan materi
                                pembelajaran lainnya
                                untuk mendukung pengembangan pengetahuan dan keterampilan Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container cont-2 px-5 pb-2">
                    <div class="row">
                        <div class="col-md-12 text-center gs_reveal">
                            <h3 class="text-white quote">Jelajahi Koleksi Kami</h3>
                        </div>
                    </div>
                    <div class="row pt-1 pb-4 subject-list gs_reveal">
                        <div class="col-12 col-md-6 mt-4 col-lg text-center">
                            <div class="subject-box">
                                <img src="{{ asset('assets-guest/img/tro_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">

                                <p class="subject-name">Teknologi Rekayasa<br>Otomasi</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-4 col-lg text-center">
                            <div class="subject-box">
                                <img src="{{ asset('assets-guest/img/trmo_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">

                                <p class="subject-name">Teknologi Rekayasa Mekatronika</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-4 col-lg text-center">
                            <div class="subject-box">
                                <img src="{{ asset('assets-guest/img/trin_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">

                                <p class="subject-name">Teknologi Rekayasa Informatika Industri</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-4 col-lg text-center">
                            <div class="subject-box">
                                <img src="{{ asset('assets-guest/img/teori_subject.svg') }}" alt="Robotika" class="subject-image" loading="lazy">

                                <p class="subject-name">Penunjang Teori <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ae-informasi" class="about bg-light">
        <div class="container pb-3">
            <div class="container pb-5 px-5 pt-5">
                <div class="row">
                    <div class="col-md-12 text-center gs_reveal">
                        <h2 class="text-dark quote">AE <span class="judul">Informasi</span></h2>
                        <p class="text-dark pt-2">
                            Dapatkan informasi terbaru seputar jurusan Teknik Otomasi Manufaktur dan
                            Mekatronika, termasuk
                            berita terkini, acara mendatang, prestasi mahasiswa, lowongan pekerjaan, dan
                            perkembangan
                            teknologi di bidang ini.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container cont-2 px-5">
                <div class="row">
                    <div class="col-md-12 text-center gs_reveal">
                        <h3 class="text-dark quote">Berita & Pengumuman Terbaru</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($informasi as $item)
                        <div class="col-lg-3 pt-3 info-list gs_reveal">
                            <a class="text-center" href="{{ url('ae-informasi/detail/' . $item->slug) }}">
                                <div class="info-box">
                                    <div class="img-box align-items-center">
                                        <img src="{{ asset('storage/informasi/' . $item->image) }}" alt="{{ $item->title }}"
                                             class="info-image rounded mx-auto" loading="lazy">
                                    </div>
                                    <p class="info-date">{{ date('d/m/Y', strtotime($item->created_at)) }}</p>
                                    <p class="info-title">{{ $item->title }}</p>
                                    <p>{{ $item->excerpt }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-4 text-center">
                        <div class="info-button">
                            <a href="{{ url('/ae-informasi') }}" class="btn btn-primary px-3 py-2">Lihat Informasi Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="prestation" class="about">
        <div class="parallax2">
            <div class="container pt-5 pb-5 px-5">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-7 text-center">
                        <h1 class="mb-3 text-white quote">Apa Kata <span class="judul">Mereka?</span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-testimony gs_reveal wl-theme owl-carousel">
                            <div class="item">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class='bx bxs-quote-right'></i>
                                </div>
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4">Thank you HIMAMO for teaching me friendship, unity,
                                            community, kindness, youth, optimism, and understanding.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url('{{ asset('assets-guest/img/img-avatar-pria.jpg') }}');">
                                            </div>
                                            <div class="ps-3">
                                                <p class="name">Hirzi Nurfakhrian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class='bx bxs-quote-right'></i>
                                    </div>
                                    <div class="text">
                                        <p class="mb-4">It's better to burn out, than to fade away.
                                            <br>
                                            <br>
                                            <br>
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url('{{ asset('assets-guest/img/img-avatar-pria.jpg') }}');">

                                            </div>
                                            <div class="ps-3">
                                                <p class="name">Mochammad Aulia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class='bx bxs-quote-right'></i>
                                    </div>
                                    <div class="text">
                                        <p class="mb-4">"We began as wanderers, and we are wanderers still. So
                                            keep your mind curious."
                                            <br>
                                            <br>
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url('{{ asset('assets-guest/img/img-avatar-pria.jpg') }}');">

                                            </div>
                                            <div class="ps-3">
                                                <p class="name">Muhammad Fikri</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class='bx bxs-quote-right'></i>
                                    </div>
                                    <div class="text">
                                        <p class="mb-4">Berubah untuk lebih baik.
                                            <br>
                                            <br>
                                            <br>
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url('{{ asset('assets-guest/img/img-avatar-wanita.jpg') }}');">

                                            </div>
                                            <div class="ps-3">
                                                <p class="name">Fitriani Pratiwi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class='bx bxs-quote-right'></i>
                                    </div>
                                    <div class="text">
                                        <p class="mb-4">Teruslah berkembang, teruslah berproses, teruslah
                                            menjadi lebih baik, laksanakan continous improvement.
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url('{{ asset('assets-guest/img/img-avatar-pria.jpg') }}');">

                                            </div>
                                            <div class="ps-3">
                                                <p class="name">Eko Rahayu Tali Jiwa</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="video">
        <div class="container pt-5 pb-5 px-5">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <h1 class="mb-3 text-dark quote">Our <span class="judul">Moments</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="text-center embed-responsive">
                    <iframe class="gs_reveal pideo" src="https://www.youtube.com/embed/rdPUrmRmNoU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


</div>
<!--Container Main end-->
@endsection
