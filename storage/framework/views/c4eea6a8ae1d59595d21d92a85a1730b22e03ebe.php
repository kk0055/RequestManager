

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Edit Item</h2>
  <form action="/request/<?php echo e($item->id); ?> " method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  <div class="form-group">
<label for="text">Text</label>
<input type="text" class="form-control" name="text" id="text" placeholder="Enter Text" value="<?php echo e($item->text); ?> ">
</div>
<div class="form-group">
<label for="text">Body</label>
<input type="text" class="form-control" name="body" id="body" placeholder="Enter body" value="<?php echo e($item->body); ?>" >
</div>
    <button type="submit" name="button" class="btn btn-primary">Submit</button>
  </form>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Keisuke\Desktop\request_manager\resources\views/edit.blade.php ENDPATH**/ ?>