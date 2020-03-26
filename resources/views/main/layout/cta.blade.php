<div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper pd00 jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2>Looking For A Job ?</h2>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">
                              @auth
                                <a href="{{route('jobs')}}">Search Jobs</a>
                              @endauth
                              @guest
                                <a href="{{route('signup')}}">Signup</a>
                              @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
