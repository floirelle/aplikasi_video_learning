@extends('layout.master')
@section('title', 'Manage Learning Video')
@section('content')
    <h1>Manage Learning Video</h1>
    <div class="accordion" id="accordionExample" style="margin-top: 20px">
        @foreach ($courses as $course)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $loop->index + 1 }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $loop->index + 1 }}" aria-expanded="true"
                        aria-controls="collapse{{ $loop->index + 1 }}">
                        {{ $course->course_name }}
                    </button>
                </h2>
                <div id="collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $loop->index + 1 }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="background-color: #285185; padding: 1%">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Session 1</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Session 2</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Session 3</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <table class="table table-warning table-striped table-bordered border-primary">
                                    <thead>
                                        <tr>
                                            <th style="width: 25px">No</th>
                                            <th>Topic Video</th>
                                            <th style="width: 200px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $course->course_name }}</td>
                                                <td>
                                                    <a
                                                        href="{{ url('/view-course', ['course_code' => $course->course_code]) }}">
                                                        <button type="button" class="btn btn-success btn-sm">View</button>
                                                    </a>
                                                    <a
                                                        href="{{ url('edit-course', ['course_code' => $course->course_code]) }}">
                                                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        data-bs-toggle="modal"
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
                                                                {{ $course->course_code }}-{{ $course->course_name }}
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure to delete all of this selected course?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <a
                                                                href="{{ url('/delete-course', ['course_code' => $course->course_code]) }}">
                                                                <button type="button" class="btn btn-danger">Yes, I'm
                                                                    sure</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
