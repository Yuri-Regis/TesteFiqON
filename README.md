# TesteFiqON
Terste realizado em Laravel para a FIQOn

LINK ATUAL: *LINK-LOCALHOST/api/*ROTA

Através da camada Resource, todos os links para o CRUD encontram-se com o mesmo padrão, alterando apenas as rotas: index, show, store, update e destroy; e o método desejável: POST, GET, PUT ou DEL

A API trabalha através do banco de dados *FIQON*; com as tabelas: lojas e produtos (sql disponível no github para importação)
ROTAS:
As rotas encontram-se disponíveis em Routes\api.php

Foi realizado também o cadastro de uma index para os os produtos, trazendo a data de criação dos mesmos -> /api/buscar-produto/{id}

CADASTRO

Para o cadastro, utilizando o método store, é feito as validações de mínimo e máximo e os campos requeridos; retornando o erro relacionado em português.
Utilizando o método POST, deve preencher os dados que deseja cadastrar (nome, email), utilizando a rota /api/loja
O mesmo é possível para os produtos, alterando apenas a rota para /api/produto
Ambos irão confirmar caso a inserção no banco de dados seja possível, ou retornaram o erro de acordo com qual validação foi quebrada.

BUSCA
Para realizar a busca de uma loja específica, deve-se utilizar a rota SHOW através do método GET (/api/loja/{id})
Ao realizar a busca, os produtos daquela loja também serão listados.
O mesmo processo de busca funciona para os produtos, alterando apenas a url


Para testes foi utilizado o software do INSOMNIA. 
