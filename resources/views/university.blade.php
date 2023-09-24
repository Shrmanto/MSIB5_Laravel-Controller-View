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
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{route('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('univ')}}">University</a>
                    </li>
                    <button class="btn ms-3 rounded-0"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></button>
                </ul>
            </div>
        </div>
    </nav>

    <section id="univ">
        <div class="container">
            <div class="bg-univ mb-xl-5">
                <img src="{{asset('assets/img/unej.jpg')}}" alt="" width="100%" class="pt-xl-5 pt-lg-5 pt-md-3" style="margin-top: 5rem">
            </div>
            <div class="sejarah-univ">
                <h1>Sejarah</h1>
                <div class="row">
                    <div class="col-xl-5 d-flex align-items-center">
                        <p>Universitas Jember bermula dari gagasan dr. R. Achmad, R. Th. Soengedi, dan R. M. Soerachman pada tahun 1957. Mereka membentuk Panitia Triumviraat dan kemudian mendirikan Yayasan Universitas Tawang Alun pada tahun 1958. Universitas Tawang Alun disingkat menjadi UNITA.
                            Dengan dukungan Bupati Jember, R. Soedjarwo, Universitas Negeri Djember (UNED) didirikan berdasarkan Surat Keputusan Menteri PTIP No. 151 Tahun 1964. UNED awalnya terdiri dari lima fakultas dan dipimpin oleh dr. R. Achmad. Kepemimpinan rektor kemudian dipegang oleh berbagai tokoh hingga tahun 1986.
                            Pada tahun 1986, rektor UNED pertama kali dijabat oleh sivitas akademika sendiri, Prof. Dr. Simanhadi Widyaprakosa. Kemudian, beberapa rektor lainnya memimpin universitas ini hingga saat ini, termasuk Drs. Moh. Hasan, Msc Ph.D. (2012-2020) dan Dr. Ir. Iwan Taruna, M.Eng. (sekarang).</p>
                    </div>
                    <div class="offset-xl-1 col-xl-6 d-flex justify-content-center">
                        <img src="{{asset('assets/img/logo-unej.png')}}" alt="" width="50%">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
