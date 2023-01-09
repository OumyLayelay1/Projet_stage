@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Edit Slider
                            <a href="{{url('sliders')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <div class="container-form">
                        <form enctype="multipart/form-data" action="{{route('sliders.update', $slider->id)}}" method="post">
                             @csrf
                             @method('PUT')

                            <div class="mb-3">
                                <label for="slider_label" class="form-label">Du text</label>
                                <input type="text" name="slider_label" value="{{$slider->slider_label}}" class="form-control" id="slider_label" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="slider_image" class="form-label">Image</label>
                                <input type="file" name="slider_image" class="form-control" id="slider_image" placeholder="">
                                <div class="img-preview">
                                    <img class="image-create" src="{{ asset($slider->slider_image) }}" alt="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="slider_button_link" class="form-label">Par ici</label>
                                <input type="text" name="slider_button_link" value="{{$slider->slider_button_link}}" class="form-control" id="slider_button_link" placeholder="">
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