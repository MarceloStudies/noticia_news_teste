<?php

class User
{
    private $pdo;

    private $email;
    private $password;

    public function __construct($pdo, $email, $password)
    {
        $this->pdo = $pdo;

        $this->email = $email;
        $this->password = $password;
    }

    public function createUser()
    {
        try {
            // Verificar se o e-mail já está cadastrado
            $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                return "E-mail já cadastrado!";
            }

            // Inserir o novo usuário na tabela
            $stmt = $this->pdo->prepare("INSERT INTO users (email, password) VALUES ( :email, :password)");
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            $stmt->execute();

            return "Usuário cadastrado com sucesso!";
        } catch (PDOException $e) {
            return "Erro ao cadastrar usuário: " . $e->getMessage();
        }
    }

    public function login()
    {
        // Verificar se o usuário existe no banco de dados
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return "Usuário não encontrado!";
        }
        return $user['password'];
    }

    public function logout()
    {
        session_destroy();
        return true;
    }
}
