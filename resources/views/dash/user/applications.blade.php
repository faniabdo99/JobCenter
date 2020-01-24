@include('dash.layout.header' , ['PageTitle' => 'Applications'])
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
                        <h1>Candidate Applied Jobs ({{count($Applications)}})</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Applied Jobs</li>
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
                                    <div class="manage_jobs_wrapper jb_cover">
                                        <div class="job_list mange_list applications_recent">
                                            <h6>{{count($Applications)}} applied jobs</h6>
                                        </div>
                                    </div>
                        </div>
                        @forelse($Applications as $Application)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="jb_listing_left_fullwidth mt-0 jb_cover">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                        <div class="jb_job_post_side_img">
                                            <img width="60" height="60" src="{{$Application->Job->Company->profile_image}}" alt="{{$Application->Job->Company->name}}" />
                                            <br><span>{{$Application->Job->Company->name}}</span>
                                        </div>
                                        <div class="jb_job_post_right_cont">
                                            <h4><a href="{{route('job' , $Application->Job->id)}}">{{$Application->Job->title}}</a></h4>
                                            <ul>
                                                @if($Application->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Application->Job->salary}}</li>@endif
                                                <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Application->Job->City->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="jb_job_post_right_btn_wrapper">
                                            <ul>
                                                <li>
                                                    <div class="job_adds_right">
                                                        <a href="#!"><i class="far fa-heart"></i></a>
                                                    </div>
                                                </li>
                                                <li><a href="#">{{$Application->Job->type}}</a></li>
                                                <li> <a href="#" class="applied_btn">applied</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @empty 
                            <p>No Applications</p>
                            @endforelse
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