@include('dash.layout.header' , ['PageTitle' => 'Post New Job'])
<body>
   @include('dash.layout.navbar')
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>post new job</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>post new job</li>
                            </ul>
                        </div>
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
                                    <h1> post new job</h1>
                                </div>
                                <form action="{{route('job.new.do')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>job category</label>
                                                <select name="category_id" required>
                                                    @if(old('category_id'))
                                                        <option selected value="{{old('category_id')}}">Same Category You Choose</option>
                                                    @else 
                                                    <option selected value="">select category</option>
                                                    @endif
                                                    @forelse($Categories as $Category)
                                                    <option value="{{$Category->id}}">{{$Category->title}}</option>
                                                    @empty 
                                                    <option value="0">No Category</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>job title</label>
                                                <input type="text" name="title" value="{{old('title')}}" required placeholder="Need Graphic Designer">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>job type</label>
                                                <select name="type" required>
                                                    @if(old('type'))
                                                        <option value="{{old('type')}}">Same Type You Choose</option>
                                                    @endif
                                                    <option value="Full Time">full time</option>
                                                    <option value="Part Time">part time</option>
                                                    <option value="Temporary">temperory</option>
                                                    <option value="Rotation">rotation</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>salary (iraqi dinar per month)</label>
                                                <input type="number" value="{{old('salary')}}" name="salary" placeholder="Enter Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>experience (Years)</label>
                                               <input type="number" value="{{old('experience')}}" name="experience" placeholder="Enter Experince Years">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label>candidate age (Years)</label>
                                               <input type="number" value="{{old('age')}}" name="age" placeholder="Enter Experince Years">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> about this job</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <div class="contect_form3">
                                            <label>Job Description</label>
                                            <textarea class="editor" name="description" placeholder="Job Description Here">{!! old('description') !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>Job Resposibaleties</label>
                                            <textarea class="editor" name="responses" placeholder="Job Responses Here">{!! old('responses') !!}</textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label>Job Crteria</label>
                                            <textarea class="editor" name="criteria" placeholder="Job criteria Here">{!! old('criteria') !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>Position</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="contect_form3">
                                        <input type="text" value="{{old('position')}}" name="position" placeholder="Job Position">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>address / location </h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label>city</label>
                                                <select required name="city_id">
                                                    @if(old('city_id'))
                                                        <option value="{{old('city_id')}}">Same city you choose</option>
                                                    @endif
                                                    <option value="4">new york</option>
                                                    <option value="6">california</option>
                                                    <option value="2"> loss angles</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <div class="contect_form3">
                                                <label>Full Adress</label>
                                                <input type="text" value="{{old('address')}}" name="address" placeholder="Type Keywords">
                                            </div>
                                        </div>
                                         <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Post Job">
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