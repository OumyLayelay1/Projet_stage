@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Create Bougers 
                            <a href="{{url('bougers')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <h1 class="">Gestion du restaurant</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Image :</th>
                            <td>{{ $bouger->image_bouger }}</td>
                        </tr>
                        <tr>
                            <th>Titre :</th>
                            <td>{{ $bouger->titre_bouger}}</td>
                        </tr>
                        <tr>
                            <th>Descriptions</th>
                            <td>{{ $bouger->description_bouger}}</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>{{ $bouger->pays_id}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection