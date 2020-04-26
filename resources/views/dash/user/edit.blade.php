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
                        <h1>@lang('dash/user.EditProfile')</h1>
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
                                                <h4>@lang('dash/user.ProfileImageJPEGorPNG')</h4>
                                                <div class="width_50">
                                                    <input name="image" type="file" id="input-file-now-custom-233" class="dropify" data-height="90" /><span class="post_photo">@lang('dash/user.BrowseImage')</span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse_img_banner jb_cover">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>@lang('dash/user.Name')</label>
                                            <input required type="text" value="{{old('name') ?? $User->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>@lang('dash/user.Resume(PDF,DOCorDOCX')</label>
                                            <input name="resume" type="file">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>@lang('dash/user.Phone')</label>
                                            <input type="number" value="{{old('phone') ?? $User->phone}}" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>@lang('dash/user.Website')</label>
                                            <input type="url" name="website" value="{{old('website') ?? $User->website}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label>@lang('dash/user.Category')</label>
                                            <select name="category_id">
                                                <option value="{{$User->category_id}}">{{$User->Category->title}}</option>
                                                @forelse ($Categories as $Category)
                                                  <option value="{{$Category->id}}">{{$Category->title}}</option>
                                                @empty
                                                  <option value="">@lang('dash/user.NoData')</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>@lang('dash/user.Address')</label>
                                            <input type="text" value="{{old('address') ?? $User->address}}" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                      <div class="select_box">
                                            <label>@lang('dash/user.City')</label>
                                            <select name="city_id">
                                                <option value="{{$User->city_id}}">{{$User->City->name}}</option>
                                                @forelse ($Cities as $City)
                                                  <option value="{{$City->id}}">{{$City->name}}</option>
                                                @empty
                                                  <option value="">@lang('dash/user.NoData')</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label>@lang('dash/user.Description')</label>
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
                                                <h1> @lang('dash/user.SocialNetworks')</h1>
                                            </div>
                                            <div class="job_overview_header jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>@lang(dash/user.Instagram'</label>
                                                            <input type="url" name="google" value="{{old('google') ?? $User->google}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>@lang('dash/user.Facebook')</label>
                                                            <input type="url" name="facebook" value="{{old('facebook') ?? $User->facebook}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>@lang('dash/user.Twitter')</label>
                                                            <input type="url" name="twitter" value="{{old('twitter') ?? $User->twitter}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>@lang('dash/user.Linkedin')</label>
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
                                                <h1>@lang('dahs/user.UpdatePassword')</h1>
                                            </div>
                                            <div class="job_overview_header jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>@lang('dahs/user.CurrentPassword')</label>
                                                            <input type="password" name="c_password">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label>@lang('dahs/user.NewPassword')</label>
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
                                                <button type="submit">@lang('dahs/user.SaveChanges')</button>
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
    @include('main.layout.cta')
    <!-- newsletter wrapper end -->
    <!-- footer Wrapper Start -->
    @include('dash.layout.footer')
    <!-- footer Wrapper End -->
    <!--custom js files-->
    @include('dash.layout.scripts')
    <!-- custom js-->
</body>

</html>
