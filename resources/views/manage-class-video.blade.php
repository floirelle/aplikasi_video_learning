@extends('layout.master')
@section('title', 'Manage Class Video')
@section('content')
    <h1>Manage Class Video</h1>
    <div class="accordion" id="accordionExample" style="margin-top: 20px">
        @foreach ($courses as $course)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $loop->index + 1 }}">

                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $loop->index + 1 }}" aria-expanded="true"
                        aria-controls="collapse{{ $loop->index + 1 }}"
                        onclick="getsessions('{{ $course->course_id }}','{{ $loop->index }}','{{$course->course_class}}')">
                        {{ $course->course_name }} - {{$course->course_class}}
                    </button>

                </h2>
                <div id="collapse{{ $loop->index + 1 }}" class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $loop->index + 1 }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="background-color: #285185; padding: 1%">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">

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
                                    <tbody id="list-video">

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


<script>
    var videos = [];
    var prevIdx = -1;

    function getsessions(id, idx, cls) {
        var class_code = cls.trim() 
        if (prevIdx == -1 || prevIdx != idx) $(".loading-modal").css("visibility", "visible");
        prevIdx = idx;
        videos = [];
        $.ajax({

            url: "{{ url('getsessions') }}",
            data: {
                id: id,
                type:"record",
                class:class_code,
                _token: '{!! csrf_token() !!}',
            },
            method: "post"
        }).then(function(data) {
            // console.log(data)
            var ht = "";
            for (var dt in data) {
                if (dt == 0) {
                    ht += `<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true" onclick="showVideos(${dt},${idx})">Session ` + data[dt][
                        "session_name"
                    ] + `</button>`;
                } else {
                    ht += `<button class="nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true" onclick="showVideos(${dt},${idx})">Session ` + data[dt][
                        "session_name"
                    ] + `</button>`;
                }
                var vids = data[dt]["videos"];

                var sessionVideos = []
                for (vidx in vids) {
                    sessionVideos.push({
                            "course_id": vids[vidx]["course_id"],
                            "video_id": vids[vidx]["video_id"],
                            "video_file": vids[vidx]["video_file"],
                            "video_title": vids[vidx]["video_title"],
                    })
                    
                }
                videos.push(sessionVideos)

            }
            $(`.nav-tabs:eq(${idx})`).html(ht)

            showVideos(0, idx);

        })
    }

    function showVideos(id, idx) {
        var body = "";
        for (vidx in videos[id]) {
            var currVid = videos[id][vidx];
            body += `
            <tr>
            <td>` + (+vidx + 1) + `</td>
            <td>` + currVid["video_title"] + `</td>
            <td>
            <a href="` + currVid["video_file"] + `" target="_blank">
                <button type="button" class="btn btn-success btn-sm">View</button>
            </a>
            <a
                href="edit-video/` + currVid["video_id"] + `">
                <button type="button" class="btn btn-warning btn-sm">Edit</button>
            </a>
            <button type="button" class="btn btn-danger btn-sm"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal` + currVid["video_id"] + `1">Delete</button>
            <div>
                <div class="modal fade" id="exampleModal` + currVid["video_id"] + `1" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                ` + currVid["video_title"] + `
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure to delete this video?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <a
                                href="delete-video/` + currVid["video_id"] + `">
                                <button type="button" class="btn btn-danger">Yes, I'm
                                    sure</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </td>
            </tr>
            `;
        }
        $("tbody").html(body)
        $(".loading-modal").css("visibility", "hidden");
    }
</script>
