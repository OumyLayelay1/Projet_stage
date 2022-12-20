@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Edit Divertirs 
                            <a href="{{url('divertirs')}}" class="btn btn-light">Retour</a>
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
                        <form action="{{route('divertirs.update', $divertir->id)}}" method="POST">
                             @csrf
                             @method('PUT')

                            <div class="mb-3">
                                <label for="image_distraction" class="form-label">Image</label>
                                <input value="{{ $divertir->image_distraction }}" type="file" name="image_distraction" class="form-control" id="image_distraction" placeholder="">
                                <div class="img-preview">
                                    <img width="100" height="100" src="{{ asset($divertir->image_distraction) }}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="titre_distraction" class="form-label">Titre</label>
                                <input value="{{ $divertir->titre_distraction }}" type="text" name="titre_distraction" class="form-control" id="titre_distraction" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="description_distraction" class="form-label">Descriptions</label>
                                <input value="{{ $divertir->description_distraction }}" type="text" name="description_distraction" class="form-control" id="description_distraction" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="pays_id" class="form-label">Pays</label>
                                <select name="pays_id" id="pays_id" class="form-control" value="{{ $divertir->pays_id }}">
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