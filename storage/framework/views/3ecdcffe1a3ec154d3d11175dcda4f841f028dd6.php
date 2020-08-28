
<?php $__env->startSection('content-2'); ?>
<div class="container">

    <div class="row justify-content-center" style="margin-top: 4%">

        <div class="col-xl-7 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Commentaire!</h1>
              </div>
              <div class="text-center">
                <form  method="POST" action="<?php echo e(route('commenter')); ?>">
                <?php echo csrf_field(); ?>
                        <div class="form-group">                                                       
          <input  name="note" class="form-control form-control-user" value="note" required  style="border-radius: 20px"  type="number" min=0 max=5
        placeholder="Note">

                        </div>                                                   
                        <div class="md-form">
                            <label for="">Votre message</label>
                            <textarea name="texte"  value="texte" required  min class="md-textarea form-control" rows="5"></textarea>                                                           
                        </div>
                    
                    <button type="submit"  class="btn btn-primary btn-user btn-block mt-4" >
                        Envoyez
                    </button>
              
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
<?php echo $__env->make('organisateurs.model-organisateurs-account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\GitHub\cible_project\resources\views/commentaire.blade.php ENDPATH**/ ?>