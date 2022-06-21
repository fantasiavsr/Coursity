@extends('layouts\main2')

@section('content')
    @include('Partials.navbar2')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Edit Courses Modules</h5>
                </div>
                <div class="col">
                    <a href="/admin-createmodule"><button class="btn btn-success float-end">Add Module</button></a>
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
                                        <th scope="col">Course ID</th>
                                        <th scope="col">Module Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['course_id'] }}</td>
                                        <td>{{ $item['step'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['type'] }}</td>
                                        <td>{{ $item['author'] }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($item['file'], 20) }}</td>
                                        <td>
                                            <form action="/admin-module/{{ $item->id }}" method="POST" onclick="return confirm('Are you sure?')">
                                                @method("delete")
                                                @csrf
                                                <button class="btn btn-danger text-decoration-none">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            {{-- <form action="" method=""> --}}
                                                <a href="/admin-module/edit/{{ $item->id }}">
                                                    <button class="btn btn-warning text-decoration-none">
                                                        Edit
                                                    </button>
                                                </a>
                                            {{-- </form> --}}
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
