<?php
include_once '../controller/config/connDB.php';


?>


<!DOCTYPE html>
<html lang="pt-br">


<?php include_once __DIR__ . '/head.php' ?>

<body class="flex flex-col h-screen">
  <?php include_once __DIR__ . '/nav-bar.php' ?>



  <main class="flex   items-center justify-center my-3 pt-20 w-full">
    <div class=" flex-col w-4/5 lg:flex-row h-full">
      <div class="flex flex-col justify-start items-start text-base">
        <h1 class="font-bold text-3xl text-center self-center ">
          TERMOS <span class="text-red-700">DE USO</span>
        </h1>
        <p>
          Termos de Uso do site notíciasNews <br>
          Ao acessar e utilizar o site notíciasNews, você concorda em cumprir e estar vinculado aos seguintes termos e condições de uso:

        </p>
        <ol class="list-decimal list-inside">
          <li class="mb-4">
            <h2 class="text-red-700">Uso de Conteúdo:</h2>
            <ol class=" ml-4 list-none list-inside">
              <li>
                <p>a. O site notíciasNews utiliza uma API para receber notícias de fontes confiáveis. Todo o conteúdo exibido no site é de propriedade das respectivas fontes e protegido por direitos autorais.</p>
              </li>
              <li>
                <p>b. O conteúdo disponível no notíciasNews é apenas para fins informativos. Não garantimos a precisão, completude ou atualidade das informações fornecidas.</p>
              </li>
              <li>
                <p>c. Você concorda em utilizar o conteúdo do site notíciasNews apenas para seu uso pessoal e não comercial. Qualquer uso não autorizado, incluindo reprodução, redistribuição ou modificação do conteúdo, é estritamente proibido.</p>
              </li>
            </ol>
          </li>
          <li class="mb-4">
            <h2 class="text-red-700">Responsabilidade:</h2>
            <ol class="ml-4  list-decimal list-inside">
              <li>
                <p>a. O notíciasNews não se responsabiliza por quaisquer danos diretos, indiretos, incidentais ou consequenciais resultantes do uso ou incapacidade de uso do site ou do conteúdo disponível nele.</p>
              </li>
              <li>
                <p>b. O notíciasNews não garante a disponibilidade contínua e ininterrupta do site. Podemos interromper o acesso ao site temporariamente para manutenção, atualizações ou outros fins, sem aviso prévio.</p>
              </li>
            </ol>
          </li>
          <li class="mb-4">
            <h2 class="text-red-700">Links Externos:</h2>
            <ol class="ml-4  list-decimal list-inside">
              <li>
                <p>a. O site notíciasNews pode conter links para sites de terceiros. Esses links são fornecidos apenas para conveniência e não implicam endosso ou responsabilidade pelo conteúdo desses sites.</p>
              </li>
              <li>
                <p>b. Ao acessar sites de terceiros por meio de links no notíciasNews, você estará sujeito aos termos e condições desses sites.</p>
              </li>
            </ol>
          </li>
          <li class="mb-4">
            <h2 class="text-red-700">Privacidade:</h2>
            <p class="ml-4 ">a. Ao utilizar o site notíciasNews, você concorda com nossa Política de Privacidade, que descreve como coletamos, usamos e protegemos suas informações pessoais.</p>
          </li>
          <li class="mb-4">
            <h2 class="text-red-700">Alterações nos Termos de Uso:</h2>
            <p class="ml-4 ">a. O notíciasNews reserva-se o direito de modificar ou atualizar estes Termos de Uso a qualquer momento, sem aviso prévio. Recomendamos que você revise regularmente estes termos para estar ciente de quaisquer alterações.</p>
          </li>
        </ol>
      </div>

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