@include('dash.layout.header', ['PageTitle' => 'Favourite Jobs'])
<body>
      @include('dash.layout.navbar')
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>@lang('dash/user.FavouriteJobs')</h1>
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
                            <div class="manage_jobs_wrapper jb_cover">
                                <div class="job_list mange_list applications_recent">
                                    <h6>{{count($LikedJobs)}} @lang('dash/user.Favourite')</h6>
                                </div>
                            </div>
                        </div>
                        @forelse($LikedJobs as $Job)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                            <div class="jb_listing_left_fullwidth mt-0 jb_cover">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                        <div class="jb_job_post_side_img">
                                            <img width="60" height="60" src="{{$Job->Job->Company->profile_image}}" alt="{{$Job->Job->Company->name}}" />
                                            <br> <span>{{$Job->Job->Company->name}}</span>
                                        </div>
                                        <div class="jb_job_post_right_cont">
                                            <h4><a href="{{route('job' , [$Job->Job->id , $Job->Job->slug])}}">{{$Job->Job->title}}</a></h4>
                                            <ul>
                                                @if($Job->Job->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Job->Job->salary}} @lang('dash/user.IQD/Month')</li>@endif
                                                <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->Job->City->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="jb_job_post_right_btn_wrapper">
                                            <ul>
                                                <li>
                                                    <div class="job_adds_right">
                                                        <a href="{{route('dash.like.unlike' , [$Job->Job->id , $User->id])}}">
                                                          <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li><a href="#">{{$Job->Job->JobType}}</a></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      @empty
                      @endforelse

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
                            <h2> @lang('dash/user.LookingForAJob')</h2>
                            <p>@lang('dash/user.YourNextLevelProductDevelopemntCompanyAssetsYourNextLevelProduct') </p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                                <a href="#">@lang('dash/user.Submit')</a>
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
