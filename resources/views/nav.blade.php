<!DOCTYPE html>

<html>
<head runat="server">
    <title>Health Monitoring System</title>
    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('css/Dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet"  href="{{ asset('css/nav.css')}}">
    <link href="{{ asset('Content/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="{{ asset('assets/Scripts/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/Scripts/jquery-3.0.0.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/analytics.css')}}">
    <link rel="stylesheet" href="{{ asset('css/profile.css')}}">
<!--===============================================================================================-->
</head>
<body>
    <div id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <ul class="navbar-nav navbar-right">
                  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="bx bx-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                      <div class="dropdown-header">Notifications
                        <div class="float-right">
                          <a href="#">Mark All As Read</a>
                        </div>
                      </div>
                      <div class="dropdown-list-content dropdown-list-icons">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                          <div class="dropdown-item-icon bg-primary text-white">
                            <i class="bx bx-code"></i>
                          </div>
                          <div class="dropdown-item-desc">
                            Fall detected!
                            <div class="time text-primary">2 Min Ago</div>
                          </div>
                        </a>
                        <a href="#" class="dropdown-item">
                          <div class="dropdown-item-icon bg-info text-white">
                            <i class="bx bx-user"></i>
                          </div>
                          <div class="dropdown-item-desc">
                            <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                            <div class="time">10 Hours Ago</div>
                          </div>
                        </a>
                        <a href="#" class="dropdown-item">
                          <div class="dropdown-item-icon bg-success text-white">
                            <i class="bx bx-bell"></i>
                          </div>
                          <div class="dropdown-item-desc">
                            Fall detected!
                            <div class="time">Yesterday</div>
                          </div>
                        </a>
                      </div>
                      <div class="dropdown-footer text-center">
                        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset('images/undraw_profile.svg')}}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="dropdown-title"></div>
                      <a href="#" class="dropdown-item has-icon">
                        <i class="bx bx-user"></i> Profile
                      </a>
                      <a href="#" class="dropdown-item has-icon">
                        <i class="bx bx-slider-alt"></i> Settings
                      </a>
                      <div class="dropdown-divider"></div>
                      
                      <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="bx bx-exit"></i>{{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </nav>
        </header>
    
        <div class="l-navbar" id="nav-bar">
            <nav class="nav" style="text-decoration:none">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-pulse nav__logo-icon'></i>
                        <span class="nav__logo-name">Health Monitoring</span>
                    </a>
    
                    <div class="nav__list">
                        <ul style="list-style-type: none;padding:0;">
                            <li><a href="{{url('home')}}" class="nav__link">
                                <i class='bx bx-grid-alt nav__icon'></i>
                                <span class="nav__name">Dashboard</span>
                            </a>
                            </li>

                            <li><a href="{{url('ecgChart')}}" class="nav__link">
                                <i class='bx bx-line-chart-down nav__icon'></i>
                                <span class="nav__name">Chart</span>
                            </a></li>

                            <li><a href="{{url('analytics')}}" class="nav__link">
                                <i class='bx bx-pie-chart-alt-2 nav__icon'></i>
                                <span class="nav__name">Analytics</span>
                            </a></li>
                            <li><a href="{{url('profile')}}" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Profile</span>
                            </a></li>
                            <li><a href="#" class="nav__link">
                                <i class='bx bx-slider-alt nav__icon'></i>
                                <span class="nav__name">Settings</span>
                            </a></li>
                            <li><a href="#" class="nav__link">
                                <i class='bx bx-exit nav__icon'></i>
                                <span class="nav__name">Sign Out</span>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>       
    
        <!--===== MAIN JS =====-->
        <script src="{{ asset('assets/js/main.js')}}"></script>
        <script>
            $(document).ready(function () {
                var url = window.location;
                $('#nav-bar .nav nav__list').find('.active').removeClass('active');
                $('#nav-bar .nav .nav__list a').each(function () {
                    if (this.href == url) {
                        $(this).parent().addClass('active');
                    }
                });
            });
        </script>
    </div>

    <!-- General JS Scripts -->
	  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script src="http://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
  <script src="http://www.chartjs.org/samples/latest/utils.js"></script>
</body>
</html>