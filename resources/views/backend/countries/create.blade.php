@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Create Countries 
                            <a href="{{url('countries')}}" class="btn btn-light">Retour</a>
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
                        <form enctype="multipart/form-data" action="{{route('countries.index')}}" method="post">
                             @csrf
                            <div class="mb-3">
                                <label for="images" class="form-label">Image du pays</label>
                                <input type="file" name="images" class="form-control" id="images" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="titre_pays" class="form-label">Nom du pays</label>
                                <input type="text" name="titre_pays" class="form-control" id="titre_pays" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description_pays" class="form-label">Descriptions</label>
                                <input type="text" name="description_pays" class="form-control" id="description_pays" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="capital" class="form-label">Capital</label>
                                <input type="text" name="capital" class="form-control" id="capital" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="langue_officielle" class="form-label">Langue</label>
                                <input type="text" name="langue_officielle" class="form-control" id="langue_officielle" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="population" class="form-label">Population</label>
                                <input type="text" name="population" class="form-control" id="population" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="hymne_national" class="form-label">Hymne national</label>
                                <input type="text" name="hymne_national" class="form-control" id="hymne_national" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="monnaie" class="form-label">Monnaie</label>
                                <input type="text" name="monnaie" class="form-control" id="monnaie" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="fete_national" class="form-label">Fête nationale</label>
                                <input type="text" name="fete_national" class="form-control" id="fete_national" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="pays_frontalier" class="form-label">Pays frontalier</label>
                                <input type="text" name="pays_frontalier" class="form-control" id="pays_frontalier" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="image_capital" class="form-label">Image du capital</label>
                                <input type="file" name="image_capital" class="form-control" id="image_capital" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="titre_capital" class="form-label">Nom du capital</label>
                                <input type="text" name="titre_capital" class="form-control" id="titre_capital" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description_capital" class="form-label">Descriptions</label>
                                <input type="text" name="description_capital" class="form-control" id="description_capital" placeholder="">
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