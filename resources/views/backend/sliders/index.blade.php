@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="text-end p-2 display-flex link-create">
                    <a href="{{ route('sliders.create') }}" class="btn lien-create">Ajouter</a>
                </div>
                <div class="contain_table">
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Du text</th>
                            <th>Image</th>
                            <th>Lien</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if(!$sliders->isEmpty())
                                @foreach($sliders as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->slider_label}}</td>
                                        <td>
                                            <img width="60" height="60" src="{{ asset($item->slider_image) }}" alt="Image">
                                        </td>
                                        <td><a href="{{url('frontend.destination'.$item->id.'/create')}}" class="btn btn-reserve">Par ici</a></td>
                                        <td>
                                            {!! Form::open(['route' => ['sliders.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('sliders.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('sliders.edit', $item->id) }}">
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