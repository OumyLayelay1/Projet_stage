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
                    <h1 class="">Gestion des cadeaux</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Image :</th>
                            <td>
                                <img class="image-show" src="{{ asset($cadeau->image_marche) }}" alt="Image">
                            </td>
                        </tr>
                        <tr>
                            <th>Nom :</th>
                            <td>{{ $cadeau->titre_marche}}</td>
                        </tr>
                        <tr>
                            <th>Lien :</th>
                            <td>{{ url('localisation-marche/'.$cadeau->id.'/create')}}</td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>{{ $cadeau->address}}</td>
                        </tr>
                        <tr>
                            <th>Coordonnées</th>
                            <td>{{ $cadeau->coordonnee}}</td>
                        </tr>
                        <tr>
                            <th>Site web</th>
                            <td>{{ $cadeau->site_web}}</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>{{ $cadeau->pays_id}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection