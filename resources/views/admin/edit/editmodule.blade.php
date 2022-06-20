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
                            <h7 class="card-subtitle mb-2 fw-lighter">Module Edit</h7>
                        </div>
                        <div class="row">
                            <h5 class="card-title fw-bolder">Edit Data</h5>
                        </div>
                        <div class="row mt-3">
                            <form action="/admin-module/{{$id}}" method="post">
                                @csrf
                                {{-- @method('PUT') --}}
                                <input type="hidden" name="id" value="{{ $data['id'] }}">

                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        name="username" value="{{ $data['username'] }}">
                                </div> --}}

                                <div class="mb-3">
                                    <label for="" class="form-label">Course ID</label>
                                    <input type="text" class="form-control" id="course_id"
                                        name="course_id" value="{{ $data['course_id'] }}" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Module Number</label>
                                    <input type="text" class="form-control" id="step"
                                        name="step" value="{{ $data['step'] }}" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Module Name</label>
                                    <input type="text" class="form-control" id="name"
                                        name="name" value="{{ $data['name'] }}">
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Email;</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email" value="{{ $data['email'] }}">
                                </div> --}}

                                <div class="mb-3">
                                    <label for="" class="form-label">File Type</label>
                                    <input type="text" class="form-control" id="type"
                                        name="type" value="{{ $data['type'] }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="author"
                                        name="author" value="{{ $data['author'] }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">File</label>
                                    <input type="text" class="form-control" id="file"
                                        name="file" value="{{ $data['file'] }}">
                                </div>

                                <div class="d-grid gap-2 d-sm-flex pt-4 justify-content-end">
                                    <a href="/admin-module" class="btn btn-outline-light px-3">Cancel</a>
                                    <button type="submit" class="btn btn-outline-light px-3">Save</button>
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
