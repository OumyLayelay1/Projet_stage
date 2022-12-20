@extends("frontend.app")
@section("title", "Accueil")
@section("content")
        <div class="pt-custom">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php $i = 1; @endphp
                    @if(!$sliders->isEmpty())
                        @foreach($sliders as $item)
                            <div class="carousel-item {{$i == '1'? 'active':'' }}">
                                <img src="{{ asset($item->slider_image) }}" class="d-block w-100 avif" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="text-dark text-carousel">{{$item->slider_label}}</span></h1>
                                    <div class="link"><a href="{{url('destination/'.$item->id.'/create')}}" class="btn btn-reserve">Par ici</a></div>
                                </div>
                            </div>  
                        @endforeach
                    @endif  
                </div>
            </div>
        </div>    
    </header>
    <section class="mt-5 apropos">
        <section class="mt-5 mb-5 container propos">
            <h2 class="text-dark pb-5 text-center objectif">Quelle est l'objectif de "KaayTukki"?</h2>
            <div class="row question">
                <div class="col-sm-4 mt-4 reponse">
                    <div class="img"><img src="images/experience.png" alt="" class="experience"></div>
                    <h6 class="text-muted text-center">L'expérience au centre du voyage</h6>
                    <p class="text-center rp">
                        Vivre des expériences de vie uniques est
                        le principal moteur de tout voyage. Nous recherchons à vous créer ces moments à toutes les étapes de votre voyage.
                    </p>
                </div>
                <div class="col-sm-4 reponse">
                    <div class="img"><img src="images/souvenir.png" alt="" class="experience"></div>
                    <h6 class="text-muted text-center">Se créer des souvenirs</h6>
                    <p class="text-center rp">Le voyage est une machine à souvenirs. 
                        Nous voulons vous proposer le meilleur pour des moments de découvertes et d'aventures mémorables.</p>
                </div>
                <div class="col-sm-4 reponse">
                    <div class="img"><img src="images/meilleur.png" alt="" class="experiences"></div>
                    <h6 class="text-muted text-center">Trouver le meilleur de chaque destination</h6>
                    <p class="text-center rp">Chaque destination sur terre est différente, unique. 
                        Nous séléctionnons le meilleur de chaque lieu pour que vous ne soyez jamais déçu de votre voyage !</p>
                </div>
            </div>
        </section>
    </section>
    <section class="container main-image">
        <div class="row p-5 m-3 main-contain">
           <div class="col-md-4 mb-3 plan">
                <div class="contain">
                    <div class="img1"><img src="images/Group.png" alt="" class="w-50 figma1">
                        <div class="p-3">
                        <p class="text-dark title">Planifier</p>
                        <div class="text-muted text-para">Confiez-nous vos rêves d'évasion: en famille ou entre amis nous trouverons la formule qui comblera vos attentes.</div>
                        <div class="organises"><a href="/reserve" class="btn  organise">Voir</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <div class="col-md-4 mb-3 plan">
                <div class="contain">
                    <div class="img1"><img src="images/Frame2.png" alt="" class="w-100 figma1">
                        <div class="p-3">
                            <p class="text-dark title">Organiser</p>
                            <div class="text-muted text-para">Bénéficiez de l'expertise de nos spécialistes de chaque destination, ils vous accompagnent dans la réalisation de votre voyage.</div>
                            <div class="organises"><a href="/destination" class="btn organise">Voir</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 plan">
                <div class="contain">
                    <div class="img1"><img src="images/frame.png" alt="" class="w-100 figma1">
                        <div class="p-3">
                            <p class="text-dark title">Voyager</p>
                            <div class="text-muted text-para">Nous nous chargeons d'assurer votre sécurité et de veiller à votre pleine sérénité tout au long de vos voyages.</div>
                            <div class="organises"><a href="/destination" class="btn organise">Voir</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-2 ">
        <div id="carouselExampleSlidesOnly" class="carousel slide senegal" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php $i = 1; @endphp
                @if(!$countries->isEmpty())
                    @foreach($countries as $item)
                        <div class="carousel-item {{$i == '1'? 'active':'' }}">
                            <div class="cadre-image"><img src="{{ asset($item->images) }}" class="d-block w-100 avif" alt="..."></div>
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-light text-carousel para-carousel">{{$item->description_pays}}</p>
                            </div>
                        </div>  
                    @endforeach
                @endif  
            </div>
        </div>
        
        
    </section>
    <section class="container mt-5 img-text mt-5">
        <div class="pt-5 row">
            <div class="col-md-3 display-flex region">
                <div class="text-center pb-2 img-casa"><img src="images/dkar.jpg" alt="" class="w-100 images">
                    <div class="pb-4 text-casa">
                        <p class="region-s">Dakar</p>
                        <p class="description">
                            Si vous visitez le Sénégal, vous devez aller à Dakar, capitale du Sénégal, qui représente avant tout le poumon économique de tout le pays. 
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-md-3 display-flex region">
                <div class="text-center img-casa"><img src="images/casamance1.jpg" alt="" class="w-100 images">
                    <div class="pb-2 text-casa">
                        <p class="region-s"> Casamance</p>
                        <p class="description">
                                Pour bien visiter le Sénégal, n’hésitez pas à aller au plus proche des villages, dans la Casamance, qui est considérée pour certains comme la plus belle région du pays.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 region">
                <div class="text-center img-casa"><img src="images/lacrose.jpg" alt="" class="w-100 images">
                    <div class="pb-2 text-casa">
                        <p class="region-s">Lac Rose</p>
                        <p class="description">
                            Les touristes aiment cette excursion. Attention, la teinte rosée du lac peut varier. Le lac apparaît plus rose en saison sèche, mais aussi en milieu de journée. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 region">
                <div class="text-center img-casa"><img src="images/kedougou.jpg" alt="" class="w-100 images">
                    <div class="text-casa">
                        <p class="region-s">Kedougou</p>
                        <p class="description">
                            La région de Kédougou est un trésor où se mêlent différentes ethnies. Et pour passer un bon séjour ne manquez pas de visiter le Parc national de Niokolo Koba et ses beaux paysages.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="/pays" class="btn w-15 voir">En voir +</a></div>
    </section> 
@endsection    