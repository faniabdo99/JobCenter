@include('admin.layout.header' , ['PageTitle' => 'Edit City'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'Edit City'])
    <div class="container">
        <!-- Admin Card (New Post Form) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                  <h3>Edit City ({{$City->name_en}})</h3>
                    <form class="blog-form" action="{{route('admin.cities.update.post' , $City->id)}}" method="post">
                        @csrf
                        <label>City Name (EN)</label>
                        <input type="text" name="name_en" required value="{{$City->name_en}}" placeholder="Enter City Name in English">
                        <label>City Name (AR)</label>
                        <input type="text" name="name_ar" required value="{{$City->name_ar}}" placeholder="Enter City Name in Arabic">
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>
</html>
