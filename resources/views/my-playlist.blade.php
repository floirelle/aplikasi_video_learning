@extends('layout.master')
@section('title', 'My Playlist')
@section('content')
    <h1>My Playlist</h1>
    <form action="/add-record" method="POST">
        @csrf
        <input type="hidden" name="session_name" value="1">
        <input type="hidden" name="course_id" value="965b6b1a-e431-e611-903a-d8d385fce79e">
        <input type="hidden" name="course_name" value="COMP6047-Algorithm and Programming">
        <input type="hidden" name="class_code" value="B001">
        <button>AddRecord</button>
    </form>

    <form action="/add-video" method="POST">
        @csrf
        <input type="hidden" name="session_name" value="1">
        <input type="hidden" name="course_id" value="965b6b1a-e431-e611-903a-d8d385fce79e">
        <input type="hidden" name="course_name" value="COMP6047-Algorithm and Programming">
        <button>AddVBL</button>
    </form>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($playlists as $playlist)
            <div class="col">
                <div class="card h-100" style="background-color: #285185">
                    <video src="{{ $playlist->video->video_file }}"></video>
                    <div class="card-body">
                        <a href="{{ $playlist->video->video_file }}" target="blank">
                            <h5 class="card-title" style="color: white">{{ $playlist->video->video_title }} -
                                {{ $playlist->video->video_type }}</h5>
                        </a>
                        <h6 style="color: #FFC107">Softaware used:</h6>
                        <div style="display: flex; justify-content: space-between">
                            <p class="card-text" style="color: #FFC107;margin: 0">
                                {{ $playlist->video->video_software_description }}
                            </p>
                            <div>
                                <form action="/delete-playlist" method="POST">
                                    @csrf
                                    <input type="hidden" name="video_id" value="{{ $playlist->video->video_id }}">
                                    <input type="hidden" name="nim" value="{{ $playlist->nim }}">
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Remove from playlist">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
