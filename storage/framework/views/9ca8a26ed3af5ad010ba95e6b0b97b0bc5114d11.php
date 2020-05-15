<?php

?>
<div class="blog_pagination_section jb_cover">
    <ul>
        <?php if($paginator->currentPage()!=1): ?>
        <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" class="prev"> <i class="flaticon-left-arrow"></i> </a></li>
        <?php endif; ?>
        <li class="third_pagger"><a href="#"><?php echo e($paginator->currentPage()); ?> / <?php echo e($paginator->lastPage()); ?></a></li>
        <?php if($paginator->currentPage()!=$paginator->lastPage()): ?>
        <li><a href="<?php echo e($paginator->nextPageUrl()); ?>" class="next"> <i class="flaticon-right-arrow"></i> </a></li>
      <?php endif; ?>
    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\jobcenter\resources\views/main/layout/pagenation.blade.php ENDPATH**/ ?>