@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Edit Galleri_images 
                            <a href="{{url('galleri_images')}}" class="btn btn-light">Retour</a>
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
                        <form enctype="multipart/form-data" action="{{route('galleri_images.update', $galleri_image->id)}}" method="POST">
                             @csrf
                             @method('PUT')

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input value="{{ $galleri_image->image }}" type="file" name="image" class="form-control" id="image" placeholder="">
                                <div class="img-preview">
                                    <img width="100" height="100" src="{{ asset($galleri_image->image) }}" alt="images">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="" value="{{ $galleri_image->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="description_ville" class="form-label">Description</label>
                                <input type="text" name="description_ville" class="form-control" id="description_ville" placeholder="" value="{{ $galleri_image->description_ville }}">
                            </div>
                            <div class="mb-3">
                                <select name="pays_id" id="pays_id" class="form-control" value="{{ $galleri_image->pays_id }}">
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