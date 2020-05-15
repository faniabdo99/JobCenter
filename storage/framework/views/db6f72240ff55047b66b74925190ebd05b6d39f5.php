<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="emp_dashboard_sidebar jb_cover">
        <div class="emp_web_profile jb_cover">
            <img class="img-responsive" width="150" height="150" src="<?php echo e($User->profile_image); ?>" alt="<?php echo e($User->name); ?>" />
            <h4><?php echo e($User->name); ?></h4>
            <p><?php echo e('@'.$User->username); ?></p>
        </div>
        <div class="emp_follow_link jb_cover">
            <ul class="feedlist">
                <li><a href="<?php echo e(route('dash.company.home')); ?>" class="link_active"><i class="fas fa-tachometer-alt"></i> <?php echo app('translator')->get('dash/company.Dashboard'); ?> </a></li>
                <li><a href="<?php echo e(route('dash.company.edit')); ?>"> <i class="fas fa-edit"></i><?php echo app('translator')->get('dash/company.EditProfile'); ?></a></li>
                <li><a href="<?php echo e(route('dash.company.jobs')); ?>"><i class="fas fa-suitcase"></i><?php echo app('translator')->get('dash/company.ManageJobs'); ?></a></li>
                <li><a href="<?php echo e(route('dash.company.applications')); ?>"><i class="fas fa-mobile"></i><?php echo app('translator')->get('dash/company.Applications'); ?></a></li>
                <?php if($User->active != 1): ?>
                  <li data-toggle="tooltip" data-placement="top" title="<?php echo app('translator')->get('layout/parts.AccountConfirmP'); ?>" >
                    <a class="text-muted" href="javascript:;"><i class="fas fa-user-plus"></i><?php echo app('translator')->get('dash/company.PostNewJob'); ?></a>
                  </li>
                <?php else: ?>
                  <li><a href="<?php echo e(route('job.new')); ?>"><i class="fas fa-user-plus"></i><?php echo app('translator')->get('dash/company.PostNewJob'); ?></a></li>
                <?php endif; ?>
                <li><a href="<?php echo e(route('logout')); ?>"><i class="fas fa-sign-out-alt"></i><?php echo app('translator')->get('dash/company.LogOut'); ?></a></li>
            </ul>
        </div>
    </div>

</div>
<?php /**PATH C:\AppServ\www\jobcenter\resources\views/dash/company/parts/sidebar.blade.php ENDPATH**/ ?>