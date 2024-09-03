<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        /* Mengatur tampilan dasar untuk halaman */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Jenis font yang digunakan */
    margin: 0; /* Menghapus margin default pada body */
    padding: 0; /* Menghapus padding default pada body */
    display: flex; /* Menggunakan Flexbox untuk tata letak sidebar dan konten */
}

/* Styling untuk sidebar */
.sidebar {
    width: 250px; /* Lebar sidebar */
    background-color: pink; /* Warna latar belakang sidebar */
    padding: 20px; /* Padding di dalam sidebar */
    color: white; /* Warna teks di sidebar */
    height: 100vh; /* Sidebar mengisi tinggi layar penuh */
}

/* Styling untuk judul sidebar */
.sidebar h2 {
    margin-top: 0; /* Menghapus margin atas pada judul sidebar */
    color: #ffffff; /* Warna teks putih untuk judul */
}

/* Styling untuk daftar menu di sidebar */
.sidebar ul {
    list-style-type: none; /* Menghapus bullet points dari daftar */
    padding: 0; /* Menghapus padding default pada daftar */
}

/* Styling untuk setiap item dalam daftar menu di sidebar */
.sidebar ul li {
    margin: 15px 0; /* Jarak vertikal antara item menu */
}

/* Styling untuk link di dalam sidebar */
.sidebar ul li a {
    color: white; /* Warna teks putih untuk link */
    text-decoration: none; /* Menghapus garis bawah pada link */
    font-size: 18px; /* Ukuran font untuk link */
    transition: color 0.3s ease; /* Efek transisi saat warna teks berubah */
}

/* Efek hover untuk link di sidebar */
.sidebar ul li a:hover {
    color: #93acf0; /* Warna teks saat di-hover */
}

/* Styling untuk area konten utama */
.content {
    flex-grow: 1; /* Membuat konten mengisi sisa ruang di sebelah sidebar */
    padding: 20px; /* Padding di dalam area konten */
}

/* Styling untuk judul di area konten */
.content h1 {
    color: #1e2e49; /* Warna teks untuk judul di konten */
}

    </style>
</head>
<body>

<!-- Sidebar untuk navigasi -->
<div class="sidebar">
    <h2>Menu</h2> <!-- Judul sidebar -->
    <ul>
        <!-- Item pertama pada sidebar, mengarah ke halaman utama -->
        <li><a href="index.php">Home</a></li>
        <!-- Item kedua pada sidebar, mengarah ke halaman profil -->
        <li><a href="profil.php">Profile</a></li>
        <!-- Tambahkan menu lain jika diperlukan -->
    </ul>
</div>

<!-- Area konten utama -->
<div class="content">
    <h1>Selamat Datang di Halaman Utama</h1> <!-- Judul utama pada halaman -->
    <p>Ini adalah halaman website tentang aku ⸜(｡˃ ᵕ ˂ )⸝♡</p>
    <!-- Paragraf pengantar untuk halaman utama -->
</div>

</body>
</html>