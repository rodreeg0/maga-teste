# Magazord - Teste de estágio

## Requisitos

Antes de começar, você precisará ter os seguintes softwares instalados em sua máquina:

- [XAMPP](https://www.apachefriends.org/download.html) ou outro servidor web compatível com PHP.
- [Composer](https://getcomposer.org/download/) para gerenciamento de dependências.

## Instalação

Para instalar o XAMPP, siga as instruções no site oficial e escolha a versão apropriada para o seu sistema operacional. Depois de instalar o XAMPP, inicie o servidor Apache e o servidor MySQL.

Em seguida, siga estas etapas para instalar e executar o Meu Incrível Projeto PHP:

1. Baixe ou clone este repositório em seu computador.

2. Abra o terminal e navegue até o diretório do projeto.

3. Execute o comando `composer install` para instalar todas as dependências do projeto.

4. Copie a pasta do projeto para a pasta "htdocs" do seu servidor web local. A pasta "htdocs" geralmente está localizada dentro do diretório do XAMPP.

5. Abra um navegador da web e digite o endereço `http://localhost/maga-teste/src` para visualizar o projeto em seu servidor local.

 #### 6. Observação: O código cria o banco de dados e suas respectivas tabelas automaticamente, mas é necessário que o usuário tenha um servidor MySQL configurado e uma conexão estabelecida com os mesmos parametros do arquivo `db_conn_parameters.php` localizado em `src/Database/`.

 ```
 usuário: root
 senha: ''
```