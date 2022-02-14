@extends('layouts.main')

@section('content')
<div class="container my-4 d-flex justify-content-center flex-wrap">
    <div class="grid">
        <div class="row mt-5">
            <h1 class="text-center">{{$message}}</h1>

        </div>
        @if($message != 'LOG OUT SUCCESSFUL')
        <div class="row mt-2">
            <h6 class="">Click <a href="home">Here</a> To Return To Home Page</h6>
        </div>
        @endif
    </div>
</div>

@endsection