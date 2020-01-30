@include('admin.layout.header' , ['PageTitle' => 'Home'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'Home'])
    <div class="container-fluid">
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12">
                    <h3>Users Statistics</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-users"></i>
                        <h4><a href="{{route('admin.users')}}">Users</a> <br><span>{{$Users}}</span></h4>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-home"></i>
                        <h4><a href="{{route('admin.companies')}}">Companies</a> <br><span>{{$Companies}}</span></h4>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-users"></i>
                        <h4><a href="{{route('admin.inactiveCompanies')}}">inActive Companies</a> <br><span>{{$InActiveCompanies}}</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Admin Card (Users) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12">
                    <h3>Jobs Statistics</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-users"></i>
                        <h4>Posted Jobs <br><span>{{$Jobs}}</span></h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-reply"></i>
                        <h4>Jobs Applications <br><span>{{$Applications}}</span></h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-home"></i>
                        <h4>Cites <br><span>{{$Cites}}</span></h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-car"></i>
                        <h4>Categories <br><span>{{$Categories}}</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Admin Card (Jobs) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12">
                    <h3>Blog Statistics</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-edit"></i>
                        <h4>Articles <br><span>{{$BlogPosts}}</span></h4>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-eye"></i>
                        <h4>Total Views <br><span>{{$BlogViews}}</span></h4>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-comment"></i>
                        <h4>Comments <br><span>{{$Comments}}</span></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="admin-card">
            <div class="row">
                <div class="col-md-12">
                    <h3>Blog Actions</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-plus"></i>
                        <h4><a href="{{route('admin.blog.new')}}">Post New Article</a> <br></h4>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="single-state-card">
                        <i class="fas fa-plus"></i>
                        <h4><a href="{{route('admin.blog.section.new')}}">Add Blog Section</a> <br></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
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
