@extends ('frontend.layouts.frontend')

@section ('title', 'About')

@section ('content')
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <div class="post-image">
                            <img src="{{asset('frontend/assets/img/about-me.jpg')}}" alt="" />
                        </div>
                        <h3 class="text-inverse">Dagan Ammiel</h3>
                        <p class="about-me-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id efficitur ipsum. 
                            Praesent vulputate vulputate metus vulputate hendrerit. Sed in magna sit amet lorem congue 
                            semper non vel tellus. Nam tempor molestie aliquet. Fusce ultrices magna efficitur, 
                            sodales turpis ut, suscipit tortor. Mauris at sem pellentesque, fringilla ligula vel, 
                            luctus metus.
                        </p>
                        <p class="about-me-desc">
                            Morbi convallis volutpat quam, sit amet fermentum massa. 
                            Nulla ac faucibus risus. Suspendisse ante elit, faucibus sed pharetra nec, 
                            laoreet sed enim. Integer consectetur, risus id semper porttitor, lacus dolor euismod magna, 
                            id consectetur dui mi vitae lorem. Nam ac malesuada urna, vel mollis eros. Aliquam erat volutpat.
                        </p>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <div class="input-group sidebar-search">
                            <input type="text" class="form-control" placeholder="Search Our Stories..." />
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Categories</span></h4>
                        <ul class="sidebar-list">
                            <li><a href="#">Sports (20)</a></li>
                            <li><a href="#">Outdoor Sports (45)</a></li>
                            <li><a href="#">Indoor Sports (1,292)</a></li>
                            <li><a href="#">Video Shooting (12)</a></li>
                            <li><a href="#">Drone (229)</a></li>
                            <li><a href="#">Uncategorized (1,482)</a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Recent Post</span></h4>
                        <ul class="sidebar-recent-post">
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                    <div class="date">23 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Vestibulum a cursus arcu.</a></h4>
                                    <div class="date">16 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Nullam vel condimentum lectus. </a></h4>
                                    <div class="date">7 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Proin in dui egestas libero posuere ullamcorper. </a></h4>
                                    <div class="date">20 November 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Interdum et malesuada fames ac ante.</a></h4>
                                    <div class="date">5 November 2015</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Follow Us</span></h4>
                        <ul class="sidebar-social-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
    
@endsection