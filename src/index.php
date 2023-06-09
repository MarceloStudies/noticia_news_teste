<?php
include_once __DIR__ . '/controller/config/connDB.php';
include_once __DIR__ . '/controller/ConsumeNoticeController.php';
// Recuperar os posts do banco de dados
$stmt = $pdo->prepare("SELECT * FROM posts ORDER BY tms_cadastro DESC");
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="pt-br">

<?php include_once __DIR__ . '/view/head.php' ?>

<body class="flex flex-col h-screen">
  <nav class="fixed top-0 left-0 right-0 h-16 bg-gray-200 flex items-center justify-center">
    <div class="flex w-4/5 items-center justify-between">
      <a href="index.php">
        <img src="./view/assets/img/logo_nav.png" alt="Logo" class="h-4" />
      </a>
      <div class="flex items-center space-x-4 w-2/5 text-center justify-end">
        <button class="bg-gray-900 text-white w-2/5 h-9 text-center rounded-md font-semibold text-xs">
          <a href="./view/sign-in.php">
            <?php if ($_SESSION['logado']) { ?>
              Sair
              <i class="ph ph-sign-out ml-1"></i>
            <?php } else { ?>
              Entrar
              <i class="ph ph-sign-in ml-1"></i>
            <?php } ?>
        </button>
        </a>
        <?php if (!$_SESSION['logado']) { ?>
          <button class="bg-gray-900 text-white w-2/5 h-9 text-center rounded-md font-semibold text-xs">
            <a href="./view/sign-up.php">
              Registrar-se
              <i class="ph ph-user-plus ml-1"></i>
          </button>
        <?php } ?>
        </a>
      </div>
    </div>
  </nav>

  <main class=" flex flex-col   items-center justify-start my-3 pt-24 w-full">
    <div class="flex flex-col  w-4/5  lg:flex-row">
      <!-- Div da Esquerda -->
      <div class="flex flex-col w-full lg:w-1/2">
        <div class="mb-2 border-b-2 border-gray-300 blur-md">
          <button class="px-2 h-9 font-semibold text-sm bg-red-700 text-white text-center align-middle rounded-lg border-black mb-2">
            <a href="./view/more.php?category=<?= $posts[0]['category'] ?>">
              <?= $posts[0]['category'] ?>
            </a>
          </button>
          <h1 class="text-black text-2xl font-bold">
            <a href="./view/notice.php?id=<?= $posts[0]['id'] ?>">
              <?= $posts[0]['title'] ?>.
            </a>
          </h1>
          <div class="w-full hf-full flex pl-2">
            <img class="pb-4 w-full lg:w-full" src="<?php if ($posts[0]['thumb'] == null || $posts[0]['thumb'] == '') {
                                                      echo './view/assets/img/noimage.jpg';
                                                    } else {
                                                      echo $posts[0]['thumb'];
                                                    } ?>" alt="">
          </div>
        </div>
        <div class="flex flex-col lg:flex-row">
          <div class="w-full lg:w-1/2 border-r-2 border-gray-200">
            <button class="px-2 h-9 font-semibold text-sm bg-red-700 text-white text-center align-middle rounded-lg border-black mb-2">
              <a href="./view/more.php?category=<?= $posts[1]['category'] ?>">
                <?= $posts[1]['category'] ?>
              </a>
            </button>
            <h1 class="font-normal text-base text-gray-950">
              <a href="./view/notice.php?id=<?= $posts[1]['id'] ?>">
                <?= $posts[1]['title'] ?>
              </a>
            </h1>
            <p class="italic text-sm text-gray-500">
              Por <span class="text-red-700"><?= $posts[1]['author'] ?></span> - <?= date('j M Y H\hi', strtotime($posts[1]['tms_cadastro'])) ?>
            </p>
          </div>
          <div class="w-full lg:w-1/2">
            <button class="px-2 h-9 font-semibold text-sm bg-red-700 text-white text-center align-middle rounded-lg border-black mb-2">
              <a href="./view/more.php?category=<?= $posts[2]['category'] ?>">
                <?= $posts[2]['category'] ?>
              </a>
            </button>
            <h1 class="font-normal text-base pl-1 text-gray-950">
              <a href="./view/notice.php?id=<?= $posts[2]['id'] ?>">
                <?= $posts[2]['title'] ?>
              </a>
            </h1>
            <p class="italic text-sm text-gray-500">
              Por <span class="text-red-700"><?= $posts[2]['author'] ?></span> - <?= date('j M Y H\hi', strtotime($posts[2]['tms_cadastro'])) ?>
            </p>
          </div>
        </div>
      </div>

      <!-- Div da Direita -->
      <div class="w-full h-full flex flex-col ml-0 lg:ml-4 lg:w-1/2">
        <?php for ($i = 3; $i < 7; $i++) { ?>
          <div class="sm:mt-3 flex lg:h-1/5 border-b-2">
            <div class="bg-white w-2/5 mr-2">
              <img class="w-full h-full" src="<?php if ($posts[$i]['thumb'] == null || $posts[$i]['thumb'] == '') {
                                                echo './view/assets/img/noimage.jpg';
                                              } else {
                                                echo $posts[$i]['thumb'];
                                              } ?>" alt="">
            </div>
            <div class="flex flex-col w-3/5 mt-1 <?= $i === 6 ? 'order-last' : '' ?>">
              <button class="px-2 h-9 w-40 font-semibold text-sm bg-red-700 text-white text-center align-middle rounded-lg border-black mb-2">
                <a href="./view/more.php?category=<?= $posts[$i]['category'] ?>">
                  <?= $posts[$i]['category'] ?>
                </a>
              </button>
              <div class="justify-between">
                <h1 class="font-normal text-base text-gray-950">
                  <a href="./view/notice.php?id=<?= $posts[0]['id'] ?>">
                    <?= $posts[$i]['title'] ?>
                  </a>
                </h1>
                <p class="italic text-base text-gray-500">
                  Por <span class="text-red-700"><?= $posts[$i]['author'] ?></span> - <?= date('j M Y H\hi', strtotime($posts[$i]['tms_cadastro'])) ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>


  <footer class="bg-black flex h-50  justify-center">
    <div class="flex w-4/5 justify-between p-3">
      <div class="w-1/2 h-full">
        <img src="./view/assets/img/logo_footer.png" class="h-4 mb-4" alt="" />
        <p class="font-medium text-xs text-white mb-3">
          Site de notícias inovador e dinâmico que utiliza uma API para
          trazer informações atualizadas em tempo real. Com acesso direto às
          principais fontes de notícias, garantimos que você esteja sempre
          um passo à frente, obtendo as últimas manchetes e reportagens de
          forma rápida e conveniente.
        </p>
        <p class="font-normal text-gray-500 text-xs">
          © 2023 | notíciasNEWS - Todos os direitos reservados
        </p>
      </div>
      <div class="w-1/2 h-full ml-6 ">
        <ul class="list-none text-white font-semibold text-xs">
          <a href="./view/sign-in.php">
            <?php if ($_SESSION['logado']) { ?>
              <li class="mb-3"><i class="ph ph-sign-out pr-1"></i>Sair</li>
            <?php } else { ?>
              <li class="mb-3"><i class="ph ph-sign-in pr-1"></i>Acesse sua conta agora</li>
            <?php } ?>
          </a>
          <a href="./view/sign-up.php">
            <li class="mb-3"><i class="ph ph-user-plus pr-1"></i>Não possui conta, registre-se agora!</li>
          </a>
          <a href="./view/more.php">
            <li class="mb-3"><i class="ph ph-text-columns pr-1"></i>Ver mais noticias</li>
          </a>
          <a href="./view/terms.php">
            <li class="mb-3"><i class="ph ph-book-bookmark pr-1"></i>Termos de uso</li>
          </a>

        </ul>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $('#sair').click(function(event) {
          event.preventDefault();

          sessionStorage.clear();

          location.reload();
        });
      });
    </script>
  </footer>
</body>

</html>