<?php
include_once '../controller/config/connDB.php';


$category = $_GET['category'] ?? '%';
// Recuperar os posts do banco de dados
$stmt = $pdo->prepare("SELECT * FROM posts WHERE category like '$category'  ORDER BY tms_cadastro DESC");
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);




$i = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php include_once __DIR__ . '/head.php' ?>

<body class="flex flex-col h-screen">
  <?php include_once __DIR__ . '/nav-bar.php' ?>

  <main id="newsContainer" class=" flex flex-col h-screen items-center justify-start my-3 pt-16 w-full  overflow-y-auto">
    <?php foreach ($posts as $post) {
      if ($posts[$i]['thumb'] == null || $posts[$i]['thumb'] == '') {
        $post['thumb'] = './view/assets/img/noimage.jpg';
      }
      $i++; ?>
      <div class=" w-4/5 h-32  mb-2 flex news-item <?php if ($i > 6) echo 'hidden' ?>">
        <div class="bg-white w-1/5 h-full mr-2">
          <img class="h-full w-full" src="<?= $post['thumb'] ?>" alt="" />
        </div>
        <div class="flex flex-col w-4/5  mt-1 justify-between">
          <div>
            <button class="px-2 w-30 h-8 bg-red-700 text-white text-center align-middle rounded-lg border-black mb-2">
              <?= $post['category'] ?>
            </button>
            <h1 class="text-black text-xl font-bold">
              <a href="./notice.php?id=<?= $post['id'] ?>">
              <?= $post['title'] ?>.
              </a>
            </h1>
          </div>
          <p class="italic text-base text-gray-500">
            Por <span class="text-red-700"> <?= $post['author'] ?> </span> - <?= date('j M Y H\hi', strtotime($post['tms_cadastro'])) ?>
          </p>
        </div>
      </div>
    <?php } ?>


    </div>
    <button id="loadMoreContainer" onclick="showMoreNews()" class="w-4/5 bg-black text-center text-white rounded-md h-11">
      Ver mais
    </button>
  </main>

  <?php include_once __DIR__ . '/footer.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    $('#loadMoreContainer').click(function() {
      $('.news-item').removeClass('hidden')
      $('#loadMoreContainer').addClass('hidden')
    });
  </script>
</body>

</html>