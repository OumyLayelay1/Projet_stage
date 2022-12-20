@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Create Logers 
                            <a href="{{url('logers')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <div class="container-form">
                        <form enctype="multipart/form-data" action="{{route('logers.update', $loger->id)}}" method="POST">
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                             @csrf
                             @method('PUT')
                            <div class="mb-3">
                                <label for="image_hotel" class="form-label">Image de l'hôtel</label>
                                <input type="file" name="image_hotel" class="form-control" id="image_hotel" placeholder="">
                                <div class="img-preview">
                                    <img width="100" height="100" src="{{ asset($loger->image_hotel) }}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nom_hotel" class="form-label">Nom</label>
                                <input value="{{ $loger->nom_hotel }}" type="text" name="nom_hotel" class="form-control" id="nom_hotel" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description_hotel" class="form-label">Descriptions</label>
                                <input value="{{ $loger->description_hotel }}" type="text" name="description_hotel" class="form-control" id="description_hotel" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="pays_id" class="form-label">Pays</label>
                                <select name="pays_id" id="pays_id" class="form-control">
                                    @if (!$pays->isEmpty())
                                        @foreach ($pays as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->titre_pays }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select> 
                                
                            </div>
                            <div class="col-12">
                                <button class="btn btn-envoie" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection