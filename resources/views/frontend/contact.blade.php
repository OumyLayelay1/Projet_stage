@extends("frontend.app") 
@section("title", "Contact")
@section("content") 
      <div class="pt-custom"></div> 
   </header>
   <section class="container-contact pt-5 mt-5 mb-5">
        @if (session('status'))
           <h6 class="alert session-status text-center">{{session('status')}}</h6>
        @endif
        <div class="commentaire-text">
            <p class="text-center comment-text">
                <u>Laisser un commentaire ou signaler une <span class="text-danger">erreur</span> ou un <span class="text-danger">problème</span></u> 
            </p>
        </div>
        <div class="container-fluid row pb-3 contact-first">
            <div class="col-md-5 formulaire-contact">
                <form action="" method="POST">
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
            <div class="col-md-4 image-contact"><img src="images/contacte.png" alt="une image" class="w-100 contact-img"></div>
            <div class="col-md-3 mt-5 adresse">
                <p class="adresse-1">Adresse: HLM Grand-yoff Rue 412</p><br>
                <p class="adresse-1">Téléphone: <a href="#" class="lien-contact">+221.77.128.63.54</a> </p><br>
                <p class="adresse-1">E-mail: <a href="#" class="lien-contact">KaayTukki@gmail.com</a> </p><br>
                <p class="adresse-1">Site Web: <a href="#" class="lien-contact">https://www.KaayTukki.com</a> </p><br>
                <p class="adresse-1">Réseaux sociaux:</p>
                <div class="tout">
                    <div class="icon"><a href="https://www.facebook.com/leguidedusenegal/" class="linked"><i class="text-dark fa-brands fa-square-facebook"></i></a></div>
                    <div class="icon1"><a href="https://www.instagram.com/tourismesenegal_/" class="linked"><i class="text-dark fa-brands fa-instagram"></i></a></div>
                    <div class="icon2"><a href="" class="linked"><i class="text-dark fa-brands fa-whatsapp"></i></a></div>
                </div>
            </div>
        </div>
   </section>
@endsection