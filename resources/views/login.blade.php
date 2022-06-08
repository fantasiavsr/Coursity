@extends('layouts\main3')

@section('content')
    <div class="pt-5 pb-5" style="background-color: #404EED">
        <br><br>
        <div class="text-center">
            <a href="/home"><img src="{{ asset('img/clogo-wht-box.png') }}" class="img-fluid pb-5" alt=""
                    style="width: 150px"></a>
        </div>

        <div class="container" style="">
            <div class="row justify-content-center pt-5 pb-5">
                <div class="col-md-4 pt-5 pb-5 px-5 shadow-custom-lg rounded align-self-center text-center text-dark"
                    style="background-color: #ffffff">
                    <div class="text-dark">
                        <h1 class="ms-5 mb-5 pe-5 fw-bold">Login</h1>
                    </div>

                    <form action="/login" method="post">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" autofocus required>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>

                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-lg rounded-pill mt-4 px-5 shadow-custom-lg mb-4 text-light"
                            style="background-color: #404EED">Log In</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="/register" class=" fw-bold" style="color: #404EED">Register</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    {{-- @include('Partials.footer') --}}
@endsection
