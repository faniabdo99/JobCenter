@include('dash.layout.header' , ['PageTitle' => $User->name .' Profile'])
<body>
    @include('dash.layout.navbar')
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>{{$User->name}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="candidate_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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
                                                @if($User->category_id)<li><i class="fas fa-suitcase"></i>&nbsp; {{$User->Category->title}}</li>@endif
                                                @if($User->city_id)<li><i class="flaticon-location-pointer"></i>&nbsp; {{$User->City->Name}}</li>@endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> @lang('dash/user.BasicInformation')</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    @if($User->category_id)
                                        <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                            <div class="jp_listing_list_icon">
                                                <i class="far fa-calendar"></i>
                                            </div>
                                            <div class="jp_listing_list_icon_cont_wrapper">
                                                <ul>
                                                    <li>@lang('dash/user.JobCategory')</li>
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
                                                        <li>@lang('dash/user.Location')</li>
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
                                                            <li>@lang('dash/user.Phone')</li>
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
                                                            <li>@lang('dash/user.Email')</li>
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
                                                                <li>@lang('dash/user.Website')</li>
                                                                <li><a target="_blank" href="{{$User->website}}">{{$User->website}}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @endif
                                </div>
                            </div>
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> @lang('dash/user.Description')</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="text-left jp_listing_left_bottom_sidebar_social_wrapper">
                                        <p>{{$User->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> @lang('dash/user.SocialProfile')</h1>
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
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12" style="margin-top:11px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                  @if($User->resume)
                                    <embed src="{{$User->cv}}" style="height:85vh;width:100%">
                                  @else
                                    <p>{{$User->name}} @lang('dash/user.DontHaveACVUploaded')</p>
                                  @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--employee dashboard wrapper end-->
    @include('dash.layout.footer')
    @include('dash.layout.scripts')
</body>

</html>
