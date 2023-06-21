@extends('layouts\main2')

@section('content')
    {{-- @include('Partials.navbar2') --}}
    @include('Partials.navbar2ex')

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
                                <h7 class="card-subtitle mb-2 fw-lighter">Course Edit</h7>
                            </div>
                            <div class="row">
                                <h5 class="card-title fw-bolder">Edit Data</h5>
                            </div>
                            <div class="row mt-3">
                                <form action="/admin-course/{{ $id }}" method="post">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $data['id'] }}">

                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $data['name'] }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Desc</label>
                                        <input type="desc" class="form-control" id="desc" name="desc"
                                            value="{{ $data['desc'] }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Is Active</label>
                                        <select class="form-select" aria-label="" id="is_active" name="is_active">
                                            <option value="yes" {{ $data['is_active'] === 'yes' ? 'selected' : '' }}>
                                                yes</option>
                                            <option value="no" {{ $data['is_active'] === 'no' ? 'selected' : '' }}>no
                                            </option>
                                        </select>
                                    </div>

                                    <div class="d-grid gap-2 d-sm-flex pt-4 justify-content-end">
                                        <a href="/admin-course" class="btn btn-outline-light px-3">Cancel</a>
                                        <button type="submit" class="btn btn-outline-light px-3">Save</button>
                                    </div>
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
