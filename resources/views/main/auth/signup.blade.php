@include('main.layout.header' , ['PageTitle' => 'Signup'])
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
                        <h1>sign up</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>sign up</li>
                            </ul>
                        </div>
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
                @if ($errors->any())
                <div class="col-md-12 col-xs-12 col-sm-12">
                    @foreach ($errors->all() as $error)
                    <div class="notofication-message error-message">{{ $error }}</div>
                    <br>
                    @endforeach
                </div>
                @endif
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
                        <div class="login_form_wrapper signup_wrapper">
                            <h2>sign up</h2>
                            <form action="{{route('signup.do')}}" method="post">
                                @csrf
							   <div class="form-group icon_form comments_form">
                                <input type="text" required value="{{old('name')}}" class="form-control" name="name" placeholder="Full Name*">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group icon_form comments_form">
                                <input type="email"  value="{{old('email')}}" required class="form-control" name="email" placeholder="Email Address*">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group icon_form comments_form">
                                <input type="password" required name="password" class="form-control" placeholder="Password *">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="form-group comments_form icon_form">
                                <select required name="type" class="form-control">
                                    <option value="" selected>Choose Account Type</option>
                                    <option value="user">Candidate Account</option>
                                    <option value="company">Company Account</option>
                                </select>
                            </div>
                            <a href="#" class="forget_password">
                                Forgot Password?
                            </a>
                            <div class="header_btn search_btn login_btn jb_cover">
                                <button type="submit">sign up</a>
                            </div>
                        </form>
                            <div class="dont_have_account jb_cover">
                                <p>Don’t have an acount ? <a href="{{route('login')}}">login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up wrapper end -->

    <!-- news app wrapper start-->
    <div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> Looking For A Job</h2>
                            <p>Your next level Product developemnt company assetsYour next level Product </p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                                <a href="#">submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    @include('main.layout.footer')
    <!-- footer Wrapper End -->
    <!--custom js files-->
   @include('main.layout.scripts')
    <!-- custom js-->
</body>

</html>