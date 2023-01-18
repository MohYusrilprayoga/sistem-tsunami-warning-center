<?php
require_once 'backend/koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<style>
  .gambar {
    height: 670px;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="frontend/Images/tsunami.png">
  <title>Tsunami Warning Center</title>
  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="frontend/styles/main.css">
</head>

<!-- navbar -->
<?php include 'frontend/header/navbar.php'; ?>
<!-- akhir navbar -->

<!-- Carousel -->
<div class="gambar">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="frontend/Images/index/crousel.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="frontend/Images/index/tsunamiindo.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="frontend/Images/index/aceh.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</div>
<!-- Akhir Carousel -->

<main>
  <section id="data-bencana-alam" class="pt-5 pb-4" style="background-color:#4A4F6D;">
    <div class="container text-white">

      <div class="section-title">
        <h3 class="text-center font-weight-bold text-uppercase "><span class="title-res">Data Bencana Tsunami Indonesia</span>
          <div style="margin-top:-50px !important"><br><small class="text-center" style="font-size:10px !important;"><a href="https://dibi.bnpb.go.id/" target="_blank" style="color:white !important;text-decoration:none !important;">Sumber : dibi.bnpb.go.id</a></small></div>
        </h3>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-2 col-6 mt-2 mb-2 text-center">
          <div data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">
            <h1 id="jumlah_kejadian" hidden="" class="font-weight-bold">4747</h1>
            <h1 id="jumlah_kejadian-anim" class="font-weight-bold">47</h1>
            <strong>Tsunami </strong>
          </div>
        </div>
        <div class="col-md-2 col-6 mt-2 mb-2 text-center">
          <div data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">
            <h1 id="meninggal_gis" hidden="" class="font-weight-bold">5064</h1>
            <h1 id="meninggal_gis-anim" class="font-weight-bold">5064</h1>
            <strong>Meninggal Dunia</strong>
          </div>
        </div>
        <div class="col-md-2 col-4 mt-2 mb-2 text-center">
          <div data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">
            <h1 id="hilang" hidden="" class="font-weight-bold">3062</h1>
            <h1 id="hilang-anim" class="font-weight-bold">3062</h1>
            <strong>Hilang</strong>
          </div>
        </div>
        <div class="col-md-2 col-4 mt-2 mb-2 text-center">
          <div data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate">
            <h1 id="terluka" hidden="" class="font-weight-bold">88,509</h1>
            <h1 id="terluka-anim" class="font-weight-bold">88,509</h1>
            <strong>Korban</strong>
          </div>
        </div>

      </div>
    </div>
    </div>

  </section>


  <section id="beritaTerbaru" class="pt-4 pb-4 inner-shadow" style="background-color: #6E7995;">
    <div class="container">

      <div class="row mb-4">
        <div class="col-md-12 col-12">
          <div class="card text-center bg-transparent" style="border: none;">
            <!-- navigation in .card-header -->
            <div class="card-header bg-transparent" style="border: none;">
              <ul class="nav nav-tabs card-header-tabs justify-content-center" id="menu-list">
                <li class="nav-item">
                  <strong><a class="nav-link text-white text-white title-tab title-section" data-toggle="tab" href="#beritaTerbaru1">
                      <h4>Berita Terbaru</h4>
                    </a></strong>
                </li>
              </ul>
            </div>
            <!-- .card-body.tab-content  -->
            <div class="card-body tab-content">
              <div class="tab-pane fade show active" id="beritaTerbaru1">
                <div class="row slide-horinzontal">
                  <div class="col-12 col-md-3 mt-2 mb-2 d-flex align-items-stretch" style="text-align: left !important;">

                    <figure class="figure" style="width: 100%;">
                      <div class="image-wrapper">
                        <img src="frontend/Images/index/berita1.jpg" alt="Deretan Tsunami terbesar" class="rounded" width="100%" height="200" data-was-processed="true">
                      </div>

                      <figcaption class="figure-caption mt-4 mb-2">
                        <h6><a class=" tracking font-weight-bold text-white" data-type="news" data-id="1" href="https://databoks.katadata.co.id/datapublish/2021/12/15/deretan-bencana-tsunami-terbesar-yang-menelan-ribuan-korban-meninggal-di-indonesia" style="text-decoration:none;"><b> Deretan Bencana Tsunami Terbesar yang Menelan Ribuan Korban Meninggal di Indonesia</b></a></h6>

                      </figcaption>
                      <figcaption class="figure-caption mt-2 mb-2">
                        <div class="date"><small class="text-light">18 November 2022 | 09:10 WIB</small></div>
                        <p><small class="text-light">Badan Meteorologi Klimatologi dan Geofisika (BMKG) mencatat, bencana tsunami terbesar di Indonesia terjadi di Aceh pada tahun 2004 silam. </small></p>

                      </figcaption>

                    </figure>

                  </div>
                  <div class="col-12 col-md-3 mt-2 mb-2 d-flex align-items-stretch" style="text-align: left !important;">

                    <figure class="figure" style="width: 100%;">
                      <div class="image-wrapper">
                        <img src="frontend/Images/index/berita2.jpg" alt="Potensi Tsunami Selat Sunda" class="rounded" width="100%" height="200">
                      </div>

                      <figcaption class="figure-caption mt-4 mb-2">
                        <h6><a class=" tracking font-weight-bold text-white" data-type="news" data-id="2" href="https://www.kompas.com/sains/read/2021/08/28/090300923/mengenal-potensi-tsunami-selat-sunda-dan-letusan-gunung-krakatau-di-masa" style="text-decoration:none;"><b>Mengenal Potensi Tsunami Selat Sunda dan Letusan Gunung Krakatau di Masa Lalu </b></a></h6>

                      </figcaption>
                      <figcaption class="figure-caption mt-2 mb-2">
                        <div class="date"><small class="text-light"> 18 November 2022 | 09:02 WIB</small></div>
                        <p><small class="text-light">Bencana tsunami tidak hanya dipicu oleh aktivitas gempa bumi besar. Potensi tsunami di Selat Sunda juga dapat disebabkan oleh aktivitas Gunung Anak Krakatau, bahkan di masa lalu pernah dipicu oleh letusan dahsyat Gunung Krakatau.</small></p>

                      </figcaption>

                    </figure>

                  </div>
                  <div class="col-12 col-md-3 mt-2 mb-2 d-flex align-items-stretch" style="text-align: left !important;">

                    <figure class="figure" style="width: 100%;">
                      <div class="image-wrapper">
                        <img src="frontend/Images/index/berita3.jpg" alt="Gempa Tonga" class="rounded" width="100%" height="200">
                      </div>

                      <figcaption class="figure-caption mt-4 mb-2">
                        <h6><a class=" tracking font-weight-bold text-white" data-type="news" data-id="5010762" href="https://www.liputan6.com/global/read/5123319/gempa-magnitudo-73-dekat-tonga-sempat-picu-peringatan-tsunami" style="text-decoration:none;"><b>Gempa Magnitudo 7,3 Dekat Tonga Sempat Picu Peringatan Tsunami</b></a></h6>

                      </figcaption>
                      <figcaption class="figure-caption mt-2 mb-2">
                        <div class="date"><small class="text-light">18 November 2022 | 08:40 WIB</small></div>
                        <p><small class="text-light">Mengutip Japan Times, Sabtu (12/11/2022), pemerintah Tonga sempat mengeluarkan peringatan tsunami dan mendesak penduduk untuk pindah ke daratan, ke tempat yang lebih tinggi pada Jumat 11 November setelah gempa bumi berkekuatan 7,3 melanda laut sekitar 207 km dari ibu kota..</small></p>

                      </figcaption>

                    </figure>

                  </div>
                  <div class="col-12 col-md-3 mt-2 mb-2 d-flex align-items-stretch" style="text-align: left !important;">

                    <figure class="figure" style="width: 100%;">
                      <div class="image-wrapper">
                        <img src="frontend/Images/index/berita4.jpg" alt="Tsunami Jawa Barat" class="rounded" width="100%" height="200">
                      </div>

                      <figcaption class="figure-caption mt-4 mb-2">
                        <h6><a class=" tracking font-weight-bold text-white" data-type="news" data-id="5010760" href="https://www.liputan6.com/regional/read/5116762/peneliti-ungkap-tinggi-tsunami-di-selatan-jawa-barat-bisa-capai-34-meter-lampaui-aceh-pada-2004" style="text-decoration:none;"><b>Peneliti Ungkap Tinggi Tsunami di Selatan Jawa Barat Bisa Capai 34 Meter, Lampaui Aceh pada 2004</b></a></h6>

                      </figcaption>
                      <figcaption class="figure-caption mt-2 mb-2">
                        <div class="date"><small class="text-light"> 17 November 2022 | 19:51 WIB</small></div>
                        <p><small class="text-light">Sejumlah peneliti Indonesia baru-baru ini merilis hasil riset terkait zona kegempaan di wilayah Jawa Barat bagian selatan dan Sumatra. Dalam laporan tersebut, tsunami setinggi 34 meter dapat dipicu oleh gempa bumi dengan kekuatan magnitudo 8,9 di dan sekitar Pulau Jawa dan Sumatra di Indonesia.</small></p>

                      </figcaption>

                    </figure>

                  </div>
                </div>

                <!-- <div class="more text-right"><small><a href="https://bnpb.go.id/berita" class="btn-link text-light text-uppercase">Berita Terbaru Lainnya <i class="fa fa-angle-right"></i></a></small></div> -->

              </div>
  </section>
  <footer class="section-footer mb-4 border-top">
    <div class="container-fluid border-top">
      <div class="row justify-content-center align-items-center pt-3">
        <div class="row justify-content-center align-items-center pt-4">
          <div class="col-auto text-gray-500 font-weight-light">
            2022 Copyright Tsunami Center • All rights reserved • Made in Yogyakarta
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
  <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
  <script src="frontend/libraries/retina/retina.min.js"></script>
  </body>

</html>