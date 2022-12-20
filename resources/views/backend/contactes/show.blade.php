@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Show Contates 
                            <a href="{{url('contactes')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <h1 class="">Gestion des contacts</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Nom :</th>
                            <td>{{ $contacte->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Prénom :</th>
                            <td>{{ $contacte->first_name}}</td>
                        </tr>
                        <tr>
                            <th>Mail</th>
                            <td>{{ $contacte->email}}</td>
                        </tr>
                        <tr>
                            <th>Commentaire</th>
                            <td>{{ $contacte->message}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection