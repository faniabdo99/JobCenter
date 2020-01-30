@include('admin.layout.header' , ['PageTitle' => 'Home'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'Home'])
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <table id="DataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Code</th>
                            <th scope="col">Join Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($Users as $User)
                        <tr>
                            <td>{{$User->id}}</td>
                            <td>{{$User->name}}</td>
                            <td>{{$User->email}}</td>
                            <td>{{$User->code}}</td>
                            <td>{{$User->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('admin.user.delete' , $User->id)}}">Delete</a></td>
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
