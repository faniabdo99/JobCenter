<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="emp_dashboard_sidebar jb_cover">
        <img src="{{$User->profile_image}}" class="img-responsive" alt="post_img" />
        <div class="emp_web_profile candidate_web_profile jb_cover">
            <h4>{{$User->name}}</h4>
            <p>{{'@'.$User->username}}</p>
        </div>
        <div class="emp_follow_link jb_cover">
           <ul class="feedlist">
                <li><a href="{{route('dash.user.home')}}" class="link_active"><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                <li><a href="{{route('dash.user.edit')}}"> <i class="fas fa-edit"></i>edit profile</a></li>
                <li><a href="{{route('dash.user.resume')}}"><i class="fas fa-file"></i>resume </a></li>
                <li><a href="candidate_favourite_job.html"><i class="fas fa-heart"></i>favourite</a></li>
                <li><a href="candidate_applied_job.html"><i class="fas fa-check-square"></i>applied job</a></li>
            </ul>
        </div>
    </div>
</div>