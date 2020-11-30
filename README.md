## API usando LARAVEL
API rest usando laravel de cadastro de funcionários de uma empresa.

## Como instalar

Clone o projeto em sua máquina local.

Crie uma tabela no seu banco de dados MySQL com o nome `api_laravel` ou qualquer outro nome que desejar.

Configure o arquivo `.env` com os dados de conexão do seu banco de dados MySQL local.

Instale as dependencias do projeto com o comando `composer install`

Rode o comando `php artisan migrate` para criar as tabelas iniciais no seu bd.

Rode o comando php artisan `db:seed --class=CompanySeeder` para popular a tabela companies.

Rode o comando php artisan `db:seed --class=Employee` para popular a tabela employees.

Sirva sua API com o comando `php artisan serve`

Pronto, você está pronto usar a API
