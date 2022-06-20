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
                        <div class="row mt-3">
                            <form action="/admin-createmodule" method="post">
                                @csrf
                                {{-- @method('PUT') --}}


                                <div class="mb-3">
                                    <label for="" class="form-label">Course ID</label>

                                    <select class="form-select" id="course_id" name="course_id">
                                        <option value="">Select Course</option>
                                        @foreach($course as $course)
                                            <option value="{{ $course->id }}">{{ $course->id }}. {{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Module Number</label>
                                    <input type="text" class="form-control" id="step"
                                        name="step" value="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Module Name</label>
                                    <input type="text" class="form-control" id="name"
                                        name="name" value="">
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Email;</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email" value="{{ $data['email'] }}">
                                </div> --}}

                                <div class="mb-3">
                                    <label for="" class="form-label">File Type</label>
                                    <input type="text" class="form-control" id="type"
                                        name="type" value="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="author"
                                        name="author" value="">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">File</label>
                                    <input type="text" class="form-control" id="file"
                                        name="file" value="">
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


    {{-- @include('Partials.footer') --}}
@endsection
