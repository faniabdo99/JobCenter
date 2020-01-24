@include('dash.layout.header')
<body>
      {{-- @include('dash.layout.navbar') --}}
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">
                        <h1>Favourite Jobs</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Favourite</li>
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
                                    <h6>{{count($LikedJobs)}} favourite</h6>
                                </div>
                            </div>
                        </div>
                        @forelse($LikedJobs as $Job)


                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="jb_listing_left_fullwidth mt-0 jb_cover">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                        <div class="jb_job_post_side_img">
                                            <img width="60" height="60" src="{{$Job->Job->Company->profile_image}}" alt="{{$Job->Job->Company->name}}" />
                                            <br> <span>{{$Job->Job->Company->name}}</span>
                                        </div>
                                        <div class="jb_job_post_right_cont">
                                            <h4><a href="{{route('job' , $Job->Job->id)}}">{{$Job->Job->title}}</a></h4>
                                            <ul>
                                                @if($Job->Job->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Job->Job->salary}} IQD/Month</li>@endif
                                                <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->Job->City->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                        <div class="jb_job_post_right_btn_wrapper">
                                            <ul>
                                                <li>
                                                    <div class="job_adds_right">
                                                        <a href="#"><i class="far fa-heart"></i></a>
                                                    </div>
                                                </li>
                                                <li><a href="#">{{$Job->Job->type}}</a></li>
                                                <li> <a href="#" data-toggle="modal" data-target="#myModal6">apply</a></li>
                                            </ul>
                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal6" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">
                                                                    <div class="apply_job_form">
                                                                        <input type="text" name="name" placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <input type="text" name="Email" placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                                                    </div>
                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file" id="input-file-now-custom-6" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file only (5mb)</p>
                                                                    </div>
                                                                </div>
                                                                <div class="header_btn search_btn applt_pop_btn jb_cover ajt">
                                                                    <a href="#">apply now</a>
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
