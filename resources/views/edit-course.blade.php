@extends('layout.master')
@section('title', 'Insert New Course')
@section('content')
    <div class="container">
        <div class="row" style="padding: 2%">
            <div class="login-form bg-light p-4">
                <form action="/update-course" method="POST" class="row g-3">
                    @csrf
                    <input type="hidden" name="course_code" value="{{ $course->course_code }}">
                    <h4 style="color: #285185">Update Course</h4>
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-warning" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        {{-- Course Code --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="course_code" value="{{ $course->course_code }}"
                                placeholder="Course Code" disabled>
                            <label for="name">Course Code</label>
                        </div>

                        {{-- Course Name --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="course_name" name="course_name"
                                value="{{ $course->course_name }}" placeholder="Course Name">
                            <label for="name">Course Name</label>
                        </div>

                        {{-- Course Description --}}
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Course Description" id="course_description"
                                name="course_description"
                                style="height: 150px">{{ $course->course_description }}</textarea>
                            <label for="description">Course Description</label>
                        </div>

                        {{-- Course Name --}}
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="course_session" name="course_session"
                                value="{{ $course->course_session }}" placeholder="Course Session" min="1">
                            <label for="name">Course Session</label>
                        </div>

                        {{-- Update Course --}}
                        <button type="submit" class="btn btn-warning float-end">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
