@include('admin.layout.header' , ['PageTitle' => 'Blog Comments'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'Blog Comments'])
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <table id="DataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Blog Post</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Username</th>
                            <th scope="col">Post Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Resultes as $Res)
                        <tr>
                            <td><b>{{$Res->id}}</b></td>
                            <td><a target="_blank" href="{{route('blog.post' , $Res->Post->slug)}}">{{$Res->Post->title}}</a></td>
                            <td>{{$Res->snippet}}</td>
                            <td>{{$Res->User->name}}</td>
                            <td>{{$Res->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('admin.comment.delete' , $Res->id)}}">Delete</a></td>
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
