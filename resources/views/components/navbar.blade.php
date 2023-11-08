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