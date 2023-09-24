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
    <link rel="stylesheet" href="{{ asset('assets/css/profile/style.css') }}">
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
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">University</a>
                    </li>
                    <button class="btn ms-3 rounded-0"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></button>
                </ul>
            </div>
        </div>
    </nav>

    <section id="profile">
        <div class="container">
            <div class="content"  style="min-height: 100vh">
                <div class="row" style="min-height: 100vh">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="content-text mt-lg-2 mt-xl-3 mt-md-5 mt-sm-5">
                            <div class="content-me mb-5 mt-lg-2 mt-xl-3 mt-md-5 mt-sm-5 mt-5">
                                <h1>About Me</h1>
                                <p style="font-size: 1.2rem">I am a 5th semester student from the University of Jember, faculty of computer science majoring in informatics. Own interest in the world of design, web design, web development, game design, and game development.</p>
                            </div>
                            <div class="content-skils">
                                <h1>Skills</h1>
                                <p style="font-size: 1.2rem">Some of the skills that I have mastered quite well, I hope to be able to further develop my skills.</p>
                                <div class="progress-html mb-3">
                                    <label for="">HTML</label>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 1.3rem; background-color: #e0d7be;">
                                        <div class="progress-bar" style="width: 75%; background-color: #FFB100;">75%</div>
                                    </div>
                                </div>
                                <div class="progress-css mb-3">
                                    <label for="">CSS</label>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="height: 1.3rem; background-color: #e0d7be;">
                                        <div class="progress-bar" style="width: 70%; background-color: #FFB100;">70%</div>
                                    </div>
                                </div>
                                <div class="progress-js mb-3">
                                    <label for="">JavaScript</label>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="height: 1.3rem; background-color: #e0d7be;">
                                        <div class="progress-bar" style="width: 55%; background-color: #FFB100;">55%</div>
                                    </div>
                                </div>
                                <div class="progress-bs mb-4">
                                    <label for="">Bootstrap</label>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 1.3rem; background-color: #e0d7be;">
                                        <div class="progress-bar" style="width: 80%; background-color: #FFB100;">80%</div>
                                    </div>
                                </div>
                                <div class="icon-skills d-flex">
                                    <div class="icon me-3 shadow-sm rounded-3">
                                        <img src="{{asset('assets/img/html.png')}}" alt="" width="50" height="50">
                                    </div>
                                    <div class="icon me-3 shadow-sm rounded-3">
                                        <img src="{{asset('assets/img/css.png')}}" alt="" width="50" height="50">
                                    </div>
                                    <div class="icon me-3 shadow-sm rounded-3">
                                        <img src="{{asset('assets/img/figma.png')}}" alt="" width="50" height="50">
                                    </div>
                                    <div class="icon shadow-sm rounded-3">
                                        <img src="{{asset('assets/img/bootstrap.png')}}" alt="" width="50" height="50">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="{{asset('assets/img/profilehome.png')}}" alt="" width="30%" class="profile pt-5">
                        <img src="{{asset('assets/img/blob-1.svg')}}" alt="" width="50%" class="bg-edit">
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
