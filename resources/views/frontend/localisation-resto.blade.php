@extends("frontend.app") 
@section("title", "Restauration")
@section("content") 
        <div class=" pt-custum"></div>
    </header>
    <section class="containerfluid">
        <div class="row mb-4">
            @if(!$restos->isEmpty())
                @foreach($restos as $item)
                    <div class="col-md-8 slice"><img src="{{ asset($item->image_restaurant) }}" alt="" class="w-100 slices"></div>
                    <div class="col-md-4 text-center">
                        <h5 class="text-center titre-resto">{{$item->titre_restaurant}}</h5>
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
        </div>
    </section>

@endsection