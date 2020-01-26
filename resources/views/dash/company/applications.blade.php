@include('dash.layout.header' , ['PageTitle' => 'Applications'])
<body>
  @include('dash.layout.navbar')
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>Applications</h1>
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
                                        <div class="job_list mange_list applications_recent">
                                            <h6>recent applications ({{count($User->Application)}})</h6>
                                        </div>
                                    </div>
                                    @forelse ($User->Application as $Application)
                                      <div class="latest_job_box jb_cover">
                                          <div class="job_list recent_app_1">
                                              <div class="recent_img">
                                                  <img width="60" height="60" src="{{$Application->User->profile_image}}" alt="{{$Application->User->name}}">
                                              </div>
                                              <div class="recent_cntnt">
                                                  <h6><a href="#">{{$Application->Job->title}}</a></h6>
                                                  <ul>
                                                      <li><i class="fas fa-user"></i>&nbsp; {{$Application->name}}</li>
                                                      <li><i class="fas fa-suitcase"></i>&nbsp; {{$Application->User->Category->title}}</li>
                                                      <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Application->User->City->name}}</li>
                                                  </ul>
                                              </div>
                                          </div>

                                          <div class="job_list_next recent_app_1">
                                              <div class="header_btn download_btn_wrapper jb_cover">
                                                  <ul>
                                                    @if($Application->resume)
                                                      <li>
                                                          <a href="{{$Application->resume_link}}"><i class="fas fa-file-download"></i>download Resume</a>
                                                      </li>
                                                    @endif
                                                      <li>
                                                          <a href="mailto:{{$Application->email}}"> <i class="fas fa-envelope"></i>send</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                    @empty
                                      <p>No Applications Yet</p>
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
