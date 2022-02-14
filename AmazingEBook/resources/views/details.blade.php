@extends('layouts.main')


@section('content')
@include('component.navbar')
<!-- <div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">REGISTER</h2>
</div> -->

<div class="container-xl mt-5">
    <div class="row mt-3 mb-5">
        <div class="col-2">
            <h3 class="text-decoration-underline">E-Book Detail</h3>
        </div>
        <div class="col-5">
            <h5>

            </h5>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-2">
            <h5 class="">Book Title: </h5>
        </div>
        <div class="col-5">
            <p>
                {{$book->title}}
            </p>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-2">
            <h5 class="">Author: </h5>
        </div>
        <div class="col-5">
            <p>
                {{$book->author}}
            </p>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-2">
            <h5 class="">Description: </h5>
        </div>
        <div class="col-5">
            <p>
                {{$book->description}}
            </p>
        </div>
    </div>
    <form action="/rent" method="POST">
        @csrf
        <div class="row my-3">
            <input type="hidden" value="{{auth()->user()->account_id}}" name="account_id">
            <input type="hidden" value="{{$book->ebook_id}}" name="ebook_id">
            <input type="hidden" value="placeholderDate" name="order_date">
            <!-- <button type="submit" class="btn btn-warning" style="background-color: rgba(242,230,90,1)"><strong>Rent</strong></button> -->
            <button type='submit' class="btn btn-xl m-3" style="  background-color: rgba(242,230,90,1)"><b>Rent</b></button>
        </div>
    </form>
</div>
<!-- <h1 class="text-decoration-underline">Sign Up</h1> -->

@endsection