

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Item</h2>
    <?php if(count($items) > 0): ?>
        <div class="list-group">
          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
        <a href="/request/<?php echo e($item->id); ?>/edit" class="list-group-item list-group-item-action">
          <form action="/request/<?php echo e($item->id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" name="button" class="btn btn-danger float-right">Delete</button>
            </form>
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?php echo e($item->text); ?> </h5>
            <small><?php echo e($item->created_at); ?> </small>
          </div>
        <h5 class="mb-1"><?php echo e($item->body); ?> </h5>
      </a>
  
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

    
    <?php else: ?>
    <h2>No item yet</h2>
        
    <?php endif; ?>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Keisuke\Desktop\request_manager\resources\views/index.blade.php ENDPATH**/ ?>