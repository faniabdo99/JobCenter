<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="emp_dashboard_sidebar jb_cover">
        <div class="emp_web_profile jb_cover">
            <img class="img-responsive" width="100" height="150" src="{{$User->profile_image}}" alt="{{$User->name}}" />
            <h4>{{$User->name}}</h4>
            <p>{{'@'.$User->username}}</p>
        </div>
        <div class="emp_follow_link jb_cover">
            <ul class="feedlist">
                <li><a href="comp_employer_dashboard.html" class="link_active"><i class="fas fa-tachometer-alt"></i> dashboard </a></li>
                <li><a href="comp_employer_edit_profile.html"> <i class="fas fa-edit"></i>edit profile</a></li>
                <li><a href="comp_company_page.html"><i class="fas fa-file"></i>company page </a></li>
                <li><a href="comp_employer_manage_jobs.html"><i class="fas fa-suitcase"></i>manage jobs</a></li>
                <li><a href="comp_applications.html"><i class="fas fa-mobile"></i>applications</a></li>
                <li><a href="comp_post_new_job.html"><i class="fas fa-user-plus"></i>post new job</a></li>
            </ul>
        </div>
    </div>
    
</div>