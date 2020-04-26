@include('main.layout.header' , ['PageTitle' => $Job->title . " ".__('layout/parts.In')." " . $Job->City->name])
<body>
    @include('main.layout.navbar')
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>{{$Job->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="job_single_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>@lang('main/job.JobOverview')</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jb_job_overview_img">
                                <img src="{{$Job->Company->profile_image}}" width="92" height="92" alt="post_img" />
                                <h4>{{$Job->position}} @if($Job->experience)({{$Job->Exp}})@endif</h4>
                                <p>{{$Job->Company->name}}</p>
                                <ul class="job_single_lists">
                                  @auth
                                    @if(auth()->user()->type == 'user')
                                    @php
                                    $isLikedByUser = \App\Like::where([
                                      ['item_type' , 'job'],
                                      ['item_id' , $Job->id],
                                      ['user_id' , auth()->user()->id],
                                    ])->count();
                                    if($isLikedByUser > 0){
                                      $Liked = 'change change22';
                                    }
                                    @endphp
                                    <li>
                                        <div class="job_adds_right {{$Liked ?? ''}}">
                                            <a class="likeButton" href="javascript:;" item-type="job" action-route="{{route('like.post')}}" item-id="{{$Job->id}}"><i class="far fa-heart"></i></a>
                                        </div>
                                    </li>
                                  @endif
                                  @endauth
                                    <li>
                                        <div class="header_btn search_btn part_time_btn jb_cover">
                                            <a href="#">{{$Job->JobType}}</a>
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
                                        <li>@lang('main/job.DatePosted'):</li>
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
                                        <li>@lang('main/job.JobPosition'):</li>
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
                                        <li>@lang('main/job.JobMinAge'):</li>
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
                                        <li>@lang('main/job.JobSalary'):</li>
                                        @if($Job->salary)
                                        <li>{{$Job->salary}} @lang('layout/parts.IQD') / @lang('layout/parts.Month')</li>
                                        @else
                                        <li>@lang('main/job.JobSalaryAfterMeeting')</li>
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
                                        <li>@lang('layout/parts.Category'):</li>
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
                                        <li>@lang('layout/parts.Experience'):</li>
                                        <li>{{$Job->Exp}}</li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @guest
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a href="{{route('login')}}" data-toggle="modal" data-target="#myModal41">@lang('main/job.JobLoginToApply')</a>
                            </div>
                            @endguest
                            @auth
                              @if(auth()->user()->type == 'user' && auth()->user()->active == 1)
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a href="#" data-toggle="modal" data-target="#myModal41">@lang('main/job.JobApplyNow')</a>
                            </div>
                            <div class="modal fade apply_job_popup" id="myModal41" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="apply_job jb_cover">
                                                    <h1>@lang('main/job.JobApplyH')</h1>
                                                    <form action="{{route('apply.do' , [$Job->id , auth()->user()->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="search_alert_box jb_cover">
                                                        <div class="apply_job_form">
                                                            <input type="text" name="name" value="{{auth()->user()->name}}" placeholder="@lang('layout/forms.NamePH')">
                                                        </div>
                                                        <div class="apply_job_form">
                                                            <input type="text" name="email" value="{{auth()->user()->email}}" placeholder="@lang('layout/forms.EmailPH')">
                                                        </div>
                                                        <div class="apply_job_form">
                                                            <input type="text" name="phone" value="{{auth()->user()->phone}}" placeholder="@lang('layout/forms.PhonePH')">
                                                        </div>
                                                        <div class="apply_job_form">
                                                            <textarea class="form-control" name="message" placeholder="@lang('layout/forms.MessagePH')">{{old('message')}}</textarea>
                                                        </div>
                                                        <div class="resume_optional jb_cover">
                                                            <p>@lang('layout/forms.ResumeL') (@lang('layout/parts.Optional'))</p>
                                                            <div class="width_50">
                                                                <input type="file" name="resume" id="input-file-now-custom-27" class="dropify" data-height="90" /><span class="post_photo">@lang('layout/parts.ResumeI')</span>
                                                            </div>
                                                            <p class="word_file">@lang('layout/parts.ResumeLimits')</p>
                                                        </div>
                                                    </div>
                                                    <div class="header_btn search_btn applt_pop_btn jb_cover">
                                                       <button  @if(auth()->user()->active != 1) disabled @endif type="submit">@lang('layout/parts.Apply')</button>
                                                    </div>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endif
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">@lang('main/job.JobJobDesc')</h2>
                            {!!$Job->description!!}
                        </div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">@lang('main/job.JobResponse')</h2>
                            {!! $Job->responses !!}
                        </div>
                        <div class="jp_job_res jb_cover minimum_cover">
                            <h2 class="job_description_heading">@lang('main/job.JobCriteria')</h2>
                            {!! $Job->criteria !!}
                        </div>
                        <div class="jp_job_res jp_listing_left_wrapper jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                              <b class="mb-1">@lang('layout/parts.Share')</b>
                              <div class="addthis_inline_share_toolbox"></div>
                            </div>
                        </div>
                    </div>
                    <div class="related_job_wrapper jb_cover">
                        <h1 class="related_job">@lang('main/job.JobRelatedJobs')</h1>
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
                                                    <h4><a href="{{route('job' , [$RelatedJob->id , $RelatedJob->slug])}}">{{$RelatedJob->title}}</a></h4>
                                                    <ul>
                                                        @if($RelatedJob->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$RelatedJob->salary}} @lang('layout/parts.IQD') / @lang('layout/parts.Month')</li>@endif
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$RelatedJob->City->name}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li></li>
                                                        <li></li>
                                                        <li><a href="#">{{$RelatedJob->JobType}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <p>@lang('layout/parts.NoData')</p>
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
                                                    <h4><a href="{{route('job' , [$RelatedJob->id , $RelatedJob->slug])}}">{{$RelatedJob->title}}</a></h4>
                                                    <ul>
                                                        @if($RelatedJob->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$RelatedJob->salary}} @lang('layout/parts.IQD') / @lang('layout/parts.Month')</li>@endif
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
                                                        <li><a href="#">{{$RelatedJob->JobType}}</a></li>
                                                        <li><a href="#">@lang('layout/parts.Apply')</a></li>
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
    @include('main.layout.cta')
    @include('main.layout.footer')
    @include('main.layout.scripts')
</body>
</html>
