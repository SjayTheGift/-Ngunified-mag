<div class="container">

            <!--728X90 space-->
            <div class="header_ad_728x90">

            </div>

            <!--End-->
        </div>

        <div class="container" id="main-container">

            <div class="logo-container">
                <img  src="{{ asset('user/img/logo.png')}}" class="img-responsive logo">
            </div>
            
            <!--Navbar-->
        <nav class="navbar navbar-default" id="my-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand"></a>
                </div><!--End Navbar-header-->

                <div class="collapse navbar-collapse" id="navbar-collapse">


                    <ul class="nav navbar-nav navbar-default">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="#gallery">About</a></li>
                        <li><a href="{{ route('art') }}">Art&Fashion</a></li>
                        <li><a href="#contact">Contact</a></li>
                        
                        <li>
                        @if (Auth::guest())
                            <a href="{{ route('login') }}">Login</a>
                        @else
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </li>
                        
                        
                    </ul>
                </div>
            </div> <!--End Container-->
        </nav> <!--End Navbar-->