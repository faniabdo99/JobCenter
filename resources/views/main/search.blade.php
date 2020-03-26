@include('main.layout.header' , ['PageTitle' => 'Search'])

<body>
    @include('main.layout.navbar')
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>Search</h1>
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
                            @forelse($Cities as $City)
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
                            <form action="{{route('search')}}" method="get">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <div class="contect_form3">
                                        <input type="text" value="{{$Query}}" name="query" placeholder="Enter Search Query Here">
                                    </div>
                                    <div class="header_btn search_btn">
                <button type="submit" style="float:right"><i class="fas fa-search"></i> Search</button>
            </div>
                                </div>
                            </form>
                        </div>
                        <div id="list" class="tab-pane active">
                            <div class="row">
                              @forelse($Resultes as $Resulte)
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_listing_left_fullwidth jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img width="60" height="60" src="{{$Resulte->Company->profile_image}}" alt="{{$Resulte->Company->name}}" />
                                                    <br> <span>{{$Resulte->Company->name}}</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="{{route('job' , $Resulte->id)}}">{{$Resulte->title}}</a></h4>
                                                    <ul>
                                                        @if($Resulte->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Resulte->salary}} IQD/Month</li>@endif
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Resulte->City->name}}</li>
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
                                                            ['item_id' , $Resulte->id],
                                                            ['user_id' , auth()->user()->id],
                                                          ])->count();
                                                        @endphp
                                                        <li>
                                                          <div class="job_adds_right @if($isLikedByUser > 0) change change22 @endif">
                                                                <a class="likeButton" href="javascript:;" item-type="job" item-owner={{$Resulte->Company->id}} action-route="{{route('like.post')}}" item-id="{{$Resulte->id}}"><i class="far fa-heart"></i></a>
                                                            </div>
                                                        </li>
                                                      @endauth
                                                        <li><a href="{{route('job' , $Resulte->id)}}">{{$Resulte->type}}</a></li>
                                                        @auth
                                                        <li> <a href="#" data-toggle="modal" data-target="#myModal{{$Resulte->id}}">apply</a></li>
                                                      @endauth
                                                    </ul>
                                                </div>
                                                @auth
                                                <div class="modal fade apply_job_popup" id="myModal{{$Resulte->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                                    <div class="apply_job jb_cover">
                                                                        <h1>apply for this job :</h1>
                                                                        <form action="{{route('apply.do' , [$Resulte->id , auth()->user()->id])}}" method="post" enctype="multipart/form-data">
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
                                <p>No Resultes Yet in <b>{{$Query ?? ''}}</b></p>
                              @endforelse
                            </div>
                        </div>
                        {{$Resultes->links('main.layout.pagenation')}}
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
