@extends('layouts\main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 pt-5 pb-2 sticky-top" style="background-color: #404EED;">
            <div class="container px-1">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-white">UX Design</h1>
                        <p class="fs-5 mb-4 text-light">A list of all available courses,
                            quickly find the one that suits your taste!</p>
                    </div>
                    <div class="col">
                        <div class="float-end">
                            <a href="/register">
                                <button type="button" class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">Join Class</button>
                            </a>
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

            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold">Description</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ut voluptates ipsa
                                voluptas
                                enim veritatis modi unde labore quo eius ea consectetur expedita delectus ipsum dolore
                                quibusdam, repellendus quae sit reiciendis iusto soluta, autem, perspiciatis perferendis.
                                Odit
                                officiis velit quis placeat possimus blanditiis doloribus nulla ex excepturi voluptatem
                                ipsam
                                sunt, rerum ipsum aliquam, ullam.</p>
                    </div>
                </div>
                <br><br>

                <hr>

                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-5 d-sm-flex pt-4">
                            <div class="">
                                <h1 class="fw-bold display-2" style="color: ">3</h1>
                                <p>Total Modules</p>
                            </div>
                            <div class="">
                                <h1 class="fw-bold display-2" style="color: ">121</h1>
                                <p>Total Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-5 d-sm-flex pt-4 float-end">
                            <div class="">
                                <h2 class="fw-bold" style="color: ">Teachers</h2>
                                <ul class="list-unstyled">
                                    <li>fantasiavsr</li>
                                    <li>Sennzai</li>
                                    <li>Alif</li>
                                </ul>
                            </div>
                            <div class="">
                                <h2 class="fw-bold" style="color: ">Resource</h2>
                                <ul class="list-unstyled">
                                    <li>Figma  Youtube Channel</li>
                                    <li>Workshop Riset Informatika</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>

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
                        {{-- @foreach ($data1 as $data) --}}
                        <tr>
                            {{-- <td>{{ $data['content'] }}</td>
                            <td>{{ $data['contentTitle'] }}</td>
                            <td>{{ $data['desc'] }}</td> --}}
                            <td>1</td>
                            <td>Fundamental UX Design</td>
                            <td>PDF</td>
                            <td>Workshop Riset Informatika</td>
                            <td>2022/9/6</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>UX Research</td>
                            <td>Youtube Video</td>
                            <td>Workshop Riset Informatika</td>
                            <td>2022/9/6</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Emphatize</td>
                            <td>Youtube Video</td>
                            <td>Workshop Riset Informatika</td>
                            <td>2022/9/6</td>
                        </tr>
                        {{-- @endforeach --}}

                    </tbody>
                </table>

                <br><br><br><br>
            </div>

        </div>

    </div>

    @include('Partials.footer')
@endsection
