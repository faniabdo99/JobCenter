@include('main.layout.header' , ['PageTitle' => 'Contact Us'])
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
                        <h1>contact us</h1>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
	  <!-- contact_icon_section start-->
    <div class="contact_icon_section jb_cover">
        <div class="container">
            <div class="row">
			   <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">
                        <h3>contact us</h3>
                        <p>We are here to Help you!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
                       <h4>contact us</h4>
                        <div class="contact_rotate">
                          <i class="fas fa-phone"></i>
                        </div>
                        <p>+964 7833225958<br>+964 7730075710</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					 <h4>Email</h4>
                        <div class="contact_rotate">
                           <i class="fas fa-envelope"></i>
                        </div>
                        <p><a href="#">womenjobcenter@gmail.com </a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					   <h4>location</h4>
                        <div class="contact_rotate">
						     <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p>Iraq, Basra, Aljubaila Quarter, Dinar St<br> Opposite to Alasas Station, on the top of Blateen fashon shop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info section end -->
	  <!-- map wrapper  start-->
    <div class="map_wrapper_top jb_cover">
		  <div class="map_wrapper map2_wrapper">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3436.3766016502022!2d47.80566171538516!3d30.53866220201037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc49900d6b421ad%3A0xbed3feca9299a4a0!2sMuftiyah%2C%20Basrah%2C%20Iraq!5e0!3m2!1sen!2sus!4v1584981157636!5m2!1sen!2sus" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	 <div class="contact_field_wrapper comments_form">
			<div class="jb_heading_wraper left_rivew_heading">
                @if ($errors->any())
                <div class="col-md-12 col-xs-12 col-sm-12">
                    @foreach ($errors->all() as $error)
                    <div class="notofication-message error-message">{{ $error }}</div>
                    <br>
                    @endforeach
                </div>
                @endif
                @if(session()->has('success'))
                    <div class="notofication-message success-message">{{ session()->get('success') }}</div>
                @endif
                <h3>get in touch</h3>
                <p>We would love to hear your thoughts, concerns, or problems with anything so we can improve.</p>
            </div>
                <form action="{{route('contact.do')}}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-pos">
                                    <div class="form-group i-name">
                                        <input type="text" required value="{{old('full_name')}}" class="form-control" name="full_name" placeholder=" Name*">
                                        <i class="fas fa-user-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-lg-6 col-md-6">
                                <div class="form-e">
                                    <div class="form-group i-email">
                                        <label class="sr-only">Email </label>
                                        <input type="email" required value="{{old('email')}}" class="form-control" name="email"  placeholder=" Email *" data-valid="email" data-error="Email should be valid.">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-m">
                                    <div class="form-group i-message">
                                        <textarea required class="form-control" name="message" rows="5" placeholder=" Message">{{old('message')}}</textarea>
                                        <i class="fas fa-comment"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="tb_es_btn_div">
                                    <div class="tb_es_btn_wrapper">
                                        <button type="submit" class="submitForm">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
			</div>
	</div>
	  <!-- map wrapper  end-->
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
