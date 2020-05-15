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
                            <th scope="col">Company</th>
                            <th scope="col">Applications</th>
                            <th scope="col">Post Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Resultes as $Res)
                        <tr>
                            <td><b>{{$Res->id}}</b></td>
                            <td><a target="_blank" href="{{route('job' , $Res->id)}}">{{$Res->title}}</a></td>
                            <td><a target="_blank" href="{{route('company' , $Res->Company->id)}}">{{$Res->Company->name}}</a></td>
                            <td>{{count($Res->Applications)}}</td>
                            <td>{{$Res->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('admin.job.delete' , $Res->id)}}">Delete</a></td>
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
