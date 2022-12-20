@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Show Horaires 
                            <a href="{{url('horaires')}}" class="btn btn-light">Retour</a>
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
                        <form enctype="multipart/form-data" action="{{route('horaires.store')}}" method="POST">
                             @csrf
                            <div class="mb-3">
                                <label for="jour">Jour:</label>
                                <select id="jour" name="jour">
                                    <option selected>Lundi</option>
                                    <option>Mardi</option>
                                    <option>Mercredi</option>
                                    <option>Jeudi</option>
                                    <option>Vendredi</option>
                                    <option>Samedi</option>
                                    <option>Dimanche</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="heure_ouverture" class="form-label">Heure ouverture</label>
                                <input type="time" name="heure_ouverture" class="form-control" id="heure_ouverture" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="heure_fermeture" class="form-label">Heure fermeture</label>
                                <input type="time" name="heure_fermeture" class="form-control" id="heure_fermeture" placeholder="">
                            </div>
                            <div class="mb-3">Fermé: 
                                <label for="is_closed" class="form-label">Oui</label>
                                <input type="radio" name="is_closed" class="form-control" id="is_closed" placeholder="">
                                <label for="is_closed" class="form-label">Non</label>
                                <input type="radio" name="is_closed" class="form-control" id="is_closed" placeholder="">
                            </div>
                            <div class="mb-3">
                                <select name="resto_id" id="resto_id" class="form-control">
                                    <option disabled selected>Choisir</option>
                                    @if (!$restos->isEmpty())
                                        @foreach ($restos as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->titre_restaurant }}
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