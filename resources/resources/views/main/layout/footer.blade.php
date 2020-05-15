    <!-- footer Wrapper Start -->
    <div class="footer jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover">
                        <h5>Women Job Center</h5>
                        <ul class="footer_first_contact">
                            <li><i class="flaticon-location-pointer"></i><p>@lang('layout/footer.Address')</p></li>
                            <li><i class="flaticon-telephone"></i>
                                <p>+964 783 3225 58<br>+964 773 0075 710</p></li>
                            <li><i class="flaticon-envelope"></i><a href="#">womenjobcenter@gmail.com</a></li>
                        </ul>
                        <ul class="icon_list_news jb_cover">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/p/B_SLGE-g4AM/?igshid=y9btdthidzip"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                      <h5>@lang('layout/footer.Pages')</h5>
                        <ul class="nav-widget">
                            <li><a href="https://womenjobcenter.com/"><i class="fa fa-square"></i>@lang('layout/parts.Home')</a></li>
                            <li><a href="https://womenjobcenter.com/jobs"><i class="fa fa-square"></i>@lang('layout/parts.Jobs')</a></li>
                            <li><a href="https://womenjobcenter.com/about"><i class="fa fa-square"></i>@lang('layout/parts.About')</a></li>
                            <li><a href="https://womenjobcenter.com/blog"><i class="fa fa-square"></i>@lang('layout/parts.Blog')</a></li>
                            <li><a href="https://womenjobcenter.com/contact"><i class="fa fa-square"></i>@lang('layout/parts.Contact')</a></li>
                            <li><a href="https://womenjobcenter.com/companies"><i class="fa fa-square"></i>@lang('layout/parts.Companies')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>@lang('layout/footer.Register')</h5>
                        <ul class="nav-widget">
                            <li><a href="{{route('signup')}}"><i class="fa fa-square"></i>@lang('layout/parts.Signup')</a></li>
                            <li><a href="{{route('login')}}"><i class="fa fa-square"></i>@lang('layout/parts.Login')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>@lang('layout/footer.ImplementedBy')</h5>
                        <ul class="nav-widget implement">
                            <a href="https://www.giz.de/en"><li><img src="{{url('public/main/images')}}/giz.png" width="100%"></li></a>
                            <a href="https://www.giz.de/en"><li><img src="{{url('public/main/images')}}/giz2.png" width="100%"></li></a>
                        </ul>
                        <a href="{{route('changeLang' , 'ar')}}">العربية</a> <br>
                        <a href="{{route('changeLang' , 'en')}}">English</a>
                    </div>
                </div>
                <div class="copyright_left"><i class="fa fa-copyright"></i> {{date('Y')}} <a href="https://www.facebook.com/alkarnakp"> Alkarnak. </a> @lang('layout/footer.AllRightsR')</div>
                <div class="clearfix"></div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop gradient-color">
                <div class="wave waveTop"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>
    </div>
    <!-- footer Wrapper End -->
