@extends ('layouts.app')

@section ('title',  'Login Page')

@section ('content')
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="assets/img/login-bg/bg-1.jpg" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="material-icons text-cyan pull-left m-r-5">edit</i> Announcing the Color Admin app</h4>
                    <p>
                        As a Color Admin Apps administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Sign Up
                    <small>Create your Color Admin Account. It’s free and always will be.</small>
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    {{ Form::open(['url'=>'register', 'class'=>'margin-bottom-0']) }}

                        <label class="control-label">User Name <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                {{ Form::text('username', old('username'), ['class'=>'form-control', 'placeholder'=>'User name']) }}
                            </div>
                        </div>

                        <label class="control-label">Name <span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                                {{ Form::text('firstname', old('firstname'), ['class'=>'form-control', 'placeholder'=>'First name']) }}
                            </div>
                            <div class="col-md-6 m-b-15">
                                {{ Form::text('lastname', old('lastname'), ['class'=>'form-control', 'placeholder'=>'Last name']) }}
                            </div>
                        </div>

                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                {{ Form::email('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) }}
                            </div>
                        </div>

                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) }}
                            </div>
                        </div>

                        <label class="control-label">Confirm Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                {{ Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirm Password']) }}
                            </div>
                        </div>

                        <label class="control-label">Date Of Birth <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" name="dob" class="form-control flatpickr" id="datepicker-default" placeholder="Select Date" value="{{ old('dob') }}" />
                            </div>
                        </div>
                        
                        <div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" required /> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use</a>.
                            </label>
                        </div>

                        <div class="register-buttons">
                            <button type="submit" class="btn btn-info btn-block btn-lg">Sign Up</button>
                        </div>

                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="{{ url('login') }}">here</a> to login.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Color Admin All Right Reserved 2017
                        </p>

                    {{ Form::close() }}
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        <!-- begin theme-panel -->
        <!-- <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-cyan" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default/Cyan">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end theme-panel -->
    </div>
    <!-- end page container -->

@endsection

@section ('scripts')
    <script type="text/javascript" src="https://unpkg.com/flatpickr"></script>
    <script type="text/javascript">
        flatpickr('#datepicker-default', {
            theme: 'material_blue',
            dateFormat: 'Y-m-d',
            minDate: '1920-01-01',
            maxDate: '1999-01-01',
        });
    </script>
@endsection