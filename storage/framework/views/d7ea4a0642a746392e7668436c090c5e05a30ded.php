<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php echo Form::open(['url' => 'report/submit']); ?>

          <div class="form-group">
            <?php echo e(Form::label('description', 'Why would you like to report "Username Here"')); ?>

            <?php echo e(Form::textarea('reason', '', ['class' => 'form-control', 'placeholder' => 'Enter reason'])); ?>

          </div>
          <div>
            <?php echo e(Form::submit('Make The Post', ['class' => 'btn btn-primary'])); ?>

          </div>
          <?php echo Form::close(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>