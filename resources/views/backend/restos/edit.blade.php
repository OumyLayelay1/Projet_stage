@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Create Restos 
                            <a href="{{url('restos')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <div class="container-form">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form enctype="multipart/form-data" action="{{route('restos.update', $resto->id)}}" method="post">
                             @csrf
                             @method('PUT')
                             
                            <div class="mb-3">
                            <label for="image_restaurant" class="form-label">Image</label>
                                <input type="file" name="image_restaurant" class="form-control" id="image_restaurant" placeholder="">
                                <div class="img-preview">
                                    <img width="100" height="100" src="{{ asset($resto->image_restaurant) }}" alt="images">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="titre_restaurant" class="form-label">Nom</label>
                                <input value="{{ $resto->titre_restaurant }}" type="text" name="titre_restaurant" class="form-control" id="titre_restaurant" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="button_link" class="form-label">Lien</label>
                                <input value="{{ $resto->button_link }}" type="text" name="button_link" class="form-control" id="button_link" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Adresse</label>
                                <input value="{{ $resto->address }}" type="text" name="address" class="form-control" id="address" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="coordonnee" class="form-label">Coordonn??es</label>
                                <input value="{{ $resto->coordonnee }}" type="text" name="coordonnee" class="form-control" id="coordonnee" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="site_web" class="form-label">Site web</label>
                                <input value="{{ $resto->site_web }}" type="text" name="site_web" class="form-control" id="site_web" placeholder="">
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