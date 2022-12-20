@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                <div class="entete">
                        <h3 class="text-light entete-1">Show Galleri_images 
                            <a href="{{url('galleri_images')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <h1 class="">Gestion du Galleri_images</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Image :</th>
                            <td>{{ $galleri_image->image }}</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>{{ $galleri_image->pays_id}}</td>
                        </tr>
                    </table> 
                </div>
            </div>
        </div>
    </section>

@endsection