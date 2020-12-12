<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" type="image/png" href="assets/brand/spotify-icon.png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="index.css" />

  <title>Visão geral da conta - Spotify</title>
</head>

<body>
  <!-- Header -->
  <?php include 'header.php' ?>
  <!-- / Header -->

  <div class="bg-blue">
    <!-- Cover -->
    <section>
      <div class="container bg-cover pt-5">
        <p class="text-cover fs-1">
          Premium Família
        </p>
        <div class="row">
          <div class="col-8">
            <p class="lead description-cover">
              6 contas Premium para membros da família que moram debaixo do
              mesmo teto.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- / Cover -->

    <!-- Account -->
    <section>
      <div class="container">
        <div class="row">
          <!-- Menu -->
          <div class="col-3 bg-menu">
            <div class="row justify-content-center">
              <div class="col-4">
                <img src="assets/img/profile-picture.jpg" width="70" height="70" class="rounded-circle menu-profile-picture" alt="Profile Picture" />
              </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th>
                      <a class="text-white text-menu" href="index.php"><i class="fas fa-home menu-icons"></i>Visão geral da
                        conta</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/subscription/change/">
                        <i class="fas fa-credit-card menu-icons"></i>Planos
                        disponíveis</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/family/">
                        <i class="fas fa-users menu-icons"></i>Premium Família</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="editar-perfil.php">
                        <i class="fas fa-pencil-alt menu-icons"></i>Editar perfil</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/change-password/">
                        <i class="fas fa-lock menu-icons"></i>Mudar senha</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/notifications/"><i class="fas fa-bell menu-icons"></i>Configurar
                        notificações</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/recover-playlists/"><i class="fas fa-lock menu-icons"></i>Configurações de
                        privacidade</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/recover-playlists/"><i class="fas fa-redo-alt menu-icons"></i>Recuperar
                        playlists</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/subscription/receipt/">
                        <i class="fas fa-receipt menu-icons"></i>Recibos</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/account/apps/">
                        <i class="fas fa-puzzle-piece menu-icons"></i>Aplicativos</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="https://www.spotify.com/br/redeem/">
                        <i class="fas fa-redo-alt menu-icons"></i>Resgatar</a>
                    </th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- / Menu -->

          <!-- Content -->
          <div class="col-9 bg-white p-4">
            <div class="container">
              <p class="text-black fw-bold fs-1 pt-4">
                Visão geral da conta
              </p>
              <div class="col">
                <p class="text-black fw-bold fs-4">
                  Perfil
                </p>
                <table class="table table-account">
                  <tbody>
                    <tr>
                      <td class="text-secondary p-3">Nome do usuário</td>
                      <th scope="row p-3">Guilherme Longhini</th>
                    </tr>
                    <tr>
                      <td class="text-secondary p-3">E-mail</td>
                      <th scope="row p-3">guilhermelonghini@gmail.com</th>
                    </tr>
                    <tr>
                      <td class="text-secondary p-3">Data de nascimento</td>
                      <th scope="row p-3">30 de Março de 1999</th>
                    </tr>
                    <tr>
                      <td class="text-secondary p-3">País ou região</td>
                      <th scope="row p-3">Brasil</th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a type="button" href="https://www.spotify.com/br/account/profile/" class="btn btn-outline-secondary btn-lg btn-index-spotify">
                EDITAR PERFIL
              </a>
              <p class="text-black fw-bold fs-4 pb-2" style="padding-top: 4rem">
                Seu Plano
              </p>
              <div class="card">
                <div class="container bg-card">
                  <div class="row">
                    <div class="col-6">
                      <p class="fw-bold pt-5 pb-5 fs-1" style="padding-top: 4rem">
                        Spotify Premium Família
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <p class="text-black">
                        Até 6 contas Premium individuais para pessoas que
                        moram juntas.
                      </p>
                      <a href="https://support.spotify.com/br/article/premium-family/?_ga=2.15517558.1160102590.1607703372-762130387.1599533115">SAIBA MAIS</a>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          Você é membro de um plano Premium Família.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a type="button" href="https://www.spotify.com/br/account/profile/" class="btn btn-outline-secondary btn-lg btn-index-spotify mt-4">
                MUDAR DE PLANO
              </a>
              <p class="text-black fw-bold fs-4 pb-2" style="padding-top: 4rem">
                Saia em qualquer lugar
              </p>
              <p>
                Saia em tudo que o Spotify estiver aberto, inclusive na Web,
                no celular, no desktop ou em qualquer outro dispositivo.
              </p>
              <div class="card">
                <div class="card-body">
                  Aviso: não será feito logout de dispositivos parceiros, como
                  aparelhos da Sonos ou PlayStation. Para saber mais sobre
                  como sair do Spotify (ou desvinculá-lo) em um dispositivo
                  parceiro, confira o manual do fabricante do dispositivo.
                </div>
              </div>
              <a type="button" href="https://www.spotify.com/br/account/profile/" class="btn btn-outline-secondary btn-lg btn-index-spotify mt-4" style="margin-bottom: 6rem">
                SAIR DE TODOS OS DISPOSITIVOS
              </a>
            </div>
          </div>
          <!-- Content -->
        </div>
      </div>
    </section>
    <!-- / Account -->
  </div>

  <!-- Footer -->
  <?php include 'footer.php' ?>
  <!-- / Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/446e1edcd2.js" crossorigin="anonymous"></script>
</body>

</html>