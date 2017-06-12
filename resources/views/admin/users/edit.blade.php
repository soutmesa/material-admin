@extends ('layouts.home_layouts')

@section ('title', 'Users - New')

@section ('stylesheets')
	<link href="{{asset('assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
@endsection

@section ('content')
	
	<!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">

        @include ('layouts.partials.header')
        
        @include ('layouts.partials.sidebar')
        
        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <!-- end breadcrumb -->

            <!-- begin page-header -->
            <h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
            <!-- end page-header -->

            <!-- begin row -->
			<div class="row">
                {{ Form::open(['route'=>['users.update', $user->id], 'name'=>'wysihtml5']) }}
                {{ method_field('PATCH') }}
                <!-- begin col-8 -->
                <div class="col-md-8">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-wysiwyg-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Users - Edit</h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    {{ Form::text('username', $user->username, ['class'=>'form-control', 'placeholder'=>'Enter user name ...']) }}
                                </div>
                                <div class="col-md-6">
                                    {{ Form::text('firstname', $user->firstname, ['class'=>'form-control', 'placeholder'=>'Enter first name ...']) }}
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-md-6">
                                    {{ Form::text('lastname', $user->lastname, ['class'=>'form-control', 'placeholder'=>'Enter title ...']) }}
                                </div>
                                <div class="col-md-6">
                                    {{ Form::text('email', $user->email, ['class'=>'form-control', 'placeholder'=>'Enter title ...']) }}
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-md-6">
                                    {{ Form::select('gender', ['female'=>'Female', 'male'=>'Male'], $user->gender, ['class'=>'form-control']) }}
                                </div>
                                <div class="col-md-6">
                                    {{ Form::text('phone', $user->phone, ['class'=>'form-control']) }}
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-md-6">
                                    {{ Form::text('dob', $user->dob, ['class'=>'form-control', 'id'=>'datepicker-default']) }}
                                </div>
                                <div class="col-md-6">
                                    {{ Form::textarea('addres', $user->addres, ['class'=>'textarea form-control', 'rows'=>'3', 'placeholder'=>'Enter text ...']) }}
                                </div>
                            </div>
                            <br><br>
                            <br><br>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {{ Form::textarea('pob', $user->addres, ['class'=>'textarea form-control', 'rows'=>'3', 'placeholder'=>'Enter text ...']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->

                <div class="col-md-4">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">WYSIHTML5</h4>
                        </div>
                        <div class="panel-body">
                            <select class="multiple-select2 role form-control"  name="roles[]" multiple="multiple">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                            </select>
                            <br>
                            <br>
                            {{ Form::submit('Update', ['class'=>'btn btn-primary'])}}
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->
        
        <!-- begin theme-panel -->
        <div class="theme-panel">
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
        </div>
        <!-- end theme-panel -->
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

@endsection

@section ('scripts')
	<script type="text/javascript" src="{{asset('assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/form-wysiwyg.demo.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="https://unpkg.com/flatpickr"></script>
	<script type="text/javascript" type="text/javascript">
		$(document).ready(function() {
			FormWysihtml5.init();
            $('.multiple-select2.role').select2({
                placeholder: " Select Roles"
            }).val({{$user->roles()->getRelatedIds()}}).trigger('change');

            flatpickr('#datepicker-default', {
                theme: 'material_blue',
                dateFormat: 'd-m-Y',
                minDate: '01-01-1920',
                maxDate: '01-01-1999',
            });
		});
	</script>
@endsection