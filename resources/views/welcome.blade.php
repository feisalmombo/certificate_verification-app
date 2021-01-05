<!DOCTYPE html>
<html lang="en">
<head>
    <title>OCV</title>
    <!-- custom-theme -->
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- stylesheet -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" /> <!-- gallery css -->
        <!-- //stylesheet -->
        <!-- online fonts -->
        <link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <!-- //online fonts -->
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" type="text/css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
        <script src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>     
        <link rel="stylesheet" type="text/css" href="css/custom.css" /> 
        <!-- for smooth scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- //for smooth scrolling -->
    </head>
    <body>
       <div class="flex-center position-ref full-height">
        <div class="agileits_main">
            <!-- header -->
            <div class="container">
                <div class="w3_agile_logo">
                    <h1><a href="/"><i class="agileits-logo fa fa-graduation-cap" aria-hidden="true"></i>OCV</a></h1>
                </div>
                <div class="agileits_w3layouts_nav">
                    <div id="toggle_m_nav">
                        <div id="m_nav_menu" class="m_nav">
                            <div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
                            <div class="m_nav_ham" id="m_ham_2"></div>
                            <div class="m_nav_ham" id="m_ham_3"></div>
                        </div>
                    </div>
                    <div id="m_nav_container" class="m_nav wthree_bg">
                        <nav class="menu menu--sebastian">
                            <ul id="m_nav_list" class="m_nav menu__list">
                                <li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="/" class="menu__link"><i class="menu-icon fa fa-home" aria-hidden="true"></i> Home </a></li>
                                <li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="#about" class="menu__link"><i class="menu-icon fa fa-info-circle" aria-hidden="true"></i>About Us </a> </li>
                                <li class="m_nav_item menu__item" id="moble_nav_item_3"> <a href="#services" class="menu__link"><i class="menu-icon fa fa-cog" aria-hidden="true"></i>Services</a> </li>
                                <li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="#team" class="menu__link"><i class="menu-icon fa fa-users" aria-hidden="true"></i>Team</a> </li>
                                <li class="m_nav_item menu__item" id="moble_nav_item_5"> <a href="#grid-gallery" class="menu__link"><i class="menu-icon fa fa-file-image-o" aria-hidden="true"></i>lab</a> </li>

                                @if (Auth::guest())
                                <li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="" class="menu__link" data-toggle="modal" data-target="#myModal1"><i class="menu-icon fa fa-sign-in" aria-hidden="true" ></i> Login </a> </li>

                                @else
                                <li class="dropdown m_nav_item menu__item ">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="menu-icon fa fa-sign-out" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li class="m_nav_item menu__item">
                                            <a href="{{ route('logout') }}" class="menu__link" 
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>   
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- menu -->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- //menu -->
        <!--// header -->
        <!-- banner -->
        <div class="w3_banner">
            <div class="container">
                <div class="slider">
                    <div class="callbacks_container">
                     <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>    
                            <div class="banner_text_w3layouts">
                                <h3>University certificate Verification</h3>
                                
                            </div>
                        </li>
                        <li>    
                            <div class="banner_text_w3layouts">
                                <h3>Tellus nec enim tempus Nam </h3>
                                <p>Nam tellus nec enim tempus</p>
                            </div>
                        </li>
                        <li>                            
                            <div class="banner_text_w3layouts">
                                <h3>Nam tellus nec enim tempus </h3>
                                <p>Nam tellus nec enim tempus</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <script src="js/responsiveslides.js"></script>
                <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: false,
                    pager:true,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                  },
                  after: function () {
                      $('.events').append("<li>after event fired.</li>");
                  }
              });

              });
          </script>
      </div>
  </div>   
</div>  
</div>
<div class="modal about-modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                <center><h4 class="modal-title">Login</h4></center>

            </div> 
            <div class="modal-body">

                <div class="login">


                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>

                        </div>  
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- footer-->  
<div class="agileits_w3layouts-footer">
    <div class="copy-right text-center">
        <span class="agileits-copy fa fa-graduation-cap" aria-hidden="true"></span>
        <p>&copy; 2017 HighHub. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>  
</div>  
<!-- footer-->  
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- here starts scrolling icon -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- /ends-smoth-scrolling -->
<!-- //here ends scrolling icon -->
<!--start-date-piker-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>

<!-- here starts scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                    */

                    $().UItoTop({ easingType: 'easeOutQuart' });

                });
            </script>
        </div>
    </body>
    </html>