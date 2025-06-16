# Sistema Simples de Cadastro e Login com PHP e MySQLi

Este é um sistema básico de cadastro e login desenvolvido em PHP com conexão a um banco de dados MySQL/MariaDB usando MySQLi.

## Pré-requisitos

Para que este sistema funcione em seu computador, você precisará ter um ambiente de desenvolvimento web com:

* **Servidor Web:** Apache (ou Nginx)
* **PHP:** Versão 7.x ou superior (com a extensão `mysqli` ativada)
* **Banco de Dados:** MySQL ou MariaDB

Exemplos de pacotes que fornecem isso:
* **XAMPP** (Windows, macOS, Linux)
* **WAMP Server** (Windows)
* **MAMP** (macOS)
* **UniServer Z** (Windows) - (Este projeto foi desenvolvido utilizando o UniServer Z)

## Configuração do Banco de Dados

1.  Crie um banco de dados chamado `bdteste` em seu servidor MySQL/MariaDB.
    ```sql
    CREATE DATABASE bdteste;
    USE bdteste;
    ```
2.  Crie a tabela `tabela1` (certifique-se de que a coluna `senha` possa armazenar 128 caracteres):
    ```sql
    CREATE TABLE tabela1 (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(100) NOT NULL UNIQUE,
        senha VARCHAR(128) NOT NULL
    );
    ```
    *(Ajuste os tipos e tamanhos de acordo com sua necessidade e o que você usa no `bind_param`)*

## Configuração do Projeto

1.  Clone este repositório para o diretório `www` (ou `htdocs`) do seu servidor web local.
    ```bash
    git clone [https://github.com/SeuUsuario/NomeDoSeuRepositorio.git](https://github.com/SeuUsuario/NomeDoSeuRepositorio.git)
    cd NomeDoSeuRepositorio
    ```
2.  **Altere o arquivo de conexão com o banco de dados:**
    Na raiz do projeto (na mesma pasta onde está este `README.md`), altere o arquivo chamado `db_config.php` com as informações do seu banco de dados.


## Como Executar

1.  Certifique-se de que seu servidor web (Apache) e servidor de banco de dados (MySQL/MariaDB) estejam rodando.
2.  Abra seu navegador e navegue até:
    * `http://localhost/NomeDoSeuRepositorio/telacad.php` para se cadastrar.
    * `http://localhost/NomeDoSeuRepositorio/telalogin.php` para fazer login.
