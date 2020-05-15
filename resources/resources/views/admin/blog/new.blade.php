@include('admin.layout.header' , ['PageTitle' => 'New Blog Post'])

<body>
    @include('admin.layout.admin-header' , ['PageTitle' => 'New Blog Post'])
    <div class="container">
        <!-- Admin Card (New Post Form) -->
        <div class="admin-card">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <h3>New Blog Post</h3>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <form class="blog-form" action="{{route('admin.blog.new.post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input hidden id="post_id" name="id" value="{{$NextBlogId}}">
                        <label>Post Title</label>
                        <input type="text" name="title" required value="{{old('title') ?? ''}}" placeholder="Example Post Title">
                        <label>Post Slug</label>
                        <input type="text" name="slug" required value="{{old('slug') ?? ''}}" placeholder="example-post-title">
                        <label>Post Language</label>
                        <select required name="lang">
                          <option value="ar">Arabic</option>
                          <option value="en">English</option>
                        </select>
                        <label>Post Section</label>
                        <select required name="section_id">
                            <option value="" selected>Choose Section</option>
                            @forelse($Sections as $Section)
                            <option value="{{$Section->id}}">{{$Section->title}}</option>
                            @empty
                            <option value="">No Sections Yet , Please Add Some </option>
                            @endforelse
                        </select>
                        <label>Post Description</label>
                        <textarea name="description" required rows="4" placeholder="Post Description">{{old('description') ?? ''}}</textarea>
                        <label>Post Image</label>
                        <input type="file" name="image">
                        <label>Post Attachments</label>
                        <div class="dropzone mb-3" id="dropzone"></div>
                        <label>Post Body</label>
                        <textarea class="editor" name="body">{{old('body') ?? ''}}</textarea>
                        <br><br>
                        <input type="submit" value="Post">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
    <script>
        tinymce.init({
            selector: '.editor',
            plugins: "anchor autoresize link autolink advlist lists textpattern directionality image",
            toolbar: "formatselect | anchor link | bold italic | numlist bullist | ltr rtl |alignleft aligncenter alignright | image",
            block_formats: 'Paragraph=p;Heading 2=h2;Heading 3=h3;',
            menubar: "insert",
            default_link_target: "_blank"
        });

        Dropzone.autoDiscover = false;
        var MyDropZone = new Dropzone("div#dropzone" ,{
             url: "{{route('admin.blog.files')}}/" + $('#post_id').val() ,
             autoProcessQueue: true,
             acceptedFiles: '.png,.jpg,.gif,.pdf,.ptx,.docx,.xls',
             dictDefaultMessage: 'Click or Drop Your Files Here',
             parallelUploads : 10
          }
         );
    </script>
</body>

</html>
