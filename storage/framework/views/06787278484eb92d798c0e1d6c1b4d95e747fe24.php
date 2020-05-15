<?php echo $__env->make('dash.layout.header' , ['PageTitle' => 'Dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('dash.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 col-sm-12">
                        <h1><?php echo app('translator')->get('dash/company.Dashboard'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--employee dashboard wrapper start-->
    <div class="employe_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('dash.company.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                        <div class="jp_job_post_side_img">
                                            <img width="92" height="92" src="<?php echo e($User->profile_image); ?>" alt="post_img">
                                        </div>
                                        <div class="jp_job_post_right_cont">
                                            <h4><?php echo e($User->name); ?></h4>
                                            <ul>
                                                <?php if($User->category_id): ?><li><i class="fas fa-suitcase"></i>&nbsp; <?php echo e($User->Category->title); ?></li><?php endif; ?>
                                                <?php if($User->city): ?><li><i class="flaticon-location-pointer"></i>&nbsp; <?php echo e($User->city); ?></li><?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1><?php echo e(count($User->Jobs)); ?></h1>
                                    <p><?php echo app('translator')->get('dash/company.JobPosted'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img ress">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1><?php echo e($User->LikesCount()); ?></h1>
                                    <p><?php echo app('translator')->get('dash/company.CompanyLikes:'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img greens">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1><?php echo e(visits($User)->count()); ?></h1>
                                    <p><?php echo app('translator')->get('dash/company.TotalPageView'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="emp_job_post jb_cover">
                                <div class="emp_job_side_img parts">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="emp_job_side_text">
                                    <h1><?php echo e(count($User->Application())); ?></h1>
                                    <p><?php echo app('translator')->get('dash/company.TotalApplications'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> <?php echo app('translator')->get('dash/company.CompanyOverview'); ?></h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                  <?php if($User->category_id): ?>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li><?php echo app('translator')->get('dash/company.Categories:'); ?></li>
                                                <li><?php echo e($User->Category->title); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($User->city_id): ?>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li><?php echo app('translator')->get('dash/company.Location:'); ?></li>
                                                <li><?php echo e($User->City->Name); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($User->phone): ?>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li><?php echo app('translator')->get('dash/company.Hotline:'); ?></li>
                                                <li><?php echo e($User->phone); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li><?php echo app('translator')->get('dash/company.Email:'); ?></li>
                                                <li><a href="mailto:<?php echo e($User->email); ?>"><?php echo e($User->email); ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php if($User->company_size): ?>
                                    <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="flaticon-man-user"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li><?php echo app('translator')->get('dash/company.CompanySize:'); ?></li>
                                                <li><?php echo e($User->company_size); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($User->website): ?>
                                    <div class="jp_listing_overview_list_main_wrapper dcv jb_cover">
                                        <div class="jp_listing_list_icon">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li><?php echo app('translator')->get('dash/company.Website:'); ?></li>
                                                <li><a target="_blank" href="<?php echo e($User->website); ?>"><?php echo e($User->website); ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                          <?php if($User->facebook != null || $User->twitter != null || $User->google != null || $User->linkedin != null): ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="job_filter_category_sidebar jb_cover">
                                        <div class="job_filter_sidebar_heading jb_cover">
                                            <h1> <?php echo app('translator')->get('dash/company.SocialProfile'); ?></h1>
                                        </div>
                                        <div class="job_overview_header jb_cover">
                                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                                <ul>
                                                    <li></li>
                                                    <?php if($User->facebook): ?><li><a target="_blank" href="<?php echo e($User->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li><?php endif; ?>
                                                    <?php if($User->twitter): ?><li><a target="_blank" href="<?php echo e($User->twitter); ?>"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
                                                    <?php if($User->linkedin): ?><li><a target="_blank" href="<?php echo e($User->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a></li><?php endif; ?>
                                                    <?php if($User->google): ?><li><a target="_blank" href="<?php echo e($User->google); ?>"><i class="fab fa-instagram"></i></a></li><?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> <?php echo app('translator')->get('dash/company.RecentApplicants'); ?></h1>
                                </div>
                                <?php $__empty_1 = true; $__currentLoopData = $User->LatestApplications(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="job_overview_header apps_wrapper jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img width="60" height="60" src="<?php echo e($Application->User->profile_image); ?>" alt="<?php echo e($Application->User->name); ?>">
                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4><?php echo e($Application->Job->title); ?></h4>
                                                <ul>
                                                    <li><?php echo e($Application->name); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p><?php echo app('translator')->get('dash/company.NoData'); ?></p>
                              <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('main.layout.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dash.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dash.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\AppServ\www\jobcenter\resources\views/dash/company/index.blade.php ENDPATH**/ ?>