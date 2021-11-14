@extends('layouts/home/main-layout')
@section('title', 'Selamat Datang')
@section('content')

<!--------- WELCOME TEXT -------------->
<div class="container">
    <div class="row">
      <div class="col-md-8">
        <img src="{{asset('login/img/profil.jpg')}}" class="img-fluid" alt="profil">
    </div>
    <div class="text-side col-6 col-md-4">
        <h4>Selamat Datang di E-Proc UMSIDA</h4><br>
        <p>Aplikasi ini merupakan perangkat lunak berbasis internet dikembangkan oleh Universitas Muhammadiyah Sidoarjo (UMSIDA)  dan dirancang secara khusus untuk memfasilitasi proses pengadaan barang dan jasa lainnya. Kedepannya, Sistem e-Proc UMSIDA sendiri tidak hanya sebatas dengan proses pembelian barang dan jasa lainnya, akan tetapi juga bisa dikembangkan ke dalam proses negosiasi-negosiasi elektronik dan pengambilan keputusan atas kontrak-kontrak dengan Penyedia barang dan jasa lainnya.

            <br><br>Aplikasi ini diharapkan bisa membuat pelaksanaan pengadaan barang atau jasa dapat berjalan secara transparan, adil dan menciptakan persaingan yang sehat. Selain itu aplikasi ini merupakan solusi untuk mencegah dan meminimalisir adanya peluang terjadinya fraud tindakan korupsi karena semua peserta pengadaan barang/jasa dapat saling mengawasi. Selain itu, peluang untuk melakukan kontak langsung antara penyedia barang atau jasa dengan panitia pengadaan menjadi semakin kecil.
        </p>
    </div>
    </div>
</div>
<!--------- BOTTON BIASA-------------->
<section>
    <div class="container">
        <div class="list-btn">
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-light"><a href="announcemet.html">Pengumuman Pengadaan</a></button>
            <button type="button" class="btn btn-outline-light"><a href="list-finalis.html">Daftar Penyedia Terseleksi</a></button>
            <button type="button" class="btn btn-outline-light"><a href="pakta.html">Pakta Integritas</a></button>
        </div>
        </div>
    </div>
</section>
<!--------- MAIN BOTTON-------------->
<section>
    <div class="container">
        <div class="row-btn">
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-dark"><a href="pakta.html">Pengadaan Barang / Alat</a></button>
            <button type="button" class="btn btn-outline-dark"><a href="#">Pekerjaan Konstruksi</a></button>
            <button type="button" class="btn btn-outline-dark"><a href="#">Jasa Konsultasi Badan Usaha</a></button>
            <button type="button" class="btn btn-outline-dark"><a href="#">Jasa Konsultasi Perorangan</a></button>
            <button type="button" class="btn btn-outline-dark"><a href="#">Jasa Lainnya</a></button>
        </div>
        </div>
    </div>

<!--------- PROFILE VISI MISI-------------->
<div class="profil">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="profil-text">
                <h4 style="text-align: center;"><b>Visi</b></h4>
              <p>Menjadi perguruan tinggi unggul dan inovatif dalam pengembangan IPTEKS berdasarkan nilai-nilai Islam untuk kesejahteraan masyarakat.</p><br>
                </div>
            </div>
          
          <div class="col-sm-8">
            <div class="profil-text">
              <h4 style="text-align: center;"><b>Misi</b></h4>
              <p>
              <ol class="list">
                <li> Pendidikan dan pengajaran secara profesional sesuai perkembangan IPTEKS berdasarkan nilai-nilai Islam.</li>
                <li> Meningkatkan penelitian yang mendukung proses pembelajaran dan pengembangan IPTEKS untuk kesejahteraan masyarakat.</li>
                <li> Meningkatkan pengabdian kepada masyarakat untuk kesejahteraan masyarakat.</li>
                <li> Meningkatkan kerjasama dengan lembaga di dalam dan luar negeri.</li>
                <li> Meningkatkan tata kelola secara professional berdasarkan nilai-nilai Islam.</li>
                <li> Meningkatkan pembinaan dan pengembangan kemahasiswaan berdasarkan nilai-nilai Islam.</li>
              </ol>
              </p>
              
            </div>
          </div>
        </div>
    </div>
</div>

 </section>
<!--------- ANNOUNCEMENT -------------->
<div class="container">
    <div class="row">
      <div class="col-sm">
        <h4 class="head-col"><b>Pengumuman Pengadaan</b></h4>
        <p class="box-col ">Universitas Muhammadiyah Sidoarjo akan melakukan pengadaan barang/jasa sebagaimana terlampir pada daftar di bawah ini, yang dapat diikuti oleh Penyedia yang memiliki bidang dan sub bidang usaha yang sesuai. aplikasi ini diharapkan akan memberikan informasi yang lebih transparan kepada pihak eksternal. <br> Silakan registrasi terlebih dahulu [disini] atau login  <a href="#">di sini</a> bagi yang sudah memiliki akun user E-Proc.</p>
      </div>
      <div class="col-sm">
        <h4 class="head-col"><b>Pengumuman DPT</b></h4>
        <p class="box-col ">Selamat datang di menu e-DPT UMSIDA,
          E-DPT UMSIDA adalah aplikasi untuk proses pendaftaran Calon Mitra Penyedia Barang/Jasa yang berminat untuk menjadi Perusahaan yang terdaftar di E-DPT (Daftar Penyedia Terseleksi) UMSIDA, dimana aplikasi ini diharapkan akan memberikan informasi yang lebih transparan kepada pihak eksternal. 
          Untuk memulai pendaftaran, Bapak/Ibu silakan registrasi terlebih dahulu  atau login  <a href="#">di sini</a> bagi yang sudah memiliki akun <i>user</i> E-Proc.
          </p>
      </div>
    </div>
</div>
@endsection