@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col full-page d-flex justify-content-center align-items-center">
            <contact-component form-action = "{{ route('message.create') }}" contact-text ="Here is my contact info you can text me or call me when ever you want and I'll answer you as soon as posible.">
                @csrf
            </contact-component>
        </div>
    </div>
</div>
@endsection
