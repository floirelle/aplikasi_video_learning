@extends('layout.master')
@section('title', 'Edit Video')
@section('content')
    <div class="container">
        <div class="row" style="padding: 2%">
            <div class="login-form bg-light p-4">
                <form class="row g-3" action="/update-video" method="POST">
                    @csrf
                    <input type="hidden" name="video_id" value="{{ $video->video_id }}">
                    <input type="hidden" id="video_link" name="video_link">
                    <input type="hidden" id="folder" value="new">
                    <h4 style="color: #285185">Edit Video</h4>
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-warning" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        {{-- Video Title --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="video_title" name="video_title"
                                value="{{ $video->video_title }}" placeholder="Video Title">
                            <label for="video_title">Video Title</label>
                        </div>

                        {{-- Video Software Description --}}
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Video Software Description"
                                id="video_software_description" name="video_software_description"
                                style="height: 150px">{{ $video->video_software_description }}</textarea>
                            <label for="video_software_description">Video Software Description</label>
                        </div>

                        {{-- Video File --}}
                        <div class="mb-3">
                            <label for="files" class="form-label">Video File</label>
                            <div id="info_file">
                                Click this link to view saved video:
                                <a href="{{ $video->video_file }}" target="_blank">{{ $video->video_title }}.mp4</a>
                            </div>
                            <input class="form-control" type="file" id="files" name="video_file">
                        </div>
                        <div class="mb-3">
                            <progress value="0" max="100" id="progress"></progress>
                            <p style="color: green" id="info"></p>
                        </div>

                        {{-- Upload Video --}}
                        <button class="btn btn-warning float-end" id="send" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-storage.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
                                                                                                                                                                                                                                                                                                        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyAgycS4Bf8eaENSNpKgoAeoYmAIH-Pp9aU",
            authDomain: "learningvideoapp.firebaseapp.com",
            projectId: "learningvideoapp",
            storageBucket: "learningvideoapp.appspot.com",
            messagingSenderId: "142005964659",
            appId: "1:142005964659:web:f27c26d9bbf6ff1fd9ff06",
            measurementId: "G-SVPYP8185Z"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
    </script>

    <script>
        console.log(firebase.storage);
        var files;
        document.getElementById("files").addEventListener("change", function(e) {
            files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                console.log(files[i]);
            }
            if (files.length != 0) {
                //Loops through all the selected files
                for (let i = 0; i < files.length; i++) {
                    //create a storage reference
                    var storage = firebase.storage().ref(document.getElementById('folder').value + '/' + document
                        .getElementById('video_title')
                        .value + '.' + files[i].name.substr(files[i].name
                            .lastIndexOf(
                                '.') + 1));

                    //upload file
                    var upload = storage.put(files[i]);

                    //update progress bar
                    upload.on(
                        "state_changed",
                        function progress(snapshot) {
                            var percentage =
                                (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                            document.getElementById("progress").value = percentage;
                            document.getElementById(
                                "send"
                            ).disabled = true
                            document.getElementById(
                                "info_file"
                            ).hidden = true
                        },

                        function error() {
                            alert("error uploading file");
                        },

                        function complete() {
                            storage.getDownloadURL().then((url) => {
                                console.log(url)
                                document.getElementById('info').innerText = 'Success Uploaded'
                                document.getElementById('video_link').value = url
                                document.getElementById(
                                    "send"
                                ).disabled = false
                            })
                        }
                    );
                }
            } else {
                alert("No file chosen");
            }
        });
    </script>
@endsection
