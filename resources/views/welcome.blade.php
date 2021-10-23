@extends('layouts.app')

@section('content')

<!-- RIGHTPART -->
<div class="rightpart">
  <div class="rightpart_in">

    <!-- HOME -->
    <div id="home" class="tokyo_tm_section active">
      <div class="container">
        <div class="tokyo_tm_home">
          <div class="home_content">
            <div class="avatar">
              <div class="image" data-img-url="{{asset('all/img/1.jpg')}}"
                style="background-image: url('{{asset('all/img/1.jpg')}}');"></div>
            </div>
            <div class="details">
              <h3 class="name">Kamrul<span>Zaman </span></h3>
              <div class="typed">
                <h2 class="ah-headline ">
                  <span class="color">A PROFFESIONAL</span>
                  <span class="ah-words-wrapper">
                    <b class="is-visible">UI/UX DESIGNER</b>
                    <b>Web Developer</b>
                    <b>Web Designer</b>
                  </span>
                </h2>
              </div>
              <p class="job">Creative Photographer based in New York and happy to travel all over Europe to capture
                photos.</p>
              <div class="social">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-github-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /HOME -->

    <!-- ABOUT -->
    <div id="about" class="tokyo_tm_section">
      <div class="container">
        <div class="tokyo_tm_about">
          <div class="about_image">
            <img src="{{asset('all/img/4-2.jpg')}}" alt="" />
            <div class="main" style="background-image: url('{{asset('all/img/1.jpg')}}');"></div>
          </div>
          <div class="description">
            <h3 class="name">Adriano Smith &amp; <span>Photographer</span></h3>
            <div class="description_inner">
              <div class="left">
                <p>Hello, I am a creative photographer based in New York and happy to travel all over Europe to capture
                  your big day in candid and authentic photos. I will create a lasting memory of the people.</p>
                <div class="tokyo_tm_button">
                  <a href="#">Learn More</a>
                  <a href="#">CV </a>
                </div>

              </div>
              <div class="right">
                <ul>
                  <li>
                    <p><span>Birthday:</span>01.07.1990</p>
                  </li>
                  <li>
                    <p><span>Age:</span>31</p>
                  </li>
                  <li>
                    <p><span>Address:</span>Ave 11, New York, USA</p>
                  </li>
                  <li>
                    <p><span>Email:</span><a href=""><span class="__cf_email__">Kamulzamantonmoy@gmail.com</span></a>
                    </p>
                  </li>
                  <li>
                    <p><span>Phone:</span><a href="tel:+770221770505">+77 022 177 05 05</a></p>
                  </li>
                  <li>
                    <p><span>Study:</span>Univercity of Texas</p>
                  </li>
                  <li>
                    <p><span>Freelance:</span>Available</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /ABOUT -->

    <div class="tokyo_tm_portfolio_titles"></div>
    <!-- PORTFOLIO -->
    <div id="portfolio" class="tokyo_tm_section">
      <div class="container">
        <div class="tokyo_tm_portfolio">
          <div class="tokyo_tm_title">
            <div class="title_flex">
              <div class="left">
                <span>Portfolio</span>
                <h3>Creative Portfolio</h3>
              </div>
              <div class="portfolio_filter">

                <ul class="filter_menu">
                  <li data-filter="all" class="active">All</li>
                  <li data-filter="1">Web Design</li>
                  <li data-filter="2">Web Development</li>
                  <li data-filter="3">Digital Marketing</li>
                </ul>

              </div>
            </div>
          </div>
          <div class="list_wrapper">
            <div class="filtr-container">
              <div class="portfolio_list  filtr-item" data-category="1">
                <img src="{{asset('all/img/p1.jpg')}}" class="img-fluid" alt="">
                <div class="overly">
                  <div class="overly_content">
                    <h4>Web Design</h4>
                    <p>You will find all of Project on Gitub.</p>
                    <a href="{{asset('all/img/p1.jpg')}}" class="venobox" data-gall="gallery01"><i
                        class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="portfolio_list  filtr-item" data-category="1">
                <img src="{{asset('all/img/p2.jpg')}}" class="img-fluid" alt="">
                <div class="overly">
                  <div class="overly_content">
                    <h4>Web Design</h4>
                    <p>You will find all of Project on Gitub.</p>
                    <a href="{{asset('all/img/p2.jpg')}}" class="venobox" data-vbtype="inline"
                      href="#inline-content"></a><i class="fas fa-plus"></i></a>

                  </div>
                </div>
              </div>

              <div id="inline-content" style="display:none;">
                <h1>Hello world!</h1>
              </div>


              <div class="portfolio_list filtr-item " data-category="2">
                <img src="{{asset('all/img/p3.jpg')}}" class="img-fluid" alt="">
                <div class="overly">
                  <div class="overly_content">
                    <h4>Web Development</h4>
                    <p>You will find all of Project on Gitub.</p>
                    <a href="{{asset('all/img/p3.jpg')}}" class="venobox" data-gall="gallery01"><i
                        class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="portfolio_list filtr-item" data-category="2">
                <img src="{{asset('all/img/p1.jpg')}}" class="img-fluid" alt="">
                <div class="overly">
                  <div class="overly_content">
                    <h4>Web Development</h4>
                    <p>You will find all of Project on Gitub.</p>
                    <a href="{{asset('all/img/p1.jpg')}}" class="venobox" data-gall="gallery01"><i
                        class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>

              <div class="portfolio_list filtr-item" data-category="3">
                <img src="{{asset('all/img/p4.jpg')}}" class="img-fluid" alt="">
                <div class="overly">
                  <div class="overly_content">
                    <h4>Digital Marketing</h4>
                    <p>You will find all of Project on Gitub.</p>
                    <a href="{{asset('all/img/p1.jpg')}}" class="venobox" data-gall="gallery01"><i
                        class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="portfolio_list filtr-item" data-category="3">
                <img src="{{asset('all/img/p3.jpg')}}" class="img-fluid" alt="">
                <div class="overly">
                  <div class="overly_content">
                    <h4>Digital Marketing</h4>
                    <p>You will find all of Project on Gitub.</p>
                    <a href="{{asset('all/img/p3.jpg')}}" class="venobox" data-gall="gallery01"><i
                        class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /PORTFOLIO -->
    <!-- /PORTFOLIO -->

    <!-- NEWS -->
    <!-- <div id="news" class="tokyo_tm_section">
            <div class="container">
              <div class="tokyo_tm_news">
                <div class="tokyo_tm_title">
                  <div class="title_flex">
                    <div class="left">
                      <span>News</span>
                      <h3>Latest News</h3>
                    </div>
                  </div>
                </div>
                <ul>
                  <li>
                    <div class="list_inner">
                      <div class="image">
                        <img src="{{asset('all/img/4-3.jpg')}}" alt="" />
                        <div class="main" data-img-url="{{asset('all/img/news/1.jpg')}}"></div>
                        <a class="tokyo_tm_full_link" href="#"></a>
                      </div>
                      <div class="details">
                        <div class="extra">
                          <div class="short">
                            <p class="date">By <a href="#">Alex Watson</a> <span>05 April 2021</span></p>
                          </div>
                          <div class="my_like">
                            <a href="#"><img class="svg" src="{{asset('all/img/svg/like.svg')}}" alt="" /><span>35</span></a>
                          </div>
                        </div>
                        <h3 class="title"><a href="#">Format releases a new tool that enables direct video hosting</a></h3>
                        <div class="tokyo_tm_read_more">
                          <a href="#"><span>Read More</span></a>
                        </div>
                      </div>
                      <div class="main_content">
                        <div class="descriptions">
                          <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                          <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                          <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                          <div class="quotebox">
                            <div class="icon">
                              <img class="svg" src="{{asset('all/img/svg/quote.svg')}}" alt="" />
                            </div>
                            <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                          </div>
                          <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                          <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                        </div>
                        <div class="news_share">
                          <span>Share:</span>
                          <ul>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/facebook.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/twitter.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/instagram.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/dribbble.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/tik-tok.svg')}}"  alt="" /></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="list_inner">
                      <div class="image">
                        <img src="{{asset('all/img/thumbs/4-3.jpg')}}" alt="" />
                        <div class="main" data-img-url="{{asset('all/img/news/2.jpg')}}"></div>
                        <a class="tokyo_tm_full_link" href="#"></a>
                      </div>
                      <div class="details">
                        <div class="extra">
                          <div class="short">
                            <p class="date">By <a href="#">Brook Kennedy</a> <span>22 March 2021</span></p>
                          </div>
                          <div class="my_like">
                            <a href="#"><img class="svg" src="{{asset('all/img/svg/like.svg')}}" alt="" /><span>47</span></a>
                          </div>
                        </div>
                        <h3 class="title"><a href="#">Sony announced two new full frame cameras with zero fanfare</a></h3>
                        <div class="tokyo_tm_read_more">
                          <a href="#"><span>Read More</span></a>
                        </div>
                      </div>
                      <div class="main_content">
                        <div class="descriptions">
                          <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                          <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                          <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                          <div class="quotebox">
                            <div class="icon">
                              <img class="svg" src="{{asset('all/img/svg/quote.svg')}}" alt="" />
                            </div>
                            <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                          </div>
                          <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                          <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                        </div>
                        <div class="news_share">
                          <span>Share:</span>
                          <ul>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/facebook.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/twitter.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/instagram.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/dribbble.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/tik-tok.svg')}}"  alt="" /></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="list_inner">
                      <div class="image">
                        <img src="{{asset('all/img/thumbs/4-3.jpg')}}" alt="" />
                        <div class="main" data-img-url="{{asset('all/img/news/3.jpg')}}"></div>
                        <a class="tokyo_tm_full_link" href="#"></a>
                      </div>
                      <div class="details">
                        <div class="extra">
                          <div class="short">
                            <p class="date">By <a href="#">Paola Atkins</a> <span>15 Feb 2021</span></p>
                          </div>
                          <div class="my_like">
                            <a href="#"><img class="svg" src="{{asset('all/img/svg/like.svg')}}" alt="" /><span>22</span></a>
                          </div>
                        </div>
                        <h3 class="title"><a href="#">Why every photographer should shoot film, even in 2021</a></h3>
                        <div class="tokyo_tm_read_more">
                          <a href="#"><span>Read More</span></a>
                        </div>
                      </div>
                      <div class="main_content">
                        <div class="descriptions">
                          <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                          <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                          <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                          <div class="quotebox">
                            <div class="icon">
                              <img class="svg" src="{{asset('all/img/svg/quote.svg')}}" alt="" />
                            </div>
                            <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                          </div>
                          <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                          <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                        </div>
                        <div class="news_share">
                          <span>Share:</span>
                          <ul>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/facebook.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/twitter.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/instagram.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/dribbble.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/tik-tok.svg')}}"  alt="" /></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="list_inner">
                      <div class="image">
                        <img src="{{asset('all/img/thumbs/4-3.jpg')}}" alt="" />
                        <div class="main" data-img-url="{{asset('all/img/news/4.jpg')}}"></div>
                        <a class="tokyo_tm_full_link" href="#"></a>
                      </div>
                      <div class="details">
                        <div class="extra">
                          <div class="short">
                            <p class="date">By <a href="#">Kevin Stone</a> <span>22 Jan 2021</span></p>
                          </div>
                          <div class="my_like">
                            <a href="#"><img class="svg" src="{{asset('all/img/svg/like.svg')}}" alt="" /><span>16</span></a>
                          </div>
                        </div>
                        <h3 class="title"><a href="#">Stay creative in lockdown with these fun photo projects</a></h3>
                        <div class="tokyo_tm_read_more">
                          <a href="#"><span>Read More</span></a>
                        </div>
                      </div>
                      <div class="main_content">
                        <div class="descriptions">
                          <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                          <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                          <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                          <div class="quotebox">
                            <div class="icon">
                              <img class="svg" src="{{asset('all/img/svg/quote.svg')}}" alt="" />
                            </div>
                            <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                          </div>
                          <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                          <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                        </div>
                        <div class="news_share">
                          <span>Share:</span>
                          <ul>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/facebook.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/twitter.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/instagram.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/dribbble.svg')}}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('all/img/svg/social/tik-tok.svg')}}"  alt="" /></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>	
          </div> -->
    <!-- /NEWS -->

    <!-- qustion  -->
    <div id="qustion" class="tokyo_tm_section">
      <div class="container">
        <div class="tokyo_tm_news">
          <div class="tokyo_tm_title">
            <div class="title_flex">
              <div class="left">
                <span>Question</span>
                <h3>All Question</h3>
                <p>If your have question then go to contact and message me.</p>
              </div>
            </div>
          </div>
          <div class="collaspe">
            <div id="accordion">
              <div class="cards">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne">
                      What are color codes?
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="cards">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo">
                      What is material design?
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- qustion  -->
    <!-- CONTACT -->
    <div id="contact" class="tokyo_tm_section">
      <div class="container">
        <div class="tokyo_tm_contact">
          <div class="tokyo_tm_title">
            <div class="title_flex">
              <div class="left">
                <span>Contact</span>
                <h3>Get in Touch</h3>

              </div>
            </div>
          </div>
          <div class="map_wrap">
            <div class="map" id="ieatmaps">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29528.874276731214!2d91.76564441141338!3d22.311706310317916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdec55dd23931%3A0xb4f7439c6623a22e!2sHalishahar%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1632166854553!5m2!1sen!2sbd"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div id="ajax-alert" class="alert" style="display:none">

          </div>
          <div class="fields">
            <div class="first">
              <ul>
                <li>
                  <input id="name" class="name" name="name" type="text" placeholder="Name">
                </li>
                <li>
                  <input id="email" class="email" name="email" type="text" placeholder="Email">
                </li>
              </ul>
            </div>
            <div class="last">
              <textarea id="comment" class="comment" name="comment" placeholder="Message"></textarea>
            </div>
            <div class="tokyo_tm_button" data-position="left">
              <button type="button" class="save_data">
                Send Message
              </button>
            </div>

            <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->


          </div>
        </div>
      </div>
    </div>
    <!-- /CONTACT -->

  </div>
</div>
<!-- /RIGHTPART -->
@endsection