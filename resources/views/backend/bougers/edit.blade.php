@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Create Bougers 
                            <a href="{{url('bougers')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <div class="container-form">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form enctype="multipart/form-data" action="{{route('bougers.update', $bouger->id)}}" method="POST">
                            
                             @csrf
                             @method('PUT')

                            <div class="mb-3">
                                <label for="image_bouger" class="form-label">Image</label>
                                <input type="file" name="image_bouger" class="form-control" id="image_bouger" placeholder="">
                                <div class="img-preview">
                                    <img width="100" height="100" src="{{ asset($bouger->image_bouger) }}" alt="images">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="titre_bouger" class="form-label">Titre</label>
                                <input value="{{ $bouger->titre_bouger }}" type="text" name="titre_bouger" class="form-control" id="titre_bouger" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description_bouger" class="form-label">Descriptions</label>
                                <input value="{{ $bouger->description_bouger }}" type="text" name="description_bouger" class="form-control" id="description_bouger" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="pays_id" class="form-label">Pays</label>
                                <select name="pays_id" id="pays_id" class="form-control">
                                    @if (!$pays->isEmpty())
                                        @foreach ($pays as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->titre_pays }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select> 
                            </div>
                            <div class="col-12">
                                <button class="btn btn-envoie" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection