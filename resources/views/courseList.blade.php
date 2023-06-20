@extends('layouts\main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 pt-5 pb-2" style="background-color: #404EED">
            <div class="container pc-1">

                <h1 class="display-5 fw-bold text-white">Course List</h1>
                <div class="col-lg-6">
                    <p class="fs-5 mb-4 text-light">A list of all available courses,
                        quickly find the one that suits your taste!</p>
                </div>
            </div>

        </div>

        {{-- Top Course --}}
        <div class="px-4 py-3">
            <br><br>

            <div class="container pt-5 pb-5">
                <div class="row justify-content-center">
                    <h1 class="fw-bold">Top Courses</h2>
                </div>
                <br>
                {{-- Top Course Card --}}
                <div class="justify-content-center">
                    {{-- <div class="card-group gap-4"> --}}
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        @foreach ($datatop->slice(0, 4) as $data)
                            <div class="col">
                                <div class="card mb-3 shadow-sm" style="max-width: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU"
                                                class="card-img-top" alt=""">
                                        </div>
                                        <div class="  col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $data->name }}</h5>
                                                @php
                                                    $datastudentcourse = App\Models\studentcourse::where(['course_id' => $data->id])->get();

                                                    $count = 0;
                                                    foreach ($datastudentcourse as $item) {
                                                        $count++;
                                                    }
                                                @endphp
                                                <p>Total Member: {{ $count }}</p>
                                                <p class="card-text">{{ $data->desc }}</p>

                                                <a href={{ route('coursedetail', $data->id) }}
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

                <br><br>
            </div>

        </div>

        {{-- All Course --}}
        <div class="px-4 py-3" style="background-color: #F6F6F6">
            <br><br>

            <div class="container pt-5 pb-5">
                <div class="row justify-content-center">
                    <h1 class="fw-bold">All Courses</h2>
                </div>

                <br>

                {{-- All Course Card --}}
                <div class="justify-content-center">
                    <div class="row row-cols-1 row-cols-md-1 g-2">
                        @foreach ($data2 as $data)
                            <div class="col">
                                <div class="card mb-3 shadow-sm" style="max-height: 100%;">
                                    <div class="row g-0">
                                        <div class="col-md-2">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU"
                                                class="card-img-top" alt=""">
                                        </div>
                                        <div class="  col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $data['name'] }}</h5>
                                                <p class="card-text">{{ $data['desc'] }}</p>
                                                <a href={{ route('coursedetail', $data->id) }}
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
