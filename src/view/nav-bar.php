<?php
ini_set('display_errors', 0);
?>
<nav class="fixed top-0 left-0 right-0 h-16 bg-gray-200 flex items-center justify-center">
  <div class="flex w-4/5 items-center justify-between">
    <a href="../index.php">
      <img src="./assets/img/logo_nav.png" alt="Logo" class="h-4" />
    </a>
    <div class="flex items-center space-x-4 w-2/5 text-center justify-end">
      <button class="bg-gray-900 text-white w-2/5 h-9 text-center rounded-md font-semibold text-xs">
        <?php if ($_SESSION['logado']) { ?>
          <a id ="sair" href="./sign-in.php">
            Sair
            <i class="ph ph-sign-out ml-1"></i>
          <?php } else { ?>
          <a id ="entrar" href="./sign-in.php">

            Entrar
            <i class="ph ph-sign-in ml-1"></i>
          <?php } ?>
      </button>
      </a>
      <?php if (!$_SESSION['logado']) { ?>
        <button class="bg-gray-900 text-white w-2/5 h-9 text-center rounded-md font-semibold text-xs">
          <a href="./sign-up.php">
            Registrar-se
            <i class="ph ph-user-plus ml-1"></i>
        </button>
      <?php } ?>
      </a>
    </div>
  </div>
</nav>

<script>
  $(document).ready(function() {
    $('#sair').click(function(event) {
      event.preventDefault();

       sessionStorage.clear();

      location.reload(); 
    });
  });
</script>