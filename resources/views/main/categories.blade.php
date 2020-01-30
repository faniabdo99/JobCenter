@include('main.layout.header' , ['PageTitle' => 'Categories'])

<body>
    @include('main.layout.navbar')
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>Categories</h1>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="job_listing_left_side jb_cover">
                        <div id="list" class="tab-pane active">
                            <div class="row">
                              @forelse($Resultes as $Category)
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="jb_browse_category jb_cover">
                                        <a href="{{route('search' , ['category' , $Category->id])}}">
                                            <div class="hover-block"></div>
                                            <i class="{{$Category->icon}}"></i>
                                            <h3>{{$Category->title}}</h3>
                                            <p>({{count($Category->Jobs)}} jobs)</p>
                                        </a>
                                    </div>
                                </div>
                              @empty
                                <p>No Resultes Yet in <b>{{$Query ?? ''}}</b></p>
                              @endforelse
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
