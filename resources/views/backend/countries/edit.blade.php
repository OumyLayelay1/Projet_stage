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
                        <form enctype="multipart/form-data" action="{{route('countries.update', $country->id)}}" method="POST">
                             @csrf
                             @method('PUT')

                            <div class="mb-3">
                                <label for="images" class="form-label">Image du pays</label>
                                <input value="{{ $country->images }}" type="file" name="images" class="form-control" id="images" placeholder="">
                                <div class="img-preview">
                                    <img width="100" height="100" src="{{ asset($country->images) }}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="titre_pays" class="form-label">Nom du pays</label>
                                <input value="{{ $country->titre_pays }}" type="text" name="titre_pays" class="form-control" id="titre_pays" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description_pays" class="form-label">Descriptions</label>
                                <input value="{{ $country->description_pays }}" type="text" name="description_pays" class="form-control" id="description_pays" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="capital" class="form-label">Capital</label>
                                <input value="{{ $country->capital }}" type="text" name="capital" class="form-control" id="capital" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="langue_officielle" class="form-label">Langue</label>
                                <input value="{{ $country->langue_officielle }}" type="text" name="langue_officielle" class="form-control" id="langue_officielle" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="population" class="form-label">Population</label>
                                <input value="{{ $country->population }}" type="text" name="population" class="form-control" id="population" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="hymne_national" class="form-label">Hymne national</label>
                                <input value="{{ $country->hymne_national }}" type="text" name="hymne_national" class="form-control" id="hymne_national" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="monnaie" class="form-label">Monnaie</label>
                                <input value="{{ $country->monnaie }}" type="text" name="monnaie" class="form-control" id="monnaie" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="fete_national" class="form-label">Fête nationale</label>
                                <input value="{{ $country->fete_national }}" type="text" name="fete_national" class="form-control" id="fete_national" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="pays_frontalier" class="form-label">Pays frontalier</label>
                                <input value="{{ $country->pays_frontalier }}" type="text" name="pays_frontalier" class="form-control" id="pays_frontalier" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="image_capital" class="form-label">Image du capital</label>
                                <input value="{{ $country->image_capital }}" type="file" name="image_capital" class="form-control" id="image_capital" placeholder="">
                                <div class="img-preview">
                                    <img width="100" height="100" src="{{ asset($country->image_capital) }}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="titre_capital" class="form-label">Nom du capital</label>
                                <input value="{{ $country->titre_capital }}" type="text" name="titre_capital" class="form-control" id="titre_capital" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description_capital" class="form-label">Descriptions</label>
                                <input value="{{ $country->description_capital }}" type="text" name="description_capital" class="form-control" id="description_capital" placeholder="">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-envoie" type="submit">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection