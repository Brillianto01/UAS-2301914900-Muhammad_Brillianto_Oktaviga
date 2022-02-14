@extends('layouts.main')

@section('content')

<!-- <div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">REGISTER</h2>
</div> -->
<div class="container-xl">
    <h1 class="text-decoration-underline">Sign Up</h1>
    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row my-4">
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-md">First Name : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Enter your First Name" name="first_name" required>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-md">Middle Name : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Enter your middle Name" name="middle_name">
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-md">Last Name : </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Enter your Last Name" name="last_name" required>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-sm">Email Address : </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Enter your Email" name="email" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-md">Gender : </label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-sm">Role : </label>
                    <div class="col-sm-9">
                        <select id="role" class="form-control form-control-sm" name="role_id" placeholder="Select Role">
                            <option value="1">Regular User</option>
                            <option selected value="2">Admin</option>
                        </select>
                        <!-- <select class="form-control-xl">
                            <option>Default select</option>
                        </select> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-md">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Enter Password" name="password" required>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-md-3  col-form-label-sm">Display Picture : </label>
                    <div class="col-sm-9">
                        <input class="form-control form-control-sm @error('display_picture_link') is-invalid @enderror" type="file" id="display_picture_link" name="display_picture_link" required>
                        @error('display_picture_link')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <button class="btn btn-lg btn-block my-4" style="  background-color: rgba(242,230,90,1)" type="submit">Submit</button>
            <small class="d-block text-center ">Already Have an Account? Click <a href="/login">Here</a> To Log In</small>
        </div>
    </form>
</div>


@endsection