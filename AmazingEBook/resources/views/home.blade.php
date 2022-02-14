@extends('layouts.main')

@section('content')
@include('component.navbar')

<h1 class="text-decoration-underline my-4">Home Page</h1>
<div class="container my-4 d-flex justify-content-center  flex-wrap">
  <table class="table">
    <thead class="thread-dark">
      <h4 class="text-decoration-none  text-left">Available Books</h4>
      <tr>
        <th scope="col">#</th>
        <th scope="col-2">Author</th>
        <th scope="col-6">Title</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $b)
      <tr>
        <th scope="row">{{$b->ebook_id}}</th>
        <td>{{$b->author}}</td>
        <td> <a href="/detail/{{$b->ebook_id}}" class="text-dark">{{$b->title}}</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div>
  {{$books->links()}}
</div>

@endsection