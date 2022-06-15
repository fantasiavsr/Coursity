@extends('layouts\main2')

@section('content')
    @include('Partials.navbaruser2')
    @include('Partials.navbarcourse')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px; margin-bottom: 98px;">

        <div class="container">

            <div class="row">
                <div class="col">
                    {{-- <h5 class="" style="font-weight: 400">Module Page</h5> --}}
                    <h1 class="display-6 fw-bold text-dark">{{ $datacourse->name }}</h1>
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
                                @php
                                    $module = DB::table('modules')
                                        ->where('course_id', $datacourse->id)
                                        ->where('step', $step)
                                        ->first();
                                    /*  dd($module) */
                                    /* dd($step) */
                                @endphp
                                <h5 class="card-title fw-bolder">{{ $module->name }}</h5>
                            </div>
                            <div class="row px-3 my-3">
                                <div class="ratio ratio-16x9">
                                    <iframe class="" {{-- src="{{ url('https://www.youtube.com/embed/TyHsAp_UYMw') }}" --}} {{-- src="{{ url($module->file) }}" --}}
                                        @if ($module->type === 'Youtube') src="{{ url($module->file) }}"
                                        @else
                                            src="{{ asset('uploads/' . $module->file) }}" @endif
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
                                <h7 class="card-subtitle mb-2 fw-lighter">Progress</h7>
                            </div>
                            @php
                                $thismodule = DB::table('modules')
                                        ->where('course_id', $datacourse->id)
                                        ->get();

                                $completed = 0;
                                $total_module = 0;
                                foreach ($completedmodule2 as $item) {
                                    $completed++;
                                }
                                foreach ($thismodule as $item) {
                                    $total_module++;
                                }
                            @endphp
                            <div class="row">
                                <h4 class="card-title fw-bolder">{{ $completed }} <span style="font-weight: 100">of {{ $total_module }} Completed</span></h4>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="fst-normal mt-3 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Iusto</p>
                                </div>
                            </div>
                            <div class="row px-2 mt-4">
                                {{-- <a href="#" target="" class="btn btn-outline-light">
                                    Mark as Complete
                                </a> --}}

                                @if (isset($completedmodule))
                                    {{-- <a href="#" target="" class="btn disabled btn-outline-light">
                                        Completed
                                    </a> --}}

                                    <form
                                        action="{{ route('user-markincomplete', ['course_id' => $datacourse->id, 'user_id' => Auth::user()->id, 'module_step' => $step]) }}"
                                        method="POST" class="row mx-0 px-0">
                                        @method('delete')
                                        @csrf

                                        <button type="submit" class="btn btn-light px-5">
                                            Completed
                                        </button>

                                        {{-- @php
                                            $course = $datacourse->id;
                                            $useid = Auth::user()->id;
                                            $step = $step;
                                            dd($course , $useid, $step);
                                        @endphp --}}
                                    </form>
                                @else
                                    <form action="/user-markcompleted" method="POST" class="row mx-0 px-0">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{ $datacourse->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="module_step" value="{{ $step }}">
                                        <button type="submit" class="btn btn-outline-light px-5">
                                            Mark as Complete
                                        </button>

                                    </form>

                                    {{-- <a href="" target="" class="btn btn-outline-light">
                                        Mark as Completed
                                    </a> --}}
                                @endif

                                {{-- <a href="#" target="" class="btn btn-light mt-3">
                                    Next Step
                                </a> --}}

                                {{-- @php
                                    dd($nextmodule)
                                @endphp --}}

                                {{-- @php
                                    dd($completedmodule->module_step)
                                @endphp --}}

                                @if (isset($previousmodule))
                                    <a href="{{ route('courseviewnext', ['course' => $datacourse->id, 'step' => $previousmodule->step]) }}"
                                        target="" class="btn btn-outline-light mt-3">
                                        Previous Step
                                    </a>
                                @endif

                                @if (isset($nextmodule))
                                    <a href="{{ route('courseviewnext', ['course' => $datacourse->id, 'step' => $nextmodule->step]) }}"
                                        target="" class="btn btn-outline-light mt-3">
                                        Next Step
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

            </div>



        </div>

    </main>


    {{-- @include('Partials.footer') --}}
@endsection
