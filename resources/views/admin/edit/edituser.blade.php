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
                            <h7 class="card-subtitle mb-2 fw-lighter">User Edit</h7>
                        </div>
                        <div class="row">
                            <h5 class="card-title fw-bolder">Edit Data</h5>
                        </div>
                        <div class="row mt-3">
                            <form action="/admin-user/{{$id}}" method="post">
                                @csrf
                                {{-- @method('PUT') --}}
                                <input type="hidden" name="id" value="{{ $data['id'] }}">

                                <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        name="username" value="{{ $data['username'] }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        name="name" value="{{ $data['name'] }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email;</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email" value="{{ $data['email'] }}">
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        name="password" value="{{ $data['password'] }}">
                                </div> --}}

                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Role</label>
                                    <input type="role" class="form-control" id="role"
                                        name="role" value="{{ $data['role'] }}">
                                </div> --}}

                                <div class="mb-3">
                                    <label for="" class="form-label">Role</label>
                                    <select class="form-select" aria-label="" id="role" name="role">
                                        {{-- <option selected>{{ $item['is_active'] }}</option> --}}
                                        <option value="1"
                                            {{ $data['role'] === 1 ? 'selected' : '' }}>1</option>
                                        <option value="0"
                                            {{ $data['role'] === 0 ? 'selected' : '' }}>0</option>
                                    </select>
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Is Active</label>
                                    <input type="is_active" class="form-control" id="is_active"
                                        name="is_active" value="{{ $data['is_active'] }}">
                                </div> --}}
                                <div class="mb-3">
                                    <label for="" class="form-label">Is Active</label>
                                    <select class="form-select" aria-label="" id="is_active" name="is_active">
                                        {{-- <option selected>{{ $item['is_active'] }}</option> --}}
                                        <option value="yes"
                                            {{ $data['is_active'] === 'yes' ? 'selected' : '' }}>yes</option>
                                        <option value="no"
                                            {{ $data['is_active'] === 'no' ? 'selected' : '' }}>no</option>
                                    </select>
                                </div>

                                <div class="d-grid gap-2 d-sm-flex pt-4 justify-content-end">
                                    <a href="/admin-user" class="btn btn-outline-light px-3">Cancel</a>
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
