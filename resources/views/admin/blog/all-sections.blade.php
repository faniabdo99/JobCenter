@include('admin.layout.header' , ['PageTitle' => 'Home'])
<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'Home'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <table id="DataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Title EN</th>
                            <th scope="col">Post Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Resultes as $Res)
                        <tr>
                            <td><b>{{$Res->id}}</b></td>
                            <td>{{$Res->title_ar}}</td>
                            <td>{{$Res->title_en}}</td>
                            <td>{{$Res->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('admin.blog.section.delete' , $Res->id)}}">Delete</a> - <a href="{{route('admin.blog.section.edit' , $Res->id)}}">Edit</a></td>
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
