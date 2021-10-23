<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('all/css/venobox.css')}}">
  <!-- <link rel="stylesheet" href="css/plugins.css')}}"> -->
  <link rel="stylesheet" href="{{asset('all/css/style.css')}}">

  <title>Hello, world!</title>
</head>

<body>

  <!-- Mouse Hover  -->
  <!-- <div class="frame">
      <div class="dot"></div>
    </div> -->
  <!-- Mouse Hover  -->


  <div class="tokyo_tm_all_wrap">
    <!-- If you want disable magic cursor add value "hide" -->

    <!-- MAGIC CURSOR VALUES: "", hide -->
    <!-- COLOR VALUES: blue, green, brown, pink, orange, black, white, purple, sky, cadetBlue, crimson, olive, red -->


    <!-- MODALBOX NEWS -->
    <div class="tokyo_tm_modalbox">
      <div class="box_inner">
        <div class="close">
          <a href="#"><img class="svg" src="{{asset('all/img/cancel.svg')}}" alt="" /></a>
        </div>
        <div class="description_wrap"></div>
      </div>
    </div>
    <!-- /MODALBOX NEWS -->

    <!-- MODALBOX ABOUT -->
    <div class="tokyo_tm_modalbox_about">
      <div class="box_inner">
        <div class="close">
          <a href="#"><img class="svg" src="{{asset('all/img/cancel.svg')}}" alt="" /></a>
        </div>
        <div class="description_wrap">
          <div class="my_box">
            <div class="left">
              <div class="about_title">
                <h3> Skills</h3>
              </div>
              <div class="tokyo_progress">
                <div class="progress_inner" data-value="95">
                  <span><span class="label">Wedding Photography</span><span class="number">95%</span></span>
                  <div class="background">
                    <div class="bar">
                      <div class="bar_in"></div>
                    </div>
                  </div>
                </div>
                <div class="progress_inner" data-value="80">
                  <span><span class="label">Lifestyle Photography</span><span class="number">80%</span></span>
                  <div class="background">
                    <div class="bar">
                      <div class="bar_in"></div>
                    </div>
                  </div>
                </div>
                <div class="progress_inner" data-value="90">
                  <span><span class="label">Family Photography</span><span class="number">90%</span></span>
                  <div class="background">
                    <div class="bar">
                      <div class="bar_in"></div>
                    </div>
                  </div>
                </div>
                <div class="progress_inner" data-value="50">
                  <span><span class="label">Family Photography</span><span class="number">90%</span></span>
                  <div class="background">
                    <div class="bar">
                      <div class="bar_in"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="right">
              <div class="about_title">
                <h3>Language Skills</h3>
              </div>
              <div class="tokyo_progress">
                <div class="progress_inner" data-value="95">
                  <span><span class="label">English</span><span class="number">95%</span></span>
                  <div class="background">
                    <div class="bar">
                      <div class="bar_in"></div>
                    </div>
                  </div>
                </div>
                <div class="progress_inner" data-value="90">
                  <span><span class="label">Japanese</span><span class="number">90%</span></span>
                  <div class="background">
                    <div class="bar">
                      <div class="bar_in"></div>
                    </div>
                  </div>
                </div>
                <div class="progress_inner" data-value="85">
                  <span><span class="label">Arabian</span><span class="number">85%</span></span>
                  <div class="background">
                    <div class="bar">
                      <div class="bar_in"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="counter">
            <div class="about_title">
              <h3>Fun Facts</h3>
            </div>
            <ul>
              <li>
                <div class="list_inner">
                  <h3><span class="tokyo_tm_counter" data-from="0" data-to="777" data-speed="1500">777</span></h3>
                  <span class="name">Projects Completed</span>
                </div>
              </li>
              <li>
                <div class="list_inner">
                  <h3><span class="tokyo_tm_counter" data-from="0" data-to="500" data-speed="1500">500</span>+</h3>
                  <span class="name">Happy Clients</span>
                </div>
              </li>
              <li>
                <div class="list_inner">
                  <h3><span class="tokyo_tm_counter" data-from="0" data-to="100" data-speed="1500">100</span>K+</h3>
                  <span class="name">Lines of Code</span>
                </div>
              </li>
            </ul>
          </div>
          <div>


          </div>
          <!-- <div class="partners">
              <div class="about_title">
                <h3>Our Partners</h3>
              </div>
              <ul class="owl-carousel">
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/1.png')}}" alt="" /></a></li>
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/2.png')}}" alt="" /></a></li>
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/3.png')}}" alt="" /></a></li>
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/4.png')}}" alt="" /></a></li>
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/5.png')}}" alt="" /></a></li>
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/6.png')}}" alt="" /></a></li>
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/7.png')}}" alt="" /></a></li>
                <li class="item"><a href="#"><img src="{{asset('all/img/partners/8.png')}}" alt="" /></a></li>
              </ul>
            </div> -->
        </div>
      </div>
    </div>
    <!-- /MODALBOX ABOUT -->

    <!-- MOBILE MENU -->
    <div class="tokyo_tm_mobile_menu">
      <div class="menu_inner">
        <div class="logo">
          <img src="{{asset('all/img/dark.png')}}" alt="" />
        </div>
        <div class="menu">
          <ul>
            <li><a href="#home"><img class="svg" src="{{asset('all/img/home-run.svg')}}" alt="" /></a></li>
            <li><a href="#about"><img class="svg" src="{{asset('all/img/avatar.svg')}}" alt="" /></a></li>
            <li><a href="#portfolio"><img class="svg" src="{{asset('all/img/briefcase.svg')}}" alt="" /></a></li>
            <li><a href="#qustion"><img class="svg" src="{{asset('all/img/paper.svg')}}" alt="" /></a></li>
            <li><a href="#contact"><img class="svg" src="{{asset('all/img/mail.svg')}}" alt="" /></a></li>
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
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#qustion">Question</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="middle">

              <form action="{{route('susStore')}}" method="POST" id="suscribe">
                <input type="email" value="" name="email" class="email-field" id="email-field" placeholder="Suscribe">
                <input type="submit" value="Subscribe" name="subscribe" id="subscribe-button" class="">
              </form>
              <div id="ajax-alert" class="alert" style="display:none">
              </div>
            </div>
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
  <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

  <script src="{{asset('all/js/venobox.min.js')}}"></script>
  <script src="{{asset('all/js/script.js')}}"></script>





</body>

</html>