@php
$NavCategories = \App\Category::orderBy('id' , 'desc')->limit(6)->get();
$NavCities = \App\City::orderBy('id' , 'desc')->limit(6)->get();
$NavJobs = \App\Job::orderBy('id' , 'desc')->limit(2)->get();
@endphp
<!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
<!-- Top Scroll End -->
<!-- cp navi wrapper Start -->
<nav class="cd-dropdown  d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <h2><a href="index.html"> <span><img width="100" height="80" src="{{url('public/main/images')}}/logo.png"></span></a></h2>
    <a href="#0" class="cd-close">Close</a>
    <ul class="cd-dropdown-content">
        <li>
          <form class="cd-search" action="{{route('search')}}" method="get">
              <input type="search" name="query" placeholder="Search...">
          </form>
        </li>
        <li><a href="{{route('home')}}">home</a></li>
        <li><a href="{{route('jobs')}}">jobs</a></li>
        <li><a href="{{route('about')}}">about us</a></li>
        <li><a href="{{route('companies')}}">companies</a></li>
        <li><a href="{{route('blog')}}">blog</a></li>
        <li><a href="{{route('contact')}}">contact us</a></li>
        @auth
        <li><a href="{{route('logout')}}">logout</a></li>
        @endauth
    </ul>
    <!-- .cd-dropdown-content -->
</nav>
<div class="cp_navi_main_wrapper jb_cover">
    <div class="container-fluid">
        <div class="cp_logo_wrapper">
            <a href="{{route('home')}}">
                <img src="{{url('public/dash/images')}}/logo.png" alt="logo" width="100" height="80">
            </a>
        </div>
        <!-- mobile menu area start -->
        <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cd-dropdown-wrapper">
                            <a class="house_toggle" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;"
                                  xml:space="preserve" width="25px" height="25px">
                                    <g>
                                        <g>
                                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                              fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                              fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                              fill="#004165" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <!-- .cd-dropdown -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-dropdown-wrapper -->
        </header>
        <div class="menu_btn_box jb_cover">
            <div class="jb_profile_box">
                <div class="nice-select" tabindex="0"> <span class="current">
                        <img src="{{$User->profile_image}}" alt="{{$User->name}}">
                        <div class="luca_profile_wrapper">
                            <h1><a href="#">{{$User->name}}</a></h1>
                            <p><a href="#">{{$User->email}}</a></p>
                        </div>
                    </span>
                    <ul class="list">
                        <li><a href="{{$User->DashLink('edit')}}"><i class="fas fa-user-edit"></i>account</a></li>
                        <li><a href="{{$User->DashLink('edit')}}"><i class="fas fa-cog"></i>Setting</a></li>
                        <li><a href="{{route('logout')}}"><i class="fas fa-sign-in-alt"></i>logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="jb_navigation_wrapper">
            <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <ul class="main_nav_ul">
                    <li class="gc_main_navigation"><a href="{{route('home')}}" class="gc_main_navigation">home</a></li>
                    <li class="has-mega gc_main_navigation"><a href="{{route('jobs')}}" class="gc_main_navigation">jobs</a></li>
                    <li class="has-mega gc_main_navigation kv_sub_menu">
                        <a href="#" class="gc_main_navigation"> candidates</a>
                        <!-- mega menu start -->
                        <ul class="kv_mega_menu">
                            <li class="kv_mega_menu_width">
                                <div class="container">
                                    <div class="jn_menu_partion_div">
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list jb_cover">
                                                <h1>job type</h1>
                                                <ul>
                                                    <li>
                                                        <a href="{{route('search' , ['type','full'])}}"><i class="fas fa-square"></i>Full Time</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('search' , ['type','part'])}}"><i class="fas fa-square"></i>Part Time</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('search' , ['type','rotation'])}}"><i class="fas fa-square"></i>Rotation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list jb_cover">
                                                <h1>categories</h1>
                                                <ul>
                                                    @forelse($NavCategories as $Category)
                                                    <li>
                                                        <a href="{{route('search' , ['category' , $Category->id])}}"><i class="fas fa-square"></i>{{$Category->title}}</a>
                                                    </li>
                                                    @empty
                                                    <li>All Catse</li>
                                                    @endforelse

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list   jb_cover">
                                                <h1>job location</h1>
                                                <ul>
                                                    @forelse($NavCities as $City)
                                                    <li>
                                                        <a href="{{route('search' , ['city' , $City->id])}}"><i class="fas fa-square"></i>{{$City->name}}</a>
                                                    </li>
                                                    @empty
                                                    <li>No Cites</li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list   jb_cover">
                                                <h1>open jobs</h1>
                                                <div class="open_jobs_wrapper">
                                                    @forelse($NavJobs as $Job)
                                                    <div class="open_jobs_wrapper_1 jb_cover">
                                                        <img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}">
                                                        <div class="open_job_text">
                                                            <h3><a href="{{route('job' , $Job->id)}}">{{$Job->title}}</a></h3>
                                                        </div>
                                                    </div>
                                                    @empty
                                                    empty
                                                    @endforelse
                                                    <div class="view_all_job jb_cover"><a href="{{route('jobs')}}">view all jobs</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
 <li class="gc_main_navigation"><a href="{{route('about')}}" class="gc_main_navigation">about us</a></li>
                    <li class="gc_main_navigation"><a href="{{route('companies')}}" class="gc_main_navigation">companies</a></li>
                    <li class="gc_main_navigation"><a href="{{route('blog')}}" class="gc_main_navigation">blog</a></li>
                    <li><a href="{{route('contact')}}" class="gc_main_navigation">contact</a></li>
                </ul>
            </div>
            <!-- mainmenu end -->
            <div class="jb_search_btn_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dez-quik-search bg-primary-dark">
                    <form action="{{route('search')}}" method="get">
                        <input name="search" value="" type="text" name="query" class="form-control" placeholder="Type to search...">
                        <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="container-fluid">
    <div class="row my-5 text-center" width="100%">
        <div class="col-md-12 col-xs-12 col-sm-12">
            @foreach ($errors->all() as $error)
            <div class="notofication-message error-message text-center">{{ $error }}</div>
            <br>
            @endforeach
        </div>
    </div>
</div>
@endif
@if(session()->has('success'))
  <div class="container-fluid">
      <div class="row my-5 text-center" width="100%">
          <div class="notofication-message success-message text-center">{{ session()->get('success') }}</div>
      </div>
  </div>
@endif
