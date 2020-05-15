<?php
$NavCategories = \App\Category::orderBy('id' , 'desc')->limit(6)->get();
$NavCities = \App\City::orderBy('id' , 'desc')->limit(6)->get();
$NavJobs = \App\Job::orderBy('id' , 'desc')->limit(2)->get();
?>
<a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
<nav class="cd-dropdown  d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <h2><a href="<?php echo e(route('home')); ?>"> <span><img src="<?php echo e(url('public/main/images')); ?>/logo.png" width="60" height="60" alt="img"></span></a></h2>
    <a href="#0" class="cd-close"><?php echo app('translator')->get('layout/parts.Close'); ?></a>
    <ul class="cd-dropdown-content">
        <li><form class="cd-search" action="<?php echo e(route('search')); ?>" method="get"><input type="search" name="query" placeholder="<?php echo app('translator')->get('layout/parts.SearchPH'); ?>"></form></li>
        <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('layout/parts.Home'); ?></a></li>
        <li><a href="<?php echo e(route('jobs')); ?>"><?php echo app('translator')->get('layout/parts.Jobs'); ?></a></li>
        <li><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('layout/parts.About'); ?></a></li>
        <li><a href="<?php echo e(route('companies')); ?>"><?php echo app('translator')->get('layout/parts.Companies'); ?></a></li>
        <li><a href="<?php echo e(route('blog')); ?>"><?php echo app('translator')->get('layout/parts.Blog'); ?></a></li>
        <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('layout/parts.Contact'); ?></a></li>
        <?php if(auth()->guard()->guest()): ?>
        <li><a href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('layout/parts.Login'); ?></a></li>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
                <li>
                    <a href="<?php echo e(auth()->user()->DashLink()); ?>">
                      <?php if(auth()->user()->type == 'user'): ?>
                        <i class="fas fa-user"></i>
                      <?php else: ?>
                        <i class="fas fa-building"></i>
                      <?php endif; ?>
                       <?php echo e(auth()->user()->name); ?></a>
                </li>
        <li><a href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('layout/parts.Logout'); ?></a></li>
        <?php endif; ?>
    </ul>
    <!-- .cd-dropdown-content -->
