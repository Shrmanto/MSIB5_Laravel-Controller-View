<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Style Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Style Css Home --}}
    <link rel="stylesheet" href="{{ asset('assets/css/home/style.css') }}">
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

    <section id="hero">
        <div class="jdl">
            <div class="content-img d-flex justify-content-center align-items-center" style="min-height: 100vh">
                <div class="container text-overlay d-flex align-items-center" style="min-height: 100vh">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-12">
                            <h4>Hi, I am <span style="font-size: 2.5rem; font-weight:700; color:#FFB100">Suhermanto</span></h4>
                            <h1 style="font-weight: 700">A Creative Designer and Frontend Developer</h1>
                            <div class="mb-3" style="border-bottom: 5px solid #FFB100"></div>
                            <p class="mb-4" style="font-size: 1.2rem">I am a 5th semester student from the University of Jember, faculty of computer science majoring in informatics. Own interest in the world of design, web design, web development, game design, and game development.</p>
                            <button class="btn me-2 rounded-0"><i class="fa-solid fa-envelope me-2" style="color: #ffffff;"></i>Contact Me</button>
                        </div>
                        <div class="offset-lg-2 offset-md-0 offset-sm-0 col-xl-6 col-lg-6 col-sm-6 pt-xl-5 d-flex pt-lg-5 pt-md-5 pt-sm-5 pt-5 justify-content-xl-end justify-content-lg-end">
                            <div class="content">
                                <h3 style="color: #2d2d39;">Service.</h3>
                                <p style="color: #2d2d39; font-size: 1.2rem">Let's make the world of design more fun.</p>
                                <div class="me-link my-4">
                                    <a href="" ><i class="fa-brands fa-instagram fa-2xl" style="color: #2d2d39; font-size: 2.5rem"></i></a>
                                    <a href="" class="mx-3"><i class="fa-brands fa-facebook fa-2xl" style="color: #2d2d39; font-size: 2.5rem"></i></a>
                                    <a href=""><i class="fa-brands fa-github fa-2xl" style="color: #2d2d39; font-size: 2.5rem"></i></a>
                                    <a href="" class="mx-3"><i class="fa-brands fa-linkedin fa-2xl" style="color: #2d2d39; font-size: 2.5rem"></i></a>
                                </div>
                                <div class="down-resume mt-4">
                                    <a href="" style="text-decoration: none; color:#2d2d39"><i class="fa-solid fa-file-arrow-down fa-2xl me-2" style="color: #FFB100"></i>Download Resume</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{asset('assets/img/profilehome.png')}}" alt="" width="30%" class="profile">
                <img src="{{asset('assets/img/blob-1.svg')}}" alt="" width="55%" class="bg-edit">
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
