<?php
$UsersCount = App\User::all()->count();
$CompaniesCount = App\User::where('type' , 'company')->count();
$ApplicationCount = App\Application::all()->count();
?>
<div class="counter_wrapper jb_cover">
    <div class="counter_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="counter_mockup_design jb_cover">
                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                    <img src="<?php echo e(url('public/main/images/')); ?>/mockup2.png" class="img-responsive" alt="img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="counter_right_wrapper jb_cover">
                    <h1><?php echo app('translator')->get('parts/counter.CounterH'); ?></h1>
                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="count-description"><span class="timer"><?php echo e($UsersCount); ?></span>
                                <p class="con2"><?php echo app('translator')->get('layout/parts.User'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="count-description"> <span class="timer"><?php echo e($CompaniesCount); ?></span>
                                <p class="con2"><?php echo app('translator')->get('layout/parts.Company'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="count-description"> <span class="timer"><?php echo e($ApplicationCount); ?></span>
                                <p class="con2"><?php echo app('translator')->get('layout/parts.Application'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\AppServ\www\jobcenter\resources\views/main/layout/counter.blade.php ENDPATH**/ ?>