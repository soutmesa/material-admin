@extends ('frontend.layouts.frontend')

@section ('title', 'Contact')

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
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3306.9584799260138!2d-118.49437019999998!3d34.019276700000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4cedd1266ff%3A0x1ffe328381544853!2sGoogle+Inc!5e0!3m2!1sen!2s!4v1435718319426" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title m-b-20"><span>CONTACT US</span></h4>
                        <p class="m-b-30 f-s-13">
                            If you have a project you would like to discuss, get in touch with us.
                            Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, 
                            lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.
                        </p>
                        <!-- begin row -->
                        <div class="row row-space-30 f-s-12 text-inverse">
                            <!-- begin col-8 -->
                            <div class="col-md-8">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Message <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"></label>
                                        <div class="col-md-9 text-left">
                                            <button type="submit" class="btn btn-inverse btn-lg btn-block">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end col-8 -->
                            <!-- begin col-4 -->
                            <div class="col-md-4">
                                <p>
                                    <strong>SeanTheme Studio, Inc</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    P: (123) 456-7890<br>
                                </p>
                                <p>
                                    <span class="phone">+11 (0) 123 456 78</span><br>
                                    <a href="mailto:hello@emailaddress.com">seanthemes@support.com</a>
                                </p>
                            </div>
                            <!-- end col-4 -->
                        </div>
                        <!-- end row -->
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