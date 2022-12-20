@extends("layouts.app")
@section("content")
    <section class="container">
        <div class="col-md-5 formulaire-contact">
            <form action="{{url('contactes')}}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="last_name" class="form-control" id="nom" placeholder="Votre nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="first_name" class="form-control" id="prenom" placeholder="Votre prénom">
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="mail" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Commentaire</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div><br><br>
                <div class="col-12">
                    <button class="btn btn-envoie" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
@endsection