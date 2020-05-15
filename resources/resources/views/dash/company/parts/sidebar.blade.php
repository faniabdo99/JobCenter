<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="emp_dashboard_sidebar jb_cover">
        <div class="emp_web_profile jb_cover">
            <img class="img-responsive" width="150" height="150" src="{{$User->profile_image}}" alt="{{$User->name}}" />
            <h4>{{$User->name}}</h4>
            <p>{{'@'.$User->username}}</p>
        </div>
        <div class="emp_follow_link jb_cover">
            <ul class="feedlist">
                <li><a href="{{route('dash.company.home')}}" class="link_active"><i class="fas fa-tachometer-alt"></i> @lang('dash/company.Dashboard') </a></li>
                <li><a href="{{route('dash.company.edit')}}"> <i class="fas fa-edit"></i>@lang('dash/company.EditProfile')</a></li>
                <li><a href="{{route('dash.company.jobs')}}"><i class="fas fa-suitcase"></i>@lang('dash/company.ManageJobs')</a></li>
                <li><a href="{{route('dash.company.applications')}}"><i class="fas fa-mobile"></i>@lang('dash/company.Applications')</a></li>
                @if($User->active != 1)
                  <li data-toggle="tooltip" data-placement="top" title="@lang('layout/parts.AccountConfirmP')" >
                    <a class="text-muted" href="javascript:;"><i class="fas fa-user-plus"></i>@lang('dash/company.PostNewJob')</a>
                  </li>
                @else
                  <li><a href="{{route('job.new')}}"><i class="fas fa-user-plus"></i>@lang('dash/company.PostNewJob')</a></li>
                @endif
                <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>@lang('dash/company.LogOut')</a></li>
            </ul>
        </div>
    </div>

</div>
