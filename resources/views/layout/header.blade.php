<header >
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="display: block; background-color: #285185; z-index:2;">
        <div style="padding: 1%; background-color: #FFC107; display: flex; " class="header-container">
            <a href="{{ url('learning-video') }}"><img src=" {{ asset('logo.png') }}" alt=""
                    style="width: 90px; height: 50px; margin-left: 10px"></a>
            <span class="header-name">
                @if (session()->has('name')){{ session()->get('name') }}
                @else No Name
                @endif
                |
                {{ session()->get('semester_name') }}
            </span>
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
                    @if(session()->get("role") !="Admin")
                    <li class="nav-item c-nav-item">
                        <a class="nav-link {{ request()->is('class-video') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('/class-video') }}">Class Video</a>
                    </li>
                    @endif
                    @if(session()->get("role") == "Admin")
                        <li class="nav-item c-nav-item">
                                <a class="nav-link {{ request()->is('manage-learning-video') ? 'active' : '' }}"
                                    aria-current="page" href="{{ url('/manage-learning-video') }}">Manage Learning
                                    Video</a>
                        </li>
                    @elseif (session()->get('role') == 'Assistant')
                        
                        <li class="nav-item c-nav-item">
                            <a class="nav-link {{ request()->is('manage-class-video') ? 'active' : '' }}"
                                aria-current="page" href="{{ url('/manage-class-video') }}">Manage Class Video</a>
                        </li>
                    @else
                        <li class="nav-item c-nav-item">
                            <a class="nav-link {{ request()->is('my-playlist') ? 'active' : '' }}"
                                aria-current="page" href="{{ url('/my-playlist') }}">My Playlist Video</a>
                        </li>
                    @endif
                </ul>
                <form class=" d-flex" method="POST" action="logout">
                    @CSRF
                    <button class="btn btn-outline-light btn-sm" type="submit">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>
