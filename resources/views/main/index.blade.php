@include('main.layout.header')
<body>
    @include('main.layout.navbar')
    <div class="jb_banner_wrapper jb_cover">
        <div class="jb_banner_left">
            <h1>@lang('main/index.IndexTopH')</h1>
            <p>@lang('main/index.IndexTopP')</p>
            @php
            $SearchCategories = App\Category::orderBy('id' , 'desc')->get();
            $SearchCites = App\City::orderBy('id' , 'desc')->get();
            @endphp
            <form action="{{route('search')}}" method="get">
                <div class="contect_form3">
                    <input type="text" name="query" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                </div>
                <div class="select_box">
                    <i class="flaticon-map"></i>
                    <select name="city">
                        <option>select location</option>
                        @forelse ($SearchCites as $SearchCity)
                        <option value="{{$SearchCity->id}}">{{$SearchCity->name}}</option>
                        @empty
                        <option value="">null</option>
                        @endforelse
                    </select>
                </div>
                <div class="select_box select_box_2">
                    <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                    <select name="category">
                        <option>category</option>
                        @forelse ($SearchCategories as $SearchCategory)
                        <option value="{{$SearchCategory->id}}">{{$SearchCategory->title}}</option>
                        @empty
                        <option value="">null</option>
                        @endforelse
                    </select>
                </div>
                <div class="select_box">
                    <i class="flaticon-statistics"></i>
                    <select name="type">
                        <option>type</option>
                        <option value="full">full time</option>
                        <option value="part">part time</option>
                        <option value="rotation">rotation</option>
                    </select>
                </div>
                <div class="header_btn search_btn jb_cover">
                    <button type="submit"><i class="fas fa-search"></i> Search</button>
                </div>
            </form>
        </div>
        <div class="jb_banner_right d-none d-sm-none d-md-none d-lg-none d-xl-block">
        </div>
    </div>
    <!-- job banner wrapper end-->
    <!-- job category wrapper start-->
    <div class="jb_category_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">
                        <h3>@lang('main/index.IndexBrowseByCategoryH')</h3>
                        <p>@lang('main/index.IndexBrowseByCategoryP')</p>
                    </div>
                </div>
                @forelse($Categories as $Category)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="jb_browse_category jb_cover">
                        <a href="{{route('search' , ['category' , $Category->id])}}">
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
            <a href="{{route('categories')}}">load more</a>
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
                        <h3>About Us</h3>
                    </div>
                    <div class="grow_next_text jb_cover">
                        <p>
                          Over the past 30 years, armed conflicts and sectarian violence have ravaged Iraq. Hundreds of thousands of casualties left the widowed women to be the breadwinner for the family. In this context, especially in the southern
                            area of Iraq, many young females and children dropped out of school.<br>
                             Illiterate women are estimated to be 26.4% comparing with men which reached up to 11.6%. The illiteracy is a main factor for pushing women to early
                            marriage or following negative coping strategies like begging.
                        </p>
                        <div class="header_btn search_btn jb_cover">
                            <a href="{{route('about')}}">discover more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="grow_next_img jb_cover">
                        <img src="{{url('public/main/images/')}}/Picture2.png" class="img-responsive" alt="img" width="100%">
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
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="tab-content">
                                <div id="home" class="tab-pane active">
                                    @forelse($TopSixJobs as $Job)
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="{{route('job' , [$Job->id , $Job->title])}}"><img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}">
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
                                    <span class="se_all_job"><a href="{{route('jobs')}}">See All Jobs <i class="fas fa-long-arrow-alt-right"></i></a></span>
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
    @include('main.layout.counter')
    <!-- counter wrapper end-->
    <!-- blog wrapper start-->
    <div class="blog_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">
                        <h3>@lang('main/index.IndexFromBlogH')</h3>
                        <p>@lang('main/index.IndexFromBlogP')</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="blog_newsleeter jb_cover">
                        <h1>@lang('main/index.IndexFeedbackH')</h1>
                        <p>@lang('main/index.IndexFeedbackP')</p>
                        <form action="{{route('contact.quick')}}" method="post">
                            @csrf
                            <div class="contect_form3 blog_letter">
                                <input type="text" required name="title" placeholder="Your Message ?">
                            </div>
                            <div class="contect_form3 blog_letter">
                                <input type="text" required name="name" placeholder="your name">
                            </div>
                            <div class="contect_form3 blog_letter">
                                <input type="email" required name="email" placeholder="your email">
                            </div>
                            <div class="header_btn search_btn submit_btn jb_cover">
                                <button type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        @forelse($TopBlogPosts as $BlogPost)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="our_blog_content jb_cover">
                                <div class="jb_cover">
                                    <img src="{{$BlogPost->post_image}}" width="350" height="200" class="img-responsive" alt="{{$BlogPost->title}}">
                                </div>
                                <div class="blog_content jb_cover">
                                    <p>{{$BlogPost->created_at->format('M d Y')}}</p>
                                    <h4> <a href="{{route('blog.post' , $BlogPost->slug)}}">{{$BlogPost->title}}</a></h4>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>Stay Tuned For Our Blog Posts !</p>
                        @endforelse
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="accordion" role="tablist">
                                <h1>@lang('main/index.IndexFAQ')</h1>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading1">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                                How can I Register as a User?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
                                                <p>This is Photoshop's version of LoremProin gravida nibh vel velitauctor Ipsum. Proin gravida nibh vel velit auctor aliquet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading2">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsethree" role="button" aria-expanded="false" aria-controls="collapsethree">
                                                How can I Apply For A Job?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsethree" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
                                                <p>This is Photoshop's version of LoremProin gravida nibh vel velit auctor Ipsum. Proin gravida nibh vel velit auctor aliquet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('main.layout.cta')
            </div>
        </div>
    </div>
    <!-- blog wrapper end-->
    @include('main.layout.footer')
    @include('main.layout.scripts')
</body>

</html>
