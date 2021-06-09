@extends('layout.master')
@section('title', 'Manage Learning Video')
@section('content')
    <h1>Manage Learning Video</h1>
    <div style="margin-top: 8px; margin-bottom: 15px; display: flex; justify-content: flex-end">
        <a href="/add-course">
            <button type="button" class="btn btn-primary">Insert New Course</button>
        </a>
    </div>
    <table class="table table-warning table-striped table-bordered border-primary">
        <thead>
            <tr>
                <th style="width: 25px">No</th>
                <th>Course Code</th>
                <th>Course Name</th>
                <th style="width: 200px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>
                        <a href="{{ url('/view-course', ['course_code' => $course->course_code]) }}">
                            <button type="button" class="btn btn-success btn-sm">View</button>
                        </a>
                        <a href="{{ url('edit-course', ['course_code' => $course->course_code]) }}">
                            <button type="button" class="btn btn-info btn-sm">Update</button>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $loop->index + 1 }}">Delete</button>

                    </td>
                </tr>
                {{-- modal --}}
                <div class="modal fade" id="exampleModal{{ $loop->index + 1 }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    {{ $course->course_code }}-{{ $course->course_name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete all of this selected course?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a href="{{ url('/delete-course', ['course_code' => $course->course_code]) }}">
                                    <button type="button" class="btn btn-danger">Yes, I'm sure</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
@endsection
