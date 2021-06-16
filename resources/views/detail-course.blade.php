@extends('layout.master')
@section('title', 'Detail Course')
@section('content')
    <h3>{{ $course->course_name }}</h3>
    <p><?php echo  $course->course_description ?></p>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"
            style="width: 15%; background-color: #285185; padding: 1%">
            @foreach ($sessions as $session)
                <button class="nav-link {{ $loop->index + 1 == 1 ? 'active' : '' }}"
                    id="v-pills-{{ $loop->index + 1 }}-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-{{ $loop->index + 1 }}" type="button" role="tab"
                    aria-controls="v-pills-{{ $loop->index + 1 }}"
                    aria-selected="true">{{ $session->session_name }}</button>
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
                                    id="nav-{{ $loop->index + 1 }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-{{ $loop->index + 1 }}" type="button" role="tab"
                                    aria-controls="nav-{{ $loop->index + 1 }}" aria-selected="true">Video
                                    {{ $loop->index + 1 }}</button>
                            @endforeach
                            <a href="{{ url('/add-video', ['session_id' => $session->session_id]) }}">
                                <button class="nav-link" type="button"> Add New
                                    Video</button>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($session->videos as $video)
                            <div class="tab-pane fade {{ $loop->index + 1 == 1 ? 'active show' : '' }}"
                                id="nav-{{ $loop->index + 1 }}" role="tabpanel"
                                aria-labelledby="nav-{{ $loop->index + 1 }}-tab">
                                <div style="margin-top: 1%; color: white">
                                    <video src="{{ $video->video_file }}" width="65%" controls></video>
                                    <p class="text-uppercase">Topic : </p>
                                    <p class="fs-6 fw-normal"> {{ $video->video_title }}</p>
                                    <p class="text-uppercase">Software used : </p>
                                    <p class="fs-6 fw-normal"> {{ $video->video_software_description }}</p>
                                    <p class="text-uppercase">Video Maker : </p>
                                    <p class="fs-6 fw-normal"> {{ $video->video_maker }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
