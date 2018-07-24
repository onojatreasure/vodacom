@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Create New User</h1>
            </div>
        </div>
        <hr class="m-t-10">

    <div class="card">
            <div class="card-content">

        <form action="{{route('users.store')}}" method="POST">
              {{csrf_field()}}
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <div class="field has-addons">
                        <p class="control has-icons-left is-expanded">
                            <input type="text" class="input" name="email" id="email">
                            <span class="icon is-small is-left">
                                <i class="fa fa-fw m-r-10 fas fa-envelope"></i>
                            </span>
                        </p>
                        
                        </div>
                        
                    </div>

                    <div class="field">
                        <label for="email" class="label">Residential Address</label>
                        <p class="control">
                            <input type="text" class="input" name="residential_address" id="residential_address">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Phone Number</label>
                        <p class="control">
                            <input type="text" class="input" name="phone_number" id="phone_number">
                        </p>
                    </div>

                     <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input type="password" class="input" name="password" id="password" v-if="!auto_password">
                            <b-checkbox name="auto_generate" class="m-t-15" :checked="true" v-model="auto_password">Auto Generate Password</b-checkbox>
                        </p>
                    </div> <!-- end of .column -->

                </div>

                <div class="column">

                    <div class="field">
                        <label for="email" class="label">Bank Name</label>
                        <p class="control">
                            <input type="text" class="input" name="bank_name" id="bank_name">
                        </p>
                    </div>
                

                    <div class="field">
                        <label for="email" class="label">Account Type</label>
                        <p class="control is-expanded">
                            <div class="select is-fullwidth">
                                <select name='account_type'>
                                <option>Current</option>
                                <option>Savings</option>
                                </select>
                            </div>
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Account Name</label>
                        <p class="control">
                            <input type="text" class="input" name="account_name" id="account_name">
                        </p>
                    </div>

                    <div class="field">
                        <label for="email" class="label">Account Number</label>
                        <p class="control">
                            <input type="text" class="input" name="account_number" id="account_number">
                        </p>
                    </div>

                     <div class="field">
                        <label for="email" class="label">Monthly Deposit</label>
                        <p class="control">
                            <input type="text" class="input" name="monthly_amount" id="account_number">
                        </p>
                    </div>

                </div>

            </div>

                <button class="button is-success is-pulled-right">Create User</button>
                    
                    
                </form>

            </div>
        </div>
            
        </div>
    
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true
            }
        });
    </script>
@endsection