<?php
    $Var = "Tarification";
?>

<?php $__env->startSection('content'); ?>
<h4 class="text-center my-5 __about propos"> <strong>  Tarification </strong></h4>
      <div class="container mt-5">
                      <div class="accordion" id="accordionExample">
                      <div class="mb-2">
                          <div class="functioning" id="headingOne">
                              <h2 class="mb-0">
                                  <div class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="h5"> Evènement payant </span>
                                  </div>
                              </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body _size">
                                <div class="ml-md-4 ml-2">
                                    <p><i class="fas fa-check propos"></i>3% du prix du ticket lorsque nous ne sommes pas chargés de couvrir la communication autour de l’évènement.</p> 
                                    <p><i class="fas fa-check propos"></i>2% du prix du ticket si l’agence nous confie la communication autour de l’évènement.</p> 
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="mb-2">
                          <div class="functioning" id="headingTwo">
                              <h2 class="mb-0">
                                  <div class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      <span class="h5">Evènement gratuit SOCIAL</span>
                                  </div>
                              </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body _size">                             
                                <div class="ml-md-4 ml-2">
                                    <p><i class="fas fa-check propos"></i>0 FCFA si nous couvrons la communication autour de l’évènement pour les réservations. </p> 
                                    <p><i class="fas fa-check propos"></i>Les organisateurs paieront 20 FCFA par place sollicitée.</p> 
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="mb-2">
                          <div class="functioning" id="headingThree">
                              <h2 class="mb-0">
                                  <div class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      <span class="h5">Evènement gratuit PRO</span>
                                  </div>
                              </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body _size">                              
                                <div class="ml-md-4 ml-2">
                                    <p><i class="fas fa-check propos"></i>Les participants paieront 100 FCFA pour réserver leur place si nous prenons en charge la communication autour de l’évènement</p> 
                                    <p><i class="fas fa-check propos"></i>Les participants paieront 300 FCFA pour réserver leur place si nous ne prenons pas en charge la communication autour de l’évènement</p>  
                                </div>
                              </div>
                          </div>
                      </div>
            </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\GitHub\cible_project\resources\views/Tarification.blade.php ENDPATH**/ ?>