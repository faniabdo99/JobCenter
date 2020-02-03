@include('admin.layout.header' , ['PageTitle' => 'Categories'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'Categories'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
              <a class="btn btn-success mb-5" href="{{route('admin.categories.add.get')}}"><i class="fas fa-plus"></i> Add New Category</a>
                <table id="DataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name (EN)</th>
                            <th scope="col">Name (AR)</th>
                            <th scope="col">Jobs</th>
                            <th scope="col">Post Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Resultes as $Res)
                        <tr>
                            <td><b>{{$Res->id}}</b></td>
                            <td>{{$Res->title_en}}</td>
                            <td>{{$Res->title_ar}}</td>
                            <td>{{count($Res->Jobs)}}</td>
                            <td>{{$Res->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('admin.categories.delete' , $Res->id)}}">Delete</a> - <a href="{{route('admin.categories.update.get' , $Res->id)}}">Edit</a></td>
                        </tr>
                        @empty
                        <p>Nothing Yet</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>

</html>
