@extends("frontend.app") 
@section("title", "Recherche")
@section("content") 

    
                                @foreach($countries as $item)
                                    <div>
                                        @foreach($item->countries as $country)
                                            {{ $country->titre_pays }}{{ $loop->last ? '' : ', '}}
                                            
                                        @endforeach
                                    </div>
                                    <div class="col-3"> 
                                        <a href="/pays" class="mnpays"><img src="{{asset($item->images)}}" alt="Pays africains" class="w-50 rounded sen"></a>
                                        <div class="text-center"><p class="text">{{$item->titre_pays}}</p></div>
                                    </div>
                                @endforeach
                                
                    <div class="col-3"> <a href="/pays" class="mnpays"><img src="images/capvert.jfif" alt="" class="w-50 rounded sen"></a><p class="text-center">Cap-Vert</p></div>

@endsection