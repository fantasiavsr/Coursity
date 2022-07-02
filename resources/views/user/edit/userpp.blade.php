@extends('layouts\main')

@section('content')
    @include('Partials.navbaruser')

    <div class="main">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        {{-- HERO --}}
        <div class="text-secondary px-4 pt-5 pb-2" style="background-color: #404EED">
            <div class="container">

                <div class="d-grid gap-5 d-sm-flex justify-content-sm-start mb-4 align-items-center">
                    <div>
                        <img {{-- src="https://cdn.discordapp.com/attachments/418402561251344384/990101504344072202/22a833e572e2bec8d635b0623a7f3161.jpg" --}}
                           {{--  src="{{ asset('uploads/profile/' . $userpp->file) ?? 'https://cdn.discordapp.com/attachments/418402561251344384/990101504344072202/22a833e572e2bec8d635b0623a7f3161.jpg' }} " --}}
                            {{-- src="{{ asset('uploads/profile/'.$userpp->file) }}" --}}
                            {{-- src = "{{ asset('uploads/profile/22a833e572e2bec8d635b0623a7f3161.jpg') }}" --}}
                            @if (isset($userpp->file))
                                src="{{ asset('uploads/profile/' . $userpp->file) }}"
                            @else
                                {{-- src="https://cdn.discordapp.com/attachments/418402561251344384/990101504344072202/22a833e572e2bec8d635b0623a7f3161.jpg" --}}
                                src="{{ asset('img/avatar2.png') }}" alt=""
                            @endif
                            class="avatar2 rounded-circle" alt="..." {{-- width="100%" height="115px" --}}>
                    </div>
                    <div>
                        <p class="text-white mb-1">My Profile</p>
                        <h1 class="display-7 text-white">{{ $user->name }}</h1>
                        <h4 class="text-white fw-light">{{ $user->username }}#{{ $user->id }}</h4>
                        <div class="col-lg-6">
                            {{-- <p class="fs-5 mb-4 text-light">A list of all available courses,
                                quickly find the one that suits your taste!</p> --}}
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
                        <div class="pt-4 pb-2">
                            <button class="btn btn-sm btn-outline-light">Change Profile Picture</button>
                        </div>
                    </div>
                    {{-- <div class="float-end text-end">
                        <button class="btn btn-light">Change Profile Picture</button>
                    </div> --}}
                </div>

            </div>
            {{-- <div class="ratio ratio-16x9">
                <iframe class="" src="uploads/1. TI-2A.pdf" allowfullscreen></iframe>
            </div> --}}
            {{-- <br><br> --}}
        </div>

        {{-- Personal --}}
        <div class="py-1">
            <br>
            <div class="container pt-5 pb-5">
                <div class="row justify-content-center">
                    <h3 class="fw-bold">Personal Information</h3>
                </div>

                <div class="card shadow-sm bg-white rounded-3">
                    <div class="card-body">

                        <div class="row align-items-center">
                            {{-- <div class="col">
                                <p class=" mb-2">Name</p>
                                <p class=" fw-bold mb-2">{{ $user->name }}</p>
                            </div>
                            <div class="col float-end text-end">
                                <button class="btn text-light px-4" style="background-color: #404EED">Edit</button>
                            </div> --}}
                            <form action="/userpp" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">

                                <div class="col-md">
                                    <label for="formFile" class="form-label">File</label>
                                    <input type="file" name="file" class="form-control">
                                    <br>
                                    {{-- <p>Or</p>
                                    <input type="text" name="file" class="form-control" placeholder="Input url.."> --}}
                                </div>

                                <div class="d-grid gap-2 d-sm-flex pt-4 justify-content-end">
                                    <a href="/userprofile" class="btn btn-outline-danger px-3">Cancel</a>
                                    <button type="submit" class="btn btn-outline-success px-3">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        @include('Partials.footer')
    @endsection
