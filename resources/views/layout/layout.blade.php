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
    <!-- header -->
    @include('layout.header')
    <!-- end header -->
    <div id="site_content">
      <!-- sidebar -->
    @include('layout.sidebar')
      <!-- end sidebar -->
      <div id="content">
    <!-- Insert the page content here -->
    <h1>Selamat Datang di Website Universitas Informatika</h1>
    <p>Selamat datang di website resmi Universitas Informatika, sebuah lembaga pendidikan tinggi yang berfokus pada pengembangan teknologi dan ilmu komputer. Kami menyediakan berbagai program pendidikan yang dirancang untuk mempersiapkan mahasiswa menghadapi tantangan dunia digital yang terus berkembang.</p>
    
    <p>Website ini dirancang untuk memberikan informasi yang lengkap tentang universitas kami, mulai dari profil kampus, fasilitas pendidikan, hingga kegiatan riset dan pengabdian masyarakat yang kami lakukan. Kami berharap Anda dapat menemukan informasi yang bermanfaat mengenai segala hal yang ada di universitas kami.</p>
    
    <h2>Tentang Kami</h2>
    <p>Universitas Informatika berkomitmen untuk memberikan pendidikan berkualitas dengan kurikulum yang berorientasi pada perkembangan teknologi terkini. Dikenal sebagai pusat pengembangan ilmu komputer, kami memiliki berbagai program studi yang dirancang untuk memenuhi kebutuhan industri teknologi yang semakin maju.</p>

    <h2>Program Studi Unggulan</h2>
    <p>Beberapa program studi yang kami tawarkan di antaranya:</p>
    <ul>
        <li>Teknik Informatika</li>
        <li>Manajemen Sistem Informasi</li>
        <li>Pendidikan Teknologi Informasi</li>
        <li>Desain Komunikasi Visual</li>
    </ul>

    <p>Dengan fasilitas pendidikan yang lengkap, laboratorium yang modern, dan pengajaran dari dosen yang berkompeten, kami siap membantu mahasiswa untuk mencapai potensi terbaik mereka di bidang teknologi informasi.</p>

    <h2>Fasilitas & Infrastruktur</h2>
    <p>Universitas Informatika memiliki fasilitas yang mendukung pengalaman belajar yang optimal, di antaranya:</p>
    <ul>
        <li>Laboratorium komputer dan multimedia</li>
        <li>Perpustakaan digital dengan koleksi e-book dan jurnal ilmiah</li>
        <li>Ruang seminar dan ruang kelas interaktif</li>
        <li>Area rekreasi dan pusat kebugaran untuk mahasiswa</li>
    </ul>

    <h2>Aktivitas Mahasiswa</h2>
    <p>Di luar kegiatan akademik, mahasiswa Universitas Informatika juga aktif dalam berbagai organisasi kemahasiswaan, mulai dari klub teknologi hingga kegiatan sosial. Kami juga menyediakan kesempatan magang yang memungkinkan mahasiswa untuk mendapatkan pengalaman langsung di industri.</p>

    <p>Kami juga rutin menyelenggarakan seminar, workshop, dan hackathon untuk mendukung pengembangan keterampilan praktis mahasiswa.</p>

    <h2>Browser Compatibility</h2>
    <p>Website kami dapat diakses dengan baik di berbagai browser modern, termasuk:</p>
    <ul>
        <li>Google Chrome</li>
        <li>Mozilla Firefox</li>
        <li>Microsoft Edge</li>
    </ul>
    <p>Pastikan Anda menggunakan browser yang diperbarui untuk pengalaman menjelajah yang optimal.</p>
</div>

      <!-- end content -->
    </div>
   @include('layout.footer')
    <!-- end footer -->
  </div>
</body>
</html>
