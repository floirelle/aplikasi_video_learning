@extends('layout.master')
@section('title', 'Class Video')
@section('content')
    <div class="main-header-container">
        <h1>Class Video</h1>
    </div>
    <ul class="list-group" style="margin-top: 15px">
        @foreach ($courses as $course)
            <li class="list-group-item">
                <div style="display: flex;justify-content: space-between; margin-left: 1%; margin-right: 1%">
                    <div style="display: flex;align-items: center">
                        {{ $course->course_name }} - {{ $course->course_class }}
                    </div>
                    <form action="view-course" method="post">
                        @csrf
                        <input type="hidden" name="course_id" id="course_id" value="{{ $course->course_id }}">
                        <input type="hidden" name="video_type" id="video_type" value="record">
                        <input type="hidden" name="course_class" id="course_class" value="{{$course->course_class}}">
                        <button type="submit" class="btn btn-warning btn-sm">Show All Video</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
