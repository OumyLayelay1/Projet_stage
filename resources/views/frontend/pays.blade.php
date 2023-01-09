@extends("frontend/app") 
@section("title", "Ma destination")
@section("content")   
        <div class="pt-custom">
            <div class="position-static image"><img src="images/dkar.jpg" alt="" class="w-100 senee">
                <div class="pp"><p class="position-absolute court">Sénégal</p></div>        
                <div class="navbar2">
                    <nav class="navbar-nav container">
                            <ul class="nav nav-pills unemenue" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                   <button class="nav-link active malistes" id="pills-savoir-tab" data-bs-toggle="pill" data-bs-target="#pills-savoir" type="button" role="tab" aria-controls="pills-savoir" aria-selected="true">A savoir</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                   <button class="nav-link malistes" id="pills-aller-tab" data-bs-toggle="pill" data-bs-target="#pills-aller" type="button" role="tab" aria-controls="pills-aller" aria-selected="false">Où aller?</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                   <button class="nav-link malistes" id="pills-loger-tab" data-bs-toggle="pill" data-bs-target="#pills-loger" type="button" role="tab" aria-controls="pills-loger" aria-selected="false">Où se loger?</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link malistes" id="pills-resto-tab" data-bs-toggle="pill" data-bs-target="#pills-resto" type="button" role="tab" aria-controls="pills-resto" aria-selected="false">Restauration</button>
                                </li>
                                <li class="nav-item">
                                  <button class="nav-link malistes" id="pills-divertir-tab" data-bs-toggle="pill" data-bs-target="#pills-divertir" type="button" role="tab" aria-controls="pills-divertir" aria-selected="false">Se divertir</button>
                                </li>
                                <li class="nav-item">
                                  <button class="nav-link malistes" id="pills-bouger-tab" data-bs-toggle="pill" data-bs-target="#pills-bouger" type="button" role="tab" aria-controls="pills-bouger" aria-selected="false">Bouger</button>
                                </li>
                                <li class="nav-item">
                                  <button class="nav-link malistes" id="pills-cadeau-tab" data-bs-toggle="pill" data-bs-target="#pills-cadeau" type="button" role="tab" aria-controls="pills-cadeau" aria-selected="false">Cadeaux</button>
                                </li>
                            </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="tab-content container-parent" id="pills-tabContent">
        <section id="pills-savoir" class="container tab-pane fade show active mt-5" role="tabpanel" aria-labelledby="pills-savoir-tab">
            <div class="row casab">
                <div class="col-md-8 part1">
                    <div class="row mb-3 part0">
                        @if(!$countries->isEmpty())
                            @foreach($countries as $item)
                                @if($loop->last)
                                    <div class="col-md-4 imgtof"><img src="{{ asset($item->images) }}" alt="" class="w-100 tofimg"></div>
                                    <div class="col-md-8 txt">
                                        <h5 class="pb-2 txtsn">{{ $item->titre_pays}}</h5>
                                        <p class="txtdesc">
                                            Capitale : {{ $item->capital}} <br>
                                            Langue officielle : {{ $item->langue_officielle}} <br>
                                            Population : {{ $item->population}} <br>
                                            Hymne National : {{ $item->hymne_national}} <br>
                                            Monnaie : {{ $item->monnaie}} <br>
                                            Fête nationale : {{ $item->fete_national}} <br>
                                            Pays frontaliers : {{$item->pays_frontalier}}</a>
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="row part00">
                        @if(!$countries->isEmpty())
                            @foreach($countries as $item)
                                @if($loop->last)
                                    <div class="col-md-4 imgtof"><img src="{{ asset($item->image_capital) }}" alt="" class="w-100 tofimg"></div>
                                    <div class="col-md-8 txt">
                                        <h5 class="pb-2 txtsn">{{ $item->capital}}</h5>
                                        <p class="txtdesc">
                                            {{$item->description_capital}}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4 pb-3 part2">
                    <div class="paragraphes">
                        <div class="container-fluid pb-2 liens">
                            <div class=""><a href="/destination" class="orgg"><h5 class="text-dark text-center org">Organiser votre voyage</h5></a></div>
                            <div class="pap"><a href="/reserve" class="btn pa">Réserver ses vols</a></div>
                            <div class="pap"><a href="/reserve" class="btn pa"> Réserver un hôtel</a></div>
                            <div class="pap"><a href="/" class="btn pa">Réserver un Airbnb</a></div>
                            <div class="pap"><a href="https://www.expat-dakar.com " class="btn pa">Louer une voiture</a></div>
                            <div class="pap"><a href="/accueil" class="btn pa">Rechercher une activité</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pills-aller" class="container tab-pane fade cd" role="tabpanel" aria-labelledby="pills-aller-tab">
            <h3 class="text-dark text-center mt-3 title">Où aller?</h3>
            <h5 class="text-center sp">Les 14 plus beaux endroits à visiter au Sénégal</h5>
            <div class="mb-5 pt-2">  
                <div class="img-casam" id="jssor_1">
                    <div data-u="loading" class="jssorl-009-spin" >
                        <img class="text-light images-slider-1" src="images/dkar.jpg" alt="Image1"/>
                    </div>
                    <div class="images-slider-global" data-u="slides" >
                        <div>
                            <img data-u="image" src="images/dkar.jpg" alt="Image2" class="text-light w-100"/>
                            <img data-u="thumb" src="images/dkar.jpg" alt="Image3" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/goree.jpg" alt="Image2" class="text-light w-100"/>
                            <img data-u="thumb" src="images/goree.jpg" alt="Image3" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/lacrose.jpg" alt="Image2" class="text-light w-100"/>
                            <img data-u="thumb" src="images/lacrose.jpg" alt="Image3" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/kedougou.jpg" alt="Image4" class="text-light w-100"/>
                            <img data-u="thumb" src="images/kedougou.jpg" alt="Image5" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/img-casamance.jpg" alt="Image4" class="text-light w-100"/>
                            <img data-u="thumb" src="images/img-casamance.jpg" alt="Image5" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/parc.jpg" alt="Image6" class="text-light w-100"/>
                            <img data-u="thumb" src="images/parc.jpg" alt="Image7" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/monument.jfif" alt="Image6" class="text-light w-100"/>
                            <img data-u="thumb" src="images/monument.jfif" alt="Image7" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/popenguine.jpg" alt="Image8" class="text-light w-100"/>
                            <img data-u="thumb" src="images/popenguine.jpg" class="text-light w-100" alt="Image15"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/saintlouis.jfif" alt="Image8" class="text-light w-100"/>
                            <img data-u="thumb" src="images/saintlouis.jfif" class="text-light w-100" alt="Image15"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/sahell.jpg" alt="Image9" class="text-light w-100"/>
                            <img data-u="thumb" src="images/sahell.jpg" alt="Image10" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/thies.jfif" alt="Image9" class="text-light w-100"/>
                            <img data-u="thumb" src="images/thies.jfif" alt="Image10" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/touba1.jpg" alt="Image11" class="text-light w-100"/>
                            <img data-u="thumb" src="images/touba1.jpg" alt="Image12" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/ngor.jpg" alt="Image13" class="text-light w-100"/>
                            <img data-u="thumb" src="images/ngor.jpg" alt="Image14" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/cerclemega.jpg" alt="Image13" class="text-light w-100"/>
                            <img data-u="thumb" src="images/cerclemega.jpg" alt="Image14" class="text-light w-100"/>
                        </div>
                        <div>
                            <img data-u="image" src="images/carabane.jpg" alt="Image13" class="text-light w-100"/>
                            <img data-u="thumb" src="images/carabane.jpg" alt="Image14" class="text-light w-100"/>
                        </div>
                    </div>
                    <div data-u="thumbnavigator" class="jssort101"  data-autocenter="2" data-scale-left="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p">
                                <div data-u="thumbnailtemplate" class="t"></div>
                                <svg viewBox="0 0 16000 16000" class="cv">
                                    <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                    <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div data-u="arrowleft" class="jssora093 js9"  data-autocenter="2">
                        <svg viewBox="0 0 16000 16000">
                            <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                            <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora093" data-autocenter="2">
                        <svg viewBox="0 0 16000 16000">
                            <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                            <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                        </svg>
                    </div>
                </div>
                <div class="row mt-3 text-casam">
                    @if(!$galleri_images->isEmpty())
                        @foreach($galleri_images as $item)
                            <div class="col-md-6">
                                {{$item->description_ville}}
                            </div>
                        @endforeach
                    @endif
                   {{-- <div class="col-md-6">
                       <p>
                            Vous partez visiter le Sénégal et vous vous demandez que faire pendant votre séjour ? Découvrez les 14 
                            plus beaux endroits à visiter. Pays d’Afrique de l’Ouest, le Sénégal borde l’Océan Atlantique. Le pays de la Teranga regorge de sites dépaysants et uniques. 
                        </p>
                        <p>
                            Si vous visitez le Sénégal, vous devez aller à <u>Dakar</u>, capitale du Sénégal, qui représente avant tout le poumon économique de tout le pays.
                            Comment visiter le Sénégal sans voir Le <u>lac Rose</u> qui est une excursion que les touristes aiment.
                        </p>
                        <p>
                            Vous avez l’âme d’un baroudeur en quête d’aventures ? Le <u>Sahel</u> et sa grande forêt tropicale bordent le Sénégal. 
                            Cette belle situation géographique est propice aux découvertes uniques.
                        </p> 
                        <p>
                            <u>Saint-Louis</u> est une ville plus traditionnelle, malgré son homonyme avec la ville américaine. On y découvre une 
                            architecture conservée de l’époque coloniale, ainsi que de belles maisons à découvrir.
                        </p>
                        <p>
                            Pour bien visiter le Sénégal, n’hésitez pas à aller au plus proche des villages, dans la <u>Casamance</u>
                            qui est considérée pour certains comme la plus belle région du pays.Comment visiter le Sénégal sans voir ses magnifiques <u>plages</u>. Certaines comme <b>Toubab Dialao avec ses falaises rouges</b>, 
                            <b>Ouakam</b>, <b>Ngor</b>,
                        </p>
                   </div>
                    <div class="col-md-6">
                        <p>
                             et tant d'autres seront de belles découvertes. 
                            <u>L'Île de Gorée</u> est une ville du Sénégal assez prisée des touristes pour son histoire liée à l’esclavage.Elle est accessible en chaloupe chaque jour depuis le port de Dakar.
                        </p>
                        <p>
                            La ville de <u>Thiès</u> est le deuxième poumon économique du pays. Elle est agréable à vivre et elle a su préserver son charme d’antan. 
                            Ne manquez pas de visiter la grande mosquée de <u>Touba</u> ou la bibliothèque avec les écrits du fondateur de la cité, à savoir Cheikh Ahmadou Bamba.
                        </p>
                        <p>
                            Visiter le Sénégal, c’est aussi admirer la faune et la flore qui le constituent. Le <u>parc national de Djoudj</u> est le sanctuaire d’oiseaux le plus important au monde.
                            La région de <u>Kédougou</u> est un trésor où se mêlent différentes ethnies. Et pour passer un bon séjour ne manquez pas de visiter le <b>Parc national de Niokolo Koba</b> et ses <b>beaux paysages</b>.
                        </p>
                        <p>
                            Visiter le Sénégal sans voir la Gambie et ses <u>cercles mégalithiques</u> classés au patrimoine de l’Unesco est impensable. 
                            <u>Carabane</u> est un endroit calme et paisible reflète l’authenticité du Sénégal.
                        </p>
                        <p>
                            Le lieu abrite la Vierge noire et différentes statues de Saints dans la grotte de Popenguine,
                            est préservé et attire chaque année de plus en plus de visiteurs.
                        </p>
                    </div> --}}
                </div>
            </div>
        </section>
        <section class="container tab-pane fade mt-3" id="pills-loger" role="tabpanel" aria-labelledby="pills-loger-tab">
            <h3 class="text-dark text-center mb-4 pt-3 title">Quelques endroits paradisiaques du Sénégal</h3>
            <div class="row">
                        @if(!$logers->isEmpty())
                            @foreach($logers as $item)
                            <div class="col-md-4 premierlogement">
                                <div class="row">
                                    <div class="col-md-7 hotel"><img src="{{asset($item->image_hotel)}}" alt="une image" class="w-100 mt-3 img-thumbnail chambre"></div>
                                    <div class="col-md-5 description-hotel">
                                        <p class="descriptions">{{$item->description_hotel}}</p>
                                        <!-- <div class="text-center"><a href="/reserve" class="btn btn-reserve">Réserver</a></div> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="container-fluid container-donnee">
                                <div class="donnee">Enregistrez des données</div> 
                            </div>
                        @endif
                        
            </div>
        </section>
        <section class="container tab-pane fade mt-3" id="pills-resto" role="tabpanel" aria-labelledby="pills-resto-tab">
            <h3 class="text-dark text-center mt-3 mb-5 title">Quelques restaurants au Sénégal</h3>
            <div class="row mb-4">
                @if(!$restos->isEmpty())
                    @foreach($restos as $item)
                        <div class="col-md-4 premierlogements">
                            <div class="hotel"><img class="w-100 mt-1 chambre" src="{{ asset($item->image_restaurant) }}" alt="Image"></div>
                            <div class="description-hotel">
                                <p class="descriptions">{{$item->titre_restaurant}}</p>
                                <div class="text-center"><a href="{{ route('localisation-resto', $item->id) }}" class="btn btn-reserve">{{ $item->button_link }}</a></div>
                            </div>
                        </div>
                    @endforeach
                @endif
        </section>
        <section class="tab-pane fade div-cadeau" id="pills-divertir" role="tabpanel" aria-labelledby="pills-divertir-tab">
            <div class="row m-3 divertissement">
                @if(!$divertirs->isEmpty())
                    @foreach($divertirs as $item)
                        <div class="col-md-5 p-3 img-divertir"><img src="{{ asset($item->image_distraction) }}" alt="" class="w-100 img-div"></div>
                        <div class="col-md-7 p-3">
                            <div class="text-divertir">
                                <h4 class="titre-div">{{$item->titre_distraction}}</h4>
                                <p class="desc-divertir">
                                    {{$item->description_distraction}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
        <section class="container mt-1 mb-5 tab-pane fade cadeau" id="pills-cadeau" role="tabpanel" aria-labelledby="pills-cadeau-tab">
            <p class="text-center mt-3 title-desp">Aprés avoir fait un bon séjour vous pouvez visitez aussi nos boutiques ou marchés 
                        <br><span class="text-center">pour acheter des cadeaux de vos choix.</span>
            </p>
            <div class="row">
                @if(!$cadeaus->isEmpty())
                    @foreach($cadeaus as $item)
                        <div class="col-md-6 mt-2">
                            <div class="row mb-3 c-cad">
                                <div class="col-md-8"><img src="{{ asset($item->image_marche) }}" alt="" class="w-100 cadeaux"></div>
                                <div class="col-md-4 text-button">
                                    <h5 class="text-muted mt-2 mut">{{$item->titre_marche}}</h5>
                                    <a href="{{ route('localisation-marche', $item->id) }}" class="btn btn-reserv">{{ $item->button_link }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
        <section class="mb-5 mt-4 tab-pane fade cont" id="pills-bouger" role="tabpanel" aria-labelledby="pills-bouger-tab">
            <div class="container mb-5">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @if(!$bougers->isEmpty())
                            @foreach($bougers as $item)
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="{{ asset($item->image_bouger) }}" class="d-block w-100 img-pop" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{$item->titre_bouger}}</h5>
                                        <p>{{$item->description_bouger}} </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="carousel-indicators position-static">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                </div>
            
            </div>
        </section>
    </section>
@endsection