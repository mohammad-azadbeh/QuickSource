<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner">
        <div class="page-header-inner">
            <div class="navbar-header">
                <a href="{{ url(config('quickadmin.homeRoute')) }}" class="navbar-brand">
                    {{ trans('quickadmin::admin.partials-topbar-title') }}
                </a>
            </div>
            <a href="javascript:;"
               class="menu-toggler responsive-toggler"
               data-toggle="collapse"
               data-target=".navbar-collapse">
            </a>

            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user">
                        <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle"href="#">
                            <span class="username username-hide-on-mobile">EN </span>
                            <img src="{{ url('quickadmin/images') }}/flag/48/gb.png" class="img-circle" alt=""/>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i> My Profile </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class="fa fa-sign-out"></i> {{ trans('quickadmin::admin.partials-sidebar-logout') }} </a>
                            </li>
                        </ul>
                    </li>

                    <li id="header_task_bar" class="dropdown dropdown-extended dropdown-tasks">
                        <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-calendar"></i>
                            <span class="badge badge-default">3 </span>
                        </a>
                        <ul class="dropdown-menu extended tasks">
                            <li class="external">
                                <h3>You have <span class="bold">12 pending</span> tasks</h3>
                                <a href="page_todo.html">view all</a>
                            </li>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul data-handle-color="#637283" style="height: 275px; overflow: hidden; width: auto;" class="dropdown-menu-list scroller" data-initialized="1">
                                        <li>
                                            <a href="javascript:;">
									<span class="task">
									<span class="desc">New release v1.2 </span>
									<span class="percent">30%</span>
									</span>
                                                <span class="progress">
									<span aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar progress-bar-success" style="width: 40%;"><span class="sr-only">40% Complete</span></span>
									</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
									<span class="task">
									<span class="desc">Application deployment</span>
									<span class="percent">65%</span>
									</span>
                                                <span class="progress">
									<span aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-danger" style="width: 65%;"><span class="sr-only">65% Complete</span></span>
									</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile app release</span>
									<span class="percent">98%</span>
									</span>
                                                <span class="progress">
									<span aria-valuemax="100" aria-valuemin="0" aria-valuenow="98" class="progress-bar progress-bar-success" style="width: 98%;"><span class="sr-only">98% Complete</span></span>
									</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
									<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">10%</span>
									</span>
                                                <span class="progress">
									<span aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar progress-bar-warning" style="width: 10%;"><span class="sr-only">10% Complete</span></span>
									</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
									<span class="task">
									<span class="desc">Web server upgrade</span>
									<span class="percent">58%</span>
									</span>
                                                <span class="progress">
									<span aria-valuemax="100" aria-valuemin="0" aria-valuenow="58" class="progress-bar progress-bar-info" style="width: 58%;"><span class="sr-only">58% Complete</span></span>
									</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">85%</span>
									</span>
                                                <span class="progress">
									<span aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress-bar progress-bar-success" style="width: 85%;"><span class="sr-only">85% Complete</span></span>
									</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
									<span class="task">
									<span class="desc">New UI release</span>
									<span class="percent">38%</span>
									</span>
                                                <span class="progress progress-striped">
									<span aria-valuemax="100" aria-valuemin="0" aria-valuenow="18" class="progress-bar progress-bar-important" style="width: 38%;"><span class="sr-only">38% Complete</span></span>
									</span>
                                            </a>
                                        </li>
                                    </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; left: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; left: 1px;"></div></div>
                            </li>
                        </ul>
                    </li>

                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle"href="#">
                            <img src="{{ url('quickadmin/images') }}/boy.png" class="img-circle" alt=""/>
                            {{--<span class="glyphicon glyphicon-user"></span>--}}
                            <span class="username username-hide-on-mobile">Nick </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i> My Profile </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class="fa fa-sign-out"></i> {{ trans('quickadmin::admin.partials-sidebar-logout') }} </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a class="dropdown-toggle" href="{{ url('logout') }}">
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
        </div>
    </div>
</div>