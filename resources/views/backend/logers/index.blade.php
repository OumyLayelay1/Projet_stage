@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="text-end p-2 display-flex link-create">
                    <a href="{{ route('logers.create') }}" class="btn lien-create">Ajouter</a>
                </div>
                <div class="contain_table">
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Descriptions</th>
                            <th>Pays</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$logers->isEmpty())
                                @foreach($logers as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img width="60" height="60" src="{{ asset($item->image_hotel) }}" alt="Image">
                                        </td>
                                        <td>{{$item->nom_hotel}}</td>
                                        <td>{{$item->description_hotel}}</td>
                                        <td>{{$item->pays_id}}</td>
                                        <td>
                                            {!! Form::open(['route' => ['logers.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('logers.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('logers.edit', $item->id) }}">
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