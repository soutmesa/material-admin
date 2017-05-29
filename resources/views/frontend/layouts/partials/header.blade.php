    <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url('/') }}" class="navbar-brand">
                    <span class="brand-logo"></span>
                    <span class="brand-text">
                        COLOR ADMIN
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="{{ url('/') }}">HOME</a>
                    </li>
                    <li>
                        <a href="{{ url('posts-page') }}">POSTS</a>
                    </li>
                    <li><a href="{{ url('about') }}">ABOUT ME</a></li>
                    <li><a href="{{ url('contact') }}">CONTACT US</a></li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>