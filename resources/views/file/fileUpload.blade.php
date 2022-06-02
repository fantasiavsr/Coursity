@extends('layouts\main3')

@section('content')

    <div class="pt-5 pb-5" style="background-color: #404EED">
        <br><br>
        <div class="text-center">
            <a href="/home"><img src="{{ asset("img/clogo-wht-box.png") }}" class="img-fluid pb-5" alt="" style="width: 150px"></a>
        </div>

        <div class="container" style="">
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-md-4 pt-5 pb-5 px-5 shadow-custom-lg rounded align-self-center text-center text-dark"
                    style="background-color: #ffffff">
                    <div class="text-dark">
                        <h1 class="ms-5 mb-5 pe-5 fw-bold">Upload</h1>
                    </div>

                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                                <strong>{{ $message }}</strong>
                            </div>
                            <img src="uploads/{{ Session::get('file') }}" width="100px" height="100px">
                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Opps!!</strong> Ada kesalahan saat pada file yang anda upload
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('file.upload.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="form-outline mb-4">
                                    <label class="form-label">ID</label>
                                    <input type="text" name="id" id="id" class="form-control">
                                </div>

                                <div class="col-md">
                                    <label for="formFile" class="form-label">File</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <br><br><br><br>
                                <button type="submit"
                                    class="btn btn-lg rounded-pill mt-4 px-5 shadow-custom-lg mb-4 text-light"
                                    style="background-color: #404EED">Upload</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- @include('Partials.footer') --}}
@endsection



