@extends('layouts.manage')

@section('content')
<div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">{{$user->name}}</h1>
                <h4 class="subtitle">View UserDetails</h4>
            </div>
            <div class="column">
                <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Edit User</a></div>
        </div>
        <hr class="m-t-10">

    <div class="card">
            <div class="card-content">

        <div class="columns">
            <div class="column">
                
                    <div class="field">
                        <label for="name" class="label">Name</label>
                            <pre>{{$user->name}}</pre>
                    </div>

                    <div class="field">
                    <div class="field">
                        <label for="email" class="label">Email</label>
                            <pre>{{$user->email}}</pre>
                    </div>
                    </div>

                    <div class="field">
                    <div class="field">
                        <label for="roles" class="label">Roles</label>
                            <ul>
                            {{$user->roles->count() == 0 ? 'This user has not been assigned a role' : ''}}
                            @foreach ($user->roles as $role)
                                <li>{{$role->display_name}} ({{$role->description}})</li>
                            @endforeach
                            </ul>
                    </div>
                    </div>

                    
                
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection

