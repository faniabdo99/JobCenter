@include('dash.layout.header' , ['PageTitle' => 'Posted Jobs'])
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
                        <h1> Manage Jobs ({{count($Jobs)}})</h1>
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
                            <div class="job_main_overflow jb_cover">
                                <div class="latest_job_overlow jb_cover">
                                    <div class="manage_jobs_wrapper jb_cover">
                                        <div class="job_list mange_list">
                                            <h6>job title</h6>
                                        </div>
                                        <div class="job_list_next mange_list">
                                            <h6>applications</h6>
                                        </div>
                                        <div class="job_list_next mange_list">
                                            <h6>Category</h6>
                                        </div>
                                        <div class="job_list_next mange_list">
                                            <h6>action</h6>
                                        </div>
                                    </div>
                                    @forelse($Jobs as $Job)
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <h6><a href="{{route('job' , $Job->id)}}">{{$Job->title}}</a></h6>
                                            <p> <i class="far fa-calendar"></i> Date Posted : {{$Job->created_at->format('d M Y')}}</p>
                                        </div>
                                        <div class="job_list_next">
                                            <p><a href="{{route('dash.company.applications')}}">{{count($Job->Applications)}} Applications</a></p>
                                        </div>
                                        <div class="job_list_next">
                                            <p class="gn">{{$Job->Category->title}}</p>
                                        </div>
                                        <div class="job_list_next">
                                            <ul>
                                                <li><a href="{{route('job' , $Job->id)}}"><i class="fas fa-eye"></i></a></li>
                                                <li><a href="#"><i class="fas fa-edit"></i></a></li>
                                                <li><a href="{{route('dash.company.job.delete' , $Job->id)}}"><i class="fas fa-trash-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @empty
                                    <p>There is No Jobs Yet!</p>
                                    @endforelse
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
