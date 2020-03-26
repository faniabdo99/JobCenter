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
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>job listing</h1>
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
                            <h1>jobs by category</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            @forelse($Categories as $Category)
                            <p class="job_field"><a href="{{route('search' , ['category' , $Category->id])}}">{{$Category->title}}<span> ({{count($Category->Jobs)}})</span></a></p>
                            @empty
                            <p>No Categories Here</p>
                            @endforelse
                            <div class="seeMore"><a href="#">view all categories</a></div>
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>jobs by location</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            @forelse($Cites as $City)
                            <p class="job_field"><a href="{{route('search' , ['city' , $City->id])}}">{{$City->name}}<span> ({{count($City->Job)}})</span></a></p>
                            @empty
                            <p>No Cities Here</p>
                            @endforelse
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
                                                                    <a class="likeButton" href="javascript:;" item-type="job" item-owner={{$Job->Company->id}} action-route="{{route('like.post')}}" item-id="{{$Job->id}}"><i
                                                                          class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            @endauth
                                                            <li><a href="#">{{$Job->type}}</a></li>
                                                            @auth
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal-g-{{$Job->id}}">apply</a></li>
                                                          @endauth
                                                        </ul>
                                                    </div>
                                                    @auth
                                                    <div class="modal fade apply_job_popup" id="myModal-g-{{$Job->id}}" role="dialog">
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
                                                                    <a class="likeButton" href="javascript:;" item-type="job" item-owner={{$Job->Company->id}} action-route="{{route('like.post')}}" item-id="{{$Job->id}}"><i
                                                                          class="far fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            @endauth
                                                            <li><a href="job_single.html">{{$Job->type}}</a></li>
                                                            @auth
                                                            <li> <a href="#" data-toggle="modal" data-target="#myModal{{$Job->id}}">apply</a></li>
                                                            @endauth
                                                        </ul>
                                                    </div>
                                                    @auth
                                                    <div class="modal fade apply_job_popup" id="myModal{{$Job->id}}" role="dialog">
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
                                    </div>
                                    @empty
                                    <p>No Resultes</p>
                                    @endforelse
                                </div>
                            </div>
                            {{$Jobs->links('main.layout.pagenation')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('main.layout.cta')
    @include('main.layout.footer')
    @include('main.layout.scripts')
</body>
</html>
