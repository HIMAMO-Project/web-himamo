@extends('guest.layouts.app')
@section('content')
<!--Container Main start-->
<div class="wrap bg-light">

    <section id="ae-pustaka" class="about bg-light">
        <!-- Program di sini -->
            <div class="container my-4">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-black fw-bold py-4 text-dark">D2 Jalur Cepat Teknik Mekatronika</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">D2 Jalur Cepat Teknik Mekatronika</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets-guest/img/img-prodi-d2.jpeg') }}" alt="Building" class="img-cover img-fluid rounded-5" width="500px">
                </div>
            </div>
        </div>
        <div class="container book-info text-black">
            <div class="row mt-4">
                <div class="col-12 ps-5 pe-5">
                    <div class="shadow-lg p-3 mb-4 text-dark rounded">
                        <div class="card-body text-start description-card">
                            <h3 class="card-title fw-bold mb-4">D2 Jalur Cepat Teknik Mekatronika</h3>
                            <p class="card-text">Program studi Teknik Mekatronika merupakan program pendidikan Diploma Dua (D-II) yang menghasilkan lulusan Ahli Muda dengan profil sebagai Senior Operator dan Junior Technician. (A.Ma.). Program ini bekerja sama dengan SMK dan DUDIKA yang dilaksanakan selama 3 semester, 1 semester di kampus dan 2 semester magang industri. Dengan mempelajari teknik rekayasa mesin, elektro, dan komputer sehingga lulusannya mampu melakukan pengetesan dan kalibrasi mesin agar dapat meningkatkan produksi barang.
                                Selain itu, lulusannya pun diharapkan mampu mencermati proses produksi, membuat laporan operasi, dan menyajikan laporan teknik, serta dapat bertanggung jawab pada perawatan mesin dan elektrik dalam lingkup pengoperasian, perawatan, pengoordinasian, dan pemantauan untuk memastikan setiap elemen mesin dapat digunakan dengan tepat.</p>
                            <p>Program ini merupakan hasil kerjasama dengan SMK yang telah menjadi mitra Polman Bandung sebagai akselerasi peningkatan kompetensi lulusan SMK di Indonesia dan hanya dibuka bagi SMK yang telah bekerjasama dengan Polman Bandung.</p>
                            <p>Adapun SMK Mitra Prodi D2JC Teknik Mekatronika POLMAN:</p>
                            <p>1. SMK Samudra Nusantara Cirebon</p>
                            <p>2. SMKN 1 Cikampek</p>
                            <p>3. SMKN Karangjaya Tasikmalaya</p>
                            <p>4. SMKN 1 Purwakarta</p>
                            <p>5. SMKN 2 Cimahi</p>
                            <p>6. SMK Cendikia Batujajar Kab.Bandung</p>
                            <p>7. SMKN 1 Cileungsi</p>
                            <p>8. SMKN 2 Bandung</p>
                            <p>9. SMK Adi Sanggoro Kab. Bogor</p>
                            <p>10. SMKN 1 Cibinong</p>
                            <a href="https://drive.google.com/drive/folders/1I2hqDn9o81xM8cNGPYZFuT1-_AaDqsts?usp=drive_link" class="btn btn-primary form-control mt-3" >Bahan Ajar D2 Teknik Mekatronika</a>
                        </div>
                    </div>
                    <!-- <ul class="list-group mb-4">
                        <li class="list-group-item border-0">
                            <a href="#">• D4 Prodi Teknologi Rekayasa Mekatronika</a>
                        </li>
                        <li class="list-group-item border-0">
                            <a href="#">• D4 Prodi Teknologi Rekayasa Otomasi</a>
                        </li>
                        <li class="list-group-item border-0">
                            <a href="#">• D4 Prodi Teknologi Rekayasa Informatika Industri</a>
                        </li>
                    </ul> -->
                    <div class="prodi-lainnya">
                        <h3 class="text-dark fw-bold ">Lihat lainnya</h3>
                        <div class="link-prodi">
                            <div class="d4-mekatronika">
                            <a href="prodi-d4-trmo" class="text-dark">D4 Prodi Teknik Rekayasa Mekatronika</a>
                            </div>
                            <div class="d4-otomasi">
                                <a href="prodi-d4-tro" class="text-dark">D4 Prodi Teknologi Rekayasa Otomasi</a>
                            </div>
                            <div class="d4-informatika">
                            <a href="prodi-d4-trin" class="text-dark">D4 Prodi Teknologi Rekayasa Informatika Industri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</div>
<!--Container Main end-->
@endsection