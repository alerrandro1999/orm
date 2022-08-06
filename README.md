# Seja bem-vindo
> Esse projeto é para aprimorar meus conhecimentos, estou contruindo um ORM (Object  
> Relational Mapper) para manipular os dados de banco de dados. Estou aplicando métodos como  Clean Code, Solid, Design Patterns
>
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
TABLE=sua tabela
```

## Utilizando
Primeiro importamos o **autoload**

A classe LoadVar vai carregar as variaveis de ambiente do **.env**

A class Select e a classe responsável para instacia do ORM

Ainda estamos limitados de trabalhar com uma tabela por vez, ela e passada nas variaveis de ambiente

O método **selectTable** e responsável por um **SELECT * FROM**, os dados são trazidos em forma de **array** para manipulação da melhor forma que o usuario desejar.

O método **selectById** e responsável por um **SELECT * FROM WHERE id = ?**, que traz dados unicos referentes ao id, os dados são trazidos em forma de **array** para manipulação da melhor forma que o usuario desejar.

O método **delete** e responsável por um **DELETE FROM WHERE id = ?**, que deletar do banco os dados referentes do id que foi passado no parâmetro.

```php
require __DIR__ . '/vendor/autoload.php';

use Alerr\Orm\Environment\LoadVar;
use Alerr\Orm\OrmClass\Delete\DeleteById;
use Alerr\Orm\OrmClass\Select\Select;
use Alerr\Orm\OrmClass\SelectOnly\SelectOnlyById;

LoadVar::load(__DIR__);

$select = new Select;

$unique = new SelectOnlyById;

$delete = new DeleteById;


$dados = $select->selectTable();

$unique = $unique->selectById(4);

$delete->delete(5);

echo '<pre>';
print_r($dados);
print_r($unique);
echo '</pre>';


```
