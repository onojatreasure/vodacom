@extends('layouts.app')

@section('content')
<div class="columns">

<div class="column is-one-third is-offset-one-third m-t-100">
    <div class="card">

        <!-- Beginning of card-content -->
        <div class="card-content">
            <h1 class="title">Forgot Password?</h1>

            <form action="{{route('password.email')}}" method="POST" role="form">
                {{csrf_field()}}
            <div class="field">
                <label for="email" class="label">Email</label>
                <p class="control">
                    <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
                </p>
                @if ($errors->has('email'))
                    <p class="help is-danger">{{$errors->first('email')}}</p>
                @endif
            </div>

            <button class="button is-success is-outlined is-fullwidth m-t-30">Get Reset Link</button>
            </form>
        </div> 
        <!--end of card content -->

       
    </div>
    <h5 class="has-text-centered m-t-20"><i class="fa fa-caret-left m-r-20"></i><a href="{{route('login')}}" class="is-muted">Back To Login</a></h5>

</div>

</div>

@endsection
