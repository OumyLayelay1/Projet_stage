@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="text-end p-2 display-flex link-create">
                    <a href="{{ route('galleri_images.create') }}" class="btn lien-create">Ajouter</a>
                </div>
                <div class="contain_table">
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Pays</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$galleri_images->isEmpty())
                                @foreach($galleri_images as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img width="100" height="100" src="{{ asset($item->image) }}" alt="">
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description_ville}}</td>
                                        <td>{{$item->pays_id}}</td>
                                        <td>
                                            {!! Form::open(['route' => ['galleri_images.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('galleri_images.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('galleri_images.edit', $item->id) }}">
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