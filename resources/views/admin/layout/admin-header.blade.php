<section class="admin-header">
  <h1>Welcome , {{auth()->user()->name}} <br><span>{{$PageTitle ?? ''}}</span></h1>
  <ul>
    <li><a href="{{route('admin.home')}}">Home</a></li>
  </ul>
</section>
@if ($errors->any())
<div class="container-fluid">
    <div class="row my-5 text-center" width="100%">
        <div class="col-md-12 col-xs-12 col-sm-12">
            @foreach ($errors->all() as $error)
            <div class="notofication-message error-message text-center">{{ $error }}</div>
            <br>
            @endforeach
        </div>
    </div>
</div>
@endif
@if(session()->has('success'))
  <div class="container-fluid">
      <div class="row my-5 text-center" width="100%">
          <div class="notofication-message success-message text-center">{{ session()->get('success') }}</div>
      </div>
  </div>
@endif
