@extends('layouts\main')

@section('content')
    @include('Partials.navbaruser')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 pt-5 pb-2 sticky-top" style="background-color: #404EED;">
            <div class="container px-1">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-white">{{ $datacourse->name }}</h1>
                        <p class="fs-5 mb-4 text-light">
                            All detailed information about {{ $datacourse->name }} course that may interest you</p>
                    </div>
                    <div class="col">
                        <div class="float-end">
                            <form action="/user-enroll" method="POST">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $datacourse->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                <button type="submit" class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">
                                    Join Class
                                </button>
                            </form>


                            {{-- <a href="#">
                                <button type="button" class="btn btn-lg rounded-pill btn-dark px-4">Course List</button>
                            </a> --}}
                        </div>
                    </div>

                </div>

            </div>
            {{-- <div class="ratio ratio-16x9">
                <iframe class="" src="uploads/1. TI-2A.pdf" allowfullscreen></iframe>
            </div> --}}
            {{-- <br><br> --}}
        </div>

        <div class="px-4 py-3">
            <br><br>

            {{-- Desc --}}
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold">Description</h2>
                        <p>{{ $datacourse->desc }}</p>
                    </div>
                </div>
                <br><br><br>

                {{-- <hr> --}}

                {{-- Stats --}}
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-5 d-sm-flex pt-4">
                            <div class="">
                                <h1 class="fw-bold display-2" style="color: ">
                                    {{-- count total data module --}}
                                    @php
                                        $count = 0;
                                        foreach ($datamodule as $item) {
                                            $count++;
                                        }
                                    @endphp
                                    {{ $count }}
                                </h1>
                                <p>Total Modules</p>
                            </div>
                            <div class="">
                                <h1 class="fw-bold display-2" style="color: ">
                                    {{-- count total data module --}}
                                    @php
                                        $count = 0;
                                        foreach ($datastudentcourse as $item) {
                                            $count++;
                                        }
                                    @endphp
                                    {{ $count }}
                                </h1>
                                <p>Total Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-5 d-sm-flex pt-4 float-end">
                            <div class="">
                                <h2 class="fw-bold" style="color: ">Teachers</h2>
                                <ul class="list-unstyled">
                                    @foreach ($datateacher as $item)
                                        <li>{{ $item->name }}</li>
                                    @endforeach
                                    {{-- <li>fantasiavsr</li>
                                    <li>Sennzai</li>
                                    <li>Alif</li> --}}
                                </ul>
                            </div>
                            <div class="">
                                <h2 class="fw-bold" style="color: ">Resources</h2>
                                <ul class="list-unstyled">
                                    @foreach ($dataresource as $item)
                                        <li>{{ $item->name }}</li>
                                    @endforeach
                                    {{-- <li>Figma  Youtube Channel</li>
                                    <li>Workshop Riset Informatika</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>

                <br><br><br><br>{{-- <br><br><br><br> --}}
                {{-- Requirements --}}
                <h2 class="fw-bold pb-4">Requirements</h2>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datarequirement as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['type'] }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <br><br><br>


                {{-- Modules --}}
                <h2 class="fw-bold pb-4">Modules</h2>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Author</th>
                            <th scope="col">Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datamodule as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['type'] }}</td>
                                <td>{{ $item['author'] }}</td>
                                <td>{{ $item['created_at']->toDateString() }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <br><br><br><br>
            </div>

        </div>

    </div>

    @include('Partials.footer')
@endsection
