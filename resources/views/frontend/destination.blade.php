@extends("frontend.app") 
@section("title", "Destination")
@section("content")       
        <div class="mb-5 bg"></div>
    </header>
    <section class="container mb-5 conteneur-destination">
            <div class="row">
                <div class="col-md-8"><h1 class="text-center mt-4 mb-5 text-lacrose container-tt">Les plus beaux endroits à visiter en Afrique </h1></div>
                <div class="col-md-4 mt-4 mb-4 partialle">@include('partials.search')</div>
            </div>
            <div class="container pays">
                <div class="row mb-2 afrique">
                    @if(!$countries->isEmpty())
                        @foreach($countries as $item)
                            <div class="col-3"> 
                                <a href="/pays" class="mnpays"><img src="{{asset($item->images)}}" alt="Pays africains" class="w-50 rounded sen"></a>
                                <div class="text-center"><p class="text">{{$item->titre_pays}}</p></div>
                            </div>
                        @endforeach
                    @endif  
                </div>
                <div class="row mb-2 afrique">
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/capvert.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Cap-Vert</p></div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/tunisie.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Tunisie</p> </div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/seychelles.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Seychelles</p> </div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/kenya.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Kenya</p> </div>
                </div>
                <div class="row mb-2 afrique">
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/AfricSud.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Afrique du Sud</p> </div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/algerie.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Algérie</p> </div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/madagascar.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Madagascar</p> </div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/conakry.avif" alt="Guinée-Conakry" class="w-50 rounded sen"></a><p class="text-center">Guinée-Conakry</p> </div>
                </div>
                <div class="row mb-2 afrique">
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/mauritanie.jpg" alt="" class="w-50 rounded sen"></a><p class="text-center"> Mauritanie</p></div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/gambie.jpg" alt="" class="w-50 rounded sen"></a><p class="text-center">Gambie</p> </div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/mali.jpg" alt="" class="w-50 rounded sen"></a><p class="text-center">Mali</p> </div>
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/bissau.jpg" alt="" class="w-50 rounded sen"></a><br> <p class="text-center">Guinée-Bissau</p></div>
                </div>
            </div>
    </section>
@endsection