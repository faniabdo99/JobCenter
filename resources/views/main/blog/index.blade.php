@include('main.layout.header' , ['PageTitle' => 'Blog'])

<body>
  @include('main.layout.navbar')
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--job listing filter  wrapper start-->
    <div class="blog_ct_right_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                  <div class="row">
                    @forelse($Posts as $Post)
                    <div class="jp_first_blog_post_main_wrapper jb_cover">
                        <div class="jp_first_blog_post_slider">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{$Post->post_image}}" class="img-responsive" alt="{{$Post->title}}" />
                                </div>
                            </div>
                        </div>
                        <div class="jp_first_blog_post_cont_wrapper">
                            <p><span>{{$Post->created_at->format('Y M d')}}</span></p>
                            <h3><a href="{{route('blog.post' , $Post->slug)}}">{{$Post->title}}</a></h3>
                            <p>{{$Post->description}}</p>
                        </div>
                        <div class="jp_first_blog_bottom_cont_wrapper jb_cover">
                            <div class="jp_blog_bottom_right_cont">
                                <p><a href="#"><i class="far fa-comment-dots"></i><span>{{count($Post->Comments)}}</span></a></p>
                                <ul>
                                    <li></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  @empty
                    <p>No Posts Yet</p>
                  @endforelse
                    {{$Posts->links('main.layout.pagenation')}}
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                  <div class="job_filter_category_sidebar jb_cover">
                      <div class="job_filter_sidebar_heading jb_cover">
                          <h1>search</h1>
                      </div>

                      <div class="category_jobbox jb_cover">
                          <div class="jp_blog_right_search_wrapper jb_cover">
                            <form action="{{route('blog.search')}}" method="get">
                              <input type="text" required name="query" placeholder="Search">
                              <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                          </div>
                      </div>
                  </div>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1>blog category</h1>
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
                            <h1>job spotlight</h1>
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
                                            <a href="{{route('job' , $Job->id)}}">apply now !</a>
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
