<!DOCTYPE html>
<html lang="pt-br">

<?php include_once __DIR__ . '/head.php' ?>

<body class="flex flex-col h-screen">


  <main class="bg-gray-200 flex flex-col h-full items-center justify-center">
    <div class="w-4/5 bg-white h-1/2 max-w-7xl flex rounded-md items-center">
      <div class="self-end pt-28 lg:block hidden h-full w-1/2">
        <img class="h-full self-end w-full max-h-80" src="./assets/img/sign_logo.png" alt="" />
      </div>
      <div class="h-full w-full sm:w-full">
        <div class="flex flex-col items-center justify-center w-full h-full">
          <h1 class="text-md font-bold mb-4">
            Acessar <span class="text-red-700">sua conta!</span>
          </h1>
          <form action="" class="flex flex-col items-center justify-center">
            <input id="email" type="text" placeholder="Entre com seu e-mail" class="border-2 border-gray-200 rounded-md px-4 py-2 mb-4 w-full sm:w-80" />
            <input id="password" type="password" placeholder="Entre com sua senha" class="border-2 border-gray-200 rounded-md px-4 py-2 mb-4 w-full sm:w-80" />
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg w-80">
              Entrar
            </button>
            <a href="#" class="text-sm text-gray-500 mt-4">
              Esqueceu sua senha?
            </a>

            <p class="text-sm text-gray-500 mt-4">
              Não tem uma conta?
              <a href="./sign-up.php" class="text-red-700">Registre-se</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </main>


  <?php include_once __DIR__ . '/footer.php' ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function () {

      $.ajax({
        url: "../controller/UserController.php?action=logout",
        type: "POST",
        success: function (response) {
        },
        error: function (xhr, status, error) {
          console.log(xhr.responseText);
        },
      });




  $("form").submit(function (event) {
    event.preventDefault();

    var email = $("#email").val();
    var password = $("#password").val();

    // Envia os dados do formulário para o arquivo PHP via AJAX
    $.ajax({
      url: "../controller/UserController.php?action=login",
      type: "POST",
      data: {
        email: email,
        password: password,
      },
      success: function (response) {

        if (response == true) {
          alert("Login efetuado com sucesso!");
          window.location.href = "../index.php";
        } else {
          alert("E-mail ou senha incorretos!");
        }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
      },
    });
  });
});

  </script>
</body>

</html>