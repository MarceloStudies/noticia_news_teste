<?php
include_once '../controller/config/connDB.php';
$stmt = $pdo->prepare("SELECT * FROM posts ORDER BY tms_cadastro DESC LIMIT 4");
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h1 class="font-bold text-3xl ">VEJA TAMBEM:</h1>
<div class="flex w-full lg:flex-row h-full mt-4">
  <?php foreach ($posts as $post) { ?>
    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4 border-r-2 mr-2 border-gray-200">
      <button class="px-2 h-9 font-semibold text-sm bg-red-700 text-white text-center align-middle rounded-lg border-black mb-2">
        <a href="./more.php?category= <?= $post['category'] ?>">
          <?= $post['category'] ?>
        </a>
      </button>
      <h1 class="font-normal text-base text-gray-950">
        <a href="./notice.php?id=<?= $post['id'] ?>">
          <?= $post['title'] ?>.
        </a>
      </h1>
      <p class="italic text-sm text-gray-500">
        Por <span class="text-red-700"><?= $post['author'] ?></span> - <?= date('j M Y H\hi', strtotime($post['tms_cadastro'])) ?>
      </p>
    </div>
  <?php } ?>

</div>