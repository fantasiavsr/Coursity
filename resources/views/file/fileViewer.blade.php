@extends('layouts\main')

@section('content')
    <div class="main" style="background-color: ">

        {{-- <iframe src ="{{ asset('/laraview/#../PDM_Fixed.pdf') }}" width="1000px" height="600px"></iframe> --}}
        {{-- <embed src="uploads/PDM_Fixed.pdf" type="application/pdf"> --}}
        <div class="ratio ratio-16x9">
            <iframe class="" src="uploads/1. TI-2A.pdf" allowfullscreen></iframe>
        </div>

    </div>

    {{-- @include('Partials.footer') --}}
@endsection
