@include('admin.layout.header' , ['PageTitle' => 'New Blog Post'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'New Blog Post'])
    <div class="container">
        <!-- Admin Card (New Post Form) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <h3>New Blog Section</h3>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <form class="blog-form" action="{{route('admin.blog.section.new.post')}}" method="post">
                        @csrf
                        <label>Section Title (EN)</label>
                        <input type="text" name="title_en" required value="{{old('title_en') ?? ''}}" placeholder="Enter Section Title in English">
                        <label>Section Title (AR)</label>
                        <input type="text" name="title_ar" required value="{{old('title_ar') ?? ''}}" placeholder="Enter Section Title in Arabic">
                        <input type="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>
</html>
