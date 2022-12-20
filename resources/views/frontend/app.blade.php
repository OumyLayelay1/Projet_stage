<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/destination.css">
    <link rel="stylesheet" href="bootstrap.min.js.map">
    <title class="text-danger bg-dark">KaayTukki | @yield("title") </title>
</head>
<body>
    <header class="grds-container">
        <section class="position-fixed w-100 grd-container">
            <nav class="navbar navbar-expand-lg navbar-light container ">
                <div class="ms-5 container-logo"><img src="images/logo.png" alt="image" class="logo"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav unemenu">
                        <li class="nav-item active"><a href="accueil" class="nav-link maliste">Accueil</a></li>
                        <li class="nav-item dropdown">
                            <a href="/destination" class="nav-link maliste">
                                Destinations 
                            </a>
                        </li>
                        <li class="nav-item"><a href="/langue" class="nav-link maliste">Langues</a></li>
                        <li class="nav-item"><a href="/reserve" class="nav-link maliste" aria-disabled="true">Réservation</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link maliste">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    @yield("content")
    @include("partials.footer")
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
</body>
</html>