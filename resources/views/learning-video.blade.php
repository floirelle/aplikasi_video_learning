@extends('layout.master')
@section('title', 'Learning Video')
@section('content')

    <div class="main-header-container">
        <h1>Learning Video</h1>
        <form method="GET" action="" >
        <div class="main-header-filter">
        
            <div>
                <input type="radio" name="filter" id="filterOff" Value="Off" {{ !isset($_GET['filter']) || (isset($_GET['filter']) && $_GET['filter']=="Off") ? 'checked' : ''}} >
                <label for ="filterOff">All Course</label>
            </div>
            <div>
                <input type="radio" name="filter" id="filterOn" value="On" {{isset($_GET['filter']) && $_GET['filter']=="On" ? 'checked' : ''}}>
                <label for ="filterOn"> Teaching Course</label>
            </div>
            <button id="filterBtn" class="btn btn-warning" style="margin-left: 20px;" type="submit">Apply Filter</button>
        </div>
        </form>
    </div>
    
    <div class="accordion" id="accordionExample" style="margin-top: 20px">
        
        @foreach ($courses as $course)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $loop->index + 1 }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $loop->index + 1 }}" aria-expanded="true"
                        aria-controls="collapse{{ $loop->index + 1 }}">
                        {{ $course->course_name }} @if (isset ($_GET['filter']) && $_GET['filter']=="On") - {{$course->course_class}}@endif
                    </button>
                </h2>
                <div id="collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $loop->index + 1 }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{{ $course->course_description }}</p>
                        
                        <div style="display: flex; justify-content: flex-end;">
                            <form action="view-course" method="post">
                            @CSRF
                                <input type="hidden" name="course_id" id="course_id" value ="{{$course->course_id}}">
                                <button type="submit" class="btn btn-warning">Show All Video</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


