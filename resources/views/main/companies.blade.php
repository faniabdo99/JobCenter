@include('main.layout.header', ['PageTitle' => 'Companies'])
<body>
    @include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">
                        <h1>companies</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>companies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--companies wrapper start -->
    <div class="companies_wrapper jb_cover">
        <div class="container">
            <div class="row">
                @forelse($Companies as $Company)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="company_main_wrapper">
                            <div class="company_img_wrapper">
                                <img width="92" height="92" src="{{$Company->profile_image}}" alt="{{$Company->name}}">
                                <div class="btc_team_social_wrapper">
                                    <h1>({{$Company->City->name}})</h1>
                                </div>
                            </div>
                            <div class="opening_job">
                              <h1><a href="{{route('company' , $Company->id)}}">{{count($Company->Jobs)}} job open</a></h1>
                            </div>
                            <div class="company_img_cont_wrapper">
                                <h4>{{$Company->name}}</h4>
                            </div>
                        </div>
                    </div>
                @empty
                <p>No Companies</p>
                @endforelse
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_pagination_section jb_cover">
                        <ul>
                            <li>
                                <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li class="third_pagger"><a href="#">2</a>
                            </li>
                            <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">6</a>
                            </li>

                            <li>
                                <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- companies wrapper end -->

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
