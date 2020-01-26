@include('main.layout.header' , ['PageTitle' => $Company->name])
<body>
    @include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-8 col-12 col-sm-7">
                        <h1>{{$Company->name}}</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>{{$Company->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!-- company details wrapper start-->
    <div class="company_details_wrapper jb_cover" style="background-image:url('{{$Company->cover_image}}');">
    </div>
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
                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Company->City->name}}</li>
                                        <li><i class="fa fa-th-large"></i>&nbsp; {{$Company->Category->title}}</li>
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
                                        <li><a href="job_single.html">{{count($Company->Jobs)}} open positions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading">about us</h2>
                            <p>{{$Company->description}}</p>
                        </div>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading">intro video</h2>
                            <div class="prs_video_sec_icon_wrapper jb_cover">
                                <div class="video_img_overlay"></div>
                                <ul>
                                    <li>
                                        <a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
                                    </li>
                                </ul>
                            </div>
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
                        <h1 class="related_job"> job open </h1>
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
                                                        @if($Job->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Job->salary}} IQD / Month</li>@endif
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->City->name}}</li>
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
                                                        <li><a href="javascript:;">{{$Job->type}}</a></li>
                                                        <li> <a href="{{route('job' , $Job->id)}}">apply</a></li>
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
                                                    @if($Job->salary)<li><i class="flaticon-cash"></i>&nbsp; {{$Job->salary}} IQD / Month</li>@endif
                                                    <li><i class="flaticon-location-pointer"></i>&nbsp; {{$Job->City->name}}</li>
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
                                                    <li><a href="javascript:;">{{$Job->type}}</a></li>
                                                    <li> <a href="{{route('job' , $Job->id)}}">apply</a></li>
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
                            <h1> overview company</h1>
                        </div>
                        <div class="job_overview_header jb_cover">

                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>categories:</li>
                                        <li>{{$Company->Category->title}}</li>
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
                                        <li>@if($Company->address){{$Company->address}}@else{{$Company->City->name}}@endif</li>
                                    </ul>
                                </div>
                            </div>
                            @if($Company->phone)
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li>Hotline:</li>
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
                                        <li>email:</li>
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
                                        <li>company size:</li>
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
                                        <li>website:</li>
                                        <li><a target="_blank" href="{{$Company->website}}">{{$Company->website}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @auth
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a href="mailto:{{$Company->contact_email}}">contact us</a>
                            </div>
                          @endauth
                        </div>
                    </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1> social profile</h1>
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
                </div>
            </div>
        </div>
    </div>
    <!-- company details wrapper end-->
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
