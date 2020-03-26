<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="emp_dashboard_sidebar jb_cover">
        <img src="{{$User->profile_image}}" class="img-responsive" alt="post_img" />
        <div class="emp_web_profile candidate_web_profile jb_cover">
            <h4>{{$User->name}}</h4>
            <p>{{'@'.$User->username}}</p>
        </div>
        @if($User->active == 0)
          <div>Account not Confirmed Bitch <a href="{{route('account.activate.resend' , $User->id)}}">Resend Confirm Email</a></div>
        @endif
        <div class="emp_follow_link jb_cover">
           <ul class="feedlist">
                <li><a href="{{route('dash.user.home')}}"><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                <li><a href="{{route('dash.user.edit')}}"> <i class="fas fa-edit"></i>edit profile</a></li>
                <li><a href="{{route('dash.user.resume')}}"><i class="fas fa-file"></i>resume </a></li>
                <li><a href="{{route('dash.like.all')}}"><i class="fas fa-heart"></i>favourite</a></li>
                <li><a href="{{route('dash.user.applications')}}"><i class="fas fa-check-square"></i>applied job</a></li>
                <li><a href="https://womenjobcenter.com/logout"><i class="fas fa-sign-out-alt"></i>Log out</a></li>
            </ul>
        </div>
    </div>
</div>
