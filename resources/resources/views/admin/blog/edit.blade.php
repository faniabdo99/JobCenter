@include('admin.layout.header' , ['PageTitle' => 'New Blog Post'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'New Blog Post'])
    <div class="container">
        <!-- Admin Card (New Post Form) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <h3>Update Blog Post</h3>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <form class="blog-form" action="{{route('admin.blog.update.post' , $Post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Post Title</label>
                        <input type="text" name="title" required value="{{$Post->title ?? old('title') ?? ''}}" placeholder="Example Post Title">
                        <label>Post Slug</label>
                        <input type="text" name="slug" required value="{{$Post->slug ?? old('slug') ?? ''}}" placeholder="example-post-title">
                        <label>Post Section</label>
                        <select required name="section_id">
                          <option value="{{$Post->section_id}}" selected>Not Changed</option>
                          @forelse($Sections as $Section)
                            <option value="{{$Section->id}}">{{$Section->title}}</option>
                          @empty
                             <option value="">No Sections Yet , Please Add Some </option>
                          @endforelse
                        </select>
                        <label>Post Description</label>
                        <textarea name="description" required rows="4" placeholder="Post Description" >{{$Post->description ?? old('description') ?? ''}}</textarea>
                        <label>Post Image (Unchanged)</label>
                        <input type="file" name="image">
                        <label>Post Body</label>
                        <textarea class="editor" name="body">{!! $Post->body ?? old('body') ?? '' !!}</textarea>
                        <br><br>
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
    <script>
        tinymce.init({
            selector: '.editor',
            plugins: "anchor autoresize link autolink advlist lists textpattern directionality image imagetools",
            toolbar: "formatselect | anchor link | bold italic | numlist bullist | ltr rtl |alignleft aligncenter alignright | image",
            block_formats: 'Paragraph=p;Heading 2=h2;Heading 3=h3;',
            menubar: "insert",
            default_link_target: "_blank"
        });
        </script>
</body>
</html>
