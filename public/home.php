<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="assets/img/brand/spotify-icon.png" />

    <link href="/assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>Música para todos - Spotify</title>
</head>

<body>

    <!-- Header -->
    <?php include __DIR__ . '/../layouts/logged/header.php' ?>
    <!-- / Header -->

    <!-- RETROSPECTIVA 2020 -->
    <div class="bg-dark-pink p-5">
        <div class="row">
            <div class="col-4 m-5">
                <div class="colored-box mt-4">
                    <div class="retrospectiva bg-green-cyan text-dark-pink fw-bold fs-1 pl-5 ml-5">
                        <p>Retrospectiva</p>
                        <p>2020</p>
                    </div>
                </div>
            </div>
            <div class="col-6 mx-5">
                <div class="container m-5">
                    <p class="text-green-cyan fw-light m-4">
                        RETROSPECTIVA 2020
                    </p>
                    <p class="text-big text-green-cyan fw-bold m-4">
                        Veja o que rolou no seu Spotify
                    </p>
                    <p class="text-green-cyan fw-bold m-4">
                        Descubra os artistas, músicas e podcasts que te ajudaram a sobreviver ao ano mais longo da história.
                    </p>
                    <a type="button" href="https://spotify.com/wrapped?v=3f148e4a-0e3d-11eb-adc1-0242ac120002&_ga=2.198141039.1342819973.1608673385-762130387.1599533115" class="btn btn-lg btn-green-cyan-spotify m-4">
                        CONFIRA SUA RETROSPECTIVA
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- / RETROSPECTIVA 2020 -->

    <!-- É música que você quer? -->
    <div class="bg-gradient-pastel pt-5">
        <div class="bg-gradient-pastel-cover">
            <div class="row my-5">
                <div class="col-4 my-5">
                    <div class="container m-5">
                        <p class="text-white fw-bold m-5 fs-1">
                            É música que você quer?
                        </p>
                        <p class="text-white fw-bold mx-5 fs-5">
                            Conheça os melhores lançamentos do momento.
                        </p>
                        <a type="button" href="https://open.spotify.com/browse?_ga=2.262449612.1342819973.1608673385-762130387.1599533115" class="btn btn-lg btn-spotify mx-5 my-2">
                            ABRIR O WEB PLAYER
                        </a>
                    </div>
                </div>

                <div class="col-8">
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-3 mx-3">
                                <img src="/assets/img/albuns/andy.jpg" width="230">
                            </div>
                            <div class="col-3 mx-3">
                                <img src="/assets/img/albuns/john.jpg" width="230">
                            </div>
                            <div class="col-3 mx-3">
                                <img src="/assets/img/albuns/kiko.jpg" width="230">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-3 mx-3">
                                <img src="/assets/img/albuns/lamb.jpg" width="230">
                            </div>
                            <div class="col-3 mx-3">
                                <img src="/assets/img/albuns/ozzy.jpg" width="230">
                            </div>
                            <div class="col-3 mx-3">
                                <img src="/assets/img/albuns/trivium.jpg" width="230">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 pl-5 text-center">
                <img src="/assets/img/arrow.gif" width="45">
            </div>
        </div>
    </div>
    <!-- / É música que você quer? -->

    <!-- Aproveite ao máximo o Spotify -->
    <div class="m-5">
        <div class="row mx-3 my-5">
            <p class="text-black fw-bold fs-1">Aproveite ao máximo o Spotify</p>
            <div class="col">
                <p class="text-black fs-4 fw-bold">Gerencie sua conta</p>
                <p class="fw-bold">Edite seu perfil, altere sua senha e atualize suas informações de pagamento.</p>
            </div>

            <div class="col">
                <p class="text-black fs-4 fw-bold">Baixe nosso aplicativo gratuito</P>
                <p class="fw-bold">Escute facilmente as músicas que você adora. Baixe o aplicativo do Spotify no seu computador.</p>
            </div>

            <div class="col">
                <p class="text-black fs-4 fw-bold">Ouça na web</p>
                <p class="fw-bold">Para ouvir e compartilhar música sem baixar o aplicativo, basta acessar play.spotify.com no seu navegador.</p>
            </div>
        </div>
        <div class="row mx-3 my-4">
            <div class="col">
                <a href="perfil.php" type="button">GERENCIAR CONTA</a>
            </div>

            <div class="col">
                <a href="https://www.spotify.com/br/download/" type="button">BAIXE O APLICATIVO PARA DESKTOP</a>
            </div>

            <div class="col">
                <a href="https://www.spotify.com/br/redirect/webplayerlink/" type="button">ABRIR O WEB PLAYER</a>
            </div>
        </div>
    </div>
    <!-- / Aproveite ao máximo o Spotify -->

    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/logged/footer.php' ?>
    <!-- / Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/446e1edcd2.js" crossorigin="anonymous"></script>

</body>

</html>