</nav>
<div class="cp_navi_main_wrapper jb_cover">
    <div class="container-fluid">
        <div class="cp_logo_wrapper">
            <a href="<?php echo e(route('home')); ?>">
                <img width="100" height="80" src="<?php echo e(url('public/main/images')); ?>/logo.png" alt="logo">
            </a>
        </div>
        <!-- mobile menu area start -->
        <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cd-dropdown-wrapper">
                            <a class="house_toggle" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;"
                                  xml:space="preserve" width="25px" height="25px">
                                    <g>
                                        <g>
                                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                              fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                              fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                              fill="#004165" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <!-- .cd-dropdown -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-dropdown-wrapper -->
        </header>
        <div class="menu_btn_box header_btn jb_cover">
            <?php if(auth()->guard()->guest()): ?>
            <ul>
                <li>
                    <a href="<?php echo e(route('signup')); ?>"><i class="flaticon-man-user"></i> <?php echo app('translator')->get('layout/parts.Signup'); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('login')); ?>"> <i class="flaticon-login"></i> <?php echo app('translator')->get('layout/parts.Login'); ?></a>
                </li>
            </ul>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
            <ul>
                <li>
                    <a href="<?php echo e(auth()->user()->DashLink()); ?>">
                      <?php if(auth()->user()->type == 'user'): ?>
                        <i class="fas fa-user"></i>
                      <?php else: ?>
                        <i class="fas fa-building"></i>
                      <?php endif; ?>
                      <?php echo e(auth()->user()->name); ?>

                    </a>
                </li>
            </ul>
            <?php endif; ?>
        </div>
        <div class="jb_navigation_wrapper">
            <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <ul class="main_nav_ul">
                    <li class="gc_main_navigation"><a href="<?php echo e(route('home')); ?>" class="gc_main_navigation active_class"><?php echo app('translator')->get('layout/parts.Home'); ?></a></li>
                    <li class="gc_main_navigation"><a href="<?php echo e(route('jobs')); ?>" class="gc_main_navigation"><?php echo app('translator')->get('layout/parts.Jobs'); ?></a></li>
                    <li class="has-mega gc_main_navigation kv_sub_menu">
                        <a href="#" class="gc_main_navigation"> <?php echo app('translator')->get('layout/parts.Candidates'); ?></a>
                        <!-- mega menu start -->
                        <ul class="kv_mega_menu">
                            <li class="kv_mega_menu_width">
                                <div class="container">
                                    <div class="jn_menu_partion_div">
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list jb_cover">
                                                <h1><?php echo app('translator')->get('layout/parts.JobType'); ?></h1>
                                                <ul>
                                                    <li><a href="<?php echo e(route('search' , ['type','full'])); ?>"><i class="fas fa-square"></i><?php echo app('translator')->get('layout/parts.FullTime'); ?></a></li>
                                                    <li><a href="<?php echo e(route('search' , ['type','part'])); ?>"><i class="fas fa-square"></i><?php echo app('translator')->get('layout/parts.PartTime'); ?></a></li>
                                                    <li><a href="<?php echo e(route('search' , ['type','rotation'])); ?>"><i class="fas fa-square"></i><?php echo app('translator')->get('layout/parts.Rotation'); ?></a></li>
                                                    <li><a href="<?php echo e(route('search' , ['type','temporary'])); ?>"><i class="fas fa-square"></i><?php echo app('translator')->get('layout/parts.Temporary'); ?></a></li>
                                                    <li><a href="<?php echo e(route('search' , ['type','remotely'])); ?>"><i class="fas fa-square"></i><?php echo app('translator')->get('layout/parts.Remotely'); ?></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list jb_cover">
                                                <h1><?php echo app('translator')->get('layout/parts.Categories'); ?></h1>
                                                <ul>
                                                    <?php $__empty_1 = true; $__currentLoopData = $NavCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <li>
                                                        <a href="<?php echo e(route('search' , ['category' , $Category->id])); ?>"><i class="fas fa-square"></i><?php echo e($Category->title); ?></a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <li><?php echo app('translator')->get('layout/parts.NoData'); ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list   jb_cover">
                                                <h1><?php echo app('translator')->get('layout/parts.JobLocation'); ?></h1>
                                                <ul>
                                                    <?php $__empty_1 = true; $__currentLoopData = $NavCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $City): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <li>
                                                        <a href="<?php echo e(route('search' , ['city' , $City->id])); ?>"><i class="fas fa-square"></i><?php echo e($City->name); ?></a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <li><?php echo app('translator')->get('layout/parts.NoData'); ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="candidate_width">
                                            <div class="jen_tabs_conent_list   jb_cover">
                                                <h1><?php echo app('translator')->get('layout/parts.OpenJobs'); ?></h1>
                                                <div class="open_jobs_wrapper">
                                                    <?php $__empty_1 = true; $__currentLoopData = $NavJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <div class="open_jobs_wrapper_1 jb_cover">
                                                        <img src="<?php echo e($Job->Company->profile_image); ?>" alt="<?php echo e($Job->Company->name); ?>">
                                                        <div class="open_job_text">
                                                            <h3><a href="<?php echo e(route('job' , $Job->id)); ?>"><?php echo e($Job->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <?php echo app('translator')->get('layout/parts.NoData'); ?>
                                                    <?php endif; ?>
                                                    <div class="view_all_job jb_cover"><a href="<?php echo e(route('jobs')); ?>"><?php echo app('translator')->get('layout/parts.ViewAllJobs'); ?></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="gc_main_navigation"><a href="<?php echo e(route('about')); ?>" class="gc_main_navigation"><?php echo app('translator')->get('layout/parts.About'); ?></a></li>
                    <li class="gc_main_navigation"><a href="<?php echo e(route('companies')); ?>" class="gc_main_navigation"><?php echo app('translator')->get('layout/parts.Companies'); ?></a></li>
                    <li class="gc_main_navigation"><a href="<?php echo e(route('blog')); ?>" class="gc_main_navigation"><?php echo app('translator')->get('layout/parts.Blog'); ?></a>
                    <li><a href="<?php echo e(route('contact')); ?>" class="gc_main_navigation"><?php echo app('translator')->get('layout/parts.Contact'); ?></a></li>
                </ul>
            </div>
            <!-- mainmenu end -->
            <div class="jb_search_btn_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dez-quik-search bg-primary-dark">
                    <form action="<?php echo e(route('search')); ?>" method="get">
                        <input name="search" value="" name="query" type="text" class="form-control" placeholder="<?php echo app('translator')->get('layout/parts.SearchPH'); ?>">
                        <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="container-fluid">
    <div class="row my-5 text-center" width="100%">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="notofication-message error-message text-center"><?php echo e($error); ?></div>
            <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if(session()->has('success')): ?>
<div class="container-fluid">
    <div class="row my-5 text-center" width="100%">
        <div class="notofication-message success-message text-center"><?php echo e(session()->get('success')); ?></div>
    </div>
</div>
<?php endif; ?>
<?php if(auth()->guard()->check()): ?>
  <?php if(auth()->user()->active == 0 && auth()->user()->type == 'user'): ?>
    <div><?php echo app('translator')->get('layout/parts.AccountConfirmP'); ?> <a href="<?php echo e(route('account.activate.resend' , auth()->user()->id)); ?>"><?php echo app('translator')->get('layout/parts.AccountConfirmAction'); ?></a></div>
  <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\jobcenter\resources\views/main/layout/navbar.blade.php ENDPATH**/ ?>