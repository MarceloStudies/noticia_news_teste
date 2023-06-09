# Noticia News
Este é um projeto de site de notícias desenvolvido como parte de um teste para a posição de Desenvolvedor Web Júnior. O site foi construído utilizando as tecnologias Tailwind CSS e PHP, com dados fornecidos em um arquivo de banco de dados.

Requisitos

Antes de começar, verifique se você tem o seguinte software instalado em seu sistema:

PHP: Verifique se o PHP está instalado executando o comando php -v no terminal.
Servidor web local: Você precisará de um servidor web local para executar o projeto. Por exemplo, Apache ou Nginx.
Configuração do Projeto

Siga as etapas abaixo para configurar e executar o projeto em seu ambiente local:

Faça o clone deste repositório para o seu diretório de projetos local ou baixe o arquivo ZIP e descompacte-o.
Certifique-se de ter um servidor web local configurado e funcionando. Se você estiver usando o Apache, coloque o diretório do projeto dentro da pasta de documentos raiz (por exemplo, htdocs).
Importe o banco de dados fornecido:
Abra o arquivo db.sql localizado na raiz do projeto.
Crie um novo banco de dados em seu servidor local (por exemplo, usando o phpMyAdmin).
Selecione o novo banco de dados e execute o script SQL do arquivo db.sql para criar as tabelas e inserir os dados iniciais.
Configure as informações de conexão com o banco de dados:
Abra o arquivo config.php localizado na raiz do projeto.
Edite as variáveis DB_HOST, DB_NAME, DB_USER e DB_PASSWORD com as informações corretas para a conexão com o seu banco de dados local.
Inicie o servidor web local.
Abra um navegador da web e acesse o site usando o URL local correspondente ao diretório do projeto (por exemplo, http://localhost/nome-do-projeto).
Agora você poderá navegar pelo site de notícias e visualizar as notícias disponíveis. O site foi desenvolvido com Tailwind CSS e PHP, e os dados são obtidos do banco de dados fornecido.
Personalização e Desenvolvimento Adicional

Este projeto pode ser personalizado e expandido de várias maneiras. Aqui estão algumas sugestões:

Estilizar o site de acordo com suas preferências, adicionando suas próprias classes CSS personalizadas ou modificando as classes existentes do Tailwind CSS.
Adicionar mais páginas, como páginas individuais de notícias ou páginas de categorias.
Implementar recursos adicionais, como pesquisa de notícias, sistema de comentários, formulários de envio de notícias, etc.
Melhorar a responsividade do site para diferentes dispositivos.
Otimizar consultas ao banco de dados e implementar técnicas de armazenamento em cache.
Sinta-se à vontade para explorar e expandir este projeto de acordo com suas habilidades e criatividade.

