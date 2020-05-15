<?php echo $__env->make('dash.layout.header' , ['PageTitle' => 'Posted Jobs'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <h1> <?php echo app('translator')->get('dash/company.ManageJobs'); ?> (<?php echo e(count($Jobs)); ?>)</h1>
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
                            <div class="job_main_overflow jb_cover">
                                <div class="latest_job_overlow jb_cover">
                                    <div class="manage_jobs_wrapper jb_cover">
                                        <div class="job_list mange_list">
                                            <h6><?php echo app('translator')->get('dash/company.JobTitle'); ?></h6>
                                        </div>
                                        <div class="job_list_next mange_list">
                                            <h6><?php echo app('translator')->get('dash/company.Applications'); ?></h6>
                                        </div>
                                        <div class="job_list_next mange_list">
                                            <h6><?php echo app('translator')->get('dash/company.Category'); ?></h6>
                                        </div>
                                        <div class="job_list_next mange_list">
                                            <h6><?php echo app('translator')->get('dash/company.Action'); ?></h6>
                                        </div>
                                    </div>
                                    <?php $__empty_1 = true; $__currentLoopData = $Jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <h6><a href="<?php echo e(route('job' , $Job->id)); ?>"><?php echo e($Job->title); ?></a></h6>
                                            <p> <i class="far fa-calendar"></i> <?php echo app('translator')->get('dash/company.DatePosted'); ?> : <?php echo e($Job->created_at->format('d M Y')); ?></p>
                                        </div>
                                        <div class="job_list_next">
                                            <p><a href="<?php echo e(route('dash.company.applications')); ?>"><?php echo e(count($Job->Applications)); ?> Applications</a></p>
                                        </div>
                                        <div class="job_list_next">
                                            <p class="gn"><?php echo e($Job->Category->title); ?></p>
                                        </div>
                                        <div class="job_list_next">
                                            <ul>
                                                <li><a href="<?php echo e(route('job' , $Job->id)); ?>"><i class="fas fa-eye"></i></a></li>
                                                <li><a href="<?php echo e(route('dash.company.job.edit' , $Job->id)); ?>"><i class="fas fa-edit"></i></a></li>
                                                <li><a href="<?php echo e(route('dash.company.job.delete' , $Job->id)); ?>"><i class="fas fa-trash-alt"></i></a></li>
                                            </ul>
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
    </div>
    <!--employee dashboard wrapper end-->
    <!-- newsletter wrapper start -->
    <div class="jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2> <?php echo app('translator')->get('dash/company.LookingForAJob'); ?></h2>
                            <p><?php echo app('translator')->get('dash/company.YourNextLevelProductDevelopemntCompanyAssetsYourNextLevelProduct'); ?> </p>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">

                                <a href="#"><?php echo app('translator')->get('dash/company.Submit'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter wrapper end -->
    <!-- footer Wrapper Start -->
    <?php echo $__env->make('dash.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer Wrapper End -->
    <!--custom js files-->
    <?php echo $__env->make('dash.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- custom js-->
</body>

</html>
<?php /**PATH C:\AppServ\www\jobcenter\resources\views/dash/company/jobs.blade.php ENDPATH**/ ?>