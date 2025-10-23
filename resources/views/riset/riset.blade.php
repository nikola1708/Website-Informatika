<!DOCTYPE HTML>
<html>

<head>
  <title>Website Informatika</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">black<span class="logo_colour">&amp;white</span></a></h1>
          <h2>Black &amp; White Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
        <li><a href="{{url('/beranda')}}">Beranda</a></li>
          <li><a href="{{url('/profil')}}">Profil</a></li>
          <li><a href="{{url('/mahasiswa')}}">Mahasiswa</a></li>
          <li><a href="{{url('/pendidikan')}}">Pendidikan</a></li>
          <li class="selected"><a href="{{url('/riset')}}">Riset</a></li>
          <li><a href="{{url('/lain')}}">lainnya</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">

     <div id="content">
    <!-- insert the page content here -->
    <h1>Mahasiswa di Universitas Informatika</h1>
    <p>Di Universitas Informatika, mahasiswa adalah pusat dari setiap kegiatan akademik dan pengembangan diri. Kami percaya bahwa mahasiswa tidak hanya belajar di dalam kelas, tetapi juga berkembang melalui kegiatan ekstrakurikuler, penelitian, dan pengalaman langsung yang mereka dapatkan selama masa studi.</p>

    <h2>Pengalaman Mahasiswa</h2>
    <p>Menjadi mahasiswa di universitas kami berarti memiliki kesempatan untuk belajar dengan para ahli di bidangnya, berkolaborasi dalam proyek-proyek inovatif, dan berinteraksi dengan mahasiswa dari berbagai latar belakang. Kami menekankan pentingnya keterlibatan mahasiswa dalam kegiatan kampus, yang dapat membantu mengembangkan keterampilan kepemimpinan, kerja tim, dan kreativitas.</p>

    <h3>Aktivitas Ekstrakurikuler</h3>
    <p>Universitas Informatika menawarkan berbagai macam kegiatan ekstrakurikuler untuk mahasiswa, mulai dari organisasi kemahasiswaan, klub teknologi, olahraga, hingga seni dan budaya. Kegiatan ini dirancang untuk memperkaya pengalaman mahasiswa dan memberikan kesempatan untuk mengasah keterampilan di luar kelas.</p>

    <h3>Program Magang dan Kerja Lapangan</h3>
    <p>Sebagai bagian dari komitmen kami untuk mempersiapkan mahasiswa menghadapi dunia profesional, kami menawarkan berbagai program magang dan kerja lapangan di perusahaan mitra kami. Melalui magang, mahasiswa dapat mengaplikasikan ilmu yang telah dipelajari di kelas dalam situasi dunia nyata, memperluas jaringan profesional, dan meningkatkan peluang kerja setelah lulus.</p>

    <h3>Mahasiswa Berprestasi</h3>
    <p>Universitas Informatika memberikan penghargaan kepada mahasiswa yang menunjukkan prestasi luar biasa, baik di bidang akademik, olahraga, maupun seni. Kami percaya bahwa setiap mahasiswa memiliki potensi untuk menjadi yang terbaik, dan kami berkomitmen untuk memberikan dukungan penuh agar mereka dapat mencapai tujuan mereka.</p>

    <h2>Fasilitas untuk Mahasiswa</h2>
    <p>Kami menyediakan berbagai fasilitas yang mendukung kegiatan belajar mengajar dan pengembangan diri mahasiswa, di antaranya:</p>
    <ul>
        <li><strong>Ruang Kelas Modern:</strong> Dilengkapi dengan teknologi terbaru untuk mendukung proses pembelajaran yang interaktif dan menyenangkan.</li>
        <li><strong>Perpustakaan Digital:</strong> Mengakses koleksi buku, jurnal, dan materi akademik lainnya secara online melalui platform perpustakaan digital.</li>
        <li><strong>Laboratorium Komputer:</strong> Fasilitas lab komputer dengan perangkat lunak terbaru yang mendukung berbagai program studi, khususnya di bidang teknologi dan desain.</li>
        <li><strong>Area Diskusi:</strong> Ruang untuk mahasiswa berdiskusi, berbagi ide, dan bekerja sama dalam proyek-proyek kelompok.</li>
        <li><strong>Wi-Fi Gratis:</strong> Akses internet cepat yang tersedia di seluruh area kampus, mendukung kegiatan pembelajaran dan riset mahasiswa.</li>
    </ul>

    <h2>Proses Penerimaan Mahasiswa Baru</h2>
    <p>Untuk menjadi bagian dari komunitas Universitas Informatika, calon mahasiswa harus melalui proses pendaftaran yang transparan dan mudah. Kami menerima pendaftaran baik secara online maupun offline, dengan berbagai pilihan program studi yang dapat disesuaikan dengan minat dan tujuan karir calon mahasiswa. Untuk informasi lebih lanjut, silakan kunjungi <a href="/pendaftaran">halaman pendaftaran kami</a>.</p>

    <h2>Browser Compatibility</h2>
    <p>Website kami dapat diakses dengan baik di berbagai browser modern, termasuk:</p>
    <ul>
        <li>Google Chrome</li>
        <li>Mozilla Firefox</li>
        <li>Microsoft Edge</li>
    </ul>
    <p>Pastikan Anda menggunakan browser terbaru untuk pengalaman menjelajah yang optimal.</p>
</div>

    </div>
    <div id="content_footer"></div>
    @include('layout.footer')
  </div>
</body>
</html>
