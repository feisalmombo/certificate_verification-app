
<div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <!--logo -->
                <div class="logo">
                    <a href="/">
                        <h1>NOVUS</h1>
                        <span>AdminPanel</span>
                    </a>
                </div>
                <!--//logo-->
                <!--search-box-->
                <!--//end-search-box-->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">
               
                <!--notification menu end -->
                <div class="profile_details">       
                    <ul>
                    @if (Auth::guest())
                                <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="{{route('login')}}" class="menu__link" data-toggle="modal" ><i class="menu-icon fa fa-sign-in" aria-hidden="true" ></i> Login </a> </li>

                                @else
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">   
                                    <span class="prfil-img"><img src="images/a.png" alt=""> </span> 
                                    <div class="user-name">
                                        <p>
                                        <span>{{ Auth::user()->name }}</span></p>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>    
                                </div>  
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                          
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                     <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
                                        <li class="m_nav_item menu__item">
                                            <a href="{{ route('logout') }}" class="menu__link" 
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="menu-icon fa fa-sign-out" aria-hidden="true" ></i> logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                               
                             
                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>               
            </div>
            <div class="clearfix"> </div>   
        </div>