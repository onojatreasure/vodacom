<nav class = "navbar has-shadow">
            <div class="container">

                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/tami_1.jpg')}}" alt="Vodacom Logo" />
                    </a>

                    <div class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                   
                </div>

                    <div class="navbar-menu" id="navMenu">

                        <div class="navbar-start">
                            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                          
                        </div>

                        <div class="navbar-end" >
                            @if (Auth::guest())
                                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                                <a href="{{route('register')}}" class="navbar-item is-tab">Register</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable is-aligned-right">
                                    <div class="navbar-link" href="">
                                        Hey {{ Auth::user()->name }}
                                    </div>
                                    <ul class="navbar-dropdown is-boxed">
                                        <li><a class="navbar-item is-active" href="">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>    
                                        Profile</a></li>
                                        <li><a class="navbar-item is-active" href="">
                                        <span class="icon"><i class="fa fa-fw m-r-10  fa-bell"></i></span>    
                                        Notifications</a></li>
                                        <li><a class="navbar-item is-active" href="{{route('manage.dashboard')}}">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>    
                                        Manage</a></li>
                                        <hr class="navbar-divider">
                                        <li><a class="navbar-item is-active" href="{{route('logout')}}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                           <span class="icon">
                                            <i class="fa fa-fw fa-sign-out m-r-5"></i>
                                          </span>
                                          Logout
                                        </a>
                                           @include('_includes.forms.logout')
                                       </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
            </div>
          </nav>