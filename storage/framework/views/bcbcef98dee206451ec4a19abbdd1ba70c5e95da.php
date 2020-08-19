<?php
    $Var = "Paiement";
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-12 col-md-12">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-8">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Choisir le mode de paiement!</h1>
              </div>
              <form class="form-row">
                  <div class="col-md-2 mx-auto">
                    <div class="card-body">
                        <a href="">
                            <img src="<?php echo e(asset('images\flooz.png')); ?>" style="width: 50px; height: 50px">
                        </a>                   
                    </div>
                  </div>
                  <div class="col-md-2 mx-auto">
                    <div class="card-body">
                      <a href="">
                          <img src="<?php echo e(asset('images\tmoney.png')); ?>" style="width: 50px; height: 50px">
                      </a>                       
                    </div>
                  </div>
                  <div class="col-md-2 mx-auto">
                    <div class="card-body ">
                      <a href="">
                          <img src="<?php echo e(asset('images\visa.png')); ?>" style="width: 50px; height: 50px">
                      </a>
                    </div>
                  </div>                
                  <div class="col-md-2 mx-auto ">
                    <div class="card-body">
                      <a href="">
                          <img src="<?php echo e(asset('images\paypal.png')); ?>" style="width: 50px; height: 50px">
                      </a>                   
                    </div>
                  </div>  
                  <div class="col-md-2 mx-auto">
                    <div class="card-body">
                      <a href="">
                          <img src="<?php echo e(asset('images\Mastercard-logo.png')); ?>" style="width: 50px; height: 50px">
                      </a>                   
                    </div>
                  </div>     
                </div>         
                <hr>             
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
  </div>
      <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Cible\cible_project1\resources\views/evenement/payement.blade.php ENDPATH**/ ?>