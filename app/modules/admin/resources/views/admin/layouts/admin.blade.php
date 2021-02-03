<!DOCTYPE html>
<html lang="en" class="loading">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')
        <title>{{trans('control_panel')}}</title>
        <link rel="shortcut icon" type="image/png" href="{{ URL::to('resources/assets/back/img/logo.png') }}">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/fonts/feather/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/fonts/simple-line-icons/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/fonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/vendors/css/perfect-scrollbar.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/vendors/css/prism.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/vendors/css/chartist.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/css/select2.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/css/all.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/fonts/feather/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/fonts/simple-line-icons/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/fonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back//vendors/css/tables/datatable/datatables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('resources/assets/back/css/app.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{url('resources/assets/back/css/fileinput.css') }}" />
        @if (\App::getLocale() == 'ar')
            <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/bootstrap-rtl.css') }}">
            <link rel="stylesheet" href="{{ URL::to('resources/assets/back/css/rtl.css') }}">
        @endif


        @yield('style')
    </head>
  <body data-col="2-columns" class=" 2-columns">

    <div class="wrapper">
        <div data-active-color="white" data-background-color="black" data-image="{{ URL::to('resources/assets/back/img/sidebar-bg/01.jpg') }}" class="app-sidebar">
            <div class="sidebar-header">
                <div class="logo clearfix">
                  <a href="{{url('/admin')}}" class="logo-text float-left">
                      <div class="logo-img">
                          <img src="{{ URL::to('resources/assets/back/img/logos/logo.png') }}" />
                      </div>
                      <span class="text alignLeft">{{trans('home.admin_panel')}}</span>
                  </a>
                  <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
                      <i data-toggle="expanded" class="ft-disc toggle-icon"></i>
                  </a>
                  <a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
                      <i class="ft-circle"></i>
                  </a>
                </div>
            </div>
            <div class="sidebar-content">
                <div class="nav-container">
                    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

                        @can(['country','region'])
                          <li class="has-sub nav-item">
                              <a href="#">
                                  <i class="fas fa-globe"></i><span data-i18n="" class="menu-title">{{trans('home.countries')}}</span>
                              </a>
                              <ul class="menu-content">
                                  <li @if(Request::segment(2) == 'countries') class="active" @endif>
                                      <a href="{{url('admin/countries')}}" class="menu-item">{{trans('home.countries')}}</a>
                                  </li>

                                  <li @if(Request::segment(2) == 'regions') class="active" @endif>
                                      <a href="{{url('admin/regions')}}" class="menu-item">{{trans('home.regions')}}</a>
                                  </li>
                              </ul>
                          </li>
                        @endcan

                         @can('categories')
                            <li class="has-sub nav-item">
                                <a href="#">
                                    <i class="icon-grid"></i><span data-i18n="" class="menu-title">{{trans('home.categories')}}</span>
                                </a>
                                <ul class="menu-content">
                                    <li @if(Request::segment(2) == 'categories') class="active" @endif>
                                        <a href="{{url('admin/categories')}}" class="menu-item">{{trans('home.categories')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can(['providers','features','providerProducts'])
                            <li class="has-sub nav-item">
                                <a href="#">
                                    <i class="fas fa-align-justify"></i><span data-i18n="" class="menu-title">{{trans('home.providers')}}</span>
                                </a>
                                <ul class="menu-content">
                                    <li @if(Request::segment(2) == 'features') class="active" @endif>
                                        <a href="{{url('admin/features')}}" class="menu-item">{{trans('home.features')}}</a>
                                    </li>

                                    <li @if(Request::segment(2) == 'providers') class="active" @endif>
                                        <a href="{{url('admin/providers')}}" class="menu-item">{{trans('home.providers')}}</a>
                                    </li>

                                    <li @if(Request::segment(2) == 'providerProducts') class="active" @endif>
                                        <a href="{{url('admin/providerProducts')}}" class="menu-item">{{trans('home.providerProducts')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endcan                    

                        @can(['users','roles','permissions'])
                            <li class="has-sub nav-item">
                                <a href="#">
                                    <i class="fas fa-users"></i><span data-i18n="" class="menu-title">{{trans('home.users')}}</span>
                                    @if(App\User::hasnews())
                                        <img src="{{ url('resources/assets/back/img/spot1.gif') }}" width="20"/>
                                    @endif
                                </a>
                                <ul class="menu-content">
                                    <li @if(Request::segment(2) == 'users') class="active" @endif>
                                        <a href="{{url('admin/users')}}" class="menu-item">
                                            {{trans('home.users')}}
                                            @if(App\User::UserCount() > 0)
                                                <span class="tag badge badge-pill badge-danger mt-1">{{App\User::userCount()}}</span>
                                            @endif
                                        </a>
                                    </li>
                                    
                                    <li @if(Request::segment(2) == 'roles') class="active" @endif>
                                        <a href="{{url('admin/roles')}}" class="menu-item">{{trans('home.roles')}}</a>
                                    </li>

                                    <li @if(Request::segment(2) == 'permissions') class="active" @endif>
                                        <a href="{{url('admin/permissions')}}" class="menu-item">{{trans('home.permissions')}}</a>
                                    </li>
                                </ul>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
            <div class="sidebar-background"></div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <span class="d-lg-none navbar-right navbar-collapse-toggle">
                      <a class="open-navbar-container"><i class="ft-more-vertical"></i></a>
                    </span>
                </div>
                <div class="navbar-container">
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="dropdown nav-item mr-0">
                                <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle">
                                    {{ trans('home.welcome') }}  {{Auth::user()->name}}
                                    <span class="avatar avatar-online">
                                        <img id="navbar-avatar" src="{{ URL::to('uploads/users/resize200') }}/{{ Auth::user()->image }}" alt="avatar"/>
                                    </span>
                                    <p class="d-none">{{trans('home.user_settings')}}</p>
                                </a>
                                <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                                    <div class="arrow_box_right">
                                          <a href="{{url('/settings')}}" class="dropdown-item py-1">
                                            <i class="ft-settings mr-2"></i><span>{{trans('home.settings')}}</span>
                                          </a>
                                          <div class="dropdown-divider"></div>
                                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">
                                            <i class="ft-power mr-2"></i>
                                            <span>{{trans('home.logout')}}</span>
                                          </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="footer footer-static footer-light">
        <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; {{date('Y')}} <a href="http://hyper-design.com" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">Hyper Design </a>, All rights reserved. </span></p>
    </footer>
    <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
      <div class="side-nav notification-sidebar-content">
        <div class="row">
          <div class="col-12 mt-1">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="base-tab1" href="#activity-tab" aria-expanded="true" class="nav-link active"><strong>Activity</strong></a></li>
              <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="base-tab2" href="#settings-tab" aria-expanded="false" class="nav-link"><strong>Settings</strong></a></li>
            </ul>
            <div class="tab-content">
              <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                <div id="activity-timeline" class="col-12 timeline-left">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                  <div class="timeline">
                    <ul class="list-unstyled base-timeline activity-timeline ml-0">
                      <li>
                        <div class="timeline-icon bg-danger"><i class="ft-shopping-cart"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span class="d-block">Jim Doe Purchased new equipments for zonal office.</span></div><small class="text-muted">just now</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-primary"><i class="fa fa-plane"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span class="d-block">Your Next flight for USA will be on 15th August 2015.</span></div><small class="text-muted">25 hours ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-dark"><i class="ft-mic"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span class="d-block">Natalya Parker Send you a voice mail for next conference.</span></div><small class="text-muted">15 days ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span class="d-block">Jessy Jay open a new store at S.G Road.</span></div><small class="text-muted">20 days ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-primary"><i class="ft-inbox"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span class="d-block">voice mail for conference.</span></div><small class="text-muted">2 Week Ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-danger"><i class="ft-mic"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span class="d-block">Natalya Parker Jessy Jay open a new store at S.G Road.</span></div><small class="text-muted">1 Month Ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-dark"><i class="ft-inbox"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span class="d-block">Natalya Parker Send you a voice mail for Updated conference.</span></div><small class="text-muted">1 Month ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span class="d-block">Started New project with Jessie Lee.</span></div><small class="text-muted">2 Month ago</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="settings-tab" aria-labelledby="base-tab2" class="tab-pane">
                <div id="settings" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                  <ul class="list-unstyled">
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                                <label for="notifications1" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                                <label for="recent-activity1" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="notifications2" type="checkbox" class="custom-control-input">
                                <label for="notifications2" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="recent-activity2" type="checkbox" class="custom-control-input">
                                <label for="recent-activity2" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="show-emails" type="checkbox" class="custom-control-input">
                                <label for="show-emails" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="show-stats" checked="checked" type="checkbox" class="custom-control-input">
                                <label for="show-stats" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
        <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
            <h4 class="mb-0 text-bold-400">{{trans('home.Theme_Customizer')}}</h4>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">{{trans('home.Sidebar_Background_Image')}}</h6>
            <div class="cz-bg-image row">
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/01.jpg') }}" width="50" height="100" alt="Bg image1" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/02.jpg') }}" width="50" height="100" alt="Bg image2" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/03.jpg') }}" width="50" height="100" alt="Bg image3" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/04.jpg') }}" width="50" height="100" alt="Bg image4" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/05.jpg') }}" width="50" height="100" alt="Bg image5" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/06.jpg') }}" width="50" height="100" alt="Bg image6" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/07.jpg') }}" width="50" height="100" alt="Bg image7" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="{{ URL::to('resources/assets/back/img/sidebar-bg/08.jpg') }}" width="50" height="100" alt="Bg image8" class="rounded box-shadow-2"></div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch">
                    <span class="text-bold-400">{{ trans('home.show') }} / {{ trans('home.Hide_Sidebar_Bg_Image') }}</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
                            <label for="sidebar-bg-img" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">{{trans('home.Sidebar_Color_Options') }}</h6>
            <div class="cz-bg-color">
                <div class="row p-1">
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="aqua-marine" class="gradient-aqua-marine d-block rounded box-shadow-2"></span>
                    </div>
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="sublime-vivid" class="gradient-sublime-vivid d-block rounded box-shadow-2"></span>
                    </div>
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="crystal-clear" class="gradient-crystal-clear d-block rounded box-shadow-2"></span>
                    </div>
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="timber" class="gradient-timber d-block rounded box-shadow-2"></span>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="black" class="bg-black d-block rounded box-shadow-2"></span>
                    </div>
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="white" class="bg-white d-block rounded box-shadow-2"></span>
                    </div>
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="primary" class="bg-primary d-block rounded box-shadow-2"></span>
                    </div>
                    <div class="col mb-3">
                        <span style="width:50px; height:100px;" data-bg-color="danger" class="bg-danger d-block rounded box-shadow-2"></span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch"><span class="text-bold-400">{{ trans('home.Compact_Menu') }}</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                            <label for="cz-compact-menu" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div>
              <label for="cz-sidebar-width" class="text-bold-400">{{trans('home.Sidebar_Width') }}</label>
                <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                    <option value="small">{{trans('home.small')}}</option>
                    <option value="medium" selected="">{{trans('home.medium')}}</option>
                    <option value="large">{{trans('home.large')}}</option>
                </select>
            </div>
        </div>
    </div>

    <script src="{{ URL::to('resources/assets/back/vendors/js/core/jquery-3.3.1.min.js') }}"></script>
    <!-- the main fileinput plugin file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/fileinput.js"></script>
    <!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/themes/fa/theme.js"></script>
    <!-- optionally if you need translation for your language then include  locale file as mentioned below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/locales/ar.js"></script>
    <script src="{{ URL::to('resources/assets/back/vendors/js/core/popper.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/vendors/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/vendors/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/vendors/js/prism.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/vendors/js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/vendors/js/pace/pace.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/js/app-sidebar.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/js/notification-sidebar.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/js/customizer.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/js/select2.full.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/js/data-tables/datatable-basic.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/vendors/js/datatable/datatables.min.js') }}"></script>
    <script src="{{ URL::to('resources/assets/back/js/components-modal.min.js') }}"></script>
    @yield('script')

    <script>
        ///////// HTML editor ////////////////
        $(function() {
            tinymce.init({
                mode : "specific_textareas",
                mode : "textareas",
                editor_selector : "area1",
                height: 200,
                fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                theme: 'modern',
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages',
                toolbar2: 'ltr rtl | print preview media | forecolor backcolor emoticons | fontsizeselect',
                //image_advtab: true,
                templates: [
                    { title: 'Test template 1', content: 'Test 1' },
                    { title: 'Test template 2', content: 'Test 2' }
                ],
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'
                ]
            });
        });

        ///////// MAPS with lat and long//////
        var lat = $('#latitude').val();
        var long = $('#longitude').val();

        if(lat != ''){
            function initMap2() {
                var uluru = {lat: Number(lat), lng: Number(long)};
                var myOptions = {
                        zoom: 15,
                        center: new google.maps.LatLng(lat, long)
                    },
                    map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
                    marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                    }),
                    infowindow = new google.maps.InfoWindow;
                map.addListener('click', function(e) {
                    map.setCenter(e.latLng);
                    marker.setPosition(e.latLng);
                    infowindow.setContent("Latitude: " + e.latLng.lat() +
                        "<br>" + "Longitude: " + e.latLng.lng());
                    infowindow.open(map, marker);
                    var s = $('#latitude').val(e.latLng.lat());
                    var ss = $('#longitude').val(e.latLng.lng());
                });
            }
        }else{
            function initMap1() {
                var uluru = {lat: 30.0096523304429, lng: 31.22744746506214};
                var myOptions = {
                        zoom: 10,
                        center: new google.maps.LatLng(30.0096523304429, 31.22744746506214)
                    },
                    map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
                    marker = new google.maps.Marker({
                        position: uluru,
                        map: map,
                    }),
                    infowindow = new google.maps.InfoWindow;
                map.addListener('click', function(e) {
                    map.setCenter(e.latLng);
                    marker.setPosition(e.latLng);
                    infowindow.setContent("Latitude: " + e.latLng.lat() +
                        "<br>" + "Longitude: " + e.latLng.lng());
                    infowindow.open(map, marker);
                    var s = $('#latitude').val(e.latLng.lat());
                    var ss = $('#longitude').val(e.latLng.lng());
                });
            }
        }


        ///////check All adata table//////

        $("#checkAll").change(function () {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });

        $(".checkAll").change(function () {
            $(".web").prop('checked', $(this).prop("checked"));
        });

        $(".checkAllcart").change(function () {
            $(".cart").prop('checked', $(this).prop("checked"));
        });


        //// btn_delete ////
        $(document).ready(function(){
            $('#btn_delete').click(function(){

                var id = [];
                <?php
                $last_word = Request::segment(2);
                Session::put('route', $last_word);
                ?>
                $('.tableChecked:checked').each(function(i){
                    id[i] = $(this).val();
                });
                if(id.length === 0) //tell you if the array is empty
                {
                    alert("Please Select atleast one checkbox");
                }
                else
                {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:"<?php echo Session::get('route')?>/"+ id,
                        type:'DELETE',
                        data:{id:id},
                        success:function()
                        {
                            for(var i=0; i<id.length; i++)
                            {
                                $('tr#'+id[i]+'').css('background-color', '#ccc');
                                $('tr#'+id[i]+'').fadeOut('slow');
                                $('input:checkbox').removeAttr('checked');
                            }
                        }
                    });
                }


            });
        });

        //// btn_active ////
        $(document).ready(function(){
            $('#btn_active').click(function(){
                var id = [];
                <?php
                $last_word = Request::segment(2);
                Session::put('route', $last_word);
                ?>
                $('.tableChecked:checked').each(function(i){
                    id[i] = $(this).val();
                });
                console.log(id);
                if(id.length === 0) //tell you if the array is empty
                {
                    alert("Please Select atleast one checkbox");
                }
                else
                {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:"<?php echo Session::get('route')?>/up/"+ id,
                        method:'POST',
                        data:{id:id},
                        success:function()
                        {
                            $('input:checkbox').removeAttr('checked');
                            location.reload();
                        }
                    });
                }
            });

            $('#btn_back').click(function(){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"backup",
                    method:'GET',
                    success:function()
                    {

                    }
                });

            });

        });
    </script>
  </body>
</html>
