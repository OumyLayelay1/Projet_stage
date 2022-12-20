@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Show Restos 
                            <a href="{{url('restos')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <h1 class="">Gestion du restaurant</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Image :</th>
                            <td>
                                <img class="image-show" src="{{ asset($resto->image_restaurant) }}" alt="Image"></td>
                        </tr>
                        <tr>
                            <th>Nom :</th>
                            <td>{{ $resto->titre_restaurant}}</td>
                        </tr>
                        <tr>
                            <th>Lien :</th>
                            <td>{{ url('localisation-resto/'.$resto->id.'/create')}}</td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>{{ $resto->address}}</td>
                        </tr>
                        <tr>
                            <th>Coordonnées</th>
                            <td>{{ $resto->coordonnee}}</td>
                        </tr>
                        <tr>
                            <th>Site web</th>
                            <td>{{ $resto->site_web}}</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>{{ $resto->pays_id}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection