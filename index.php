<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="floricon.ico" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="floricon.png" alt="" width="40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="foto1.jpg" class="d-block w-100" alt="primeira foto do carrosel ">
                </div>
                <div class="carousel-item">
                    <img src="foto2.jpg" class="d-block w-100" alt="segunda foto do carrosel">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="foto1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-success">Arranje de flor</h5>
                            <p class="card-text">No nosso site você encontra os melhores arranjes de flores</p>
                            <a href="#" class="btn btn-outline-success">Compre Já</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="foto2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-success">Arranje de flor</h5>
                            <p class="card-text">No nosso site você encontra os melhores arranjes de flores</p>
                            <a href="#" class="btn btn-outline-success">Compre Já</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" >
                        <img src="foto1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Arranje de flor</h5>
                            <p class="card-text">No nosso site você encontra os melhores arranjes de flores</p>
                            <a href="#" class="btn btn-outline-primary">Compre Já</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2 class="display-6 text-center">CONTATO</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.328528678125!2d-47.33128268503708!3d-22.753186085090153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8998174c896b9%3A0x739b7f99b3323574!2sSenac%20Americana!5e0!3m2!1spt-BR!2sbr!4v1677113256223!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>

    </main>
    <footer class="container bg-dark">
        <div class="row">
            <div class="col">
                <h3 class="text-light">Floricultura</h3>
            </div>
        </div>
        <div class="col text-light">

        </div>

    </footer>


</body>

</html>