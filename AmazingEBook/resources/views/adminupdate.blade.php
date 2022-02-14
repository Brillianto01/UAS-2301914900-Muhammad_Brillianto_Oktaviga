@extends('layouts.main')

@section('content')
@include('component.navbar')
<!-- <div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">REGISTER</h2>
</div> -->
<div class="container-xl">
    <h1 class="text-decoration-underline mt-4">Update Role</h1>
    <form action="/acc-manager/update" method="POST">
        @method('put')
        @csrf
        <div class="row my-4">
            <div class="col mt-4">
                <div class="form-group row">
                    <h5>Account Details:</h5>
                    <p class="mt-2">Firstname : {{$account->first_name}}</p>
                    <p>Middlename : {{$account->middle_name}}</p>
                    <p>Lastname : {{$account->last_name}}</p>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <div class="form-group row">
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-md-3  col-form-label-sm">Role : </label>
                        @if($account->role_id == 2)
                        <div class="col-sm-9">
                            <select id="role" class="form-control form-control-sm" name="role_id" placeholder="Select Role">
                                <option value="1">Regular User</option>
                                <option selected value="2">Admin</option>
                            </select>
                        </div>
                        @else
                        <div class="col-sm-9">
                            <select id="role" class="form-control form-control-sm" name="role_id" placeholder="Select Role">
                                <option selected value="1">Regular User</option>
                                <option value="2">Admin</option>
                            </select>
                        </div>
                        @endif
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
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                </div>
            </div>
        </div>
        <div class="row my-4">
            <input type="hidden" value="{{$account->account_id}}" name="account_id">
            <input type="hidden" value="placeholderdate" name="modified_at">
            <input type="hidden" value="Admin" name="modified_by">
            <button class="btn btn-lg btn-block my-4" style="  background-color: rgba(242,230,90,1)" type="submit"><b>SAVE</b></button>
            <!-- <small class="d-block text-center ">Already Have an Account? Click <a href="/login">Here</a> To Log In</small> -->
        </div>
    </form>
</div>
@endsection