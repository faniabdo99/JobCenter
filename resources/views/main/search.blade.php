@include('main.layout.header' , ['PageTitle' => __('layout/titles.Search')])
<body>
    @include('main.layout.navbar')
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>@lang('main/search.SearchH')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="job_filter_listing_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>@lang('main/categories.JobsByCategory')</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            @forelse($Categories as $Category)
                            <p class="job_field"><a href="{{route('search' , ['category' , $Category->id])}}">{{$Category->title}}<span> ({{count($Category->Jobs)}})</span></a></p>
                            @empty
                            <p>@lang('layout/parts.NoData')</p>
                            @endforelse
                            <div class="seeMore"><a href="{{route('categories')}}">@lang('main/jobs.ViewAllCategories')</a></div>
                        </div>

                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>@lang('main/jobs.JobsByLocation')</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            @forelse($Cities as $City)
                            <p class="job_field"><a href="{{route('search' , ['city' , $City->id])}}">{{$City->name}}<span> ({{count($City->Job)}})</span></a></p>
                            @empty
                            <p>@lang('layout/parts.NoData')</p>
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
                                        <input type="text" value="{{$Query}}" name="query" placeholder="@lang('main/search.SearchPH')">
                                    </div>
                                    <div class="header_btn search_btn">
                                        <button type="submit" style="float:right"><i class="fas fa-search"></i> @lang('layout/parts.Search')</button>
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
                                                        @if($Resulte->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Resulte->salary}} @lang('layout/parts.IQD') / @lang('layout/parts.Month')</li>
                                                            @endif
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
                                                          @if(auth()->user()->type == 'user')
                                                            <div class="job_adds_right @if($isLikedByUser > 0) change change22 @endif">
                                                                <a class="likeButton" href="javascript:;" item-type="job" item-owner={{$Resulte->Company->id}} action-route="{{route('like.post')}}" item-id="{{$Resulte->id}}"><i
                                                                      class="far fa-heart"></i></a>
                                                            </div>
                                                          @endif
                                                        </li>
                                                        @endauth
                                                        <li><a href="{{route('job' , $Resulte->id)}}">{{$Resulte->JobType}}</a></li>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p>@lang('layout/parts.NoData') <b>{{$Query ?? ''}}</b></p>
                                @endforelse
                            </div>
                        </div>
                        {{$Resultes->links('main.layout.pagenation')}}
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
