@include('dash.layout.header' , ['PageTitle' => 'Edit Profile'])
<body>
   @include('dash.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>Edit Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--employee dashboard wrapper start-->
    <div class="candidate_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                @include('dash.user.parts.sidebar')
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                        <form action="{{route('dash.user.edit.do')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="jp_job_post_side_img">
                                            <img src="{{$User->profile_image}}" width="92" height="92" alt="post_img">
                                        </div>
                                        <div class="jp_job_post_right_cont edit_profile_wrapper">
                                            <h4>Profile Image JPEG or PNG</h4>
                                            <div class="width_50">
                                                <input name="image" type="file" id="input-file-now-custom-233" class="dropify" data-height="90" /><span class="post_photo">browse image</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse_img_banner jb_cover">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>name</label>
                                            <input required type="text" value="{{old('name') ?? $User->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Resume (PDF , DOC or DOCX)</label>
                                            <input name="resume" type="file">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Phone</label>
                                            <input type="number" value="{{old('phone') ?? $User->phone}}" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Website</label>
                                            <input type="url" name="website" value="{{old('website') ?? $User->website}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>job description</label>
                                            <select name="job_description">
                                                <option value="{{$User->job_description}}">{{$User->job_description}}</option>
                                                <option>it & computer</option>
                                                <option>marketing</option>
                                                <option>mechanical</option>
                                                <option>doctor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>address</label>
                                            <input type="text"  value="{{old('address') ?? $User->address}}" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>city</label>
                                            <input type="text" name="city" value="{{old('city') ?? $User->City->name ?? ''}}" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>Description</label>
                                            <textarea name="description" row="5">{{old('description') ?? $User->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="browse jb_cover">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> social networks</h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>Instagram</label>
                                                        <input type="url" name="google" value="{{old('google') ?? $User->google}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>facebook</label>
                                                        <input type="url" name="facebook" value="{{old('facebook') ?? $User->facebook}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>twitter</label>
                                                        <input type="url" name="twitter" value="{{old('twitter') ?? $User->twitter}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>linkedin</label>
                                                        <input type="url" name="linkedin" value="{{old('linkedin') ?? $User->linkedin}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1>update password</h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>current pasword</label>
                                                        <input type="password" name="c_password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="contect_form3">
                                                        <label>new pasword</label>
                                                        <input type="password" name="n_password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="login_remember_box jb_cover">
                                        <div class="header_btn search_btn login_btn jb_cover">
                                            <button type="submit" href="#">save changes</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--employee dashboard wrapper end-->
    <!-- newsletter wrapper start -->
    <div class="jb_cover">
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
    <!-- newsletter wrapper end -->
    <!-- footer Wrapper Start -->
    @include('dash.layout.footer')
    <!-- footer Wrapper End -->
    <!--custom js files-->
    @include('dash.layout.scripts')
    <!-- custom js-->
</body>

</html>
