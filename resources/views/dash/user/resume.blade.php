@include('dash.layout.header' , ['PageTitle' => 'Resume'])
<body>
    @include('dash.layout.navbar')
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1>Candidates resume</h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Resume</li>
                            </ul>
                        </div>
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
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> basic information</h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            @if($User->job_description)
                                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="far fa-calendar"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>job description:</li>
                                                        <li>{{$User->job_description}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endif
                                            @if($User->city)
                                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>Location:</li>
                                                        <li>{{$User->city}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endif 
                                            @if($User->phone)
                                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fa fa-info-circle"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>phone :</li>
                                                        <li>{{$User->phone}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>email:</li>
                                                        <li><a mailto="{{$User->email}}">{{$User->email}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @if($User->email)
                                            <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-globe-asia"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>website:</li>
                                                        <li><a target="_blank" href="{{$User->website}}">{{$User->website}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($User->description)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>about us</h1>
                                </div>
                                <div class="job_overview_header pdd jb_cover">
                                    <p>{{$User->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($User->resume)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>full resume</h1>
                                </div>
                                <div class="job_overview_header pdd jb_cover">
                                    <p><a href="{{$User->cv}}">Download Full Resume File</a></p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> education background<span><a href="#" data-toggle="modal" data-target="#myModal4"><i class="fas fa-edit"></i></a></span></h1>
                                </div>
                                <div class="modal fade delete_popup company_popup" id="myModal4" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <div class="delett_cntn jb_cover">
                                                        <h1><i class="fas fa-edit"></i>education</h1>

                                                        <div class="category_wrapper jb_cover">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                                    <div class="category_lavel jb_cover">
                                                                        <p>education 01 :</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Title">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Institude">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Period">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">

                                                                        <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="category_wrapper gallery_browse jb_cover">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                                    <div class="category_lavel jb_cover">
                                                                        <p>education 02 :</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Title">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Institude">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Period">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">

                                                                        <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="header_btn search_btn applt_pop_btn">

                                                            <a href="#">save updates</a>

                                                        </div>
                                                        <div class="cancel_wrapper">
                                                            <a href="#" data-dismiss="modal">cancel</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>2018 - Present</li>
                                                        <li>Masters in Software Engineering <a href="#"> at CDGI</a></li>
                                                    </ul>
                                                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                                </div>
                                            </div>
                                            <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>2014 - 2018</li>
                                                        <li>Bachelor of Arts <a href="#">at RK university</a></li>
                                                    </ul>
                                                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                                </div>
                                            </div>
                                            <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>2014 - 2014</li>
                                                        <li>metric education <a href="#">at st.thomas school</a></li>
                                                    </ul>
                                                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1>work experience <span><a href="#" data-toggle="modal" data-target="#myModal6"><i class="fas fa-edit"></i></a></span></h1>
                                </div>
                                <div class="modal fade delete_popup company_popup" id="myModal6" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <div class="delett_cntn jb_cover">
                                                        <h1><i class="fas fa-edit"></i>experience</h1>

                                                        <div class="category_wrapper jb_cover">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                                    <div class="category_lavel jb_cover">
                                                                        <p>experience 1 :</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Title">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Company">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Period">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">

                                                                        <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="category_wrapper gallery_browse jb_cover">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                                    <div class="category_lavel jb_cover">
                                                                        <p>experience 2 :</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Title">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Company">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="Period">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">

                                                                        <textarea name="message" rows="2" placeholder="Description"></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="header_btn search_btn applt_pop_btn">

                                                            <a href="#">save updates</a>

                                                        </div>
                                                        <div class="cancel_wrapper">
                                                            <a href="#" data-dismiss="modal">cancel</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-suitcase"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>2018 - Present</li>
                                                        <li>Lead UI/UX, Web Design, Interaction Design <a href="#"> at webstrot</a></li>
                                                    </ul>
                                                    <p>As a UI/UX Designer, i have a strong background of work closely with Developers and associate with Design Research to enhance design suggestions. Manage design wireframes, mockups and navigation maps. My job was to make sure that my Designs are unique.Develop clean well executed design concepts. Coordinate with team on design and prototype of new interfaces.</p>
                                                </div>
                                            </div>
                                            <div class="jp_listing_overview_list_main_wrapper education_board jb_cover">
                                                <div class="jp_listing_list_icon">
                                                    <i class="fas fa-suitcase"></i>
                                                </div>
                                                <div class="jp_listing_list_icon_cont_wrapper">
                                                    <ul>
                                                        <li>2014 - 2018</li>
                                                        <li>Computer Operator/Programmer <a href="#">at digiworld</a></li>
                                                    </ul>
                                                    <p>We can develop and design anything beyond your imagination. About our work, we don’t say anything because our work speaks. For more, you can ask our clients and they will tell you how much satisfied they are with our services. So, what are you waiting for?We can develop and design anything beyond your imagination. About our work, we don’t say anything because our work speaks. For more, you can ask our clients and they will tell you how much satisfied they are with our services. So, what are you waiting for?</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar company_wrapper jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> special qualification <span><a href="#" data-toggle="modal" data-target="#myModal7"><i class="fas fa-edit"></i></a></span></h1>
                                </div>
                                <div class="modal fade delete_popup company_popup" id="myModal7" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <div class="delett_cntn jb_cover">
                                                        <h1><i class="fas fa-edit"></i>qualification</h1>

                                                        <div class="category_wrapper gallery_browse jb_cover">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                                    <div class="category_lavel jb_cover">
                                                                        <p>type here:</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="01">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="02">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="03">
                                                                    </div>
                                                                    <div class="delete_jb_form gallery_link">
                                                                        <input type="text" name="name" placeholder="04">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="header_btn search_btn applt_pop_btn">

                                                            <a href="#">save updates</a>

                                                        </div>
                                                        <div class="cancel_wrapper">
                                                            <a href="#" data-dismiss="modal">cancel</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                            <ul class="speical_qualification_wrapper">
                                                <li><i class="fas fa-check-square"></i>5 years+ experience designing and building products.
                                                </li>
                                                <li><i class="fas fa-check-square"></i>Skilled at any Kind Design Tools.
                                                </li>
                                                <li><i class="fas fa-check-square"></i>Passion for people-centered design, solid intuition.
                                                </li>
                                                <li><i class="fas fa-check-square"></i>Hard Worker & Quick Lerner.</li>

                                            </ul>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="header_btn search_btn jb_cover">

                                <a href="#">save changes</a>
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