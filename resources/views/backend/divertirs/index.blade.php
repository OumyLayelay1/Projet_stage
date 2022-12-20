@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="text-end p-2 display-flex link-create">
                    <a href="{{ route('divertirs.create') }}" class="btn lien-create">Ajouter</a>
                </div>
                <div class="contain_table">
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Descriptions</th>
                            <th>Pays</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$divertirs->isEmpty())
                                @foreach($divertirs as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img width="60" height="60" src="{{ asset($item->image_distraction) }}" alt="Image">
                                        </td>
                                        <td>{{$item->titre_distraction}}</td>
                                        <td>{{$item->description_distraction}}</td>
                                        <td>{{$item->pays_id}}</td>
                                        <td>
                                            {!! Form::open(['route' => ['divertirs.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('divertirs.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('divertirs.edit', $item->id) }}">
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