<?php echo $__env->make('dash.layout.header' , ['PageTitle' => __('dash/company.EdiProfile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('dash.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- navi wrapper End -->
    <!--employee dashboard wrapper start-->
    <div class="candidate_dashboard_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('dash.company.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_listing_left_fullwidth jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <form action="<?php echo e(route('dash.company.edit.do')); ?>" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="jp_job_post_side_img">
                                                <img src="<?php echo e($User->profile_image); ?>" width="92" height="92" alt="post_img">
                                            </div>
                                            <div class="jp_job_post_right_cont edit_profile_wrapper">
                                                <h4><?php echo app('translator')->get('dash/company.ProfileImageJPEGOrPNG'); ?></h4>
                                                <div class="width_50">
                                                    <input name="image" type="file" id="input-file-now-custom-233" class="dropify" data-height="90" /><span class="post_photo">browse image</span>
                                                </div>
                                            </div>
                                            <div class="browse_img_banner jb_cover">
                                                <div class="jp_job_post_side_img">
                                                    <img src="<?php echo e($User->cover_image); ?>" alt="<?php echo e($User->name); ?>">
                                                </div>
                                                <div class="jp_job_post_right_cont edit_profile_wrapper">
                                                    <h4><?php echo app('translator')->get('dash/company.JPEGOrPNG1920x300pxCoverImage'); ?></h4>
                                                    <div class="width_50">
                                                        <input name="cover" type="file" id="input-file-now-custom-2" class="dropify" data-height="90" /><span class="post_photo">browse image</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse_img_banner jb_cover">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.Name'); ?></label>
                                            <input required type="text" value="<?php echo e(old('name') ?? $User->name); ?>" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.ContactEmail(AnyoneCanSeeIt)'); ?></label>
                                            <input type="email" value="<?php echo e(old('contact_email') ?? $User->contact_email); ?>" name="contact_email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label><?php echo app('translator')->get('dash/company.CompanySize'); ?></label>
                                            <select name="company_size">
                                                <option value="<?php echo e($User->company_size ?? ''); ?>"><?php echo e($User->company_size ?? 'Choose Company Size'); ?></option>
                                                <option value="1-50"><?php echo app('translator')->get('dash/company.1-50'); ?></option>
                                                <option value="1-100"><?php echo app('translator')->get('dash/company.1-100'); ?></option>
                                                <option value="1-200"><?php echo app('translator')->get('dash/company.1-300'); ?></option>
                                                <option value="1-500"><?php echo app('translator')->get('dash/company.1-500'); ?></option>
                                                <option value="1-500"><?php echo app('translator')->get('dash/company.500+'); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.Website'); ?></label>
                                            <input type="url" name="website" value="<?php echo e(old('website') ?? $User->website); ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label><?php echo app('translator')->get('dash/company.Category'); ?></label>
                                            <select name="category_id">
                                                <option value="<?php echo e($User->category_id); ?>">Update Category</option>
                                                <?php $__empty_1 = true; $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <p><?php echo app('translator')->get('dash/company.Category'); ?></p>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.Address'); ?></label>
                                            <input type="text" value="<?php echo e(old('address') ?? $User->address); ?>" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="select_box">
                                            <label><?php echo app('translator')->get('dash/company.City'); ?></label>
                                            <select name="city_id">
                                                <option value="<?php echo e($User->city_id); ?>">Update City</option>
                                                <?php $__empty_1 = true; $__currentLoopData = $Cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $City): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <option value="<?php echo e($City->id); ?>"><?php echo e($City->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <p><?php echo app('translator')->get('dash/company.City'); ?></p>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.Description'); ?></label>
                                            <textarea name="description" row="5"><?php echo e(old('description') ?? $User->description); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_filter_category_sidebar jb_cover">
                                            <div class="job_filter_sidebar_heading jb_cover">
                                                <h1> <?php echo app('translator')->get('dash/company.Attachments'); ?></h1>
                                            </div>
                                            <div class="job_overview_header jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                                      <input hidden id="company_id" value="<?php echo e($User->id); ?>">
                                                      <div class="dropzone mb-3" id="dropzone"></div>
                                                      <a href="<?php echo e(route('dash.company.deleteAttachments' , $User->id)); ?>"><?php echo app('translator')->get('dash/company.DeleteAttachments'); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="browse jb_cover">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_filter_category_sidebar jb_cover">
                                            <div class="job_filter_sidebar_heading jb_cover">
                                                <h1> <?php echo app('translator')->get('dash/company.SocialNetworks'); ?></h1>
                                            </div>
                                            <div class="job_overview_header jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label><?php echo app('translator')->get('dash/company.Instagram'); ?></label>
                                                            <input type="url" name="google" value="<?php echo e(old('google') ?? $User->google); ?>" placeholder="https://www.instagram.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label><?php echo app('translator')->get('dash/company.Facebook'); ?></label>
                                                            <input type="url" name="facebook" value="<?php echo e(old('facebook') ?? $User->facebook); ?>" placeholder="https://www.facebook.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label><?php echo app('translator')->get('dash/company.Twitter'); ?></label>
                                                            <input type="url" name="twitter" value="<?php echo e(old('twitter') ?? $User->twitter); ?>" placeholder="https://www.twitter.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label><?php echo app('translator')->get('dash/company.Linkedin'); ?></label>
                                                            <input type="url" name="linkedin" value="<?php echo e(old('linkedin') ?? $User->linkedin); ?>" placeholder="https://www.linkedin.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label><?php echo app('translator')->get('dash/company.CompanyProfile'); ?> <b><?php echo app('translator')->get('dash/company.OnlyPDF'); ?></b></label>
                                                            <input type="file" name="profile_pdf">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="job_filter_category_sidebar jb_cover">
                                            <div class="job_filter_sidebar_heading jb_cover">
                                                <h1><?php echo app('translator')->get('dash/company.UpdatePassword'); ?></h1>
                                            </div>
                                            <div class="job_overview_header jb_cover">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label><?php echo app('translator')->get('dash/company.CurrentPasword'); ?></label>
                                                            <input type="password" name="c_password">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="contect_form3">
                                                            <label><?php echo app('translator')->get('dash/company.NewPasword'); ?></label>
                                                            <input type="password" name="n_password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="login_remember_box jb_cover">
                                            <div class="header_btn search_btn">
                                                <button type="submit"><?php echo app('translator')->get('dash/company.SaveChanges'); ?></button>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
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
    <script>
    Dropzone.autoDiscover = false;
    var MyDropZone = new Dropzone("div#dropzone" ,{
         url: "<?php echo e(route('company.files')); ?>/" + $('#company_id').val() ,
         autoProcessQueue: true,
         acceptedFiles: '.png,.jpg,.gif,.pdf,.ptx,.docx,.xls',
         dictDefaultMessage: 'Click or Drop Your Files Here',
         parallelUploads : 10
      }
     );
    </script>
    <!-- custom js-->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\jobcenter\resources\views/dash/company/edit.blade.php ENDPATH**/ ?>