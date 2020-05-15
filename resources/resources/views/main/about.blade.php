    @include('main.layout.header' , ['PageTitle' => __('layout/titles.AboutUs')])
    <body>
        @include('main.layout.navbar')
        <div class="page_title_section">
            <div class="page_header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <h1>@lang('layout/parts.About')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top header wrapper end -->
        <!-- work Wrapper Start -->
        <div class="iner_abt_wrapper jb_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="about_slider_wrapper float_left">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="about_image">
                                        <img src="{{url('public/main/images')}}/Picture1.png" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="about_image">
                                        <img src="{{url('public/main/images')}}/Picture2.png" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-12 col-sm-12 offset-lg-1">
                        <div class="about_text_wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- work Wrapper end -->
        <!-- counter wrapper start-->
        @include('main.layout.counter')
        <!-- counter wrapper end-->
        <!-- job agency Wrapper Start -->
        <div class="job_agency_wrapper jb_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                        <div class="jb_heading_wraper left_jb_jeading">
                            <h3>
                                @lang('layout/parts.About')</h3>
                        </div>
                        <div class="grow_next_text agency_main_wrapper jb_cover">
                            <p>
                                @lang('main/about.AboutDesc')</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                        <div class="row">
                            <img src="{{url('public/main/images')}}/logo.png" class="img-responsive" alt="img" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- job agency Wrapper end -->
        <!-- team wrapper start-->
        <div class="team_wrapper jb_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                        <div class="jb_heading_wraper">
                            <h3>
                                @lang('main/about.OurGoals')</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="grow_next_text agency_main_wrapper jb_cover">
                            <p>
                                <ul class="goalsmenu">
                                    @lang('main/about.OurGoalsP')
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 our_goals_img">
                        <img src="https://womenjobcenter.com/public/main/images/mockup4.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="job_rivew_wrapper jb_cover">
            <div class="job_rivew_img">
                <img src="{{url('public/main/images')}}/mockup3.png" alt="img">
            </div>
            <div class="col-md-6 job_rivew_testimonial">
                <div class="jb_heading_wraper left_rivew_heading left_rivew_heading_mission_vision mb-5">
                    <h3>@lang('main/about.Vision')</h3>
                    <p>@lang('main/about.VisionP')</p>
                </div>
                <div class="grow_next_text agency_main_wrapper jb_cover">
                    <div class="jb_heading_wraper left_rivew_heading left_rivew_heading_mission_vision">
                        <h3>@lang('main/about.Mission')</h3>
                    </div>
                    <p>@lang('main/about.MissionP1')</p>
                    <p>@lang('main/about.MissionP2')</p>
                </div>
            </div>
        </div>
        <!-- job rivew wrapper end-->
        @include('main.layout.cta')
        <!-- footer Wrapper Start -->
        @include('main.layout.footer')
        <!-- footer Wrapper End -->
        @include('main.layout.scripts')
    </body>

    </html>
