@extends("frontend.app")
@section("title", "Réservation")
@section("content")
       <div class="pt-custom"></div>
    </header>
    <section class="container mt-5 mb-5 container-parent">
        <div class="container row">
            <div class="col-md-8">
                @include('partials.search')
            </div>
            <div class="col-md-4 ">
                <input type="date" class="form-control w-75 calendrier" id="exampleFormControlInput1" placeholder="date">
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="mb-4 annulation">
                    <div class="icone-annulation"><img src="images/calendrier.png" alt="" class="w-50 ms-5 mb-2 faicon"></div>
                    <h5 class="text-center mb-2 title-annulation">Annulation gratuite</h5>
                    <div class="para-ann">
                        <p class="text-center text-annulation">
                        Vos plans changent ? Pas de souci : annulez jusqu’à 24 heures avant le début de votre activité et recevez un remboursement intégral.
                        </p>
                    </div>
                </div>
                <li class="nav-item dropdown lignetop lignebottom">
                    <a class="nav-link dropdown1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dakar&emsp;&emsp;&emsp;&ensp;&ensp;<i class="fa-solid fa-greater-than"></i></a>
                    <ul class="dropdown">
                        <div class="list-group">
                            <li><a class="dropdown-item act" href="#scroll1">Chambre climatisée</a></li>
                            <li><a class="dropdown-item act" href="#scroll2">Hôtel avec jardins</a></li>
                            <li><a class="dropdown-item act" href="#scroll3">Chambre salle de bain</a></li>
                            <li><a class="dropdown-item act" href="#scroll4">Hôtel avec piscine</a></li>
                            <li><a class="dropdown-item act" href="#scroll11">Salle réunion/séminaire</a></li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown lignebottom">
                    <a class="nav-link dropdown1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Casamance&emsp;&emsp; <i class="fa-solid fa-greater-than"></i></a>
                    <ul class="dropdown">
                        <div class="list-group">
                            <li><a class="dropdown-item act" href="#scroll7">Chambre familiale</a></li>
                            <li><a class="dropdown-item act" href="#scroll9">Hôtel avec jardins</a></li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown lignebottom">
                    <a class="nav-link dropdown1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Saly&emsp;&emsp;&emsp;&emsp;&ensp;&ensp; <i class="fa-solid fa-greater-than"></i></a>
                    <ul class="dropdown">
                        <div class="list-group">
                            <li><a class="dropdown-item act" href="#scroll8">Chambre climatisée <br>+salle de bain</a></li>
                            <li><a class="dropdown-item act" href="#scroll6">Hôtel avec jardins <br>et piscine</a></li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown lignebottom">
                    <a class="nav-link dropdown1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Ziguinchor&emsp;&emsp;<i class="fa-solid fa-greater-than"></i></a>
                    <ul class="dropdown">
                        <div class="list-group">
                            <li><a class="dropdown-item act" href="#scroll12">Chambre familiale</a></li>
                            <li><a class="dropdown-item act" href="#scroll13">Chambre salle de bain</a></li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown lignebottom">
                    <a class="nav-link dropdown1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Saint-Louis&emsp;&ensp;<i class="fa-solid fa-greater-than"></i></a>
                    <ul class="dropdown">
                        <div class="list-group">
                            <li><a class="dropdown-item act" href="#scroll14">Chambre climatisée</a></li>
                            <li><a class="dropdown-item act" href="#scroll15">Hôtel avec piscine</a></li>
                            <li><a class="dropdown-item act" href="#scroll20">Chambre Confortable</a></li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item mb-5 dropdown lignebottom">
                    <a class="nav-link dropdown1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lac-Rose&emsp;&emsp;&ensp;<i class="fa-solid fa-greater-than"></i></a>
                    <ul class="dropdown">
                        <div class="list-group">
                            <li><a class="dropdown-item act" href="#scroll17">Chambre en forme <br>de case</a></li>
                        </div>
                    </ul>
                </li>
            </div>
            <div class="col-md-8 ms-5">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <div class="row">
                        <div class="col-md-4 logereserve" id="scroll7">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/chambre-cap-skiring.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Cap Skirring à Casamance <br>Chambre 3 places </p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll13">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/casa-motel.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Casa Motel à Ziguinchor Chambre avec salle de bain</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll1">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/chambre-phenix.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Le Phénix à Dakar<br>Chambre climatisée avec salle de bain</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 logereserve" id="scroll8">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/chambre-somone.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Somone à Saly Chambre climatisée avec salle de bain</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll3">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/chambre2.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Chez Baba&Bella à Yoff Chambre climatisée avec salle de bain</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll14">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/chez-titi.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Chez-Titi à Saint-Louis Chambre confortable climatisée</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 logereserve" id="scroll17">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/chez-salim-lacrose.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Chez Salim à Lac Rose De petites cases à deux chambres</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll11">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/hotel-phenix.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Le Phénix à Dakar Pour vos séminaires et réunions </p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll11">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/hotel-lendiambour.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel et Résidence Le Ndiambour à Dakar Pour vos séminaires et réunions</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p> 
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 logereserve" id="scroll20">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/residence-jamm-akk-coffel.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Résidence Jàmm ak Cofeel à Saint-louis Chambre confortable climatisée </p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll4">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/hotel-radisson.webp" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Radisson Blu hôtel, Dakar Sea-Plaza Jardin et Piscine bien entretenu </p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll6">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/hotel-somone.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Somone à Saly Jardin et Piscine bien entretenu</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 logereserve" id="scroll9">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/img-casamance.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Le petit Quartier à Casamance Vos vacances en famille</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll15">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/img-saintlouis.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Gandiol à Saint-Louis Vos vacances<br> familiales </p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 logereserve" id="scroll2">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/jardins-flamboyants.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Les Jardins du Flamboyant Un jardin splendide à l'entré</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 logereserve" id="scroll12">
                            <a href="/validation" class="btn reservation">
                                <div class="hote"><img src="images/ndarrykhassoum1.jpg" alt="une image" class="w-100 img-thumbnail chambre">
                                    <div class="description-hotel">
                                        <p class="descriptions">Hôtel Ndaary Khassoum, Ziguinchor Chambre familiale avec salle de bain</p>
                                        <p class="prix">
                                            <h5 class="prixx">A partir de 150.000f</h5>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection