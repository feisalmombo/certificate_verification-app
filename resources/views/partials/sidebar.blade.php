     <div class="sidebar" role="navigation">
            <div class="navbar-collapse">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/home" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                        </li>
                        @if (Auth::user()->occupation== 1)
                        
                        <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users nav_icon"></i>Manage Users <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="/view_users" style="color:black;" >view All Users</a></li>
                        <li><a href="admin/create" style="color:black;" >Create Users</a></li>
                        <li><a href="/roles" style="color:black;" >Asign Roles</a></li>
                        </ul>
                        </li>
                        <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-graduation-cap "></i>Universities <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="/view_universities" style="color:black;" >view registered Universities</a></li>
                        <li><a href="/view_faculties" style="color:black;" >view faculties</a></li>
                        <li><a href="/view_courses" style="color:black;" >view courses</a></li>
                        </ul>
                        </li>
                        <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-book nav_icon"></i>Student Records <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="/view_records" style="color:black;" >view records</a></li>
                        <li><a href="/view_results" style="color:black;" >view results</a></li>
                        </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-th-large nav_icon"></i>Widgets <span class="nav-badge-btm">08</span></a>
                        </li>
                        @elseif (Auth::user()->occupation== 2)
                        <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-book nav_icon"></i>Manage Student Records <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="/view_records" style="color:black;" >view records</a></li>
                        <li><a href="/view_results" style="color:black;" >view results</a></li>
                        <li><a href="/upload_results" style="color:black;" >Upload Course Results </a></li>
                        <li><a href="/view_results" style="color:black;" >Upload Student Records</a></li>
                        </ul>
                        </li>
                        @else
                        <li>
                            <a href="charts.html" class="chart-nav"><i class="fa fa-bar-chart nav_icon"></i>Charts <span class="nav-badge-btm pull-right">new</span></a>
                        </li>
                        @endif
                        
                        
                      
                    </ul>
                    <!-- //sidebar-collapse -->
                </nav>
            </div>
        </div>