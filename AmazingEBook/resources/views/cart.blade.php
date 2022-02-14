@extends('layouts.main')

@section('content')
@include('component.navbar')
<h1 class="text-decoration-underline my-4">Cart</h1>
<div class="container my-4 d-flex justify-content-center  flex-wrap">
    <table class="table">
        <thead>
            <h4 class="text-decoration-none  text-left">Book(s) In Cart</h4>
            <tr>
                <th scope="col">#</th>
                <th scope="col-2">Author</th>
                <th scope="col-6">Title</th>
                <th scope="col-6">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $c)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$c->ebook->title}}</td>
                <td>{{$c->ebook->author}}</td>
                <td>
                    <form action="/delete/{{$c->order_id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-link" onclick="return confirm('Book will be removed from cart')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<a href="/status-success"><button type='submit' class="btn btn-block m-3" style=" background-color: rgba(242,230,90,1)"><b>SUBMIT</b></button> </a>

@endsection