<?php echo $__env->make('main.layout.header', ['PageTitle' => __('layout/titles.Companies')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('main.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- navi wrapper End -->
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-8">
                        <h1><?php echo app('translator')->get('layout/titles.Companies'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header wrapper end -->
    <!--companies wrapper start -->
    <div class="companies_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $Companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="company_main_wrapper">
                            <div class="company_img_wrapper">
                                <img width="92" height="92" src="<?php echo e($Company->profile_image); ?>" alt="<?php echo e($Company->name); ?>">
                                <div class="btc_team_social_wrapper">
                                    <h1><?php echo $Company->City->name ?? '<i class="fas fa-star"></i>'; ?></h1>
                                </div>
                            </div>
                            <div class="opening_job">
                              <h1><a href="<?php echo e(route('company' , [$Company->id , $Company->slug])); ?>"><?php echo e(count($Company->Jobs)); ?> <?php echo app('translator')->get('layout/parts.JobOpen'); ?></a></h1>
                            </div>
                            <div class="company_img_cont_wrapper">
                                <h4><?php echo e($Company->name); ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p><?php echo app('translator')->get('layout/parts.NoData'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- companies wrapper end -->
    <?php echo e($Companies->links('main.layout.pagenation')); ?>

    <!-- news app wrapper start-->
    <?php echo $__env->make('main.layout.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    <?php echo $__env->make('main.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer Wrapper End -->
    <!--custom js files-->
    <?php echo $__env->make('main.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- custom js-->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\jobcenter\resources\views/main/companies.blade.php ENDPATH**/ ?>