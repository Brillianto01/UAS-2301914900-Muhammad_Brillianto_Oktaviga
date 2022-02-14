@extends('layouts.main')

@section('content')
@include('component.navbar')
<h1 class="text-decoration-underline my-4">Account Management</h1>
<div class="container my-4 d-flex justify-content-center  flex-wrap">
    <table class="table">
        <thead class="thread-dark">
            <h4 class="text-decoration-none  text-left">Account(s):</h4>
            <tr>
                <th scope="col">Account ID</th>
                <th scope="col">Identity</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($account as $a)
            <tr>
                <th scope="row">{{$a->account_id}}</th>
                <td>{{$a->first_name}} {{$a->middle_name}} {{$a->last_name}}</td>
                @if($a->role_id ==2)
                <td>Admin</td>
                @else
                <td>User</td>
                @endif
                <td>
                    <a href="/acc-manager/roleupdate/{{$a->account_id}}"> <button type="button" class="btn btn-link"> Update</button></a>
                </td>
                <td>
                    <form action="/acc-manager/delete" method=" POST">
                        @csrf
                        @method('put')
                        <input type="hidden" value="{{$a->account_id}}" name="account_id">
                        <input type="hidden" value="placeholderdate" name="modified_at">
                        <input type="hidden" value="Admin" name="modified_by">
                        <input type="hidden" name="delete_flag" value="1">
                        <button type="submit" class="btn btn-link" onclick="return confirm('This account will me deleted')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    {{$account->links()}}
</div>



@endsection