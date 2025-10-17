<!DOCTYPE HTML>
<html>

<head>
  <title>Website Informatika </title>
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
          <li><a href="{{url('/riset')}}">Riset</a></li>
          <li class="selected"><a href="{{url('/lain')}}">lainnya</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">

     <div id="content">
    <!-- insert the page content here -->
    <h1>Halaman Lainnya</h1>
    <p>Di halaman ini, Anda akan menemukan berbagai informasi menarik dan tambahan yang tidak tercakup dalam kategori utama lainnya. Kami berkomitmen untuk memberikan berbagai konten yang relevan dan bermanfaat bagi pengunjung kami.</p>

    <h2>Berita Terbaru</h2>
    <p>Kami selalu berusaha memperbarui pengunjung kami dengan berita terbaru seputar dunia pendidikan, teknologi, dan kegiatan kampus. Berikut adalah beberapa berita terbaru yang bisa Anda baca:</p>

    <ul>
        <li><a href="#">Penelitian Terbaru: Inovasi dalam Pendidikan Digital</a></li>
        <li><a href="#">Pengenalan Fasilitas Kampus Baru untuk Mahasiswa</a></li>
        <li><a href="#">Program Magang Tahun 2025 Dibuka! Daftar Sekarang</a></li>
        <li><a href="#">Partisipasi Universitas dalam Konferensi Internasional</a></li>
    </ul>

    <h2>Acara Mendatang</h2>
    <p>Berikut adalah beberapa acara yang akan datang di kampus kami. Jangan lewatkan kesempatan untuk berpartisipasi dalam acara-acara berikut:</p>
    
    <ul>
        <li><strong>Workshop Teknologi dan Inovasi:</strong> Pelatihan tentang teknologi terbaru di dunia pendidikan - 10 November 2025.</li>
        <li><strong>Seminar Pendidikan Tinggi:</strong> Diskusi tentang masa depan pendidikan tinggi di Indonesia - 15 November 2025.</li>
        <li><strong>Job Fair 2025:</strong> Kesempatan kerja bagi mahasiswa dan alumni - 25 November 2025.</li>
    </ul>

    <h2>Informasi Penting</h2>
    <p>Untuk mendukung mahasiswa dalam kegiatan akademik dan non-akademik, berikut adalah beberapa informasi penting yang perlu diketahui:</p>
    
    <ul>
        <li><strong>Jadwal Ujian Semester Gasal 2025:</strong> Pastikan Anda mengetahui jadwal ujian semester ini dan mempersiapkan diri dengan baik.</li>
        <li><strong>Prosedur Pendaftaran Kursus Online:</strong> Mahasiswa dapat mengakses dan mendaftar kursus secara online melalui portal mahasiswa.</li>
        <li><strong>Peraturan Kampus:</strong> Jangan lupa untuk membaca dan memahami peraturan kampus yang berlaku.</li>
    </ul>

    <h2>Galeri Foto</h2>
    <p>Berikut adalah beberapa foto kegiatan yang telah berlangsung di kampus kami. Anda bisa melihat lebih banyak foto kegiatan di galeri kami:</p>

    <div class="photo-gallery">
        <img src="style/graphic.png" alt="Foto Kegiatan Kampus 1" />
        <img src="style/graphic.png" alt="Foto Kegiatan Kampus 2" />
        <img src="style/graphic.png" alt="Foto Kegiatan Kampus 3" />
    </div>

    <h2>Formulir Kontak</h2>
    <p>Jika Anda memiliki pertanyaan atau ingin memberikan masukan, silakan hubungi kami melalui formulir di bawah ini:</p>
    
    <form action="#" method="post">
        <div class="form_settings">
            <p><span>Nama Anda</span><input type="text" name="name" value="" /></p>
            <p><span>Email Anda</span><input type="email" name="email" value="" /></p>
            <p><span>Pesan Anda</span><textarea rows="8" cols="50" name="message"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Kirim Pesan" /></p>
        </div>
    </form>
</div>

    </div>
    <div id="content_footer"></div>
     @include('layout.footer')
  </div>
</body>
</html>
