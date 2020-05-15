@include('main.layout.header' , ['PageTitle' => __('main/auth.PasswordReset')])
<body>
  @include('main.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>@lang('main/auth.PasswordReset')</h1>
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
                        <div class="login_form_wrapper login_form_wrapper_forget col-lg-12 col-md-12 col-sm-12">
                            <h2>@lang('main/auth.PasswordReset')</h2>
                            <form action="{{route('forget.password.do')}}" method="post">
                             @csrf
                            <div class="form-group icon_form comments_form">
                                <input type="email" required value="{{old('email')}}" class="form-control" name="email" placeholder="@lang('main/auth.Email')*">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="header_btn search_btn login_btn jb_cover">
                                <button type="submit">@lang('main/auth.ResetLink')</a>
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
