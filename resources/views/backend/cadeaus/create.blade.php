@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Show Cadeaus 
                            <a href="{{url('cadeaus')}}" class="btn btn-light">Retour</a>
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
                        <form enctype="multipart/form-data" action="{{route('cadeaus.store')}}" method="post">
                             @csrf
                            <div class="mb-3">
                                <label for="image_marche" class="form-label">Image</label>
                                <input type="file" name="image_marche" class="form-control" id="image_marche" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="titre_marche" class="form-label">Titre</label>
                                <input type="text" name="titre_marche" class="form-control" id="titre_marche" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="button_link" class="form-label">Lien</label>
                                <input type="text" name="button_link" class="form-control" id="button_link" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="adress" class="form-label">Adresse</label>
                                <input type="text" name="adress" class="form-control" id="adress" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="coordonnee" class="form-label">Coordonnées</label>
                                <input type="text" name="coordonnee" class="form-control" id="coordonnee" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="site_web" class="form-label">Site web</label>
                                <input type="text" name="site_web" class="form-control" id="site_web" placeholder="">
                            </div>
                            <div class="mb-3">
                                <select name="pays_id" id="pays_id" class="form-control">
                                    <option disabled selected>Choisir</option>
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