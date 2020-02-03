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
                            <th scope="col">Job Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Candidate</th>
                            <th scope="col">Post Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Resultes as $Res)
                        <tr>
                            <td><b>{{$Res->id}}</b></td>
                            <td><a target="_blank" href="{{route('job' , $Res->id)}}">{{$Res->Job->title}}</a></td>
                            <td><a target="_blank" href="{{route('company' , $Res->Job->Company->id)}}">{{$Res->Job->Company->name}}</a></td>
                            <td>{{$Res->User->name}}</td>
                            <td>{{$Res->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('admin.application.delete' , $Res->id)}}">Delete</a></td>
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
