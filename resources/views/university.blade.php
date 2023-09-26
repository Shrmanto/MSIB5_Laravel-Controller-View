<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Style Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Style Css Profile --}}
    <link rel="stylesheet" href="{{ asset('assets/css/univ/style.css') }}">
    {{-- Style Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="padding: 1.4rem 7%">
        <div class="container">
            <a class="navbar-brand" href="#">Shrmanto.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-lg-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item mx-xl-3 mx-lg-3 mx-0">
                        <a class="nav-link" href="{{route('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('univ')}}">University</a>
                    </li>
                    <button class="btn ms-xl-3 ms-lg-3 ms-0 rounded-0"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></button>
                </ul>
            </div>
        </div>
    </nav>

    <section id="univ">
        <div class="container">
            <div class="bg-univ mb-xl-5">
                <img src="{{asset('assets/img/unej.jpg')}}" alt="" width="100%" class="pt-xl-5 pt-lg-5 pt-md-3" style="margin-top: 5rem">
            </div>
            <div class="sejarah-univ mb-xl-5">
                <h1 class="mb-xl-4 text-center">📚Sejarah📚</h1>
                <div class="mb-3" style="border-bottom: 5px solid #FFB100"></div>
                <p>Cikal bakal Universitas Jember berasal dari gagasan dr. R. Achmad bersama-sama dengan R. Th. Soengedi dan R. M. Soerachman yang bercita-cita mendirikan perguruan tinggi di Jember. Untuk mewujudkan cita-cita tersebut pada tanggal 1 April 1957, ketiganya membentuk panitia yang diberi nama Panitia Triumviraat dengan komposisi Ketua dr. R. Achmad; Penulis R. Th. Soengedi, dan Bendahara R. M. Soerachman. Selanjutnya Panitia Triumviraat ini pada tanggal 5 Oktober 1957 membentuk yayasan dengan nama Yayasan Universitas Tawang Alun (disahkan dengan Akta Notaris tanggal 8 Maret 1958 Nomor 13 di Jember). Yayasan Universitas Tawang Alun inilah yang kemudian mendirikan universitas swasta di Jember dengan nama Universitas Tawang Alun yang kemudian disingkat UNITA.</p>
                <p>Dalam perjalanannya, ketiga tokoh tersebut mendapatkan dukungan penuh Bupati Jember saat itu, R. Soedjarwo. Berdasarkan Surat Keputusan Menteri PTIP No. 151 Tahun 1964 tanggal 9 Nopember 1964, tentang didirikannya Universitas Negeri di Jember. Usaha tanpa kenal lelah sejak tahun 1957 itu akhirnya berhasil menjadi kenyataan, Universitas Negeri Djember berdiri ! Pada awal berdirinya pada tahun 1964, Universitas Negeri Djember yang disingkat UNED, memiliki lima fakultas, terdiri dari Fakultas Hukum di Jember, dengan cabangnya di Banyuwangi, Fakultas Sosial dan Politik dan Fakultas Pertanian di Jember, Fakultas Ekonomi dan Fakultas Sastra di Banyuwangi. Dengan rektor pertama dijabat oleh dr. R. Achmad. Kepemimpinan dr. R. Achmad dilanjutkan oleh Letkol. R. Winoto (1966-1967), Letkol Soedi Harjohoedojo (1967-1969), Letkol. Soetardjo, SH (1969-1978) dan Kol. Drs. H. R. Warsito (1978-1986).</p>
                <p>Baru semenjak tahun 1986, rektor Universitas Jember dijabat oleh sivitas akademika-nya sendiri, yakni oleh Prof. Dr. Simanhadi Widyaprakosa (1986-1995), Prof. Dr. Kabul Santoso, MS (1995-2003), Dr. Ir. T. Sutikto, MSc (2003-2011), Drs. Moh. Hasan, Msc Ph.D. (2012-2020) dan Dr. Ir. Iwan Taruna, M.Eng. (2020 sampai sekarang)</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="visi text-center">
                        <div class="title">
                            <h1>Visi</h1>
                        </div>
                        <div class="mb-3" style="border-bottom: 5px solid #FFB100"></div>
                        <div class="desc">
                            <p>Menjadi Universitas unggul dalam pengembangan sains, teknologi, dan seni berwawasan lingkungan, bisnis, dan pertanian industrial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 mt-xl-0 mt-lg-0 mt-4">
                    <div class="misi">
                        <div class="title">
                            <h1 class="text-center">Misi</h1>
                        </div>
                        <div class="mb-3" style="border-bottom: 5px solid #FFB100"></div>
                        <div class="desc">
                            <p>– Menyelenggarakan dan mengembangkan pendidikan akademik, vokasi, dan profesi yang berkualitas, berwawasan lingkungan, bisnis, dan pertanian industrial serta bereputasi internasional.</p>
                            <p>– Menghasilkan dan mengembangkan sains, teknologi dan seni melalui proses pembelajaran, penelitian dan pengabdian kepada masyarakat yang kreatif, inovatif, dan bernilai.</p>
                            <p>– Mengembangkan sistem pengelolaan universitas yang transparan dan akuntabel berbasis teknologi informasi.</p>
                            <p>– Mengembangkan jejaring kerja sama dengan pemangku kepentingan untuk meningkatkan kapasitas dan kapabilitas UNEJ.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maps-univ mt-xl-5 mt-lg-5 mt-md-4 mt-sm-4 mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3726648355982!2d113.7138380747435!3d-8.165157591865626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd694351d727e69%3A0xec33c34804a10832!2sUniversitas%20Jember!5e0!3m2!1sid!2sid!4v1695574287143!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
