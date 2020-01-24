@include('main.layout.header' , ['PageTitle' => $Job->title . " in " . $Job->City->name])
<body>
    @include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">
                        <h1>{{$Job->title}}</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>job</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job single wrapper start-->
    <div class="job_single_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs overview</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jb_job_overview_img">
                                <img src="{{$Job->Company->profile_image}}" width="92" height="92" alt="post_img" />
                                <h4>{{$Job->position}} @if($Job->experience)({{$Job->experience}} Yrs Exp.)@endif</h4>
                                <p>{{$Job->Company->name}}</p>
                                <ul class="job_single_lists">
                                    <li>
                                        <div class="job_adds_right">
                                            <a href="#!"><i class="far fa-heart"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header_btn search_btn part_time_btn jb_cover">
                                            <a href="#">{{$Job->type}}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Date Posted:</li>
                                        <li>{{$Job->created_at->format('d M Y')}}</li>
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
                                        <li>{{$Job->City->name}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Job Title:</li>
                                        <li>{{$Job->position}}</li>
                                    </ul>
                                </div>
                            </div>
                            @if($Job->age)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Minimum Age:</li>
                                        <li>{{$Job->age}}</li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-money-bill-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Salary:</li>
                                        @if($Job->salary)
                                        <li>{{$Job->salary}} IQD / Month</li>
                                        @else 
                                        <li>After Metting</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-th-large"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Category:</li>
                                        <li>{{$Job->Category->title}}</li>
                                    </ul>
                                </div>
                            </div>
                            @if($Job->experience)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Experience:</li>
                                        <li>{{$Job->experience}}+ Years Experience</li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @guest 
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a href="{{route('login')}}" data-toggle="modal" data-target="#myModal41">login to apply !</a>
                            </div>
                            @endguest
                            @auth
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a href="#" data-toggle="modal" data-target="#myModal41">apply now !</a>
                            </div>
                            <div class="modal fade apply_job_popup" id="myModal41" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                <div class="apply_job jb_cover">
                                                    <h1>apply for this job :</h1>
                                                    <form action="{{route('apply.do' , [$Job->id , auth()->user()->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="search_alert_box jb_cover">
                                                        <div class="apply_job_form">
                                                            <input type="text" name="name" value="{{auth()->user()->name}}" placeholder="full name">
                                                        </div>
                                                        <div class="apply_job_form">
                                                            <input type="text" name="email" value="{{auth()->user()->email}}" placeholder="Enter Your Email">
                                                        </div>
                                                        <div class="apply_job_form">
                                                            <textarea class="form-control" name="message" placeholder="Message">{{old('message')}}</textarea>
                                                        </div>
                                                        <div class="resume_optional jb_cover">
                                                            <p>resume (optional)</p>
                                                            <div class="width_50">
                                                                <input type="file" name="resume" id="input-file-now-custom-27" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
                                                            </div>
                                                            <p class="word_file"> microsoft word or pdf file only (5mb)</p>
                                                        </div>

                                                    </div>
                                                    <div class="header_btn search_btn applt_pop_btn jb_cover">
                                                       <button type="submit">Apply</button>
                                                    </div>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">Job Description</h2>
                            {!!$Job->description!!}
                        </div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">Responsibilities</h2>
                            {!! $Job->responses !!}
                        </div>
                        <div class="jp_job_res jb_cover minimum_cover">
                            <h2 class="job_description_heading">Cretieria</h2>
                            {!! $Job->criteria !!}
                        </div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">how to apply</h2>
                            <p>What Should We Put Here ?</p>
                        </div>
                        <div class="jp_job_res jp_listing_left_wrapper jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li>share :</li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related_job_wrapper jb_cover">
                        <h1 class="related_job">related job</h1>
                        <div class="related_product_job jb_cover">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    @forelse($RealtedJobs1 as $RelatedJob)
                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="{{$RelatedJob->Company->profile_image}}" alt="{{$RelatedJob->Company->name}}" />
                                                    <br> <span>{{$RelatedJob->Company->name}}</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="{{route('job' , $RelatedJob->id)}}">{{$RelatedJob->title}}</a></h4>
                                                    <ul>
                                                        @if($RelatedJob->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$RelatedJob->salary}} IQD / Month</li>@endif
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$RelatedJob->City->name}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">{{$RelatedJob->type}}</a></li>
                                                        <li><a href="job_single.html">Apply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <p>Stay Tuned ! Coming Soon</p>
                                    @endforelse
                                </div>
                                <div class="item">
                                    @forelse($RealtedJobs2 as $RelatedJob)
                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="{{$RelatedJob->Company->profile_image}}" alt="{{$RelatedJob->Company->name}}" />
                                                    <br> <span>{{$RelatedJob->Company->name}}</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="{{route('job' , $RelatedJob->id)}}">{{$RelatedJob->title}}</a></h4>
                                                    <ul>
                                                        @if($RelatedJob->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$RelatedJob->salary}} IQD / Month</li>@endif
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$RelatedJob->City->name}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li>
                                                            <div class="job_adds_right">
                                                                <a href="#!"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                        <li><a href="job_single.html">{{$RelatedJob->type}}</a></li>
                                                        <li><a href="job_single.html">Apply</a></li>
                                                    </ul>
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
            </div>
        </div>
    </div>
    <!--job single wrapper end-->
    <!-- news app wrapper start-->
    @include('main.layout.cta')
    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    @include('main.layout.footer')
    <!-- footer Wrapper End -->
    <!--custom js files-->
    @include('main.layout.scripts')
    <!-- custom js-->
</body>
</html>