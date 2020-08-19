<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="<?php echo e(url('images\favicon1.png')); ?>">
      <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!--load all styles -->     
      <link rel="stylesheet" href="<?php echo e(asset('bootstrap-4.5.0-dist/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css\style.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css\chosen.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('select\select2.min.css')); ?>">  
      <title>CIBLE | <?php echo e($Var ?? ''); ?></title> 
</head>
<body>
      <header >
              <nav class="" style="background-color:white;">
                <div class="container-fluid">
                    <div class="row pt-2 pb-2">
                      
                        <div class="col-md-6 col-lg-2 col-6 offset-3 offset-lg-2 pl-0 reseau-sociaux ">                      
                            <div class="d-flex justify-content-end justify-content-lg-start ">
                                <a class="mr-1" target="_blank" href="https://www.facebook.com/KP10IS "><i class="fab fa-facebook fa-lg" style="color: #2962ff;"></i></a>
                                <a class="mr-1" target="_blank" href="https://www.youtube.com/channel/UCZ3zjTspSoJNKmBn6KwJ4Ig?view_as=subscriber"><i class="fab fa-youtube fa-lg" style="color: #ff0000;"></i></a>
                                <a class="mr-1" target="_blank" href="https://www.instagram.com/kp10is/"><i class="fab fa-instagram fa-lg" style="color: #1da1f2;"></i></a>
                                <a  target="_blank" href=" https://www.linkedin.com/company/kp10is/?viewAsMember=true"><i class="fab fa-linkedin fa-lg" style="color: #2962ff;"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-2 col-lg-3 offset-lg-4 boutons" >
                            <div class="">
                                <button class="btn _btn_blue btn-sm top-button-color"><a href="<?php echo e(Url('proposdenous')); ?>" class="test btn_blue"> A propos de</a></button>
                                <button class="btn _btn_blue btn-sm top-button-color btn_blue" data-toggle="modal" data-target="#exampleModal"> Nous Ecrire</button>
                                <?php if(auth()->guard()->check()): ?>
                                <a href="" class="font-weight-bold" style="border: solid 2px black; padding-bottom: 5px;border-radius: 5px"> <span class="fa fa-user"></span> Elda Abla</a>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
              
              <div class="modal " id="exampleModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-md">
                      <div class="modal-content">
                          <div class="modal-header" style="background-color: #020e49">
                              <h5 class="modal-title text-white text-center">Contactez-nous!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true" class="text-white">×</span>
                              </button>
                          </div> 
                          <div class="modal-body">
                    
                              <form action="<?php echo e(route('contact')); ?>" method="POST">
                              <?php echo csrf_field(); ?>
                                  <div class="col-lg-12">
                                          <div class="p-5">
                                              <div class="text-center">
                                              <form class="user">
                                                  <div class="form-group row">
                                                          <div class="col-sm-6 mb-3 mb-sm-0" >
                                                                  <input name="nom" type="text" class="form-control form-control-user"   style="border-radius: 20px"  required placeholder="Nom">
                                                              </div> 
                                                              <div class="col-sm-6">
                                                                  <input name="prenom" type="text" class="form-control form-control-user"   style="border-radius: 20px"  required  placeholder="Prenom">
                                                              </div>
                                                            </div> 
                                                      <div class="form-group">                                                        
                                                          <input name="email" class="form-control form-control-user"  required  style="border-radius: 20px"  type="email"
                                                              placeholder="Email">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="pays">Objet</label>
                                                          <select  id="liste" name="sujet" class="form-control" style="border-radius: 20px" >                                          
                                                            <option >Demande de renseignement</option>
                                                            <option >problème technique</option>
                                                            <option >Réclamation</option>
                                                            <option value="autre">Autres</option>                                                                                                                     
                                                          </select>
                                                          <br>                                                     
                                                            <input type="text"  id="autre" name="autre"   class="form-control border-radius: 20px">                                                                                                                                                                                                                     
                                                      </div>                                                   
                                                      <div class="md-form">
                                                          <label for="form103">Votre message</label>
                                                          <textarea required id="form103" class="md-textarea form-control" rows="5"></textarea>                                                           
                                                      </div>
                                                      <br>
                                                  <button type="submit" class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49">
                                                      Envoyez
                                                  </button>
                                              </form>
                                       </div>
                                  </div>
                              </div>
                          </form>
                          </div>                                                               
                          </div>
                      </div>
                  </div>
          
              <div class="container-fluid" >
                      <div class="row mb-2">
                              <div class="col-6 col-md-3 col-lg-2" style="margin-top: 3em">
                                      <a href="/"><img class="mx-auto my-auto float-right image" src="<?php echo e(asset('images\cible.png')); ?>"
                                              alt="logo1"></a>
                              </div>
                              <div class="col-6 col-md-9 col-lg-10 pl-0 pr-0 " style="background-image: url(images/BANNIERE_NEW.png);
                                background-size: cover; margin-top: 25px; height:207px">
                                      <div class="row h-100">
                                              <div class="col-md-3 offset-md-7 my-auto input-search">
                                                      <form action="" class=" ">
                                                              <input type="text" placeholder="Rechercher" class="form-control w-100 text-right ">
                                                      </form>
                                              </div>
                                      </div>
                              </div>
                      </div>
              </div>

              <!-- debut navbar -->
              <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #cfe3ff;">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse row" id="navbarNav">
                              <ul class="navbar-nav col-sm-12 col-lg-4 offset-lg-3 reseau-sociaux">
                                      
                                          
                                      <li class="nav-item active">
                                              <a class="nav-link .navbar-light .navbar-nav .nav-link" href="<?php echo e(Url('/')); ?>" ><b>Acceuil</b> <span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="nav-item">
                                              <a class="nav-link .navbar-light .navbar-nav .nav-link" href="<?php echo e(Url('fonctionnement')); ?>"><b>Fonctionnement</b></a>
                                      </li>
                                      <li class="nav-item">
                                              <a class="nav-link .navbar-light .navbar-nav .nav-link" href="<?php echo e(Url('tarification')); ?>"><b>Tarification</b></a>
                                      </li>
                                    
                                      <li class="nav-item barre" >
                                          <a class="nav-link" href="<?php echo e(Url('proposdenous')); ?>"><b>A propos</b> </a>
                                      </li>
                                      <div class="col-lg-12 offset-lg-3 d-block d-md-none">

  
                                          <button class="btn btn-sm _btn_blue col-3" ><a class="test btn_blue" href="<?php echo e(url('connexion')); ?>">Connexion</a></button>
                                          
                                              <button class="btn btn-sm _btn_blue col-3" data-toggle="modal" data-target="#exampleModal"><a class="test btn_blue" href="">Nous ecrire </a> <span class="sr-only">(current)</span></button>
                                        
                                      </div>
                              </ul>
                              <div class="col-lg-2 offset-lg-3 d-none d-md-block">                         
                                      <button class="btn btn-sm _btn_blue " ><a class="test btn_blue" href="<?php echo e(url('connexion')); ?>">Connexion</a></button>
                              </div>
                      </div>
                      
                      

              </nav>
              <!-- fin navbar -->
      </header>
      <?php echo $__env->yieldContent('content'); ?>
      <!-- debut footer -->
      <footer>
              <div class="container-fluid fluid d-none d-lg-block">
                      <div class="row text-white text-center p-2" style="background-color: #020e49;">
                              <div class="col ">Nous contacter </div>
                              <div class="col">Types de Ticket</div>
                              
                              <div class="col"> Lieu d'utilisation</div>
                      </div>
                      <div class="row text-white p-2 " style="background-color: #03177a;">
                              <div class="col">
                                  <div class="mt-md-0 mt-3">
                                      <div id="bas">
                                                      <i class="fas fa-home mr-3"></i> Amadahomé à 100m du bvd du 30 Août, sur la route du cap, Lomé-TOGO
                                      </div>
                                      <div id="bas">
                                                      <i class="fas fa-envelope mr-3"></i> infos@kp10is.com
                                      </div>
                                      <div id="bas">
                                                      <i class="fas fa-phone-alt mr-3"></i> +228 91 01 59 80 / 91 01 61 47
                                      </div> 
                             </div>
                           
                              </div>
                              <div class="col-1 d-flex">
                                      <div class="vertical-bar mx-auto"></div>
                              </div>
                              <div class="row">
                                      <div class="form-group col-2">
                                          <div>                                          
                                              <label for="">Match</label>
                                          </div>
                                          <div>
                                              <label for="">conférence</label>
                                          </div>
                                          <div>
                                              <label for="">Miss</label>
                                          </div>                           
                                      </div>
                                      <div class="form-group col-2">
                                          <div>
                                              <label for="">Salon</label>
                                          </div>
                                          <div>
                                              <label for="">Théatre,cinéma</label>
                                          </div>
                                          <div>
                                              <label for="">Foire,Luxe</label>
                                          </div>                           
                                      </div>
                                      <div class="form-group col-2">
                                        <div>
                                            <label for="">forums</label>
                                        </div>
                                        <div>
                                            <label for="">séminaires</label>
                                        </div>
                                        <div>
                                            <label for="">colloques</label>
                                        </div>                           
                                    </div>
                                    <div class="form-group col-2">
                                        <div>
                                            <label for="">symposiums</label>
                                        </div>
                                        <div>
                                            <label for="">conventions</label>
                                        </div>
                                        <div>
                                            <label for="">Formations</label>
                                        </div>                           
                                    </div>
                                    <div class="form-group col-2">
                                        <div>
                                            <label for="">concerts</label>
                                        </div>
                                        <div>
                                            <label for="">comédies</label>
                                        </div>
                                        <div>
                                            <label for="">sports</label>
                                        </div>   
                                                               
                                    </div>
                                    <div class="form-group col-2">
                                        <div>
                                            <label for="">Lancement officiel</label>
                                        </div>
                                        <div>
                                            <label for="">défilé de mode</label>
                                        </div>
                                        
                                    </div>
                                  
                              </div>
                              
                              
                        <div class="col-1 d-flex">
                                <div class="vertical-bar mx-auto"></div>
                        </div>
                              <div class="col">

                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                      
                              </div>
                      </div>
              </div>

              

              <div class="container-fluid fluid d-block d-lg-none">
                      <div class="row text-white text-center p-2" style="background-color: #020e49;">
                          <div class="col-12 titre">Nous contacter au </div>
                      </div>
                      <div class="row text-white p-2 " style="background-color: #03177a;">
                          <div class="col">
                              <div class="mt-md-0 mt-3">
                                  <div id="bas" class="txt">
                                                  <i class="fas fa-home mr-3 "></i> Amadahomé à 100m du bvd du 30 Août, sur la route du cap, Lomé-TOGO
                                  </div>
                                  <div id="bas"   class="txt">
                                                  <i class="fas fa-envelope mr-3"></i> infos@kp10is.com
                                  </div>
                                  <div id="bas"   class="txt">
                                                  <i class="fas fa-phone-alt mr-3"></i> +228 91 01 59 80 / 91 01 61 47
                                  </div> </div>
                          </div>
                      </div>

                      <div class="row text-white text-center p-2" style="background-color: #020e49;">
                          <div class="col titre">Types de Ticket</div>
                      </div>
                      <div class="row text-white p-2 d-flex justify-content-around " style="background-color: #03177a;">
                          <div class="row">
                              <div class="form-group col-6">
                                <div class="txt">                                          
                                    <label for="">Match</label>
                                </div>
                                <div class="txt">
                                    <label for="">conférence</label>
                                </div>
                                <div class="txt">
                                    <label for="">Miss</label>
                                </div>                                 
                              </div>
                              <div class="form-group col-6">
                                <div class="txt">
                                    <label for="">Salon</label>
                                </div>
                                <div class="txt">
                                    <label for="">Théatre,cinéma</label>
                                </div>
                                <div class="txt">
                                    <label for="">Foire,Luxe</label>
                                </div>                                  
                              </div>
                              <div class="form-group col-6">
                                <div class="txt">
                                    <label for="">forums</label>
                                </div>
                                <div class="txt">
                                    <label for="">séminaires</label>
                                </div>
                                <div class="txt">
                                    <label for="">colloques</label>
                                </div>                            
                            </div>
                            <div class="form-group col-6">
                                <div class="txt">
                                    <label for="">symposiums</label>
                                </div>
                                <div class="txt">
                                    <label for="">conventions</label>
                                </div>
                                <div class="txt">
                                    <label for="">Formations</label>
                                </div>                            
                            </div>
                            <div class="form-group col-6">
                                <div class="txt">
                                    <label for="">concerts</label>
                                </div>
                                <div class="txt">
                                    <label for="">comédies</label>
                                </div>
                                <div class="txt">
                                    <label for="">sports</label>
                                </div>                   
                            </div>
                            <div class="form-group col-6">
                                <div class="txt">
                                    <label for="">Lancement officiel</label>
                                </div>
                                <div class="txt">
                                    <label for="">défilé de mode</label>
                                </div>
                                
                            </div>
                    
                      </div>
                      </div>

                      <div class="row text-white text-center p-2" style="background-color: #020e49;">
                          <div class="col titre"> Lieu d'utilisation</div>
                      </div>
                  <div class="row text-white p-2 " style="background-color: #03177a;">
                        
                          <div class="col">
                               
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">                          
                          </div>
                  </div>             
          </div>     
      </footer>

      
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="js/sb-admin-2.min.js"></script>
      <script src="<?php echo e(asset('jquery\jquery.js')); ?>" integrity=""></script>
      <script src="<?php echo e(asset('jquery\chosen.jquery.js')); ?>" integrity=""></script>
      <script src="<?php echo e(asset('bootstrap-4.5.0-dist\js\bootstrap.min.js')); ?>" integrity=""></script>
      <script src="<?php echo e(asset('docsupport/prism.js')); ?>" type="text/javascript" charset="utf-8"></script>
      <script src=" <?php echo e(asset('docsupport/init.js')); ?>" type="text/javascript" charset="utf-8"></script>
      <script src=" <?php echo e(asset('select\select2.min.js')); ?>" type="text/javascript" charset="utf-8"></script>
      
      <?php echo $__env->yieldContent('script'); ?>
      <script>
              $(document).ready(function(){
                      
              });
      </script>

</body>
<script language="JavaScript"> 
$(function() {
    $('#autre').hide(); 
    $('#liste').change(function(){
        
        if($('#liste').val() == 'autre') {
            $('#autre').show(); 
        } else {
            $('#autre').hide(); 
        } 
    });
    $('.js-example-basic-multiple').select2({
        placeholder: 'Choix du pays',
        width: '100%',
        
    });
    $('.select2-selection').css('border-radius','20px')
$('.select2-container').children().css('border-radius','20px')
});
  </script>
</html>
<?php /**PATH C:\laragon\www\Cible\cible_project1\resources\views/layout.blade.php ENDPATH**/ ?>