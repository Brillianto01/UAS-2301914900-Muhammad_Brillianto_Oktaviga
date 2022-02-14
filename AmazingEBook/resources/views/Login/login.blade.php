@extends('layouts.main')

@section('content')

<!-- <div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">REGISTER</h2>
</div> -->
<div class="container-xl">
    <h1 class="text-decoration-underline">Log In</h1>
    <form action="/login" method="POST">
        @csrf
        <div class="row my-4">
            <div class="col">
                <div class="form-group row">
                    @if(session()->has('failedlogin'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>{{session('failedlogin')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-md">First Name : </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Enter Your Email" name="email" required>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-sm">Password : </label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Enter your Password" name="password" required>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">

                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col">
                <div class="form-group row">
                    <button class="btn btn-lg btn-block my-4" style="  background-color: rgba(242,230,90,1)" type="submit">Submit</button>
                    <small class="d-block text-center ">Don't have an account? Click <a href="/register">Here</a> To Register</small>

                </div>
            </div>
            <div class="col">
                <div class="form-group row">

                </div>
            </div>
        </div>
    </form>
</div>


@endsection