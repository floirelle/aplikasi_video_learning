@extends('layout.master')
@section('title', 'Insert New Course')
@section('content')
    <div class="container">
        <div class="row" style="padding: 2%">
            <div class="login-form bg-light p-4">
                <form action="/insert-course" method="POST" class="row g-3">
                    @csrf
                    <h4 style="color: #285185">Insert New Course</h4>
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-warning" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        {{-- Course Code --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="course_code" name="course_code"
                                value="{{ old('course_code') }}" placeholder="Course Code">
                            <label for="name">Course Code</label>
                        </div>

                        {{-- Course Name --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="course_name" name="course_name"
                                value="{{ old('course_name') }}" placeholder="Course Name">
                            <label for="name">Course Name</label>
                        </div>

                        {{-- Course Description --}}
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Course Description" id="course_description"
                                name="course_description" style="height: 150px">{{ old('course_description') }}</textarea>
                            <label for="description">Course Description</label>
                        </div>

                        {{-- Course Name --}}
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="course_session" name="course_session" value="1"
                                placeholder="Course Session" min="1">
                            <label for="name">Course Session</label>
                        </div>

                        {{-- Insert Course --}}
                        <button type="submit" class="btn btn-warning float-end">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
