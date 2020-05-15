<?php echo $__env->make('main.layout.header' , ['PageTitle' => 'Find Jobs Online'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('main.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="jb_banner_wrapper jb_cover">
        <div class="jb_banner_left">
            <h1><?php echo app('translator')->get('main/index.IndexTopH'); ?></h1>
            <p><?php echo app('translator')->get('main/index.IndexTopP'); ?></p>
            <?php
            $SearchCategories = App\Category::orderBy('id' , 'desc')->get();
            $SearchCites = App\City::orderBy('id' , 'desc')->get();
            ?>
            <form action="<?php echo e(route('search')); ?>" method="get">
                <div class="contect_form3">
                    <input type="text" name="query" placeholder="<?php echo app('translator')->get('layout/forms.IndexSearchQuery'); ?>">
                </div>
                <div class="select_box">
                    <i class="flaticon-map"></i>
                    <select name="city">
                        <option value=""><?php echo app('translator')->get('layout/parts.Location'); ?></option>
                        <?php $__empty_1 = true; $__currentLoopData = $SearchCites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SearchCity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($SearchCity->id); ?>"><?php echo e($SearchCity->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <option value=""><?php echo app('translator')->get('layout/parts.NoData'); ?></option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="select_box select_box_2">
                    <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                    <select name="category">
                        <option value=""><?php echo app('translator')->get('layout/parts.Category'); ?></option>
                        <?php $__empty_1 = true; $__currentLoopData = $SearchCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SearchCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($SearchCategory->id); ?>"><?php echo e($SearchCategory->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <option value=""><?php echo app('translator')->get('layout/parts.NoData'); ?></option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="select_box">
                    <i class="flaticon-statistics"></i>
                    <select name="type">
                        <option value=""><?php echo app('translator')->get('layout/parts.JobType'); ?></option>
                        <option value="full"><?php echo app('translator')->get('layout/parts.FullTime'); ?></option>
                        <option value="part"><?php echo app('translator')->get('layout/parts.PartTime'); ?></option>
                        <option value="rotation"><?php echo app('translator')->get('layout/parts.Rotation'); ?></option>
                        <option value="temporary"><?php echo app('translator')->get('layout/parts.Temporary'); ?></option>
                    </select>
                </div>
                <div class="header_btn search_btn jb_cover">
                    <button type="submit"><i class="fas fa-search"></i><?php echo app('translator')->get('layout/parts.Search'); ?></button>
                </div>
            </form>
        </div>
        <div class="jb_banner_right d-none d-sm-none d-md-none d-lg-none d-xl-block">
        </div>
    </div>
    <!-- job banner wrapper end-->
    <!-- job category wrapper start-->
    <div class="jb_category_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">
                        <h3><?php echo app('translator')->get('main/index.IndexBrowseByCategoryH'); ?></h3>
                        <p><?php echo app('translator')->get('main/index.IndexBrowseByCategoryP'); ?></p>
                    </div>
                </div>
                <?php $__empty_1 = true; $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="jb_browse_category jb_cover">
                        <a href="<?php echo e(route('search' , ['category' , $Category->id])); ?>">
                            <div class="hover-block"></div>
                            <i class="<?php echo e($Category->icon); ?>"></i>
                            <h3><?php echo e($Category->title); ?></h3>
                            <p>(<?php echo e(count($Category->Jobs)); ?> <?php echo app('translator')->get('layout/parts.Jobs'); ?>)</p>
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p><?php echo app('translator')->get('layout/parts.NoData'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="header_btn search_btn load_btn jb_cover">
            <a href="<?php echo e(route('categories')); ?>"><?php echo app('translator')->get('layout/parts.Categories'); ?></a>
        </div>
    </div>
    </div>
    </div>
    <!-- job category wrapper end-->
    <!-- grow next Wrapper Start -->
    <div class="grow_next_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="jb_heading_wraper left_jb_jeading">
                        <h3><?php echo app('translator')->get('layout/parts.About'); ?></h3>
                    </div>
                    <div class="grow_next_text jb_cover">
                        <p>
                          <?php echo app('translator')->get('main/about.AboutDesc'); ?>
                        </p>
                        <div class="header_btn search_btn jb_cover">
                            <a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('layout/parts.DiscoverMore'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="grow_next_img jb_cover">
                        <img src="<?php echo e(url('public/main/images/')); ?>/Picture2.png" class="img-responsive" alt="img" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- grow next Wrapper end -->
    <!-- latest job wrapper start-->
    <div class="latest_job_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="job_main_overflow jb_cover">
                    <div class="latest_job_overlow jb_cover">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="latest_job_toper jb_cover">
                                <h1><?php echo app('translator')->get('layout/parts.LatestJobs'); ?></h1>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="tab-content">
                                <div id="home" class="tab-pane active">
                                    <?php $__empty_1 = true; $__currentLoopData = $TopSixJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="latest_job_box jb_cover">
                                        <div class="job_list">
                                            <a href="<?php echo e(route('job' , [$Job->id , $Job->slug])); ?>"><img src="<?php echo e($Job->Company->profile_image); ?>" alt="<?php echo e($Job->Company->name); ?>">
                                                <h6><?php echo e($Job->title); ?></h6>
                                            </a>
                                        </div>
                                        <div class="job_list_next">
                                            <p><?php echo e($Job->Company->name); ?></p>
                                        </div>
                                        <div class="job_list_next">
                                            <p><?php echo e($Job->JobType); ?></p>
                                        </div>
                                        <div class="job_list_next">
                                            <p><?php echo e($Job->City->name); ?></p>
                                        </div>
                                        <?php if($Job->Salary): ?>
                                        <div class="job_list_next">
                                            <p><?php echo e($Job->Salary); ?> <?php echo app('translator')->get('layout/parts.IQD'); ?> / <?php echo app('translator')->get('layout/parts.Month'); ?></p>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                      <p><?php echo app('translator')->get('layout/parts.NoData'); ?></p>
                                    <?php endif; ?>
                                    <span class="se_all_job"><a href="<?php echo e(route('jobs')); ?>"><?php echo app('translator')->get('layout/parts.ViewAllJobs'); ?> <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('main.layout.counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="blog_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="jb_heading_wraper">
                        <h3><?php echo app('translator')->get('main/index.IndexFromBlogH'); ?></h3>
                        <p><?php echo app('translator')->get('main/index.IndexFromBlogP'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="blog_newsleeter jb_cover">
                        <h1><?php echo app('translator')->get('main/index.IndexFeedbackH'); ?></h1>
                        <p><?php echo app('translator')->get('main/index.IndexFeedbackP'); ?></p>
                        <form action="<?php echo e(route('contact.quick')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="contect_form3 blog_letter">
                                <input type="text" required name="title" placeholder="<?php echo app('translator')->get('layout/forms.MessagePH'); ?>">
                            </div>
                            <div class="contect_form3 blog_letter">
                                <input type="text" required name="name" placeholder="<?php echo app('translator')->get('layout/forms.NamePH'); ?>">
                            </div>
                            <div class="contect_form3 blog_letter">
                                <input type="email" required name="email" placeholder="<?php echo app('translator')->get('layout/forms.EmailPH'); ?>">
                            </div>
                            <div class="header_btn search_btn submit_btn jb_cover">
                                <button type="submit"><?php echo app('translator')->get('layout/forms.Submit'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $TopBlogPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $BlogPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="our_blog_content jb_cover">
                                <div class="jb_cover jb_background_img" style="background-image:url(<?php echo e($BlogPost->post_image); ?>)"></div>
                                <div class="blog_content jb_cover">
                                    <p><?php echo e($BlogPost->created_at->format('M d Y')); ?></p>
                                    <h4> <a href="<?php echo e(route('blog.post' , $BlogPost->slug)); ?>"><?php echo e($BlogPost->title); ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p><?php echo app('translator')->get('layout/parts.NoData'); ?></p>
                        <?php endif; ?>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="accordion" role="tablist">
                                <h1><?php echo app('translator')->get('main/index.IndexFAQ'); ?></h1>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading1">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">

ماهي خطوات انشاء حساب للموظف؟                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
<p>يمكن اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/حساب_للموظف.pdf/"> الرابط</a></p>                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading2">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsethree" role="button" aria-expanded="false" aria-controls="collapsethree">
كيف يمكنني التقديم على وظيفة؟                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsethree" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
                                               <p>يمكنك اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/تقدم_موظف.pdf/"> الرابط</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading3">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsefour" role="button" aria-expanded="false" aria-controls="collapsethree">
ماهي خطوات انشاء حساب للشركات؟
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
<p>يمكن اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/حساب_للشركة.pdf/"> الرابط</a></p>                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card_pagee" role="tab" id="heading4">
                                        <h5 class="h5-md">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsefive" role="button" aria-expanded="false" aria-controls="collapsethree">
كيف يمكن للشركة نشر وظيفة جديدة؟
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <div class="card_cntnt">
<p>يمكن اتباع الخطوات في هذا <a href="https://womenjobcenter.com/storage/app/public/inst/نشر_وظيفة.pdf/"> الرابط</a></p>                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make('main.layout.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <!-- blog wrapper end-->
    <?php echo $__env->make('main.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('main.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\AppServ\www\jobcenter\resources\views/main/index.blade.php ENDPATH**/ ?>