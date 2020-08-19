@extends('organisateurs.model-organisateurs-account')
@section('content-2')
  <div id="wrapper" style="margin-left: 220px">
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Numéro</th>
                      <th>Nom</th>
                      <th>Type</th>
                      <th>Date</th>                     
                      <th>Statut</th> 
                      <th>Voir</th>                    
                      <th>Annuler</th>                    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Numéro</th>
                      <th>Nom</th>
                      <th>Type</th>
                      <th>Date</th>                     
                      <th>Statut</th>
                      <th>Voir</th>
                      <th>Annuler</th>                  
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>color run</td>
                      <td>gratuit</td>
                      <td>21/07/20</td>
                      <td>Entreprise</td>
                      <td><button type="button" class="btn btn-success">Voir</button></td>
                      <td><button type="button" class="btn btn-danger">Annuler</button></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>color run</td>
                      <td>gratuit</td>
                      <td>21/07/20</td>
                      <td>Entreprise</td>
                      <td><button type="button" class="btn btn-success">Voir</button></td>
                      <td><button type="button" class="btn btn-danger">Annuler</button></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>color run</td>
                      <td>gratuit</td>
                      <td>21/07/20</td>
                      <td>Entreprise</td>
                      <td><button type="button" class="btn btn-success">Voir</button></td>
                      <td><button type="button" class="btn btn-danger">Annuler</button></td>
                    </tr>
                    <tr>
                      <th>4</th>
                      <td>color run</td>
                      <td>gratuit</td>
                      <td>21/07/20</td>
                      <td>Entreprise</td>
                      <td><button type="button" class="btn btn-success">Voir</button></td>
                      <td><button type="button" class="btn btn-danger">Annuler</button></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td>color run</td>
                      <td>gratuit</td>
                      <td>21/07/20</td>
                      <td>Entreprise</td>
                      <td><button type="button" class="btn btn-success">Voir</button></td>
                      <td><button type="button" class="btn btn-danger">Annuler</button></td>
                    </tr>
                    <tr>
                      <th>6</th>
                      <td>color run</td>
                      <td>gratuit</td>
                      <td>21/07/20</td>
                      <td>Entreprise</td>
                      <td><button type="button" class="btn btn-success">Voir</button></td>
                      <td><button type="button" class="btn btn-danger">Annuler</button></td>
                    </tr>
                    <tr>
                      <th>7</th>
                      <td>color run</td>
                      <td>gratuit</td>
                      <td>21/07/20</td>
                      <td>Entreprise</td>
                      <td><button type="button" class="btn btn-success">Voir</button></td>
                      <td><button type="button" class="btn btn-danger">Annuler</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="jquery.dataTables.js"></script>
  <script type="text/javascript">

            $(document).ready(function() {
                            $('#dataTable').dataTable( {
                                            "language": {
                                                           
                                                            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
                                            }
                            } );
            } );
  </script>
  @endsection
