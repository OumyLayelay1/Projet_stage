@extends("frontend/app") 
@section("title", "Marché/Boutique")
@section("content") 
        <div class=" pt-custum"></div>
    </header>
    <section class="containerfluid">
        <div class="row container-bottom">
            @if(!$cadeaus->isEmpty())
                @foreach($cadeaus as $item)
                    <div class="col-md-8 slice"><img src="{{ asset($item->image_marche) }}" alt="" class="w-100 slices"></div>
                    <div class="col-md-4 text-center part-resto">
                        <h5 class="text-center titre-resto">{{$item->titre_marche}}</h5>
                        <div class="pt-3 description-resto-local">
                            <p class="adresse-1">{{$item->address}}</p>
                            <p class="adresse-1">Coordonnées: {{$item->coordonnee}} </p>
                            <p class="adresse-1">Site Web: {{$item->site_web}} </p>
                            <p class="adresse-1">Horaires d'ouverture: <br>lun.: 11:00-23:00 <br>
                                                Mar.: 11:00-23:00 <br>Mer.: 11:00-23:00 <br>Jeu.: 11:00-23:00 <br>
                                                Ven.: 11:00-00:00 <br>Sam.: 12:00-00:00 <br>Dim.: Fermé 
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class="col-md-8 slice"><img src="images/marche.jpg" alt="" class="w-100 slices"></div>
            <div class="col-md-4 text-center">
                <h5 class="text-center titre-resto">Helene K la Boutique</h5>
                <div class="pt-3 description-resto-local">
                    <p class="adresse-1">Adresse: Rue face au UNHCR, puis 1ére à gauche,Dakar,Sénégal</p>
                    <p class="adresse-1">Coordonnées: <a href="#" class="lien-contact">+221.77.759.41.57</a> </p>
                    <p class="adresse-1">E-mail: <a href="#" class="lien-contact">heleneklaboutique@gmail.com</a> </p>
                    <p class="adresse-1">Réseaux sociaux:&emsp;<a href="https://www.facebook.com/Heleneklaboutique/" class="lien-contact"><i class="fa-brands fa-square-facebook lien-contact"></i></a>
                    &emsp;<a href="https://www.instagram.com/heleneklaboutique/" class="lien-contact"><i class="fa-brands fa-instagram lien-contact"></i></a>
                    </p>
                    <p class="adresse-1">Horaires d'ouverture: <br>lun.: 09:00-18:00 <br>
                        Mar.: 09:00-18:00 <br>Mer.: 09:00-18:00 <br>Jeu.: 09:00-18:00 <br>
                        Ven.: 09:00-18:00 <br>Sam.: 10:00-19:00 <br>Dim.: Fermé 
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>--}}
        </div> 
    </section>

@endsection