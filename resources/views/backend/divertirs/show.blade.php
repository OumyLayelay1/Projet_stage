@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Create Divertirs 
                            <a href="{{url('divertirs')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <h1 class="">Gestion du CRUD Divertirs</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Image :</th>
                            <td>
                                <img class="image-show" src="{{ asset($divertir->image_distraction) }}" alt="Image">
                            </td>
                        </tr>
                        <tr>
                            <th>Titre :</th>
                            <td>{{ $divertir->titre_distraction}}</td>
                        </tr>
                        <tr>
                            <th>Descriptions</th>
                            <td>{{ $divertir->description_distraction}}</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>{{ $divertir->pays_id}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection