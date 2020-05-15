@include('admin.layout.header' , ['PageTitle' => 'New City'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'New City'])
    <div class="container">
        <!-- Admin Card (New Post Form) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                  <h3>New City</h3>
                    <form class="blog-form" action="{{route('admin.cities.add.post')}}" method="post">
                        @csrf
                        <label>City Name (EN)</label>
                        <input type="text" name="name_en" required value="{{old('name_en') ?? ''}}" placeholder="Enter City Name in English">
                        <label>City Name (AR)</label>
                        <input type="text" name="name_ar" required value="{{old('name_ar') ?? ''}}" placeholder="Enter City Name in Arabic">
                        <input type="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>
</html>
