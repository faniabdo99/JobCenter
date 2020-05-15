@include('main.layout.header' , ['PageTitle' => 'Find Jobs Online'])
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
                    <input type="text" name="query" placeholder="@lang('layout/forms.IndexSearchQuery')">
                </div>
                <div class="select_box">
                    <i class="flaticon-map"></i>
                    <select name="city">
                        <option value="">@lang('layout/parts.Location')</option>
                        @forelse ($SearchCites as $SearchCity)
                        <option value="{{$SearchCity->id}}">{{$SearchCity->name}}</option>
                        @empty
                        <option value="">@lang('layout/parts.NoData')</option>
                        @endforelse
                    </select>
                </div>
                <div class="select_box select_box_2">
                    <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                    <select name="category">
                        <option value="">@lang('layout/parts.Category')</option>
                        @forelse ($SearchCategories as $SearchCategory)
                        <option value="{{$SearchCategory->id}}">{{$SearchCategory->title}}</option>
                        @empty
                        <option value="">@lang('layout/parts.NoData')</option>
                        @endforelse
                    </select>
                </div>
                <div class="select_box">
                    <i class="flaticon-statistics"></i>
                    <select name="type">
                        <option value="">@lang('layout/parts.JobType')</option>
                        <option value="full">@lang('layout/parts.FullTime')</option>
                        <option value="part">@lang('layout/parts.PartTime')</option>
                        <option value="rotation">@lang('layout/parts.Rotation')</option>
                        <option value="temporary">@lang('layout/parts.Temporary')</option>
                    </select>
                </div>
                <div class="header_btn search_btn jb_cover">
                    <button type="submit"><i class="fas fa-search"></i>@lang('layout/parts.Search')</button>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
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
                            <p>({{count($Category->Jobs)}} @lang('layout/parts.Jobs'))</p>
                        </a>
                    </div>
                </div>
                @empty
                <p>@lang('layout/parts.NoData')</p>
                @endforelse
            </div>
        </div>
        <div class="header_btn search_btn load_btn jb_cover">
            <a href="{{route('categories')}}">@lang('layout/parts.Categories')</a>
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
                        <h3>@lang('layout/parts.About')</h3>
                    </div>
                    <div class="grow_next_text jb_cover">
                        <p>
                          @lang('main/about.AboutDesc')
                        </p>
                        <div class="header_btn search_btn jb_cover">
                            <a href="{{route('about')}}">@lang('layout/parts.DiscoverMore')</a>
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
                                <h1>@lang('layout/parts.LatestJobs')</h1>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="tab-content">
                                <div id="home" class="tab-pane active">
                                    @forelse($TopSixJobs as $Job)
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="{{route('job' , [$Job->id , $Job->slug])}}"><img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}">
                                                <h6>{{$Job->title}}</h6>
                                            </a>
                                        </div>
                                        <div class="job_list_next">
                                            <p>{{$Job->Company->name}}</p>
                                        </div>
                                        <div class="job_list_next">
                                            <p>{{$Job->JobType}}</p>
                                        </div>
                                        <div class="job_list_next">
                                            <p>{{$Job->City->name}}</p>
                                        </div>
                                        @if($Job->Salary)
                                        <div class="job_list_next">
                                            <p>{{$Job->Salary}} @lang('layout/parts.IQD') / @lang('layout/parts.Month')</p>
                                        </div>
                                        @endif
                                    </div>
                                    @empty
                                      <p>@lang('layout/parts.NoData')</p>
                                    @endforelse
                                    <span class="se_all_job"><a href="{{route('jobs')}}">@lang('layout/parts.ViewAllJobs') <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('main.layout.counter')
    <div class="blog_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
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
                                <input type="text" required name="title" placeholder="@lang('layout/forms.MessagePH')">
                            </div>
                            <div class="contect_form3 blog_letter">
                                <input type="text" required name="name" placeholder="@lang('layout/forms.NamePH')">
                            </div>
                            <div class="contect_form3 blog_letter">
                                <input type="email" required name="email" placeholder="@lang('layout/forms.EmailPH')">
                            </div>
                            <div class="header_btn search_btn submit_btn jb_cover">
                                <button type="submit">@lang('layout/forms.Submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        @forelse($TopBlogPosts as $BlogPost)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="our_blog_content jb_cover">
                                <div class="jb_cover jb_background_img" style="background-image:url({{$BlogPost->post_image}})"></div>
                                <div class="blog_content jb_cover">
                                    <p>{{$BlogPost->created_at->format('M d Y')}}</p>
                                    <h4> <a href="{{route('blog.post' , $BlogPost->slug)}}">{{$BlogPost->title}}</a></h4>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>@lang('layout/parts.NoData')</p>
                        @endforelse
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="accordion" role="tablist">
                                <h1>@lang('main/index.IndexFAQ')</h1>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading1">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">

ماهي خطوات انشاء حساب للموظف؟                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
<p>يمكن اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/حساب_للموظف.pdf/"> الرابط</a></p>                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading2">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsethree" role="button" aria-expanded="false" aria-controls="collapsethree">
كيف يمكنني التقديم على وظيفة؟                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsethree" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
                                               <p>يمكنك اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/تقدم_موظف.pdf/"> الرابط</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading3">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsefour" role="button" aria-expanded="false" aria-controls="collapsethree">
ماهي خطوات انشاء حساب للشركات؟
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
<p>يمكن اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/حساب_للشركة.pdf/"> الرابط</a></p>                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading4">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsefive" role="button" aria-expanded="false" aria-controls="collapsethree">
كيف يمكن للشركة نشر وظيفة جديدة؟
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
<p>يمكن اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/نشر_وظيفة.pdf/"> الرابط</a></p>                                            </div>
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
