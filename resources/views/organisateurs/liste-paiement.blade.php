@extends('organisateurs.model-organisateurs-account')
@section('content-2')

        <!-- Topbar -->
        <div class="container-fluid" style="margin-left: 220px">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tableau de bord</h1>
          <p class="mb-4"></a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" style="width: 1293px">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des paiements</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Numéro</th>
                      <th>Evènements</th>
                      <th>Date de début</th>
                      <th>Date de fin</th>
                      <th>Montant</th>
                      <th>Statut</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Numéro</th>
                        <th>Evènements</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Montant</th>
                        <th>Statut</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      
                    </tr>                
                    <tr>
                      <td>Shad Decker</td>
                      <td>Regional Director</td>
                      <td>Edinburgh</td>
                      <td>51</td>
                      <td>2008/11/13</td>
                      <td>$183,000</td>
                      
                    </tr>
                    <tr>
                      <td>Michael Bruce</td>
                      <td>Javascript Developer</td>
                      <td>Singapore</td>
                      <td>29</td>
                      <td>2011/06/27</td>
                      <td>$183,000</td>
                      
                    </tr>
                    <tr>
                      <td>Donna Snider</td>
                      <td>Customer Support</td>
                      <td>New York</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td>$112,000</td>
                      
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                        
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection