@include('dash.layout.header' , ['PageTitle' => __('dash/company.PostNewJob')])

<body>
    @include('dash.layout.navbar')
    <!--employee dashboard wrapper start-->
    <div class="employe_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                @include('dash.company.parts.sidebar')
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>
                                        @lang('dash/company.PostNewJob')</h1>
                                </div>
                                <form action="{{route('job.new.do')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="job_overview_header jb_cover">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="select_box">
                                                    <label>
                                                        @lang('dash/company.JobCategory')</label>
                                                            <select name="category_id" required>
                                                                @if(old('category_id'))
                                                                <option selected value="{{old('category_id')}}">Same Category You Choose</option>
                                                                @else
                                                                <option selected value="">
                                                                    @lang('dash/company.SelectCategory')</option>
                                                                        @endif
                                                                        @forelse($Categories as $Category)
                                                                <option value="{{$Category->id}}">{{$Category->title}}</option>
                                                                @empty
                                                                <option value="0">
                                                                    @lang('dash/company.NoData')</option>
                                                                        @endforelse
                                                            </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="contect_form3">
                                                    <label>
                                                        @lang('dash/company.JobTitle')</label>
                                                            <input type="text" name="title" value="{{old('title')}}" required placeholder="@lang('dash/company.JobTitle')">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="contect_form3">
                                                    <label>
                                                        @lang('dash/company.JobPosition')</label>
                                                            <input type="text" required value="{{old('position')}}" name="position" placeholder="@lang('dash/company.JobPosition')">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="contect_form3">
                                                    <label>@lang('dash/company.JobStudy')</label>
                                                    <div class="select_box">
                                                        <select name="study" required>
                                                            @if(old('study'))
                                                            <option value="{{old('study')}}">{{old('study')}}</option>
                                                            @endif
                                                            <option value="Illiterate">@lang('dash/company.Illiterate')</option>
                                                            <option value="Elementary">@lang('dash/company.Elementary')</option>
                                                            <option value="Middle School">@lang('dash/company.MiddleSchool')</option>
                                                            <option value="BA">@lang('dash/company.BA')</option>
                                                            <option value="PHD">@lang('dash/company.PHD')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="select_box">
                                                    <label>
                                                        @lang('dash/company.JobType')</label>
                                                            <select name="type" required>
                                                                @if(old('type'))
                                                                <option value="{{old('type')}}">{{old('type')}}</option>
                                                                @endif
                                                                <option value="Full Time">
                                                                    @lang('dash/company.FullTime')</option>
                                                                <option value="Part Time">
                                                                    @lang('dash/company.PartTime')</option>
                                                                <option value="Temporary">
                                                                    @lang('dash/company.Temperory')</option>
                                                                <option value="Rotation">
                                                                    @lang('dash/company.Rotation')</option>
                                                                <option value="Remotely">
                                                                    @lang('dash/company.Remotely')</option>
                                                            </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="contect_form3">
                                                    <label>
                                                        @lang('dash/company.Salary(IraqiDinarPerMonth)')</label>
                                                            <input type="number" value="{{old('salary')}}" name="salary" placeholder="@lang('dash/company.Salary(IraqiDinarPerMonth)')">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="select_box">
                                                    <label>
                                                        @lang('dash/company.Experience') </label>
                                                    <select name="experience">
                                                        @if(old('experience'))
                                                        <option value="{{old('experience')}}">{{old('experience')}}</option>
                                                        @else
                                                        <option value="">
                                                            @lang('dash/company.ChooseExperinceLevel')</option>
                                                                @endif
                                                        <option value="Fresher">
                                                            @lang('dash/company.Fresher')</option>
                                                        <option value="Junior">
                                                            @lang('dash/company.Junior')</option>
                                                        <option value="Pre Senior">
                                                            @lang('dash/company.PreSenior')</option>
                                                        <option value="Senior">
                                                            @lang('dash/company.Senior')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="contect_form3">
                                                    <label>
                                                        @lang('dash/company.CandidateAge(Years)')</label>
                                                            <input type="number" value="{{old('age')}}" name="age" placeholder="@lang('dash/company.CandidateAge(Years)')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>
                                        @lang('dash/company.AboutThisJob')</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <div class="contect_form3">
                                            <label>
                                                @lang('dash/company.JobDescription')</label>
                                                    <textarea class="editor" name="description" id="description">{!! old('description') !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>
                                                @lang('dash/company.JobResposibaleties')</label>
                                                    <textarea class="editor" name="responses">{!! old('responses') !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>
                                                @lang('dash/company.JobCrteria')</label>
                                                    <textarea class="editor" name="criteria">{!! old('criteria') !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>
                                        @lang('dash/company.Address/Location')
                                    </h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>
                                                    @lang('dash/company.City')</label>
                                                        <select required name="city_id">
                                                            @if(old('city_id'))
                                                            <option value="{{old('city_id')}}">
                                                                @lang('dash/company.SameCityYouChoose')</option>
                                                                    @endif
                                                                    @forelse ($Cities as $city)
                                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <div class="contect_form3">
                                                <label>
                                                    @lang('dash/company.FullAdress')</label>
                                                        <input type="text" value="{{old('address')}}" name="address" placeholder="@lang('dash/company.FullAdress')">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Post Job" onclick="submitForm()">
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
    <!-- footer Wrapper Start -->
    @include('dash.layout.footer')
    <!-- footer Wrapper End -->
    <!--custom js files-->
    @include('dash.layout.scripts')
    <!-- custom js-->
    <script>
        tinymce.init({
            selector: '.editor',
            plugins: "anchor autoresize link autolink advlist lists textpattern directionality",
            toolbar: "formatselect | anchor link | bold italic | numlist bullist | ltr rtl |alignleft aligncenter alignright",
            block_formats: 'Paragraph=p;Heading 2=h2;Heading 3=h3;',
            menubar: false,
            default_link_target: "_blank"
        });
    </script>
</body>

</html>
