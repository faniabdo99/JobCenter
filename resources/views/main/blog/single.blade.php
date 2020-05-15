@include('main.layout.header' , ['PageTitle' => $Post->title])
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
                        <h1>{{$Post->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="blog_single_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 @if($Post->lang == 'ar') text-right @endif" @if($Post->lang == 'ar') dir="rtl" @endif>
                    <div class="jp_first_blog_post_main_wrapper jb_cover">
                        <div class="jp_first_blog_post_img">
                            <img src="{{$Post->post_image}}" class="img-responsive" alt="{{$Post->title}}" />
                        </div>
                        <div class="jp_first_blog_post_cont_wrapper">
                            <p><span>{{$Post->created_at->format('Y M d')}}</span></p>
                            <h3><a href="#">{{$Post->title}}</a></h3>
                            <p>{{$Post->description}}</p>
                        </div>
                        <div class="jp_first_blog_post_cont_wrapper">
                            {!! $Post->body !!}
                        </div>
                        <div class="jp_first_blog_bottom_cont_wrapper jb_cover">
                          <p class="font-weight-bold">@lang('main/blog.Attachments')</p>
                          <ul>
                            @forelse($Attachments as $File)
                            <li><a target="_blank" href="{{$File->link}}">{{$File->source}}</a></li>
                            @empty
                            @endforelse
                          </ul>
                        </div>
                    </div>
                    <div class="comments_wrapper jb_cover">
                        <div class="widget_heading">
                            <h2>@lang('main/blog.Comments') ({{count($Post->Comments)}})</h2>
                        </div>
                        @forelse($Post->Comments as $Comment)
                        <div class="comments_Box">
                            <div class="img_wrapper">
                                <img src="{{$Comment->User->profile_image}}" width="60" height="60" alt="{{$Comment->User->name}}" />
                            </div>
                            <div class="text_wrapper">
                                <div class="author_detail">
                                    <span class="author_name"> {{$Comment->User->name}}</span>
                                    <span class="publish_date">{{$Comment->created_at->format('M d Y')}}</span>
                                </div>
                                <div class="author_content">
                                    <p>{{$Comment->description}}</p>
                                </div>
                            </div>
                        </div>
                      @empty
                        <p>@lang('layout/parts.NoData')</p>
                      @endforelse
                    </div>
                    @guest
                      <p><a href="{{route('login')}}">@lang('layout/parts.Login')</a> @lang('main/blog.ToAddComment')</p>
                    @endguest
                    @auth
                    <div class="comments_form jb_cover">
                        <div class="widget_heading">
                            <h2>@lang('main/blog.LeaveComment')</h2>
                        </div>
                        <form action="{{route('comment.do')}}" method="post">
                          @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="formsix-m">
                                    <div class="form-group i-message">
                                        <input hidden name="post_id" value="{{$Post->id}}">
                                        <textarea class="form-control" required rows="4" name="description" placeholder="@lang('main/blog.Comment')"></textarea>
                                        <i class="fas fa-comment"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row-->
                        <div class="header_btn search_btn jb_cover">
                            <button type="submit">@lang('layout/parts.Submit')</button>
                        </div>
                      </form>
                    </div>
                  @endauth
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>@lang('main/blog.BlogCategories')</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            <ul class="blog_category_link jb_cover">
                              @php
                              $Sections = App\Section::orderBy('id' , 'desc')->get();
                              @endphp
                              @forelse($Sections as $Section)
                                <li><i class="fa fa-caret-right"></i> <a href="{{route('blog.search' , ['section' , $Section->id])}}">{{$Section->title}} <span>({{count($Section->Posts)}})</span></a></li>
                              @empty
                              @endforelse
                            </ul>
                        </div>
                    </div>

                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>@lang('layout/parts.JobsSpotlight')</h1>
                        </div>
                        <div class="category_jobbox jb_cover">
                            <div class="jp_spotlight_slider_wrapper">
                                <div class="owl-carousel owl-theme">
                                  @forelse($JobsSpotlight as $Job)
                                    <div class="item">
                                        <div class="jp_spotlight_slider_img_Wrapper">
                                            <img src="{{$Job->Company->profile_image}}" alt="{{$Job->title}}" />
                                        </div>
                                        <div class="jp_spotlight_slider_cont_Wrapper">
                                            <h4>{{$Job->title}}</h4>
                                            <p><a href="{{route('company' , $Job->Company->id)}}">{{$Job->Company->name}}</a></p>
                                            <ul>
                                                @if($Job->salary)<li><i class="far fa-money-bill-alt"></i>&nbsp; {{$Job->salary}}</li><br>@endif
                                                <li><i class="fas fa-map-marker-alt"></i>&nbsp; {{$Job->City->name}}</li>
                                            </ul>
                                        </div>
                                        <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                            <a href="{{route('job' , $Job->id)}}">@lang('layout/parts.Apply')</a>
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
	 <!-- blog single wrapper end-->
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
