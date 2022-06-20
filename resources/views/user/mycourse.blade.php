@extends('layouts\main')

@section('content')
    @include('Partials.navbaruser')

    <div class="main">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        {{-- HERO --}}
        <div class="text-secondary px-4 pt-5 pb-2" style="background-color: #404EED">
            <div class="container pc-1">

                <h1 class="display-5 fw-bold text-white">My Courses</h1>
                <div class="col-lg-6">
                    <p class="fs-5 mb-4 text-light">A list of all available courses,
                        quickly find the one that suits your taste!</p>
                    {{-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-4">
                        <a href="/register">
                            <button type="button" class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">Join
                                Now</button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn btn-lg rounded-pill btn-dark px-4">Course List</button>
                        </a>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="ratio ratio-16x9">
                <iframe class="" src="uploads/1. TI-2A.pdf" allowfullscreen></iframe>
            </div> --}}
            {{-- <br><br> --}}
        </div>

        {{-- Top Course --}}
        <div class="px-4 pb-3">
            <br><br>

            <div class="container pt-5 pb-5">
                {{-- <div class="row justify-content-center">
                    <h1 class="fw-bold">Top Courses</h2>
                </div> --}}

                {{-- My Course List --}}
                <div class="justify-content-center">
                    {{-- <div class="card-group gap-4"> --}}
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        @foreach ($courses as $data)
                            <div class="col">
                                <div class="card mb-3 shadow-sm" style="max-width: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU"
                                                class="card-img-top" alt=""">
                                        </div>
                                        <div class="  col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $data['name'] }}</h5>
                                                <p class="card-text">{{ $data['desc'] }}</p>

                                                <a href="{{ route('usercoursedetail', $data->course_id) }}"
                                                    class="btn rounded-pill me-4 btn-outline-dark px-4">Detail
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <br><br><br><br>
            </div>

        </div>



        @include('Partials.footer')
    @endsection
