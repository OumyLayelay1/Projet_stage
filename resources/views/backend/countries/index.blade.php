@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="contain_table">
                    <div class="text-end p-2 display-flex link-create">
                        <a href="{{ route('countries.create') }}" class="btn lien-create">Ajouter</a>
                    </div>
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Image du pays</th>
                            <th>Nom du pays</th>
                            <th>Descriptions</th>
                            <th>Capital</th>
                            <th>Langue</th>
                            <th>Population</th>
                            <th>Hymne national</th>
                            <th>Monnaie</th>
                            <th>Fête nationale</th>
                            <th>Pays frontalier</th>
                            <th>Image du capital</th>
                            <th>Nom du capital</th>
                            <th>Descriptions</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$countries->isEmpty())
                                @foreach($countries as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img width="60" height="60" src="{{ asset($item->images) }}" alt="Image">
                                        </td>
                                        <td>{{$item->titre_pays}}</td>
                                        <td>{{$item->description_pays}}</td>
                                        <td>{{$item->capital}}</td>
                                        <td>{{$item->langue_officielle}}</td>
                                        <td>{{$item->population}}</td>
                                        <td>{{$item->hymne_national}}</td>
                                        <td>{{$item->monnaie}}</td>
                                        <td>{{$item->fete_national}}</td>
                                        <td>{{$item->pays_frontalier}}</td>
                                        <td>
                                            <img width="60" height="60" src="{{ asset($item->image_capital) }}" alt="Image">
                                        </td>
                                        <td>{{$item->titre_capital}}</td>
                                        <td>{{$item->description_capital}}</td>
                                        <td>
                                        {!! Form::open(['route' => ['countries.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('countries.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('countries.edit', $item->id) }}">
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