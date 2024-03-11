<!DOCTYPE html>
<html>

<head>
   <title>NTA</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="google-site-verification" content="" />
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <!-- favicon -->
   <link rel="manifest" href="favicon/manifest.json">
   <meta name="msapplication-TileColor" content="#674336">
   <meta name="theme-color" content="#674336">
   <!-- end favicon -->
   <!-- required css  -->
   <link rel="stylesheet" href="css/app.css" />
   <link rel="stylesheet/less" type="text/css" href="css/timeline.less" />
   <link rel="stylesheet" href="css/font-awesome.min.css" />
   <script type="text/javascript" src="js/app.js"></script>
   <!-- end -->
   <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=645a0c921b837f0019d420c5&product=inline-follow-buttons' async='async'></script>

</head>

<body>
   <!-- Spinner Start -->
   <!-- <div id="spinner" class="show">
         <div uk-spinner class="text-primary"></div>
   </div> -->
   <!-- Spinner End -->
   
   <!-- header start -->
   <header>
      <!-- end mobile top menu -->
      <div class="uk-main-header uk-navbar-container " uk-sticky="top: 0; animation:uk-animation-fade uk-animation-slow uk-transform-origin-bottom-center">
         <div class="uk-container">
            <nav class="uk-navbar d-flex uk-flex-between uk-flex-middle" uk-navbar>
               <div class="">
                  <a class="uk-navbar-item uk-logo " href="index.php">
                     <img src="images/logo.png" alt="" class="uk-logo-white" width="70">
                  </a>
               </div>
               <div class="">
                  <!-- start desktop menu -->
                  <ul class="uk-navbar-nav uk-position-relative uk-visible@m">
                     <li> <a href="index.php"> Home</a> </li>
                     <li>
                        <a href="">About <span class="" uk-icon="icon: chevron-down;"></span></a>
                        <ul class="uk-menu-list bg-white " uk-dropdown="delay-hide: 10; uk-animation-slide-top-small; duration: 300;">
                           <li><a href="about.php">Introduction to NTA</a></li>
                           <li><a href="message.php">President's Message</a></li>
                           <li><a href="history.php">Our History</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="">Events <span class="" uk-icon="icon: chevron-down;"></span></a>
                        <ul class="uk-menu-list bg-white" uk-dropdown="delay-hide: 10; uk-animation-slide-top-small; duration: 300;">
                           <li><a href="event.php">All Events</a></li>
                           <li><a href="calendar.php">Triathlon 2024 Calender</a></li>
                        </ul>
                     </li>
                     <li> <a href="results.php">Results </a> </li>
                     <li> <a href="athelete.php">Athletes </a> </li>
                     <li> <a href="news.php">News</a> </li>
                     <li> <a href="gallery.php">Gallery</a> </li>
                     <li> <a href="download.php">Downloads</a> </li>
                     <li> <a href="contact.php">Contact</a> </li>
                     <!-- -->
                  </ul>
                  <!-- end desktop menu -->

                  <!-- mobile menu button -->
                  <ul class="uk-navbar-nav">
                     <li>
                        <a class="uk-navbar-toggle uk-hidden@m uk-light" uk-toggle="target: #offcanvas-reveal" uk-navbar-toggle-icon></a>
                     </li>
                  </ul>
                  <!-- mobile menu button -->
               </div>
               <div class="uk-visible@m">
                  <a href="" class="uk-button uk-button-primary uk-flex uk-flex-middle uk-flex-center"> Login
                     <span uk-icon="icon:  triangle-right; ratio: 1.1"></span>
                  </a>
               </div>
            </nav>
         </div>
      </div>
   </header>
   <!-- header end -->
   <!-- start mobile menu -->
   <div id="offcanvas-reveal" class="uk-hidden@m" uk-offcanvas=" overlay: true; mode: slide">
      <div class="uk-offcanvas-bar uk-padding-remove uk-container">
         <div class="uk-margin-remove bg-white uk-padding-small uk-padding-remove-vertical uk-position-relative">
            <div class="uk-flex uk-flex-between uk-flex-middle" style="padding-top: 5px; padding-bottom: 5px;">
               <div>
                  <a class="uk-navbar-item uk-logo uk-padding-remove uk-margin-remove" href="index.php">
                     <img src="images/logo.png" alt="" class="uk-logo-white" width="70">
                  </a>
               </div>
               <div>
                  <button class="uk-offcanvas-close uk-close-large uk-position-relative   " type="button" uk-close></button>
               </div>
            </div>
         </div>
         <nav class=" uk-padding-remove-left uk-padding-remove-right">
            <ul class="uk-navsidebar  uk-nav-parent-icon uk-nav-left uk-margin-auto-vertical" uk-nav="multiple: false">
               <li> <a href="index.php"> Home</a> </li>
               <!-- -->
               <li class="uk-parent">
                  <a href="javascript:void(0)">About </a>
                  <ul class="uknavsub">
                     <li><a href="about.php">Introduction to NTA</a></li>
                     <li><a href="message.php">President's Message</a></li>
                     <li><a href="history.php">Our History</a></li>
                  </ul>
               </li>
               <li class="uk-parent">
                  <a href="javascript:void(0)">Events </a>
                  <ul class="uknavsub">
                     <li><a href="event.php">All Events</a></li>
                     <li><a href="calendar.php">Triathlon 2024 Calender</a></li>
                  </ul>
               </li>
               <li> <a href="results.php">Results </a> </li>
               <li> <a href="athelete.php">Athletes </a> </li>
               <li> <a href="news.php">News</a> </li>
               <li> <a href="gallery.php">Gallery</a> </li>
               <li> <a href="download.php">Downloads</a> </li>
               <li> <a href="contact.php">Contact</a> </li>
               <div class="uk-margin-top">
                  <a href="" class="uk-button uk-button-primary uk-flex uk-flex-middle uk-flex-center"> Login
                     <span uk-icon="icon:  triangle-right; ratio: 1.1"></span>
                  </a>
               </div>
            </ul>
         </nav>

      </div>
   </div>
   <!-- end mobile menu -->
   <!-- end header -->