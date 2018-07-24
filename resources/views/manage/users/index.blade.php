@extends('layouts.manage')

@section('content')
<div class="container">
        <div class="columns">
            <div class="column">
                <h1 class="title">manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Create New User</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-content">
                <table class="table">
                    <thead>  
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                    <th>{{$user->id}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>{{$user->created_at->format('d/m/Y')}}</th>
                                    <td><a href="{{route('users.edit', $user->id)}}" class="button is-outlined">Edit</a></td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

        {{$users->Links()}}
    </div>
@endsection