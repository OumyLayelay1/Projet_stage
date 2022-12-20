@extends("layouts.app") 
@section("content") 

    <div class="container container-parent">
        <div class="row backend-page-row">
            @include('backend.aside.aside')
            <div class="col-md-9 backend-page-col">
                <div class="contain_table">
                    <table class="container-fluid table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Commentaire</th>
                            <th>Actions</th>
                        </thead>
                       <tbody>
                            @if(!$contactes->isEmpty())
                                @foreach($contactes as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->last_name}}</td>
                                        <td>{{$item->first_name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->message}}</td>
                                        <td>
                                            {!! Form::open(['route' => ['contactes.destroy', $item->id], 'method' => 'delete']) !!}
                                                <a href="{{ route('contactes.show', $item->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
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