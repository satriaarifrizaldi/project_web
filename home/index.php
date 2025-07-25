<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda - SMANDUTI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: #16a34a;
            bottom: -10px;
            left: 25%;
        }
    </style>
</head>
<body>

    <!-- {{-- Header --}}
    <?php include './template/header.html' ?> -->

    <!-- {{-- Content --}} -->
    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di SMA NEGERI 23 BATAM</h1>
                <p class="text-xl mb-8">Membentuk Generasi Unggul, Berkarakter, dan Berprestasi</p>
                <a href="#about" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 inline-flex items-center">
                    <i class="fas fa-arrow-down mr-2"></i> Jelajahi Sekolah Kami
                </a>
            </div>
        </section>

        <!-- About School Section -->
        <section id="about" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 section-title">Tentang SMA NEGERI 23 BATAM</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Profil Content -->
                    <div class="card bg-white p-6 rounded-lg shadow-md">
                        <div class="text-green-600 text-4xl mb-4">
                            <i class="fas fa-scroll"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Profil Sekolah</h3>
                        <p class="text-gray-600 mb-4">SMA NEGERI 23 BATAM berdiri sejak 2020 dengan komitmen untuk memberikan pendidikan yang berkualitas tinggi kepada Penerus bangsa dengan karakter yang unggul berlandaskan Iman dan Taqwa.</p>
                        <div class="space-y-2">
                            <a href="/home/sejarah" class="block text-green-600 hover:text-green-800"><i class="fas fa-history mr-2"></i> Sejarah Sekolah</a>
                            <a href="/home/visi-misi" class="block text-green-600 hover:text-green-800"><i class="fas fa-bullseye mr-2"></i> Visi & Misi</a>
                            <a href="/home/prestasi" class="block text-green-600 hover:text-green-800"><i class="fas fa-trophy mr-2"></i> Prestasi</a>
                        </div>
                    </div>
                    
                    <!-- SDM Content -->
                    <div class="card bg-white p-6 rounded-lg shadow-md">
                        <div class="text-green-600 text-4xl mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Sumber Daya Manusia</h3>
                        <p class="text-gray-600 mb-4">Tim pengajar profesional dan staff yang berdedikasi untuk mendidik generasi penerus bangsa.</p>
                        <div class="space-y-2">
                            <a href="/home/struktur" class="block text-green-600 hover:text-green-800"><i class="fas fa-sitemap mr-2"></i> Struktur Organisasi</a>
                            <a href="/home/guru" class="block text-green-600 hover:text-green-800"><i class="fas fa-chalkboard-teacher mr-2"></i> Guru & Staff</a>
                            <a href="/home/alumni" class="block text-green-600 hover:text-green-800"><i class="fas fa-user-graduate mr-2"></i> Alumni</a>
                        </div>
                    </div>
                    
                    <!-- Program Content -->
                    <div class="card bg-white p-6 rounded-lg shadow-md">
                        <div class="text-green-600 text-4xl mb-4">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Program Unggulan</h3>
                        <p class="text-gray-600 mb-4">Berbagai program unggulan untuk mengembangkan potensi siswa secara maksimal.</p>
                        <div class="space-y-2">
                            <a href="/home/fasilitas" class="block text-green-600 hover:text-green-800"><i class="fas fa-building mr-2"></i> Fasilitas</a>
                            <a href="/home/ekstrakurikuler" class="block text-green-600 hover:text-green-800"><i class="fas fa-futbol mr-2"></i> Ekstrakurikuler</a>
                            <a href="/home/kurikulum" class="block text-green-600 hover:text-green-800"><i class="fas fa-book mr-2"></i> Kurikulum</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News & Events Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 section-title">Berita & Kegiatan Terkini</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- News 1 -->
                    <div class="card bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="News Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2"><i class="far fa-calendar-alt mr-1"></i> 15 Juli 2023</div>
                            <h3 class="text-xl font-semibold mb-3">SMA NEGERI 23 BATAM Raih Juara 1 Olimpiade Sains Nasional</h3>
                            <p class="text-gray-600 mb-4">Tim olimpiade sains SMA NEGERI 23 BATAM berhasil meraih juara 1 dalam OSN tingkat provinsi...</p>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- News 2 -->
                    <div class="card bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                        <img src="https://images.unsplash.com/photo-1524179091875-bf99a9a6af57?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="News Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2"><i class="far fa-calendar-alt mr-1"></i> 10 Juli 2023</div>
                            <h3 class="text-xl font-semibold mb-3">Kegiatan Bakti Sosial di Panti Asuhan</h3>
                            <p class="text-gray-600 mb-4">Siswa-siswi SMA NEGERI 23 BATAM melaksanakan kegiatan bakti sosial sebagai bentuk kepedulian sosial...</p>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- News 3 -->
                    <div class="card bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                        <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="News Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2"><i class="far fa-calendar-alt mr-1"></i> 5 Juli 2023</div>
                            <h3 class="text-xl font-semibold mb-3">Workshop Pengembangan Kurikulum Merdeka</h3>
                            <p class="text-gray-600 mb-4">Guru-guru SMA NEGERI 23 BATAM mengikuti workshop pengembangan kurikulum merdeka belajar...</p>
                            <a href="#" class="text-green-600 font-medium hover:text-green-800 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-10">
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-green-600 text-green-600 font-medium rounded-lg hover:bg-green-50 transition duration-300">
                        <i class="far fa-newspaper mr-2"></i> Lihat Semua Berita
                    </a>
                </div>
            </div>
        </section>

        <!-- Academic Info Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 section-title">Informasi Akademik</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Academic 1 -->
                    <div class="card bg-white p-6 rounded-lg shadow-md">
                        <div class="text-green-600 text-4xl mb-4">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Kalender Akademik</h3>
                        <p class="text-gray-600 mb-4">Jadwal lengkap kegiatan akademik tahun pelajaran 2023/2024.</p>
                        <a href="/kalender" class="text-green-600 font-medium hover:text-green-800 inline-flex items-center">
                            Lihat Kalender <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    
                    <!-- Academic 2 -->
                    <div class="card bg-white p-6 rounded-lg shadow-md">
                        <div class="text-green-600 text-4xl mb-4">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Prestasi Siswa</h3>
                        <p class="text-gray-600 mb-4">Berbagai prestasi yang telah diraih oleh siswa-siswi SMANDUTI.</p>
                        <a href="/home/prestasi" class="text-green-600 font-medium hover:text-green-800 inline-flex items-center">
                            Lihat Prestasi <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    
                    <!-- Academic 3 -->
                    <div class="card bg-white p-6 rounded-lg shadow-md">
                        <div class="text-green-600 text-4xl mb-4">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Penerimaan Siswa Baru - Under maintanance</h3>
                        <p class="text-gray-600 mb-4">Informasi pendaftaran siswa baru tahun ajaran 2024/2025.</p>
                        <a href="#" class="text-green-600 font-medium hover:text-green-800 inline-flex items-center">
                            Info PPDB <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 section-title">Galeri Sekolah</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Gallery Image" class="w-full h-48 object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Gallery Image" class="w-full h-48 object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://images.unsplash.com/photo-1524179091875-bf99a9a6af57?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Gallery Image" class="w-full h-48 object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Gallery Image" class="w-full h-48 object-cover hover:scale-105 transition duration-300">
                    </div>
                </div>
                
                <div class="text-center mt-10">
                    <a href="/home/galeri" class="inline-flex items-center px-6 py-3 border border-green-600 text-green-600 font-medium rounded-lg hover:bg-green-50 transition duration-300">
                        <i class="far fa-images mr-2"></i> Lihat Galeri Lengkap
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- {{-- Footer --}}
    <?php include 'template/footer.php' ?> -->
    
</body>
</html>