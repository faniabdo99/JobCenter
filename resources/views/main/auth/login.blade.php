@include('main.layout.header' , ['PageTitle' => 'Login'])
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
                        <h1>login</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="{{route('home')}}"> Home </a>&nbsp; / &nbsp; </li>
                                <li>login</li>
                            </ul>
                        </div>
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
                            <img src="{{url('public/main/images')}}/logo.png" alt="logo">
                            <div class="header_btn search_btn facebook_wrap jb_cover">
                                <a href="#">login with facebook <i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="header_btn search_btn google_wrap jb_cover">
                                <a href="#">login with pinterest <i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>OR</h1>
                            </div>
                        </div>
                        <div class="login_form_wrapper">
                            <h2>login</h2>
                            <form action="{{route('login.do')}}" method="post">
                             @csrf
                            <div class="form-group icon_form comments_form">
                                <input type="email" required value="{{old('email')}}" class="form-control" name="email" placeholder="Email Address*">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group icon_form comments_form">
                                <input type="password" required name="password" class="form-control" placeholder="Password *">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="login_remember_box">
                                <a href="#" class="forget_password">
									Forgot Password
								</a>
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">
                                <button type="submit">login</a>
                            </div>
                        </form>
                            <div class="dont_have_account jb_cover">
                                <p>Don’t have an acount ? <a title="Signup" href="{{route('signup')}}">Sign up</a></p>
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
