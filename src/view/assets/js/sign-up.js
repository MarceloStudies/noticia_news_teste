$(document).ready(function () {
  $("form").submit(function (event) {
    event.preventDefault();

    var email = $("#email").val();

    var password = $("#password").val();
    var confirmPassword = $("#passwordConfirm").val();

    // Verifica se as senhas coincidem
    if (password !== confirmPassword) {
      alert("As senhas não coincidem!");
      return;
    }

    // Envia os dados do formulário para o arquivo PHP via AJAX
    $.ajax({
      url: "../controller/UserController.php?action=signUp",
      type: "POST",
      data: {
        email: email,
        password: password,
      },
      success: function (response) {
        if (response == "Usuário cadastrado com sucesso!") {
          alert("Cadastro realizado com sucesso!");
          window.location.href = "../index.php";
        } else {
          alert("Erro ao cadastrar!");
          return;
        }
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
      },
    });
  });
});
