@include('main.layout.header' , ['PageTitle' => $Company->name])
<body>
    @include('main.layout.navbar')
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-7">
                        <h1>{{$Company->name}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company_details_wrapper jb_cover" style="background-image:url('{{$Company->cover_image}}');"></div>
    <div class="webstrot_tech_detail jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_listing_left_fullwidth jb_cover" >
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                <div class="jp_job_post_side_img">
                                    <img width="92" height="92" src="{{$Company->profile_image}}" alt="{{$Company->name}}">
                                </div>
                                <div class="jp_job_post_right_cont web_text">
                                    <h4>{{$Company->name}}</h4>
                                    <ul>
                                        @if($Company->city_id)<li><i class="flaticon-location-pointer"></i>&nbsp; {{$Company->City->name}}</li>@endif
                                        @if($Company->category_id)<li><i class="fa fa-th-large"></i>&nbsp; {{$Company->Category->title}}</li>@endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                                <div class="jp_job_post_right_btn_wrapper web_single_btn">
                                    <ul>
                                        @auth
                                          @php
                                          $isLikedByUser = \App\Like::where([
                                            ['item_type' , 'company'],
                                            ['item_id' , $Company->id],
                                            ['user_id' , auth()->user()->id],
                                          ])->count();
                                          if($isLikedByUser > 0){
                                            $Liked = 'change change22';
                                          }
                                          @endphp
                                          <li>
                                              <div class="job_adds_right {{$Liked ?? ''}}">
                                                  <a class="likeButton" href="javascript:;" item-type="company" action-route="{{route('like.post')}}" item-id="{{$Company->id}}"><i class="far fa-heart"></i></a>
                                              </div>
                                          </li>
                                        @endauth
                                        <li><a href="#open_jobs">{{count($Company->Jobs)}} @lang('layout/parts.JobOpen')</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">@lang('layout/parts.About')</h2>
                            <p>{{$Company->description}}</p>
                        </div>
                        @if($Company->profile_pdf)
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading"> @lang('main/company.CompanyProfile')</h2>
                            <embed src="{{$Company->Profile}}" style="height:85vh;width:100%">
                        </div>
                        @endif
                    </div>
                    <div id="open_jobs" class="related_job_wrapper jb_cover">
                        <h1 class="related_job">@lang('layout/parts.JobOpen')</h1>
                        <div class="related_product_job cmpny_related_jobs jb_cover">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    @forelse($Jobs1 as $Job)
                                    <div class="job_listing_left_fullwidth cmpny_single_slidr jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}" />
                                                    <br> <span>{{$Job->Company->name}}</span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="{{route('job' , $Job->id)}}">{{$Job->title}}</a></h4>
                                                    <ul>
                                                        @if($Job->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Job->salary}} @lang('layout/parts.IQD') / @lang('layout/parts.Month')</li>@endif
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->City->name}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li></li>
                                                        <li><a href="javascript:;">{{$Job->JobType}}</a></li>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                                <div class="item">
                                @forelse($Jobs2 as $Job)
                                <div class="job_listing_left_fullwidth cmpny_single_slidr jb_cover">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img src="{{$Job->Company->profile_image}}" alt="{{$Job->Company->name}}" />
                                                <br> <span>{{$Job->Company->name}}</span>
                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4><a href="{{route('job' , $Job->id)}}">{{$Job->title}}</a></h4>
                                                <ul>
                                                    @if($Job->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Job->salary}} @lang('layout/parts.IQD') / @lang('layout/parts.Month')</li>@endif
                                                    <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->City->name}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <div class="jp_job_post_right_btn_wrapper">
                                                <ul>
                                                    <li></li>
                                                    <li><a href="javascript:;">{{$Job->JobType}}</a></li>
                                                    <li></li>
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
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>@lang('main/company.CompanyOverview')</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                          @if($Company->category_id)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>@lang('layout/parts.Category'):</li>
                                        <li>{{$Company->Category->title}}</li>
                                    </ul>
                                </div>
                            </div>
                          @endif
                          @if($Company->city_id || $Company->address)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                      <li>@lang('layout/parts.Location'):</li>
                                        @if($Company->address)
                                        <li>{{$Company->address}}<li>
                                        @elseif($Company->city_id)
                                        <li>{{$Company->City->name}}</li>
                                        @else

                                        @endif
                                    </ul>
                                </div>
                            </div>
                          @endif
                            @if($Company->phone)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>@lang('layout/parts.PhoneNumber'):</li>
                                        <li>{{$Company->phone}}</li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @auth
                            @if($Company->contact_email)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>@lang('layout/parts.Email'):</li>
                                        <li><a href="mailto:{{$Company->contact_email}}">{{$Company->contact_email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                          @endauth
                            @if($Company->company_size)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="flaticon-man-user"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>@lang('layout/parts.CompanySize'):</li>
                                        <li>{{$Company->company_size}}</li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @if($Company->website)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-globe-asia"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>@lang('layout/parts.Website'):</li>
                                        <li><a target="_blank" href="{{$Company->website}}">{{$Company->website}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @auth
                            @if($Company->profile_pdf)
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a target="_blank" href="{{$Company->Profile}}">@lang('main/company.DownloadProfile')</a>
                            </div>
                            @endif
                          @endauth
                        </div>
                    </div>
                    @if($Company->facebook || $Company->twitter || $Company->linkedin || $Company->google)
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>@lang('layout/parts.SocialProfile')</h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li></li>
                                    @if($Company->facebook)<li><a href="{{$Company->facebook}}"><i class="fab fa-facebook-f"></i></a></li>@endif
                                    @if($Company->twitter)<li><a href="{{$Company->twitter}}"><i class="fab fa-twitter"></i></a></li>@endif
                                    @if($Company->linkedin)<li><a href="{{$Company->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>@endif
                                    @if($Company->google)<li><a href="{{$Company->google}}"><i class="fab fa-google-plus-g"></i></a></li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
    @include('main.layout.cta')
    @include('main.layout.footer')
    @include('main.layout.scripts')
</body>
</html>
