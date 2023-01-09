@extends("layouts.app") 
@section("content") 
    <section class="container-parent">
        <div class="container">
            <div class="row backend-page-row">
                @include('backend.aside.aside')
                <div class="col-md-9 pt-4 backend-page-col">
                    <div class="entete">
                        <h3 class="text-light entete-1">Show Slider 
                            <a href="{{url('sliders')}}" class="btn btn-light">Retour</a>
                        </h3> 
                    </div>
                    <h1 class="">Gestion du slide</h1>
                    <table class="container-fluid table table-striped">
                        <tr>
                            <th>Du text :</th>
                            <td>{{ $slider->slider_label }}</td>
                        </tr>
                        <tr>
                            <th>Image :</th>
                                <img class="image-show" src="{{ asset($slider->slider_image) }}" alt="Image">
                            </td>
                        </tr>
                        <tr>
                            <th>Lien :</th>
                            <td>{{ url('destination/', $slider->id)}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection