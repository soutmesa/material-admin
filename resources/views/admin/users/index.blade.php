@extends ('layouts.home_layouts')

@section ('title', 'Users - Home')

@section ('stylesheets')
	<link type="text/css" href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/sweetalert/css/sweetalert.css') }}">
    <style type="text/css">
        .no-sort::after { display: none!important; }
        .no-sort, .no-action { pointer-events: none!important; cursor: default!important; }
        .no-action {color: #000;}
    </style>
@endsection
{{ dd(Auth::user()->hasRole('owner')) }}
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
                <!-- begin col-10 -->
                <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <span class="panel-title">All Users</span>
                        </div>
                        @if(Session::get('message'))
                        <div class="alert alert-success fade in">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ Session::get('message') }}
                        </div>
                        @endif
                        <div class="panel-body">
                            <p>
                                <a class="<?php if(Request::is('*all')) echo 'no-action';?>" href="{{ route('users.index', 'all') }}">All ({{ $published }})</a>
                                @if($published >= 1) | <a class="<?php if(Request::is('*published')) echo 'no-action';?>" href="{{ route('users.index', 'published') }}">Published ({{ $published }})</a>@endif 
                                @if($trashed >= 1) | <a class="<?php if(Request::is('*trashed')) echo 'no-action';?>" href="{{ route('users.index', 'trashed') }}">Trash ({{ $trashed }})</a>@endif
                            </p>
                            {{ Form::open(['route'=>'users.bulk', 'class'=>'col-md-3', 'style="', 'padding: 0px !important;"']) }}
                                <div class="form-group col-md-8" style="padding: 0px;">
                                    {{ Form::select('action', ['Bulk Actions', 'Delete', 'Move to Trash'], null,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group col-md-4" style="padding: 0px;">
                                    {{ Form::submit('Apply', ['class'=>'btn btn-default']) }}
                                </div>
                            {{ Form::close() }}
                            {{ Form::open(['route'=>'users.create', 'class'=>'col-md-6', 'style="', 'padding: 0px !important;"']) }}
                                <div class="form-group col-md-4" style="padding: 0px;">
                                    {{ Form::select('action', ['All dates'], null,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group col-md-4" style="padding: 0px;">
                                    {{ Form::select('action', ['All Categories', 'Uncategory'], null,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group col-md-4" style="padding: 0px;">
                                    {{ Form::submit('Filter', ['class'=>'btn btn-default']) }}
                                </div>
                            {{ Form::close() }}
                            <div class="clearfix"></div>
                            <table id="my-table" class="table table-hover table-striped table-bordered nowrap" width="100%">
                                <thead>
                                    <tr>
                                        <th>{{ Form::checkbox('checkall', null) }}</th>
                                        <th>User Name</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Date of Birth</th>
                                        <th>Published</th>
                                        <th class="no-sort" align="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $user)
                                    @if($user->id != Auth::id())
                                    <tr>
                                        <td>{{ Form::checkbox('checked-user', $user->id) }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->dob }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        @if(Request::is('*trashed'))
                                        <td align="center">
                                            <a class="btn btn-xs btn-icon btn-circle btn-info" href="{{ route('users.restore', $user->id) }}"><i class="fa fa-repeat"></i></a> | 
                                            <a href="{{ route('users.destroy', [$user->id,'force']) }}" class="btn btn-xs btn-icon btn-circle btn-danger"><i class="fa fa-times"></i></a>
                                        </td>
                                        @else
                                        <td align="center">
                                            <a class="btn btn-xs btn-icon btn-circle btn-warning" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-edit"></i></a> | 
                                            <a href="{{ route('users.destroy', [$user->id, 'trash']) }}" class="btn btn-xs btn-icon btn-circle btn-danger"><i class="fa fa-times"></i></a>
                                        </td>
                                        @endif
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            {{ $users->links() }}
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
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
	<script type="text/javascript" src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/table-manage-responsive.demo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/sweetalert/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            TableManageResponsive.init();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[name="checkall"]').click(function(event) {   
                if(this.checked){
                    $(':checkbox').each(function(){this.checked=true;});
                }else{
                    $(':checkbox').each(function(){this.checked=false;});
                }
            });
        });

        $('table tr td .btn-danger').on('click',function(e){
            e.preventDefault();
            var mycurrent = $(this);
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm){
                if (isConfirm) {
                    window.location.href = mycurrent.attr('href');
                }
            });
        });
        $(document).ready(function(){
            $('#my-table').DataTable({
                "order": [[ 3, "desc" ]],
                "paging": false,
                "searching": true,
                "language": {
                    searchPlaceholder: "Type the key here ... "
                },
                "bInfo" : false,
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 0 ] }
                ]
            });
            function disabledAlert()
            {
                if($('div').hasClass('alert'))
                {
                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove(); 
                    });
                }else{
                    disabledInterval();
                }
            }
            var mytimeinterval = setInterval(disabledAlert, 4000);

            function disabledInterval()
            {
                clearInterval(mytimeinterval);
            }
        });
    </script>
@endsection