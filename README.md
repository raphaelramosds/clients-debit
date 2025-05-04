## Dependências

- PHP
- Node.js
- Composer 

## Configurando o SQLite

Crie o arquivo database.sqlite na pasta database

Instalar extensão do sqlite3 para o PHP e o proprio sqlite3 para poder gerenciar as tabelas do banco

    sudo apt-get install php-sqlite3 sqlite3

## Executando

Gere a key

    php artisan key:generate

Execute as migrations

    php artisan migrate

Inicie o servidor

    composer run dev