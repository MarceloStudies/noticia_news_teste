<?php
include_once __DIR__ . '/config/connDB.php';


try {
    // Consumir a API
    $url = 'https://thmais.com.br/wp-json/feed/v1/posts/every';
    $data = file_get_contents($url);
    $posts = json_decode($data, true);


    // Inserir os dados na tabela "posts" e "categories"
    foreach ($posts as $post) {
        $postId = $post['id'];
        $title = $post['title'];
        $excerpt = $post['excerpt'];
        $content = $post['content'];
        $thumb = $post['thumb'] ;
        $author = $post['author'];
        $categories = join (' ',$post['categories']);
;



        // Verificar se a notícia já foi salva
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $postId);
        $stmt->execute();
        $count = $stmt->fetchColumn();


        if ($count > 0) {
            continue; // Pular a notícia se ela já foi salva
        }

        // Inserir na tabela "posts"
        $stmt = $pdo->prepare("INSERT INTO posts (id, title, excerpt, content, thumb, author, category, tms_cadastro)
                               VALUES (:id, :title, :excerpt, :content, :thumb, :author, :category, now())");
        $stmt->bindParam(':id', $postId);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':excerpt', $excerpt);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':thumb', $thumb);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':category', $categories);

        $stmt->execute();
    }

} catch (PDOException $e) {
    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'Erro ao consumir a API: ' . $e->getMessage();
}
