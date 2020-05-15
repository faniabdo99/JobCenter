@include('main.layout.header' , ['PageTitle' => __('main/auth.Login')])

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
                        <h1>@lang('main/auth.Login')</h1>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <!-- top header wrapper end -->
        <!-- login wrapper start -->
        <div class="login_wrapper jb_cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="login_top_box jb_cover">
                            <div class="login_banner_wrapper">

                                <div class="header_btn search_btn facebook_wrap jb_cover">
                                    <a href="{{route('login.social.go' , 'facebook')}}">@lang('main/auth.LoginWithFacebook') <i class="fab fa-facebook-f"></i></a>
                                </div>
                                <div class="header_btn search_btn google_wrap jb_cover">
                                    <a href="{{route('login.social.go' , 'google')}}">@lang('main/auth.LoginWithGoogle') <i class="fab fa-google"></i></a>
                                </div>
                                <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                    <h1>@lang('main/auth.OR')</h1>
                                </div>
                            </div>
                            <div class="login_form_wrapper">
                                <h2>@lang('main/auth.Login')</h2>
                                <form action="{{route('login.do')}}" method="post">
                                    @csrf
                                    <div class="form-group icon_form comments_form">
                                        <input type="email" required value="{{old('email')}}" class="form-control" name="email" placeholder="@lang('main/auth.Email')*">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="form-group icon_form comments_form">
                                        <input type="password" required name="password" class="form-control" placeholder="@lang('main/auth.Password')*">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <div class="login_remember_box">
                                        <a href="{{route('forget.password')}}" class="forget_password">
                                            @lang('main/auth.ForgetPassword')
                                        </a>
                                    </div>
                                    <div class="header_btn search_btn login_btn jb_cover">
                                        <button type="submit">@lang('main/auth.Login')</a>
                                    </div>
                                </form>
                                <div class="dont_have_account jb_cover">
                                    <p>@lang('main/auth.NoAccount') <a title="Signup" href="{{route('signup')}}">@lang('main/auth.SignUp')</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login wrapper end -->

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
