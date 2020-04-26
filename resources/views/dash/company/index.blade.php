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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>@lang('dash/company.Dashboard')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--employee dashboard wrapper start-->
    <div class="employe_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                @include('dash.company.parts.sidebar')
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                        <div class="jp_job_post_side_img">
                                            <img width="92" height="92" src="{{$User->profile_image}}" alt="post_img">
                                        </div>
                                        <div class="jp_job_post_right_cont">
                                            <h4>{{$User->name}}</h4>
                                            <ul>
                                                @if($User->category_id)<li><i class="fas fa-suitcase"></i>&nbsp; {{$User->Category->title}}</li>@endif
                                                @if($User->city)<li><i class="flaticon-location-pointer"></i>&nbsp; {{$User->city}}</li>@endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1>{{count($User->Jobs)}}</h1>
                                    <p>@lang('dash/company.JobPosted')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img ress">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1>{{$User->LikesCount()}}</h1>
                                    <p>@lang('dash/company.CompanyLikes:')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img greens">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1>{{visits($User)->count()}}</h1>
                                    <p>@lang('dash/company.TotalPageView')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img parts">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1>{{count($User->Application)}}</h1>
                                    <p>@lang('dash/company.TotalApplications')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> @lang('dash/company.CompanyOverview')</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                  @if($User->category_id)
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>@lang('dash/company.Categories:')</li>
                                                <li>{{$User->Category->title}}</li>
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
                                                <li>@lang('dash/company.Location:')</li>
                                                <li>{{$User->City->Name}}</li>
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
                                                <li>@lang('dash/company.Hotline:')</li>
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
                                                <li>@lang('dash/company.Email:')</li>
                                                <li><a href="mailto:{{$User->email}}">{{$User->email}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @if($User->company_size)
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="flaticon-man-user"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>@lang('dash/company.CompanySize:')</li>
                                                <li>{{$User->company_size}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    @if($User->website)
                                    <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>@lang('dash/company.Website:')</li>
                                                <li><a target="_blank" href="{{$User->website}}">{{$User->website}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                          @if($User->facebook != null || $User->twitter != null || $User->google != null || $User->linkedin != null)
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> @lang('dash/company.SocialProfile')</h1>
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
                          @endif
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> @lang('dash/company.RecentApplicants')</h1>
                                </div>
                                @forelse($User->LatestApplications() as $Application)
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img width="60" height="60" src="{{$Application->User->profile_image}}" alt="{{$Application->User->name}}">
                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4>{{$Application->Job->title}}</h4>
                                                <ul>
                                                    <li>{{$Application->name}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @empty
                                <p>@lang('dash/company.NoData')</p>
                              @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('main.layout.cta')
    @include('dash.layout.footer')
    @include('dash.layout.scripts')
</body>
</html>
