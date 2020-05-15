@php
if(auth()->check()){
  if(auth()->user()->type == 'user'){
    $TheDamnWord = __('layout/parts.Job');
  }else{
    $TheDamnWord = __('layout/parts.Employee');
  }
}else{
  $TheDamnWord = __('layout/parts.Job');
}
@endphp
<div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper pd00 jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2>@lang('parts/cta.LookingFor') {{$TheDamnWord}} ?</h2>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">
                              @auth
                                @if(auth()->user()->type == 'user')
                                  <a href="{{route('jobs')}}">@lang('layout/parts.SearchJobs')</a>
                                @else
                                    @if(auth()->user()->active == 1)
                                        <a href="{{route('job.new')}}">@lang('layout/parts.PostNewJob')</a>
                                    @else
                                      <a href="javascript:;" title="Your account is not activated !">@lang('layout/parts.PostNewJob')</a>
                                    @endif
                                @endif
                              @endauth
                              @guest
                                <a href="{{route('signup')}}">@lang('layout/parts.Signup')</a>
                              @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
