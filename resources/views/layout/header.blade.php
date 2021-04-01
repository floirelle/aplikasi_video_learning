<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="display: block; background-color: #285185;">
        <div class="container-fluid" style="padding: 1%; background-color: #FFC107;">
            <span class="navbar-brand mb-0 h1" style="padding-left: 10px">Video Learning Laboratory Binus</span>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search Keyword Video" aria-label="Search">
                <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
            </form>
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
                            href="{{ url('learning-video') }}">Learning
                            Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('class-video') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('class-video') }}">Class Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('my-playlist') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('my-playlist') }}">My Playlist Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('upload-learning') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('upload-learning') }}">Upload Learning
                            Video</a>
                    </li>
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('upload-class') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('upload-class') }}">Upload Class
                            Video</a>
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
