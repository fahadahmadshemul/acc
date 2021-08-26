<!DOCTYPE html>
<html>
  <head>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Adamjee Cantonment College &#8211; Education | Discipline | Morality</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('/')}}public/Frontend/images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/msnb_style.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('/')}}public/Frontend/css/responsive.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="assets/vendor/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/vendor/sweetalert2/dist/sweetalert2.min.css">

    <!---fullcalendar--------->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css' rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css' rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.css' rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.css' rel='stylesheet' />
    
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #calendar{
        width: 80%;
        margin-left: 100px;
        box-shadow: 0px 0px 10px #000;
        padding:15px; 
        background: #fff;
    }
    #calendar-container {
        position: fixed;
        top: 0%;
        text-align: center;
        left: 10%;
        right: 10%;
        bottom: 20%;
    }
        table {
            border: 1px solid #dee2e6;
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            background-color: transparent;
            text-align: center;
        }
        table tr td{
            border: 1px solid #dee2e6;
            padding: 2px;
        }
        table tr th{
            border: 1px solid #dee2e6;
            padding: 2px;
        }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script
      // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      function initMap() {
        const myLatLng = { lat: 23.7941174, lng: 90.3933055 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: myLatLng,
        });
        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello World!",
        });
        
      }

    </script> 
  </head>
  <body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-flex justify-content-start align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li class="quick-call"><a href="tel:88028872446"><img src="{{asset('/')}}public/Frontend/images/all-icon/call.png" alt="icon"><span>880-2-8872446</span></a></li>
                                <li class="quick-email"><a href="mailto:info@acc.edu.bd"><img src="{{asset('/')}}public/Frontend/images/all-icon/email.png" alt="icon"><span>info@acc.edu.bd</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-10 pb-10">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo text-center">
                            <a href="{{route('home')}}">
                                <img src="{{asset('/')}}public/Frontend/images/logo_1.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 px-0">
                        <div class="site-title float-left d-none d-md-block">
                            <h2><a href="{{route('home')}}">Adamjee Cantonment College</a></h2>
                            <p class="site-description">Education | Discipline | Morality</p>
                        </div>
                        <!-- <div class="support-button float-left d-none d-md-block">
                            <div class="support float-left">
                            </div>
                            <div class="button float-left">
                                <a href="#" class="main-btn">Apply Now</a>
                            </div>
                        </div> -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="{{route('home')}}">Home</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a class="active" href="index-2.html">Home 01</a></li>
                                            <li><a href="index-3.html">Home 02</a></li>
                                            <li><a href="index-4.html">Home 03</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item menu-item-has-children">
                                        <a href="">At a Glance</a>
                                        <ul class="sub-menu">
                                            @php
                                                $glances = DB::table('glance_pages')->get();
                                            @endphp
                                            @foreach ($glances as $glance)
                                                <li><a href="{{route('glance-page', $glance->id)}}">{{$glance->page_name}}</a></li>
                                            @endforeach
                                            <li><a href="{{route('map-direction')}}">Maps And Direction</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item menu-item-has-children">
                                        <a href="#">Academics</a>
                                        <ul class="sub-menu">
                                            @php
                                                $academics = DB::table('academics')->orderBy('id', 'asc')->get();
                                            @endphp
                                            @foreach ($academics as $academic)
                                                <li><a href="{{route('academic-page', $academic->id)}}">{{$academic->page_name}}</a></li>
                                            @endforeach
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item menu-item-has-children">
                                        <a href="#">Admission</a>
                                        <ul class="sub-menu">
                                            @php
                                                $admissions = DB::table('admissions')->orderBy('id', 'asc')->get();
                                            @endphp
                                            @foreach ($admissions as $admission)
                                                <li><a href="{{route('admission-page', $admission->id)}}">{{$admission->page_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item menu-item-has-children">
                                        <a href="">Administration</a>
                                        <ul class="sub-menu">
                                            @php
                                                $administrations = DB::table('administrations')->orderBy('id', 'asc')->get();
                                            @endphp
                                            <li><a href="{{route('calendar')}}">Calendar</a></li>
                                            @foreach ($administrations as $administration)
                                                <li><a href="{{route('administration-page', $administration->id)}}">{{$administration->page_name}}</a></li>
                                            @endforeach
                                            <li><a href="{{route('notice')}}">Notice</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item menu-item-has-children">
                                        <a href="">Events</a>
                                        <ul class="sub-menu">
                                            @php
                                                $events = DB::table('event_pages')->orderBy('id', 'asc')->get();
                                            @endphp
                                            @foreach ($events as $event)
                                                <li><a href="{{route('event-page', $event->id)}}">{{$event->page_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item menu-item-has-children">
                                        <a href="">Gallery</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('gallery')}}">Video Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://library.acc.edu.bd/" target="_blank">Library</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('contact-us')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    
    <section class="category-section" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-xs-12 col-12" style="max-height:400px">
                    <h3>Maps and Direction</h3>
                    <br>
                    <p><strong>Location</strong></p>
                    <p>The campus is located in the heart of Dhaka Cantonment, adjacent to the official residence of Chief of Army Staff. In addition to that, the residence of Chief of Air Force is across the street from the campus main gate.</p>
                    <br>
                    <div id="map"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-12 col-12">
                    <div class="right-sidebar-content widget-area" id="sidebar-primary">
                        <aside id="widget_one" class="widget widget_text mb-4">
                            <h2 class="widget-title">Student Portal</h2>          
                            <div class="textwidget">
                                <p><a href="https://portal.cloudcampus24.com//" target="_blank" rel="noopener">Login</a></p>
                                <p><a href="https://www.youtube.com/embed/tVoOaRNzjFw" target="_blank" rel="noopener" class="youtube responsive_lightbox">Login করার পূর্বে তথ্য ফরম পূরণের ভিডিও টিউটোরিয়ালটি দেখতে এখানে ক্লিক করুন</a></p>
                                <p><i class="fa fa-bell-o" aria-hidden="true">&nbsp;Help Line : 01769026084(09:00 am to 02:00 pm)</i></p>
                            </div>
                        </aside>
            
                        <aside id="notice_board_widget" class="widget widget_notice_board_widget mb-4">
                            <h2 class="widget-title">Notice Board</h2>
                            <div class="msnb_notice scroll-up">
                                <ul class="notice-list">
                                    @php
                                        $notices = DB::table('notices')->orderBy('id', 'desc')->get();
                                    @endphp
                                    @foreach ($notices as $notice)
                                        
                                    @endforeach
                                    <li><a href="{{URL::to($notice->image)}}" target="_blank">{{$notice->title}}</a></li>
                                </ul>
                            </div>
                        </aside>
            
                        <aside id="widget_one" class="widget widget_text mb-4">
                            <h2 class="widget-title">Explore</h2>         
                            <div class="textwidget">
                                <ul>
                                    @php
                                        $explores = DB::table('explores')->orderBy('id', 'desc')->get();
                                    @endphp
                                    @foreach ($explores as $explore)
                                        <li><a href="{{$explore->url}}" target="_blank" rel="noopener" class="youtube responsive_lightbox"><span style="vertical-align: inherit;">{{$explore->title}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
            
                        <aside id="widget_one" class="widget widget_text mb-4">
                            <h2 class="widget-title">Useful Links</h2>
                            <div class="textwidget">
                                @php
                                    $links = DB::table('useful_links')->orderBy('id', 'asc')->get();
                                @endphp
                                @foreach ($links as $link)
                                    <p><a href="{{$link->url}}" target="_blank" rel="noopener">{{$link->title}}</a></p>
                                @endforeach
                            </div>
                        </aside>
            
                        <aside id="widget_archives" class="widget widget_archive mb-4">
                            <h2 class="widget-title">Archives</h2>
                            <ul>
                                @php
                                    $archives = DB::table('archives')->orderBy('id', 'desc')->get();
                                @endphp
                                @foreach ($archives as $archive)
                                    <li><a href="{{route('archive', $archive->archive)}}">{{$archive->archive}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
            
                        <aside id="categories" class="widget widget_categories mb-4">
                            <h2 class="widget-title">Categories</h2>
                            <ul>
                                <li class="cat-item cat-item-1"><a href="https://acc.edu.bd/index.php/category/uncategorized/">Uncategorized</a>
                                </li>
                            </ul>
                        </aside>
            
                        <aside id="sfp_page_plugin_widget-4" class="widget widget_sfp_page_plugin_widget mb-4">
                            <h2 class="widget-title">Adamjee Cantonment College FaceBook page</h2>
                            <div id="fb-root"></div>
                            <script>
                                (function(d){
                                    var js, id = 'facebook-jssdk';
                                    if (d.getElementById(id)) {return;}
                                    js = d.createElement('script');
                                    js.id = id;
                                    js.async = true;
                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                    d.getElementsByTagName('head')[0].appendChild(js);
                                }(document));
                            </script>
                            <!-- SFPlugin by topdevs.net -->
                            <!-- Page Plugin Code START -->
                            <div class="sfp-container">
                                <div class="fb-page"
                                    data-href="https://www.facebook.com/acc.bd.1960/"
                                    data-width="500"
                                    data-height="700"
                                    data-hide-cover="false"
                                    data-show-facepile="true"
                                    data-small-header="false"
                                    data-tabs="timeline,events,messages">
                                </div>
                            </div>
                            <!-- Page Plugin Code END -->
                        </aside>
                        <aside id="categories-2" class="widget widget_categories mb-4">
                            <h2 class="widget-title">Calender</h2>
                        </aside>
            
                        <aside class="widget visitor-widget" id="visitor-counter">
                            <h2 class="visitor-counter-heading" style="color:#000;"><a href="">Visitor Counter</a></h2>
                        <div class="visitor-counter-content" style="color: #000;" >
                            <p>Today: 123</p>
                            <p>Yesterday: 546</p>
                            <p>This Week: 15311</p>
                            <p>This Month: 67493</p>
                            <p>Total: 864253</p>
                            <p>Currently Online: 122</p>
                        </div>
                        </aside>
            
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--====== CATEGORY PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    <footer id="footer-part">
        <div class="footer-copyright pt-15 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="copyright text-md-center text-center">
                            <p>&copy; Copyright. All rights reserved. Developed by <span><a target="_blank" href="">FNF PLANET</a></span></p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="{{asset('/')}}public/Frontend/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('/')}}public/Frontend/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('/')}}public/Frontend/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('/')}}public/Frontend/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('/')}}public/Frontend/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{asset('/')}}public/Frontend/js/waypoints.min.js"></script>
    <script src="{{asset('/')}}public/Frontend/js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="j{{asset('/')}}public/Frontend/s/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{asset('/')}}public/Frontend/js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{asset('/')}}public/Frontend/js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="{{asset('/')}}public/Frontend/js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{asset('/')}}public/Frontend/js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="{{asset('/')}}public/Frontend/js/main.js"></script>
    
    <!----=======fullcalendar-===========--->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        height: 'parent',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth'
        },
        defaultView: 'dayGridMonth',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
            title: 'All Day Event',
            start: '2020-02-01',
            },
            {
            title: 'Long Event',
            start: '2020-02-07',
            end: '2020-02-10'
            },
            {
            title: 'Conference',
            start: '2020-02-11',
            end: '2020-02-13'
            }
        ]
        });

        calendar.render();
    });
    </script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0W9P-Gl4lKE_LVYPEm9Ppacd1jvhI0j0&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>