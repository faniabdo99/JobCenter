<?php echo $__env->make('main.layout.header' , ['PageTitle' => $Company->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('main.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-7">
                        <h1><?php echo e($Company->name); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company_details_wrapper jb_cover" style="background-image:url('<?php echo e($Company->cover_image); ?>');"></div>
    <div class="webstrot_tech_detail jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="job_listing_left_fullwidth jb_cover" >
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                <div class="jp_job_post_side_img">
                                    <img width="92" height="92" src="<?php echo e($Company->profile_image); ?>" alt="<?php echo e($Company->name); ?>">
                                </div>
                                <div class="jp_job_post_right_cont web_text">
                                    <h4><?php echo e($Company->name); ?></h4>
                                    <ul>
                                        <?php if($Company->city_id): ?><li><i class="flaticon-location-pointer"></i>&nbsp; <?php echo e($Company->City->name); ?></li><?php endif; ?>
                                        <?php if($Company->category_id): ?><li><i class="fa fa-th-large"></i>&nbsp; <?php echo e($Company->Category->title); ?></li><?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                                <div class="jp_job_post_right_btn_wrapper web_single_btn">
                                    <ul>
                                        <?php if(auth()->guard()->check()): ?>
                                          <?php
                                          $isLikedByUser = \App\Like::where([
                                            ['item_type' , 'company'],
                                            ['item_id' , $Company->id],
                                            ['user_id' , auth()->user()->id],
                                          ])->count();
                                          if($isLikedByUser > 0){
                                            $Liked = 'change change22';
                                          }
                                          ?>
                                          <li>
                                              <div class="job_adds_right <?php echo e($Liked ?? ''); ?>">
                                                  <a class="likeButton" href="javascript:;" item-type="company" action-route="<?php echo e(route('like.post')); ?>" item-id="<?php echo e($Company->id); ?>"><i class="far fa-heart"></i></a>
                                              </div>
                                          </li>
                                        <?php endif; ?>
                                        <li><a href="#open_jobs"><?php echo e(count($Company->Jobs)); ?> <?php echo app('translator')->get('layout/parts.JobOpen'); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="jb_listing_single_overview jb_cover">
                        <div class="jp_job_des jb_cover">
                            <h2 class="job_description_heading"><?php echo app('translator')->get('layout/parts.About'); ?></h2>
                            <p><?php echo e($Company->description); ?></p>
                        </div>
                        <?php if($Company->profile_pdf): ?>
                        <div class="jp_job_res jb_cover">
                            <h2 class="job_description_heading"> <?php echo app('translator')->get('main/company.CompanyProfile'); ?></h2>
                            <embed src="<?php echo e($Company->Profile); ?>" style="height:85vh;width:100%">
                        </div>
                        <?php endif; ?>
                        <?php if($Company->Attachments): ?>
                          <ul class="p-3">
                            <?php $__empty_1 = true; $__currentLoopData = $Company->Attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                              <li><a target="_blank" href="<?php echo e(url('storage/app/public/companies/files/'.$file->company_id.'/'.$file->source)); ?>"><?php echo e($file->source); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <?php endif; ?>
                          </ul>
                        <?php endif; ?>
                    </div>
                    <div id="open_jobs" class="related_job_wrapper jb_cover">
                        <h1 class="related_job"><?php echo app('translator')->get('layout/parts.JobOpen'); ?></h1>
                        <div class="related_product_job cmpny_related_jobs jb_cover">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <?php $__empty_1 = true; $__currentLoopData = $Jobs1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="job_listing_left_fullwidth cmpny_single_slidr jb_cover">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                                <div class="jp_job_post_side_img">
                                                    <img src="<?php echo e($Job->Company->profile_image); ?>" alt="<?php echo e($Job->Company->name); ?>" />
                                                    <br> <span><?php echo e($Job->Company->name); ?></span>
                                                </div>
                                                <div class="jp_job_post_right_cont">
                                                    <h4><a href="<?php echo e(route('job' , $Job->id)); ?>"><?php echo e($Job->title); ?></a></h4>
                                                    <ul>
                                                        <?php if($Job->salary): ?><li><i class="flaticon-cash"></i>&nbsp; <?php echo e($Job->salary); ?> <?php echo app('translator')->get('layout/parts.IQD'); ?> / <?php echo app('translator')->get('layout/parts.Month'); ?></li><?php endif; ?>
                                                        <li><i class="flaticon-location-pointer"></i>&nbsp; <?php echo e($Job->City->name); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                                <div class="jp_job_post_right_btn_wrapper">
                                                    <ul>
                                                        <li></li>
                                                        <li><a href="javascript:;"><?php echo e($Job->JobType); ?></a></li>
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                </div>
                                <div class="item">
                                <?php $__empty_1 = true; $__currentLoopData = $Jobs2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="job_listing_left_fullwidth cmpny_single_slidr jb_cover">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                            <div class="jp_job_post_side_img">
                                                <img src="<?php echo e($Job->Company->profile_image); ?>" alt="<?php echo e($Job->Company->name); ?>" />
                                                <br> <span><?php echo e($Job->Company->name); ?></span>
                                            </div>
                                            <div class="jp_job_post_right_cont">
                                                <h4><a href="<?php echo e(route('job' , $Job->id)); ?>"><?php echo e($Job->title); ?></a></h4>
                                                <ul>
                                                    <?php if($Job->salary): ?><li><i class="flaticon-cash"></i>&nbsp; <?php echo e($Job->salary); ?> <?php echo app('translator')->get('layout/parts.IQD'); ?> / <?php echo app('translator')->get('layout/parts.Month'); ?></li><?php endif; ?>
                                                    <li><i class="flaticon-location-pointer"></i>&nbsp; <?php echo e($Job->City->name); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                                            <div class="jp_job_post_right_btn_wrapper">
                                                <ul>
                                                    <li></li>
                                                    <li><a href="javascript:;"><?php echo e($Job->JobType); ?></a></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1><?php echo app('translator')->get('main/company.CompanyOverview'); ?></h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                          <?php if($Company->category_id): ?>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="far fa-calendar"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li><?php echo app('translator')->get('layout/parts.Category'); ?>:</li>
                                        <li><?php echo e($Company->Category->title); ?></li>
                                    </ul>
                                </div>
                            </div>
                          <?php endif; ?>
                          <?php if($Company->city_id || $Company->address): ?>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                      <li><?php echo app('translator')->get('layout/parts.Location'); ?>:</li>
                                        <?php if($Company->address): ?>
                                        <li><?php echo e($Company->address); ?><li>
                                        <?php elseif($Company->city_id): ?>
                                        <li><?php echo e($Company->City->name); ?></li>
                                        <?php else: ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                          <?php endif; ?>
                            <?php if($Company->phone): ?>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li><?php echo app('translator')->get('layout/parts.PhoneNumber'); ?>:</li>
                                        <li><?php echo e($Company->phone); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>
                            <?php if($Company->contact_email): ?>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li><?php echo app('translator')->get('layout/parts.Email'); ?>:</li>
                                        <li><a href="mailto:<?php echo e($Company->contact_email); ?>"><?php echo e($Company->contact_email); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                          <?php endif; ?>
                            <?php if($Company->company_size): ?>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="flaticon-man-user"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li><?php echo app('translator')->get('layout/parts.CompanySize'); ?>:</li>
                                        <li><?php echo e($Company->company_size); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if($Company->website): ?>
                            <div class="jp_listing_overview_list_main_wrapper jb_cover">
                                <div class="jp_listing_list_icon">
                                    <i class="fas fa-globe-asia"></i>
                                </div>
                                <div class="jp_listing_list_icon_cont_wrapper">
                                    <ul>
                                        <li><?php echo app('translator')->get('layout/parts.Website'); ?>:</li>
                                        <li><a target="_blank" href="<?php echo e($Company->website); ?>"><?php echo e($Company->website); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>
                            <?php if($Company->profile_pdf): ?>
                            <div class="header_btn search_btn news_btn overview_btn  jb_cover">
                                <a target="_blank" href="<?php echo e($Company->Profile); ?>"><?php echo app('translator')->get('main/company.DownloadProfile'); ?></a>
                            </div>
                            <?php endif; ?>
                          <?php endif; ?>
                        </div>
                    </div>
                    <?php if($Company->facebook || $Company->twitter || $Company->linkedin || $Company->google): ?>
                    <div class="job_filter_category_sidebar jb_cover">
                        <div class="job_filter_sidebar_heading jb_cover">
                            <h1><?php echo app('translator')->get('layout/parts.SocialProfile'); ?></h1>
                        </div>
                        <div class="job_overview_header jb_cover">
                            <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                                <ul>
                                    <li></li>
                                    <?php if($Company->facebook): ?><li><a href="<?php echo e($Company->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li><?php endif; ?>
                                    <?php if($Company->twitter): ?><li><a href="<?php echo e($Company->twitter); ?>"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
                                    <?php if($Company->linkedin): ?><li><a href="<?php echo e($Company->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a></li><?php endif; ?>
                                    <?php if($Company->google): ?><li><a href="<?php echo e($Company->google); ?>"><i class="fab fa-google-plus-g"></i></a></li><?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('main.layout.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('main.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('main.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jobcenter\resources\views/main/company.blade.php ENDPATH**/ ?>