@include('dash.layout.header' , ['PageTitle' => 'Dashboard'])
<body>
   @include('dash.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--employee dashboard wrapper start-->
    <div class="candidate_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                @include('dash.user.parts.sidebar')
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="jp_job_post_side_img">
                                            <img width="92" height="92" src="{{$User->profile_image}}" alt="post_img">
                                        </div>
                                        <div class="jp_job_post_right_cont">
                                            <h4>{{$User->name}}</h4>
                                            <ul>
                                                @if($User->job_description)<li><i class="fas fa-suitcase"></i>&nbsp; {{$User->job_description}}</li>@endif
                                                @if($User->city_id)<li><i class="flaticon-location-pointer"></i>&nbsp; {{$User->City->name}}</li>@endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> basic information</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    @if($User->job_description)
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>job description:</li>
                                                <li>{{$User->job_description}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    @if($User->city_id)
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li>{{$User->City->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    @if($User->phone)
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>phone:</li>
                                                <li>{{$User->phone}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>email:</li>
                                                <li><a mailto="{{$User->email}}">{{$User->email}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @if($User->website)
                                    <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>website:</li>
                                                <li><a target="_blank" href="{{$User->website}}">{{$User->website}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif

                                </div>
                            </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> social profile</h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                                <ul>
                                                    <li></li>
                                                    @if($User->facebook)<li><a target="_blank" href="{{$User->facebook}}"><i class="fab fa-facebook-f"></i></a></li>@endif
                                                    @if($User->twitter)<li><a target="_blank" href="{{$User->twitter}}"><i class="fab fa-twitter"></i></a></li>@endif
                                                    @if($User->linkedin)<li><a target="_blank" href="{{$User->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>@endif
                                                    @if($User->google)<li><a target="_blank" href="{{$User->google}}"><i class="fab fa-instagram"></i></a></li>@endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img">
                                            <i class="fas fa-book"></i>

                                        </div>
                                        <div class="emp_job_side_text">
                                            <h1>{{count($User->Application)}}</h1>
                                            <p>applied jobs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="emp_job_post jb_cover">
                                        <div class="emp_job_side_img parts">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </div>
                                        <div class="emp_job_side_text">

                                            <h1>{{count($User->FavJobs())}}</h1>
                                            <p>favourite jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--employee dashboard wrapper end-->
    <!-- newsletter wrapper start -->
    <div class="jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> Looking For A Job</h2>
                            <p>Your next level Product developemnt company assetsYour next level Product </p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                                <a href="#">submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter wrapper end -->
    <!-- footer Wrapper Start -->
    @include('dash.layout.footer')
    <!-- footer Wrapper End -->

    <!--custom js files-->
    @include('dash.layout.scripts')
    <!-- custom js-->
</body>

</html>
