@extends('layout.layout')

@section('container')

<div class= "content-wrapper"> 
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
      </section>
    <section class="about-video-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-video-left">
                    <br>
                    <h1>
                        Cabang Dinas Kehutanan (CDK)
                        Wilayah Malang                     <br>
                    </h1>
                    <br>
                    
                </div>
                <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">
                    <a class="play-btn"><img src ="{{ asset ('img/logo-provinsi-jatim.png') }}" width="150px"  ></a>
                    <a class="play-btn"><img src ="{{ asset ('img/kehutanan.png') }}" width="140px"  ></a>
                    
                </div>
                <br>
                <hr>
            </div>
        </div>

        <br>
        <br>
        <section class="u-clearfix u-section-1" id="carousel_db14">
            <div class="u-clearfix u-sheet u-sheet-1">
              <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                  <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                      <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h2 style="text-align:left">About CDK</h2>
                        <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                        <br>
                        
                        <p class="u-text u-text-2">CDK Atau Cabang Dinas Kehutanan Yang Berada Di Kota Malang , Bertugas Untuk Melaksanakan Urusan Kehutanan , Yang Meliputi Pengelolaan Hutan , Konservasi Sumber Daya Alam , Dan Pengelolaan Daerah Aliran Sungai Di Kota Malang Serta 
                            Kab . Malang Dan Kab . Blitar . Kantor Cabang Dinas Kehutanan Sendiri Terletak Di Kab . Malang Tepatnta Di Jl. Raya Genengan No.9,3, Dusun Binangun, Genengan, Kec. Pakisaji, Kabupaten Malang, Jawa Timur.
                        </p>
                      </div>
                      <br>
                    </div>
                    <div class="u-container-style u-expand-resize u-image u-layout-cell u-right-cell u-size-30 u-image-1">
                      <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="u-clearfix u-section-1" id="carousel_db14">
            <div class="u-clearfix u-sheet u-sheet-1">
              <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                  <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                      <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h2 style="text-align:left">Sistem Informasi CDK</h2>
                        <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                        <br>
                        
                        <p class="u-text u-text-2">Sistem Informasi Yang Dimiliki Oleh CDK Sendiri Yaitu Bernama Si Mas Hasan atau Sistem Informasi Pemasaran Hasil Hutan.
                          Pada bagian ini pengunjung website dapat melihat lokasi usaha-usaha yang bergerak di pemasaran hasil hutan yang terletak di Kota Malang, Kabupaten Malang, Kota Blitar, Kabupaten Blitar dan Kota Batu ,
                          Fitur Didalamnya Juga Banyak Yaitu Peta Hasil Hutan Yang Dinaungi Oleh CDK Malang ( Kota Malang , Kabupaten Malang , Kota Biltar , Kabutapen Blitar Dan kota Batu)
                        </p>
                        <div class="col">
                          <p class=""></p>
                          <a href="https://cdkmalang.dishut.jatimprov.go.id" class="btn btn-primary">CDK Malang</a>
                          <a href="https://cdkmalang.dishut.jatimprov.go.id/simashasan/" class="btn btn-warning">Si Mas Hasan</a>
                      </div>                      
                      <br>
                    </div>
                    <div class="u-container-style u-expand-resize u-image u-layout-cell u-right-cell u-size-30 u-image-1">
                      <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <br>
          <br>
          <br>
          <br>
          <h2 style="text-align:center">Galeri CDK</h2>
          <br>
<div class="row">
  <div class="column">
    <div class="card">
      <link rel="stylesheet" href="css/about.css">
      <img src="{{ asset ('img/galeri1.jpg') }}" alt="Jane" style="width:100%">
      <div class="container">
        <br>
        <h2>Pembagian Bibit</h2>
        <p>Pembagian Bibit Kopi jenis Arabika dari kegiatan CSR Bank Indonesia pada Kelompok Tani Hutan Wono Bhakti Desa Kemirigede Kecamatan Kesamben Kabupaten Blitar. Bibit kopi yang diberikan sebanyak 1.000 batang dengan diharapkan bibit dapat bermanfaat bagi masyarakat sehingga dapat meningkatkan perekonomian masyarakat.</p>
        <p><button class="button">Berita</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
        <img src="{{ asset ('img/galeri2.jpg') }}" alt="Jane" style="width:100%">
        <div class="container">
            <br>
            <h2>Monitoring RTT</h2>
            <p>Kegiatan pengecekan ini dilakukan guna memastikan bahwa kegiatan tersebut sudah dilaksanakan sesuai dengan prosedur kerja dan sesuai dengan yang telah di laporkan pada Laporan Rencana dan Realisasi RTT Semester I Tahun 2022 KPH Malang.</p>
            <p><button class="button">Berita</button></p>
          </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{ asset ('img/galeri3.jpg') }}" alt="John" style="width:100%">
      <div class="container">
        <br>
        <h2>Penanaman Bibit</h2>
        <p>Cabang Dinas Kehutanan Wilayah Malang, Bank Republik Indonesia (BRI), KTH. Wono Bhakti serta Pemerintah Desa Kemirigede telah melakukan penaman 200 batang Alpukat bersama-sama di Desa Kemirigede Kecamatan Kesamben Kabupaten Blitar.</p>
        <p><button class="button">Berita</button></p>
      </div>
    </div>
  </div>
</div>
        
        










@endsection




