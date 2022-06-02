@extends( 'layouts.main')

@section('content')
    @include('Partials.navbaruser')

    <div class="main">

        {{-- HERO --}}
        <div class="text-secondary px-4 py-5 text-center" style="
                                background-color: #404EED">
            <div class="py-5">
                <img src="{{ asset("img/clogo-wht-brand.png") }}" class="img-fluid pb-5" alt="" style="width: 670px">
                {{-- <h1 class="display-5 fw-bold text-white">Dark mode hero</h1> --}}
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4 text-light">Quickly design and customize responsive mobile-first sites with
                        Bootstrap, the
                        world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                        grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-4">
                        <button type="button" class="btn btn-lg rounded-pill btn-outline-light px-4 me-sm-3">Try Now</button>
                        <button type="button" class="btn btn-lg rounded-pill btn-dark px-4">Course List</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Top Course --}}
        <div>
            <br><br><br><br>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <h1 class="fw-bold">Lorem, ipsum dolor.</h2>
                </div>

                <div class="row pb-3 justify-content-center text-center">
                    <div class="col-md-5">
                        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with
                            Bootstrap.</p>
                    </div>
                </div>
            </div>

            <div class="container pt-5 pb-5 d-grid gap-2 d-sm-flex justify-content-sm-center pt-5">

                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLHSPbCQQn7P_8H2JhX2CodrqLYG_ABgdJpw&usqp=CAU"
                        class="card-img-top" alt=""">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn rounded-pill me-4 btn-outline-dark {{-- btn-"style="background-color:#404EED --}}">Enroll</a>
                    </div>
                </div>

            </div>
            <br><br><br><br>
        </div>

        {{-- Featured --}}
        <div class="pt-5 pb-5" style="background-color: #F6F6F6">
            <br><br><br>

            <div class="container pt-5">

                <div class="row justify-content-center text-center">
                    <h1 class="fw-bold">Lorem, ipsum dolor.</h2>
                </div>

                <div class="row pb-3 justify-content-center text-center">
                    <div class="col-md-5">
                        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with
                            Bootstrap.</p>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col text-center">
                        <div class="row">

                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img src=""
                                        alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">Lorem, ipsum dolor.
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img src=""
                                        alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">Lorem, ipsum dolor.
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img src=""
                                        alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">Lorem, ipsum dolor.
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <div class="hover hover-1 text-white rounded" style="background-color: #404EED"><img src=""
                                        alt="">
                                    {{-- <div class="hover-overlay"></div> --}}
                                    <div class="hover-1-content px-5 py-4">
                                        <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">Lorem, ipsum dolor.
                                        </h3>
                                        <p class="hover-1-description font-weight-light mb-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <br><br><br>
        </div>

        {{-- Shortcut Join --}}
        <div>
            <br><br><br><br>
            <div class="container pt-5 pb-5" style="">

                <div class="row justify-content-center text-center">
                    <h1 class="fw-bold">Ready to start your study?</h2>
                </div>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pt-5">
                    <button type="button" class="btn btn-lg rounded-pill btn-dark px-4 me-sm-3" style="background-color: #404EED">Join Now for Free</button>
                </div>

            </div>

            <br>
            <br>
        </div>
        <br><br><br><br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    @include('Partials.footer')
@endsection
