<header>
    <!-- Top -->
    <section id="top" class="topBar show-for-large">
        <div class="row">
            <div class="medium-6 columns">
                <div class="socialLinks">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="medium-6 columns">
                <div class="top-button">
                    <ul class="menu float-right">
                        <li>
                            <a href="#">upload Video</a>
                        </li>
                        @if(Auth::user())
                        <li class="dropdown-login">
                            <a href="#" class="loginReg" style="text-transform: none" data-toggle="example-dropdown">Hi! {{ Auth::user()->name }}</a>
                            <div class="login-form">
                            <a href="{{ route('about-me', Auth::user()->id) }}" class="text-center hi-user">My Profile</a>
                                <form action="{{ route('actionLogout') }}" method="POST">
                                    @csrf
                                    <a href="#" class="text-center hi-user">Logout</a>
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="dropdown-login">
                            <a class="loginReg" data-toggle="example-dropdown" href="#">login/Register</a>
                            <div class="login-form">
                                <h6 class="text-center">Great to have you back!</h6>
                                <form method="post" action="{{ route('actionLogin') }}">
                                    @csrf
                                    <div class="input-group">
                                        <span class="input-group-label"><i class="fa fa-user"></i></span>
                                        <input class="input-group-field" name="email" type="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                        <input class="input-group-field" name="password" type="password" placeholder="Enter password" required>
                                    </div>
                                    <div class="checkbox">
                                        <input id="check1" type="checkbox" name="check" value="check">
                                        <label class="customLabel" for="check1">Remember me</label>
                                    </div>
                                    <input type="submit" name="submit" value="Login Now">
                                </form>
                                <p class="text-center">New here? <a class="newaccount" href="login-register.html">Create a new Account</a></p>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Top -->
    <!--Navber-->
    <section id="navBar">
        <nav class="sticky-container" data-sticky-container>
            <div class="sticky topnav" data-sticky data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0" data-margin-bottom="0" style="width: 100%; background: #fff;" data-sticky-on="large">
                <div class="row">
                    <div class="large-12 columns">
                    <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large">
                        <button class="menu-icon" type="button" data-toggle="offCanvas-responsive"></button>
                        <div class="title-bar-title"><img src="images/logo-small.png" alt="logo"></div>
                    </div>

                    <div class="top-bar show-for-large" id="beNav" style="width: 100%;">
                        <div class="top-bar-left">
                            <ul class="menu">
                                <li class="menu-text">
                                    <a href="home-v1.html"><img src="images/logo.png" alt="logo"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-bar-right search-btn">
                            <ul class="menu">
                                <li class="search">
                                    <i class="fa fa-search"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="top-bar-right">
                            <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                                <li class="has-submenu active">
                                    <a href="home-v1.html"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="has-submenu" data-dropdown-menu="example1">
                                <a href="#"><i class="fa fa-film"></i>Videos</a>                                     
                                </li>
                                <li><a href="#"><i class="fa fa-th"></i>category</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>profile</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>contact</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="search-bar" class="clearfix search-bar-light">
                    <form method="post">
                        <div class="search-input float-left">
                            <input type="search" name="search" placeholder="Seach Here your video">
                        </div>
                        <div class="search-btn float-right text-right">
                            <button class="button" name="search" type="submit">search now</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </section>
</header>