@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="text-end p-2 display-flex link-create">
                    <a href="{{ route('horaires.create') }}" class="btn lien-create">Ajouter</a>
                </div>
                <div class="contain_table">
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Jour</th>
                            <th>Heure ouverture</th>
                            <th>Heure fermeture</th>
                            <th>Fermé OUI/NON</th>
                            <th>Restaurant</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$horaires->isEmpty())
                                @foreach($horaires as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->jour}}</td>
                                        <td>{{$item->heure_ouverture}}</td>
                                        <td>{{$item->heure_fermeture}}</td>
                                        <td>{{$item->is_closed}}</td>
                                        <td>{{$item->resto_id}}</td>
                                        <td>
                                            {!! Form::open(['route' => ['horaires.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('horaires.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('horaires.edit', $item->id) }}">
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