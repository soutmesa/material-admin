begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="#" data-toggle="nav-profile">
                    <div class="image">
                        <img src="{{asset('assets/img/user.jpg')}}" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}
                        <small>Front end developer</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="#"><i class="material-icons">settings</i> Settings</a></li>
                    <li><a href="#"><i class="material-icons">mode_edit</i> Send Feedback</a></li>
                    <li><a href="#"><i class="material-icons">help</i> Helps</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Applications</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <i class="material-icons">home</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <span class="badge pull-right">10</span>
                    <i class="material-icons">inbox</i>
                    <span>Email</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_inbox.html">Inbox v1</a></li>
                    <li><a href="email_inbox_v2.html">Inbox v2</a></li>
                    <li><a href="email_compose.html">Compose</a></li>
                    <li><a href="email_detail.html">Detail</a></li>
                </ul>
            </li> -->
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">toys</i>
                    <span>UI Elements <span class="label label-theme m-l-5">NEW</span></span> 
                </a>
                <ul class="sub-menu">
                    <li><a href="ui_general.html">General</a></li>
                    <li><a href="ui_typography.html">Typography</a></li>
                    <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                    <li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
                    <li><a href="ui_modal_notification.html">Modal & Notification</a></li>
                    <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
                    <li><a href="ui_media_object.html">Media Object</a></li>
                    <li><a href="ui_buttons.html">Buttons</a></li>
                    <li><a href="ui_icons.html">Icons</a></li>
                    <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
                    <li><a href="ui_ionicons.html">Ionicons</a></li>
                    <li><a href="ui_tree.html">Tree View</a></li>
                    <li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
                    <li><a href="ui_social_buttons.html">Social Buttons<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="ui_tour.html">Intro JS<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li> -->
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">insert_drive_file</i>
                    <span>Form Stuff <span class="label label-theme m-l-5">NEW</span></span> 
                </a>
                <ul class="sub-menu">
                    <li><a href="form_elements.html">Form Elements</a></li>
                    <li><a href="form_plugins.html">Form Plugins</a></li>
                    <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizards.html">Wizards</a></li>
                    <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
                    <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
                    <li><a href="form_editable.html">X-Editable</a></li>
                    <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                    <li><a href="form_summernote.html">Summernote <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="form_dropzone.html">Dropzone <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li> -->
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">grid_on</i>
                    <span>Tables</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="table_basic.html">Basic Tables</a></li>
                    <li class="has-sub">
                        <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                        <ul class="sub-menu">
                            <li><a href="table_manage.html">Default</a></li>
                            <li><a href="table_manage_autofill.html">Autofill</a></li>
                            <li><a href="table_manage_buttons.html">Buttons</a></li>
                            <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                            <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                            <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                            <li><a href="table_manage_keytable.html">KeyTable</a></li>
                            <li><a href="table_manage_responsive.html">Responsive</a></li>
                            <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                            <li><a href="table_manage_scroller.html">Scroller</a></li>
                            <li><a href="table_manage_select.html">Select</a></li>
                            <li><a href="table_manage_combine.html">Extension Combination</a></li>
                        </ul>
                    </li>
                </ul>
            </li> -->
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">polymer</i>
                    <span>Front End</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/') }}" target="_blank">Blog</a></li>
                    <li><a href="{{ url('/') }}" target="_blank">Forum</a></li>
                    <li><a href="{{ url('/') }}" target="_blank">E-Commerce</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">loyalty</i>
                    <span>Posts</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/posts') }}" target="_blank">All posts</a></li>
                    <li><a href="{{ url('/posts/new') }}" target="_blank">New post</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">label</i>
                    <span>Tags</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/tags') }}" target="_blank">All tags</a></li>
                    <li><a href="{{ url('/tags/new') }}" target="_blank">New tag</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">loyalty</i>
                    <span>Categories</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/categories') }}" target="_blank">All categories</a></li>
                    <li><a href="{{ url('/categories/new') }}" target="_blank">New category</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="material-icons">camera</i>
                    <span>Gallory</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">settings</i>
                    <span>Roles</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/roles') }}" target="_blank">All roles</a></li>
                    <li><a href="{{ url('/roles/new') }}" target="_blank">New role</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">settings</i>
                    <span>Permissions</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/permissions') }}" target="_blank">All permissions</a></li>
                    <li><a href="{{ url('/permissions/new') }}" target="_blank">New permission</a></li>
                </ul>
            </li>
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">email</i>
                    <span>Email Template</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_system.html">System Template</a></li>
                    <li><a href="email_newsletter.html">Newsletter Template</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">insert_chart</i>
                    <span>Chart</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="chart-flot.html">Flot Chart</a></li>
                    <li><a href="chart-morris.html">Morris Chart</a></li>
                    <li><a href="chart-js.html">Chart JS</a></li>
                    <li><a href="chart-d3.html">d3 Chart</a></li>
                </ul>
            </li>
            <li><a href="calendar.html"><i class="material-icons">date_range</i> <span>Calendar</span></a></li> -->
            <!-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">place</i>
                    <span>Map</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="map_vector.html">Vector Map</a></li>
                    <li><a href="map_google.html">Google Map</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">camera</i>
                    <span>Gallery</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="gallery.html">Gallery v1</a></li>
                    <li><a href="gallery_v2.html">Gallery v2</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">settings</i>
                    <span>Page Options</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="page_blank.html">Blank Page</a></li>
                    <li><a href="page_with_footer.html">Page with Footer</a></li>
                    <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                    <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                    <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                    <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                    <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
                    <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
                    <li><a href="page_full_height.html">Full Height Content</a></li>
                    <li><a href="page_with_small_sidebar.html">Page with Small Sidebar</a></li>
                    <li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
                    <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                    <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                    <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                    <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                    <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                    <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">card_giftcard</i>
                    <span>Extra</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="extra_timeline.html">Timeline</a></li>
                    <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                    <li><a href="extra_search_results.html">Search Results</a></li>
                    <li><a href="extra_invoice.html">Invoice</a></li>
                    <li><a href="extra_404_error.html">404 Error Page</a></li>
                    <li><a href="extra_profile.html">Profile Page</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">lock</i>
                    <span>Login & Register</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="login_v2.html">Login v2</a></li>
                    <li><a href="login_v3.html">Login v3</a></li>
                    <li><a href="register_v3.html">Register v3</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">apps</i>
                    <span>Version <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="http://seantheme.com/color-admin-v2.2/admin/html/index.html">HTML</a></li>
                    <li><a href="http://seantheme.com/color-admin-v2.2/admin/ajax/index.html">AJAX</a></li>
                    <li><a href="http://seantheme.com/color-admin-v2.2/admin/angularjs/index.html">ANGULAR JS</a></li>
                    <li><a href="http://seantheme.com/color-admin-v2.2/admin/angularjs2/index.html">ANGULAR JS 2 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="javascript:;">MATERIAL DESIGN</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">help</i>
                    <span>Helper</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">list</i>
                    <span>Menu Level</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            Menu 1.1
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret pull-right"></b>
                                    Menu 2.1
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;">Menu 3.1</a></li>
                                    <li><a href="javascript:;">Menu 3.2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 2.2</a></li>
                            <li><a href="javascript:;">Menu 2.3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Menu 1.2</a></li>
                    <li><a href="javascript:;">Menu 1.3</a></li>
                </ul>
            </li> -->
            <!-- begin sidebar minify button -->
            <!-- <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li> -->
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar