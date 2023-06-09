<!DOCTYPE html>
<html lang="en">

<?php include_once __DIR__ . '/head.php' ?>

<body class="flex flex-col h-screen">


  <main class="bg-gray-200 flex flex-col h-full items-center justify-center">
    <div class="w-5/6 bg-white h-1/2 max-w-7xl flex rounded-md items-center">
      <div class="self-end pt-28 lg:block hidden h-full w-1/2">
        <img class="h-full self-end w-full max-h-80" src="./assets/img/sign_logo.png" alt="" />
      </div>
      <div class="h-full w-full sm:w-full">
        <div class="flex flex-col items-center justify-center w-full ">
          <h1 class="text-md font-bold my-3">
            Registrar <span class="text-red-700"> conta!</span>
          </h1>
          <form action="" class="flex flex-col h-full items-center justify-center">
            <input id="email" type="text" placeholder="Entre com seu e-mail" class="border-2 border-gray-200 rounded-md px-4 py-2 mb-4 w-full h-10" />
            <input id="password" type="password" placeholder="Entre com sua senha" class="border-2 border-gray-200 rounded-md px-4 py-2 mb-4 w-full h-10" />
            <input id="passwordConfirm" type="password" placeholder="Confirme sua senha" class="border-2 border-gray-200 rounded-md px-4 py-2 mb-4 w-full h-10" />
            <button name="signUp" type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg w-80">
              Registrar-se
            </button>


            <p class="text-sm text-gray-500 mt-4">
              Já possui conta?
              <a href="./sign-in.php" class="text-red-700">Acesse sua conta!</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include_once __DIR__ . '/footer.php' ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./assets/js/sign-up.js"></script>


</body>

</html>