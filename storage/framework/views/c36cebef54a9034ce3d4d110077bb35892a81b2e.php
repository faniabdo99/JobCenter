<?php
if(auth()->check()){
  if(auth()->user()->type == 'user'){
    $TheDamnWord = __('layout/parts.Job');
  }else{
    $TheDamnWord = __('layout/parts.Employee');
  }
}else{
  $TheDamnWord = __('layout/parts.Job');
}
?>
<div class="news_letter_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_newsletter_wrapper pd00 jb_cover">
                        <div class="jb_newslwtteter_left">
                            <h2><?php echo app('translator')->get('parts/cta.LookingFor'); ?> <?php echo e($TheDamnWord); ?> ?</h2>
                        </div>
                        <div class="jb_newslwtteter_button">
                            <div class="header_btn search_btn news_btn jb_cover">
                              <?php if(auth()->guard()->check()): ?>
                                <?php if(auth()->user()->type == 'user'): ?>
                                  <a href="<?php echo e(route('jobs')); ?>"><?php echo app('translator')->get('layout/parts.SearchJobs'); ?></a>
                                <?php else: ?>
                                    <?php if(auth()->user()->active == 1): ?>
                                        <a href="<?php echo e(route('job.new')); ?>"><?php echo app('translator')->get('layout/parts.PostNewJob'); ?></a>
                                    <?php else: ?>
                                      <a href="javascript:;" title="Your account is not activated !"><?php echo app('translator')->get('layout/parts.PostNewJob'); ?></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                              <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(route('signup')); ?>"><?php echo app('translator')->get('layout/parts.Signup'); ?></a>
                              <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\jobcenter\resources\views/main/layout/cta.blade.php ENDPATH**/ ?>