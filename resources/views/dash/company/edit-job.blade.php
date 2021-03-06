@include('dash.layout.header' , ['PageTitle' => 'Edit ' . $Job->title])
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
                                    <h1>Edit : {{$Job->title}}</h1>
                                </div>
                                <form action="{{route('job.edit.do' , $Job->id)}}" method="post">
                                @csrf
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>@lang('dash/company.JobCategory')</label>
                                                <select name="category_id" required>
                                                    @if($Job->category_id)
                                                        <option selected value="{{$Job->category_id}}">Same Category You Choose</option>
                                                    @else
                                                    <option selected value="">@lang('dash/company.SelectCategory')</option>
                                                    @endif
                                                      @forelse($Categories as $Category)
                                                      <option value="{{$Category->id}}">{{$Category->title}}</option>
                                                      @empty
                                                      <option value="0">@lang('dash/company.NoData')</option>
                                                      @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>@lang('dash/company.JobTitle')</label>
                                                <input type="text" name="title" value="{{$Job->title}}" required placeholder="Need Graphic Designer">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>@lang('dash/company.JobPosition')</label>
                                                <input type="text" required value="{{$Job->position}}" name="position" placeholder="Job Position">
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
                                                <label>@lang('dash/company.JobType')</label>
                                                <select name="type" required>
                                                    <option value="{{$Job->type}}">{{$Job->JobType}}</option>
                                                    <option value="Full Time">@lang('layout/parts.FullTime')</option>
                                                    <option value="Part Time">@lang('layout/parts.PartTime')</option>
                                                    <option value="Temporary">@lang('layout/parts.Temporary')</option>
                                                    <option value="Rotation">@lang('layout/parts.Rotation')</option>
                                                    <option value="Remotely">@lang('layout/parts.Remotely')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>@lang('dash/company.Salary(iraqi dinar per month)')</label>
                                                <input type="text" value="{{$Job->salary}}" name="salary" placeholder="E.g 12000 - 15000">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                               <label>@lang('dash/company.Experience')</label>
                                               <select name="experience">
                                                  <option value="{{$Job->experience}}">{{$Job->Exp}}</option>
                                                  <option value="Fresher">@lang('dash/company.Fresher')</option>
                                                  <option value="Junior">@lang('dash/company.Junior')</option>
                                                  <option value="Pre Senior">@lang('dash/company.PreSenior')</option>
                                                  <option value="Senior">@lang('dash/company.Senior')</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>@lang('dash/company.CandidateAge(Years)')</label>
                                               <input type="number" value="{{$Job->age}}" name="age" placeholder="Enter Candidate Age in Years">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>@lang('dash/company.JobDescription')</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <div class="contect_form3">
                                            <label>@lang('dash/company.JobDescription')</label>
                                            <textarea class="editor" name="description" placeholder="Job Description Here">{!! $Job->description !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>@lang('dash/company.JobResposibaleties')</label>
                                            <textarea class="editor" name="responses" placeholder="Job Responses Here">{!! $Job->responses !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>@lang('dash/company.JobCrteria')</label>
                                            <textarea class="editor" name="criteria" placeholder="Job criteria Here">{!! $Job->criteria!!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>@lang('dash/company.Address') </h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>@lang('dash/company.City')</label>
                                                <select required name="city_id">
                                                    <option value="{{$Job->city_id}}">@lang('dash/company.SameCityYouChoose')</option>
                                                    @forelse($Cities as $City)
                                                      <option value="{{$City->id}}">{{$City->name}}</option>
                                                    @empty
                                                      <p>@lang('dash/company.NoData')</p>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <div class="contect_form3">
                                                <label>@lang('dash/company.FullAdress')</label>
                                                <input type="text" value="{{$Job->address}}" name="address" placeholder="Type Company Address">
                                            </div>
                                        </div>
                                         <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Update Job">
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
