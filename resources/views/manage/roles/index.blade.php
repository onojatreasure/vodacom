@extends('layouts.manage')

@section('content')
<div class="columns">
            <div class="column">
                <h1 class="title">Manage Roles</h1>
            </div>
            <div class="column">
                <a href="{{route('roles.create')}}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Create New Role</a>
            </div>
        </div>
@endsection