@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>phone Number</th>
                        <th>gender</th>
                        <th>age</th>
                        <th>birthdate</th>
                        <th>bio</th>
                        <th>email</th>
                        <th>edit</th>
                        <th>deleted</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($User as $val)
                        <tr>
                            <td>{{$val->firstname}}</td>
                            <td>{{$val->lastname}}</td>
                            <td>{{$val->phonenumber}}</td>
                            <td>{{$val->gender}}</td>
                            <td>{{$val->age}}</td>
                            <td>{{$val->birthdate}}</td>
                            <td>{{$val->bio}}</td>
                            <td>{{$val->email}}</td>
                            <td><a href="{{url('edit')}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{url('delete')}}" class="btn btn-danger" > Delete</a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>


@endsection
