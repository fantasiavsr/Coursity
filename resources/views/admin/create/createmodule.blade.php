@extends('layouts\main2')

@section('content')
    @include('Partials.navbar2')

    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            {{-- <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Dashboard</h5>
                </div>
            </div> --}}

            <br>

            <div class="row">

                <div class="col">

                    <div class="card shadow-sm text-light rounded-3 py-2 px-2" style="background-color: #404EED">
                        <div class="card-body">
                            <div class="row">
                                <h7 class="card-subtitle mb-2 fw-lighter">Course</h7>
                            </div>
                            <div class="row">
                                <h5 class="card-title fw-bolder">Add Data</h5>
                            </div>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                                    <strong>{{ $message }}</strong>
                                </div>
                                {{-- <img src="uploads/{{ Session::get('file') }}" width="100px" height="100px"> --}}
                            @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Opps!!</strong> Something went wrong.
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row mt-3">
                                <form action="/admin-createmodule" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{-- @method('PUT') --}}

                                    <div class="mb-3">
                                        <label for="" class="form-label">Course ID</label>

                                        <select class="form-select" id="course_id" name="course_id">
                                            <option value="">Select Course</option>
                                            @foreach ($course as $course)
                                                <option value="{{ $course->id }}">{{ $course->id }}.
                                                    {{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Module Number</label>
                                        <input type="text" class="form-control" id="step" name="step"
                                            value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Module Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="">
                                    </div>

                                    {{-- <div class="mb-3">
                                    <label for="" class="form-label">Email;</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email" value="{{ $data['email'] }}">
                                    </div> --}}

                                    {{-- <div class="mb-3">
                                        <label for="" class="form-label">File Type</label>
                                        <input type="text" class="form-control" id="type"
                                            name="type" value="">
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="" class="form-label">File Type</label>
                                        <select class="form-select" aria-label="" id="type" name="type">
                                            {{-- <option selected>{{ $item['is_active'] }}</option> --}}
                                            <option value="Youtube" selected>Youtube</option>
                                            <option value="PDF">PDF</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Author</label>
                                        <input type="text" class="form-control" id="author" name="author"
                                            value="">
                                    </div>

                                    <label class="form-label">File</label>
                                    <div class="mb-3 gap-3 d-sm-flex">
                                        <div class="input-group">
                                            <input id="prependedcheckbox2" name="file" class="form-control"
                                                type="text" placeholder="Input url..">
                                        </div>

                                        <label class="form-label ps-2">Or</label>
                                        <div class="input-group">
                                            <span class="input-group-addon pe-3">
                                                <input class="form-check-input" type="checkbox" id="radio">
                                            </span>
                                            <input id="prependedcheckbox" name="file" type="file" class="form-control"
                                                disabled>
                                        </div>

                                    </div>

                                    <div class="d-grid gap-2 d-sm-flex pt-4 justify-content-end">
                                        <a href="/admin-user" class="btn btn-outline-light px-3">Cancel</a>
                                        <button type="submit" class="btn btn-outline-light px-3">Add</button>
                                    </div>
                                    {{-- <button type="submit" class="btn btn-outline-light">Cancel</button>
                                <button type="submit" class="btn btn-outline-light">Update</button> --}}

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

    <script>
        var checkbox = document.getElementById("radio");
        /* var checkbox2 = document.getElementById("radio2"); */

        function validator() {
            if (checkbox.checked == false) {
                document.getElementById('prependedcheckbox').disabled = true;
                document.getElementById('prependedcheckbox2').disabled = false;
            } else {
                document.getElementById('prependedcheckbox').disabled = false;
                document.getElementById('prependedcheckbox2').disabled = true;
            }
        }

        checkbox.addEventListener('click', validator);
    </script>


    {{-- @include('Partials.footer') --}}
@endsection
