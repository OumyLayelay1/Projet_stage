@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="text-end p-2 display-flex link-create">
                    <a href="{{ route('cadeaus.create') }}" class="btn lien-create">Ajouter</a>
                </div>
                <div class="contain_table">
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Lien</th>
                            <th>Adresse</th>
                            <th>Coordonées</th>
                            <th>Site web</th>
                            <th>Pays</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$cadeaus->isEmpty())
                                @foreach($cadeaus as $item)
                                    <tr>
                                        <input type="hidden" class="serdelete_val__id" value="{{$item->id}}">
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img width="100" height="100" src="{{ asset($item->image_marche) }}" alt="">
                                        </td>
                                        <td>{{$item->titre_marche}}</td>
                                        <td><a href="{{url('localisation-cadeau/'.$item->id.'/create')}}" class="btn btn-reserve">Plus d'informations</a></td>
                                        <td>{{$item->adress}}</td>
                                        <td>{{$item->coordonnee}}</td>
                                        <td>{{$item->site_web}}</td>
                                        <td>{{$item->pays_id}}</td>
                                        <td>
                                            {!! Form::open(['route' => ['cadeaus.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('cadeaus.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('cadeaus.edit', $item->id) }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                {!! Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'text-danger servideletebtn', 'type' => 'button']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <div class="container-fluid container-donnee">
                                    <div class="donnee">Aucune donnée</div> 
                                    
                                </div>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>

@endsection
@section("scripts")

    <script>
        $(document).ready(function(){
            $('.servideletebtn').click(function(e){
                e.preventDefault();

                var delete_id = $(this).closest("tr").find('.serdelete_val__id').val();

                swal({
                    title: "Êtes-vous sûr(e)?",
                    text: "Une fois supprimé, vous ne pourrez plus récupérer ce fichier à nouveau!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {

                        var data = {
                            "_token": $('input[name=_token]').val(),
                            "id": delete_id,
                        }
                        $.ajax({
                            type: "DELETE",
                            url: '/cadeaus/'+delete_id,
                            data: data,
                            success: function (response) {
                                swal(response.status, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    location.reload();
                                });
                            }
                        })
                    } 
                });
            });
        });
        
         
    </script>

@endsection