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
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
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
                            <div class="jp_blog_bottom_left_cont">
                                <ul>
                                    <li><img src="{{$Post->User->profile_image}}" width="40" height="40" alt="{{$Post->User->name}}" />&nbsp;&nbsp; {{$Post->User->name}}</li>
                                </ul>
                            </div>
                            <div class="jp_blog_bottom_right_cont">
                                <p><a href="#"><i class="far fa-comment-dots"></i><span>{{count($Post->Comments)}}</span></a></p>
                                <ul>
                                    <li></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="jp_blog_single_client_main_section jb_cover">
                        <div class="jp_blog_single_client_img">
                            <img width="110" height="110" src="{{$Post->User->profile_image}}" alt="{{$Post->User->name}}" />
                        </div>
                        <div class="jp_blog_single_client_cont">
                            <h3>Posted By {{$Post->User->name}}</h3>
                            <p>{{$Post->User->description}}</p>
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper blog_single_link">
                                <ul>
                                    <li></li>
                                    @if($Post->User->facebook)<li><a href="{{$Post->User->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>@endif
                                    @if($Post->User->twitter)<li><a href="{{$Post->User->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>@endif
                                    @if($Post->User->linkedin)<li><a href="{{$Post->User->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>@endif
                                    @if($Post->User->google)<li><a href="{{$Post->User->google}}" target="_blank"><i class="fab fa-instagram"></i></a></li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comments_wrapper jb_cover">
                        <div class="widget_heading">
                            <h2>comments ({{count($Post->Comments)}})</h2>
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
                        <p>Be The First One to Comment!</p>
                      @endforelse
                    </div>
                    @guest
                      <p>Please <a href="{{route('login')}}">Login</a> to Add a Comment</p>
                    @endguest
                    @auth
                    <div class="comments_form jb_cover">
                        <div class="widget_heading">
                            <h2>leave a comment</h2>
                        </div>
                        <form action="{{route('comment.do')}}" method="post">
                          @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="formsix-m">
                                    <div class="form-group i-message">
                                        <input hidden name="post_id" value="{{$Post->id}}">
                                        <textarea class="form-control" required rows="4" name="description" placeholder="comment"></textarea>
                                        <i class="fas fa-comment"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row-->
                        <div class="header_btn search_btn jb_cover">
                            <button type="submit">submit</button>
                        </div>
                      </form>
                    </div>
                  @endauth
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
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
                                <li><i class="fa fa-caret-right"></i> <a href="#">{{$Section->title}} <span>({{count($Section->Posts)}})</span></a></li>
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
