@extends('layouts\main2')

@section('content')
    @include('Partials.navbarcourse')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container">

            <div class="row">
                <div class="col">
                    {{-- <h5 class="" style="font-weight: 400">Module Page</h5> --}}
                    <h1 class="display-6 fw-bold text-dark">UI Design</h1>
                </div>
            </div>

            <br>

            <div class="row">

                <div class="col-9">

                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <h7 class="card-subtitle fw-lighter mb-2 text-muted">Material</h7>
                            </div>
                            <div class="row">
                                <h5 class="card-title fw-bolder">Module 1</h5>
                            </div>
                            <div class="row px-3 my-3">
                                <div class="ratio ratio-16x9">
                                    <iframe class=""
                                        src="{{ url('https://www.youtube.com/embed/TyHsAp_UYMw') }}"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <p class="fst-normal mt-3 mb-0" style="color: #62666A">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Reiciendis, fuga reprehenderit!</p>
                                </div>
                                {{-- <div class="col-sm-12 col-md-7">
                                    <a href="#" target="" class="btn btn-outline-dark float-end">
                                        Button
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <div class="card shadow-sm text-light rounded-3" style="background-color: #404EED">
                        <div class="card-body">
                            <div class="row">
                                <h7 class="card-subtitle mb-2 fw-lighter">Caption</h7>
                            </div>
                            <div class="row">
                                <h5 class="card-title fw-bolder">Title</h5>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="fst-normal mt-3 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Iusto</p>
                                </div>
                            </div>
                            <div class="row px-2 mt-4">
                                <a href="#" target="" class="btn btn-outline-light">
                                    Mark as Complete
                                </a>
                                <a href="#" target="" class="btn btn-light mt-3">
                                    Next Step
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



        </div>

    </main>


    {{-- @include('Partials.footer') --}}
@endsection
