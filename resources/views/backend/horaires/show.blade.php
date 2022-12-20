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
                    <h1 class="">Gestion des horaires</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Jour :</th>
                            <td>{{ $horaire->jour }}</td>
                        </tr>
                        <tr>
                            <th>Heure ouverture :</th>
                            <td>{{ $horaire->heure_ouverture}}</td>
                        </tr>
                        <tr>
                            <th>Heure fermeture :</th>
                            <td>{{$horaire->heure_fermeture}}</td>
                        </tr>
                        <tr>
                            <th>Fermé :</th>
                            <td>{{ $horaire->is_closed}}</td>
                        </tr>
                        <tr>
                            <th>Restaurant</th>
                            <td>{{ $horaire->resto_id}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection