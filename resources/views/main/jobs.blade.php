@include('main.layout.header' , ['PageTitle' => 'Jobs'])
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
                        <h1>job listing</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>job listing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  category</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            @forelse($Categories as $Category)
                            <p class="job_field">
                                <input type="checkbox" value="{{$Category->id}}" id="{{$Category->id}}" name="cb">
                                <label for="{{$Category->id}}">{{$Category->title}}<span> ({{count($Category->Jobs)}})</span></label>
                            </p>
                            @empty
                            <p class="job_field">
                                <input type="checkbox" id="all" name="1">
                                <label for="all">All<span> ({{count($Jobs)}})</span></label>
                            </p>
                            @endforelse
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  location</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                          @forelse($Cites as $City)
                            <p class="job_field"><input type="checkbox" id="{{$City->id}}" name="cb"><label for="c011">Jobs in {{$City->name}}<span> ({{count($City->Job)}})</span></label></p>
                          @empty
                            <p class="job_field">No Cites Yet</p>
                          @endforelse
                        </div>
                    </div>

                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>salary (IQD)</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            <div class="widget price-range">
                                <ul>
                                    <li class="range">
                                        <div id="range-price" class="range-box"></div>
                                        <input type="text" id="price" class="price-box" readonly/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div class="filter-area jb_cover">
                            <div class="list-grid">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#grid"> <i class="flaticon-four-grid-layout-design-interface-symbol"></i></a></li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#list"><i class="flaticon-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content btc_shop_index_content_tabs_main jb_cover">
                            <div id="grid" class="tab-pane active">
                                <div class="row">
                                    @forelse($Jobs as $Job)
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="job_listing_left_fullwidth job_listing_grid_wrapper jb_cover">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}" width="60" height="60" />
                                                        <br> <span>{{$Job->Company->name}}</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="{{route('job' , [$Job->id])}}">{{$Job->title}}, ({{$Job->experience}}) Years</a></h4>
                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; {{$Job->salary}} IQ / Month</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->address}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper jb_cover">
                                                        <ul>
                                                          @auth
                                                            @php
                                                              $isLikedByUser = \App\Like::where([
                                                                ['item_type' , 'job'],
                                                                ['item_id' , $Job->id],
                                                                ['user_id' , auth()->user()->id],
                                                              ])->count();
                                                            @endphp
                                                            <li>
                                                              <div class="job_adds_right @if($isLikedByUser > 0) change change22 @endif">
                                                                    <a class="likeButton" href="javascript:;" item-type="job" item-owner={{$Job->Company->id}} action-route="{{route('like.post')}}" item-id="{{$Job->id}}"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                          @endauth
                                                            <li><a href="#">{{$Job->type}}</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal01">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal01" role="dialog">
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
                                                                                        <input type="file" id="input-file-now-custom-01" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
                                                                                    </div>
                                                                                    <p class="word_file"> microsoft word or pdf file only (5mb)</p>
                                                                                </div>

                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">

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
                                    <p>No Jobs Yet</p>
                                    @endforelse
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row">
                                    @forelse($Jobs as $Job)
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_listing_left_fullwidth jb_cover">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="jp_job_post_side_img">
                                                        <img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}}}" width="60" height="60" />
                                                        <br> <span>{{$Job->Company->name}}</span>
                                                    </div>
                                                    <div class="jp_job_post_right_cont">
                                                        <h4><a href="{{route('job' , [$Job->id])}}">{{$Job->title}}, ({{$Job->experience}} +)</a></h4>

                                                        <ul>
                                                            <li><i class="flaticon-cash"></i>&nbsp; {{$Job->salary}} IQD / Month</li>
                                                            <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->address}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="jp_job_post_right_btn_wrapper">
                                                        <ul>
                                                          @auth
                                                            @php
                                                              $isLikedByUser = \App\Like::where([
                                                                ['item_type' , 'job'],
                                                                ['item_id' , $Job->id],
                                                                ['user_id' , auth()->user()->id],
                                                              ])->count();

                                                            @endphp

                                                            <li>
                                                                <div class="job_adds_right @if($isLikedByUser > 0) change change22 @endif">
                                                                    <a class="likeButton" href="javascript:;" item-type="job" item-owner={{$Job->Company->id}} action-route="{{route('like.post')}}" item-id="{{$Job->id}}"><i class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                          @endauth
                                                            <li><a href="job_single.html">{{$Job->type}}</a></li>
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal1">apply</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="modal fade apply_job_popup" id="myModal1" role="dialog">
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
                                                                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-height="90" /><span class="post_photo">upload resume</span>
                                                                                    </div>
                                                                                    <p class="word_file"> microsoft word or pdf file only (5mb)</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="header_btn search_btn applt_pop_btn jb_cover">
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
                                    <p>No Resultes</p>
                                    @endforelse
                                </div>
                            </div>
                            <div class="blog_pagination_section jb_cover">
                                <ul>
                                    <li>
                                        <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                                    </li>
                                    <li><a href="#">1</a>
                                    </li>
                                    <li class="third_pagger"><a href="#">2</a>
                                    </li>
                                    <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                                    </li>
                                    <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                                    </li>

                                    <li>
                                        <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  category</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c1111" name="cb">
                                <label for="c1111">graphic designer<span> (155)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c22" name="cb">
                                <label for="c22">
                                    Engineering Jobs <span> (514)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c33" name="cb">
                                <label for="c33">Mainframe Jobs <span> (554)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c44" name="cb">
                                <label for="c44">Legal Jobs <span> (457)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c55" name="cb">
                                <label for="c55">IT Jobs <span> (254)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c66" name="cb">
                                <label for="c66">PSU Jobs <span> (1054)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c77" name="cb">
                                <label for="c77">government Jobs <span> (1284)</span> </label>
                            </p>
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by  location</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                          @forelse($Cites as $City)
                            <p class="job_field"><input type="checkbox" id="{{$City->id}}" name="cb"><label for="c011">Jobs in {{$City->name}}<span> ({{count($City->Job)}})</span></label></p>
                          @empty
                            <p class="job_field">No Cites Yet</p>
                          @endforelse
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>your skill's</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <p class="job_field">
                                <input type="checkbox" id="c111" name="cb">
                                <label for="c111">javascript
                                    <span> (124)</span></label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c121" name="cb">
                                <label for="c121">
                                    HTML5
                                    <span> (42)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c131" name="cb">
                                <label for="c131">CSS
                                    <span>(158)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c141" name="cb">
                                <label for="c141">marketing
                                    <span> (47)</span>
                                </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c151" name="cb">
                                <label for="c151">web design <span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c161" name="cb">
                                <label for="c161">PHP<span> (124)</span> </label>
                            </p>
                            <p class="job_field">
                                <input type="checkbox" id="c171" name="cb">
                                <label for="c171">social media<span> (124)</span> </label>
                            </p>

                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>salary</h1>
                        </div>

                        <div class="category_jobbox jb_cover">
                            <div class="widget price-range">
                                <ul>
                                    <li class="range">
                                        <div id="responsive_range_price" class="range-box"></div>

                                        <input type="text" id="responsive_price" class="price-box" readonly/>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="jp_add_resume_wrapper jb_cover">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="images/logo2.png" alt="logo" />
                            <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                            <div class="width_50">
                                <input type="file" id="input-file-now-custom-203" class="dropify" data-height="90" /><span class="post_photo">add resume</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--job listing filter  wrapper end-->
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
