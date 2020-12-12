<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" type="image/png" href="assets/brand/spotify-icon.png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="index.css" />

  <title>Editar Perfil - Spotify</title>
</head>

<body>
  <!-- Header -->
  <?php include 'header.php' ?>
  <!-- / Header -->

  <div class="bg-blue">
    <!-- Profile -->
    <section>
      <div class="container">
        <div class="row">
          <!-- / Menu -->
          <div class="col-3 bg-menu">
            <div class="row justify-content-center">
              <div class="col-4">
                <img src="assets/img/profile-picture.jpg" width="70" height="70" class="rounded-circle menu-profile-picture" alt="Profile Picture" />
              </div>
              <table class="table">
                <tbody>
                  <tr>
                    <th>
                      <a class="text-muted text-menu" href="index.php"><i class="fas fa-home menu-icons"></i>Visão geral da
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
                      <a class="text-white text-menu" href="editar-perfil.php">
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

          <!-- Form -->
          <div class="col-9 bg-white p-4">
            <div class="container">
              <p class="text-black fw-bold fs-1 py-4">
                Editar perfil
              </p>

              <?php if (isset($_SESSION['mensagem_sucesso'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong><?php echo $_SESSION['mensagem_sucesso'] ?></strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['mensagem_sucesso']) ?>
              <?php } ?>

              <?php if (isset($_SESSION['mensagem_erro'])) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong><?php echo $_SESSION['mensagem_erro'] ?></strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['mensagem_erro']) ?>
              <?php } ?>

              <form action="edit.php" method="post">
                <div class="mb-3">
                  <label for="email" class="form-label small-text fw-bold">E-mail</label>
                  <input type="email" class="form-control form-select-lg" id="email" name="email" required value="<?php echo empty($_SESSION['email']) ? "" : $_SESSION['email'] ?>">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label fw-bold">Senha</label>
                  <input type="password" class="form-control form-select-lg" id="password" name="password" disabled>
                </div>
                <div class="mb-3">
                  <label for="sex" class="form-label fw-bold">Sexo</label>
                  <select class="form-select form-select-lg mb-3" name="sex" aria-label=".form-select-lg example">
                    <?php if (empty($_SESSION['sex'])) $_SESSION['sex'] = ""; ?>
                    <option value="Masculino" <?= ($_SESSION['sex'] == "Masculino") ? 'selected' : '' ?>>Masculino</option>
                    <option value="Feminino" <?= ($_SESSION['sex'] == "Feminino") ? 'selected' : '' ?>>Feminino</option>
                    <option value="Outro" <?= ($_SESSION['sex'] == "Outro") ? 'selected' : '' ?>>Outro</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Data de nascimento</label>
                  <div class="row">
                    <div class="col-4">
                      <input type="day" class="form-control form-control-lg" id="day" name="day" value="<?php echo empty($_SESSION['day']) ? "" : $_SESSION['day'] ?>" required>
                    </div>
                    <div class="col-4">
                      <select class="form-select form-select-lg mb-3" name="month" aria-label=".form-select-lg example" required>
                        <?php if (empty($_SESSION['month'])) $_SESSION['month'] = ""; ?>
                        <option value="01" <?= ($_SESSION['month'] == 1) ? 'selected' : '' ?>>Janeiro</option>
                        <option value="02" <?= ($_SESSION['month'] == 2) ? 'selected' : '' ?>>Fevereiro</option>
                        <option value="03" <?= ($_SESSION['month'] == 3) ? 'selected' : '' ?>>Março</option>
                        <option value="04" <?= ($_SESSION['month'] == 4) ? 'selected' : '' ?>>Abril</option>
                        <option value="05" <?= ($_SESSION['month'] == 5) ? 'selected' : '' ?>>Maio</option>
                        <option value="06" <?= ($_SESSION['month'] == 6) ? 'selected' : '' ?>>Junho</option>
                        <option value="07" <?= ($_SESSION['month'] == 7) ? 'selected' : '' ?>>Julho</option>
                        <option value="08" <?= ($_SESSION['month'] == 8) ? 'selected' : '' ?>>Agosto</option>
                        <option value="09" <?= ($_SESSION['month'] == 9) ? 'selected' : '' ?>>Setembro</option>
                        <option value="10" <?= ($_SESSION['month'] == 10) ? 'selected' : '' ?>>Outubro</option>
                        <option value="11" <?= ($_SESSION['month'] == 11) ? 'selected' : '' ?>>Novembro</option>
                        <option value="12" <?= ($_SESSION['month'] == 12) ? 'selected' : '' ?>>Dezembro</option>
                      </select>
                    </div>
                    <div class="col-4">
                      <input type="year" class="form-control form-control-lg" id="year" name="year" value="<?php echo empty($_SESSION['year']) ? "" : $_SESSION['year'] ?>" required>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="country" class="form-label fw-bold">País ou região</label>
                  <select class="form-select form-select-lg mb-3" name="country" aria-label=".form-select-lg example" aria-describedby="help" required disabled>
                    <?php if (empty($_SESSION['country'])) $_SESSION['country'] = ""; ?>
                    <option value="Brasil" <?= ($_SESSION['country'] == "Brasil") ? "" : "" ?>>Brasil</option>
                  </select>
                  <div id="help" class="form-text">Saiba mais sobre <a class="text-reset" href="https://support.spotify.com/br/article/How-can-I-change-my-country-setting/?_ga=2.249898694.1160102590.1607703372-762130387.1599533115">como mudar seu país ou região.</a></div>
                </div>
                <div class="form-check my-4">
                  <input class="form-check-input" type="checkbox" value="checkbox" id="checkbox" name="checkbox">
                  <label class="form-check-label" for="checkbox">
                    Compartilhar meus dados cadastrais com os provedores de conteúdo do Spotify para fins de marketing.
                  </label>
                </div>
                <hr>
                <div style="margin-bottom: 7.5rem; text-align: right">
                  <a href="index.php" role="button" class="btn-cancelar mx-4">CANCELAR</a>
                  <button type="submit" class="btn rounded-pill btn-spotify">SALVAR PERFIL</button>
                </div>
              </form>
            </div>
          </div>
          <!-- / Form -->
        </div>
      </div>
    </section>
    <!-- / Profile -->
  </div>

  <!-- Footer -->
  <?php include 'footer.php' ?>
  <!-- / Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/446e1edcd2.js" crossorigin="anonymous"></script>
</body>

</html>