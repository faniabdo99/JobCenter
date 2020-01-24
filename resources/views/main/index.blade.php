@include('main.layout.header')
<body>
@include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- job banner wrapper start-->
    <div class="jb_banner_wrapper jb_cover">
        <div class="jb_banner_left">
            <h1>The Easy Way To Get
                Your New Job</h1>
            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor . sollicitudin, lorem
                quis bibendum auctor, sem nibh id elit. </p>
            <div class="contect_form3">

                <input type="text" name="name" placeholder="Keyword e.g. (Job Title, Description, Tags)">
            </div>
            <div class="select_box">

                <i class="flaticon-map"></i>
                <select>
                    <option>select location</option>
                    <option>california</option>
                    <option>los velas</option>
                    <option>noida</option>
                    <option>chicago</option>

                </select>

            </div>
            <div class="select_box select_box_2">

                <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                <select>
                    <option>category</option>
                    <option>real estate</option>
                    <option>electronics</option>
                    <option>marketing</option>
                    <option>education</option>

                </select>

            </div>
            <div class="select_box">

                <i class="flaticon-statistics"></i>
                <select>
                    <option>experience</option>
                    <option>5 years</option>
                    <option>3 years</option>
                    <option>2 years</option>
                    <option>fresher</option>

                </select>

            </div>
            <div class="header_btn search_btn jb_cover">

                <a href="#"><i class="fas fa-search"></i> search</a>

            </div>
        </div>
        <div class="jb_banner_right d-none d-sm-none d-md-none d-lg-none d-xl-block">
        </div>
    </div>

    <!-- job banner wrapper end-->
    <!-- job list wrapper start-->
    <div class="jb_banner_list jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="jb_top_jobs_category jb_cover">

                        <h3><a href="#">laravel</a></h3>
                        <img src="{{url('public/main/images/')}}/jb1.png" alt="img">

                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="jb_top_jobs_category jb_cover">

                        <h3><a href="#">Wordpress</a></h3>
                        <img src="{{url('public/main/images/')}}/jb2.png" alt="img">

                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="jb_top_jobs_category jb_cover">

                        <h3><a href="#">AngularJS</a></h3>
                        <img src="{{url('public/main/images/')}}/jb3.png" alt="img">

                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="jb_top_jobs_category jb_cover">

                        <h3><a href="#">node js</a></h3>
                        <img src="{{url('public/main/images/')}}/jb4.png" alt="img">

                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="jb_top_jobs_category jb_cover">

                        <h3><a href="#">1onic</a></h3>
                        <img src="{{url('public/main/images/')}}/jb5.png" alt="img">

                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="jb_top_jobs_category">

                        <h3><a href="#">node js</a></h3>
                        <img src="{{url('public/main/images/')}}/jb4.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job list wrapper end-->
    <!-- job category wrapper start-->
    <div class="jb_category_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">
                        <h3>Browse Jobs By Category</h3>
                        <p>Your next level Product developemnt company assets</p>
                    </div>
                </div>
                @forelse($Categories as $Category)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="jb_browse_category jb_cover">
                        <a href="job_listing_list_left_filter.html">
                            <div class="hover-block"></div>
                            <i class="{{$Category->icon}}"></i>
                            <h3>{{$Category->title}}</h3>
                            <p>({{count($Category->Jobs)}} jobs)</p>
                        </a>
                    </div>
                </div>
                @empty 
                <p>Nothing Here Yet !</p>
                @endforelse
                    </div>
                </div>
                <div class="header_btn search_btn load_btn jb_cover">
                    <a href="#">load more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- job category wrapper end-->
    <!-- grow next Wrapper Start -->
    <div class="grow_next_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="jb_heading_wraper left_jb_jeading">
                        <h3>Grow next level business</h3>
                        <p>#1 MOST trusted digital marketplace company</p>
                    </div>
                    <div class="grow_next_text jb_cover">
                        <p>What do all consultants need? In short, trust. This is achieved with professional
                            presentation and the ability to communicate clearly with and potential clients. Whether you
                            are an accountant.
                            <br>
                            <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusd tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="header_btn search_btn jb_cover">
                            <a href="#">discover more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="grow_next_img jb_cover">
                        <img src="{{url('public/main/images/')}}/gnxt.jpg" class="img-responsive" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- grow next Wrapper end -->
    <!-- latest job wrapper start-->
    <div class="latest_job_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="job_main_overflow jb_cover">
                    <div class="latest_job_overlow jb_cover">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="latest_job_toper jb_cover">
                                <h1>latest jobs</h1>
                                <div class="latest_job_tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home">all</a></li>
                                        <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#menu1">featured</a></li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2">remotely</a></li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu3"> part time</a></li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu4"> full time</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="tab-content">
                                <div id="home" class="tab-pane active">
                                    @forelse($TopSixJobs as $Job)
                                        <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}">
                                                <h6>{{$Job->title}} ({{$Job->experience}} + Years)</h6>
                                            </a>
                                        </div>
                                        <div class="job_list_next">
                                            <p>{{$Job->Company->name}}</p>
                                        </div>
                                        <div class="job_list_next">
                                            <p>{{$Job->type}}</p>
                                        </div>
                                        <div class="job_list_next">
                                            <p>{{$Job->City->name}}</p>
                                        </div>
                                        <div class="job_list_next">
                                            <p>{{$Job->Salary}} IQ / Month</p>
                                        </div>
                                    </div>
                                    @empty 

                                    @endforelse
                                    <p class="showing">Showing 1-5 of 23 Latest Jobs</p>
                                    <span class="se_all_job"><a href="#">See All Jobs <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt4.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModa7">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal7" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-7"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt3.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal8">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal8" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-8"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt2.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal9">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal9" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-9"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal0">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal0" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-0"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt2.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal11">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal11" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-12"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt3.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal15">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal15" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-22"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="showing">Showing 1-5 of 23 Latest Jobs</p>
                                    <span class="se_all_job"><a href="#">See All Jobs <i
                                                class="fas fa-long-arrow-alt-right"></i></a></span>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt2.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal01">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal01" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-23"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal02">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal02" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-24"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt3.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal21">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal21" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-25"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt4.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal31">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal31" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-26"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal41">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal41" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-27"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt2.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal51">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal51" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-28"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="showing">Showing 1-5 of 23 Latest Jobs</p>
                                    <span class="se_all_job"><a href="#">See All Jobs <i
                                                class="fas fa-long-arrow-alt-right"></i></a></span>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal00">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal00" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-29"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt3.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal1500">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal500" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-20"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt4.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal201">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal201" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-211"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal302">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal302" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-222"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal401">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal401" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-233"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt2.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModal501">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModal501" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-255"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="showing">Showing 1-5 of 23 Latest Jobs</p>
                                    <span class="se_all_job"><a href="#">See All Jobs <i
                                                class="fas fa-long-arrow-alt-right"></i></a></span>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModalt">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModalt" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-266"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt2.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModalt1">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModalt1" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-277"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt3.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModalt2">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModalt2" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-288"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt4.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModalt3">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModalt3" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-299"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt1.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModalt4">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModalt4" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-200"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="#"><img src="{{url('public/main/images/')}}/lt2.png" alt="img">
                                                <h6>Trainee Web Designer, (Fresher)</h6>
                                            </a>

                                        </div>
                                        <div class="job_list_next">
                                            <p>google</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>Remotely</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>new york</p>

                                        </div>
                                        <div class="job_list_next">
                                            <p>$9,000</p>

                                        </div>
                                        <div class="job_list_next">
                                            <div class="header_btn search_btn apply_btn jb_cover">

                                                <a href="#" data-toggle="modal" data-target="#myModalt5">apply</a>

                                            </div>

                                        </div>
                                        <div class="modal fade apply_job_popup" id="myModalt5" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <div class="apply_job jb_cover">
                                                                <h1>apply for this job :</h1>
                                                                <div class="search_alert_box jb_cover">

                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="name"
                                                                            placeholder="full name">
                                                                    </div>
                                                                    <div class="apply_job_form">

                                                                        <input type="text" name="Email"
                                                                            placeholder="Enter Your Email">
                                                                    </div>
                                                                    <div class="apply_job_form">
                                                                        <textarea class="form-control" name="message"
                                                                            placeholder="Message"></textarea>
                                                                    </div>

                                                                    <div class="resume_optional jb_cover">
                                                                        <p>resume (optional)</p>
                                                                        <div class="width_50">
                                                                            <input type="file"
                                                                                id="input-file-now-custom-082"
                                                                                class="dropify" data-height="90" /><span
                                                                                class="post_photo">upload resume</span>
                                                                        </div>
                                                                        <p class="word_file"> microsoft word or pdf file
                                                                            only (5mb)</p>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="header_btn search_btn applt_pop_btn jb_cover">

                                                                    <a href="#">apply now</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="showing">Showing 1-5 of 23 Latest Jobs</p>
                                    <span class="se_all_job"><a href="#">See All Jobs <i
                                                class="fas fa-long-arrow-alt-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest job wrapper end-->
    <!-- counter wrapper start-->
    <div class="counter_wrapper jb_cover">
        <div class="counter_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_mockup_design jb_cover">
                        <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                        <img src="{{url('public/main/images/')}}/mockup2.png" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_right_wrapper jb_cover">
                        <h1>Some Statistical Facts</h1>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"><span class="timer">2500</span>
                                    <p class="con2">happy customers </p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9425</span>
                                    <p class="con2">ticket solved</p>
                                </div>
                            </div>
                        </div>
                        <div class="counter_width">
                            <div class="counter_cntnt_box">

                                <div class="count-description"> <span class="timer">9</span><span>+</span>
                                    <p class="con2">average rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter wrapper end-->
    <!-- company Wrapper start -->
    <div class="top_company_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="top_hiring_cpmpany_heading jb_cover">
                        <div class="jb_heading_wraper left_jb_jeading">

                            <h3>Top Hiring Companies</h3>

                        </div>
                        <p>What do all consultants need? In short, trust. This is achieved with professional
                            presentation and the ability to communicate. Clearly with existing and potential clients.ll
                            consultants need? In short, trust. This is achieved with Whether you Whether you are an
                            accountant.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="top_company_slider_wrapper jb_cover">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="company_main_wrapper">
                                            <div class="company_img_wrapper">
                                                <img src="{{url('public/main/images/')}}/cmp1.png" alt="team_img1">
                                                <div class="btc_team_social_wrapper">
                                                    <h1>(usa)</h1>
                                                </div>
                                            </div>
                                            <div class="opening_job">
                                                <h1><a href="#">04 job open</a></h1>
                                            </div>
                                            <div class="company_img_cont_wrapper">
                                                <h4>Akshay INC.</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="company_main_wrapper">
                                            <div class="company_img_wrapper">
                                                <img src="{{url('public/main/images/')}}/cmp2.png" alt="team_img1">
                                                <div class="btc_team_social_wrapper">
                                                    <h1>(usa)</h1>
                                                </div>
                                            </div>
                                            <div class="opening_job">
                                                <h1><a href="#">25 job open</a></h1>
                                            </div>
                                            <div class="company_img_cont_wrapper">
                                                <h4>burger patty</h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="company_main_wrapper">
                                            <div class="company_img_wrapper">
                                                <img src="{{url('public/main/images/')}}/cmp3.png" alt="team_img1">
                                                <div class="btc_team_social_wrapper">
                                                    <h1>(usa)</h1>
                                                </div>
                                            </div>
                                            <div class="opening_job">
                                                <h1><a href="#">04 job open</a></h1>
                                            </div>
                                            <div class="company_img_cont_wrapper">
                                                <h4>Akshay INC.</h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="company_main_wrapper">
                                            <div class="company_img_wrapper">
                                                <img src="{{url('public/main/images/')}}/cmp4.png" alt="team_img1">
                                                <div class="btc_team_social_wrapper">
                                                    <h1>(usa)</h1>
                                                </div>
                                            </div>
                                            <div class="opening_job">
                                                <h1><a href="#">25 job open</a></h1>
                                            </div>
                                            <div class="company_img_cont_wrapper">
                                                <h4>burger patty</h4>

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
    <!-- top company Wrapper End -->
    <!-- pricing plan wrapper start-->
    <div class="pricing_plan_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>choose pricing plan</h3>

                        <p>Your next level Product developemnt company assets</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper jb_cover">
                        <h1>basic plan</h1>
                        <div class="main_pdet jb_cover">

                            <h2><span class="dollarr"> $ </span> 29 </h2> <span class="monthly"> / per month</span>
                        </div>
                        <ul class="pricing_list22">
                            <li>5 Jobs Posting
                            </li>
                            <li>2 Featured jobs
                            </li>
                            <li>
                                1 Renew Jobs

                            </li>
                            <li>10 Days Duration
                            </li>
                            <li>Email Alert

                            </li>

                        </ul>
                        <a href="#" class="price_btn">select plan</a>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper jb_cover">
                        <h1>premium plan</h1>
                        <div class="main_pdet jb_cover">

                            <h2><span class="dollarr"> $ </span> 49 </h2><span class="monthly"> / per month</span>
                        </div>
                        <ul class="pricing_list22">
                            <li>5 Jobs Posting
                            </li>
                            <li>2 Featured jobs
                            </li>
                            <li>
                                1 Renew Jobs

                            </li>
                            <li>10 Days Duration
                            </li>
                            <li>Email Alert

                            </li>

                        </ul>
                        <a href="#" class="price_btn">select plan</a>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper jb_cover">
                        <h1>advanced plan</h1>
                        <div class="main_pdet jb_cover">

                            <h2><span class="dollarr"> $ </span> 69 </h2> <span class="monthly"> / per month</span>
                        </div>
                        <ul class="pricing_list22">
                            <li>5 Jobs Posting
                            </li>
                            <li>2 Featured jobs
                            </li>
                            <li>
                                1 Renew Jobs

                            </li>
                            <li>10 Days Duration
                            </li>
                            <li>Email Alert

                            </li>

                        </ul>
                        <a href="#" class="price_btn">select plan</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- pricing plan wrapper end-->
    <!-- job rivew wrapper start-->
    <div class="job_rivew_wrapper jb_cover">
        <div class="job_rivew_img">
            <img src="{{url('public/main/images/')}}/mockup3.png" alt="img">
        </div>
        <div class="job_rivew_testimonial">
            <div class="jb_heading_wraper left_rivew_heading">

                <h3>our job rivew</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    <br> sed do eiusmod tempor incididunt </p>
            </div>
            <div class="rivew_testimonial_slider jb_cover">
                <div class="owl-carousel owl-theme">
                    <div class="item">

                        <div class="jb_saying_content_wrapper jb_cover">
                            <div class="saying_img">
                                <img src="{{url('public/main/images/')}}/testi.png" alt="img">
                            </div>
                            <div class="rating_star"><i class="flaticon-star-1"></i><i class="flaticon-star-1"></i><i
                                    class="flaticon-star-1"></i><i class="flaticon-star"></i><i
                                    class="flaticon-star"></i></div>

                            <p>“ I don't always clap, but when I do, it'sbecause of Sella. We can't understandhow we've
                                been Sella. ”</p>
                            <div class="jb_saying_img_name">
                                <h1><a href="#">Marita Irene</a></h1>
                                <p>Support Manager @ Echo</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="jb_saying_content_wrapper jb_cover">
                            <div class="saying_img">
                                <img src="{{url('public/main/images/')}}/testi1.png" alt="img">
                            </div>
                            <div class="rating_star"><i class="flaticon-star-1"></i><i class="flaticon-star-1"></i><i
                                    class="flaticon-star-1"></i><i class="flaticon-star"></i><i
                                    class="flaticon-star"></i></div>
                            <p>“ I don't always clap, but when I do, it'sbecause of Sella. We can't understandhow we've
                                been Sella. ”</p>
                            <div class="jb_saying_img_name">
                                <h1><a href="#">Marita Irene</a></h1>
                                <p>Support Manager @ Echo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- job rivew wrapper end-->
    <!-- download app wrapper start-->
    <div class="download_wrapper jb_cover">
        <div class="counter_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_mockup_design jb_cover">
                        <div class="animation-circle-inverse2"><i></i><i></i><i></i></div>
                        <img src="{{url('public/main/images/')}}/mockup5.png" class="img-responsive" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="download_app_store jb_cover">
                        <h1>Download</h1>
                        <h2>Job Portal App Now!</h2>
                        <p>All it takes is 30 seconds to Download. Your Mobile App for Job
                            <br> Fast, Simple & Delightful.</p>
                        <div class="app_btn jb_cover">
                            <a href="#" class="ss_playstore"><span><i class="flaticon-android-logo"></i></span> Play
                                Store</a>
                            <a href="#" class="ss_appstore"><span><i class="flaticon-apple"></i></span> App Store</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download app wrapper end-->
    <!-- blog wrapper start-->
    <div class="blog_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">

                        <h3>from our blog</h3>

                        <p>Your next level Product developemnt company assets</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="blog_newsleeter jb_cover">
                        <h1>Request Call Back</h1>
                        <p>What do all consultants need? In short trust This is achieved with professional and the
                            ability to communicate. and the ability to communicate.</p>
                        <div class="contect_form3 blog_letter">

                            <input type="text" name="name" placeholder="how can we help ?">
                        </div>
                        <div class="contect_form3 blog_letter">

                            <input type="text" name="name" placeholder="your name">
                        </div>
                        <div class="contect_form3 blog_letter">

                            <input type="email" name="name" placeholder="your email">
                        </div>
                        <div class="header_btn search_btn submit_btn jb_cover">

                            <a href="#">submit</a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="our_blog_content jb_cover">
                                <div class="jb_cover">
                                    <img src="{{url('public/main/images/')}}/blog1.jpg" class="img-responsive" alt="img">
                                </div>
                                <div class="blog_content jb_cover">
                                    <p>FEb 19, 2019</p>
                                    <h4> <a href="#">Want to Be an Ace Designer? Try
                                            Travelling the World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="our_blog_content jb_cover">
                                <div class="jb_cover">
                                    <img src="{{url('public/main/images/')}}/blog2.jpg" class="img-responsive" alt="img">
                                </div>
                                <div class="blog_content jb_cover">
                                    <p>jan 19, 2019</p>
                                    <h4> <a href="#">Hey Seeker, It’s Time to Try
                                            Travelling the World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="accordion" role="tablist">
                                <h1>Frequently Asked Question?</h1>
                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading1">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                                role="button" aria-expanded="false" aria-controls="collapseTwo">
                                                Is there any auto-renew subscription?

                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="heading1"
                                        data-parent="#accordion" style="">
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>This is Photoshop's version of LoremProin gravida nibh vel velit
                                                    auctor Ipsum. Proin gravida nibh vel velit auctor aliquet....</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading2">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsethree"
                                                role="button" aria-expanded="false" aria-controls="collapsethree">
                                                How many sites can I use my themes on?

                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapsethree" class="collapse" role="tabpanel" aria-labelledby="heading2"
                                        data-parent="#accordion" style="">
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>This is Photoshop's version of LoremProin gravida nibh vel velit
                                                    auctor Ipsum. Proin gravida nibh vel velit auctor aliquet....</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- blog wrapper end-->
    @include('main.layout.footer')
    @include('main.layout.scripts')
</body>
</html>
