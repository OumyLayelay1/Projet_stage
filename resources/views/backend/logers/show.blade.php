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
                    <h1 class="">Gestion des logements</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Image de l'hôtel :</th>
                            <td>{{ $loger->image_hotel }}</td>
                        </tr>
                        <tr>
                            <th>Nom :</th>
                            <td>{{ $loger->nom_hotel}}</td>
                        </tr>
                        <tr>
                            <th>Descriptions</th>
                            <td>{{ $loger->description_hotel}}</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>{{ $loger->pays_id}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection