<?php $__env->startSection('content'); ?>
  <div class="container py-2">
    <div class="list-group">
        <div class="bg-white border list-group-item">
            <div class="row">
              <div class="col-md-2"></div>
                <div class="col-md-8 div-centered text-center bg-secondary">
                  <h2 class="text-light"><?php echo e($posts->title); ?></h2>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6 py-5">
                <p class="text-dark text-justify"><?php echo e($posts->description); ?></p>
              </div>
              <div class="col-sm-1">
              </div>
              <div class="col-sm-5 py-5">
                <div class="card">
                  <img class="card-img-top" src="<?php echo e(asset( $posts->images()['asset_path'].$posts->images()['image'] )); ?>" alt="">
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>