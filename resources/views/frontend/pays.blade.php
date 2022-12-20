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
                        <div class="col-md-4 imgtof"><img src="images/monument.jfif" alt="" class="w-100 tofimg"></div>
                        <div class="col-md-8 txt">
                            <h5 class="txtsn">Sénégal</h5>
                            <p class="txtdesc">
                                Capitale : Dakar <br>
                                Langue officielle : Français <br>
                                Population : 17 738 795 <br>
                                Hymne National : Le Lion rouge <br>
                                Monnaie : Franc CFA (XOF) <br>
                                Fête nationale : 4 avril <br>
                                Pays frontaliers : <a href="/pays" class="pay">Mauritanie</a>, <a href="/pays" class="pay">Gambie</a>, <a href="/pays" class="pay">Guinée-Bissau</a>, <a href="/pays" class="pay">Guinée</a>, <a href="/pays" class="pay">Mali</a>
                            </p>
                        </div>
                    </div>
                    <div class="row part00">
                        <div class="col-md-4 imgtof"><img src="images/dkar.jpg" alt="" class="w-100 tofimg"></div>
                        <div class="col-md-8 txt">
                            <h5 class="txtsn">Dakar</h5>
                            <p class="txtdesc">
                                    La capitale du Sénégal, Dakar, sert souvent de point de chute pour visiter le pays mais mérite amplement un séjour
                                    à elle seule. Chacun de ses quartiers est différent et se 
                                    découvre avec plaisir à pied ou en taxi. On apprécie 
                                    l'empreinte française laissée, notamment sur l'île de Gorée 
                                    qui est très belle. L'aspect cosmopolite de Dakar est aussi à 
                                    prendre en compte et il se remarque notamment grâce à 
                                    sa vie nocturne animée. A savoir que Dakar se situe au point 
                                    le plus occidental du continent africain, sur la presqu'île du Cap-Vert.
                            </p>
                        </div>
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
                   <div class="col-md-6">
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
                    </div>
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
                                <div class="text-center"><a href="{{url('localisation-resto/')}}" class="btn btn-reserve">Plus d'informations</a></div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="container-fluid container-donnee">
                        <div class="donnee">Enregistrez des données</div> 
                    </div>
                @endif
        </section>
        <section class="tab-pane fade div-cadeau" id="pills-divertir" role="tabpanel" aria-labelledby="pills-divertir-tab">
            <div class="row p-3 divertissement">
                <div class="col-md-5 img-divertir"><img src="images/casino.jpg" alt="" class="w-100 img-div"></div>
                <div class="col-md-7 ">
                    <div class="text-divertir">
                        <h4 class="titre-div">Casino Terrou Bi,Dakar</h4>
                        <p class="desc-divertir">
                            Le Casino Terrou-Bi c’est une salle de jeux au cadre feutré, à l'ambiance magique pour vos soirées d'exception. De la roulette anglaise à Ultimate Texas Poker, en passant par le Black Jack, le Stud-Poker, le Hold’em Poker, cet espace de jeu est spécialement conçu pour
                            vous offrir une expérience inoubliable durant vos séjours ici au Sénégal. Le monde du jeu est à vous, avec un large choix pour un moment d’évasion unique.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-3 pt-4 divertissement">
                <div class="col-md-5 img-divertir"><img src="images/caption.jpg" alt="" class="w-100 img-div"></div>
                <div class="col-md-7">
                    <div class="text-divertir">
                        <h4 class="titre-div">Le Désert Lompoul</h4>
                        <p class="desc-divertir">
                            Le désert de Lompoul est,une petite étendue désertique d’une superficie de 18 km2,
                            situé aux confins de l’océan Atlantique, dans le Nord-Ouest du Sénégal entre Dakar, la capitale du pays de la Teranga, et Saint-Louis. Il est formé de dunes de sable atteignant parfois près de 50 mètres où la végétation est quasi inexistante.
                            Une fois sur les lieux vous allez vivre des moments jovials en faisant de balade à pied et sandboarding, balade en dromadaire
                            ,balade en 4x4, balade en quad, concourt de conduites sur des engins bien adapté à la situation, des tam-tams,etc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-3 pt-4 divertissement">
                <div class="col-md-5 img-divertir"><img src="images/palmerie.jpg" alt="" class="w-100 img-div"></div>
                <div class="col-md-7">
                    <div class="text-divertir">
                        <h4 class="titre-div">La Palmeraie Sporting Club, Saly Portudal, Thiés</h4>
                        <p class="desc-divertir">
                            Un complexe multisports regroupant 2 courts de Padel, des terrains de pétanques, foot à 5 sur gazon synthétique, salle de fitness, aquabike, andermologie LPG, Espace de soin esthétique, beach tennis, beach volley et aussi un espace kids.
                            Nous vous accueillons 7 jours sur 7 pour partager des moments de convivialité dans une ambiance sportive et détendue au milieu des cocotiers. Vous aurez à disposition une infrastructure complète comprenant des vestiaires homme et femme, wc et douche.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-3 pt-4 divertissement">
                <div class="col-md-5 img-divertir"><img src="images/paintball.jpg" alt="" class="w-100 img-div"></div>
                <div class="col-md-7">
                    <div class="text-divertir">
                        <h4 class="titre-div">Paintball, Parc Hann Dakar</h4>
                        <p class="desc-divertir">
                            Le paintball est une activité de team building où le cadre se trouve dans une faune variée et une végétation luxuriante.
                            Pour participer à ce jeu le joueur devra louer le matériel nécessaire(qui sont ces équipements: le masque, le pistolet et son cartouche, combinaison intégrale et gants) pour sa sécurité et achéte le nombre de billes qu'il pourra utiliser.
                            Le jeu se fait par deux équipes adverses et l'un élimine l'autre en les touchant avec des billes de peinture lancées par les lanceurs de paintball.  
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-3 pt-4 divertissement">
                <div class="col-md-5 img-divertir"><img src="images/magic-land.jpg" alt="" class="w-100 img-div"></div>
                <div class="col-md-7">
                    <div class="text-divertir">
                        <h4 class="titre-div">Magic Land ,Dakar</h4>
                        <p class="desc-divertir">
                            Magic Land ne passe pas inaperçu sur la route de la Corniche. Face à Soumbédioune, couleurs, manèges, train fantôme et jeux aquatiques raviront petits et grands. Bienvenue dans le seul parc d'attractions de Dakar et, au-delà, de tout le Sénégal. Une agréable journée en perspective, le tout au bord de la mer. Le samedi soir, le parc
                            se transforme régulièrement en lieu de concert. Possibilité d'aller au parc d'attractions et/ou à la piscine.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container mt-1 mb-5 tab-pane fade cadeau" id="pills-cadeau" role="tabpanel" aria-labelledby="pills-cadeau-tab">
            <p class="text-center mt-3 title-desp">Aprés avoir fait un bon séjour vous pouvez visitez aussi nos boutiques ou marchés 
                        <br><span class="text-center">pour acheter des cadeaux de vos choix.</span>
            </p>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/kermel.jpg" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-2 mut">Marché Kermel</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/helene.jpg" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-1 mut">Helene K la Boutique</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/galerie.jpg" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-2 mut">Galerie KMG</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/sandaga.jpg" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-2 mut">Marché Sandaga</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/maamsamba.png" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-1 mut">Boutique Maam Samba</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 mt-2">
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/village.jpg" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-1 mut">Soumbédioune</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/village1.jpg" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-1 mut">Soumbédioune</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/village2.jpg" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-1 mut">Soumbédioune</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/village3.jfif" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-1 mut">Soumbédioune</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                    <div class="row mb-3 c-cad">
                        <div class="col-md-8"><img src="images/ngay.jfif" alt="Une" class="w-100 cadeaux"></div>
                        <div class="col-md-4 text-button">
                            <h5 class="text-muted mt-2 mut">Ngay Mékhé</h5>
                            <a href="/localisation-marche" class="btn btn-reserv">Plus d'informations</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5 mt-4 tab-pane fade cont" id="pills-bouger" role="tabpanel" aria-labelledby="pills-bouger-tab">
            <div class="container mb-5">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="images/lutte.webp" class="d-block w-100 img-pop" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>La lutte</h5>
                                <p>La lutte est, le sport national du Sénégal, un sport de contact et elle intégre aussi la box.
                                    La lutte est organisée par des promoteurs dans les stades ou à la mer </p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="images/kankourang.jfif" class="d-block w-100 img-pop" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Kankourang</h5>
                                <p>La fête du kankourang démarre le mois de Septembre et dure trois mois au rythme de la fête de la circoncision chez les Mandingues.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/lebou.jpg" class="d-block w-100 img-pop" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ndawrabine</h5>
                                <p>C'est une danse traditionnelle avec des costumes multicolores. Les femmes font des tatouages, portent des perruques traditionnelles, forment colonnes, chantent et dansent au son des tams-tams.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/signare.jpg" class="d-block w-100 img-pop" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Les Signares</h5>
                                <p>Les fanals de Saint-Louis se déroulent chaque année, la dernière semaine de décembre sur la place Faidherbe et les rues adjacentes. Entre danses, percussions, défilé 
                                    des Signares et de fanals, cette parade traditionnelle retrace l’histoire de la ville de Ndar/Saint-Louis.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/popenguin.jpg" class="d-block w-100 img-pop" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Les atéliers de peintures et de poteries</h5>
                                <p> La galerie Diwali à Saint-Louis ou encore le Poppin’ Popenguine, où vous pourrez 
                                    vous initier à la danse, à la capoeira, au yoga, aux ateliers de maquillage et bien d’autres activités encore.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/balade.jpg" class="d-block w-100 img-pop" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Balade au tour du lac rose</h5>
                                <p>Faites de balade en amoureux ou en amitié en conduisants des motos</p>
                            </div>
                        </div>
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