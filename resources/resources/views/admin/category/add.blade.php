@include('admin.layout.header' , ['PageTitle' => 'New Category'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'New Category'])
    <div class="container">
        <!-- Admin Card (New Post Form) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                  <h3>New Category</h3>
                    <form class="blog-form" action="{{route('admin.categories.add.post')}}" method="post">
                        @csrf
                        <label>Category Name (EN)</label>
                        <input type="text" name="title_en" required value="{{old('title_en') ?? ''}}" placeholder="Enter Category Name in English">
                        <label>Category Name (AR)</label>
                        <input type="text" name="title_ar" required value="{{old('title_ar') ?? ''}}" placeholder="Enter Category Name in Arabic">
                        <input type="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>
</html>
