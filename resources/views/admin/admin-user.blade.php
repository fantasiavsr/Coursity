@extends('layouts\main2')

@section('content')
    {{-- @include('Partials.navbar2') --}}
    @include('Partials.navbar2ex')

    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Edit User</h5>
                </div>
                <div class="col">
                    <a href="/admin-createuser"><button class="btn btn-success float-end">Add User</button></a>
                </div>
            </div>

            <br>

            {{-- Table Courses --}}
            <div class="row mt-4">

                <div class="col">
                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">
                            <table class="table table-hover table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        {{-- <th scope="col">Password</th> --}}
                                        <th scope="col">Role</th>
                                        <th scope="col">Is_Active</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item['id'] }}</td>
                                            <td>{{ $item['username'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['email'] }}</td>
                                            {{-- <td>{{ $item['password'] }}</td> --}}
                                            <td>{{ $item['role'] }}</td>
                                            {{-- <td>{{ $item['is_active'] }}</td> --}}
                                            <td>
                                                {{-- @if ($item['role'] == 1) --}}
                                                @if ($item['id'] == auth()->user()->id && $item['role'] == 1)
                                                    <form class="d-grid gap-2 d-sm-flex justify-content-sm-center"
                                                        action="/admin-user/{{ $item['id'] }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                                                        <input type="hidden" name="username"
                                                            value="{{ $item['username'] }}">
                                                        <input type="hidden" name="name" value="{{ $item['name'] }}">
                                                        <input type="hidden" name="email" value="{{ $item['email'] }}">
                                                        <input type="hidden" name="role" value="{{ $item['role'] }}">

                                                        <select class="form-select" aria-label="" id="is_active"
                                                            name="is_active" readonly disabled>
                                                            {{-- <option selected>{{ $item['is_active'] }}</option> --}}
                                                            <option value="yes"
                                                                {{ $item['is_active'] === 'yes' ? 'selected' : '' }}>yes
                                                            </option>
                                                            <option value="no"
                                                                {{ $item['is_active'] === 'no' ? 'selected' : '' }}>no
                                                            </option>
                                                        </select>
                                                        <button type="submit"
                                                            class="btn btn-outline-dark text-decoration-none" readonly
                                                            disabled>
                                                            <i class="bi bi-check"></i>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form class="d-grid gap-2 d-sm-flex justify-content-sm-center"
                                                        action="/admin-user/{{ $item['id'] }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                                                        <input type="hidden" name="username"
                                                            value="{{ $item['username'] }}">
                                                        <input type="hidden" name="name" value="{{ $item['name'] }}">
                                                        <input type="hidden" name="email"
                                                            value="{{ $item['email'] }}">
                                                        <input type="hidden" name="role" value="{{ $item['role'] }}">

                                                        <select class="form-select" aria-label="" id="is_active"
                                                            name="is_active">
                                                            {{-- <option selected>{{ $item['is_active'] }}</option> --}}
                                                            <option value="yes"
                                                                {{ $item['is_active'] === 'yes' ? 'selected' : '' }}>yes
                                                            </option>
                                                            <option value="no"
                                                                {{ $item['is_active'] === 'no' ? 'selected' : '' }}>no
                                                            </option>
                                                        </select>
                                                        <button type="submit"
                                                            class="btn btn-outline-dark text-decoration-none">
                                                            <i class="bi bi-check"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>

                                            <td class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                                @if ($item['id'] == auth()->user()->id)
                                                    {{-- <p class="text-success">Current Active Admin</p> --}}
                                                    <button class="btn text-decoration-none text-success">
                                                        Current Active Admin
                                                    </button>
                                                @else
                                                    <form action="/admin-user/{{ $item->id }}" method="POST"
                                                        onclick="return confirm('Are you sure?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger text-decoration-none">
                                                            Delete
                                                        </button>
                                                    </form>
                                                    {{-- <form action="" method=""> --}}
                                                    <a href="/admin-user/edit/{{ $item->id }}">
                                                        <button class="btn btn-warning text-decoration-none">
                                                            Edit
                                                        </button>
                                                    </a>
                                                    {{-- </form> --}}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>


    {{-- @include('Partials.footer') --}}
@endsection
