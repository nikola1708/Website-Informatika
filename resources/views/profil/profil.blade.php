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
          <li class="selected"><a href="{{url('/profil')}}">Profil</a></li>
          <li><a href="{{url('/mahasiswa')}}">Mahasiswa</a></li>
          <li><a href="{{url('/pendidikan')}}">Pendidikan</a></li>
          <li><a href="{{url('/riset')}}">Riset</a></li>
          <li><a href="{{url('/lain')}}">lainnya</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">

      <div id="content">
     <h1>Profil Universitas Informatika</h1>
<p>Selamat datang di halaman profil Universitas Informatika. Di sini Anda dapat mengetahui lebih lanjut tentang sejarah, visi, misi, dan program-program unggulan yang ditawarkan oleh universitas kami.</p>

<h2>Sejarah Singkat Universitas Informatika</h2>
<p>Universitas Informatika didirikan dengan tujuan untuk menjadi pusat unggulan pendidikan di bidang teknologi informasi dan ilmu komputer. Kami berkomitmen untuk menyediakan pendidikan berkualitas yang mendukung perkembangan teknologi dan inovasi di Indonesia.</p>

<h2>Visi dan Misi</h2>
<p><strong>Visi:</strong> Menjadi universitas terkemuka di bidang teknologi informasi yang berorientasi pada pengembangan ilmu pengetahuan, keterampilan, dan karakter mahasiswa untuk menghadapi tantangan global.</p>
<p><strong>Misi:</strong>
  <ul>
    <li>Menyelenggarakan pendidikan yang berkualitas dan relevan dengan kebutuhan industri teknologi informasi.</li>
    <li>Mendorong penelitian dan pengembangan di bidang teknologi informasi untuk memberikan kontribusi bagi kemajuan masyarakat.</li>
    <li>Menyiapkan lulusan yang kompeten, inovatif, dan siap bekerja di dunia industri.</li>
    <li>Memberikan layanan masyarakat yang berbasis teknologi untuk mendukung perkembangan sosial dan ekonomi.</li>
  </ul>
</p>

<h2>Program Studi Unggulan</h2>
<p>Kami menawarkan beberapa program studi yang fokus pada pengembangan teknologi informasi dan ilmu komputer. Beberapa program studi yang tersedia antara lain:</p>
<ul>
  <li><strong>Teknik Informatika:</strong> Program ini memberikan pemahaman mendalam mengenai teknologi komputer, pemrograman, dan sistem jaringan.</li>
  <li><strong>Manajemen Sistem Informasi:</strong> Menyiapkan mahasiswa untuk mengelola proyek teknologi informasi dan sistem informasi dalam dunia bisnis.</li>
  <li><strong>Desain Komunikasi Visual:</strong> Program ini mengajarkan mahasiswa untuk memadukan kreativitas desain dengan teknologi digital untuk menciptakan produk visual yang menarik.</li>
  <li><strong>Pendidikan Teknologi Informasi:</strong> Program yang mempersiapkan mahasiswa untuk menjadi pendidik di bidang teknologi informasi di tingkat pendidikan dasar dan menengah.</li>
</ul>

<h2>Fasilitas dan Infrastruktur</h2>
<p>Universitas Informatika dilengkapi dengan fasilitas yang mendukung kegiatan akademik dan non-akademik. Fasilitas yang kami miliki antara lain:</p>
<ul>
  <li><strong>Laboratorium Komputer:</strong> Dilengkapi dengan perangkat keras dan perangkat lunak terkini untuk mendukung pembelajaran teknologi informasi.</li>
  <li><strong>Perpustakaan Digital:</strong> Menyediakan berbagai koleksi e-book, jurnal ilmiah, dan referensi digital yang dapat diakses oleh mahasiswa.</li>
  <li><strong>Ruang Seminar dan Konferensi:</strong> Fasilitas untuk kegiatan seminar, workshop, dan konferensi akademik yang diadakan secara rutin.</li>
  <li><strong>Fasilitas Olahraga dan Rekreasi:</strong> Untuk mendukung kesejahteraan mahasiswa, kami menyediakan fasilitas olahraga dan rekreasi seperti gym dan lapangan olahraga.</li>
</ul>

<h2>Aktivitas Mahasiswa</h2>
<p>Mahasiswa di Universitas Informatika terlibat dalam berbagai kegiatan akademik maupun non-akademik. Beberapa kegiatan yang dapat diikuti oleh mahasiswa antara lain:</p>
<ul>
  <li><strong>Organisasi Kemahasiswaan:</strong> Mahasiswa dapat bergabung dengan berbagai organisasi kemahasiswaan yang berfokus pada pengembangan keterampilan kepemimpinan dan manajemen.</li>
  <li><strong>Magang Industri:</strong> Kami bekerja sama dengan berbagai perusahaan teknologi untuk menyediakan kesempatan magang bagi mahasiswa, sehingga mereka dapat langsung terjun ke dunia industri.</li>
  <li><strong>Hackathon dan Kompetisi:</strong> Universitas kami rutin mengadakan hackathon dan kompetisi teknologi untuk mengasah keterampilan mahasiswa dalam pemecahan masalah dengan teknologi.</li>
</ul>

<h2>Kontak Kami</h2>
<p>Untuk informasi lebih lanjut, Anda dapat menghubungi kami melalui:</p>
<ul>
  <li>Email: <a href="mailto:info@universitasinformatika.ac.id">info@universitasinformatika.ac.id</a></li>
  <li>Telepon: +62 21 123456789</li>
  <li>Alamat: Jl. Teknologi No. 123, Jakarta, Indonesia</li>
</ul>

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
