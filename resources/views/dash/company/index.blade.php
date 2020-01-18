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
                        <h1>Employer Dashboard</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>company Dashboard</li>
                            </ul>
                        </div>
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
                                            <img src="{{$User->profile_image}}" alt="post_img">
                                        </div>
                                        <div class="jp_job_post_right_cont">
                                            <h4>Webstrot Technology</h4>
                                            <ul>
                                                <li><i class="fas fa-suitcase"></i>&nbsp; Software Firm</li>
                                                <li><i class="flaticon-location-pointer"></i>&nbsp; Los Angeles</li>
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
                                    <h1>360</h1>
                                    <p>job posted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img ress">
                                    <i class="fas fa-user"></i>

                                </div>
                                <div class="emp_job_side_text">
                                    <h1>590</h1>
                                    <p>shortlisted resume</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img greens">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1>11,200</h1>
                                    <p>total page view</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img parts">
                                    <i class="fas fa-envelope-open-text"></i>

                                </div>
                                <div class="emp_job_side_text">
                                    <h1>1,608</h1>
                                    <p>total applications</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> view graph</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="sales-chart">
                                        <canvas id="team-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> company overview</h1>
                                </div>
                                <div class="job_overview_header jb_cover">

                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>categories:</li>
                                                <li>Design & Creative</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li>Los Angeles Califonia PO</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Hotline::</li>
                                                <li>0145636941:</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>email:</li>
                                                <li><a href="#">webstrot@example.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="flaticon-man-user"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>compant size:</li>
                                                <li>20-50</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>website:</li>
                                                <li><a href="#">www.webstrot.com</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> our location</h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div id='map'>
                                            </div>
                                        </div>
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
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> recent applicants</h1>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img src="images/rc1.png" alt="post_img">

                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4>aradhya s.</h4>

                                                <ul>
                                                    <li>app designer</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                <div class="header_btn search_btn appbtn jb_cover">

                                                    <a href="#">send</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img src="images/rc2.png" alt="post_img">

                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4>akshay s.</h4>

                                                <ul>
                                                    <li>app designer</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                <div class="header_btn search_btn appbtn jb_cover">

                                                    <a href="#">send</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img src="images/rc3.png" alt="post_img">

                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4>shruti s.</h4>

                                                <ul>
                                                    <li>app designer</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                <div class="header_btn search_btn appbtn jb_cover">

                                                    <a href="#">send</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-7 col-sm-8 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img src="images/rc4.png" alt="post_img">

                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4>simona A.</h4>

                                                <ul>
                                                    <li>UI designer</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-4 col-12">
                                            <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                <div class="header_btn search_btn appbtn jb_cover">

                                                    <a href="#">send</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> activity</h1>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="activity_app">
                                                <i class="fas fa-angle-right"></i>
                                            </div>

                                            <div class="activity_logos">
                                                <h4>Dobrick published an article
</h4>

                                                <ul>
                                                    <li>2 hours ago</li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="activity_app">
                                                <i class="fas fa-angle-right"></i>
                                            </div>

                                            <div class="activity_logos">
                                                <h4>Dobrick published an article
</h4>

                                                <ul>
                                                    <li>2 hours ago</li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="activity_app">
                                                <i class="fas fa-angle-right"></i>
                                            </div>

                                            <div class="activity_logos">
                                                <h4>Someone bookmarked you
</h4>

                                                <ul>
                                                    <li>2 hours ago</li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="activity_app">
                                                <i class="fas fa-angle-right"></i>
                                            </div>

                                            <div class="activity_logos">
                                                <h4>Your Resume Updated!
</h4>

                                                <ul>
                                                    <li>2 hours ago</li>

                                                </ul>
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
    <script>
        function initMap() {
            var uluru = {
                lat: -36.742775,
                lng: 174.731559
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

        //-----------Team chart-------//
        var ctx = document.getElementById("team-chart");
        ctx.height = 150;
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                type: 'line',
                defaultFontFamily: 'Montserrat',
                datasets: [{
                    data: [0, 7, 3, 12, 2, 10, 0],
                    label: "Bar 01",
                    backgroundColor: '#ff3366',
                    borderColor: '#ff3366',
                    borderWidth: 0.5,
                    pointStyle: 'circle',
                    pointRadius: 0,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: '#f84471',
                }, {
                    label: "Bar 02",
                    data: [0, 14, 5, 3, 15, 5, 0],
                    backgroundColor: '#ffae3b',
                    borderColor: '#ffae3b',
                    borderWidth: 0.5,
                    pointStyle: 'circle',
                    pointRadius: 0,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: '#ffae3b',
                }, {
                    label: "Bar 03",
                    data: [4, 10, 12, 5, 10, 15, 6],
                    backgroundColor: '#8dc73f',
                    borderColor: '#8dc73f',
                    borderWidth: 0.5,
                    pointStyle: 'circle',
                    pointRadius: 0,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: '#8dc73f',
                }]
            },
            options: {
                responsive: true,
                tooltips: {
                    mode: 'index',
                    titleFontSize: 12,
                    titleFontColor: '#000',
                    bodyFontColor: '#000',
                    backgroundColor: '#fff',
                    titleFontFamily: 'Montserrat',
                    bodyFontFamily: 'Montserrat',
                    cornerRadius: 3,
                    intersect: false,
                },
                legend: {
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        fontFamily: 'Montserrat',
                    },

                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                },
                title: {
                    display: false,
                }
            }
        });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi2zbxXa0ObGqaSBo5NJMdwLs_xtQ03nI&callback=initMap"></script>
</body>

</html>