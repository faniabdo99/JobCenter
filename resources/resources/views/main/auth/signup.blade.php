@include('main.layout.header' , ['PageTitle' => __('main/auth.SignUp')])

<body>
    @include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-12 col-sm-7">
                        <h1>@lang('main/auth.SignUp')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!-- sign up wrapper start -->
    <div class="login_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box jb_cover">
                        <div class="login_banner_wrapper">
                            <div class="header_btn search_btn facebook_wrap jb_cover">
                                <a href="{{route('login.social.go' , 'facebook')}}">@lang('main/auth.SignupWithFacebook') <i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="header_btn search_btn google_wrap jb_cover">
                                <a href="{{route('login.social.go' , 'google')}}">@lang('main/auth.SignupWithGoogle') <i class="fab fa-google"></i></a>
                            </div>
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>@lang('main/auth.OR')</h1>
                            </div>
                        </div>
                        <div class="login_form_wrapper signup_wrapper">
                            <h2>@lang('main/auth.SignUp')</h2>
                            <form action="{{route('signup.do')}}" method="post">
                                @csrf
                                <div class="form-group icon_form comments_form">
                                    <input type="text" required value="{{old('name')}}" class="form-control" name="name" placeholder="@lang('main/auth.FullName')*">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="form-group icon_form comments_form">
                                    <input type="email" value="{{old('email')}}" required class="form-control" name="email" placeholder="@lang('main/auth.Email')*">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="form-group icon_form comments_form">
                                    <input type="password" required name="password" class="form-control" placeholder="@lang('main/auth.Password')*">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="form-group icon_form comments_form">
                                    <input type="password" required name="password_conf" class="form-control" placeholder="@lang('main/auth.PasswordConfrim')*">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="form-group comments_form icon_form">
                                    <select required name="type" class="form-control form_list ">
                                        <option value="" selected>@lang('main/auth.ChooseAccountType')</option>
                                        <option value="user">@lang('main/auth.CandidateAccount')</option>
                                        <option value="company">@lang('main/auth.CompanyAccount')</option>
                                    </select>
                                </div>
                                <a href="https://womenjobcenter.com/forget-password" class="forget_password">
                                    @lang('main/auth.ForgetPassword')
                                </a>
                                <div class="header_btn search_btn login_btn jb_cover">
                                    <button type="submit">@lang('main/auth.SignUp')</a>
                                </div>
                            </form>
                            <div class="dont_have_account jb_cover">
                                <p>@lang('main/auth.AlreadyHaveAccount') <a href="{{route('login')}}">@lang('main/auth.Login')</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up wrapper end -->

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
