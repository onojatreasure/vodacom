@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success">
        {{session('status')}}
    </div>

<div class="columns">

<div class="column is-one-third is-offset-one-third m-t-100">
    <div class="card">

        <!-- Beginning of card-content -->
        <div class="card-content">
            <h1 class="title">Reset Your Password</h1>

            <form action="{{route('register')}}" method="POST" role="form">
                {{csrf_field()}}

                <input type="hidden" name="token" value="{{$token}}">

                <div class="field">
                    <label for="email" class="label">Email</label>
                    <p class="control">
                        <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}" required>
                    </p>
                    @if ($errors->has('email'))
                        <p class="help is-success">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control">
                                <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" id="password" name="password" placeholder="Password" required>
                            </p>
                        
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                    </div>


                    <div class="column">
                        <div class="field">
                            <label for="password" class="label">Confirm Password</label>
                            <p class="control">
                                <input type="password" class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" id="password" name="password" placeholder="Confirm Password" required>
                            </p>
                        
                            @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                            @endif
                        </div>               
                    </div>
                </div>

            <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>

            </form>
        </div> 
        <!--end of card content -->

    </div>

    <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already Have an Account</a></h5>

</div>

</div>
@endsection
