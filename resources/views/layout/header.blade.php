<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="display: block; background-color: #285185;">
        <div style="padding: 1%; background-color: #FFC107; display: flex;">
            <a href="{{ url('learning-video') }}"><img src=" {{ asset('logo.png') }}" alt=""
                    style="width: 90px; height: 50px; margin-left: 10px"></a>
            {{-- <form class="d-flex" style="flex: 1; padding: 1%" action="searchvideo" method="GET">
                <input class="form-control" type="search" name="keyword" placeholder="Search video name..."
                    aria-label="Search">
                <button class="btn btn-warning" type="submit" style="margin-left: 5px"><i
                        class="fas fa-search"></i></button>
            </form> --}}
        </div>
        <div class="container-fluid" style="padding: 1%">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('learning-video') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/learning-video') }}">Learning
                            Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('class-video') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/class-video') }}">Class Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('my-playlist') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/my-playlist') }}">My Playlist Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('manage-learning-video') ? 'active' : '' }}"
                            aria-current="page" href="{{ url('/manage-learning-video') }}">Manage Learning Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('manage-class-video') ? 'active' : '' }}"
                            aria-current="page" href="{{ url('/manage-class-video') }}">Manage Class Video</a>
                    </li>
                </ul>
                <form class=" d-flex">
                    <button class="btn btn-outline-light btn-sm" type="submit">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>