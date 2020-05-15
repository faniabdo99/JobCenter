<?php echo $__env->make('main.layout.header' , ['PageTitle' => 'Error 404'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('main.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- navi wrapper End -->
	 <div class="error_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="error_top_wrapper jb_cover">
						<img src="<?php echo e(url('public/main/images')); ?>/error.png" alt="404 Error Page" class="img-reponsive">
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- footer Wrapper Start -->
    <?php echo $__env->make('main.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer Wrapper End -->
    <?php echo $__env->make('main.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- custom js-->
</body>

</html><?php /**PATH C:\xampp\htdocs\jobcenter\resources\views/errors/404.blade.php ENDPATH**/ ?>