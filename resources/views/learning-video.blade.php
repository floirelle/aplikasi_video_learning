@extends('layout.master')
@section('title', 'Learning Video')
@section('content')
    <div class="main-header-container">
        <h1>Learning Video</h1>
        <form method="GET" action="">
            @if (session()->get('role') != 'Student')
                <div class="main-header-filter">

                    <div>
                        <input type="radio" name="filter" id="filterOff" Value="Off"
                            {{ !isset($_GET['filter']) || (isset($_GET['filter']) && $_GET['filter'] == 'Off') ? 'checked' : '' }}>
                        <label for="filterOff">All Course</label>
                    </div>
                    <div>
                        <input type="radio" name="filter" id="filterOn" value="On"
                            {{ isset($_GET['filter']) && $_GET['filter'] == 'On' ? 'checked' : '' }}>
                        <label for="filterOn"> Teaching Course</label>
                    </div>
                    <button id="filterBtn" class="btn btn-warning btn-sm" style="margin-left: 20px;" type="submit">Apply
                        Filter</button>
                </div>
            @endif
        </form>
    </div>
    <ul class="list-group" style="margin-top: 15px">
        @foreach ($courses as $course)
            <li class="list-group-item">
                <div style="display: flex;justify-content: space-between; margin-left: 1%; margin-right: 1%">
                    <div style="display: flex;align-items: center">
                        {{ $course->course_name }}
                        @if (isset($_GET['filter']) && $_GET['filter'] == 'On') -
                            {{ $course->course_class }}
                        @endif
                    </div>
                    <form action="view-course" method="post">
                        @csrf
                        <input type="hidden" name="course_id" id="course_id" value="{{ $course->course_id }}">
                        <input type="hidden" name="video_type" id="video_type" value="vbl">
                        <button type="submit" class="btn btn-warning btn-sm">Show All Video</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
