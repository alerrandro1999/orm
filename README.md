# Seja bem-vindo
> Esse projeto é para aprimorar meus conhecimentos, estou contruindo um ORM (Object Relational Mapper) para manipular os dados de banco de dados. Estou aplicando métodos como Clean Code, Solid, Design Patterns

> Contruibua com esse repositório, code review, pull, issues.

## Rquisitos 
- PHP ^7.3
- Composer
- MySQL


## Instalação
Após extrair, basta você entrar na pasta raiz do projeto e rodar no seu terminal o comando:
**composer install** 

Lembre-se de parametrizar seu banco de dados no arquivo **.env-examples** e renomear para **.env**

```
LOCALHOST=local do seu banco
DBNAME=nome do banco
USER=usuario 
PASSWORD=senha
```

## Utilizando
Primeiro importamos o **autoload**

A classe LoadVar vai carregar as variaveis de ambiente do **.env**

A class Select e a classe responsável para instacia do ORM

O método **selectTable** e responsável por um **SELECT * FROM**, na tabela que e passada como parâmetro, os dados são trazidos em forma de **array** para manipulação da melhor forma que o usuario desejar.

```php
require __DIR__ . '/vendor/autoload.php';

use Alerr\Orm\Environment\LoadVar;

use Alerr\Orm\OrmClass\Select\Select;

LoadVar::load(__DIR__);

$select = new Select;

$dados = $select->selectTable('persistings');

echo '<pre>';
print_r($dados);
echo '</pre>';

```

Até o momento apenas o **select** está em funcionamento.

Estarei melhorando esse projeto conforme o tempo, acrescentando mais métodos e melhorando a lógica.