# PHP + PostgreSQL com PDO

Projeto simples em PHP demonstrando como conectar uma aplicação a um banco de dados PostgreSQL usando PDO.

## Tecnologias

- PHP
- PostgreSQL
- PDO (`pdo_pgsql`)

## Arquivos do projeto

- `conexao.php` — configura a conexão com o banco de dados.
- `conexao_exemplo.php` — exemplo de configuração da conexão.
- `teste.php` — arquivo simples para testar se a conexão foi realizada.
- `.gitignore` — evita o envio de arquivos locais e sensíveis.

## Pré-requisitos

Antes de executar, tenha instalado:

- PHP
- PostgreSQL
- Extensão PDO para PostgreSQL habilitada no PHP (`pdo_pgsql`)

## Configuração

Use o arquivo `conexao_exemplo.php` como referência e configure os dados do seu banco no arquivo `conexao.php`.

Exemplo de dados que podem ser ajustados:

```php
$host = "localhost";
$porta = "5432";
$banco = "seu_banco";
$usuario = "seu_usuario";
$senha = "sua_senha";
```

> Não envie senhas reais ou arquivos de configuração privados para o GitHub.

## Como testar

No terminal, dentro da pasta do projeto, execute:

```bash
php teste.php
```

Se tudo estiver configurado corretamente, será exibida uma mensagem confirmando a conexão com o PostgreSQL.

## Autor

Paulo Ramos
