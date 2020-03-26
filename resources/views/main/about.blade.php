    @include('main.layout.header')
    <body>
    @include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">
                        <h1>About us </h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>About us </li>
                            </ul>
                        </div>
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
                    <div class="about_text_wrapper">
                    </div>
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

                        <h3>About Us</h3>

                    </div>
                    <div class="grow_next_text agency_main_wrapper jb_cover">
                        <p>Over the past 30 years, armed conflicts and sectarian violence have ravaged Iraq. Hundreds of thousands of casualties left the widowed women to be the breadwinner for the family. In this context, especially in the southern area of Iraq, many young females and children dropped out of school. Illiterate women are estimated to be 26.4% comparing with men which reached up to 11.6%. The illiteracy is a main factor for pushing women to early marriage or following negative coping strategies like begging.<br>
On another level, the females which have academic degree or proper education are lacking the experience and the knowledge to pursue decent jobs.<br>
In Basra, where “the unemployment rate for youths was at 25.5 percent in 2016, which is higher than the national average of 20.4 percent” required an approach to support and increase job placement for women. As a logical solution is to establish a job centre that dedicate it effort to train females and guide them to proper job opportunities.<br>
Bringing women into the employment market through the establishment of female oriented job centres in Basra: The aim of the job centre is to establish networks between the local economy and female jobseekers, which may also include international businesses and organisations. Additionally, the job centres will offer support and guidance to women who intend to open their own business.
</p>

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

                        <h3>Our Goals</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="grow_next_text agency_main_wrapper jb_cover">
                        <p>

                            <ul class="goalsmenu">
                        <li>Decrease the unemployment rate.
</li>
<li>Promote gender equality / equity.
</li>
<li>Enhance the capacity of the females to get better job opportunities.
</li>
<li>Contribute to improve the image of women / female jobseekers
</li>
<li>Contribute to female networking and exchange.
</li>
<li>Increasing female participation in the local job market.
</li>
<li>Boost female self-confidence and raise awareness for the opportunities provided on the local labour market.
</li>
                        </ul>
</p>

                    </div>
                </div>
    <div class="col-lg-6 col-md-6 our_goals_img"><img src="https://womenjobcenter.com/public/main/images/mockup4.png" alt="img"></div>
            </div>
        </div>
    </div>
    <!-- team wrapper end-->
    <!-- job rivew wrapper start-->
    <div class="job_rivew_wrapper jb_cover">
        <div class="job_rivew_img">
            <img src="{{url('public/main/images')}}/mockup3.png" alt="img">
        </div>
        <div class="col-md-6 job_rivew_testimonial">
            <div class="jb_heading_wraper left_rivew_heading left_rivew_heading_mission_vision">

                <h3>Vision</h3>


            </div>
            <div class="grow_next_text agency_main_wrapper jb_cover">
                        <p>We work on supporting the hiring opportunities for the trainees to match their skills with the required job skills.

</p>
<div class="jb_heading_wraper left_rivew_heading left_rivew_heading_mission_vision">

                <h3>Mission</h3>


            </div>
<p>We build up females capacities and skills to acquire more job opportunities and then we do job matching between the available jobs at the jobs’ market and the female candidates in our databases.
</p>
<p>Today, we were able to train a big number of females in job readiness topics, and we have built up a data base of female candidates with different professions and backgrounds. We are a free of charge job center and happy to offer our services to the different employment sectors in Basra and Iraq.
</p>

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
