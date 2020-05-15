<?php echo $__env->make('dash.layout.header' , ['PageTitle' => 'Post New Job'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
   <?php echo $__env->make('dash.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- top header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-xl-9 col-lg-7 col-md-7 col-12 col-sm-12">

                        <h1><?php echo app('translator')->get('dash/company.PostNewJob'); ?></h1>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> <?php echo app('translator')->get('dash/company.Home'); ?> </a>&nbsp; / &nbsp; </li>
                                <li><?php echo app('translator')->get('dash/company.PostNewJob'); ?></li>
                            </ul>
                        </div>
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
                            <div class="job_filter_category_sidebar pd0 jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> <?php echo app('translator')->get('dash/company.PostNewJob'); ?></h1>
                                </div>
                                <form action="<?php echo e(route('job.new.do')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label><?php echo app('translator')->get('dash/company.JobCategory'); ?></label>
                                                <select name="category_id" required>
                                                    <?php if(old('category_id')): ?>
                                                        <option selected value="<?php echo e(old('category_id')); ?>">Same Category You Choose</option>
                                                    <?php else: ?>
                                                    <option selected value=""><?php echo app('translator')->get('dash/company.SelectCategory'); ?></option>
                                                    <?php endif; ?>
                                                    <?php $__empty_1 = true; $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <option value="0"><?php echo app('translator')->get('dash/company.NoData'); ?></option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label><?php echo app('translator')->get('dash/company.JobTitle'); ?></label>
                                                <input type="text" name="title" value="<?php echo e(old('title')); ?>" required placeholder="Need Graphic Designer">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label><?php echo app('translator')->get('dash/company.JobPosition'); ?></label>
                                                <input type="text" required value="<?php echo e(old('position')); ?>" name="position" placeholder="Job Position">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label><?php echo app('translator')->get('dash/company.JobType'); ?></label>
                                                <select name="type" required>
                                                    <?php if(old('type')): ?>
                                                        <option value="<?php echo e(old('type')); ?>"><?php echo e(old('type')); ?></option>
                                                    <?php endif; ?>
                                                    <option value="Full Time"><?php echo app('translator')->get('dash/company.FullTime'); ?></option>
                                                    <option value="Part Time"><?php echo app('translator')->get('dash/company.PartTime'); ?></option>
                                                    <option value="Temporary"><?php echo app('translator')->get('dash/company.Temperory'); ?></option>
                                                    <option value="Rotation"><?php echo app('translator')->get('dash/company.Rotation'); ?></option>
                                                    <option value="Remotely"><?php echo app('translator')->get('dash/company.Remotely'); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label><?php echo app('translator')->get('dash/company.Salary(IraqiDinarPerMonth)'); ?></label>
                                                <input type="number" value="<?php echo e(old('salary')); ?>" name="salary" placeholder="Enter Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label><?php echo app('translator')->get('dash/company.Experience'); ?> </label>
                                                <select name="experience">
                                                  <?php if(old('experience')): ?>
                                                      <option value="<?php echo e(old('experience')); ?>"><?php echo e(old('experience')); ?></option>
                                                  <?php else: ?>
                                                   <option value=""><?php echo app('translator')->get('dash/company.ChooseExperinceLevel'); ?></option>
                                                 <?php endif; ?>
                                                   <option value="Fresher"><?php echo app('translator')->get('dash/company.Fresher'); ?></option>
                                                   <option value="Junior"><?php echo app('translator')->get('dash/company.Junior'); ?></option>
                                                   <option value="Pre Senior"><?php echo app('translator')->get('dash/company.PreSenior'); ?></option>
                                                   <option value="Senior"><?php echo app('translator')->get('dash/company.Senior'); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="contect_form3">
                                                <label><?php echo app('translator')->get('dash/company.CandidateAge(Years)'); ?></label>
                                               <input type="number" value="<?php echo e(old('age')); ?>" name="age" placeholder="Enter Candidate Age in Years">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1> <?php echo app('translator')->get('dash/company.AboutThisJob'); ?></h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.JobDescription'); ?></label>
                                            <textarea class="editor" name="description" id="description" placeholder="Job Description Here"><?php echo old('description'); ?></textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.JobResposibaleties'); ?></label>
                                            <textarea class="editor" name="responses" placeholder="Job Responses Here"><?php echo old('responses'); ?></textarea>
                                        </div>
                                        <br><br>
                                        <div class="contect_form3">
                                            <label><?php echo app('translator')->get('dash/company.JobCrteria'); ?></label>
                                            <textarea class="editor" name="criteria" placeholder="Job criteria Here"><?php echo old('criteria'); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="job_filter_category_sidebar jb_cover">
                                <div class="job_filter_sidebar_heading jb_cover">
                                    <h1><?php echo app('translator')->get('dash/company.Address/Location'); ?> </h1>
                                </div>
                                <div class="job_overview_header jb_cover">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="select_box">
                                                <label><?php echo app('translator')->get('dash/company.City'); ?></label>
                                                <select required name="city_id">
                                                    <?php if(old('city_id')): ?>
                                                        <option value="<?php echo e(old('city_id')); ?>"><?php echo app('translator')->get('dash/company.SameCityYouChoose'); ?></option>
                                                    <?php endif; ?>
                                                    <?php $__empty_1 = true; $__currentLoopData = $Cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                      <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <div class="contect_form3">
                                                <label><?php echo app('translator')->get('dash/company.FullAdress'); ?></label>
                                                <input type="text" value="<?php echo e(old('address')); ?>" name="address" placeholder="Address">
                                            </div>
                                        </div>
                                         <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit" value="Post Job" onclick="submitForm()">
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
    <!-- footer Wrapper Start -->
    <?php echo $__env->make('dash.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer Wrapper End -->
    <!--custom js files-->
    <?php echo $__env->make('dash.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- custom js-->
    <script>
    tinymce.init({
        selector: '.editor',
        plugins: "anchor autoresize link autolink advlist lists textpattern directionality",
        toolbar: "formatselect | anchor link | bold italic | numlist bullist | ltr rtl |alignleft aligncenter alignright",
        block_formats: 'Paragraph=p;Heading 2=h2;Heading 3=h3;',
        menubar: false,
        default_link_target: "_blank"
        });
        // Returns text statistics for the specified editor by id
        // function getStats('description') {
        //     var body = tinymce.get(id).getBody(), text = tinymce.trim(body.innerText || body.textContent);
        //     return {
        //         chars: text.length,
        //         words: text.split(/[\w\u2019\'-]+/).length
        //     };
        // }
        // function submitForm() {
        //     // Check if the user has entered less than 1000 characters
        //     if (getStats('content').chars < 50) {
        //         alert("You need to enter 50 characters or more.");
        //         return;
        //     }
        //     // Submit the form
        //     document.forms[0].submit();
        // }
    </script>
</body>

</html>
<?php /**PATH C:\AppServ\www\jobcenter\resources\views/dash/company/new-job.blade.php ENDPATH**/ ?>