<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="assets/img/brand/spotify-icon.png" />

    <link href="/assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>Escutar muda tudo - Spotify</title>
</head>

<body>

    <!-- Header -->
    <?php include __DIR__ . '/../layouts/disconnected/header.php' ?>
    <!-- / Header -->

    <!-- SPOTIFY PREMIUM -->
    <div class="bg-green-cyan pt-5">
        <div class="row">
            <div class="col-6">
                <div class="container m-5">
                    <p class="text-dark-pink fw-light my-4">
                        SPOTIFY PREMIUM
                    </p>
                    <p class="text-big text-dark-pink fw-bold">
                        Tá acabando: 3 meses de Premium grátis
                    </p>
                    <p class="text-dark-pink fw-bold">
                        Oferta acaba em 10 dias.
                    </p>
                    <p class="text-dark-pink fw-bold">
                        Não perca a chance de ouvir sua música sem anúncios, no modo offline e muito mais. Cancele quando quiser.
                    </p>
                    <a type="button" href="https://www.spotify.com/purchase/offer/holiday-2020-trial-3m" class="btn btn-lg btn-dark-pink-spotify m-4">
                        GANHE 3 MESES GRÁTIS
                    </a>
                    <p class="text-dark-pink text-small">
                        Somente para o plano Individual. Depois, apenas R$ 16,90/mês. Oferta indisponível para usuários que já experimentaram o Premium. <a class="text-dark-pink text-reset fw-normal" href="https://www.spotify.com/legal/premium-promotional-offer-terms">Sujeita a Termos e Condições.</a> A oferta termina em 31 de dez de 2020.
                    </p>
                </div>
            </div>

            <div class="col-5">
                <div class="container m-5">
                    <img src="https://campaigns.scdn.co/images/holiday-2020-second-wave.jpg" class="ml-5" height="450" width="450">
                </div>
            </div>
        </div>
    </div>
    <!-- / SPOTIFY PREMIUM -->

    <!-- RETROSPECTIVA 2020 -->
    <div class="bg-dark-pink pt-5">
        <div class="row">
            <div class="col-5">

            </div>
            <div class="col-6">
                <div class="container m-5">
                    <p class="text-green-cyan fw-light my-4">
                        RETROSPECTIVA 2020
                    </p>
                    <p class="text-big text-green-cyan fw-bold">
                        Veja o que rolou no seu Spotify
                    </p>
                    <p class="text-green-cyan fw-bold">
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

    <!-- SPOTIFY FREE -->
    <div class="bg-blue pt-5">
        <div class="row">
            <div class="col-6">
                <div class="container m-5">
                    <p class="text-green fw-light my-4">
                        SPOTIFY FREE
                    </p>
                    <p class="text-big text-green fw-bold">
                        Escutar muda tudo
                    </p>
                    <p class="text-green fw-bold">
                        Milhões de músicas e podcasts para explorar. E nem precisa de cartão de crédito.
                    </p>
                    <a type="button" href="https://www.spotify.com/br/download/" class="btn btn-lg btn-green-blue-spotify m-4">
                        OBTENHA O SPOTIFY FREE
                    </a>
                </div>
            </div>
            <div class="col-5">

            </div>
        </div>
    </div>
    <!-- / SPOTIFY FREE -->

    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/disconnected/footer.php' ?>
    <!-- / Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/446e1edcd2.js" crossorigin="anonymous"></script>

</body>

</html>