@include('dash.layout.header' , ['PageTitle' => 'Edit ' . $Job->title])
<body>
   @include('dash.layout.navbar')
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1>@lang('dash/company.EditJob')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>@lang('dash/company.JobType')</label>
                                                <select name="type" required>
                                                    <option value="{{$Job->type}}">{{$Job->JobType}} (Old)</option>
                                                    <option value="Full Time">@lang('dash/company.FullTime')</option>
                                                    <option value="Part Time">@lang('dash/company.PartTime')@lang('dash/company.Rotation')</option>
                                                    <option value="Rotation">@lang('dash/company.Salary(iraqi dinar per month)')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>@lang('dash/company.Experience')</label>
                                                <input type="text" value="{{$Job->salary}}" name="salary" placeholder="E.g 12000 - 15000">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                               <label>@lang('dash/company.Fresher')</label>
                                               <select name="experience">
                                                  <option value="{{$Job->experience}}">{{$Job->Exp}}</option>
                                                  <option value="Fresher">@lang('dash/company.Junior')</option>
                                                  <option value="Junior">@lang('dash/company.PreSenior')</option>
                                                  <option value="Pre Senior">@lang('dash/company.Senior')</option>
                                                  <option value="Senior">@lang('dash/company.CandidateAge')</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>@lang('dash/company.(Years)')@lang('dash/company.AboutThisJob')</label>
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
                                            <label>@lang('dash/company.JobResposibaleties')</label>
                                            <textarea class="editor" name="description" placeholder="Job Description Here">{!! $Job->description !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>@lang('dash/company.JobCrteria')</label>
                                            <textarea class="editor" name="responses" placeholder="Job Responses Here">{!! $Job->responses !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>@lang('dash/company.Address')</label>
                                            <textarea class="editor" name="criteria" placeholder="Job criteria Here">{!! $Job->criteria!!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>@lang('dash/company./Location') </h1>
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
