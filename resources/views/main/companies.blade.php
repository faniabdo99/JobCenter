@include('main.layout.header', ['PageTitle' => __('layout/titles.Companies')])
<body>
    @include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-8">
                        <h1>@lang('layout/titles.Companies')</h1>
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
                                    <h1>{!!$Company->City->name ?? '<i class="fas fa-star"></i>'!!}</h1>
                                </div>
                            </div>
                            <div class="opening_job">
                              <h1><a href="{{route('company' , [$Company->id , $Company->slug])}}">{{count($Company->Jobs)}} @lang('layout/parts.JobOpen')</a></h1>
                            </div>
                            <div class="company_img_cont_wrapper">
                                <h4>{{$Company->name}}</h4>
                            </div>
                        </div>
                    </div>
                @empty
                <p>@lang('layout/parts.NoData')</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- companies wrapper end -->
    {{$Companies->links('main.layout.pagenation')}}
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
