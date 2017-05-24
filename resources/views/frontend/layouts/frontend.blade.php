<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Blog | @yield ('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/css/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/css/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/css/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/css/theme/default.css') }}" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('frontend/assets/plugins/pace/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
    @include ('frontend.layouts.partials.header')
    <!-- end #header -->
    
    <!-- begin #page-title -->
    <div id="page-title" class="page-title has-bg">
        <div class="bg-cover"><img src="{{asset('frontend/assets/img/cover2.jpg')}}" alt="" /></div>
        <div class="container">
            <h1>Official Color Admin Blog</h1>
            <p>Blog Concept Front End Page</p>
        </div>
    </div>
    <!-- end #page-title -->

    @yield ('content')

    <!-- begin #footer -->
    <div id="footer" class="footer">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Categories</h4>
                        <ul class="categories">
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Outdoor Sports</a></li>
                            <li><a href="#">Indoor Sports</a></li>
                            <li><a href="#">Video Shooting</a></li>
                            <li><a href="#">Drone</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Archives</h4>
                        <ul class="archives">
                            <li><a href="#">June 2015</a> <span class="total">(102)</span></li>
                            <li><a href="#">May 2015</a> <span class="total">(46)</span></li>
                            <li><a href="#">April 2015</a> <span class="total">(84)</span></li>
                            <li><a href="#">March 2015</a> <span class="total">(67)</span></li>
                            <li><a href="#">February 2015</a> <span class="total">(99)</span></li>
                            <li><a href="#">January 2015</a> <span class="total">(113)</span></li>
                            <li><a href="#">December 2014</a> <span class="total">(25)</span></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Recent Posts</h4>
                        <ul class="recent-post">
                            <li>
                                <h4>
                                    <a href="#">Nam ut urna hendrerit</a>
                                    <span class="time">February 22, 2015</span>
                                </h4>
                            </li>
                            <li>
                                <h4>
                                    <a href="#">Class aptent taciti sociosqu</a>
                                    <span class="time">July 15, 2015</span>
                                </h4>
                            </li>
                            <li>
                                <h4>
                                    <a href="#">Donec rhoncus arcu</a>
                                    <span class="time">March 21, 2015</span>
                                </h4>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <div class="section-container">
                        <h4 class="footer-title">About Color Admin</h4>
                        <address>
                            <strong>Twitter, Inc.</strong><br />
                            795 Folsom Ave, Suite 600<br />
                            San Francisco, CA 94107<br />
                            P: (123) 456-7890<br />
                            <br />
                            <strong>Full Name</strong><br />
                            <a href="#">first.last@example.com</a>
                        </address>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #footer -->
    <!-- begin #footer-copyright -->
    <div id="footer-copyright" class="footer-copyright">
        <!-- begin container -->
        <div class="container">
            <span class="copyright">&copy; 2015 SeanTheme All Right Reserved</span>
            <ul class="social-media-list">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
        <!-- end container -->
    </div>
    <!-- end #footer-copyright -->
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('frontend/assets/plugins/jquery/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="frontend/assets/crossbrowserjs/html5shiv.js"></script>
        <script src="frontend/assets/crossbrowserjs/respond.min.js"></script>
        <script src="frontend/assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{ asset('frontend/assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/apps.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>