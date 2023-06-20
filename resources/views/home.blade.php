@extends('layouts\main')

@section('content')
    @include('Partials.navbar')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 py-5 text-center" style="background-color: #404EED">
            <div class="py-5">
                <img src="img/clogo-wht-brand.png" class="img-fluid pb-5" alt="" style="width: 670px">
                {{-- <h1 class="display-5 fw-bold text-white">Dark mode hero</h1> --}}
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4 text-light">Quickly design and customize responsive mobile-first sites with
                        Bootstrap, the
                        world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                        grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-4">
                        <a href="/register">
                            <button type="button" class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">Join
                                Now</button>
                        </a>
                        <a href="/courseList">
                            <button type="button" class="btn btn-lg rounded-pill btn-dark px-4">Course List</button>
                        </a>
                    </div>
                </div>
            </div>
            <br><br>
        </div>

        {{-- Top Course --}}
        <div class="px-4 py-5">
            <br><br>

            <div class="container pt-5 pb-5">
                <div class="row justify-content-center text-center">
                    <h1 class="fw-bold">Top Courses</h2>
                </div>

                <div class="row pb-3 justify-content-center text-center">
                    <div class="col-md-5">
                        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with
                            Bootstrap.</p>
                    </div>
                </div>

                <div class="justify-content-center">
                    <div class="row row-cols-1 row-cols-md-4 g-3">
                        @foreach ($datatop->slice(0, 4) as $data)
                            <div class="col">
                                <div class="card mb-3 shadow-sm pb-3" style="max-width: 100%;">
                                    <div class="row g-0">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU"
                                            class="card-img-top" alt=""">
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
                                                class="btn rounded-pill me-4 btn-outline-dark px-4 mt-4">Detail
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        {{-- Featured --}}
        <div class="px-4 py-5" style="background-color: #F6F6F6">
            <br><br>

            <div class="container pt-5 pb-5">

                <div class="row justify-content-center text-center">
                    <h1 class="fw-bold">Featured Courses</h2>
                </div>

                <div class="row pb-3 justify-content-center text-center">
                    <div class="col-md-5">
                        <p class="fs-5 mb-4">
                            list of amazing courses that many people have studied.</p>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col text-center">
                        <div class="row">
                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img
                                        src="" alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">UI Design
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img
                                        src="" alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">UX Design
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img
                                        src="" alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">Web Design
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img
                                        src="" alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">Mobile
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <br>
        </div>

        {{-- Shortcut Join --}}
        <div class="px-4 py-5">
            <br>
            <div class="container pt-5 pb-5" style="">
                <div class="row justify-content-center text-center">
                    <h1 class="fw-bold">Ready to start your study?</h2>
                </div>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-5 text-center">
                    <a href="/register">
                        <button type="button" class="btn btn-lg rounded-pill btn-dark px-4 py-3 me-sm-3"
                            style="background-color: #404EED">Join Now for Free</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('Partials.footer')
@endsection
