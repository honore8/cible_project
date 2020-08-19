@extends('organisateurs.model-organisateurs-account')
@section('content-2')
    <button class="badge badge-pill badge-success float-right " style="font-size: 120%;margin-top: 90px ;color: #fff;
        background-color: royalblue"><a data-toggle="modal" data-target="#typeModal">Publier</a> </button>
    <br>
    <div class=" container col-10 register" style="margin-left: 241px">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="modifier-tab" data-toggle="tab" href="#modifier" role="tab" aria-controls="modifier"
                            aria-selected="true"> Concert gospel</a>
                    </li>
                </ul>
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="modifier-tab" data-toggle="tab" href="#modifier" role="tab"
                            aria-controls="modifier" aria-selected="true">Modifier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="type-tab" data-toggle="tab" href="#type" role="tab"
                            aria-controls="type" aria-selected="true">Types de tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="perdus-tab" data-toggle="tab" href="#perdus" role="tab"
                            aria-controls="perdus" aria-selected="false">Objets perdus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trouves-tab" data-toggle="tab" href="#trouvés" role="tab"
                            aria-controls="trouves" aria-selected="false">Objets trouvés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="multimedias-tab" data-toggle="tab" href="#multimedias" role="tab"
                            aria-controls="Multimedias" aria-selected="false">Multimédias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq"
                            aria-selected="false">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="invitation-tab" data-toggle="tab" href="#invitation" role="tab"
                            aria-controls="invitation" aria-selected="false">Invitation</a>
                    </li>

                </ul>


                <div class="tab-content" id="myTabContent">
                    {{-- modifier un evenement --}}
                    <div class="tab-pane fade show active" id="modifier" role="tabpanel" aria-labelledby="modifier-tab">
                        <div class="card-body">
                            <h3 class="text-center">Modifier un évènement</h3>
                            <div class="formulaire d-flex justify-content-center">
                                <form method="post" action="">
                                    @csrf
                                    <div class="row container">

                                        <div class="col-md-5 ml-xl-5 offset-md-1">
                                            <label for="name">Nom</label>
                                            <input type="text" name="name" class="form-control  connex"
                                                style="border-radius: 20px">
                                        </div>
                                        <div class="col-md-5 offset-md-1">
                                            <label for="prenom">Adresse</label>
                                            <input type="text" name="prenom" class="form-control connex"
                                                style="border-radius: 20px">
                                        </div>
                                        <div class="col-md-5 ml-xl-5 offset-md-1">
                                            <label for="">Date de début</label>
                                            <input type="date" name="datedeb" class="form-control connex"
                                                style="border-radius: 50px" required>
                                        </div>
                                        <div class="col-md-5 offset-md-1">
                                            <label for="datefin">Date de fin</label>
                                            <input type="date" name="datefin" class="form-control connex"
                                                style="border-radius: 50px" required>
                                        </div>
                                        <br><br><br><br>
                                        <div class="col-md-11 mx-sm-5">
                                            <label for="Catégorie" class="d-flex justify-content-center">Catégorie
                                                d'évènements</label>
                                            <select name="Catégorie" id="Catégorie" class="form-control"
                                                style="border-radius: 20px">
                                                <option selected>Choisir...</option>
                                                <option value="1">Formation (conférences, forums, colloques, séminaires,
                                                    symposiums, conventions)</option>
                                                <option value="2">Formation (Formations)</option>
                                                <option value="3">Evènement grand public distraction (Concert, Comédie)
                                                </option>
                                                <option value="3">Evènement grand public distraction (Sport)</option>
                                                <option value="3">Evènement grand public distraction (Miss, défilé de mode)
                                                </option>
                                                <option value="3">Evènement grand public découverte (Foire, Luxe)</option>
                                                <option value="3">Evènement grand public découverte (Lancement officiel,
                                                    salon)</option>
                                                <option value="3">Autres (Réalité virtuelle, théâtre, cinéma)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 ml-xl-5 offset-md-1">
                                            <label for="pays">Pays</label>
                                            <select name="exampleInputType" id="exampleInputType"
                                                class="js-example-basic-multiple form-control" multiple="multiple"
                                                style="border-radius: 20px">
                                                @foreach($pays as $item)
                                                    <option value="liste">{{ $item->countryname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-5 offset-md-1">
                                            <label for="ville">Ville</label>
                                            <select name="exampleInputType" id="exampleInputType" class="form-control"
                                                style="border-radius: 20px">
                                                <option selected> Choix votre ville</option>
                                                <option value="Primaire">Lome</option>
                                                <option value="Collège">Dakar</option>
                                                <option value="Lycée">Cotonou</option>
                                                <option value="Université">Accra</option>
                                                <option value="Université">Libreville</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 ml-xl-5 offset-md-1">
                                            <label for="">Type d'évènements</label>
                                            <select name="exampleInputType" id="exampleInputType" class="form-control"
                                                style="border-radius: 20px">
                                                <option selected> Choisir</option>
                                                <option value="Primaire">Payant</option>
                                                <option value="Collège">Gratuit</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 offset-md-1">
                                            <label for="">Nature des évènements</label>
                                            <select name="exampleInputType" id="exampleInputType" class="form-control"
                                                style="border-radius: 20px">
                                                <option selected> Choisir</option>
                                                <option value="Collège">Social</option>
                                                <option value="Lycée">Professionnel</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 ml-xl-5 offset-md-1">
                                            <label for="">Heure de début</label>
                                            <input type="time" name="" class="form-control connex"
                                                style="border-radius: 20px">
                                        </div>
                                        <div class="col-md-5 offset-md-1">
                                            <label for="">Heure de fin</label>
                                            <input type="time" name="" class="form-control connex"
                                                style="border-radius: 20px">
                                        </div>
                                        <br><br><br><br>
                                        <div class="col-md-11 mx-sm-5">
                                            <label for="Catégorie" class="d-flex justify-content-center">Voulez-vous qu'on
                                                prenne en charge la communication autour de votre évènement??? </label>
                                            <select name="Catégorie" id="Catégorie" class="form-control"
                                                style="border-radius: 20px">
                                                <option selected>Choisir...</option>
                                                <option value="1">OUI</option>
                                                <option value="2">NON</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="col-md-3 col-lg-6 offset-md-3">
                                            <br>
                                            <div class="d-flex justify-content-center">
                                                <label for=""> Description</label>
                                            </div>

                                            <div>
                                                <textarea name="texte" value="texte" required min
                                                    class="md-textarea form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center col-12 mt-4 m-1"><button type="submit"
                                                class="btn btn-primary col-4"><a href="{{ url('page-evenement') }}"
                                                    class="test btn_blue">Modifier</a> </button>
                                        </div>
                                        <br><br>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="row justify-content-end">
                            <nav aria-label="Page navigation example " class="col-4">
                                <ul class="pagination float-right">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- type de ticket --}}
                    <div class="tab-pane fade show" id="type" role="tabpanel" aria-labelledby="type-tab">
                        <div class="">
                            <br><br>
                            <button class="badge badge-pill float-right " style="margin-top: -2%; margin-right: 138px;font-size: -1%;color: #fff;
                                    background-color: royalblue"><a data-toggle="modal" data-target="#typeModal">Créer un
                                    type de
                                    ticket</a> </button>
                            <div class="row">
                                <div class="m-auto">
                                    <div class="row ">
                                        <div class="col mb-3">
                                            <div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="images\img1.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                    <a data-toggle="modal" data-target="#suivreModal"
                                                        class="btn btn-primary" style="color: aliceblue">Suivre le
                                                        ticket</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col mb-3">
                                            <div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="images\img1.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                    <a data-toggle="modal" data-target="#suivreModal"
                                                        class="btn btn-primary" style="color: aliceblue">Suivre le
                                                        ticket</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col mb-3">
                                            <div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="images\img1.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                    <a data-toggle="modal" data-target="#suivreModal"
                                                        class="btn btn-primary" style="color: aliceblue">Suivre le
                                                        ticket</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end ">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    {{-- objet perdus --}}
                    <div class="tab-pane fade show" id="perdus" role="tabpanel" aria-labelledby="perdus-tab">
                        <div class="">
                            <br><br>
                            <div class="row">
                                <div class="m-auto">
                                    <div class="row ">
                                        <div class="col mb-3">
                                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Light card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col mb-3">
                                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Light card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-3">
                                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Light card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end ">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                    {{-- Objet trouves --}}
                    <div class="tab-pane fade show" id="trouves" role="tabpanel" aria-labelledby="trouves-tab">
                        <div class="">
                            <br><br>
                            <div class="row">
                                <div class="m-auto">
                                    <div class="row ">
                                        <div class="col mb-3">
                                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Light card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col mb-3">
                                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Light card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-3">
                                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Header</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Light card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title
                                                        and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end ">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    {{-- Les multimedias --}}
                    <div class="tab-pane fade show" id="multimedias" role="tabpanel" aria-labelledby="multimedias-tab">
                        <div class="">
                            <br><br>
                            <div class="row" style="margin-left: 176px;">
                                <div class="">
                                    <div class="row ">
                                        <div class="col mb-3">
                                            <img src="images\img2.jpg" alt="" style=" max-width: 261px;">
                                        </div>
                                        <div class="col mb-3">
                                            <img src="images\img2.jpg" alt="" style=" max-width: 261px;">
                                        </div>
                                        <div class="col mb-3">
                                            <img src="images\img2.jpg" alt="" style=" max-width: 261px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end ">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    {{-- FAQ --}}
                    <div class="tab-pane fade show" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <div class="">
                            <br><br>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How do I change my password?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                How do I sign up?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Can I remove a post?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How do reviews work?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-end ">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    {{-- invitation --}}
                    <div class="tab-pane fade show active" id="invitation" role="tabpanel" aria-labelledby="invitation-tab">
                        <div class="row justify-content-center" style="margin-top: -2% ; margin-left:-24px">
                            <div class="col-xl-7 col-lg-12 col-md-9">
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body -->
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="p-5">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">invitation !</h1>
                                                    </div>
                                                    <div class="text-center">
                                                        <form method="POST" action="">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input name="Email" class="form-control form-control-user"
                                                                    value="" required style="border-radius: 20px"
                                                                    placeholder="Email">
                                                            </div>

                                                            <div class="md-form">
                                                                <label for="">Votre message</label>
                                                                <textarea name="texte" value="texte" required min
                                                                    class="md-textarea form-control" rows="5"></textarea>
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-primary btn-user btn-block mt-4">
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
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Modal type ticket --}}
<div class="modal " id="typeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff">
                <h5 class="modal-title text-white text-center">Créer un ticket!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">
                    @csrf
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input name="Type" type="text" class="form-control form-control-user"
                                                style="border-radius: 20px" required placeholder="Type">
                                        </div>
                                        <div class="col-sm-6">
                                            <input name="Nbpersonne" type="number"
                                                class="form-control form-control-user" style="border-radius: 20px"
                                                required placeholder="Nbpersonne">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="prix" class="form-control form-control-user" required
                                            style="border-radius: 20px" type="number" placeholder="Prix">
                                    </div>
                                    <div class="form-group">
                                        <label for="pays">Nombre de place disponible</label>
                                        <select id="liste" name="sujet" class="form-control"
                                            style="border-radius: 20px">
                                            <option>Choisir</option>
                                            <option>Limité</option>
                                            <option>Illimité</option>
                                        </select>
                                    </div>
                                    <form action="">
                                        <label for="">Image</label>
                                        <img src="images\img2.jpg" alt="">
                                    </form>
                                    <br><br>
                                    <div class="md-form">
                                        <label for="form103">Description</label>
                                        <textarea required id="form103" class="md-textarea form-control"
                                            rows="5"></textarea>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block"
                                        style="background-color:#007bff ; border-color: #007bff">
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
{{-- Modal suivre ticket --}}
<div class="modal " id="suivreModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff">
                <h5 class="modal-title text-white text-center">Suivre un ticket!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    <div class="col-lg-12">
                        <ul>
                            <li><strong>Nbpersonne</strong> : 20</li>
                            <li><strong>prix</strong> : 5000</li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
