@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="contain_table">
                    <div class="text-end p-2 display-flex link-create">
                        <a href="{{ route('restos.create') }}" class="btn lien-create">Ajouter</a>
                    </div>
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Lien</th>
                            <th>Adresse</th>
                            <th>Coordonées</th>
                            <th>Site web</th>
                            <th>Pays</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$restos->isEmpty())
                                @foreach($restos as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img class="image-create" src="{{ asset($item->image_restaurant) }}" alt="Image">
                                        </td>
                                        <td>{{$item->titre_restaurant}}</td>
                                        <td><a href="{{url('localisation-resto/'.$item->id.'/create')}}" class="btn btn-reserve">Plus d'informations</a></td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->coordonnee}}</td>
                                        <td>{{$item->site_web}}</td>
                                        <td>{{$item->pays_id}}</td>
                                        <td>
                                            {!! Form::open(['route' => ['restos.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('restos.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('restos.edit', $item->id) }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                {!! Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'text-danger', 'type' => 'submit']) !!}
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