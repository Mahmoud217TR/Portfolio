@extends('layouts.app')

@section('content')
<div class="container full-page">
    <div class="row">
        <div class="col-lg-4 py-4 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row py-2">
                    <div class="display-4 text-light">
                        My Projects
                    </div>
                </div>
                <div class="row py-2">
                    <p class="text-muted">
                        These are some of my public published projects.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 py-4">
            <img src="{{ asset('svg/states.svg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>


@endsection
