<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre
CRUD onde  será necessário armazenar o nome do cliente, número de documentos que ele enviou, data do envio do último documento, aplicar um status aleatório para entrega e para os casos que o documento estiver com status de aprovado com sucesso ou documento irregular mostrar a data atual, para os demais status demonstrar as opções (aprovar ou reprovar).
Para acessar basta acessar a rota “/cliente” e para cadastro “/cliente/create”

API RESTFULL para gerenciar notícias
Os endpoints estão nas rotas

- GET /api/noticias/ - acessa todas as notícias
- GET /api/noticias/{id} - retorna as notícias pelo id
- POST /api/noticias - cadastra a notícia enviando um titulo e uma data de criação
- PUT  /api/noticias/{id}  - edita a notícia com o id selecionado
- DELETE  /api/noticias/{id}  - deleta a notícia com o id selecionado

Form usando Vee.Validate
Para acessar basta acessar a rota “/validar” e para cadastro “/validar/create”
