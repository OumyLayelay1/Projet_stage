@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Show Countries 
                            <a href="{{url('countries')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <h1 class="">Gestion du restaurant</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Image du pays :</th>
                            <td>{{ $country->images }}</td>
                        </tr>
                        <tr>
                            <th>Nom du pays :</th>
                            <td>{{ $country->titre_pays}}</td>
                        </tr>
                        <tr>
                            <th>Descriptions</th>
                            <td>{{ $country->description_pays}}</td>
                        </tr>
                        <tr>
                            <th>Capital</th>
                            <td>{{ $country->capital}}</td>
                        </tr>
                        <tr>
                            <th>Langue</th>
                            <td>{{ $country->langue_officielle}}</td>
                        </tr>
                        <tr>
                            <th>Population</th>
                            <td>{{ $country->population}}</td>
                        </tr>
                        <tr>
                            <th>Hymne national</th>
                            <td>{{ $country->hymne_national}}</td>
                        </tr>
                        <tr>
                            <th>Monnaie</th>
                            <td>{{ $country->monnaie}}</td>
                        </tr>
                        <tr>
                            <th>Pays frontalier</th>
                            <td>{{ $country->pays_frontalier}}</td>
                        </tr>
                        <tr>
                            <th>Image du capital</th>
                            <td>{{ $country->image_capital}}</td>
                        </tr>
                        <tr>
                            <th>Nom du capital</th>
                            <td>{{ $country->titre_capital}}</td>
                        </tr>
                        <tr>
                            <th>Descriptions</th>
                            <td>{{ $country->description_capital}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection