<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Color Admin | @yield ('title')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style-responsive.html')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    <link href="{{asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    
    @yield ('stylesheets')

</head>
<body>

    @include ('layouts.partials.pace')

    @yield ('content')

    <!-- ================== BEGIN BASE JS ================== -->
    <script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/flot/jquery.flot.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dashboard.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/apps.min.js')}}"></script>

    @yield ('scripts')
    
    <script type="text/javascript">
        $(document).ready(function() {
            App.init();
            if(window.location.href == "http://localhost:8000/home")
            {
                Dashboard.init();
            }
        });
    </script>
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>