
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="image/png" href="<?php echo e(url('images\favicon1.png')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>CIBLE | <?php echo e($Var ?? ''); ?></title> 
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="vendor\datatables\dataTables.bootstrap4.min.css" rel="stylesheet">  
<link rel="stylesheet" href="<?php echo e(asset('select\select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('bootstrap-4.5.0-dist/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css\style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css\chosen.css')); ?>"> 
</head>
<body id="page-top">
<div id="wrapper">
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="position: fixed">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" >
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">CIBLE</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(Url('/')); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Acceuil</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo e(Url('creer-evenement')); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Créer un évènement</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Les évènements</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Interface évènements:</h6>
        <a class="collapse-item" href="<?php echo e(Url('evenement-organisateurs')); ?>">Participer</a>
        <a class="collapse-item" href="<?php echo e(url('liste')); ?>">Liste des évènements</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('organisateurs-annonce')); ?>">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Annonces</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('commentaire')); ?>" >
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Ajouter un commentaire</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('prix-organisateur')); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Historiques des paiements</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('sponsoring')); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Sponsoring</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('agence-vente')); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Vendre une agence</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(url('http://aprocrowd.aprojet.org')); ?>" target="blank"> 
      <i class="fas fa-fw fa-table"></i>
      <span>Levez de fonds</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow " style="position: fixed">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

     <!-- Topbar Search -->
     
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
        <span class="badge badge-danger badge-counter">7</span>
      </a>
      <!-- Dropdown - Messages -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
          Message Center
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
            <div class="status-indicator bg-success"></div>
          </div>
          <div class="font-weight-bold">
            <div class="text-truncate">je suis entrain de partir,stp prepare le colis.</div>
            <div class="small text-gray-500">Rita Agba · 58m</div>
          </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
            <div class="status-indicator"></div>
          </div>
          <div>
            <div class="text-truncate">cc Elda,es tu deja au boulot stp?</div>
            <div class="small text-gray-500">Rose · 5mn</div>
          </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
            <div class="status-indicator bg-warning"></div>
          </div>
          <div>
            <div class="text-truncate">Je suis dehors!</div>
            <div class="small text-gray-500">Espoir Ayewoutse · 2jrs</div>
          </div>
        </a>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
            <div class="status-indicator bg-success"></div>
          </div>
          <div>
            <div class="text-truncate">Suis je un bon gar??je demande parce que...</div>
            <div class="small text-gray-500">Materne  · 2sem</div>
          </div>
        </a>
        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
      </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
        
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fa fa-user" aria-hidden="true">   AWESSO Diane</i></span>
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo e(url('profile')); ?>">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile Organisateurs
        </a>
     
        <a class="dropdown-item" href="#">
          <i class="fa fa-calendar fa-sm fa-fw mr-2 text-gray-400"></i>
          Agenda
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Se deconnecter
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->
<!-- End of Topbar -->
<div class="container-fluid">
  <?php echo $__env->yieldContent('content-2'); ?>
</div>
<!-- Begin Page Content -->

<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
  <div class="copyright text-center my-auto">
    <span>Copyright &copy; Your Website 2020</span>
  </div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Prêt à partir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à terminer votre session en cours.</div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="login.html">Deconnexion</a>
      </div>
    </div>
  </div>
</div>



  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo e(asset('jquery\jquery.js')); ?>" integrity=""></script>
  <script src="<?php echo e(asset('jquery\chosen.jquery.js')); ?>" integrity=""></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo e(asset('docsupport/prism.js')); ?>" type="text/javascript" charset="utf-8"></script>
  <script src=" <?php echo e(asset('docsupport/init.js')); ?>" type="text/javascript" charset="utf-8"></script>
  <script src=" <?php echo e(asset('select\select2.min.js')); ?>" type="text/javascript" charset="utf-8"></script> 
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
</body>
<script>
  $(document).ready(function()
  {
    $('.js-example-basic-multiple').select2({
        placeholder: 'Choix du pays',
        width: '100%',
        
    });
    $('.select2-selection').css('border-radius','20px')
    $('.select2-container').children().css('border-radius','20px')
          
  });
</script>
</html>
<?php /**PATH C:\laragon\www\Cible\cible_project1\resources\views/organisateurs/model-organisateurs-account.blade.php ENDPATH**/ ?>