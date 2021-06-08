@extends('layout.master')
@section('title', 'Learning Video')
@section('content')
    <h1>Learning Video</h1>

    <div class="accordion" id="accordionExample" style="margin-top: 20px">
        @foreach ($courses as $course)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $loop->index + 1 }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $loop->index + 1 }}" aria-expanded="true"
                        aria-controls="collapse{{ $loop->index + 1 }}">
                        {{ $course->course_code }} - {{ $course->course_name }}
                    </button>
                </h2>
                <div id="collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $loop->index + 1 }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{{ $course->course_description }}</p>
                        <span class="card-text fw-bold">Total Session: </span> {{ $course->course_session }}
                        <div style="display: flex; justify-content: flex-end;">
                            <a href="{{ url('/view-course', ['course_code' => $course->course_code]) }}">
                                <button type="button" class="btn btn-warning">Show All Video</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
