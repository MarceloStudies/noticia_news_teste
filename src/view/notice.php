<?php
include_once '../controller/config/connDB.php';

$postId = $_GET['id'];
// Recuperar os posts do banco de dados
$stmt = $pdo->prepare("SELECT * FROM posts where id = :id ");
$stmt->bindParam(':id', $postId);
$stmt->execute();
$posts = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="pt-br">


<?php include_once __DIR__ . '/head.php' ?>

<body class="flex flex-col h-screen">
  <?php include_once __DIR__ . '/nav-bar.php' ?>



  <main class="flex   items-center justify-center my-3 pt-20 w-full">
    <div class=" flex-col w-4/5 lg:flex-row h-full">
      <div class="flex flex-col justify-start items-start">
        <h1 class="font-bold text-3xl ">
          <?= mb_strtoupper($posts['title'], 'UTF-8') ?>
        </h1>
        <p class="text-base font-normal mb-2">
          <?= $posts['excerpt'] ?>
        </p>
        <div class=" flex justify-between items-center w-full pt-4">
          <p>
            Por <span class="text-red-700"> <?= $posts['author'] ?> </span> - <?= date('j M Y H\hi', strtotime($posts['tms_cadastro'])) ?>
          </p>
          <div class="flex space-x-2">
            <p>Compartilhe:</p>

            <button class="text-white bg-gray-900 w-8 h-8 rounded-md text-center text-2xl copyLink">
              <i class="ph ph-facebook-logo"></i>
            </button>
            <button class="text-white text-center text-2xl bg-gray-900  w-8 h-8 rounded-md copyLink">
              <i class="ph ph-twitter-logo w-8 h-8 rounded-md "></i>
            </button>
            <button class="text-white text-center text-2xl bg-gray-900  w-8 h-8 rounded-md copyLink">
              <i class="ph ph-envelope-simple w-8 h-8 rounded-md"></i>
            </button>
            <button class="text-white text-center text-2xl bg-gray-900 w-8 h-8 rounded-md copyLink">
              <i class="ph ph-telegram-logo w-8 h-8 rounded-md"></i>
            </button>
            <button class="text-white text-center text-2xl bg-gray-900  w-8 h-8 rounded-md copyLink">
              <i class="ph ph-whatsapp-logo w-8 h-8 rounded-md"></i>
            </button>

          </div>
        </div>
        <div class="w-full bg-gray-200  h-4/6 flex justify-center items-center p-3">
          <img class="w-full " src="<?= $posts['thumb'] ?>" alt="" />
        </div>
        <p class="text-base font-normal mt-3">
          <?= $posts['content'] ?>
        </p>
        <div class=" w-full border-t-2 mt-10  mb-8 ">
          <?php include_once __DIR__ . '/more_bar.php' ?>
        </div>

      </div>


    </div>

  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      // Manipulador de evento de clique na âncora
      $('.copyLink').click(function(e) {

        e.preventDefault(); // Impede o comportamento padrão do clique na âncora

        var link = window.location.href; // Obtém o link da página atual
        navigator.clipboard.writeText(link); // Copia o link para a área de transferência

        alert('Link copiado com sucesso'); // Exibe um alerta com o link copiado
      });
    });
  </script>
  <?php include_once __DIR__ . '/footer.php' ?>
</body>

</html>