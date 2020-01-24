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
                        <h3>contact with us</h3>
                        <p>Your next level Product developemnt company assets</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					 <h4>contact us</h4>
                        <div class="contact_rotate">
                          <i class="fas fa-phone"></i>
                        </div>
                        <p>+1800-148-423<br> +9175-148-124</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					 <h4>Email</h4>
                        <div class="contact_rotate">
                           <i class="fas fa-envelope"></i>
                        </div>
                        <p><a href="#">jbdesks@example.com </a><br><a href="#">support@example.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_main jb_cover">
					   <h4>location</h4>
                        <div class="contact_rotate">
						     <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p>Somewhere in Iraq<br> 52B-melbourne,UK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info section end -->
	  <!-- map wrapper  start-->
    <div class="map_wrapper_top jb_cover">
		  <div class="map_wrapper map2_wrapper">
				<div id='map'>
				</div>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    <br> sed do eiusmod tempor incididunt </p>
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
	   <script>
        function initMap() {
            var uluru = {
                lat: -36.742775,
                lng: 174.731559
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi2zbxXa0ObGqaSBo5NJMdwLs_xtQ03nI&callback=initMap"></script>
</body>
</html>