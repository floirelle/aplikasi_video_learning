@extends('layout.master')
@section('title', 'Detail Course')
@section('content')
    <?php $vid = (object) [
        'video_id' => '',
    ];
    ?>
    <h3>{{ $course->course_name }} {{ $course->course_class == '' ? '' : ' - ' . $course->course_class }} </h3>
    <p>{!! $course->course_description !!}</p>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"
            style="width: 15%; background-color: #285185; padding: 1%">
            @foreach ($sessions as $session)
                <button class="nav-link {{ $loop->index + 1 == 1 ? 'active' : '' }}"
                    id="v-pills-{{ $loop->index + 1 }}-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-{{ $loop->index + 1 }}" type="button" role="tab"
                    aria-controls="v-pills-{{ $loop->index + 1 }}" aria-selected="true">Session
                    {{ $session->session_name }}</button>
            @endforeach
        </div>
        <div class="tab-content" id="v-pills-tabContent" style="width: 100%">
            @foreach ($sessions as $session)
                <div class="tab-pane fade {{ $loop->index + 1 == 1 ? 'active show' : '' }}"
                    style="background-color: #285185;padding: 1%" id="v-pills-{{ $loop->index + 1 }}" role="tabpanel"
                    aria-labelledby="v-pills-{{ $loop->index + 1 }}-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-color: #FFC107">

                            @foreach ($session->videos as $vid)
                                <button class="nav-link {{ $loop->index + 1 == 1 ? 'active' : '' }}"
                                    id="nav-{{ $session->session_name }}{{ $loop->index + 1 }}-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-{{ $session->session_name }}{{ $loop->index + 1 }}"
                                    type="button" role="tab"
                                    aria-controls="nav-{{ $session->session_name }}{{ $loop->index + 1 }}"
                                    aria-selected="true">Video
                                    {{ $loop->index + 1 }}</button>
                            @endforeach
                            {{-- <a href="{{ url('/add-video', ['session_id' => $session->session_id]) }}">
                                <button class="nav-link" type="button"> Add Nw
                                    Video</button>
                            </a> --}}
                            @if (session()->get('role') == 'Admin')
                                @if ($course->course_class == '')
                                    <form action="/add-video" method="POST" class="nav nav-tabs" style="border: none">
                                        @csrf
                                        <input type="hidden" name="session_name" value="{{ $session->session_name }}">
                                        <input type="hidden" name="course_id" value="{{ $course->course_id }}">
                                        <input type="hidden" name="course_name" value="{{ $course->course_name }}">
                                        <button class="nav-link">Add Video</button>
                                    </form>
                                @endif
                            @elseif (session()->get('role') == 'Assistant')
                                @if ($course->course_class != '')
                                    <form action="/add-record" method="POST" class="nav nav-tabs" style="border: none">
                                        @csrf
                                        <input type="hidden" name="session_name" value="{{ $session->session_name }}">
                                        <input type="hidden" name="course_id" value="{{ $course->course_id }}">
                                        <input type="hidden" name="course_name" value="{{ $course->course_name }}">
                                        <input type="hidden" name="class_code" value="{{ $course->course_class }}">
                                        <button class="nav-link">Add Video</button>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($session->videos as $vid)
                            <div class="tab-pane fade {{ $loop->index + 1 == 1 ? 'active show' : '' }}"
                                id="nav-{{ $session->session_name }}{{ $loop->index + 1 }}" role="tabpanel"
                                aria-labelledby="nav-{{ $session->session_name }}{{ $loop->index + 1 }}-tab">
                                <div style="margin-top: 1%; color: white">
                                    <video src="{{ $vid->video_file }}" width="65%" controls></video>
                                    <p class="text-uppercase">Topic : </p>
                                    <p class="fs-6 fw-normal"> {{ $vid->video_title }}</p>
                                    <p class="text-uppercase">Software used : </p>
                                    <div style="display: flex; justify-content: space-between">
                                        <p class="fs-6 fw-normal"> {{ $vid->video_software_description }}</p>
                                        @if (session()->get('role') == 'Student')
                                            <button class="btn btn-outline-light btn-sm" id="playlist-btn"
                                                onclick="addOrRemovePlaylist(this)">Add to Playlist</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    window.onload = function() {

        var video_id = '{{ $vid->video_id }}';

        $.ajax({
            url: "{{ url('get-video-status') }}",
            data: {
                video_id: video_id,
                _token: '{!! csrf_token() !!}',
            },
            method: "post"
        }).then(function(data) {

            if (data != "") {
                if (document.getElementById("playlist-btn")) {
                    document.getElementById("playlist-btn").innerHTML = "Remove from Playlist"
                }

            } else {
                if (document.getElementById("playlist-btn")) {
                    document.getElementById("playlist-btn").innerHTML = "Add to Playlist"
                }

            }

        })
    }



    function addOrRemovePlaylist(event) {

        var video_id = '{{ $vid->video_id }}'
        document.getElementById("playlist-btn").disabled = true;
        if (event.innerHTML.split(" ")[0] == "Add") {

            // add to playlist
            $.ajax({
                url: "{{ url('add-playlist') }}",
                data: {
                    video_id: video_id,
                    _token: '{!! csrf_token() !!}',
                },
                method: "post"
            }).then(function() {
                addNotif("Successfully Inserted to Playlist")
                event.innerHTML = "Remove from Playlist"

            })
        } else {

            $.ajax({
                url: "{{ url('delete-from-playlist') }}",
                data: {
                    video_id: video_id,
                    _token: '{!! csrf_token() !!}',
                },
                method: "post"
            }).then(function() {

                addNotif("Successfully Removed from Playlist")
                event.innerHTML = "Add to Playlist"
            })
        }

    }

    function addNotif(msg) {
        var container = document.createElement("div");
        container.classList.add("notification-container");
        var p = document.createElement("p");
        p.classList.add("notification-message");
        p.innerHTML = msg;
        container.appendChild(p);
        container.style.right = '-20vw';
        $("body").append(container);
        $(".notification-container").animate({
            right: "0"
        }, {
            duration: 500,
            complete: function() {
                setTimeout(function() {
                    $(".notification-container").animate({
                        right: "-20vw"
                    }, {
                        duration: 500,
                        complete: function() {
                            $(".notification-container").remove()
                            document.getElementById("playlist-btn").disabled = false;
                        }
                    })
                }, 1000)
            }
        })
    }
</script>
