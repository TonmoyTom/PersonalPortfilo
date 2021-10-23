<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('all/css/jquery.animatedheadline.css')}}">
  <link rel="stylesheet" href="{{asset('all/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('all/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  @livewireStyles()
  <link rel="stylesheet" href="{{asset('all/css/venobox.css')}}">
  <link rel="stylesheet" href="{{asset('all/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('all/css/style.css')}}">

  <title>Hello, world!</title>
</head>

<body>

  <!-- Mouse Hover  -->
  <div class="frame">
    <div class="dot"></div>
  </div>
  <!-- Mouse Hover  -->


  <div class="tokyo_tm_all_wrap">
    <!-- If you want disable magic cursor add value "hide" -->

    <!-- MAGIC CURSOR VALUES: "", hide -->
    <!-- COLOR VALUES: blue, green, brown, pink, orange, black, white, purple, sky, cadetBlue, crimson, olive, red -->





    <!-- MOBILE MENU -->
    <div class="tokyo_tm_mobile_menu">
      <div class="menu_inner">
        <div class="logo">
          <img src="img/dark.png" alt="" />
        </div>
        <div class="menu">
          <ul>
            <li><a href="#home"><img class="svg" src="img/home-run.svg" alt="" /></a></li>
            <li><a href="#about"><img class="svg" src="img/avatar.svg" alt="" /></a></li>

          </ul>
        </div>
      </div>
    </div>
    <!-- /MOBILE MENU -->

    <!-- LEFTPART -->
    <div class="leftpart">
      <div class="leftpart_inner">
        <div class="logo">
          <a href="#"><img src="{{asset('all/img/dark.png')}}" alt="" /></a>
        </div>
        <div class="menu">
          <ul>

            @if(!auth()->check())
            <li class="{{ (request()->is('login')) ? 'active' : '' }}"><a href="#login">Login</a></li>
            <li class="{{ (request()->is('#register')) ? 'active' : '' }}"><a href="#register">Register</a></li>
            <li><a href="#forget">Forget Password</a></li>
            @else

            <li class={{ (request()->is('home')) ? 'active' : '' }}><a href="{{route('home')}}">DashBoard</a></li>
            <li class={{ (request()->is('homes')) ? 'active' : '' }}><a href="{{route('homes')}}">Home</a></li>
            <li class={{ (request()->is('aboutus')) ? 'active' : '' }}><a href="{{route('about')}}">About Us</a></li>
            <li class={{ (request()->is('conatct')) ? 'active' : '' }}><a href="{{route('contact')}}">Contact</a></li>

            <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
            @endif
          </ul>
        </div>


        <div class="copyright">
          <p>&copy; 2021 Tokyo<br>Created by <a href="" target="_blank">Tonmoy</a></p>
        </div>
      </div>
    </div>
    <!-- /LEFTPART -->
    <!-- /RIGHTPART -->
    @yield('content')
    <!-- /RIGHTPART -->

    <!-- CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /CURSOR -->

  </div>
  <!-- / WRAPPER ALL -->



  <livewire:scripts />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{asset('all/js/counter.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-animated-headlines@1.0.0/src/js/jquery.animatedheadline.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  <script src="{{asset('all/js/jquery.filterizr.min.js')}}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"
    integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="{{asset('all/js/venobox.min.js')}}"></script>
  <script src="{{asset('all/js/script.js')}}"></script>





</body>

</html>