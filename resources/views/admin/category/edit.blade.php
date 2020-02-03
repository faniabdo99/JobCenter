@include('admin.layout.header' , ['PageTitle' => 'Edit Category'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'Edit Category'])
    <div class="container">
        <!-- Admin Card (New Post Form) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                  <h3>Edit Category ({{$Category->title_en}})</h3>
                    <form class="blog-form" action="{{route('admin.categories.update.post' , $Category->id)}}" method="post">
                        @csrf
                        <label>Category Name (EN)</label>
                        <input type="text" name="title_en" required value="{{$Category->title_en}}" placeholder="Enter Category Name in English">
                        <label>Category Name (AR)</label>
                        <input type="text" name="title_ar" required value="{{$Category->title_ar}}" placeholder="Enter Category Name in Arabic">
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>
</html>
