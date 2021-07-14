@extends('layout.master')
@section('title', 'Detail Course')
@section('content')

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
                            @foreach ($session->videos as $video)
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
                            @if (session()->get('role') == 'Assistant')
                                @if ($course->course_class == '')
                                    <form action="/add-video" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_name" value="{{ $session->session_name }}">
                                        <input type="hidden" name="course_id" value="{{ $course->course_id }}">
                                        <input type="hidden" name="course_name" value="{{ $course->course_name }}">
                                        <button class="nav-link">Add Video</button>
                                    </form>
                                @else
                                    <form action="/add-record" method="POST">
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
                        @foreach ($session->videos as $video)
                            <div class="tab-pane fade {{ $loop->index + 1 == 1 ? 'active show' : '' }}"
                                id="nav-{{ $session->session_name }}{{ $loop->index + 1 }}" role="tabpanel"
                                aria-labelledby="nav-{{ $session->session_name }}{{ $loop->index + 1 }}-tab">
                                <div style="margin-top: 1%; color: white">
                                    <video src="{{ $video->video_file }}" width="65%" controls></video>
                                    <p class="text-uppercase">Topic : </p>
                                    <p class="fs-6 fw-normal"> {{ $video->video_title }}</p>
                                    <p class="text-uppercase">Software used : </p>
                                    <div style="display: flex; justify-content: space-between">
                                        <p class="fs-6 fw-normal"> {{ $video->video_software_description }}</p>

                                        <form action="/add-playlist" method="POST">
                                            @csrf
                                            <input type="hidden" name="course_id" id="course_id"
                                                value="{{ $course->course_id }}">
                                            <input type="hidden" name="video_id" value="{{ $video->video_id }}">
                                            <button class="btn btn-outline-light btn-sm">Add to Playlist</button>
                                        </form>
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
