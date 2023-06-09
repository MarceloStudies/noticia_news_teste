$(document).ready(function () {
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
      if (response == password){
        alert("Login efetuado com sucesso!");
        window.location.href = "../index.php";
      }else{
        alert("Usuário ou senha incorretos!");
      }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
      },
    });
  });
});
