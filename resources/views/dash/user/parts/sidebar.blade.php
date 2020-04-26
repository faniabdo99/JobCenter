<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="emp_dashboard_sidebar jb_cover">
        <img src="{{$User->profile_image}}" class="img-responsive" alt="{{$User->name}}" />
        <div class="emp_web_profile candidate_web_profile jb_cover">
            <h4>{{$User->name}}</h4>
            <p>{{'@'.$User->username}}</p>
        </div>
        <div class="emp_follow_link jb_cover">
           <ul class="feedlist">
                <li><a href="{{route('dash.user.home')}}"><i class="fas fa-tachometer-alt"></i> @lang('dash/user.Dashboard') </a></li>
                <li><a href="{{route('dash.user.edit')}}"> <i class="fas fa-edit"></i>@lang('dash/user.EditProfile')</a></li>
                <li><a href="{{route('dash.user.resume')}}"><i class="fas fa-file"></i>@lang('dash/user.Resume') </a></li>
                <li><a href="{{route('dash.like.all')}}"><i class="fas fa-heart"></i>@lang('dash/user.Favourite')</a></li>
                <li><a href="{{route('dash.user.applications')}}"><i class="fas fa-check-square"></i>@lang('dash/user.AppliedJobS')</a></li>
                <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>@lang('dash/user.LogOut')</a></li>
            </ul>
        </div>
    </div>
</div>
